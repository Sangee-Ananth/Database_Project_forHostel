DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_room`(
room_number varchar(30),
block_name varchar(30),
no_of_people int(30),
status varchar(50)
)
BEGIN
insert into room_table(room_number,block_name,no_of_people,status) value(room_number,block_name,no_of_people,status);
END$$
DELIMITER ;