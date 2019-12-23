<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="data/contact.php" method="post"> <!-- action: specifies what happens | method: specifies how to send the data -->
    <!-- use post when you need the data. Use get when you need flexibility, you can manually change the url to pass the data which is faster -->
        <label for="name">Name</label> <!--for attribute: labels the input and links to the id -->
        <input id="name" type="text" name="name" placeholder="Jane Doe"> <!-- name attribute links to back-end -->

        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="name@example.com">

        <label for="subject">Subject</label>
        <input id="subject" type="text" name="subject" placeholder="Subject Line Goes Here">

        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>

        <button type="submit">Submit</button> <!-- Look into adding Recaptcha -->
    </form>
</body>
</html>