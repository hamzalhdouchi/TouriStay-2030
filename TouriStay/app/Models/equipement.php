<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\properties;

class equipments extends Model
{
    use HasFactory;

    public function properties()
    {
        return $this->belongsToMany(properties::class, 'property_equipments', 'equipment_id', 'property_id');
    }
}
