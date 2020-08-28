<?php

namespace Console\App\Commands;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use Notification;



class NotificationCommand extends Command
{
    protected function configure()
    {
        $this->setName('purchase-notification')
            ->setDescription('Sends a notification to the customer when a purchase has been made.')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('client_id', InputArgument::REQUIRED, 'Pass the client id.');
             
            
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $notification = new Notification();
        $input = $input ->getArgument('client_id');
        
        $result = $notification->send_notification($input);
    }
}








?>