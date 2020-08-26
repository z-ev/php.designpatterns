<?php


namespace Behavioral\Observer;

use App\Behavioral\Observer\ex1\User;
use App\Behavioral\Observer\ex1\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{

    /**
     * @test
     */
    public function test_change_in_user_leads_to_user_observer_being_notified()
    {
        $observer = new UserObserver();

        $user = new User();

        $user->attach($observer);

        $user->changeEmail('foo@bar.com');

        $this->assertCount(1, $observer->getChangedUsers());

    }

}