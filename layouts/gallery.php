<?php

/*

  type: layout
  content_type: static
  name: Gallery
  position: 3
  description: Gallery
  tag:home

*/

?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>





<div class="edit" field="content" rel="content">

<div class="container">

    <h2 class="page-title">Hot Concept Art</h2>

  <div class="masonry-gallery">
    <module
            content-id="<?php print PAGE_ID; ?>"
            type="pictures"
            template="pictures_grid"
              />
  </div>

</div>

</div>

<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>