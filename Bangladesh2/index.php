<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh gov bd</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="all-div">
        <div class="row topH">
            <div class="col-lg-8">
                <p class="">বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-end">
                <p class="">১৭ ফাল্গুন, ১৪২৯ |</p>
                <p class="">English</p>
            </div>
        </div>
    </div>

    <section class="all-div  mt-4">
        <div class="row d-flex align-items-center">
            <div class="col-lg-5">
                <?php the_custom_logo();?>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="">
                            <input type="text" placeholder="খুঁজুন">
                            <button>অনুসন্ধান</button>
                        </form>
                    </div>
                    <div class="col-lg-4 d-flex gap-3">
                        <div>
                            <img src="<?=get_template_directory_uri();?> ./assets/images/header/a2i-logo-footer.png"
                                alt="">
                        </div>
                        <div class="border-end"></div>
                        <div>
                            <p class="lh-1"> সাথে থাকুন:</p>
                            <div class="lh-1">
                                <a href="#"> <img
                                        src="<?=get_template_directory_uri();?> ./assets/images/header/facebook-icon.png"
                                        alt=""></a>
                                <a href="#"><img
                                        src="<?=get_template_directory_uri();?> ./assets/images/header/twitter-blue-icon.png"
                                        alt=""></a>
                                <a href="#"><img
                                        src="<?=get_template_directory_uri();?> ./assets/images/header/youtube-icon.png"
                                        alt=""></a>
                                <a href="#"><img
                                        src="<?=get_template_directory_uri();?> ./assets/images/header/gplus-icon.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="all-div mt-4 ">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                    <ul class="navbar-nav menu me-auto mb-2 mb-lg-0">
                        <?php wp_nav_menu([
                    "theme_location" => "primary_menu",
                    "menu_class" => "navbar-nav"
                ])?>
                        <!-- <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">হোম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">বাংলাদেশ সম্পর্কিত</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">ই-সেবাসমূহ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">সেবাখাত</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">ব্যবসা-বাণিজ্য</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"> বৈদেশিক বিনিয়োগ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">আইন-বিধি</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">তথ্য বাতায়ন</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">সেবাকুঞ্জ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">ফরমস</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">তথ্য বাতায়ন</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">অফিস সংযুক্তির আবেদন </a>
                        </li> -->

                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="all-div">
        <div class="row mt-4">
            <div class="col-lg-8">
                <div class="border border-danger border-2 p-2 ">
                    <!-- <img class="img-fluid" src="<?=get_template_directory_uri();?> ./assets/images/padmabanner.jpg"
                        alt=""> -->
                    <?php dynamic_sidebar("banner")?>
                </div>
                <div class="slider mt-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php 
                            $x = 0;
                            while (have_posts()):the_post();
                            $x++;
                            ?>
                            <div class="carousel-item <?=($x==1) ? 'active':''?>">
                                <?php the_post_thumbnail();?>
                            </div>
                            <?php endwhile ?>

                            <!-- <div class="carousel-item active">
                                <img src="<?=get_template_directory_uri();?> ./assets/images/slider/6.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=get_template_directory_uri();?> ./assets/images/slider/Banner-2.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=get_template_directory_uri();?> ./assets/images/slider/corona_banner.jpg"
                                    class="d-block w-100" alt="...">
                            </div> -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="tab mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">জনপ্রিয় সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">নতুন সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">মোবাইল সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
                                data-bs-target="#disabled-tab-pane" type="button" role="tab"
                                aria-controls="disabled-tab-pane" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <?php  
                                        $qry = new WP_Query([
                                            "post_type"=>"post",
                                            "category_name"=> "tab"
                                        ])
                                        ?>
                                        <div class="row">
                                            <?php 
                                             while($qry->have_posts()){$qry->the_post()
                                           ?>


                                            <div class="col-lg-2 slide1">
                                                <?php the_post_thumbnail();?>
                                                <p><?php the_title();?></p>
                                            </div>
                                            <?php }?>

                                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                                aria-labelledby="profile-tab" tabindex="0">...</div>
                                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                                aria-labelledby="contact-tab" tabindex="0">...</div>
                                            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"
                                                aria-labelledby="disabled-tab" tabindex="0">...</div>
                                        </div>
                                    </div>

                                    <div class="row pera mt-5">
                                        <div class="col-lg-7">
                                            <h6>উদ্যোগ</h6>
                                            <p class="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)
                                                (১৩-০৬-২০১৬)</p>
                                            <p class="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)
                                                (১৩-০৬-২০১৬)</p>
                                            <p class="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)
                                                (১৩-০৬-২০১৬)</p>
                                            <p class="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০ )
                                                (১৩-০৬-২০১৬)</p>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="button">সকল</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="photo mt-5">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                                <img src="<?=get_template_directory_uri();?> ./assets/images/others/ebook_bangla (1).png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row  video1">
                                        <p class="mt-3">আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</p>
                                        <div class="card-group mb-2">
                                            <div class="card">
                                                <iframe width="802" height="441"
                                                    src="https://www.youtube.com/embed/l7G3TPz6P24"
                                                    title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                            <div class="card">
                                                <iframe width="802" height="441"
                                                    src="https://www.youtube.com/embed/l7G3TPz6P24"
                                                    title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                            <div class="card">
                                                <iframe width="802" height="441"
                                                    src="https://www.youtube.com/embed/l7G3TPz6P24"
                                                    title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <p class="">আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</p>
                                        <div class="card-group">
                                            <div class="card">
                                                <iframe width="802" height="441"
                                                    src="https://www.youtube.com/embed/l7G3TPz6P24"
                                                    title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                            <div class="card">
                                                <iframe width="802" height="441"
                                                    src="https://www.youtube.com/embed/l7G3TPz6P24"
                                                    title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                            <div class="card">
                                                <iframe width="802" height="441"
                                                    src="https://www.youtube.com/embed/l7G3TPz6P24"
                                                    title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row sidebar">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                    </div>

                                    <div class="mt-3">
                                        <p>সকল বাতায়ন</p>
                                        <form action="">
                                            <select name="" id="">
                                                <option value="">
                                                    ওয়েবসাইট বাছাই করুন
                                                </option>
                                                <option value="">
                                                    Dhaka
                                                </option>
                                                <option value="">
                                                    Chattogram
                                                </option>
                                                <option value="">
                                                    Khulna
                                                </option>
                                                <option value="">
                                                    Comilla
                                                </option>
                                            </select>
                                            <button>চলুন</button>
                                        </form>
                                    </div>

                                    <div class="video2 mt-5">
                                        <p class="">মুজিব১০০ আ্যাপ</p>
                                        <div class="card">
                                            <iframe width="316" height="200"
                                                src="https://www.youtube.com/embed/4Om3kZJL-qU"
                                                title="MUJIB100 APP | Speeches, Quotes, Books &amp; More | Get Inspired Everyday"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="mt-3">
                                            <p class="">মুজিব১০০ আ্যাপ</p>
                                            <div class="card">
                                                <img src="<?=get_template_directory_uri()?> ./assets/images/sidebar/mask-bd-portal (1).jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <spna class="">ডেঙ্গু প্রতিরোধে করণীয়</spna>
                                            <div class="card">
                                                <img src="<?=get_template_directory_uri()?> ./assets/images/sidebar/dengu.jpg"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <spna>ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর</spna>
                                            <div class="card">
                                                <iframe width="316" height="200"
                                                    src="https://www.youtube.com/embed/4Om3kZJL-qU"
                                                    title="MUJIB100 APP | Speeches, Quotes, Books &amp; More | Get Inspired Everyday"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <span>রূপময় বাংলাদেশ</span>
                                            <div class="card">
                                                <iframe width="316" height="200"
                                                    src="https://www.youtube.com/embed/4Om3kZJL-qU"
                                                    title="MUJIB100 APP | Speeches, Quotes, Books &amp; More | Get Inspired Everyday"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row sidebar mt-4 mb-5">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                        <img src="<?=get_template_directory_uri();?>./assets/images/sidebar/Bangladesh-Directory.jpg"
                                            alt="">
                                    </div>

                                </div>
                            </div>
    </section>

    <footer class="all-div footer mt-5">
        <div class=" d-flex align-items-center justify-content-center">
            <img src="<?=get_template_directory_uri();?> ./assets/images/footer/download.png" alt="">
        </div>
        <div class="row">
            <div class="col-lg-7">
                <nav class="navbar navbar-expand-lg bg-light mt-2">
                    <div class="">
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                            <ul class="navbar-nav menu me-auto mb-2 mb-lg-0">
                                <?php wp_nav_menu([
                            "theme_location" => "footer_menu",
                            "menu_class" => "navbar-nav"
                        ])?>
                            </ul>
                            <!-- <span class="navbar-text">
                        ব্যবহারের শর্তাবলি
                        </span>
                        <span class="navbar-text">
                        গোপনীয়তার নীতিমালা
                        </span>
                        <span class="navbar-text">
                        সার্বিক সহযোগিতায়
                        </span>
                        <span class="navbar-text">
                        সাইট ম্যাপ 
                        </span>
                        <span class="navbar-text">
                        সচরাচর জিজ্ঞাসা
                        </span> -->
                        </div>
                    </div>
                </nav>

                <div class="footerp mt-2">
                    <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২৩-০২-০৫ ০৬:১৯:৫২</p>
                </div>
            </div>
            <div class="col-lg-5 mt-3 rfooterp">
                <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4">
                        কারিগরি সহায়তায়:
                    </div>
                    <div class="col-lg-8">
                        <img width="100px"
                            src="<?=get_template_directory_uri();?>./assets/images/footer/np-logo-set.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>