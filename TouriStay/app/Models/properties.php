<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\equipments;
use App\Models\User;


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
        'user_id',
        'image',
        'disponibilite',
    ];

    public function equipments()
    {
        return $this->belongsToMany(equipments::class, 'equipement_propertie', 'propertie_id',  'equipment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    

    public function favoris()
    {
        return $this->belongsToMany(User::class, 'favori', 'propertie_id',  'user_id');
    }

}
