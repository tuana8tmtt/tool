<?php
class Schedule_fetch extends CI_Model 
{
   /*View*/
	function display_records()
	{
    $time = time();
    // $query=$this->db->query("SELECT MAX(cron) AS cron FROM schedule  ");
    
    // $cron = $query->result();
    // $cron_time = 
	$query2 =$this->db->query("select * from schedule WHERE time < '$time' and cron = '' LIMIT 1  ");
	return $query2->result();
	}
	
} 