<?php
/*
 * Copyright 2010 Google Inc.
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

class GoogleGAL_Service
{
  public $batchPath;
  public $rootUrl;
  public $version;
  public $serviceName;
  public $servicePath;
  public $availableScopes;
  public $resource;
  private $client;

  public function __construct(GoogleGAL_Client $client)
  {
    $this->client = $client;
  }

  /**
   * Return the associated GoogleGAL_Client class.
   * @return GoogleGAL_Client
   */
  public function getClient()
  {
    return $this->client;
  }

  /**
   * Create a new HTTP Batch handler for this service
   *
   * @return GoogleGAL_Http_Batch
   */
  public function createBatch()
  {
    return new GoogleGAL_Http_Batch(
        $this->client,
        false,
        $this->rootUrl,
        $this->batchPath
    );
  }
}
