
<?php echo Text::limit_words('This is my really cool and super awesome string.', 4, '...') ?>

<br/>

<?php echo Text::limit_chars('This is my really cool and super awesome string.', 15, '...') ?>

<br/>

<?php echo Text::alternate('You are cool','You are smart','You are funny') ?>

<br/>

<?php echo Text::alternate('You are nice','You are happy','You are stinky') ?>

<br/>

<?php echo Text::alternate('You are ugly','You are sleepy','You are bored') ?>

<br/>

<?php echo Text::random('alnum', 8) ?>

<br/>

<?php echo Text::random('alpha', 10) ?>

<br/>

<?php echo Text::reduce_slashes('This //Is my string// With //Slashes'); ?>

<br/>

<?php echo Text::censor('I used CakePHP and Zend but I likeYiis', Kohana::config('censor.words')); ?>

<br/>

<?php echo Text::censor('I used CakePHP and Zend but I likeYiis', Kohana::config('censor.words'), 'Kohana'); ?>

<br/>

<?php echo Text::censor('I used CakePHP and Zend but I likeYiis', Kohana::config('censor.words'), '*', FALSE); ?>

<br/>

<?php echo Text::similar( array('Help', 'Helium', 'Herman') ); ?>

<br>

<?php echo Text::auto_link('My email is someone@somewhere.ca and my web site is www.kohanaphp.com') ?>
<br>

<?php echo Text::auto_link_urls('My email is someone@somewhere.ca and my web site is www.kohanaphp.com') ?>
<br>

<?php echo Text::auto_link_emails('My email is someone@somewhere.ca and my web site is www.kohanaphp.com') ?>

<br/>

<?php 

$string = "This is a block of
text that has

Some line breaks in it."; 

echo Text::auto_p($string);
?>

<br/>

<pre>
<?php 
echo "Simple:<br/>";
echo Text::bytes(5500), "\n";
echo Text::bytes(17139812000), "\n\n";
 
// Maximum unit
echo "Max units in MB:\n";
echo Text::bytes(81620000000, 'MB'), "\n\n";
 
// 4 decimal accuracy
echo "4 decimals:\n";
echo Text::bytes(91711816100, null, '%01.4f %s', TRUE), "\n\n";
 
// 1 decimal accuracy, units in brackets, max unit in MB
echo "1 decimal, units in brackets, max unit of MB:\n";
$size = disk_total_space('/home');
echo Text::bytes($size, 'MB', '%01.1f (%s)', TRUE);

?>
</pre>