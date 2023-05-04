<div class="container-busq">
    <?php if (!empty($productos)) : ?>
        <ul class="productos-list">
            <?php foreach ($productos as $producto) : ?>
                <li>
                    <a href="producto/ver&id=<?= $producto['id'] ?>">
                        <h2><?= $producto['nombre'] ?></h2>
                        <img src="<?= base_url ?>uploads/images/<?= $producto['imagen'] ?>" />
                        <p><?= $producto['descripcion'] ?></p>
                        <p>Precio: $<?= $producto['precio'] ?></p>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    <?php else : ?>
        <p>No se encontraron productos.</p>
    <?php endif ?>
</div>