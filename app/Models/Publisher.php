<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends User
{
    use HasFactory;
    protected $table="users";
    public function Mangas(){
        return $this->hasMany(Manga::class,'publisher_id',$this->primaryKey);
    }


}
