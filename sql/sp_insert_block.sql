DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_block`(
block_location varchar(30),
block_name varchar(30),
no_of_floors int(8),
no_of_rooms int(8)
)
BEGIN
insert into hostel_blocks(block_location,block_name,no_of_floors,no_of_rooms) value(block_location,block_name,no_of_floors,no_of_rooms);
END$$
DELIMITER ;