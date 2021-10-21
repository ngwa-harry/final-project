<?php require_once 'templates/header.php'; ?>

<main class="mx-3">
  <div class="container-fluid">
    <h1 class="mt-4">Add Product</h1>
  </div>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Add Product</li>
  </ol>

  <div class="col-md-12">
    <form action="" method="post" class="row">
      <div class="col-md-8">
        <!-- Product Image -->
        <div class="form-group">
          <label for="product_image">Product Image</label>
          <input type="file" name="product_image" class="form-control">
        </div>

        <div class="form-group">
          <label for="product_title">Product Title</label>
          <input type="text" name="product_title" class="form-control">
        </div>

        <div class="form-group">
          <label for="product_description">Product Description</label>
          <textarea name="product_description"cols="30" rows="10" class="form-control"></textarea>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Categories -->
        <div class="form-group">
          <label for="product_category">Product Category</label>
          <select name="product_category" class="form-control">
            <option value="">Select Category</option>
            <?php 
            // show_categories_add_product(); 
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="product_price">Product Price</label>
          <input type="number" name="produst_price" class="form-control">
        </div>
        <div>
          <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
        </div>
      </div>
    </form>
  </div>
</main>

<?php require_once 'templates/footer.php'; ?>
