<!-- php artisan migrate pour créer la table une fois après avoir ajouté les colonnes  -->
 <!-- php artisan artisan migrate:fresh pour rafraichir les tables et ajouter les dernières modifications mais ATTENTION ça supprime les données -->

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // Création de la relation entre la table posts et la table users, ajout de cascadeOnDelete pour supprimer les posts si l'utilisateur est supprimé
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // Ajout de la colonne title
            $table->string('title');
            // Ajout de la colonne body
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
