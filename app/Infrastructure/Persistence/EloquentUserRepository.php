<?php 
 namespace App\Infrastructure\Persistence;

use App\Core\Entities\User as UserEntity;
use App\Core\Repositories\UserRepositoryInterface;
use App\Models\User;

class EloquentUserRepository implements UserRepositoryInterface
{
public function save(UserEntity $entity):UserEntity
{
  $user = User::create([
    'name' => $entity->name,
    'email' => $entity->email,

  ]);

  return new UserEntity($user->name, $user->email);

}


}
