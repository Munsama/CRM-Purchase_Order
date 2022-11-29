<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<?php $cb->get_css('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>
<?php $cb->get_css('js/plugins/select2/css/select2.min.css'); ?>
<?php $cb->get_css('js/plugins/datatables/dataTables.bootstrap4.css'); ?>


<!-- Dynamic Table Full -->
<div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>Full</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th class="text-center" style="width: 15%;">Profile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 21; $i++) { ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="font-w600"><?php $cb->get_name(); ?></td>
                        <td class="d-none d-sm-table-cell">customer<?php echo $i; ?>@example.com</td>
                        <td class="d-none d-sm-table-cell">
                            <?php $cb->get_tag(); ?>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                <i class="fa fa-user"></i>
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->
            <!-- END Horizontal Form -->

            <?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-raty/jquery.raty.js'); ?>
<?php $cb->get_js('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>
<?php $cb->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables/jquery.dataTables.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables/dataTables.bootstrap4.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_rating.min.js'); ?>
<?php $cb->get_js('js/pages/be_tables_datatables.min.js'); ?>

<!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->
<script>jQuery(function(){ Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>