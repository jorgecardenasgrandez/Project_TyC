<?php
    session_start();
 
    // Obtengo los datos cargados en el formulario de login.
    $username = $_POST['username'];
    $pass = $_POST['pass'];
   


    // Conectarse a y seleccionar una base de datos de MySQL llamada sakila
    // Nombre de host: 127.0.0.1, nombre de usuario: tu_usuario, contraseña: tu_contraseña, bd: sakila
    $mysqli = new mysqli('localhost', 'root', '', 'cetprojg');

    // ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
    if ($mysqli->connect_errno) {
    // La conexión falló. ¿Que vamos a hacer? 
    // Se podría contactar con uno mismo (¿email?), registrar el error, mostrar una bonita página, etc.
    // No se debe revelar información delicada

    // Probemos esto:
      echo "Lo sentimos, este sitio web está experimentando problemas. 1";

    // Algo que no se debería de hacer en un sitio público, aunque este ejemplo lo mostrará
    // de todas formas, es imprimir información relacionada con errores de MySQL -- se podría registrar
      echo "Error: Fallo al conectarse a MySQL debido a: \n";
      echo "Errno: " . $mysqli->connect_errno . "\n";
      echo "Error: " . $mysqli->connect_error . "\n";
    
      // Podría ser conveniente mostrar algo interesante, aunque nosotros simplemente saldremos
      exit;
    }

    // Realizar una consulta SQL
    $sql = "SELECT * FROM usuarios WHERE usuario = '$username'";
    if (!$resultado = $mysqli->query($sql)) {
      // ¡Oh, no! La consulta falló. 
      echo "Lo sentimos, este sitio web está experimentando problemas. 2";

      // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
      // cómo obtener información del error
      echo "Error: La ejecución de la consulta falló debido a: \n";
      echo "Query: " . $sql . "\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error . "\n";
      exit;
    }

    // ¡Uf, lo conseguimos!. Sabemos que nuestra conexión a MySQL y nuestra consulta
    // tuvieron éxito, pero ¿tenemos un resultado?
    if ($resultado->num_rows === 0) {
      // ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
      // no. Nosotros decidimos. En este caso, ¿podría haber sido
      // actor_id demasiado grande? 
      echo "Lo sentimos. No se pudo encontrar una coincidencia para el ID $aid. Inténtelo de nuevo.";
      exit;
    }

    // Ahora, sabemos que existe solamente un único resultado en este ejemplo, por lo
    // que vamos a colocarlo en un array asociativo donde las claves del mismo son los
    // nombres de las columnas de la tabla
    $usuario = $resultado->fetch_assoc();
    //echo "A veces veo a " . $actor['first_name'] . " " . $actor['last_name'] . " en la TV.";





    // Esto se puede remplazar por un usuario real guardado en la base de datos.
    if($username == $usuario['usuario'] && $pass == $usuario['contra']){
      // Guardo en la sesión el email del usuario.
      $_SESSION['email'] = $email;
      if($usuario['tipo'] == 'administrador'){
        // Redirecciono al usuario a la página principal del sitio.
        header("HTTP/1.1 302 Moved Temporarily");
        header("Location: administrador_index.php");
        exit;
      }
      else{
        // Redirecciono al usuario a la página principal del sitio.
        header("HTTP/1.1 302 Moved Temporarily");
        header("Location: alumno_index.php");
        exit;
      }
      exit;
    }else{
      echo 'El email o password es incorrecto, <a href="login.php">vuelva a intenarlo</a>.<br/>';
      exit;
    }
 
?>