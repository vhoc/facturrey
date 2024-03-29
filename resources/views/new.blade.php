<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>Venka</title>
    <meta name="title" content="Venka">
    <meta name="description" content="Administre su restaurante con un acceso fácil y rápido a todos sus datos relevantes.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://waxy.mx">
    <meta property="og:title" content="Venka">
    <meta property="og:description" content="Administre su restaurante con un acceso fácil y rápido a todos sus datos relevantes.">
    <meta property="og:image" content="https://venka.mx/temporal/assets/img/jumbotron_768.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://waxy.mx">
    <meta property="twitter:title" content="Venka">
    <meta property="twitter:description" content="Administre su restaurante con un acceso fácil y rápido a todos sus datos relevantes.">
    <meta property="twitter:image" content="https://venka.mx/temporal/assets/img/jumbotron_768.webp">

    <!-- Styles -->    
    <style>
        /* Initial settings, Globals and Variables */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --color-clear: #e0e0e0;
            --color-dark: #303030;
            --color-primary: rgba( 47, 83, 141, 1.0 );
            --color-secondary: rgba( 136, 199, 71, 1.0 );
            --gradient-primary: linear-gradient( 90deg, var(--color-primary), var(--color-secondary) 100% );
            --gradient-dark: linear-gradient(139deg, rgba(149,149,149,1) 0%, rgba(0,0,0,1) 100%);
            --color-btn-contratar: rgb(255, 196, 0);
            --color-btn-contratar-lighter: rgb(248, 212, 93);
            --color-btn-contratar-darker: rgb(194, 149, 0);
        }

        html { height: 768px; }

        body { min-height: 768px; }

        html, body {
            max-width: 1920px;
        }

        #main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            min-width: 320px;
            max-width: 1920px;
        }

        @font-face {
            font-family: 'rubiklight';
            src: url('assets/fonts/rubik-variablefont_wght-webfont.woff2') format('woff2'),
                url('assets/fonts/rubik-variablefont_wght-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        body {
            font-family: 'rubiklight';
        }

        li { list-style: none }

        a { text-decoration: none; }

        .border {
            border-style: solid;
            border-color: red;
            border-width: 1px;
        }

        .btn {
            border: 1px solid var( --color-dark );
        }

        /* Animations */
        @-webkit-keyframes paqueteHeader3BgAnim {
            0%{background-position:0% 52%}
            50%{background-position:100% 49%}
            100%{background-position:0% 52%}
        }
        @-moz-keyframes paqueteHeader3BgAnim {
            0%{background-position:0% 52%}
            50%{background-position:100% 49%}
            100%{background-position:0% 52%}
        }
        @keyframes paqueteHeader3BgAnim {
            0%{background-position:0% 52%}
            50%{background-position:100% 49%}
            100%{background-position:0% 52%}
        }
    </style>

    <!-- Primary Meta Tags -->
    <title>Venka</title>
    <meta name="title" content="Venka">
    <meta name="description" content="Administre su restaurante inteligentemente con un acceso fácil y rápido a todos sus datos relevantes.">
    <meta name="author" content="Victor Hugo Olvera Cardoso"/>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://venka.mx">
    <meta property="og:title" content="Venka">
    <meta property="og:description" content="Administre su restaurante inteligentemente con un acceso fácil y rápido a todos sus datos relevantes.">
    <meta property="og:image" content="https://venka.mx/temporal/assets/img/jumbotron_768.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://venka.mx/">
    <meta property="twitter:title" content="Venka">
    <meta property="twitter:description" content="Administre su restaurante inteligentemente con un acceso fácil y rápido a todos sus datos relevantes.">
    <meta property="twitter:image" content="https://venka.mx/temporal/assets/img/jumbotron_768.webp">
    
    <link rel="preload" as="image" href="assets/img/jumbotron_768.webp"/>
    <link rel="stylesheet" media="screen and (min-width:0px)" href="assets/css/mobile.css"/>
    <link rel="stylesheet" media="screen and (min-width:460px)" href="assets/css/lg.css"/>
    <link rel="stylesheet" media="screen and (min-width:768px)" href="assets/css/desktop.css"/>
    <link rel="stylesheet" media="screen and (min-width:1300px)" href="assets/css/xl.css"/>
    <link rel="stylesheet" media="screen and (min-width:1600px)" href="assets/css/xxl.css"/>
    
</head>

<body>
    
    <div id="main">

        <!---------------------------------->
        <!--   Header and Navigation Bar  -->
        <!---------------------------------->

        <header id="header" class="header">

            <nav class="navbar">

                <a href="#" ><img src="assets/img/logo-header.webp" alt="Regresar al Inicio" loading="lazy"></a>

                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#informacion" class="nav-link">Información</a>
                    </li>
                    <li class="nav-item">
                        <a href="#precios" class="nav-link">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#menudigital" class="nav-link">Menú Digital</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacto" class="nav-link">Contacto</a>
                    </li>
                </ul>

                <button class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>

            </nav>

        </header>


        <!---------------------------------->
        <!--         Image Header         -->
        <!---------------------------------->

        <section id="hero">

            <div class="container">

                <div class="hero-caption-top">
                    <h1>Su negocio en su mano</h1>
                    <span>Administre su restaurante inteligentemente con un acceso fácil y rápido a todos sus datos relevantes.</span>
                </div>

                <img class="hero-phone-mobile" src="assets/img/phone-mobile.webp" loading="lazy" aria-hidden="true"/>
                <img class="hero-phone" src="assets/img/phone.webp" loading="lazy" aria-hidden="true"/>

            </div>

        </section>

        <div class="intro">
            <img loading="lazy" aria-hidden="true" src="assets/img/venka-logo-square.svg" class="icono-informacion"/>
        </div>

        <!---------------------------------->
        <!--         Información          -->
        <!---------------------------------->

        <div class="jumbotron">
            <h1>¿Qué es Venka?</h1>
            <p>Estas son algunas de las características de la aplicación que le ayudarán a tomar las mejores decisiones para su negocio.</p>
        </div>

        <section id="informacion">

            <div class="container">

                <div class="info info-venka">                        
                    <p>
                        Venka es una aplicación que le permite monitorear 
                        <strong>en tiempo real</strong> el desempeño de su restaurante 
                        en relación a las metas que usted mismo defina para cada día.
                        Con Venka usted puede obtener información detallada de consumos, 
                        ocupación, estadísticas por artículos, comparativos de periodos 
                        diarios, semanales, mensuales y anuales.
                    </p>   
                </div>

                <!-- Resumen de Empresas -->
                <div class="info info-resumenempresas">
                    <img aria-hidden="true" src="assets/img/resumen-empresa.webp" class="info-images" loading="lazy"/>
                    <div>
                        <h1>Resumen de Empresa</h1>
                        <p>Vea en una sola pantalla el resumen de todas las sucursales de su restaurante.</p>
                        <p>
                            Con un solo vistazo puede saber el avance de ventas de cada una 
                            de sus sucursales y comprobar la ocupación y disponibilidad de 
                            todas ellas.
                        </p>
                        <p>
                            Use el Control de Periodos en la parte inferior de la pantalla para cambiar 
                            el periodo mostrado en pantalla a las estadísticas diarias, semanales, 
                            mensuales, o anuales. Compare, con un sólo toque, cada periodo con su 
                            contraparte anterior.
                        </p>
                    </div>
                </div>

                <!-- Resumen de Sucursal -->
                <div class="info info-resumensucursal">
                    <img aria-hidden="true" src="assets/img/resumen-sucursal.webp" class="info-images" loading="lazy"/>
                    <div>
                        <h1>Resumen de Sucursal</h1>
                        <p>
                            Vea el detalle del desempeño de cada sucursal en su propia vista.
                        </p>
                        <p>
                            Obtenga en tiempo real el monto de cuentas abiertas, las mesas ocupadas 
                            contra el total disponible, y la ocupación de comensales.
                        </p>
                        <p>
                            Consulte la proyección de la venta total del día en base a la tendencia de 
                            venta actual. También puede comparar dicha tendencia contra el desempeño 
                            de días anteriores.
                        </p>
                    </div>
                </div>

                <!-- Detalles por Categoría -->
                <div class="info info-detallesucursal">
                    <img aria-hidden="true" src="assets/img/detalle-categorias.webp" class="info-images" loading="lazy"/>
                    <div>
                        <h1>Detalles por Categoría</h1>
                        <p>
                            Sepa de inmediato los volúmenes específicos de Formas de Pago y 
                            de ventas por Categoría con indicadores claros y fáciles de 
                            entender en cantidades y porcentajes.
                        </p>
                        <p>
                            Tendrá acceso también a un Listado de Movimientos detallando 
                            la cantidad y el monto de cada uno de ellos.
                        </p>
                    </div>
                </div>

                <!-- Detalles Formas de Pago y Área -->
                <div class="info info-detallespagoarea">
                    <img aria-hidden="true" src="assets/img/detalle-pago-area.webp" class="info-images" loading="lazy"/>
                    <div>
                        <h1>Ventas por Forma de Pago y Área</h1>
                        <p>
                            La aplicación proporciona también un detalle de ventas 
                            dividido por Formas de Pago y Áreas de Servicio, mostrando 
                            un desglose indicando la cantidad de cada categoría y su 
                            monto total correspondiente.
                        </p>
                        <p>
                            
                        </p>
                    </div>
                </div>

                <!-- Control de Periodos -->
                <div class="info-controlperiodos">
                    <img aria-hidden="true" src="assets/img/info-controlperiodos.webp" class="info-images" loading="lazy"/>
                    <p>
                        Al pie de la pantalla, seleccione con un sólo toque el periodo que abarque la información 
                        mostrada en toda la Pantalla de Sucursal, y con sólo un segundo toque 
                        compare rápidamente la información del periodo seleccionado, 
                        sea del día, de la semana, del mes, o del año; con la del periodo 
                        correspondiente anterior.
                    </p>
                </div>
                
            </div>

        </section>

        <!---------------------------------->
        <!--            Precios           -->
        <!---------------------------------->

        <div class="jumbotron jumbotron-precios">
            <h1>Precios</h1>
            <p>
                Tenemos un paquete de acuerdo a sus necesidades. Disfrute del 
                primer mes de servicio gratis.
            </p>
        </div>

        <section id="precios">

            <div class="container">
                
                <div class="paquete paquete-mes">
                    <div class="paquete-header paquete-header-1">
                        <h1>1 Mes</h1>
                    </div>
                    <div class="paquete-body">
                        <div class="paquete-precio">
                            <strong>$949</strong>
                        </div>
                        <span>($949 Mensual)</span>
                        <div class="paquete-accion">
                            <a href="#contacto" class="btn btn-contratar">Contratar</a>
                        </div>
                    </div>
                    
                </div>

                <div class="paquete paquete-mes">
                    <div class="paquete-header paquete-header-2">
                        <h1>6 Meses</h1>
                    </div>
                    <div class="paquete-body">
                        <div class="paquete-precio">
                            <strong>$4,999</strong>
                        </div>
                        <span class="mensual">(<strong>$833.17</strong> Mensual)</span>
                        <div class="paquete-accion">
                            <a href="#contacto" class="btn btn-contratar">Contratar</a>
                        </div>
                    </div>
                    
                </div>

                <div class="paquete paquete-mes">
                    <div class="paquete-header paquete-header-3">
                        <h1>1 Año</h1>
                    </div>
                    <div class="paquete-body">
                        <div class="paquete-precio">
                            <strong>$8,500</strong>
                        </div>
                        <span>(<strong>$708.33</strong> Mensual)</span>
                        <span><strong>Incluye:</strong></span>
                        <span class="paquete-incluye">• 1 mes GRATIS de servicio</span>
                        <span class="paquete-incluye">• 1 mes GRATIS de Menú en Línea</span>
                        
                        </ul>
                        <div class="paquete-accion">
                            <a href="#contacto" class="btn btn-contratar">Contratar</a>
                        </div>
                    </div>
                    
                </div>

            </div>

        </section>

        <!---------------------------------->
        <!--         Menú Digital         -->
        <!---------------------------------->

        <div class="jumbotron jumbotron-menudigital">
            <h1>Menú Digital</h1>
            <p>
                Ponga a disposición de sus clientes un moderno y funcional Menú Digital 
                fácilmente accesible desde un Código QR o un enlace corto.
            </p>
        </div>

        <section id="menudigital">

            <div class="container">
                
                <img src="assets/img/venka-menu-movil.webp" loading="lazy"/>

                <img src="assets/img/venka-menu-tablet.webp" loading="lazy"/>

                <div class="menudigital-caption">

                    <h1>Menú Digital</h1>
                
                    <p>
                        Nuestro Menú Digital para su restaurante puede ser accesible desde 
                        un código QR que podrá imprimir para colocarse en servilleteros, 
                        pósters, volantes o en todo tipo de medios publitarios. También 
                        se le proporcinará un enlace web corto para compartir desde todas 
                        sus redes sociales y campañas de correos o mensajes.
                    </p>

                </div>      
                
                <a href="#contacto" class="btn btn-contratar">Quiero Más Información</a>

            </div>


        </section>

        <!---------------------------------->
        <!--            Contacto          -->
        <!---------------------------------->

        <div class="jumbotron jumbotron-contacto">
            <h1>Contacto</h1>
            <p>
                ¿Le interesa recibir más información sobre Venka y nuestros servicios o 
                desea contactar al departamento de ventas? Envíenos un mensaje en éste 
                formulario.
            </p>
        </div>

        <section id="contacto">

            <div class="container">

                

            </div>

        </section>

        <!---------------------------------->
        <!--            Footer            -->
        <!---------------------------------->

        <section id="footer">

            <footer>

                <div class="container">
                    
                    <img aria-hidden="true" src="assets/img/venka-logo-blanco.webp" loading="lazy"/>

                    <span class="footer-division"></span>

                    <div class="footer-group">

                        <div class="footer-block-1">
                        
                            <h1>CONTACTO</h1>
                            <span>contacto@venka.mx</span>
                            <span>(644) 000 • 0000</span>
                        </div>
    
                        <span class="footer-division"></span>
    
                        <div class="footer-block-2">
                            <img src="assets/icons/facebook-square.svg"/>
                            <img src="assets/icons/facebook-messenger.svg"/>
                            <img src="assets/icons/envelope-square.svg"/>
                        </div>
                        
                    </div>

                </div>

            </footer>

        </section>

    </div>

    <script type="text/javascript" src="assets/js/header.js" defer></script>

</body>

</html>