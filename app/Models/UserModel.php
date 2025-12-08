<?php

namespace App\Model;

use lllunimate\Foundation\Auth\UserModel as Authenticatable;
use lllunimate\Database\Eloquent\Factories\HasFactory;
use lllunimate\Notifications\Notifiable;

class UserModel extends Authenticatable{
    use HasFactory, Notifiable;

    protected $fillable=[
        'first_name',
        'last_name',
        'age',
        'id',
        'phone Number',
        'gender',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember-token'
    ];


    // Encapsulation (full Name first & last name)

    public function getFullName(){
        return ucfirst($this->first_name).''
        .ucfirst($this->last_name);
    }

    public function setPassword($value){
        $this->attributes['password'] = bcrybt($value);
    }

    













}

