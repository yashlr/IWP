
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/Custom2.css.css" type="text/css" rel="stylesheet">
    <style>



        textarea {
            resize: none;
        }
        .form-label {
            font-size: 12px;
            color: #5e9bfc;
            margin: 0;
            display: block;
            opacity: 1;
            -webkit-transition: .333s ease top, .333s ease opacity;
            transition: .333s ease top, .333s ease opacity;
        }
        .form-control {
            border-radius: 0;
            border-color: #ccc;
            border-width: 0 0 2px 0;
            border-style: none none solid none;
            box-shadow: none;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #5e9bfc;
        }
        .js-hide-label {
            opacity: 0;
        }
        .js-unhighlight-label {
            color: #999
        }
        .btn-start-order {
            background: 0 0 #ffffff;
            border: 1px solid #2f323a;
            border-radius: 3px;
            color: #2f323a;
            font-family: "Raleway", sans-serif;
            font-size: 16px;
            line-height: inherit;
            margin: 30px 0;
            padding: 10px 50px;
            text-transform: uppercase;
            transition: all 0.25s ease 0s;
        }
        .btn-start-order:hover,.btn-start-order:active, .btn-start-order:focus {
            border-color: #5e9bfc;
            color: #5e9bfc;
        }
        .form-shift{
            margin-left: 300px;
            margin-top: 10vh;
        }
        .Billheading{

            margin-bottom : 50px;
            margin-left : -20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        
    </div>
    <div class="row">
    
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 form-shift">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 text-left Billheading">
            <h2>Billing Address</h2>
        </div>
            <form id="contact-form" class="form" action="#" method="POST" role="form">
                <div class="form-group"> 
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1" required>
                </div>
                <div class="form-group"> 
                    <input type="text" class="form-control" id="name" name="name" placeholder="Email Address" tabindex="1" required>
                </div>
                <div class="form-group"> 
                    <input type="text" class="form-control" id="name" name="name" placeholder="Mobile Number" tabindex="1" required>
                </div>
                <div class="form-group"> 
                    <Label>Plans </Label></br>
                    <select id="cars" name="cars">
                        <option value="volvo">Regular</option>
                        <option value="saab">Team</option>
                        <option value="fiat">Enterprise</option>
                    
                    </select>
                </div>
                <div class="form-group"> 
                    <Label>Price </Label></br>
                    <select id="cars" name="cars">
                        <option value="volvo">$2300</option>
                        <option value="saab">$6000</option>
                        <option value="fiat">$9000</option>
                    
                    </select>
                </div>
                <div class="form-group"> 
                    <input type="text" class="form-control" id="name" name="name" placeholder="Address" tabindex="1" required>
                </div>
                <div class="form-group"> 
                    <input type="text" class="form-control" id="name" name="name" placeholder="Country" tabindex="1" required>
                </div>
                <div class="form-group"> 
                    <input type="text" class="form-control" id="name" name="name" placeholder="State" tabindex="1" required>
                </div>
                <div class="form-group"> 
                    <input type="text" class="form-control" id="name" name="name" placeholder="Zip-Code" tabindex="1" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-start-order" href="Checkout.php">Proceed To Checkout</button>
                </div>
                </div>

            </form>
        </div>
        
    </div>
</div>

</body>
</html>