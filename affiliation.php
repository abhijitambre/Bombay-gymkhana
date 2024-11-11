<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/cappa/demo1/restaurant.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 10:35:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Bombay Gymkhana</title>
    <?php include 'header-link.php' ?>
    <style>
        .hide {
            display: none;
        }

        .search-wrapper {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 30px 17px;
        }

        .search-wrapper label {
            color: #fff;
            font-size: 24px;
        }

        .affiliation-section .owl-carousel .owl-stage {
            margin: auto;
        }

        .d-none {
            display: none;
        }

        #empty-phone2 {
            display: none;
        }

        .pricing-cardint .desc {
            max-height: 310px !important;
            height: 310px !important;
        }

        .pricing-cardint .name {
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Navbar -->
    <?php include 'menu.php' ?>
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="/img/club.jpg" style="background-image: url('img/club.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h1>Club Affiliation</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Restaurant Menu -->
    <section id="menu" class="restaurant-menu restaurant-menu3 affiliation-section  menu section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="tabs-icon col-md-10 offset-md-1 text-center">
                            <div class="owl-carousel owl-theme">
                                <div id="tab-1" class="active item">
                                    <h6>National Affiliation</h6>
                                </div>
                                <div id="tab-2" class="item">
                                    <h6>International Affiliation</h6>
                                </div>
                                <div id="tab-3" class="item">
                                    <h6>International Associate Clubs (IAC)</h6>
                                </div>
                            </div>
                        </div>
                        <div class="restaurant-menu-content col-md-12">
                            <!-- Starters -->
                            <div id="tab-1-content" class="cont active">
                                <div class="row">
                                    <div class="search-wrapper">
                                        <label for="search">National Affiliations</label>
                                        <div class="">
                                            <input type="search" id="search" class="form-control input" placeholder="Search Affiliation" data-search>
                                        </div>
                                    </div>
                                </div>
                                <div class="row cstm-price" data-user-card-container>
                                    <template data-user-template>
                                        <div class="pricing-cardint pricingcardint col-md-4 sm-img-blk">
                                            <div class="desc">
                                                <div class="name" data-name></div>
                                                <div class="amount"><span data-desc> </span></div>
                                                <ul class="list-unstyled list affiliation-list">
                                                    <li class="tel" id="empty-phone"><img src="/images/white-icons/Call_1.png" class="affiliation-icons"><a id="phonelink"><span data-phone1></span></a></li>
                                                    <li class="tel" id="empty-phone2"><img src="/images/white-icons/Call_1.png" class="affiliation-icons"><a id="phonelink1"><span data-phone2></span></a></li>
                                                    <li class="tel" id="empty-phone3"><img src="/images/white-icons/Call_1.png" class="affiliation-icons"><a id="phonelink2"><span data-phone3></span></a></li>
                                                    <li id="empty-email"><img src="/images/white-icons/Email_1.png" class="affiliation-icons"><a id="emaillink"><span data-email></span></a></li>
                                                    <li id="empty-website"><img src="/images/white-icons/internet.png" class="affiliation-icons"><a id="websitelink" target="_blank"><span data-website></span></a></li>
                                                </ul>
                                                <div class="d-none"><span data-keywords></span></div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            <!-- Mains -->
                            <div id="tab-2-content" class="cont">
                                <div class="row">
                                    <div class="search-wrapper">
                                        <label for="search">International Affiliations</label>
                                        <div class="">
                                            <input type="search" id="search" class="form-control input" placeholder="Search Affiliation" data-search1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row cstm-price" data-user-card-container1>
                                    <template data-user-template1>
                                        <div class="pricing-cardint pricingcardint1 col-md-4 sm-img-blk">
                                            <div class="desc">
                                                <div class="name" data1-name1></div>
                                                <div class="amount"><span data1-desc1></span></div>
                                                <ul class="list-unstyled list affiliation-list">
                                                    <li id="empty-phone1"><img src="/images/white-icons/Call_1.png" class="affiliation-icons"><a id="phonelink1"><span data1-phone2></span></a></li>
                                                    <li id="empty-email1"><img src="/images/white-icons/Email_1.png" class="affiliation-icons"><a id="emaillink1"><span data1-email1></span></a></li>
                                                    <li id="empty-website1"><img src="/images/white-icons/internet.png" class="affiliation-icons"><a id="websitelink1" target="_blank"><span data1-website1></span></a></li>
                                                </ul>
                                                <div class="d-none"><span data1-keywords1></span></div>
                                            </div>
                                        </div>
                                    </template>
                                </div>

                            </div>
                            <div id="tab-3-content" class="cont">
                                <div class="row">
                                    <div class="search-wrapper">
                                        <label for="search">International Associate Clubs (IAC)</label>
                                    </div>
                                </div>
                                <div class="">
                                    <iframe src="https://iac-map.vercel.app" frameborder="0" width="100%" height="720"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="pwa-button" onclick="window.history.back()"><img src="images/yellow-icons/left-arrow.png" alt="" style="height: 36px;margin-top:10px;"></button>
    </section>
    <!-- Footer -->
    <?php include 'footer.php' ?>
    <?php include 'footer-link.php' ?>
    <script text="Javascript">
        const userCardContainer = document.querySelector("[data-user-card-container]")
        const userCardTemplate = document.querySelector("[data-user-template]")
        const searchInput = document.querySelector("[data-search]")
        let users = []

        searchInput.addEventListener("input", e => {
            const value = e.target.value.toLowerCase()

            users.forEach(user => {
                const isVisible = user.name && user.name.toLowerCase().includes(value)
                const isVisible1 = user.desc && user.desc.toLowerCase().includes(value)
                const isVisible2 = user.keywords && user.keywords.toLowerCase().includes(value)

                if (user.element) {
                    user.element.classList.toggle("hide", !(isVisible || isVisible1 || isVisible2))
                }
            })
        })

        fetch("/pdf/affiliations.json")
            .then(res => res.json())
            .then(data => {
                users = data.map(user => {
                    const pricingcardint = userCardTemplate.content.cloneNode(true).children[0]
                    const name = pricingcardint.querySelector("[data-name]")
                    const desc = pricingcardint.querySelector("[data-desc]")
                    const phone1 = pricingcardint.querySelector("[data-phone1]")
                    const phone4 = pricingcardint.querySelector("[data-phone4]")
                    const phone3 = pricingcardint.querySelector("[data-phone3]")
                    const email = pricingcardint.querySelector("[data-email]")
                    const keywords = pricingcardint.querySelector("[data-keywords]")
                    const website = pricingcardint.querySelector("[data-website]")

                    if (user.name) name.textContent = user.name
                    if (user.desc) desc.textContent = user.desc

                    if (user.phone1 == null) {
                        const emptyPhoneDiv = pricingcardint.querySelector("#empty-phone")
                        emptyPhoneDiv.classList.add("d-none")
                    } else {
                        phone1.textContent = user.phone1
                        var linkphone = "tel:" + user.phone1
                        pricingcardint.querySelector("#phonelink").setAttribute("href", linkphone)
                    }
                    if (user.phone4 == null) {
                        pricingcardint.querySelector("#empty-phone2").classList.add("d-none")
                    } else {
                        phone1.textContent = user.phone4
                        var linkphone1 = "tel:" + user.phone4
                        pricingcardint.querySelector("#phonelink1").setAttribute("href", linkphone1)
                    }
                    if (user.phone3 == null) {
                        pricingcardint.querySelector("#empty-phone3").classList.add("d-none")
                    } else {
                        phone3.textContent = user.phone3
                        var linkphone2 = "tel:" + user.phone3
                        pricingcardint.querySelector("#phonelink2").setAttribute("href", linkphone2)
                    }

                    if (user.email === "") {
                        const emptyEmailDiv = pricingcardint.querySelector("#empty-email")
                        emptyEmailDiv.classList.add("d-none")
                    } else {
                        email.textContent = user.email
                        var linkemail = "mailto:" + user.email
                        pricingcardint.querySelector("#emaillink").setAttribute("href", linkemail)
                    }

                    if (user.website === "") {
                        const emptywebsiteDiv = pricingcardint.querySelector("#empty-website")
                        emptywebsiteDiv.classList.add("d-none")
                        pricingcardint.querySelector("#empty-website").classList.add("d-none")
                    } else {
                        website.textContent = user.website
                        var linkwebsite = "https://" + user.website
                        pricingcardint.querySelector("#websitelink").setAttribute("href", linkwebsite)
                    }


                    if (user.keywords) keywords.textContent = user.keywords

                    const userObj = {
                        name: user.name,
                        desc: user.desc,
                        keywords: user.keywords,
                        element: pricingcardint
                    }

                    userCardContainer.append(pricingcardint)

                    return userObj
                })
            })
    </script>
    <script text="Javascript">
        const userCardContainer1 = document.querySelector("[data-user-card-container1]");
        const userCardTemplate1 = document.querySelector("[data-user-template1]");
        const searchInput1 = document.querySelector("[data-search1]");
        let users1 = [];

        searchInput1.addEventListener("input", e => {
            const value = e.target.value.toLowerCase();
            users1.forEach(user1 => {
                const isVisible = user1.name1.toLowerCase().includes(value) ||
                    user1.desc1.toLowerCase().includes(value) ||
                    user1.keywords1.toLowerCase().includes(value);
                user1.element.classList.toggle("hide", !isVisible);
            });
        });

        fetch("/pdf/affiliation-international.json")
            .then(res => res.json())
            .then(data1 => {
                users1 = data1.map(user1 => {
                    const pricingcardint1 = userCardTemplate1.content.cloneNode(true).children[0];
                    const name1 = pricingcardint1.querySelector("[data1-name1]");
                    const desc1 = pricingcardint1.querySelector("[data1-desc1]");
                    const phone2 = pricingcardint1.querySelector("[data1-phone2]");
                    const email1 = pricingcardint1.querySelector("[data1-email1]");
                    const keywords1 = pricingcardint1.querySelector("[data1-keywords1]");
                    const website1 = pricingcardint1.querySelector("[data1-website1]");

                    // Setting name
                    if (user1.name1) {
                        name1.textContent = user1.name1;
                    }

                    // Setting description
                    if (user1.desc1) {
                        desc1.textContent = user1.desc1;
                    }

                    // Setting phone number
                    if (user1.phone2 && user1.phone2.trim() !== "") {
                        phone2.textContent = user1.phone2;
                        const linkphone1 = "tel:" + user1.phone2.trim();
                        pricingcardint1.querySelector("#phonelink1").setAttribute("href", linkphone1);
                    } else {
                        const emptyPhoneDiv = pricingcardint1.querySelector("#empty-phone1");
                        emptyPhoneDiv.classList.add("d-none");
                    }

                    // Setting email
                    if (user1.email1 && user1.email1.trim() !== "") {
                        email1.textContent = user1.email1;
                        const linkemail1 = "mailto:" + user1.email1.trim();
                        pricingcardint1.querySelector("#emaillink1").setAttribute("href", linkemail1);
                    } else {
                        const emptyEmailDiv = pricingcardint1.querySelector("#empty-email1");
                        emptyEmailDiv.classList.add("d-none");
                    }

                    // Setting website
                    if (user1.website1 && user1.website1.trim() !== "") {
                        website1.textContent = user1.website1;
                        const linkwebsite1 = "https://" + user1.website1.trim();
                        pricingcardint1.querySelector("#websitelink1").setAttribute("href", linkwebsite1);
                    } else {
                        const emptyWebsiteDiv = pricingcardint1.querySelector("#empty-website1");
                        emptyWebsiteDiv.classList.add("d-none");
                    }

                    // Setting keywords
                    if (user1.keywords1) {
                        keywords1.textContent = user1.keywords1;
                    }

                    user1.element = pricingcardint1;
                    userCardContainer1.append(pricingcardint1);
                    return user1;
                });
            });
    </script>
</body>

</html>