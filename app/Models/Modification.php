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

}
