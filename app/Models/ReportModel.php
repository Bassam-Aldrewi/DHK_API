<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportModel extends Model
{
    use HasFactory;
    protected $table = 'report';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'date',
        'priority',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
