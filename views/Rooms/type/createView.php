<br>
<form action="index.php?controller=typerooms&action=save" id="myForm" method="POST" class="form" style="position: relative; left:25%">
    <div class="form-row">
            <div class="col-xl-6">
                <label for="">Nombre del nuevo tipo de Habitación</label>
                <input type="text" name="txtName" class="form-control" required>
            </div>
    </div>                                
    <br>
    <div class="form-row">
        <div class="col-xl-6">
            <label for="">Descripción</label>
            <textarea name="txtDescription" id="" cols="30" rows="2" placeholder="Habitación con una cama" class="form-control" required></textarea>
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col-xl-6">
            <label for="">Cantidad Maxima de personas permitidas</label>
            <input type="number" name="txtPersons" placeholder="3" class="form-control" required>
        </div>
    </div>
    <br>
    <button class="btn btn-primary btn-block col-xl-6" type="submit">Crear</button>                                                                             
</form>