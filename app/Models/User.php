<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public static function getAllUsers(){
        return User::all();
    }

    public static function getUserById($id){
        return User::find($id);
    }

}
