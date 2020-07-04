<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Customer
      <small><?php echo __('Register'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($customer, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('full_name');
                echo $this->Form->control('phone_number');
                echo $this->Form->control('email');
                echo $this->Form->control('address');
                echo $this->Form->control('birthday', ['empty' => true, 
                    'minYear' => date('Y') - 100,
                    'maxYear' => date('Y'),
                ]);
                echo $this->Form->control('wedding_anniversary', ['empty' => true, 
                    'minYear' => date('Y') - 100,
                    'maxYear' => date('Y'),
                ]);
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
