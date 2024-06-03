
## About Project
- source code mẫu không có tính thực tế
- các bạn sẽ nắm được cấu trúc cơ bản của 1 project laravel
- nắm được cách thêm, sửa, xóa, lấy dữ liệu bằng laravel
- nắm được cách tương tác với phần view trong Laravel

## Cài đặt
- copy file .env.example => .env
- composer require laravel/installer
  + tải các gói thư viện của laravel (xem trong file composer.json)
  + tạo APP_KEY trong file .env
- npm install
  + tải các gói thư viện cho phần View (front-end) (xem trong file package.json)
- php artisan key:generate (Nếu vẫn chưa có APP_KEY trong .env)

- tùy chỉnh lại database trong file .env cho khớp với cài đặt trong máy của bạn
  + DB_CONNECTION=mysql
  + DB_HOST=127.0.0.1
  + DB_PORT=3306
  + DB_DATABASE=web-game
  + DB_USERNAME=root
  + DB_PASSWORD=
  
- php artisan migrate
  + tạo cấu trúc cho cơ sở dữ liệu
- php artisan db:seed
  + tạo dữ liệu mẫu, bạn hãy sửa lại thông tin trong file database->seeders->UserSeeder.php

- php artisan serve
- npm run dev (npm run build - nếu upload lên hosting)