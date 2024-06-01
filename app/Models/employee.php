<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employees';
    protected $primarykey = 'id';
    protected $fillable = ['first_name',
    'last_name',
    'dob',
    'phone',];
    use HasFactory;
}
