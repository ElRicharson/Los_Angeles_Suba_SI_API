<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--style-->
    <link rel="stylesheet" href="../styles/style.css">
    <title>Estudiantes</title>
</head>

<body>
    <!--BOOTSTRAP NAVIGATION BAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../">
                            <img src="..\img\Logo-LAS.png" alt="LOGO" id="logo"> Liceo Los Ángeles Suba S.I.
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Gestión de estudiantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pagos">Control de pagos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../usuarios">Manejo de usuarios</a>
                    </li>
                </ul>
                <a href="/Los_Angeles_Suba_SI">
                    <button class="btn btn-outline-success">Cerrar sesión</button>
                </a>
            </div>
        </div>
    </nav>
    <div class="container-sm">
        <div class="card">
            <div class="card-header">
                Listado de Estudiantes
            </div>
            <div class="container-sm">
                <div class="row">
                    <div class="col-md-9">
                        <form method="POST">
                            <input name="QUERY" class="form-control me-2" type="search"
                                placeholder="Buscar Estudiantes por nombre" aria-label="Search">
                        </form>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#login">Agregar
                            Estudiante</button>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <table
                    class="list-group list-group-horizontal text-nowrap overflow-auto table table-success table-striped table-hover">
                    <tbody class="studentsList"></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modals -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear nuevo Estudiante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="add-form">
                    <div class="modal-body">
                        <!--NOMBRE-->
                        <div class="mb-3">
                            <label class="form-label">Nombres</label>
                            <input name="" class="name form-control">
                        </div>
                        <!--APELLIDO-->
                        <div class="mb-3">
                            <label class="form-label">Apellidos</label>
                            <input name="" class="lastname form-control">
                        </div>
                        <!--GRADO-->
                        <div class="mb-3">
                            <label class="form-label">Grado</label>
                            <select id="cars" name="" class="grade form-control">
                                <option value="0">Grado 0 (cero)</option>
                                <option value="1">Grado 1 (primero)</option>
                                <option value="2">Grado 2 (segundo)</option>
                                <option value="3">Grado 3 (tercero)</option>
                                <option value="4">Grado 4 (cuarto)</option>
                                <option value="5">Grado 5 (quinto)</option>
                            </select>
                        </div>
                        <!--RAMA-->
                        <div class="mb-3">
                            <label class="form-label">Rama</label>
                            <input name="" class="branch form-control">
                        </div>
                        <!--DEUDA-->
                        <div class="mb-3">
                            <label class="form-label">Debt</label>
                            <input name="" class="debt form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" name="" value="Add student"
                            class="submit-student btn btn-primary btn-success">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="studentapp.js"></script>
</body>

</html>