# app/

## 역할
실제 개발 작업이 이루어지는 핵심 폴더  
기능 추가할 때 항상 여기서 작업

## 하위 폴더
| 폴더 | 역할 |
|------|------|
| `controllers/` | 요청 받아서 Model 호출 후 View 에 전달 |
| `models/` | DB 쿼리 담당, 데이터 처리 |
| `views/` | 화면에 출력할 HTML |

## 흐름 예시
```
BookController.php  (요청 처리)
    ↓
Book.php            (DB에서 책 조회)
    ↓
views/book/list.php (HTML 출력)
```
