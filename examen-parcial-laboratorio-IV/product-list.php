<?php
include('header.php');
include('nav.php');
include('autoload.php');

$loginUser = new model\User($_POST['user'],$_POST['pass']);

$d_user = new daosession\RepoUser();

$userAux = $d_user->read($loginUser->getUser());

$a = false;
if($userAux){
          if ($userAux->getPass()==$loginUser->getPass()) {
            $a=true;
          }
        }
$d_product = new daosession\RepoProduct();
$products = $d_product->readAll();

?>

  <main class="py-5">

    <?php if($a){


      ?>

       <section id="listado" class="mb-5">
            <div class="container">
                 <h2 class="mb-4">Listado de productos</h2>
                 <?php if($products){ ?>
                 <table class="table bg-light-alpha">
                      <thead>
                           <th>Código</th>
                           <th>Nombre</th>
                           <th>Costo</th>
                           <th>Precio Venta</th>
                           <th>Stock</th>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($products as $key => $value) {?>

                          <tr>
                               <td><?php echo $value->getProductCode() ?></td>
                               <td><?php echo $value->getName() ?></td>
                               <td><?php echo $value->getCost() ?></td>
                               <td><?php echo $value->getPrice() ?></td>
                               <td><?php echo $value->getStock() ?></td>
                          </tr>

                      <?php  }   ?>

                      </tbody>
                 </table>
            </div>
       </section>

       <section id="eliminar">
            <div class="container">
                 <h2 class="mb-4">Eliminar producto</h2>

                 <form class="form-inline bg-light-alpha p-5">
                      <div class="form-group text-white">
                           <label for="">Código</label>
                           <input type="text" name="" value="" class="form-control ml-3">
                      </div>
                      <button type="submit" name="button" class="btn btn-danger ml-3">Eliminar</button>
                 </form>
            </div>
       </section>

<?php  } }else {?>

  <section id="error">
       <div class="container">
            <h2 class="mb-4">usuario incorrecto</h2>
                <a href="index.php"> <button type="submit" class="btn btn-danger ml-3">volver a inicio</button> </a>
  <?php //<button type="submit" action="index.php" name="button" class="btn btn-danger ml-3">volver a inicio</button>     <a href="index.php">volver a inicio</a>?>

        </div>
  </section>
  <?php } ?>

</main>

<?php include('footer.php') ?>
