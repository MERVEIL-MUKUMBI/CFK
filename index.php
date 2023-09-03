<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_colis</title>
    
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>
<style>
   
    #k{
    background:orangered;
  }
  #add_create{
    width:300px;
  }
</style>
</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">AIRFAST</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
        
        <a
          class="btn btn-dark px-3"
          href="<?php echo ('/') ?>"
          role="button"
          >Accueil</i
        ></a>
      </div>
      <div class="d-flex align-items-center">
        
        <a
          class="btn btn-dark px-3"
          href="<?php echo ('/utilisateur-list') ?>"
          role="button"
          >Consulter Colis</i
        ></a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<body>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  
                </div>


                <div class="container">
      
        <div class="row">
            <div class="col-12"></div>
            <div class="col-8">
                
            
        <p><h6>Enregistrer colis</h6></p>
        <div class="row">
            <div class="col-12"></div>
            <div class="col-8">
                <form method="post" id="add_create" name="add_create" action="<?php echo ('/submit-form') ?>">
                    <div class="form-group">
                       
                       <input type="text" name="nomcoli"class="form-control" placeholder="nom" required> 
                    </div><br>
                    <div class="form-group">
                      
                       <input type="text" name="poid"class="form-control" placeholder="poid" required> 
                    </div>
                    <div class="form-group"><br>
                        
                       <input type="text" name="destination" class="form-control" placeholder="destination" required> 
                    </div><br>
                    <div class="form-group"><br>
                        
                       <input type="text" name="prixu" class="form-control" placeholder="prix Unitaire" required> 
                    </div><br>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Valider</button>
                    </div>
                </form>

            </div>
<div class="col-2"></div>
        </div>
    </div>

            </div>
<div class="col-2"></div>
        </div>
    </div>
    <p> voici les membres du groupe</p>
    <p> MBUYA MUKANYA Gilbert</p>
    <p> MONGA SANA Aristide</p>
    <p> MIANDA NGOY Choudelle</p>
    <p> ILUNGA MUNKANA KAZEMBE Joseph</p>
    <p> ILUNGA WA NGOY Annie</p>
    <p> KABUNDA NSENGA SERGE</p>
    <p> KAZADI KAYEMBE Richard</p>
    <p> TABU SUMAILI Jeannete</p>
    <p> BUKASA BUKASA Michael</p>
    <p> MUTOMBO LENGE Heureuse</p>
  
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2" id="k">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4" class="bg-success p-2 text-white">
                <h4 class="mb-4" class="text-danger">vous etes sur la page d'inscription</h4>
                <p class="small mb-0"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Nous Sommes</span>
          <button type="button" class="btn btn-outline-light btn-rounded">
            Se connecter!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright tous Reservés:
      <a class="text-white" href="https://mdbootstrap.com/">Sardou Numbi</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
</body>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>
</html>





















