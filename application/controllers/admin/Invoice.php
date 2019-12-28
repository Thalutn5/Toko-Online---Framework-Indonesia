<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function index()
    {
        $data["invoice"] = $this->ModelInvoice->tampilData();

        $this->load->view('templatesAdmin/header');
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->ModelInvoice->ambilIdInvoice($id_invoice)[0];
        $data['pesanan'] = $this->ModelInvoice->ambilIdPesanan($id_invoice);

        $this->load->view('templatesAdmin/header');
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/detailinvoice', $data);
        $this->load->view('templatesAdmin/footer');
    }
}
