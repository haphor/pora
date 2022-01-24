<?php
    include("config.php");

    $email = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $check = "SELECT * FROM wait_list WHERE email='$email'";
    $res = mysqli_query($conn, $check);
    
    if(mysqli_num_rows($res) > 0){
        echo "<p class='alert alert-danger'>You're already on waitlist, we'll keep in touch!</p>";  
    }else{
        $add_new = mysqli_query($conn, "INSERT INTO wait_list(email) VALUES('" . $email . "')");
        if ($add_new) {

            // Applicant Email COnfiguration
      
            $adminName = "Pora";
            $adminEmail = "admin@getpora.com";
            $applicantEmail = $_POST["userEmail"];
            $appSubject = "You've successfully joined the Pora waitlist!";
          
            $separator = md5(time());
          
            // carriage return type (RFC)
            $eol = "\r\n";
          
            // main header (multipart mandatory)
            $appHeaders = "From: " . $adminName . " <" . $adminEmail . ">" . $eol;
            $appHeaders .= "MIME-Version: 1.0" . $eol;
            $appHeaders .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
            $appHeaders .= "Content-Transfer-Encoding: 7bit" . $eol;

            $appMessage = '<html><body>';
            $appMessage .= "<p style='margin-bottom: 20px'>Congratulations! You've successfully joined thousands of others waiting to enjoy the many benefits of Pora.</p>";
            $appMessage .= "<p style='margin-bottom: 20px'>As a registered waitlister, we'd like to give you a head start on Pora by offering you a 30-day free trial of Pora pro when the app goes live!</p>";
            $appMessage .= "<p style='margin-bottom: 20px'></p>";
            $appMessage .= "<p style='margin-bottom: 20px'>We're excited to help you connect, meet and create lasting bonds with Africans like you in the diaspora!</p>";
            $appMessage .= "<p style='margin-bottom: 20px'>For more updates about the app, check out our growing community on social media. <br><a href='https://www.instagram.com/getpora/' target='_blank'>Instagram</a> <br> <a href='https://facebook.com/GetPora/' target='_blank'>Facebook</a> <br> <a href='https://twitter.com/GetPora' target='_blank'>Twitter</a></p>";
            $appMessage .= "<p style='margin-bottom: 2px'>Sealed with love,<br>Pora</p>";
            $appMessage .= "</body></html>";

            // message
            $appBody .= "--" . $separator . $eol;
            $appBody .= "Content-type:text/html; charset=utf-8\n";
            $appBody .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
            $appBody .= $appMessage . $eol;
            $appBody .= "--" . $separator . "--";
      
            if(mail($applicantEmail, $appSubject, $appBody, $appHeaders)) {
                echo '<p class="alert alert-success">You have been successfully added to our waitlist!</p>';
            } else {
                echo "<p class='alert alert-danger'>Cannot send mail at the moment! Please try again later.</p>";
            }
        } else {
            echo "<p class='alert alert-danger'>Application could not be subbmitted! Please try again later.</p>";
        }
        
    }
    mysqli_close($conn);
?>