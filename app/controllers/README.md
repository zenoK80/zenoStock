# controllers/

## 역할
사용자 요청을 받아서 처리하는 컨트롤러 모음  
Model 호출 → View 에 데이터 전달하는 중간 조율자

## 파일 목록
| 파일 | 담당 페이지 |
|------|------------|
| `HomeController.php` | 메인 페이지 |
| `BookController.php` | 책 목록 / 상세 |
| `AuthController.php` | 로그인 / 회원가입 |
| `CartController.php` | 장바구니 |

## 규칙
- 파일명: 파스칼케이스 + Controller (예: BookController.php)
- 반드시 core/Controller.php 상속
- DB 쿼리 직접 작성 X → Model 에서 처리
