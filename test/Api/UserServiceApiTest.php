<?php
/**
 * UserServiceApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Apache OpenMeetings API
 *
 * Integration API enables to connect to an OpenMeetings instance, eg for generating users, create links to directly access conference rooms.<br/><br/>         <b>It is mainly designed for Server2Server integration, for example to integrate into your website, CMS or 3rd party application</b><br/><br/>         For examples how to use the Rest API see <a href=\"https://openmeetings.apache.org/RestAPISample.html\" target=\"_BLANK\">https://openmeetings.apache.org/RestAPISample.html</a>.<br/><br/>         Community contributed modules for using this API include for example:         <ul>          <li><a href=\"https://openmeetings.apache.org/RestAPISample.html#how-to-integrate-using-nodejs\" target=\"_BLANK\"> Node.js module for using API</a></li>         </ul>         Other community plugins using this API for Moodle, SugarCRM, Drupal, Joomla can be found in the Configuration>Plugins section at <a href=\"https://openmeetings.apache.org\" target=\"_BLANK\">https://openmeetings.apache.org</a>
 *
 * OpenAPI spec version: 7.0.0-SNAPSHOT
 * Contact: dev@openmeetings.apache.org
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use Swagger\Client\Api\UserServiceApi;
use Swagger\Client\Model\ExternalUserDTO;
use Swagger\Client\Model\RoomOptionsDTO;
use Swagger\Client\Model\UserBody;

/**
 * UserServiceApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserServiceApiTest extends \PHPUnit_Framework_TestCase
{

    private $userApiInstance;
    private $sid;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $config = new Configuration();
        $config->setHost('http://localhost:5080/openmeetings/services');
        $this->userApiInstance = new UserServiceApi(null, $config);
        $serviceResultWrapper = $this->userApiInstance->login("soapuser", "!HansHans1");
        if ($serviceResultWrapper->getServiceResult()->getType() != "SUCCESS") {
            fwrite(STDERR, print_r($serviceResultWrapper, true));
            return false;
        }
        $this->sid = $serviceResultWrapper->getServiceResult()->getMessage();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for add3
     *
     * .
     *
     */
    public function testAdd3()
    {

        $this->userApiInstance->

        $userDTOWrapper = $this->userApiInstance->add3($this->sid, new UserBody(
            array(
                "firstname" => "John",
                "lastname" => "Doe",
                "external_id" => "uniqueId1",
                "external_type" => "myCMS",
                "login" => "john.doe",
                "email" => "john.doe@gmail.com"
            )
        ));
    }

    /**
     * Test case for delete5
     *
     * .
     *
     */
    public function testDelete5()
    {
    }

    /**
     * Test case for deleteExternal1
     *
     * .
     *
     */
    public function testDeleteExternal1()
    {
    }

    /**
     * Test case for get3
     *
     * .
     *
     */
    public function testGet3()
    {
    }

    /**
     * Test case for getRoomHash
     *
     * .
     *
     */
    public function testGetRoomHash()
    {
        $serviceResultHashResultWrapper = $this->userApiInstance->getRoomHash(
            $this->sid,
            new RoomOptionsDTO(
                array(
                    "room_id" => 1,
                    "moderator" => true
                )
            ),
            new ExternalUserDTO(
                array(
                    "firstname" => "John",
                    "lastname" => "Doe",
                    "external_id" => "uniqueId1",
                    "external_type" => "myCMS",
                    "login" => "john.doe",
                    "email" => "john.doe@gmail.com"
                )
            )
        );

        $this->assertEquals("SUCCESS", $serviceResultHashResultWrapper->getServiceResult()->getType());
    }
}
