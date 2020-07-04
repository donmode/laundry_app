<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaundryRequest $laundryRequest
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Laundry Request
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
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
          <?php echo $this->Form->create($laundryRequest, ['role' => 'form', 'onsubmit'=>'handleSubmit(event)', 'id'=>'form']); ?>
            <div class="box-body">
              <?php

                    echo "<div class='col-md-4 col-sm-4'>";
                      echo $this->Form->control('items', ['label'=>'Select to add an item','options' => [],'onfocus'=>'getItems(event)', 'oninput'=>'generateItemOptions(event)', 'empty'=>"Add an item"]);
                    echo "</div>";
                    echo "<div class='col-md-8 col-sm-8'>";
                    echo "</div>";


                echo '<div class="col-xs-12 table-responsive">';
                  echo "<table id='item-body' class='table table-striped table-bordered text-center'><tbody>";
                    echo "<tr>";
                      echo "<th style='width: 25%;'>Item</th>";
                      echo "<th style='width: 11%;'>Quantity</th>";
                      echo "<th style='width: 11%;'>Unit Price</th>";
                      echo "<th style='width: 30%;'>Fabric(s) Condition</th>";
                      echo "<th style='width: 14%;'>Total Price</th>";
                      echo "<th style='width: 9%;'></th>";
                    echo "</tr>";
                    echo "<tr id='item-option' style='display: none;'>";
                        echo "<td  style='width: 25%;'>";
                          echo $this->Form->input('item[]', ['label'=>false, 'type'=>'hidden', 'class'=>'mainitem']);
                          echo $this->Form->input('item_id[]', ['label'=>false, 'readonly','class'=>'item']);
                        echo "</td>";

                        echo "<td style='width: 11%;'>";
                          echo $this->Form->input('quantity[]', ['label'=>false, "min"=>"1", 'class'=>'quantity','oninput'=>'outputTotalPrice(event)']);
                        echo "</td>";

                        echo "<td style='width: 11%;'>";
                          echo $this->Form->input('unit[]', ['label'=>false, 'readonly' , 'class'=>'unit']);
                        echo "</td>";


                        echo "<td style='width: 30%;'>";
                          echo $this->Form->input('condition[]', ['label'=>false, 'class'=>'condition']);
                        echo "</td>";
                        
                        echo "<td style='width: 14%;'>";
                          echo $this->Form->input('total[]', ['label'=>false, 'readonly' , 'class'=>'total']);
                        echo "</td>";
                        echo "<td style='width: 9%;' class='minus' id='minus'><i class='fa fa-minus-circle fa-2x text-yellow' onclick='unselectItem(event)'></i></td>";
                    echo "</tr>";
                  echo "</tbody></table>";
                echo "</div>";
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
 <script>
  selectedItems = [0];
  const getItems = (event) =>{
    fetch('../../items/get-items' + '.json', {
        method: 'POST',
        body: [selectedItems]
    })
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
      populateItems(event, data.items)
    })
    .then(function(err) {
        if (err) {
            console.log("there is an error: " + err);
        }
    });
  }

  const unselectItem = (event)=>{
    let itemValue = document.getElementById(event.target.parentNode.id.replace('minus', 'item-id'));
    console.log(itemValue);
    itemValue = itemValue.getAttribute('data-value');
    console.log(itemValue);
    console.log(selectedItems);
    // selectedItems.pop(parseInt(itemValue, 10));
    selectedItems = selectedItems.filter(e => e != itemValue);
    console.log(selectedItems);
    event.target.parentNode.parentNode.parentNode.removeChild(event.target.parentNode.parentNode);
  }

  const populateItems = (event, items) => {
    const target = event.target;
    target.innerHTML = '';
    let options = '';
    for (const key in items) {
      options += `<option value='${key}'>${items[key]}</option>`;
    }
    target.innerHTML = options;
  }

  const outputTotalPrice = (event) =>{
    const total = document.getElementById(event.target.id.replace('quantity', 'total'))
    const unit = document.getElementById(event.target.id.replace('quantity', 'unit'))
    let totalPrice = '';
    if(event.target.value>0){
      totalPrice = event.target.value * parseInt(unit.placeholder.replace('₦',''), 10);
    }
    total.setAttribute('placeholder', "₦"+totalPrice);
  }

  const generateItemOptions = (event) =>{
    const value = event.target.value;
    fetch('../../items/get-items-properties/' + value + '.json', {
        method: 'GET'
    })
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
      selectedItems.push(parseInt(event.target.value, 10))
      event.target.innerHTML = "<option value=''>Select to add new Item</option>"
      return getItemsProperties(data.item)
    })
    .then(function(err) {
        if (err) {
            console.log("there is an error: " + err);
        }
    });
  }

  const getItemsProperties = (item) =>{
    itemOptions = document.getElementById('item-option');          
    const itemBody = document.getElementById('item-body');

    const newItemOption = itemOptions.cloneNode(true);
    newItemOption.style.display= "";
    const timestamp = new Date().getTime();
    newItemOption.setAttribute('id', newItemOption.id + '-'+ timestamp)
    const inputs = newItemOption.querySelectorAll('input');
    for(let i = 0; i<inputs.length; i++){
        inputs[i].setAttribute('id', inputs[i].id+'-'+ timestamp);
    }
    
    const minus = newItemOption.querySelector('.minus');  
    minus.setAttribute('id', minus.id+'-'+ timestamp);

    
    const mainItemInput = newItemOption.querySelector('.mainitem');  
    const itemInput = newItemOption.querySelector('.item');  
    const unitInput = newItemOption.querySelector('.unit');  
    const quantityInput = newItemOption.querySelector('.quantity');  
    const name = item.name;
    const price =item.prices[0].price;
    itemInput.setAttribute('placeholder', name)
    itemInput.setAttribute('data-value',item.id)
    mainItemInput.setAttribute('value', item.id);
    quantityInput.setAttribute('required', true)

    unitInput.setAttribute('placeholder',"₦"+price)
    itemBody.firstChild.appendChild(newItemOption); 
    quantityInput.focus();

  }


  const handleSubmit = (event) =>{
      console.log("clicked");
      event.preventDefault();
      const itemOption = document.getElementById('item-option');    
      if(itemOption !== null){
          itemOption.parentNode.removeChild(itemOption);
      }
      document.getElementById("form").submit();
  }
  </script>