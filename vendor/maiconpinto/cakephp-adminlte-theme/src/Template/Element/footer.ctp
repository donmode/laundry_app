<?php

$file = $theme['folder'] . DS . 'vendor' . DS . 'maiconpinto' . DS . 'cake-adminlte-theme' . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'footer.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<footer class="main-footer">
    <strong><?php echo "Copyright &copy; " . date('Y') . " Laundry App "; ?></strong>&nbsp;&nbsp;&nbsp; all rights reserved.
</footer>
<?php } ?>
