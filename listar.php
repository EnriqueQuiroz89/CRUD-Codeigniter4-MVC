<!--Como traigo datos-->
<?= $encabezado ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Listado de animales</h5>
        <p class="card-text">
            <a href="<?= base_url("/crear") ?>" class="btn btn-primary" type="button">Registrar nuevo animal</a>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Pais</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>

                <!--Esoto va en un for echa  foreach($animales of $animal):-->
                <!--endforeach-->
                <?php foreach ($animales as $animal) : ?>
                    <tr>
                        <td><?= $animal['id'] ?></td>
                        <td><?= $animal['nombre'] ?></td>
                        <td><?= $animal['especie'] ?></td>
                        <td><?= $animal['pais'] ?></td>
                        <td> <a href="<?= base_url('editar/' . $animal['id']) ?>" class="btn btn-info" type="button">Editar</a>
                            <a href="<?= base_url('eliminar/' . $animal['id']) ?>" class="btn btn-danger" type="button">Borrar</a>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
        </p>
    </div>
</div>

<?= $pie ?>