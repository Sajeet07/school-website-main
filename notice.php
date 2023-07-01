<?php require('inc/header.php');
require('connection/config.php');
?>

<!-- start inner banner -->
<section class="inner-banner">
    <h1 class="font-weight-bold text-center">Notices</h1>
</section>
<!-- end inner banner -->
<!-- start achievement -->
<section class="achievement">
    <div class="container">
        <div class="sec-title text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
            <span class="title">latest updated</span>
            <h2>Notices</h2>
            <div class="divider">
                <span class="fa fa-mortar-board"></span>
            </div>
        </div>

        <?php

        // Retrieve achievements from the database
        $sql = "SELECT title, content FROM notice";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $content = $row['content'];

        ?>
                <div class="row justify-content-center my-5"> <!-- Added 'justify-content-center' class to center align the row -->
                    <div class="col-lg-6 col-md-12 mt-xl-5 mt-lg-5 mt-md-2 mt-sm-5 mt-5">
                        <h3 class="font-weight-bold color-orange" data-aos="fade-up" data-aos-duration="1000"><?php echo $title; ?></h3>
                        <p class="font-weight-bold mb-3"><?php echo $content; ?></p>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "No notice found";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>
</section>

<!-- end achievement -->

<!-- start footer -->
<?php require('inc/footer.php'); ?>