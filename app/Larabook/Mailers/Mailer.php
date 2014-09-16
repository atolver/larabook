<?php
/**
 * Mailer File Doc Comment
 *
 * PHP version 5
 *
 * @category Mailer
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 *
 */
namespace Larabook\Mailers;

use Illuminate\Mail\Mailer as Mail;

/**
 * Class Mailer
 *
 * @category Mailer
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 */
abstract class Mailer
{


    /**
     *
     * @var Mail
     * @access private
     */
    protected $mail;


    /**
     * Constructor
     *
     * @param Mail $mail description
     */
    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    /**
     * sendTo
     *
     * @param $user
     * @param $subject
     * @param $view
     * @param $data
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function sendTo($user, $subject, $view, $data = [])
    {
        $this->mail->queue($view, $data, function($message) use($user, $subject)
        {
            $message->to($user->email)->subject($subject);
        });
    }
}
