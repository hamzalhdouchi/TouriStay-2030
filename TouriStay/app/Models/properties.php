<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\équipement;


class properties extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'prix_par_nuit',
        'caution',
        'chambres',
        'salles_de_bain',
        'adresse',
        'ville',
        'code_postal',
        'wifi',
        'Climatisation',
        'piscine',
        'parking',
        'image',
        'disponibilite',
    ];

    public function equipments()
    {
        return $this->belongsToMany(équipement::class, 'property_equipments', 'property_id', relatedPivotKey: 'equipment_id');
    }

}
