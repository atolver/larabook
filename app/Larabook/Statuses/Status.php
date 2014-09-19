<?php
/**
 * Status File Doc Comment
 *
 * PHP version 5
 *
 * @category Status
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     larabook.app
 *
 */
namespace Larabook\Statuses;

use Laracasts\Commander\Events\EventGenerator;
use Larabook\Statuses\Events\StatusWasPublished;
use Laracasts\Presenter\PresentableTrait;

/**
 * Class Status
 *
 * @category Status
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     larabook.app
 */
class Status extends \Eloquent
{

    use EventGenerator, PresentableTrait;
    /**
    * Fillable fields for new status
    *
    * @var array
    **/
    protected $fillable = ['body'];

    /**
     * Path to the presenter for the status.
     *
     * @var string
     */
    protected $presenter = 'Larabook\Statuses\StatusPresenter';

    /**
     * user
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function user()
    {
        return $this->belongsTo('Larabook\Users\User');
    }

    /**
     * publish
     *
     * @param mixed $body description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public static function publish($body)
    {
        $status = new static(compact('body'));

        $status->raise(new StatusWasPublished($body));

        return $status;
    }

    /**
     * comments
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function comments()
    {
        return $this->hasMany('Larabook\Statuses\Comment');
    }

}
