<?php
session_start();
$title = "강좌관리";
$css1 = '<link rel="stylesheet" href="../../css/lecture.css">';
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/login/admin_check.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/header.php';

$pid = $_GET['pid']; 
$sql = "SELECT * FROM products WHERE pid = {$pid}";
$result = $mysqli -> query($sql);
$rs = $result->fetch_object();

//대분류 조회
$sql = "SELECT * FROM product_category where step = 1";
$result = $mysqli->query($sql);
while ($row = $result->fetch_object()) {
  $cate1[] = $row;
}

//카테고리 확인
$cates = $rs->cate; //A0001B0001C0001  str_split(문자열, 개수);
$cateArray = str_split($cates, 5);

foreach($cateArray as $cate){
  $sql = "SELECT * FROM product_category WHERE code = '{$cate}'";
  $result = $mysqli -> query($sql);
  while($caters = $result->fetch_object()){
    $cateArr[] = $caters;
  }
}

// $imgSql = "SELECT * FROM product_image_table WHERE pid = {$pid}";
// $imgrs = $mysqli -> query($imgSql);

// while ($irs = $imgrs->fetch_object()) {
//     $rsArr[] = $irs;
// }

// $optSql = "SELECT * FROM product_options WHERE pid = {$pid}";
// $optrs = $mysqli -> query($optSql);

// while ($ors = $optrs->fetch_object()) {
//     $optArr[] = $ors;
// }

?>

<!----------- 헤더 -->
<body>
  <div class="lecture_up">
    <h3>강좌 수정</h3>
    <form action="product_edit_ok.php" method="POST" enctype="multipart/form-data" id="product_save">
    <ul>
      <p class="form-label">카테고리</p>
      <li class="category">
      <?php
                foreach($cateArr as $cate){
                  echo $cate-> name. '-';
                }
              ?>
        <select class="form-select" aria-label="대분류" id="cate1" name="cate1" required>
          <option selected disabled>대분류</option>
          <?php
                  foreach ($cate1 as $c1) {
                  ?>
                    <option value="<?= $c1->code; ?>"><?= $c1->name; ?></option>
                  <?php
                  }
                  ?>
        </select>

        <select class="form-select" aria-label="중분류" id="cate2" name="cate2">

        </select>
      </li>
    </ul>
    <ul>
      <li>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="title" id="title" placeholder="강좌명" value="<?= $rs -> title?>" required>
          <label for="title" disabled>강좌명</label>
        </div>
      </li>
    </ul>
    <ul>
      <li>
        <div class="input-group c2form price">
          <div class="form-floating">
            <input type="text" class="form-control" aria-label="lecture_price" id= "lecture_price" placeholder="가격"  value="<?= $rs -> price?>" required>
            <label for="floatingInputGroup1">가격</label>
          </div>
          <span class="input-group-text">원</span>
        </div>
      </li>
    </ul>
    <ul class="date_select">
      <li>
        <div class="form-floating">
        <div class="d-flex lDates">
          <input type="text" id="datepicker1" class="couponC">
        </div>
        </div>
      </li>
      <li>
        <select class="form-select" aria-label="대분류">
          <option selected>1개월</option>
          <option value="1">3개월</option>
          <option value="2">6개월</option>
          <option value="3">1년</option>
        </select>
      </li>
      <li class="view_status">
        <p class="status">상태&nbsp;&nbsp;</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            공개
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            일부공개(예약)
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            비공개
          </label>
        </div>
      </li>
    </ul>
    <ul>
      <li>
        <p class="period">수강기간 yyyy-mm-dd ~ yyyy-mm-dd </p>
      </li>
      <li>
        <div class="form-floating textarea">
          <textarea class="form-control" placeholder="강좌설명" id="floatingTextarea"></textarea>
          <label for="floatingTextarea" hidden>강좌설명</label>
        </div>
      </li>
      <li>
        <div class="mb-3">
          <label for="formFile" class="form-label">썸네일 이미지 업로드</label>
          <input class="form-control" type="file" id="formFile">
        </div>
      </li>
      <li class="image_preview">
        <div class="preview primary_btn">이미지 삭제</div>
      </li>
      <li>
        <div class="mb-3">
          <label for="formFile" class="form-label">강의 영상 업로드</label>
          <input class="form-control" type="file" id="formFile">
        </div>
      </li>
      <li>
        <div class="form-floating mb-3">
          <input type="url" class="form-control" id="floatingInput_url" placeholder="https://">
          <label for="floatingInput_url">URL</label>
        </div>
      </li>
      <li class="image_preview">
        <div class="preview primary_btn">영상 삭제</div>
      </li>
    </ul>
    <ul>
      <li class="w btn_collect">
        <a href="" class="primary_btn">수정 완료</a>
        <a href="javascript:history.back();" class="basic_btn">목록</a>
      </li>
    </ul>
  </div>
  </div>




</body>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/footer.php';
?>
<script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>
<script>
  $(document).ready(function() {

    $('.optAddBtn').click(function(){
      let addHtml = $('#optionTr1').html();
          addHtml =  `<tr>${addHtml}</tr>`;
      $('#option1').append(addHtml);
    });

    $('#product_save').on('submit', save);

    function save() {
      let markupStr = $('#summernote').summernote('code');
      let contents = encodeURIComponent(markupStr);
      $('#contents').val(contents);
    }

    $('#summernote').summernote({
      height: 300
    });

    $("#sale_end_date").datepicker({
      dateFormat: "yy-mm-dd"
    });

    //추가 이미지 등록
    $('#addImage').click(function() {
      $('#upfile').trigger('click');
    });
    $('#upfile').change(function() {
      let files = $(this).prop('files');
      console.log(files);
      for (let i = 0; i < files.length; i++) {
        attachFile(files[i]);
      }
      $('#upfile').val('');
    });

    function attachFile(file) {
      var formData = new FormData();
      formData.append('savefile', file); //<input name="savefile" value="파일명">

      $.ajax({
        url: 'product_save_image.php',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        type: 'POST',
        success: function(return_data) {
          console.log(return_data);
          if (return_data.result == 'size') {
            alert('10메가 이하만 첨부할수 있습니다.');
            return; //함수 종료(빈값을 리턴);
          } else if (return_data.result == 'image') {
            alert('이미지만 첨부할 수 있습니다.');
            return;
          } else if (return_data.result == 'error') {
            alert('파일 첨부 실패, 관리자에게 문의하세요');
            return;
          } else {
            let imgid = $('#product_image_id').val() + return_data.imgid + ',';
            $('#product_image_id').val(imgid);
            let html = `
                <div class="card" style="width: 10rem;" id="${return_data.imgid}">
                  <img src="/pinkping/admin/upload/${return_data.savefile}" class="img-fluid" alt="...">
                  <button type="button" class="btn btn-danger btn-sm">삭제</button>
                </div>
              `;

            $('#addedimages').append(html);
          }
        }
      });
    }

    $('#addedimages').on('click', 'button', function() {
      let imgid = $(this).parent().attr('id');
      file_delete(imgid);
    });

    function file_delete(imgid) {
      if (!confirm('정말 삭제할까요?')) {
        return false;
      }
      let data = {
        imgid: imgid
      }
      $.ajax({
        async: false, //결과가 있으면 반영해줘
        type: 'POST',
        url: 'image_delete.php',
        data: data,
        dataType: 'json',
        error: function(error) {
          console.log('error:', error);
        },
        success: function(return_data) {
          if (return_data.result === 'member') {
            alert('권한이 없습니다.');
            return;
          } else if (return_data.result === 'mine') {
            alert('본인이 등록한 이미지만 삭제할 수 있습니다.');
            return;
          } else if (return_data.result === 'fail') {
            alert('삭제 실패!');
            return;
          } else {
            $('#' + imgid).remove();
          }
        }
      });
    }

  });
</script>
<!-------------------- 스크립트 -->

</html>