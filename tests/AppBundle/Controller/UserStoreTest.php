<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 22.07.2018
 * Time: 19:02
 */

namespace Tests\AppBundle\Controller;

use AppBundle\Controller\UserStore;
use PHPUnit\Framework\TestCase;

class UserStoreTest extends TestCase
{
    private $userStore;

    public function setUp()
    {
        $this->userStore = new UserStore();
    }

    public function tearDown()
    {

    }

    public function testGetUser()
    {
        $this->userStore->addUser('bob williams', 'ab@b.com', '12345');
        $user = $this->userStore->getUser('ab@b.com');
        $this->assertEquals($user['email'], 'ab@b.com');
    }

    public function testAddUserShortPass()
    {
        $this->expectException('Exception my');
        $this->userStore->addUser('bob williams', 'ab@b.com', 'ff');
        $this->fail('The expected exception of a too-short password');
    }
}
