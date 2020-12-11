<?php

class Subscription
{
    private StripeSubscriptionGateway $gateway;

    /**
     * Subscription constructor.
     * @param StripeSubscriptionGateway $gateway
     */
    public function __construct(StripeSubscriptionGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {
       $customers =  $this->gateway->findStripeCustomer();
    }

    public function cancel()
    {

    }

    public function invoice()
    {

    }

    public function changePlan($newPlan)
    {

    }
}

class StripeSubscriptionGateway
{

    public function findStripeCustomer()
    {

    }

    public function findStripeSubscriptionByCustomer()
    {

    }

}