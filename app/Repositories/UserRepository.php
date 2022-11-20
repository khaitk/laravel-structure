<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\EloquentRepository;

class UserRepository extends EloquentRepository
{
    //lấy model tương ứng
    public function getModel()
    {
        return User::class;
    }

    public function getUser()
    {
        return $this->getAll();
    }
}
