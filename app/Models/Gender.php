<?php

namespace App\Models;

use App\Http\Resources\ProfileResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> origin/main

class Gender extends Model
{
    use HasFactory;
    protected $guarded = false;

    protected $table = 'genders';

<<<<<<< HEAD
    public function profiles(): hasMany
=======
    public function profiles()
>>>>>>> origin/main
    {
        return $this->hasMany(Profile::class);
    }
}
