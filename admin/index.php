<?php include './inc/menu.php'; ?>
<?php include './inc/header.php'; ?>

<?php
if (isset($_GET["q"])) {
    switch ($_GET["q"]) {
        case 'homepage':
            include_once 'pages/homepage.php';
            break;
        case 'staff':
            if (Session::get('level') == "0") {
                include_once 'pages/staff.php';
            } else {
                echo "<script>alert('Bạn không có quyền truy cập vào trang này!'); window.location='?q=homepage';</script>";
            }
            break;
        case 'updatestaff':
            if (Session::get('level') == "0") {
                include_once 'pages/updatestaff.php';
            } else {
                echo "<script>alert('Bạn không có quyền truy cập vào trang này!'); window.location='?q=homepage';</script>";
            }
            break;
        case 'product':
            if (Session::get('level') < 2) {
                include_once 'pages/product.php';
            } else {
                echo "<script>alert('Bạn không có quyền truy cập vào trang này!'); window.location='?q=homepage';</script>";
            }
            break;
        case 'carcompany':
            if (Session::get('level') < 2) {
                include_once 'pages/carcompany.php';
            } else {
                echo "<script>alert('Bạn không có quyền truy cập vào trang này!'); window.location='?q=homepage';</script>";
            }
            break;
        case 'updatecarcompany':
            if (Session::get('level') < 2) {
                include_once 'pages/updatecarcompany.php';
            } else {
                echo "<script>alert('Bạn không có quyền truy cập vào trang này!'); window.location='?q=homepage';</script>";
            }
            break;
        case 'driver':
            if (Session::get('level') < 2) {
                include_once('pages/driver.php');
            } else {
                echo "<script>alert('Bạn không có quyền truy cập vào trang này!'); window.location='?q=homepage';</script>";
            }
            break;
    }
} else {
    include_once 'pages/homepage.php';
}
?>

<?php include './inc/footer.php'; ?>