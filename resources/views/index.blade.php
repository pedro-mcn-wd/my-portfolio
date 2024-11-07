<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/css/index.css', 'resources/js/app.js', 'resources/js/index.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-md fixed-top mt-2 me-2 mt-sm-3 me-sm-auto">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-lg-7 p-0">
                    <nav class="navbar navbar-expand-sm p-0 shadow-sm">
                        <div class="container-fluid justify-content-end justify-content-md-center">
                            <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#workExperience">Experiencia</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#projects">Proyectos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#education">Estudios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#aboutMe">Sobre mí</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="dropdown-themes" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-circle-half"></i>
                                        </a>
                                        <ul id="themes-list" class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#" data-bs-theme-value="light">Claro</a></li>
                                            <li><a class="dropdown-item" href="#" data-bs-theme-value="dark">Oscuro</a></li>
                                            <li><a class="dropdown-item" href="#" data-bs-theme-value="auto">Auto</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container-md mb-4" style="margin-top:7rem">
            <div class="row justify-content-center">
                <div class="col d-flex flex-column flex-sm-row justify-content-center align-items-center">
                    <img src="/img/photo.jpg" class="img-fluid border rounded-pill me-3 mb-3 mb-sm-0 p-0 shadow-sm" style="max-width: 8rem;" alt="profile photo" hrefCode="#" hrefPreview="#">
                    <span class="fs-4 ps-0 ps-sm-4">
                        <span class="fw-semibold text-warning">#disponibilidad</span> <span class="fw-semibold" style="color:#d63384">{</span> <br>
                        &emsp;<span class="fw-semibold text-info">para-trabajar</span><span style="color:#aaa">:</span>
                        <span class="fw-semibold" style="color:darkorange"> inmediata</span>
                        <span class="fw-semibold text-primary">!important</span><span style="color:#aaa">;</span><br>
                        <span class="fw-semibold" style="color:#d63384">}</span>
                    </span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="fs-1 m-0 p-0 fw-bold">Pedro Manuel Carrascoso Núñez</p>
                    <p class="fs-3 m-0 p-0"><span class="text-warning">Desarrollador Web PHP Junior</span> en Granada.</p>
                    <p class="fs-5 m-0 p-0">Especializado en desarrollo web PHP con framework <span class="text-danger fw-bold">Laravel</span></p>
                    <p class="fs-5 m-0 p-0">+1 año de experiencia</p>
                </div>
                <div class="col-12 mt-4 text-center">
                    <a href="mailto:pedromanuelcarrascoso@gmail.com" class="btn btn-custom rounded-pill me-3 fw-semibold"><i class="bi bi-envelope-arrow-up me-2"></i>Contáctame</a>
                    <a href="https://www.linkedin.com/in/pedromcarrascoso/" target="_blank" class="btn btn-custom rounded-pill fw-semibold"><i class="bi bi-linkedin me-2"></i>LinkedIn</a>
                </div>
            </div>
        </div>

        <br>

        <!-- Experiencia -->
        <section id="workExperience" class="my-5">
            <div class="container-md">
                <div class="row d-flex">
                    <div class="col-12">
                        <p class="fs-2 fw-semibold text-primary">&lt;Experiencia laboral /&gt;</p>
                    </div>

                    <!-- Desarrollador Web PHP en 10Code Software Design -->
                    <x-card-info title="Desarrollador Web PHP" entity="10Code Software Design" time="Marzo 2023 / Julio 2024" :btnShowMore="true">
                        <x-slot name="description">
                            Desarrollo de aplicaciones web centrado en backend con un stack basado en Laravel, JavaScript y MySQL principalmente. Realicé tareas de mantenimiento, resolución de incidencias, optimización de procesos, testing y nuevas implementaciones en proyectos en funcionamiento.
                            Ocasionalmente trabajé en frontend, adquiriendo conocimientos básicos en frameworks como React y VueJS.
                        </x-slot>

                        <x-slot name="extraDescription">
                            Me destaco por seguir buenas prácticas de desarrollo, incluyendo la escritura de código claro, legible, sin duplicidades y bien estructurado. Mi trabajo se caracteriza por un código bien comentado, facilitando así el entendimiento y mantenimiento por parte de otros desarrolladores.
                            <br><br>
                            Trabajé con metodología SCRUM, lo que me permitió desarrollar mi capacidad de trabajo en equipo colaborando de manera eficiente en entornos ágiles y centrados en la mejora continua.
                        </x-slot>
                    </x-card-info>

                    <!-- Diseñador gráfico en Esdistinto-->
                    <x-card-info title="Diseñador gráfico" entity="Esdistinto" time="Abril 2019 / Julio 2019">
                        <x-slot name="description">
                            Diseño de merchandising y regalo corporativo, maquetación y cierre de artes finales y manipulación de producto. Uso de Adobe Photoshop y Adobe Illustrator principalmente.
                        </x-slot>
                    </x-card-info>

                    <!-- Diseñador gráfico en Texido-->
                    <x-card-info title="Diseñador gráfico" entity="Texidó" time="Agosto 2018 / Diciembre 2018">
                        <x-slot name="description">
                            Encargado de la realización, traslación y adaptación del diseño del cliente a diversos soportes para su impresión en packaging. Uso de Adobe Photoshop y Adobe Illustrator principalmente.
                        </x-slot>
                    </x-card-info>
                </div>
            </div>
        </section>

        <!-- Proyectos -->
        <section id="projects" class="my-5">
            <div class="container-md">
                <div class="row d-flex">
                    <div class="col-12">
                        <p class="fs-2 fw-semibold text-primary">&lt;Proyectos /&gt;</p>
                    </div>

                    <!-- SALOMOVIL -->
                    <x-card-project title="SALOMOVIL - Tienda especializada en venta de smartphones" srcImg="/img/photo.jpg" altImg="salomovil web screenshot">
                        <x-slot name="listTechnologies">
                            <x-item-list-technologies rgbColor="235,68,50" nameTech="Laravel">
                                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 264" style="width: 1.5rem;" class="me-1 p-1">
                                    <path fill="rgb(235,68,50)" d="m255.9 59.6.1 1.1v56.6c0 1.4-.8 2.8-2 3.5l-47.6 27.4v54.2c0 1.4-.7 2.8-2 3.5l-99.1 57-.7.4-.3.1c-.7.2-1.4.2-2.1 0l-.4-.1-.6-.3L2 206c-1.3-.8-2.1-2.2-2.1-3.6V32.7l.1-1.1.2-.4.3-.6.2-.4.4-.5.4-.3c.2 0 .3-.2.5-.3L51.6.6c1.3-.8 2.9-.8 4.1 0L105.3 29c.2 0 .3.2.4.3l.5.3c0 .2.2.4.3.5l.3.4.3.6.1.4.2 1v106l41.2-23.7V60.7c0-.4 0-.7.2-1l.1-.4.3-.7.3-.3.3-.5.5-.3.4-.4 49.6-28.5c1.2-.7 2.8-.7 4 0L254 57l.5.4.4.3.4.5.2.3c.2.2.2.5.3.7l.2.3Zm-8.2 55.3v-47l-17.3 10-24 13.7v47l41.3-23.7Zm-49.5 85v-47l-23.6 13.5-67.2 38.4v47.5l90.8-52.3ZM8.2 39.9V200l90.9 52.3v-47.5l-47.5-26.9-.4-.4c-.2 0-.3-.1-.4-.3l-.4-.4-.3-.4-.2-.5-.2-.5v-.6l-.2-.5V63.6L25.6 49.8l-17.3-10Zm45.5-31L12.4 32.8l41.3 23.7 41.2-23.7L53.7 8.9ZM75 157.3l24-13.8V39.8l-17.3 10-24 13.8v103.6l17.3-10ZM202.3 36.9 161 60.7l41.3 23.8 41.3-23.8-41.3-23.8Zm-4.1 54.7-24-13.8-17.3-10v47l24 13.9 17.3 10v-47Zm-95 106 60.6-34.5 30.2-17.3-41.2-23.8-47.5 27.4L62 174.3l41.2 23.3Z" />
                                </svg>
                            </x-item-list-technologies>
                            <x-item-list-technologies rgbColor="240,219,79" nameTech="JavaScript">
                                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 1052 1052" style="width: 1.5rem;" class="me-1 p-1">
                                    <path fill="#f0db4f" d="M0 0h1052v1052H0z" />
                                    <path d="M965.9 801.1c-7.7-48-39-88.3-131.7-125.9-32.2-14.8-68.1-25.399-78.8-49.8-3.8-14.2-4.3-22.2-1.9-30.8 6.9-27.9 40.2-36.6 66.6-28.6 17 5.7 33.1 18.801 42.8 39.7 45.4-29.399 45.3-29.2 77-49.399-11.6-18-17.8-26.301-25.4-34-27.3-30.5-64.5-46.2-124-45-10.3 1.3-20.699 2.699-31 4-29.699 7.5-58 23.1-74.6 44-49.8 56.5-35.6 155.399 25 196.1 59.7 44.8 147.4 55 158.6 96.9 10.9 51.3-37.699 67.899-86 62-35.6-7.4-55.399-25.5-76.8-58.4-39.399 22.8-39.399 22.8-79.899 46.1 9.6 21 19.699 30.5 35.8 48.7 76.2 77.3 266.899 73.5 301.1-43.5 1.399-4.001 10.6-30.801 3.199-72.101zm-394-317.6h-98.4c0 85-.399 169.4-.399 254.4 0 54.1 2.8 103.7-6 118.9-14.4 29.899-51.7 26.2-68.7 20.399-17.3-8.5-26.1-20.6-36.3-37.699-2.8-4.9-4.9-8.7-5.601-9-26.699 16.3-53.3 32.699-80 49 13.301 27.3 32.9 51 58 66.399 37.5 22.5 87.9 29.4 140.601 17.3 34.3-10 63.899-30.699 79.399-62.199 22.4-41.3 17.6-91.3 17.4-146.6.5-90.2 0-180.4 0-270.9z"
                                        fill="#323330" />
                                </svg>
                            </x-item-list-technologies>
                            <x-item-list-technologies rgbColor="113,44,249" nameTech="Bootstrap">
                                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 204" style="width: 1.8rem;" class="me-1 p-1">
                                    <path fill="rgb(113,44,249)" d="M53.172 0C38.565 0 27.756 12.785 28.24 26.65c.465 13.32-.139 30.573-4.482 44.642C19.402 85.402 12.034 94.34 0 95.488v12.956c12.034 1.148 19.402 10.086 23.758 24.197 4.343 14.069 4.947 31.32 4.482 44.641-.484 13.863 10.325 26.65 24.934 26.65h149.673c14.608 0 25.414-12.785 24.93-26.65-.464-13.32.139-30.572 4.482-44.641 4.359-14.11 11.707-23.05 23.741-24.197V95.488c-12.034-1.148-19.382-10.086-23.74-24.196-4.344-14.067-4.947-31.321-4.483-44.642C228.261 12.787 217.455 0 202.847 0H53.17h.002ZM173.56 125.533c0 19.092-14.24 30.67-37.872 30.67h-40.23a4.339 4.339 0 0 1-4.338-4.339V52.068a4.339 4.339 0 0 1 4.339-4.34h39.999c19.705 0 32.637 10.675 32.637 27.063 0 11.503-8.7 21.801-19.783 23.604v.601c15.089 1.655 25.248 12.104 25.248 26.537Zm-42.26-64.05h-22.937v32.4h19.32c14.934 0 23.17-6.014 23.17-16.764 0-10.073-7.082-15.636-19.552-15.636Zm-22.937 45.256v35.705h23.782c15.548 0 23.786-6.239 23.786-17.965 0-11.728-8.467-17.742-24.786-17.742h-22.782v.002Z" />
                                </svg>
                            </x-item-list-technologies>
                        </x-slot>
                        <x-slot name="description">
                            Tienda de productos tecnológicos especializada en la venta de smartphones. Creada desde cero con Laravel 10, JavaScript y Bootstrap 5.3.
                        </x-slot>
                    </x-card-project>
                </div>
            </div>
        </section>

        <!-- Estudios -->
        <section id="education" class="my-5">
            <div class="container-md">
                <div class="row d-flex">
                    <div class="col-12">
                        <p class="fs-2 fw-semibold text-primary">&lt;Formación académica /&gt;</p>
                    </div>

                    <!-- DAW -->
                    <x-card-info title="CFGS Desarrollador de Aplicaciones Web" entity="IES Hermanos Machado" time="Septiembre 2021 / Junio 2023">
                        <x-slot name="description">
                            Aprendí a crear, implementar y mantener aplicaciones tanto del lado del cliente como del servidor. Me especialicé en tecnologías modernas como HTML, CSS, JavaScript y desarrollé nociones básicas en frameworks como Laravel y React. También adquirí habilidades en bases de datos y sistemas informáticos, y me formé en metodologías ágiles como SCRUM, todo ello para prepararme para el entorno laboral dinámico y colaborativo.
                        </x-slot>
                    </x-card-info>

                    <!-- DAW -->
                    <x-card-info title="CdP Programación con lenguajes orientados a objetos y bases de datos relacionales" entity="IES Hermanos Machado" time="Septiembre 2022 / Junio 2023">
                        <x-slot name="description">
                            Acreditación de competencias en el desarrollo de aplicaciones utilizando lenguajes de programación orientados a objetos y la gestión de bases de datos relacionales. Incluye formación en buenas prácticas de desarrollo, metodologías ágiles como SCRUM, y habilidades en tecnologías modernas como Java, C++, MySQL y SQL.
                        </x-slot>
                    </x-card-info>

                    <!-- Diseño y producción editorial -->
                    <x-card-info title="CFGS Diseño y Producción Editorial" entity="IES Hermanos Machado" time="Octubre 2013 / Junio 2015">
                        <x-slot name="description">
                            Aprendí a crear y gestionar productos gráficos, desde la conceptualización hasta la producción final, utilizando herramientas como Adobe Photoshop e Illustrator.
                        </x-slot>
                    </x-card-info>
                </div>
            </div>
        </section>

        <!-- Sobre mi -->
        <section id="aboutMe">
            <div class="container-md my-5">
                <div class="row d-flex">
                    <div class="col-12">
                        <p class="fs-2 fw-semibold text-primary">&lt;Sobre mí /&gt;</p>
                    </div>
                    <div class="offset-1 col-11">
                        <p>
                            &emsp;Mi nombre es Pedro Manuel y empecé mi carrera como diseñador gráfico. Al no encontrar suficientes oportunidades en ese campo,
                            quise enfocar mi carrera al diseño web y descubrí mi pasión por la programación. <span class="text-warning">Me especialicé en el Desarrollo de Aplicaciones Web (DAW) y
                                actualmente busco consolidarme como desarrollador backend PHP, con un enfoque en Laravel.</span>

                            <br><br>

                            &emsp;Estoy comprometido con mi crecimiento profesional y <span class="text-warning">constantemente busco dominar no sólo lo que ya conozco,
                                sino también nuevos lenguajes, tecnologías y frameworks a través de la experiencia laboral y la autoformación</span>.
                            Soy algo puntilloso porque <span class="text-warning">quiero que las cosas queden bien</span> (o se mejoren si cabe).
                            También soy bastante curioso, por lo que <span class="text-warning">me gusta investigar</span> formas nuevas y creativas de
                            lograr mis objetivos por mí mismo. Pero también <span class="text-warning">disfruto de trabajar en equipo</span>
                            porque siempre se aprende algo de quien tienes a tu lado.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>

    </footer>
</body>

</html>