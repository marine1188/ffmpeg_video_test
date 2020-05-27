<!-- 테스트 -->
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    // 세션 받아는 부분
    session_start();
    $_SESSION['file_info'];
    Print_r($_SESSION);

    // $frame_mk = mkdir("/var/www/html/web_csk/SmartFashion/video_frame/".substr($_SESSION['file_info']['userfile']['name'],0,-4),0777,true);
    //     if($frame_mk)
    //       {
    //         echo "프레임 저장 폴더 생성 성공";
    //       }
    //     else
    //        {
    //         echo "실패";
    //        }
    //변수 선언
    // 동영상의 확장자에 자름에 대한 변수 생성
    $vido_name_cut = substr($_SESSION['file_info']['userfile']['name'],0,-4);
    echo $vido_name_cut;
        echo "<br/>\n";
    //세션을 받아온 동영상의 이름 정보 변수 생성
    $vido_name = $_SESSION['file_info']['userfile']['name'];
    echo $vido_name;
        echo "<br/>\n";
    // 원하는 프레임 수
    $frames_num = $_POST["frame_input"];
    echo $frames_num;

    echo "<br/>\n";
    Print_r($_SESSION['flie_info']['userfile']['name']);

    // echo $frames_num;
    //전체 프레임수에서 원하는 프레임 수 만큼 받아와서 쎔네일 만드는것을 해야함
    //$command_string = "ffmpeg -i /var/www/html/web_csk/SmartFashion/video_file/".$_SESSION['file_info']['userfile']['name']." -an -ss 00:00:00 -qscale 1 -r $frames_num -vframes $frames_num  -y /var/www/html/web_csk/SmartFashion/video_frame/".$cut_str_mp4."%3d.png 2>&1";
    $command_string = "ffmpeg -i /var/www/html/web_csk/SmartFashion/video_file/".$vido_name." -an -ss 00:00:00 -qscale 1 -r $frames_num -y /var/www/html/web_csk/SmartFashion/video_frame/".$vido_name_cut."%3d.png 2>&1";

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
       <script type="text/javascript">

       </script>
   </head>
   <body>
     <video width="400" heigh="200" src="/web_csk/SmartFashion/video_file/<?=$vido_name?>" controls></video>
     <br>
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=$vido_name_cut?>001.png" alt="">
       <img width="200" heigh="100" src="/web_csk/SmartFashion/video_frame/<?=$vido_name_cut?>002.png" alt="">
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
