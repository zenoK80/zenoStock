# zenoStock

> 직접 만든 일러스트 & 아이콘 스톡이미지 서비스 판매 포트폴리오

<br>

## 📌 프로젝트 소개

직접 제작한 일러스트 & 아이콘을 제공하는 개인 스톡이미지 서비스입니다.
순수 PHP MVC 패턴으로 구현하며 웹 개발 전반을 학습하는 포트폴리오 프로젝트입니다.

<br>

## 🛠 기술 스택

| 분류     | 기술                                    |
| -------- | --------------------------------------- |
| Backend  | PHP 8.x                                 |
| Frontend | Bootstrap 5, Swiper.js, Bootstrap Icons |
| Server   | Apache (XAMPP)                          |
| DB       | MySQL (예정)                            |
| VCS      | Git / GitHub                            |

<br>

## 📁 폴더 구조

```
zenoStock/
├── index.php              # 진입점
├── app/
│   ├── controllers/       # 컨트롤러
│   ├── models/            # 모델 (DB 예정)
│   └── views/             # 뷰
│       ├── includes/      # 공통 레이아웃 (head, header, footer)
│       ├── data/          # 페이지별 데이터
│       └── page/          # 추가 페이지
├── config/                # 설정 파일 (BASE_URL, DB 등)
├── core/                  # MVC 뼈대 클래스
├── public/                # 정적 파일 (css, js, img)
└── storage/               # 업로드 파일
```

<br>

## ✅ 구현 현황

- [x] MVC 폴더 구조 설계
- [x] 공통 레이아웃 (head, header, footer)
- [x] config 상수 관리 (BASE_URL, IMG_PATH 등)
- [x] 홈 히어로 섹션 + 검색창
- [x] 서비스 소개 섹션
- [x] Bootstrap 반응형 네비바
- [x] 로그인 / 회원가입 버튼
- [ ] DB 연결 (예정)
- [ ] 회원가입 / 로그인 기능 (예정)
- [ ] 이미지 검색 기능 (예정)
- [ ] 이미지 상세 페이지 (예정)
- [ ] 결제 시스템 (예정)

<br>

## 🖥 실행 방법

```bash
1. XAMPP 설치 후 Apache 실행
2. htdocs/zenoStock 에 클론
3. config/database.php 설정 (database.example.php 참고)
4. localhost/zenoStock 접속
```

<br>

## 📷 스크린샷

> 추가 예정
