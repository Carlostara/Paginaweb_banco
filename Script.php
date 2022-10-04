<?php include("head.php") ?>



<?php

 $valor_prestamo = 0;
 $cuota_inicial = 0;
 $saldo_prestamo = 0;
 $no_cuotas = 0;
 $valor_cuota= 0;
 $fecha_actual = date('Y-m-d');
 $fecha_cuota = strtotime('+1 month', strtotime($fecha_actual));
 $fecha_cuota = date('Y-m-j', $fecha_cuota);
 $sub_total=$cuota_inicial;
 
 
 if (isset($_POST["cotizar"])){
    $valor_prestamo=$_POST['valorprestamo'];
    $num_cuotas=$_POST['cuotas'];
    $cuotainicial=$valor_prestamo*0.35;
    $saldo_prestamo=$valor_prestamo*0.70;
    $valor_cuota = $saldo_prestamo / ($num_cuotas-1);
    if($num_cuotas==6){
        $saldo_prestamo=$valor_prestamo*0.70;

    }
    if($num_cuotas >= 12){
        $saldo_prestamo=$valor_prestamo*0.70* 0.112;
       

    }
    for($x=2; $x<=$num_cuotas; $x++){
        $fecha_cuota = strtotime ( '+1 month' , strtotime ( $fecha_cuota) ) ;
        $fecha_cuota = date ( 'Y-m-j' , $fecha_cuota );
        $sub_total+=$valor_cuota;}
    
 }



?>

<table>
        <thead>
            <tr>
                <th>No Cuotas</th>
                <th>Fecha de pago </th>
                <th>Valor Cuota</th>
                <th>subtotal pagado</th>

            </tr>


        </thead>
        <tr>
            <td><?php echo($x=2)?></td>
            <td><?php echo($fecha_cuota)?></td>
            <td><?php echo($valor_cuota)?></td>
            <td><?php echo($sub_total)?></td>
            
         



        </tr>
</table>
<button>uuu</button>
<button>uuu</button>
<?php include("footer.php") ?>




