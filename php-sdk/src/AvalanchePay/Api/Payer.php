<?php
namespace AvalanchePay\Api;

use AvalanchePay\Common\PayMoneyModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends PayMoneyModel
{

    /**
     * Valid Values: ["Avalanchepay"]
     * method will be like MastercardPaymentGateway, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    
    public function setUserEmail($email)
    {
        $this->userEmail = $email;
        return $this;
    }

    public function getUserEmail()
    {
        return $this->userEmail;
    }
    
    public function setFirstName($name)
    {
        $this->firstName = $name;
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function setLastName($name)
    {
        $this->lastName = $name;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function setAutoLogin($autologin)
    {
        $this->autoLogin = $autologin;
        return $this;
    }

    public function getAutoLogin()
    {
        return $this->autoLogin;
    }

}
