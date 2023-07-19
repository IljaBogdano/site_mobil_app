<?php
session_start();
 ?>
<header class="p-4 text-bg-dark">
<div class="container">
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
  <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
</a>
    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      <li><a href="main.php" class="nav-link px-2 text-secondary">Home</a></li>
      <li><a href="app.php" class="nav-link px-2 text-white">Applications</a></li>
      <li><a href="faqs.php" class="nav-link px-2 text-white">FAQs</a></li>
      <?php
      if ($_SESSION['user']=='Bogdanov'):
       ?>
       <li><a href="AddAPP.php" class="nav-link px-2 text-white">Add new applications</a></li>
       <?php endif; ?>
    </ul>
    <div class="text-end">
      <form class="mb-1" action="log.php">
        <?php
        if ($_SESSION['user']):
         ?>
         <h2> <?= $_SESSION['user']; ?> </h2>
         <a href="functions/logout.php">Exit</a>

       <?php elseif ($_SESSION['user']==0): ?>
          <button type="submit" class="btn btn-warning">Login-In</button>

        <?php endif; ?>
    </form>
    </div>
  </div>
</div>
</header>
