<?php
  

    function MostrarPedido(array $pedidos, string $estado, bool $all = false)
    {        
        foreach ($pedidos as $key => $pedido)
        {
            if ($pedido['estado'] == $estado){
                $total = 0;
                echo "      
                    <div class='col-md-4 col-xl-20'>
                        <div class='card'>
                            <div class='card-body row'>        
                                <div class='col-10'>";
                if ($all){ 
                    echo "
                        <h5>{$pedido["nombre"]} {$pedido["apellido"]}</h5>
                        <p class='m-0'>{$pedido['telefono']}</p>
                        <p class='m-0'>{$pedido['direccion']}</p>
                        <div class='state'>
                            <span>{$pedido['estado']}</span> 
                        </div>";
                }
                else {
                    echo "<h1>Tu pedido</h1>";
                }
                echo "</div>
                    </div>
                    <ul class='list-group list-group-flush'>";
                if (is_null($pedido['orden'])){
                    echo "<div class='text-center'><p> No se han agregado productos </p></div>";
                }
                else {
                    foreach ($pedido['orden'] as $key => $orden) {                      
                        $total += (double)$orden['importe'];
                        $importe = number_format((double)$orden['importe'], 2);
                        echo "
                            <li class='list-group-item d-flex justify-content-between'>
                                <p>{$orden['producto']} x<strong>{$orden['cantidad']}</strong></p>
                                <p>$ {$importe}</p>
                            </li>";
                    } 
                    $total = number_format($total, 2);                                  
                }
                if (isset($pedido['nota']) && $pedido['nota'] <> '') {
                    echo "<li class='list-group-item d-flex justify-content-between'><p class='nota'>{$pedido['nota']}</p></li>";
                }
                echo "</ul>
                    <div class='card-body d-flex justify-content-between'>    
                        <h5>Total: </h5> <p class='font-weight-bold'>$ $total</p>
                    </div>";
               
                if (! $all && ! is_null($pedido['orden'])){ 
                    echo "
                        <div class='card-body row'>
                            <a class='btn btn-primary text-light w-100' href='create_fin.php'><i class='fas fa-check'></i> Finalizar Pedido</a>               
                        </div>";
                }
                else if ($estado == 'Pendiente'){ 
                    echo "
                        <form action='logic.php' method='POST'>
                            <div class='d-flex'>
                                <input type='hidden' name='id' value={$pedido['id']}>    
                                <button type='submit' class='btn btn-success w-50' name='action' value='finish'><i class='fas fa-check'></i> Finalizar</button>
                                <button type='submit' class='btn btn-danger w-50' name='action' value='delete'><i class='fas fa-trash-alt'></i> Eliminar</button>
                            </div>
                        </form>";  
                }
                echo "</div>
                    </div>";
            }
        }
    }
    
    