<?php
/**
 * FollowableTrait File Doc Comment
 *
 * PHP version 5
 *
 * @category FollowableTrait
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 *
 */
namespace Larabook\Users;

/**
 * Class FollowableTrait
 *
 * @category FollowableTrait
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 */
trait FollowableTrait
{

    /**
     * Get the list of users that the current user follows.
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function followedUsers()
    {
        return $this->belongsToMany(static::class, 'follows', 'follower_id', 'followed_id')->withTimestamps();
    }

    /**
     * Get the list of users who follow the current user.
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function followers()
    {
        return $this->belongsToMany(static::class, 'follows', 'followed_id', 'follower_id')->withTimestamps();
    }

    /**
     * isFollowedBy
     *
     * @param User $otherUser description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function isFollowedBy(User $otherUser)
    {
        $idsWhoOtherUsersFollow = $otherUser->followedUsers()->lists('followed_id');

        return in_array($this->id, $idsWhoOtherUsersFollow);
    }

}
