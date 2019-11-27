<?php 

$res = preg_replace('#(xa){1,3}#', '!', 'xaxaxaxaxa');

echo $res;

 ?>