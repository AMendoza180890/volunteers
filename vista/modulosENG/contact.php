<!-- Start formulario de contacto -->
<div class="Emergency_contact" id="formulary">
    <div class="conatiner-fluid p-0">
        <div class="d-flex justify-content-center overlay_skyblue">
            <div class="col-xl-6 col-md-6 single_emergency d-flex align-items-center justify-content-center flex-column overlay_skyblue">
                <div class="d-inline-flex flex-column align-items-center text-center">
                    <h3>Join us in Nicaragua</h3>
                    <p>complete our form to learn more about volunteer Tesoros</p>
                </div>
                <div class="info_button">
                    <form role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                <label for="fname" style="color: #000;">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
                                </div>
                                <div class="col">
                                <label for="lname" style="color: #000;">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" style="color: #000;">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                        </div>
                            
                        <div class="form-group">
                            <label for="email" style="color: #000;">Email and Type of Volunteer</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                        </div>
                            
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="color: #000;" for="tvolunteer">Options</label>
                            </div>
                            <select required class="custom-select" id="tvolunteer" name="tvolunteer" >
                                <option value="">Choose...</option>
                                <option value="1">Individual</option>
                                <option value="2">Team</option>
                                <option value="3">Intership</option>
                            </select>
                        </div>

                        <div class="form-group" id="leader">
                            <label for="resposable" style="color: #000;">Leader Group Name</label>
                            <input type="text" name="responsable" id="responsable" class="form-control"/>
                        </div>
                            
                        <div class="form-group">
                            <label for="description" style="color: #000;">Comment About</label>
                            <textarea class="form-control" name="description" id="description" cols="87" rows="5" required></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary w-100 p-3">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End formulario de contacto -->


<!-- elementos extras para eliminar -->

<!-- <div class="col-xl-6">
                <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                    <div class="info">
                        <h3>Make an Online Appointment</h3>
                        <p>Esteem spirit temper too say adieus.</p>
                    </div>
                    <div class="info_button">
                        <a href="#" class="boxed-btn3-white">Make an Appointment</a>
                    </div>
                </div>
</div> -->