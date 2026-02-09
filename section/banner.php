
<style>
    .swiper-button-next,
    .swiper-button-prev {
        color: #006400 !important;
        background: rgba(255, 255, 255, 0.2);
        width: 36px !important;
        height: 66px !important;
        margin: 0px -10px;
        top: 40%;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: #fff !important;
    }

    .swiper-button-next {
        border-radius: 5px 0px 0px 5px;
    }

    .swiper-button-prev {
        border-radius: 0px 5px 5px 0px;
    }


    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 30px !important;
    }

    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .slider-content {
        position: absolute;
        top: 50%;
        left: 10%;
        transform: translateY(-50%);
        z-index: 2;
        color: #fff;
        max-width: 600px;
        text-align: justify;
    }
    .slider_detiles{
        color: #fff;
    }
    .slider_title {
        font-weight: 700;
        font-size: 50px;
        line-height: 75px;
        color: #FFFFFF;
    }

    .slider_btn {
        background: #09AFAD;
        border: 1px solid #FFFFFF;
        border-radius: 10px;
        padding: 7px 117px;
        font-size: 16px;

    }
        .swiper-slide {
        font-size: 18px;
        background: #fff;
        display: flex;
    }
@media (max-width: 480px) {

    .slider-content {
        position: absolute;
        top: 45%;
        left: 2%;
        transform: translateY(-50%);
        z-index: 2;
        color: #fff;
        width: 298px;
        max-width: 600px;
        text-align: justify;
    }

    .slider_detiles {
        color: #fff;
        line-height: 27px;
    }

    .slider_title {
        font-weight: 700;
        font-size: 22px;
        line-height: 21px;
        color: #FFFFFF;
    }
    .slider_btn {
    background: #09AFAD;
    border: 1px solid #FFFFFF;
    border-radius: 10px;
    padding: 7px 38px;
    font-size: 16px;
}
.swiper-pagination {
    top: 76% !important;
}

}

</style>

<div class="swiper banner_slider">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <img src="./inclode/img/banner1.png"
                 alt="first banner" class="img-fluid w-100">

            <div class="slider-content banner_text">
                <div class="slider_title">Euglena GENKI Program</div>
                <p class="slider_detiles">
                    In order to solve nutritional problems, we distribute nutritious Euglena cookies 
                </p>
                <a href="#" class="slider_btn text-white">Details</a>
            </div>
        </div>
 
      <div class="swiper-slide">
            <img src="./inclode/img/banner2.png"
                 alt="second banner" class="img-fluid w-100">

            <div class="slider-content banner_text">
                <div class="slider_title">Euglena GENKI Program</div>
                <p class="slider_detiles">
                    In order to solve nutritional problems, we distribute nutritious Euglena cookies 
                </p>
                <a href="#" class="slider_btn text-white">Details</a>
            </div>
        </div>  

    </div>

    <!-- Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
</div>

<div class="image_banner_bottom">
    <img src="./inclode/img/banner_imag.png"
         alt="Banner Bottom" class="img-fluid w-100">
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".banner_slider", {
        loop: true,
        speed: 800,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
</script>
