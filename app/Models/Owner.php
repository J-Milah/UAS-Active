<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $table = 'owner';
    protected $primaryKey = 'id_owner';
    public $timestamps = true;

    protected $fillable = [
        'name_owner',
        'avatar',
        'gender',
        'no_telepon',
    ];

    public function destinations()
    {
        return $this->hasMany(Destination::class, 'id_owner');
    }
}
