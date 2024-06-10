<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongsTo(course::class,'course_id','id');
    }
    public function marks()
    {
        return $this->hasOne(Marks::class);
    }   
}
