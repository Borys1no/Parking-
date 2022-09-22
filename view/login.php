<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <title>Sign in</title>
</head>


<body>
    <div class="container-login w-80 mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <!--background-->
            <div class="col bg d-none d-lg-block">
                

            </div>
            <div class="loginf col">
                <div class="fw-bold text-center py-2">
                    <p class="parking">Parking</p>
                    <p class="logo">E</p>
                </div>
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                <!--Login-->
                <form action="R_vehiculo.php" class="form-login p-2">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" name="email" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"> Contrasena</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="connected" id="" class="form-check-input">
                        <label for="conneted" class="form-check-label">Mantenerme conectado</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>

</html>