
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones
                        <a href="panel.php?modulo = crearCliente"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                         include_once "db_tiendaonline.php";
                         $con=mysqli_connect($host, $user, $password, $db);
                         $query="SELECT id, email, nombre from user; ";
                         $res=mysqli_query($con, $query);
                         
                         while($row=mysqli_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td>   
                            <a href="editarCliente.php?id=<?php echo $row['id'] ?>"> <i class="fas fa-edit"></i> </a>
                            <a href="customer.php?idBorrar=<?php echo $row['id']?>" class="text-danger"> <i class="fas fa-trash"></i> </a>  
                        </td>
                    </tr>
                    <?php
                         }
                    ?>
                   </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>