# controllers/

## 역할

사용자 요청을 받아서 처리하는 컨트롤러 모음
Router 가 URL 파싱 후 해당 컨트롤러 자동 호출
Model 호출 → View 에 데이터 전달하는 중간 조율자

MVC 역할 분리 원칙
M (Model) → 데이터 처리
V (View) → HTML 출력만
C (Controller) → 데이터 가져와서 View 에 전달
View 가 데이터까지 직접 가져오면
→ V 가 M 역할까지 하는 거라 MVC 원칙 위반

## 파일 목록

| 파일                    | 담당 URL          | 설명               |
| ----------------------- | ----------------- | ------------------ |
| `HomeController.php`    | /                 | 홈페이지           |
| `ImageController.php`   | /image            | 이미지 목록 / 상세 |
| `IconController.php`    | /icon             | 아이콘 목록 / 상세 |
| `PricingController.php` | /pricing          | 가격안내           |
| `AuthController.php`    | /login, /register | 로그인 / 회원가입  |
| `MypageController.php`  | /mypage           | 마이페이지         |
| `NoticeController.php`  | /notice           | 공지사항           |
| `FaqController.php`     | /faq              | FAQ                |
| `LegalController.php`   | /terms, /privacy  | 약관 / 개인정보    |

## 규칙

- 파일명: 파스칼케이스 + Controller (예: ImageController.php)
- 반드시 core/Controller.php 상속
- DB 쿼리 직접 작성 X → Model 에서 처리
- public 메서드만 Router 에서 호출 가능

## 흐름

URL /image 접속
↓
Router → ImageController.php 자동 연결
↓
ImageController → index()
↓
Model 에서 데이터 가져오기 (DB 연결 후)
↓
view() 로 화면 출력
