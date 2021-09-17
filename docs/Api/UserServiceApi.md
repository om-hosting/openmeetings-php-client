# Swagger\Client\UserServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add3**](UserServiceApi.md#add3) | **POST** /user | 
[**delete5**](UserServiceApi.md#delete5) | **DELETE** /user/{id} | 
[**deleteExternal1**](UserServiceApi.md#deleteexternal1) | **DELETE** /user/{externaltype}/{externalid} | 
[**get3**](UserServiceApi.md#get3) | **GET** /user | 
[**getRoomHash**](UserServiceApi.md#getroomhash) | **POST** /user/hash | 
[**login**](UserServiceApi.md#login) | **GET** /user/login | 

# **add3**
> \Swagger\Client\Model\UserDTO[] add3($sid, $user, $confirm)



Adds a new User like through the Frontend, but also does activates the  Account To do SSO see the methods to create a hash and use those ones!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$user = new \Swagger\Client\Model\UserDTO(); // \Swagger\Client\Model\UserDTO | 
$confirm = true; // bool | 

try {
    $result = $apiInstance->add3($sid, $user, $confirm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->add3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **user** | [**\Swagger\Client\Model\UserDTO**](../Model/.md)|  | [optional]
 **confirm** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\UserDTO[]**](../Model/UserDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete5**
> \Swagger\Client\Model\ServiceResult delete5($sid, $id)



Delete a certain user by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the openmeetings user id

try {
    $result = $apiInstance->delete5($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->delete5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the openmeetings user id |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternal1**
> \Swagger\Client\Model\ServiceResult deleteExternal1($sid, $externaltype, $externalid)



Delete a certain user by its external user id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$externaltype = "externaltype_example"; // string | externalUserId
$externalid = "externalid_example"; // string | externalType

try {
    $result = $apiInstance->deleteExternal1($sid, $externaltype, $externalid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->deleteExternal1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **externaltype** | **string**| externalUserId |
 **externalid** | **string**| externalType |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get3**
> \Swagger\Client\Model\UserDTO[] get3($sid)



Lists all users in the system!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin

try {
    $result = $apiInstance->get3($sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->get3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |

### Return type

[**\Swagger\Client\Model\UserDTO[]**](../Model/UserDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoomHash**
> \Swagger\Client\Model\ServiceResult getRoomHash($sid, $user, $options)



Sets the SessionObject for a certain SID, after setting this  Session-Object you can use the SID + a RoomId to enter any Room. ...  Session-Hashs are deleted 15 minutes after the creation if not used.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$user = new \Swagger\Client\Model\ExternalUserDTO(); // \Swagger\Client\Model\ExternalUserDTO | 
$options = new \Swagger\Client\Model\RoomOptionsDTO(); // \Swagger\Client\Model\RoomOptionsDTO | 

try {
    $result = $apiInstance->getRoomHash($sid, $user, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->getRoomHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **user** | [**\Swagger\Client\Model\ExternalUserDTO**](../Model/.md)|  | [optional]
 **options** | [**\Swagger\Client\Model\RoomOptionsDTO**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **login**
> \Swagger\Client\Model\ServiceResult login($user, $pass)



Login and create sessionId required for sub-sequent calls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = "user_example"; // string | login or email of Openmeetings user with admin or SOAP-rights
$pass = "pass_example"; // string | password

try {
    $result = $apiInstance->login($user, $pass);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| login or email of Openmeetings user with admin or SOAP-rights |
 **pass** | **string**| password |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

