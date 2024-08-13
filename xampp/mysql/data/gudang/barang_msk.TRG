TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `fff` AFTER INSERT ON `barang_msk` FOR EACH ROW UPDATE barang set stok=stok+new.jumlah\nWHERE id_brg=new.id_brg' 'CREATE DEFINER=`root`@`localhost` TRIGGER `eee` AFTER DELETE ON `barang_msk` FOR EACH ROW UPDATE barang set stok=stok-old.jumlah\nWHERE id_brg=old.id_brg'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=169396499943 169396499945
