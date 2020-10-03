<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalCulemos</title>
    <link rel="stylesheet" href="estilos.css">
  
    <link rel='stylesheet' type='text/css' media='screen' href='fontawesome-free/css/all.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="imagencal">
  <header class="container">
    <!-- Just an image -->
      <nav class="navbar navbar-light bg-transparent">
         <a class="navbar-brand " href="#">
         <h1 class="baner">Vamos A Calcular</h1>
         </a>
         
      </nav>

  </header>

 
  <section >
    
  </section>
  <section class="cuerpo" id="operacione" >
  <form  class="container " action="" method="POST">
  <div class="form-row align-items-center row">
    <div class="col-sm-3 my-1">
      <input class="form-control" id="numero_1" name="numero_1" type="number" placeholder="escribe el numero 1">
    </div>
    <div>
    <select class="fas fa-plus" name="operaciones" id="operaciones">
            <option value=""></option>
            <option class="fas fa-plus" value="sumar">SUMAR</option>
            <option value="restar">RESTAR</option>
            <option value="multiplicar">MULTIPLICAR</option>
            <option value="dividir">DIVIDIR</option>
        </select>
    </div>
    <div class="col-sm-3 my-1">
      <div class="input-group">
        <input class="form-control" id="numero_2" name="numero_2" type="number" placeholder="escriba el numero 2">
      </div>
    </div>
    <div class="col-auto my-1">
      <button id="resultado" name="resultado_1" type="submit" value="resultado" class="btn btn-primary">RESULTADO</button>
    </div>
  </div>
</form>
  </section>

        
    <div class="mt-5">
      

      <?php if(isset($_POST['resultado_1'])): ?>

        <h3 class="resultado"><?php

        $num1=$_POST['numero_1'];
        $num2=$_POST['numero_2'];
        $ejecutar=$_POST['operaciones'];

        switch ($ejecutar) {

          case 'sumar':
            $suma=$num1+$num2;
            echo " la Suma Es: $suma";
            # code...
                  break;

                  case 'restar':
                    $rest=$num1-$num2;
                    echo "La Resta Es: $rest";
                    # code...
                      break;

                      case 'multiplicar':
                        $mult=$num1*$num2;
                        echo "La Multiplicacion Es: $mult";
                         # code...
                        break;

                        case 'dividir':
                          $div=$num1/$num2;
                          echo " La Division Es: $div";
                           # code...
                          break;

                          default:
                          echo 'error intenta de nuevo';
                           # code...
                  break;




        }



        ?></h3>





      <?php endif?>

      
      
          
      
     
     



    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


          

