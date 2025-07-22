<?php
$apiKey = "rzp_live_ZK1sC0aZUadGpt";
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<form action="" method="post">
    <script 
    src="https://checkout.rozorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey ?>"
    data-amount="<?php echo $_POST['amount'] * 100; ?>"
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext = "pay with rozorpay"
    data-name = "GARRAJ CAKES & PASTRIES"
    data-description="Online Cake Shop"
    data-image="https://traidev.com/img/web-desigin-development.png"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#0e90e4">
    </script>
    <input type="hidden" name="hidden" custom="hidden element">
</form>