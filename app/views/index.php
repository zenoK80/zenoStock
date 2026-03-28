<?php require 'app/views/includes/head.php'; ?>
<?php require 'app/views/includes/header.php'; ?>
<?php require 'app/views/data/index_data.php'; ?>

<main>
  <div class="container col-xxl-8 px-4 py-5">
    <!-- START-section1 -->
    <section class="row align-items-center g-5 py-5">
      <!-- 텍스트 먼저 -->
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-base mb-3">
          <?= $greeting ?>
        </h1>
        <p class="lead">
          <?= $tagline ?>
        </p>
        <form class="d-flex gap-2" role="search">
          <input
            class="form-control form-control-lg"
            type="search"
            placeholder="이미지를 검색하세요..."
            aria-label="Search"
          />
          <button class="btn btn-dark btn-lg px-4" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
      <!-- 이미지 나중에 -->
      <div class="col-10 col-sm-7 col-lg-6 mx-auto mx-lg-0">
        <img
          src="<?= IMG_PATH ?>0_home/book_cover.jpg"
          class="d-block mx-auto img-fluid"
          alt="zenoStock"
          loading="lazy"
        />
      </div>
    </section>
    <!-- END-section1 -->



  </div>
</main>

<?php require 'app/views/includes/footer.php'; ?>
