<?php
/* @var $sliders app\models\Sliders */
?>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <?php
        $i = 0;
        for ($i = 0; $i < count($sliders); $i++) {
            if ($i == 0) {
                ?>
                <li data-target="#demo" data-slide-to="<?= $i ?>" class="active"></li>
                <?php
            }
            ?>
            <li data-target="#demo" data-slide-to="<?= $i ?>"></li>
            <?php
        }
        ?>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <?php
        $i = 0;
        foreach ($sliders as $slider) {
            ?>
            <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>">
                <img class="img-fluid w-100" src="../../web/uploads/<?= $slider->image ?>" alt="<?= $slider->title ?>">
            </div>
            <?php
            $i++;
        }
        ?>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>

<section class="section-half-rounded pb-5 pb-lg-7">
    <div class="jumbotron section-inner left-0 rounded-bottom-right bg-section-secondary overflow-hidden col-xl-11"></div>
    <div class="container text-center text-lg-left pt-5">
        <div class="row row-grid justify-content-between align-items-center">
            <div class="col-12 col-md-5 col-lg-6">
                <figure><img alt="Image placeholder" src="../../web/dist/assets/img/theme/light/img-2-1000x800.jpg"
                             class="card-img shadow-lg position-relative zindex-100"></figure>
                <div class="w-75 position-absolute bottom-n5 left-n5 rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         x="0px" y="0px" viewBox="0 0 361.1 384.8" style="enable-background:new 0 0 361.1 384.8;"
                         xml:space="preserve" class="injected-svg svg-inject fill-section-secondary">
	<path d="M53.1,266.7C19.3,178-41,79.1,41.6,50.1S287.7-59.6,293.8,77.5c6.1,137.1,137.8,238,15.6,288.9 S86.8,355.4,53.1,266.7z"></path>
</svg>
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-5"><h1 class="h5 text-right mb-4">تولید سادگی نامفهوم از صنعت چاپ</h1>
                <p class="lead text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                    استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و
                    برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای
                    زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها
                    شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد
                    کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به
                    پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود
                    طراحی اساسا مورد استفاده قرار گیرد.</p>
                <div class="text-justify  mt-5"><a href="#" class="btn btn-primary btn-icon"><span
                                class="btn-inner--text">ارتباط باما</span><span class="btn-inner--icon"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12"
                                                                                                      x2="19"
                                                                                                      y2="12"></line><polyline
                                        points="12 5 19 12 12 19"></polyline></svg></span></a></div>
            </div>
        </div>

    </div>
</section>

<section class="slice">
    <div class="container">
        <div class="jumbotron rounded-diagonal-right bg-primary border-0 rounded-lg py-5">
            <div class="py-4">
                <h3 class="text-right mb-2">همکاران و سهامداران :</h3>
                <div class="client-group row justify-content-center">
                    <div class="client col-lg-2 col-md-3 col-4 py-3"><img alt="Image placeholder"
                                                                          src="../../web/dist/assets/img/clients/svg/amazon-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3"><img alt="Image placeholder"
                                                                          src="../../web/dist/assets/img/clients/svg/spotify-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3"><img alt="Image placeholder"
                                                                          src="../../web/dist/assets/img/clients/svg/airbnb-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3"><img alt="Image placeholder"
                                                                          src="../../web/dist/assets/img/clients/svg/paypal-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3"><img alt="Image placeholder"
                                                                          src="../../web/dist/assets/img/clients/svg/slack-gray.svg">
                    </div>
                    <div class="client col-lg-2 col-md-3 col-4 py-3"><img alt="Image placeholder"
                                                                          src="../../web/dist/assets/img/clients/svg/airbnb-gray.svg">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-4"><div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <a href="#" class="d-block">
                        <img alt="Image placeholder" src="../../web/dist/assets/img/theme/light/blog-2-800x600.jpg" class="card-img-top">
                    </a>
                </div>
                <div class="card-body py-4">
                    <small class="d-block text-sm mb-2">25 April, 2020</small>
                    <a href="#" class="h5 stretched-link lh-150">How to find the right design for your specific product</a>
                    <p class="mt-3 mb-0 lh-170">No matter what he does, every person on earth plays a central role in the history.</p>
                </div>
                <div class="card-footer border-0 delimiter-top">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="avatar avatar-sm bg-primary rounded-circle">JD</span>
                            <span class="text-sm mb-0 avatar-content">David Wally</span>
                        </div>
                        <div class="col text-right text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i data-feather="heart" class="mr-1"></i> 50</a>
                                <a href="#" class="action-item"><i data-feather="eye" class=" mr-1"></i> 250</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
        <div class="col-4"><div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <a href="#" class="d-block">
                        <img alt="Image placeholder" src="../../web/dist/assets/img/theme/light/blog-2-800x600.jpg" class="card-img-top">
                    </a>
                </div>
                <div class="card-body py-4">
                    <small class="d-block text-sm mb-2">25 April, 2020</small>
                    <a href="#" class="h5 stretched-link lh-150">How to find the right design for your specific product</a>
                    <p class="mt-3 mb-0 lh-170">No matter what he does, every person on earth plays a central role in the history.</p>
                </div>
                <div class="card-footer border-0 delimiter-top">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="avatar avatar-sm bg-primary rounded-circle">JD</span>
                            <span class="text-sm mb-0 avatar-content">David Wally</span>
                        </div>
                        <div class="col text-right text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i data-feather="heart" class="mr-1"></i> 50</a>
                                <a href="#" class="action-item"><i data-feather="eye" class=" mr-1"></i> 250</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
        <div class="col-4"><div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <a href="#" class="d-block">
                        <img alt="Image placeholder" src="../../web/dist/assets/img/theme/light/blog-2-800x600.jpg" class="card-img-top">
                    </a>
                </div>
                <div class="card-body py-4">
                    <small class="d-block text-sm mb-2">25 April, 2020</small>
                    <a href="#" class="h5 stretched-link lh-150">How to find the right design for your specific product</a>
                    <p class="mt-3 mb-0 lh-170">No matter what he does, every person on earth plays a central role in the history.</p>
                </div>
                <div class="card-footer border-0 delimiter-top">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="avatar avatar-sm bg-primary rounded-circle">JD</span>
                            <span class="text-sm mb-0 avatar-content">David Wally</span>
                        </div>
                        <div class="col text-right text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i data-feather="heart" class="mr-1"></i> 50</a>
                                <a href="#" class="action-item"><i data-feather="eye" class=" mr-1"></i> 250</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
    </div>
</div>