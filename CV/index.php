<?php
include('../Security/NotLogedin.php'); // Include the error check

// Continue with the rest of your page content
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adam CV</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include('../nav.php'); ?>

  <div class="container">
    <div class="profile">
      <div class="profile_container">
        <div class="profile_profileImg">
          <img src="./images/myimge.jpeg" alt="Adam Jardali">
        </div>
        <div>
          <h1 class="profile_name">
            <span class="profile_name_firstName">Adam</span>
            <span class="profile_name_lastName">Jardali</span>
          </h1>
          <p class="profile_title">Software Engineer</p>
          <p class="description profile_description">
            Since writing my first line of code in 2020, I discovered my passion for
            coding and chose to specialize in software development, driven by
            the thrill of tackling intricate challenges through code.
          </p>
          <a class="downloadBtn" href="./cv.pdf" download="Resume.pdf">Download CV</a>
        </div>
      </div>
    </div>
    <div class="group-1">
      <div class="skills">
        <h3 class="title">Skills</h3>
        <ul class="skills_list description">
          <li><span class="item_title">Backend Engineering:</span>  Database Design, Communication Protocols, Networking, Concurrency, Nginx Web Server, API Security, RabbitMQ, & Design Patterns Bascis.</li>
          <li><span class="item_title">Frontend Engineering: </span> HTML, CSS, Javascript, Vuejs, & Web Security.</li>
          <li><span class="item_title">Algorithms & Data-Strcutres: </span> Practical Knoweldge in advance data-structures and algorithms. </li>
          <li><span class="item_title">Programming Languages: </span> C++, Python, Java, PHP, & C#.</li>
          <li><span class="item_title">Other Tools: </span> Git, Docker, AWS Bascis, Microservices Bascis, Redis, Jenkins, & CI/CD.</li>
        </ul>
      </div>
      <div class="ref">
        <h3 class="title">Reference</h3>
        <div class="ref_item">
          <h4 class="ref_name">Adam Jardali</h4>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, neque?</p>
        </div>
        <div class="ref_item">
          <h4 class="ref_name">Adam Jardali</h4>
          <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
        </div>
      </div>

      <div class="edu">
        <h3 class="title">Education</h3>
        <div class="edu_item">
          <p class="item_preTitle">2021-2024</p>
          <h4 class="item_title">BS in Computer Science</h4>
          <p class="item_subtitle">
            Lebanese American University
          </p>
        </div>
      </div>

      <div class="certification">
        <h3 class="title">KEY ACCOMPLISHMENTS</h3>
        <div class="certification_item">
          <h4 class="item_title">Regional Competitive Programmer</h4>
          <p class="description">
            Attained an outstanding 4th place ranking at the
            ACM-LCPC 2022 and qualified to compete in the
            ACM-ACPC 2022.
          </p>
        </div>

        <div class="certification_item">
          <h4 class="item_title">Codeforces Contestant</h4>
          <p class="description">
            Solved over 850 problems on Codeforces.</p>
        </div>
      </div>
    </div>
    <div class="group-2">
      <div class="exp">
        <h3 class="title">Experience</h3>
        <div class="exp_item">
          <p class="item_preTitle">2023 - present</p>
          <h4 class="item_title">Kamkalima</h4>
          <p class="item_subtitle">Software Engineer</p>
          <p class="description">Kamkalima is an Arabic educational platform for learning and teaching in schools. Currently, over 20,000 students and more than 450 teachers across nine Arab countries benefit from Kamkalima.</p>
          <ul class="skills_list description">
            <li>Design and implement robust backend features, optimize database schema, and ensure seamless integration between frontend and backend components.</li>
            <li>Prioritize responsive and user-friendly features, employing modular and scalable code practices for future development and maintenance.</li>
            <li>Implement comprehensive test suites, leverage automated testing tools, conduct regression testing, and collaborate with QA teams for user acceptance testing.</li>
          </ul>
        </div>
        <div class="exp_item">
          <p class="item_preTitle">2019 - present</p>
          <h4 class="item_title">Adam Jardali.</h4>
          <p class="item_subtitle">Frontend Developer</p>
          <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam,
          </p>
        </div>
      </div>
      <div class="awards">
        <h3 class="title">Awards</h3>
        <div class="awards_item">
          <p class="item_preTitle">2019</p>
          <h4 class="item_title">Adam Jardali</h4>
          <p class=" description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam,
          </p>
        </div>
        <div class="awards_item">
          <p class="item_preTitle">2019</p>
          <h4 class="item_title">Adam Jardali</h4>
          <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam,
          </p>
        </div>
      </div>

      <div class="interest">
        <h3 class="title">Interest</h3>
        <div class="interest_items">
          <div class="interest_item">
            <i data-feather="music"></i>
            <span>Music</span>
          </div>
          <div class="interest_item">
            <i data-feather="book"></i>
            <span>Books</span>
          </div>
          <div class="interest_item">
            <i data-feather="map"></i>
            <span>Travel</span>
          </div>
        </div>

      </div>
    </div>
    <hr>
    <div class="group-3">
      <div class="contact">
        <h3 class="title">Contact</h3>
        <div class="contact_info">
          <p class="description">
            +961 76 097 305
          </p>
          <p class="description">
            adamjardali@hotmail.com
          </p>
        </div>
      </div>
      <div class="social">
        <h3 class="title">Socials</h3>
        <div class="social_items">
          <a href="#" target="_b" class="social_item">
            <i data-feather="github"></i>
            <span>/adamjardali</span>
          </a>
          <a href="#" target="_blank" class="social_item">
            <i data-feather="linkedin"></i>
            <span>/adamjardali</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script>
    feather.replace()
  </script>
</body>

</html>