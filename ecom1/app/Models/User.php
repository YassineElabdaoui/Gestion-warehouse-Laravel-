<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory;
    use HasRoles;
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','roles_name','Status'
        ];
    /*protected $fillables=[
        'name',
        'email',
        'password',
        'roles',
        'created_at',
        'updated_at',
        'status'
    ];*/
        

  
   
}
