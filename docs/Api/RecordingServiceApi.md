# Swagger\Client\RecordingServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete3**](RecordingServiceApi.md#delete3) | **DELETE** /record/{id} | 
[**getExternal**](RecordingServiceApi.md#getexternal) | **GET** /record/{externaltype}/{externalid} | 
[**getExternalByRoom**](RecordingServiceApi.md#getexternalbyroom) | **GET** /record/room/{roomid} | 
[**getExternalByType**](RecordingServiceApi.md#getexternalbytype) | **GET** /record/{externaltype} | 

# **delete3**
> \Swagger\Client\Model\ServiceResultWrapper delete3($sid, $id)



Deletes a recording

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecordingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the id of the recording

try {
    $result = $apiInstance->delete3($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingServiceApi->delete3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the id of the recording |

### Return type

[**\Swagger\Client\Model\ServiceResultWrapper**](../Model/ServiceResultWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternal**
> \Swagger\Client\Model\RecordingDTOListWrapper getExternal($sid, $externaltype, $externalid)



Gets a list of recordings created by particular external USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecordingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$externaltype = "externaltype_example"; // string | the externalUserId
$externalid = "externalid_example"; // string | the externalUserType

try {
    $result = $apiInstance->getExternal($sid, $externaltype, $externalid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingServiceApi->getExternal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **externaltype** | **string**| the externalUserId |
 **externalid** | **string**| the externalUserType |

### Return type

[**\Swagger\Client\Model\RecordingDTOListWrapper**](../Model/RecordingDTOListWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalByRoom**
> \Swagger\Client\Model\RecordingDTOListWrapper getExternalByRoom($sid, $roomid)



Gets a list of recordings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecordingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$roomid = 789; // int | the room id

try {
    $result = $apiInstance->getExternalByRoom($sid, $roomid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingServiceApi->getExternalByRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **roomid** | **int**| the room id |

### Return type

[**\Swagger\Client\Model\RecordingDTOListWrapper**](../Model/RecordingDTOListWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalByType**
> \Swagger\Client\Model\RecordingDTOListWrapper getExternalByType($sid, $externaltype)



Gets a list of recordings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecordingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$externaltype = "externaltype_example"; // string | externalType specified when creating the room

try {
    $result = $apiInstance->getExternalByType($sid, $externaltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingServiceApi->getExternalByType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **externaltype** | **string**| externalType specified when creating the room |

### Return type

[**\Swagger\Client\Model\RecordingDTOListWrapper**](../Model/RecordingDTOListWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

