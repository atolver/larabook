<?php
/**
 * StatusWasPublished File Doc Comment
 *
 * PHP version 5
 *
 * @category StatusWasPublished
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 *
 */
namespace Larabook\Statuses\Events;

/**
 * Class StatusWasPublished
 *
 * @category StatusWasPublished
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 */
class StatusWasPublished
{

    /**
     *
     * @var mixed
     * @access public
    */
    public $body;


    /**
     * Constructor
     *
     * @param mixed $body description
     */
    public function __construct($body)
    {
        $this->body = $body;
    }

}
