<?php

use Cake\Core\Configure;

//$file = Configure::read('Theme.folder') . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
$file = $theme['folder'] . DS . 'vendor' . DS . 'maiconpinto' . DS . 'cake-adminlte-theme' . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
    ?>

    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?php echo $this->Url->build('/users/logout'); ?>"><i class="fa fa-sign-out text-red"></i> <span>Logout</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="<?php echo $this->Url->build('/laundry-requests/index'); ?>"><i class="fa fa-vcard text-blue"></i> <span>Request</span></a></li>
            <li><a href="<?php echo $this->Url->build('/users/index'); ?>"><i class="fa fa-users text-red"></i>Administrators</a></li>
            <li><a href="<?php echo $this->Url->build('/customers/index'); ?>"><i class="fa fa-users text-yellow"></i> <span>Customers</span></a></li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/categories/index'); ?>"><i class="fa fa-bug"></i>Categories</a></li>
                    <li><a href="<?php echo $this->Url->build('/items/index'); ?>"><i class="fa fa-bug"></i>Items</a></li>
                    <li><a href="<?php echo $this->Url->build('/payment-options'); ?>"><i class="fa fa-bug"></i> <span>Payment Options</span></a></li>
                    <li><a href="<?php echo $this->Url->build('/prices/index'); ?>"><i class="fa fa-bug"></i>Prices</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money text-green"></i> <span>Payments</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="<?php echo $this->Url->build('/payments/index'); ?>"><i class="fa fa-bug"></i> Payments </a></li>
                
                </ul>
            </li>
       <?php } ?>
