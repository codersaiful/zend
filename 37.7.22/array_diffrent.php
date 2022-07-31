<?php 
/**
 * array_walk and array_warl_recursive()
 * egulo valu return kore na.
 */

//  array_reduce()
//bises kore sum korar jonno

$test_var = range(2,50);
var_dump(array_reduce($test_var,function($new,$item){
    return $new+=$item;
}));//array_reduct() a third params a default value dite hoy.

/**
 * array_chunk() -> খন্ড 
 * index mul array moto rakhte chaile third a tru dite hobe
 * 
 */


//  array_slice() actual index dorkar hole last param a tru dite hobe

/**
 * array_column()
 */
$students = [
    ['name' => 'Mamun', 'age' => 8, 'address' => 'Dhaka, Bangladesh'],
    ['name' => 'Muhib', 'age' => 7, 'address' => 'Savar, Bangladesh'],
    ['name' => 'Mahmud', 'age' => 4, 'address' => 'Rajsahi, Bangladesh'],
   ];

   var_dump(array_column($students,'name','age'));

/**
 * array_combine()
 * 
 * doto array jog kora, prothom ta key, ekta value hobe. 
 */

 /**
  * array_merge()

  array_merge_recursive()
  */

  /**
   * array_push() last a value add kore
   * array_pop() last value bad dicche
   * 
   * array_unshift() prothome data dhukabe
   * array_shift() prothom value remove korbe
   * mull array ke poriborton kore
   * return value thake na, tai variable er modhe nite hoyna
   * 
   */

   /**
    * array_splice($arr,3), 
    https://www.php.net/manual/en/function.array-splice.php
    param system substr er moto
    */
    // array_splice()

    /**
     * sort() 
     * return value nai
     * 
     * sort($arr, SORT_NATURAL | SORT_FLAG_CASE)
     * 
     * asort() associative sort
     * rsort()
     * arsort() key gulo rekhe rsort()
     * ksort() 
     * krsort()
     */

     /**
      * natsort() automatically natural sort tobe case bade
      * natcasesort() case shoho natural,sort_flag_case soho
      */