<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modification extends Model
{
    use HasFactory;

    // Modèle Modification
    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    protected $table = 'modifications';
    public function modifications()
    {
        return $this->hasMany(Modification::class);
    }

    public function moderateur()
    {
        return $this->belongsTo(User::class, 'moderateur_id');
    }

}
