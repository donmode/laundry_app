<?php
use Cake\Core\Configure;

$file = Configure::read('Theme.folder') . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'nav-top.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a> -->

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">



      <!-- Control Sidebar Toggle Button -->
      <li>
      <!-- data-toggle below was "control-sidebar" ,  it's turned to "" to prevent it from showing unneeded stuffs -->
        <a href="#" data-toggle=""><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</nav>
<?php
}
?>
