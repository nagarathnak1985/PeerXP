<?php 

function insert_data() {
        $url = 'https://desk.zoho.com/api/v1/tickets';
        $access_token  = "1000.8c0e8f71a016e6a90b51a17eaec2861e.41b42c622e976f056f5b49b9ad191a3e";
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
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);       
        $result = json_encode($result);
        var_dump($result);
        curl_close($ch);
       // return $result;
    }
    insert_data();
    
?>