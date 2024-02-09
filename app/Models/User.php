<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = false;
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function promocodes()
    {
        return $this->hasMany(Promocode::class);
    }


    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function orders(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Order::class,'service_user','user_id','order_id');
    }

//    public function services()
//    {
//        return $this->belongsToMany(Service::class,'service_user','user_id','service_id');
//    }
//
}
