<?php 
class user_model extends CI_Model{
   
    public function user_validate($pdata)
    {
        return ($this->db->insert('passengers', $pdata)) ? $this->db->insert_id() : false; // return insert_id if successful else return false
    }
    public function user_validation($uname,$pword)
    {
       $checkuser=$this->db->where(array('uname'=>$uname,'pword'=>$pword))
                        ->get('passengers');
       if($checkuser->num_rows()>0){
           return $checkuser->row();
       }
                     
    }
    public function send_feedback($feedback)
    {
        return $this->db->insert('feedback',$feedback);
    }
    public function update_userdata($passenger_id,$data)
    {
        $this->db->set($data);
        $this->db->where('passenger_id',$passenger_id);
        $this->db->update('passengers');
        if($this->db->affected_rows()>0)
        return true;
        else
        return false;
    }
    public function checkoldpword($passenger_id,$old_password)
    {
        $this->db->where('passenger_id',$passenger_id);
        $this->db->where('pword',$old_password);
        $query=$this->db->get('passengers');
        if($query->num_rows()>0){
            return true;
          }  else{
            return false;
        }
    } 
    public function fetchMyRecords($passenger_id)
    {   
        if($passenger_id)
        {   
            $mybookings="SELECT * FROM booked WHERE passenger_id=?";
            $query=$this->db->query($mybookings,array($passenger_id));
            $result=$query->result_array();
            return $result;
        }
    }
    public function fetchdata($passenger_id = null)
    {   
        if($passenger_id)
        {   
            
            $data="SELECT * FROM passengers WHERE passenger_id=?";
            $query=$this->db->query($data,array($passenger_id));
            $result=$query->row_array();
            return $result;
        }
    }
    public function getorigin()
    {
        $odetails=$this->db->get('origin');
        if($odetails->num_rows()>0){
            return $odetails->result();
        }
    }
    public function getdestination()
    {
        $ddetails=$this->db->get('destination');
        if($ddetails->num_rows()>0){
            return $ddetails->result();
        }
    }
    
    public function strain($or_name,$dest_name,$date)
    {
        //$keyword=$this->input->post('keyword');
        $this->db->like(array('origin'=>$or_name,'destination'=>$dest_name,'date'=>$date));
        $this->db->order_by('train_id ASC');
        return $this->db->get('trains')->result();
    }
    public function get_book_details($train_id)
    {
        $this->db->select('*');
        $this->db->from('trains');
        $this->db->where(['trains.train_id'=>$train_id]);
        $showtrain=$this->db->get();
        return $showtrain->row();
    }
   
    public function reserve($data,$train_id)
    {
        return $this->db->insert('booked',$data);
    }
   
    public function fetch_ticket($passenger_id = null)
    {   
        if($passenger_id)
        {   
            $ticket="SELECT * FROM booked ORDER By booking_id desc";
            $query=$this->db->query($ticket,array($passenger_id));
            $result=$query->row_array();
            return $result;
        }
    }
    public function booking_status($booking_id)
    {
        $this->db->select('*');
        $this->db->where(['booking_id'=>$booking_id]);
        return $this->db->get('booked')->result();
    } 
    public function ticket_cancel($booking_id)
    {
        return $this->db->delete('booked',['booking_id'=>$booking_id]);
    }
   
}

