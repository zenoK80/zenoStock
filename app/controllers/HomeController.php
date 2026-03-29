<?php
/*
|------------------------------------------------------------------
| HomeController.php
| 홈페이지 담당 컨트롤러
|
| URL: /  또는 /home
| Router 가 자동으로 index() 호출
|------------------------------------------------------------------
*/

class HomeController extends Controller
{
  public function index()
  {
    // 데이터 직접 정의
    $greeting    = "zenoStock<br>개인 스톡사이트";
    $tagline     = "일러스트 & 이미지 & 아이콘";
    $best_images = [
      "IMG001" => [
        "title"       => "크레인",
        "category"    => "vehicle",
        "price"       => 5000,
        "thumbnail"   => "vehicle/zeno_craine.png",
        "description" => "크레인 일러스트",
      ],
      "IMG002" => [
        "title"       => "굴착기",
        "category"    => "vehicle",
        "price"       => 5000,
        "thumbnail"   => "vehicle/zeno_excavator.png",
        "description" => "굴착기 일러스트",
      ],
      "IMG003" => [
        "title"       => "지게차",
        "category"    => "vehicle",
        "price"       => 5000,
        "thumbnail"   => "vehicle/zeno_fork-lift.png",
        "description" => "지게차 일러스트",
      ],
      "IMG004" => [
        "title"       => "사다리차",
        "category"    => "vehicle",
        "price"       => 5000,
        "thumbnail"   => "vehicle/zeno_ladder-car.png",
        "description" => "사다리차 일러스트",
      ],
      "IMG005" => [
        "title"       => "N서울타워",
        "category"    => "landmark",
        "price"       => 4000,
        "thumbnail"   => "landmark/zeno_N-seoul-tower.png",
        "description" => "N서울타워 일러스트",
      ],
      "IMG006" => [
        "title"       => "롯데타워",
        "category"    => "landmark",
        "price"       => 4000,
        "thumbnail"   => "landmark/zeno_lotte-tower.png",
        "description" => "롯데타워 일러스트",
      ],
      "IMG007" => [
        "title"       => "광화문",
        "category"    => "landmark",
        "price"       => 4000,
        "thumbnail"   => "landmark/zeno_Gwanghwamun.png",
        "description" => "광화문 일러스트",
      ],
      "IMG008" => [
        "title"       => "사과 아이콘",
        "category"    => "colorIcon",
        "price"       => 2000,
        "thumbnail"   => "colorIcon/apple-zeno.svg",
        "description" => "사과 컬러 아이콘",
      ],
      "IMG009" => [
        "title"       => "체리 아이콘",
        "category"    => "colorIcon",
        "price"       => 2000,
        "thumbnail"   => "colorIcon/cherry-zeno.svg",
        "description" => "체리 컬러 아이콘",
      ],
      "IMG010" => [
        "title"       => "나무 아이콘",
        "category"    => "colorIcon",
        "price"       => 2000,
        "thumbnail"   => "colorIcon/tree-zeno.svg",
        "description" => "나무 컬러 아이콘",
      ],
    ];

    // View 에 데이터 전달
    $this->view('home', [
      'greeting'    => $greeting,
      'tagline'     => $tagline,
      'best_images' => $best_images,
    ]);
  }
}