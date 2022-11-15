# Terms

- Repository (Repo): thư mục dự án
- Branch(default: master): Cành/Nhánh
- Conflict: Xung đột
- Local: tất cả những gì (file, thư mục, hình ảnh, txt, dữ liệu, ...) trên máy tính cá nhân
- Remote: tất cả dữ liệu nằm trên server
- Fork

# Commands

- git config --global user.name:
- git config --global user.email:
- git config --list: kiểm tra cấu hình git trên máy tính
- git config user.name: kiểm tên tài khoản github kết nối vs git
- git config user.email: kiểm email tài khoản github kết nối vs git
- git init: khởi tạo dự án thành một repository
- git status: kiểm tra trạng thái của repo
- git add {file name}: chuẩn bị lưu lại thời điểm hiện tại của dự án --> chuẩn bị lưu lại file
- git add .: chuẩn bị lưu lại tất cả file
- git reset: lấy ra lại file chuẩn bị lưu
- git commit -m "message": chính thức/xác nhận lưu
- git log: kiểm tra những thời điểm đã lưu
- git log --oneline: kiểm tra những thời điểm đã lưu (dưới dạng ngắn gọn hơn)
- git checkout {branch name}: Trở lại commit đã lưu
- git checkout master: Trở lại commit hiện tại
- git branch: kiểm tra các nhánh đang có trong repo
- git checkout -b {branch name}: tạo thêm một nhánh mới
- git merge {branch_name}: tổng hợp các branch lại với nhau
- git branch -d {branch name}: xóa đi branch muốn xóa

- git push {url_repo_github} {branch_name}: đẩy dữ liệu từ local lên remote thông qua link_repo

- git remote add alias(tên bí danh: default --> origin) {url_repo_github}: tạo một bí danh để đẩy dữ liệu từ local lên remote bằng tên bí danh này
- git push origin(alias) {branch_name}: đẩy dữ liệu từ local lên remote thông qua alias(bí danh)

- git clone {repo_url}: clone/tải về một repo từ remote về local
  - Đẩy dữ liệu từ clone_repo lên remote
    - git add .
    - git commit -m "your message"
    - git push
- git push -u origin {branch_name}: đẩy branch từ local lên remote

- Lấy branch từ remote về local

  - git fetch origin
  - git checkout -b {branch_name} origin/{branch_name}

- Lỗi ! [rejected] master -> master (fetch first)':

  - git fetch origin master
  - git pull origin master
  - git add .
  - git commit -m "your message"
  - git push origin master

- git pull origin master: lấy code mới nhất trên remote về
