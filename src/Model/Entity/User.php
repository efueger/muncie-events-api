<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $role
 * @property string $bio
 * @property string $email
 * @property string $password
 * @property int $mailing_list_id
 * @property int $facebook_id
 * @property string $api_key
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\EventSeries[] $event_series
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Image[] $images
 * @property \App\Model\Entity\Tag[] $tags
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'role' => true,
        'bio' => true,
        'email' => true,
        'password' => true,
        'mailing_list_id' => true,
        'facebook_id' => true,
        'created' => true,
        'modified' => true,
        'mailing_list' => true,
        'facebook' => true,
        'event_series' => true,
        'events' => true,
        'images' => true,
        'tags' => true,
        'api_key' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    /**
     * Automatically hashes password
     *
     * @param string $password Password
     * @return bool|string
     */
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
