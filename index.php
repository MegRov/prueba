<?php include ('includes/header.php'); ?>

<div class="container p-4 ">
  <div class="row">


    <div class="col-md-4 border-1  ">



      

      <div class="card card-body">
        
          <form action="save.php" method="POST">
            
          <?php include ('venta.php');?>
            
              
            <input type="submit" class="btn btn-success btn-fluid" value="Agregar compra" name="save">
            


            <?php if (isset($_SESSION['message'])){?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'];?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <?php session_unset(); }?>



          </form>

        </div>
      </div>

      <!-- <div class="col-md-7">
        <canvas id="myChart">


        </canvas>
      </div> -->
      <?php $quer = "SELECT SUM(total) as sumtotal FROM venta" ;
            $resultado=mysqli_query($conn, $quer);
            $data=mysqli_fetch_array($resultado);

            
            $asd=   $data['sumtotal'];
            $asd=(int)$asd;
           
            ?>
            

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Total", { role: "style" } ],
        
        ["Costo", 35, "#b87333"],
        ["Total", 50, "silver"],
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total de las ventas",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 40px; height: 300px;"></div>

  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>

  </div>
 <div class="container">

   <h1 class="text-center">Ventas</h1>
  </div>
    
  <table class="table table-striped">
   
  <thead>
    <tr>
      <th scope="col">Cebolla</th>
      <th scope="col">Tomate</th>
      <th scope="col">Mayonesa</th>
      <th scope="col">BBQ</th>
      <th scope="col">Tocino</th>
      <th scope="col">Chedar</th>
      <th scope="col">Costo</th>
      <th scope="col">Total</th>
      <th scope="col">edi/del</th>
    </tr>
  </thead>
  <tbody>
     <?php
     $query= "SELECT * FROM venta";
     $result_ventas = mysqli_query($conn, $query);

     while($row = mysqli_fetch_array($result_ventas)){?>

      <tr>
        <td><?php echo $row['cebolla']?></td>  
        <td><?php echo $row['tomate']?></td>  
        <td><?php echo $row['mayonesa']?></td>  
        <td><?php echo $row['BBQ']?></td>  
        <td><?php echo $row['tocino']?></td>  
        <td><?php echo $row['chedar']?></td>  
        <td><?php echo $row['costo']?></td>  
        <td><?php echo $row['total']?></td>  
        <td>  
          <!---- <a class="p-2 btn btn-primary" href="edit.php?idventa=< ?php  echo $row ['idventa']?>">
                  <svg class="bi bi-pen" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391L10.086 2.5a2 2 0 012.828 0l.586.586a2 2 0 010 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 011.414 0l.586.586a1 1 0 010 1.414L5 13l-3 1 1-3z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 00-.708 0L5.854 5.855a.5.5 0 01-.708-.708L8.44 1.854a1.5 1.5 0 012.122 0l.293.292a.5.5 0 01-.707.708l-.293-.293z" clip-rule="evenodd"/>
                    <path d="M13.293 1.207a1 1 0 011.414 0l.03.03a1 1 0 01.03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
                  </svg>
              </a> ----->

              <a  class="p-2 btn btn-danger" href="delete.php?idventa=<?php echo $row ['idventa']?>">
                  <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
                  </svg>
              </a>
        </td>  
    </tr>


     <?php }?>
  </tbody>
</table>

</div>





 <?php include ('includes/footer.php') ;?>

