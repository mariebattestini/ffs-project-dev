<h1>Modifier l'expérience</h1>

<form action="{{ route('experiences.update', $experience->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="{{ $experience->nom }}" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="{{ $experience->prenom }}" required>

    <label for="numero">Numéro :</label>
    <input type="text" name="numero" id="numero" value="{{ $experience->numero }}" required>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="{{ $experience->email }}" required>

    <label for="date">Date :</label>
    <input type="date" name="date" id="date" value="{{ $experience->date }}" required>

    <label for="activite">Activité :</label>
    <input type="text" name="activite" id="activite" value="{{ $experience->activite }}" required>

    <label for="nom_site_pratique">Nom du site de pratique :</label>
    <input type="text" name="nom_site_pratique" id="nom_site_pratique" value="{{ $experience->nom_site_pratique }}" required>

    <label for="commune">Commune :</label>
    <input type="text" name="commune" id="commune" value="{{ $experience->commune }}" required>

    <label for="description">Description :</label>
    <textarea name="description" id="description" required>{{ $experience->description }}</textarea>

    <label for="analyse_evenement">Analyse de l'événement :</label>
    <textarea name="analyse_evenement" id="analyse_evenement" required>{{ $experience->analyse_evenement }}</textarea>

    <label for="choix">Choix :</label>
    <input type="text" name="choix" id="choix" value="{{ $experience->choix }}" required>

    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre" value="{{ $experience->titre }}" required>

    <button type="submit">Enregistrer les modifications</button>
</form>
