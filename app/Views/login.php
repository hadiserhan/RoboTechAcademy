<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#35A768">
    <title>Login</title>

    <script src="<?= base_url('assets/ext/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/ext/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('assets/ext/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/ext/datejs/date.js') ?>"></script>
    <link href="../public/assets/css/devextreme/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/ext/jquery-ui/jquery-ui.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/general.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/login.css?') .time();?>">

    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">


    <script>
        var GlobalVariables = {
            'csrfToken': <?= json_encode(csrf_hash()) ?>,
            'AJAX_SUCCESS': 'SUCCESS',
            'AJAX_FAILURE': 'FAILURE',
            'AJAX_NOT_ASSOCIATED':'NOT_ASSOCIATED'
        };

       
    </script>
</head>
<body>
    <header>
        <nav>
            <a href="#" role="button">
                <img style="width:179px" src="<?= base_url('assets/img/new/logo.png') ?>" />
            </a>
        </nav>
    </header>
    <main>
        <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

          <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" class="form-control" />
              <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
    </main>
    <footer>
        <p class="text-center">&copy; Copyright 2020 Integrated Telehealth Solutions. All Rights Reserved.</p>
    </footer>
    
    <script src="<?= base_url('assets/js/general_functions.js') ?>"></script>
</body>
</html>
