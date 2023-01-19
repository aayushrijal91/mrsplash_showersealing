<header>
    <div class="header-top-mobile d-md-none">
        <div class="container">
            <div class="row py-2 align-items-center justify-content-between">
                <div class="col-auto fs-14 text-white d-flex align-items-center">
                    <div class="vibing-circle">
                        <div class="pulse pulsating-circle"></div>
                    </div>
                    <div class="ps-4"><span class="current-time"></span> We are currently open!</div>
                </div>
                <div class="col-auto">
                    <a href="tel:<?= $phone_number ?>" class="text-white text-decoration-none fs-14 fw-500 p-0"><?= $phone_number ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center py-3 py-md-0 gy-5 gx-md-5 gx-lg-3">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto d-none d-md-block">
                <div class="fs-14 text-grey fw-500">We are currently <span class="text-black fw-700">open!</span></div>
                <div class="opening-status-wrapper fs-24 fw-500 text-grey"><span class="current-time"></span></div>
            </div>
            <div class="col-auto d-none d-md-block">
                <div class="text-grey fs-14 fw-500 pb-1">Featured in</div>
                <div><?= renderImg('localnewsplus.png', 'logo') ?></div>
            </div>
            <div class="col-auto col-lg-12 col-xl-auto d-none d-md-block">
                <div class="row justify-content-center justify-content-xl-end align-items-center">
                    <div class="col-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-light rounded-2 fw-600 text-primary py-3 px-3">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 6.96151H14.6078C14.6061 5.48498 14.0188 4.06939 12.9748 3.02532C11.9308 1.98125 10.5153 1.39396 9.03879 1.3923V0C10.8844 0.00202691 12.6538 0.736121 13.9589 2.04122C15.2639 3.34632 15.998 5.11583 16 6.96151Z" fill="#0383BF" />
                                <path d="M13.2155 6.96151H11.8233C11.8233 6.22299 11.5299 5.51472 11.0077 4.9925C10.4855 4.47029 9.77728 4.17691 9.03879 4.17691V2.78461C10.1462 2.78571 11.2079 3.22613 11.991 4.00921C12.774 4.7923 13.2144 5.85407 13.2155 6.96151Z" fill="#0383BF" />
                                <path d="M10.0983 10.074L8.47354 11.6752L4.32535 7.52679L5.92643 5.90197C6.02326 5.80347 6.08859 5.67839 6.11413 5.54265C6.13967 5.40691 6.12425 5.26664 6.06983 5.13969L4.40262 1.2482C4.33672 1.09475 4.21785 0.9701 4.06769 0.897C3.91754 0.8239 3.74611 0.80722 3.58468 0.850001L0.521749 1.65893C0.368717 1.69853 0.233719 1.78903 0.138957 1.91555C0.0441956 2.04207 -0.00468542 2.19708 0.000354074 2.35508C0.195155 5.91512 1.67532 9.28348 4.16594 11.8346C6.71774 14.3257 10.087 15.8057 13.6478 15.9996C13.8058 16.0047 13.9608 15.9558 14.0873 15.861C14.2138 15.7663 14.3043 15.6313 14.3439 15.4782L15.1528 12.4152C15.1956 12.2537 15.1789 12.0823 15.1058 11.9321C15.0327 11.782 14.9081 11.6631 14.7546 11.5972L10.8633 9.9299C10.736 9.87497 10.5951 9.85933 10.4588 9.88501C10.3225 9.91069 10.1969 9.9765 10.0983 10.074Z" fill="#0383BF" />
                            </svg>
                            <span class="ps-2"> <?= $phone_number ?></span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#free-quote" class="btn btn-primary rounded-2 fw-600 text-white py-3 px-3">
                            Get Free Quote
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#form" class="btn btn-tertiary rounded-2 fw-600 text-white py-3 px-3">
                            Book Online
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="banner-mobile bg-dark d-md-none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 pt-4">
                <h1 class="fs-72 text-white fw-700 lh-1 text-center">Professional, Local, <span class="text-primary">Near-Me</span> Sydney Roofing</h1>
            </div>
            <div class="col-12 pt-4">
                <div class="text-white text-center fs-18 lh-1">We solve <b>ANY</b> kind of roofing job you can think of - <b>big or small, residential, commercial, strata or industrial</b></div>
            </div>
            <div class="col-12 pt-4">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24.0434" cy="8.89957" r="8.01431" fill="white" />
                            <path d="M19.3703 21.5711L16.254 24.6432C14.6279 23.6641 13.1172 22.505 11.7504 21.1878C10.4352 19.8202 9.27622 18.3105 8.2949 16.6865L11.3658 13.569C11.5523 13.3802 11.6783 13.1401 11.7277 12.8794C11.7772 12.6186 11.7479 12.3491 11.6436 12.1051L8.4391 4.63855C8.31309 4.34529 8.08626 4.10687 7.79969 3.96648C7.51312 3.82608 7.18577 3.79299 6.87692 3.8732L1.00206 5.42661C0.708295 5.50233 0.449057 5.67586 0.267039 5.91864C0.0850212 6.16143 -0.00892565 6.45898 0.000668264 6.7623C0.374265 13.5928 3.21386 20.0553 7.99181 24.9491C12.8854 29.7302 19.3483 32.5705 26.1785 32.9418C26.4815 32.9515 26.7788 32.8577 27.0215 32.6759C27.2642 32.4941 27.4377 32.235 27.5137 31.9414L29.0652 26.0644C29.1472 25.7546 29.1152 25.4257 28.975 25.1376C28.8348 24.8495 28.5958 24.6214 28.3014 24.4949L20.8377 21.2893C20.5929 21.1845 20.3224 21.1554 20.0609 21.2056C19.7994 21.2558 19.559 21.3831 19.3703 21.5711Z" fill="#0383BF" />
                            <path d="M24.0342 0.885263C22.6636 0.883691 21.3156 1.2343 20.1194 1.9035C18.9232 2.57269 17.9189 3.53803 17.2027 4.70699C16.4865 5.87596 16.0824 7.20935 16.0292 8.57938C15.976 9.9494 16.2755 11.3101 16.8989 12.5311L16.023 16.9135L20.4038 16.0373C21.4831 16.5885 22.6734 16.8876 23.8851 16.9119C25.0967 16.9363 26.298 16.6854 27.3987 16.178C28.4993 15.6707 29.4706 14.9201 30.2393 13.9829C31.008 13.0457 31.5541 11.9463 31.8366 10.7674C32.1191 9.58844 32.1305 8.36078 31.87 7.1768C31.6095 5.99282 31.0839 4.88339 30.3328 3.93204C29.5816 2.98069 28.6245 2.21221 27.5335 1.68446C26.4425 1.15672 25.246 0.883459 24.0342 0.885263ZM28.0398 10.2351H25.3694V12.9065H22.699V10.2351H20.0286V7.56371H22.699V4.89233H25.3694V7.56371H28.0398V10.2351Z" fill="#0383BF" />
                        </svg>
                    </div>
                    <div class="col">
                        <div class="fs-24 text-white fw-700 lh-1">No Call Out Fees*</div>
                        <div class="text-grey fs-14 lh-1">Terms & conditions may apply</div>
                    </div>
                </div>
            </div>
            <div class="col-12 pt-4">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15.8943" cy="16.0481" r="15.8943" fill="white" />
                            <path d="M15.8943 0.153809C12.7507 0.153809 9.67769 1.08599 7.06389 2.83248C4.45009 4.57896 2.41289 7.0613 1.20989 9.9656C0.00688676 12.8699 -0.307873 16.0657 0.305411 19.1489C0.918695 22.2321 2.43248 25.0642 4.65533 27.287C6.87818 29.5099 9.71027 31.0236 12.7935 31.6369C15.8766 32.2502 19.0724 31.9355 21.9767 30.7325C24.881 29.5295 27.3634 27.4923 29.1099 24.8785C30.8564 22.2647 31.7885 19.1917 31.7885 16.0481C31.7835 11.8342 30.1074 7.79432 27.1277 4.81465C24.148 1.83498 20.1082 0.158804 15.8943 0.153809ZM20.3457 8.23107L22.097 5.81614C22.2525 5.603 22.4862 5.46034 22.7468 5.41954C23.0075 5.37874 23.2736 5.44314 23.4868 5.59859C23.6999 5.75403 23.8426 5.98778 23.8834 6.24841C23.9242 6.50904 23.8598 6.7752 23.7043 6.98834L21.954 9.3993C21.8773 9.50484 21.7805 9.59424 21.6693 9.66239C21.558 9.73054 21.4344 9.7761 21.3055 9.79649C21.1767 9.81688 21.0451 9.81168 20.9182 9.7812C20.7913 9.75072 20.6717 9.69555 20.5662 9.61884C20.4607 9.54214 20.3713 9.44539 20.3031 9.33414C20.235 9.22288 20.1894 9.09929 20.169 8.97043C20.1486 8.84156 20.1538 8.70994 20.1843 8.58308C20.2148 8.45623 20.269 8.33661 20.3457 8.23107ZM8.30377 5.60057C8.4094 5.52339 8.52923 5.46783 8.65639 5.43708C8.78355 5.40634 8.91553 5.40101 9.04475 5.42141C9.17398 5.44181 9.2979 5.48753 9.4094 5.55595C9.52091 5.62437 9.6178 5.71415 9.69452 5.82011L11.4459 8.23107C11.6008 8.44474 11.6645 8.7112 11.6229 8.97183C11.5814 9.23246 11.438 9.46591 11.2243 9.62083C11.0107 9.77575 10.7442 9.83944 10.4836 9.79789C10.223 9.75635 9.9895 9.61297 9.83458 9.3993L8.08423 6.98834C8.00751 6.88281 7.95233 6.7632 7.92184 6.63634C7.89135 6.50948 7.88615 6.37785 7.90654 6.24898C7.92692 6.12011 7.9725 5.99652 8.04065 5.88527C8.10881 5.77401 8.19822 5.67727 8.30377 5.60057ZM7.69879 19.7554L4.86763 20.6763C4.74199 20.7235 4.60809 20.7448 4.47401 20.7388C4.33993 20.7328 4.20845 20.6997 4.08751 20.6415C3.96657 20.5833 3.85868 20.5012 3.77034 20.4002C3.682 20.2992 3.61506 20.1813 3.57354 20.0536C3.53203 19.926 3.51681 19.7913 3.5288 19.6576C3.54079 19.5239 3.57975 19.3941 3.64331 19.2759C3.70688 19.1577 3.79374 19.0536 3.89865 18.9699C4.00356 18.8862 4.12434 18.8246 4.25371 18.7888L7.08786 17.868C7.21336 17.8213 7.34701 17.8004 7.48077 17.8067C7.61454 17.8129 7.74566 17.8461 7.86625 17.9044C7.98685 17.9626 8.09443 18.0446 8.18252 18.1454C8.27062 18.2463 8.33742 18.3639 8.3789 18.4912C8.42038 18.6186 8.43569 18.753 8.42391 18.8864C8.41212 19.0198 8.3735 19.1494 8.31034 19.2675C8.24718 19.3856 8.1608 19.4897 8.05639 19.5735C7.95198 19.6574 7.8317 19.7192 7.70277 19.7554H7.69879ZM16.8877 27.9688C16.8877 28.2322 16.783 28.4849 16.5967 28.6712C16.4104 28.8575 16.1577 28.9622 15.8943 28.9622C15.6308 28.9622 15.3781 28.8575 15.1918 28.6712C15.0055 28.4849 14.9009 28.2322 14.9009 27.9688V24.9886C14.9009 24.7251 15.0055 24.4725 15.1918 24.2862C15.3781 24.0999 15.6308 23.9952 15.8943 23.9952C16.1577 23.9952 16.4104 24.0999 16.5967 24.2862C16.783 24.4725 16.8877 24.7251 16.8877 24.9886V27.9688ZM15.8943 20.263L10.9402 22.8677L11.8859 17.3504L7.8776 13.4434L13.4168 12.6388L15.8943 7.61915L18.3718 12.6388L23.9109 13.4434L19.9026 17.3504L20.8493 22.8677L15.8943 20.263ZM26.9209 20.6763L24.0858 19.7554C23.9568 19.7192 23.8366 19.6574 23.7322 19.5735C23.6277 19.4897 23.5414 19.3856 23.4782 19.2675C23.4151 19.1494 23.3764 19.0198 23.3646 18.8864C23.3529 18.753 23.3682 18.6186 23.4097 18.4912C23.4511 18.3639 23.5179 18.2463 23.606 18.1454C23.6941 18.0446 23.8017 17.9626 23.9223 17.9044C24.0429 17.8461 24.174 17.8129 24.3078 17.8067C24.4415 17.8004 24.5752 17.8213 24.7007 17.868L27.5348 18.7888C27.7742 18.8788 27.9697 19.0576 28.0806 19.288C28.1915 19.5185 28.2092 19.7828 28.1301 20.026C28.051 20.2692 27.8812 20.4725 27.6559 20.5937C27.4307 20.7148 27.1674 20.7444 26.9209 20.6763Z" fill="#0383BF" />
                        </svg>
                    </div>
                    <div class="col">
                        <div class="fs-24 text-white fw-700 lh-1">Get up to $500 Cashback!</div>
                        <div class="text-grey fs-14 lh-1">Turn in your old hot water system & receive up to $500 cash</div>
                    </div>
                </div>
            </div>
            <div class="col-12 pt-4">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16.8281" r="16" fill="white" />
                            <path d="M12.9161 12.8699C12.9161 14.2403 13.8426 14.7626 15.1468 15.2612V10.8188C13.9406 11.0387 12.9161 11.639 12.9161 12.8699Z" fill="#0383BF" />
                            <path d="M16.8526 17.752V22.2387C18.4764 21.992 19.2934 21.2849 19.2934 20.1102C19.2934 18.7079 18.2307 18.2356 16.8526 17.752Z" fill="#0383BF" />
                            <path d="M16 0.828125C7.17729 0.828125 0 8.00593 0 16.8281C0 25.6503 7.17729 32.8281 16 32.8281C24.8227 32.8281 32 25.6503 32 16.8281C32 8.00593 24.8227 0.828125 16 0.828125ZM20.0862 22.5757C19.3105 23.2488 18.2312 23.6766 16.8526 23.8619V26.6346H15.1474V23.9786C13.807 23.9693 11.9386 23.7737 10.7246 23.2111V21.3923C11.9788 21.9517 13.7595 22.3486 15.1474 22.3677V17.2044C12.7231 16.4183 10.9461 15.4144 10.9461 12.8937C10.9461 10.6655 12.9063 9.48825 15.1474 9.21625V7.02167H16.8526V9.18064C18.2508 9.22916 19.601 9.512 20.9022 10.0369L20.2957 11.5641C19.1665 11.1172 18.0186 10.8503 16.8521 10.7579V15.8372C18.0268 16.2155 18.912 16.585 19.503 16.9448C20.7695 17.7164 21.2748 18.6532 21.2748 19.9584C21.2754 21.0155 20.879 21.8877 20.0862 22.5757Z" fill="#0383BF" />
                        </svg>
                    </div>
                    <div class="col">
                        <div class="fs-24 text-white fw-700 lh-1">We Charge Per Job</div>
                        <div class="text-grey fs-14 lh-1">No additional fees no matter how long we take</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= renderImg('banner-shower.png', 'lib', 'w-100 pt-4 ps-1') ?>
</section>

<section class="awards-mobile d-md-none">
    <div class="container">
        <div class="row justify-content-center align-items-end">
            <div class="col-auto"><?= renderImg('awards.png', 'lib', 'awards') ?></div>
            <div class="col-auto"><?= renderImg('vip-locals.png', 'lib', 'awards') ?></div>
        </div>
        <div class="pt-4"><?= renderImg('service_cta.jpg', 'lib', 'w-100') ?></div>
        <div class="pt-3 pb-4"><?= renderImg('google_cta.jpg', 'lib', 'w-100') ?></div>
    </div>
</section>

<section class="free-quote-form-mobile d-md-none">
    <div class="container">
        <div class="fs-60 lh-1 fw-800 text-center text-black pb-4">Get Your Free <span class="text-primary">60 Second</span> Quote Now!</div>
    </div>
    <div id="free-quote-cta-mobile" class="bg-primary">
        <div>Get Free Quote</div>
        <div>Get Free Quote1</div>
        <div>Get Free Quote2</div>
    </div>
    <form class="form" id="free-quote-mobile" action="./src/free-quote-form" method="POST">
        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
        <div class="title fs-36">
            <?= renderImg('hanging-mrsplash.png', 'logo', 'form-mrsplash-logo') ?>
            Get Your Quick Quote
        </div>
        <div class="main">
            <div class="text-center fs-18 fw-700 text-dark pb-4">Simply complete our form below</div>
            <div class="row gy-3">
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 5C6.38071 5 7.5 3.88071 7.5 2.5C7.5 1.11929 6.38071 0 5 0C3.61929 0 2.5 1.11929 2.5 2.5C2.5 3.88071 3.61929 5 5 5Z" fill="#0383BF" />
                                    <path d="M5 6C4.34339 6 3.69321 6.12933 3.08658 6.3806C2.47995 6.63188 1.92876 7.00017 1.46447 7.46447C0.526784 8.40215 0 9.67392 0 11H10C10 9.67392 9.47322 8.40215 8.53553 7.46447C7.59785 6.52678 6.32608 6 5 6Z" fill="#0383BF" />
                                </svg>
                            </div>
                        </div>
                        <input class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Your Name" name="name" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.3141 7.80008L8.96137 6.75611C8.72864 6.65315 8.46845 6.62984 8.22113 6.68977C7.9738 6.7497 7.75315 6.88953 7.59337 7.0876L6.88312 7.97633C5.73213 7.24411 4.7559 6.26817 4.02337 5.11739L4.91137 4.4079C5.11013 4.24831 5.25055 4.02748 5.31078 3.7798C5.37101 3.53211 5.34766 3.27147 5.24437 3.03843L4.19962 0.685726C4.08863 0.435836 3.89254 0.233461 3.64627 0.114654C3.4 -0.00415286 3.11954 -0.0316757 2.85487 0.0369888L0.865876 0.553729C0.591471 0.625411 0.352885 0.795239 0.19531 1.03104C0.0377349 1.26685 -0.0278861 1.55226 0.0108769 1.8332C0.379213 4.39606 1.56784 6.77065 3.39877 8.60142C5.22971 10.4322 7.60443 11.6206 10.1674 11.9888C10.22 11.9962 10.2732 12 10.3264 12C10.5824 11.9998 10.8312 11.9148 11.0338 11.7582C11.2364 11.6016 11.3814 11.3823 11.4461 11.1345L11.9621 9.14481C12.0318 8.88022 12.0048 8.59947 11.886 8.35299C11.7672 8.10651 11.5645 7.91047 11.3141 7.80008Z" fill="#0383BF" />
                                </svg>
                            </div>
                        </div>
                        <input class="form-control border-0 rounded-0 bg-white" type="tel" placeholder="Your Contact Number" name="phone" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.25 0H0.75C0.3 0 0 0.285714 0 0.714286V1.71429L6 4.92857L12 1.78571V0.714286C12 0.285714 11.7 0 11.25 0Z" fill="#0383BF" />
                                    <path d="M5.625 6.35714L0 3.35714V9.28571C0 9.71429 0.3 10 0.75 10H11.25C11.7 10 12 9.71429 12 9.28571V3.35714L6.375 6.35714C6.165 6.45714 5.835 6.45714 5.625 6.35714Z" fill="#0383BF" />
                                </svg>
                            </div>
                        </div>
                        <input class="form-control border-0 rounded-0 bg-white" type="email" placeholder="Your Email Address" name="email" required>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary text-white form-control rounded-2 fw-18 fw-600">Submit</button>
                </div>
            </div>
        </div>
    </form>
</section>

<section class="banner d-none d-md-block">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-xl-6 col-xxl-5">
                <h1 class="fs-72 text-white fw-700 lh-1">Mr Splash<br> Shower Sealing</h1>
                <div class="text-white fs-24 fw-400 py-4">Offering the best water proofing service in Sydney</div>
                <div class="row pt-4">
                    <div class="col">
                        <div class="row align-items-center pb-4">
                            <div class="col-auto"><?= renderImg('no-call.png', 'icons') ?></div>
                            <div class="col">
                                <div class="fs-36 text-white fw-700 lh-1">No Call Out Fees*</div>
                                <div class="text-grey fs-18 lh-1">Terms & conditions may apply</div>
                            </div>
                        </div>
                        <div class="row align-items-center pt-3">
                            <div class="col-auto"><?= renderImg('always-open.png', 'icons') ?></div>
                            <div class="col">
                                <div class="fs-36 text-white fw-700 lh-1">Always Open 24/7</div>
                                <div class="text-grey fs-18 lh-1">We're always close & always open!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto"><?= renderImg('awards.png', 'lib') ?></div>
                </div>
            </div>
            <div class="col-xl-4">
                <form class="form" id="free-quote" action="./src/free-quote-form" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse2" class="recaptchaResponse">
                    <div class="title fs-36">
                        <?= renderImg('hanging-mrsplash.png', 'logo', 'form-mrsplash-logo') ?>
                        Get Your Quick Quote
                    </div>
                    <div class="main">
                        <div class="text-center fs-18 fw-700 text-dark pb-4">Simply complete our form below</div>
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5C6.38071 5 7.5 3.88071 7.5 2.5C7.5 1.11929 6.38071 0 5 0C3.61929 0 2.5 1.11929 2.5 2.5C2.5 3.88071 3.61929 5 5 5Z" fill="#0383BF" />
                                                <path d="M5 6C4.34339 6 3.69321 6.12933 3.08658 6.3806C2.47995 6.63188 1.92876 7.00017 1.46447 7.46447C0.526784 8.40215 0 9.67392 0 11H10C10 9.67392 9.47322 8.40215 8.53553 7.46447C7.59785 6.52678 6.32608 6 5 6Z" fill="#0383BF" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Your Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3141 7.80008L8.96137 6.75611C8.72864 6.65315 8.46845 6.62984 8.22113 6.68977C7.9738 6.7497 7.75315 6.88953 7.59337 7.0876L6.88312 7.97633C5.73213 7.24411 4.7559 6.26817 4.02337 5.11739L4.91137 4.4079C5.11013 4.24831 5.25055 4.02748 5.31078 3.7798C5.37101 3.53211 5.34766 3.27147 5.24437 3.03843L4.19962 0.685726C4.08863 0.435836 3.89254 0.233461 3.64627 0.114654C3.4 -0.00415286 3.11954 -0.0316757 2.85487 0.0369888L0.865876 0.553729C0.591471 0.625411 0.352885 0.795239 0.19531 1.03104C0.0377349 1.26685 -0.0278861 1.55226 0.0108769 1.8332C0.379213 4.39606 1.56784 6.77065 3.39877 8.60142C5.22971 10.4322 7.60443 11.6206 10.1674 11.9888C10.22 11.9962 10.2732 12 10.3264 12C10.5824 11.9998 10.8312 11.9148 11.0338 11.7582C11.2364 11.6016 11.3814 11.3823 11.4461 11.1345L11.9621 9.14481C12.0318 8.88022 12.0048 8.59947 11.886 8.35299C11.7672 8.10651 11.5645 7.91047 11.3141 7.80008Z" fill="#0383BF" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input class="form-control border-0 rounded-0 bg-white" type="tel" placeholder="Your Contact Number" name="phone" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.25 0H0.75C0.3 0 0 0.285714 0 0.714286V1.71429L6 4.92857L12 1.78571V0.714286C12 0.285714 11.7 0 11.25 0Z" fill="#0383BF" />
                                                <path d="M5.625 6.35714L0 3.35714V9.28571C0 9.71429 0.3 10 0.75 10H11.25C11.7 10 12 9.71429 12 9.28571V3.35714L6.375 6.35714C6.165 6.45714 5.835 6.45714 5.625 6.35714Z" fill="#0383BF" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input class="form-control border-0 rounded-0 bg-white" type="email" placeholder="Your Email Address" name="email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary text-white form-control rounded-2 fw-18 fw-600">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary text-center text-white fs-24 fw-700 pt-5 pb-6 d-none d-md-block">
    <div class="container">
        <div class="row gy-4">
            <div class="col-6 col-lg">
                <?= renderImg('shower-bath-sealing.png', 'lib') ?>
                <div>Shower & Bath Sealing</div>
            </div>
            <div class="col-6 col-lg">
                <?= renderImg('grout-repairs.png', 'lib') ?>
                <div>Grout Repairs</div>
            </div>
            <div class="col-6 col-lg">
                <?= renderImg('leaking-balcony.png', 'lib') ?>
                <div>Leaking Balcony</div>
            </div>
            <div class="col-6 col-lg">
                <?= renderImg('leaking-showers.png', 'lib') ?>
                <div>Leaking Showers</div>
            </div>
            <div class="col-6 col-lg">
                <?= renderImg('waterproofing.png', 'lib') ?>
                <div>Waterproofing</div>
            </div>
        </div>
    </div>
</section>

<section class="about d-none d-md-block">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-xl-6">
                <div class="fs-72 lh-1 fw-700 text-primary">Protect your home from water damage</div>
                <div class="py-5 text-dark fs-36 fw-800 lh-1">
                    Yes! We are the right team for your water proofing and sealing job!
                </div>
                <div class="fs-18 lh-1_67 text-grey">
                    <p class="pb-4">Welcome to Shower Sealing Sydney by Mr Splash, your Sydney wide Shower Sealing Company Sydney & General Plumbing Company Sydney. We pride ourselves on our eccentric workmanship and company process. We have been established since 2010 and have always been a company with pride and love for our clients.</p>
                    <p class="pb-4">Shower Sealing Sydney have been an in demand service offered by Mr Splash since 2010 with to date over 3600 Bathrooms Renovated. The growth of our renovation division has come via our unparalleled designs and workmanship. We are truly the right company to choose for your next water proofing and sealing project. Shower Sealing are a highly stressful project that requires a company that not only has the abilities but also the experience to know the quickest and most efficient solution for a water proofed home.</p>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <a href="#free-quote" class="btn btn-tertiary rounded-2 fw-600 text-white py-2 px-6 px-xxl-7">
                            Get Your Free 60<br> Second Quote Now!
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="tel: <?= $phone_number ?>" class="btn btn-primary rounded-2 fw-600 text-white py-3 px-5 px-xxl-6">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.291 8.95189H18.5507C18.5486 7.10622 17.8146 5.33674 16.5095 4.03165C15.2045 2.72656 13.4351 1.99245 11.5895 1.99038V0.25C13.8965 0.252534 16.1083 1.17015 17.7396 2.80152C19.3709 4.4329 20.2885 6.64478 20.291 8.95189Z" fill="white" />
                                <path d="M16.8104 8.95189H15.0701C15.0701 8.02874 14.7034 7.14339 14.0507 6.49062C13.3979 5.83786 12.5126 5.47114 11.5895 5.47114V3.73076C12.9737 3.73214 14.3009 4.28267 15.2797 5.26152C16.2585 6.24037 16.809 7.56758 16.8104 8.95189Z" fill="white" />
                                <path d="M12.9139 12.8425L10.8829 14.8439L5.69771 9.65849L7.69906 7.62746C7.82009 7.50434 7.90176 7.34799 7.93368 7.17831C7.9656 7.00864 7.94632 6.8333 7.87831 6.67461L5.79429 1.81025C5.71191 1.61843 5.56332 1.46262 5.37563 1.37125C5.18794 1.27988 4.97365 1.25902 4.77187 1.3125L0.943201 2.32366C0.751912 2.37316 0.583164 2.48629 0.464712 2.64444C0.34626 2.80259 0.285159 2.99635 0.291458 3.19385C0.53496 7.6439 2.38516 11.8543 5.49844 15.0432C8.68819 18.1571 12.8998 20.0071 17.3508 20.2496C17.5483 20.2559 17.742 20.1948 17.9002 20.0763C18.0583 19.9578 18.1714 19.7891 18.2209 19.5978L19.232 15.769C19.2855 15.5672 19.2647 15.3529 19.1733 15.1652C19.0819 14.9775 18.9261 14.8289 18.7343 14.7465L13.8702 12.6624C13.711 12.5937 13.5349 12.5742 13.3645 12.6063C13.1941 12.6384 13.0372 12.7206 12.9139 12.8425Z" fill="white" />
                            </svg>
                            <span class="ps-2">Call Now</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 d-xl-none">
                <div class="row">
                    <div class="col-6"><?= renderImg('service_cta.jpg', 'lib', 'w-100') ?></div>
                    <div class="col-6"><?= renderImg('google_cta.jpg', 'lib', 'w-100') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map d-none d-md-block">
    <div class="container-fluid px-0">
        <div class="row gx-0">
            <div class="col-lg-6"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d424141.46927053836!2d150.9319747!3d-33.84829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb76d7432f2895b1a!2sMr%20Splash%20Plumbing!5e0!3m2!1sen!2sau!4v1634777900494!5m2!1sen!2sau" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            <div class="col-lg-6">
                <div class="map-description">
                    <div class="fs-72 fw-700 lh-1 pb-3">Mr Splash Sealing Sydney:</div>
                    <div class="fs-18 lh-1_67 text-secondary pt-4">We can renovate and expand on any waterproofing or sealing job. Our team will walk you through the project and what your imagination of your new project will look like. Advice and guidance is the most valuable asset when it comes to going through any type of waterproofing or sealing job in Sydney and we are a company that understands this. So if you’re in the market and looking for the best Shower Sealing company then let us demonstrate our process.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-n6 d-none d-lg-block">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-xl-3">
                <div class="bg-tertiary text-white text-center py-4">
                    <div class="fs-24 fw-700 lh-1">Minor Shower Renovations</div>
                    <div class="fs-18 fw-700 d-flex justify-content-center gap-1 lh-1">From <span class="fs-48 fw-800">$6,000*</span></div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="bg-dark text-white text-center py-4">
                    <div class="fs-24 fw-700 lh-1">Shower Sealing</div>
                    <div class="fs-18 fw-700 d-flex justify-content-center gap-1 lh-1">From <span class="fs-48 fw-800">$1,500*</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="fs-72 fw-700 text-primary text-center lh-1 pb-3 pb-md-5">Mr Splash Sealing Services</div>
        <div class="row justify-content-center gx-2 d-md-none pb-3">
            <div class="col-5">
                <div class="bg-tertiary text-white text-center py-2">
                    <div class="fs-8 fw-700">Minor Shower Renovations</div>
                    <div class="fs-8 fw-700 d-flex justify-content-center gap-1">From <span class="fs-16 fw-800">$6,000*</span></div>
                </div>
            </div>
            <div class="col-5">
                <div class="bg-dark text-white text-center py-2">
                    <div class="fs-8 fw-700">Shower Sealing</div>
                    <div class="fs-8 fw-700 d-flex justify-content-center gap-1">From <span class="fs-16 fw-800">$1,500*</span></div>
                </div>
            </div>
        </div>
        <div class="row pt-2 gy-5 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="service bg-secondary">
                    <div class="main">
                        <div class="fs-36 lh-1 fw-700">Shower<br> Sealing</div>
                        <div class="fs-18 fw-300 lh-1 pt-2">We’ll be at your door within the hour</div>
                    </div>
                    <?= renderImg('service-1.png', 'lib', 'w-100') ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service bg-primary">
                    <div class="main">
                        <div class="fs-36 lh-1 fw-700">Bath<br> Sealing</div>
                        <div class="fs-18 fw-300 lh-1 pt-2">No extra or hidden fees for extended time</div>
                    </div>
                    <?= renderImg('service-2.png', 'lib', 'w-100') ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service bg-tertiary">
                    <div class="main">
                        <div class="fs-36 lh-1 fw-700">Grout<br> Repairs</div>
                        <div class="fs-18 fw-300 lh-1 pt-2">Teams all over Sydney to assist you 24/7</div>
                    </div>
                    <?= renderImg('service-3.png', 'lib', 'w-100') ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service bg-tertiary">
                    <div class="main">
                        <div class="fs-36 lh-1 fw-700">Leaking<br> Showers</div>
                        <div class="fs-18 fw-300 lh-1 pt-2">We’ll be at your door within the hour</div>
                    </div>
                    <?= renderImg('service-4.png', 'lib', 'w-100') ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service bg-secondary">
                    <div class="main">
                        <div class="fs-36 lh-1 fw-700">Leaking<br> Balcony</div>
                        <div class="fs-18 fw-300 lh-1 pt-2">No extra or hidden fees for extended time</div>
                    </div>
                    <?= renderImg('service-5.png', 'lib', 'w-100') ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service bg-primary">
                    <div class="main">
                        <div class="fs-36 lh-1 fw-700">Waterproofing</div>
                        <div class="fs-18 fw-300 lh-1 pt-2">Teams all over Sydney to assist you 24/7</div>
                    </div>
                    <?= renderImg('service-6.png', 'lib', 'w-100') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-us">
    <div class="container">
        <div class="text-white fs-72 lh-1 fw-700 text-center">WHY Should I use<br> Mr Splash <span class="text-primary">Shower Sealing Sydney?</span></div>
        <div class="text-grey fs-18 text-center py-5 d-none d-md-block">Other than the list below, let us explain why the Shower Sealing Sydney is were it is today since 1990 we have seen an influx quick & cheap style workmanship by contractor style companies that promise the world and provide you sealing that looks great for the first 3 months, this is because these companies and contractors are not Licensed sealers, they do not hold pride & workmanship at a high level, like how we do at Mr Splash Shower Sealing, tilling is not the essential component to a sealing project it's what lies beneath, Waterproofing last when a Water Proofer does it, homes don’t leak when a licensed Water Proofer does it.</div>
        <?= renderImg('why-us.jpg', 'lib', 'w-100 d-lg-none py-4') ?>
        <div class="row fs-24 align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="reasons">
                            We are a licensed<br> Sealing Company
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            Our Insurances are the<br> best in the Industry
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            We have Lifetime<br> Warranty
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons py-3">
                            Free Lifetime Membership Plans with every Sealing Job Sydney
                            <div class="fs-14 text-grey fw-300 pt-2">www.mrsplashplumbing.com.au/membership</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            We Consult & give<br> Practical Advice
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-none d-lg-block"><?= renderImg('why-us.jpg', 'lib', 'h-100') ?></div>
            <div class="col-md-6 col-lg-4">
                <div class="row gy-4">
                    <div class="col-12 pt-4 pt-md-0">
                        <div class="reasons">
                            Family Owned Since 2010
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            We DO NOT use<br> Contractors
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            Best Plumbing Company<br> Award Winner since 2017
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons py-3">
                            We know Sealing &<br> Waterproofing
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reasons">
                            We have nothing but<br> 5-star Reviews
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center fs-18 lh-1_67 text-grey pt-6 d-none d-md-block"><span class="text-white fw-500">SEALING & WATERPROOFING THAT LASTS A LIFETIME</span>, you are more than likely Renovating your home right now because of simply POOR workmanship your home would be discoloured, experiencing cracks, visible mould elements inside the home due to leakage, a bad smell, black spots in the ceiling. This is the result of poor choices and not using a company like Mr Splash Plumbing & Shower Sealing your licenced local Plumbing Company</div>
    </div>
</section>

<section class="form2">
    <div class="container">
        <?= renderImg('main-form.png', 'lib', 'w-100 d-none d-md-block') ?>

        <form class="form" id="form" action="./src/form" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" id="recaptchaResponse3" class="recaptchaResponse">
            <div class="main">
                <div class="fs-72 lh-1 fw-700 text-center pb-5 pb-md-6">Book Your <span class="text-primary text-uppercase">Free</span> Onsite Consultation</div>
                <div class="row gy-4">
                    <div class="col-md-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="firstName">What is your first name?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5C6.38071 5 7.5 3.88071 7.5 2.5C7.5 1.11929 6.38071 0 5 0C3.61929 0 2.5 1.11929 2.5 2.5C2.5 3.88071 3.61929 5 5 5Z" fill="#0383BF" />
                                        <path d="M5 6C4.34339 6 3.69321 6.12933 3.08658 6.3806C2.47995 6.63188 1.92876 7.00017 1.46447 7.46447C0.526784 8.40215 0 9.67392 0 11H10C10 9.67392 9.47322 8.40215 8.53553 7.46447C7.59785 6.52678 6.32608 6 5 6Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="firstName" class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Eg: John" name="firstName" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="lastName">What is your last name?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5C6.38071 5 7.5 3.88071 7.5 2.5C7.5 1.11929 6.38071 0 5 0C3.61929 0 2.5 1.11929 2.5 2.5C2.5 3.88071 3.61929 5 5 5Z" fill="#0383BF" />
                                        <path d="M5 6C4.34339 6 3.69321 6.12933 3.08658 6.3806C2.47995 6.63188 1.92876 7.00017 1.46447 7.46447C0.526784 8.40215 0 9.67392 0 11H10C10 9.67392 9.47322 8.40215 8.53553 7.46447C7.59785 6.52678 6.32608 6 5 6Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="lastName" class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Eg: Doe" name="lastName" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="phoneNumber">What is your contact number?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.1998 9.1001L10.4549 7.88212C10.1834 7.76201 9.87986 7.73481 9.59131 7.80473C9.30277 7.87465 9.04534 8.03779 8.85893 8.26886L8.0303 9.30572C6.68748 8.45147 5.54855 7.31286 4.69393 5.97029L5.72993 5.14255C5.96182 4.95636 6.12565 4.69873 6.19591 4.40976C6.26618 4.1208 6.23894 3.81671 6.11843 3.54483L4.89956 0.800014C4.77007 0.508475 4.5413 0.272371 4.25398 0.133763C3.96666 -0.004845 3.63947 -0.036955 3.33069 0.0431536L1.01019 0.646017C0.69005 0.729646 0.4117 0.927779 0.227862 1.20289C0.044024 1.47799 -0.0325338 1.81097 0.0126897 2.13874C0.442415 5.12874 1.82914 7.89909 3.96524 10.035C6.10133 12.1709 8.87184 13.5574 11.8619 13.9869C11.9234 13.9956 11.9854 14 12.0474 14C12.3462 13.9998 12.6364 13.9006 12.8728 13.7179C13.1092 13.5352 13.2783 13.2793 13.3538 12.9903L13.9558 10.6689C14.0371 10.3603 14.0056 10.0327 13.867 9.74515C13.7285 9.4576 13.4919 9.22888 13.1998 9.1001Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="phoneNumber" class="form-control border-0 rounded-0 bg-white" type="tel" placeholder="Eg: 0400 000 000" name="phone" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="emailAddress">What is your email address?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.0625 0H0.9375C0.375 0 0 0.342857 0 0.857143V2.05714L7.5 5.91429L15 2.14286V0.857143C15 0.342857 14.625 0 14.0625 0Z" fill="#0383BF" />
                                        <path d="M7.03125 7.62857L0 4.02857V11.1429C0 11.6571 0.375 12 0.9375 12H14.0625C14.625 12 15 11.6571 15 11.1429V4.02857L7.96875 7.62857C7.70625 7.74857 7.29375 7.74857 7.03125 7.62857Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="emailAddress" class="form-control border-0 rounded-0 bg-white" type="email" placeholder="Eg: email@example.com" name="email" required>
                        </div>
                    </div>
                    <div class="col-12 col-xl-10 col-xxl-9">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="typeOfRoof">Type of roof:</label>
                        <div class="row">
                            <div class="col-6 col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof1" checked>
                                    <label class="form-check-label w-100" for="typeOfRoof1">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">Gable</div>
                                            <div class="order-1 order-md-2"><?= renderImg('gable.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof2">
                                    <label class="form-check-label w-100" for="typeOfRoof2">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">Shed</div>
                                            <div class="order-1 order-md-2"><?= renderImg('shed.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof3">
                                    <label class="form-check-label w-100" for="typeOfRoof3">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">Hip</div>
                                            <div class="order-1 order-md-2"><?= renderImg('hip.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof4">
                                    <label class="form-check-label w-100" for="typeOfRoof4">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">Butterfly</div>
                                            <div class="order-1 order-md-2"><?= renderImg('butterfly.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof5">
                                    <label class="form-check-label w-100" for="typeOfRoof5">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">Dutch</div>
                                            <div class="order-1 order-md-2"><?= renderImg('dutch.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof6">
                                    <label class="form-check-label w-100" for="typeOfRoof6">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">Gambrel</div>
                                            <div class="order-1 order-md-2"><?= renderImg('gambrel.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof7">
                                    <label class="form-check-label w-100" for="typeOfRoof7">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">Mansard</div>
                                            <div class="order-1 order-md-2"><?= renderImg('mansard.png', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof8">
                                    <label class="form-check-label w-100" for="typeOfRoof8">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">Dormer</div>
                                            <div class="order-1 order-md-2"><?= renderImg('dormer.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-lg">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof9">
                                    <label class="form-check-label w-100" for="typeOfRoof9">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">Flat</div>
                                            <div class="order-1 order-md-2"><?= renderImg('flat.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeOfRoof" id="typeOfRoof10">
                                    <label class="form-check-label w-100" for="typeOfRoof10">
                                        <div class="d-flex justify-content-md-between">
                                            <div class="order-2 order-md-1 ps-3 ps-md-0">M Shaped</div>
                                            <div class="order-1 order-md-2"><?= renderImg('mshaped.jpg', 'icons') ?></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="budget">Do You Have Budget?</label>
                        <div class="row align-items-center gy-3">
                            <div class="col-auto">
                                <div class="form-check form-check-inline checkBudget">
                                    <input class="form-check-input" type="radio" name="budget" id="budget1" value="Yes">
                                    <label class="form-check-label" for="budget1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline checkBudget">
                                    <input class="form-check-input" type="radio" name="budget" id="budget2" value="No" checked>
                                    <label class="form-check-label" for="budget2">No</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="input-group">
                                    <input id="budgetAmount" class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Budget Amount" name="budgetAmount" disabled required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="streetAddress">What is your street address?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.297852C6.41775 0.297852 4.87103 0.767043 3.55544 1.64609C2.23985 2.52515 1.21447 3.77457 0.608967 5.23638C0.00346627 6.69819 -0.15496 8.30672 0.153721 9.85857C0.462403 11.4104 1.22433 12.8359 2.34315 13.9547C3.46197 15.0735 4.88743 15.8354 6.43928 16.1441C7.99113 16.4528 9.59966 16.2944 11.0615 15.6889C12.5233 15.0834 13.7727 14.058 14.6518 12.7424C15.5308 11.4268 16 9.8801 16 8.29785C15.9975 6.17687 15.1539 4.14347 13.6541 2.64371C12.1544 1.14395 10.121 0.30031 8 0.297852ZM11.8111 11.0439C11.7781 11.0835 11.7339 11.1122 11.6844 11.1265C11.6349 11.1408 11.5822 11.1399 11.5332 11.1239L8 9.97682L4.46684 11.1239C4.41784 11.1398 4.3652 11.1406 4.31571 11.1264C4.26621 11.1121 4.22213 11.0833 4.18913 11.0438C4.15612 11.0042 4.13571 10.9557 4.13052 10.9044C4.12533 10.8532 4.1356 10.8015 4.16 10.7562L7.7729 4.0465C7.79708 4.00811 7.83059 3.97648 7.8703 3.95456C7.91002 3.93264 7.95464 3.92114 8 3.92114C8.04536 3.92114 8.08998 3.93264 8.1297 3.95456C8.16941 3.97648 8.20292 4.00811 8.2271 4.0465L11.84 10.7562C11.8645 10.8015 11.8748 10.8532 11.8696 10.9045C11.8645 10.9558 11.8441 11.0043 11.8111 11.0439Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="streetAddress" class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Eg: 123 Name Street, Suburb" name="streetAddress" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="postcode">What is your postcode?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.297852C6.41775 0.297852 4.87103 0.767043 3.55544 1.64609C2.23985 2.52515 1.21447 3.77457 0.608967 5.23638C0.00346627 6.69819 -0.15496 8.30672 0.153721 9.85857C0.462403 11.4104 1.22433 12.8359 2.34315 13.9547C3.46197 15.0735 4.88743 15.8354 6.43928 16.1441C7.99113 16.4528 9.59966 16.2944 11.0615 15.6889C12.5233 15.0834 13.7727 14.058 14.6518 12.7424C15.5308 11.4268 16 9.8801 16 8.29785C15.9975 6.17687 15.1539 4.14347 13.6541 2.64371C12.1544 1.14395 10.121 0.30031 8 0.297852ZM11.8111 11.0439C11.7781 11.0835 11.7339 11.1122 11.6844 11.1265C11.6349 11.1408 11.5822 11.1399 11.5332 11.1239L8 9.97682L4.46684 11.1239C4.41784 11.1398 4.3652 11.1406 4.31571 11.1264C4.26621 11.1121 4.22213 11.0833 4.18913 11.0438C4.15612 11.0042 4.13571 10.9557 4.13052 10.9044C4.12533 10.8532 4.1356 10.8015 4.16 10.7562L7.7729 4.0465C7.79708 4.00811 7.83059 3.97648 7.8703 3.95456C7.91002 3.93264 7.95464 3.92114 8 3.92114C8.04536 3.92114 8.08998 3.93264 8.1297 3.95456C8.16941 3.97648 8.20292 4.00811 8.2271 4.0465L11.84 10.7562C11.8645 10.8015 11.8748 10.8532 11.8696 10.9045C11.8645 10.9558 11.8441 11.0043 11.8111 11.0439Z" fill="#0383BF" />
                                    </svg>
                                </div>
                            </div>
                            <input id="postcode" class="form-control border-0 rounded-0 bg-white" type="text" placeholder="Eg: 0000" name="postcode" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="preferredServicingDate">When do you prefer to be serviced?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0383BF" class="bi bi-calendar" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg>
                                </div>
                            </div>
                            <input id="preferredServicingDate" class="form-control border-0 rounded-0 bg-white" type="date" name="preferredServicingDate" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3" for="preferredServicingTime">When do you preferred time?</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="##0383BF" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    </svg>
                                </div>
                            </div>
                            <input id="preferredServicingTime" class="form-control border-0 rounded-0 bg-white" type="time" name="preferredServicingTime" required>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8 col-xxl-6 pt-4">
                        <label class="fs-18 fw-400 text-dark pb-2 pb-md-3">Please upload a photo of your current roof/issue:</label>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <label for="file-upload" class="my-0" id="file-label">
                                    <div class="bg-primary rounded-pill line-height-2 fs-24 fw-300 text-white py-2 px-3 py-md-3 px-md-5">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.12523 11.7148C1.89776 11.7154 1.67594 11.644 1.49141 11.511C1.30687 11.378 1.16905 11.1902 1.09761 10.9742C0.834729 10.167 0.78752 9.3051 0.960664 8.474C1.13381 7.64291 1.52129 6.87153 2.08465 6.23643L6.43284 1.88849C7.06762 1.32554 7.83847 0.938198 8.66902 0.764826C9.49958 0.591454 10.361 0.638069 11.168 0.900054C11.4419 0.990384 11.6687 1.18581 11.7985 1.44334C11.9283 1.70087 11.9504 1.99941 11.8601 2.27328C11.7698 2.54715 11.5743 2.77392 11.3168 2.90371C11.0592 3.03349 10.7607 3.05566 10.4868 2.96533C10.0616 2.82992 9.60968 2.801 9.17071 2.88111C8.73173 2.96122 8.31914 3.1479 7.9692 3.42476L3.62101 7.7727C3.34435 8.12302 3.15781 8.53583 3.07771 8.97496C2.99761 9.4141 3.02639 9.86618 3.16155 10.2916C3.2485 10.5655 3.22392 10.8626 3.09312 11.1185C2.96233 11.3744 2.73588 11.5684 2.46294 11.6583C2.35386 11.694 2.24 11.7131 2.12523 11.7148Z" fill="white" />
                                            <path d="M8.47359 16.9657C7.92633 16.9681 7.38173 16.8895 6.85751 16.7324C6.72199 16.6873 6.59668 16.6159 6.48874 16.5224C6.3808 16.4288 6.29234 16.315 6.22841 16.1872C6.0993 15.9293 6.07795 15.6306 6.16905 15.357C6.26015 15.0833 6.45625 14.857 6.7142 14.7279C6.84193 14.664 6.98099 14.6258 7.12346 14.6156C7.26593 14.6055 7.40901 14.6234 7.54453 14.6685C7.96905 14.8024 8.41986 14.8303 8.85767 14.75C9.29547 14.6697 9.70698 14.4835 10.0563 14.2077L14.4045 9.85971C14.6812 9.50939 14.8677 9.09659 14.9478 8.65745C15.0279 8.21831 14.9991 7.76624 14.864 7.34081C14.7842 7.06999 14.8129 6.77877 14.9441 6.52876C15.0752 6.27875 15.2985 6.08957 15.5667 6.00125C15.8349 5.91294 16.1269 5.93241 16.3809 6.05556C16.635 6.17871 16.8311 6.39586 16.9279 6.66108C17.1903 7.46789 17.2372 8.32924 17.0641 9.15977C16.8909 9.99031 16.5037 10.7612 15.9409 11.396L11.5927 15.7439C11.1811 16.1461 10.6929 16.4615 10.1571 16.6713C9.62134 16.8812 9.04883 16.9813 8.47359 16.9657Z" fill="white" />
                                            <path d="M1.76578 17.1498C1.55092 17.1496 1.34094 17.0857 1.16235 16.9663C0.98376 16.8468 0.844578 16.6771 0.762381 16.4786C0.680184 16.2801 0.658658 16.0617 0.700523 15.851C0.742388 15.6403 0.845766 15.4467 0.997599 15.2946L6.07049 10.222C6.27656 10.03 6.54911 9.92551 6.83073 9.93048C7.11235 9.93544 7.38105 10.0495 7.58021 10.2487C7.77938 10.4478 7.89347 10.7165 7.89843 10.9981C7.9034 11.2797 7.79887 11.5523 7.60685 11.7583L2.53396 16.8309C2.4334 16.9323 2.31372 17.0126 2.18185 17.0674C2.04998 17.1221 1.90856 17.1501 1.76578 17.1498Z" fill="white" />
                                            <path d="M11.1869 7.72922C10.972 7.72903 10.762 7.66518 10.5834 7.54573C10.4048 7.42627 10.2657 7.25658 10.1835 7.05808C10.1013 6.85958 10.0797 6.64117 10.1216 6.43044C10.1635 6.21971 10.2668 6.02611 10.4187 5.8741L15.4916 0.801501C15.6976 0.609496 15.9702 0.504966 16.2518 0.509935C16.5334 0.514904 16.8021 0.628982 17.0013 0.828137C17.2005 1.02729 17.3146 1.29597 17.3195 1.57758C17.3245 1.85918 17.22 2.13172 17.0279 2.33777L11.955 7.41037C11.8545 7.51172 11.7348 7.5921 11.6029 7.64683C11.4711 7.70157 11.3296 7.72957 11.1869 7.72922Z" fill="white" />
                                        </svg>
                                        Attach File
                                    </div>
                                </label>
                                <input id="file-upload" class="form-control rounded-0" type="file" name="uploadedFile" onchange="fileUploaded('file-upload','uploaded-file-name')">
                            </div>
                            <div class="col">
                                <div class="fs-16 fw-500" id="uploaded-file-name">No file chosen
                                </div>
                            </div>
                        </div>
                        <label class="fs-18 fw-400 text-grey pt-2 pt-md-3">Allowed Type(s): .pdf, .doc, .docx</label>
                    </div>
                </div>
            </div>
            <div class="submission">
                <div class="row align-items-center gy-4">
                    <div class="col-md">
                        <div class="text-white fs-36 fw-700 pb-3">
                            <svg width="30" height="23" viewBox="0 0 30 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 3.05638L28.5 0.123047C15.5625 3.78971 9 11.8564 9 11.8564L3 7.45638L0 10.3897L9 22.123C15.9375 9.47305 30 3.05638 30 3.05638Z" fill="#38C235" />
                            </svg>
                            At your door within the hour of your preferred time
                        </div>
                        <div class="text-white fs-14 fw-300 text-center text-md-start"><span class="fw-700 text-primary"><svg width="8" height="11" viewBox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.2 4.28971H6.4V2.62305C6.4 1.96001 6.14714 1.32412 5.69706 0.85528C5.24697 0.386439 4.63652 0.123047 4 0.123047C3.36348 0.123047 2.75303 0.386439 2.30294 0.85528C1.85286 1.32412 1.6 1.96001 1.6 2.62305V4.28971H0.8C0.587827 4.28971 0.384344 4.37751 0.234315 4.53379C0.0842854 4.69007 0 4.90203 0 5.12305V9.28971C0 9.51073 0.0842854 9.72269 0.234315 9.87897C0.384344 10.0352 0.587827 10.123 0.8 10.123H7.2C7.41217 10.123 7.61566 10.0352 7.76569 9.87897C7.91571 9.72269 8 9.51073 8 9.28971V5.12305C8 4.90203 7.91571 4.69007 7.76569 4.53379C7.61566 4.37751 7.41217 4.28971 7.2 4.28971ZM4.8 4.28971H3.2V2.62305C3.2 2.40203 3.28429 2.19007 3.43431 2.03379C3.58434 1.87751 3.78783 1.78971 4 1.78971C4.21217 1.78971 4.41566 1.87751 4.56569 2.03379C4.71571 2.19007 4.8 2.40203 4.8 2.62305V4.28971Z" fill="#0383BF" />
                                </svg>
                                Privacy & Security Policy</span> All information provided will be kept 100% confidential & secure
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <button type="submit" class="btn w-100 btn-tertiary rounded-2 text-white py-3 px-md-4 fw-700 fw-600">
                            Submit Booking
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<footer>
    <div class="footer-top-mobile d-md-none">
        <div class="container">
            <div class="row gy-3">
                <div class="col-12">
                    <div class="text-white text-center fw-700 fm-1 lh-1">Book a Sealing Service today!</div>
                    <div class="text-white text-center fs-18 fw-300 py-3">Call us on <?= $phone_number ?> or book online & receive $50 OFF!</div>
                </div>
                <div class="col-12">
                    <a href="#free-quote-mobile" class="btn btn-primary rounded-2 fw-600 text-white py-3 px-3 fs-18">
                        Get Free Quote
                    </a>
                </div>
                <div class="col-12">
                    <a href="#form" class="btn btn-tertiary rounded-2 fw-600 text-white py-3 px-3 fs-18">
                        Book Online
                    </a>
                </div>
            </div>
        </div>
        <?= renderImg('men-panel.png', 'lib', 'w-100') ?>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center justify-content-xl-between gy-4">
                <div class="col-auto">
                    <?= renderImg('footer-logo.png', 'logo') ?>
                </div>
                <div class="col-auto">
                    <div class="row gy-3 gx-3">
                        <div class="col-12 col-md-4 col-lg-auto"><?= renderImg('word-of-mouth.png', 'lib', 'w-100') ?></div>
                        <div class="col-12 col-md-4 col-lg-auto"><?= renderImg('google-reviews.png', 'lib', 'w-100') ?></div>
                        <div class="col-12 col-md-4 col-lg-auto"><?= renderImg('youtube-channel.png', 'lib', 'w-100') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-links d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg">
                    <div class="fs-24 fw-700 text-white pb-4">Quick Links</div>
                    <ul class="quick-links">
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Our Services</a></li>
                        <li><a href="">Areas We Service</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="fs-24 fw-700 text-white pb-4">Plumbing</div>
                    <ul class="quick-links">
                        <li><a href="">Broken Pipes Repair</a></li>
                        <li><a href="">Burst Water Pipes Repair</a></li>
                        <li><a href="">Commercial Plumbing</a></li>
                        <li><a href="">Dishwasher Installation</a></li>
                        <li><a href="">Jet Blasting</a></li>
                        <li><a href="" class="text-white">See More</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="fs-24 fw-700 text-white pb-4">Drains</div>
                    <ul class="quick-links">
                        <li><a href="">Blocked Drains</a></li>
                        <li><a href="">Blocked Pipes</a></li>
                        <li><a href="">Blocked Sewers</a></li>
                        <li><a href="">Drain Camera Inspection</a></li>
                        <li><a href="">Drain Repairs</a></li>
                        <li><a href="" class="text-white">See More</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="fs-24 fw-700 text-white pb-4">Hot Water</div>
                    <ul class="quick-links">
                        <li><a href="">Dux Hot Water</a></li>
                        <li><a href="">Electric Hot Water Systems</a></li>
                        <li><a href="">Hot Water Heater Brands</a></li>
                        <li><a href="">Hot Water Heater Installation</a></li>
                        <li><a href="">Hot Water Heater</a></li>
                        <li><a href="" class="text-white">See More</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="fs-24 fw-700 text-white pb-4">Support</div>
                    <ul class="quick-links">
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Book Online</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Lifetime Membership</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-accreditation">
        <div class="container">
            <div class="row justify-content-between pt-4 pt-md-0 gy-5">
                <div class="col-12 col-xl-6">
                    <div class="fs-24 fw-700 text-white pb-4 text-center text-md-start">Accredited Plumbers</div>
                    <div class="row justify-content-between align-items-center" id="accreditation">
                        <div class="col-auto"><?= renderImg('aus-standard.png', 'logo') ?></div>
                        <div class="col-auto"><?= renderImg('sca.png', 'logo') ?></div>
                        <div class="col-auto"><?= renderImg('best-handyman.png', 'logo') ?></div>
                        <div class="col-auto"><?= renderImg('ebix.png', 'logo') ?></div>
                        <div class="col-auto"><?= renderImg('mpa.png', 'logo') ?></div>
                        <div class="col-auto"><?= renderImg('seniors-card.png', 'logo') ?></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2 d-none d-md-block">
                    <div class="fs-24 fw-700 text-white pb-4">Payment Methods</div>
                    <?= renderImg('payments.png', 'lib') ?>
                </div>
                <div class="col-md-6 col-xl-2 d-none d-md-block">
                    <div class="fs-24 fw-700 text-white pb-4">License No.</div>
                    <ul class="quick-links">
                        <li>300000A</li>
                        <li>ABN 1234567890</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center gy-4">
                <div class="col-auto">
                    <div class="row gx-2 gx-md-3 justify-content-center">
                        <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                        <div class="col-auto">|</div>
                        <div class="col-auto text-center"><?= $site ?></div>
                        <div class="col-auto">|</div>
                        <div class="col-auto text-center">All Rights Reserved</div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="row align-items-center">
                        <div class="col-auto text-center d-none d-lg-block">Terms & Conditions</div>
                        <div class="col-auto  d-none d-lg-block">|</div>
                        <div class="col-auto  d-none d-lg-block text-center">Privacy Policies</div>
                        <div class="col-auto">
                            <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                                <?= renderImg("aiims.png", "logo") ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>