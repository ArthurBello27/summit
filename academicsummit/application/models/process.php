<?php
class process extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	function register_user($thepost) {
        $this->db->query('INSERT INTO Users (name, email, workshop, school, phone_number) VALUES (\''.$thepost["name"].'\', \''.$thepost["email"].'\', \''.$thepost["workshop"].'\', \''.$thepost["school"].'\', \''.$thepost["number"].'\')');
        return;
		
	}
    function get_gallery()
    {
        return $this->db->query('SELECT * FROM Gallery');

    }
    function get_speakers()
    {
        return $this->db->query('SELECT * FROM Speakers');

    }
    function add_speaker($thepost)
    {
        $this->db->query('INSERT INTO Speakers (name, info, image_link) VALUES (\''.$thepost["name"].'\',\''.$thepost["info"].'\',\''.$thepost["image_link"].'\')');
        return;

    }
    
    function update_gallery($thepost)
    {
        $this->db->query('INSERT INTO Gallery (image_link) VALUES (\''.$thepost["image_link"].'\')');
        return;

    }
    function get_event()
    {
        return $this->db->query('SELECT * FROM Latest_event');

    }
    function update_event($thepost) {
        $this->db->query('UPDATE Latest_event SET latest_event=\''.$thepost["latest_event"].'\', theme=\''.$thepost["theme"].'\', image_link=\''.$thepost["image_link"].'\', event_date=\''.$thepost["event_date"].'\' WHERE id=1');
        return;
        
    }
    
}

?>