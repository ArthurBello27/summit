<?php
class process extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function get_categories()
    {
        return $this->db->get('categories');
    }

    function get_item($id)
    {
        return $this->db->query('SELECT * FROM products WHERE id ='. $id);
    }

    function cart()
    {
        $query = $this->db->query('SELECT SUM(quantity) as quantity, products.name, products.description, products.price, products_id, cart.id  FROM cart LEFT JOIN products on products.id = products_id WHERE customers_id='.$this->session->userdata('id').'
 GROUP BY products.id; ');
        
        return $query;
        
    }

    function get_item_category($category_id)
    {

        return $this->db->query('SELECT * FROM categories WHERE id ='. $category_id);
    }

    function add_cart($thepost)
    {

        $query = $this->db->query('SELECT * FROM cart');
        foreach ($query->result() as $item){
            if ($item->products_id == $thepost["id"]) {
                $total =(int)$item->quantity + (int)$thepost['quantity'];
//              $this->db->query('UPDATE cart SET quantity='.$item['quantity'] + $thepost['new_quantity'].' WHERE id ='.$thepost['id'])
                $this->db->query('UPDATE cart SET quantity='.$total.' WHERE products_id ='.$thepost['id']);
                return;
            }
        }
        $this->db->query('INSERT INTO cart (products_id, customers_id, quantity) VALUES ('.$thepost["id"].', '.$this->session->userdata('id').' ,'.$thepost["quantity"].')');
        
        
    }

    function update($thepost)
    {
        if ($thepost['new_quantity'] == 0) {
            $this->db->query('DELETE FROM cart WHERE id ='.$thepost['id']);
        }
        else {
            $query = $this->db->query('UPDATE cart SET quantity='.$thepost['new_quantity'].' WHERE id ='.$thepost['id']);
        }
    }

    function get_products()
    {
        return $this->db->get('products');
    }
    
    function compare_login($thepost)
    {
        $query = $this->db->query('SELECT * FROM customers');
        foreach ($query->result() as $user) {
            if ($thepost['email'] != $user->email || md5($thepost['password']) != $user->password){
                $this->session->set_flashdata('login_error', 'Email/password is incorrect');
            }
            
            else {
                $this->session->set_userdata('id',  $user->id);
                $this->session->set_userdata('email',  $user->email);
                $this->session->set_userdata('first_name',  $user->first_name);
                $this->session->set_userdata('last_name',  $user->last_name);
                
            }
        };
        
    }
    
    function compare_registration($thepost)
    {
        $errors = array();
        $query = $this->db->query('SELECT * FROM customers');
            foreach ($query->result() as $user) {
                if ($thepost['email'] == $user->email){
                    $errors[] = 'Email already exists';
                    
                };
                
                if (md5($thepost['password']) == $user->password){
                    $errors[] = 'Password already exists';
                    
                }
            }
            $this->session->set_flashdata('registration_error', $errors);
            if (count($errors) > 0) {
                return;
            }
        
            $this->db->query('INSERT INTO customers (email, password, first_name, last_name, created_at) VALUES ("'.$thepost['email'].'", "'.md5($thepost['password']).'", "'.ucfirst($thepost['first_name']).'", "'.ucfirst($thepost['last_name']).'", NOW())');
            $this->session->set_flashdata('success', 'You have successfully registered');
        
        
    }
    
    
}

?>