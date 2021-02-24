<?php
include_once 'Employee1.php';
$Emp_1 = new Employee();
$Emp_1->setManNo(01);
$Emp_1->setName("Ha");
$Emp_1->setPosition("ex2");
$Emp_2 = new Employee();
$Emp_2->setManNo(02);
$Emp_2->setName("Hi");
$Emp_2->setPosition("ex5");
echo print_r($Emp_1)."<Br>";

echo var_dump($Emp_2)."<BR>";
?><?php
