<?php
$target_dir = "img/products/";
$uploaded_file = $_FILES["hinhanh"]["name"]; // Lưu trữ tên file trước khi upload
$file_extension = strtolower(pathinfo($uploaded_file, PATHINFO_EXTENSION));
$unique_filename = uniqid() . "_" . time() . "." . $file_extension;
$target_file = $target_dir . $unique_filename;
$uploadOk = 1;

// Check if image file is an actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["hinhanh"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["hinhanh"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
$allowed_extensions = array("jpg", "jpeg", "png", "gif");
if (!in_array($file_extension, $allowed_extensions)) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // If everything is okay, try to upload the file
} else {
    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
        echo "The file " . $unique_filename . " has been uploaded.";

        // Lưu đường dẫn ảnh vào cột HinhAnh trong bảng sanpham
        $hinhanh = "/" . $unique_filename;
        $sql = "UPDATE sanpham SET HinhAnh = '$hinhanh' WHERE MaSP = '$masp'";
        mysqli_query($conn, $sql);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
