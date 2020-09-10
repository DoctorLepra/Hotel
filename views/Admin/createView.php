<br>
<form action="index.php?controller=admin&action=save" id="myForm" method="POST" class="form" style="position: relative; left:25%">
                                    <div class="form-row ml-2">
                                        <div class="col-xl-3">
                                            <label for="doc">Documento *</label>
                                            <select name="txtdocument" id="document" class="form-control" >
                                                <option value="">...</option>
                                                <option value="C.C">C.C Cedula de Ciudadania</option>
                                                <option value="T.I">T.I Tarjeta de identidad</option>
                                                <option value="C.E">C.E Tarjeta de identidad</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3">
                                            <label for=""># de Documento</label>
                                            <input type="number" name="txtnumberdocument" class="form-control" placeholder="00000000">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row ml-2">
                                        <div class="col-xl-6">
                                            <label for="nom">Nombre Completo *</label>
                                            <input type="text" name="txtNombre" class="form-control" placeholder="Nombre Completo" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form row ml-0">
                                        <div class="col-xl-6">
                                            <label for="cell">Telefono</label>
                                            <input type="number" name="txtCellphone" class="form-control" placeholder="0000000">
                                        </div>
                                    </div>                                                                                                                                                                              
                                    <div class="form-row ml-2">
                                        <div class="col-xl-3">
                                            <br><label for="email">Correo Electronico *</label>
                                            <input type="email" class="form-control" name="txtEmail" placeholder="example@example" required>
                                        </div>
                                        <div class="col-xl-3">
                                            <br><label for="pass">Contraseña *</label>
                                            <input type="password" class="form-control" name="txtPassword" placeholder="..." required>
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary btn-block col-xl-5  ml-5 mr-0" type="submit">Crear</button>                                                      
</form>