<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model{
    protected $fillable = [
        'mail_from', 'mail_to', 'real_name', 'unique_name',
    ];
}
