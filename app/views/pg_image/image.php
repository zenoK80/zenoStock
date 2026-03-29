<?php require BASE_PATH . '/app/views/includes/head.php'; ?>
<?php require BASE_PATH . '/app/views/includes/header.php'; ?>

<main>
  <div class="container py-5">
    <h2 class="fw-bold mb-4">이미지 목록</h2>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">test</h5>
            <a href="/zenoStock/image/detail/1" class="btn btn-primary btn-sm">상세보기</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">test2</h5>
            <a href="/zenoStock/image/detail/2" class="btn btn-primary btn-sm">상세보기</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">test3</h5>
            <a href="/zenoStock/image/detail/3" class="btn btn-primary btn-sm">상세보기</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>

<?php require BASE_PATH . '/app/views/includes/footer.php'; ?>