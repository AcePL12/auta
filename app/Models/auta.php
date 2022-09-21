<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auta extends Model
{
    use HasFactory;

    public $fillable = ['Country','Mfr_CommonName',"Mfr_ID","Mfr_Name","Vehicle registration number"];
}
