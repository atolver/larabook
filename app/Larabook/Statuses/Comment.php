<?php
/**
 * Comment File Doc Comment
 *
 * PHP version 5
 *
 * @category Comment
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     larabook.app
 *
 */
namespace Larabook\Statuses;

/**
 * Class Comment
 *
 * @category Comment
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     larabook.app
 */
class Comment extends \Eloquent
{

    protected $fillable = ['user_id', 'status_id', 'body'];


    /**
     * owner
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function owner()
    {
        return $this->belongsTo('Larabook\Users\User', 'user_id');
    }

    /**
     * leave
     *
     * @param mixed $body description
     * @param mixed $statusId description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public static function leave($body, $statusId)
    {
        return new static([
            'body' => $body,
            'status_id' => $statusId
        ]);
    }
}
