<div class="container">
    <section class="estructura_familiar">
        <div class="form">
            <h1>Estructura Familiar</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_estructura_familiar">
                <div class="form-row">
                    <div class="col">
                        <label for="">Nombre Completo</label>
                        <input type="text" class="form-control" name="nombre_estructura" placeholder="Nombre/Apellido">
                    </div>
                    <div class="col">
                        <label for="parentesco_estructura">Parentesco Familiar</label>
                        <select class="custom-select" name="parentesco_estructura" id="parentesco_estructura">
                            <option value="">Sele</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3">
                        <input type="number" class="form-control" name="edad_parentesco" placeholder="Edad">
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>

</div>