<?php
namespace Sluggable\Model\Behavior;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\Utility\Text;

use Cake\ORM\Table;

/**
 * Sluggable behavior
 */
class SluggableBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'field' => 'name',
        'slug' => 'slug',
        'replacement' => '-',
    ];

    /**
     * slug description
     * @param  Entity $entity [description]
     * @return void
     */
    public function slug(Entity $entity)
    {
        $config = $this->getConfig();
        $value = $entity->get($config['field']);
        $value = str_replace(
            ['é', 'è', 'ê', 'ë', 'à', 'â', 'î', 'ï', 'ô', 'ù', 'û', 'ç'],
            ['e', 'e', 'e', 'e', 'a', 'a', 'i', 'i', 'o', 'u', 'u', 'c'],
            $value
        );
        $entity->set($config['slug'], strtolower(Text::slug($value, $config['replacement'])));
    }

    /**
     * [beforeSave description]
     * @param  Event           $event   [description]
     * @param  EntityInterface $entity  [description]
     * @param  ArrayObject     $options [description]
     * @return void
     */
    public function beforeSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->slug($entity);
    }
}
