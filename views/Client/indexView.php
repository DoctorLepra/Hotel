<a href="index.php?controller=client&action=create"><button type="button" class="btn btn-primary    mt-3 ml-3 mb-3" ">Registrar Cliente</button></a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Documento</th>
      <th scope="col"># Documento</th>
      <th scope="col">Telefono</th>
      <th scope="col" colspan="3">Opciones</th>
    </tr>
  </thead>
  <tbody id="content">
    <?php for ($i =0; $i < count($allClients); $i++){ ?>
      <tr>
        <td scope="row"><?php echo $allClients[$i]->name ?></td>
        <td scope="row"><?php echo $allClients[$i]->type_document ?></td>
        <td scope="row"><?php echo $allClients[$i]->document ?></td>
        <td scope="row"><?php echo $allClients[$i]->cellphone ?></td>
        <td scope="row"><a href="<?php echo 'index.php?controller=admin&action=edit&id='.$allClients[$i]->document; ?>"><img src="images/lapiz.svg" class="btn-1" alt="Agendar Cita"></a></td>
        <td scope="row"><a  onclick="javascript:return confirm('¿Seguro que deseas eliminar este registro?')" href="<?php echo 'index.php?controller=admin&action=delete&id='.$allClients[$i]->document; ?>"><img src="images/basura.svg" class="btn-1" alt="Agendar Cita"></a></td>
      </tr>
    <?php } ?>
  </tbody>
</table> 
