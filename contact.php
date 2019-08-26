	<?php

         $to = "montalaq@aol.com";
         $subject = "test subject";

        /* 
========================================== 
$message = "<p>".$_POST['message']."</p>";
         $message .= "<br/><br/><br/><h3>".$_POST['contactName']."</h3>";
         $message .= "<br/><h3>".$_POST['email']."</h3>";
========================================== 
*/ 
         $message = "<p>في جو مبدع ومع فريق شغوف نترجم رؤية و قيم المشروع بألوان و تصاميم تعكس ملامح هويته التجارية، ولأننا نخدم منطقة الشرق الأوسط وشمال أفريقيا، فإننا نعتمد المعايير العالمية والتجارب المتقدمة. سعيا منا لتقديم أقصى فائدة للمشاريع الناشئة و المساهمة في رفع مستواه التنافسي بالسوق.</p>";

         $header = "From:clients@montalaq.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $retval = mail ($to,$subject,$message,$header);

         if( $retval == true )
         {
     echo "msg sent";
         }else{
             echo "Error";
         }
    
      ?>