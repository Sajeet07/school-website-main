<?php require('inc/header.php'); ?>

<!-- start slider -->
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators " style="margin-bottom: 49px;">

        <?php
        require('connection/config.php');

        // Fetch slider data from the database
        $sql = "SELECT * FROM sliders";
        $result = mysqli_query($conn, $sql);
        $sliders = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $numSliders = count($sliders);

        for ($i = 0; $i < $numSliders; $i++) {
            $activeClass = ($i == 0) ? 'active' : '';
        ?>
            <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $activeClass; ?>"></li>
        <?php
        }
        ?>
    </ul>
    <div class="carousel-inner">
        <?php
        foreach ($sliders as $index => $slider) {
            $activeClass = ($index == 0) ? 'active' : '';
        ?>
            <div class="carousel-item <?= $activeClass; ?>">
                <img src="<?php echo $slider['img']; ?>" alt="<?= $slider['alt_text']; ?>" class="img-fluid">
                <div class="carousel-caption animated fadeInLeft delay-0.5s">
                    <h1 class="font-weight-bold"><?= $slider['h1']; ?></h1>
                    <h6 class="banner-desc"><?= $slider['p']; ?></h6>
                    <a href="<?= $slider['btn_link']; ?>" class="theme-orange btn mt-3 apply-now"><?= $slider['btn_txt']; ?></a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- end slider -->
<section class="target custom-margin-top" style="margin-top: 50px">
    <div class="container">
        <div class="sec-title text-center bg-fill mb-3">
            <span class="title" style="color:white !important">Why Choose Us</span>
            <h2 class="text-white">Ethics Behind Success</h2>
            <div class="divider">
                <span class="fa fa-mortar-board"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="target-block text-white p-5 mb-lg-0 mb-xl-0 mb-md-0 mb-sm-5 mb-5" data-aos="fade-up" data-aos-duration="550">
                    <div class="border-line"></div>
                    <i class="fa fa-users fa-3x color-orange mb-3 target-icon"></i>
                    <h4 class="font-weight-bold">Skilled Lecturers</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="target-block text-white p-5 mb-lg-0 mb-xl-0 mb-md-0 mb-sm-5 mb-5" data-aos="fade-up" data-aos-duration="550">
                    <div class="border-line"></div>
                    <i class="fa fa-mortar-board fa-3x color-orange mb-3 target-icon"></i>
                    <h4 class="font-weight-bold">Scholarship Facility</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="target-block text-white p-5" data-aos="fade-up" data-aos-duration="550">
                    <div class="border-line"></div>
                    <i class="fa fa-book fa-3x color-orange mb-3 target-icon"></i>
                    <h4 class="font-weight-bold">Library & Lab</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>

                </div>
            </div>

        </div>
    </div>
</section>



<!-- end target -->
<!-- start team -->
<!-- <section class="our-team text-center bg-light">
        <div class="container">
            <div class="sec-title text-center mb-3">
                <span class="title">Our Founders</span>
                <h2>What we bring to you</h2>
                <div class="divider">
                    <span class="fa fa-mortar-board"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="550">
                    <div class="team-block">
                        <div class="team-img">
                            <img src="assets/images/team_2.png" class="img-fluid" alt="team member">
                        </div>
                        <h4 class="pt-4 font-weight-bold">Lorem Ipsum</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="550">
                    <div class="team-block mt-xl-0 mt-lg-0 mt-md-0 mt-sm-2 mt-2">
                        <div class="team-img">
                            <img src="assets/images/team_1.png" class="img-fluid" alt="team member">
                        </div>
                        <h4 class="pt-4 font-weight-bold">Lorem Ipsum</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="550">
                    <div class="team-block  mt-xl-0 mt-lg-0 mt-mb-2 mt-sm-2 mt-2">
                        <div class="team-img">
                            <img src="assets/images/team_3.png" class="img-fluid" alt="team member">
                        </div>
                        <h4 class="pt-4 font-weight-bold">Lorem Ipsum</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="550">
                    <div class="team-block">
                        <div class="team-img mt-xl-0 mt-lg-0 mt-mb-2 mt-sm-2 mt-2">
                            <img src="assets/images/team_4.png" class="img-fluid" alt="team member">
                        </div>
                        <h4 class="pt-4 font-weight-bold">Lorem Ipsum</h4>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- end team -->
<!-- start online course -->
<section class="online-course">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title">
                    <span class="title">Our Courses</span>
                    <h2>Step forward to gain the knowledge</h2>
                    <div class="divider">
                        <span class="fa fa-mortar-board"></span>
                    </div>
                </div>
                <p class="p-17">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book.</p>
                <p class="p-17">It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets
                    containing Lorem Ipsum passages.</p>
            </div>
            <div class="col-lg-6">
                <div class="course-block  d-flex justify-content-between bg-light pa-2 mx-5 my-3" data-aos="fade-up" data-aos-duration="550">
                    <img src="assets/images/icons/promotion.png" class="img-fluid m-auto" alt="Key Of Success">
                    <div class="course-text pl-5">
                        <h4>Events Gallery</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="course-block  d-flex justify-content-between theme-blue pa-2 mx-5 my-3" data-aos="fade-up" data-aos-duration="550">
                    <img src="assets/images/icons/career.png" class="img-fluid m-auto" alt="Our Philosophy">
                    <div class="course-text pl-5">
                        <h4>Sports Gallery</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="course-block  d-flex justify-content-between theme-orange pa-2 mx-5 mt-3" data-aos="fade-up" data-aos-duration="550">
                    <img src="assets/images/icons/feminism.png" class="img-fluid m-auto" alt="Our Principle">
                    <div class="course-text pl-5">
                        <h4>picnic Gallery</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end online course -->
<!-- start search course -->
<section class="search-course">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-10">
            </div>
        </div>
    </div>
</section>
<!-- end search course -->
<!-- start event listing -->
<section class="event-listing">
    <div class="container">

    </div>
</section>

<?php require('inc/footer.php'); ?>