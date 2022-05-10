<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H&A CONSULTING - PQRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/font.css">
    <link rel="stylesheet" href="../../assets/css/estiloredes.css">

    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
    <link href="../../assets/css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../PopUp/css/estilos.css">
</head>

<body>
    <main class="flex-shrink-0">
        <?php
        include '../Layout/redes.php';
        include '../Layout/navbar.php';
        ?>
        <section class="py-5">
            <div class="container px-5">
                <center>
                    <h1 class="fw-bolder fs-2 mb-4">Peticiones, Quejas o Reclamos</h1>
                    <hr>
                </center>
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-receipt"></i></div>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-12 col-xl-12">
                            <form id="contactForm">
                                <div>
                                    <label class="form-label" for="area">Área de la empresa</label>
                                    <select class="form-control" name="area" id="area" required>
                                        <option value="" disabled selected>Seleccione el área</option>
                                        <option value="Administración">Administración</option>
                                        <option value="Alta gerencia">Alta gerencia</option>
                                        <option value="BPO">BPO</option>
                                        <option value="Contabilidad">Contabilidad</option>
                                        <option value="H2O">H2O</option>
                                        <option value="IST">IST</option>
                                        <option value="OHS">OHS</option>
                                    </select>
                                    <br>
                                </div>
                                <div>
                                    <label class="form-label" for="tipoSolicitud">Tipo de solicitud</label>
                                    <select class="form-control" name="tipoSolicitud" id="tipoSolicitud" required>
                                        <option value="" disabled selected>Seleccione el tipo de solicitud</option>
                                        <option value="Petición">Petición</option>
                                        <option value="Queja">Queja</option>
                                        <option value="Reclamo">Reclamo</option>
                                        <option value="Felicitación">Felicitación</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombres y apellidos" required />
                                    <label for="nombre">Nombres y apellidos</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="empresa" name="empresa" type="text" placeholder="Empresa" required />
                                    <label for="empresa">Empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="nombre@example.com" required />
                                    <label for="email">Correo Electrónico</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="numero" name="numero" type="tel" placeholder="Número de contacto" required />
                                    <label for="numero">Número de contacto</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="direccion" name="direccion" type="text" placeholder="Dirección" required />
                                    <label for="direccion">Dirección</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="cargo" name="cargo" type="text" placeholder="Cargo" required />
                                    <label for="cargo">Cargo</label>
                                </div>
                                <div>
                                    <label class="form-label" for="recepcion">Recepción de la PQR</label>
                                    <select class="form-control" name="recepcion" id="recepcion" required>
                                        <option value="" disabled selected>Seleccione la recepción</option>
                                        <option value="Página Web">Página web</option>
                                        <option value="Escrito">Escrito</option>
                                        <option value="Telefónico">Telefónico</option>
                                        <option value="Verbal">Verbal</option>
                                        <option value="Correo electrónico">Correo electrónico</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="form-floating mb-3" id="divOtro" hidden>
                                    <input class="form-control" id="otro" name="otro" type="text" placeholder="Especifique" required />
                                    <label for="otro">Especifique</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="observaciones" name="observaciones" type="text" placeholder="Observaciones" required />
                                    <label for="observaciones">Observaciones</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="informacion" name="informacion" type="text" placeholder="Información PQR" required />
                                    <label for="informacion">Información PQR</label>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include '../Layout/footer.php';
    ?>

    <script>
        let recepcion = document.getElementById("recepcion");
        let inputOtro = document.getElementById("divOtro");

        recepcion.addEventListener("change", (event) => {
            if (recepcion.value == "Otro") {
                inputOtro.removeAttribute("hidden");
            } else {
                inputOtro.setAttribute("hidden", true);
            }
        });
    </script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../../assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="../PopUp/js/jquery-3.5.1.min.js"></script>
    <script src="../PopUp/js/main.js"></script>
    <script src="https://kit.fontawesome.com/cd33816f91.js" crossorigin="anonymous"></script>
</body>

</html>