<?php
<<<<<<< HEAD
  function pdo_get_connection()
  {
    $dburl = "mysql:host=localhost;dbname=x-shop-asm;charset=utf8";
    $username = 'root';
    $password = '';
  
    // khởi tạo đối tượng PDO
    // Khi khởi tạo PDO thì sẽ có mặc định 4 tham số(dbname, username, password, array)
    $conn = new PDO($dburl, $username, $password);
    // Đặt một thuộc tính trên csdl, có thể sd một số thuộc tính chung có sẵn
    // Sử dụng thuộc tính PDO::ATTR_ERRMODE: chế độ báo lỗi của PDO, có các thuộc tính sau
    // PDO cung cấp 3 chế độ xử lý lỗi (Error Mode) được thiết lập thông qua phương thức setAttribute()
    // Ở đây sử dụng thuộc tính PDO::ERRMODE_EXCEPTION: trả về một PDOExceptions
    // PDOExceptions: Xử lý các ngoại lệ, các lỗi phát sinh khi làm việc vs database, ...
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  }
  
  // ===================Thực thi câu lệnh sql(thêm, sửa, xóa)=======================//
  function pdo_execute($sql)
  {
    try {
      $conn = pdo_get_connection();
      $stmt = $conn->prepare($sql); // Tạo đối tượng statement để chuẩn bị thực thi sau đó bởi hàm execute
      $stmt->execute();  // Thực thi câu truy vấn
    } catch (PDOException $e) {
      throw $e;
    } finally {
      unset($conn);
    }
  }
  
  // ===================Truy vấn nhiều dữ liệu=======================//
  function pdo_query($sql)
  {
    try {
      $conn = pdo_get_connection();
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $rows = $stmt->fetchAll(); // Trả về 1 mảng chứa tất cả các hàng(dữ liệu) được lấy về
      // Mảng đại diện cho mỗi hàng dưới dạng một mảng các giá trị cột hoặc một đối tượng có các thuộc tính tương ứng với mỗi tên cột. Một mảng trống được trả về nếu không có kết quả nào để tìm nạp.
      return $rows;
    } catch (PDOException $e) {
      throw $e;
    } finally {
      unset($conn);
    }
  }
  
  // ===================Truy vấn một dữ liệu=======================//
  function pdo_query_one($sql)
  {
    try {
      $conn = pdo_get_connection();
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      // PDO::FETCH_ASSOC: Trả về dữ liệu dạng mảng với key là tên của column (column của các table trong database)
      $row = $stmt->fetch(PDO::FETCH_ASSOC); // Lấy ra 1 dòng dữ liệu, kết quả là 1 array
      return $row;
    } catch (PDOException $e) {
      throw $e;
    } finally {
      unset($conn);
    }
  }
  
  // ===================Trả về giá trị của câu lệnh sql(count, min, max)=======================//
  function pdo_query_value($sql)
  {
    try {
      $conn = pdo_get_connection();
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return array_values($row)[0];
    } catch (PDOException $e) {
      throw $e;
    } finally {
      unset($conn);
    }
  }
=======

// Mở kết nối đến CSDL sử dụng PDO
function pdo_get_connection(){
    $dburl = "mysql:host=localhost;dbname=duan1;charset=utf8";
    $username = 'root';
    $pass = '';

    $conn = new PDO($dburl, $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

/**
 * Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @throws PDOException lỗi thực thi câu lệnh
 */


// Không trả về kết quả
// Chạy các câu lệnh SQL(INSERT, UPDATE, DELETE)
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }catch(PDOException $e){
        throw $e;
    }finally{
        unset($conn);
    }
}

// Trả về kết quả
// Chạy câu lệnh SQL(SELECT)
// Lấy tất cả dữ liệu  
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(),1);

    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }catch(PDOException $e){
        throw $e;
    }finally{
        unset($conn);
    }
}

// Trả về kết quả
// 
// Lấy 1 dòng dữ liệu
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(),1);

    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }catch(PDOException $e){
        throw $e;
    }finally{
        unset($conn);
    }
}

// Trả về kết quả
// Lấy tất cả dữ liệu qua một giá trị, keyword
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(),1);

    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetchAll();
        return array_values($row)[0];
    }catch(PDOException $e){
        throw $e;
    }finally{
        unset($conn);
    }
}
>>>>>>> 177a4b31779c4808b80f61a7bacce3119c54a5cf
