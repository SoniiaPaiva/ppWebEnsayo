<!doctype html>
<html lang="es">
  <head>
      <?php include 'includes/head.php'; ?>

    <title>Contacto - Taller Automotriz La Tuerca</title>
  </head>


  <body>
           <!---inicio del includes--->
         <?php include 'includes/header.php'; ?>
            <!---fin del include--->


  <body>
    <main>
      <div class="container-fluid" style="padding: 0">
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

      <!---LOGO--->
          <a class="navbar-brand" href="#">Logo</a>

      <!---boton de menu responsive--->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <!---Enlases de Menu--->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

     <li class="nav-item">
        <a class="nav-link" href="index.html">Inicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="empresas.html">Empresa</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="servicios.html">Servicios</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contactos.html">Contactos</a>
      </li>

            <!---Menu Despegable--->
        <!---<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Desplegable
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Sub Menu 1</a>
          <a class="dropdown-item" href="#">Sub Menu 2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sub Menu 3</a>
        </div>--->
     
    </ul>
   <!--- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>--->
  </div>
</nav>
          
      <section>
        
      
        
           <div class="col-md-12">

             <div class="row">
              <div class="col-md-12 titulo-seccion">
                <h2>Contactos</h2>
                <hr>
              </div>
            </div>

            <div class="row">
             <div class="col-md-3">
               <h2>Informaciones</h2>


               <div class="media">
                   <i class="material-icons">
                 email
                 </i>
                  <div class="media-body">
                  <h5 class="mt-0">Email</h5>
                  infofut@gmail.com
                  </div>
                 </div>


         <div class="media">
                   <i class="material-icons">
                  perm_phone_msg </i>
                  <div class="media-body">
                  <h5 class="mt-0">Telefono</h5>
                  021 125472
                  </div>
                 </div>

                      <div class="media">
                  <i class="material-icons">
                  place</i>
                  <div class="media-body">
                  <h5 class="mt-0">Direccion</h5>
                 Av. San Blas km 3 1/2
                  </div>
                 </div>

             </div>


             <div class="col-md-9">
               <h2>Formularios</h2>
               <form method="POST" action="">
                 <label>Nombre</label>
                 <input type="text" name="nombre" class="form-control" required>
               

                <label>Email</label>
                 <input type="email" name="email" class="form-control" required>
             

                <label>Telefono</label>
                 <input type="text" name="telefono" class="form-control">
              

                <label>Asunto</label>
                 <input type="text" name="asunto" class="form-control" required>

                <label>Mensaje</label>
                <textarea class="form-control" cols="30" rows="10" name="mensaje" required></textarea>

                <br>
                <input type="submit" name="enviar" value="Enviar" class="btn btn-success">

               </form>

             </div>

              
            </div>
      </div>
      </section>  

      <section>
        <div class="container-fluid">  
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.8698889331054!2d-54.63178548498416!3d-25.50938548375189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f685bd8c314873%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1ses!2spy!4v1552607066019" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          
        </div>
      </section>
       


</main>

            <!---incicio del footer--->
         <?php include 'includes/footer.php'; ?>
            <!---fin el footer--->
    

           <!---incicio del script--->
         <?php include 'includes/script.php'; ?>
            <!---fin el script--->
      
  </body>
</html>