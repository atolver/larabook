<?php
/**
 * EmailNotifier File Doc Comment
 *
 * PHP version 5
 *
 * @category EmailNotifier
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 *
 */
namespace Larabook\Handlers;

use Laracasts\Commander\Events\EventListener;
use Larabook\Registration\Events\UserHasRegistered;
use Larabook\Mailers\UserMailer;

/**
 * Class EmailNotifier
 *
 * @category EmailNotifier
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 */
class EmailNotifier extends EventListener
{



    /**
     *
     * @var UserMailer $mailer
     * @access protected
    */
    protected $mailer;


    /**
     * Constructor
     *
     * @param UserMailer $mailer description
     */
    public function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * whenUserHasRegistered
     *
     * @param UserHasRegistered $event description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function whenUserHasRegistered(UserHasRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);
    }

}
