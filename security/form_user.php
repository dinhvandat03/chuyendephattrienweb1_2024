<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;

function customDecode($encodedId) {
    $mapping = ['*' => '0', '&' => '1', 'B' => '2', 'U' => '3', 'Y' => '4', 'G' => '5','D'=>'6','A'=>'7','T'=>'8','Z'=>'9'];
    return strtr($encodedId, $mapping);
}


// function customEncode($id) {
//     $mapping = ['0' => '*', '1' => '&', '2' => 'B', '3' => 'U', '4' => 'Y', '5' => 'G','6' =>'D','7'=>'A','8'=>'T','9'=>'Z'];
//     return strtr($id, $mapping);
// }

if (!empty($_GET['id'])) {
    $_id = customDecode($_GET['id']);
    $user = $userModel->findUserById($_id); // Update existing user
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate name
    if (empty($_POST['name'])) {
        $errors['name'] = 'Bắt buộc nhập.';
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $_POST['name'])) {
        $errors['name'] = 'Chiều dài phải từ 5 đến 15 ký tự .';
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors['password'] = 'Bắt buộc nhập password.';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/', $_POST['password'])) {
        $errors['password'] = 'Chiều dài phải từ 5 đến 10 ký tự .';
    }

    // // Nếu không có lỗi, thực hiện thêm hoặc cập nhật người dùng
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }


    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                    <?php if (isset($errors['name'])) { ?>
                        <div class="text-danger"><?php echo  $errors['name']; ?></div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (isset($errors['password'])) { ?>
                        <div class="text-danger"><?php echo $errors['password']; ?></div>
                    <?php } ?>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
