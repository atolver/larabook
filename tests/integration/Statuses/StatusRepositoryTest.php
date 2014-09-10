<?php

use Larabook\Statuses\StatusRepository;
use Laracasts\TestDummy\Factory as TestDummy;


class StatusRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    /**
     * @var \StatusRepository
     */
    protected $repo;

    protected function _before()
    {
        $this->repo = new StatusRepository;
    }

    /** @test */
    public function it_gets_all_statuses_for_a_user()
    {

        $users = TestDummy::times(2)->create('Larabook\Users\User');

        TestDummy::times(2)->create('Larabook\Statuses\Status', [
            'user_id' => $users[0]->id,
            'body' => 'My Body 1'
        ]);

        TestDummy::times(2)->create('Larabook\Statuses\Status', [
            'user_id' => $users[1]->id,
            'body' => 'My Body 2'
        ]);

        $statusesForUser1 = $this->repo->getAllForUser($users[0]->id);

        $this->assertCount(2, $statusesForUser1);

        $statusesForUser2 = $this->repo->getAllForUser($users[1]->id);

        $this->assertCount(2, $statusesForUser2);

    }

    /** @test */
    public function it_saves_a_status_for_a_user()
    {


        $status = TestDummy::create('Larabook\Statuses\Status', [
            'user_id' => null,
            'body' => 'My Body 3'
        ]);

        $users = TestDummy::create('Larabook\Users\User');

        $savedStatus = $this->repo->save($status, $users->id);

        $this->tester->seeRecord('statuses', [
            'body' => 'My Body 3'
        ]);

        $this->assertEquals($users->id, $savedStatus->user_id);
    }
}
