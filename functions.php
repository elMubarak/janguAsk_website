<?php 
    
    require 'config.php';
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'credential.php';

    $mail = new PHPMailer;


    // $mail->SMTPDebug = 4;            // Enable verbose debug output
    $mail->isSMTP();                   // Set mailer to use SMTP
    $mail->Host = 'www.janguask.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;            // Enable SMTP authentication
    $mail->Username = EMAIL;           // SMTP username
    $mail->Password = PASS;            // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 26;                 // TCP port to connect to
    //db-jangdibg_janguask
    //u-jangdibg_jangidb
    //p-janguask000

    // Connection
    function connect(){
      try {
        $conn = new PDO('mysql:host=localhost;dbname=jangu', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
      } catch (\Exception $e) {
        return false;
      }
    }

    // Connection String
    $conn = connect();
    
    // Query function
    function query($query, $bindings, $conn){
        $stmt = $conn->prepare($query);
        $stmt->execute($bindings);
        return $stmt;
    }

    if (isset($_POST['subscribe-btn'])) {
        // Fetch subscriber details
        $subscriberName = htmlspecialchars($_POST['subscriberName']);
        $subscriberEmail = htmlspecialchars($_POST['subscriberEmail']);
        // Generate verification code
        $verify_code = md5(uniqid((mt_rand())));
        $created = date("Y-m-d H:i:s");
        // Check if user is already subscribed to newsletter
        $exists = query('SELECT * FROM newsletter WHERE email=:email',array(':email'=>$subscriberEmail), $conn);
        if ($exists->rowCount() > 0) {
            echo "<script>alert('You are already subscribed.')</script>";
           // header("Location:index.php");
            // return;
        }else{
         // Verification email configuration 
        $verifyLink = 'https://www.janguask.com/subscription.php?email_verify='.$verify_code; 
        // $subject = 'Please Confirm Subscription'; 
        $subject ="Newsletter";

        $message = "<h1 style='font-size:22px;margin:18px 0 0;padding:0;text-align:left;color:#3c7bb6'>Email Confirmation</h1> 
        <p style='color:#616471;text-align:left;padding-top:15px;padding-right:40px;padding-bottom:30px;padding-left:40px;font-size:15px'>Hi ".$subscriberName.", if you recieved this email by mistake, simply delete it. You won't be subscribed if you did not click on the confirmation link.</p> 
        <p style='text-align:center;''> 
            <a href=".$verifyLink." type='submit' style='border-radius:.25em;background-color:grey;font-weight:400;min-width:180px;font-size:16px;line-height:100%;padding-top:18px;padding-right:30px;padding-bottom:20px;padding-left:30px;color:orange;text-decoration:none'>Yes, subscribe me to this list.</a> 
        </p> 
        <p>For questions about this list, please contact: 
        <br>contact@janguask.com
        <p><strong>JanguAsk Team</strong></p>"; 
        $body = "<h3>Hi <span style='color:orange'>".$subscriberName."</span>.";
        $body .= "<p>THANK YOU FOR SIGNING UP TO OUR NEWSLETTER.</h3>";
        $body .= "<p> We are in the process of releasing the free social learning app, <span style='color:grey'>Jangu</span><span style='color:orange;'>Ask</span>.<p>";
        $body .= "You would be notified about this and future updates on the App, as well as any changes or news relating to it via this newsletter.<p> If you would like to speak to one of our <span style='color:grey'>Jangu</span><span style='color:orange;'>Ask</span>. experts please send us a feedback.";
        $body .= "<span style='color:grey'>Jangu</span><span style='color:orange;'>Ask</span>, the learning app for everyone.";
        $body .= "<p><span style='color:grey;'>";
        $body .= "<img src='https://www.janguask.com/logo.png' alt='JanguAsk' height='42' width='42'><span style='color:grey'>Jangu</span><span style='color:orange;'>Ask</span> Team.";
        $mail->setFrom(EMAIL, 'JanguAsk');
        $mail->addAddress($subscriberEmail,$subscriberName);     // Add a recipient

        $mail->addReplyTo(EMAIL,'JanguAsk');
      //  $mail->addCC('almohad@janguask.com');
      //  $mail->addBCC('mukhtar.yerima@janguask.com');
        $mail->addCustomHeader('X-custom-header', 'custom-value');
        $mail->isHTML(true);
       // $mail->AddEmbeddedImage('logo.png', 'logoimg', 'logo.png'); // attach file logo.jpg, and later link to it using identfier logoimg

        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        // $mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
        $mail->AltBody ='<h3>Thank for subscribing to JanguAsk<h3>';
          if(!$mail->send()) {
            echo "<script>alert('Error: could not subscribe...')</script>";
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            query('INSERT INTO newsletter (name, email, verify_code, created) 
                VALUES (:name, :email, :verify_code, :created)',
                array(':name'=>$subscriberName,
                      ':email'=>$subscriberEmail,
                      ':verify_code'=>$verify_code,
                      ':created'=>$created,
                  ),
                $conn);
           echo "<script>alert('Thank you for having interest in JanguAsk')</script>";
            }
        }
    }
       

    if(isset($_POST['sendmail'])) {
            $senderEmail = $_POST['senderEmail'];
            $senderName = $_POST['senderName'];

            $mail->setFrom(EMAIL, $senderName);
            $mail->addAddress('contact@janguask.com');     // Add a recipient

            $mail->addReplyTo($senderEmail);
            $mail->addCC('almohad@janguask.com');
            $mail->addBCC('mukhtar.yerima@janguask.com');
            $mail->addCustomHeader('X-custom-header', 'custom-value');

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = $_POST['subject'];
            $mail->Body = $_POST['message'].'<h3><br> From: '.$senderName.'<h3>';
            // $mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
            $mail->AltBody = $_POST['message'];

            if(!$mail->send()) {
                $mail->setFrom(EMAIL, 'JanguAsk');
                $mail->addAddress($senderEmail,$senderName);     // Add a recipient

                $mail->addReplyTo(EMAIL,'JanguAsk');
              //  $mail->addCC('almohad@janguask.com');
              //  $mail->addBCC('mukhtar.yerima@janguask.com');
                $mail->addCustomHeader('X-custom-header', 'custom-value');
                $mail->isHTML(true);
               // $mail->AddEmbeddedImage('logo.png', 'logoimg', 'logo.png'); // attach file logo.jpg, and later link to it using identfier logoimg
                $body = "<h3>Hi <span style='color:orange'>".$senderName."</span>.";
                // Set email format to HTML
                $mail->Subject = 'Thank you.';
                $mail->Body = $body;
                // $mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
                $mail->AltBody ='<h3>Thank for your feedback to JanguAsk<h3>';
                if (!$mail->send()) {
                    echo "<script>alert('Message could not be send...".$mail->ErrorInfo."')</script>";
                }
                echo "<script>alert('Message could not be send...".$mail->ErrorInfo."')</script>";
                // echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo "<script>alert('Thank you for the feedback...')</script>";
            }
        }
?>
