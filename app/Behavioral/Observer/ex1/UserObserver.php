<?php


namespace App\Behavioral\Observer\ex1;

use SplObserver;

use SplSubject;

class UserObserver implements SplObserver
{

    /**
     * @var SplSubject[]
     */
    private $changedUsers = [];

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {

        $this->changedUsers[] = clone $subject;

    }

    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array
    {

        return $this->changedUsers;

    }


}