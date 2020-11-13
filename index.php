<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/_header.php' ?>

<main class="overflow-hidden">

<section data-aos="fade-in">
    <div class="container">
        <div class="row gx-0 align-items-center mb-md-40">
            <div class="col banner--custom__text d-none d-md-block">
                <img src="assets/img/dist/banner--deskop.png" alt="#" loading="lazy">
            </div>
            <div class="col-md-9 position-relative">
                <img src="assets/img/dist/banner.jpg" alt="#" loading="lazy">
                <img src="assets/img/dist/banner--mobile.jpg" alt="#" loading="lazy" class="d-block d-md-none">
                <div class="banner--start d-none d-lg-inline-block">Zaczynajmy</div>
                <img src="assets/img/dist/mark--dark.png" alt="#" style="right:0; bottom:0; transform:translate(50%,50%);" class="banner--mark d-none d-md-block" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="pt-30 pt-md-50 pb-md-20" data-aos="fade-in">
    <div class="container">
        <div class="text__custom--4 fw-bolder mb-10">SPINKI WEDDING PLANNERS - ORGANIZACJA WESEL I ŚLUBÓW OD 14 LAT </div>
        <div class="text__custom--3 mb-30 mb-md-70">
            <span class="text-nowrap">{ KRAKÓW }</span>
            <span class="text-nowrap">{ KIELCE }</span>
            <span class="text-nowrap">{ WARSZAWA }</span>
            <span class="text-nowrap">{ POZNAŃ }</span>
        </div>
        <div class="row gx-md-50">
            <div class="col-md mb-30 order-md-1 text-center">
                <img src="assets/img/dist/spinkiweedingplanner.png" alt="#" loading="lazy">
            </div>
            <div class="col-md-6 mb-30">
                <p>Wspaniale Cię u nas gościć. <strong>Przed Tobą organizacja wesela, która jest ważną częścią historii Twojej rodziny. Pozwól, żebyśmy i my weszli do tej historii.</strong> </br></br>Spinki to nowoczesne wedding plannerki z misją tworzenia przyjęć na miarę XXI wieku. Jesteśmy jedną z pierwszych agencji ślubnych w Polsce. <strong>Organizujemy wesela i śluby od ponad 14 lat w Krakowie, Kielcach, Warszawie, Poznaniu i wielu innych miastach.</strong> </br></br><strong>Ponad 500 zorganizowanych wesel</strong> czyni z nas ekspertów w tej branży. To <strong>mnóstwo doświadczenia, którego teraz tak bardzo potrzebujesz.</strong></p>
                <div class="mt-20 mt-md-40">
                    <a href="#" class="text-more fw-bold">Kliknij po więcej</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'elements/planner_section.php' ?>
<?php include 'elements/coopstages_section.php' ?>
<?php include 'elements/cooprules_section.php' ?>
<?php include 'elements/testimonials_section.php' ?>
<?php include 'elements/team_section.php' ?>
<?php include 'elements/portfolio_blog_section.php' ?>

</main>

<?php include 'elements/_footer.php' ?>
<?php include 'elements/_footer-scripts.php' ?>

<script>
    var swiper = new Swiper('.swiper-container', {
      autoplay: {
            delay: 5000,
            disableOnInteraction: false,
      },
    });
</script>

<?php include 'elements/_html_end.php' ?>