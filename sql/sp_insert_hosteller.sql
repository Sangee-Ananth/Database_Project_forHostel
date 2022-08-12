DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_hosteller`(
id_number varchar(15),
room_number varchar(30),
first_name varchar(300),
last_name varchar(300),
district varchar(300),
city varchar(300),
telephone_number int(10)

)
BEGIN
insert into hostellers(id_number,room_number,first_name,last_name,district,city,telephone_number) value(id_number,room_number,first_name,last_name,district,city,telephone_number);
END$$
DELIMITER ;