<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $primaryKey="chapter_id";
    protected $fillable=["chapter_name",'chapter_description','chapter_date','image_id','comment_id'];
    public function Images(){
        return $this->hasMany(Image::class,'image_id','image_id');
    }
    public function Comments(){
        return $this->hasMany(Comment::class,'comment_id','comment_id');
    }
    protected $casts=['chapter_date'=>'datetime:Y-m-d'];
}
