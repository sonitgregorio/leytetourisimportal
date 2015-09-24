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
            $this->session->set_flashdata('message', $this->faildemessage() .  $this->upload->display_errors().'</div>');
        }
        else
        {
            $checkexist = $this->registration->check_city($city);
            if ($checkexist <= 0)
            {
                $data = array('city' => $city, 'contact' => $contact, 'filename' =>  $this->upload->data('file_name'));
                $this->registration->insert_city($data);
                $this->session->set_flashdata('message', $this->successMessage() . 'City Tourist Destination Added.</div>');
                $this->registration->logs('Tourist Destination Added');
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
          //  $this->session->set_flashdata('message', $this->faildemessage() . $this->upload->display_errors().'</div>');

              if ($this->registration->checking_t() > 0)
              {
                $data = array('tourist' => $spot, 'contact' => $contact, 'address' => $address,
                'city' => $city, 'information' => $desc);
                $this->registration->update_spot($data);
                $this->session->set_flashdata('message', $this->successMessage() . 'Updated.</div>');
                $this->registration->logs('Added Tourist Spot');
              }
              else
              {

              }
        }
        else
        {
            $checkexist = $this->registration->check_spot($spot, $address);
            if ($checkexist <= 0)
            {
                $data = array('tourist' => $spot, 'contact' => $contact, 'address' => $address,
                'city' => $city, 'information' => $desc, 'filename' =>  $this->upload->data('file_name'),
                 'owned' => $this->session->userdata('uid'));
                $this->registration->insert_spot($data);
                $this->session->set_flashdata('message', $this->successMessage() . 'Tourist Spot Added.</div>');
              $this->registration->logs('Added Tourist Spot');  
            }
            else
            {
              $data = array('tourist' => $spot, 'contact' => $contact, 'address' => $address,
              'city' => $city, 'information' => $desc, 'filename' =>  $this->upload->data('file_name'));
              $this->registration->update_spot($data);
              $this->session->set_flashdata('message', $this->successMessage() . 'Updated.</div>');
              $this->registration->logs('Updated Tourist Spot');  
                //$this->session->set_flashdata('message', $this->faildemessage() . 'Tourist Spot Already Exist.</div>');
            }
        }






        $data['destination'] = $city;
        $this->session->set_flashdata('data', $data);
        if ($this->session->userdata('usertype') != '4')
        {
          redirect('/manage_tourist');
        }
        else
        {
          redirect('/citytourist/' . $city);
        }
    }
    function insert_hotel()
    {

        $hotel = $this->input->post('hotel');
        $contact = $this->input->post('contact');
        $address = $this->input->post('address');
        $tourist = $this->input->post('spots');

        $config['upload_path']          = './assets/images/hotels/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('picture'))
        {
            $this->session->set_flashdata('message', $this->faildemessage() . 'Unable To Upload Picture.</div>');
        }
        else
        {
            $checkexist = $this->registration->check_hotel($hotel, $address);
            if ($checkexist <= 0)
            {
              $data = array('hotel' => $hotel, 'contact' => $contact, 'tourist' => $tourist,
              'address' => $address, 'filename' =>  $this->upload->data('file_name'));
              $this->registration->insert_hotel($data);
              $this->session->set_flashdata('message', $this->successMessage() . 'Hotel Added.</div>');
              $this->registration->logs('Added Hotel');
            }
            else
            {
              $this->session->set_flashdata('message', $this->faildemessage() . 'Hotel Already Exist.</div>');
            }
        }

        $data = array('tabpane' => $this->input->post('tabpane'));
        $this->session->set_flashdata('data', $data);
        redirect('/tourist/'. $tourist);
    }
    function insert_tourist_info()
    {
        $tourist_name = $this->input->post('tourist_name');
        $contact = $this->input->post('contact');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $info = $this->input->post('information');
        $this->registration->logs('Updated Tourist Information');
    }
    function upload_pic()
    {
        $config['upload_path']          = './assets/images/gallery/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('picture'))
        {
            $this->session->set_flashdata('message', $this->faildemessage() .  $this->upload->display_errors().'</div>');
        }
        else
        {
            $spot = $this->registration->get_spot();
            $data = array('descr' => $this->input->post('descr'), 'spot' => $spot, 'filename' =>  $this->upload->data('file_name'));
            $this->registration->insert_gallery($data);
            $this->session->set_flashdata('message', $this->successMessage() . 'Picture Uploaded.</div>');
            $this->registration->logs('Uploaded Picture');
        }
        redirect('/gallery');
    }
    function del_gal($id)
    {
        $this->registration->del_gal($id);
        $this->registration->logs('Deleted Image');
        redirect('/gallery');
    }
    function post_announce()
    {
        $this->registration->post_announce($this->input->post('announce'));
        $this->registration->logs('Announcement Posted');
        redirect('/home');
    }
    function upload_profile()
    {
      $config['upload_path']          = './assets/images/profpic/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['encrypt_name']         = TRUE;
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('picture'))
      {
          $this->session->set_flashdata('message', $this->faildemessage() .  $this->upload->display_errors().'</div>');
      }
      else
      {
          $spot = $this->registration->get_spot();
          $data = array('uid' => $this->input->post('uid'), 'filename' =>  $this->upload->data('file_name'));
          $this->registration->insert_prof($data);
          $this->session->set_flashdata('message', $this->successMessage() . 'Picture Uploaded.</div>');
      }
      redirect('/home');
    }
    function update_setts()
    {

        $data = array('firstname' => $this->input->post('firstname'), 'middlename' => $this->input->post('middlename'),
                      'lastname' => $this->input->post('lastname'), 'contact' => $this->input->post('contact'),
                       'email' =>$this->input->post('email'), 'username' => $this->input->post('username'));
        $this->registration->update_setts($data, $this->session->userdata('uid'));
        redirect('/settings');
    }
    function change_pass()
    {
        $x = $this->registration->get_info($this->session->userdata('uid'));
        if ($x['password'] != $this->input->post('oldpass'))
        {
            $this->session->set_flashdata('message', $this->faildemessage() . 'Invalid Old Password.</div>');
        }
        elseif ($this->input->post('password') != $this->input->post('confirmpass'))
        {
            $this->session->set_flashdata('message', $this->faildemessage() . 'Invalid Old Confirm Password.</div>');
        }
        else
        {
          $data = array('password' => $this->input->post('password'));
          $this->registration->update_pass($data, $this->session->userdata('uid'));
          $this->session->set_flashdata('message', $this->successMessage() . 'Password Updated.</div>');
        }
        redirect('/settings');
    }
    function del_tour($id, $par)
    {
        $this->registration->del_tour($id);
        redirect('/citytourist/'. $par);
    }
}
