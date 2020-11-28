<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table = 'workshops';
    use HasFactory;

    protected $fillable = ['name','email','category','title','fromdate','todate',
    'organization','venue','file'];
}
