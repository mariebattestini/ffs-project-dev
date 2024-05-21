<!DOCTYPE html>
<html lang="fr">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
 
<body>
    <header>
            <img src="https://ffspeleo.fr/csx/scripts/resizer.php?filename=CHARTEX%2Flogobighome%2F68%2F99%2Ffiz5cgpdphyq&mime=image%252Fsvg%252Bxml&originalname=ffs-bottom-logo.svg&geometry=640x480%3E" alt="logo">
            <nav>
                <button onclick="window.location='{{ route('form') }}'">Partager son expérience</button>
                <button onclick="window.location='{{ route('register') }}'">Nous rejoindre</button>
                <button onclick="window.location='{{ route('login') }}'">Espace modérateur</button>
                <button onclick="window.location='{{ route('register') }}'">Créer un compte</button>
            </nav>

    </header>

 
    <main>
        <section id="hero">
            <h1>Retour d’expérience FFS</h1>
        </section>
    <section>
</section>
        <section>
    <h2>Expériences publiées</h2>
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
                    <td><a href="{{ route('experience.show', $experience->id) }}">Voir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

 
        <section id="CTA">
            <button onclick="window.location='{{ route('form') }}'">Partager son expérience</button>
            <button onclick="window.location='{{ route('register') }}'">Devenir modérateur</button>
        </section>
 
    </main>
 
    <footer>
        <section id="about">
            <img src="https://ffspeleo.fr/csx/scripts/resizer.php?filename=CHARTEX%2Flogobighome%2F68%2F99%2Ffiz5cgpdphyq&mime=image%252Fsvg%252Bxml&originalname=ffs-bottom-logo.svg&geometry=640x480%3E" alt="logo">
        </section>
        <section id="coordinates">
            <ul>
                <li>
                    <h4>Adresse</h4>
                    <p>28 rue Delandine</p>
                    <p>69002 Lyon</p>
                </li>
                <li>
                    <h4>Téléphone</h4>
                    <p>+33 4 72 56 09 63</p>
                </li>
            </ul>
        </section>
    </footer>
</body>
 
</html>
 
<style>
section {
    margin-top: 20px;
    margin-bottom: 20px;
}

h2 {
    margin-bottom: 10px;
}

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