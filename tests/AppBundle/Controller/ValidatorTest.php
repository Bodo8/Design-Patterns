<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 29.07.2018
 * Time: 21:09
 */

namespace AppBundle\Controller;

use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{

    public function testValidateUserFalsePass()
    {
        $userStore = $this->getMock(__NAMESPACE__ . 'UserStore');
        $this->validator = new Validator($userStore);
        $userStore->expects($this->once())
            ->method('notifyPasswordFailure')
            ->with($this->equalTo('bob@example.com'));
        $userStore->expects($this->any())
            ->method('getUser')
            ->will($this->returnValue(['name' => 'bob williams',
                'email' => 'bob@example.com',
                'pass' => 'right'
            ]));
        $this->validator->validateUser('bob@example.com');
    }
}
