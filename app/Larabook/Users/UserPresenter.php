<?php namespace Larabook\Users;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    /**
     * Present a link to the users gravatar
     *
     * $param int $size
     * @return string
     * @author Alonzo Tolver
     */
    public function gravatar($size = 30)
    {
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{$email}?s={$size}";
    }


    /**
     * followerCount
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function followerCount()
    {
        $count = $this->entity->followers()->count();

        $plural = str_plural('Follower', $count);

        return "{$count} {$plural}";

    }

    /**
     * statusCount
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function statusCount()
    {
        $count = $this->entity->statuses()->count();

        $plural = str_plural('Status', $count);

        return "{$count} {$plural}";

    }
}
