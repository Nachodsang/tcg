<header class=" sticky-top">
  <nav class="navbar navbar-expand-md navbar-bg ">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo/logoTCG.png" class="logo"></a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">CONSULTANT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-ma.php">M&A</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<script>
    var url = window.location.href;

    var els = document.querySelectorAll(".navbar-nav a");
    for (var i = 0, l = els.length; i < l; i++) {
        var el = els[i];
        if (el.href === url) {
         el.classList.add("active");
     }
 }
</script>





