<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examResultsModel extends Model
{
    use HasFactory;

    protected $fillable=[
        "courseName",
        "result",
        "description",
        'courseId'
    ];
}
