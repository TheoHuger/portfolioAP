<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    
    <form action="index.php?uc=creationcompte&action=valid_compte" method="post" class="col-md-5 border p-4 rounded shadow-sm bg-light">
        
        <div class="mb-4 text-center">
            <h3>Création de compte</h3>
        </div>
        
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Indiquez votre login">
        </div>
        
        <div class="mb-4">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" id="password" placeholder="Indiquez votre mot de passe">
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="verif" id="verfication" placeholder="Retaper votre mot de passe">
        </div>
        
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Créer le compte</button>
        </div>
        
    </form>
</div>