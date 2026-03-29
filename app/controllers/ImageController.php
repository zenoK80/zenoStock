<?php
/*
|------------------------------------------------------------------
| ImageController.php
| 이미지 목록 / 상세 담당 컨트롤러
|
| URL: /image          → index()
| URL: /image/detail/5 → detail(5)
|------------------------------------------------------------------
*/

class ImageController extends Controller
{
  /*
  |------------------------------------------------------------------
  | index()
  | 이미지 목록 페이지
  | URL: /image
  |------------------------------------------------------------------
  */
  public function index()
  {
    $this->view('pg_image/image');
  }

  /*
  |------------------------------------------------------------------
  | detail()
  | 이미지 상세 페이지
  | URL: /image/detail/5
  | @param string $id  이미지 ID
  |------------------------------------------------------------------
  */
  public function detail($id)
  {
    $this->view('pg_image/image-detail', [
      'id' => $id
    ]);
  }
}