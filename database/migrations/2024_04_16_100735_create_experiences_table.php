<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id(); // Ajoute une colonne 'id' auto-incrémentée comme clé primaire
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('activite');
            $table->string('nom_site_pratique');
            $table->string('commune');
            $table->text('description');
            $table->text('analyse_evenement');
            $table->string('choix'); // Ajoute une colonne pour enregistrer l'avis sur l'activité
            $table->timestamps(); // Ajoute automatiquement les colonnes 'created_at' et 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }

};
