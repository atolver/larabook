<?php
/**
 * CommandBus File Doc Comment
 *
 * PHP version 5
 *
 * @category CommandBus
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */
namespace Larabook\Core;

use App;

trait CommandBus
{

    /**
     * execute
     *
     * @param mixed $command The Command
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function execute($command)
    {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * someFunc
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function getCommandBus()
    {
        return     App::make('Laracasts\Commander\CommandBus');
    }

}
