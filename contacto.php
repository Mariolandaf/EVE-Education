<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php

    $nombrec = $_POST["nombrec"];
    $correoc = $_POST["correoc"];
    $asuntoc = $_POST["asuntoc"];
    $mensajec = $_POST["mensajec"];

    $header = "From: " . $correoc . " \r\n";
    $header = "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header = "Mime-Version: 1.0 \r\n";
    $header = "Content-Type: text/plain";

    $mensajee = 
    "Nuevos comentarios!
    Contacto desde el sitio web eve.education
    Nombre: $nombrec
    Correo: $correoc
    Mensaje:
    
        $mensajec";
        
    $asuntoo = "Contacto: $asuntoc";

    $para = "eve_soporte@eve.education";

    $enviar_mail = mail($para, $asuntoo, $mensajee, $header);

    if ($enviar_mail) {
        include("index.html");
        echo"
            <script type='text/javascript'>

            Swal.fire ({
                title: 'Correo enviado',
                toast: true,
                position: 'center',
                icon: 'success',
                confirmButtonColor: '#004aad',
                confirmButtonArialLabel: 'Correo enviado',    
            })

            </script>
        ";
    } else {
        include("index.html");
        echo"
            <script type='text/javascript'>

            Swal.fire ({
                title: 'Error',
                toast: true,
                position: 'center',
                icon: 'error',
                confirmButtonColor: '#004aad',
                confirmButtonArialLabel: 'Correo enviado',    
            })

            </script>
        ";
    }

?>