<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rumahtahfizh extends Model
{
    protected $fillable = ['nama', 'pemilik', 'alamat'];

    use HasFactory;
}
