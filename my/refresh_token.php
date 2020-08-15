<?php 

function get_refresh_token() {
        $url = 'https://accounts.zoho.com/oauth/v2/token';
        // $url = 'https://desk.zoho.com/api/v1/tickets';
        $post = [
			'code'			=>'1000.57a241c33915df28ec30f03422ea0641.9b8df9086b64ed05481c28adae6f2f70',
			'redirect_url'  =>'http://example.com',
			'client_id'		=>'1000.YXUPK59Y7FB6IYWT3GH82N3HS45AJC',
			'client_secret' =>'9054bd6cb317a96f905b53d40d482b426e35a3578a', 
			'grant_type'	=>'authorization_code',
		];
       
        $headers = array
        (
          'Content-Type: application/x-www-form-urlencoded'
        );
                   
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);       
        $result = json_encode($result);
        var_dump($result);
        curl_close($ch);
       // return $result;
    }
    get_refresh_token();
?>