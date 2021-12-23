<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pyro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'age', 'kerja'
        ];
        protected $hidden = [
        'created_at', 'updated_at',
        ];
        
}
