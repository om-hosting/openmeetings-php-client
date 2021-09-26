# openmeetings-php-client

![Packagist License](https://img.shields.io/packagist/l/om-hosting/openmeetings-php-client)
![GitHub issues](https://img.shields.io/github/issues/om-hosting/openmeetings-php-client)
![Packagist Version](https://img.shields.io/packagist/v/om-hosting/openmeetings-php-client)
![Packagist Downloads](https://img.shields.io/packagist/dm/om-hosting/openmeetings-php-client)

PHP composer managed package to connect to OpenMeetings REST API.

see also: 
 * https://packagist.org/packages/om-hosting/openmeetings-php-client
 * https://openmeetings.apache.org/swagger/

## Installation

Install packagist package:
```bash
php composer.phar install openmeetings-php-client
```

Usage:
Example usage:
```php
        $BASE_URL = "http://localhost:5080/openmeetings";
    
        //1. Login to service
        $config = new Configuration();
        $config->setHost($BASE_URL . '/services');
        $userApiInstance = new UserServiceApi(null, $config);
        $serviceResultLoginWrapper = $userApiInstance->login("soapuser", "!HansHans1");
        if ($serviceResultLoginWrapper->getServiceResult()->getType() != "SUCCESS") {
            $text = "Login Failed " . $serviceResultLoginWrapper->getServiceResult()->getMessage();
            return view('hello_index', ['text' => $text]);
        }
        $sid = $serviceResultLoginWrapper->getServiceResult()->getMessage();

        // 2. Generate Hash for entering a conference room
        $serviceResultHashWrapper = $userApiInstance->getRoomHash($sid,
            new ExternalUserDTO(
                array(
                    "firstname" => "John",
                    "lastname" => "Doe",
                    "external_id" => "uniqueId1",
                    "external_type" => "myCMS",
                    "login" => "john.doe",
                    "email" => "john.doe@gmail.com"
                )
            ),
            new RoomOptionsDTO(
                array(
                    "room_id" => 2,
                    "moderator" => true
                )
            )
        );

        // 3. Construct Login URL
        $hash = $serviceResultHashWrapper->getServiceResult()->getMessage();
        $url = $this->BASE_URL . "/hash?secure=".$hash;
```

See also example project code at: https://github.com/om-hosting/openmeetings-php-laravel-sample-project

## Description

Integration API enables to connect to an OpenMeetings instance, eg for generating users, create links to directly access conference rooms.<br/><br/>         

<b>It is mainly designed for Server2Server integration, for example to integrate into your website, CMS or 3rd party application</b><br/><br/>         

For examples how to use the Rest API see https://openmeetings.apache.org/RestAPISample.html.       

Community contributed modules for using this API include for example:        

 * https://openmeetings.apache.org/RestAPISample.html#how-to-integrate-using-nodejs

Other community plugins using this API for Moodle, SugarCRM, Drupal, Joomla can be found in the Configuration>Plugins section at https://openmeetings.apache.org

Initial version of this PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 7.0.0-SNAPSHOT
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen
For more information, please visit [https://openmeetings.apache.org/RestAPISample.html](https://openmeetings.apache.org/RestAPISample.html)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/om-hosting/openmeetings-php-client.git"
    }
  ],
  "require": {
    "om-hosting/openmeetings-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/openmeetings-php-client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

$apiInstance = new Swagger\Client\Api\CalendarServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sid = "sid_example"; // string | The SID of the User. This SID must be marked as Loggedin
$appointment = new \Swagger\Client\Model\AppointmentDTO(); // \Swagger\Client\Model\AppointmentDTO | 

try {
    $result = $apiInstance->save($sid, $appointment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarServiceApi->save: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost:5080/openmeetings/services*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CalendarServiceApi* | [**delete**](docs/Api/CalendarServiceApi.md#delete) | **DELETE** /calendar/{id} | 
*CalendarServiceApi* | [**getByRoom**](docs/Api/CalendarServiceApi.md#getbyroom) | **GET** /calendar/room/{roomid} | 
*CalendarServiceApi* | [**getByTitle**](docs/Api/CalendarServiceApi.md#getbytitle) | **GET** /calendar/title/{title} | 
*CalendarServiceApi* | [**next**](docs/Api/CalendarServiceApi.md#next) | **GET** /calendar/next | 
*CalendarServiceApi* | [**nextForUser**](docs/Api/CalendarServiceApi.md#nextforuser) | **GET** /calendar/next/{userid} | 
*CalendarServiceApi* | [**range**](docs/Api/CalendarServiceApi.md#range) | **GET** /calendar/{start}/{end} | 
*CalendarServiceApi* | [**rangeForUser**](docs/Api/CalendarServiceApi.md#rangeforuser) | **GET** /calendar/{userid}/{start}/{end} | 
*CalendarServiceApi* | [**save**](docs/Api/CalendarServiceApi.md#save) | **POST** /calendar | 
*ErrorServiceApi* | [**get**](docs/Api/ErrorServiceApi.md#get) | **GET** /error/{key}/{lang} | 
*ErrorServiceApi* | [**report**](docs/Api/ErrorServiceApi.md#report) | **POST** /error/report | 
*FileServiceApi* | [**add**](docs/Api/FileServiceApi.md#add) | **POST** /file | 
*FileServiceApi* | [**delete1**](docs/Api/FileServiceApi.md#delete1) | **DELETE** /file/{id} | 
*FileServiceApi* | [**deleteExternal**](docs/Api/FileServiceApi.md#deleteexternal) | **DELETE** /file/{externaltype}/{externalid} | 
*FileServiceApi* | [**getAllExternal**](docs/Api/FileServiceApi.md#getallexternal) | **GET** /file/{externaltype} | 
*FileServiceApi* | [**getRoom**](docs/Api/FileServiceApi.md#getroom) | **GET** /file/room/{id} | 
*FileServiceApi* | [**getRoomByParent**](docs/Api/FileServiceApi.md#getroombyparent) | **GET** /file/room/{id}/{parent} | 
*FileServiceApi* | [**move**](docs/Api/FileServiceApi.md#move) | **POST** /file/move/{roomid}/{id}/{parentid} | 
*FileServiceApi* | [**rename**](docs/Api/FileServiceApi.md#rename) | **POST** /file/rename/{id}/{name} | 
*GroupServiceApi* | [**add1**](docs/Api/GroupServiceApi.md#add1) | **POST** /group | 
*GroupServiceApi* | [**addRoom**](docs/Api/GroupServiceApi.md#addroom) | **POST** /group/{id}/rooms/add/{roomid} | 
*GroupServiceApi* | [**addUser**](docs/Api/GroupServiceApi.md#adduser) | **POST** /group/{id}/users/{userid} | 
*GroupServiceApi* | [**delete2**](docs/Api/GroupServiceApi.md#delete2) | **DELETE** /group/{id} | 
*GroupServiceApi* | [**get1**](docs/Api/GroupServiceApi.md#get1) | **GET** /group | 
*GroupServiceApi* | [**getUsers**](docs/Api/GroupServiceApi.md#getusers) | **GET** /group/users/{id} | 
*GroupServiceApi* | [**removeUser**](docs/Api/GroupServiceApi.md#removeuser) | **DELETE** /group/{id}/users/{userid} | 
*InfoServiceApi* | [**getHealth**](docs/Api/InfoServiceApi.md#gethealth) | **GET** /info/health | 
*InfoServiceApi* | [**getVersion**](docs/Api/InfoServiceApi.md#getversion) | **GET** /info/version | 
*NetTestServiceApi* | [**get2**](docs/Api/NetTestServiceApi.md#get2) | **GET** /networktest | 
*NetTestServiceApi* | [**upload**](docs/Api/NetTestServiceApi.md#upload) | **POST** /networktest | 
*RecordingServiceApi* | [**delete3**](docs/Api/RecordingServiceApi.md#delete3) | **DELETE** /record/{id} | 
*RecordingServiceApi* | [**getExternal**](docs/Api/RecordingServiceApi.md#getexternal) | **GET** /record/{externaltype}/{externalid} | 
*RecordingServiceApi* | [**getExternalByRoom**](docs/Api/RecordingServiceApi.md#getexternalbyroom) | **GET** /record/room/{roomid} | 
*RecordingServiceApi* | [**getExternalByType**](docs/Api/RecordingServiceApi.md#getexternalbytype) | **GET** /record/{externaltype} | 
*RoomServiceApi* | [**add2**](docs/Api/RoomServiceApi.md#add2) | **POST** /room | 
*RoomServiceApi* | [**cleanWb**](docs/Api/RoomServiceApi.md#cleanwb) | **GET** /room/cleanwb/{id} | 
*RoomServiceApi* | [**close**](docs/Api/RoomServiceApi.md#close) | **GET** /room/close/{id} | 
*RoomServiceApi* | [**count**](docs/Api/RoomServiceApi.md#count) | **GET** /room/count/{roomid} | 
*RoomServiceApi* | [**delete4**](docs/Api/RoomServiceApi.md#delete4) | **DELETE** /room/{id} | 
*RoomServiceApi* | [**getExternal1**](docs/Api/RoomServiceApi.md#getexternal1) | **GET** /room/{type}/{externaltype}/{externalid} | 
*RoomServiceApi* | [**getPublic**](docs/Api/RoomServiceApi.md#getpublic) | **GET** /room/public/{type} | 
*RoomServiceApi* | [**getRoomById**](docs/Api/RoomServiceApi.md#getroombyid) | **GET** /room/{id} | 
*RoomServiceApi* | [**hash**](docs/Api/RoomServiceApi.md#hash) | **POST** /room/hash | 
*RoomServiceApi* | [**kick**](docs/Api/RoomServiceApi.md#kick) | **GET** /room/kick/{id}/{externalType}/{externalId} | 
*RoomServiceApi* | [**kickAll**](docs/Api/RoomServiceApi.md#kickall) | **GET** /room/kick/{id} | 
*RoomServiceApi* | [**open**](docs/Api/RoomServiceApi.md#open) | **GET** /room/open/{id} | 
*RoomServiceApi* | [**users**](docs/Api/RoomServiceApi.md#users) | **GET** /room/users/{roomid} | 
*UserServiceApi* | [**add3**](docs/Api/UserServiceApi.md#add3) | **POST** /user | 
*UserServiceApi* | [**delete5**](docs/Api/UserServiceApi.md#delete5) | **DELETE** /user/{id} | 
*UserServiceApi* | [**deleteExternal1**](docs/Api/UserServiceApi.md#deleteexternal1) | **DELETE** /user/{externaltype}/{externalid} | 
*UserServiceApi* | [**get3**](docs/Api/UserServiceApi.md#get3) | **GET** /user | 
*UserServiceApi* | [**getRoomHash**](docs/Api/UserServiceApi.md#getroomhash) | **POST** /user/hash | 
*UserServiceApi* | [**login**](docs/Api/UserServiceApi.md#login) | **GET** /user/login | 
*WbServiceApi* | [**cleanSlide**](docs/Api/WbServiceApi.md#cleanslide) | **GET** /wb/cleanslide/{roomid}/{wbid}/{slide} | 
*WbServiceApi* | [**cleanWb1**](docs/Api/WbServiceApi.md#cleanwb1) | **GET** /wb/cleanwb/{roomid}/{wbid} | 
*WbServiceApi* | [**resetWb**](docs/Api/WbServiceApi.md#resetwb) | **GET** /wb/resetwb/{id} | 
*WbServiceApi* | [**uploadWb**](docs/Api/WbServiceApi.md#uploadwb) | **POST** /wb/uploadwb/{type} | 

## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AppointmentDTO](docs/Model/AppointmentDTO.md)
 - [CalendarBody](docs/Model/CalendarBody.md)
 - [ExternalUserDTO](docs/Model/ExternalUserDTO.md)
 - [FileExplorerObject](docs/Model/FileExplorerObject.md)
 - [FileItemDTO](docs/Model/FileItemDTO.md)
 - [GroupDTO](docs/Model/GroupDTO.md)
 - [Health](docs/Model/Health.md)
 - [Info](docs/Model/Info.md)
 - [InvitationDTO](docs/Model/InvitationDTO.md)
 - [MeetingMemberDTO](docs/Model/MeetingMemberDTO.md)
 - [RecordingDTO](docs/Model/RecordingDTO.md)
 - [RoomBody](docs/Model/RoomBody.md)
 - [RoomDTO](docs/Model/RoomDTO.md)
 - [RoomFileDTO](docs/Model/RoomFileDTO.md)
 - [RoomOptionsDTO](docs/Model/RoomOptionsDTO.md)
 - [ServiceResult](docs/Model/ServiceResult.md)
 - [UploadwbTypeBody](docs/Model/UploadwbTypeBody.md)
 - [UserBody](docs/Model/UserBody.md)
 - [UserDTO](docs/Model/UserDTO.md)
 - [UserHashBody](docs/Model/UserHashBody.md)
 - [UserSearchResult](docs/Model/UserSearchResult.md)

## Documentation For Authorization

Authentication token is acquired via calling [**UserServiceApi->login**](docs/Api/UserServiceApi.md#login)


## Author

Sebastian Wagner https://om-hosting.com

