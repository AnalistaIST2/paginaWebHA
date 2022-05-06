<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/estiloredes.css">
    <title>H&A H2O</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100" style="text-align: justify;">
    <?php
    include 'redes.php';
    ?>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
        include 'navbar.php';
        ?>
        <section style="position: fixed; z-index:100;">
            <ul class="nav nav-tabs">
                <li class="nav-item dropdown" style="background:rgba(229,53,23,0.6); border-radius:8px;">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: #fff;">Navegar</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#inicio">Inicio</a></li>
                        <li><a class="dropdown-item" href="#catalogo">Catálogos</a></li>
                        <li><a class="dropdown-item" href="#impresionLitografica">Impresión Litográfica</a></li>
                        <li><a class="dropdown-item" href="#impresionDigital">Impresión Digital</a></li>
                        <li><a class="dropdown-item" href="#diseñoGrafico">Diseño Gráfico</a></li>
                        <li><a class="dropdown-item" href="#campañasPublicitarias">Campañas Publicitarias</a></li>
                        <li><a class="dropdown-item" href="#campañasDigitales">Campañas Digitales</a></li>
                        <li><a class="dropdown-item" href="#campañasBTL">Campañas BTL</a></li>
                        <li><a class="dropdown-item" href="#mercadeoEstrategico">Mercadeo Estratégico</a></li>
                        <li><a class="dropdown-item" href="#desarrollopopEspecial">Desarrollo P.O.P Especial</a></li>
                        <li><a class="dropdown-item" href="#señalizacionIndustrial">Señalización Industrial y de Seguridad y Salud en el trabajo</a></li>
                        <li><a class="dropdown-item" href="#videosCorporativos">Videos Corporativos y Especializados</a></li>
                        <li><a class="dropdown-item" href="#aplicacionesInteractivas">Aplicaciones Interactivas</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- Page Content-->
        <section class="py-3">
            <center>
                <h1 class="fw-bolder fs-2 mb-4" id="inicio">H2O</h1>
            </center>
            <hr>
            <div class="row justify-content-center" id="catalogo">
                <div class="col-lg-8 col-xxl-8">
                    <div class="text-center my-7">
                        <h2 class="fw-bolder mb-3">Catálogo de Productos</h2>
                        <?php
                        include 'catalogoH2o.php';
                        ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container px-5">

                <div class="card border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-xl-5 py-lg-5">
                                <div class="p-4 p-md-5">
                                    <center> <img src="../assets/img/H2O.png" width="20%">
                                        <div class="h1 fw-bolder">Strategic Marketing Agency</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <img src="../assets/img/verticales/h2o/Que identifique la vertical.png" class="bg-featured-blog">
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
        <section class="py-1">
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="impresionLitografica">
                <div class="row gx-5">
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Litográfica.png" width="110%"/>
                    </div>
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Impresión Litográfica</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">La impresión Litográfica o impresión Offset es un método de impresión indirecta, Impresión a bajo costo en tirajes de alto volumen. Alta velocidad de impresión. Buena calidad en detalles y fotografías. Gran variedad de formatos. Da una imagen de alta calidad consistente, más clara y definida que con otros sistemas de impresión. Se puede utilizar en una gran cantidad de tipos de papel, propalcote, bond, papel rugoso y periódico. Tenemos una amplia gama de materiales donde podrá¡ aplicar cualquiera de sus diseños. Cuéntenos sus necesidades, Análogos, Revistas, Libros, Cartillas, todo el material hecho a la medida de sus necesidades y sobre multitud de posibilidades.</p>
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="impresionDigital">
                <div class="row gx-5">
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Impresión Digital</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Siendo una de las más actuales técnicas de impresión, en nuestra compañí­a desarrollamos piezas de alta calidad que harán sentir orgullosos a sus clientes con la información que su empresa les desea brindar.
                                        Producimos piezas de todos los tamaños y materiales que existen en el mercado: afiches, papelería interna y comercial, banner, pendones, vallas publicitarias, tropezones, vinilos, eucoles y demás piezas publicitarias que su empresa necesite.</p>
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Impresión_Digital.png" width="110%" style="margin-bottom: 10%;"/>
                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden " id="diseñoGrafico">
                <div class="row gx-5">
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Diseño_Gráfico.png" width="110%"/>
                    </div>
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Diseño Gráfico</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Las ideas no pueden ser realidad sin el talento para recrearlas. Por eso H&A CONSULTING LTDA, en su vertical H2O cuenta con creativos que hacen sus ideas realidad. El diseño gráfico no es solo desarrollar piezas tales como manuales de identidad corporativa, portafolios, cartillas, manuales de inducción, Ilustraciones, etc., sino que además, le brinda opciones visuales proporcionando soluciones a las necesidades comunicativas que son propias de una organización.
                                        Diseño editorial, ilustración, fotografía, diseño multimedia, son solo algo del la gran gama posibilidades dentro de la gráfica, las cuales puede explotar para transmitir un mensaje contundente, eficaz y sobre todo visual a sus clientes.
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="campañasPublicitarias">
                <div class="row gx-5">
                    
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Campañas Publicitarias</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Una buena Campaña Publicitari­a es aquella que da resultados eficaces y efectivos. Resultados que se ven reflejados de diferentes formas, pero que principalmente aumentan los beneficios de sus colaboradores, su empresa y, finalmente hacen para su beneficio, clientes satisfechos y agradecidos. Por este motivo diseñamos, planeamos y ejecutamos campañas publicitarias bajo los parámetros que su empresa requiera y así­, poder comunicar las verdaderas ventajas de sus productos o servicios.

                                </ul>
                            </section>
                        </article>
                    </div>
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Campañas_Publicitarias.png" width="110%" style="margin-bottom: 5%;"/>
                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="campañasDigitales">
                <div class="row gx-5">
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Campañas_Digitales.png" width="110%" style="margin-bottom: 10%;"/>
                    </div>
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Campañas Digitales</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Buscamos alternativas de comunicación diferentes usando la World Wide Web, los dispositivos móviles y las computadoras como aliados estratégicos. Permítanos darle un nuevo aire a su sitio web, a sus redes sociales, Así no las tiene! nosotros las creamos y a su vez diseñamos estrategias para que las redes sociales y todas las herramientas virtuales con las que cuenta su empresa sean exitosas y rentables.</p>
                                </ul>
                            </section>
                        </article>
                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="campañasBTL">
                <div class="row gx-5">
                    
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Campañas BTL</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <li class="fs-6 mb-4">No hagas una campaña, ni dos, ni tres, haz una de GRAN IMPÁCTO, nosotros te decimos cómo.</li>
                                    <li class="fs-6 mb-4">Hacemos de tu marca, producto o servicio una EXPERIENCIA VIVENCIAL, tenemos el equipo técnico y humano a tu disposición. Siempre hay una nueva forma de comunicar lo que quieres.</li>
                                    <li class="fs-6 mb-4">Te ayudamos, te asesoramos, te proponemos las cosas de otra manera. H2O tu Agencia de Mercadeo Estratégico.</li>

                                </ul>
                            </section>
                        </article>
                    </div>
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Campañas_BTL.png" width="110%" style="margin-top: 5%;"/>
                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="mercadeoEstrategico">
                <div class="row gx-5">
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Mercadeo_Estratégico.png" width="110%"/>
                    </div>
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Mercadeo Estratégico</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <li class="fs-6 mb-4">TODOS HABLAN DE MARKETING ESTRATÉGICO Y POCOS SABEN COMO USARLO!!!!</li>
                                    <li class="fs-6 mb-4">DISEÑAMOS, DESARROLLAMOS E IMPLEMENTAMOS ESTRATEGIAS buscando conocer las necesidades actuales y futuras de los clientes, identificando segmentos y los potencializándolos.</li>
                                    <li class="fs-6 mb-4">Buscamos optimizar los presupuestos de las área de MERCADEO Y COMUNICACIONES convirtiéndoles en áreas más rentables y con un verdadero enfoque.</li>
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="desarrollopopEspecial">
                <div class="row gx-5">
                    
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Desarrollo de P.O.P. Especial</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <section class="mb-5">
                                <ul>
                                    <li class="fs-6 mb-4">El arte de la personalización... no toda imagen se ve bien, pero SU LOGO, se verá bien en todo. ¿Dónde se imagina su logo?
                                        <p>Quizás haya pensado llegar a su oficina y verlo cuando toma el café, o, cuando escribe sobre una hoja de papel, o quizás, en un evento para su organización, verlo en lo más alto del escenario, imponiendo su elegancia y admiración...
                                    </li>
                                    <li class="fs-6 mb-4">¡Su logo donde quiera y donde ni se lo imagina!
                                        <p>Contamos con un amplio catálogo de productos promocionales que harán que cada momento con su empresa, sea una experiencia inolvidable.
                                    </li>
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Desarrollo _P.O.P.png" width="110%" style="margin-top: 5%;"/>
                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="señalizacionIndustrial">
                <div class="row gx-5">
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Señalización_industrial.png" width="110%" style="margin-bottom: 10%;"/>
                    </div>
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Señalización Industrial y de Seguridad y Salud en el trabajo</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Una Norma es una Norma, no hay discusión alguna porque en este caso saldrá afectada su empresa. Para que no sufra estos dolores de cabeza déjenos todo a nosotros. Diseñamos señalización al estándar de la regla o si lo prefiere personalizamos los diseños con la imagen corporativa de su empresa, toda la señalización reglamentaria que su empresa debe tener. Le ofrecemos variedad no solo en diseños si no en materiales y tamaños.
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="videosCorporativos">
                <div class="row gx-5">
                    
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Videos Corporativos y Especializados</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Videos Institucionales, videos de inducción de personal para su empresa, videos especializados en temas como: Seguridad y Salud en el trabajo, Riesgo Psicosocial, Planes de Evacuación de Emergencias, Informativos entre otros.</p>
                                    <a class="btn btn-danger btn-md" href="https://haconsultingeu.com/pagina/videos/h20Publicidad.mp4" target="_blank">Ver Video</a>
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/videos.jpg" width="110%" height="270px" style="margin-bottom: 10%;"/>
                    </div>
                </div>
            </div>
            <div class="container px-5 my-5 shadow rounded-3 overflow-hidden" id="aplicacionesInteractivas">
                <div class="row gx-5">
                    <div class="col-lg-4">
                    <img src="../assets/img/verticales/h2o/Aplicaciones_Interactivas.png" width="110%" style="margin-bottom: 10%;"/>
                    </div>
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h2 class="fw-bolder mb-1">Aplicaciones Interactivas</h2>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Indispensable para tu empresa</div>
                                <!-- Post categories-->
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <ul>
                                    <p class="fs-6 mb-4">Desarrollamos ideas virtuales y digitales para mejorar sus procesos de calidad como: Plataformas de medición, aplicaciones especializadas, animaciones 2D y 3D, inducciones on-line, minería de datos y mucho más.
                                    </p>
                                </ul>
                            </section>
                        </article>
                        <!-- Comments section-->

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <?php
    include 'footer.php';    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>