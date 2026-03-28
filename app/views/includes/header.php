<?php include 'app/views/data/header_data.php'; ?>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center gap-2" href="#">        
      <img src="<?= IMG_PATH ?>0_home/zenoLogo.png" 
          alt="zenoStock 로고"
          width="32" 
          height="32">
      <span class="fw-bold">zenoStock</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">홈</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">이미지</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">아이콘</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">가격안내</a>
        </li>
      </ul>
      <!-- <div class="text-muted small px-3 me-3 d-none d-lg-flex align-items-center">
        현재 접속 일시 : <?= $datetime ?>
      </div> -->
      <div class="d-flex gap-2">
        <a href="#" class="btn btn-outline-secondary btn-sm">로그인</a>
        <a href="#" class="btn btn-dark btn-sm">회원가입</a>
      </div>
    </div>
  </div>
</nav>
</header>