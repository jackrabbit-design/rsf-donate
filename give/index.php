<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="MSSmartTagsPreventParsing" content="true" /><!--[if lte IE 9]><meta http-equiv="X-UA-Compatible" content="IE=Edge"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Title</title>
	<link type="text/css" rel="stylesheet" media="all" href="ui/css/style.css" />
    <link type="text/plain" rel="author" href="authors.txt" />
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
    <script src="ui/js/modernizr.js"></script>
    <script src="ui/js/jquery.js" type="text/javascript"></script>
    <script src="ui/js/jquery-ui.min.js" type="text/javascript"></script>
</head>
<body>
    <!--[if lte IE 7]><iframe src="unsupported.html" frameborder="0" scrolling="no" id="no_ie6"></iframe><![endif]-->

    <!-- <div style="position:absolute; width:100%; height:100%; top:0; left:0; background:url(over.jpg) no-repeat center top; z-index:9999; pointer-events:none; opacity:0.3">

    </div> -->

    <a href="https://www.redsoxfoundation.org" id="logo">
        <img src="ui/images/logo.png" alt="">
    </a>

    <h1>Make a Donation</h1>

    <section id="main">
        <p class="header">Nunc eget arcu sed quam fringilla hendrerit malesuada cursus ante. Vivamus maximus imperdiet mollis. Nulla facilisi. Vivamus tristique molestie euismod. Nulla leo velit, vulputate vel lacus non.</p>

        <form action="review.html" id="donate" class="clearfix">
            <div class="field half left">
                <label for="fname">First Name</label>
                <input id="fname" name="fname" type="text" />
            </div>
            <div class="field half right">
                <label for="lname">Last Name</label>
                <input id="lname" name="lname" type="text" />
            </div>
            <div class="field half left">
                <label for="email">Email Address</label>
                <input id="email" name="email" type="email" />
            </div>
            <div class="field half right">
                <label for="phone">Phone Number (xxx-xxx-xxxx)</label>
                <input id="phome" name="phone" type="text" />
            </div>
            <div class="field half left">
                <label  id="programevent" for="programevent">Program/Event</label>
                <span class="select-menu">
                    <select name="programevent">
                        <option value="general">General RSF Programs</option>
                        <option value="general">General RSF Programs</option>
                        <option value="general">General RSF Programs</option>
                        <option value="general">General RSF Programs</option>
                    </select>
                </span>
            </div>
            <hr/>

            <div class="field floaty clearfix">
                <label for="honor">Is this donation in honor or in memory of someone?</label>
                <span class="select-menu">
                    <select name="honor" id="honor">
                        <option value="no">No</option>
                        <option value="honor">In Honor Of</option>
                        <option value="memory">In Memory Of</option>
                    </select>
                </span>
            </div>
            <div class="field floaty clearfix honor hide">
                <label for="honorname" class="short">In <span></span> of Name</label>
                <input id="honorname" name="honorname" type="text" />
            </div>
            <div class="field floaty clearfix honor hide">
                <label for="donatedby" class="short">Donated By</label>
                <input id="donatedby" name="donatedby" type="text" />
            </div>
            <hr class="honor hide" />
            <p class="honormem honor hide">If your gift is in honor or memory of someone, please indicate the name and mailing address of the person or family member who should receive the Red Sox Foundation’s acknowledgment letter, letting them know of the generous donation you made in their honor. <b>Please note that we cannot notify someone of your donation without this information.</b></p>
            <div class="field half honor hide">
                <label for="donatedname">Name</label>
                <input type="text" name="donatedname" id="donatedname">
            </div>
            <div class="field honor hide">
                <label for="donatedaddress">Address</label>
                <input type="text" name="donatedaddress" id="donatedaddress">
            </div>
            <div class="field honor hide">
                <label for="donatedaddress2">Address 2</label>
                <input type="text" id="donatedaddress2" name="donatedaddress2">
            </div>
            <div class="field half left honor hide">
                <label for="donatedcity">City</label>
                <input type="text" name="donatedcity" id="donatedcity">
            </div>
            <div class="field half right honor hide">
                <label for="donatedstate">State</label>
                <span class="select-menu">
                    <select name="donatedstate" id="donatedstate">
                        <option value="general">Massachusetts</option>
                        <option value="general">General RSF Programs</option>
                        <option value="general">General RSF Programs</option>
                        <option value="general">General RSF Programs</option>
                    </select>
                </span>
            </div>
            <hr />
            <div class="field floaty clearfix">
                <label>Donation Type (required)</label>
                <input type="radio" name="type" id="publish" checked />
                <label for="publish">Yes, I would like to join the Red Sox Foundation Nation and you may publish my name.</label>
                <input type="radio" name="type" id="anonymous" />
                <label for="anonymous">Please accept my anonymous donation.</label>
            </div>
            <hr />
            <div class="field floaty clearfix">
                <label for="recurring">Would you like to make this a recurring donation?</label>
                <input type="checkbox" id="recurring" name="recurring" class="toggle" />
                <label for="recurring" class="toggler"><span></span></label>
            </div>
            <div class="field floaty clearfix recurno">
                <label for="donationamt" class="short">One-Time Donation Amount</label>
                <input name="donationamt" id="donationamt" type="text" class="amt" />
            </div>
            <div class="field floaty clearfix hide recuryes">
                <label for="installmentamt" class="short">
                    <div class="tooltip">?<span>The amount that will be donated in each installment.</span></div>
                    Donation Installment Amount
                </label>
                <input name="installmentamt" id="installmentamt" type="text" class="amt" />
            </div>
            <div class="field floaty clearfix hide recuryes">
                <label for="frequency" class="short">
                    Frequency of Donations
                    <div class="tooltip">?<span>The frequency of donations between your start and end date.</span></div>
                </label>
                <span class="select-menu">
                    <select name="frequency" id="frequency">
                        <option value="">Select Frequency</option>
                        <option value="general">General RSF Programs</option>
                        <option value="general">General RSF Programs</option>
                        <option value="general">General RSF Programs</option>
                    </select>
                </span>
            </div>
            <div class="field floaty clearfix hide recuryes">
                <label for="startdate" class="short">
                    <div class="tooltip">?<span>The date that the first donation will be charged.</span></div>
                    Date of First Donation
                </label>
                <input name="startdate" type="text" class="date" id="startdate" />
                <span></span>
            </div>
            <div class="field floaty clearfix hide recuryes">
                <label for="enddate" class="short">
                    <div class="tooltip">?<span>The date that the first donation will be charged.</span></div>
                    Date of Last Donation
                </label>
                <input name="enddate" type="text" class="date" id="enddate" />
                <span></span>
            </div>
            <hr />
            <button type="submit">Next <span></span></button>
            <button type="reset">Cancel</button>

        </form>

    </section>
    <footer id="footer">
        <a href="https://www.redsoxfoundation.org" id="logo">
            <img src="ui/images/logo.png" alt="">
        </a>
        <h2>
            <small>HARNESSING THE PASSION OF</small>
            RED SOX NATION
        </h2>
        <a href="#" class="mission">View Our Mission</a>
    </footer>

    <script src="ui/js/jquery.plugins.js" type="text/javascript"></script>
    <script src="ui/js/jquery.init.js" type="text/javascript"></script>
</body>
</html>
