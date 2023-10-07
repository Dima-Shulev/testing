<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';
    protected $fillable = [
        'answer',
        'created_at',
        'question_id'
    ];

    protected $hidden = ['active','right'];

    public $timestamps = false;

    public function question(){
        return $this->belongsTo('App/Model/Question');
    }
}
