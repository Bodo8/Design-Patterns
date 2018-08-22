<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 12.07.2018
 * Time: 21:12
 */

namespace AppBundle\Controller;


class UserStore
{
    private $users = [];

    public function addUser(string $name, string $email, string $pass): bool
    {
        if (isset($this->users[$email])) {
            throw new \Exception(
                'the account already exists'
            );
        }
        if (strlen($pass) < 5) {
            throw new \Exception
            ('Password must have at least 5 letters'
            );
        }
        $this->users[$email] = [
            'pass' => $pass,
            'email' => $email,
            'name' => $name
        ];
        return true;
    }

    public function notifyPasswordFailure(string $email)
    {
        if (isset($this->users[$email])) {
            $this->users[$email]['failed'] = time();
        }
    }

    /**
     * @return array
     */
    public function getUser(string $email): array
    {
        return ($this->users[$email]);
    }

}