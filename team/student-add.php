<?php
require ("students.php");

// Biến lưu trữ data và error
// Biến này phải khai báo ở đây để ở dưới sử dụng sẽ không bị lỗi
$data = array();
$errors = array();

// Biến kiểm tra có phải action edit hay không
$is_update_action = false;

// Trường hợp edit thì ta lấy thông tin để show ra cho người dùng thấy
if (!empty($_GET['id']))
{
    $data = getStudent($_GET['id']);
    $is_update_action  = true;
}

// Nếu người dùng click vào nút submit
if (!empty($_POST['add_student']))
{
     
    // Lấy thông tin
    $data['student_id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['student_name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['student_birth'] = isset($_POST['birth']) ? $_POST['birth'] : '';
    $data['student_class'] = isset($_POST['class']) ? $_POST['class'] : '';
    $data['student_home'] = isset($_POST['home']) ? $_POST['home'] : '';
     
    // Validate
    if (empty($data['student_id'])){
        $errors['student_id'] = 'Ban chua nhap ID';
    }
     
    if (empty($data['student_name'])){
        $errors['student_name'] = 'Ban chua nhap name';
    }
     
    if (empty($data['student_birth'])){
        $errors['student_birth'] = 'Ban chua nhap birth';
    }
    if (empty($data['student_class'])){
        $errors['student_class'] = 'Ban chua nhap class';
    }
    if (empty($data['student_home'])){
        $errors['student_home'] = 'Ban chua nhap home';
    }
    
     
    //  Nếu dữ liệu hợp lệ thì thực hiện thao tác update thông tin
    // đồng thời redirect về trang danh sách
    if (empty($errors)){
        updateStudent($data['student_id'], $data['student_name'], $data['student_birth'], $data['student_class'], $data['student_home']);
        header("Location:student-list.php");
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a href="student-list.php">BACK</a>
        <form method="post">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>MaSV</td>
                    <td>
                        <input type="text" name="id" value="<?php echo !empty($data['student_id']) ? $data['student_id'] : ''; ?>" />
                        <?php echo !empty($errors['student_id']) ? $errors['student_id'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Họ tên</td>
                    <td>
                        <input type="text" name="name" value="<?php echo !empty($data['student_name']) ? $data['student_name'] : ''; ?>" />
                        <?php echo !empty($errors['student_name']) ? $errors['student_name'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td>
                        <input type="date" name="birth" value="<?php echo !empty($data['student_birth']) ? $data['student_birth'] : ''; ?>" />
                        <?php echo !empty($errors['student_birth']) ? $errors['student_birth'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Lớp</td>
                    <td>
                        <input type="text" name="class" value="<?php echo !empty($data['student_class']) ? $data['student_class'] : ''; ?>" />
                        <?php echo !empty($errors['student_class']) ? $errors['student_class'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Quê quán</td>
                    <td>
                        <input type="text" name="home" value="<?php echo !empty($data['student_home']) ? $data['student_home'] : ''; ?>" />
                        <?php echo !empty($errors['student_home']) ? $errors['student_home'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="add_student" value="<?php echo ($is_update_action) ? "Cap nhat" : "Them moi"; ?>" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>