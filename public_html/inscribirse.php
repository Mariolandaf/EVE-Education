<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php
$conex = mysqli_connect("localhost:3306", "eveeduca_admin", "Tortillas#1", "eveeduca_evedatos");
if (!$conex) {
    echo"No se pudo conectar con el servidor";
}

$v1=$_POST["nombrei"];
$v2=$_POST["fechai"];
$v3=$_POST["emaili"];
$v4=$_POST["teli"];
$v5=$_POST["paisi"];
$v6=$_POST["ciudadi"];
$v7=$_POST["gradoi"];
$v8=$_POST["escuelai"];
$v9=$_POST["materiai"];
$v10=$_POST["horarioi"];
$v11=$_POST["comentarioi"];

insertar($v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9, $v10, $v11);

function insertar($v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9, $v10, $v11) {
    global $conex;

    if(!mysqli_query($conex, "INSERT INTO beneficiarios(nombrei, fechai, emaili, teli, paisi, ciudadi, gradoi, escuelai, materiai, horarioi, comentarioi) VALUES ('".$v1."', '".$v2."', '".$v3."', '".$v4."', '".$v5."', '".$v6."', '".$v7."', '".$v8."', '".$v9."', '".$v10."', '".$v11."')"))
    {
        echo "ERROR!";
    }
    else {
        include("Inscribirse.html");
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