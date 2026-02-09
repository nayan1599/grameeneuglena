<!DOCTYPE html>
<html lang="en">
<style>
    swiper-container {
        width: 100%;
        height: 100%;
    }

    swiper-slide {
        text-align: center;
        font-size: 18px;
        background: transparent !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<?php include("./section/head.php") ?>

<body>
    <?php include("./section/top.php") ?>
    <?php include("./section/menu.php") ?>
    <?php include("./section/banner.php") ?>
    <!-- Inspiring  -->
    <section class="inspiring">
        <div class="container">
            <!-- section title  -->
            <div class="section_title">
                <div class="title">Inspiring Video</div>
                <p>Sustainable Solutions for a Healthier Tomorrow</p>
            </div>
            <!-- contants -->
            <p class="text-white">
                Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses to solve social issues in Bangladesh.
                Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses to solve social issues in Bangladesh.
            </p>
            <div class="pt-3">
                <div class="row">
                    <!-- video 1 -->
                    <div class="col-md-6 col-sm-12 my-2">
                        <div class="inspiring_item">
                            <iframe width="100%" height="450" src="https://www.youtube.com/embed/ONi62ANYNU0?si=pg1YeUdlHYDRQiUd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <!-- video 2 -->
                    <div class="col-md-6 col-sm-12 my-2">
                        <div class="inspiring_item">
                            <iframe width="100%" height="450" src="https://www.youtube.com/embed/x45lP81Pmq8?si=TMyDVO2keeNjAgNF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about us  -->
    <section class="about py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 my-2">
                    <div class="p-5">
                        <!-- section title  -->
                        <div class="section_title mb-4">
                            <div class="title title_color_one">About US</div>
                            <p>Sustainable Solutions for a Healthier Tomorrow</p>
                        </div>
                        <!-- about contents -->
                        <div class="about_containt">
                            <p>Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses to solve social issues in Bangladesh. Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses to solve social issues in... <a href="#">See More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-2">
                    <div class="about_image">
                        <img class="img-fluid" src="inclode/img/about_us.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top news  -->
    <section class="top_news">
        <div class="container">
            <!-- section title  -->
            <div class="section_title mb-4">
                <div class="title title_color_one">Top News</div>
                <p>Sustainable Solutions for a Healthier Tomorrow</p>
            </div>
            <!-- news contents  -->
            <swiper-container
                class="mySwiper"
                slides-per-view="3"
                space-between="30"
                free-mode="true"
                pagination="true"
                pagination-clickable="true"
                pagination-el=".custom-pagination"
                breakpoints='{
        "0":   { "slidesPerView": 1 },
        "576": { "slidesPerView": 3 },
        "768": { "slidesPerView": 3 },
        "992": { "slidesPerView": 3 },
        "1200":{ "slidesPerView": 3 }
    }'>

                <swiper-slide>
                    <div class="top_news_item">
                        <div class="top_news_image">
                            <img src="inclode/img/news3.png" alt="news" class="img-fluid">
                            <div class="top_news_overlay">
                                <div class="overlay_content">
                                    <span class="news_date">2025.10.01</span>
                                    <p>"Euglena Festival 2025" to be held on Sunday,</p>
                                    <a href="#" class="overlay_btn">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="top_news_item">
                        <div class="top_news_image">
                            <img src="inclode/img/news1.png" alt="news" class="img-fluid">
                            <div class="top_news_overlay">
                                <div class="overlay_content">
                                    <span class="news_date">2025.10.01</span>
                                    <p>"Euglena Festival 2025" to be held on Sunday,</p>
                                    <a href="#" class="overlay_btn">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="top_news_item">
                        <div class="top_news_image">
                            <img src="inclode/img/news2.png" alt="news" class="img-fluid">
                            <div class="top_news_overlay">
                                <div class="overlay_content">
                                    <span class="news_date">2025.10.01</span>
                                    <p>"Euglena Festival 2025" to be held on Sunday,</p>
                                    <a href="#" class="overlay_btn">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

            </swiper-container>

            <div class="custom-pagination"></div>


        </div>
    </section>
    <!-- pratener  -->
    <section class="partners py-5">
        <div class="container">
            <!-- section title  -->
            <div class="section_title mb-4">
                <div class="title title_color_one">Partners</div>
                <p>Sustainable Solutions for a Healthier Tomorrow</p>
            </div>
            <!-- partners imag  -->

            <swiper-container class="mySwiper"
                slides-per-view="6"
                space-between="30"
                free-mode="true"
                breakpoints='{
                                  "0":   { "slidesPerView": 2 },
                                  "576": { "slidesPerView": 2 },
                                  "768": { "slidesPerView": 3 },
                                  "992": { "slidesPerView": 4 },
                                  "1200":{ "slidesPerView": 6 }
                                  }'>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p.webp" alt="pan asisa">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p2.webp" alt="gra,ee tw;efp,">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p3.webp" alt="kth">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p4.webp" alt="grameen trust">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p5.webp" alt="kyushu">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p6.gif" alt="jica">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p.webp" alt="pan asisa">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p2.webp" alt="gra,ee tw;efp,">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p3.webp" alt="kth">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p4.webp" alt="grameen trust">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p5.webp" alt="kyushu">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="partners_image">
                        <div class="img">
                            <img src="inclode/img/p6.gif" alt="jica">
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>
    </section>

    <!-- Program -->
    <section class="program py-5">
        <div class="container">
            <!-- section title  -->
            <div class="section_title mb-4">
                <div class="title title_color_one">Program</div>
                <p>Sustainable Solutions for a Healthier Tomorrow</p>
            </div>
            <!-- program contants  -->

            <swiper-container
                class="mySwiper"
                slides-per-view="3"
                space-between="30"
                free-mode="true"
                pagination="true"
                pagination-clickable="true"
                pagination-el=".progrom-pagination"
                breakpoints='{
                                  "0":   { "slidesPerView": 1 },
                                  "576": { "slidesPerView": 3 },
                                  "768": { "slidesPerView": 3 },
                                  "992": { "slidesPerView": 3 },
                                  "1200":{ "slidesPerView": 3 }
                                  }'>
                <swiper-slide>


                    <div class="top_news_item hover-card">
                        <div class="top_news_image">
                            <img src="inclode/img/Program1.png" alt="news" class="img-fluid">
                            <div class="top_news_overlay">
                                <div class="overlay_content">
                                    <span class="news_date">Euglena GENKI Program</span>
                                    <p>In order to solve nutritional problems, we distribute nutritious Euglena cookies</p>
                                    <a href="#" class="overlay_btn">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="program_overlay d-flex flex-column justify-content-end p-3">
                                <a href="ifad-and-japan-s-maff-connect-sesame-producers-in-bangladesh-with-japanese-company-euglena">
                                    <div class="text-white font_size">Euglena GENKI Program</div>
                                </a>
                                <p class="text-white small mb-0">In order to solve nutritional problems, we distribute nutritious Euglena cookies <a href="#"> More</a></p>
                            </div>

                        </div>
                    </div>



                </swiper-slide>
                <swiper-slide>

                    <div class="top_news_item hover-card">
                        <div class="top_news_image">
                            <img src="inclode/img/Program2.png" class="img-fluid w-100 card-img" alt="IFAD and Japan's MAFF...">
                            <div class="top_news_overlay">
                                <div class="overlay_content">
                                    <span class="news_date">Social Business (Agriculture)</span>
                                    <p>Euglena Co. is working with its local subsidiary Grameen Euglena</p>
                                    <a href="#" class="overlay_btn">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="program_overlay d-flex flex-column justify-content-end p-3">
                                <a href="ifad-and-japan-s-maff-connect-sesame-producers-in-bangladesh-with-japanese-company-euglena">
                                    <div class="text-white font_size">Social Business (Agriculture)</div>
                                </a>
                                <p class="text-white small mb-0">Euglena Co. is working with its local subsidiary Grameen Euglena <a href="#"> More</a></p>
                            </div>

                        </div>
                    </div>

                </swiper-slide>
                <swiper-slide>



                    <div class="top_news_item hover-card">
                        <div class="top_news_image">
                            <img src="inclode/img/Program3.png" class="img-fluid w-100 card-img" alt="IFAD and Japan's MAFF...">
                            <div class="top_news_overlay">
                                <div class="overlay_content">
                                    <span class="news_date">Grameen Euglena</span>
                                    <p>Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are</p>
                                    <a href="#" class="overlay_btn">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="program_overlay d-flex flex-column justify-content-end p-3">
                                <a href="ifad-and-japan-s-maff-connect-sesame-producers-in-bangladesh-with-japanese-company-euglena">
                                    <div class="text-white font_size">Grameen Euglena</div>
                                </a>
                                <p class="text-white small mb-0">Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are<a href="#"> More</a></p>
                            </div>

                        </div>
                    </div>


                </swiper-slide>
            </swiper-container>

            <div class="progrom-pagination"></div>
        </div>
    </section>
    <div class="program_footer_imag">
        <img src="inclode/img/Layer_2.png" alt="Banner Bottom" class="img-fluid w-100">
    </div>

    <!-- profile  -->
    <section class="profile py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 my-2">
                    <div class="profile_img">
                        <img class="img-fluid" src="inclode/img/M Yunus 1.png" alt="alt">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-2">
                    <div class="profile_containt p-5">
                        <div class="profile_detiles pt-5">
                            <p>We must create a world of 3 zeros a world of sharing and caring being productive and creative, and contributing to the planet.. Social business will get us there!
                            </p>
                        </div>
                        <div class="profile_name">
                            <span class="name">Prof. Muhammad Yunus</span>
                            <p>Nobel Peace Prize Chairman,<br> Grameen Euglena

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery  -->
    <section class="gallery">
        <div class="container py-5">
            <!-- section title  -->
            <div class="section_title mb-4 text-center text-center text-white">
                <div class="title text-white">Gallery</div>
                <p>Sustainable Solutions for a Healthier Tomorrow</p>
            </div>

            <!--gallery imag-->

            <div class="row">
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="gallery_img">
                        <img class="img-fluid" src="inclode/img/gallery1.png" alt="alt">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="gallery_img">
                        <img class="img-fluid" src="inclode/img/gallery2.png" alt="alt">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="gallery_img">
                        <img class="img-fluid" src="inclode/img/gallery3.png" alt="alt">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="gallery_img">
                        <img class="img-fluid" src="inclode/img/gallery4.png" alt="alt">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="gallery_img">
                        <img class="img-fluid" src="inclode/img/gallery5.png" alt="alt">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="gallery_img">
                        <img class="img-fluid" src="inclode/img/gallery6.png" alt="alt">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="gallery_img">
                        <img class="img-fluid" src="inclode/img/gallery7.png" alt="alt">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="gallery_img">
                        <img class="img-fluid" src="inclode/img/gallery8.png" alt="alt">
                    </div>
                </div>
            </div>



            <div class="text-center pt-3">
                <a href="gallery.php" class="btn">All Gallery</a>
            </div>

        </div>
    </section>
    <!-- blog section  -->

    <section class="py-5">
        <div class="container">
            <!-- section title  -->
            <div class="section_title mb-4 text-center">
                <div class="title title_color_one">Blog</div>
                <p>Sustainable Solutions for a Healthier Tomorrow</p>
            </div>
            <!--blog-->
            <div class="row">

                <div class="col-md-4 col-sm-12 my-2">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img class="img-fluid" src="inclode/img/blog.png" alt="Euglena GENKI Program" style="width: 100%;">
                        </div>
                        <div class="p-3">
                            <div class="blog_title mb-2">
                                <a href="blog_details.php">Expanding Children's Worlds through the Power of Creativity [Activity Report from April to June 2025]</a>
                            </div>
                            <div class="blog_contants">
                                <p>Children are living strong lives in the limited space in the center of a densely packed slum. At OBAT English School, a partner school of the GENKI program, located...</p>
                            </div>
                            <div class="blog_button text-center">
                                <a class="btn" href="blog_details.php">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 my-2">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img class="img-fluid" src="inclode/img/blog1.png" alt="Euglena GENKI Program" style="width: 100%;">
                        </div>
                        <div class="p-3">
                            <div class="blog_title mb-2">
                                <a href="blog_details.php">A plaza where smiles return: A safe playground built by the community and children</a>
                            </div>
                            <div class="blog_contants">
                                <p>The GENKI program began at a school called Sathi Shamaj Kallyan Shongstha (SSKS) in 2017. Dhumour, who is now 18 and a university student, was in the fifth grade...</p>
                            </div>
                            <div class="blog_button text-center">
                                <a class="btn" href="blog_details.php">Details</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-12 my-2">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img class="img-fluid" src="inclode/img/blog2.png" alt="Euglena GENKI Program" style="width: 100%;">
                        </div>
                        <div class="p-3">
                            <div class="blog_title mb-2">
                                <a href="blog_details.php">An encounter with a child sponsor that brought great hope [Activity report from October to December 2024]</a>
                            </div>
                            <div class="blog_contants">
                                <p>Children are living strong lives in the limited space in the center of a densely packed slum. At OBAT English School, a partner school of the GENKI program, located...</p>
                            </div>
                            <div class="blog_button text-center">
                                <a class="btn" href="blog_details.php">Details</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- footer area   -->
    <section class="google_map">
        <div class="container-fluid p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30499.37649747177!2d90.38974972258077!3d23.790199927438977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a0f70deb73%3A0x30c36498f90fe23!2sGulshan%2C%20Dhaka!5e1!3m2!1sen!2sbd!4v1761475969140!5m2!1sen!2sbd" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="google_image">
                <img src="inclode/img/banner_imag.png" alt="Banner Bottom" class="img-fluid w-100">
            </div>
        </div>
    </section>
    <?php include("./section/footer.php") ?>
    
</body>

</html>