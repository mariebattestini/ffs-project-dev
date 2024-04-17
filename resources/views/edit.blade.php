<form action="{{ route('experiences.update', $experience->id) }}" method="POST">
    @csrf
    @method('PUT')
    <tbody>
    @foreach ($experiences->where('published_at', null) as $experience)
        <tr>
            <td>{{ $experience->created_at->format('d/m/Y') }}</td>
            <td>{{ $experience->activite }}</td>
            <td>{{ $experience->titre }}</td>
            <td>{{ $experience->nom_site_pratique }}</td>
            <td>
                <a href="{{ route('experiences.show', $experience->id) }}">Voir</a>
                <a href="{{ route('experiences.edit', $experience->id) }}">Modifier</a>
            </td>
        </tr>
    @endforeach
</tbody>    <button type="submit">Enregistrer les modifications</button>
</form>



