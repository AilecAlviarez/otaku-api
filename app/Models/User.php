<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey="user_id";
    protected $fillable = [
        'user_name',
        'user_email',
        'user_password',

    ];
    public function Comments(){
        return $this->hasMany(Comment::class,'reader_id',$this->primaryKey);
    }
    public function Comments_Manga(){
        return $this->hasMany(CommentManga::class,'reader_id',$this->primaryKey);
    }
    public function Roles(){
        return $this->belongsToMany(Role::class,'user_role','user_id','role_id');
    }
    public function Publishers(){
        return $this->belongsToMany(User::class,'user_role','user_id','role_id')->wherePivotIn('role_id',[1,2]);

    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
