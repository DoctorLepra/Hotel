<br>
<form action="index.php?controller=typerooms&action=update&id=<?php echo $id ?>" id="myForm" method="POST" class="form" style="position: relative; left:25%">
    <div class="form-row">
            <div class="col-xl-6">
                <label for="">Nombre del tipo de Habitación</label>
                <input type="text" name="txtName" class="form-control" value="<?php echo $alltypes->getName() ?>" placeholder="<?php echo $alltypes->getName() ?>">
            </div>
    </div>                                
    <br>
    <div class="form-row">
        <div class="col-xl-6">
            <label for="">Descripción</label>
            <textarea name="txtDescription" maxlength="250" id="description" cols="30" rows="2" placeholder="<?php echo $alltypes->getDescription() ?>" class="form-control" required></textarea>
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col-xl-6">
            <label for="">Cantidad Maxima de personas permitidas</label>
            <input type="number" name="txtPersons" placeholder="3" class="form-control" value="<?php echo $alltypes->getMaxpeople() ?>">
        </div>
    </div>
    <br>
    <button class="btn btn-primary btn-block col-xl-6" type="submit">Crear</button>                                                                             
</form>
<script>
    document.getElementById("description").value = "<?php echo $alltypes->getDescription() ?>";
</script>