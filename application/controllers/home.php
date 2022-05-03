<?php
class Home extends MY_Controller
{
    public function index()
    {
        $this->load->helper('date');
        $this->load->helper('email');
        $this->load->view('home');
    }   
        
    public function signin()
    {
        if($this->session->userdata("user_id"))
        return redirect("admin/dashboard");
        $this->load->view('adminlogin');
    }
    
    public function adminlogin()
    {       
        {   
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]|alpha');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
			
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

            if($this->form_validation->run('admin_login')){
                $username = $this->input->post('username');
                $password = sha1($this->input->post('password'));

                $this->load->model('admin_model');
                $admin_id=$this->admin_model->admin_validate($username,$password);
                if($admin_id){
                    $sessionData=[
                        'user_id'=>$admin_id->user_id,
                        'username'=>$admin_id->username,
                    ];
                    //validate user login admin
                    $this->session->set_userdata($sessionData);
                    return redirect('admin/dashboard');
                }else{
                    //failed
                    $this->session->set_flashdata('Login_failed','Invalid Username or Password !!!!');
                    return redirect('home/adminlogin');
                }
            }
            else{           
              $this->signin();
            }
        } 
       
    }
    public function logout()
    {   
        $this->session->unset_userdata("user_id");
        return redirect("home/adminlogin");
       
    }
    public function aboutus()
    {
        $this->load->view('aboutus');
    }
    public function newregister()
    {   
        if($this->session->userdata("passenger_id")){
            redirect("user/dashboard");
        }else{
            $this->load->view('userregister');
        }
    }
    public function register()
    {
        $this->form_validation->set_rules('fname', 'Fullname', 'required|min_length[5]|max_length[42]|trim|alpha_numeric_spaces');
        $this->form_validation->set_rules('uname', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[passengers.uname]');
        $this->form_validation->set_rules('dob', 'Date of birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|max_length[10]|min_length[10]');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');   
        $this->form_validation->set_rules('pword', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirmpword', 'Confirm Password', 'trim|required|min_length[8]|matches[pword]');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
  
      if($this->form_validation->run()){
          $pdata=array(
              'passenger_id' => '', 
              'fname'        => $this->input->post('fname'),
              'uname'        => $this->input->post('uname'),   
              'dob'          => $this->input->post('dob'),
              'gender'       => $this->input->post('gender'),
              'mobile'       => $this->input->post('mobile'),
              'city'         => $this->input->post('city'),
              'email'        => $this->input->post('email'),
              'pword'        => sha1($this->input->post('pword')),
              'confirmpword' => sha1($this->input->post('confirmpword'))
          );
          $this->load->model('user_model');
          $dbId = $this->user_model->user_validate($pdata); 
  
        if($dbId)
        {   
            $pdata['passenger_id'] = $dbId;
            $this->session->set_userdata($pdata);
            $this->session->set_flashdata('message','You have successfully registered to SMS TravelBook... ');
            redirect('user/dashboard');
        } 
        else{
            $this->session->set_flashdata('message','Sorry failed to register');
            redirect('home/register');
        }
    }
    else{
            $this->newregister();
        }
    }
    
    public function reg_logout()
    {   
        $this->session->unset_userdata("passenger_id");
        return redirect('home');
       
    }
    public function ulogin()
        {
            if($this->session->userdata("passenger_id"))
            return redirect("user/dashboard");
            $this->load->view('userlogin');
            
        }
    
    public function Uslogin()
    {       
        $this->form_validation->set_rules('uname', 'Username', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('pword', 'Password', 'trim|required|min_length[8]'); 
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if($this->form_validation->run())
        {
            $uname=$this->input->post('uname');
            $pword=sha1($this->input->post('pword'));
            $this->load->model('user_model');
            $checkuser=$this->user_model->user_validation($uname,$pword);
            //print_r($checkuser);
            if($checkuser)
            { 
                
                $pdata=[
                    'passenger_id'=>$checkuser->passenger_id,
                    'uname'=>$checkuser->uname,
                    'fname'=>$checkuser->fname
                ];
                $this->session->set_userdata($pdata);
                $this->session->set_flashdata('message','You have successfully logged into SMS TravelBook... ');
                //validate user login admin
                
                return redirect('user/dashboard');
            }else{
                //failed
                $this->session->set_flashdata('Login_failed','Invalid Username or Password !!!!');
                return redirect('home/uslogin');
            }
        } 
    
        else{           
          $this->ulogin();
        }
    
            
    }
    public function ulogout()
    {   
        $this->session->unset_userdata("passenger_id");
        return redirect("home");
       
    }
    public function contact()
    {
        $this->load->view('contactus');
    } 
    public function contactus()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[30]|trim|alpha_numeric_spaces');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|max_length[10]|min_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); 
        $this->form_validation->set_rules('feedback', 'Feedback', 'required|min_length[10]|max_length[1000]|trim');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if($this->form_validation->run()){
            $this->load->model('user_model');
            $feedback=array(
                'name'=>$this->input->post('name'),
                'mobile'=>$this->input->post('mobile'),
                'email'=>$this->input->post('email'), 
                'feedback'=>$this->input->post('feedback')
            );
            if($this->user_model->send_feedback($feedback)){
                $this->session->set_userdata($feedback);
                $this->session->set_flashdata('contact','Feedback Sent successfully... ');
                return redirect('home/contactus');
            }
            else{
                $this->session->set_flashdata('message','Failed to send your feedback... ');
                return redirect('home/contactus');
            }
        }
        else{
                $this->contact();
            }
    
    }
    public function booking_status()
    {
        $this->load->model('user_model');
        $this->load->view('booking_status');
    }
    public function display_bookings()
    {   
        $this->form_validation->set_rules('booking_id', 'Booking ID', 'required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if($this->form_validation->run()){
            $this->load->model('user_model');
            $booking_id=$this->input->post('booking_id');
            $status=$this->user_model->booking_status($booking_id);
            if($status)
            {
                $this->load->view('display_bookings',['display'=>$status]);
            }
        else{
            $this->load->view('display_bookings',['display'=>$status]);
        }
    }
    else{
            $this->booking_status();
      }
    
    }


}