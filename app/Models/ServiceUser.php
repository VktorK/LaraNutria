<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class ServiceUser extends Model
{
    use HasFactory;
    protected $table = 'service_user';

    protected $guarded=false;

}
