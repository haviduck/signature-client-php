<?php
/*
 * IdfySignature
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfySignatureLib;

use IdfySignatureLib\Controllers;

/**
 * IdfySignature client class
 */
class IdfySignatureClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $oAuthClientId = null,
        $oAuthClientSecret = null
    ) {
        Configuration::$oAuthClientId = $oAuthClientId ? $oAuthClientId : Configuration::$oAuthClientId;
        Configuration::$oAuthClientSecret = $oAuthClientSecret ? $oAuthClientSecret : Configuration::$oAuthClientSecret;
    }
    /**
     * Singleton access to Attachments controller
     * @return Controllers\Attachments The *Singleton* instance
     */
    public function getAttachments()
    {
        return Controllers\Attachments::getInstance();
    }
    /**
     * Singleton access to Documents controller
     * @return Controllers\Documents The *Singleton* instance
     */
    public function getDocuments()
    {
        return Controllers\Documents::getInstance();
    }
    /**
     * Singleton access to Files controller
     * @return Controllers\Files The *Singleton* instance
     */
    public function getFiles()
    {
        return Controllers\Files::getInstance();
    }
    /**
     * Singleton access to Jwt controller
     * @return Controllers\Jwt The *Singleton* instance
     */
    public function getJwt()
    {
        return Controllers\Jwt::getInstance();
    }
    /**
     * Singleton access to Signers controller
     * @return Controllers\Signers The *Singleton* instance
     */
    public function getSigners()
    {
        return Controllers\Signers::getInstance();
    }
    /**
     * Singleton access to OAuthAuthorization controller
     * @return Controllers\OAuthAuthorization The *Singleton* instance
     */
    public function getOAuthAuthorization()
    {
        return Controllers\OAuthAuthorization::getInstance();
    }

    /**
     * Get OAuth 2 authorization manager
     * @return OAuthManager
     */
    public function auth()
    {
        return OAuthManager::getInstance();
    }
}
