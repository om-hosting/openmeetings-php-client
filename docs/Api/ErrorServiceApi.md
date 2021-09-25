# Swagger\Client\ErrorServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](ErrorServiceApi.md#get) | **GET** /error/{key}/{lang} | 
[**report**](ErrorServiceApi.md#report) | **POST** /error/report | 

# **get**
> \Swagger\Client\Model\ServiceResultWrapper get($key, $lang)



Loads an Error-Object. If a Method returns a negative Result, its an  Error-id, it needs a languageId to specify in which language you want to  display/read the error-message. English has the Language-ID one, for  different one see the list of languages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ErrorServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | the error key for ex. `error.unknown`
$lang = 789; // int | The id of the language

try {
    $result = $apiInstance->get($key, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorServiceApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| the error key for ex. &#x60;error.unknown&#x60; |
 **lang** | **int**| The id of the language |

### Return type

[**\Swagger\Client\Model\ServiceResultWrapper**](../Model/ServiceResultWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **report**
> report($sid, $message)



Logs an error to the log file for reporting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ErrorServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$message = "message_example"; // string | The message to log

try {
    $apiInstance->report($sid, $message);
} catch (Exception $e) {
    echo 'Exception when calling ErrorServiceApi->report: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **message** | **string**| The message to log |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

