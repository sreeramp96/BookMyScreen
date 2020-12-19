<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
    }

    public function index()
    {
        $this->load->view('Home');
    }

    public function LoginUser()
    {
        $this->load->view('LoginPage');
    }

    public function UserLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = $this->Model->selectUser('userlogindetails', $username, $password);

        if ($data != false) {
            $this->session->set_userdata('sessionid', $data['UID']);
            $name = $this->Model->selectName('userdetails', $data['UID']);
            print_r($name);
            $this->session->set_userdata('Name', $name['Name']);
            $this->session->set_userdata('ID', $name['ID']);
            redirect(base_url("index.php/Controller/BookingPage"));
        } else {
            $this->session->set_flashdata('error', 'Invalid username/password');
            redirect(base_url("index.php/Controller/LoginUser"));
        }
    }

    public function RegisterUser()
    {
        $this->load->view('RegisterPage');
    }

    public function RegisterUserDetails()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $phonenumber = $this->input->post('phonenumber');

        $data = array(
            'Name' => $name,
            'Email' => $email,
            'Phonenumber' => $phonenumber
        );

        $id = $this->Model->RegisterUserDetails('userdetails', $data);

        $logindata = array(
            'UID' => $id,
            'Username' => $username,
            'Password' => $password
        );

        $this->Model->loginUserDetails('userlogindetails', $logindata, $id);
        redirect(base_url('index.php/Controller/LoginUser'));
    }

    public function BookingPage()
    {
        if ($this->session->userdata('sessionid') != '') {
            $this->load->view('BookingPage');
        } else {
            redirect(base_url('index.php/Controller/LoginUser'));
        }
    }

    public function BookSeat()
    {
        $id = $this->uri->segment(3);
        $name = $this->session->userdata('Name');
        $movie = $this->input->post('movie');
        $seatType = $this->input->post('seatType');
        $seatNumber = $this->input->post('seatNumber');

        $data = array(
            'UID' => $id,
            'Name' => $name,
            'Movie' => $movie,
            'SeatType' => $seatType,
            'SeatNumber' => $seatNumber
        );

        $this->Model->BookSeat('bookingdetails', $data);
        redirect(base_url('index.php/Controller/ViewBookings'));
    }

    public function ViewBookings()
    {
        if ($this->session->userdata('sessionid') != '') {
            $id = $this->session->userdata('Name');
            $result['data'] = $this->Model->ViewBookings($id);
            $this->load->view('ViewBookings', $result);
        } else {
            redirect(base_url('index.php/Controller/LoginUser'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php/Controller/index'));
    }

    public function AdminLogin()
    {
        $this->load->view('AdminLogin');
    }

    public function CheckAdminLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = $this->Model->selectAdmin('admindetails', $username, $password);

        if ($data != false) {
            $this->session->set_userdata('sessionid', $data['ID']);
            redirect(base_url("index.php/Controller/ViewAllBookings"));
        } else {
            $this->session->set_flashdata('error', 'Invalid username/password');
            redirect(base_url("index.php/Controller/AdminLogin"));
        }
    }

    public function ViewAllBookings()
    {
        if ($this->session->userdata('sessionid') != '') {
            $result['data'] = $this->Model->ViewAllBookings();
            $this->load->view('ViewAllBookings', $result);
        } else {
            redirect(base_url('index.php/Controller/AdminLogin'));
        }
    }

    public function ViewUserBookInfo()
    {
        if ($this->session->userdata('sessionid') != '') {
            $id = $this->uri->segment(3);
            $result['data'] = $this->Model->ViewUserBookInfo('bookingdetails', $id);
            $this->load->view('ViewUserBookInfo', $result);
        } else {
            redirect(base_url('index.php/Controller/AdminLogin'));
        }
    }
}
