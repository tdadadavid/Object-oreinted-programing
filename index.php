<?php


//interface  Newsletter
//{
//    public function subscribe($email);
//}

class CampaignMonitor
{
    public function subscribe($email)
    {
        echo "Thanks for subscribing with us";
    }
}

class Drip
{
    public function subscribe($email)
    {
        echo "Thanks for using Drip";
    }
}

class NewsLetterSubscriptionController
{
    public function store($newsletter)
    {
        $email = "davidtofunmidada@gmail.com";

        $newsletter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionController();

$controller->store(new CampaignMonitor());