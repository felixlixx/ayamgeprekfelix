TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `trigger_brg_msk` AFTER INSERT ON `barang_masuk` FOR EACH ROW UPDATE barang set stok=stok+new.jumlah where id=new.id_barang' 'CREATE DEFINER=`root`@`localhost` TRIGGER `trigger_brg_msk2` AFTER DELETE ON `barang_masuk` FOR EACH ROW UPDATE barang set stok=stok-old.jumlah where id=old.id_barang'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=169155471688 169155479816
