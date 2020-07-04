<!-- File: src/Template/Users/welcome.ctp -->
<section class="text-center" style="margin: 2%; padding: 5%;">
    <div class="row ">
        <?php if(!$user): ?>
        <div class="col-md-12 col-sm-12">
        <a href="<?php echo $this->Url->build(['action' => 'login']); ?>"><i class="fa fa-user text-red fa-3x"></i><br> <?php echo __('Admin Login'); ?></a>
        </div>
        <?php else: ?>
        <div class="col-md-4 col-sm-4">
        <a href="<?php echo $this->Url->build(['action' => 'logout']); ?>"><i class="fa fa-sign-out text-red fa-3x"></i><br> <?php echo __('Admin Logout'); ?></a>
        </div>
        <div class="col-md-4 col-sm-4">
        <a href="<?php echo $this->Url->build(['controller'=>'customers','action' => 'check']); ?>"><i class="fa fa-user text-yellow fa-3x"></i><br> <?php echo __('Customer Login'); ?></a>
        </div>
        <div class="col-md-4 col-sm-4">
        <a href="<?php echo $this->Url->build(['controller'=>'customers','action' => 'add']); ?>"><i class="fa fa-user text-blue fa-3x"></i><br> <?php echo __('Customer Registration'); ?></a>
        </div>
        <?php endif; ?>

    </div>
</section>

