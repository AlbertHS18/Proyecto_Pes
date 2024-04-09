<?php	
	session_start();
    if(file_exists('includes/variables.php'))
	    include_once('includes/variables.php');
    
    if($_POST['action'] == 'add_producto'){   
        if(! isset($_SESSION['orden']))
		    $_SESSION['orden'] = array();

        if(! is_null($productos)){           
            $id=$_POST['id'];
            $cantidad=$_POST['cantidad'];
            $importe=(double) $productos[$id]['precio']*$cantidad;

            $orden=array(
                "producto"=>$productos[$id]['nombre'],
                "cantidad"=>$cantidad,
                "importe"=>$importe,
            );

            array_push($_SESSION['orden'],$orden);
            header('Location: create.php#menu');
        }
    }

    if($_POST['action'] == 'add_pedido'){  
        if(! isset($_SESSION['pedidos']))
		    $_SESSION['pedidos'] = array();
        $valido=true;
        foreach ($_SESSION['pedidos'] as $key => $pedido) {
            if ($pedido['nombre']==$_POST['nombre'] && 
                $pedido['apellido']==$_POST['apellido'] &&
                $pedido['telefono']==$_POST['telefono'] && 
                $pedido['estado']=='Pendiente'){
                $valido=false;
                header('Location: create.php?message=true');
            }

        }
        if ($valido){ 
            $pedido=array(
                "id"=> count($_SESSION['pedidos']),
                "nombre"=>$_POST['nombre'],
                "apellido"=>$_POST['apellido'],
                "telefono"=>$_POST['telefono'],
                "direccion"=>$_POST['direccion'],
                "orden"=>$_SESSION['orden'],
                "nota"=>$_POST['nota'],
                "estado"=>'Pendiente'            
            );
            array_push($_SESSION['pedidos'],$pedido);
            unset($_SESSION['orden']);
            header('Location: create.php');
        }
    }

    if($_POST['action'] == 'delete'){  
        unset($_SESSION['pedidos'][$_POST['id']]);
        header('Location: vista.php');
    }

    if($_POST['action'] == 'finish'){  
        $_SESSION['pedidos'][$_POST['id']]['estado']='Finalizado';
        header('Location: vista.php');
    }


    function eliminarProducto()
{
    if (!isset($_SESSION['orden'])) {
        $_SESSION['orden'] = array();
    }
    if (isset($_POST['id_producto'])) {
        $id_producto = $_POST['id_producto'];
        if (array_key_exists($id_producto, $_SESSION['orden'])) {
          
            unset($_SESSION['orden'][$id_producto]);
            header('Location: create.php#menu');
        } else {
            header('Location: error.php');
        }
    } else {
        header('Location: error.php');
    }
}