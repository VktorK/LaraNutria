<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> origin/main
use mysql_xdevapi\Table;

class ServiceUser extends Model
{
    use HasFactory;
    protected $table = 'service_user';

    protected $guarded=false;

<<<<<<< HEAD
    public function order(): belongsTo {
        return $this->belongsTo(Order::class);
    }

=======
>>>>>>> origin/main
}
