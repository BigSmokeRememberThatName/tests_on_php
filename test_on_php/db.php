<?php 
require 'libs/rb.php';
R::setup(  'mysql:host=localhost;dbname=e95082j6_root','e95082j6_root', 'seshkek228' ); 

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}

session_start();