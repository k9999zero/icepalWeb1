
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/style.css">
   
    

    <style>
    </style>
</head>
<body>
<script src="<?php echo BASE_URL; ?>/Views/js/Deletecelo.js"></script>
  <div class="mt-5">
<div id = "main-container">
<table>
  <thead>
  <h1 class="h1"> Registro de celo</h1>
    <tr class="tr">
      <th>Id Madre</th>
      <th>Id Celo</th>    
      <th>Numero de celo</th>   
      <th>Fecha celo</th>
      <th>Fecha Registro</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getId_madre()."</td>";
      echo "<td>".$row->getId_celo()."</td>";       
      echo "<td>".$row->getN_celo()."</td>"; 
      echo "<td>".$row->getF_celo()."</td>";
      echo "<td>".$row->getF_reg()."</td>";
       
      echo '<td><a class="eliminar-btn" href="icepalWeb1/MVC/ajax">Eliminar</a></td>'; 
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table> 
</div> 
                   <div class = "div1">
                        <div class="boton2">
                              <div class="b4">
                                  <input type="button" value = "imprimir registro" onclick = "window.print()">
                              </div>
                       
                              <a class= "b4" href= "/icepalWeb1/MVC/Reg_celo" class="sectionb-linkb"  > atras</a>

                              <a class= "b4" href= "/icepalWeb1/MVC/Encargado" class="sectionb-linkb"  > Ver registros</a>
                              
                              <a class= "b4" href= "/icepalWeb1/MVC/" class="sectionb-linkb"  > volver al inicio</a>
                        
                          </div>
                   </div>


              </div>
              
              
        </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>