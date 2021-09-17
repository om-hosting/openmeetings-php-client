# Swagger\Client\RoomServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add2**](RoomServiceApi.md#add2) | **POST** /room | 
[**cleanWb**](RoomServiceApi.md#cleanwb) | **GET** /room/cleanwb/{id} | 
[**close**](RoomServiceApi.md#close) | **GET** /room/close/{id} | 
[**count**](RoomServiceApi.md#count) | **GET** /room/count/{roomid} | 
[**delete4**](RoomServiceApi.md#delete4) | **DELETE** /room/{id} | 
[**getExternal1**](RoomServiceApi.md#getexternal1) | **GET** /room/{type}/{externaltype}/{externalid} | 
[**getPublic**](RoomServiceApi.md#getpublic) | **GET** /room/public/{type} | 
[**getRoomById**](RoomServiceApi.md#getroombyid) | **GET** /room/{id} | 
[**hash**](RoomServiceApi.md#hash) | **POST** /room/hash | 
[**kick**](RoomServiceApi.md#kick) | **GET** /room/kick/{id}/{externalType}/{externalId} | 
[**kickAll**](RoomServiceApi.md#kickall) | **GET** /room/kick/{id} | 
[**open**](RoomServiceApi.md#open) | **GET** /room/open/{id} | 
[**users**](RoomServiceApi.md#users) | **GET** /room/users/{roomid} | 

# **add2**
> \Swagger\Client\Model\RoomDTO add2($sid, $room)



Adds a new ROOM like through the Frontend

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$room = new \Swagger\Client\Model\RoomDTO(); // \Swagger\Client\Model\RoomDTO | 

try {
    $result = $apiInstance->add2($sid, $room);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->add2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **room** | [**\Swagger\Client\Model\RoomDTO**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\RoomDTO**](../Model/RoomDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cleanWb**
> \Swagger\Client\Model\ServiceResult cleanWb($id, $sid)



Method to clean room white board (all objects will be purged) - Deprecated use WbService#resetWb method instead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$sid = "sid_example"; // string | 

try {
    $result = $apiInstance->cleanWb($id, $sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->cleanWb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **sid** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **close**
> \Swagger\Client\Model\ServiceResult close($sid, $id)



Method to remotely close rooms. If a room is closed all users  inside the room and all users that try to enter it will be redirected to  the redirectURL that is defined in the ROOM-Object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the room id

try {
    $result = $apiInstance->close($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->close: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the room id |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **count**
> \Swagger\Client\Model\ServiceResult count($sid, $roomid)



Returns the count of users currently in the ROOM with given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$roomid = 789; // int | roomId id of the room to get users

try {
    $result = $apiInstance->count($sid, $roomid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->count: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **roomid** | **int**| roomId id of the room to get users |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete4**
> \Swagger\Client\Model\ServiceResult delete4($sid, $id)



Delete a room by its room id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | The id of the room

try {
    $result = $apiInstance->delete4($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->delete4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| The id of the room |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternal1**
> \Swagger\Client\Model\RoomDTO getExternal1($sid, $type, $externaltype, $externalid, $room)



Checks if a room with this exteralId + externalType does exist,  if yes it returns the room id if not, it will create the room and then  return the room id of the newly created room

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$type = "type_example"; // string | type of the room
$externaltype = "externaltype_example"; // string | you can specify your system-name or type of room here, for example \"moodle\"
$externalid = "externalid_example"; // string | your external room id may set here
$room = new \Swagger\Client\Model\RoomDTO(); // \Swagger\Client\Model\RoomDTO | details of the room to be created if not found

try {
    $result = $apiInstance->getExternal1($sid, $type, $externaltype, $externalid, $room);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->getExternal1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **type** | **string**| type of the room |
 **externaltype** | **string**| you can specify your system-name or type of room here, for example \&quot;moodle\&quot; |
 **externalid** | **string**| your external room id may set here |
 **room** | [**\Swagger\Client\Model\RoomDTO**](../Model/.md)| details of the room to be created if not found |

### Return type

[**\Swagger\Client\Model\RoomDTO**](../Model/RoomDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublic**
> \Swagger\Client\Model\RoomDTO[] getPublic($sid, $type)



Returns an Object of Type RoomsList which contains a list of  ROOM-Objects. Every ROOM-Object contains a Roomtype and all informations  about that ROOM. The List of current-users in the room is Null if you get  them via SOAP. The Roomtype can be 'conference', 'presentation' or 'interview'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$type = "type_example"; // string | Type of public rooms need to be retrieved

try {
    $result = $apiInstance->getPublic($sid, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->getPublic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **type** | **string**| Type of public rooms need to be retrieved |

### Return type

[**\Swagger\Client\Model\RoomDTO[]**](../Model/RoomDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoomById**
> \Swagger\Client\Model\RoomDTO getRoomById($sid, $id)



Returns a conference room object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the room id

try {
    $result = $apiInstance->getRoomById($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->getRoomById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the room id |

### Return type

[**\Swagger\Client\Model\RoomDTO**](../Model/RoomDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hash**
> \Swagger\Client\Model\ServiceResult hash($sid, $invite, $sendmail)



Method to get invitation hash with given parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$invite = new \Swagger\Client\Model\InvitationDTO(); // \Swagger\Client\Model\InvitationDTO | parameters of the invitation
$sendmail = true; // bool | flag to determine if email should be sent or not

try {
    $result = $apiInstance->hash($sid, $invite, $sendmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->hash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **invite** | [**\Swagger\Client\Model\InvitationDTO**](../Model/.md)| parameters of the invitation |
 **sendmail** | **bool**| flag to determine if email should be sent or not |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kick**
> \Swagger\Client\Model\ServiceResult kick($sid, $id, $external_type, $external_id)



kick external USER from given room

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the room id
$external_type = "external_type_example"; // string | external type of USER to kick
$external_id = "external_id_example"; // string | external id of USER to kick

try {
    $result = $apiInstance->kick($sid, $id, $external_type, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->kick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the room id |
 **external_type** | **string**| external type of USER to kick |
 **external_id** | **string**| external id of USER to kick |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kickAll**
> \Swagger\Client\Model\ServiceResult kickAll($sid, $id)



Kick all uses of a certain room

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the room id

try {
    $result = $apiInstance->kickAll($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->kickAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the room id |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **open**
> \Swagger\Client\Model\ServiceResult open($sid, $id)



Method to remotely open rooms. If a room is closed all users  inside the room and all users that try to enter it will be redirected to  the redirectURL that is defined in the ROOM-Object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the room id

try {
    $result = $apiInstance->open($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->open: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the room id |

### Return type

[**\Swagger\Client\Model\ServiceResult**](../Model/ServiceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **users**
> \Swagger\Client\Model\UserDTO[] users($sid, $roomid)



Returns list of users currently in the ROOM with given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$roomid = 789; // int | roomId id of the room to get users

try {
    $result = $apiInstance->users($sid, $roomid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->users: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **roomid** | **int**| roomId id of the room to get users |

### Return type

[**\Swagger\Client\Model\UserDTO[]**](../Model/UserDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

