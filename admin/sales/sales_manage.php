<?php
$title = "매출관리";
$css1 = '<link rel="stylesheet" href="../../css/sales_manage.css">';
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/header.php';
?>
  <!----------- 헤더 -->

<!-- 게시판 폼 -->
<div class="board_container">
<table class="chart_table">
  <tr>
    <div class="s_title">
    <h4>월별 집계현황</h4>
    <div class="select_wrap">
      <select class="form-select" aria-label="" id="" name="">
        <option selected>2024.03</option>
        <option>2024.02</option>
        <option>2024.01</option>
      </select>
      </div></div>
  </tr>
<tr>
  <td scope="col" class="body-sl chart l"><p>항목별 수강자수 집계</p>
    <div class="myChart1">
      <canvas id="myChart1"></canvas>
    </div>
  </td>
  <td scope="col" class="body-sl chart r"><p>일일 총 매출액 집계</p>
    <div class="myChart2">
      <canvas id="myChart2"></canvas>
    </div>
  </td>
</tr>
</table>

    <table class="table">
      <thead>
        <p class="body-sl">이용자별 매출내역</p>
        <tr>
          <th scope="col">번호</th>
          <th scope="col">이름</th>
          <th scope="col">ID</th>
          <th scope="col">수강중인 강좌명</th>
          <th scope="col">카테고리</th>
          <th scope="col">매출일</th>
          <th scope="col">결제방법</th>
          <th scope="col">매출금액</th>
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>3</td>
        <td>홍길동</td>
        <td>hgd001</td>
        <td>웹디자인기초</td>
        <td class="category">웹디자인/편집</td>
        <td>2024.04.01</td>
        <td>카드결제</td>
        <td class="price">100,000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>이도령</td>
        <td>ldr001</td>
        <td>피그마 기초</td>
        <td class="category">웹 개발</td>
        <td>2024.04.01</td>
        <td>카드결제</td>
        <td>100,000</td>
      </tr>
      <tr>
        <td>1</td>
        <td>황진이</td>
        <td>hwang01</td>
        <td>유니티 기초</td>
        <td class="category">웹디자인/편집</td>
        <td>2024.04.01</td>
        <td>카드결제</td>
        <td>100,000</td>
      </tr>
      </tbody>
    </table>
  <!--공통 pagination-->
  <div class="nav_wrap df aic">
      <nav aria-label="">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link">&laquo;</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">&raquo;</a>
          </li>
        </ul>
      </nav>
    <!------------- 공통 pagination-->
  </div>
</div>
<!----------- 게시판 폼 -->
</body>
<!-- 스크립트 -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx1 = document.getElementById('myChart1');

  new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: ['웹 개발', '웹디자인/편집', '게임/웹툰', 'CG/모션그래픽'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  const ctx2 = document.getElementById('myChart2');

  new Chart(ctx2, {
    type: 'line',
    data: {
      labels: ['3.1', '3.5', '3.10', '3.15', '3.20', '3.25', '3.31'],
      datasets: [{
        label: '# of Votes',
        data: [120, 190, 30, 50, 20, 30, 20],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/footer.php';
?>

<!-------------------- 스크립트 -->
</html>