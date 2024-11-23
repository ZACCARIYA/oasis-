<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <header>
            <div class="nav">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa fa-bars"></i>
                </label>

                <a href="index.html">
                    <img src="image/logo.jpg" alt="logo" width="90px">
                </a>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="pro.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    
                </ul>
            </div>
        </header>
  <style>
    #btn {
      background-color: #d15700;
      color: white;
      padding: 15px 30px;
      border: none;
      border-radius: 25px;
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease, transform 0.3s ease;
      cursor: pointer;
    }

    #btn:hover {
      background-color: #ff8c00;
      transform: translateY(-2px);
    }

    #btn:active {
      background-color: #ffffff;
      transform: translateY(0);
    }
  </style>
  <body>
    <section class = "contact-section">
      <div class = "contact-bg">
       <img src="image/sehra.jpg" alt="logo" height="292px" width="1519px">
        </div>
        
      <div class = "contact-body">
        <div class = "contact-info">
          <div>
            <span><i class="fas fa-mobile-alt" style="color: #e9a001;"></i></span>
            <span>Phone </span>
            <span class = "text">+212 00000000</span>
          </div>
          <div>
            <span><i class = "fas fa-envelope-open" style="color: #e9a001;"></i></span>
            <span>E-mail</span>
            <span class = "text">osisedates@gmail.com</span>
          </div>
          <div>
            <span><i class = "fas fa-map-marker-alt" style="color: #e9a001;"></i></span>
            <span>Address</span>
            <span class = "text">Ifarne</span>
          </div>
          <div>
            <span><i class = "fas fa-clock" style="color: #e9a001;"></i></span>
            <span>Opening Hours</span>
            <span class = "text">Monday - Friday (9:00 AM to 5:00 PM)</span>
          </div>
        </div>

        <div class = "contact-form">
        <form action="submit_contact.php" method="post" enctype="multipart/form-data">
  <div>
    <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
    <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
  </div>
  <div>
    <input type="email" class="form-control" placeholder="E-mail" name="email" required>
    <input type="text" class="form-control" placeholder="Phone" name="tel" required>
  </div>
  <textarea rows="5" placeholder="Message" class="form-control" name="message" required></textarea>
  <button id="btn" name="submit">Envoyer</button>
</form>
          <div>
            <img src = "image/logo.jpg" alt = "">
          </div>
        </div>
      </div>

      <!--<div class="map">
        <iframe src="https://www.google.com/maps/place/Maroc/@31.6913596,-12.4419485,6z/data=!3m1!4b1!4m6!3m5!1s0xd0b88619651c58d:0xd9d39381c42cffc3!8m2!3d31.791702!4d-7.09262!16zL20vMDR3Z2g?hl=fr&entry=ttu" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>-->

      <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe></div>
      <div class = "contact-footer">
        <h3>Follow Us</h3>
        <div class = "social-links">
          <a href = "#" class = "fab fa-facebook-f"></a>
          <a href = "#" class = "fab fa-instagram"></a>
        </div>
      </div>
    </section>
    <?php  
   include ('db.php');
    ?>

  </body>
</html>