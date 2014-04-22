<?php

/*

  type: layout
  content_type: static
  name: Blog Masonry
  position: 5
  description: Blog Masonry
  tag:home

*/

?>
<?php include TEMPLATE_DIR. "header.php"; ?>

<div class="container">
    <div class="box-container">
        <div class="row">
            <div class="col-md-9">
                <div class="content-header">
                     <?php if(!is_category()) :  ?>
                        <h2 class="edit page-title" field="title" rel="page">Title</h2>
                     <?php  else: ?>
                       <h2 class="edit page-title" field="category-title" rel="page">Title</h2>
                       <h2><?php print $category['title']?></h2>
                       <h2><?php print $category['description']?></h2>
                     <?php endif; ?>
                </div>
                <div class="masonry-gallery">
                  <module
                      content-id="<?php print PAGE_ID; ?>"
                      type="posts"
                      template="masonry" />
                </div>
            </div>
            <div class="col-md-3" id="blog-sidebar">
    		    <?php include "blog_sidebar.php"; ?>
    		</div>
        </div>
    </div>
</div>


<?php include TEMPLATE_DIR. "footer.php"; ?>