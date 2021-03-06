<?php
namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;
use Codeception\Module\Laravel4;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{

    /**
     * signIn
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function signIn()
    {
        $email = 'foo@example.com';
        $username = 'Foobar';
        $password = 'foo';

        $this->haveAnAccount(compact('username', 'email', 'password'));

        /**
        * @var $I Laravel4
        **/
        $I = $this->getModule('Laravel4');

        $I->amOnPage('/login');
        $I->fillField('email', $email);
        $I->fillField('password', $password);
        $I->click('Sign In');
    }

    /**
     * postAStatus
     *
     * @param mixed $overrides description  = []
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function postAStatus($body)
    {
        $I = $this->getModule('Laravel4');

        $I->fillField('body', $body);
        $I->click('Post Status');
        //$this->have('Larabook\Statuses\Status', $overrides);
    }

    function have($model, $overrides = [])
    {
        return TestDummy::create($model, $overrides);
    }

    /**
     * haveAnAccount
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function haveAnAccount($overrides = [])
    {
        return $this->have('Larabook\Users\User', $overrides);
    }
}
