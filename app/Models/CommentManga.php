<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentManga extends Model
{
    use HasFactory;
    protected $primaryKey="comment_id";
    protected $fillable=["comment","reader_id"];
    public function Manga(){
        return $this->belongsTo(Manga::class,'comment_id',$this->primaryKey);
    }

}
