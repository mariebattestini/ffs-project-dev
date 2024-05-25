<!-- resources/views/published_experience/blade.blade.php -->
<html>
<body>
<table>
    <thead>
        <tr>
            <th>Date de publication</th>
            <th>Activité</th>
            <th>Titre</th>
            <th>Nom du site de pratique</th>
            <th>Voir la page</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($publishedExperiences as $experience)
            <tr>
                <td>{{ \Carbon\Carbon::parse($experience->published_at)->format('d/m/Y') }}</td>
                <td>{{ $experience->activite }}</td>
                <td>{{ $experience->titre }}</td>
                <td>{{ $experience->nom_site_pratique }}</td>
                <td>
                    @if ($experience->id)
                        <a href="{{ route('experience.show', $experience->id) }}">Voir</a>
                    @else
                        Voir
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a id="retour" href="{{ route('home') }}">Retour à la page d'accueil</a>
</body>
</html> 

<style>

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background-color: #f2f2f2;
}

th {
    padding: 10px;
    text-align: left;
}

td {
    padding: 10px;
}

tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

tbody tr:nth-child(even) {
    background-color: #ffffff;
}

tbody tr {
    border-bottom: 1px solid #ddd;
}

tbody tr:last-child {
    border-bottom: none;
}
</style>