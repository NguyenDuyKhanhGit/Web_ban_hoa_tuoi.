<?php
$title = 'Liên Hệ';
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
        .lien-he {
            padding: 0 15px;
        }
    }
</style>

<div class="breadcrumb_bg">
    <div class="breadcrumb-box-img">
        <img src="../assets/img/bg_blog.jpg" alt="">
    </div>
    <div class="title-full">
        <div class="container">
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
            <p class="title-page">Liên hệ</p>
        </div>
    </div>
</div>
<div class="lien-he">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="page-title category-title">
                    <h1 class="title-head"><a href="#" class="tag-a">Liên hệ</a></h1>
                </div>
                <main>
                    <section class="contact-info">
                        <h1>Bạn cần hỗ trợ ?</h1>
                        <p>Rất hân hạnh được hỗ trợ bạn, hãy để lại thông tin cho chúng tôi.
                            Yêu cầu của bạn sẽ được xử lý và phản hồi trong thời guan tốt nhất !
                        </p>
                        <p>Hãy liên hệ với chúng tôi để được hỗ trợ tốt nhất!</p>

                        <div class="contact-details">
                            <div class="address">
                                <h2>Địa chỉ</h2>
                                <p> Đại Lộ Hòa Bình-Tân An-NinhKieu-Cần Thơ</p>
                            </div>

                            <div class="email">
                                <h2>Email</h2>
                                <p>info@hoatuoishop.com</p>
                            </div>

                            <div class="phone">
                                <h2>Điện thoại</h2>
                                <p>+84 123 456 789</p>
                            </div>
                        </div>

                        <div class="contact-form">
                            <h2>Gửi thông điệp</h2>
                            <form action="process_contact.php" method="post">
                                <label for="name">Họ và tên:</label><br>
                                <input type="text" id="name" name="name" required><br><br>

                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name="email" required><br><br>

                                <label for="message">Nội dung:</label><br>
                                <textarea id="message" name="message" required></textarea><br><br>

                                <input type="submit" value="Gửi">
                            </form>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</div>




<?php
include_once($baseUrl . 'layouts/footer.php');
?>