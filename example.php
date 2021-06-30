<?php

require 'vendor/autoload.php';

use AvalanchePay\Api\Amount;
use AvalanchePay\Api\Payer;
use AvalanchePay\Api\Payment;
use AvalanchePay\Api\RedirectUrls;
use AvalanchePay\Api\Transaction;

//Payer Object
$payer = new Payer();
$payer->setPaymentMethod('Default'); //leave as default if not sure which payment method to use.

//To enable autologin set autologin as enabled and provide user email, first name and last name
//example
/*  $payer = new Payer();
 *  $payer->setPaymentMethod('Default')
 *      ->setAutoLogin('Enabled')
 *      ->setUserEmail('test@gmail.com')
 *      ->setFirstName('John')
 *      ->setLastName('Doe');
 */

//Amount Object
$amountIns = new Amount();
$amountIns->setTotal(4.99)->setCurrency('USD'); //must give a valid currency code and must exist in merchant wallet list

//Transaction Object
$trans = new Transaction();
$trans->setAmount($amountIns);

//RedirectUrls Object
$urls = new RedirectUrls();
$urls->setSuccessUrl('http://your-merchant-domain.com/example-success.php') //success url - the merchant domain page, to redirect after successful payment, see sample example-success.php file in sdk root, example - http://techvill.net/paymoney_sdk/example-success.php

->setCancelUrl('http:/your-merchant-domain.com/'); //cancel url - the merchant domain page, to redirect after cancellation of payment, example -  http://techvill.net/paymoney_sdk/


//Payment Object
$payment = new Payment();
$payment->setCredentials([ //Client ID & Secret = Merchants->setting(gear icon)
    'client_id'     => 'place your client id here', //must provide correct client id of an express merchant
    'client_secret' => 'place your client secret here', //must provide correct client secret of an express merchant
])
->setRedirectUrls($urls)
->setPayer($payer)
->setTransaction($trans);

try {
    $payment->create(); //create payment
    header("Location: " . $payment->getApprovedUrl()); //checkout url
}
catch (\Exception $ex)
{
    print $ex;
    exit;
}
