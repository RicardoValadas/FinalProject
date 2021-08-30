<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserCustomiz extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'photo',
    ]

    ## Mutators : password
    public function setPasswordAttribute($password)
    {

        $this->attributes['password'] = Hash::make($password);
    }
}
