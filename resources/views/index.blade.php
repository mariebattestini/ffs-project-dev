<!-- resources/views/experiences/index.blade.php -->
<h1>Liste des expériences à modérer</h1>

<table>
    <thead>
        <tr>
            <th>Date de soumission</th>
            <th>Activité</th>
            <th>Titre</th>
            <th>Nom du site de pratique</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($experiences->where('published_at', null) as $experience)
            <tr>
                <td>{{ $experience->created_at->format('d/m/Y') }}</td>
                <td>{{ $experience->activite }}</td>
                <td>{{ $experience->titre }}</td>
                <td>{{ $experience->nom_site_pratique }}</td>
                <td>
                    <a href="{{ route('experiences.show', $experience->id) }}">Voir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
