<?php

namespace App\Core\Entities;

class User {
public function __construct(
    public string $name,
    public string $email
)
{   
}

}