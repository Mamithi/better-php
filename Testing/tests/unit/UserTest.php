<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testThatWeCanGetTheFirstName(){
        $user = new \App\Models\User;

        $user->setFirstName('John');

        $this->assertEquals($user->getFirstName(), 'John');
    }   

    public function testThatWeCanGetTheLastName(){
        $user = new \App\Models\User;

        $user->setLastName('Doe');

        $this->assertEquals($user->getLastName(), 'Doe');
    }

    public function testFullNameIsReturned(){
        $user = new \App\Models\User;
        $user->setFirstName('John');
        $user->setLastName('Doe');

        $this->assertEquals($user->getFullName(), 'John Doe');
    }
}