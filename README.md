# web-ban-hang-thoi-trang-online
Trang web bán quần áo - BTL năm 3
#shopping-cart : https://github.com/darryldecode/laravelshoppingcart
#Laravel 5.7


Hướng dẫn cài đặt :
1. Chuẩn bị
	• Xampp. Các bạn có thể download phiên bản mới nhất của nó tại https://www.apachefriends.org/download.html
	• Composer. Link download tại https://getcomposer.org/Composer-Setup.exe
Các bạn chỉ cần cài phiên bản mới nhất của xampp là đã có đủ hết rồi :)
2. Cài đặt
a. Cài xampp: Các bạn cài đặt bình thường và chọn ổ mình muốn cài xampp. Ở đây mình cài vào ổ C máy của mình.

b. Cài composer: Khi cài composer nó sẽ hỏi chọn đường dẫn file php.exe trên máy của bạn. Lúc nãy mình cài xampp ở ổ C:\xampp thì file php.exe nó sẽ nằm ở trong C:\xampp\php\php.exe

Tiếp theo mình sẽ hướng dẫn các bạn tạo một project laravel. Khi các bạn dùng xampp thì mặc định project của các bạn sẽ để ở trong đường dẫn C:\xampp\htdocs vì vậy các bạn mở cmd máy của các bạn lên và chuyển đến đường folder htdocs trong xampp bằng cách gõ lệnh: cd C:\xampp\htdocs

Để tạo một project các bạn dùng lệnh: composer create-project laravel/laravel  ten_project. Lệnh này nó sẽ download trực tiếp project ở trên github về máy tính của bạn - vì vậy máy tính bạn cần phải kết nối với internet. Các bạn có thể xem ở hình bên dưới đây mình tạo một project tên là blog.

Sau đó các bạn vào thư mục project các bạn vừa tạo bằng lệnh trên cmd: cd ten_project. Ở đây mình sẽ dùng lệnh cd blog vì mình tạo tên project của mình là blog.

Để chạy được project thì các bạn gõ lệnh: php artisan serve. Khi đó các bạn vào trình duyệt gõ đường dẫn http://localhost:8000, nó sẽ ra trang như bên dưới. 

From <https://giaphiep.com/blog/huong-dan-cai-dat-laravel-53-tren-window-1473475831.html> 


SAU KHI CÀI ĐẶT XONG LARAVEL: 
 1. Tải file db_shop.sql về và import nó vào phpMyAdmin( nhớ tạo 1 database tên db_shop và import vào db đó).
 2. Vào link drive bên trên shopteam13.zar sau đó giải nén và copy vào thư mục C:\xampp\htdocs.
 3. Vào cmd của của C:\xampp\htdocs gõ: cd shopteam5. Sau đó gõ : composer install. 
 4. Chạy xong bạn vào web truy cập : http://localhost/shopteam5/public/  nếu hiện nguyên hình thì đó là trang giao diện người sử dụng.
 Vào trang http://localhost/shopteam5/public/admin/login để truy cập trang của admin. 
 
 Nếu chưa được nữa thì chắc quá lâu r :v


