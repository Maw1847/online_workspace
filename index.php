<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Owork</span>
          </a>
    
          <ul class="nav nav-pills">
              <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">S'inscrire</a></li>
              <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal2">Se connecter</a></li>  
              <li class="nav-item"><a href="#" class="nav-link" >A propos</a></li>
          </ul>
        </header>
      </div>
    <main> 
    <img src="/assets/images/logo1.png" class="rounded mx-auto d-block" alt="...">
    <p class="text-center">Owork est un espace de travail en ligne. Cette plateforme va vous permettre de mieux organiser et gérer vos différents projets peu importe le secteur. <br> Il est utile à distance comme en présentiel. </p>    
    
    <!-- S'inscrire -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-3 needs-validation" method="" action="" >
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Prénom</label>
                  <input type="text" class="form-control" id="validationCustom02" value="" required>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Nom d'utilisateur</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Email</label>
                  <input type="email" class="form-control" id="validationCustom03" required>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Mot de passe</label>
                  <input type="password" class="form-control" id="validationCustom04" required>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">Téléphone</label>
                  <input type="text" class="form-control" id="validationCustom05" required>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      En continuant, vous acceptez les conditions d'utilisation générales 
                    </label>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button class="btn btn-primary" type="submit">Valider</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
      <div class="modal" tabindex="-1" id="exampleModal2" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Connexion</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary">Valider</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </main> 
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
          <span class="text-muted ">Copyright @ GroupEleven 2021.</span>
        </div>
      </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
