<?php
    include("conexionbd.php");
        $id=$_GET['id'];
   
        $sql = "DELETE FROM canasta WHERE id_cna='$id'";
        $delete = mysqli_query($conexion, $sql);
        if($delete){
            echo '<script>
                window.history.go(-2);
            </script>';
          
        }else{
            echo '<script>
              alert("Error");
              window.history.go(-2);
            </script>';  
        }
    

?>