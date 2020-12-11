<?php

class Subscription
{
    private Gateway $gateway;

    /**
     * Subscription constructor.
     * @param Gateway $gateway
     */
    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {
        return $this->gateway->findCustomer();
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

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeSubscriptionGateway implements Gateway
{

    public function findCustomer()
    {
       echo "Thanks for using Stripe";
    }

    public function findSubscriptionByCustomer()
    {

    }

}

class BrainTreeGateway implements Gateway
{

    public function findCustomer()
    {
        echo "Thanks for using BrainTree";
    }

    public function findSubscriptionByCustomer()
    {

    }

}

$subscribe = new Subscription(new BrainTreeGateway());