
<form action="action.php" method="post">
<div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
    </div>
    <p><label for="date">Votre date de naissance </label>:<input id="date" type="date" name="birth" /></p>

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
    

    <button type="submit">Envoyer</button>
</form>

<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(3deg, rgba(2, 0, 36, 1) 0%, rgba(110, 36, 170, 0.8491990546218487) 32%, rgba(0, 176, 255, 1) 87%);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
    }

    p {
        margin: 0 0 15px;
    }

    input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #8b6edb;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #9e87dc;
    }

    button {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button[type="submit"] {
        background-color: #8b6edb;
        color: white;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #9e87dc;
    }
</style>