<?php
include('header.php');
include('nav.php');
include('autoload.php');

if ($_POST) {
    $product = new model\Product($_POST['cod'],$_POST['nom'],$_POST['cos'],$_POST['pre'],$_POST['sto']);

    $d_product = new daosession\RepoProduct();

    $d_product->create($product);

    if(!isset($_SESSION))
    {
      session_start();

    }
  /*  echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";*/
}

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar producto</h2>

               <form class="bg-light-alpha p-5" action="" method="post">
                    <div class="row">
                         <div class="col-lg-2">
                              <div class="form-group">
                                   <label for="">Código</label>
                                   <input type="text" name="cod" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="nom" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-2">
                              <div class="form-group">
                                   <label for="">Costo</label>
                                   <input type="text" name="cos" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-2">
                              <div class="form-group">
                                   <label for="">Precio de venta</label>
                                   <input type="text" name="pre" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-2">
                              <div class="form-group">
                                   <label for="">Stock</label>
                                   <input type="text" name="sto" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
