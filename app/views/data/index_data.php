<?php
// section1 히어로
$greeting = "zenoStock<br>개인 스톡사이트";
$tagline  = "일러스트 & 이미지 & 아이콘";
// section2 서비스 소개
$features = [
  ["icon" => "🎨", "title" => "고퀄리티 일러스트", "desc" => "직접 제작한 일러스트"],
  ["icon" => "💰", "title" => "합리적인 가격",     "desc" => "개인/상업용 모두 가능"],
  ["icon" => "⚡", "title" => "즉시 다운로드",     "desc" => "구매 후 바로 사용 가능"],
  ["icon" => "🔒", "title" => "라이선스 보장",     "desc" => "안전한 저작권 보호"],
];

// section3 통계
$stats = [
  ["number" => "500+",  "label" => "이미지"],
  ["number" => "50+",   "label" => "카테고리"],
  ["number" => "1,000+","label" => "다운로드"],
  ["number" => "100+",  "label" => "고객"],
];

// section4 카테고리
$categories = [
  ["name" => "중장비", "icon" => "🚧", "path" => "vehicle"],
  ["name" => "랜드마크", "icon" => "🏛️", "path" => "landmark"],
  ["name" => "컬러아이콘", "icon" => "🎨", "path" => "colorIcon"],
];

// section5 Best Top 10
$best_images = [
  "IMG001" => [
    "title"     => "크레인",
    "category"  => "vehicle",
    "price"     => 5000,
    "thumbnail" => "vehicle/zeno_craine.png",
  ],
  // ... 나머지 동일
];