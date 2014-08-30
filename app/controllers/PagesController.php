<?php

/**
 * PagesController
 */
class PagesController extends \BaseController
{

    /**
     * home action
     */
    public function home()
    {
        return View::make('pages.home');
    }
}
