<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusofTransaction extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'status_of_transactions';

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
