<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table="authors";
    protected $primaryKey="author_id";
    protected $fillable=['author_name','author_link'];
    public function Mangas(){
        return $this->belongsTo(Manga::class,'author_id',$this->primaryKey);
    }
}
