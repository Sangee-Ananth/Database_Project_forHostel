DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_history`(
reg_number varchar(30),
room_number varchar(30),
entrance_date date,
exit_date date
)
BEGIN
insert into room_history(reg_number,room_number,entrance_date,exit_date) value(reg_number,room_number,entrance_date,exit_date);
END$$
DELIMITER ;