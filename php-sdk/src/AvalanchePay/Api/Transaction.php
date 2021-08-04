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
    
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
        return $this;
    }

    public function getOrderId()
    {
        return $this->order_id;
    }
}