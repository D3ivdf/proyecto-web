<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    use HasFactory;
    protected $table="Multa"; 
    protected $primaryKey = 'Id_multa';
}
