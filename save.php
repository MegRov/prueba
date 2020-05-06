<?php include ('includes/header.php')?>

<?php 


$total=10000;
$costo=4130; 

if(isset($_POST['save'])){
$checks='0';



if(isset($_POST['cebollo'])){

    $cebollo= $_POST['cebollo'];
    $cebolloc=(int)$cebollo;
   
   

}elseif (!isset($_POST['cebollo'])){
    $cebollo=0;
    $cebolloc=(int)$cebollo;
   
}
if(isset($_POST['tomato'])){   
    $tomato= $_POST['tomato'];
    $tomatoc=(int)$tomato;
    
}elseif (!isset($_POST['tomato'])){
    $tomato=0;
    $tomatoc=(int)$tomato;
    
}
if(isset($_POST['BBQ'])){
    
    $BBQ= $_POST['BBQ'];
    $BBQc=(int)$BBQ;
    
}elseif (!isset($_POST['BBQ'])){
    $BBQ=0;
    $BBQc=(int)$BBQ;
  
}
if(isset($_POST['mayoneso'])){

    $mayoneso= $_POST['mayoneso'];
    $mayonesoc=(int)$mayoneso;
    
}elseif (!isset($_POST['mayoneso'])){

    $mayoneso=0;
    $mayonesoc=(int)$mayoneso;
  
}
if(isset($_POST['tocineto'])){
    
    $tocineto= $_POST['tocineto'];
    $tocinetot=(int)$tocineto+800;//total a pagar 2000
    $tocinetoc=(int)$tocineto;//costo tocineta 1200

}elseif (!isset($_POST['tocineto'])){
    
    $tocineto=0;
    $tocinetot=(int)$tocineto;
    $tocinetoc=(int)$tocineto;
  
}
if(isset($_POST['chedar'])){
    
    $chedar= $_POST['chedar'];
    $chedart=(int)$chedar+700; //total a pagar 1500
    $chedarc=(int)$chedar;//costo lonja 800

      }elseif (!isset($_POST['chedar'])){
    
        $chedar=0;
        $chedart=(int)$chedar;//total queda en 0
        $chedarc=(int)$chedar;//costo queda en 0
       
    }
   
    //Validaciones de resultados
    if(isset($cebolloc) and  (isset($tomatoc))){
        $sin=$tomatoc + $cebolloc;      

      }
      if(isset($BBQc) and  (isset($mayonesoc))){
          $salsas=$mayonesoc + $BBQc;       
          
      }
      if(isset($tocinetot) and  (isset($chedart))){
          $add=$chedart + $tocinetot; 
          $addcost=$chedarc+ $tocinetoc;  
          
      }
      
      
      
    
    $costot=($costo+$addcost+$salsas)-$sin;
    $totalt=$total+$add;
    $query="INSERT INTO venta(cebolla,tomate,mayonesa,BBQ,tocino,chedar,costo,total) VALUES ('$cebolloc','$tomatoc','$mayonesoc','$BBQc','$tocinetoc','$chedarc','$costot','$totalt')";
    $result =mysqli_query($conn,$query);

    $_SESSION['message']='Agregado satisfactoriamente <br>'. 'Valor a pagar: <strong>'.$totalt. '</strong> <br> Costo produccion:<strong>'.$costot. '</strong>';
    $_SESSION['message_type']='success';
 
   header("Location: index.php");
    }

?>