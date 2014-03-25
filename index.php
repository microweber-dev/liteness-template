<?php

/*

  type: layout
  content_type: static
  name: Home Combined
  position: 2
  description: Home layout

*/

?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>





<div class="edit" field="home-content" rel="content">

<div class="container">

<div class="content-gallery-slider home-slider">
  <module
          type="pictures"
          content-id="<?php print PAGE_ID; ?>"
          template="bootstrap_carousel"
          images="<?php print template_url(); ?>default_content/home-slider-c.jpg,<?php print template_url(); ?>default_content/home-slider-x.jpg"  />
</div>

<div class="box-container latest-items">
    <h2 class="element section-title">
        <small>What's new</small>
        <span>From the store</span>
    </h2>
    <module type="shop/products" limit="3" hide-paging="true" data-show="thumbnail,title,add_to_cart,price,read_more" template="3columns">
</div>

<div class="box-container latest-items">
    <h2 class="element section-title">
        <small>What's new</small>
        <span>From the Blog</span>
    </h2>
    <module type="posts" template="columns" limit="3" hide-paging="true" data-show="thumbnail,title,read_more,description">
</div>



</div>

</div>

<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>