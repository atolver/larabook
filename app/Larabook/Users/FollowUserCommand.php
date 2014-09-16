<?php namespace Larabook\Users;

class FollowUserCommand {



    /**
     *
     * @var mixed
     * @access public
     */
    public $userId;

    /**
     *
     * @var mixed
     * @access public
     */
    public $userIdToFollow;


    /**
     * Constructor
     *
     * @param mixed $userId description
     * @param mixed $userIdToFollow description
     */
    public function __construct($userId, $userIdToFollow)
    {
        $this->userId = $userId;
        $this->userIdToFollow = $userIdToFollow;
    }

}
