<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applyCourseModel extends Model
{
    use HasFactory;

    protected $fillable=[
        "studentID",
        "courseID",
        "Status",
    ];
}
