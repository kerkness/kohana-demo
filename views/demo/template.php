<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
  <head profile="http://gmpg.org/xfn/11">
      <title><?php echo $title ?></title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  
      <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
      <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
  
  </head>
  <body>
    <?php echo $content ?>
  </body>
  </html>