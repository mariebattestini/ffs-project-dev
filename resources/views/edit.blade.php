<h1>Modifier l'expérience</h1>

<form action="{{ route('experiences.update', $experience->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Champs du formulaire --><div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="{{ $experience->nom }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="{{ $experience->prenom }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" value="{{ $experience->email }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="numero">Numéro de téléphone :</label>
        <input type="text" name="numero" id="numero" value="{{ $experience->numero }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="date">Date de naissance :</label>
        <input type="date" name="date" id="date" value="{{ $experience->date }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" value="{{ $experience->titre }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="activite">Activité concernée :</label>
        <input type="text" name="activite" id="activite" value="{{ $experience->activite }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="nom_site_pratique">Nom du site de pratique :</label>
        <input type="text" name="nom_site_pratique" id="nom_site_pratique" value="{{ $experience->nom_site_pratique }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="commune">Commune :</label>
        <input type="text" name="commune" id="commune" value="{{ $experience->commune }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description :</label>
        <textarea name="description" id="description" class="form-control" rows="5" required>{{ $experience->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="analyse_evenement">Analyse de l'événement :</label>
        <textarea name="analyse_evenement" id="analyse_evenement" class="form-control" rows="5" required>{{ $experience->analyse_evenement }}</textarea>
    </div>

    <div class="form-group">
        <label for="choix">Votre avis sur l'activité :</label>
        <select name="choix" id="choix" class="form-control" required>
            <option value="Très bien" {{ $experience->choix == 'Très bien' ? 'selected' : '' }}>Très bien</option>
            <option value="Bien" {{ $experience->choix == 'Bien' ? 'selected' : '' }}>Bien</option>
            <option value="Passable" {{ $experience->choix == 'Passable' ? 'selected' : '' }}>Passable</option>
            <option value="Mauvais" {{ $experience->choix == 'Mauvais' ? 'selected' : '' }}>Mauvais</option>
            <option value="Très mauvais" {{ $experience->choix == 'Très mauvais' ? 'selected' : '' }}>Très mauvais</option>
        </select>
    </div>
    <button type="submit" value="Enregistrer les modifications">Enregistrer les modifications</button>

    <!-- <input type="submit" value="Enregistrer les modifications" class="btn btn-primary"> -->
    <!-- <input type="submit" href="{{ route('experiences.update', $experience->id) }}" value="Enregistrer les modifications"></input> -->
</form>
</form>
</form>

    


<style>
/* Styles généraux */
body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* En-tête */
    h1 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    /* Champs du formulaire */
    p {
        margin-bottom: 10px;
    }

    p strong {
        font-weight: bold;
        color: #2c3e50;
    }

    /* Modifications */
    .modifications {
        margin-top: 30px;
    }

    .modifications h2 {
        font-size: 1.8rem;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .modifications p {
        margin-bottom: 5px;
        color: #7f8c8d;
    }

    /* Boutons */
    .buttons {
        margin-top: 30px;
        text-align: right;
    }

    input[type="submit" i] {
    background-color: #ccd100; /* Vert */
    color: white;
    padding: 12px 20px; /* Ajustez la taille du bouton */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: medium;
    margin-top: 2%;
    }

    input[type="submit" i]:hover{
        background-color: #45a049; /* Variation de couleur au survol */
    }

    #retour{
        display: inline-block;
  padding: 10px 20px;
  background-color: #6c757d;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

#retour:hover {
  background-color: #5a6268;
}
</style>