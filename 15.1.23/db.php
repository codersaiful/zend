<?php 
/**
 * Topic:
 * View, table
 * Trigger myadmin
 * 
 * View table:
 * 
 * CREATE VIEW customerPyament
 as 


 TRIGGER:
CREATE TABLE `test_zend_class`.`mytrigger` ( `id` INT NOT NULL AUTO_INCREMENT , `employee_number` INT NOT NULL , `lastname` VARCHAR(60) NULL , `changed_date` DATETIME NULL DEFAULT NULL , `action` VARCHAR(60) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

sample:
CREATE TRIGGER befoe_employee_update
	BEFORE UPDATE ON employee_number
    FOR EACH ROW
    INSERT INTO mytrigger
    SET action='updated',
    employee_number=1222,
    changed_date = OLD.name
 */

 
 //How to create trigger:
