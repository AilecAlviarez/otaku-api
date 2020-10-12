<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $primaryKey="comment_id";
    protected $fillable=["comment","reader_id",'chapter_id'];
  public function chapter(){
      return $this->hasOne(Chapter::class,'chapter_id','chapter_id');
  }

}
