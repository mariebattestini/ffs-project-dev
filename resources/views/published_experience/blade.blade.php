<!-- resources/views/published_experience/blade.blade.php -->
<html>
<body>
    <h1>
        Toutes les expériences publiées
    </h1>
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
   #retour{
    cursor: pointer;
    background-color: blue;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
    text-decoration:none;
    }
    #retour:hover{
        background-color: #007bff;
    }
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2%;

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