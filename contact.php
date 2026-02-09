<!DOCTYPE html>
<html lang="en">

    <?php include("./section/head.php") ?>

    <body>
        <?php include("./section/top.php") ?>
        <?php include("./section/menu.php") ?>

        <!-- page title  -->
        <section class="page_title" style="background-image: url(inclode/img/page_title.png);">
            <img class="page_title_image" src="inclode/img/innar_banner.png" alt="">
            <div class="page_title_overlay">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="font-weight-bold text-white">
                                <h1><strong>Contact Us</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- title section  -->
        <section>
            <div class="container py-5">
                <div class="section_title mb-4 text-center">
                    <div class="title title_color_one">Contact Us</div>
                    <p>Sustainable Solutions for a Healthier Tomorrow</p>
                </div>
                <div class="text-center container_detiles">
                    <p>Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses to solve social issues in Bangladesh. Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses</p>
                </div>
            </div>
        </section>

        <!-- contact us section  -->

        <section>
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-6 col-sm-12 my-2">
                        <div class="contact_icon">
                            
                                     <div class="section_title  pt-3">
                                <div class="title title_color_one">Grameen Euglena</div>
           
                            </div>
                            
                            <ul class="list-unstyled mt-3 gap-5">
                                <li><i class="fa fa-map-marker me-2"></i> Address: Telecom Bhaban (Level - 7) <br>53/1 Box Nagar, Zoo Road, Mirpur, Dhaka-1216.</li>
                                <li class="mt-2"><i class="fa fa-phone me-2"></i> Phone: +88 02 44 80 20 81</li>
                                <li class="mt-2"><i class="fa fa-envelope me-2"></i> Email: gc@grameen.org</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 my-2">


                        <div class="bg_contact ">
                            <div class="section_title  pt-3">
                                <div class="title title_color_one">Join Us Now</div>
                                <p>We are at your service</p>
                            </div>
                            <div class="p-2">

                                <form id="" name="" class="" method="post">


                                    <div class="form-row">
                                        <div class="form-group col-12 col-md-12 my-3">
                                            <input required type="text" class="form-control" id="first_name" name="first_name" value="" placeholder="Your First Name">
                                        </div>

                                        <div class="form-group col-12 col-md-12 my-3">
                                            <input required type="text" class="form-control" id="phone" name="phone" value="" placeholder="Mobile">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 col-md-12 my-3">
                                            <input required type="email" class="form-control" id="email" name="email"  value=" " placeholder="Your Email">
                                        </div>
                                    </div>

                                    <div class="form-group my-3">
                                        <textarea required class="form-control" id="message" name="message" rows="5" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="text-center"><!-- comment -->
                                    <button type="submit" class="btn btn-primary" name="btnAction" value="save">Send</button>
                                    </div>

                                </form>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </section>








        <?php include("./section/footer.php") ?>
        <!-- Swiper Script -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
        <script href="inclode/js/min.js" crossorigin="anonymous"></script>
        <script href="bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>

</html>