<?php

namespace App\Core\Repositories;
use App\Core\Entities\User;

interface UserRepositoryInterface
{
  public function save(User $user): User;

}


