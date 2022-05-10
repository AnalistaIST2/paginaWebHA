<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>H&A SAT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/font.css">
    <link rel="stylesheet" href="../../assets/css/estiloredes.css">

    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
    <link href="../../assets/css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../PopUp/css/estilos.css">
</head>

<body class="d-flex flex-column h-100" style="text-align: justify;">
    <?php
    include '../Layout/redes.php';
    ?>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
        include '../Layout/navbar.php';
        ?>
        <section style="position: fixed; z-index:100;">
            <ul class="nav nav-tabs">
                <li class="nav-item dropdown" style="background:rgba(102,59,218,0.8); border-radius:1px;">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: #fff;">Navegar</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#inicio">Inicio</a></li>
                        <li><a class="dropdown-item" href="#empatia">Empatía</a></li>
                        <li><a class="dropdown-item" href="#registroPlataforma">Registro en la Plataforma CRM</a></li>
                        <li><a class="dropdown-item" href="#transparencia">Transparencia</a></li>
                        <li><a class="dropdown-item" href="#escucha">Escucha Empática</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- Page Content-->
        <section class="py-3" id="inicio">
            <div class="container px-5">
                <center>
                    <h1 class="fw-bolder fs-2 mb-4">SAT</h1>
                </center>
                <hr>
                <div class="card border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-xl-5 py-lg-5">
                                <div class="p-4 p-md-5">
                                    <center>
                                        <img src="../../assets/img/SAT.png" width="20%">
                                        <div class="h1 fw-bolder">Servicio de Asistencia Transparente</div>
                                        <p style="text-align: justify;"></p>
                                    </center>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <img class="bg-featured-blog" src="../../assets/img/verticales/sat/principal.jpg">
                            </div>
                        </div>
                        <div style="position: fixed; z-index: 100;">
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Blog preview section-->
        <section class="py-2">
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="empatia">
                <div class="row gx-5">
                    <div class="col-lg-4">
                        <img src="https://dummyimage.com/300x250/343a40/6c757d" width="110%" />
                    </div>
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Empatía</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Hace referencia a la capacidad que tenemos para conectarnos emocionalmente con las demás personas. De esta manera, tratamos de percibir y comprender las emociones del otro frente a las situaciones que experimenta.</p>
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="registroPlataforma">
                <div class="row gx-5">

                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Registro en Plataforma</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Nuestra atención al usuario queda registrada en la plataforma PGT-CRM o en la del cliente según los acuerdos de nivel del servicio, para poder tener la trazabilidad de este CRM propio o del cliente y tener información presisa y a la mano.</p>
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                    <div class="col-lg-4">
                        <img src="https://dummyimage.com/300x250/343a40/6c757d" width="110%" />
                    </div>
                </div>
            </div>
            <div class="container px-5 my-4 shadow rounded-3 overflow-hidden" id="transparencia">
                <div class="row gx-5">
                    <div class="col-lg-4">
                        <img src="https://dummyimage.com/300x250/343a40/6c757d" width="110%" />
                    </div>
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Transparencia</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">La atención que se brinda está basada en la honestidad, ética y responsabilidad por el otro.</p>
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                </div>
            </div>
            <div class="container px-5 my-4 shadow rounded-3 overflow-hidden" id="escucha">
                <div class="row gx-5">

                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Escucha Empática</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Es la habilidad de prestar atención a la persona que está trasmitiendo un mensaje. No se trata solo de estar pendiente de dar una respuesta, pues requiere de contacto visual, mantener una postura corporal receptiva y usar la herramienta de parafraseo.</p>
                                </ul>
                            </section>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <img src="https://dummyimage.com/300x250/343a40/6c757d" width="110%" />
                    </div>
                </div>
            </div>
        </section>
    </main>
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