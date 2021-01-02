TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `insertlog` BEFORE INSERT ON `spam_database` FOR EACH ROW insert into logs values(null,new.spam_no,\'Inserted in Spam database\',NOW())'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci'
created=160958550952
