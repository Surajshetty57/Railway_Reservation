<?php
class admin_model extends CI_model{  

    
    public function admin_validate($username,$password)
    {
        $q=$this->db->where(['username'=>$username,'password'=>$password])
                        ->get('admin');

        if($q->num_rows()){
            return $q->row();
           // return TRUE;
        }else{
            return False;
        }
    }
    public function getorigin()
    {
        $ddetails=$this->db->get('origin');
        if($ddetails->num_rows()>0){
            return $ddetails->result();
        }
    }
    public function getdestination()
    {
        $ddetails=$this->db->get('destination');
        if($ddetails->num_rows()>0){
            return $ddetails->result();
        }
    }
    public function newtrain($data)
    {
        return $this->db->insert('trains',$data);
        
    }
    public function updatetrain($data,$train_id)
    {
        return $this->db->where('train_id',$train_id)
                        ->update('trains',$data);
    }
    public function viewtrains()
    {
        $this->db->select('*');
        $this->db->from('trains');
        $alltrains=$this->db->get();
        return $alltrains->result();
    }
    public function add_origin($addorigin)
    {
        return $this->db->insert("origin",$addorigin);
    }
    public function add_destination($adddestination)
    {
        return $this->db->insert("destination",$adddestination);
    }
    public function userdetails()
    {
        $this->db->select('*');
        $this->db->from('passengers');
        $allusers=$this->db->get();
        return $allusers->result();
    }
    public function geteditingtrain($train_id)
    {
        $this->db->select('*');
        $this->db->from('trains');
        $this->db->where(['trains.train_id'=>$train_id]);
        $alltrain=$this->db->get();
        return $alltrain->row();
    }
    public function removetrain($train_id)
    {
        return $this->db->delete('trains',['train_id'=>$train_id]);
    }
    public function ticket_cancel($booking_id)
    {
        return $this->db->delete('booked',['booking_id'=>$booking_id]);
    }
    public function removeuser($passenger_id)
    {
        return $this->db->delete('passengers',['passenger_id'=>$passenger_id]);
    }
    public function booked()
    {
        $this->db->select('*');
        $this->db->from('booked');
        $booked=$this->db->get();
        return $booked->result();
    }
    public function feedback()
    {
        $this->db->select('*');
        $this->db->from('feedback');
        $fback=$this->db->get();
        return $fback->result();
    }  
}
?>





