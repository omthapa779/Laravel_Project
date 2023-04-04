<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;


class Student extends Model implements Authenticatable {
    // class properties and methods go here
    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    use \Illuminate\Auth\Authenticatable;
    protected $table = 'users';
    protected $connection = 'laravel1';
    public function getAuthIdentifierName()
    {
        return $this->id;
    }
    public function getAuthIdentifier()
    {
        return $this->id;
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function getRememberToken()
    {
        return $this->remember_token;
    }
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

}