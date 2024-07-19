<?php


include_once("./components/header.php");
include_once("./lib/db.php");
$summary = $db->select("summary", "*");
$education = $db->select("education", "*");
$exp = $db->select("experience", "*");

?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>Michael Phandera </h1>
        <p>I'm <span class="typed" data-typed-items="Software Engineer, Data Visualization specialist, Database Management Specialist, Machine Learning Enthusiast"></span></p>
        <div class="social-links">
            <a href="https://www.linkedin.com/in/michaelphandera/" class="linkedin text-success"><i class="bx bxl-linkedin"></i></a>
            <a href="https://www.facebook.com/phanderatechnologies" class="facebook text-success"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/michaelphandera/" class="instagram text-success"><i class="bx bxl-instagram"></i></a>
            <a href="https://twitter.com/michaelphandera" class="twitter text-success"><i class="bx bxl-twitter"></i></a>
        </div>
        <div class="float-md-end"><button id="cv" onclick='downloadURI(window.location.href+"/assets/CV - michael phandera.pdf", "CV - michael phandera")' style="background:#e88a25" class="btn btn btn-lg text-white btn-md mt-3"> CV<i class="bx bxs-download"></i></button></div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
            </div>

            <div class="row container">
                <div class="col-lg-4">
                    <img src="assets/img/profile-img.png" style="width:100%" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3>Software Engineer.</h3>
                    <p>
                        I am currently working with UNDP as Software Developer – Visuals & Infographics where I am responsible for software development and all data visualizations (Building web Dashboards, charts, maps and infographics) happening under DRM4R project (UNDP IM
                        Unit) which focuses on disaster management.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a href="https://www.michael.phandera.com">michael.phandera.com</a></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+265884441373</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Lilongwe, Malawi</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Education:</strong> <span>BSc ICT, MSc MIS student</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>michaelphandera@gmail.com </span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Facts</h2>
                <p>Enthusiastic, team player, sociable, sober, willing to learn new things, hardworking, honest, self motivated, goal oriented, creative .</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-clock-history"></i>
                        <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Experience (Years)</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-code-slash"></i>
                        <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Certifications</span></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-trophy"></i>
                        <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Awards</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Facts Section -->

        <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
           <div  class="skills section-bg">
            <div class="section-title">
                <h2>Skills</h2>
                <p>CORE SKILLS</p>
                <div class="row skills-content">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">Software
                            Engineering <i class="val"></i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill"> Data Visualization <i class="val"></i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    
                  <div class="progress">
                        <span class="skill">Integration<i class="val"></i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                   

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill"> Database Development <i class="val"></i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                     <div class="progress">
                        <span class="skill">Map Development<i class="val"></i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Machine Learning <i class="val"></i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-orange">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <i class="bx bxl-dribbble"></i>
                        </div>
                        <h4><a href="">WEB DEVELOPMENT</a></h4>
                        <p>JavaScript, VueJs, JQuery,AJAX, Quasar, Bootstrap, Express, LoopBack, ASP.NET, PHP, HTML5, etc</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="bx bx-bar-chart-alt-2"></i>
                        </div>
                        <h4><a href="">DATA VISUALIZATION</a></h4>
                        <p>D3.js, DC.js, Highchartjs, Chartjs, leafletjs, Crossfilterjs, Metabase, MS Power BI, Bing Maps, Google Maps, DataMaps</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="bx bx-desktop"></i>
                        </div>
                        <h4><a href="">DESKTOP APP DEVELOPMENT</a></h4>
                        <p>C# (Win Forms, EF, LinQ, DotNET), Electron, Quasar, Vue</p>
                    </div>
                </div>

               

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-orange">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <i class="bx bx-mobile"></i>
                        </div>
                        <h4><a href="">MOBILE APP DEVELOPMENT</a></h4>
                        <p>Cordova, Capacitor, Vue, Quasar</p>
                    </div>
                </div>

                

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slider-alt"></i>
                        </div>
                        <h4><a href="">WEB API DEVELOPMENT</a></h4>
                        <p>WCF, ASP.NET Web Api, REST api, GraphQL, SOAP</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-orange">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="bx bx-arch"></i>
                        </div>
                        <h4><a href="">DATABASE DEVELOPMENT</a></h4>
                        <p> Ms SQL, MySQL, MongoDB, PostgreSQL, MS Access, Mongo Atlas</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-orange">
                       
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-orange">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="bx bx-restaurant"></i>
                        </div>
                        <h4><a href="">Tools</a></h4>
                        <p>Git, Cpanel, Postman, SoapUi, Visual Studio IDE, Visual Studio Code, NodeJS, Docker, Insomnia, IIS, MS SQL Server Management Studio, SQL Server, Mongo DB Campus, Google Maps, Bing Maps, MVC, RabbitMQ, Crystal reports,Anaconda, Heroku, Godady, Bluehost, Mongo atlas, DigitaOcean, Namecheap.com, Domain.com </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-orange">
                        
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->


        <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>For the full updated resume check my <a href="http://www.linkedin.com/in/michael phandera">linkedin</a> </p>
         </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Michael Phandera</h4>
              <p class="text-justify">I am a Professional Software Engineer with BSc in ICT and 6+ years of experience in the Software
                    Engineering, Data Visualization, Database Management & Machine Learning. I have worked in a
                    number of Software projects for example: recently was involved in developing of the Education
                    Management Information System prototype for MoEST, development of Malawi Disaster Management
                    Information System has a section which collects and analyses data on education sector, Malawi
                    Humanitarian Response System (5Ws) , integration of e-wallet providers systems (Airtel Money,
                    Mpamba, MO626) to service providers systems (Water board, Escom), development of Agrijobs Malawi
                    , Integration of Lilongwe Waterboard website to their prepaid subsystem , contributed to
                    development of CorparateSMS system, to mention a few. I am currently working with UNDP as Software
                    Developer – Visuals & Infographics where I am responsible for software development and all data
                    visualizations (Building web Dashboards, charts, maps and infographics) happening under DRM4R
                    project (UNDP IM Unit) which focuses on disaster management.
                </p>
              <ul>
                <li>Lilongwe,Malawi</li>
                <li>(265) 991 200 667</li>
                <li>michael.phandera@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>MS<span class="text-lowercase">c in</span>  Management Information Systems [<b class="text-success">Student</b>]</h4>
              <h5>2021 - 2023</h5>
              <p><em>Malawi Institute of Management, Lilongwe, Malawi</em></p>
            </div>
            <div class="resume-item">
              <h4>BS<span class="text-lowercase">c in</span>   Information  &amp; Communication Technology</h4>
              <h5>2012 - 2016</h5>
              <p><em>Mzuzu University, Mzuzu, Malawi</em></p>
            </div>
            <div class="resume-item">
              <h4>Certifications</h4>
              <p>Look at my <a href="http://www.linkedin.com/in/michael phandera">linkedin</a> for the below certification details</p>
              <p><ul>
                <li>Microservices Foundations - LinkedIn</li>
                <li>Software Architecture Foundations - LinkedIn</li>
                <li>Learning Data Visualization - LinkedIn</li>
                <li>Data Visualization for Data Analysts - LinkedIn</li>
                <li>Serverless Architecture - LinkedIn</li>
                <li>Learning RabbitMQ - LinkedIn</li>
                <li>Design Your First Infographic - LinkedIn</li>
                <li>Software Architecture: Domain-Driven Design - LinkedIn</li>
         
                <li>Advanced Design Patterns: Design Principles - LinkedIn</li>
                <li>Docker for Developers - LinkedIn</li>
                <li>Learning Vuex - LinkedIn</li>
                <li>Vanilla JavaScript: Client-Side Data Storage - LinkedIn</li>
                <li>Interaction Design: Interface - LinkedIn</li>
                <li>Enterprise Architecture Foundations - LinkedIn</li>
                <li>Crossfilter for Data Science Essential Training - LinkedIn</li>
                <li>DC.js for Data Science Essential Training - LinkedIn</li>
                <li>Blockchain Basics - LinkedIn</li>
                <li>Blockchain: Learning Solidity - LinkedIn</li>
                <li>Cryptocurrency Foundations - LinkedIn</li>
                <li>TypeScript: Object-Oriented Programming - LinkedIn</li>
                <li>Color Trends - LinkedIn</li>
                <li>Color for Design and Art - LinkedIn</li>
                <li>SSL Certificates for Web Developers - LinkedIn</li>
                <li>Laravel 5 Essential Training - LinkedIn</li>
                <li>Building RESTful APIs in Laravel - LinkedIn</li>
                <li>Interaction Design: Structure - LinkedIn</li>
              
                <li>Designing RESTful APIs - LinkedIn</li>
                <li>Node.js: Security - LinkedIn</li>
                <li>AI Accountability Essential Training - LinkedIn</li>
                <li>Artificial Intelligence Foundations: Neural Networks - LinkedIn</li>
                <li>Cognitive Technologies: The Real Opportunities for Business - LinkedIn</li>
                <li>Artificial Intelligence Foundations: Thinking Machines - LinkedIn</li>
                <li>Artificial Intelligence Foundations: Machine Learning - LinkedIn</li>
                <li>AI The LinkedIn Way: A Conversation with Deepak Agarwal - LinkedIn</li>
                <li>Artificial Intelligence for Project Managers - LinkedIn</li>
                <li>Learning XAI: Explainable Artificial Intelligence - LinkedIn</li>
                <li>Artificial Intelligence for Cybersecurity - LinkedIn</li>
                <li>Master the Fundamentals of AI and Machine Learning - LinkedIn</li>
                <li>Building Deep Learning Applications with Keras 2.0 - LinkedIn</li>
                <li>Deep Learning: Face Recognition - LinkedIn</li>
                <li>Deep Learning: Image Recognition - LinkedIn</li>
                <li>Building and Deploying Deep Learning Applications with TensorFlow - LinkedIn</li>
                <li>Learning TensorFlow with JavaScript - LinkedIn</li>
                <li>Neural Networks and Convolutional Neural Networks Essential Training -LinkedIn</li>
          
                <li>Accelerating TensorFlow with the Google Machine Learning Engine - LinkedIn</li>
                <li>Introduction to AWS DeepLens - LinkedIn</li>
                <li>NLP with Python for Machine Learning Essential Training - LinkedIn</li>
                <li>Advance Your Skills in Deep Learning and Neural Networks - LinkedIn</li>
                <li>Introduction to Deep Learning with OpenCV - LinkedIn</li>
                <li>Software Architecture: Patterns for Developers - LinkedIn</li>
                <li>Machine Learning and AI Foundations: Decision Trees - LinkedIn</li>
                <li>Deploying Scalable Machine Learning for Data Science - LinkedIn</li>
            </ul></p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Software Developer – Infographics and Visuals</h4>
              <h5>2019 - Present</h5>
              <p><em>UNDP Malawi, Lilongwe </em></p>
                <ul><li><h5>Software Engineering under DRM Project</h5></li>
                    <ul>
                        <li>1. Developing Dashboards 
                            (Power bi , Metabase, dc.js, d3js, Highchartjs & Chart js, leafletjs, etc.)
                        </li>
                        
                        <li>2. Application integrations</li>
                        <li>3. Designing Databases</li>
                        <li>4. Software development</li>
                        <li>5. Software Documentation</li>
                        <li>6. User support</li>
                        <li>
                            <b>5Ws Team Lead (Dec 2020 - Present)</b>
                             <ul>
                              <li>
                                Leading a Team of Five members, comprising three Developers, Information management
                                officer and GIS officer, with an objective of improving and maintaining Malawi
                                Humanitarian 5Ws Information system.
                             </li>
                            </ul>
                        </li>

                         <li>
                            <b>Acting as IM unit systems District Coordinator (April 2020 – Feb 2021)</b>
                             <ul>
                              <li>
                                Coordinating DRMIS system trainings and system technical issues raised by Interns, Disaster
                                officers and Prosper coordinators in the DRM4R districts before DoDMA IM unit was
                                recruited.
                             </li>
                            </ul>
                        </li>
                        <li>
                            <b>National Zone Warden (Aug 2020 - Present)</b>
                             <ul>
                              <li>
                                Coordinating UNDP Malawi staff Security affairs at Zone level
                             </li>
                            </ul>
                        </li>
                    </ul>
               <ul>
            </div>
            <div class="resume-item">
              <h4>Software Developer and Database Engineer[<span class="text-success">IC</span>]</h4>
              <h5>2018 - 2019</h5>
              <p><em>UNDP Malawi, Lilongwe </em></p>
                <ul>
                    <li>Contributed to design and development of Disaster Management Information System (DMIS).</li>
                    <li>2. Designed DMIS Database.</li>
                    <li>3. Developed infographics (Charts, Tables, Maps, Tiles, etc.) for DMIS using Microsoft Power BI</li>
                    <li>4. Developed documentation for DMIS</li>
                    <li>5. Trained DMIS users</li>
                    <li>6. Supported DMIS</li>
                    </ul>
               <ul>
            </div>
            <div class="resume-item">
              <h4>Software Engineer</h4>
              <h5>2017 - 2018</h5>
              <p><em>NITEL, Malawi, Lilongwe</em></p>
              <ul>
                <li>1. Making sure that NITEL Payment Gateway (Malpay) system is always up.</li>
                <li>2. Maintaining Malpay.</li>
                <li>3. Integrating Merchants to Service providers using Malpay (e.g. Airtel Money to Azam Tv or water board or InCMS).</li>
                <li>4. Designing, Implementing and deploying Apps on Malpay platform.</li>
                <li>5. Making sure that Merchants are able to vend to any service on Malpay.</li>
                <li>6. Designing, developing and maintaining Payment solutions for NITEL.</li>
                <li>7. Making sure that NITEL SMS gateway system is working perfectly.</li>
                <li>8. Designing, developing, testing, maintaining and documenting any other Software as demanded by management.</li>
              </ul>
            </div>
             <div class="resume-item">
              <h4>Systems analyst as well as System developer</h4>
              <h5>2015,2016 – 2017,</h5>
              <p><em>C-Tech Systems, Malawi, Lilongwe</em></p>
             <ul>
              <li><h5>Designing or developing or maintaining any other Software as demanded by management.</h5></li>
              <ul>
                <li>a. Developed HR and Payroll Management System.</li>
                <li>b. Developed Point of Sale System.</li>
              </ul>
              </li>
           </ul>
            </div>
            <div class="resume-item">
              <h4>Associate Lecturer [<span class="text-success">Adjunct</span>]</h4>
              <h5>2017</h5>
              <p><em>Mzuzu Univerisity, Malawi, Mzuzu</em></p>
             <ul>
                <li>I was teaching Computer Fundamentals and Introduction to Computer Technologies Courses for in level 1 and 2.</li>
              </li>
           </ul>
            </div>
            <div class="resume-item">
              <h4>Software developer [<span class="text-success">Internship</span>]</h4>
              <h5>2016</h5>
              <p><em>Luke International, Malawi, Mzuzu</em></p>
             <ul>
              <li><h5>Designing or developing or maintaining any other Software as demanded by management.</h5></li>
              <ul>
                <li>a. Developed HR and Payroll Management System.</li>
                <li>b. Developed Point of Sale System.</li>
              </ul>
              </li>
           </ul>
            </div>
             <div class="resume-item">
              <h4>Bank Clerk [<span class="text-success">Vacational Employment</span>]</h4>
              <h5>2014</h5>
              <p><em>National Bank of Malawi, Mzuzu</em></p>
             <ul>
                <li>Updating customer accounts by taking biometrics samples using computerized biometric equipment</li>
           </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p></p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Desktop App</li>
                        <li data-filter=".filter-card">Mobile Apps</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/hr3.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/hr2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/13.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/13.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-link"></i></a>
                           </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/16.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/16.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-link"></i></a>
                           </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/15.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/15.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-link"></i></a>
                           </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/18.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/18.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                
                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/14.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-link"></i></a>
                           </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-link"></i></a>
                              </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/11.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-link"></i></a>
                           </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/17.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/17.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-link"></i></a>
                           </div>
                        </div>
                    </div>
                </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-link"></i></a>
                              </div>
                        </div>
                    </div>
                </div>

                
                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/12.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-link"></i></a>
                           </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-link"></i></a>
                             </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Area 25, Lilongwe, Malawi</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>michaelphandera@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+265 884 441 373</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form role="form" id="contact-form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Michael Phandera</h3>
        <div class="social-links">
            <a href="https://www.linkedin.com/in/michaelphandera/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <a href="https://www.facebook.com/phanderatechnologies" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/michaelphandera/" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://twitter.com/michaelphandera" class="twitter"><i class="bx bxl-twitter"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>PhanderaTechnologies</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="./assets/vendor/aos/aos.js"></script>
<script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./assets/vendor/jquery-3.6.0.min.js"></script>
<script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="./assets/vendor/purecounter/purecounter.js"></script>
<script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="./assets/vendor/typed.js/typed.min.js"></script>
<script src="./assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="./assets/vendor/sweetalert.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script> 
(function() {
      $("#contact-form").submit(function(e) {
        var formData = new FormData($(this)[0]);
        $.ajax({
          url: "post_contact.php",
          type: "POST",
          data: formData,
          success: function(res) {
            var res = JSON.parse(res);
            if (res.error) {
              swal('Sent ', res.msg, 'success');;
              //window.location.replace("signin.php");
            } else {
              swal('Failed', res.msg, 'info');;
            }
          },
          cache: false,
          contentType: false,
          processData: false
        });

        e.preventDefault();
      });
    })();

function downloadURI(uri, name) {
  var link = document.createElement("a");
  link.download = name;
  link.href = uri;
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
  delete link;
}
</script>

</body>

</html>