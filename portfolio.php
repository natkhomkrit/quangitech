<?php include "header.php"; ?>
<?php
// ข้อมูลตัวอย่าง - ในอนาคตจะเปลี่ยนไปดึงจาก database
$portfolio_items = [
    ['id' => 1, 'title' => 'ระบบ (SAR)', 'desc' => 'พัฒนาเว็บไซด์และแอปพลิเคชันระบบการประเมินเมืองสิ่งแวดล้อมยั่งยืน', 'category' => 'system', 'image' => 'assets/img/portfolio/port3.png', 'date' => '15 ส.ค. 2025'],
    ['id' => 2, 'title' => 'Green Platform', 'desc' => 'พัฒนาเว็บไซต์และแอปพลิเคชัน Green Platform', 'category' => 'system', 'image' => 'assets/img/portfolio/port5.png', 'date' => '16 ส.ค. 2025'],
    ['id' => 3, 'title' => 'Entry Thailand', 'desc' => 'พัฒนาระบบ Entry Thailand กระทรวงการท่องเที่ยวและกีฬา', 'category' => 'system', 'image' => 'assets/img/portfolio/port8.png', 'date' => '17 ส.ค. 2025'],
    ['id' => 4, 'title' => 'ออกแบบสื่อสิ่งพิมพ์', 'desc' => 'บริการพิมพ์ออกแบบป้ายร้านค้า', 'category' => 'printing', 'image' => 'assets/img/portfolio/print2.png', 'date' => '18 ส.ค. 2025'],
    ['id' => 5, 'title' => 'Ifreshdelivery', 'desc' => 'แอปพลิเคชันช่วยร้านอาหารสั่งซื้อของสดเข้าร้านผ่านระบบ Mobile Application', 'category' => 'system', 'image' => 'assets/img/portfolio/port4.png', 'date' => '19 ส.ค. 2025'],
    ['id' => 6, 'title' => 'อบรมการวิเคราะห์ข้อมูลด้วยโปรแกรม WEKA ', 'desc' => 'การอบรมการทำธุรกิจออนไลน์ ด้วยเครือข่ายสังคมออนไลน์ การใช้งานภูมิสารสนเทศเบื้องต้น โดย QGIS ', 'category' => 'training', 'image' => 'assets/img/portfolio/print1.png', 'date' => '20 ส.ค. 2025'],
    ['id' => 7, 'title' => 'โปรแกรมสำเร็จรูป', 'desc' => 'โปรแกรมบริหารจัดการร้านค้า Online', 'category' => 'package', 'image' => 'assets/img/portfolio/port7.png', 'date' => '22 ส.ค. 2025'],
    ['id' => 8, 'title' => 'Inter of Think (IoT)', 'desc' => 'จำหน่ายอุปกรณ์ในการอบรม Inter of Think (IoT) วิทยาลัยการอาชีพปากช่อง', 'category' => 'office', 'image' => 'assets/img/portfolio/port6.png', 'date' => '23 ส.ค. 2025'],
    ['id' => 9, 'title' => 'Dashboard วิเคราะห์ข้อมูล', 'desc' => 'Dashboard สำหรับติดตาม KPI', 'category' => 'data', 'image' => 'assets/img/portfolio/#.png', 'date' => '24 ส.ค. 2025'],
];

// ตั้งค่า Pagination
$items_per_page = 6;
$current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$current_category = isset($_GET['category']) ? $_GET['category'] : 'all';

// กรองข้อมูลตามหมวดหมู่
$filtered_items = array_filter($portfolio_items, function ($item) use ($current_category) {
    return $current_category === 'all' || $item['category'] === $current_category;
});

// คำนวณ Pagination
$total_items = count($filtered_items);
$total_pages = ceil($total_items / $items_per_page);
if ($current_page > $total_pages) $current_page = max(1, $total_pages);

// ดึงข้อมูลสำหรับหน้าปัจจุบัน
$start_index = ($current_page - 1) * $items_per_page;
$current_items = array_slice($filtered_items, $start_index, $items_per_page);
?>
<!-- ***** Breadcrumb Area start ***** -->
<section class="section breadcrumb-area d-flex align-items-center" style="margin-bottom:0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content text-center">
                    <h2 data-aos="fade-up" data-aos-duration="1500">OUR PAST WORKS</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item" data-aos="fade-right" data-aos-duration="1500"><a class="text-uppercase text-white" href="index.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item text-white active" data-aos="fade-left" data-aos-duration="1700">ผลงาน</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Portfolio Area Start ***** -->
<section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
    <div class="container">
        <!-- หัวข้อหลัก -->
        <div class="section-title">
            <h2>การันตี ผลงานเว็บไซต์จริงจากลูกค้าทั่วประเทศ</h2>
        </div>

        <!-- Filter หมวดหมู่ -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="portfolio-filter text-center">
                    <a href="?category=all&page=1" class="filter-btn <?php echo $current_category == 'all' ? 'active' : ''; ?>">ทั้งหมด</a>
                    <a href="?category=system&page=1" class="filter-btn <?php echo $current_category == 'system' ? 'active' : ''; ?>">System Development</a>
                    <a href="?category=office&page=1" class="filter-btn <?php echo $current_category == 'office' ? 'active' : ''; ?>">Office Supplies & Equipment</a>
                    <a href="?category=data&page=1" class="filter-btn <?php echo $current_category == 'data' ? 'active' : ''; ?>">Data Analysis & Cleaning</a>
                    <a href="?category=printing&page=1" class="filter-btn <?php echo $current_category == 'printing' ? 'active' : ''; ?>">Printing Services</a>
                    <a href="?category=training&page=1" class="filter-btn <?php echo $current_category == 'training' ? 'active' : ''; ?>">Computer Training</a>
                    <a href="?category=package&page=1" class="filter-btn <?php echo $current_category == 'package' ? 'active' : ''; ?>">Package Programs</a>
                </div>
            </div>
        </div>

        <!-- ผลงาน -->
        <div class="row">
            <?php if (count($current_items) > 0): ?>
                <?php foreach ($current_items as $item): ?>
                    <?php
                    $category_names = [
                        'system' => 'System Development',
                        'office' => 'Office Supplies & Equipment',
                        'data' => 'Data Analysis & Cleaning',
                        'printing' => 'Printing Services',
                        'training' => 'Computer Training',
                        'package' => 'Package Programs'
                    ];
                    ?>
                    <div class="col-6 col-md-4 mb-4">
                        <a href="portdetail.php?id=<?php echo $item['id']; ?>" class="text-decoration-none">
                            <div class="content-card">
                                <div class="content-date"><?php echo $item['date']; ?></div>
                                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" class="content-image">
                                <div class="content-overlay">
                                    <span class="category-badge"><?php echo $category_names[$item['category']]; ?></span>
                                    <h3 class="content-title"><?php echo $item['title']; ?></h3>
                                    <p class="content-description"><?php echo $item['desc']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <h4>ไม่มีผลงานในหมวดหมู่นี้</h4>
                    <p>กรุณาเลือกหมวดหมู่อื่นหรือตรวจสอบอีกครั้งในภายหลัง</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
            <div class="mt-5">
                <ul class="custom-pagination justify-content-center">
                    <li class="pagination-item <?php echo $current_page == 1 ? 'disabled' : ''; ?>">
                        <a class="pagination-link" href="?category=<?php echo $current_category; ?>&page=<?php echo max($current_page - 1, 1); ?>">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>

                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="pagination-item <?php echo $i == $current_page ? 'active' : ''; ?>">
                            <a class="pagination-link" href="?category=<?php echo $current_category; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <li class="pagination-item <?php echo $current_page == $total_pages ? 'disabled' : ''; ?>">
                        <a class="pagination-link" href="?category=<?php echo $current_category; ?>&page=<?php echo min($current_page + 1, $total_pages); ?>">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 4L10 8L6 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- ***** Portfolio Area End ***** -->

<!-- ***** Review Portfolio Area Start ***** -->
<section id="portfolio" class="section portfolio-area bg-overlay ptb_100">
    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out" data-aos-duration="1500">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Our Recent Works</h2>
                    <p class="d-none d-sm-block mt-4">ผลงานตัวอย่างที่แสดงถึงความเชี่ยวชาญและคุณภาพการทำงานของเรา ครอบคลุมทั้งงานออกแบบ พัฒนา และโซลูชันด้านดิจิทัล</p>
                </div>
            </div>
        </div>
        <!-- Portfolio Items -->
        <div class="swiper-container" data-aos="flip-up" data-aos-duration="1500">
            <div class="swiper-wrapper">
                <!-- Portfolio Item 1 -->
                <div class="swiper-slide">
                    <div class="single-case-studies">
                        <a href="portdetail.php">
                            <img src="assets/img/portfolio/port3.png" alt="Portfolio 1">
                        </a>
                        <a href="portdetail.php" class="case-studies-overlay">
                            <span class="overlay-text">
                                <h3>ระบบ (SAR)</h3>
                                <p>System Development</p>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Portfolio Item 2 -->
                <div class="swiper-slide">
                    <div class="single-case-studies">
                        <a href="portdetail.php">
                            <img src="assets/img/portfolio/port5.png" alt="Portfolio 2">
                        </a>
                        <a href="portdetail.php" class="case-studies-overlay">
                            <span class="overlay-text text-center p-3">
                                <h3 class="text-white mb-3">Green Platform</h3>
                                <p class="text-white">System Development</p>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Portfolio Item 3 -->
                <div class="swiper-slide">
                    <div class="single-case-studies">
                        <a href="portdetail.php">
                            <img src="assets/img/portfolio/port8.png" alt="Portfolio 3">
                        </a>
                        <a href="portdetail.php" class="case-studies-overlay">
                            <span class="overlay-text text-center p-3">
                                <h3 class="text-white mb-3">Entry Thailand</h3>
                                <p class="text-white">System Development</p>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Portfolio Item 4 -->
                <div class="swiper-slide">
                    <div class="single-case-studies">
                        <a href="portdetail.php">
                            <img src="assets/img/portfolio/print2.png" alt="Portfolio 4">
                        </a>
                        <a href="portdetail.php" class="case-studies-overlay">
                            <span class="overlay-text text-center p-3">
                                <h3 class="text-white mb-3">ออกแบบสื่อสิ่งพิมพ์</h3>
                                <p class="text-white">Printing Services</p>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Portfolio Item 5 -->
                <div class="swiper-slide">
                    <div class="single-case-studies">
                        <a href="portdetail.php">
                            <img src="assets/img/portfolio/port4.png" alt="Portfolio 5">
                        </a>
                        <a href="portdetail.php" class="case-studies-overlay">
                            <span class="overlay-text text-center p-3">
                                <h3 class="text-white mb-3">Ifreshdelivery</h3>
                                <p class="text-white">System Development</p>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Portfolio Item 6 -->
                <div class="swiper-slide">
                    <div class="single-case-studies">
                        <a href="portdetail.php">
                            <img src="assets/img/portfolio/port6.png" alt="Portfolio 1">
                        </a>
                        <a href="portdetail.php" class="case-studies-overlay">
                            <span class="overlay-text text-center p-3">
                                <h3 class="text-white mb-3">Inter of Think (IoT)</h3>
                                <p class="text-white">Package Programs</p>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Add Pagination -->
            <!-- Add Navigation -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="row justify-content-center">
            <a href="portfolio" class="btn btn-bordered-white mt-4">ดูเพิ่มเติม</a>

        </div>
    </div>
</section>
<!-- ***** Review Portfolio Area End ***** -->

<!--====== Contact Area Start ======-->
<section id="contact" class="contact-area ptb_100">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-5" data-aos="fade-right" data-aos-duration="1500">
                <div class="section-heading2 text-center mb-3">
                    <h2>Let's connect!</h2>
                    <p class="d-none d-sm-block mt-4">มาติดต่อกันวันนี้แล้วค้นพบวิธีที่เราจะช่วยให้ธุรกิจของคุณเติบโตไปข้างหน้า และให้เราได้เป็นส่วนหนึ่งของคุณ</p>
                </div>
                <!-- Contact Us -->
                <div class="contact-us">
                    <ul>
                        <li class="contact-info text-center p-5 m-3" data-aos="fade-right" data-aos-duration="1500">
                            <a class="d-block my-2" href="tel:0812345678">
                                <span><i class="fas fa-mobile-alt fa-3x contact-icon-mobile"></i></span>
                            </a>
                            <h3 class="contact-number">081-234-5678</h3>
                        </li>
                        <li class="contact-info text-center p-5 m-3" data-aos="fade-right" data-aos-duration="1700">
                            <a class="d-block my-2" href="mailto:quangitech@gmail.com">
                                <span><i class="fas fa-envelope-open-text fa-3x contact-icon-mail"></i></span>
                            </a>
                            <h3 class="contact-email">quangitech@gmail.com</h3>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Box -->
            <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                <div class="contact-box text-center">
                    <!-- Contact Form -->
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" data-aos="fade-left" data-aos-duration="1500">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group" data-aos="fade-left" data-aos-duration="1700">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group" data-aos="fade-left" data-aos-duration="1800">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group" data-aos="fade-left" data-aos-duration="1900">
                                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-12" data-aos="fade-left" data-aos-duration="2000">
                                <button type="submit" class="btn btn-block mt-3" name="save" style="background:#FFB87A !important; color:#fff !important; border:none !important; box-shadow:0 0 0 2px #FFB87A !important;"> <span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Contact Area End ======-->

<!--====== Call To Action Area Start ======-->
<section class="section cta-area bg-overlay ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10" data-aos="fade-up" data-aos-duration="1500">
                <!-- Section Heading -->
                <div class="section-heading3 text-center m-0">
                    <h2>Looking for the best digital agency & marketing solution?</h2>
                    <p class="text-white d-none d-sm-block mt-4">เรามีบริการครบวงจรด้านซอฟต์แวร์ เทคโนโลยีสารสนเทศ และดิจิทัล ไม่ว่าจะเป็นการพัฒนาเว็บไซต์ แอปพลิเคชัน การจัดการฐานข้อมูล และการอบรมคอมพิวเตอร์</p>
                    <a href="contact" class="btn btn-bordered-white mt-4">ติดต่อเรา</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Call To Action Area End ======-->

<!--====== Footer Area Start ======-->
<?php include "footer.php"; ?>