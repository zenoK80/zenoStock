<?php
/*
|------------------------------------------------------------------
| index.php
| 모든 요청의 시작점 (프론트 컨트롤러)
| .htaccess 가 모든 요청을 여기로 보냄
|------------------------------------------------------------------
*/

// 1. 루트 경로 상수 정의
//    __DIR__ = 현재 파일이 있는 폴더 경로
//    dirname(__FILE__) 랑 같은 말
define('BASE_PATH', __DIR__);

// 2. 전역 상수 로드 (BASE_URL, IMG_PATH 등)
require_once BASE_PATH . '/config/app.php';

// 3. 라우터 로드
require_once BASE_PATH . '/core/Router.php';

// 4. 컨트롤러 베이스 로드
require_once BASE_PATH . '/core/Controller.php';

// 5. 라우터 실행
//    URL 파싱 → 컨트롤러 찾아서 실행
$router = new Router();
$router->run();