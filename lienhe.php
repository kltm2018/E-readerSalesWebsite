<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <title>Thế giới máy đọc sách chính hãng - chất lượng, chính hãng, giá tốt</title>
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="lib/Jquery/Jquery.min.js"></script>

    <!-- owl carousel libraries -->
    <link rel="stylesheet" href="lib/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/owlcarousel/owl.theme.default.min.css">
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!-- Slider -->
    <link rel="stylesheet" href="lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinHTML5.css">
    <script src="lib/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>

    <!-- tidio - live chat -->
    <!-- <script src="//code.tidio.co/bfiiplaaohclhqwes5xivoizqkq56guu.js"></script> -->

    <!-- our files -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/topnav.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/taikhoan.css">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/home_products.css">
    <link rel="stylesheet" href="css/pagination_phantrang.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- js -->
    <script src="js/dungchung.js"></script>
    <script src="js/trangchu.js"></script>

    <?php require_once "php/echoHTML.php"; ?>
</head>

<body>

    <?php addTopNav(); ?>

    <section>
		<?php 
			addHeader(); 
			// addHome();
		?>
	</section>

    <?php

    // Cấu hình tiêu đề trang
    $title = "Thông tin liên hệ";


    // Nội dung trang
    $store_name = "Xoài Store - Cửa hàng máy đọc sách";
    $location = "280 An Dương Vương, phường 4, quận 5, TP.HCM, Việt Nam";
    $working_hours = "từ 9:00 AM đến 8:00 PM";

    ?>

    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <style>
            /* Đặt lại margin và padding cơ bản cho toàn bộ trang */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            /* Cài đặt phông chữ và màu nền chung cho trang */
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #f9f9f9;
                color: #333;
                line-height: 1.6;
                margin: 0;
            }

            /* Định dạng container của trang */
            .container {
                width: 80%;
                margin: 50px auto;
                background-color: #fff;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease-in-out;
            }

            /* Hiệu ứng khi di chuột vào container */
            .container:hover {
                box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            }

            /* Định dạng tiêu đề */
            h1 {
                color: #2c3e50;
                font-size: 2.5em;
                text-align: center;
                margin-bottom: 20px;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-weight: 700;
            }

            h2 {
                color: #2980b9;
                font-size: 1.8em;
                margin-bottom: 15px;
                text-transform: capitalize;
                font-weight: 600;
            }

            /* Định dạng đoạn văn và nội dung chung */
            p {
                font-size: 1.1em;
                margin-bottom: 15px;
                color: #555;
            }

            /* Định dạng danh sách yêu cầu và quyền lợi */
            ul {
                list-style-type: none;
                padding-left: 20px;
                margin-bottom: 30px;
            }

            ul li {
                font-size: 1.1em;
                padding-left: 25px;
                position: relative;
                margin-bottom: 10px;
                color: #7f8c8d;
            }

            /* Thêm biểu tượng trước mỗi dòng trong danh sách */
            ul li::before {
                content: "\2022";
                color: #27ae60;
                font-weight: bold;
                display: inline-block;
                width: 20px;
                position: absolute;
                left: 0;
            }

            /* Thêm hiệu ứng cho nút nộp hồ sơ */
            .apply-btn {
                display: block;
                width: 200px;
                padding: 15px;
                background-color: #27ae60;
                color: white;
                text-align: center;
                border-radius: 5px;
                text-transform: uppercase;
                font-size: 1.1em;
                font-weight: bold;
                margin: 20px auto;
                text-decoration: none;
                transition: background-color 0.3s ease-in-out;
            }

            .apply-btn:hover {
                background-color: #2ecc71;
            }

            /* Phong cách responsive cho màn hình nhỏ hơn */
            @media (max-width: 768px) {
                .container {
                    width: 90%;
                    padding: 20px;
                }

                h1 {
                    font-size: 2em;
                }

                h2 {
                    font-size: 1.5em;
                }

                ul li {
                    font-size: 1em;
                }

                .apply-btn {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <p><strong>Cửa hàng:</strong> <?php echo $store_name; ?></p>
            <p><strong>Địa điểm:</strong> <?php echo $location; ?></p>
            <p><strong>Thời gian hoạt động:</strong> <?php echo $working_hours; ?></p>
            <br>
            <p style="font-style: italic; text-decoration: underline;">Mọi thắc mắc về sản phẩm xin liên hệ:</p>

            <h2>Võ Thị Quế Trân</h2>
            <ul>
                <li>Email: <a style="color: blue; text-decoration: underline;" href="mailto:qtranvo2003@gmail.com">qtranvo2003@gmail.com</a></li>
                <li>Phone: <a style="color: blue; text-decoration: underline;" href="tel:012 345 6789">012 345 6789</a></li>
                <li>Github: <a style="color: blue; text-decoration: underline;" target="_blank" href="https://github.com/qtranvox">github.com/qtranvox</a></li>
            </ul>

            <h2>Bùi Văn Hiệp</h2>
            <ul>
                <li>Email: <a style="color: blue; text-decoration: underline;" href="mailto:4401704021@student.hcmue.edu.vn">4401704021@student.hcmue.edu.vn</a></li>
                <li>Phone: <a style="color: blue; text-decoration: underline;" href="tel:098 765 4321">098 765 4321</a></li>
                <li>Github: <a style="color: blue; text-decoration: underline;" target="_blank" href="https://github.com/kltm2018">github.com/kltm2018</a></li>
            </ul>

        </div>
    </body>
    </html>

    <br>

    <?php
    addContainTaiKhoan();
    addPlc();
    ?>

    <div class="footer">
		<?php addFooter(); ?>
	</div>

    <i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
    <i class="fa fa-arrow-down" id="goto-bot-page" onclick="gotoBot()"></i>

</body>

</html>