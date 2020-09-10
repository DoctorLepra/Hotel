<a href="index.php?controller=rooms&action=create"><button type="button" class="btn btn-primary    mt-3 ml-3 mb-3" ">Crear Habitación</button></a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      <th scope="col" colspan="3">Opciones</th>
    </tr>
  </thead>
  <tbody id="content">
    <?php for ($i =0; $i < count($allRooms); $i++){ ?>
      <tr>
        <td scope="row"><?php echo $allRooms[$i]->id ?></td>
        <td scope="row"><?php echo $allRooms[$i]->name ?></td>
        <td scope="row"><?php echo $allRooms[$i]->type_id ?></td>
        <td scope="row"><a href="<?php echo 'index.php?controller=rooms&action=edit&id='.$allRooms[$i]->id; ?>"><img src="images/lapiz.svg" class="btn-1" alt="Agendar Cita"></a></td>
        <td scope="row"><a  onclick="javascript:return confirm('¿Seguro que deseas eliminar este registro?')" href="<?php echo 'index.php?controller=rooms&action=delete&id='.$allRooms[$i]->id; ?>"><img src="images/basura.svg" class="btn-1" alt="Agendar Cita"></a></td>
      </tr>
    <?php } ?>
  </tbody>
</table> 
