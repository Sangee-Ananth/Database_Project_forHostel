DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_key`(
key_number varchar(30),
room_number varchar(30),
owner varchar(300)
)
BEGIN
insert into keys_table(key_number,room_number,owner) value(key_number,room_number,owner);
END$$
DELIMITER ;