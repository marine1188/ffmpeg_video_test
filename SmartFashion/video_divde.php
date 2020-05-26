<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    // 세션 받아는 부분
    session_start();
    $_SESSION['file_info'];
    Print_r($_SESSION);

    // 원하는 프레임 수
    $frames_num = $_POST["frame_input"];
    echo $frames_num;

    echo "<br/>\n";
    Print_r($_SESSION['flie_info']['userfile']['name']);

    // echo $frames_num;
    //전체 프레임수에서 원하는 프레임 수 만큼
    $command_string = "ffmpeg -i /var/www/html/web_csk/SmartFashion/video_file/".$_SESSION['file_info']['userfile']['name']." -an -ss 00:00:00 -qscale 1 -r 1 -vframes $frames_num -y /var/www/html/web_csk/SmartFashion/video_frame/".substr($_SESSION['file_info']['userfile']['name'],0,-4)."%3d.png 2>&1";
    echo "<br/>\n";

     //$command_string = "ls"
    exec($command_string, $output, $status);
    if($status)
      {
        echo $status;
        print_r($output);
        echo "실패";
      }
    else
      {
        echo $status;
        print_r($output);
        echo "성공";
      }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <video width="400" heigh="200" src="/web_csk/SmartFashion/video_file/<?= $_SESSION['file_info']['userfile']['name']?>" controls></video>
     <br>
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>001.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>002.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>003.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>004.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>005.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>006.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>007.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>008.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>009.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>010.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>011.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>012.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>013.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>014.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>015.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>016.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>017.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>018.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>019.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=substr($_SESSION['file_info']['userfile']['name'],0,-4)?>020.png" alt="">
   </body>
 </html>
