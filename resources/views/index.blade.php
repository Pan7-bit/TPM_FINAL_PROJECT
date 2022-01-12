<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechnoScape 2022</title>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

    <section class="loading-page">
        <div class="container">
            <div class="loading-logo">
                <img src="images/logo hackaton.png" alt="">
            </div>
            <div class="circles">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
            </div>
            <div class="loading-title">
                <h1>Hackathon 5.0</h1>
            </div>
        </div>
        <script>
            $(window).on("load",function(){
              $(".loading-page").fadeOut(1000);
              $(".gradient").fadeIn(1000);
            });
        </script>
    </section>

    <div class="gradient">

    <nav class="navbar">
        <img class="hlogo" src="images/logo hackaton.png" alt="logo">
        <ul>
        <li><a href="{{ route('createQuestion') }}">Home</a></li>
        <li><a href="#champion">Champion Prize</a></li>
        <li><a href="#mentor">Mentor & Jury</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#timeline">Timeline</a></li>
        <a href="{{ route('login') }}"><button>Login</button></a>
        </ul>
    </nav>

        <section class="landing-page">
        <div class="container">
            <div class="title">
                <h1>HACKATHON</h1>
                <h1>5.0</h1>
                <h5>Tema Event</h5>
                <a href=""><button class="join">Join Now !</button></a>
            </div>
            <div class="link">
            <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"><iframe width="500" height="315" src="https://www.youtube.com/embed/O4ggMobNDac" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/embed/O4ggMobNDac";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'M7lc1UVf-VE',
          playerVars: {
            'playsinline': 1
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }
      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }
      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
            </div>
        </div>
        </section>

    <a name="champion"></a>
    <section class="champion-prize">
        <div class="container">
            <h1>Champion Prize</h1>
            <div class="winner">
            <div class="first-winner">
                <img src="images/champion logo.png" alt="">
                <h2>First Winner</h2><br>
                <p>Rp. 5.000.000</p>
                <p>Merchandise</p>
                <p>Certificate</p>
            </div>
            <div class="second-winner">
                <img src="images/champion logo.png"alt="">
                <h2>Second Winner</h2><br>
                <p>Rp. 3.000.000</p>
                <p>Merchandise</p>
                <p>Certificate</p>
            </div>
            <div class="third-winner">
                <img src="images/champion logo.png"alt="">
                <h2>Third Winner</h2><br>
                <p>Rp. 1.000.000</p>
                <p>Merchandise</p>
                <p>Certificate</p>
            </div>
        </div>
        </div>
    </section>

    <a name="mentor"></a>
    <section class="mentor-jury">
        <div class="container">
            <h1>Mentor & Jury</h1>
            <div class="mentor-title">
            <h5>Our Mentor</h5>
            <div class="mentor">
                <div class="prev">
                    <i class="fa fa-angle-left" aria-hidden="true" onclick="plusSlides(-1)"></i>
                </div>
            <div class="mentors fade">
                <div class="mentor-picture1"></div>
                <div class="mentor-name">
                    <center><h5>Nama Mentor</h5></center>
                </div>
            </div>
            <div class="mentors fade">
                <div class="mentor-picture2"></div>
                <div class="mentor-name">
                    <center><h5>Nama Mentor</h5></center>
                </div>
            </div>
            <div class="mentors fade">
                <div class="mentor-picture3"></div>
                <div class="mentor-name">
                    <center><h5>Nama Mentor</h5></center>
                </div>
            </div>
            <div class="mentors fade">
                <div class="mentor-picture4"></div>
                <div class="mentor-name">
                    <center><h5>Nama Mentor</h5></center>
                </div>
            </div>
            <div class="mentors fade">
                <div class="mentor-picture5"></div>
                <div class="mentor-name">
                    <center><h5>Nama Mentor</h5></center>
                </div>
            </div>
            <div class="mentors fade">
                <div class="mentor-picture6"></div>
                <div class="mentor-name">
                    <center><h5>Nama Mentor</h5></center>
                </div>
            </div>
            <div class="mentors fade">
                <div class="mentor-picture7"></div>
                <div class="mentor-name">
                    <center><h5>Nama Mentor</h5></center>
                </div>
            </div>
            <div class="mentors fade">
                <div class="mentor-picture8"></div>
                <div class="mentor-name">
                    <center><h5>Nama Mentor</h5></center>
                </div>
            </div>
            <div class="mentors fade">
                <div class="mentor-picture9"></div>
                <div class="mentor-name">
                    <center><h5>Nama Mentor</h5></center>
                </div>
            </div>
            <div class="next">
                <i class="fa fa-angle-right" aria-hidden="true" onclick="plusSlides(1)"></i>
            </div>

            <script>
                var mentorIndex = 1;
                showMentor(mentorIndex);

                function plusSlides(n) {
                  showMentor(mentorIndex += n);
                }

                function showMentor(n) {
                  var i;
                  var mentors = document.getElementsByClassName("mentors");
                  if (n > mentors.length) {mentorIndex = 1}
                  if (n < 1) {mentorIndex = mentors.length}
                  for (i = 0; i < mentors.length; i++) {
                      mentors[i].style.display = "none";
                  }
                  mentors[mentorIndex-1].style.display = "block";
                }
                </script>

        </div>
        </div>

        <div class="jury-title">
            <h5>Our Jury</h5>
            <div class="jury">
            <div class="first-jury">
                <div class="jury-picture1"></div>
                <div class="jury-name">
                    <center><h5>Nama Jury</h5></center>
                </div>
            </div>
            <div class="second-jury">
                <div class="jury-picture2"></div>
                <div class="jury-name">
                    <center><h5>Nama Jury</h5></center>
                </div>
            </div>
            <div class="third-jury">
                <div class="jury-picture3"></div>
                <div class="jury-name">
                    <center><h5>Nama Jury</h5></center>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <a name="about"></a>
    <section class="about">
        <div class="container">
            <div class="about-desc">
            <div class="left">
                <h1>About</h1>
                <h1>Hackathon 5.0</h1>
                <h5>Deskripsi tentang Hackathon 5.0</h5>
                <a href=""><button class="guide">Download Guidebook</button></a><br>
                <a href=""><button class="reg">Register Now</button></a>
            </div>
            <div class="right">
                <img src="images/about hackaton 1.png" alt="">
            </div>
        </div>
        </div>
    </section>

    <section class="why">
        <div class="container">
            <h1>Why Hackaton 5.0 ?</h1>
              <!--image slider start-->
              <div class="slider">
                <div class="slides">
 <!--radio buttons start-->
           <input type="radio" name="radio-btn" id="radio1">
           <input type="radio" name="radio-btn" id="radio2">
           <input type="radio" name="radio-btn" id="radio3">
           <input type="radio" name="radio-btn" id="radio4">
           <input type="radio" name="radio-btn" id="radio5">
           <!--radio buttons end-->
           <!--slide images start-->
           <div class="slide first">
               <div class="why-desc">
                   <img src="images/portofolio.png" alt="">
                   <div class="desc-list">
                <h1>Portofolio</h1>
                <p>Are you looking for a job or want to increase your the field of expertise in your resume? Join Hackaton 5.0 is perfect to upgrade your portofolio</p>
            </div>
            </div>
           </div>
           <div class="slide">
            <div class="why-desc">
                <img src="images/networking.png" alt="" style="width: 53%;">
                <div class="desc-list">
             <h1>Networking</h1>
             <p>Are you looking for a job or want to increase your the field of expertise in your resume? Join Hackaton 5.0 is perfect to upgrade your portofolio</p>
         </div>
         </div>
           </div>
           <div class="slide">
            <div class="why-desc">
                <img src="images/skills.png" alt="" style="width: 72%;">
                <div class="desc-list">
             <h1>Skills</h1>
             <p>Are you looking for a job or want to increase your the field of expertise in your resume? Join Hackaton 5.0 is perfect to upgrade your portofolio</p>
         </div>
         </div>
           </div>
           <div class="slide">
            <div class="why-desc">
                <img src="images/experience.png" alt="" style="width: 68%;">
                <div class="desc-list">
             <h1>Experience</h1>
             <p>Are you looking for a job or want to increase your the field of expertise in your resume? Join Hackaton 5.0 is perfect to upgrade your portofolio</p>
         </div>
         </div>
           </div>
           <div class="slide">
            <div class="why-desc">
                <img src="images/teamwork.png" alt="" style="width: 80%;">
                <div class="desc-list">
             <h1>Teamwork</h1>
             <p>Are you looking for a job or want to increase your the field of expertise in your resume? Join Hackaton 5.0 is perfect to upgrade your portofolio</p>
         </div>
         </div>
           </div>
           <!--slide images end-->
           <!--automatic navigation start-->
           <div class="navigation-auto">
               <div class="auto-btn1"></div>
               <div class="auto-btn2"></div>
               <div class="auto-btn3"></div>
               <div class="auto-btn4"></div>
               <div class="auto-btn5"></div>
           </div>
           <!--automatic navigation end-->
           </div>
           <!--manual navigation start-->
           <div class="navigation-manual">
           <label for="radio1" class="manual-btn"></label>
           <label for="radio2" class="manual-btn"></label>
           <label for="radio3" class="manual-btn"></label>
           <label for="radio4" class="manual-btn"></label>
           <label for="radio5" class="manual-btn"></label>
           </div>
           <!--manual navigation end-->
       </div>
       <!--image slider end-->
       <script type="text/javascript">
           var counter = 1;
          setInterval(function(){
              document.getElementById('radio' + counter).checked = true;
               counter++;
               if(counter > 5){
                counter = 1;
               }
           }, 5000);
           </script>
        </div>
    </section>

    <a name="faq"></a>
    <div class="background">
    <section class="faq">
        <div class="container">
            <h1>FAQ</h1>
            <div class="faq-qwest">
                <div class="left">
                    <div class="faq-list" id="question1">
                        <a class="faq-desc" href="#question1">
                            What is Hackaton 5.0?
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                        </a>
                        <div class="answer">
                            Hackaton 5.0 is an annual event held by BNCC to to enrich participant’s experience and improve participant’s skills in technology.
                        </div>
                    </div>

                    <div class="faq-list" id="question2">
                        <a class="faq-desc" href="#question2">
                            How do we participate?
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                        </a>
                        <div class="answer">
                            To enroll, please visit www.hackaton/register.com and fill the registration form. If there is a problem while register your account, please contact us.
                        </div>
                    </div>

                    <div class="faq-list" id="question3">
                        <a class="faq-desc" href="#question3">
                            What are the requirements for participation?
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                        </a>
                        <div class="answer">
                            Each participant can only join 1 team. Participant should submit their CV and ID Card in registration page.
                            <ul>
                                <li>- Non Binusian : ID Card (KTP)</li>
                                <li>- Binusian : Binusian Card</li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq-list" id="question4">
                        <a class="faq-desc" href="#question4">
                            When is the deadline of registration?
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                        </a>
                        <div class="answer">
                            The deadline of registration is 25 January 2022.
                        </div>
                    </div>

                    <div class="faq-list" id="question5">
                        <a class="faq-desc" href="#question5">
                            Why should we join this event?
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                        </a>
                        <div class="answer">
                            You will gain knowledge and experience you probably not found in anywhere else. Hackaton 5.0 also can help to add your portofolio and expand your networking.
                        </div>
                    </div>

                    <div class="faq-list" id="question6">
                        <a class="faq-desc" href="#question6">
                            Who can participate in Hackaton 5.0?
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                        </a>
                        <div class="answer">
                            Good news, Hackaton 5.0 is open for public. Let's come and join us!
                        </div>
                    </div>
                </div>

                <div class="right">
                    <img src="images/FAQ.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <a name="timeline"></a>
    <section class="timeline">
       <div class="container">
        <h1>Time Line</h1>
        <div class="times">
        <div class="left">
            <img src="images/time.png" alt="">
        </div>
        <div class="right">
        <div class="timeline-list">
            <div class="timelines">
                <h5>Open Registration</h5>
            </div><br><br><br><br><br>
            <div class="timelines">
                <h5>Close Registration</h5>
            </div><br><br><br><br><br>
            <div class="timelines">
                <h5>Technical Meeting</h5>
                <a href="">Click Here</a>
            </div><br><br><br><br><br>
            <div class="timelines">
                <h5>Competition Day</h5>
                <a href="">Click Here</a>
            </div>
        </div>
        </div>
    </div>
       </div>
    </section>

    <section class="sponsor">
        <div class="container">
            <h1>Sponsor</h1>
            <div class="sponsors">
            <div class="platinum">
                <h5>Platinum Sponsor</h5>
                <img src="images/Sponsor/tokped.jpg" alt="">
            </div>
            <div class="gold">
                <h5>Gold Sponsors</h5>
                <img src="images/Sponsor/lokerid.png" alt="" style="margin-right: 100px;">
                <img src="images/Sponsor/dicoding.png" alt="">
                <img src="images/Sponsor/jagel.png" alt="" style="margin-left: 100px;">
            </div>
            <div class="silver">
                <h5>Silver Sponsors</h5>
                <img src="images/Sponsor/discord.png" alt="" style="margin-right: 50px;">
                <img src="images/Sponsor/webflow.png" alt="" style="margin-right: 50px;">
                <img src="images/Sponsor/niagahoster.png" alt="">
                <img src="images/Sponsor/figma.png" alt="" style="margin-left: 50px;">
            </div>
        </div>
        </div>
    </section>

    <section class="media-partner">
        <div class="container">
            <h1>Media Partners</h1>
              <!--image slider start-->
              <div class="slider2">
                <div class="slides2">
 <!--radio buttons start-->
           <input type="radio" name="radia-btn" id="radia1">
           <input type="radio" name="radia-btn" id="radia2">
           <input type="radio" name="radia-btn" id="radia3">
           <!--radio buttons end-->
           <!--slide images start-->
           <div class="slide2 first">
               <div class="medpar">
                   <img src="images/medpar/1.png" alt="">
            </div>
            </div>
           <div class="slide2">
            <div class="medpar">
                <img src="images/medpar/2.png" alt="">
         </div>
           </div>
           <div class="slide2">
            <div class="medpar">
                <img src="images/medpar/3.png" alt="">
         </div>
           </div>
           <!--slide images end-->
           <!--automatic navigation start-->
           <div class="navigation-auto2">
               <div class="auto-btn1"></div>
               <div class="auto-btn2"></div>
               <div class="auto-btn3"></div>
           </div>
           <!--automatic navigation end-->
           </div>
           <!--manual navigation start-->
           <div class="navigation-manual2">
           <label for="radia1" class="manual-btn2"></label>
           <label for="radia2" class="manual-btn2"></label>
           <label for="radia3" class="manual-btn2"></label>
           </div>
           <!--manual navigation end-->
       </div>
       <!--image slider end-->
       <script type="text/javascript">
           var counter2 = 1;
          setInterval(function(){
              document.getElementById('radia' + counter2).checked = true;
               counter2++;
               if(counter2 > 3){
                counter2 = 1;
               }
           }, 5000);
           </script>
        </div>
    </section>

    <section class="other-events">
        <div class="container">
            <h1>Other Events</h1>
            <div class="oe-list">
            <div class="vc">
                <h5>Virtual Conference</h5>
                <img src="images/virtual conference.png" alt="">
                <center><button>Register Now !</button></center>
            </div>
            <div class="dw">
                <h5>Developer Workshop</h5>
                <img src="images/developer workshop.png" alt="">
                <center><button>Register Now !</button></center>
            </div>
        </div>
        </div>
    </section>

    <section class="question">
    </div>
        <div class="container">
            <h1 class="quest-h1">Ask a question</h1>
            <div class="questions">
                <div class="left">
                    <form action="{{ route('createQuestion') }}" method="POST">
                        @csrf
                        <label for="name">Name</label><br>
                         <input id="name" name="name" class="name" placeholder="Your Name" type="text" required><br>
                         <label for="email">Email</label><br>
                         <input id="email" name="email" class="email" placeholder="Your Email" type="email" required><br>
                         <label for="subject">Subject</label><br>
                         <input id="subject" name="subject" class="subject" placeholder="Your Subject" type="text" required><br>
                         <label for="message">Message</label><br>
                         <textarea id="message" name="message" class="message" placeholder="Your Message" type="text" required></textarea>
                         <center><button class="submit">Submit</button></center>
                    </form>
                </div>
                <div class="right">
                    <img src="images/ask a question.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sosmed">
        <div class="container">
            <h1>Social Media</h1>
            <div class="sosmed-list">
            <div class="insta">
                <img src="images/Social Media/IG.png" alt="">
                <h5>Hackathon5.binus</h5>
            </div>
            <div class="emails">
                <img src="images/Social Media/Email.png" alt="">
                <h5>Hackathon5@gmail.com</h5>
            </div>
            <div class="twitter">
                <img src="images/Social Media/Twitter.png" alt="">
                <h5>Hackathon5.binus</h5>
            </div>
            <div class="facebook">
                <img src="images/Social Media/FB.png" alt="">
                <h5>Hackathon5.binus</h5>
            </div>
            <div class="linkedin">
                <img src="images/Social Media/linkedin.png" alt="">
                <h5>Hackathon5.binus</h5>
            </div>
        </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="footer-list">
            <div class="left">
                <h5>Powered and Organized by</h5>
                <img src="images/bncc.png" alt="">
            </div>
            <div class="right">
                <div id="player"><iframe width="500" height="315" src="https://www.youtube.com/embed/L_YjfaLHB0E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>
        </div>
            <div class="center">
               <center><h5>@2021. All rights reserved.</h5></center>
            </div>
        </div>
    </section>
</div>

<script src="script.js"></script>
</body>
</html>
