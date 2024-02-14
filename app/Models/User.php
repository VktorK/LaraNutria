<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = false;
    public function transactions(): hasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function promocodes(): hasMany
    {
        return $this->hasMany(Promocode::class);
    }


    public function profile(): belongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    public function orders(): hasMany
    {
        return $this->hasMany(Order::class);
    }

    public function services(): belongsToMany
    {
        return $this->belongsToMany(Service::class);
    }

}
