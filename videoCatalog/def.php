<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 14.05.18
 * Time: 21:35
 */

require 'vendor/autoload.php';

use Madcoda\Youtube\Youtube;


$youtube = new Youtube(array('key' => 'AIzaSyAkfKQLoHZHpfhu20alvHt0gwkJ4FPNbtg'));
$video = $youtube->getVideoInfo('rie-hPVJ7Sw');
//$channelById = $youtube->getPlaylistItemsByPlaylistId('PLuBu40P6jUCZtTMNc8Pd_AHun5AjGmOKK');
//$resultsearch =$youtube->searchVideos("happy");
//return var_dump($resultsearch);


//$channelByName = $youtube->getChannelByName('xdadevelopers');
//$a = $channelById;
//$video = $youtube->getVideoInfo('rie-hPVJ7Sw');
//$title = $video->snippet->title;
//$url = $video->snippet->embedHtml;
//$img = $video->snippet->thumbnails->high;

//$a = $channelById[2]->snippet->resourceId->videoId;
//
//foreach ($channelById as $value){
//
//    $curVideo = $value->snippet->resourceId->videoId;
//// var_dump($value);
//    var_dump($curVideo);
//
//}

//var_dump($channelById->snippet);

// return var_dump($channelByName->snippet);
//return var_dump($a);

 return var_dump($video);