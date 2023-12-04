<header class=" sticky-top">
  <nav class="navbar navbar-expand-md navbar-bg ">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo/logoTCF-colored.png" class="logo"></a> 
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
            <a class="nav-link" href="consultant.php">CONSULTANT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="m&a.php">M&A</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
          <div id="google_translate_element"></div>
      </div>
    
     
    </div>
  </nav>
</header>


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'auto',includedLanguages:
            "en,th,ja",layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit&hl=en"></script>
<script>
    var url = window.location.href;

    var els = document.querySelectorAll(".navbar-nav a");
    for (var i = 0, l = els.length; i < l; i++) {
        var el = els[i];
        console.log(url)
console.log(el.href)
        if (el.href === url || url.includes(el.href.slice(0,-4))) {
       console.log(el, el.href)
         el.classList.add("active");
     }
 }
</script>





