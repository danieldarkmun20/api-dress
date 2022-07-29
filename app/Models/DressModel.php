<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DressModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'brand',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function dress()
    {
        return $this->hasMany('App\Models\Dress');
    }

    public function scopeName($query, $name)
    {
        if ($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
    public function scopeBrand($query, $brand)
    {
        if ($brand)
            return $query->where('brand', $brand);
    }

    public function delete()
    {
        $this->dress()->delete();
        return parent::delete();
    }
}
