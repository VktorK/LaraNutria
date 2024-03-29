<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function services(): hasMany
    {
        return $this->hasMany(Service::class);
    }

    public function serviceUsers(): hasMany
    {
        return $this->hasMany(ServiceUser::class);
    }

}
