<? 
/* IMPORTANT WARNING! - Do not reveal your API key. */
/* IMPORTANT WARNING! - Transaction Reference Must the 9 digit number associated with the airtime purchase */
/* IMPORTANT WARNING! - All responses are in JSON format. */
// This file shows how you can purchase airtime via the api using CURL
  $service_url = 'http://quickvtu.com/api/v1/status';
       $curl = curl_init($service_url);
       $curl_post_data = array
(
        'apiKey' => 'enter your API key', ////// your secret API key
        'merchantId' => 'enter your merchant ID', ///// your merchant ID
        'TransactionReference =>  '9 digit number', ////////// returned after every transaction      
);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
       $curl_response = curl_exec($curl);
       curl_close($curl);
echo $curl_response;  ///////////////// you decide what you do with the json response
