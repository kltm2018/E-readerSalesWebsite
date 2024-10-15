<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chính sách bảo hành - Xoài Store</title>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

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

            /* Thêm hiệu ứng cho nút */
            .cta-button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #28a745;
                color: #fff;
                text-align: center;
                border-radius: 5px;
                margin-top: 20px;
                font-size: 16px;
                font-weight: bold;
                text-decoration: none;
            }

        .cta-button:hover {
            background-color: #218838;
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
<?php addTopNav(); ?>

<section>
    <?php 
        addHeader(); 
        // addHome();
    ?>
</section>

<div class="container">
    <h1>Chính sách bảo hành - Xoài Store</h1>

    <p>Tại Xoài Store, chúng tôi luôn cam kết cung cấp những sản phẩm máy đọc sách chất lượng cao với dịch vụ bảo hành tận tâm. Chính sách bảo hành của chúng tôi nhằm đảm bảo quyền lợi tối đa cho khách hàng.</p>

    <h2>Điều kiện bảo hành</h2>
    <ul>
        <li>Sản phẩm được bảo hành miễn phí trong vòng <strong>12 tháng</strong> kể từ ngày mua hàng.</li>
        <li>Sản phẩm gặp lỗi kỹ thuật do nhà sản xuất.</li>
        <li>Sản phẩm còn nguyên vẹn, không bị hư hỏng do tác động bên ngoài.</li>
        <li>Có hóa đơn mua hàng và tem bảo hành còn nguyên vẹn.</li>
    </ul>

    <h2>Những trường hợp không được bảo hành</h2>
    <ul>
        <li>Sản phẩm bị hư hỏng do tác động ngoại lực, tai nạn, hoặc thiên tai.</li>
        <li>Sản phẩm bị sửa chữa hoặc thay thế linh kiện tại những nơi không được ủy quyền bởi Xoài Store.</li>
        <li>Sản phẩm bị hỏng do sử dụng không đúng hướng dẫn của nhà sản xuất.</li>
    </ul>

    <p>Chúng tôi khuyến khích khách hàng liên hệ với đội ngũ hỗ trợ của chúng tôi nếu có bất kỳ câu hỏi nào liên quan đến chính sách bảo hành hoặc các vấn đề kỹ thuật.</p>

    <a href="lienhe.php" class="cta-button">Liên hệ bộ phận bảo hành</a>

    <br>
    

</div>
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
