<?php
/**
 * Tourist Destination Controller
 */
class Tourist extends CI_Controller
{
    function faildemessage()
    {
        return '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
    }
    function successMessage()
    {
        return'<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
    }
    function insert_tourdest()
    {
        $city = $this->input->post('city');
        $contact = $this->input->post('contact');
        $pic = $this->input->post('picture');


        $config['upload_path']          = './assets/images/touristdestination/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('picture'))
        {
            $this->session->set_flashdata('message', $this->faildemessage() . 'Unable To Upload Picture.</div>');
        }
        else
        {
            $checkexist = $this->registration->check_city($city);
            if ($checkexist <= 0)
            {
                $data = array('city' => $city, 'contact' => $contact, 'filename' =>  $this->upload->data('file_name'));
                $this->registration->insert_city($data);
                $this->session->set_flashdata('message', $this->successMessage() . 'City Tourist Destination Added.</div>');
            }
            else
            {
                $this->session->set_flashdata('message', $this->faildemessage() . 'City Tourist Destination Already Exist.</div>');
            }

        }
        redirect('/tourist-list');
    }
    function insert_spot()
    {
        $spot = $this->input->post('touristspot');
        $contact = $this->input->post('contact');
        $pic = $this->input->post('picture');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $desc = $this->input->post('description');

        $config['upload_path']          = './assets/images/touristspot/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload' , $config);
        if ( ! $this->upload->do_upload('picture'))
        {
            $this->session->set_flashdata('message', $this->faildemessage() . 'Unable To Upload Picture.</div>');
        }
        else
        {
            $checkexist = $this->registration->check_spot($spot, $address);
            if ($checkexist <= 0)
            {
                $data = array('tourist' => $spot, 'contact' => $contact, 'address' => $address,
                'city' => $city, 'information' => $desc, 'filename' =>  $this->upload->data('file_name'));
                $this->registration->insert_spot($data);
                $this->session->set_flashdata('message', $this->successMessage() . 'Tourist Spot Added.</div>');
            }
            else
            {
                $this->session->set_flashdata('message', $this->faildemessage() . 'Tourist Spot Already Exist.</div>');
            }
        }
        $data['destination'] = $city;
        $this->session->set_flashdata('data', $data);
        redirect('/citytourist/' . $city);
    }
    function insert_hotel()
    {
        echo $data = array('tabpane' => $this->input->post('tabpane'));
        $this->session->set_flashdata('data', $data);
        redirect('/tourist/'.$this->input->post('spots'));
    }
}
