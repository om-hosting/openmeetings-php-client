# Swagger\Client\InfoServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHealth**](InfoServiceApi.md#gethealth) | **GET** /info/health | 
[**getVersion**](InfoServiceApi.md#getversion) | **GET** /info/version | 

# **getHealth**
> \Swagger\Client\Model\Health getHealth()



Method to get health report for this OpenMeetings instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InfoServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoServiceApi->getHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Health**](../Model/Health.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVersion**
> \Swagger\Client\Model\Info getVersion()



Method to get current OpenMeetings version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InfoServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoServiceApi->getVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Info**](../Model/Info.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

