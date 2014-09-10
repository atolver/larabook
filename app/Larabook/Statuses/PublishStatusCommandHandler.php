<?php
/**
 * PublishStatusCommandHandler File Doc Comment
 *
 * PHP version 5
 *
 * @category PublishStatusCommandHandler
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */
namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\Status;
use Laracasts\Commander\Events\DispatchableTrait;

/**
 * Class PublishStatusCommandHandler
 *
 * @category PublishStatusCommandHandler
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 */
class PublishStatusCommandHandler implements CommandHandler
{

    use DispatchableTrait;

    /**
     *
     * @var StatusRepository
     * @access private
    */
    protected $statusRepository;


    /**
     * Constructor
     *
     * @param StatusRepository $statusRepository description
     */
    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    /**
     * Handles the command
     *
     * @param Command $command Command
     *
     * @return User
     * @author Alonzo Tolver
     *
     **/
    public function handle($command)
    {
        $status = Status::publish($command->body);

        $status = $this->statusRepository->save($status, $command->userId);

        $this->dispatchEventsFor($status);

        return $status;
    }

}
