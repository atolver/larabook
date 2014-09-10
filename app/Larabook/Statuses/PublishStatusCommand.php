<?php
/**
 * PublishStatusCommand File Doc Comment
 *
 * PHP version 5
 *
 * @category PublishStatusCommand
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */
namespace Larabook\Statuses;

/**
 * Class PublishStatusCommand
 *
 * @category PublishStatusCommand
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 */
class PublishStatusCommand
{

	public $body;
	public $userId;

    /**
     * Constructor
     *
     * @param mixed $body Body
     */
    public function __construct($body, $userId)
    {
        $this->body = $body;
        $this->userId = $userId;
    }

}

