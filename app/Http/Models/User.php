<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    //
    public function select(){
        $user = User::all();
        return $user;
    }
}
