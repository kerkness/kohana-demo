
<?php echo url::base() ?>

<br/>
<?php echo url::base(TRUE) ?>

<br/>

<?php echo url::base(TRUE, TRUE) ?>

<br/>

<?php echo url::base(FALSE, 'ftp') ?>

<br/>

<?php echo url::site('controller/action') ?>

<br/>

<?php echo url::site('controller/action','ftp') ?>

<br/>

<?php echo url::query() ?>

<br/>

<?php echo url::query( array('bar'=>'foo') ) ?>

<br/>

<?php echo url::title('This is my title') ?>
