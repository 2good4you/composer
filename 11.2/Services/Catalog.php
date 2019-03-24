<?php

namespace Services;

use App\User;

class Catalog
{
    private $users = [];
    public function addUser(User $user) : void
    {
        $this->users[] = $user;
    }
    public function getNames() : void
    {
        foreach ($this->users as $user) {
            echo $user->getName() . PHP_EOL;
        }
    }
}