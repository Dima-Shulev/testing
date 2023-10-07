<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    protected $hidden = [
        'password',
        'status',
        'active',
        'remember_token'
    ];

    public $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime: Y-m-d H:i:s+00:00',
        'updated_at' => 'datetime: Y-m-d H:i:s+00:00'
    ];

    public function test(){
        return $this->hasMany('App/Models/Test');
}



}
