<?php

namespace App;

class User
{
    private $name;
    public function setName($name) : void
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}