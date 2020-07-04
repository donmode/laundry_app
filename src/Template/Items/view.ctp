<section class="content-header">
  <h1>
    Item
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
            <dt scope="row"><?= __('Category') ?></dt>
            <dd><?= $item->has('category') ? $this->Html->link($item->category->name, ['controller' => 'Categories', 'action' => 'view', $item->category->id]) : '' ?></dd>
            <dt scope="row"><?= __('Name') ?></dt>
            <dd><?= h($item->name) ?></dd>
            <dt scope="row"><?= __('Description') ?></dt>
            <dd><?= h($item->description) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($item->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($item->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($item->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Laundry Requests') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($item->laundry_requests)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Customer Id') ?></th>
                    <th scope="col"><?= __('Item Id') ?></th>
                    <th scope="col"><?= __('Quantity') ?></th>
                    <th scope="col"><?= __('Condition Id') ?></th>
                    <th scope="col"><?= __('Payment Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($item->laundry_requests as $laundryRequests): ?>
              <tr>
                    <td><?= h($laundryRequests->id) ?></td>
                    <td><?= h($laundryRequests->user_id) ?></td>
                    <td><?= h($laundryRequests->customer_id) ?></td>
                    <td><?= h($laundryRequests->item_id) ?></td>
                    <td><?= h($laundryRequests->quantity) ?></td>
                    <td><?= h($laundryRequests->condition_id) ?></td>
                    <td><?= h($laundryRequests->payment_id) ?></td>
                    <td><?= h($laundryRequests->created) ?></td>
                    <td><?= h($laundryRequests->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'LaundryRequests', 'action' => 'view', $laundryRequests->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'LaundryRequests', 'action' => 'edit', $laundryRequests->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'LaundryRequests', 'action' => 'delete', $laundryRequests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $laundryRequests->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Price') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($item->price)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Item Id') ?></th>
                    <th scope="col"><?= __('Price') ?></th>
                    <th scope="col"><?= __('Meta') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($item->price as $price): ?>
              <tr>
                    <td><?= h($price->id) ?></td>
                    <td><?= h($price->item_id) ?></td>
                    <td><?= h($price->price) ?></td>
                    <td><?= h($price->meta) ?></td>
                    <td><?= h($price->created) ?></td>
                    <td><?= h($price->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Price', 'action' => 'view', $price->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Price', 'action' => 'edit', $price->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Price', 'action' => 'delete', $price->id], ['confirm' => __('Are you sure you want to delete # {0}?', $price->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
