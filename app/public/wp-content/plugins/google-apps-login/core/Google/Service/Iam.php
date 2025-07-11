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
 * Service definition for Iam (v1).
 *
 * <p>
 * Manages identity and access control for Google Cloud Platform resources,
 * including the creation of service accounts, which you can use to authenticate
 * to Google and make API calls.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/iam/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_Iam extends GoogleGAL_Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $projects_serviceAccounts;
  public $projects_serviceAccounts_keys;
  

  /**
   * Constructs the internal representation of the Iam service.
   *
   * @param GoogleGAL_Client $client
   */
  public function __construct(GoogleGAL_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://iam.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1';
    $this->serviceName = 'iam';

    $this->projects_serviceAccounts = new GoogleGAL_Service_Iam_ProjectsServiceAccounts_Resource(
        $this,
        $this->serviceName,
        'serviceAccounts',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/{+name}/serviceAccounts',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getIamPolicy' => array(
              'path' => 'v1/{+resource}:getIamPolicy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1/{+name}/serviceAccounts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'setIamPolicy' => array(
              'path' => 'v1/{+resource}:setIamPolicy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'signBlob' => array(
              'path' => 'v1/{+name}:signBlob',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'testIamPermissions' => array(
              'path' => 'v1/{+resource}:testIamPermissions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_serviceAccounts_keys = new GoogleGAL_Service_Iam_ProjectsServiceAccountsKeys_Resource(
        $this,
        $this->serviceName,
        'keys',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/{+name}/keys',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1/{+name}/keys',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'keyTypes' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $iamService = new GoogleGAL_Service_Iam(...);
 *   $projects = $iamService->projects;
 *  </code>
 */
class GoogleGAL_Service_Iam_Projects_Resource extends GoogleGAL_Service_Resource
{
}

/**
 * The "serviceAccounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $iamService = new GoogleGAL_Service_Iam(...);
 *   $serviceAccounts = $iamService->serviceAccounts;
 *  </code>
 */
class GoogleGAL_Service_Iam_ProjectsServiceAccounts_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Creates a service account and returns it. (serviceAccounts.create)
   *
   * @param string $name Required. The resource name of the project associated
   * with the service accounts, such as "projects/123"
   * @param GoogleGAL_CreateServiceAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_ServiceAccount
   */
  public function create($name, GoogleGAL_Service_Iam_CreateServiceAccountRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "GoogleGAL_Service_Iam_ServiceAccount");
  }

  /**
   * Deletes a service acount. (serviceAccounts.delete)
   *
   * @param string $name The resource name of the service account in the format
   * "projects/{project}/serviceAccounts/{account}". Using '-' as a wildcard for
   * the project, will infer the project from the account. The account value can
   * be the email address or the unique_id of the service account.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_Empty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "GoogleGAL_Service_Iam_Empty");
  }

  /**
   * Gets a ServiceAccount (serviceAccounts.get)
   *
   * @param string $name The resource name of the service account in the format
   * "projects/{project}/serviceAccounts/{account}". Using '-' as a wildcard for
   * the project, will infer the project from the account. The account value can
   * be the email address or the unique_id of the service account.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_ServiceAccount
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_Iam_ServiceAccount");
  }

  /**
   * Returns the IAM access control policy for specified IAM resource.
   * (serviceAccounts.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. `resource` is usually specified as a path, such as
   * `projectsprojectzoneszonedisksdisk*`. The format for the path specified in
   * this value is resource specific and is specified in the `getIamPolicy`
   * documentation.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "GoogleGAL_Service_Iam_Policy");
  }

  /**
   * Lists service accounts for a project.
   * (serviceAccounts.listProjectsServiceAccounts)
   *
   * @param string $name Required. The resource name of the project associated
   * with the service accounts, such as "projects/123"
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional limit on the number of service accounts to
   * include in the response. Further accounts can subsequently be obtained by
   * including the [ListServiceAccountsResponse.next_page_token] in a subsequent
   * request.
   * @opt_param string pageToken Optional pagination token returned in an earlier
   * [ListServiceAccountsResponse.next_page_token].
   * @return GoogleGAL_Service_Iam_ListServiceAccountsResponse
   */
  public function listProjectsServiceAccounts($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_Iam_ListServiceAccountsResponse");
  }

  /**
   * Sets the IAM access control policy for the specified IAM resource.
   * (serviceAccounts.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. `resource` is usually specified as a path, such as
   * `projectsprojectzoneszonedisksdisk*`. The format for the path specified in
   * this value is resource specific and is specified in the `setIamPolicy`
   * documentation.
   * @param GoogleGAL_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_Policy
   */
  public function setIamPolicy($resource, GoogleGAL_Service_Iam_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "GoogleGAL_Service_Iam_Policy");
  }

  /**
   * Signs a blob using a service account. (serviceAccounts.signBlob)
   *
   * @param string $name The resource name of the service account in the format
   * "projects/{project}/serviceAccounts/{account}". Using '-' as a wildcard for
   * the project, will infer the project from the account. The account value can
   * be the email address or the unique_id of the service account.
   * @param GoogleGAL_SignBlobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_SignBlobResponse
   */
  public function signBlob($name, GoogleGAL_Service_Iam_SignBlobRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('signBlob', array($params), "GoogleGAL_Service_Iam_SignBlobResponse");
  }

  /**
   * Tests the specified permissions against the IAM access control policy for the
   * specified IAM resource. (serviceAccounts.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. `resource` is usually specified as a path, such as
   * `projectsprojectzoneszonedisksdisk*`. The format for the path specified in
   * this value is resource specific and is specified in the `testIamPermissions`
   * documentation.
   * @param GoogleGAL_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, GoogleGAL_Service_Iam_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "GoogleGAL_Service_Iam_TestIamPermissionsResponse");
  }

  /**
   * Updates a service account. Currently, only the following fields are
   * updatable: 'display_name' . The 'etag' is mandatory. (serviceAccounts.update)
   *
   * @param string $name The resource name of the service account in the format
   * "projects/{project}/serviceAccounts/{account}". In requests using '-' as a
   * wildcard for the project, will infer the project from the account and the
   * account value can be the email address or the unique_id of the service
   * account. In responses the resource name will always be in the format
   * "projects/{project}/serviceAccounts/{email}".
   * @param GoogleGAL_ServiceAccount $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_ServiceAccount
   */
  public function update($name, GoogleGAL_Service_Iam_ServiceAccount $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "GoogleGAL_Service_Iam_ServiceAccount");
  }
}

/**
 * The "keys" collection of methods.
 * Typical usage is:
 *  <code>
 *   $iamService = new GoogleGAL_Service_Iam(...);
 *   $keys = $iamService->keys;
 *  </code>
 */
class GoogleGAL_Service_Iam_ProjectsServiceAccountsKeys_Resource extends GoogleGAL_Service_Resource
{

  /**
   * Creates a service account key and returns it. (keys.create)
   *
   * @param string $name The resource name of the service account in the format
   * "projects/{project}/serviceAccounts/{account}". Using '-' as a wildcard for
   * the project, will infer the project from the account. The account value can
   * be the email address or the unique_id of the service account.
   * @param GoogleGAL_CreateServiceAccountKeyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_ServiceAccountKey
   */
  public function create($name, GoogleGAL_Service_Iam_CreateServiceAccountKeyRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "GoogleGAL_Service_Iam_ServiceAccountKey");
  }

  /**
   * Deletes a service account key. (keys.delete)
   *
   * @param string $name The resource name of the service account key in the
   * format "projects/{project}/serviceAccounts/{account}/keys/{key}". Using '-'
   * as a wildcard for the project will infer the project from the account. The
   * account value can be the email address or the unique_id of the service
   * account.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_Empty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "GoogleGAL_Service_Iam_Empty");
  }

  /**
   * Gets the ServiceAccountKey by key id. (keys.get)
   *
   * @param string $name The resource name of the service account key in the
   * format "projects/{project}/serviceAccounts/{account}/keys/{key}". Using '-'
   * as a wildcard for the project will infer the project from the account. The
   * account value can be the email address or the unique_id of the service
   * account.
   * @param array $optParams Optional parameters.
   * @return GoogleGAL_Service_Iam_ServiceAccountKey
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "GoogleGAL_Service_Iam_ServiceAccountKey");
  }

  /**
   * Lists service account keys (keys.listProjectsServiceAccountsKeys)
   *
   * @param string $name The resource name of the service account in the format
   * "projects/{project}/serviceAccounts/{account}". Using '-' as a wildcard for
   * the project, will infer the project from the account. The account value can
   * be the email address or the unique_id of the service account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string keyTypes The type of keys the user wants to list. If empty,
   * all key types are included in the response. Duplicate key types are not
   * allowed.
   * @return GoogleGAL_Service_Iam_ListServiceAccountKeysResponse
   */
  public function listProjectsServiceAccountsKeys($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "GoogleGAL_Service_Iam_ListServiceAccountKeysResponse");
  }
}




class GoogleGAL_Service_Iam_Binding extends GoogleGAL_Collection
{
  protected $collection_key = 'members';
  protected $internal_gapi_mappings = array(
  );
  public $members;
  public $role;


  public function setMembers($members)
  {
    $this->members = $members;
  }
  public function getMembers()
  {
    return $this->members;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
}

class GoogleGAL_Service_Iam_CloudAuditOptions extends GoogleGAL_Model
{
}

class GoogleGAL_Service_Iam_Condition extends GoogleGAL_Collection
{
  protected $collection_key = 'values';
  protected $internal_gapi_mappings = array(
  );
  public $iam;
  public $op;
  public $svc;
  public $sys;
  public $value;
  public $values;


  public function setIam($iam)
  {
    $this->iam = $iam;
  }
  public function getIam()
  {
    return $this->iam;
  }
  public function setOp($op)
  {
    $this->op = $op;
  }
  public function getOp()
  {
    return $this->op;
  }
  public function setSvc($svc)
  {
    $this->svc = $svc;
  }
  public function getSvc()
  {
    return $this->svc;
  }
  public function setSys($sys)
  {
    $this->sys = $sys;
  }
  public function getSys()
  {
    return $this->sys;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
  public function setValues($values)
  {
    $this->values = $values;
  }
  public function getValues()
  {
    return $this->values;
  }
}

class GoogleGAL_Service_Iam_CounterOptions extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $field;
  public $metric;


  public function setField($field)
  {
    $this->field = $field;
  }
  public function getField()
  {
    return $this->field;
  }
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  public function getMetric()
  {
    return $this->metric;
  }
}

class GoogleGAL_Service_Iam_CreateServiceAccountKeyRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $privateKeyType;


  public function setPrivateKeyType($privateKeyType)
  {
    $this->privateKeyType = $privateKeyType;
  }
  public function getPrivateKeyType()
  {
    return $this->privateKeyType;
  }
}

class GoogleGAL_Service_Iam_CreateServiceAccountRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $accountId;
  protected $serviceAccountType = 'GoogleGAL_Service_Iam_ServiceAccount';
  protected $serviceAccountDataType = '';


  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setServiceAccount(GoogleGAL_Service_Iam_ServiceAccount $serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

class GoogleGAL_Service_Iam_DataAccessOptions extends GoogleGAL_Model
{
}

class GoogleGAL_Service_Iam_Empty extends GoogleGAL_Model
{
}

class GoogleGAL_Service_Iam_ListServiceAccountKeysResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'keys';
  protected $internal_gapi_mappings = array(
  );
  protected $keysType = 'GoogleGAL_Service_Iam_ServiceAccountKey';
  protected $keysDataType = 'array';


  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  public function getKeys()
  {
    return $this->keys;
  }
}

class GoogleGAL_Service_Iam_ListServiceAccountsResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'accounts';
  protected $internal_gapi_mappings = array(
  );
  protected $accountsType = 'GoogleGAL_Service_Iam_ServiceAccount';
  protected $accountsDataType = 'array';
  public $nextPageToken;


  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  public function getAccounts()
  {
    return $this->accounts;
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

class GoogleGAL_Service_Iam_LogConfig extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $cloudAuditType = 'GoogleGAL_Service_Iam_CloudAuditOptions';
  protected $cloudAuditDataType = '';
  protected $counterType = 'GoogleGAL_Service_Iam_CounterOptions';
  protected $counterDataType = '';
  protected $dataAccessType = 'GoogleGAL_Service_Iam_DataAccessOptions';
  protected $dataAccessDataType = '';


  public function setCloudAudit(GoogleGAL_Service_Iam_CloudAuditOptions $cloudAudit)
  {
    $this->cloudAudit = $cloudAudit;
  }
  public function getCloudAudit()
  {
    return $this->cloudAudit;
  }
  public function setCounter(GoogleGAL_Service_Iam_CounterOptions $counter)
  {
    $this->counter = $counter;
  }
  public function getCounter()
  {
    return $this->counter;
  }
  public function setDataAccess(GoogleGAL_Service_Iam_DataAccessOptions $dataAccess)
  {
    $this->dataAccess = $dataAccess;
  }
  public function getDataAccess()
  {
    return $this->dataAccess;
  }
}

class GoogleGAL_Service_Iam_Policy extends GoogleGAL_Collection
{
  protected $collection_key = 'rules';
  protected $internal_gapi_mappings = array(
  );
  protected $bindingsType = 'GoogleGAL_Service_Iam_Binding';
  protected $bindingsDataType = 'array';
  public $etag;
  protected $rulesType = 'GoogleGAL_Service_Iam_Rule';
  protected $rulesDataType = 'array';
  public $version;


  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  public function getBindings()
  {
    return $this->bindings;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  public function getRules()
  {
    return $this->rules;
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

class GoogleGAL_Service_Iam_Rule extends GoogleGAL_Collection
{
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );
  public $action;
  protected $conditionsType = 'GoogleGAL_Service_Iam_Condition';
  protected $conditionsDataType = 'array';
  public $description;
  public $in;
  protected $logConfigType = 'GoogleGAL_Service_Iam_LogConfig';
  protected $logConfigDataType = 'array';
  public $notIn;
  public $permissions;


  public function setAction($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  public function getConditions()
  {
    return $this->conditions;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setIn($in)
  {
    $this->in = $in;
  }
  public function getIn()
  {
    return $this->in;
  }
  public function setLogConfig($logConfig)
  {
    $this->logConfig = $logConfig;
  }
  public function getLogConfig()
  {
    return $this->logConfig;
  }
  public function setNotIn($notIn)
  {
    $this->notIn = $notIn;
  }
  public function getNotIn()
  {
    return $this->notIn;
  }
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class GoogleGAL_Service_Iam_ServiceAccount extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $email;
  public $etag;
  public $name;
  public $oauth2ClientId;
  public $projectId;
  public $uniqueId;


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
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOauth2ClientId($oauth2ClientId)
  {
    $this->oauth2ClientId = $oauth2ClientId;
  }
  public function getOauth2ClientId()
  {
    return $this->oauth2ClientId;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setUniqueId($uniqueId)
  {
    $this->uniqueId = $uniqueId;
  }
  public function getUniqueId()
  {
    return $this->uniqueId;
  }
}

class GoogleGAL_Service_Iam_ServiceAccountKey extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $privateKeyData;
  public $privateKeyType;
  public $validAfterTime;
  public $validBeforeTime;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPrivateKeyData($privateKeyData)
  {
    $this->privateKeyData = $privateKeyData;
  }
  public function getPrivateKeyData()
  {
    return $this->privateKeyData;
  }
  public function setPrivateKeyType($privateKeyType)
  {
    $this->privateKeyType = $privateKeyType;
  }
  public function getPrivateKeyType()
  {
    return $this->privateKeyType;
  }
  public function setValidAfterTime($validAfterTime)
  {
    $this->validAfterTime = $validAfterTime;
  }
  public function getValidAfterTime()
  {
    return $this->validAfterTime;
  }
  public function setValidBeforeTime($validBeforeTime)
  {
    $this->validBeforeTime = $validBeforeTime;
  }
  public function getValidBeforeTime()
  {
    return $this->validBeforeTime;
  }
}

class GoogleGAL_Service_Iam_SetIamPolicyRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $policyType = 'GoogleGAL_Service_Iam_Policy';
  protected $policyDataType = '';


  public function setPolicy(GoogleGAL_Service_Iam_Policy $policy)
  {
    $this->policy = $policy;
  }
  public function getPolicy()
  {
    return $this->policy;
  }
}

class GoogleGAL_Service_Iam_SignBlobRequest extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $bytesToSign;


  public function setBytesToSign($bytesToSign)
  {
    $this->bytesToSign = $bytesToSign;
  }
  public function getBytesToSign()
  {
    return $this->bytesToSign;
  }
}

class GoogleGAL_Service_Iam_SignBlobResponse extends GoogleGAL_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $keyId;
  public $signature;


  public function setKeyId($keyId)
  {
    $this->keyId = $keyId;
  }
  public function getKeyId()
  {
    return $this->keyId;
  }
  public function setSignature($signature)
  {
    $this->signature = $signature;
  }
  public function getSignature()
  {
    return $this->signature;
  }
}

class GoogleGAL_Service_Iam_TestIamPermissionsRequest extends GoogleGAL_Collection
{
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );
  public $permissions;


  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class GoogleGAL_Service_Iam_TestIamPermissionsResponse extends GoogleGAL_Collection
{
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );
  public $permissions;


  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
}
