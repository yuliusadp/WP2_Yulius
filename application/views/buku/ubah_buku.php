<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <table class="table table-hover">
			    <!-- /.box-header -->
                <tbody>
			    <form action="<?= base_url('buku'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku">
                    </div>
                        <div class="form-group">
                            <select name="id_kategori" class="form-control form-control-user">
                                <option value="">Pilih Kategori</option>
                                <?php
                                foreach ($kategori as $k) { ?>
                                    <option value="<?= $k['id_kategori'];?>"><?= $k['nama_kategori'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit">
                        </div>
                        <div class="form-group">
                            <select name="tahun" class="form-control form-control-user">
                                <option value="">Pilih Tahun</option>
                                <?php
                                for ($i=date('Y'); $i > 1000 ; $i--) { ?>
                                    <option value="<?= $i;?>"><?= $i;?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-user" id="image" name="image">
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