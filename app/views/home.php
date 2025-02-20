<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="/clb/app/public/css/style.css">
</head>

<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Chức năng 1</a></li>
            <li><a href="#">Chức năng 2</a></li>
            <li><a href="#">Chức năng 3</a></li>
            <li><a href="#">Chức năng 4</a></li>
            <li><a href="#">Chức năng 5</a></li>
            <li><a href="#">Chức năng 6</a></li>
            <li><a href="#">Chức năng 7</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Chào mừng <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Đây là trang chủ sau khi đăng nhập thành công.</p>
        <a href="index.php?action=logout">Đăng xuất</a>
    </div>
</body>

</html>