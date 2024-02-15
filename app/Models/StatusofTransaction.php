<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> origin/main

class StatusofTransaction extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'status_of_transactions';

<<<<<<< HEAD
    public function transactions(): hasMany
=======
    public function transactions()
>>>>>>> origin/main
    {
        return $this->hasMany(Transaction::class);
    }
}
