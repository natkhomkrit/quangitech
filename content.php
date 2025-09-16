<?php include "header.php"; ?>
<?php
// ----- การตั้งค่า Pagination -----
$items_per_page = 6;
$current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$current_category = isset($_GET['category']) ? $_GET['category'] : 'all';

// ----- ข้อมูลตัวอย่าง -----
$all_activities = [
    ['id' => 1, 'title' => 'ข่าว 1', 'desc' => 'รายละเอียด 1', 'category' => 'news', 'image' => 'assets/img/content/cont4.png', 'date' => '15 ส.ค. 2025'],
    ['id' => 2, 'title' => 'ข่าว 2', 'desc' => 'รายละเอียด 2', 'category' => 'news', 'image' => 'assets/img/content/6.png', 'date' => '16 ส.ค. 2025'],
    ['id' => 3, 'title' => 'กิจกรรม 1', 'desc' => 'รายละเอียด 3', 'category' => 'event', 'image' => 'assets/img/content/6.png', 'date' => '17 ส.ค. 2025'],
    ['id' => 4, 'title' => 'กิจกรรม 2', 'desc' => 'รายละเอียด 4', 'category' => 'event', 'image' => 'assets/img/content/6.png', 'date' => '18 ส.ค. 2025'],
    ['id' => 5, 'title' => 'ข่าว 3', 'desc' => 'รายละเอียด 5', 'category' => 'news', 'image' => 'assets/img/content/6.png', 'date' => '19 ส.ค. 2025'],
    ['id' => 6, 'title' => 'กิจกรรม 3', 'desc' => 'รายละเอียด 3', 'category' => 'event', 'image' => 'assets/img/content/6.png', 'date' => '20 ส.ค. 2025'],
    ['id' => 7, 'title' => 'กิจกรรม 4', 'desc' => 'รายละเอียด 4', 'category' => 'event', 'image' => 'assets/img/content/6.png', 'date' => '20 ส.ค. 2025'],
    ['id' => 8, 'title' => 'กิจกรรม 5', 'desc' => 'รายละเอียด 5', 'category' => 'event', 'image' => 'assets/img/content/6.png', 'date' => '20 ส.ค. 2025'],
    ['id' => 9, 'title' => 'ข่าว 4', 'desc' => 'รายละเอียด 4', 'category' => 'news', 'image' => 'assets/img/content/6.png', 'date' => '20 ส.ค. 2025'],
    // เพิ่มรายการอื่น ๆ ตามต้องการ
];

// ----- กรองข้อมูลตามหมวด -----
$filtered_activities = array_filter($all_activities, function ($activity) use ($current_category) {
    return $current_category === 'all' || $activity['category'] === $current_category;
});

// ----- คำนวณ pagination -----
$total_items = count($filtered_activities);
$total_pages = ceil($total_items / $items_per_page);
if ($current_page > $total_pages) $current_page = max(1, $total_pages);

// ----- ดึงข้อมูลสำหรับหน้าปัจจุบัน -----
$start_index = ($current_page - 1) * $items_per_page;
$current_activities = array_slice($filtered_activities, $start_index, $items_per_page);
?>

<!-- ***** Breadcrumb Area start ***** -->
<section class="section breadcrumb-area d-flex align-items-center" style="margin-bottom:0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content text-center">
                    <h2 data-aos="fade-up" data-aos-duration="1500">NEWS AND ACTIVITIES</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item" data-aos="fade-right" data-aos-duration="1500"><a class="text-uppercase text-white" href="index.php">หน้าหลัก</a></li>

                        <li class="breadcrumb-item text-white active" data-aos="fade-left" data-aos-duration="1700">ข่าวสารและกิจกรรม</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!-- Activities -->
<section id="activities" class="activities-area overflow-hidden ptb_100">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h1>ข่าวสารและกิจกรรม</h1>
            <p>ติดตามข่าวสารและกิจกรรมที่น่าสนใจของเรา</p>
        </div>

        <!-- Filter -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <a href="?category=all&page=1"
                    class="filter-btn m-2 <?php echo $current_category == 'all' ? 'active-category' : ''; ?>">ทั้งหมด</a>
                <a href="?category=news&page=1" class="filter-btn m-2 <?php echo $current_category == 'news' ? 'active-category' : ''; ?>">ข่าวสาร</a>
                <a href="?category=event&page=1" class="filter-btn m-2 <?php echo $current_category == 'event' ? 'active-category' : ''; ?>">กิจกรรม</a>
            </div>
        </div>

        <!-- News / Activities -->
        <div class="row">
            <?php if (count($current_activities) > 0): ?>
                <?php foreach ($current_activities as $activity): ?>
                    <div class="col-6 col-md-4 mb-4">
                        <a href="condetail.php?id=<?php echo $activity['id']; ?>" class="text-decoration-none">
                            <div class="content-card">
                                <div class="content-date"><?php echo $activity['date']; ?></div>
                                <img src="<?php echo $activity['image']; ?>" alt="<?php echo $activity['title']; ?>" class="content-image">
                                <div class="content-overlay">
                                    <h3 class="content-title"><?php echo $activity['title']; ?></h3>
                                    <p class="content-description"><?php echo $activity['desc']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <h4>ไม่มีข่าวสารหรือกิจกรรมในขณะนี้</h4>
                    <p>กรุณาตรวจสอบอีกครั้งในภายหลัง</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
            <div class="mt-5">
                <ul class="custom-pagination justify-content-center">
                    <!-- ปุ่มย้อนกลับ -->
                    <li class="pagination-item <?php echo $current_page == 1 ? 'disabled' : ''; ?>">
                        <a class="pagination-link" href="?category=<?php echo $current_category; ?>&page=<?php echo max($current_page - 1, 1); ?>" id="prev-page">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>

                    <!-- หมายเลขหน้า -->
                    <?php
                    // กำหนดช่วงหน้าที่จะแสดง
                    $start_page = max(1, $current_page - 2);
                    $end_page = min($total_pages, $start_page + 4);

                    // ปรับให้แสดง 5 ปุ่มเสมอถ้าเป็นไปได้
                    if ($end_page - $start_page < 4) {
                        $start_page = max(1, $end_page - 4);
                    }

                    for ($i = $start_page; $i <= $end_page; $i++):
                    ?>
                        <li class="pagination-item <?php echo $i == $current_page ? 'active' : ''; ?>">
                            <a class="pagination-link" href="?category=<?php echo $current_category; ?>&page=<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <!-- ปุ่มไปข้างหน้า -->
                    <li class="pagination-item <?php echo $current_page == $total_pages ? 'disabled' : ''; ?>">
                        <a class="pagination-link" href="?category=<?php echo $current_category; ?>&page=<?php echo min($current_page + 1, $total_pages); ?>" id="next-page">
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
<!--====== Call To Action Area Start ======-->
<section class="section cta-area bg-overlay ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <!-- Section Heading -->
                <div class="section-heading3 text-center m-0">
                    <h2>Looking for the best digital agency and marketing solution?</h2>
                    <p class="text-white d-none d-sm-block mt-4">เรามีบริการครบวงจรด้านซอฟต์แวร์ เทคโนโลยีสารสนเทศ และดิจิทัล ไม่ว่าจะเป็นการพัฒนาเว็บไซต์ แอปพลิเคชัน การจัดการฐานข้อมูล และการอบรมคอมพิวเตอร์</p>
                    <a href="contact" class="btn btn-bordered-white mt-4">ติดต่อเรา</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Call To Action Area End ======-->
<?php include "footer.php"; ?>