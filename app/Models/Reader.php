<?php

namespace App\Models;

use App\Scopes\ReaderScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends User
{
    use HasFactory;
    protected $table="users";
    public function reader_mangas(){
        return $this->belongsToMany(Manga::class,'reader_manga','user_id','manga_id');
    }
    public function Comments(){
        return $this->hasMany(Comment::class,'reader_id',$this->primaryKey);
    }
    public static function booted(){
        parent::addGlobalScope(new ReaderScope);
    }
}
