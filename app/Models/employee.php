<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primarykey ='id';
    protected $fillable =['registrationNumber', 'companyName', 'Description', 'photo'];
}
