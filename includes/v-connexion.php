<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <form action="index.php?uc=authentification&action=valid_connexion" method="post" class="col-md-5 border p-4 rounded shadow-sm bg-light">
        <div class="mb-4 text-center">
            <h3>Authentification</h3>
        </div>
        
        <div class="mb-4">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Indiquez votre login">
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" id="password" placeholder="Indiquez votre mot de passe">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </form>
</div>