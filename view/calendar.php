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
        <?php  require_once ('composants/sidebar.php') ?>
        <div class="col-md-9">
          <?php  require_once ('composants/header.php') ?>
          <br>
          <div class="row">
            <div class="col-md-6" >
              <div class="card" style="width: 18rem;">
                  <img src="/assets/images/c1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
            </div>
            <div class="col-md-6" >
              <div class="card" style="width: 18rem;">
                  <img src="/assets/images/c2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                     <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
            </div>
          <?php  require_once ('composants/footer.php') ?>
        </div>
        
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
