<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Les expériences') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="p-6 text-gray-900">
    <h1 class="text-2xl font-bold mb-4">Tableau des expériences non modérées et non publiées</h1>

    <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">Date de soumission</th>
                <th class="px-4 py-2">Activité</th>
                <th class="px-4 py-2">Titre</th>
                <th class="px-4 py-2">Nom du site de pratique</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($unpublishedExperiences as $experience)
        <tr>
            <td class="border px-4 py-2">{{ $experience->created_at->format('d/m/Y') }}</td>
            <td class="border px-4 py-2">{{ $experience->activite }}</td>
            <td class="border px-4 py-2">{{ $experience->titre }}</td>
            <td class="border px-4 py-2">{{ $experience->nom_site_pratique }}</td>
            <td class="border px-4 py-2">
                <a id="button" href="{{ route('experiences.show', $experience->id) }}" class="text-blue-500 hover:text-blue-700">Voir</a>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
         
</div>
</div>
</x-app-layout>

<style>
#button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ccd100;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease; 
}

#button:hover {
    background-color: #45a049; 
}
</style>
