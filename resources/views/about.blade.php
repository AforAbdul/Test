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

main {
    position: relative;
}
ul.row {
    display: flex;
    justify-content:flex-end;
}
.logo .tab {
    display: inline-block;
    justify-content: center;
}
.logo{
    padding: 20px 40px;
}

.btn{
  color:rgb(255, 255, 255);
   background:rgba(0, 0, 0, 0.5); 
   /* color:#999;
   background:rgba(0, 0, 0, 0.5);  */
  padding:10px 20px;
  font-size:12px;
  text-decoration:none;
  letter-spacing:2px;
  text-transform:uppercase;
}

.btn:hover{
  border:none;
  background:rgba(0, 0, 0, 0.4);
  background:#ffffff;
  padding: 20px 20px;
  color:#1b1b1b;
}

.caption {
    width: 100%;
    position: absolute;
    color:white;
    text-align: center;
    font-family:cursive;
    font-style: italic;
    font-weight: bold;
    margin: 10px;
}


.intro {
    align-content: center;
    background-image: url(images/9.jpg);
    background-size: cover;
    /* z-index: -1; */
    opacity: 1;
    background-position: bottom;
    display: flex;
}
.intro2 {
  
    align-content: center;
    background-image: url(images/track.jpg);
   
    background-size: cover;
    background-position: bottom;
    display: flex;
    border-style: solid;

   
}
.inquiry{
    text-align: center;
    overflow: hidden;
    max-width: 600px;
    background: #fff;
    margin-left: 450px;
    margin-top: 200px;
    margin-bottom: 200px;
    margin-right: 200px; 
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}

.inquiry .title {
    /* display: flex; */
    font-size: 35px;
    font-weight: 600;
    padding: 10px;
    text-align: center;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    background-color: lightblue;
}

/* form{
  
  
  z-index: -9;
} */

.aboutintro {
    text-align: center;
    font-size: larger;
    background-color: antiquewhite;
    margin: 250px;
    border-style: inset;
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
        <section class="intro2">
            <div class="aboutintro">
                <h1> About this Project</h1>
                <p>This is a group project on Railway ticket Reservation System.
                    Where passangers can search and book train tickets.
                    <strong>It's a privilage for getting this opportunity of building this project from Scratch.</strong>
                </p>

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
    



</html>

@stop