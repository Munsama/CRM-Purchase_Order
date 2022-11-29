<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/backend/views/inc_header.php';
$cb->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    
    
    array(
        'name'  => '<span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Purchase Order</span>',
        'icon'  => 'si si-bag',
        'sub'   => array(
            array(
                'name'  => 'Pemilihan Paket',
                'url'   => 'paket.php'
            ),
            array(
                'name'  => 'Ulasan',
                'url'   => 'ulasan.php'
            ),
            array(
                'name'  => 'Daftar Pesanan',
                'url'   => 'pesanan.php'
            ),
            
        )
    ),
    
        
    
);
