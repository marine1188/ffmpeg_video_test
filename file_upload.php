<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>동영상 업로드 하기</title>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
// 현재 화면에서 동영상 띄우는 함수
    // function submit_form()
    // {
    //
    //   document.frm.target = 'ifrm'
    //   document.frm.action = 'upload_video.php';
    //   document.frm.submit();
    // }
    // 파일 체크함수
    function fileCheck()
            {

              var fileCheck_v = document.getElementById("userfile").value;
              var frarm_num_v =document.getElementById("frame_input").value;
              if(!fileCheck_v)
                {
                    alert("파일을 첨부해 주세요");
                    return false;
                }

                if (!frarm_num_v)
                {
                      alert("프래임수를 숫자로 입력해주세요 (최대 10프래임 입니다)");
                      return false;
                }

              if (fileCheck_v !="")
                {
                  var ext = fileCheck_v.slice(fileCheck_v.lastIndexOf(".") + 1).toLowerCase();

                  if (!(ext == "mp4"||ext =="avi"||ext =="ogg"))
                    {
                        alert("동영상 파일 (.mp4 , .avi , .ogg ) 만 업로드 가능합니다.");
                        return false;
                    }
                   else
                    {
                        alert("동영상이정상적으로 업로드 됬습니다"+frarm_num_v+"개의 프래임 이미지파일 추출 완료")
                    }
                }
                    // 현재화면에 실행 화면 코드
                    document.frm.target = 'ifrm'
                    document.frm.action = 'upload_video.php';
                    document.frm.submit();
            }

      // var loadfile = $('#userfile').val();
      // var fileForm = /(.*?)\.(mp4)$/;
      //
      // if($('#userfile').val() == "")
      //  {
      // 	alert("첨부파일은 필수!");
      //   $("#userfile");
      //   return;
      // }

    </script>
  </head>
  <body>
    <form class="" enctype="multipart/form-data" name ="frm" id="frm" action="" method="post">
        <input type="file" name="userfile" id="userfile" >
        <h1>프래임 수 입력</h1>
        <input type="number" id="frame_input" name="frame_input"  min="1" max="10">
        <input type="button" value="비디오 업로드" onclick="fileCheck()" >
        <p>동영상 파일만(.mp4 , .avi , .ogg) 지원 가능합니다</p>
      </br>
      비디오 업로드 이후 아래 화면에 선택 하신 비디오를 볼수있습니다.
      <br>
        <iframe name='ifrm' width="1000" height="460">

        </iframe>
    </form>
  </body>
</html>
