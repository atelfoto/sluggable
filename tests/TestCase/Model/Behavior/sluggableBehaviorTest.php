<?php
namespace Sluggable\Test\TestCase\Model\Behavior;

use Cake\ORM\Entity;
use Cake\TestSuite\TestCase;
use Sluggable\Model\Behavior\sluggableBehavior;

/**
 * Sluggable\Model\Behavior\sluggableBehavior Test Case
 */
class sluggableBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Sluggable\Model\Behavior\sluggableBehavior
     */
    public $sluggable;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->sluggable = new sluggableBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->sluggable);

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

    /**
     * test beforeSave
     *
     * @return void
     */
    public function testBeforeSave()
    {
        $before = $this->Sluggable->get(1);
        $entity = new Entity(['id' => 1, 'name' => 'Lorém Ipsum Page']);
        $this->Model->save($entity);
        $after = $this->Model->get(1);

        $this->assertEquals('loren', $before->slug);
        $this->assertEquals('lorem-ipsum', $after->slug);
    }
}
