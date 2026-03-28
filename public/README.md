# public/

## 역할
브라우저에서 직접 접근하는 정적 파일 모음  
CSS, JS, 이미지 파일

## 폴더 구조
| 폴더 | 역할 |
|------|------|
| `css/` | 스타일시트 (Bootstrap 커스텀, style.css 등) |
| `js/` | 자바스크립트 (main.js 등) |
| `img/` | 이미지 파일 |

## 규칙
- PHP 파일 X, 정적 파일만
- HTML 에서 참조: BASE_URL . 'public/css/style.css'
