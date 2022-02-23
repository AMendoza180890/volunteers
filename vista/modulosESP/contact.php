<!-- Start formulario de contacto -->
<div class="Emergency_contact" id="formulary">
    <div class="conatiner-fluid p-0">
        <div class="d-flex justify-content-center overlay_skyblue">
            <div class="col-xl-6 col-md-6 single_emergency d-flex align-items-center justify-content-center flex-column overlay_skyblue">
                <div class="d-inline-flex flex-column align-items-center text-center">
                    <h3>Únete a nosotros en nicaragua</h3>
                    <p>Complete nuestro formulario para obtener más información sobre el voluntariado Tesoros</p>
                </div>
                <div class="info_button">
                    <form role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                <label for="fname" style="color: #000;">Nombres</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Nombres" required>
                                </div>
                                <div class="col">
                                <label for="lname" style="color: #000;">Apellidos</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Apellidos" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" style="color: #000;">Numero de Telefono</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Numero de Telefono">
                        </div>
                            
                        <div class="form-group">
                            <label for="email" style="color: #000;">Email y Tipo de Voluntariado</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                        </div>
                            
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="color: #000;" for="tvolunteer">Opciones</label>
                            </div>
                            <select required class="custom-select" id="tvolunteer" name="tvolunteer" >
                                <option value="">Elige...</option>
                                <option value="Individuo">Individuo</option>
                                <option value="Equipo">Equipo</option>
                                <option value="Pasante o Practica Profesional">Pasantia o Practica Profesional</option>
                            </select>
                        </div>

                        <div class="form-group" id="leader">
                            <label for="resposable" style="color: #000;">Nombre del Lider de Grupo</label>
                            <input type="text" name="responsable" id="responsable" class="form-control"/>
                        </div>
                            
                        <div class="form-group">
                            <label for="description" style="color: #000;">Comentar acerca de vos</label>
                            <textarea class="form-control" name="description" id="description" cols="87" rows="5" required></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary w-100 p-3">Enviar</button>
                        </div>
                        <?php
                            $aplicarMensaje = new mensajeclassC();
                            $aplicarMensaje -> guardarMensaje();
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End formulario de contacto -->