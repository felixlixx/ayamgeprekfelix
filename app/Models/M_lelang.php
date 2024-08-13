<?php

namespace App\Models;
use CodeIgniter\Model;

class M_lelang extends Model
{
 public function tampil($tabel){
    return $this->db->table($tabel)
    ->get()
    ->getResult();

 }

 public function join($tabel, $tabel2, $on, $id){
    return $this->db->table($tabel)
    ->join($tabel2, $on,'left')
    ->orderby($id,'desc')
    ->get()
    ->getResult();

 }

 public function joinfelix($tabel, $tabel2, $tabel3,$tabel4, $on,$on1,$on2, $id){
    return $this->db->table($tabel)
    ->join($tabel2, $on,'left')
    ->join($tabel3, $on1,'left')
    ->join($tabel4, $o2,'left')
    ->orderby($id,'desc')
    ->get()
    ->getResult();

 }

 public function joinWhere($tabel, $tabel2, $on, $where){
    return $this->db->table($tabel, $where)
    ->join($tabel2, $on,'left')
    ->get()
    ->getRow();

 }

 //return $this->db->query('Select * from brg_m
// join barang on brg_m.id_brg=barang.id_brg')
 // ->getResult();

 public function getWhere($tabel,$where){
  return $this->db->table($tabel)
  ->getWhere($where)
  ->getRow();
}

public function tambah($tabel, $isi){
 return $this->db->table($tabel)
 ->insert($isi);
}

public function edit($tabel, $isi, $where){
 return $this->db->table($tabel)
 ->update($isi, $where);
}

public function hapus($table,$where){
   return $this->db->table($table)
   ->delete($where);
}

public function upload($photo){
   $imageName = $photo->getName();
   $photo->move(ROOTPATH . 'public/img', $imageName);
}

public function joinnelson($tabel, $tabel2, $tabel3, $tabel4, $on, $on2, $on3, $id){
 return $this->db->table($tabel)
 ->join($tabel2, $on,'left')
 ->join($tabel3, $on2,'left')
 ->join($tabel4, $on3,'left')
 ->orderby($id,'desc')
 ->get();

}

//utk join tiga tabel

public function joinnelsona($tabel, $tabel2, $tabel3, $on, $on2, $id){
 return $this->db->table($tabel)
 ->join($tabel2, $on,'left')
 ->join($tabel3, $on2,'left')
 ->orderby($id,'desc')
 ->get()
 ->getResult();

}


public function joinaria($tabel, $tabel2, $tabel3,$on, $on2, $id){
 return $this->db->table($tabel)
 ->join($tabel2, $on,'left')
 ->join($tabel3, $on2,'left')
 ->orderby($id,'desc')
 ->get()
 ->getResult();

}

public function joinn($tabel, $tabel2, $tabel3,$tabel4, $on, $on2,$on3, $id, $where){
  return $this->db->table($tabel)
  ->join($tabel2, $on,'left')
  ->join($tabel3, $on2,'left')
  ->join($tabel4, $on3,'left')
  ->orderby($id,'desc')
  ->getWhere($where)
  ->getResult();

}

public function hapuss($table,$where){
   return $this->db->table($table)
   ->delete($where);
}


protected $table; // Biarkan kosong, nanti akan diisi secara dinamis
    protected $primaryKey = 'id_lelang';
    public function __construct()
    {
        parent::__construct();
        $this->table = 'tb_lelang'; // Setel nama tabel secara dinamis saat membuat objek model
    }
    public function insertHistory($table, $data)
{
    return $this->db->table($table)->insert($data);
}
    public function getPreviousHarga($id_lelang)
    {
        $table = 'tb_lelang'; // Set nama tabel ke 'tb_lelang'
        $result = $this->db->table($table)
            ->select('harga_akhir')
            ->where('id_lelang', $id_lelang)
            ->get();

        // Tambahkan penanganan kesalahan
        if (!$result) {
            die(var_dump($this->db->error())); // Cetak pesan kesalahan
        }

        $row = $result->getRow();

        if ($row) {
            return $row->harga_akhir;
        } else {
            return null; // Atau nilai default sesuai kebutuhan Anda
        }
    }

    public function getHighestBidsByBarang()
 {
     return $this->db->table('bid')
         ->select('id_lelang, MAX(harga_terakhir) as max_harga_terakhir')
         ->groupBy('id_lelang')
         ->get()
         ->getResult();
        }


};