<?php
declare(strict_types=1);

namespace Sluggable\Model\Behavior;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Utility\Text;

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
     *
     * @param \Cake\ORM\Entity $entity The entity that is going to be a slug
     * @return void
     */
    public function slug(Entity $entity)
    {
        $config = $this->getConfig();
        $value = $entity->get($config['field']);
        $value = str_replace(
            ['é', 'è', 'ê', 'ë', 'à', 'â', 'î', 'ï', 'ô', 'ù', 'û', 'ç', 'á', 'í', 'ó', 'ú', 'ñ'],
            ['e', 'e', 'e', 'e', 'a', 'a', 'i', 'i', 'o', 'u', 'u', 'c', 'a', 'i', 'o', 'u', 'n'],
            $value
        );
        $value = strtolower(Text::slug($value, $config['replacement']));
        $entity->set($config['slug'], substr($value, 0, 100));
    }

    /**
     * [beforeSave description]
     * @param \Cake\Event\Event $event The beforeSave event that was fired
     * @param \Cake\Datasource\EntityInterface $entity  [The entity that is going to be saved]
     * @param \ArrayObject $options [description]
     * @return void
     */
    public function beforeSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->slug($entity);
    }
}
