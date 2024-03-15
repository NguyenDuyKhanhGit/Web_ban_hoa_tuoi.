<?php
$title = 'Giới thiệu';
$baseUrl = '../';
include_once($baseUrl . 'layouts/header.php');
?>
<style>
    .content-page {
        padding: 15px 0;
    }

    .title-head a {
        color: #000;
    }

    @media screen and (max-width:740px) {
        .gioi-thieu {
            padding: 0 15px;
        }
    }

    main {
        padding: 20px;
    }

    .intro {
        text-align: center;
        margin-bottom: 30px;
    }

    .info {
        margin-bottom: 20px;
    }
</style>

<div class="breadcrumb_bg">
    <div class="breadcrumb-box-img">
        <img src="../assets/img/bg_blog.jpg" alt="">
    </div>
    <div class="title-full">
        <div class="container">
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
            <p class="title-page">Giới thiệu</p>
        </div>
    </div>
</div>
<div class="gioi-thieu">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="page-title category-title">               
                </div>
                <main>
                    <div class="intro">
                        <h2>Chào mừng bạn đến với Shop Hoa Tươi!</h2>
                        <p>Chúng tôi cung cấp những bó hoa tươi đẹp nhất và dịch vụ tốt nhất cho bạn.</p>
                    </div>
                    <div class="info">
                        <h3>Giới thiệu về shop</h3>
                        <p>Shop Hoa Tươi là nơi bạn có thể tìm thấy những bó hoa tươi đẹp nhất với nhiều loại hoa phong phú. Chúng tôi cam kết cung cấp những sản phẩm chất lượng nhất và dịch vụ tận tâm nhất đến với khách hàng.</p>
                    </div>
                    <div class="info">
                        <h3>Dịch vụ của chúng tôi</h3>
                        <p>- Bó hoa tươi</p>
                        <p>- Giao hàng nhanh chóng và đúng hẹn</p>
                        <p>- Dịch vụ chăm sóc khách hàng 24/7</p>
                    </div>
                    <!-- Bạn có thể thêm các phần thông tin khác về shop ở đây -->
                </main>
            </div>
        </div>
    </div>
</div>




<?php
include_once($baseUrl . 'layouts/footer.php');
?>