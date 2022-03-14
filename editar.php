<?= $encabezado ?>


<div class="card">
    <div class="card-body">
        <h5 class="card-title">Modificar Datos</h5>
        <p class="card-text">

        <form method="post" action="<?= base_url('/actualizar') ?>" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $animal['id'] ?>">



            <div class="form-group">
                <label for="nombre">Pseudonimo del animal</label>
                <input id="nombre" class="form-control" type="text" value="<?= $animal['nombre'] ?>" name="nombre">
            </div>

            <div class="form-group">
                <label for="especie">Especie</label>
                <input id="especie" class="form-control" type="text" value="<?= $animal['especie'] ?>" name="especie">
            </div>


            <div class="form-group">
                <label for="pais">Pais de origen</label>
                <input id="pais" class="form-control" type="text" value="<?= $animal['pais'] ?>" name="pais">
            </div>

            <button class="btn btn-primary" type="submit">Actualizar</button>
        </form>
        </p>
    </div>
</div>

<?= $pie ?>