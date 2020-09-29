
<?php
    
    include("conexionbd.php");
        $id=$_GET['id'];
        $producto=$_GET['producto'];
        $cantidad=$_GET['cantidad'];
        $iva=$_GET['iva'];
        $subtotal=$_GET['subtotal'];
        $total=$_GET['total'];
        $useractivo=$_GET['useractivo'];

        

        $id_user = mysqli_query($conexion, "SELECT * FROM usuario WHERE username='$useractivo' or email='$useractivo'");
        while($consulta1 = mysqli_fetch_array($id_user)){
            $iduser = $consulta1['id_usuario'];
        }
        $id_producto = mysqli_query($conexion, "SELECT * FROM productos WHERE producto='$producto'");
        while($consulta2 = mysqli_fetch_array($id_producto)){
            $idproducto = $consulta2['id_producto'];
        }

        $sql_importar = "INSERT INTO importacion (importador, producto, subtotal_import, total_import, cantidad, iva)
        VALUES ('$iduser','$idproducto','$subtotal','$total','$cantidad','$iva')";
        $import = mysqli_query($conexion, $sql_importar);
   
        $sql_delete = "DELETE FROM canasta WHERE id_cna='$id'";
        $delete = mysqli_query($conexion, $sql_delete);
        if($import and $delete){
            echo '<script>
                alert("Importacion Exitosa");
                window.history.go(-2);
            </script>';
            
          
        }else{
            echo '<script>
              alert("Error");
              window.history.go(-2);
            </script>';
        }
    
    

?>