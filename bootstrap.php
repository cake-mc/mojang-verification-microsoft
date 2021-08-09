<?php

use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;
use App\Services\Hook

/**

 * 发送post请求

 * @param string $url 请求地址

 * @param array $post_data post键值对数据

 * @return string

 */

function get_url() {
    $url='https://login.live.com/oauth20_authorize.srf?client_id=00000000402b5328&response_type=code&scope=service%3A%3Auser.auth.xboxlive.com%3A%3AMBI_SSL&redirect_uri=https%3A%2F%2Flogin.live.com%2Foauth20_desktop.srf';

    $html= file_get_contents($url);

    return $html;
}

function send_post($url, $post_data) {

   

  $postdata = http_build_query($post_data);

  $options = array(

    'http' => array(

      'method' => 'POST',

      'header' => 'Content-type:application/x-www-form-urlencoded',

      'content' => $postdata,

      'timeout' => 5 * 60 // 超时时间（单位:s）

    )

  );

  $context = stream_context_create($options);

  $result = file_get_contents($url, false, $context);

   

  return $result;

}

   $mic = get_url
 
//使用方法

$post_data = array(
    
    

);

send_post('https://user.auth.xboxlive.com/user/authenticate', $post_data);

return function (Dispatcher $events, Filter $filter) {
    //
};
