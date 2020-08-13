<?php
        include ('header.php');
    ?> 
    <div class="hero-bg">

        <header>
            <div class="nav-container">
                <div class="logo">
                    <a href="index.php"><span>ARTIFY</span></a> 
                </div>
                <div class="main-nav">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="art.php">Art</a></li>
                            <li><a href="galleries.php">Galleries</a></li>
                            <li><a href="artist.php">Artist</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="admin/index.php">Sign In/Register</a></li>
                        </ul>
                    </nav>
                </div>
                <a href="#" class="nav-trigger ">
                        Menu
                        <span aria-hidden="true"></span>
                    </a>
    
            </div>

<div class="hero-textbox">
                <div class="hero-heading">
                    <h1>Lets Get Into The Art World</h1>
                </div>
                <div class="desc">
                    <h2>Artists and Art Lovers Meet Here</h2>
                </div>
                
            </div>

        </header>
    </div>
    <div class="page-container1">
    <div class="js--img">

        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="Images/best5/1.jpg" class="imgslide">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <img src="Images/best5/2.jpg" class="imgslide">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <img src="Images/best5/3.jpg" class="imgslide">
                <div class="text">Caption Three</div>
            </div>
            <div class="mySlides fade">
                <img src="Images/best5/4.jpg" class="imgslide">
                <div class="text">Caption Three</div>
            </div>
            <div class="mySlides fade">
                <img src="Images/best5/5.jpg" class="imgslide">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>
    <div id="seconddiv">
        <div id="news">
            <h3>News & Views</h3><hr>
            <div class="singlenews">
                <h5>The Printed Picture Exhibition (Jaipur) August 2017</h5>
                <p>DAG Modern is delighted to present the exhibition titled 'The Printed Picture' at the Jawahar Kala Kendra in Jaipur. The show examines four centuries of Indian printmaking, displaying works by masters of Indian Modern art. The exhibition will be open for public viewing from 6th August to 8th October, 2017.</p>
            </div><hr>
            <div class="singlenews">
                <h5>Upcoming Exhibition (Mumbai) Altaf: A Retrospective August 2017</h5>
                <p>Younger brother of the abstractionist Nasreen Mohamedi - Altaf, was a modernist painter active from the 1970s-90s. Affiliated with the Left, he came to be strongly involved in social activism while his own art explored themes of death and human frailty. DAG Modern is pleased to present the first-ever retrospective of this significant artist, accompanied by publications that shed light on his creative oeuvre. </p>
            </div><hr>
            <div class="singlenews">
                <h5>Upcoming Exhibition (New Delhi) Madhvi Parekh: A Retrospective September 2017</h5>
                <p>Self-effacing Madhvi Parekh has always maintained that art just happened to her. Perhaps India's only modernist working in a folk art-derived contemporary idiom and aesthetic, Madhvi Parekh's initiation into art was in her childhood in Gujarat. Her themes are of celebratory life as also fantasy and DAG Modern is proud to host this first-ever retrospective of this vastly underrated artist.</p>
            </div>
        </div>
        <div id="video">
            <iframe class="iframe" src="https://www.youtube.com/embed/kOOidzFC82I?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
    
    <?php
        include ('footer.php');
    ?>    
