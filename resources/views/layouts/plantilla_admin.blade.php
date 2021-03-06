<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Cetpro José Galvez</title>
    <link rel="stylesheet" type="text/css" href="/css/estilos-propios.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png" />

</head>


<body>
  
    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
   
        @include('layouts/sidebar')

        <main class="page-content">

            @include('layouts/contenido_cabecera')
            
            @yield("contenido_principal")
            
            
    
        </main>
        <!-- page-content" -->
    </div>
   
    <!-- page-wrapper -->
    
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/jquery-1.12.1.min.js"></script>
  <!--  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script src="/js/renderizar_select_grupo.js"></script>
    <script src="/js/renderizar_info_grupo.js"></script>
    <script src="/js/renderizar_info_profesor.js"></script>
    <script src="/js/renderizar_datos_generales_historial.js"></script>
    <script src="/js/renderizar_tabla_modulos.js"></script>

</body>
</html>