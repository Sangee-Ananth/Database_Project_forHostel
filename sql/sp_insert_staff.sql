DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_staff`(
staff_number varchar(30),
occupation varchar(300),
age int(30)
)
BEGIN
insert into staff(staff_number,occupation,age) value(staff_number,occupation,age);
END$$
DELIMITER ;