<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="container-fluid">

    <div class="row">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
        <div class="col-lg">
            <table class="table table-hover">
			    <!-- /.box-header -->
                <tbody>
			    <form action="<?= base_url('buku/kategori'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_kategori" name="nama_kategori" placeholder="Masukkan Nama Kategori">
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Ubah</button>
                    </div>
            </form>
	    </div>
    </div>
</section>
</div>