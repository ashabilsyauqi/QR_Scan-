<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    

    protected $table = 'participans';
    // protected $table = 'scan';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'qr_content',
    ];
}
