
<!DOCTYPE html>
<html lang="en">
<head>
<!--Meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--End of Meta tags-->
    <title>WeHost</title>

<!--Css links-->
    <link href="css\HomePage.css" rel="stylesheet" type="text/css">
    <link href="css\Footer.css" rel="stylesheet">
    <link href="css/Navigation.css" rel="stylesheet">
    <link href="css/Responsive.css" rel="stylesheet">
    <link href="css/Contact.css">
<!--End of css links-->
</head>
<body>

<header id="header">
    <!--  Brand Logo  -->
    <a class="nav-brand" href="" target="_blank">
        <img class="LogoImg" src="img/logo.png">
    </a>

    <!--  Toggle Menu for Mobile  -->

    <input type="checkbox" id="toggle-menu" role="button">
    <label for="toggle-menu" class="toggle-menu">Menu</label>

    <!--  Menus  -->
    <nav id="nav-bar" class="navbar">
        <ul class="menu">
            <li><a class="nav-link" href="#featured">About</a></li>
            <li><a class="nav-link" href="#our-services">Services</a></li>
            <li><a class="nav-link" href="#ContactPage">Pricing</a></li>
            <li><a class="nav-link" href="contact.php">Contact</a></li>
            <a class="login" data-visible href="Weblogin.php">Login</a>
            <a class="cta" data-visible href="../admin/Signup.php">Sign up</a>
        </ul>
    </nav>
</header>


<!-- Hero Section -->
<div id="imgHERO" class="hero">
    <div class="hero-text">
        <h1>Website Hosting With Purpose</h1>
        <p class="hero-subtext">
            We make sure your website is fast, secure & always up -<br>
            so your visitors & search engines trust you. Guaranteed.
        </p>
        <a href="#" id="ChangeImg" class="btn">Explore</a>
    </div>
</div>

<!--End of the Hero section-->

<!-- About Section -->
<section id="featured">
    <div class="wrapper">
        <div class="image">
            <img src="img/undraw_develop_app_kvt2.svg" alt="App-Development">
        </div>
        <div class="text">
            <div class="heading">
                <h1>ABOUT US</h1>
            </div>
            <p>The WeHost helps the customer to hire best Website hosting in best price. its's approx 72+ countries spread across the world. We have many years of experience,extensive conference facilities. We've prefered the art of reviving old,worn down properties,and injecting them with new SKYstyle.</p>
            <a href="#" class=btn>Details</a>
        </div>
    </div>
</section>

<!--End of the About section-->

<!--Starting Services section-->
<section id="our-services">
    <div class="container">
        <div class="desc">
            <div class="heading">
                <h1>Our Services</h1>
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, velit a bibendum vulputate, metus enim pretium massa, eu placerat lacus leo vitae velit. Donec rutrum est sed lacus scelerisque scelerisque a ac magna. Suspendisse. </p>
            </div>
        </div>
        <div class="services">

            <div class="column" id="column-1">
                <div id="open-modal" class="service">
                    <div class="service-desc">
                        <i class="service-icon fas fa-flask">

                        </i>
                        <p class="service-txt">
                            <a >Business Intelligence</a>
                        </p>
                    </div>
                </div>
                <div id="open-modal1" class="service">
                    <div class="service-desc">
                        <p class="service-txt">
                            <a >Digital Marketing</a>
                        </p>
                    </div>
                </div>
                <div  id="open-modal2" class="service">
                    <div class="service-desc">

                        <p class="service-txt">
                            <a >Product Development</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="column" id="column-2">
                <div  id="open-modal3" class="service">
                    <div class="service-desc">
                        <p class="service-txt">
                            <a >Web Development</a>
                        </p>
                    </div>
                </div>
                <div id="open-modal4" class="service">
                    <div class="service-desc">
                        <p class="service-txt">
                            <a >WordPress Support</a>
                        </p>
                    </div>
                </div>
                <div id="open-modal5" class="service">
                    <div  class="service-desc">
                        <p class="service-txt">
                           <a>SEO Management</a>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="clear-fix"></div>
    </div>
</section>


<!--End of the services page section-->


<!--Modal open and closed when clicked.-->

    <div id="modal" class="modal">
        <div class="modal-inner content">
        <h2>Business Intellingence</h2>
        <p class="Modal-text">Business intelligence (BI) leverages software and services to transform data into actionable insights that inform an organization’s strategic and tactical business decisions. BI tools access and analyze data sets and present analytical findings in reports, summaries, dashboards, graphs, charts and maps to provide users with detailed intelligence about the state of the business.</p>
        <img id="img1">
        <a href="#" id="close-modal" class="btn center">Learn more</a>
            <a href="#" id="" class="btn1 center">Buy now</a>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div id="modal1-inner" class="modal-inner content">
            <h2>Digital Marketing</h2>
            <p id="modal1-text"></p>
            <a href="#" id="close-modal1" class="btn center">Learn more</a>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div id="modal-inner" class="modal-inner content">
            <h2 id="Heading">Product Development</h2>
            <p id="Modal2-text"></p>
            <a href="#" id="close-modal2" class="btn center">Learn more</a>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div id="moda3-inner" class="modal-inner content">
            <h2 id="Heading1">Web Development</h2>
            <p id="Modal3-text"></p>
            <a href="#" id="close-modal3" class="btn center">Learn more</a>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div id="modal4-inner" class="modal-inner content">
            <h2 id="Heading2">Wordpress Support</h2>
            <p id="Modal4-text"></p>
            <a href="#" id="close-modal4" class="btn center">Learn more</a>
        </div>
    </div>

    <div id="modal5" class="modal">
        <div id="modal5-inner" class="modal-inner content">
            <h2 id="Heading3">SEO Management</h2>
            <p id="Modal5-text"></p>
            <a href="#" id="close-modal5" class="btn center">Learn more</a>
        </div>
    </div>

<!--End of the modals-->

<!--Modal Functionality with usage of DOM-->
<script>

    /*MODAL 1 Business Intelligence*/
    const openModal = document.getElementById('open-modal');
    const closeModal = document.getElementById('close-modal');

    openModal.addEventListener('click',() => {
        document.getElementById('modal').style.display = 'block';
        

    });

    closeModal.addEventListener('click',() => {
        document.getElementById('modal').style.display ='none'
    });

    /*End of the Modal 1*/


    /*Functionality for Modal 2*/
    const openModal1 = document.getElementById('open-modal1');
    const closeModal1 = document.getElementById('close-modal1');


    openModal1.addEventListener('click',()=> {
        document.getElementById('modal1').style.display = 'block';
        document.getElementById('modal1-text').innerHTML = "Digital marketing encompasses all marketing efforts that use an electronic device or the internet. Businesses leverage digital channels such as search engines, social media, email, and other websites to connect with current and prospective customers."
        document.getElementById('modal1-text').style.paddingLeft = '40px';
        document.getElementById('modal1-text').style.paddingTop = '50px';
        document.getElementById('modal1-text').style.paddingBottom = '60px';
        document.getElementById('close-modal1').style.marginLeft = '40px';
        document.getElementById('modal1-inner').style.backgroundColor = 'lightgreen';
    });

    closeModal1.addEventListener('click',() =>{
       document.getElementById('modal1') .style.display = 'none';

    });

    /*End of the Modal 2*/


    /*Start of the Modal 3*/

    const openModal2 = document.getElementById('open-modal2');
    const closeModal2 = document.getElementById('close-modal2');

    openModal2.addEventListener('click',()=> {
        document.getElementById('modal2').style.display = 'block';
        document.getElementById('Modal2-text').innerHTML = "Product development helps in aligning the company's business strategies with its products, as it involves methods and practices that help reduce risks and uncertainties associated with products being envisioned. " +
            "The Digital Group’s Software Product Development team believes in providing high-quality product development services. " +
            "We follow a highly collaborative approach to develop software products.";
        document.getElementById('Modal2-text').style.paddingLeft = '40px';
        document.getElementById('Modal2-text').style.paddingTop = '50px';
        document.getElementById('Modal2-text').style.paddingBottom = '60px';
        document.getElementById('close-modal2').style.marginLeft = '40px';
        document.getElementById('modal-inner').style.backgroundColor = 'lightblue';
        document.getElementById('Heading').style.color = 'black';
    });

    closeModal2.addEventListener('click',() =>{
        document.getElementById('modal2') .style.display = 'none'
    });

    /*End of the Modal 3*/

    /*Change the image when user click on Explore button in header section */
    const imgChanging = document.getElementById('ChangeImg');
    imgChanging.addEventListener('click',()=>{
        document.getElementById('imgHERO').style.backgroundImage = "url('leone-venter-VieM9BdZKFo-unsplash.jpg')";
    });

    /*End of the Code*/


    /*Start of the Modal 4*/
    const openModal3 = document.getElementById('open-modal3');
    const closeModal3 = document.getElementById('close-modal3');

    openModal3.addEventListener('click',()=> {
        document.getElementById('modal3').style.display = 'block';
        document.getElementById('Modal3-text').innerHTML = "Web development is the coding or programming that enables website functionality, per the owner's requirements. It mainly deals with the non-design aspect of building websites, which includes coding and writing markup.";
        document.getElementById('Modal3-text').style.paddingLeft = '40px';
        document.getElementById('Modal3-text').style.paddingTop = '50px';
        document.getElementById('Modal3-text').style.paddingBottom = '60px';
        document.getElementById('close-modal3').style.marginLeft = '40px';
        document.getElementById('modal3-inner').style.backgroundColor = 'lightgreen';
    });

    closeModal3.addEventListener('click',() =>{
        document.getElementById('modal3') .style.display = 'none';

    });

    /*End of the Modal 4*/

    /*Start of the Modal 5*/
    const openModal4 = document.getElementById('open-modal4');
    const closeModal4 = document.getElementById('close-modal4');

    openModal4.addEventListener('click',()=> {
        document.getElementById('modal4').style.display = 'block';
        document.getElementById('Modal4-text').innerHTML = "Hosting specially optimized for WordPress powered websites. The server architecture, databases have been developed to enhance the performance of your website.";
        document.getElementById('Modal4-text').style.paddingLeft = '40px';
        document.getElementById('Modal4-text').style.paddingTop = '50px';
        document.getElementById('Modal4-text').style.paddingBottom = '60px';
        document.getElementById('close-modal4').style.marginLeft = '40px';
        document.getElementById('modal4-inner').style.backgroundColor = '';
    });

    closeModal4.addEventListener('click',() =>{
        document.getElementById('modal4') .style.display = 'none';

    });

    /*End of the Modal 5*/

    /*Start of the Modal 6*/
    const openModal5 = document.getElementById('open-modal5');
    const closeModal5 = document.getElementById('close-modal5');

    openModal5.addEventListener('click',()=> {
        document.getElementById('modal5').style.display = 'block';
        document.getElementById('Modal5-text').innerHTML = "Search engine optimization is the process of optimizing web pages and their content to be easily discoverable by users searching for terms relevant to your website. The term SEO also describes the process of making web pages easier for search engine indexing software, to find, scan, and index your site.";
        document.getElementById('Modal5-text').style.paddingLeft = '40px';
        document.getElementById('Modal5-text').style.paddingTop = '50px';
        document.getElementById('Modal5-text').style.paddingBottom = '60px';
        document.getElementById('close-modal5').style.marginLeft = '40px';
        document.getElementById('modal5-inner').style.backgroundColor = '';
    });

    closeModal5.addEventListener('click',() =>{
        document.getElementById('modal5') .style.display = 'none';

    });
    /*End of the Modal 6*/

</script>

<!--End of the DOM-->
<section class="section-2">
    <div class="container">
        <h2>OUR PRICING</h2>
        <div class="full-table table">
            <div class="tr">
                <div class="td"></div>
                <div class="td price">
                    <h3>$2300<sub>/MONTH</sub></h3>
                    <p>Reguler</p>
                </div>
                <div class="td price">
                    <h3>$6000<sub>/MONTH</sub></h3>
                    <p>Team</p>
                </div>
                <div class="td price">
                    <h3>$9000<sub>/MONTH</sub></h3>
                    
                    <p>Enterprise</p>
                </div>
            </div>
            <div class="tr">
                <div class="td feature">Full Acess Library</div>
                <div class="td cross"></div>
                <div class="td cross"></div>
                <div class="td correct"></div>
            </div>
            <div class="tr">
                <div class="td feature">Multiple User</div>
                <div class="td cross"></div>
                <div class="td correct"></div>
                <div class="td correct"></div>
            </div>
            <div class="tr">
                <div class="td feature">Multiple Order</div>
                <div class="td cross"></div>
                <div class="td correct"></div>
                <div class="td correct"></div>
            </div>
            <div class="tr">
                <div class="td feature">24/7 Support</div>
                <div class="td correct"></div>
                <div class="td correct"></div>
                <div class="td correct"></div>
            </div>
            <div class="tr">
                <div class="td"></div>
                <div class="td action">
                    <a class="button active" href="Cart.php">Choose Plan</a>
                    <p>Get your 30 day free trial</p>
                </div>
                <div class="td action">
                    <a class="button" href="#">Choose Plan</a>
                    <p>Get your 30 day free trial</p>
                </div>
                <div class="td action">
                    <a class="button" href="Cart.php">Choose Plan</a>
                    <p>Get your 30 day free trial</p>
                </div>
            </div>
        </div>
        <div class="resp-table table">
            <div class="tr">
                <div class="td price">
                    <h3>$2300<sub>/MO</sub></h3>
                    <h4>Romio &amp; Juliet</h4>
                    <p>Reguler</p>
                </div>
                <div class="td action">
                    <a class="button active" href="Cart.php">Choose Plan</a>
                    <p>Get your 30 day free trial</p>
                </div>
            </div>
            <div class="tr">
                <div class="td feature cross">Full Acess Library</div>
                <div class="td feature cross">Multiple User</div>
            </div>
            <div class="tr">
                <div class="td feature cross">Multiple Order</div>
                <div class="td feature correct">24/7 Support</div>
            </div>
            <div class="tr">
                <div class="td price">
                    <h3>$2300<sub>/MO</sub></h3>
                    <h4>Romio &amp; Juliet</h4>
                    <p>Reguler</p>
                </div>
                <div class="td action">
                    <a class="button active" href="Cart.php">Choose Plan</a>
                    <p>Get your 30 day free trial</p>
                </div>
            </div>
            <div class="tr">
                <div class="td feature cross">Full Acess Library</div>
                <div class="td feature correct">Multiple User</div>
            </div>
            <div class="tr">
                <div class="td feature correct">Multiple Order</div>
                <div class="td feature correct">24/7 Support</div>
            </div>
            <div class="tr">
                <div class="td price">
                    <h3>$2300<sub>/MO</sub></h3>
                    <h4>Romio &amp; Juliet</h4>
                    <p>Reguler</p>
                </div>
                <div class="td action">
                    <a class="button active" href="Cart.php">Choose Plan</a>
                    <p>Get your 30 day free trial</p>
                </div>
            </div>
            <div class="tr">
                <div class="td feature correct">Full Acess Library</div>
                <div class="td feature correct">Multiple User</div>
            </div>
            <div class="tr">
                <div class="td feature correct">Multiple Order</div>
                <div class="td feature correct">24/7 Support</div>
            </div>
        </div>
    </div>
</section>

</body>

