<?php 
function create_ticket_in_Zoho($post_data , $name, $email) {
        $url = 'https://desk.zoho.com/api/v1/tickets';
        $access_token  = "1000.6400dffd983ccc13f06be06d18d4f540.091c840569eca9db6a2525bea0f6794f";
        
        $cf = array("contact" =>array("firstName"=>$name, "email"=>$email));        
        $post_data = array_merge($cf, $post_data);
        $fields = json_encode($post_data);
       // echo "<pre>";print_r($fields);die;
        $headers = array
        (
           'Authorization:Zoho-oauthtoken '.$access_token ,
           'orgId : 721801542',
           'Content-Type: application/json;charset=UTF-8'
        );
                   
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);       
        curl_close($ch);
        return $result;
    }
   
   function get_tickets_from_zoho() {
        $url = 'https://desk.zoho.com/api/v1/tickets';
        $access_token  = "1000.400cfca622410f3834384875dc21fdf6.0420ff802fc8228d53310cf911fa5bb7";
        $headers = array
        (
           'Authorization:Zoho-oauthtoken '.$access_token ,
           'orgId : 721801542',
           'Content-Type: application/json;charset=UTF-8'
        );

       // $get  = array('id' => "523116000000159181" );
                   
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
?>