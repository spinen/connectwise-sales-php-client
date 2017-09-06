<?php
/**
 * OpportunityTeamsApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Sales
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sales API
 *
 * ConnectWise Sales API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Sales\Api;

use \Spinen\ConnectWise\Clients\Sales\ApiClient;
use \Spinen\ConnectWise\Clients\Sales\ApiException;
use \Spinen\ConnectWise\Clients\Sales\Configuration;
use \Spinen\ConnectWise\Clients\Sales\ObjectSerializer;

/**
 * OpportunityTeamsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Sales
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpportunityTeamsApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Sales\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Sales\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Sales\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Sales\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Sales\ApiClient $apiClient set the API client
     *
     * @return OpportunityTeamsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Sales\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation salesOpportunitiesIdTeamCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\Count
     */
    public function salesOpportunitiesIdTeamCountGet($id, $conditions = null)
    {
        list($response) = $this->salesOpportunitiesIdTeamCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation salesOpportunitiesIdTeamCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOpportunitiesIdTeamCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesOpportunitiesIdTeamCountGet');
        }
        // parse inputs
        $resourcePath = "/sales/opportunities/{id}/team/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Sales\Model\Count',
                '/sales/opportunities/{id}/team/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesOpportunitiesIdTeamGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\Team[]
     */
    public function salesOpportunitiesIdTeamGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->salesOpportunitiesIdTeamGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation salesOpportunitiesIdTeamGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\Team[], HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOpportunitiesIdTeamGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesOpportunitiesIdTeamGet');
        }
        // parse inputs
        $resourcePath = "/sales/opportunities/{id}/team";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Sales\Model\Team[]',
                '/sales/opportunities/{id}/team'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\Team[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Team[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesOpportunitiesIdTeamPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\Team $team  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\Team
     */
    public function salesOpportunitiesIdTeamPost($id, $team)
    {
        list($response) = $this->salesOpportunitiesIdTeamPostWithHttpInfo($id, $team);
        return $response;
    }

    /**
     * Operation salesOpportunitiesIdTeamPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\Team $team  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\Team, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOpportunitiesIdTeamPostWithHttpInfo($id, $team)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesOpportunitiesIdTeamPost');
        }
        // verify the required parameter 'team' is set
        if ($team === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team when calling salesOpportunitiesIdTeamPost');
        }
        // parse inputs
        $resourcePath = "/sales/opportunities/{id}/team";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($team)) {
            $_tempBody = $team;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Sales\Model\Team',
                '/sales/opportunities/{id}/team'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\Team', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesOpportunitiesIdTeamTeamIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return void
     */
    public function salesOpportunitiesIdTeamTeamIdDelete($id, $team_id)
    {
        list($response) = $this->salesOpportunitiesIdTeamTeamIdDeleteWithHttpInfo($id, $team_id);
        return $response;
    }

    /**
     * Operation salesOpportunitiesIdTeamTeamIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOpportunitiesIdTeamTeamIdDeleteWithHttpInfo($id, $team_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesOpportunitiesIdTeamTeamIdDelete');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling salesOpportunitiesIdTeamTeamIdDelete');
        }
        // parse inputs
        $resourcePath = "/sales/opportunities/{id}/team/{teamId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/sales/opportunities/{id}/team/{teamId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesOpportunitiesIdTeamTeamIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\Team
     */
    public function salesOpportunitiesIdTeamTeamIdGet($id, $team_id)
    {
        list($response) = $this->salesOpportunitiesIdTeamTeamIdGetWithHttpInfo($id, $team_id);
        return $response;
    }

    /**
     * Operation salesOpportunitiesIdTeamTeamIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\Team, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOpportunitiesIdTeamTeamIdGetWithHttpInfo($id, $team_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesOpportunitiesIdTeamTeamIdGet');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling salesOpportunitiesIdTeamTeamIdGet');
        }
        // parse inputs
        $resourcePath = "/sales/opportunities/{id}/team/{teamId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Sales\Model\Team',
                '/sales/opportunities/{id}/team/{teamId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\Team', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesOpportunitiesIdTeamTeamIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\Team
     */
    public function salesOpportunitiesIdTeamTeamIdPatch($id, $team_id, $operations)
    {
        list($response) = $this->salesOpportunitiesIdTeamTeamIdPatchWithHttpInfo($id, $team_id, $operations);
        return $response;
    }

    /**
     * Operation salesOpportunitiesIdTeamTeamIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\Team, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOpportunitiesIdTeamTeamIdPatchWithHttpInfo($id, $team_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesOpportunitiesIdTeamTeamIdPatch');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling salesOpportunitiesIdTeamTeamIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling salesOpportunitiesIdTeamTeamIdPatch');
        }
        // parse inputs
        $resourcePath = "/sales/opportunities/{id}/team/{teamId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Sales\Model\Team',
                '/sales/opportunities/{id}/team/{teamId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\Team', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesOpportunitiesIdTeamTeamIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\Team $team  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\Team
     */
    public function salesOpportunitiesIdTeamTeamIdPut($id, $team_id, $team)
    {
        list($response) = $this->salesOpportunitiesIdTeamTeamIdPutWithHttpInfo($id, $team_id, $team);
        return $response;
    }

    /**
     * Operation salesOpportunitiesIdTeamTeamIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\Team $team  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\Team, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOpportunitiesIdTeamTeamIdPutWithHttpInfo($id, $team_id, $team)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesOpportunitiesIdTeamTeamIdPut');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling salesOpportunitiesIdTeamTeamIdPut');
        }
        // verify the required parameter 'team' is set
        if ($team === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team when calling salesOpportunitiesIdTeamTeamIdPut');
        }
        // parse inputs
        $resourcePath = "/sales/opportunities/{id}/team/{teamId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($team)) {
            $_tempBody = $team;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Sales\Model\Team',
                '/sales/opportunities/{id}/team/{teamId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\Team', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
