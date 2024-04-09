<?php
function Menu(array $productos)
{
    if (!empty($productos)) {
        foreach ($productos as $key => $producto) {
            echo "                           
                <div class='col-md-4'>
                    <form action='logic.php' method='POST'>
                        <div class='services-inner-box'>
                            <div class='ser-icon'>
                                <img src='images/productos/{$producto['imagen']}' class='img-fluid' alt='' />
                            </div>
                            <h2> {$producto['nombre']}</h2>
                            <h4 class='text-center'>$ {$producto['precio']}</h4>
                            <div class='d-flex'>
                                <input type='hidden' name='action' value='add_producto'>
                                <input type='hidden' name='id' value='$key'>
                                <input type='number' min=1 value=1 class='form-control form-control-sm' name='cantidad' id='cantidad' required></input>
                                <button type='submit' class='btn'>Agregar</button>
                            </div>
                        </div>
                    </form> 
                </div>                         
            ";
        }
    }
}

function MostrarPedido(array $pedidos, string $estado, bool $all = false)
{
    foreach ($pedidos as $key => $pedido) {
        if ($pedido['estado'] == $estado) {
            $total = 0;
            echo "
                <div class='col-md-4 col-xl-20'>
                    <div class='card'>
                        <div class='card-body row'>        
                            <div class='col-10'>
            ";
            if ($all) {
                echo "
                <h5>{$pedido["nombre"]} {$pedido["apellido"]}</h5>
                <p class='m-0'>{$pedido['telefono']}</p>
                <p class='m-0'>{$pedido['direccion']}</p>
                </div>
                <div class='state'>
                    <span>{$pedido['estado']}</span> 
                </div>                            
                ";
            } else {
                echo "<h1>Tu pedido</h1></div>";
            }

            echo "
            </div>
            <ul class='list-group list-group-flush '>
            ";

            if (empty($pedido['orden'])) {
                echo "<div class='text-center'><p> No se han agregado productos </p></div>";
            } else {
                foreach ($pedido['orden'] as $index => $orden) {
                    $total += (float)$orden['importe'];
                    $importe = number_format((float)$orden['importe'], 2);
                    echo "
                    <li class='list-group-item d-flex justify-content-between'>
                        <p>{$orden['producto']} x<strong>{$orden['cantidad']}</strong></p>
                        <p>$ {$importe}</p>
                        <form action='logic.php' method='POST'>
                            <input type='hidden' name='id_pedido' value='$key'>
                            <input type='hidden' name='id_producto' value='$index'>
                            <button type='submit' class='btn btn-danger' name='action' value='eliminar_producto'>Eliminar</button>
                        </form>
                    </li>";
                }
                $total = number_format($total, 2);
            }

            if (isset($pedido['nota']) && !empty($pedido['nota'])) {
                echo "<li class='list-group-item d-flex justify-content-between'><p class='nota'>{$pedido['nota']}</p></li>";
            }

            echo "
            </ul>
            <div class='card-body d-flex justify-content-between'>    
                <h5>Total: </h5> <p class='font-weight-bold'>$ $total</p>
            </div>";

            if (!$all && !empty($pedido['orden'])) {
                echo "
                <div class='card-body row'>
                    <a class='btn text-light' href='create_fin.php'>Finalizar Pedido</a>               
                </div>";
            } elseif ($estado == 'Pendiente') {
                echo "
                <form action='logic.php' method='POST'>
                    <div class='d-flex'>
                        <input type='hidden' name='id' value={$pedido['id']}>    
                        <button type='submit' class='btn btn-success' name='action' value='finish'><i class='fa fa-check'></i> </button>
                        <button type='submit' class='btn btn-danger' name='action' value='delete'><i class='fa fa-times'></i></button>
                    </div>
                </form>";
            }

            echo "
            </div>
        </div>
        </div>";
        }
    }
}
?>
