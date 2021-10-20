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
    <link rel="stylesheet" href="../style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Owork</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                  <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                      Accueil
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link link-dark">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                      Mes tâches
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link link-dark">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                      Calendrier
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link link-dark">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                      Tableau de bord
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link link-dark">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                      Groupes
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link link-dark">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                      Mon Profil
                    </a>
                  </li>
                </ul>
                <img id="img_logo" src="/assets/images/logo1.png" class="rounded mx-auto d-block" alt="..." width="100px" height="100px">
                <hr>
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                  Se déconnecter
                </a>
              </div>
        </div>
        <div class="col-md-9">
          <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand"></a>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
            </div>
          </nav>
          <div>
            <img src="/assets/images/logo1.png" class="rounded mx-auto d-block" alt="...">
          </div>
          
          <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
              <span class="text-muted">Copyright @ GroupEleven 2021.</span>
            </div>
          </footer>
        </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
