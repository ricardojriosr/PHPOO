<div class="box-principal">
<h3 class="titulo">Listado de Secciones<hr></h3>

<div class="panel panel-success">
  <div class="panel-heading">
      <h3 class="panel-title">Listado de Secciones</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Seccion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
          <?php
          while($row = mysqli_fetch_array($datos)) {
          ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
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
