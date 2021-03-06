<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $primaryKey='role_id';
    protected $fillable=['role_name'];
  public function Users(){
      return $this->belongsToMany(User::class,'user_role','role_id','user_id');
  }
    public function Publishers(){
        return $this->belongsToMany(User::class,'user_role','user_id','role_id')->wherePivotIn('role_id',[1,2]);

    }
}
