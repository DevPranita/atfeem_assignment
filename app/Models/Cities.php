<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cities extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = [
            'country_id',
            'state_id',
            'name',
        ];
}
