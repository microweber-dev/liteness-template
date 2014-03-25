<?php

/*

  type: layout
  content_type: static
  name: Blog
  position: 4
  description: Blog
  tag:home

*/

?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>




<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="edit content-header" field="content" rel="content">
                <h2 class="page-title">Hot Concept Art</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia dignissim diam ut molestie. Nunc ut tincidunt lorem, eget feugiat odio.</p>
            </div>
            <div class="masonry-gallery">
              <module
                  content-id="<?php print PAGE_ID; ?>"
                  type="posts"
                  template="masonry" />
            </div>
        </div>
        <div class="col-lg-3" id="blog-sidebar">
		    <?php include "blog_sidebar.php"; ?>
		</div>
    </div>
</div>


<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>