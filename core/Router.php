<?php
/*
|------------------------------------------------------------------
| Router.php
| URL 파싱 → 컨트롤러 → 메서드 → 파라미터 연결
|
| URL 구조: /컨트롤러/메서드/파라미터
|
| 예시)
| /                → HomeController → index()
| /image           → ImageController → index()
| /image/detail/5  → ImageController → detail(5)
| /auth/login      → AuthController → login()
|------------------------------------------------------------------
*/

class Router
{
  // 기본값: URL 없을 때 홈으로
  private $controller = 'HomeController';
  private $method     = 'index';
  private $params     = [];

  public function run()
  {
    // URL 을 배열로 파싱
    // /image/detail/5 → ['image', 'detail', '5']
    $url = $this->parseUrl();

    // -----------------------------------------------
    // 1단계: 컨트롤러 결정
    // URL 첫번째 값으로 컨트롤러 파일 찾기
    // -----------------------------------------------
    if (isset($url[0]) && !empty($url[0])) {

      // 'image' → 'Image' → 'ImageController'
      $controllerName = ucfirst($url[0]) . 'Controller';
      $controllerFile = BASE_PATH . '/app/controllers/' . $controllerName . '.php';

      // 파일 실제로 있는지 확인 후 적용
      if (file_exists($controllerFile)) {
        $this->controller = $controllerName;
        unset($url[0]); // 사용한 세그먼트 제거
      }
      // 파일 없으면 기본값 HomeController 유지
    }

    // 컨트롤러 파일 로드 & 객체 생성
    require_once BASE_PATH . '/app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller();

    // -----------------------------------------------
    // 2단계: 메서드 결정
    // URL 두번째 값으로 메서드 찾기
    // -----------------------------------------------
    if (isset($url[1]) && !empty($url[1])) {
      // 해당 메서드가 컨트롤러에 존재하는지 확인
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]); // 사용한 세그먼트 제거
      }
    }

    // -----------------------------------------------
    // 3단계: 파라미터 결정
    // 남은 URL 세그먼트가 파라미터
    // /image/detail/5 → [5]
    // -----------------------------------------------
    $this->params = !empty($url) ? array_values($url) : [];

    // -----------------------------------------------
    // 4단계: 실행
    // 컨트롤러의 메서드를 파라미터와 함께 동적 호출
    // ImageController->detail(5) 이런식으로 실행
    // -----------------------------------------------
    call_user_func_array(
      [$this->controller, $this->method],
      $this->params
    );
  }

  // -----------------------------------------------
  // URL 파싱 메서드
  // .htaccess 가 index.php?url=image/detail/5 로 보내줌
  // -----------------------------------------------
  private function parseUrl()
  {
    if (isset($_GET['url'])) {
      return explode(
        '/',
        // 끝 슬래시 제거 후 특수문자 필터링 (보안)
        filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)
      );
    }
    // URL 없으면 홈으로
    return ['home'];
  }
}
