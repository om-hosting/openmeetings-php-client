# Swagger\Client\WbServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cleanSlide**](WbServiceApi.md#cleanslide) | **GET** /wb/cleanslide/{roomid}/{wbid}/{slide} | 
[**cleanWb1**](WbServiceApi.md#cleanwb1) | **GET** /wb/cleanwb/{roomid}/{wbid} | 
[**resetWb**](WbServiceApi.md#resetwb) | **GET** /wb/resetwb/{id} | 
[**uploadWb**](WbServiceApi.md#uploadwb) | **POST** /wb/uploadwb/{type} | 

# **cleanSlide**
> \Swagger\Client\Model\ServiceResult cleanSlide($sid, $roomid, $wbid, $slide)



This method will do the same as clean slide in the room (except for there will be no UNDO)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WbServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$roomid = 789; // int | id of the room to clean
$wbid = 789; // int | id of the white board to clean
$slide = 56; // int | slide number (zero based)

try {
    $result = $apiInstance->cleanSlide($sid, $roomid, $wbid, $slide);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WbServiceApi->cleanSlide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **roomid** | **int**| id of the room to clean |
 **wbid** | **int**| id of the white board to clean |
 **slide** | **int**| slide number (zero based) |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cleanWb1**
> \Swagger\Client\Model\ServiceResult cleanWb1($sid, $roomid, $wbid)



This method will do the same as clean WB in the room (except for there will be no UNDO)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WbServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$roomid = 789; // int | id of the room to clean
$wbid = 789; // int | id of the white board to clean

try {
    $result = $apiInstance->cleanWb1($sid, $roomid, $wbid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WbServiceApi->cleanWb1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **roomid** | **int**| id of the room to clean |
 **wbid** | **int**| id of the white board to clean |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetWb**
> \Swagger\Client\Model\ServiceResult resetWb($sid, $id)



This method will remove all whiteboards from given room  and create empty one(s) for room files specified

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WbServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | id of the room to clean

try {
    $result = $apiInstance->resetWb($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WbServiceApi->resetWb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| id of the room to clean |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadWb**
> \Swagger\Client\Model\ServiceResult uploadWb($sid, $type, $data)



This method will receive WB as binary data (png) and store it to temporary PDF/PNG file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WbServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$type = "type_example"; // string | the type of document being saved PNG/PDF
$data = "data_example"; // string | 

try {
    $result = $apiInstance->uploadWb($sid, $type, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WbServiceApi->uploadWb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **type** | **string**| the type of document being saved PNG/PDF |
 **data** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

