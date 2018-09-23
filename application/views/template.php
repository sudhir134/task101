<html ng-app="MyApp">
  <head>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/common.css">
    <script  src="<?php echo base_url()?>assets/js/angular.min.js"></script>
    <script  src="<?php echo base_url()?>assets/js/common.js"></script>
    <script type="text/javascript">
      var base_url = '<?php echo base_url();?>';
    </script>
    <title> Task</title>
  </head>
  <body ng-controller="AppController">
    <div class="header">
      <a href="#default" class="logo">Tasks</a>
    </div>
    <?php echo $contents; ?>
  </body>
</html>