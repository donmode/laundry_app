<!-- File: src/Template/Customers/check.ctp -->

<div class="users form">
    <?php echo $this->Flash->render(); ?>
    <?php echo $this->Form->create() ?>
    <fieldset>
        <legend><?php echo __('Please enter customer\'s request number to proceed') ?></legend>
        <?php echo $this->Form->input('id',['required'=>true, 'label'=>"Request Number"]) ?>
        <?php echo $this->Form->button(__('Proceed')); ?>
    </fieldset>
    <?php echo $this->Form->end() ?>
</div>
