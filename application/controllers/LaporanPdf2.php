<?php
class Report extends Controller
{
  function Report()
  {
    parent::Controller();
    $this->load->model("report_model","",true);
  }

  function index()
  {
    $data['onclick_report'] = site_url()."assets/dokumen/"; // button report
    $this->load->view('v_admin', $data);
  }
}