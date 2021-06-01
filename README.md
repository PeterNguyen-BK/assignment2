# assignment2
Assignment2 Web
- Clone project về máy local
- Copy vào htdocs của xampp
- Cấu trúc thư mục sẽ như sau:
htdocs--assignment2--
                    |-public
                    |-src
                    |-.htacess
                    |-bk-cleanly.sql
                    |-index.php
- Sau đó mở database phpmysql của xampp bằng link: http://localhost/phpmyadmin/ 
- Import file bk-cleanly.sql vào để tạo database cho project
- Truy cập vào web với link: http://localhost/assignment2/Home/
- Cấu trúc code được viết theo mô hình MVC, với mỗi trang sẽ là một file trong controller
- Với link như sau: http://localhost/assignment2/User/register/ thì bắt đầu từ sau assignment2/ thì theo thứ tự User là tên file trong folder Controller, 
tiếp theo regiter sẽ là một function trong file User, phần còn lại sau đó sẽ là các tham số được truyển vào cho function register
- Các file trong folder model tương ứng với các entity mà ta quản lý, các lệnh query sẽ được code bên trong đó và được các hàm bên controller gọi để sử dụng
- Folder view thì để hiển thị web lên cùng với data mình code ở controller trả về. Đọc trong code ở các file trong Controller sẽ thấy 
có câu lệnh $this->View("tên_file_bên_foler_view",[data_gửi_đến_view]) khi gọi thực thi lệnh này ở hàm đang hiện thực thì khi gọi đến link tương ứng hàm đó thì
nó sẽ render ra trang web theo tên file. Ví dụ: trong function register trong file User.php có lệnh $this->View("register", []) thì lúc đó nó sẽ gọi tới cái file register.php
để render trang web và không có data truyền qua
- Vì cái root của php và html nó khác nhau nên đường dẫn nhiều lúc nó bị sai nên ta chuyển qua đường dẫn như này: /assignment2/...
- Tất cả file css, js hình ảnh để ở folder public 
