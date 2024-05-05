<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // allow field
    protected $fillable = [
        "name",
        "gender",
        "position",
        "rank",
        "phoneNumber",
    ];

}
