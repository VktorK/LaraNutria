<?php

namespace App\Models;

use App\Http\Resources\ProfileResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $guarded = false;

    protected $table = 'genders';

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
