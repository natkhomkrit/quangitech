<?php include "header.php"; ?>

<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area d-flex align-items-center" style="margin-bottom:0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                    <h2 class="text-uppercase mb-3" data-aos="fade-up" data-aos-duration="1500">NEW AND ACTIVITIES</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" data-aos="fade-right" data-aos-duration="1500"><a class="text-uppercase text-white" href="index.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item" data-aos="zoom-in" data-aos-duration="1500"><a class="text-uppercase text-white" href="content.php">ข่าวสารและกิจกรรม</a></li>
                        <li class="breadcrumb-item text-white active" data-aos="fade-left" data-aos-duration="1700">รายละเอียด</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** content Detail Area Start ***** -->
<section class="section content-area ptb_100" style="padding-top:40px; padding-bottom:40px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="image-gallery">
                    <!-- Main Image -->
                    <div class="main-image text-center mb-4">
                        <img id="featured-image" src="assets/img/content/cont4.png" alt="Featured" class="responsive-image">
                    </div>

                    <!-- Thumbnail Gallery -->
                    <div class="thumbnail-gallery" style="padding-bottom: 20px;">
                        <img class="thumbnail active" src="assets/img/content/cont4.png" alt="Thumbnail 1" onclick="changeImage(this)">
                        <img class="thumbnail" src="assets/img/content/cont6.png" alt="Thumbnail 2" onclick="changeImage(this)">
                        <img class="thumbnail" src="assets/img/content/cont5.png" alt="Thumbnail 3" onclick="changeImage(this)">
                        <img class="thumbnail" src="assets/img/content/cont1.png" alt="Thumbnail 4" onclick="changeImage(this)">
                        <img class="thumbnail" src="assets/img/content/cont2.png" alt="Thumbnail 5" onclick="changeImage(this)">
                    </div>
                <h2>Activity test</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
            </div>
        </div>
    </div>
</section>
<!-- ***** content Detail Area End ***** -->

<!--====== Call To Action Area Start ======-->
<section class="section cta-area bg-overlay ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <!-- Section Heading -->
                <div class="section-heading3 text-center m-0">
                    <h2>Looking for the best digital agency and marketing solution?</h2>
                    <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    <a href="contact" class="btn btn-bordered-white mt-4">ติดต่อเรา</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Call To Action Area End ======-->
<?php include "footer.php"; ?>
