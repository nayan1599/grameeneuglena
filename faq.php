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
                                <h1><strong>FAQ</strong></h1>
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
                    <div class="title title_color_one">FAQ</div>
                    <p>Sustainable Solutions for a Healthier Tomorrow</p>
                </div>
                <div class="text-center container_detiles">
                    <p>Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses to solve social issues in Bangladesh. Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses</p>
                </div>
            </div>
        </section>

        <!--faq sections--> 


        <section class="faq_section mb-4">
            <div class="container">
                <div class="accordion" id="accordionExample">
                    
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What exactly is involved in the mass cultivation of Euglena outdoors?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>We safely cultivate Euglena in isolation in large quantities outdoors. Euglena is an organism at the very bottom of the food chain and, as a result, is quickly eaten by other organisms in the wild. Creating an environment which makes it easy for Euglena to propagate but which is difficult for other organisms to live in is what enabled us to achieve the cultivation of Euglena in large quantities.</p>                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Have people conducted research on Euglena in the past?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Have people conducted research on Euglena in the past?</p>              
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is “Euglena”? What characteristics does it have?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>What is “Euglena”? What characteristics does it have?</p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>









        <!--footer area section-->    
        <?php include("./section/footer.php") ?>
        <!-- Swiper Script -->
        <script href="bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
        <script href="inclode/js/min.js" crossorigin="anonymous"></script>

    </body>

</html>







