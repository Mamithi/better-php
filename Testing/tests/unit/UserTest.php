<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    protected $user;

    public function setUp()
    {
        $this->user = new \App\Models\User;
    }

    public function testThatWeCanGetTheFirstName()
    {

        $this->user->setFirstName('John');

        $this->assertEquals($this->user->getFirstName(), 'John');
    }

    public function testThatWeCanGetTheLastName()
    {
        $this->user->setLastName('Doe');

        $this->assertEquals($this->user->getLastName(), 'Doe');
    }

    public function testFullNameIsReturned()
    {
        $this->user->setFirstName('John');
        $this->user->setLastName('Doe');

        $this->assertEquals($this->user->getFullName(), 'John Doe');
    }

    public function testFirstandLastNameAreTrimmed()
    {
        $this->user->setFirstName('John    ');
        $this->user->setLastName('      Doe');

        $this->assertEquals($this->user->getFirstName(), 'John');
        $this->assertEquals($this->user->getLastName(), 'Doe');
    }

    public function testEmailAddressCanBeSet()
    {

        $this->user->setEmail('test@gmail.com');

        $this->assertEquals($this->user->getEmail(), 'test@gmail.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $this->user->setFirstName('John');
        $this->user->setLastName('Doe');
        $this->user->setEmail('test@gmail.com');

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'John Doe');
        $this->assertEquals($emailVariables['email'], 'test@gmail.com');


    }
}