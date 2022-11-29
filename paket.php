<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<?php $cb->get_css('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>
<?php $cb->get_css('js/plugins/select2/css/select2.min.css'); ?>
<?php require 'koneksi.php';?>

<!-- Horizontal Form -->

<div class="content">
    <!-- Bootstrap Design -->
    <h2 class="content-heading">Pemilihan Paket</h2>
    <div class="row">
<div class="col-md-12">
<div class="block">
                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#btabs-animated-fade-resepsi">Paket Resepsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#btabs-animated-fade-siraman">Paket Siraman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#btabs-animated-fade-akad">Paket Akad</a>
                    </li>
                    
                    
                </ul>

                <div class="block-content tab-content overflow-hidden">
                    <div class="tab-pane fade show active" id="btabs-animated-fade-resepsi" role="tabpanel">
                        <h4 class="font-w400">Nama-Nama Vendor </h4>
                        <div class="row">
                        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full bg-gd-flat block-sticky-options pt-30">
                    
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-flat-dark">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">MUA</div>
                </div>
                <div class="block-content bg-body-light">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-wallet"></i></div>
                            <div class="font-size-sm text-muted">1.000.000 Rupiah</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-star"></i></div>
                            <div class="font-size-sm text-muted">100 Ulasan</div>
                        </div>
                        <div class="col-12">
                        <div class="js-rating" data-score="3"></div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-gray-lighter">
                    
                    <div class="font-size-sm text-muted">Produk</div>
                    <div class="font-size-sm text-muted">Make-up wajah</div>
                    <div class="font-size-sm text-muted">Tata Rambut</div>

                    
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full bg-gd-flat block-sticky-options pt-30">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-flat-dark">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">Cathering Makanan</div>
                </div>
                <div class="block-content bg-body-light">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-wallet"></i></div>
                            <div class="font-size-sm text-muted">3.000.000 Rupiah</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-star"></i></div>
                            <div class="font-size-sm text-muted">140 Ulasan</div>
                        </div>
                        <div class="col-12">
                        <div class="js-rating" data-score="3"></div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-gray-lighter">
                    <div class="font-size-sm text-muted">Produk</div>
                    <div class="font-size-sm text-muted">50 Porsi</div>
                    <div class="font-size-sm text-muted">Rawon</div>
                    <div class="font-size-sm text-muted">Soto</div>
                    <div class="font-size-sm text-muteda">Sate</div>
                    <div class="font-size-sm text-muteda">Gulai</div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full bg-gd-flat block-sticky-options pt-30">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-flat-dark">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">Cathering Makanan</div>
                </div>
                <div class="block-content bg-body-light">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-wallet"></i></div>
                            <div class="font-size-sm text-muted">3.000.000 Rupiah</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-star"></i></div>
                            <div class="font-size-sm text-muted">140 Ulasan</div>
                        </div>
                        <div class="col-12">
                        <div class="js-rating" data-score="3"></div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-gray-lighter">
                    <div class="font-size-sm text-muted">Produk</div>
                    <div class="font-size-sm text-muted">50 Porsi</div>
                    <div class="font-size-sm text-muted">Rawon</div>
                    <div class="font-size-sm text-muted">Soto</div>
                    <div class="font-size-sm text-muteda">Sate</div>
                    <div class="font-size-sm text-muteda">Gulai</div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full bg-gd-flat block-sticky-options pt-30">
                    
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-flat-dark">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">Cathering Makanan</div>
                </div>
                <div class="block-content bg-body-light">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-wallet"></i></div>
                            <div class="font-size-sm text-muted">3.000.000 Rupiah</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-star"></i></div>
                            <div class="font-size-sm text-muted">140 Ulasan</div>
                        </div>
                        <div class="col-12">
                        <div class="js-rating" data-score="3"></div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-gray-lighter">
                    <div class="font-size-sm text-muted">Produk</div>
                    <div class="font-size-sm text-muted">50 Porsi</div>
                    <div class="font-size-sm text-muted">Rawon</div>
                    <div class="font-size-sm text-muted">Soto</div>
                    <div class="font-size-sm text-muteda">Sate</div>
                    <div class="font-size-sm text-muteda">Gulai</div>
                </div>
            </div>
        </div>
  
        <div class="block-content">
                    <form action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                    
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-tanggal">Tanggal Pesan</label>
                            <div class="col-lg-7">
                            <input required type="text" class="js-datepicker form-control" id="example-datepicker2" name="tanggal" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-tanggal">Tanggal Pernikahan</label>
                            <div class="col-lg-7">
                            <input required type="text" class="js-datepicker form-control" id="example-datepicker2" name="tanggal" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-tanggal">Total Harga</label>
                        <div class="col-lg-7">
                                <input readonly value="10.000.000" class="form-control" id="example-textarea-deskripsi" name="Total Harga" placeholder="">
                            </div>
                            </div>
                        <div align="right">
                        <div class="form-group row">
                            <div class="col-lg-12 ml-auto">
                                <button type="submit" class="btn btn-alt-primary">Pesan</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
    </div>
    </div>
    
    

                    <div class="tab-pane fade" id="btabs-animated-fade-siraman" role="tabpanel">
                        <h4 class="font-w400">Pilihan Paket Siraman</h4>
                        <p>Content fades in..</p>
                    </div>
                    
                    <div class="tab-pane fade" id="btabs-animated-fade-akad" role="tabpanel">
                        <h4 class="font-w400">Pilihan Paket Akad</h4>
                        <p>Content fades in..</p>
                    </div>
                    
                </div>
            </div>

            <?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-raty/jquery.raty.js'); ?>
<?php $cb->get_js('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>
<?php $cb->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_rating.min.js'); ?>

<!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->
<script>jQuery(function(){ Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>