<?php
/*
 * IdfySignature
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfySignatureLib;

/**
 * All configuration including auth info and base URI for the API access
 * are configured in this class.
 */
class Configuration
{
    /**
     * The environment being used'
     * @var string
     */
    public static $environment = Environments::PRODUCTION;

    /**
     * OAuth 2 Client ID
     * @var string
     */
    public static $oAuthClientId = 'TODO: Replace';

    /**
     * OAuth 2 Client Secret
     * @var string
     */
    public static $oAuthClientSecret = 'TODO: Replace';

    /**
     * OAuth 2 token
     * @var \IdfySignatureLib\Models\OAuthToken
     */
    public static $oAuthToken = null;

    /**
     * OAuth token update callback
     * Called whenever token is updated
     * @var callable
     */
    public static $oAuthTokenUpdateCallback = null;

    /**
     * Get the base uri for a given server in the current environment
     * @param  string $server Server name
     * @return string         Base URI
     */
    public static function getBaseUri($server = Servers::DEFAULT_)
    {
        return APIHelper::appendUrlWithTemplateParameters(
            static::$environmentsMap[static::$environment][$server],
            array(
            )
        );
    }

    /**
     * A map of all baseurls used in different environments and servers
     * @var array
     */
    private static $environmentsMap = array(
        Environments::PRODUCTION => array(
            Servers::DEFAULT_ => 'https://signature.signere.no',
            Servers::OAUTH => 'https://oauth.signere.no',
        ),
        Environments::TEST => array(
            Servers::DEFAULT_ => 'https://sign-api-test.idfy.io',
            Servers::OAUTH => 'https://oauth2test.signere.com',
        ),
    );
}
