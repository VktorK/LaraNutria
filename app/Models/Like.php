<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Like extends Model
{
    use HasFactory;

    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class,'likeable');
    }

    public function providers(): MorphToMany
    {
        return $this->morphedByMany(Provider::class,'likeable');
    }

}
