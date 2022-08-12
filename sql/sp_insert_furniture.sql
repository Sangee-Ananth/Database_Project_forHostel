DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_furniture`(
f_number varchar(30),
room_number varchar(30),
type varchar(50),
condition_of_furniture varchar(50),
availability varchar(50)
)
BEGIN
insert into furniture(f_number,room_number,type,condition_of_furniture,availability) value(f_number,room_number,type,condition_of_furniture,availability);
END$$
DELIMITER ;