<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/category.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Header</title>
</head>

<body>
    <div class="contain d-f f-d al-c">
        <header class="w-100">
            <div class="manage_website w-100 d-f jf-c">
                Quản trị website
            </div>
            <div class="navBar">
                <ul class="d-f">
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Danh mục</a></li>
                    <li><a href="">Hàng hóa</a></li>
                    <li><a href="">Khách hàng</a></li>
                    <li><a href="">Bình luận</a></li>
                    <li><a href="">Thống kê</a></li>
                </ul>

            </div>

        </header>
        <main class="w-100">
            <div class="add_new w-100">
                Thêm mới loại hàng hóa
            </div>
            <label style="font-weight: 500;margin: 10px 0px;display: block;" for="">Mã loại</label>
            <div class="id_category">
                auto number
            </div>
            <form action="" class="d-f f-d" method="POST">
                <label for="name_category">Tên loại</label>
                <input type="text" id="name_category" autofocus name="name_category">
                <div class="button_form">
                    <input type="submit" class="btn_name_category" name="add_new" value="Them moi" />

                    <input type="reset" class="btn_name_category" value="reset" />

                    <a href=""><input type="button" type="text" value=" Danh sách"></a>

                </div>

            </form>
        </main>
    </div>
</body>

</html>