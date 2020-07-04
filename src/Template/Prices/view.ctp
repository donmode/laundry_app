<section class="content-header">
  <h1>
    Price
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
            <dt scope="row"><?= __('Item') ?></dt>
            <dd><?= $price->has('item') ? $this->Html->link($price->item->name, ['controller' => 'Items', 'action' => 'view', $price->item->id]) : '' ?></dd>
            <dt scope="row"><?= __('Meta') ?></dt>
            <dd><?= h($price->meta) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($price->id) ?></dd>
            <dt scope="row"><?= __('Price') ?></dt>
            <dd><?= $this->Number->format($price->price) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($price->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($price->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
