<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="MSSmartTagsPreventParsing" content="true" /><!--[if lte IE 9]><meta http-equiv="X-UA-Compatible" content="IE=Edge"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Make a Donation | Red Sox Foundation</title>
	<link type="text/css" rel="stylesheet" media="all" href="/give/ui/css/style.css" />
    <link type="text/plain" rel="author" href="authors.txt" />
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
    <script src="/give/ui/js/modernizr.js"></script>
    <script src="/give/ui/js/jquery.js" type="text/javascript"></script>
    <script src="/give/ui/js/jquery-ui.min.js" type="text/javascript"></script>
    <style>
        /*.hide { display:block !important; }*/
    </style>
</head>
<body>
    <!--[if lte IE 7]><iframe src="unsupported.html" frameborder="0" scrolling="no" id="no_ie6"></iframe><![endif]-->

    <!-- <div style="position:absolute; width:100%; height:100%; top:0; left:0; background:url(over.jpg) no-repeat center top; z-index:9999; pointer-events:none; opacity:0.3">

    </div> -->

    <a href="https://www.redsoxfoundation.org" id="logo">
        <img src="/give/ui/images/logo.png" alt="">
    </a>

    <h1>Make a Donation</h1>

    <section id="main">
        <p class="header">We are very grateful for the generous support of thousands of fans who make the Red Sox Foundation the best team charity in all of baseball. Through your donations, we can help open the doors of opportunity for children and families through terrific nonprofit partnerships that are vital health, recreational, educational and social service programs.</p>

        <form action="./review/" method="post" id="donate" class="clearfix">
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
                <input id="phone" name="phone" type="text" />
            </div>
            <div class="field half left">
                <label for="programevent">Program/Event</label>
                <span class="select-menu">
                    <select name="programevent" id="programevent">
                        <option value="690"<?php if($source == ''){ ?> selected="selected"<?php } ?>>General RSF Programs</option>
                        <option value="RBI">RBI/Rookie Inner City Youth Baseball</option>
                        <option value="Scholars">Red Sox Scholars Program</option>
                        <option value="960">Lucchino/SoulCycle</option>
<!--                         		<option value="MassBioTechDerby">Home Run Derby</option> -->
                        <option value="Other">Other (please specify)</option>
                    </select>
                </span>
            </div>
            <div class="field half right hide other">
                <label for="other">Other Program</label>
                <input id="other" name="other" type="text" />
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
                        <option value="" selected="selected">Select A State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </span>
            </div>
            <hr />
            <div class="field floaty clearfix">
                <label>Donation Type (required)</label>
                <input type="radio" name="type" value="yes" id="publish" checked />
                <label for="publish">Yes, I would like to join the Red Sox Foundation Nation and you may publish my name.</label>
                <input type="radio" name="type" value="no" id="anonymous" />
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
                    <div class="tooltip">?<span>The frequency of donations between your start and end date.<br/><br/>
                        <strong>Bi-Weekly:</strong> Every two weeks<br/>
                        <strong>Monthly:</strong> Once per month<br/>
                        <strong>Quarterly:</strong> Once per quarter<br/>
                        <strong>Annually:</strong> Once per year
                    </span></div>
                </label>
                <span class="select-menu">
                    <select name="frequency" id="frequency">
                        <option value="">Select Frequency</option>
                        <!-- <option value="semi-monthly">Semi-Monthly</option> -->
                        <option value="bi-weekly">Bi-Weekly</option>
                        <option value="monthly">Monthly</option>
                        <option value="quarterly">Quarterly</option>
                        <option value="annually">Annually</option>
                    </select>
                </span>
            </div>
            <div class="field floaty clearfix hide recuryes">
                <label for="startdate" class="short">
                    <div class="tooltip">?<span>The date that the first donation will be charged. <strong>Please note, the charge on the checkout screen will display $0.</strong>
                    </span></div>
                    Date of First Donation
                </label>
                <input name="startdate" type="text" class="date" id="startdate" />
                <span></span>
            </div>
            <div class="field floaty clearfix hide recuryes">
                <!-- <label for="enddate" class="short">
                    <div class="tooltip">?<span>The date that the first donation will be charged.</span></div>
                    Date of Last Donation
                </label>
                <input name="enddate" type="text" class="date" id="enddate" /> -->
                <label for="installments" class="short">
                    <div class="tooltip">?<span>The total amount of recurring donations. Maximum values for each frequency are listed below.<br/><br/>
                        <strong>Bi-Weekly:</strong> 130<br/>
                        <strong>Monthly:</strong> 60<br/>
                        <strong>Quarterly:</strong> 20<br/>
                        <strong>Annually:</strong> 5
                    </span></div>
                    Number of Installments
                </label>
                <input name="installments" type="text" id="installments" />
                <span></span>
            </div>
            <hr class="hide shirt" />
            <div class="field floaty clearfix hide shirt">
                <label for="shirtsize" class="short">
                    <div class="tooltip">?<span>Each $50 or more general donation includes a black tri-blend t-shirt exclusively worn by Red Sox players and coaching/training staff! <br/><strong>Note: Limit one T-shirt per person regardless of number of donation transaction during promotion.</strong></span></div>
                    T-Shirt Size <a href="ui/images/tshirt.jpg" class="popup">(view)</a>
                </label>
                <span class="select-menu">
                    <select name="shirtsize" id="shirtsize">
                        <option value="">Choose a Size</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
                </span>
            </div>
            <hr/>
            <button type="submit">Next <span></span></button>
            <button type="reset">Cancel</button>

        </form>

    </section>
    <footer id="footer">
        <a href="https://www.redsoxfoundation.org" id="logo">
            <img src="/give/ui/images/logo.png" alt="">
        </a>
        <h2>
            <small>HARNESSING THE PASSION OF</small>
            RED SOX NATION
        </h2>
        <a href="https://www.redsoxfoundation.org/about/our-mission" class="mission">View Our Mission</a>
    </footer>

    <script src="/give/ui/js/jquery.plugins.js" type="text/javascript"></script>
    <script src="/give/ui/js/jquery.init.js" type="text/javascript"></script>
</body>
</html>
