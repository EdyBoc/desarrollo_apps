
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Iconos  css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
<style>
.body {
  background-color: #f5f5f5;
}

.h1 {
  font-weight: bold;
}

.fecha {
  margin-top: 10px;
}

@media (max-width: 768px) {
  .col-md-6 {
    width: 100%;
  }
}

</style>

    <title>Document</title>
</head>

<body>


<div class="d-flex justify-content-center align-items-center">
        <div class="card w-50">
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                        <div class="container">
    <h1 class="text-center">BIENVENIDOS, REGISTRA TU ENTRADA/SALIDA</h1>
    <h2 class="text-center" id="fecha"></h2>
    <div class="row mt-5">
      <div class="col-md-6 offset-md-3">
        <form action="">
          <div class="form-group">
            <label for="id">Ingrese su CUI</label>
            <input type="text" class="form-control" id="id" placeholder="Número de identificación">
          </div>
          <div class="row">
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary btn-block">Entrada</button>
            </div>
            <div class="col-md-6">
              <button type="submit" class="btn btn-danger btn-block">Salida</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



  
    <!-- Iconos Scripts-->
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <!-- bootstrap@4 Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
<script src="script.js">
const fechaElement = document.getElementById("fecha");

function updateFecha() {
  const fechaActual = new Date();
  const fechaFormateada = fechaActual.toLocaleString();
  fechaElement.textContent = fechaFormateada;
}

setInterval(updateFecha, 1000);


</script>
</body>

</html>
