<?php
require 'Employee1.php';
$objEmployee1 = new Employee1('Human',' Hoang Van A', 'Producer');
echo $objEmployee1->get_man_no();
echo $objEmployee1->get_name();
echo $objEmployee1->get_position();