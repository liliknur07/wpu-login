<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper(array('form', 'url', 'download'));
    }

    public function index()
    {
        $data['title'] = 'Upload File';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['upload'] = $this->db->get('upload_files')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('upload/index', $data);
        $this->load->view('templates/footer');
    }


    public function incoming()
    {
        $data['title'] = 'Incoming Data';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['upload'] = $this->db->get('upload_files')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('upload/incoming', $data);
        $this->load->view('templates/footer');
    }

    public function add_upload()
    {
        $upload = $_FILES['filename']['tmp_name'];
        $upload_name = $_FILES['filename']['name'];
        $direktori_file = "./uploads/$upload_name";
        if (!move_uploaded_file($upload, "$direktori_file")) {
            echo "File gagal diupload";
        } else {
            $this->db->set('name', $this->input->post('name'));
            $this->db->set('email_id', $this->input->post('email_id'));
            $this->db->set('filename', $upload_name);
            $this->db->insert('upload_files');

            return redirect("upload/incoming");
        }
    }

    public function download_file($filename)
    {
        force_download('./uploads/' . $filename, NULL);
    }
}
