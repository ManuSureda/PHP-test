<?php include('header.php') ;
include('autoload.php');

/*session_start();
session_destroy();*/
/*
$newUser = new model\User('manu','123');
$newUser1 = new model\User('ale','123');
$newUser2 = new model\User('juan','123');
$newUser3 = new model\User('admin@miapp.com','123456');

$d_user = new daosession\RepoUser();
$d_user->create($newUser);
$d_user->create($newUser1);
$d_user->create($newUser2);
$d_user->create($newUser3);

echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/

?>






  <main class="d-flex align-items-center justify-content-center height-100">
       <div class="content">
            <header class="text-center">
                 <h2>1º Parcial - Laboratorio IV</h2>
                 <p>Nombre y Apellido</p>
            </header>
            <form class="login-form bg-dark-alpha p-5 text-white" action="product-list.php" method="post">

                 <div class="form-group">
                      <label for="">Usuario</label>
                      <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar usuario">
                 </div>
                 <div class="form-group">
                      <label for="">Contraseña</label>
                      <input type="text" name="pass" class="form-control form-control-lg" placeholder="Ingresar constraseña">
                 </div>
                 <button class="btn btn-dark btn-block btn-lg" type="submit">
                      Iniciar Sesión
                 </button>
            </form>
       </div>
  </main>



<?php include('footer.php') ?>
