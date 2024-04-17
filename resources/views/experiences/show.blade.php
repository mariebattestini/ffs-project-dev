<!-- resources/views/experiences/show.blade.php -->
<h1>{{ $experience->titre }}</h1>

<!-- Afficher les champs du formulaire de saisie -->
<p>Nom : {{ $experience->nom }}</p>
<p>Prénom : {{ $experience->prenom }}</p>
<p>Numéro : {{ $experience->numero }}</p>
<p>Email : {{ $experience->email }}</p>
<p>Date : {{ $experience->date }}</p>
<p>Activité : {{ $experience->activite }}</p>
<p>Nom du site de pratique : {{ $experience->nom_site_pratique }}</p>
<p>Commune : {{ $experience->commune }}</p>
<p>Description : {{ $experience->description }}</p>
<p>Analyse de l'événement : {{ $experience->analyse_evenement }}</p>
<p>Choix : {{ $experience->choix }}</p>
<p>Titre : {{ $experience->titre }}</p>


<!-- Afficher les messages de modification -->
@if ($experience->modifications && $experience->modifications->isNotEmpty())
    <h2>Modifications</h2>
    @foreach ($experience->modifications as $modification)
        <p>Modifié le {{ $modification->created_at instanceof \Carbon\Carbon ? $modification->created_at->format('d/m/Y H:i:s') : '' }} par {{ $modification->moderateur->nom }} {{ $modification->moderateur->prenom }}</p>
    @endforeach
@endif



<!-- Boutons pour publier et retourner à la liste -->
<a id="button" href="{{ route('experiences.edit', $experience->id) }}">Modifier</a>

<form action="{{ route('experiences.publish', $experience->id) }}" method="POST">
    @csrf
    <button type="submit" onclick="return confirm('Êtes-vous sûr que vous voulez publier définitivement cette expérience ?')">Publier</button>
</form>
<a id="retour" href="{{ route('experiences.index') }}">Retour à la liste des expériences à modérer</a>


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

    button, #button {
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

    button:hover, #button:hover{
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