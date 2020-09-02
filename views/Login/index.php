<div class="row">
  <div class="col-sm-3 mt-5 position-relative">
    <div class="card login">
      <div class="card-body">
        <h5 class="card-title">Iniciar Sesion</h5>
        <br>
        <hr>
        <p class="card-text">
            <form action="index.php?controller=Login&action=initLogin">
                <div class="form-row">
                    <div class="col">
                        <label for="">Correo Electronico</label>
                        <input type="email" name="txtEmail" placeholder="example@example" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="">Contraseña</label>
                        <input type="password" name="txtPassword" placeholder="..." class="form-control">
                    </div>
                </div>
                <br><br><button type="submit" id="btn-enviar" class="btn btn-outline-success btn-block">Ingresar</button>
            </form>
        </p>
        <hr>  
        <a href="index.php?controller=Login&action=create" class="btn btn-outline-primary btn-block">Registrate</a>
        <p class="mt-2 text-center"><a href="#">Olvide mi contraseña</a></p>
      </div>
    </div>
  </div>
</div>