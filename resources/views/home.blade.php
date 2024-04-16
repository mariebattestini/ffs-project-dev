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
            </nav>
            <button onclick="window.location='{{ route('login') }}'">Espace modérateur</button>
            <button onclick="window.location='{{ route('register') }}'">Créer un compte</button>
    </header>

 
    <main>
        <section id="hero">
            <h1>Retour d’expérience FFS</h1>
        </section>
        <section id="gallery">
            <article id="exp1">
 
            </article>
            <article id="exp2">
 
            </article>
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
 