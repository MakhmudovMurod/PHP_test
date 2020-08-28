<?php
include "../config/db.php";

declare (strict_types=1);

namespace Notification;

class Notification
{

    public function send_notification($customer_id)
    {
        $email_query = mysqli_query("SELECT email FROM clients WHERE id = $customer_id");
            $result = mysqli_fetch_array($client_email);
            
            $CLIENT_EMAIL = $result['email'];

            $query = "SELECT * FROM purchases WHERE client_id = $customer_id ";
            $select_purchases = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_purchases))
            {
                $purchase_id = $row['id'];
                $purchase_item = $row['product'];
                $purchase_cost = $row['purchase_cost']; 
            }

       
            $to_email = $CLIENT_EMAIL;
            $subject = "Purchase notification";
            $message = "You have succesfully purchased " . $purchase_item . " by " . $purchase_cost . " dollar";
            $header = 'From: noreply@company.com';
            
            return mail($to_email,$subject,$message,$header); 
      
    }









}


