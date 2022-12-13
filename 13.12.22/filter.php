<?php 

/**
 * Class on filter
 * 
 * @link https://www.php.net/manual/en/book.filter.php
 * https://www.php.net/manual/en/function.filter-var.php
 * 
 * filter output or false dibe
 * r sanitize er kkhetre valid value gulo string theke niye dibe.
 * Example:
 * filter_var($number, FILTER_VALIDATE_INT); 
 * filter_var($number, FILTER_SANITIZE_NUMBER_INT);
 */

 $number = '12adsl45DSFD';

 $check = filter_var($number, FILTER_VALIDATE_INT);
var_dump($check);

//filter_list() function
//filter_id() function 