<a href="index.php?controller=typerooms&action=create"><button type="button" class="btn btn-primary    mt-3 ml-3 mb-3" ">Nuevo Tipo</button></a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Máx Personas</th>
      <th scope="col" colspan="3">Opciones</th>
    </tr>
  </thead>
  <tbody id="content">
    <?php for ($i =0; $i < count($alltypes); $i++){ ?>
      <tr>
        <td scope="row"><?php echo $alltypes[$i]->id ?></td>
        <td scope="row"><?php echo $alltypes[$i]->name ?></td>
        <td scope="row"><?php echo $alltypes[$i]->description ?></td>
        <td scope="row"><?php echo $alltypes[$i]->maxpeople ?></td>
        <td scope="row"><a href="<?php echo 'index.php?controller=typerooms&action=edit&id='.$alltypes[$i]->id; ?>"><img src="images/lapiz.svg" class="btn-1" alt="Agendar Cita"></a></td>
        <td scope="row"><a  onclick="javascript:return confirm('¿Seguro que deseas eliminar este registro?')" href="<?php echo 'index.php?controller=typerooms&action=delete&id='.$alltypes[$i]->id; ?>"><img src="images/basura.svg" class="btn-1" alt="Agendar Cita"></a></td>
      </tr>
    <?php } ?>
  </tbody>
</table> 
