<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword;

class registration extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_id';
}
