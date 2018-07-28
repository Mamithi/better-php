<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('John');

        $this->assertEquals($user->getFirstName(), 'John');
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new \App\Models\User;

        $user->setLastName('Doe');

        $this->assertEquals($user->getLastName(), 'Doe');
    }

    public function testFullNameIsReturned()
    {
        $user = new \App\Models\User;
        $user->setFirstName('John');
        $user->setLastName('Doe');

        $this->assertEquals($user->getFullName(), 'John Doe');
    }

    public function testFirstandLastNameAreTrimmed()
    {
        $user = new \App\Models\User;
        $user->setFirstName('John    ');
        $user->setLastName('      Doe');

        $this->assertEquals($user->getFirstName(), 'John');
        $this->assertEquals($user->getLastName(), 'Doe');
    }

    public function testEmailAddressCanBeSet()
    {
        $user = new \App\Models\User;

        $user->setEmail('test@gmail.com');

        $this->assertEquals($user->getEmail(), 'test@gmail.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $user = new \App\Models\User;

        $user->setFirstName('John');
        $user->setLastName('Doe');
        $user->setEmail('test@gmail.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'John Doe');
        $this->assertEquals($emailVariables['email'], 'test@gmail.com');


    }
}