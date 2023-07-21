<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="main.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Buddy</title>
  </head>
  <body>

    <nav class="navbar">
      <button class="user_profile">
        <img src="img\Group 2.svg" />
      </button>

      <div class="link">
        <ol class="link_orderedList">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="FindBuddy.html">FAQ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">JOIN US</a>
          </li>
        </ol>
      </div>
    </nav>

    
    <div class="hero">
      <form action="action_page.php" method = 'GET'>
      <div class="label">
        <h3>NAME</h3>
      </div>
      <div class="search">
        <input type="text" name="name" class="search_text" />
      </div>
      <div class="label">
        <h3>ENTER SUBJECT</h3>
      </div>

      <div class="search">
        <input type="text" name="subject"class="search_text" />
      </div>
      <div class="label">
        <h3>TOPIC</h3>
      </div>

      <div class="search">
        <input type="text" name="topic" class="search_text" />
      </div>
      <div class="label">
        <h3>STANDARD</h3>
      </div>

      <div class="search">
        <input type="text" name="standard" class="search_text" />
      </div>
    </div>

    <div class="button">
      <button class="button1" id="find_buddy">FIND BUDDY</button>
      </form>

    </div>



    <!-- <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224357.4425004839!2d77.26173979434049!3d28.52212995201704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1680183656988!5m2!1sen!2sin"
      width="1519"
      height="600"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe> -->

    <nav class="footer">
      <div class="link">
        <ol class="link_orderedList">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">FAQ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">FIND BUDDY</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">JOIN US</a>
          </li>
        </ol>
      </div>
    </nav>

    <!-- <script>
                    const btn = document.getElementById('find_buddy')
                    btn.addEventListener('click', () => {
                      if (!navigator.geolocation) {
          alert("Geolocation is not supported by your browser") 
        } else {
          navigator.geolocation.getCurrentPosition(success, error);
        }
      }

                    )

                    const success = (succ) => {
                      console.table({lat:succ.coords.latitude, long:succ.coords.longitude})
                    }
                    const error = (err) => {
                      console.log(err)
                    }


    </script> -->
  </body>
</html>
