TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `trigger1` AFTER INSERT ON `pemesanan` FOR EACH ROW UPDATE barang set stok=stok-new.jumlah\nwhere id_barang=new.id_barang' 'CREATE DEFINER=`root`@`localhost` TRIGGER `trigger2` AFTER DELETE ON `pemesanan` FOR EACH ROW UPDATE barang set stok=stok+old.jumlah\nwhere id_barang=old.id_barang'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=169198980878 169198980880
