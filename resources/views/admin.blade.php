@extends('layout')
@section ('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    main {
        background-image: url(images/stopping.jpg);
        background-size: cover;
    } 
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

.logo .tab {
    display: inline-block;
    justify-content: center;
}
.logo{
    padding: 20px 40px;
}
/* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  } */
main {
    background-image: url(images/station.jpg);
    background-size:cover;
    background-position: bottom left;
    display: grid;
    height: 100%;
    width: 100%;
    place-items: center;
/* background: -webkit-linear-gradient(left, blue, lightblue); */
}
::selection{
    background: greenyellow;
    color: #fff;
}
.wrapper{
    overflow: hidden;
    max-width: 390px;
    background: #fff;
    margin: 50px;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.logt {
    position: relative;
    text-align: center;
    box-shadow: 6px 10px #000;
    display: flex;
    width: 50%;
    /* border-right: 1rem solid; */
    font-size: 30px;
    padding: 5px;
    color: beige;
    background: -webkit-linear-gradient(left, Red, black);
}
.wrapper .title-text{
    display: flex;
    width: 200%;
}
.wrapper .title{
    width: 50%;
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
    position: relative;
    display: flex;
    height: 50px;
    width: 100%;
    overflow: hidden;
    margin: 30px 0 10px 0;
    justify-content: space-between;
    border: 1px solid lightgrey;
    border-radius: 5px;
}
.slide-controls .slide{
    height: 100%;
    width: 100%;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-align: center;
    line-height: 48px;
    cursor: pointer;
    z-index: 1;
    transition: all 0.6s ease;
}
.slide-controls label.signup{
color: #000;
}
.slide-controls .slider-tab{
    position: absolute;
    height: 100%;
    width: 50%;
    left: 0;
    z-index: 0;
    border-radius: 5px;
    background: -webkit-linear-gradient(left,rgb(0, 255, 85), rgba(0, 174, 243, 0.685));
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
    display: none;
}
#signup:checked ~ .slider-tab{
    left: 50%;
}
#signup:checked ~ label.signup{
    color: #fff;
    cursor: default;
    user-select: none;
}
#signup:checked ~ label.login{
    color: #000;
}
#login:checked ~ label.signup{
    color: #000;
}
#login:checked ~ label.login{
    cursor: default;
    user-select: none;
}
.wrapper .form-container{
    width: 100%;
    overflow: hidden;
}
.form-container .form-inner{
    display: flex;
    width: 200%;
}
.form-container .form-inner form{
    width: 50%;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
    height: 50px;
    width: 100%;
    margin-top: 20px;
}
.form-inner form .field input{
    height: 100%;
    width: 100%;
    outline: none;
    padding-left: 15px;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-bottom-width: 2px;
    font-size: 17px;
    transition: all 0.3s ease;
}
.form-inner form .field input:focus{
    border-color: #fc83bb;
/* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
    color: #999;
    transition: all 0.3s ease;
}
form .field input:focus::placeholder{
    color: #b3b3b3;
}
.form-inner form .pass-link{
    margin-top: 5px;
}
.form-inner form .signup-link{
    text-align: center;
    margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
    color: #fa4299;
    text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
    text-decoration: underline;
}
form .btn{
    height: 50px;
    width: 100%;
    border-radius: 5px;
    position: relative;
    overflow: hidden;
}
form .btn .btn-layer{
    height: 100%;
    width: 300%;
    position: absolute;
    left: -100%;
    background: -webkit-linear-gradient(right, rgb(4, 154, 255), rgb(37, 196, 245), rgb(36, 188, 248), rgb(4, 253, 241));
    border-radius: 5px;
    transition: all 0.4s ease;;
  }
form .btn:hover .btn-layer{
    left: 0;
 }
form .btn input[type="submit"]{
    height: 100%;
    width: 100%;
    z-index: 1;
    position: relative;
    background: none;
    border: none;
    color: #fff;
    padding-left: 0;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 500;
    cursor: pointer;
}
.admin  {
    text-align: center;
    color: red;
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
</head>
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
            <div class="wrapper">
                <div class="title-text">
                  <div class="logt">
                      Admin Login
                  </div>
                </div>
                <!-- <div class="form-container">
                    <div class="logt">

                    </div>
                    <div class="slide-controls">
                        <input type="radio" name="slide" id="login" checked>

                        <label for="login" class="slide login">Login</label>
        
                        <div class="slider-tab">      
                    </div>
                </div> -->
                <div class="form-inner">
                    <form action="#" class="login">
                            <div class="field">
                                <input type="text" placeholder="Email Address" required>
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password" required>
                            </div>
                            <div class="pass-link">
                                <a href="#">Forgot password?</a></div>
                            <div class="field btn">
                                <div class="btn-layer">
                                </div>
                                <input type="submit" value="Login" >
                            </div>
                            
                    </form>
                    
                </div>
            </div>
            </div>
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
        
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
</body>
</html>

@stop