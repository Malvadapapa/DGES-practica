<?php
/*
 * Copyright 2012 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once realpath( dirname( __FILE__ ) . '/../../../autoload.php' );

/**
 * Credentials object used for OAuth 2.0 Signed JWT assertion grants.
 */
class GoogleGAL_Auth_AssertionCredentials
{
  const MAX_TOKEN_LIFETIME_SECS = 3600;

  public $serviceAccountName;
  public $scopes;
  public $privateKey;
  public $privateKeyPassword;
  public $assertionType;
  public $sub;
  public $signerClass = 'GoogleGAL_Signer_P12';
  /**
   * @deprecated
   * @link http://tools.ietf.org/html/draft-ietf-oauth-json-web-token-06
   */
  public $prn;
  private $useCache;

  /**
   * @param $serviceAccountName
   * @param $scopes array List of scopes
   * @param $privateKey
   * @param string $privateKeyPassword
   * @param string $assertionType
   * @param bool|string $sub The email address of the user for which the
   *              application is requesting delegated access.
   * @param bool useCache Whether to generate a cache key and allow
   *              automatic caching of the generated token.
   */
  public function __construct(
      $serviceAccountName,
      $scopes,
      $privateKey,
      $privateKeyPassword = 'notasecret',
      $assertionType = 'http://oauth.net/grant_type/jwt/1.0/bearer',
      $sub = false,
      $useCache = true
  ) {
    $this->serviceAccountName = $serviceAccountName;
    $this->scopes = is_string($scopes) ? $scopes : implode(' ', $scopes);
    $this->privateKey = $privateKey;
    $this->privateKeyPassword = $privateKeyPassword;
    $this->assertionType = $assertionType;
    $this->sub = $sub;
    $this->prn = $sub;
    $this->useCache = $useCache;
  }

  public function setSignerClass( $signerClass ) {
    $this->signerClass = $signerClass;
  }

  /**
   * Generate a unique key to represent this credential.
   * @return string
   */
  public function getCacheKey()
  {
    if (!$this->useCache) {
      return false;
    }
    $h = $this->sub;
    $h .= $this->assertionType;
    $h .= $this->privateKey;
    $h .= $this->scopes;
    $h .= $this->serviceAccountName;
    return md5($h);
  }

  public function generateAssertion()
  {
    $now = time();

    $jwtParams = array(
          'aud' => GoogleGAL_Auth_OAuth2::OAUTH2_TOKEN_URI,
          'scope' => $this->scopes,
          'iat' => $now,
          'exp' => $now + self::MAX_TOKEN_LIFETIME_SECS,
          'iss' => $this->serviceAccountName,
    );

    if ($this->sub !== false) {
      $jwtParams['sub'] = $this->sub;
    } else if ($this->prn !== false) {
      $jwtParams['prn'] = $this->prn;
    }

    return $this->makeSignedJwt($jwtParams);
  }

  /**
   * Creates a signed JWT.
   * @param array $payload
   * @return string The signed JWT.
   */
  private function makeSignedJwt($payload)
  {
    $header = array('typ' => 'JWT', 'alg' => 'RS256');

    $payload = json_encode($payload);
    // Handle some overzealous escaping in PHP json that seemed to cause some errors
    // with claimsets.
    $payload = str_replace('\/', '/', $payload);

    $segments = array(
      GoogleGAL_Utils::urlSafeB64Encode(json_encode($header)),
      GoogleGAL_Utils::urlSafeB64Encode($payload)
    );

    $signingInput = implode( '.', $segments );
    $signer       = new $this->signerClass( $this->privateKey, $this->privateKeyPassword );
    $signature    = $signer->sign( $signingInput );
    $segments[]   = GoogleGAL_Utils::urlSafeB64Encode( $signature );

    return implode(".", $segments);
  }
}
