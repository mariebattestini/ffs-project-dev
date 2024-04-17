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

<!-- Afficher les messages de modification -->
@if ($experience->modifications->isNotEmpty())
    <h2>Modifications</h2>
    @foreach ($experience->modifications as $modification)
        <p>Modifié le {{ $modification->created_at->format('d/m/Y H:i:s') }} par {{ $modification->moderateur->nom }} {{ $modification->moderateur->prenom }}</p>
    @endforeach
@endif

<!-- Boutons pour publier et retourner à la liste -->
<form action="{{ route('experiences.publish', $experience->id) }}" method="POST">
    @csrf
    <button type="submit" onclick="return confirm('Êtes-vous sûr que vous voulez publier définitivement cette expérience ?')">Publier</button>
</form>
<a href="{{ route('experiences.index') }}">Retour à la liste des expériences à modérer</a>