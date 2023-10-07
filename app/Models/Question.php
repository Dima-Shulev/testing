<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    protected $fillable = [
        'question',
        'created_at',
        'test_id'
    ];

    protected $hidden = ['active'];

    public $timestamps = false;

    public function test(){
        return $this->belongsTo('App/Model/Test');
    }
    public function answer(){
        return $this->hasMany('App/Model/Answer');
    }
}
