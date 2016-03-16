<html>
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD</h3>
            </div>
            <div class="row">
                <!-- Segunda parte -->
                <p>
                    <a href="create.php" class="btn btn-success">Create</a>
                </p>
                <!-- Segunda parte -->
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Celular</th>
                      <!-- Segunda parte -->
                      <th>Opciones</th>
                      <!-- Segunda parte -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM Contactos ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['nombre'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['celular'] . '</td>';
                            // Segunda Parte
                            //echo '<td><a class="btn" href="read.php?id='.$row['id'].'">Ver</a></td>';
                            // Segunda Parte

                            // Tercera Parte
                            echo '<td width=250>';
                            echo '<a class="btn" href="read.php?id='.$row['id'].'">Ver</a>';
                            echo ' ';
                            echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Actualizar</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Borrar</a>';
                            echo '</td>';
                            // Tercera Parte
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>