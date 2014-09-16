<?php
/**
 * EventServiceProviders File Doc Comment
 *
 * PHP version 5
 *
 * @category EventServiceProviders
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.larabook.app
 *
 */
namespace Larabook\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class EventServiceProviders
 *
 * @category EventServiceProviders
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.larabook.app
 */
class EventServiceProviders extends ServiceProvider
{

    /**
     * register
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function register()
    {
        $this->app['events']->listen('Larabook.*', 'Larabook\Handlers\EmailNotifier');
    }

}
