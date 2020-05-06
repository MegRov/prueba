<?php
include("includes/header.php");

if(isset($_GET['idventa'])){
    $idventa = $_GET['idventa'];
    $query = "SELECT * FROM venta WHERE idventa = $idventa";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
        $cebolla = $row['cebolla'];
        $tomate = $row['tomate'];
        $mayonesa = $row['mayonesa'];
        $BBQ = $row['BBQ'];
        $tocino = $row['tocino'];
        $chedar = $row['chedar'];
        $costo = $row['costo'];
        $total = $row['total'];
    }
}


if(isset($_POST['update'])){
    $idventa=$_GET['idventa'];
    $cebolla=$_POST['cebolla'];
    $tomate=$_POST['tomate'];
    $mayonesa=$_POST['mayonesa'];
    $BBQ=$_POST['BBQ'];
    $tocino=$_POST['tocino'];
    $chedar=$_POST['chedar'];

     $query= "UPDATE venta set cebolla='$cebolla', tomate='$tomate', mayonesa='$mayonesa', BBQ='$BBQ', tocino='$tocino', chedar='$chedar' WHERE idventa =$idventa ";
     $result= mysqli_query($conn, $query); 
     header("Location :header.php");
}

?>


<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?idventa=<?php echo $_GET['idventa'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="cebolla" value="<?php echo $cebolla;?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tomate" value="<?php echo $tomate;?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="mayonesa" value="<?php echo $mayonesa;?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="BBQ" value="<?php echo $BBQ;?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tocino" value="<?php echo $tocino;?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="chedar" value="<?php echo $chedar;?>">
                    </div>

                    <button class="btn btn-success btn-fluid" name="update">
                        Update
                    </button>
                </form>
            </div>

        </div>
    </div>

</div>


<?php include ('includes/footer.php')?>