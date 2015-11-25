<!DOCTYPE html>
<html lang="en">
<head>
    <script src="/give/ui/js/jquery.js" type="text/javascript"></script>
</head>
<body>

    <form action="https://testsecureacceptance.cybersource.com/pay" method="post" style="display:none;">

    <?php include 'security.php';

    foreach($_POST as $key=>$val){
        echo "<input type='hidden' name='{$key}' value='{$val}' />";
    }
    $params = $_POST;
    echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";
    ?>
    <pre><?php print_r($params) ?></pre>

    <button type="submit">Send</button>

    </form>

    <script type="text/javascript">

    jQuery(function($){
        $(document).ready(function(){
            $('form').submit();
        });
    });

    </script>

</body>
</html>
