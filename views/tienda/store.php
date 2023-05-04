<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';
require_once 'models/tallas.php';
require_once 'models/colores.php';
?>

<?php $categorias = Utils::showCategorias(); ?>
<nav id="menu2">
	<ul>
		<?php while ($cat = $categorias->fetch_object()) : ?>
			<li>
				<a href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
			</li>
		<?php endwhile; ?>
	</ul>
</nav>

<?php
$product = new Producto();
$productos = $product->getAll();
?>
<div class="gallery">
  <?php while ($product = $productos->fetch_object()) : ?>
    <div class="gallery-item">
      <figure class="gallery-figure">
        <div class="gallery-image">
          <a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
            <?php if ($product->imagen != null) : ?>
              <img class="gallery-img" src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" alt="<?= $product->nombre ?>" />
            <?php else : ?>
              <img class="gallery-img" src="<?= base_url ?>assets/img/collar-trochus.jpg" alt="<?= $product->nombre ?>" />
            <?php endif; ?>
          </a>
          <div class="gallery-icons">
            <a class="gallery-icon-link" href="#"> <i class="fas fa-share"></i></a>
            <a class="gallery-icon-link" href="<?= base_url ?>producto/ver&id=<?= $product->id ?>"> <i class="fas fa-search"></i></a>
          </div>
          <a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="gallery-cart">Añade al Carrito</a>
        </div>
        <figcaption>
          <p class="gallery-description"><?= $product->descripcion_corta ?></p>
          <p class="gallery-price"><?= $product->precio ?>€</p>
        </figcaption>
      </figure>
    </div>
  <?php endwhile; ?>
</div>



<!-- <?php
require_once 'models/categoria.php';
require_once 'models/producto.php';
require_once 'models/tallas.php';
require_once 'models/colores.php';
?>

<?php $categorias = Utils::showCategorias(); ?>
<nav id="menu2">
	<ul>
		<?php while ($cat = $categorias->fetch_object()) : ?>
			<li>
				<a href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
			</li>
		<?php endwhile; ?>
	</ul>
</nav>

<?php
$product = new Producto();
$productos = $product->getAll();
?>
<div class="gallery">
	<?php while ($product = $productos->fetch_object()) : ?>

		<div id="image-container">
			<figure class="art-fotos">
				<div class="image">
					<a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
						<?php if ($product->imagen != null) : ?>
							<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
						<?php else : ?>
							<img src="<?= base_url ?>assets/img/collar-trochus.jpg" />
						<?php endif; ?>
					</a>
					<div class="icons">
						<a href="#"> <i class="fa-solid fa-share-nodes"></i></a>
						<a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>"> <i class="fa-solid fa-magnifying-glass"></i></a>
					</div>
					<a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="add-to-cart">Añade al Carrito</a>
				</div>
				<figcaption>
					<p class="descriptioncorta"><?= $product->descripcion_corta ?></p>
					<p class="price"><?= $product->precio ?>€</p>
				</figcaption>
				
			</figure>
		</div>

	<?php endwhile; ?>
</div> -->