<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>H&A Contáctenos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/font.css">
    <link rel="stylesheet" href="../../assets/css/estiloredes.css">

    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
    <link href="../../assets/css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../PopUp/css/estilos.css">
</head>

<body class="d-flex flex-column" style="text-align: justify;">
    <?php
    include '../Layout/redes.php';
    ?>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
        include '../Layout/navbar.php';
        ?>
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <center>
                    <h1 class="fw-bolder fs-2 mb-4">CONTÁCTANOS</h1>
                    <hr>
                </center>
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <p class="lead fw-normal text-muted mb-0">Con gusto te atenderemos en el menor tiempo posible.</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-12 col-xl-12">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nombre" type="text" placeholder="Nombre completo" data-sb-validations="required" />
                                    <label for="nombre">Nombre Completo</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Inserte su nombre completo por favor</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">País</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">¿En qué país se úbica?</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email">Correo Electrónico</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">El Correo es obligatorio.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Correo no valido</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Bogotá D.C" data-sb-validations="required" />
                                    <label for="phone">Ciudad</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">La Ciudad es Obligatoria</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="phone" type="tel" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Número de contacto</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Numero al que lo podemos contactar</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Empresa</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">¿Empresa o independiente?</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="resize: none;" data-sb-validations="required"></textarea>
                                    <label for="message">Mensaje</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Dínos por cual servicio te sientes interesado</div>
                                </div>

                                <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <?php
    include '../Layout/footer.php';
    ?>
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