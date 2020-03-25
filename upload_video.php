
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // var_dump($_FILES);
    //   exit;



      //임시 디렉토리에 위치 하는 파일을 파일 디렉토리 지정 하기
      $uploaddir = 'C:\Bitnami\wampstack-7.3.15-0\apache2\htdocs\web_sk\videos\\';
      //업로드 된 임시디렉토리에있는 것이 어디에 어느 이름으로 할것인가 //그파일의 월래이름 이 name
      $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
      echo '<pre>';
      //보안상 문제를 확인 해주는 php 함수  move_uploaded_file
      if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile))
        {
           echo "파일이 성공적으로 업로드 되었습니다\n";
        }
      else
        {
          print "파일 업로드 공격 가능성이 있습니다\n";
        }
        echo "자세한디비깅 정보입니다";

        print_r($_FILES);
        // 이변수를 이제  넣으면 되는데 왜 안되
       Print_r($_FILES['userfile']['name']);
       $_FILES['userfile']['name'];

        // print_r($uploadfile);


        //$uploadfile cmd 에 이경로 들어가느면 됨
        //
        // echo $uploadfile;
        //
        // C:\Bitnami\wampstack-7.3.15-0\apache2\htdocs\web_sk\videos\[밀정]자드시오.mp4
        //


        $output;
        $status;
        $_FILES['userfile']['name'];
        echo exec("echo %cd%", $output, $status);

        print_r($output);
        // // 변수 안받아 오고 서버에서 파일
        // $command_string =  "C:\\ffmpeg-4.2.2-win64-static\\ffmpeg-4.2.2-win64-static\bin\\ffmpeg.exe -i \"videos\\[밀정]자드시오.mp4\" -an -ss 00:00:00 -qscale 1 -r 0.2 -vframes 10 -y \"videos\\%3d.png\" 2>&1";
        $command_string =  "C:\\ffmpeg-4.2.2-win64-static\\ffmpeg-4.2.2-win64-static\\bin\\ffmpeg.exe -i \"videos\\".$_FILES['userfile']['name']."\" -an -ss 00:00:00 -qscale 1 -r 0.2 -vframes 10 -y \"videos\\%3d.png\" 2>&1";
        exec($command_string, $output, $status);
        if($status) {
          echo $status;
          print_r($output);
          echo "실패";
        } else {
          echo $status;
          print_r($output);
          echo "성공";
        }
        echo  $command_string;

    ?>
    <video width="400" heigh="200" src="videos/<?=$_FILES['userfile']['name']?>" controls>
    </video>
    <form class="" action="cut_frame.php" method="post">
      <button type="submit" name="cut_fram" id="cut_fram" >동영상 10프래임 보기</button>
    </form>




  </body>
</html>
