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

$hi_text = "Salom, bot ishlamoqda!";

dump(bot('sendMessage', [
    'chat_id' => "1260351935",
    'text' => $hi_text,
    'parse_mode' => "HTML"
]));

//3-dars matnlari -----------------------------------------------------------------------------------------------------

//$mess_text = "
//<b>To'yintirilgan matn bold</b>
//<i>Yotiq yozuv italic</i>
//<u>Ostki chiziqli matn underline</u>
//<s>Inkor qilingan matn strikethrough</s>
//<span class=\"tg-spoiler\">Yashirin matn spoiler</span>
//<code>Ko'chirib olish mumkin bo'lgan matn</code>
//<a href=\"https://ilm-foyda.uz\">Biriktirilgan havola</a>
//<pre>Ko'rsatmalar yoki codelar uchun maxsus formatlash</pre>
//";
//
//dump(bot('sendMessage', [
//    'chat_id' => "1260351935",
//    'text' => $mess_text,
//    'parse_mode' => "HTML",
//]));

//echo bot('sendMessage',[
//    'chat_id' => "1260351935",
//    'text' => "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
//]);


//echo bot('sendMessage',[
//    'chat_id' => "1260351935",
//    'text' => "Bu inline reply markup",
//    'disable_web_page_preview' => true,
//    'reply_markup' => json_encode([
//        'inline_keyboard' => [
//            [['text'=>"textbtn1",'callback_data'=>"btn1"], ['text'=>"textbtn2",'callback_data'=>"btn2"],['text'=>"textbtn3",'callback_data'=>"btn3"]],
//            [['text'=>"Saytga havola", 'url'=> 'https://uzkti.uz']],
//            [['text'=>"Videoni kurish", 'url'=> 'https://www.youtube.com/watch?v=dQw4w9WgXcQ']],
//            [['text'=>"Mehriddin",'url'=>'tg://user?id=1260351935']],
//            [['text'=>"Kanalga havola", 'url'=>'https://t.me/Mehriddin_music']],
//            [['text'=>"Share tugmasi",'url'=>'https://t.me/share/url?url=https://www.youtube.com/watch?v=dQw4w9WgXcQ&text=Mana+shu+videoni+ko\'rda']],
//        ]
//    ])
//]);


//echo bot('sendMessage',[
//    'chat_id' => "1260351935",
//    'text' => "Bu menyu markup",
//    'disable_web_page_preview' => true,
//    'reply_markup' => json_encode([
//        'keyboard' => [
//            [['text' => "text btn1"], ['text' => "text btn2"], ['text' => "text btn3"]],
//
//            ]
//        ])
//]);

//echo bot('sendMessage',[
//    'chat_id'=> "1260351935",
//    'text' => "Karta raqamingizni kiriting:",
//    'disable_web_page_preview' => true,
//    'reply_markup' => json_encode([
//        'force_reply'=>true,
//        'input_field_placeholder'=> "8600 **** **** ****",
//    ])
//]);

// forwardMessage
//echo bot('forwardMessage',[
//    'chat_id'=>"1260351995",
//    'from_chat_id'=>1260351995,
//    'message_id'=>312,
//]);

