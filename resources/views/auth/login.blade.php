<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{asset("assets/img/favicon.png")}} rel="icon">
  <link href={{asset("assets/img/apple-touch-icon.png")}} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  
  <link href={{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/quill/quill.snow.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/quill/quill.bubble.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/remixicon/remixicon.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/simple-datatables/style.css")}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{asset("assets/css/style.css")}} rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->


  <!-- ======= Sidebar ======= -->

  <style>
    .forms{
        background-color: "red" !important;
        padding: 30px;
    }
  </style>


  <main id="main" class="main " >

    <div class="pagetitle">
    
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row forms">
       
        <div class="col-lg-6 x">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form class="row g-2">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>



        </div>
      </div>
    </section>

  </main><!-- End #main -->


  

  <!-- Vendor JS Files -->
  <script src={{asset("assets/vendor/apexcharts/apexcharts.min.js")}}></script>
  <script src={{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
  <script src={{asset("assets/vendor/chart.js/chart.umd.js")}}></script>
  <script src={{asset("assets/vendor/echarts/echarts.min.js")}}></script>
  <script src={{asset("assets/vendor/quill/quill.js")}}></script>
  <script src={{asset("assets/vendor/simple-datatables/simple-datatables.js")}}></script>
  <script src={{asset("assets/vendor/tinymce/tinymce.min.js")}}></script>
  <script src={{asset("assets/vendor/php-email-form/validate.js")}}></script>

  <!-- Template Main JS File -->
  <script src={{asset("assets/js/main.js")}}></script>

</body>

</html>