# Swagger\Client\NetTestServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get2**](NetTestServiceApi.md#get2) | **GET** /networktest | 
[**upload**](NetTestServiceApi.md#upload) | **POST** /networktest | 

# **get2**
> get2($type, $size)



Generate a sample for network test

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetTestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | one of ping, jitter, download, upload
$size = 56; // int | requests size of sample

try {
    $apiInstance->get2($type, $size);
} catch (Exception $e) {
    echo 'Exception when calling NetTestServiceApi->get2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| one of ping, jitter, download, upload |
 **size** | **int**| requests size of sample |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upload**
> upload($body, $size)



Upload media to test upload speed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetTestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | stream to upload
$size = 56; // int | size

try {
    $apiInstance->upload($body, $size);
} catch (Exception $e) {
    echo 'Exception when calling NetTestServiceApi->upload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| stream to upload |
 **size** | **int**| size |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

