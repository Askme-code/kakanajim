<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formtry extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'Full_Name', 'User_Name'];
}