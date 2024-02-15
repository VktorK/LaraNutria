<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Provider extends Model
{
    use HasFactory;

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
