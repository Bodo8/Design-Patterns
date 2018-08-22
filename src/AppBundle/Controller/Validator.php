<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 13.07.2018
 * Time: 06:46
 */

namespace AppBundle\Controller;


class Validator
{
    private $userStore;

    public function __construct(UserStore $userStore)
    {
        $this->userStore;
    }

    public function validateUser(string $email, string $pass, $user): bool
    {
        if (!is_array($userStore = $this->userStore->getUser($email))) {
            return false;
        }
        if ($user['pass'] == $pass) {
            return true;
        }
        $this->userStore->notifyPasswordFailure($email);
        return false;
    }
}