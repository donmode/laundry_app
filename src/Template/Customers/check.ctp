<!-- File: src/Template/Customers/check.ctp -->

<div class="users form">
    <?php echo $this->Flash->render(); ?>
    <?php echo $this->Form->create() ?>
    <fieldset>
        <legend><?php echo __('Please enter customer\'s phone number to proceed') ?></legend>
        <?php echo $this->Form->input('phone_number',['required'=>true]) ?>
        <?php echo $this->Form->button(__('Proceed')); ?>
    <a style="float: right; margin-top: 2%;" href="<?php echo $this->Url->build(['controller'=>'customers','action' => 'add']); ?>"><i class="fa fa-user text-blue fa-1x "></i> <?php echo "  ". __(' Customer Registration'); ?></a>
    </fieldset>
    <?php echo $this->Form->end() ?>
</div>
