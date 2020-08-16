<?php 
function create_ticket_in_Zoho($post_data , $name, $email) {
        $url = 'https://desk.zoho.in/api/v1/tickets';
        $access_token  = "aa8cd2f4d25aa3418e47f953ad9fe323";
        
        $cf = array("contact" =>array("firstName"=>$name, "email"=>$email));        
        $post_data = array_merge($cf, $post_data);
        $fields = json_encode($post_data);
       // echo "<pre>";print_r($fields);die;
        $headers = array
        (
           'Authorization:'.$access_token ,
           'orgId:60001280952',
           'Content-Type: application/json;charset=UTF-8'
        );
                   
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);       
        curl_close($ch);
        return $result;
    }
   
   function get_tickets_from_zoho() {
        $url = 'https://desk.zoho.in/api/v1/tickets';
        $access_token  = "aa8cd2f4d25aa3418e47f953ad9fe323";
        $headers = array
        (
           'Authorization:'.$access_token ,
           'orgId:60001280952',
           'Content-Type: application/json;charset=UTF-8'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);       
        curl_close($ch);
        return $result;
    }
     function get_tickets_from_zoho_of_mine($email) {
        $url = 'https://desk.zoho.in/api/v1/tickets?include=email';
        $access_token  = "aa8cd2f4d25aa3418e47f953ad9fe323";
        $headers = array
        (
           'Authorization:'.$access_token ,
           'orgId:60001280952',
           'Content-Type: application/json;charset=UTF-8'
        );

        $post_data= array('email'=>'nagarathna.php@gmail.com');
                   
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,json_encode($post_data));        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);       
        curl_close($ch);
        return $result;
    }
     function get_ticket_by_Id($ticket_id) {
        $url = "https://desk.zoho.in/api/v1/tickets/".$ticket_id."?include=contacts,products,assignee,departments,team"; 
        $access_token  = "aa8cd2f4d25aa3418e47f953ad9fe323"; 
        $headers = array(
           'Authorization:'.$access_token ,
           'orgId:60001280952'          
        );                       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);  
        curl_close($ch);
        return $result;
    }
?>