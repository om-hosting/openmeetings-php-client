# Swagger\Client\GroupServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add1**](GroupServiceApi.md#add1) | **POST** /group | 
[**addRoom**](GroupServiceApi.md#addroom) | **POST** /group/{id}/rooms/add/{roomid} | 
[**addUser**](GroupServiceApi.md#adduser) | **POST** /group/{id}/users/{userid} | 
[**delete2**](GroupServiceApi.md#delete2) | **DELETE** /group/{id} | 
[**get1**](GroupServiceApi.md#get1) | **GET** /group | 
[**getUsers**](GroupServiceApi.md#getusers) | **GET** /group/users/{id} | 
[**removeUser**](GroupServiceApi.md#removeuser) | **DELETE** /group/{id}/users/{userid} | 

# **add1**
> \Swagger\Client\Model\ServiceResult add1($sid, $name)



add a new group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$name = "name_example"; // string | The name of the group

try {
    $result = $apiInstance->add1($sid, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->add1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **name** | **string**| The name of the group |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRoom**
> \Swagger\Client\Model\ServiceResult addRoom($sid, $id, $roomid)



Adds a room to an group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | Id of group that the room is being paired with
$roomid = 789; // int | Id of room to be added

try {
    $result = $apiInstance->addRoom($sid, $id, $roomid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->addRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| Id of group that the room is being paired with |
 **roomid** | **int**| Id of room to be added |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addUser**
> \Swagger\Client\Model\ServiceResult addUser($sid, $id, $userid)



Add USER to a certain group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the USER id
$userid = 789; // int | the group id

try {
    $result = $apiInstance->addUser($sid, $id, $userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->addUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the USER id |
 **userid** | **int**| the group id |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete2**
> \Swagger\Client\Model\ServiceResult delete2($sid, $id)



Deletes a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the id of the group

try {
    $result = $apiInstance->delete2($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->delete2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the id of the group |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get1**
> \Swagger\Client\Model\GroupDTO[] get1($sid)



Get the list of all groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin

try {
    $result = $apiInstance->get1($sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->get1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |

### Return type

[**\Swagger\Client\Model\GroupDTO[]**](../Model/GroupDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Swagger\Client\Model\UserSearchResult getUsers($sid, $id, $start, $max, $orderby, $asc)



Search users and return them

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the group id
$start = 56; // int | first record
$max = 56; // int | max records
$orderby = "orderby_example"; // string | orderby clause
$asc = true; // bool | asc or desc

try {
    $result = $apiInstance->getUsers($sid, $id, $start, $max, $orderby, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the group id |
 **start** | **int**| first record |
 **max** | **int**| max records |
 **orderby** | **string**| orderby clause |
 **asc** | **bool**| asc or desc |

### Return type

[**\Swagger\Client\Model\UserSearchResult**](../Model/UserSearchResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUser**
> \Swagger\Client\Model\ServiceResult removeUser($sid, $id, $userid)



Remove USER from a certain group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the USER id
$userid = 789; // int | the group id

try {
    $result = $apiInstance->removeUser($sid, $id, $userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->removeUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the USER id |
 **userid** | **int**| the group id |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

