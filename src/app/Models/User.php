<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable  implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'provider_id',
        'email_verified_at', 
        'password',
        'Admin',
    ];

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
    public function getName(){
        if($this->name){
            return "{$this->name}";
        }
        return null;
    }
    public function getId(){
        if($this->id){
            return "{$this->id}";
        }
        return null;
    }
    
    public function isAdmin (){
        return $this->statusCheck(1);
        }

    public function isVisitor (){
        return $this->statusCheck(0);
        }
    
    public function ifNotAdmin (){
        
        return redirect()->route("home");
        }

    protected function statusCheck ($status = 0){
        return $this->Admin === $status ? true : false;
        }

   

    }