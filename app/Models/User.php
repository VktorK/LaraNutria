<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
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


    public function orders(): hasMany
    {
        return $this->hasMany(Order::class);
    }

    public function services(): belongsToMany
    {
        return $this->belongsToMany(Service::class);
    }

    public function profile(): MorphOne
    {
        return $this->morphOne(Profile::class,'profileable');
    }

    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class,'reviewable');
    }

    public function likes(): MorphToMany
    {
        return $this->morphToMany(Like::class,'likeable');
    }

}
