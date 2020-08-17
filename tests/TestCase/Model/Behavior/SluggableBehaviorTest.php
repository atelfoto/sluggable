<?php
namespace Sluggable\Test\TestCase\Model\Behavior;

use Cake\TestSuite\TestCase;
use Sluggable\Model\Behavior\SluggableBehavior;

/**
 * Sluggable\Model\Behavior\SluggableBehavior Test Case
 */
class SluggableBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Sluggable\Model\Behavior\SluggableBehavior
     */
    public $Sluggable;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Sluggable = new SluggableBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sluggable);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
