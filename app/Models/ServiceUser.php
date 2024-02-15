<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;



class ServiceUser extends Model
{
    use HasFactory;
    protected $table = 'service_user';

    protected $guarded=false;

    public function order(): belongsTo {
        return $this->belongsTo(Order::class);
    }


}
