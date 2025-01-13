<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Department',
        'Role',
        'Gender',
        'Marital_status',
        'Fathers_name',
        'Mothers_name',
        'Date_of_Birth',
        'Language_Known',
        'Qualification',
        'Phone_number',
        'Email_Address',
        'Date_of_Joining',
        'Work_Experience',
        'Permanent_address',
        'Action',
    ];
}
