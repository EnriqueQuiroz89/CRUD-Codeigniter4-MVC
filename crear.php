<?= $encabezado ?>


<div class="card">
    <div class="card-body">
        <h5 class="card-title">Registro de nuevo animal</h5>
        <p class="card-text">

        <form method="post" action="<?= base_url('/guardar') ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Pseudonimo del animal</label>
                <input id="nombre" class="form-control" type="text" value="Simba" name="nombre">
            </div>

            <div class="form-group">
                <label for="especie">Especie</label>
                <input id="especie" class="form-control" type="text" value="Leon Africano" name="especie">
            </div>


            <div class="form-group">
                <label for="pais">Pais de origen</label>
                <input id="pais" class="form-control" type="text" value="mexico" name="pais">
            </div>

            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
        </p>
    </div>
</div>

<?= $pie ?>