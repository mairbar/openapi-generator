<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\MapTest;

/**
 * MapTestTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\MapTest
 */
class MapTestTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "MapTest"
     */
    public function testMapTest()
    {
        $testMapTest = new MapTest();
        $this->markTestIncomplete(
            'Test of "MapTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "mapMapOfString"
     */
    public function testPropertyMapMapOfString()
    {
        $this->markTestIncomplete(
            'Test of "mapMapOfString" property in "MapTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "mapOfEnumString"
     */
    public function testPropertyMapOfEnumString()
    {
        $this->markTestIncomplete(
            'Test of "mapOfEnumString" property in "MapTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "directMap"
     */
    public function testPropertyDirectMap()
    {
        $this->markTestIncomplete(
            'Test of "directMap" property in "MapTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "indirectMap"
     */
    public function testPropertyIndirectMap()
    {
        $this->markTestIncomplete(
            'Test of "indirectMap" property in "MapTest" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaObject = MapTest::getOpenApiSchema();
        $schemaArr = MapTest::getOpenApiSchema(true);
        $this->assertIsObject($schemaObject);
        $this->assertIsArray($schemaArr);
    }
}
