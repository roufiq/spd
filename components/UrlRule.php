<?php
/**
 * Created by PhpStorm.
 * User: Moh Roufiq Azmy
 * Date: 4/21/2017
 * Time: 8:30 PM
 */

namespace app\components;
use yii;

class UrlRule  extends yii\web\UrlRule
{
    public $connectionID = 'db';

    public function init()
    {
        if ($this->name === null) {
            $this->name = __CLASS__;
        }
    }

    public function createUrl($manager, $route, $params) {
        $paramString = array();
        foreach ($params as $key => $value) {
            $paramString[] = $key;
            if (is_array($value)) {
                foreach ($value as $key2 => $value2) {
                    $paramString[] = $key2;
                    $paramString[] = $value2;
                }
            }
            else
                $paramString[] = $value;
        }
        //var_dump($paramString);
        if (is_array($paramString))
            $urlString = implode(",", $paramString);
        else
            $urlString = $paramString;
        $paramStringEncoded = $this->encode($urlString);
        return $route . '/' . $paramStringEncoded;
    }



//    public function createUrl($manager, $route, $params)
//    {
//        $args='?';
//        $idx = 0;
//        foreach($params as $num=>$val){
//            if($num=='id'){
//                $val = strtr(base64_encode($val), '+/=', '-_,');
//            }
//            $args .= $num . '=' . $val;
//            $idx++;
//            if($idx!=count($params)) $args .= '&';
//        }
//        $suffix = Yii::$app->urlManager->suffix;
//        if ($args=='?') $args = '';
//        return $route .$suffix. $args;
//        return false;  // this rule does not apply
//    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        $url = $request->getUrl();
        $queryString = parse_url($url);
        if(isset($queryString['query'])){
            $queryString = $queryString['query'];
            $args = [];
            parse_str($queryString, $args);
            $params = [];
            foreach($args as $num=>$val){
                if($num=='id'){
                    $val = base64_decode(strtr($val, '-_,', '+/='));
                }
                $params[$num]=$val;
            }
            $suffix = Yii::$app->urlManager->suffix;
            $route = str_replace($suffix,'',$pathInfo);
            return [$route,$params];
        }
        return false;  // this rule does not apply
    }


}