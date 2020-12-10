<?php

class CampaignMonitor
{
    public function subscribe()
    {
        echo "Thanks for subscribing with us";
    }
}

class Drip
{
    public function subscribe()
    {
        echo "Thanks for using Drip";
    }
}

class NewsLetterSubscriptionController
{
    public function store(CampaignMonitor $newsletter)
    {
        $email = "davidtofunmidada@gmail.com";

        $newsletter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionController();

$controller->store(new Drip());