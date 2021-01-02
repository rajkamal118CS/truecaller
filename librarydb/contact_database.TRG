TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `before_insert` BEFORE INSERT ON `contact_database` FOR EACH ROW insert into contact_name_relation VALUES(null,new.contact_number,new.contact_name,new.user)' 'CREATE DEFINER=`root`@`localhost` TRIGGER `insertlogcontact` BEFORE INSERT ON `contact_database` FOR EACH ROW insert into logs VALUES(null,new.contact_number,\'Inserted into contact\',NOW())'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=160957646124 160958608624
