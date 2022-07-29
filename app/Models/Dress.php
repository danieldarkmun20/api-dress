<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'status',
        'dress_model_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function dressModels()
    {
        return $this->belongsTo('App\Models\DressModel');
    }
}
