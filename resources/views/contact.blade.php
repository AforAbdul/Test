@extends('layout')
@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Reservation System</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
</head>
<style>
    body{
  background:#1b1b2b;
  padding:75px;
  text-align:center;
  font-family: 'Oswald', sans-serif;
}

.btn{
  color:#999;
  background:rgba(0, 0, 0, 0.5);
  padding:10px 20px;
  font-size:12px;
  text-decoration:none;
  letter-spacing:2px;
  text-transform:uppercase;
}

.btn:hover{
  border:none;
  background:rgba(0, 0, 0, 0.4);
  background:#fff;
  padding: 20px 20px;
  color:#1b1b1b;
}

main {
    background: -webkit-linear-gradient(left,Red, rgb(250, 163, 123));
    display: flex;
    align-content: center
}

.logo .tab {
    display: inline-block;
    justify-content: center;
}
.logo{
    padding: 20px 40px;
}
.footer-dark {
    padding:50px 0;
    color:#f0f9ff;
    background-color:#282d32;
  }
  
  .footer-dark h3 {
    margin-top:0;
    margin-bottom:12px;
    font-weight:bold;
    font-size:16px;
  }
  
  .footer-dark ul {
    padding:0;
    list-style:none;
    line-height:1.6;
    font-size:14px;
    margin-bottom:0;
  }
  
  .footer-dark ul a {
    color:inherit;
    text-decoration:none;
    opacity:0.6;
  }
  
  .footer-dark ul a:hover {
    opacity:0.8;
  }
  
  @media (max-width:767px) {
    .footer-dark .item:not(.social) {
      text-align:center;
      padding-bottom:20px;
    }
  }
  
  .footer-dark .item.text {
    margin-bottom:36px;
  }
  
  @media (max-width:767px) {
    .footer-dark .item.text {
      margin-bottom:0;
    }
  }
  
  .footer-dark .item.text p {
    opacity:0.6;
    margin-bottom:0;
  }
  
  .footer-dark .item.social {
    text-align:center;
  }
  
  @media (max-width:991px) {
    .footer-dark .item.social {
      text-align:center;
      margin-top:20px;
    }
  }
  
  .footer-dark .item.social > a {
    font-size:20px;
    width:36px;
    height:36px;
    line-height:36px;
    display:inline-block;
    text-align:center;
    border-radius:50%;
    box-shadow:0 0 0 1px rgba(255,255,255,0.4);
    margin:0 8px;
    color:#fff;
    opacity:0.75;
  }
  
  .footer-dark .item.social > a:hover {
    opacity:0.9;
  }
  
  .footer-dark .copyright {
    text-align:center;
    padding-top:24px;
    opacity:0.3;
    font-size:13px;
    margin-bottom:0;
  }

footer a{
    color: black;
}
input[type=text], [type=number], textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
input[type=submit]:hover {
    background-color: darkgreen;
  }
.contbox {
    position: relative;
    display: flex;
    justify-content:center;
    
    /* align-content: center;
    background-image: url(images/track.jpg);
   
    background-size: cover;
    background-position: bottom;
    display: flex;
    border-style: solid; */

}

.contactform {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 30px;
    max-width: 500px;
    position: relative;
    justify-content: center;
    left: 40%;
    margin: 100px;
    align-content: center;
  }


/* Responsive */

@media (max-width:500px) {
    
}
</style>
<body>
    <header>
        <header>
            <nav>
             <a href="/home" class="btn">Home</a>
             <a href="/login" class="btn">Login</a>
             <a href="/about" class="btn">About</a>
             <a href="/contact" class="btn">Contact Us</a>
            </nav>
             </header>
    </header>
    <main>
        <section class="contbox">
            <div class="contactform">
                <form action="#"  onsubmit="myFunction()">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
                
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                
                    <label for="ticket">Ticket No.</label>
                    <input type="number" id="ticket" name="ticket" placeholder="Your Ticket No.." required>
                
                
                    <input type="submit" value="Submit">
                </form>
                </div>
        </section>
    </main>
    <div class="footer-dark">
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Web design</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Database Management</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">More products</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>Description</h3>
                            <p>A website made to help people in railway ticket booking. Follow us to know more!</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">Runtime Terror © 2021</p>
                </div>
            </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
<script>
function myFunction() {
  alert("Your Form was Submitted successfully! Thank you.");
}
</script>


</html>

@stop