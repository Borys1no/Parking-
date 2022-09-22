<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <title>Resgistro de vehiculo</title>
</head>

<body>
    <!--SIDEBAR-->
    <nav class="sidebar close">
        <header>
            <div class="text-side header-text">
                <span class="name">@Borys Cereceda</span>
            </div>
            <hr class="h-color mx-2">
            <i class="fal fa-stream toggle"></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="R_vehiculo.php"><i class="fal fa-car-side icon"></i> <i class="fal fa-caret-left icon"></i>
                            <span class="text-sideb nav-text-side">Ingreso vehiculo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="S_vehiculo.php"> <i class="fal fa-car-side icon"></i> <i class="fal fa-caret-right icon"></i>
                            <span class="text-sideb nav-text-side"> Salida vehiculo</span>
                        </a>
                    </li>

                </ul>

                <div class="settings">
                    <ul class="menu-list">
                        <li class="nav-link">
                            <a href="#"><i class="far fa-tools icon"></i>
                                <span class="text-sideb nav-text-side">Configuracion</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="menu-list">
                        <li class="nav-link">
                            <a href="#"><i class="far fa-sign-in-alt icon"></i>
                                <span class="text-sideb nav-text-side">Cerrar sesion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!--Register form-->
    <div class="main-content">
        <div class="header"> <span>Parking E </span></div>
        <div class="form">
            <span class="text-registrov">Registro Vehiculo</span>
            <form action="POST">
                <br>
                <label for="" class="textplacas"> Ingrese las placas del vehiculo</label><br>
                <input type="text" name="placas" id="placas" ><br><br>
                <label for="" class="txttipovehiculo">tipo de vehiculo</label><br>
                <select class="select-tipo" name="select-option" >
                    <option selected>Selecciona el tipo de vehiculo</option>
                    <option value="1">Liviano</option>
                    <option value="1">Camioneta</option>
                    <option value="2">Pesado</option>
                    <option value="3">Moto</option>
                  </select><br><br>
                <label for="" class="fecha">Fecha de ingreso</label><br>
                <input type="date" name="fecha-ingreso" id=""><br><br>
                <label for="" class="txthoraingreso"> Hora de ingreso</label><br>
                <input type="time" name="horaingreso" id=""><br><br>
                <button type="submit" class="ingresar" >Ingresar</button>

            </form>
        </div>

    </div>








</body>

</html>