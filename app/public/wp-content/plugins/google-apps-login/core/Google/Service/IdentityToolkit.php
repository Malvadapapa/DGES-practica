<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for IdentityToolkit (v3).
 *
 * <p>
 * Help the third party sites to implement federated login.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/identity-toolkit/v3/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_IdentityToolkit extends GoogleGAL_Service
{


  public $relyingparty;
  

  /**
   * Constructs the internal representation of the IdentityToolkit service.
   *
   * @param GoogleGAL_Client $client
   */
  public function __construct(GoogleGAL_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'identitytoolkit/v3/relyingparty/';
    $this->version = 'v3';
    $this->serviceName = 'identitytoolkit';

    $this->relyingparty = new GoogleGAL_Service_IdentityToolkit_Relyingparty_Resource(
        $this,
        $this->serviceName,
        'relyingparty',
        array(
          'methods' => array(
            'createAuthUri' => array(
              'path' => 'createAuthUri',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'deleteAccount' => array(
              'path' => 'deleteAccount',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'downloadAccount' => array(
              'path' => 'downloadAccount',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'getAccountInfo' => array(
              'path' => 'getAccountInfo',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'getOobConfirmationCode' => array(
              'path' => 'getOobConfirmationCode',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'getProjectConfig' => array(
              'path' => 'getProjectConfig',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'getPublicKeys' => array(
              'path' => 'publicKeys',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'getRecaptchaParam' => array(
              'path' => 'getRecaptchaParam',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'resetPassword' => array(
              'path' => 'resetPassword',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'setAccountInfo' => array(
              'path' => 'setAccountInfo',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'signOutUser' => array(
              'path' => 'signOutUser',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'uploadAccount' => array(
              'path' => 'uploadAccount',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'verifyAssertion' => array(
              'path' => 'verifyAssertion',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'verifyCustomToken' => array(
              'path' => 'verifyCustomToken',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'verifyPassword' => array(
              'path' => 'verifyPassword',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}


/**
 * The "relyingparty" collection of methods.
 * Typical usage is:
 *  <code>
 *   $identitytoolkitService = new GoogleGAL_Service_IdentityToolkit(...);
 *   $relyingparty = $identitytoolkitService->relyingparty;
 *  </code>
 */
class GoogleGAL_Service_IdentityToolkit_Relyingparty_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Creates the URI used by the IdP to authenticate the user.
   * (relyingparty.createAuthUri)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_CreateAuthUriResponse
   */
  public function createAuthUri(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createAuthUri', array($params), "GoogleGAL_Service_IdentityToolkit_CreateAuthUriResponse");
  }

  /**
   * Delete user account. (relyingparty.deleteAccount)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_DeleteAccountResponse
   */
  public function deleteAccount(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('deleteAccount', array($params), "GoogleGAL_Service_IdentityToolkit_DeleteAccountResponse");
  }

  /**
   * Batch download user accounts. (relyingparty.downloadAccount)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_DownloadAccountResponse
   */
  public function downloadAccount(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('downloadAccount', array($params), "GoogleGAL_Service_IdentityToolkit_DownloadAccountResponse");
  }

  /**
   * Returns the account info. (relyingparty.getAccountInfo)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_GetAccountInfoResponse
   */
  public function getAccountInfo(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getAccountInfo', array($params), "GoogleGAL_Service_IdentityToolkit_GetAccountInfoResponse");
  }

  /**
   * Get a code for user action confirmation.
   * (relyingparty.getOobConfirmationCode)
   *
   * @param GoogleGAL_Relyingparty $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_GetOobConfirmationCodeResponse
   */
  public function getOobConfirmationCode(GoogleGAL_Service_IdentityToolkit_Relyingparty $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getOobConfirmationCode', array($params), "GoogleGAL_Service_IdentityToolkit_GetOobConfirmationCodeResponse");
  }

  /**
   * Get project configuration. (relyingparty.getProjectConfig)
   *
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetProjectConfigResponse
   */
  public function getProjectConfig($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getProjectConfig', array($params), "GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetProjectConfigResponse");
  }

  /**
   * Get token signing public key. (relyingparty.getPublicKeys)
   *
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetPublicKeysResponse
   */
  public function getPublicKeys($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getPublicKeys', array($params), "GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetPublicKeysResponse");
  }

  /**
   * Get recaptcha secure param. (relyingparty.getRecaptchaParam)
   *
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_GetRecaptchaParamResponse
   */
  public function getRecaptchaParam($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getRecaptchaParam', array($params), "GoogleGAL_Service_IdentityToolkit_GetRecaptchaParamResponse");
  }

  /**
   * Reset password for a user. (relyingparty.resetPassword)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartyResetPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_ResetPasswordResponse
   */
  public function resetPassword(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyResetPasswordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resetPassword', array($params), "GoogleGAL_Service_IdentityToolkit_ResetPasswordResponse");
  }

  /**
   * Set account info for a user. (relyingparty.setAccountInfo)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_SetAccountInfoResponse
   */
  public function setAccountInfo(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setAccountInfo', array($params), "GoogleGAL_Service_IdentityToolkit_SetAccountInfoResponse");
  }

  /**
   * Sign out user. (relyingparty.signOutUser)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartySignOutUserRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartySignOutUserResponse
   */
  public function signOutUser(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartySignOutUserRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('signOutUser', array($params), "GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartySignOutUserResponse");
  }

  /**
   * Batch upload existing user accounts. (relyingparty.uploadAccount)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartyUploadAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_UploadAccountResponse
   */
  public function uploadAccount(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyUploadAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('uploadAccount', array($params), "GoogleGAL_Service_IdentityToolkit_UploadAccountResponse");
  }

  /**
   * Verifies the assertion returned by the IdP. (relyingparty.verifyAssertion)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_VerifyAssertionResponse
   */
  public function verifyAssertion(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyAssertion', array($params), "GoogleGAL_Service_IdentityToolkit_VerifyAssertionResponse");
  }

  /**
   * Verifies the developer asserted ID token. (relyingparty.verifyCustomToken)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartyVerifyCustomTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_VerifyCustomTokenResponse
   */
  public function verifyCustomToken(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyCustomTokenRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyCustomToken', array($params), "GoogleGAL_Service_IdentityToolkit_VerifyCustomTokenResponse");
  }

  /**
   * Verifies the user entered password. (relyingparty.verifyPassword)
   *
   * @param GoogleGAL_IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_IdentityToolkit_VerifyPasswordResponse
   */
  public function verifyPassword(GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyPassword', array($params), "GoogleGAL_Service_IdentityToolkit_VerifyPasswordResponse");
  }
}




class GoogleGAL_Service_IdentityToolkit_CreateAuthUriResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'allProviders';
  protected $internal_gapi_mappings = array(
  );
  public $allProviders;
  public $authUri;
  public $captchaRequired;
  public $forExistingProvider;
  public $kind;
  public $providerId;
  public $registered;
  public $sessionId;


  public function setAllProviders($allProviders)
  {
    $this->allProviders = $allProviders;
  }
  public function getAllProviders()
  {
    return $this->allProviders;
  }
  public function setAuthUri($authUri)
  {
    $this->authUri = $authUri;
  }
  public function getAuthUri()
  {
    return $this->authUri;
  }
  public function setCaptchaRequired($captchaRequired)
  {
    $this->captchaRequired = $captchaRequired;
  }
  public function getCaptchaRequired()
  {
    return $this->captchaRequired;
  }
  public function setForExistingProvider($forExistingProvider)
  {
    $this->forExistingProvider = $forExistingProvider;
  }
  public function getForExistingProvider()
  {
    return $this->forExistingProvider;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  public function getProviderId()
  {
    return $this->providerId;
  }
  public function setRegistered($registered)
  {
    $this->registered = $registered;
  }
  public function getRegistered()
  {
    return $this->registered;
  }
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  public function getSessionId()
  {
    return $this->sessionId;
  }
}

class GoogleGAL_Service_IdentityToolkit_DeleteAccountResponse extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class GoogleGAL_Service_IdentityToolkit_DownloadAccountResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'users';
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $nextPageToken;
  protected $usersType = 'GoogleGAL_Service_IdentityToolkit_UserInfo';
  protected $usersDataType = 'array';


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setUsers($users)
  {
    $this->users = $users;
  }
  public function getUsers()
  {
    return $this->users;
  }
}

class GoogleGAL_Service_IdentityToolkit_GetAccountInfoResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'users';
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  protected $usersType = 'GoogleGAL_Service_IdentityToolkit_UserInfo';
  protected $usersDataType = 'array';


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setUsers($users)
  {
    $this->users = $users;
  }
  public function getUsers()
  {
    return $this->users;
  }
}

class GoogleGAL_Service_IdentityToolkit_GetOobConfirmationCodeResponse extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $email;
  public $kind;
  public $oobCode;


  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }
  public function getOobCode()
  {
    return $this->oobCode;
  }
}

class GoogleGAL_Service_IdentityToolkit_GetRecaptchaParamResponse extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $recaptchaSiteKey;
  public $recaptchaStoken;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRecaptchaSiteKey($recaptchaSiteKey)
  {
    $this->recaptchaSiteKey = $recaptchaSiteKey;
  }
  public function getRecaptchaSiteKey()
  {
    return $this->recaptchaSiteKey;
  }
  public function setRecaptchaStoken($recaptchaStoken)
  {
    $this->recaptchaStoken = $recaptchaStoken;
  }
  public function getRecaptchaStoken()
  {
    return $this->recaptchaStoken;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyCreateAuthUriRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $appId;
  public $clientId;
  public $context;
  public $continueUri;
  public $identifier;
  public $oauthConsumerKey;
  public $oauthScope;
  public $openidRealm;
  public $otaApp;
  public $providerId;


  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  public function getAppId()
  {
    return $this->appId;
  }
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  public function getClientId()
  {
    return $this->clientId;
  }
  public function setContext($context)
  {
    $this->context = $context;
  }
  public function getContext()
  {
    return $this->context;
  }
  public function setContinueUri($continueUri)
  {
    $this->continueUri = $continueUri;
  }
  public function getContinueUri()
  {
    return $this->continueUri;
  }
  public function setIdentifier($identifier)
  {
    $this->identifier = $identifier;
  }
  public function getIdentifier()
  {
    return $this->identifier;
  }
  public function setOauthConsumerKey($oauthConsumerKey)
  {
    $this->oauthConsumerKey = $oauthConsumerKey;
  }
  public function getOauthConsumerKey()
  {
    return $this->oauthConsumerKey;
  }
  public function setOauthScope($oauthScope)
  {
    $this->oauthScope = $oauthScope;
  }
  public function getOauthScope()
  {
    return $this->oauthScope;
  }
  public function setOpenidRealm($openidRealm)
  {
    $this->openidRealm = $openidRealm;
  }
  public function getOpenidRealm()
  {
    return $this->openidRealm;
  }
  public function setOtaApp($otaApp)
  {
    $this->otaApp = $otaApp;
  }
  public function getOtaApp()
  {
    return $this->otaApp;
  }
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  public function getProviderId()
  {
    return $this->providerId;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDeleteAccountRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $delegatedProjectNumber;
  public $localId;


  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  public function getLocalId()
  {
    return $this->localId;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDownloadAccountRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $delegatedProjectNumber;
  public $maxResults;
  public $nextPageToken;


  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }
  public function getMaxResults()
  {
    return $this->maxResults;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetAccountInfoRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'localId';
  protected $internal_gapi_mappings = array(
  );
  public $email;
  public $idToken;
  public $localId;


  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  public function getIdToken()
  {
    return $this->idToken;
  }
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  public function getLocalId()
  {
    return $this->localId;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetProjectConfigResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'idpConfig';
  protected $internal_gapi_mappings = array(
  );
  public $allowPasswordUser;
  public $apiKey;
  protected $idpConfigType = 'GoogleGAL_Service_IdentityToolkit_IdpConfig';
  protected $idpConfigDataType = 'array';
  public $projectId;


  public function setAllowPasswordUser($allowPasswordUser)
  {
    $this->allowPasswordUser = $allowPasswordUser;
  }
  public function getAllowPasswordUser()
  {
    return $this->allowPasswordUser;
  }
  public function setApiKey($apiKey)
  {
    $this->apiKey = $apiKey;
  }
  public function getApiKey()
  {
    return $this->apiKey;
  }
  public function setIdpConfig($idpConfig)
  {
    $this->idpConfig = $idpConfig;
  }
  public function getIdpConfig()
  {
    return $this->idpConfig;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyResetPasswordRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $email;
  public $newPassword;
  public $oldPassword;
  public $oobCode;


  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setNewPassword($newPassword)
  {
    $this->newPassword = $newPassword;
  }
  public function getNewPassword()
  {
    return $this->newPassword;
  }
  public function setOldPassword($oldPassword)
  {
    $this->oldPassword = $oldPassword;
  }
  public function getOldPassword()
  {
    return $this->oldPassword;
  }
  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }
  public function getOobCode()
  {
    return $this->oobCode;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartySetAccountInfoRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'provider';
  protected $internal_gapi_mappings = array(
  );
  public $captchaChallenge;
  public $captchaResponse;
  public $delegatedProjectNumber;
  public $disableUser;
  public $displayName;
  public $email;
  public $emailVerified;
  public $idToken;
  public $instanceId;
  public $localId;
  public $oobCode;
  public $password;
  public $photoUrl;
  public $provider;
  public $upgradeToFederatedLogin;
  public $validSince;


  public function setCaptchaChallenge($captchaChallenge)
  {
    $this->captchaChallenge = $captchaChallenge;
  }
  public function getCaptchaChallenge()
  {
    return $this->captchaChallenge;
  }
  public function setCaptchaResponse($captchaResponse)
  {
    $this->captchaResponse = $captchaResponse;
  }
  public function getCaptchaResponse()
  {
    return $this->captchaResponse;
  }
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  public function setDisableUser($disableUser)
  {
    $this->disableUser = $disableUser;
  }
  public function getDisableUser()
  {
    return $this->disableUser;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }
  public function getEmailVerified()
  {
    return $this->emailVerified;
  }
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  public function getIdToken()
  {
    return $this->idToken;
  }
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  public function getLocalId()
  {
    return $this->localId;
  }
  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }
  public function getOobCode()
  {
    return $this->oobCode;
  }
  public function setPassword($password)
  {
    $this->password = $password;
  }
  public function getPassword()
  {
    return $this->password;
  }
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  public function getProvider()
  {
    return $this->provider;
  }
  public function setUpgradeToFederatedLogin($upgradeToFederatedLogin)
  {
    $this->upgradeToFederatedLogin = $upgradeToFederatedLogin;
  }
  public function getUpgradeToFederatedLogin()
  {
    return $this->upgradeToFederatedLogin;
  }
  public function setValidSince($validSince)
  {
    $this->validSince = $validSince;
  }
  public function getValidSince()
  {
    return $this->validSince;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartySignOutUserRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $instanceId;
  public $localId;


  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  public function getLocalId()
  {
    return $this->localId;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartySignOutUserResponse extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $localId;


  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  public function getLocalId()
  {
    return $this->localId;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyUploadAccountRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'users';
  protected $internal_gapi_mappings = array(
  );
  public $delegatedProjectNumber;
  public $hashAlgorithm;
  public $memoryCost;
  public $rounds;
  public $saltSeparator;
  public $signerKey;
  protected $usersType = 'GoogleGAL_Service_IdentityToolkit_UserInfo';
  protected $usersDataType = 'array';


  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  public function setHashAlgorithm($hashAlgorithm)
  {
    $this->hashAlgorithm = $hashAlgorithm;
  }
  public function getHashAlgorithm()
  {
    return $this->hashAlgorithm;
  }
  public function setMemoryCost($memoryCost)
  {
    $this->memoryCost = $memoryCost;
  }
  public function getMemoryCost()
  {
    return $this->memoryCost;
  }
  public function setRounds($rounds)
  {
    $this->rounds = $rounds;
  }
  public function getRounds()
  {
    return $this->rounds;
  }
  public function setSaltSeparator($saltSeparator)
  {
    $this->saltSeparator = $saltSeparator;
  }
  public function getSaltSeparator()
  {
    return $this->saltSeparator;
  }
  public function setSignerKey($signerKey)
  {
    $this->signerKey = $signerKey;
  }
  public function getSignerKey()
  {
    return $this->signerKey;
  }
  public function setUsers($users)
  {
    $this->users = $users;
  }
  public function getUsers()
  {
    return $this->users;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyAssertionRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $delegatedProjectNumber;
  public $instanceId;
  public $pendingIdToken;
  public $postBody;
  public $requestUri;
  public $returnRefreshToken;
  public $sessionId;


  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  public function setPendingIdToken($pendingIdToken)
  {
    $this->pendingIdToken = $pendingIdToken;
  }
  public function getPendingIdToken()
  {
    return $this->pendingIdToken;
  }
  public function setPostBody($postBody)
  {
    $this->postBody = $postBody;
  }
  public function getPostBody()
  {
    return $this->postBody;
  }
  public function setRequestUri($requestUri)
  {
    $this->requestUri = $requestUri;
  }
  public function getRequestUri()
  {
    return $this->requestUri;
  }
  public function setReturnRefreshToken($returnRefreshToken)
  {
    $this->returnRefreshToken = $returnRefreshToken;
  }
  public function getReturnRefreshToken()
  {
    return $this->returnRefreshToken;
  }
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  public function getSessionId()
  {
    return $this->sessionId;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyCustomTokenRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $instanceId;
  public $token;


  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  public function setToken($token)
  {
    $this->token = $token;
  }
  public function getToken()
  {
    return $this->token;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyPasswordRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $captchaChallenge;
  public $captchaResponse;
  public $delegatedProjectNumber;
  public $email;
  public $instanceId;
  public $password;
  public $pendingIdToken;


  public function setCaptchaChallenge($captchaChallenge)
  {
    $this->captchaChallenge = $captchaChallenge;
  }
  public function getCaptchaChallenge()
  {
    return $this->captchaChallenge;
  }
  public function setCaptchaResponse($captchaResponse)
  {
    $this->captchaResponse = $captchaResponse;
  }
  public function getCaptchaResponse()
  {
    return $this->captchaResponse;
  }
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  public function setPassword($password)
  {
    $this->password = $password;
  }
  public function getPassword()
  {
    return $this->password;
  }
  public function setPendingIdToken($pendingIdToken)
  {
    $this->pendingIdToken = $pendingIdToken;
  }
  public function getPendingIdToken()
  {
    return $this->pendingIdToken;
  }
}

class GoogleGAL_Service_IdentityToolkit_IdpConfig extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $clientId;
  public $enabled;
  public $experimentPercent;
  public $provider;


  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  public function getClientId()
  {
    return $this->clientId;
  }
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  public function getEnabled()
  {
    return $this->enabled;
  }
  public function setExperimentPercent($experimentPercent)
  {
    $this->experimentPercent = $experimentPercent;
  }
  public function getExperimentPercent()
  {
    return $this->experimentPercent;
  }
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  public function getProvider()
  {
    return $this->provider;
  }
}

class GoogleGAL_Service_IdentityToolkit_Relyingparty extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $captchaResp;
  public $challenge;
  public $email;
  public $idToken;
  public $kind;
  public $newEmail;
  public $requestType;
  public $userIp;


  public function setCaptchaResp($captchaResp)
  {
    $this->captchaResp = $captchaResp;
  }
  public function getCaptchaResp()
  {
    return $this->captchaResp;
  }
  public function setChallenge($challenge)
  {
    $this->challenge = $challenge;
  }
  public function getChallenge()
  {
    return $this->challenge;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  public function getIdToken()
  {
    return $this->idToken;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNewEmail($newEmail)
  {
    $this->newEmail = $newEmail;
  }
  public function getNewEmail()
  {
    return $this->newEmail;
  }
  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }
  public function getRequestType()
  {
    return $this->requestType;
  }
  public function setUserIp($userIp)
  {
    $this->userIp = $userIp;
  }
  public function getUserIp()
  {
    return $this->userIp;
  }
}

class GoogleGAL_Service_IdentityToolkit_ResetPasswordResponse extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $email;
  public $kind;


  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class GoogleGAL_Service_IdentityToolkit_SetAccountInfoResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'providerUserInfo';
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $email;
  public $idToken;
  public $kind;
  public $newEmail;
  public $photoUrl;
  protected $providerUserInfoType = 'GoogleGAL_Service_IdentityToolkit_SetAccountInfoResponseProviderUserInfo';
  protected $providerUserInfoDataType = 'array';


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  public function getIdToken()
  {
    return $this->idToken;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNewEmail($newEmail)
  {
    $this->newEmail = $newEmail;
  }
  public function getNewEmail()
  {
    return $this->newEmail;
  }
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  public function setProviderUserInfo($providerUserInfo)
  {
    $this->providerUserInfo = $providerUserInfo;
  }
  public function getProviderUserInfo()
  {
    return $this->providerUserInfo;
  }
}

class GoogleGAL_Service_IdentityToolkit_SetAccountInfoResponseProviderUserInfo extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $photoUrl;
  public $providerId;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  public function getProviderId()
  {
    return $this->providerId;
  }
}

class GoogleGAL_Service_IdentityToolkit_UploadAccountResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'error';
  protected $internal_gapi_mappings = array(
  );
  protected $errorType = 'GoogleGAL_Service_IdentityToolkit_UploadAccountResponseError';
  protected $errorDataType = 'array';
  public $kind;


  public function setError($error)
  {
    $this->error = $error;
  }
  public function getError()
  {
    return $this->error;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class GoogleGAL_Service_IdentityToolkit_UploadAccountResponseError extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $index;
  public $message;


  public function setIndex($index)
  {
    $this->index = $index;
  }
  public function getIndex()
  {
    return $this->index;
  }
  public function setMessage($message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class GoogleGAL_Service_IdentityToolkit_UserInfo extends GoogleGAL_Collection
{
  protected $collection_key = 'providerUserInfo';
  protected $internal_gapi_mappings = array(
  );
  public $disabled;
  public $displayName;
  public $email;
  public $emailVerified;
  public $localId;
  public $passwordHash;
  public $passwordUpdatedAt;
  public $photoUrl;
  protected $providerUserInfoType = 'GoogleGAL_Service_IdentityToolkit_UserInfoProviderUserInfo';
  protected $providerUserInfoDataType = 'array';
  public $salt;
  public $validSince;
  public $version;


  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  public function getDisabled()
  {
    return $this->disabled;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }
  public function getEmailVerified()
  {
    return $this->emailVerified;
  }
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  public function getLocalId()
  {
    return $this->localId;
  }
  public function setPasswordHash($passwordHash)
  {
    $this->passwordHash = $passwordHash;
  }
  public function getPasswordHash()
  {
    return $this->passwordHash;
  }
  public function setPasswordUpdatedAt($passwordUpdatedAt)
  {
    $this->passwordUpdatedAt = $passwordUpdatedAt;
  }
  public function getPasswordUpdatedAt()
  {
    return $this->passwordUpdatedAt;
  }
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  public function setProviderUserInfo($providerUserInfo)
  {
    $this->providerUserInfo = $providerUserInfo;
  }
  public function getProviderUserInfo()
  {
    return $this->providerUserInfo;
  }
  public function setSalt($salt)
  {
    $this->salt = $salt;
  }
  public function getSalt()
  {
    return $this->salt;
  }
  public function setValidSince($validSince)
  {
    $this->validSince = $validSince;
  }
  public function getValidSince()
  {
    return $this->validSince;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class GoogleGAL_Service_IdentityToolkit_UserInfoProviderUserInfo extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $email;
  public $federatedId;
  public $photoUrl;
  public $providerId;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setFederatedId($federatedId)
  {
    $this->federatedId = $federatedId;
  }
  public function getFederatedId()
  {
    return $this->federatedId;
  }
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  public function getProviderId()
  {
    return $this->providerId;
  }
}

class GoogleGAL_Service_IdentityToolkit_VerifyAssertionResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'verifiedProvider';
  protected $internal_gapi_mappings = array(
  );
  public $action;
  public $appInstallationUrl;
  public $appScheme;
  public $context;
  public $dateOfBirth;
  public $displayName;
  public $email;
  public $emailRecycled;
  public $emailVerified;
  public $federatedId;
  public $firstName;
  public $fullName;
  public $idToken;
  public $inputEmail;
  public $kind;
  public $language;
  public $lastName;
  public $localId;
  public $needConfirmation;
  public $needEmail;
  public $nickName;
  public $oauthAccessToken;
  public $oauthAuthorizationCode;
  public $oauthExpireIn;
  public $oauthRequestToken;
  public $oauthScope;
  public $originalEmail;
  public $photoUrl;
  public $providerId;
  public $timeZone;
  public $verifiedProvider;


  public function setAction($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function setAppInstallationUrl($appInstallationUrl)
  {
    $this->appInstallationUrl = $appInstallationUrl;
  }
  public function getAppInstallationUrl()
  {
    return $this->appInstallationUrl;
  }
  public function setAppScheme($appScheme)
  {
    $this->appScheme = $appScheme;
  }
  public function getAppScheme()
  {
    return $this->appScheme;
  }
  public function setContext($context)
  {
    $this->context = $context;
  }
  public function getContext()
  {
    return $this->context;
  }
  public function setDateOfBirth($dateOfBirth)
  {
    $this->dateOfBirth = $dateOfBirth;
  }
  public function getDateOfBirth()
  {
    return $this->dateOfBirth;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setEmailRecycled($emailRecycled)
  {
    $this->emailRecycled = $emailRecycled;
  }
  public function getEmailRecycled()
  {
    return $this->emailRecycled;
  }
  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }
  public function getEmailVerified()
  {
    return $this->emailVerified;
  }
  public function setFederatedId($federatedId)
  {
    $this->federatedId = $federatedId;
  }
  public function getFederatedId()
  {
    return $this->federatedId;
  }
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }
  public function getFirstName()
  {
    return $this->firstName;
  }
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
  public function getFullName()
  {
    return $this->fullName;
  }
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  public function getIdToken()
  {
    return $this->idToken;
  }
  public function setInputEmail($inputEmail)
  {
    $this->inputEmail = $inputEmail;
  }
  public function getInputEmail()
  {
    return $this->inputEmail;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  public function getLanguage()
  {
    return $this->language;
  }
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
  public function getLastName()
  {
    return $this->lastName;
  }
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  public function getLocalId()
  {
    return $this->localId;
  }
  public function setNeedConfirmation($needConfirmation)
  {
    $this->needConfirmation = $needConfirmation;
  }
  public function getNeedConfirmation()
  {
    return $this->needConfirmation;
  }
  public function setNeedEmail($needEmail)
  {
    $this->needEmail = $needEmail;
  }
  public function getNeedEmail()
  {
    return $this->needEmail;
  }
  public function setNickName($nickName)
  {
    $this->nickName = $nickName;
  }
  public function getNickName()
  {
    return $this->nickName;
  }
  public function setOauthAccessToken($oauthAccessToken)
  {
    $this->oauthAccessToken = $oauthAccessToken;
  }
  public function getOauthAccessToken()
  {
    return $this->oauthAccessToken;
  }
  public function setOauthAuthorizationCode($oauthAuthorizationCode)
  {
    $this->oauthAuthorizationCode = $oauthAuthorizationCode;
  }
  public function getOauthAuthorizationCode()
  {
    return $this->oauthAuthorizationCode;
  }
  public function setOauthExpireIn($oauthExpireIn)
  {
    $this->oauthExpireIn = $oauthExpireIn;
  }
  public function getOauthExpireIn()
  {
    return $this->oauthExpireIn;
  }
  public function setOauthRequestToken($oauthRequestToken)
  {
    $this->oauthRequestToken = $oauthRequestToken;
  }
  public function getOauthRequestToken()
  {
    return $this->oauthRequestToken;
  }
  public function setOauthScope($oauthScope)
  {
    $this->oauthScope = $oauthScope;
  }
  public function getOauthScope()
  {
    return $this->oauthScope;
  }
  public function setOriginalEmail($originalEmail)
  {
    $this->originalEmail = $originalEmail;
  }
  public function getOriginalEmail()
  {
    return $this->originalEmail;
  }
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  public function getProviderId()
  {
    return $this->providerId;
  }
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  public function setVerifiedProvider($verifiedProvider)
  {
    $this->verifiedProvider = $verifiedProvider;
  }
  public function getVerifiedProvider()
  {
    return $this->verifiedProvider;
  }
}

class GoogleGAL_Service_IdentityToolkit_VerifyCustomTokenResponse extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $idToken;
  public $kind;


  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  public function getIdToken()
  {
    return $this->idToken;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class GoogleGAL_Service_IdentityToolkit_VerifyPasswordResponse extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $email;
  public $idToken;
  public $kind;
  public $localId;
  public $oauthAccessToken;
  public $oauthAuthorizationCode;
  public $oauthExpireIn;
  public $photoUrl;
  public $registered;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  public function getIdToken()
  {
    return $this->idToken;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  public function getLocalId()
  {
    return $this->localId;
  }
  public function setOauthAccessToken($oauthAccessToken)
  {
    $this->oauthAccessToken = $oauthAccessToken;
  }
  public function getOauthAccessToken()
  {
    return $this->oauthAccessToken;
  }
  public function setOauthAuthorizationCode($oauthAuthorizationCode)
  {
    $this->oauthAuthorizationCode = $oauthAuthorizationCode;
  }
  public function getOauthAuthorizationCode()
  {
    return $this->oauthAuthorizationCode;
  }
  public function setOauthExpireIn($oauthExpireIn)
  {
    $this->oauthExpireIn = $oauthExpireIn;
  }
  public function getOauthExpireIn()
  {
    return $this->oauthExpireIn;
  }
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  public function setRegistered($registered)
  {
    $this->registered = $registered;
  }
  public function getRegistered()
  {
    return $this->registered;
  }
}
