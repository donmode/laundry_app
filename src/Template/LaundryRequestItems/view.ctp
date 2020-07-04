<section class="content-header">
  <h1>
    Laundry Request Item
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Laundry Request') ?></dt>
            <dd><?= $laundryRequestItem->has('laundry_request') ? $this->Html->link($laundryRequestItem->laundry_request->id, ['controller' => 'LaundryRequests', 'action' => 'view', $laundryRequestItem->laundry_request->id]) : '' ?></dd>
            <dt scope="row"><?= __('Item') ?></dt>
            <dd><?= $laundryRequestItem->has('item') ? $this->Html->link($laundryRequestItem->item->name, ['controller' => 'Items', 'action' => 'view', $laundryRequestItem->item->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($laundryRequestItem->id) ?></dd>
            <dt scope="row"><?= __('Quantity') ?></dt>
            <dd><?= $this->Number->format($laundryRequestItem->quantity) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($laundryRequestItem->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($laundryRequestItem->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Fabric Condition') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($laundryRequestItem->fabric_condition); ?>
        </div>
      </div>
    </div>
  </div>
</section>
