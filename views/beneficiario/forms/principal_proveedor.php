<div class="container">
    <section class="principal_proveedor">
        <div class="form">
            <h1>Principal Proveedor Economico</h1>
            <form action="index.php?controller=beneficiario&action=store" method="POST">
                <input type="hidden" name="type_form" value="datos_proveedor_economico">
                <div class="form-row">
                    <div class="col">
                        <label for="">Nombre</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Nombre Completo">
                    </div>
                    <div class="col">
                        <label for="">Ocupacion</label>
                        <input class="form-control" type="text" name="ocupacion" placeholder="Ocupacion">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Lugar Donde Labora</label>
                        <input class="form-control" type="text" name="lugar_labora" placeholder="Lugar donde labora">
                    </div>
                    <div class="col">
                        <label for="">Ingresos SMLV</label>
                        <input class="form-control" type="text" name="ingresos" placeholder="Ingresos">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Egresos SMLV</label>
                        <input class="form-control" type="text" name="egresos" placeholder="Egresos">
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-success" value="Guardar">
            </form>
        </div>
    </section>
</div>