<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Input</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css">
</head>
<!-- <style>
img {
  width: 250%;
  height: 710px;
}

h5 {
  color: red;
}


.card {
  background-color: #C0C0C0;
}

.form-control-user {
  width: 100%;
}

.form-control {
  height: 50px;
}
</style> -->


<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-3">
                <img src="assets/img/sepatu.jpg" alt="......" , style:width="50%">
              </div>
              <div class="kolom col-lg-6 mx-5">>
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h3 text-gray-900 mb-4"><strong>Welcome to Sneacker Shop</strong></h1>
                  </div>
                  <form class="user" method="post" action="#">
                    <div class="form-group">
                      <h5><strong>Nama Pembeli</strong></h5>
                      <input type="text" name="nama" class=" form-control-user form-control" id="nama"
                        placeholder="-- Nama Lengkap...">
                      <?= form_error('nama', '<br><span style="color:red;">','</span>');?>
                    </div>
                    <div class="form-group">
                      <h5><strong>NO. Handphone</strong></h5>
                      <input type="text" name="No" class="form-control-user form-control" id="No"
                        placeholder="-- No. Handphone....">
                      <?= form_error('No', '<br><span style="color:red;">','</span>');?>
                    </div>
                    <div class="form-group ">
                      <h5><strong>Merk</strong></h5>
                      <select name="merk" class=" form-control-user " id="merk">
                        <option>-- Input Sepatu --</option>
                        <?php foreach ($merk as $m) : ?>
                        <option value="<?=$m; ?>"><?=$m; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <h5><strong>Ukuran</strong></h5>
                      <select name="ukuran" class=" form-control-user" id="ukuran">
                        <option>-- Input Ukuran --</option>
                        <?php for ($i = 32; $i <= 44; $i++) : ?>
                        <option value="<?=$i; ?>"><?=$i; ?></option>
                        <?php endfor; ?>
                      </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      <h6>Submit</h6>
                    </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>





</body>

</html>