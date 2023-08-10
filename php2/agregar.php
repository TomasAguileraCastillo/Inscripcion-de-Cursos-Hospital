<?php
include("con_db.php");


if (isset($_POST['btninscribir'])){
            if  (strlen($_POST['rut']) >= 1 && strlen($_POST['NMB']) >= 1 &&
                 strlen($_POST['APP']) >= 1 && strlen($_POST['APM']) >= 1 && strlen($_POST['EML']) >= 1 &&
                 strlen($_POST['CLR']) >= 1 && strlen($_POST['UN']) >= 1 && strlen($_POST['CARG']) >= 1){
                
                    $rut = trim($_POST['rut']);
                    $nomb = trim($_POST['NMB']) ;
                    $nombres = ucwords($nomb);
                    $apeP = trim($_POST['APP']) ;
                    $aP = ucwords($apeP);
                    $apeM = trim($_POST['APM']) ;
                    $aM = ucwords($apeM);
                    $email = trim($_POST['EML']) ;
                    $movil = trim($_POST['CLR']) ;
                    $estamento = trim($_POST['ETO']) ;
                    $uni = trim($_POST['UN']) ;
                    $unidad = ucwords($uni);
                    $calidadj = trim($_POST['CDJ']) ;
                    $cursoSeleccionado = trim($_POST['CUR']);
                    $carg = trim($_POST['CARG']);
                    $cargo = ucwords($carg);
        
                    
                   
                    //$fecha = date("Y-m-d H:i:s"); 
                    $fecha = date('Y-m-d H:i:s', (strtotime ("-3 Hours")));


                    $sql = "SELECT * FROM inscritos WHERE rut_inscritos = '$rut'";
                    $respuesta = mysqli_query($conex,$sql);
                    //if(mysqli_num_rows($respuesta)==1){
                    if(mysqli_num_rows($respuesta)>=2){
                        //	La búsqueda arrojó usuarios con ese ID, por lo tanto el usuario 
                        echo "<script> alert('ya estas pre-inscrito almenos 2 veces'); </script>";
                    }else{
                        $sql = "SELECT * FROM inscritos WHERE rut_inscritos= '$rut' AND cursoSeleccionado_inscritos = '$cursoSeleccionado'";
                        $respuesta = mysqli_query($conex,$sql);
                        if(mysqli_num_rows($respuesta)==1){
                            //	La búsqueda arrojó usuarios con ese ID, por lo tanto el usuario 
                            echo "<script> alert('ya estas pre-inscrito en este Curso '); </script>";
                        }else{
                            $sql = "INSERT INTO inscritos (rut_inscritos, nombres_inscritos, aP_inscritos, aM_inscritos, email_inscritos, movil_inscritos, cargo_inscritos, estamem_inscritos, unidad_inscritos, calidadJuridica_inscritos, cursoSeleccionado_inscritos, fechaInscripcion_inscrito) VALUES ('$rut', '$nombres', '$aP', '$aM','$email', '$movil', '$cargo', '$estamento', '$unidad', '$calidadj', '$cursoSeleccionado','$fecha') ";
                            $resultado = mysqli_query($conex,$sql);
                            if ($resultado){
                                echo "<script> alert('pre-inscrito(a) Correctamente'); </script>";
                            }else{
                                echo "<script> alert('Error al pre-inscribirse Contacte al Administrador'); </script>";
                            }
                        }
                    }
            }else{
                echo "<script> alert('debe Llenar todos los Campos Correctamente'); </script>";
            }
            
}








?>