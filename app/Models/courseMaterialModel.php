<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseMaterialModel extends Model
{
    use HasFactory;

    protected $fillable=[
        "courseId",
        "courseName",
        "document",
        "description",
    ];
}
