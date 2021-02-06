<?php 
namespace AvalanchePay\Api;

use AvalanchePay\Common\PayMoneyModel;

/**
 * Class Transaction
 * @property \AvalanchePay\Api\Amount amount
 *
 */

class Transaction extends PayMoneyModel
{

    /**
     * @param \PayMoney\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}