<?php
/*
|------------------------------------------------------------------
| Controller.php
| 모든 컨트롤러의 부모 클래스
|
| HomeController, ImageController 등이 이 클래스를 상속받음
| 공통 기능을 여기서 정의해두면 모든 컨트롤러에서 사용 가능
|
| 예시)
| class HomeController extends Controller
|                              ↑ 이 클래스 상속받아서 사용
|------------------------------------------------------------------
*/

class Controller
{
  /*
  |------------------------------------------------------------------
  | view()
  | 뷰 파일을 불러와서 화면에 출력하는 메서드
  |
  | @param string $path  뷰 파일 경로 (views/ 기준으로 작성)
  | @param array  $data  뷰에 전달할 데이터 배열 (기본값 빈배열)
  |
  | 사용 예시)
  | $this->view('home/index');
  | $this->view('image/list', ['images' => $images]);
  |------------------------------------------------------------------
  */
  protected function view($path, $data = [])
  {
    // extract() = 배열을 변수로 풀어줌
    // ['images' => [...], 'title' => 'zeno']
    //   → $images = [...], $title = 'zeno'
    // 뷰 파일에서 $images, $title 로 바로 사용 가능
    extract($data);

    // 뷰 파일 전체 경로 조합
    // BASE_PATH = 루트 경로 (index.php 에서 정의)
    // 예) D:/develop/.../zenoStock/app/views/home/index.php
    $viewFile = BASE_PATH . '/app/views/' . $path . '.php';

    // 파일이 실제로 존재하는지 확인
    if (file_exists($viewFile)) {
      // require_once = 파일 로드 (중복 로드 방지)
      require_once $viewFile;
    } else {
      // 파일 없으면 에러 메시지 출력 후 실행 중단
      // die() = echo + exit 합친 것
      die('View 파일을 찾을 수 없습니다: ' . $path);
    }
  }
}