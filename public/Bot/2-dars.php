<?php
date_default_timezone_set('Asia/Tashkent');
define('API_KEY', '8139754723:AAHFMe35W_mljXkNZ0RZKpLP0n41EFR9YIk');

function dump($what)
{
    echo '<pre>';
    print_r($what);
    echo '</pre>';
};

function bot($method, $params = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => http_build_query($params),
    ]);

    $res = curl_exec($curl);
    curl_close($curl);
    if (!curl_eror($curl)) return json_decode($res, true);

}
dump(bot("getMe",[]));

;


