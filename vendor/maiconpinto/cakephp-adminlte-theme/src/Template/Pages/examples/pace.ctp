<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pace page
        <small>Loading example</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Pace page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Pace loading works automatically on page. You can still implement it with ajax requests by adding this js:
          <br/><code>$(document).ajaxStart(function() { Pace.restart(); });</code>
          <br/>
          <div class="row">
            <div class="col-xs-12 text-center">
              <button type="button" class="btn btn-default btn-lrg ajax" title="Ajax Request">
                <i class="fa fa-spin fa-refresh"></i>&nbsp; Get External Content
              </button>
            </div>
          </div>
          <div class="ajax-content">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

<!-- Pace style -->
<?php echo $this->Html->css('AdminLTE./plugins/pace/pace.min', ['block' => 'css']); ?>

<!-- PACE -->
<?php echo $this->Html->script('AdminLTE./bower_components/PACE/pace.min', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })
</script>
<?php $this->end(); ?>
