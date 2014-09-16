<?php
/**
 * UserMailer File Doc Comment
 *
 * PHP version 5
 *
 * @category UserMailer
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 *
 */
namespace Larabook\Mailers;

use Larabook\Mailers\Mailer;
use Larabook\Users\User;

/**
 * Class UserMailer
 *
 * @category UserMailer
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 */
class UserMailer extends Mailer
{

    /**
     * sendWelcomeMessageTo
     *
     * @param User $user description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function sendWelcomeMessageTo(User $user)
    {

        $subject = 'Welcome to Larabook!';

        $view = 'emails.registration.confirm';

        $data = [];

        return $this->sendTo($user, $subject, $view);
    }
}
