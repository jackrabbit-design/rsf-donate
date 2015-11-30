<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="MSSmartTagsPreventParsing" content="true" /><!--[if lte IE 9]><meta http-equiv="X-UA-Compatible" content="IE=Edge"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Review Donation | Red Sox Foundation</title>
	<link type="text/css" rel="stylesheet" media="all" href="/give/ui/css/style.css" />
    <link type="text/plain" rel="author" href="authors.txt" />
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
    <script src="/give/ui/js/modernizr.js"></script>
    <script src="/give/ui/js/jquery.js" type="text/javascript"></script>
    <script src="/give/ui/js/jquery-ui.min.js" type="text/javascript"></script>
</head>
<body>
    <!--[if lte IE 7]><iframe src="unsupported.html" frameborder="0" scrolling="no" id="no_ie6"></iframe><![endif]-->

    <!-- <div style="position:absolute; width:100%; height:100%; top:0; left:0; background:url(over.jpg) no-repeat center top; z-index:9999; pointer-events:none; opacity:0.3">

    </div> -->

    <?php
    foreach($_POST as $key=>$val){
        $$key = $val;
    }

    $signed = '';
    $unsigned = '';
?>

    <a href="https://www.redsoxfoundation.org" id="logo">
        <img src="/give/ui/images/logo.png" alt="">
    </a>

    <h1>Make a Donation</h1>

    <section id="main">

        <h3>Confirm Donation</h3>
        <p>Please review the following information for accuracy:</p>

        <form id="donate-review" action="send.php" method="post">

            <ul id="review">
                <?php if($fname){ ?>
                    <li>
                        <span>First Name</span>
                        <p><?php echo ucfirst($fname) ?></p>
                        <input type="hidden" name="bill_to_forename" value="<?php echo ucfirst($fname) ?>" />
                        <?php $unsigned .= 'bill_to_forename,'; ?>
                    </li>
                <?php } if($lname){ ?>
                    <li>
                        <span>Last Name</span>
                        <p><?php echo ucfirst($lname) ?></p>
                        <input type="hidden" name="bill_to_surname" value="<?php echo ucfirst($lname) ?>" />
                        <?php $unsigned .= 'bill_to_surname,' ?>
                    </li>
                <?php } if($email){ ?>
                    <li>
                        <span>Email Address</span>
                        <p><?php echo $email ?></p>
                        <input type="hidden" name="bill_to_email" value="<?php echo $email ?>" />
                        <?php $unsigned .= 'bill_to_email,' ?>
                    </li>
                <?php } if($phone){ ?>
                    <li>
                        <span>Phone Number</span>
                        <p><?php echo $phone ?></p>
                        <input type="hidden" name="bill_to_phone" value="<?php echo $phone ?>" />
                        <?php $unsigned .= 'bill_to_phone,' ?>
                    </li>
                <?php } if($programevent){ ?>
                    <li>
                        <span>Program/Event</span>
                        <p>
                            <?php if($programevent != 'Other'){
                                switch($programevent){
                                    case '690':         echo 'General RSF Programs'; break;
                                    case 'RBI':        echo 'RBI/Rookie Inner City Youth Baseball'; break;
                                    case 'Scholars':   echo 'Red Sox Scholars Program'; break;
                                    case '960':        echo 'Lucchino/SoulCycle'; break;
                                } ?>
                                <input type="hidden" name="merchant_defined_data1" value="<?php echo $programevent ?>" />
                            <?php }else{ ?>
                                Other - <?php echo ucwords($other); ?>
                                <input type="hidden" name="merchant_defined_data1" value="Other - <?php echo ucwords($other); ?>" />
                            <?php } ?>
                            <?php $unsigned .= 'merchant_defined_data1,' ?>
                        </p>
                    </li>
                <?php } if($honor){ ?>
                    <li>
                        <span>Is this donation in honor or in memory of someone?</span>
                        <p>
                            <?php if($honor == 'no'){
                                echo 'No';
                            }else{
                                $honorOf = 'In ' . ucfirst($honor) . ' Of ';
                                echo $honorOf;
                                $recipient = '';
                            } ?>
                        </p>
                    </li>
                <?php } if($honor != 'no'){ ?>
                    <?php } if($honorname){ ?>
                        <li>
                            <span>In <?php echo ucfirst($honor) ?> Of</span>
                            <p><?php echo $honorname;
                                $honorOf .= $honorname; ?></p>
                        </li>
                    <?php } if($donatedby){ ?>
                        <li>
                            <span>Donated By</span>
                            <p><?php echo ucwords($donatedby);
                                $honorOf .= ', Donated By ' . ucwords($donatedby); ?></p>
                        </li>
                    <?php } if($donatedname){ ?>
                        <li>
                            <span>Recipient Name</span>
                            <p><?php echo ucwords($donatedname);
                                $recipient .= ucwords($donatedname); ?></p>
                        </li>
                    <?php } if($donatedaddress){ ?>
                        <li>
                            <span>Recipient Address</span>
                            <p><?php echo ucwords($donatedaddress);
                                $recipient .= ', ' . ucwords($donatedaddress); ?></p>
                        </li>
                    <?php } if($donatedaddress2){ ?>
                        <li>
                            <span>Recipient Address 2</span>
                            <p><?php echo ucwords($donatedaddress2);
                                $recipient .= ', ' . ucwords($donatedaddress2); ?></p>
                        </li>
                    <?php } if($donatedcity){ ?>
                        <li>
                            <span>Recipient City</span>
                            <p><?php echo ucwords($donatedcity);
                                $recipient .= ', ' . ucwords($donatedcity) ?></p>
                        </li>
                    <?php } if($donatedstate){ ?>
                        <li>
                            <span>Recipient State</span>
                            <p><?php echo $donatedstate;
                                $recipient .= ', ' . $donatedstate; ?></p>
                        </li>
                <?php }if($type){ ?>
                    <li>
                        <span>Join Foundation Nation?</span>
                        <p><?php echo ucfirst($type); ?></p>
                        <input type="hidden" name="merchant_defined_data3" value="Privacy Option: <?php echo $type ?>" />
                        <?php $unsigned .= 'merchant_defined_data3,' ?>
                    </li>
                <?php } ?>
                <li>
                    <span>Donation Type</span>
                    <p><?php if($recurring){
                            echo 'Recurring Donation';
                            $ttype = 'authorization,create_payment_token';
                        }else{
                            echo 'One-Time Donation';
                            $ttype = 'sale';
                        } ?></p>
                </li>
                <?php if($recurring){ // if recurring donation ?>
                    <li>
                        <span>Donation Installment Amount</span>
                        <p>$<?php echo $installmentamt ?></p>
                        <input type="hidden" name="recurring_amount" value="<?php echo $installmentamt ?>" />
                        <?php $signed .= 'recurring_amount,' ?>
                        <input type="hidden" name="amount" value="0" />
                        <?php $signed .= 'amount,' ?>
                    </li>
                    <li>
                        <span>Frequency of Donations</span>
                        <p><?php echo ucwords($frequency) ?></p>
                        <input type="hidden" name="recurring_frequency" value="<?php echo $frequency ?>" />
                        <?php $signed .= 'recurring_frequency,' ?>
                    </li>
                    <li>
                        <span>Date of First Donation</span>
                        <p><?php echo $startdate;
                                $start_old = strtotime($startdate);
                                $ca_startdate = date('Ymd',$start_old);
                                ?></p>
                        <input type="hidden" name="recurring_start_date" value="<?php echo $ca_startdate ?>" />
                        <?php $signed .= 'recurring_start_date,' ?>
                    </li>
                    <li>
                        <span>Number of Installments</span>
                        <?php switch($frequency){
                            case 'bi-weekly':
                                if($installments > 130) {
                                    $installments = 130;
                                    $max = true;
                                }
                            break;
                            case 'monthly':
                                if($installments > 60){
                                    $installments = 60;
                                    $max = true;
                                }
                            break;
                            case 'quarterly':
                                if($installments > 20){
                                    $installments = 20;
                                    $max = true;
                                }
                            break;
                            case 'annually':
                                if($installments > 5){
                                    $installments = 5;
                                    $max=true;
                                }
                            break;
                        }; ?>
                        <p><?php echo $installments . ($max ? ' (maximum)' : ''); ?></p>
                        <input type="hidden" name="recurring_number_of_installments" value="<?php echo $installments ?>" />
                        <?php $signed .= 'recurring_number_of_installments,' ?>
                    </li>
                    <!--<li>
                        <span>Recurring Donation Recap</span>
                        <?php $total = $installments * $installmentamt; ?>
                        <p>Based on your donation, you will be making <b><?php echo $installments . ' ' . $frequency ?></b> payments <?php echo ($max ? '(maximum)' : ''); ?> of <b>$<?php echo $installmentamt; ?></b>, for a total of <b>$<?php echo $total; ?></b></p>
                        <?php $recap = "Based on your donation, you will be making {$installments} {$frequency} payments " . ($max ? '(maximum)' : '') . " of \${$installmentamt}, for a total of \${$total}"; ?>
                        <input type="hidden" name="merchant_defined_data6" value="<?php echo $recap ?>" />
                        <?php $unsigned .= 'merchant_defined_data6,' ?>
                    </li>-->
                    <input type="hidden" name="merchant_defined_data6" value="<?php echo $recap ?>" />
                <?php }else{ // if one-time donation ?>
                    <li>
                        <span>One-Time Donation Amount</span>
                        <p>$<?php echo $donationamt ?></p>
                        <input type="hidden" name="amount" value="<?php echo $donationamt ?>" />
                        <?php $signed .= 'amount,' ?>
                    </li>
                <?php } if($shirtsize){ ?>
                    <li>
                        <span>T-Shirt Size</span>
                        <p><?php echo $shirtsize ?></p>
                        <input type="hidden" name="merchant_defined_data5" value="Shirt Size: <?php echo $shirtsize; ?>" />
                        <?php $unsigned .= 'merchant_defined_data5,' ?>
                    </li>
                <?php } ?>

            </ul>

            <?php if($recurring){ ?>
                <input type="checkbox" id="agree" name="merchant_defined_data_7" title="Please accept these terms." /><label for="agree">I understand that I will be making <b><?php echo $installments . ' ' . $frequency ?></b> payments <?php echo ($max ? '(maximum)' : ''); ?> of <b>$<?php echo $installmentamt; ?></b>, for a total of <b>$<?php echo $total; ?></b>. I also understand that on the following payment page, the total amount will read "$0.00"</label>
                <?php $unsigned .= 'merchant_defined_data_7,' ?>
            <?php } ?>

            <?php if($recipient && $recipient != ''){?>
                <input type="hidden" name="payment_token_comments" value="Recipient: <?php echo $recipient; ?>" />
                <input type="hidden" name="merchant_defined_data4" value="Recipient: <?php echo $recipient; ?>" />
                <?php $unsigned .= 'payment_token_comments,merchant_defined_data4,' ?>
            <?php } ?>
            <?php if($honorOf && $honorOf != ''){ ?>
                <input type="hidden" name="merchant_defined_data2" value="<?php echo $honorOf; ?>" />
                <?php $unsigned .= 'merchant_defined_data2,' ?>
            <?php } ?>

            <input type="hidden" name="reference_number" value="GIVE<?php echo date('ymdhis') . rand(10,99) ?>"><!-- done -->
            <input type="hidden" name="access_key" value="ac545f586dc432ecadb0ab604a1af937"><!-- done -->
            <input type="hidden" name="profile_id" value="4A687D2A-9B94-455A-8BBE-CFFE12BE12F7"><!-- done -->
            <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
            <input type="hidden" name="signed_field_names" value="<?php echo $signed ?>currency,access_key,profile_id,transaction_uuid,signed_date_time,locale,transaction_type,reference_number,signed_field_names,unsigned_field_names">
            <input type="hidden" name="unsigned_field_names" value="<?php echo $unsigned ?>signature">
            <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
            <input type="hidden" name="locale" value="en">
            <input type="hidden" name="currency" value="USD">
            <input type="hidden" name="transaction_type" value="<?php echo $ttype ?>">
            <button type="submit">Proceed to Payment<span></span></button>
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
