<?php
require_once APPROOT . '/Views/Includes/head.php';
?>

<body class="home">


    <script src="https://kit.fontawesome.com/4393ca507d.js" crossorigin="anonymous"></script>
    <div class="wrapper">
        <div class="navbar">

            <ul>
                <li><a href="index.php" class="a_parent ">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fas fa-home" aria-hidden="true"></i>
                            </span>
                            <span class="text">Home</span>
                        </div>
                    </a></li>
                <li><a href="course.html" class="a_parent active">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fa-solid fa-book" aria-hidden="true"></i>
                            </span>
                            <span class="text">Course</span>
                        </div>
                    </a>

                </li>
                <li><a href="#" class="a_parent">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fa-light fa-question" aria-hidden="true"></i>
                            </span>
                            <span class="text">Informatie</span>
                        </div>
                    </a>
                    <div class="dd_menu">
                        <ul>
                            <li>
                                <a href="about.php" class="dd_menu_a">
                                    <div class="wrap">
                                        <span class="icon">
                                            <i class="fas fa-running" aria-hidden="true"></i>
                                        </span>
                                        <span class="text">
                                            About
                                        </span>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <a href="contact.php" class="dd_menu_a">
                                    <div class="wrap">
                                        <span class="icon">
                                            <i class="fa-regular fa-address-card" aria-hidden="true"></i>
                                        </span>
                                        <span class="text">Contact</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="referantie.php" class="dd_menu_a">
                                    <div class="wrap">
                                        <span class="icon">
                                            <i class="fa-thin fa-question" aria-hidden="true"></i>
                                        </span>
                                        <span class="text">vragen</span>
                                    </div>
                                </a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </li>

                <li><a href="#" class="a_parent">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fa-solid fa-map" aria-hidden="true"></i>
                            </span>
                            <span class="text">plattegrond</span>
                        </div>
                    </a>
                    <div class="dd_menu">
                        <ul>
                            <li>
                                <a href="verdieping3.html" class="dd_menu_a">
                                    <div class="wrap">

                                        <span class="text">
                                            Verdieping 1
                                        </span>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <a href="verdieping4.html" class="dd_menu_a">
                                    <div class="wrap">

                                        <span class="text">verdieping 2</span>
                                    </div>
                                </a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="login.php" class="a_parent">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fas fa-cog" aria-hidden="true"></i>
                            </span>
                            <span class="text">Registreren</span>
                        </div>
                    </a></li>
            </ul>
        </div>
    </div>



    <body class="course">
        <div class="course-background">
            <h1>Choose ur course</h1>


            <div id="coursecontainer-box">
                <div class="coursecontainer mt-3">
                    <div class="courserow">

                        <!-- software dev -->
                        <div class="coursecolumn">
                            <div class="coursecard">
                                <img src="img/programming.png" alt="Avatar" style="width:100%">
                                <div class="coursecard-container">
                                    <h4><b>Software Developer</b></h4>
                                    <p class="coursecard-text"> Hou je van programmeren? Droom je ervan om mee te werken
                                        aan
                                        het bouwen van websites, apps of games en daar later je beroep van te maken? Dat
                                        kan!
                                        Meld je aan bij de opleiding Software developer bij MBO Utrecht.</p>
                                    <a href="softwaredev.html" class="btn btn-primary">meer info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- ict sup -->
                        <div class="coursecolumn">
                            <div class="coursecard">
                                <img src="img/support.jpg" alt="Avatar" style="width:100%">
                                <div class="coursecard-container">
                                    <h4><b>Medewerker ICT support</b></h4>
                                    <p class="coursecard-text"> Wil jij alles leren over netwerken, computers, elektra
                                        en
                                        domotica? Vind je het leuk om mensen te helpen bij het oplossen van hun
                                        ICT-problemen?
                                        Meld je dan aan voor de opleiding Medewerker ICT bij MBO Utrecht.</p>
                                    <a href="suppict.html" class="btn btn-primary">meer info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- expert it -->
                        <div class="coursecolumn">
                            <div class="coursecard">
                                <img src="img/expert.jpg" alt="Avatar" style="width:100%">
                                <div class="coursecard-container">
                                    <h4><b>Expert IT systems and devices</b></h4>
                                    <p class="coursecard-text"> Ben jij niet bang voor (complexe) computerproblemen en
                                        zie je
                                        het als een uitdaging om deze op te lossen? Houd je ervan om samen te werken en
                                        mensen
                                        verder te helpen als ze een ICT-vraag hebben? Dan is de opleiding Expert IT
                                        systems and
                                        devices misschien wel wat voor jou!</p>
                                    <a href="expertit.html" class="btn btn-primary">meer info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- allround ict -->
                        <div class="coursecolumn">
                            <div class="coursecard">
                                <img src="img/allround.png" alt="Avatar" style="width:100%">
                                <div class="coursecard-container">
                                    <h4><b>Allround medewerker ict systems and devices</b></h4>
                                    <p class="coursecard-text"> Ben je bereid om mensen te helpen met hun
                                        computerproblemen?
                                        Lijkt het je leuk om te leren hoe je netwerken moet aanleggen en hardware kan
                                        installeren, configureren en beheren? Dan is de opleiding Allround medewerker IT
                                        systems
                                        and devices misschien wel wat voor jou!</p>
                                    <a href="itsystemsnddevice.html" class="btn btn-primary">meer info
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                        require_once APPROOT . '/Views/Includes/footer.php';
                        ?>

                        <script src="/js/script.js"></script>

    </body>