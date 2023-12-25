<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notfiable;


class Admin extends Model
{
    use HasFactory;
    use Notifiable;
    protected $gurad='admin';
    protected $fillable=['name','email','password'];
    protected $hidden =['password', 'remember_token'];

}
