<?php

/*

type: layout
content_type: dynamic
name: Online Shop
is_shop: y
description: shop layout
position: 4
*/


?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>

<section id="content">
	<div class="container">
		<div class="row" id="shop-products-conteiner">
			<div class="col-md-12 edit" field="content" rel="page">
                <div class="box-container">
    				<h2><?php print $page['title'] ?></h2>
    				<p class="element">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative & Make Web.</p>
                </div>
            </div>
		</div>
		<div class="row" id="shop-products-conteiner">
			<div class="col-md-9">
    			<div class="edit" field="shop-content" rel="page">
    				<div class="box-container latest-items">
                        <module type="shop/products" template="2columns" limit="18" description-length="70" />
                    </div>
    			</div>
			</div>
			<div class="col-md-3">
				<?php
              		include TEMPLATE_DIR. 'layouts' . DS."shop_sidebar.php"
		        ?>
			</div>
		</div>
	</div>
</section>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
