<?php

namespace App\Models;

use App\Main\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $username = 'email';
    protected $password = 'password';
}
