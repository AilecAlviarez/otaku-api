<?php

namespace App\Models;

use App\Scopes\PublisherScope;
use Closure;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends User
{
    use HasFactory;
    protected $table="users";
   public static function booted()
   {
       parent::addGlobalScope(new PublisherScope);

   }

    public function Mangas(){
        return $this->hasMany(Manga::class,'publisher_id',$this->primaryKey);
    }


}
