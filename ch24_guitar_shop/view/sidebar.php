<header class="p-3 bg-dark text-white">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $app_path; ?>">Digital Marketplace</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
        aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $app_path; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $app_path; ?>admin">Start Selling</a>
          </li>
        </ul>
        <div class="d-flex">
          <a href="<?php echo $app_path . 'cart'; ?>">
            <button type="button" class="btn btn-secondary me-2">
              <i class="fas fa-shopping-cart"></i> <span
                class="align-text-bottom"> Cart</span>
                <!-- class="badge bg-light text-dark rounded-pill align-text-bottom">Cart</span> -->
            </button>
          </a>
          <?php
          // Check if user is logged in and
          // display appropriate account links
          $account_url = $app_path . 'account';
          $logout_url = $account_url . '?action=logout';
          if (isset($_SESSION['user'])) :
          ?>
            <a href="<?php echo $account_url; ?>"><button type="button" class="btn btn-outline-light me-2">My Account</button></a>
            <a href="<?php echo $logout_url; ?>"><button type="button" class="btn btn-warning me-2">Logout</button></a>
          <?php else: ?>
            <a href="<?php echo $account_url; ?>"><button type="button" class="btn btn-warning me-2">Login</button></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
</header>

<div class="nav-scroller bg-transparent shadow-sm">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    <?php
        require_once('model/database.php');
        require_once('model/category_db.php');

        $categories = get_categories();
        foreach($categories as $category) :
            $name = $category['categoryName'];
            $id = $category['categoryID'];
            $url = $app_path . 'catalog?category_id=' . $id;
    ?>
    <a class="nav-link" href="<?php echo $url; ?>">
      <?php echo htmlspecialchars($name); ?>
      <span class="badge bg-light text-dark rounded-pill align-text-bottom">**</span>
    </a>
    <?php endforeach; ?>
  </nav>
</div>
