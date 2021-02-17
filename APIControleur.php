<?php
function getUSD()
{
    if (isset($_POST['dt'])) {
        $url = "https://api.ratesapi.io/api/".$_POST['dt']."?base=CAD&symbols=USD";
        $result = CallAPI($url);
    }
    else{
        $url = "https://api.ratesapi.io/api/latest?base=CAD&symbols=USD";
        $result = CallAPI($url);
    }
    return  $result["rates"]["USD"];
}
//https://help.aais.com/Help/75/php_api_call_example.htm
function CallAPI($url)
{
$curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "cache-control: no-cache",
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);
        return json_decode($response, true);
}

?>