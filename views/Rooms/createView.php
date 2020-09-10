<?php 
    include_once 'core/connection.php';
    $mysqli = new mysqli('localhost', 'root', '', 'hotel');
?>
<br>
<form action="index.php?controller=rooms&action=save" id="myForm" method="POST" class="form" style="position: relative; left:25%">
    <div class="form-row">
            <div class="col-xl-6">
                <label for="">Nombre de la Habitación</label>
                <input type="text" name="txtName" placeholder="403" class="form-control">
            </div>
    </div>                                
    <br>
    <div class="form-row">
        <div class="col-xl-6">
            <label for="">Tipo de Habitación</label>
            <select name="txtType" id="" class="form-control">
                <?php 
                    $query = $mysqli -> query ("SELECT * FROM tipo_habitacion");
                    while ($types = mysqli_fetch_array($query))
                        {
                ?>
                <option value="<?php echo $types['id'] ?>"><?php echo $types['name'] ?></option>
                <?php
                    }
                ?>
            </select>
        </div>
    </div>
    <br>
    <button class="btn btn-primary btn-block col-xl-6" type="submit">Crear</button>                                                                             
</form>