<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class GeneralModel extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function get_general($table)
  {
    $query = $this->db->get($table);
    return $query->result();
  }

  function get_general_group_by($table,$group_by)
  {
    $query = $this->db->query("SELECT * FROM $table GROUP BY $group_by");
    return $query->result();
  }

  function get_by_id_general_group_by($table,$id,$val,$group_by)
  {
    $query = $this->db->query("SELECT * FROM $table WHERE $id = '$val' GROUP BY $group_by");
    return $query->result();
  }

  function get_by_id_general_group_by_order_by($table,$id,$val,$group_by,$by,$order)
  {
    $query = $this->db->query("SELECT * FROM $table WHERE $id = '$val' GROUP BY $group_by ORDER BY $by $order");
    return $query->result();
  }

  function get_general_row($table)
  {
    $query = $this->db->get($table);
    return $query->row();
  }

  function get_general_order_by($table,$by,$order)
  {
    return $query = $this->db->query("SELECT * FROM $table ORDER BY $by $order")->result();
  }

  function truncate_general($table)
  {
    return $this->db->query("TRUNCATE TABLE $table");
  }

  function count_general($table)
  {
    return $this->db->query("SELECT COUNT(*) as jumlah FROM $table")->row();
  }

  function count_by_id_general($table, $id, $val)
  {
    return $this->db->query("SELECT COUNT(*) as jumlah FROM $table WHERE $id = '$val'")->row();
  }

  function get_by_id_general($table, $id, $val)
  {
    $query = $this->db->where($id, $val)->get($table);
    return $query->result();
  }

  function get_by_multi_id_general($table, $id, $val, $id2='', $val2='')
  {
    $this->db->where($id, $val);
    if (!empty($id2 && !empty($val2))) {
      $this->db->where($id2, $val2);
    }
    return $this->db->get($table)->result();
  }


  function create_general($table, $data)
  {
    return $this->db->insert($table, $data);
  }

  function update_general($table, $id, $val, $data)
  {
    $this->db->where($id, $val);
    return $this->db->update($table, $data);
  }

    function update_multi_id_general($table, $id, $val, $id2, $val2, $data)
  {
    $this->db->where($id, $val);
    if (!empty($id2 && !empty($val2))) {
      $this->db->where($id2, $val2);
    }
    return $this->db->update($table, $data);
  }

  function delete_general($table, $id, $val)
  {
    $this->db->where($id, $val);
    return $this->db->delete($table);
  }

  function limit_general($table, $limit)
  {
    return $this->db->query("SELECT * FROM $table LIMIT $limit")->result();
  }

  function limit_general_order_by($table, $order_by, $order ,$limit)
  {
    return $this->db->query("SELECT * FROM $table ORDER BY $order_by $order LIMIT $limit")->result();
  }

  function get_by_id_limit_general_order_by($table, $id, $val, $order_by, $order, $limit)
  {
    return $this->db->query("SELECT * FROM $table WHERE $id='$val' ORDER BY $order_by $order LIMIT $limit")->result();
  }

  function get_transaksi()
  {
    return $this->db->query("SELECT * FROM spbu_transaksi,spbu_produk WHERE spbu_produk.id_produk = spbu_transaksi.jenis_bahan_bakar ORDER BY tanggal_transaksi DESC")->result();
  }

  function get_transaksi_by_id($id)
  {
    return $this->db->query("SELECT * FROM spbu_transaksi,spbu_produk WHERE spbu_produk.id_produk = spbu_transaksi.jenis_bahan_bakar AND spbu_transaksi.id_transaksi = '$id'")->result();
  }


}
