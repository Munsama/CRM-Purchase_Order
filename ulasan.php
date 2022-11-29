<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<?php $cb->get_css('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>
<?php $cb->get_css('js/plugins/select2/css/select2.min.css'); ?>


<!-- Horizontal Form -->

<div class="content">
    <!-- Bootstrap Design -->
    <h2 class="content-heading">Ulasan</h2>
    <div class="row">
<div class="col-md-12">
<div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Silahkan Berikan Ulasan</h3>
                
                </div>
                <div class="block-content">
                    
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-kv">Kategori Vendor</label>
                            <div class="col-lg-7">
                            <select required class="form-control" id="example-select-kv" name="kategori_vendor">
                                    <option value="">Silahkan Pilih</option>
                                    <option value="Cathering">Cathering</option>
                                    <option value="Panggung dan Lightning">Panggung dan Lightning</option>
                                    <option value="Fotografi">Fotografi</option>
                                    <option value="MUA">MUA</option>
                                </select>
                            </div>
                        </div>
                        
                        <form action="crud.php?aksi=ulasan" method="post" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="example-hf-judul" name="id_user" value="1">
                            
                        <div class="form-group row">
                        <label class="col-lg-3 col-form-label" for="example-hf-kv">Nama Vendor</label>
                            <div class="col-lg-7">
                            <select required class="form-control" id="example-select-kv" name="id_vendor">
                                    <option value="">Silahkan Pilih</option>
                                    <option value="1">Makan Makan Enak</option>
                                    <option value="2">Joget Terang</option>
                                    <option value="3">Klik Jepret</option>
                                    <option value="4">Seketika Indah</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-rate" name="rate">Rating</label>
                            <div class="col-lg-5">
                            <div required class="js-rating"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-judul">Judul</label>
                            <div class="col-lg-7">
                                <input required type="text" class="form-control" id="example-hf-judul" name="judul" placeholder=" Masukkan Judul Ulasan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-tanggal">Tanggal Pernikahan</label>
                            <div class="col-lg-7">
                            <input required type="text" class="js-datepicker form-control"  name="tgl_nikah" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-tanggal">Deskripsi Ulasan</label>
                        <div class="col-lg-7">
                                <textarea required class="form-control" id="example-textarea-deskripsi" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Ulasan"></textarea>
                            </div>
                            </div>
                        <div align="right">
                        <div class="form-group row">
                            <div class="col-lg-12 ml-auto">
                                <button type="submit" class="btn btn-alt-primary">Kirim Ulasan</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            </div>
            </div>
            <!-- END Horizontal Form -->

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