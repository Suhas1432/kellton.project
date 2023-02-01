<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptList extends Model
{
    use HasFactory;

    public $table = 'departmentlist';

    protected $fillable = [

        'department',
        'subject'
    ];
}
