<?php 
class Admin extends MY_Controller
{       
    public function dashboard()
    {
        $this->load->model('admin_model');
        $alltrains=$this->admin_model->viewtrains();
        $this->load->view('admins/adminpanel',['alltrains'=>$alltrains]);
    }
    public function addtrain()
    {       
        
        $this->form_validation->set_rules('origin', 'Origin', 'required');
        $this->form_validation->set_rules('destination', 'Destination', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('arrivaltime', 'ArrivalTime', 'required');
        $this->form_validation->set_rules('departuretime', 'DepartureTime', 'required');
        $this->form_validation->set_rules('class', 'Class', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
			
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
        if($this->form_validation->run()){
            $data=$this->input->post();
            $this->load->model('admin_model');
            if($this->admin_model->newtrain($data)){
                $this->session->set_flashdata('message','Train added successfully');
                    return redirect('admin/addtrain');
            }else{
                $this->session->set_flashdata('message','Failed to Add Train');
                    return redirect('admin/addtrain');}
        }else{
            $this->createtrain();
        }
    }
    public function createtrain()
    {
        $this->load->model('admin_model');
        $odetails=$this->admin_model->getorigin();
        $ddetails=$this->admin_model->getdestination();
        $this->load->view('admins/addtrain',['odetails'=>$odetails,'ddetails'=>$ddetails]   );
    }
    public function edittrain($train_id)
    {
        $this->load->model('admin_model');
        $odetails=$this->admin_model->getorigin();
        $ddetails=$this->admin_model->getdestination();
        $traindata=$this->admin_model->geteditingtrain($train_id);
        $this->load->view('admins/edittrain',['odetails'=>$odetails,'ddetails'=>$ddetails,'traindata'=> $traindata]);
    }
    public function modifytrain($train_id)
    {
        $this->load->model('admin_model');
        $this->form_validation->set_rules('origin', 'Origin', 'required');
        $this->form_validation->set_rules('destination', 'Destination', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('arrivaltime', 'ArrivalTime', 'required');
        $this->form_validation->set_rules('departuretime', 'DepartureTime', 'required');
        $this->form_validation->set_rules('class', 'Class', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
			
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if($this->form_validation->run()){
            $data=$this->input->post();
            $this->load->model('admin_model');
            if($this->admin_model->updatetrain($data,$train_id)){
                $this->session->set_flashdata('message','Train details updated successfully');
                
            }
            else{
                $this->session->set_flashdata('message','Failed to update Train');
                  }return redirect("admin/edittrain/{$train_id}");
        }else{
            $this->edittrain($train_id);
        }
    }
    public function deletetrain($train_id)
    {
        $this->load->model('admin_model');
        if($this->admin_model->removetrain($train_id))
        {
            $this->session->set_flashdata('message','Train Details deleted successfully');
            return redirect("admin/dashboard");
        }
        
    }
   
    public function addstation()
    {
        $this->load->model('admin_model');
        $this->load->view('admins/addstation');
    }
    public function addorigin()
    {
        
        $this->form_validation->set_rules('origin', 'Origin', 'required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
        if($this->form_validation->run())
        {
            $addorigin=$this->input->post();
            $this->load->model('admin_model');
            if($this->admin_model->add_origin($addorigin))
            {
                
                $this->session->set_flashdata('message','Origin Station added successfully');
                return redirect('admin/addorigin');
            }
            else{
                $this->session->set_flashdata('message','Failed to add Origin Station');
                return redirect('admin/addorigin');
            }
        }
        else{
            $this->addstation();
        }
    }
    public function adddestination()
    {
        
        $this->form_validation->set_rules('destination', 'Destination', 'required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
        if($this->form_validation->run())
        {
            $adddestination=$this->input->post();
            $this->load->model('admin_model');
            if($this->admin_model->add_destination($adddestination))
            {
                
                $this->session->set_flashdata('message','Destination Station added successfully');
                return redirect('admin/adddestination');
            }
            else{
                $this->session->set_flashdata('message','Failed to add Destination Station');
                return redirect('admin/adddestination');
            }
        }
        else{
            $this->addstation();
        }
    }
    public function reserved()
    {
        $this->load->model('admin_model');
        $booked=$this->admin_model->booked();
        $this->load->view('admins/reserved',['booked'=>$booked]);
    }
    public function cancel_ticket($booking_id)
    {
        $this->load->model('admin_model');
        if($this->admin_model->ticket_cancel($booking_id))
        {
            $this->session->set_flashdata('message','Ticket Cancelled successfully');
            return redirect("admin/reserved");
        }
    }
    public function userdetails()
    {
        $this->load->model('admin_model');
        $allusers=$this->admin_model->userdetails();
        $this->load->view('admins/userdetails',['allusers'=>$allusers]);
    }
    public function deleteuser($passenger_id)
    {
        $this->load->model('admin_model');
        if($this->admin_model->removeuser($passenger_id))
        {
            $this->session->set_flashdata('message','User Account deleted successfully');
            return redirect("admin/userdetails");
        }
    }
    public function feedback()
    {
        $this->load->model('admin_model');
        $fback=$this->admin_model->feedback();
        $this->load->view('admins/feedback',['fback'=>$fback]);
    }
   
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata("user_id"))
        return redirect("home/adminlogin");

    }
  
}