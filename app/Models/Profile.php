<?php

namespace App\Models;

use App\Http\Controllers\GenderController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function gender(): belongsTo
    {
        return $this->belongsTo(Gender::class);
    }
}
