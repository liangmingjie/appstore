<?php

namespace App;

use Curl\Curl;
use Illuminate\Database\Eloquent\Model;

class AppInfo extends Model
{
    /**
     * @param $id
     * @internal param $email
     */
    public static function getAppInfo($id)
    {
        $host = env('DINGDONE_APP_SERVICE_HOST');
        $appid = env('DINGDONE_APP_SERVICE_APP_ID');
        $appkey= env('DINGDONE_APP_SERVICE_APP_KEY');
        $url = $host.'/app_plant/app.php?a=detail';

        $curl = new Curl();
        $curl->post($url, array('id' => $id, 'appid' => $appid, 'appkey' => $appkey, 'flag' => 1));
        $result = json_decode($curl->response);

        return $result[0];
    }
}
