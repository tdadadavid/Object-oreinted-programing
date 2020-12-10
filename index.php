<?php


interface  Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        echo "Thanks for subscribing with us";
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        echo "Thanks for using Drip";
    }
}

class NewsLetterSubscriptionController
{
    public function store(Newsletter $newsletter)
    {
        $email = "davidtofunmidada@gmail.com";

        $newsletter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionController();

$controller->store(new Drip());