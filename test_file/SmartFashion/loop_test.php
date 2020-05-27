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
    // .mp4 문자열 자름
    $cut_str_mp4 = substr($_SESSION['file_info']['userfile']['name'],0,-4);
    echo $cut_str_mp4;
        echo "<br/>\n";
    // 원하는 프레임 수
    $frames_num = $_POST["frame_input"];
    echo $frames_num;

    echo "<br/>\n";
    Print_r($_SESSION['flie_info']['userfile']['name']);

    // echo $frames_num;
    //전체 프레임수에서 원하는 프레임 수 만큼 받아와서 쎔네일 만드는것을 해야함
    $command_string = "ffmpeg -i /var/www/html/web_csk/SmartFashion/video_file/".$_SESSION['file_info']['userfile']['name']." -an -ss 00:00:00 -qscale 1 -r 1 -vframes $frames_num -y /var/www/html/web_csk/SmartFashion/video_frame/".$cut_str_mp4."%3d.png 2>&1";
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

      alert('<?=$cut_str_mp4?>');

        {
           var user_area = <%=user.area%>;
           var img_src;
           for(var i=1; i<=10; i++)
             {
                 if(user_area == i)
                 {
                   img_src = '/var/www/html/web_csk/SmartFashion/video_frame/<?=$cut_str_mp4?>00'+i+'.png';
                 }
             }
           return img_src;
         }
     </script>
   </head>
   <body>
     <video width="400" heigh="200" src="/web_csk/SmartFashion/video_file/<?= $_SESSION['file_info']['userfile']['name']?>" controls></video>
     <br>
      <div class="">
        <img width="200" heigh="100" id="thumbnail_loop">
         <script>document.getElementById("thumbnail_loop").src=thumbnail_loop_f()</script>
      </div>

   </body>
 </html>
s
