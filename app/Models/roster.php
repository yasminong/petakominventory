<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class roster extends Model
{
    use HasFactory;
   
    

    protected $table = 'rosters';
    protected $fillable = ['name', 'day', 'time'];

    protected $casts = [
        'date' => 'date',
    ];
}
