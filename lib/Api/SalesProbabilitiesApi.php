<?php
/**
 * SalesProbabilitiesApi
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

namespace Spinen\ConnectWise\Clients\Sales\Spinen\ConnectWise\Clients\Sales\Api;

use \Spinen\ConnectWise\Clients\Sales\ApiClient;
use \Spinen\ConnectWise\Clients\Sales\ApiException;
use \Spinen\ConnectWise\Clients\Sales\Configuration;
use \Spinen\ConnectWise\Clients\Sales\ObjectSerializer;

/**
 * SalesProbabilitiesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Sales
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesProbabilitiesApi
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
     * @return SalesProbabilitiesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Sales\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation salesProbabilitiesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\Count
     */
    public function salesProbabilitiesCountGet($conditions = null)
    {
        list($response) = $this->salesProbabilitiesCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation salesProbabilitiesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesProbabilitiesCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/sales/probabilities/count";
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
                '/sales/probabilities/count'
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
     * Operation salesProbabilitiesGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability[]
     */
    public function salesProbabilitiesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->salesProbabilitiesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation salesProbabilitiesGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability[], HTTP status code, HTTP response headers (array of strings)
     */
    public function salesProbabilitiesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/sales/probabilities";
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
                '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability[]',
                '/sales/probabilities'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability[]', $e->getResponseHeaders());
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
     * Operation salesProbabilitiesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return void
     */
    public function salesProbabilitiesIdDelete($id)
    {
        list($response) = $this->salesProbabilitiesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation salesProbabilitiesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesProbabilitiesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesProbabilitiesIdDelete');
        }
        // parse inputs
        $resourcePath = "/sales/probabilities/{id}";
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
                '/sales/probabilities/{id}'
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
     * Operation salesProbabilitiesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability
     */
    public function salesProbabilitiesIdGet($id)
    {
        list($response) = $this->salesProbabilitiesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation salesProbabilitiesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesProbabilitiesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesProbabilitiesIdGet');
        }
        // parse inputs
        $resourcePath = "/sales/probabilities/{id}";
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
                '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability',
                '/sales/probabilities/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability', $e->getResponseHeaders());
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
     * Operation salesProbabilitiesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability
     */
    public function salesProbabilitiesIdPatch($id, $operations)
    {
        list($response) = $this->salesProbabilitiesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation salesProbabilitiesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesProbabilitiesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesProbabilitiesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling salesProbabilitiesIdPatch');
        }
        // parse inputs
        $resourcePath = "/sales/probabilities/{id}";
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
                '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability',
                '/sales/probabilities/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability', $e->getResponseHeaders());
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
     * Operation salesProbabilitiesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability $probability  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability
     */
    public function salesProbabilitiesIdPut($id, $probability)
    {
        list($response) = $this->salesProbabilitiesIdPutWithHttpInfo($id, $probability);
        return $response;
    }

    /**
     * Operation salesProbabilitiesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability $probability  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesProbabilitiesIdPutWithHttpInfo($id, $probability)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesProbabilitiesIdPut');
        }
        // verify the required parameter 'probability' is set
        if ($probability === null) {
            throw new \InvalidArgumentException('Missing the required parameter $probability when calling salesProbabilitiesIdPut');
        }
        // parse inputs
        $resourcePath = "/sales/probabilities/{id}";
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
        if (isset($probability)) {
            $_tempBody = $probability;
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
                '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability',
                '/sales/probabilities/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability', $e->getResponseHeaders());
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
     * Operation salesProbabilitiesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability $probability  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability
     */
    public function salesProbabilitiesPost($probability)
    {
        list($response) = $this->salesProbabilitiesPostWithHttpInfo($probability);
        return $response;
    }

    /**
     * Operation salesProbabilitiesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Sales API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability $probability  (required)
     * @throws \Spinen\ConnectWise\Clients\Sales\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Sales\Model\SalesProbability, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesProbabilitiesPostWithHttpInfo($probability)
    {
        // verify the required parameter 'probability' is set
        if ($probability === null) {
            throw new \InvalidArgumentException('Missing the required parameter $probability when calling salesProbabilitiesPost');
        }
        // parse inputs
        $resourcePath = "/sales/probabilities";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($probability)) {
            $_tempBody = $probability;
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
                '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability',
                '/sales/probabilities'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Sales\Model\SalesProbability', $e->getResponseHeaders());
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
