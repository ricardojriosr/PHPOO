<div class="box-principal">
<h3 class="titulo">Listado de Estudiantes<hr></h3>

<div class="panel panel-success">
  <div class="panel-heading">
      <h3 class="panel-title">Listado de Estudiantes</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Promedio</th>
                <th>Seccion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
          <?php
          //$datos =  $estudiantes->index();
          while($row = mysqli_fetch_array($datos)) {
          ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><a href="<?php echo URL; ?>estudiantes/ver/<?php echo $row['id']; ?>"><img class="img-responsive imagen-avatar" src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $row['imagen']; ?>"></a></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['promedio']; ?></td>
            <td><?php echo $row['nombre_seccion']; ?></td>
            <td>
              <a href="<?php echo URL; ?>estudiantes/editar/<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
              <a href="<?php echo URL; ?>estudiantes/eliminar/<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
    </table>
  </div>
</div>
</div>
