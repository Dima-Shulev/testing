<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table = 'tests';
    protected $fillable = [
        'title',
        'created_at',
        'user_id'
    ];

    protected $hidden = ['active'];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App/Model/User');
    }





}
