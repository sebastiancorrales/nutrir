<link rel="stylesheet" href="css\form-benficiario.css">
<div class="container-sm">
    <section class="datos-generales">
        <div class="form">
            <h1>Datos Generales</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_generales">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="primer_nombre" placeholder="Primer Nombre" require>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="segundo_nombre" placeholder="segundo_nombre">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="primer_apellido" placeholder="Primer Apellido" require>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="segundo_apellido" placeholder="Segundo Apellido">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="tipo_documento">Tipo de Documento</label>
                        <select class="custom-select" name="tipo_documento" id="tipo_documento">
                            <option value="CC">Cédula de Ciudadania</option>
                            <option value="TI">Tarjeta de Identidad</option>
                            <option value="PASAPORTE">Pasaporte</option>
                            <option value="CE">Cedula de Extranjería</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">N° Documento</label>
                        <input class="form-control" type="number" name="numero_documento" placeholder="124545184">
                    </div>
                    <div class="col">
                        <label for="genero">Genero</label>
                        <select class="custom-select" name="genero" id="genero">
                            <option value="FEMENINO">Femenino</option>
                            <option value="MASCULINO">Masculino</option>
                            <option value="OTRO">Otro</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Estado Civil</label>
                        <select class="custom-select" name="estado_civil" id="">
                            <option value="SOLTERO">Soltero</option>
                            <option value="CASADO">Casad</option>
                            <option value="OTRO">Otro</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="my-auto btn btn-sm btn-success"> Guardar </button>
            </form>
        </div>
    </section>
</div>