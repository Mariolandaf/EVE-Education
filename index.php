<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php
$conex = mysqli_connect("localhost:3306", "eveeduca_admin", "Tortillas#1", "eveeduca_evedatos");
if (!$conex) {
    echo"No se pudo conectar con el servidor";
}

$v1=$_POST["nombre"];
$v2=$_POST["email"];
$v3=$_POST["fecha"];
$v4=$_POST["tel"];
$v5=$_POST["pais"];
$v6=$_POST["ciudad"];
$v7=$_POST["grado"];
$v8=$_POST["escuela"];
$v9=$_POST["materiav"];
$v10=$_POST["horav"];
$v11=$_POST["experiencia"];
$v12=$_POST["motivo"];

insertar($v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9, $v10, $v11, $v12);

function insertar($v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9, $v10, $v11, $v12) {
    global $conex;

    if(!mysqli_query($conex, "INSERT INTO voluntarios(nombre, email, fecha, tel, pais, ciudad, grado, escuela, materiav, horav, experiencia, motivo) VALUES ('".$v1."', '".$v2."', '".$v3."', '".$v4."', '".$v5."', '".$v6."', '".$v7."', '".$v8."', '".$v9."', '".$v10."', '".$v11."', '".$v12."')"))
    {
        echo "ERROR!";
    }
    else {
        include("unirse.html");
        echo"
            <script type='text/javascript'>
  
                Swal.fire ({
                    title: 'Registro Exitoso',
                    toast: true,
                    position: 'center',
                    icon: 'success',
                    confirmButtonColor: '#004aad',
                    confirmButtonArialLabel: 'Registro Exitoso',    
                })
            
            </script>
        ";
    }
}
?>