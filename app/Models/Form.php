<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'numero', 'email', 'date', 'activite', 'nom_site_pratique', 'commune', 'description', 'analyse_evenement', 'choix', 'titre'];
    protected $table = 'experiences';
}
