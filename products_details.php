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
                                <h1><strong>Products Details</strong></h1>
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
                    <div class="title title_color_one">Mungbean</div>
                    <p>Sustainable Solutions for a Healthier Tomorrow</p>
                </div>
                <div class="text-center container_detiles">
                    <p>Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses to solve social issues in Bangladesh. Together with the Grameen Group, founded by Dr. Muhammad Yunus, we are developing social businesses</p>
                </div>
            </div>
        </section>

        <!--Products Details section--> 

        <section class="products_details">
            <div class="container mb-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12 my-2">
                        <div class="details_img">
                            <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
                                              thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">
                                <swiper-slide>
                                    <img src="inclode/img/items1.png" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="inclode/img/items2.png" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="inclode/img/items3.png" />
                                </swiper-slide>
                  
                            </swiper-container>

                            <swiper-container class="mySwiper2" loop="true" space-between="10" slides-per-view="4" free-mode="true"
                                              watch-slides-progress="true">
                                <swiper-slide>
                                     <img src="inclode/img/items1.png" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="inclode/img/items2.png" />
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="inclode/img/items3.png" />
                                </swiper-slide>
                                 
                            </swiper-container>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 my-2">
                        <div class="items_details_contants pt-5">
                            <div class="price_item">
                                <h2>Tk 5,990</h2>
                            </div>

                            <div class="items_desctions">
                                <p>Mungbean (Vigna radiata) is a small, green legume widely consumed in Asia, especially in Bangladesh, India, and Southeast Asia. It is known for its high nutritional value and ease of digestion</p>
                            </div>
                            <div class="contacts">
                                <p><span class="icon_detailes"><i class="fas fa-phone-alt"></i></span>Phone:+88 02 44 80 20 81</p>
                            </div>
                            <div class="details_add_to">
                                <a class="btn" href="#">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="items_desctions">
                    <p>✅ What is Mungbean?
                        Mungbean (Vigna radiata) is a small, green legume widely consumed in Asia, especially in Bangladesh, India, and Southeast Asia. It is known for its high nutritional value and ease of digestion.</p>
                    <ul>
                        <li>🌱 botanical information</li>
                        <li>scientific name: vigna radiata </li>
                        <li> family: leguminosae (fabaceae)</li>
                        <li>type: short-duration, warm-season crop </li>
                        <li>growing period: 55–70 days </li>
                        <li>best climate: warm, humid weather </li>
                        <li> soil: well-drained loam soil with good fertility</li>
                        <li>🍽️ nutritional value (per 100g raw) </li>
                        <li>calories: 347 kcal </li>
                        <li>protein: 23–24% </li>
                        <li> carbohydrate: 62%</li>
                        <li> fat: 1–2%</li>
                        <li>fiber: 16% </li>
                        <li> rich in: vitamin b, iron, potassium, magnesium, folate
                            💡 health benefits</li>
                        <li>high plant-based protein source </li>
                        <li>helps in muscle building </li>
                        <li>good for digestion </li>
                        <li> low glycemic index (diabetes-friendly)</li>
                        <li>boosts immunity </li>
                    </ul>

                </div>



            </div>
        </section>

























        <!--footer area section-->    
        <?php include("./section/footer.php") ?>
        <!-- Swiper Script -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-element-bundle.min.js"></script>
        <script href="inclode/js/min.js" crossorigin="anonymous"></script>
        <script href="bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>

</html>
 


