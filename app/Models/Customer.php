<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'statues',
        'EmpId'
    ];
public function employee(){
    return $this->belongsTo('App\Models\User','EmpId','id');
}
    use HasFactory;
}
