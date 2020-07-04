<section class="text-center" style="margin: 2%; padding: 5%;">
    <div class="row ">
       
        <div class="col-md-6 col-sm-6">
        <a href="<?php echo $this->Url->build(['controller'=>'LaundryRequests','action' => 'add', $customer_id]); ?>"><i class="fa fa-plus text-yellow fa-3x"></i><br> <?php echo __('New Laundry Request'); ?></a>
        </div>
        <div class="col-md-6 col-sm-6">
        <a href="<?php echo $this->Url->build(['controller'=>'LaundryRequests','action' => 'checkRequest', $customer_id]); ?>"><i class="fa fa-search text-blue fa-3x"></i><br> <?php echo __('Check Laundry Request'); ?></a>
        </div>

    </div>
</section>