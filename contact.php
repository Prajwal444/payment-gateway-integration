<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us | Relief Fund ☎</title>
  <link rel="icon" href="./logoimage.png">
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./footer.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
    rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css"
    rel="stylesheet">
</head>
<style>
  body{
    background-image: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);
  }
  nav{
    font-family: 'New Tegomin', serif;
    background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  }

  .contant11-top-bg{
    background-image: url("./images/logo.jpg");
  }

  
</style>
<body>
    <?php include('navbarc.php'); ?>
  <section class="w3l-contact-11">
    <div class="contacts-main">
      <div class="contant11-top-bg">
        <div class="wrapper">
          <div class="d-grid contact section-gap">
            <div class="contact-info-left d-grid text-center">
              <div class="contact-info">
                <span class="fa fa-location-arrow" aria-hidden="true"></span>
                <h4>Address</h4>
                <p> Nagpur, India <br>440024<br></p>
              </div>
              <div class="contact-info">
                <span class="fa fa-phone" aria-hidden="true"></span>
                <h4>Phone</h4>
                <p><a href="#">+91 9999999999</a></p>
              </div>
              <div class="contact-info">
                <span class="fa fa-envelope-open-o" aria-hidden="true"></span>
                <h4>Mail</h4>
                <p><a href="mailto:thedogbowl@example.com" class="email">fundraiser@gmail.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-41-mian section-gap">
        <div class="wrapper">
          <h3 class="cont-head">Get in touch with us ✉️</h3>
          <div class="d-grid align-form-map">
            <div class="form-inner-cont">
              <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                <div class="form-input">
                  <label for="w3lName">Name</label>
                  <input type="text" name="w3lName" id="w3lName" placeholder="" />
                </div>
                <div class="form-input">
                  <label for="w3lMessage">Message(Required)*</label>
                  <textarea placeholder="" name="w3lMessage" id="w3lMessage" required=""></textarea>
                </div>
                <div class="form-input">
                  <label for="w3lSender">Email(Required)*</label>
                  <input type="email" name="w3lSender" id="w3lSender" placeholder="" required="" />
                </div>
                <button type="submit" class="btn btn-contact">Submit</button>
              </form>
            </div>
            <div class="pic">    
				
            </div>
          </div>
        </div>
      </div>
  </section>
        <?php include('footerc.php'); ?>
</body>

</html>