# models/

## 역할
DB 쿼리만 담당하는 폴더  
데이터 조회 / 저장 / 수정 / 삭제 (CRUD) 처리

## 파일 목록
| 파일 | 담당 테이블 |
|------|------------|
| `Book.php` | books 테이블 |
| `User.php` | users 테이블 |
| `Cart.php` | cart 테이블 |

## 규칙
- 파일명: 파스칼케이스 (예: Book.php)
- 반드시 core/Model.php 상속
- HTML 출력 X → 데이터 반환만
