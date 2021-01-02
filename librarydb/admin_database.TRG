TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `insertlogadmin` BEFORE INSERT ON `admin_database` FOR EACH ROW INSERT INTO logs VALUES(null,new.user_number,\'Inserted in admin database\',NOW())'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci'
created=160958582381
