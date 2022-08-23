<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;
    
    protected $table = 'winners';

    protected $fillable = [
        'user_id', 'offer_title','created_at','updated_at'
    ];


}
