<?php
/*
 * IdfySignature
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfySignatureLib\Controllers;

use IdfySignatureLib\APIException;
use IdfySignatureLib\APIHelper;
use IdfySignatureLib\Configuration;
use IdfySignatureLib\Models;
use IdfySignatureLib\Exceptions;
use IdfySignatureLib\Http\HttpRequest;
use IdfySignatureLib\Http\HttpResponse;
use IdfySignatureLib\Http\HttpMethod;
use IdfySignatureLib\Http\HttpContext;
use IdfySignatureLib\OAuthManager;
use IdfySignatureLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class OAuthAuthorization extends BaseController
{
    /**
     * @var OAuthAuthorization The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return OAuthAuthorization The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Create a new OAuth 2 token.
     *
     * @param string $authorization Authorization header in Basic auth format
     * @param string $scope         (optional) Requested scopes as a space-delimited list.
     * @param    array  $fieldParameters    Additional optional form parameters are supported by this endpoint
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function requestToken(
        $authorization,
        $scope = null,
        $fieldParameters = null
    ) {
        //check that all required arguments are provided
        if (!isset($authorization)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri(Servers::OAUTH);
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/connect/tokenconnect/token';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMACTIC',
            'Accept'        => 'application/json',
            'Authorization'   => $authorization
        );

        //prepare parameters
        $_parameters = array (
            'grant_type'    => 'client_credentials',
            'scope'         => $scope
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\OAuthProviderException('OAuth 2 provider returned an error.', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\OAuthProviderException(
                'OAuth 2 provider says client authentication failed.',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfySignatureLib\\Models\\OAuthToken');
    }
}
