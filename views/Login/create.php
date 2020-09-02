<div class="row justify-content-center ">
       <div class="card col-12 col-sm-10 col-md-7 col-lg-5 col-xl-7 mt-4">
           <div class="card-heder mt-3" style="text-align: center; font-size: 2em">Registrarte</div><hr>
           <div class="card-body">
               <form action="index.php?controller=Usuario&action=store" method="POST" class="form">
                    <div class="form-row">
                        <div class="col">
                            <label for="doc">Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required >
                        </div>
                        <div class="col">
                            <label for="nom">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                            <label for="">Tipo de documento</label>
                            <select name="tipo_documento" id="tipo_documento" class="form-control">
                                <option value="">...</option>
                                <option value="T.I">T.I Tarjeta de Identidad</option>
                                <option value="C.C">C.C Cedula de Ciudadania</option>
                                <option value="P.S">Pasaporte</option>
                                <option value="C.E">C.E Cedula de Extrangeria</option>
                            </select>
                    </div> 
                    <div class="form row">
                        <div class="col">
                            <br><label for="dir">Numero de Documento</label>
                            <input type="number" name="numero_documento" class="form-control" placeholder="0000000" required>
                        </div>  
                        <div class="col">
                            <br><label for="">Numero de Celular</label>
                            <input type="number" name="celular" class="form-control" placeholder="0000000" required>
                        </div>          
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <br><label for="dir">Profesion</label>
                            <input type="text" name="profesion" class="form-control" placeholder="Psicolog@" required>
                        </div>  
                        <div class="col">
                            <br><label for="">Foto Personal</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                </div>                            
                            </div>
                        </div>      
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <br><label for="email">Correo Electronico</label>
                            <input type="email" name="email" placeholder="example@example" class="form-control">
                        </div>
                        <div class="col">
                            <br><label for="pass">Contraseña</label>
                            <input type="password" class="form-control" name="password"  required>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br><button type="submit" class="btn btn-outline-primary btn-block">Registrar</button>
               </form>
           </div>
       </div>
   </div>