<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> origin/main

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $guarded = false;

<<<<<<< HEAD
    public function services(): hasMany
=======
    public function services()
>>>>>>> origin/main
    {
        return $this->hasMany(Service::class);
    }
}
