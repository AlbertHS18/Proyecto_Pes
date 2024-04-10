<?php 
session_start();
echo '<pre>';
$ultimo_pedido = end($_SESSION["pedidos"]);
$importe_ultimo_pedido = $ultimo_pedido["orden"][0]["importe"];
echo $importe_ultimo_pedido;
?>


<script src="https://www.paypal.com/sdk/js?client-id=AbOSTEpoGxsbNMw5GSrTrglCn_AAoS2aW5u9KE4tCjWFSy29GMa9n46WU0-7ID0CnHxCdAITQISDEih2&currency=USD"></script>

<form action="" method="post">
<div id="paypal-button-container"></div>

<script>
    var  importeUltimoPedido = <?php echo json_encode($importe_ultimo_pedido); ?>;
    paypal.Buttons({
        style: {
            layout: 'horizontal', 
            color: 'gold', 
            shape: 'rect', 
            label: 'pay' 

        },
            createorder: function(data, actions) {
                // Esta función se llama cuando se inicia el proceso de pago.
                // // Aqui puedes decir la lógica para crear la orden de PayPal.
                return actions.order.create({
                    purchase_units: [{
                    amount:{
                    value: 100
                    }
                    }]
                });
            },
                onApprove: function(data, actions) {
                // Esta función se llama cuando el pago ha sido aprobado por el usuario.
                return actions.order.capture().then(function(details) {
                // // Aqui puedes ejecutar acciones adicionales después de que se ha completado elpago.
                alert('Pago completado por ' + details.payer.name.given_name);
                });
                }
            }).render('#paypal-button-container');

                </script>


</form>