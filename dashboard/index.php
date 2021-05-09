<html lang="en-AU">
  <head>
    <title>Home</title>
    <?php include '../shared/head.html';?>
    <link rel="stylesheet" href="/dashboard/stylesheets/home.css" />
  </head>
  <body>
    <div class="container">
      <?php include '../shared/header.html';?>
      <div class="contents">
        <div class="image-panel panel"></div>
        <!-- <h1>Support your future</h1>
          <h2>Let us help you to get a job</h2>
          <div class="btn-group">
            <-- <button class="btn">GTE & VISA Help ></button> ->
            <button class="btn">Resumes Held ></button>
          </div> -->
        <!-- <img class="logo" src="/dashboard/img/logo.webp" alt="Logo" /> -->
        <!-- </div> -->

        <div class="panel text">
          <h1>
            Exceptional Study Australia for Exceptional International Nurses,
            Graduates and Teachers
          </h1>
          <div class="divider"></div>
          <p>
            Exceptional Study Australia is proud to be an Australian owned
            employment and education agency specialising in writing professional
            resumes, cover letters and employment applications for international
            nurses, university graduates and teachers. We also offer assistance
            to internationally trained nurses and prospective future nurses to
            enrol in various nursing courses and degrees in Australia.
          </p>
          <p>
            Exceptional Study Australia specialises in writing highly effective
            and targeted：
          </p>
          <ul>
            <li>Resumes</li>
            <li>Cover letters</li>
            <li>LinkedIn profiles</li>
            <li>Answers to selection criteria</li>
            <li>Suitability statements</li>
          </ul>
          <a href="./about-writing-services.html">
            <button class="btn">Resume Writing Services</button>
          </a>
          <!-- <h2>Let us help you to get a job</h2>
            <div class="btn-group"> -->
          <!-- <button class="btn">GTE & VISA Help ></button> -->
          <!-- <button class="btn">Resumes Held ></button>
            </div> -->
          <!-- <img class="logo" src="/dashboard/img/logo.webp" alt="Logo" /> -->
        </div>

        <div class="panel degrees">
          <div>
            <img
              src="/dashboard/img/NURSES-REC.png"
              class="degree nurse"
              alt=""
            />
            <img src="/dashboard/img/NURSE.png" class="person" alt="" />
            <!-- <img src="/dashboard/img/NURSES-REC.png" class="degree nurse" alt=""> -->
          </div>
          <div>
            <img
              src="/dashboard/img/GRADUATES-REC.png"
              class="degree graduate"
              alt=""
            />
            <img src="/dashboard/img/GRADUATE.png" class="person" alt="" />
            <!-- <img src="/dashboard/img/GRADUATES-REC.png" class="degree graduate" alt=""> -->
          </div>
          <div>
            <img
              src="/dashboard/img/TEACHERS-REC.png"
              class="degree teacher"
              alt=""
            />
            <img src="/dashboard/img/TEACHER.png" class="person" alt="" />
            <!-- <img src="/dashboard/img/TEACHERS-REC.png" class="degree teacher" alt=""> -->
          </div>
        </div>
      </div>
      <div class="form-section panel">
        <div class="info-banner">
          <div>
            <p>
              At Exceptional Study Australia we can assist jobseekers in the
              Gold Coast, Brisbane, Sunshine Coast, Cairns, Melbourne, Sydney,
              Perth, Adelaide, Canberra, Darwin or anywhere remotely in
              Australia to stand out when applying for a graduate program,
              internship, work experience opportunity or full-time, part-time
              and casual work contract in Australia. It is our goal to help our
              clients become exceptional jobseekers in their future profession.
            </p>
          </div>
          <div>
            <h3>INTERNATIONAL NURSES</h3>
            <ul>
              <li>Graduates nurses</li>
              <li>Registered nurses (RN)</li>
              <li>Enolled nurses (EN)</li>
              <li>Assistants in nursing (AIN)</li>
              <li>Midwives</li>
              <li>Nurse practitioners</li>
              <li>Nursing facilitators / trainers</li>
            </ul>
          </div>
          <div>
            <h3>UNIVERSITY GRADUATES</h3>
          </div>
          <div>
            <h3>TEACHERS</h3>
          </div>
        </div>

        <div class="form-container">
          <img
            src="/dashboard/img/form-img.webp"
            alt="graduate holding degree"
          />

          <form action="" method="post">
            <h2>Contact Us</h2>
            <label for="nameInput">Name</label>
            <!-- placeholder="" required="" maxlength="100" -->
            <input
              class="text-input"
              type="text"
              name="Name"
              id="nameInput"
              required
              maxlength="100"
            />
            <label for="emailInput">Email</label>
            <input
              class="text-input"
              type="text"
              name="Email"
              id="emailInput"
              required
              maxlength="100"
              pattern="^.+@.+\.[a-zA-Z]{2,63}$"
            />
            <label for="occupationInput">Your occupation is...</label>
            <div class="input-holder">
              <input type="radio" name="Occupation" id="nurse" value="nurse" />
              <label for="nurse">Nurse</label>
            </div>
            <div class="input-holder">
              <input
                type="radio"
                name="Occupation"
                id="teacher"
                value="teacher"
              />
              <label for="teacher">Teacher</label>
            </div>
            <div class="input-holder">
              <input
                type="radio"
                name="Occupation"
                id="graduate"
                value="graduate"
              />
              <label for="graduate">Graduate</label>
            </div>
            <button class="btn" type="submit">Submit</button>
            <!-- <input type="text" name="Name" id="nameInput"> -->
          </form>
        </div>

        <!-- <h1>Support your future</h1>
        <h2>Let us help you to get a job</h2>
        <div class="btn-group">
          <-- <button class="btn">GTE & VISA Help ></button> ->
          <button class="btn">Resumes Held ></button>
        </div> -->
        <!-- <img class="logo" src="/dashboard/img/logo.webp" alt="Logo" /> -->
      </div>
      <div class="footer">
        <div class="links">
          <h1>LINKS</h1>
          <div class="gov-links">
            <a href=""
              >Northern Territory Health
              <svg
                data-bbox="13.05 2.55 33.878 54.8"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 60 60"
              >
                <g>
                  <path
                    d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z"
                  ></path>
                </g>
              </svg>
            </a>
            <a href="">South Australia Health</a>
            <a href="https://www.health.qld.gov.au/employment"
              >Queensland Health</a
            >
            <a href="">Western Australia Health</a>
            <a href="">New South Wales Health</a>
            <a href="">Tasmania Health</a>
            <a href="">Victoria Health</a>
            <a class="AHPRAF" href="">AHPRA</a>
          </div>
          <div>social links?</div>
        </div>
        <?php include '../shared/footer.html';?>
      </div>
    </div>
  </body>
  <?php 
  if(isset($_POST['submit'])){
      $to = "jknechtli@hotmail.com"; // this is your Email address
      $from = $_POST['Email']; // this is the sender's Email address
      $first_name = $_POST['Name'];
      $subject = "Form submission";
      $subject2 = "Copy of your form submission";
      $message = $first_name . " wrote the following: hi";
      $message2 = "Here is a copy of your message " . $first_name . "\n\n" . "hi";

      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
      // You can also use header('Location: thank_you.php'); to redirect to another page.
      }
  ?>

  <?php include '../shared/script.html';?>
</html>
