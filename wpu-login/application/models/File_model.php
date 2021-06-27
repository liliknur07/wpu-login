<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function insert()
    {
    }
}
