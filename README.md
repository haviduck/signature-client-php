# Getting started

# Introduction

## Last update 
 Last build date for this API: 27.10.2017

# Getting started
## Get an account
To use the API, you need an API account at Idfy You can get a free test account by going to our onboarding site and filling out the form there: [https://onboard.signere.no](https://onboard.signere.no) 
## Support
We’re here to help. Get in touch and we’ll get back to you as soon as we can. [Contact us](support@idfy.io).




# Statuspage
If you want to know the status of our services or subscribe to notifications go to our Statuspage: [http://signere.statuspage.io/](http://signere.statuspage.io/)
# API Authentication
This API uses OAuth2 for authentication the requests. OAuth2 - an open protocol to allow secure authorization in a simple and standard method from web, mobile and desktop applications. Be sure to use client_credentials as grant type when connecting to this API. 

<b>Simple step by step guide to receive required access token </b><br/><br/>
1) Get access token <br/><br/>
http POST to https://oauth2test.signere.com/connect/token for test or https://oauth.signere.no/connect/token for prod <br/><br/>
&bull; Request Headers: <br/>
&nbsp;&nbsp;Content-Type: application/x-www-form-urlencoded <br/>
&nbsp;&nbsp;Authorization: Basic auth with ClientId as username, and ClientSecret as password<br/>
&nbsp;&nbsp;<i>Pseudo code: Authorization: "[ClientId]:[Secret]".ToBase64String() (utf-8) </i> <br/>
<br>
&bull; Request Body:<br/>
&nbsp;&nbsp;grant_type: client_credentials<br/>
&nbsp;&nbsp;scope: [insert scope(s) here] (Contact us if you dont have access to this scope) <br/>
<br>
2) Use access token to access our API<br/><br/>
In the response you will receive an item containing the id token you should use to connect to our API's named access_token.<br/>
&bull; This token can then be added to the header in the requests to this API:<br/> 
&nbsp;&nbsp; Authorization: Bearer [access_token]
<br><br>
We have created a guide to create Oauth2 tokens for different languages here: [https://sdk.signere.com/oauthtoken.html](https://sdk.signere.com/oauthtoken.html)
<br><br><i>Hint: The access token has a limited lifetime, check how long it will live in the response. Then you can save it to cache and reuse it (our .NET nuget client does this for you)</i><br><br>
Read more aboute OAuth2 here: 
[https://www.digitalocean.com/community/tutorials/an-introduction-to-oauth-2](https://www.digitalocean.com/community/tutorials/an-introduction-to-oauth-2)
<!-- ReDoc-Inject: <security-definitions> -->



## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=IdfySignature-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the IdfySignature library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=IdfySignature-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=IdfySignature-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=IdfySignature-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=IdfySignature-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=IdfySignature-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=IdfySignature-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=IdfySignature-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=IdfySignature-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=IdfySignature-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=IdfySignature-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=IdfySignature-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=IdfySignature-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |



API client can be initialized as following.

```php
$oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
$oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret

$client = new IdfySignatureLib\IdfySignatureClient($oAuthClientId, $oAuthClientSecret);
```

You must authorize now authorize the client.

### Authorizing your client

This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the OAuth client credentials for an *access token*.
The access token is an object containing information for authorizing client requests.

 You must pass the *[scopes](#scopes)* for which you need permission to access.
```php
try {
    $client->auth()->authorize([OAuthScope::SIGNATURE, OAuthScope::ROOT]);
} catch (IdfySignatureLib\Exceptions\OAuthProviderException $ex) {
    // handle exception
}
```

The client can now make authorized endpoint calls.


### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `IdfySignatureLib\Models\OAuthScope` enumeration.

| Scope Name | Description |
| --- | --- |
| `SIGNATURE` |  |
| `ROOT` |  |

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

You can store the access token in the `$_SESSION` global:

```php
// store token
$_SESSION['access_token'] = IdfySignatureLib\Configuration::$oAuthToken;
```

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in `Configuration` along with the other configuration parameters before creating the client:

```php
// load token later...
IdfySignatureLib\Configuration::$oAuthToken = $_SESSION['access_token'];

// Set other configuration, then instantiate client
$client = new IdfySignatureLib\IdfySignatureClient();
```

### Complete example

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

use IdfySignatureLib\Models\OAuthScope;

session_start();

// Client configuration
$oAuthClientId = 'oAuthClientId';
$oAuthClientSecret = 'oAuthClientSecret';

$client = new IdfySignatureLib\IdfySignatureClient($oAuthClientId, $oAuthClientSecret);

// try to restore access token from session
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    IdfySignatureLib\Configuration::$oAuthToken = $_SESSION['access_token'];
} else {
    try {
        // obtain a new access token
        $token = $client->auth()->authorize([OAuthScope::SIGNATURE, OAuthScope::ROOT]);
        $_SESSION['access_token'] = $token;
    } catch (IdfySignatureLib\Exceptions\OAuthProviderException $ex) {
        // handle exception
        die();
    }
}

// the client is now authorized; you can use $client to make endpoint calls
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [Attachments](#attachments)
* [Documents](#documents)
* [Files](#files)
* [Jwt](#jwt)
* [Signers](#signers)

## <a name="attachments"></a>![Class: ](https://apidocs.io/img/class.png ".Attachments") Attachments

### Get singleton instance

The singleton instance of the ``` Attachments ``` class can be accessed from the API Client.

```php
$attachments = $client->getAttachments();
```

### <a name="attachments_create"></a>![Method: ](https://apidocs.io/img/method.png ".Attachments.attachmentsCreate") attachmentsCreate

> Create an attachment


```php
function attachmentsCreate(
        $accountId,
        $request)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| request |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$request = new AttachmentRequest();

$result = $attachments->attachmentsCreate($accountId, $request);

```


### <a name="attachments_get"></a>![Method: ](https://apidocs.io/img/method.png ".Attachments.attachmentsGet") attachmentsGet

> Retrieve an attachment


```php
function attachmentsGet(
        $accountId,
        $documentId,
        $attachmentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |
| attachmentId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();
$attachmentId = uniqid();

$result = $attachments->attachmentsGet($accountId, $documentId, $attachmentId);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="documents"></a>![Class: ](https://apidocs.io/img/class.png ".Documents") Documents

### Get singleton instance

The singleton instance of the ``` Documents ``` class can be accessed from the API Client.

```php
$documents = $client->getDocuments();
```

### <a name="documents_create"></a>![Method: ](https://apidocs.io/img/method.png ".Documents.documentsCreate") documentsCreate

> Create a document


```php
function documentsCreate(
        $accountId,
        $request)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| request |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$request = new CreateDocumentRequest();

$result = $documents->documentsCreate($accountId, $request);

```


### <a name="documents_get"></a>![Method: ](https://apidocs.io/img/method.png ".Documents.documentsGet") documentsGet

> Retrieve a document


```php
function documentsGet(
        $accountId,
        $documentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();

$result = $documents->documentsGet($accountId, $documentId);

```


### <a name="documents_update"></a>![Method: ](https://apidocs.io/img/method.png ".Documents.documentsUpdate") documentsUpdate

> Update a document


```php
function documentsUpdate(
        $accountId,
        $documentId,
        $request)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |
| request |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();
$request = new UpdateDocumentRequest();

$result = $documents->documentsUpdate($accountId, $documentId, $request);

```


### <a name="documents_cancel"></a>![Method: ](https://apidocs.io/img/method.png ".Documents.documentsCancel") documentsCancel

> Cancel a document


```php
function documentsCancel(
        $accountId,
        $documentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();

$result = $documents->documentsCancel($accountId, $documentId);

```


### <a name="documents_status"></a>![Method: ](https://apidocs.io/img/method.png ".Documents.documentsStatus") documentsStatus

> Retrieve document status


```php
function documentsStatus(
        $accountId,
        $documentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();

$result = $documents->documentsStatus($accountId, $documentId);

```


### <a name="documents_get_summary"></a>![Method: ](https://apidocs.io/img/method.png ".Documents.documentsGetSummary") documentsGetSummary

> Retrieve document summary


```php
function documentsGetSummary(
        $accountId,
        $documentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();

$result = $documents->documentsGetSummary($accountId, $documentId);

```


### <a name="documents_get_collection"></a>![Method: ](https://apidocs.io/img/method.png ".Documents.documentsGetCollection") documentsGetCollection

> List document summaries


```php
function documentsGetCollection(
        $accountId,
        $externalId = null,
        $signerId = null,
        $externalSignerId = null,
        $fromDate = null,
        $toDate = null,
        $lastUpdated = null,
        $signedDate = null,
        $nameOfSigner = null,
        $status = null,
        $tags = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | Your idfy account Id |
| externalId |  ``` Optional ```  | Documents external id |
| signerId |  ``` Optional ```  | Signer Id |
| externalSignerId |  ``` Optional ```  | External signer Id |
| fromDate |  ``` Optional ```  | Documents created from date (ticks) |
| toDate |  ``` Optional ```  | Documents created to date (ticks) |
| lastUpdated |  ``` Optional ```  | Documents updated after this date (ticks) |
| signedDate |  ``` Optional ```  | Documents signed after this date (ticks) |
| nameOfSigner |  ``` Optional ```  | Name of signer |
| status |  ``` Optional ```  | Document status |
| tags |  ``` Optional ```  | Document tags |



#### Example Usage

```php
$accountId = uniqid();
$externalId = 'externalId';
$signerId = uniqid();
$externalSignerId = 'externalSignerId';
$fromDate = 5;
$toDate = 5;
$lastUpdated = 5;
$signedDate = 5;
$nameOfSigner = 'nameOfSigner';
$status = string::ENUM_UNSIGNED;
$tags = 'tags';

$result = $documents->documentsGetCollection($accountId, $externalId, $signerId, $externalSignerId, $fromDate, $toDate, $lastUpdated, $signedDate, $nameOfSigner, $status, $tags);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="files"></a>![Class: ](https://apidocs.io/img/class.png ".Files") Files

### Get singleton instance

The singleton instance of the ``` Files ``` class can be accessed from the API Client.

```php
$files = $client->getFiles();
```

### <a name="files_get"></a>![Method: ](https://apidocs.io/img/method.png ".Files.filesGet") filesGet

> Retrieve a file


```php
function filesGet(
        $accountId,
        $documentId,
        $fileFormat)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |
| fileFormat |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();
$fileFormat = string::ENUM_UNSIGNED;

$result = $files->filesGet($accountId, $documentId, $fileFormat);

```


### <a name="files_get1"></a>![Method: ](https://apidocs.io/img/method.png ".Files.filesGet1") filesGet1

> Retrieve file for a signer


```php
function filesGet1(
        $accountId,
        $documentId,
        $signerId,
        $fileFormat)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |
| signerId |  ``` Required ```  | The signers Id |
| fileFormat |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();
$signerId = uniqid();
$fileFormat = string::ENUM_NATIVE;

$result = $files->filesGet1($accountId, $documentId, $signerId, $fileFormat);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="jwt"></a>![Class: ](https://apidocs.io/img/class.png ".Jwt") Jwt

### Get singleton instance

The singleton instance of the ``` Jwt ``` class can be accessed from the API Client.

```php
$jwt = $client->getJwt();
```

### <a name="jwt_validate"></a>![Method: ](https://apidocs.io/img/method.png ".Jwt.jwtValidate") jwtValidate

> Validate JWT


```php
function jwtValidate(
        $accountId,
        $request)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| request |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$request = new JwtValidationRequest();

$result = $jwt->jwtValidate($accountId, $request);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="signers"></a>![Class: ](https://apidocs.io/img/class.png ".Signers") Signers

### Get singleton instance

The singleton instance of the ``` Signers ``` class can be accessed from the API Client.

```php
$signers = $client->getSigners();
```

### <a name="signers_get"></a>![Method: ](https://apidocs.io/img/method.png ".Signers.signersGet") signersGet

> Retrieve a signer


```php
function signersGet(
        $accountId,
        $documentId,
        $signerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |
| signerId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();
$signerId = uniqid();

$result = $signers->signersGet($accountId, $documentId, $signerId);

```


### <a name="signers_delete"></a>![Method: ](https://apidocs.io/img/method.png ".Signers.signersDelete") signersDelete

> Delete a signer


```php
function signersDelete(
        $accountId,
        $documentId,
        $signerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |
| signerId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();
$signerId = uniqid();

$result = $signers->signersDelete($accountId, $documentId, $signerId);

```


### <a name="signers_update"></a>![Method: ](https://apidocs.io/img/method.png ".Signers.signersUpdate") signersUpdate

> Update a signer


```php
function signersUpdate(
        $accountId,
        $documentId,
        $signerId,
        $request)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |
| signerId |  ``` Required ```  | TODO: Add a parameter description |
| request |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();
$signerId = uniqid();
$request = new UpdateSignerRequest();

$result = $signers->signersUpdate($accountId, $documentId, $signerId, $request);

```


### <a name="signers_list"></a>![Method: ](https://apidocs.io/img/method.png ".Signers.signersList") signersList

> List signers of a document


```php
function signersList(
        $accountId,
        $documentId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();

$result = $signers->signersList($accountId, $documentId);

```


### <a name="signers_add"></a>![Method: ](https://apidocs.io/img/method.png ".Signers.signersAdd") signersAdd

> Add a signer to a document


```php
function signersAdd(
        $accountId,
        $documentId,
        $signer)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | TODO: Add a parameter description |
| documentId |  ``` Required ```  | TODO: Add a parameter description |
| signer |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$accountId = uniqid();
$documentId = uniqid();
$signer = new Signer();

$result = $signers->signersAdd($accountId, $documentId, $signer);

```


[Back to List of Controllers](#list_of_controllers)



