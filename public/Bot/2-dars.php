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
To'yintirilgan matn bold*\n
_Yotiq yozuv italic_\n
__Ostki chiziqli matn underline__\n
~Inkor qilingan matn strikethrough~\n
||Yashirin matn spoiler||\n
`Ko'chirib olish mumkin bo'lgan matn code`\n
[Biriktirilgan havola inline link](https://ilm-foyda.uz)\n
```
Ko'rsatmalar yoki codelar uchun maxsus formatlash turidagi matn .... Loren minsin yana bir nimalar
```
";

echo bot('sendMessage', [
    'chat_id' => "1260351935",
    'text' => $mess_text,
    'parse_mode' => "MarkdownV2",
]);
