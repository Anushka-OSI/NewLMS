<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zoomlinksModel extends Model
{
    use HasFactory;

    protected $fillable=[
        "courseId",
        "courseName",
        "zoomLink",
        "description",
    ];
}
