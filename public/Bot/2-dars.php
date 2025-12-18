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
    if (!curl_error($curl)) return json_decode($res, true);

}
//dump(bot("getMe",[]));

//$hi_text = "Salom, bot ishlamoqda!";
//
//dump(bot('sendMessage', [
//    'chat_id' => "1260351935",
//    'text' => $hi_text,
//    'parse_mode' => "HTML"
//]));

//3-dars matnlari -----------------------------------------------------------------------------------------------------

$mess_text = "
<b>To'yintirilgan matn bold</b>
<i>Yotiq yozuv italic</i>
<u>Ostki chiziqli matn underline</u>
<s>Inkor qilingan matn strikethrough</s>
<span class=\"tg-spoiler\">Yashirin matn spoiler</span>
<code>Ko'chirib olish mumkin bo'lgan matn</code>
<a href=\"https://ilm-foyda.uz\">Biriktirilgan havola</a>
<pre>Ko'rsatmalar yoki codelar uchun maxsus formatlash</pre>
";

dump(bot('sendMessage', [
    'chat_id' => "1260351935",
    'text' => $mess_text,
    'parse_mode' => "HTML",
]));

