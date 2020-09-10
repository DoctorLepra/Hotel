<br>
<form action="index.php?controller=receptionist&action=update" id="myForm" method="POST" class="form" style="position: relative; left:25%">
                                    <div class="form-row ml-2">
                                        <div class="col-xl-3">
                                            <label for="doc" >Documento *</label>
                                            <select name="txtdocument" id="document" class="form-control" >
                                                <option <?php echo ($allReceptionist->getType_document() == '') ? 'selected' : ''?>>...</option>
                                                <option <?php echo ($allReceptionist->getType_document() == 'C.C') ? 'selected' : ''?> value="C.C">C.C Cedula de Ciudadania</option>
                                                <option <?php echo ($allReceptionist->getType_document() == 'T.I') ? 'selected' : ''?> value="T.I">T.I Tarjeta de identidad</option>
                                                <option <?php echo ($allReceptionist->getType_document() == 'C.E') ? 'selected' : ''?> value="C.E">C.E Tarjeta de identidad</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3">
                                            <label for=""  ># Documento</label>
                                            <input type="number" name="txtnumberdocument" class="form-control" placeholder="<?php echo $allReceptionist->getDocument() ?>" value="<?php echo $allReceptionist->getDocument() ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row ml-2">
                                        <div class="col-xl-6">
                                            <label for="nom">Nombre Completo </label>
                                            <input type="text" name="txtNombre" class="form-control" placeholder="<?php echo $allReceptionist->getName() ?>" value="<?php echo $allReceptionist->getName() ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form row ml-0">
                                        <div class="col-xl-6">
                                            <label for="cell">Telefono</label>
                                            <input type="number" name="txtCellphone" class="form-control" placeholder="<?php echo $allReceptionist->getCellphone() ?>" value="<?php echo $allReceptionist->getCellphone() ?>">
                                        </div>
                                    </div>                                                                                                                                                                              
                                    <div class="form-row ml-2">
                                        <div class="col-xl-3">
                                            <br><label for="email">Correo Electronico </label>
                                            <input type="email" class="form-control" name="txtEmail" placeholder="<?php echo $allReceptionist->getEmail() ?>" value="<?php echo $allReceptionist->getEmail() ?>">
                                        </div>
                                        <div class="col-xl-3">
                                            <br><label for="pass">Contraseña </label>
                                            <input type="password" class="form-control" name="txtPassword" value="<?php echo $allReceptionist->getPassword() ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary btn-block col-xl-5  ml-5 mr-0" type="submit">Actualizar</button>                                                      
</form>