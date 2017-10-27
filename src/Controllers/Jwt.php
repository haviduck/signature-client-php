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
class Jwt extends BaseController
{
    /**
     * @var Jwt The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return Jwt The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Validate JWT
     *
     * @param uuid|string                 $accountId TODO: type description here
     * @param Models\JwtValidationRequest $request   TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function jwtValidate(
        $accountId,
        $request
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();
        //check that all required arguments are provided
        if (!isset($accountId, $request)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/api/jwt/{accountId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'accountId' => $accountId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMACTIC',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($request));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'IdfySignatureLib\\Models\\JwtValidationResponse');
    }
}
