<?php
include_once("Base.php");

class Admin extends Base {

    protected $folder_name = "admin";

	public function index()
	{
        $data['title'] = 'Hello';
        $this->load->view("{$this->folder_name}/index", $data);
	}

	public function about()
	{
        echo __CLASS__;
	}
}
