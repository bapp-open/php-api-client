<?php
/**
 * NotificationTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BAPP API
 *
 * Test description
 *
 * OpenAPI spec version: v1
 * Contact: contact@snippets.local
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.23
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * NotificationTest Class Doc Comment
 *
 * @category    Class
 * @description Action model describing the actor acting out a verb (on an optional target). Nomenclature based on http://activitystrea.ms/specs/atom/1.0/ Generalized Format:: &lt;actor&gt; &lt;verb&gt; &lt;time&gt; &lt;actor&gt; &lt;verb&gt; &lt;target&gt; &lt;time&gt; &lt;actor&gt; &lt;verb&gt; &lt;action_object&gt; &lt;target&gt; &lt;time&gt; Examples:: &lt;justquick&gt; &lt;reached level 60&gt; &lt;1 minute ago&gt; &lt;brosner&gt; &lt;commented on&gt; &lt;pinax/pinax&gt; &lt;2 hours ago&gt; &lt;washingtontimes&gt; &lt;started follow&gt; &lt;justquick&gt; &lt;8 minutes ago&gt; &lt;mitsuhiko&gt; &lt;closed&gt; &lt;issue 70&gt; on &lt;mitsuhiko/flask&gt; &lt;about 2 hours ago&gt; Unicode Representation:: justquick reached level 60 1 minute ago mitsuhiko closed issue 70 on mitsuhiko/flask 3 hours ago HTML Representation:: &lt;a href&#x3D;\&quot;http://oebfare.com/\&quot;&gt;brosner&lt;/a&gt; commented on &lt;a href&#x3D;\&quot;http://github.com/pinax/pinax\&quot;&gt;pinax/pinax&lt;/a&gt; 2 hours ago # noqa ALTERNATE: - actor: An Object Construct that identifies the entity that performed the activity. An Activity construct MUST have exactly one actor. - verb: Description of action happened. - target: The target of an activity is an Object Construct that represents the object to which the activity was performed - time: The time at which the activity occurred
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotificationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
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
     * Test "Notification"
     */
    public function testNotification()
    {
    }

    /**
     * Test attribute "time"
     */
    public function testPropertyTime()
    {
    }

    /**
     * Test attribute "level"
     */
    public function testPropertyLevel()
    {
    }

    /**
     * Test attribute "unread"
     */
    public function testPropertyUnread()
    {
    }

    /**
     * Test attribute "actor_content_type"
     */
    public function testPropertyActorContentType()
    {
    }

    /**
     * Test attribute "actor_id"
     */
    public function testPropertyActorId()
    {
    }

    /**
     * Test attribute "verb"
     */
    public function testPropertyVerb()
    {
    }

    /**
     * Test attribute "target_content_type"
     */
    public function testPropertyTargetContentType()
    {
    }

    /**
     * Test attribute "target_id"
     */
    public function testPropertyTargetId()
    {
    }

    /**
     * Test attribute "action_object_content_type"
     */
    public function testPropertyActionObjectContentType()
    {
    }

    /**
     * Test attribute "action_object_id"
     */
    public function testPropertyActionObjectId()
    {
    }

    /**
     * Test attribute "message"
     */
    public function testPropertyMessage()
    {
    }

    /**
     * Test attribute "company_id"
     */
    public function testPropertyCompanyId()
    {
    }

    /**
     * Test attribute "notification_link"
     */
    public function testPropertyNotificationLink()
    {
    }
}
