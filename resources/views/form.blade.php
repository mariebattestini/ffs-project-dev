<form action="{{ route('submit.form') }}" method="post">
@csrf
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>

    <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" class="form-control">
       

    </div>
    <div class="form-group">
        <label for="date">Date de naissance :</label>
        <input type="date" name="date" id="date" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="titre">Titre :</label>
        <input type="titre" name="titre" id="titre" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="activite">Activité concernée :</label>
        <input type="text" name="activite" id="activite" class="form-control">
    </div>

    <div class="form-group">
    <label for="nom_site_pratique">Nom du site de pratique :</label>
    <input type="text" name="nom_site_pratique" id="nom_site_pratique" class="form-control">
</div>

<div class="form-group">
    <label for="commune">Commune :</label>
    <input type="text" name="commune" id="commune" class="form-control">
</div>

<div class="form-group">
    <label for="description">Description :</label>
    <textarea name="description" id="description" class="form-control" rows="5"></textarea>
</div>

<div class="form-group">
    <label for="analyse_evenement">Analyse de l'événement :</label>
    <textarea name="analyse_evenement" id="analyse_evenement" class="form-control" rows="5"></textarea>
</div>

<div class="form-group">
    <label for="choix">Votre avis sur l'activité :</label>
    <select name="choix" id="choix" class="form-control">
        <option value="Très bien">Très bien</option>
        <option value="Bien">Bien</option>
        <option value="Passable">Passable</option>
        <option value="Mauvais">Mauvais</option>
        <option value="Très mauvais">Très mauvais</option>
    </select>
</div>
    <div class="form-group captcha-container">
    {!! NoCaptcha::renderJs() !!}
    {!! NoCaptcha::display() !!}
</div>


    <input type="submit" onclick="return confirm('Êtes-vous sûr que vous voulez envoyer ce formulaire ?')" class="btn btn-primary" value=Envoyer></input>
</form>

@if ($errors->has('g-recaptcha-response'))
    <span class="help-block">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </span>
@endif

<!-- @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif -->

<style>
   body {
    font-family: Arial, sans-serif;
    background-color: #dddddd;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; /* Utilisation de min-height pour garantir que le contenu s'affiche correctement même si la hauteur de la fenêtre est réduite */
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 90%; /* Réduisez légèrement la largeur du formulaire */
    margin: 50px auto; /* Centrez le formulaire verticalement et horizontalement */
}

p {
    margin: 0 0 15px;
}

/* Réduisez l'espacement sous chaque groupe de formulaire */
.form-group {
    margin-bottom: 10px;
}

label {
    display: block; /* Assurez-vous que chaque étiquette est sur sa propre ligne */
    font-weight: bold; /* Mettez en valeur les étiquettes */
    margin-bottom: 5px; /* Ajoutez un petit espacement sous chaque étiquette */
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px; /* Améliorez la lisibilité en augmentant légèrement la taille de la police */
}

/* Ajoutez des styles au bouton Envoyer */
input[type="submit"] {
    background-color: #ccd100; /* Vert */
    color: white;
    padding: 12px 20px; /* Ajustez la taille du bouton */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #45a049; /* Variation de couleur au survol */
}

</style>