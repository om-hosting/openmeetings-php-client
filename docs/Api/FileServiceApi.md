# Swagger\Client\FileServiceApi

All URIs are relative to *http://localhost:5080/openmeetings/services*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add**](FileServiceApi.md#add) | **POST** /file | 
[**delete1**](FileServiceApi.md#delete1) | **DELETE** /file/{id} | 
[**deleteExternal**](FileServiceApi.md#deleteexternal) | **DELETE** /file/{externaltype}/{externalid} | 
[**getAllExternal**](FileServiceApi.md#getallexternal) | **GET** /file/{externaltype} | 
[**getRoom**](FileServiceApi.md#getroom) | **GET** /file/room/{id} | 
[**getRoomByParent**](FileServiceApi.md#getroombyparent) | **GET** /file/room/{id}/{parent} | 
[**move**](FileServiceApi.md#move) | **POST** /file/move/{roomid}/{id}/{parentid} | 
[**rename**](FileServiceApi.md#rename) | **POST** /file/rename/{id}/{name} | 

# **add**
> \Swagger\Client\Model\FileItemDTOWrapper add($external_id, $external_type, $group_id, $hash, $height, $id, $name, $owner_id, $parent_id, $room_id, $size, $type, $width, $sid)



to add a folder to the private drive, set parentId = 0 and isOwner to 1/true and  externalUserId/externalUserType to a valid USER

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = "external_id_example"; // string | 
$external_type = "external_type_example"; // string | 
$group_id = 789; // int | 
$hash = "hash_example"; // string | 
$height = 56; // int | 
$id = 789; // int | 
$name = "name_example"; // string | 
$owner_id = 789; // int | 
$parent_id = 789; // int | 
$room_id = 789; // int | 
$size = 789; // int | 
$type = "type_example"; // string | 
$width = 56; // int | 
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin

try {
    $result = $apiInstance->add($external_id, $external_type, $group_id, $hash, $height, $id, $name, $owner_id, $parent_id, $room_id, $size, $type, $width, $sid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**|  |
 **external_type** | **string**|  |
 **group_id** | **int**|  |
 **hash** | **string**|  |
 **height** | **int**|  |
 **id** | **int**|  |
 **name** | **string**|  |
 **owner_id** | **int**|  |
 **parent_id** | **int**|  |
 **room_id** | **int**|  |
 **size** | **int**|  |
 **type** | **string**|  |
 **width** | **int**|  |
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |

### Return type

[**\Swagger\Client\Model\FileItemDTOWrapper**](../Model/FileItemDTOWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete1**
> \Swagger\Client\Model\ServiceResultWrapper delete1($sid, $id)



deletes files or folders based on it id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the id of the file or folder

try {
    $result = $apiInstance->delete1($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->delete1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the id of the file or folder |

### Return type

[**\Swagger\Client\Model\ServiceResultWrapper**](../Model/ServiceResultWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternal**
> \Swagger\Client\Model\ServiceResultWrapper deleteExternal($sid, $externaltype, $externalid)



deletes a file by its external Id and type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$externaltype = "externaltype_example"; // string | the externalType
$externalid = "externalid_example"; // string | the id of the file or folder

try {
    $result = $apiInstance->deleteExternal($sid, $externaltype, $externalid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->deleteExternal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **externaltype** | **string**| the externalType |
 **externalid** | **string**| the id of the file or folder |

### Return type

[**\Swagger\Client\Model\ServiceResultWrapper**](../Model/ServiceResultWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllExternal**
> \Swagger\Client\Model\FileItemDTOListWrapper getAllExternal($sid, $externaltype)



Get all files by external type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$externaltype = "externaltype_example"; // string | External type for file listing

try {
    $result = $apiInstance->getAllExternal($sid, $externaltype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->getAllExternal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **externaltype** | **string**| External type for file listing |

### Return type

[**\Swagger\Client\Model\FileItemDTOListWrapper**](../Model/FileItemDTOListWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoom**
> \Swagger\Client\Model\FileExplorerObjectWrapper getRoom($sid, $id)



Get a File Explorer Object by a given ROOM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | ROOM Id

try {
    $result = $apiInstance->getRoom($sid, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->getRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| ROOM Id |

### Return type

[**\Swagger\Client\Model\FileExplorerObjectWrapper**](../Model/FileExplorerObjectWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoomByParent**
> \Swagger\Client\Model\FileItemDTOListWrapper getRoomByParent($sid, $id, $parent)



Get list of FileItemDTO by parent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | the parent folder id
$parent = 789; // int | the room id

try {
    $result = $apiInstance->getRoomByParent($sid, $id, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->getRoomByParent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| the parent folder id |
 **parent** | **int**| the room id |

### Return type

[**\Swagger\Client\Model\FileItemDTOListWrapper**](../Model/FileItemDTOListWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **move**
> \Swagger\Client\Model\FileItemDTOWrapper move($sid, $id, $roomid, $parentid)



move a file or folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | current file or folder id to be moved
$roomid = 789; // int | room this file need to be moved
$parentid = 789; // int | new parent folder id

try {
    $result = $apiInstance->move($sid, $id, $roomid, $parentid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->move: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| current file or folder id to be moved |
 **roomid** | **int**| room this file need to be moved |
 **parentid** | **int**| new parent folder id |

### Return type

[**\Swagger\Client\Model\FileItemDTOWrapper**](../Model/FileItemDTOWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rename**
> \Swagger\Client\Model\FileItemDTOWrapper rename($sid, $id, $name)



update a file or folder name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$id = 789; // int | file or folder id
$name = "name_example"; // string | new file or folder name

try {
    $result = $apiInstance->rename($sid, $id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->rename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sid** | **string**| The SID of the User. This SID must be marked as Loggedin |
 **id** | **int**| file or folder id |
 **name** | **string**| new file or folder name |

### Return type

[**\Swagger\Client\Model\FileItemDTOWrapper**](../Model/FileItemDTOWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

