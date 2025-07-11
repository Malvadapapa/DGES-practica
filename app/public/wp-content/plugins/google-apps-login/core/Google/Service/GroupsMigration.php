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
 * Service definition for GroupsMigration (v1).
 *
 * <p>
 * Groups Migration Api.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/google-apps/groups-migration/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_GroupsMigration extends GoogleGAL_Service
{
  /** Manage messages in groups on your domain. */
  const APPS_GROUPS_MIGRATION =
      "https://www.googleapis.com/auth/apps.groups.migration";

  public $archive;
  

  /**
   * Constructs the internal representation of the GroupsMigration service.
   *
   * @param GoogleGAL_Client $client
   */
  public function __construct(GoogleGAL_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'groups/v1/groups/';
    $this->version = 'v1';
    $this->serviceName = 'groupsmigration';

    $this->archive = new GoogleGAL_Service_GroupsMigration_Archive_Resource(
        $this,
        $this->serviceName,
        'archive',
        array(
          'methods' => array(
            'insert' => array(
              'path' => '{groupId}/archive',
              'httpMethod' => 'POST',
              'parameters' => array(
                'groupId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "archive" collection of methods.
 * Typical usage is:
 *  <code>
 *   $groupsmigrationService = new GoogleGAL_Service_GroupsMigration(...);
 *   $archive = $groupsmigrationService->archive;
 *  </code>
 */
class GoogleGAL_Service_GroupsMigration_Archive_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Inserts a new mail into the archive of the Google group. (archive.insert)
   *
   * @param string $groupId The group ID
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_GroupsMigration_Groups
   */
  public function insert($groupId, $optParams = array())
  {
    $params = array('groupId' => $groupId);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "GoogleGAL_Service_GroupsMigration_Groups");
  }
}




class GoogleGAL_Service_GroupsMigration_Groups extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $responseCode;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setResponseCode($responseCode)
  {
    $this->responseCode = $responseCode;
  }
  public function getResponseCode()
  {
    return $this->responseCode;
  }
}
