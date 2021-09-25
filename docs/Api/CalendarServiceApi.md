# Swagger\Client\CalendarServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete**](CalendarServiceApi.md#delete) | **DELETE** /calendar/{id} | 
[**getByRoom**](CalendarServiceApi.md#getbyroom) | **GET** /calendar/room/{roomid} | 
[**getByTitle**](CalendarServiceApi.md#getbytitle) | **GET** /calendar/title/{title} | 
[**next**](CalendarServiceApi.md#next) | **GET** /calendar/next | 
[**nextForUser**](CalendarServiceApi.md#nextforuser) | **GET** /calendar/next/{userid} | 
[**range**](CalendarServiceApi.md#range) | **GET** /calendar/{start}/{end} | 
[**rangeForUser**](CalendarServiceApi.md#rangeforuser) | **GET** /calendar/{userid}/{start}/{end} | 
[**save**](CalendarServiceApi.md#save) | **POST** /calendar | 

# **delete**
> \Swagger\Client\Model\ServiceResultWrapper delete($sid, $id)



Delete a calendar event   If the given sid is from an Administrator or Web-Service USER, the USER  can delete any appointment.  If the sid is assigned to a regular USER, he can only delete appointments  where he is also the owner/creator of the appointment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the id to delete

try {
    $result = $apiInstance->delete($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarServiceApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the id to delete |

### Return type

[**\Swagger\Client\Model\ServiceResultWrapper**](../Model/ServiceResultWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getByRoom**
> \Swagger\Client\Model\AppointmentDTOWrapper getByRoom($sid, $roomid)



Load a calendar event by its room id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$roomid = 789; // int | id of appointment special room

try {
    $result = $apiInstance->getByRoom($sid, $roomid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarServiceApi->getByRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **roomid** | **int**| id of appointment special room |

### Return type

[**\Swagger\Client\Model\AppointmentDTOWrapper**](../Model/AppointmentDTOWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getByTitle**
> \Swagger\Client\Model\AppointmentDTOListWrapper getByTitle($sid, $title)



Search a calendar event for the current SID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$title = "title_example"; // string | the search string

try {
    $result = $apiInstance->getByTitle($sid, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarServiceApi->getByTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **title** | **string**| the search string |

### Return type

[**\Swagger\Client\Model\AppointmentDTOListWrapper**](../Model/AppointmentDTOListWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **next**
> \Swagger\Client\Model\AppointmentDTOWrapper next($sid)



Get the next Calendar event for the current USER of the SID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin

try {
    $result = $apiInstance->next($sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarServiceApi->next: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |

### Return type

[**\Swagger\Client\Model\AppointmentDTOWrapper**](../Model/AppointmentDTOWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **nextForUser**
> \Swagger\Client\Model\AppointmentDTOWrapper nextForUser($sid, $userid)



Get the next Calendar event for userId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$userid = 789; // int | the userId the calendar events should be loaded

try {
    $result = $apiInstance->nextForUser($sid, $userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarServiceApi->nextForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **userid** | **int**| the userId the calendar events should be loaded |

### Return type

[**\Swagger\Client\Model\AppointmentDTOWrapper**](../Model/AppointmentDTOWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **range**
> \Swagger\Client\Model\AppointmentDTOListWrapper range($sid, $start, $end)



Load appointments by a start / end range for the current SID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start time
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end time

try {
    $result = $apiInstance->range($sid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarServiceApi->range: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **start** | **\DateTime**| start time |
 **end** | **\DateTime**| end time |

### Return type

[**\Swagger\Client\Model\AppointmentDTOListWrapper**](../Model/AppointmentDTOListWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rangeForUser**
> \Swagger\Client\Model\AppointmentDTOListWrapper rangeForUser($sid, $userid, $start, $end)



Load appointments by a start / end range for the userId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$userid = 789; // int | the userId the calendar events should be loaded
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start time
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end time

try {
    $result = $apiInstance->rangeForUser($sid, $userid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarServiceApi->rangeForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **userid** | **int**| the userId the calendar events should be loaded |
 **start** | **\DateTime**| start time |
 **end** | **\DateTime**| end time |

### Return type

[**\Swagger\Client\Model\AppointmentDTOListWrapper**](../Model/AppointmentDTOListWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **save**
> \Swagger\Client\Model\AppointmentDTOWrapper save($sid, $body)



Create an appointment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$body = new \Swagger\Client\Model\CalendarBody(); // \Swagger\Client\Model\CalendarBody | 

try {
    $result = $apiInstance->save($sid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarServiceApi->save: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **body** | [**\Swagger\Client\Model\CalendarBody**](../Model/CalendarBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AppointmentDTOWrapper**](../Model/AppointmentDTOWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

