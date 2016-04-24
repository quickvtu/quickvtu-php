<? 
/* IMPORTANT WARNING! - Do not reveal your API key. */
/* IMPORTANT WARNING! - You must use the new nonce in making the next API call */
/* IMPORTANT WARNING! - All responses are in JSON format. */


// This file shows how you can purchase airtime via the api using CURL

  $service_url = 'http://quickvtu.com/api/v1/';
       $curl = curl_init($service_url);

       $curl_post_data = array
(
        'amount' => $amount, ///// amount customer wants to purchase
        'apiKey' => 'enter your API key', ////// your secret API key
        'merchantId' => 'enter your merchant ID', ///// your merchant ID
        'nonce' =>  'RGp7LJZ=OnY+jy', ////////// new after every transaction, store it on your server
        'recipientMobile' => $mobilePhone ////////must be a valid MTN number, other networks will be added soon
      
);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
       $curl_response = curl_exec($curl);
       curl_close($curl);


echo $curl_response;  ///////////////// you decide what you do with the json response
