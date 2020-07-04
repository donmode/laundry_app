
<style>
    table, th, td {
    padding: 5px;
    border: 1px solid black; 
    border-collapse: collapse;
    }
</style>
<?php if(!($receipt || $invoice)): ?>
<div class="content-header">
  <h1>
    Laundry Request
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</div>
<?php endif; ?>
<!-- Main content -->
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <?php if(!($receipt || $invoice)): ?>
          <div class="box-header with-border">
            <div class="col-sm-6 col-md-6">
            <?php if($laundryRequest->payment_id): ?>
              <form action="#" method="post">
                <input type="hidden" name="receipt" value="true">
                <button type="submit">Download Receipt <i class="fa fa-download"></i></button>

              </form>
            
            
            <?php else: ?>
              <form action="#" method="post">
                <input type="hidden" name="invoice" value="true">
                <button type="submit">Download Invoice <i class="fa fa-download"></i></button>
              </form>
            
            
            <?php endif; ?>
            </div>
            <div class="col-sm-6 col-md-6 text-justify">
              <a title="Pay" style="float: right; margin-top: 2%;" href="<?php echo $this->Url->build(['controller'=>'payments','action' => 'add', $laundryRequest->id]); ?>"><i class="fa fa-money text-green fa-3x "></i><br>Pay</a>
            </div>
          </div>
        <?php endif; ?>
        
        <?php if($receipt === true): ?>
          <h2> Laundry Receipt </h2>
          <br>
          <h4> Request Number:.......  <?= $laundryRequest->id; ?> </h4>
          <br><br>
        <?php endif; ?>

        <?php if($invoice === true): ?>
          <h2> Laundry Invoice </h2>
          <br>
        <?php endif; ?>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-hover table-bordered text-justify "  style="width: 100%;">
                <tr>
                      <td style="width: 50%;" scope="col"><?= __('Staff') ?></td>
                      <th style="width: 50%;" scope="col"><?= $laundryRequest->has('user') ? $this->Html->link($laundryRequest->user->username, ['controller' => 'Users', 'action' => 'view', $laundryRequest->user->id]) : '' ?></th>
                </tr>
                <tr>
                      <td style="width: 50%;" scope="col"><?= __('Customer') ?></td>
                      <th style="width: 50%;" scope="col"><?= $laundryRequest->has('customer') ? $this->Html->link($laundryRequest->customer->full_name, ['controller' => 'Customers', 'action' => 'view', $laundryRequest->customer->id]) : '' ?></th>
                </tr>
                <tr>
                      <td style="width: 50%;" scope="col"><?= __('Paid') ?></td>
                      <th style="width: 50%;" scope="col"><?= ($laundryRequest->payment_id) ? "Yes" : "No" ?></th>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </div>


  <?php  if(!($receipt || $invoice) || $receipt == true): ?>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-share-alt"></i>
            <h3 class="box-title"><?= __('Payments') ?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php if (!empty($laundryRequest->payments)): ?>
            <table class="table table-hover table-bordered text-justify" style="width: 100%;">
                <tr>
                      <th style="width: 50%;" scope="col"><?= __('Payment Option') ?></th>
                      <th style="width: 20%;" scope="col"><?= __('Full Payment') ?></th>
                      <th style="width: 30%;" scope="col"><?= __('Amount') ?></th>
                </tr>
                <?php foreach ($laundryRequest->payments as $payments): ?>
                <tr>
                      <td style="width: 50%;"><?= h($payments->payment_option->name) ?></td>
                      <td style="width: 20%;"><?= ($payments->full_payment)?"Yes":"No" ?></td>
                      <td style="width: 30%;"><?= 'N'.h($payments->amount) ?></td>
                        
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Laundry Request Items') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($laundryRequest->laundry_request_items)): ?>
          <table class="table table-hover table-bordered text-justify" style="width: 100%;">
              <tr>
                    <th style="width: 25%;" scope="col"><?= __('Item') ?></th>
                    <th style="width: 10%;" scope="col"><?= __('Quantity') ?></th>
                    <th style="width: 30%;" scope="col"><?= __('Condition') ?></th>
                    <th style="width: 10%;" scope="col"><?= __('Unit Price') ?></th>
                    <th style="width: 15%;" scope="col"><?= __('Total Price') ?></th>
              </tr>
              <?php
                $sum_total_price = 0;
                foreach ($laundryRequest->laundry_request_items as $laundryRequestItems): 
                  $total_price = $laundryRequestItems->item->prices[0]->price * $laundryRequestItems->quantity;
              ?>
              <tr>
                    <td style="width: 25%;"><?= h($laundryRequestItems->item->name) ?></td>
                    <td style="width: 10%;"><?= h($laundryRequestItems->quantity) ?></td>
                    <td style="width: 30%;"><?= h($laundryRequestItems->condition) ?></td>
                    <td style="width: 10%;"><?= 'N'.h($laundryRequestItems->item->prices[0]->price) ?></td>
                    <td style="width: 15%;"><?= 'N'.h($total_price) ?></td>
                      
              </tr>
              <?php 
                $sum_total_price += $total_price;
                endforeach; 
              ?>
              <tr>
                    <th style="width: 85%;" colspan='4' class="text-right">Sum Total of Prices</th>
                    <th style="width: 15%;"><?= ($sum_total_price) ? 'N'.h($sum_total_price): "" ?></th>
                      
              </tr>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
