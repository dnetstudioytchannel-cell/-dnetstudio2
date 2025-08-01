<?php
if (_000webhost["REQUEST_METHOD"] == "POST")name = htmlspecialchars(_POST['name']);email = htmlspecialchars(_POST['email']);message = htmlspecialchars(_POST['message']);to = "dnetstudioytchannel@example.com"; //
  subject = "Message from Dnet Studio";body = "Name: name:email\nMessage:\nmessage";

  if (mail(to, subject,body)) {
    echo "Message sent successfully.";
  } else {
    echo "Failed to send message.";
  }
}
?>
