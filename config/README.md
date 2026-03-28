# config/

## 역할
프로젝트 전체 설정값 모음  
DB 접속 정보, 사이트 기본 설정 등

## 파일 목록
| 파일 | 역할 |
|------|------|
| `app.php` | BASE_URL 등 기본 설정 |
| `database.php` | DB 연결 정보 (host, dbname, user, pw) |

## 주의
- database.php 는 GitHub 에 올리면 안됨 (.gitignore 등록 필수)
- 실서버 배포 시 설정값 변경 필요
