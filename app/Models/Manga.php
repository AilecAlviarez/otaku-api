<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    protected $primaryKey="manga_id";
    protected $fillable=['author_id','chapter_id','manga_description','manga_date','publisher_id','comment_id'];
    public function Publisher(){
        return $this->hasOne(Publisher::class,'user_id','publisher_id');
    }
    public function Comments(){
        return $this->hasMany(Comment::class,'comment_id','comment_id');
    }
    public function Author(){
        return $this->hasOne(Author::class,'author_id','author_id');
    }
    public function Chapters(){
        return $this->hasMany(Chapter::class,'chapter_id','chapter_id');
    }
}
