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


<?php include('views/banners/ban_categoria.php');
 ?>


<?php if (isset($categoria)) : ?>
	<h1 class="categoria-tittle"><?= $categoria->nombre ?></h1>
	<?php if ($productos->num_rows == 0) : ?>
		<p>No hay productos para mostrar</p>
	<?php else : ?>

		<?php while ($product = $productos->fetch_object()) : ?>
			<div class="product">
				<a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
					<?php if ($product->imagen != null) : ?>
						<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
					<?php else : ?>
						<img src="<?= base_url ?>assets/img/camiseta.png" />
					<?php endif; ?>
					<h2><?= $product->nombre ?></h2>
				</a>
				<p><?= $product->precio ?></p>
				<!-- <a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Comprar</a> -->
			</div>
		<?php endwhile; ?>

	<?php endif; ?>
<?php else : ?>
	<h1>La categoría no existe</h1>
<?php endif; ?>

