
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>

        input[type=text], select, textarea {
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
                background-color: #45a049;
            }

        .container {
            border-radius: 5px;
            background-color: transparent;
            padding: 20px;
        }

        body, html {
            height: 100%;
            margin: 0;
            font: 400 15px/1.8 "Lato", sans-serif;
            color: #777;
        }

        #navbar {
            position: fixed;
            overflow: hidden;
            background-color: #333;
            top: 0;
            width: 100%;
        }

            #navbar a {
                float: right;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

                #navbar a:hover {
                    background-color: #ddd;
                    color: black;
                }

                #navbar a.active {
                    background-color: #4CAF50;
                    color: white;
                }

        .content {
            padding: 16px;
        }

        .bgimg-1, .bgimg-2, .bgimg-3 {
            position: relative;
            opacity: 0.65;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bgimg-1 {
            background-image: url("BG1.jpg");
            min-height: 100%;
        }

        .bgimg-2 {
            background-image: url("BG2.jpg");
            min-height: 400px;
        }

        .bgimg-3 {
            background-image: url("BG3.jpg");
            min-height: 400px;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 20%;
            width: 100%;
            text-align: center;
            color: #000;
        }

            .caption span.border {
                text-align:center;
                background-color: transparent;
                font-family:Impact;
                color: rgb(0,0,0);
                padding: 10px;
                font-size: 75px;
                letter-spacing: 2px;
            }

        h3 {
            letter-spacing: 5px;
            text-transform: uppercase;
            font: 20px "Lato", sans-serif;
            color: #111;
        }

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }
        }
    </style>
</head>
<body>

    <div class="bgimg-1">
        <div class="caption">
            <span class="border">PLAN YOUR ADVENTURE</span>
        </div>
    </div>

    <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Our products</h3>
        <p>The quality products we supply are made from polyester on the inside and outside and is finished in some attractive colors. Its features are: very Lite in weight backpack with spacious compartments, soft shell, zipper closure, shoulder strap and is targeted towards both the genders to be used during day trips. Volume capacity of the bag is around 35l and it is water resistant. Most of the bags contain minimum 2 large zipper compartments and an external water bottle pouch. Most of the bags have warranty up to 1 year. </p>
    </div>

    <div class="bgimg-2">
        <div class="caption">
            <!--<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Lorem ipsum dolor sit amet</span>-->
        </div>
    </div>

    <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <h1>Now selling</h1>

            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-10 mx-auto" src="backpack.jpg" alt="First slide">
                            <p style="text-align:center; font-family:verdant; font-size:35px;">Back Pack<br><button style="text-align:center;" type="button" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#exampleModal">
    BUY NOW
</button></p>
                            
</div>
                        <div class="carousel-item">
                            <img class="d-block w-10 mx-auto" src="dufflebag.jpg" alt="Second slide">
                            <p style="text-align:center; font-family:verdant; font-size:35px;">Duffle Bag<br><button type="button" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#exampleModal">
    BUY NOW
</button></p>
                            
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-10 mx-auto" src="tote.jpg" alt="Third slide">
                            <p style="text-align:center; font-family:verdant; font-size:35px;">Travel Tote<br><button style="text-align:center;" type="button" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#exampleModal">
    BUY NOW
</button></p>
                            >
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

        </div>
    </div>

    <div class="bgimg-3">
        <div class="caption">
            <span class="border"style="background-color:transparent;font-size:50px;color: #000;">About Us<br></span>
			<span style="background-color:transparent;font-size:25px;color: #000;">Our store is located in Bangalore and we intend to sell travel bags and other travel accessories across the globe. Currenty we provide our services in India, Bangladesh and Sri-lanka.</span>
			<p></p>
    
        </div>
    </div>

    <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <h1 style="text-align:center;">Contact Us</h1>
        </div>
    </div>

    <div class="bgimg-1">
        <div class="caption">
            <!--<span class="border">Contact Us</span>-->
        </div>
        <div class="container">
            <form action="contact.php" method="post">
                <label for="fname" style="color:black;">Full Name</label>
                <input type="text" id="fname" name="fname" placeholder="Your name..">

                <label for="email" style="color:black;">Email address</label>
                <input type="text" id="email" name="email" placeholder="Your Email address..">

                <label for="country" style="color:black;">Country</label>
                <select id="country" name="country">
                    <option value="australia">India</option>
                    <option value="canada">Bangladesh</option>
                    <option value="usa">Sri-Lanka</option>
                </select>

                <label for="subject" style="color:black;">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
		 </div>
    </div>

    <div id="navbar">
        <a href="javascript:void(0)">Contact us</a>
        <a href="javascript:void(0)">Shop</a>
        <a href="javascript:void(0">About us</a>
        <a href="#">Home</a>
    </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enter your details here.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="order.php" method="post">
                            <div class="form-group">
                                <label for="product" class="col-form-label">Product</label>
                                <select id="product" name="product" class="form-control">
                                    <option value="Back Pack">Back Pack</option>
                                    <option value="Duffle Bag">Duffle Bag</option>
                                    <option value="Travel Tote">Travel tote</option>                       
                                </select>
								<label for="fname" class="col-form-label">Full Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your full name..">
								
								<label for="email" class="col-form-label">Email Address</label>
                                <textarea class="form-control" id="email" name="email" placeholder="Enter your E-mail.."></textarea>
								
								<label for="phone" class="col-form-label">Phone Number</label>
                                <textarea class="form-control" id="phone" name="phone" placeholder="Enter your phone number.."></textarea>
								
								 <input type="submit" value="Submit">
								 <!--
								 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								 <button type="button" class="btn btn-primary">Submit</button>
								 -->
                            </div>
                            <div class="form-group">
                                </div>
                            <div class="form-group">
                                </div>
                            <div class="form-group">
                                </div>
							<div class="modal-footer">
								
							</div>
                        </form>
                    </div>
                    >
                </div>
            </div>
        </div>

</body>

<script>
    $('.carousel').carousel();
</script>
</html>