<?php
include('views/banners/ban_producto.php');
require_once 'models/tallas.php';
require_once 'models/colores.php';
?>
<?php if (isset($product)) : ?>


    <div class='container2'>
        <div class='background-element' id='background-element'></div>
        <section class='window'>
            <div class='main-content'>
                <h2>The Milk Barcelona</h2>
                <h1><?= $product->nombre ?></h1>
                <div id="detail-product">
                    <div class="image">
                        <?php if ($product->imagen != null) : ?>
                            <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
                        <?php else : ?>
                            <img src="<?= base_url ?>assets/img/camiseta.png" />
                        <?php endif; ?>
                    </div>
                    <div class="data description" id='description'>
                        <p class="description"><?= $product->descripcion ?></p>
                        <div class='highlight-window  mobile' id='product-img'>
                            <div class='highlight-overlay' id='highlight-overlay-mobile'></div>
                        </div>
                        <section class='options'>
                            <div class='color-options'>
                                <h4>Color:</h4>
                                <div class='color-picker'>
                                    <div class='color overlay' id='color-overlay'>
                                        <div class='check'></div>
                                    </div>
                                    <div class='color color-a' id='color-a'></div>
                                    <div class='color color-b' id='color-b'></div>
                                </div>
                                <span class='small' style='color:#457'>COLOR: <span id='color-name'>BLUES / 2V5</span></span>
                            </div>
                            <section class='size-picker'>
                                <h5>Size:</h5>
                                <div class='range-picker' id='range-picker'>
                                    <div>36</div>
                                    <div class='active'>38</div>
                                    <div>40</div>
                                    <div>42</div>
                                    <div>22</div>
                                </div>
                            </section>


                        </section>

                        <label for="color">Color</label>
                        <?php $color_sel = Utils::showColor(); ?>
                        <select name="color">
                            <?php while ($cat = $color_sel->fetch_object()) : ?>
                                <option value="<?= $cat->id ?>" <?= (isset($pro) && is_object($pro) && isset($pro->color) && $pro->color == $cat->id) ? 'selected' : '' ?>>
                                    <?= $cat->nombre ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                        <label for="talla">Talla</label>
                        <?php $tallas_sel = Utils::showTallas(); ?>
                        <select name="talla">
                            <?php while ($cat = $tallas_sel->fetch_object()) : ?>
                                <option value="<?= $cat->id ?>" <?= (isset($pro) && is_object($pro) && isset($pro->talla) && $pro->talla == $cat->id) ? 'selected' : '' ?>>
                                    <?= $cat->nombre ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                        <div>
                            <a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Añadir al Carrito</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
<?php endif; ?>