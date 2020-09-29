<?php
    try {
        include("conexionbd.php");
    
        $User = $_POST['user'];
        $pass = $_POST['pass'];
        $contadorUser = 0;
        $contadorPass = 0;

        $SQL = mysqli_query($conexion, "SELECT * FROM usuario WHERE username='".$User."' OR email='".$User."'");
    
       
        if(mysqli_num_rows($SQL) > 0){
            $contadorUser++;
        }    
        
        while($row = mysqli_fetch_array($SQL)){

            if(password_verify($pass, $row['pass'])){
                $contadorPass++;
            }
            
            $acceso = $row['rol'];

        }

        if($contadorUser > 0){
            
            if($contadorPass == 0){
                echo '<script>
                    alert("Contraseña Incorrecta");
                    window.history.go(-1);
                </script>';
                
            }else{
                
                if($acceso == 1){
                    session_start();
                    $_SESSION["USUARIO"]=$_POST["user"];
                    header("location:admin.php");
                }else{
                    session_start();
                    $_SESSION["USUARIO"]=$_POST["user"];
                    header("location:index.php");
                }
            }
            

        }else{
            echo '<script>
                    alert("DATOS ERRONEOS");
                    window.history.go(-1);
                </script>';
            exit;
        }




    } catch (Exception $e) {
        die ("ERROR!".$e->getMessage());
    }

?>