<h1>Modifier l'expérience</h1>

<form action="{{ route('experiences.update', $experience->id) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
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
    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>

</form>
</form>
</form>


<style>
body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f4f4f4;
    }
    button, #button {
    background-color: #ccd100; 
    color: white;
    padding: 12px 20px; 
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: medium;
    margin-top: 2%;
    }

    button:hover, #button:hover{
        background-color: #45a049; 
    }
</style>