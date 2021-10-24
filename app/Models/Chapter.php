<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $table = 'chapters';
    public $timestamps =  false;
    protected $fillable =[
        'name',
        'content',
    ];

    public function course(){
        return $this->belongsTo(Course::class,'id','course');
    }
}
