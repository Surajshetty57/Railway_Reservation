<?php
class User extends MY_Controller
{
    public function dashboard()
    {
       $this->load->view('userhome');
    }
    public function mydetails()
    {
        $this->load->model('user_model');
        $data=$this->user_model->fetchdata($this->session->userdata('passenger_id'));
        $this->load->view('mydetails',['data'=>$data]);
    }
    public function mybookings()
    {
        $this->load->model('user_model');
        $result=$this->user_model->fetchMyRecords($this->session->userdata('passenger_id'));
        $this->load->view('mybooking',['result'=>$result]);    
    }
    public function cpword()
    {
        $this->load->view('changepassword');
    }
    public function changepassword()
    {
        $this->form_validation->set_rules('psword', 'Current Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('npword', 'New Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirmnpword', 'Confirm New Password', 'trim|required|min_length[5]|alpha_numeric|matches[npword]');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if($this->form_validation->run()){
            
            $data=array(
                'pword'=>sha1($this->input->post('npword'))
            );
            $this->load->model('user_model');

            //print_r($data);exit();
            $result=$this->user_model->checkoldpword($this->session->userdata('passenger_id'),sha1($this->input->post('psword')));
           // var_dump($result);
            if($result >0 AND $result==true){
                $result=$this->user_model->update_userdata($this->session->userdata('passenger_id'),$data);
                if($result>0)
                {
                    $this->session->set_flashdata('messagec','Password Changed Successfully');
                      return redirect('user/changepassword');
                }else{
                    $this->session->set_flashdata('mesage','Failed to Update Password!! Try again');
                     return redirect('user/changepassword');
                }
            }else{
                $this->session->set_flashdata('mesage','Old Password is not Correct!! Try again');
                 return redirect('user/changepassword');
            }
        }
        else{
                $this->cpword(); 
            }
        
    }
    public function booknow()
    {
        $this->load->model('user_model');
        $odetails=$this->user_model->getorigin();
        $ddetails=$this->user_model->getdestination();
        $this->load->view('book',['odetails'=>$odetails,'ddetails'=>$ddetails]);
    }
    public function availabletrains()
    {
        $this->form_validation->set_rules('origin', 'Origin', 'required');
        $this->form_validation->set_rules('destination', 'Destination', 'required');
        $this->form_validation->set_rules('date', 'date', 'required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if($this->form_validation->run()){
            $this->load->model('user_model');
            $or_name=$this->input->post('origin');
            $dest_name=$this->input->post('destination');
            $date=$this->input->post('date');
            $res=$this->user_model->strain($or_name,$dest_name,$date);
            if($res)
            {
                $this->load->view('available_trains',['showtrain'=>$res]);
            }
            else{
                $this->load->view('available_trains',['showtrain'=>$res]);
            }
            
        }else{
            $this->booknow();
        }
    }
    public function reserve($train_id)
    {
        $this->load->model('user_model');
        $odetails=$this->user_model->getorigin();
        $ddetails=$this->user_model->getdestination();
        $showtrain=$this->user_model->get_book_details($train_id);
        $data=$this->user_model->fetchdata($this->session->userdata('passenger_id'));
        $this->load->view('bookingdetails',['showtrain'=> $showtrain,'odetails'=>$odetails,'ddetails'=>$ddetails,'data'=>$data]);    
    }
    public function reserve_train($train_id)
    {
        $this->load->model('user_model');
        $this->form_validation->set_rules('passenger_id', 'Passenger ID', 'required');
        $this->form_validation->set_rules('booked_by', 'Booked by', 'required');
        $this->form_validation->set_rules('pname[]', 'Passenger Name', 'required');
        $this->form_validation->set_rules('age[]', 'Age', 'required');
        $this->form_validation->set_rules('gender[]', 'Gender', 'required');
        $this->form_validation->set_rules('train_id', 'Train ID', 'required');
        $this->form_validation->set_rules('origin', 'Origin', 'required');
        $this->form_validation->set_rules('destination', 'Destination', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('arrivaltime', 'ArrivalTime', 'required');
        $this->form_validation->set_rules('departuretime', 'DepartureTime', 'required');
        $this->form_validation->set_rules('class', 'Class', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('pass_no', 'No.of Passengers', 'required|max_length[1]');
        $this->form_validation->set_rules('tamount', 'Total Amount', 'required');
        $this->form_validation->set_rules('cardno', 'Card Number', 'required|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('noc', 'Name on card', 'required|trim|alpha_numeric_spaces');
        $this->form_validation->set_rules('month', 'Month', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('cardtype', 'Card Type', 'required');
        $this->form_validation->set_rules('cvv', 'CVV', 'required|min_length[3]|max_length[3]');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        $data=$this->user_model->fetchdata($this->session->userdata('passenger_id'));
        if($this->form_validation->run()){
            $pname=implode(" , ", $this->input->post('pname[]'));
            $age=implode(" , ", $this->input->post('age[]'));
            $gender=implode(" , ", $this->input->post('gender[]'));
            $data= array(
                'booking_id'=>$this->input->post('booking_id'),
                'passenger_id'=>$this->input->post('passenger_id'),
                'booked_by'=>$this->input->post('booked_by'),
                'pname'=> $pname ,
                'age'=>$age ,
                'gender'=> $gender,
                'train_id'=>$this->input->post('train_id'),
                'origin'=>$this->input->post('origin'),
                'destination'=>$this->input->post('destination'),
                'date'=>$this->input->post('date'),
                'arrivaltime'=>$this->input->post('arrivaltime'),
                'departuretime'=>$this->input->post('departuretime'),
                'class'=>$this->input->post('class'),
                'price'=>$this->input->post('price'),
                'pass_no'=>$this->input->post('pass_no'),
                'tamount'=>$this->input->post('tamount'),
                'cardno'=>$this->input->post('cardno'),
                'noc'=>$this->input->post('noc'),
                'month'=>$this->input->post('month'),
                'year'=>$this->input->post('year'),
                'cardtype'=>$this->input->post('cardtype'),
                'cvv'=>$this->input->post('cvv')
            );
            $this->load->model('user_model');
            if($this->user_model->reserve($data,$train_id)){
                $a=array(
                    'booking_id'=>$this->input->post('booking_id'),
                    'noc'=>$this->input->post('noc'),
                    'month'=>$this->input->post('month'),
                    'year'=>$this->input->post('year'),
                    'cardtype'=>$this->input->post('cardtype'),
                    'cvv'=>$this->input->post('cvv')
                );
                $this->session->set_userdata($a);
                $this->session->set_flashdata('message','Train booked successfully');
                return redirect("user/ticket");
            }
            else{
                $this->session->set_flashdata('message','Failed to Book Train');
                  return redirect("user/reserve/{$train_id}");
                }
        }else{
            $this->reserve($train_id);
        }
    
    }
    public function ticket($passenger_id=0)
    {
        $this->load->model('user_model');
        $ticket=$this->user_model->fetch_ticket($this->session->userdata('passenger_id'));
        $this->load->view('ticket',['ticket'=>$ticket]);
    }
    public function cancel_ticket($booking_id)
    {
        $this->load->model('user_model');
        if($this->user_model->ticket_cancel($booking_id))
        {
            $this->session->set_flashdata('bookmessage','Ticket Cancelled successfully');
            return redirect("user/mybookings");
        }
    }
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata("passenger_id"))
        return redirect("home");

    }
  
}