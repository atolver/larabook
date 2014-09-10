<?php namespace Larabook\Statuses;

use Laracasts\Presenter\Presenter;

class StatusPresenter extends Presenter {

    /**
     * Display how long its been since the published date.
     *
     * $param int $size
     * @return string
     * @author Alonzo Tolver
     */
    public function timeSincePublished()
    {
        return $this->created_at->diffForHumans();
    }

}
