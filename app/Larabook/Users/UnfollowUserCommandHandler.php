<?php namespace Larabook\Users;

use Laracasts\Commander\CommandHandler;
use Larabook\Users\UserRepository;

class UnfollowUserCommandHandler implements CommandHandler {



    /**
     *
     * @var UserRepository
     * @access private
    */
    protected $userRepo;


    /**
     * Constructor
     *
     * @param UserRepository $userRepo description
     */
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {

        $user = $this->userRepo->findById($command->userId);

        $this->userRepo->unfollow($command->userIdToUnfollow, $user);
    }

}
