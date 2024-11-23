<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    // protected $table = 'scan';
    protected $fillable = [
        'participant_id',
        'id_scan',
        'scan_at',
        'scan_by',
    ];
}
