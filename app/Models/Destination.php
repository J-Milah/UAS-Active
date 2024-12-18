<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $table = 'destination';
    protected $primaryKey = 'id_destination';
    public $timestamps = true;

    protected $fillable = [
        'name_destination',
        'address',
        'bmap',
        'thumbnail',
        'status',
        'id_category',
        'id_owner',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function owner()
    {
        return $this->belongsTo(owner::class, 'id_owner');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_destination');
    }
}