<?php
/**
 * Created by PhpStorm.
 * User: 运营部
 * Date: 2018/7/12
 * Time: 17:05
 *
 *
 *                      _ooOoo_
 *                     o8888888o
 *                     88" . "88
 *                     (| ^_^ |)
 *                     O\  =  /O
 *                  ____/`---'\____
 *                .'  \\|     |//  `.
 *               /  \\|||  :  |||//  \
 *              /  _||||| -:- |||||-  \
 *              |   | \\\  -  /// |   |
 *              | \_|  ''\---/''  |   |
 *              \  .-\__  `-`  ___/-. /
 *            ___`. .'  /--.--\  `. . ___
 *          ."" '<  `.___\_<|>_/___.'  >'"".
 *        | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *        \  \ `-.   \_ __\ /__ _/   .-` /  /
 *  ========`-.____`-.___\_____/___.-`____.-'========
 *                       `=---='
 *  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 *           佛祖保佑       永无BUG     永不修改
 *
 */

use pf\face\PFace;

require './vendor/autoload.php';

$file = "fc.jpeg";
if ($fp = fopen($file, "rb", 0)) {
    $gambar = fread($fp, filesize($file));
    fclose($fp);
    $base64 = chunk_split(base64_encode($gambar));
    // 输出
}
$arr = [
    'image_base64' => $base64,
    'return_landmark' => 1,
    'return_attributes'=>'age,gender'
];
$face_info = json_decode(PFace::detect($arr),true);
$face_coordinate = $face_info['data'];
dd($face_coordinate);
