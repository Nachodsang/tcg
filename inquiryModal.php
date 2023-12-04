<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tokyo Consulting Group</title>
  <link href="images/logo/TCGicon.ico" rel="icon">
  <link rel="canonical" href="https://www.at-once.info">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>






<section id="contact" class="position-fixed top-0 bottom-0 contact-modal hidden " style="background-color: rgba(32,33,36,0.6); height:100vh; width:100vw; z-index: 1;" >
  <div class="position-fixed top-50 ">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="contact-box">
          <div class="row no-gutters">
            <div class="col-lg-7 col-md-7 d-flex align-items-stretch">
              <div class=" w-100 mb-5 p-md-5 p-4">
                <h3 class="mb-4">Interested in this opportunity?</h3>
                <div id="form-message-warning" class="mb-4"></div> 
                <div id="form-message-success" class="mb-4">
                  Get more information about this business
                </div>
                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="label" for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-md-6"> 
                      <div class="form-group">
                        <label class="label" for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="#">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                        <div class="submitting"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 d-flex align-items-stretch order-md-last">
              <div class="info-wrap c-bg-primary w-100 p-md-5 p-4 position-relative">
                <a href="#" id="closeModal" class="position-absolute top-0 end-0  text-white"><i class="fas fa-window-close fa-2x "></i></a>
                <h3>Let's get in touch </h3> 
                <p class="mb-4">Tokyo Consulting Firm Co., Ltd.</p>
                <div class="dbox w-100 d-flex align-items-start">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="material-symbols-outlined">
                      location_on
                    </span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Address:</span>Room 184, 18th Floor, Thai CC Tower, 43 South Sathorn Rd., Yannawa, Sathorn, Bangkok 10120 Thailand</p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="material-symbols-outlined">
                    phone_in_talk
                  </span>
                </div>
                <div class="text pl-3">
                  <p><span>Phone:</span> <a href="tel://">+66 2-210-0038-39</a></p>
                </div>
              </div>

              <div class="dbox w-100 d-flex align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                      <span class="material-symbols-outlined">
                    mail
                  </span>
                </div>
                <div class="text pl-3">
                  <p><span>Email:</span> <a href="mailto:tcf_thailand@tokyoconsultinggroup.com">tcf_thailand@tokyoconsultinggroup.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>







<!--  -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/alime.bundle.js"></script>
<script src="js/wow.min.js"></script>
<!-- Active -->
<script src="js/active.js"></script>
<!-- Breadcrumbs -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script> 

<script>
    var url = window.location.href;
    const modal = document.getElementById('contact')
    const closeModal = document.getElementById('closeModal')

    closeModal.onclick = function () {

        modal.classList.add('hidden')
    }

    setTimeout(() => {
         modal.classList.remove('hidden')
    }, 7000);
       
   
     
</script>





</body>
</html>

