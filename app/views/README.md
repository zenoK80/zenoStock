# views/

## 역할
화면에 출력할 HTML 파일 모음  
Controller 에서 전달받은 데이터를 HTML 로 출력

## 폴더 구조
| 폴더 | 담당 화면 |
|------|----------|
| `layouts/` | 공통 레이아웃 (head, header, footer) |
| `home/` | 메인 페이지 |
| `book/` | 책 목록 / 상세 페이지 |
| `auth/` | 로그인 / 회원가입 페이지 |
| `cart/` | 장바구니 페이지 |

## 규칙
- PHP 로직 최소화, HTML 출력에만 집중
- DB 쿼리 절대 X
- URL 은 폴더구조와 대응 (book/list.php → /book/list)
