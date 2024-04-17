<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    protected $fillable = ['nom', 'prenom', 'numero', 'email', 'date', 'activite', 'nom_site_pratique', 'commune', 'description', 'analyse_evenement', 'choix', 'titre'];
    protected $dates = ['published_at'];
    // Modèle Experience
    public function modifications()
    {
        return $this->hasMany(Modification::class);
    }

}
