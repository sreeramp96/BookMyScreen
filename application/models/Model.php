<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{
    public function RegisterUserDetails($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function loginUserDetails($table, $logindata)
    {
        $this->db->insert($table, $logindata);
    }

    public function selectUser($table, $username, $password)
    {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where('Username', $username);
        $this->db->where('Password', $password);
        if ($data = $this->db->get()) {
            return $data->row_array();
        } else {
            return false;
        }
    }

    public function selectAdmin($table, $username, $password)
    {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where('Username', $username);
        $this->db->where('Password', $password);
        if ($data = $this->db->get()) {
            return $data->row_array();
        } else {
            return false;
        }
    }

    public function selectName($table, $id)
    {
        $this->db->select('ID, Name');
        $this->db->from($table);
        $this->db->where('ID', $id);
        if ($data = $this->db->get()) {
            return $data->row_array();
        } else {
            return false;
        }
    }

    public function ViewBookings($id)
    {
        $this->db->select('*');
        $this->db->from('bookingdetails');
        $this->db->where('Name', $id);
        $data = $this->db->get();
        return $data->result();
    }
    public function ViewAllBookings()
    {
        $this->db->select('*');
        $this->db->from('userdetails');
        $data = $this->db->get();
        return $data->result();
    }

    public function BookSeat($table, $data)
    {
        $this->db->insert($table, $data);
        // $this->db->select('Name, Email');
        // $this->db->from('userdetails');
        // $this->db->where('ID', $id);
    }

    public function ViewUserBookInfo($table, $id)
    {
        $this->db->select('*');
        $this->db->where('UID', $id);
        $data = $this->db->get($table);
        return $data->result();
    }
}
