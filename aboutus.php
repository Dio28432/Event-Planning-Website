<!DOCTYPE html>
<html>
<head>
    <title>About Us - Your Event Management Company Name</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lavender;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        h1 {
            font-size: 28px;
        }

        section {
            margin: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            color: #333;
        }

        h3 {
            font-size: 20px;
            color: #333;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        li {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    
    <center>
    <form method="post">
    <button name="back">Back</button>
    </form>
    </center>
    <?php
    
    if (isset($_POST['back'])) {

        header("Location:../Views/mainhomepage.php");


    }
    
    ?>
    <header>
        <h1>About Us</h1>
    </header>

    <section>
        <h2>Welcome to Litmoshphere!</h2>
        <p>Where Imagination Meets Perfection!</p>
 
        <h3>Our Story</h3>
        <p>Established with a vision to transform ordinary gatherings into extraordinary affairs, Litmoshphere was founded by a team of dedicated professionals with a combined experience of 5 years in the event management industry. Our journey began with a simple goal: to create events that not only meet but exceed our clients' expectations.</p>
    
        <h3>What Sets Us Apart</h3>
        <ul>
            <li><strong>Creativity:</strong> Our team is a blend of artistic minds and logistical experts who work collaboratively to bring your vision to life. We thrive on innovative concepts and imaginative design.</li>
            <li><strong>Attention to Detail:</strong> We understand that it's the little details that make a big difference. We meticulously plan, coordinate, and execute every aspect of your event to perfection.</li>
            <li><strong>Customer-Centric Approach:</strong> Your satisfaction is our top priority. We take the time to listen, understand your needs, and tailor our services to make your event uniquely yours.</li>
            <li><strong>Reliability:</strong> With a proven track record of successful events, you can trust us to deliver on time and within budget.</li>
        </ul>
    </section>

    <section>
        <h3>Our Services</h3>
        <p>Whether you're planning a wedding, a corporate gathering, a gala, a product launch, or any other event, Your Event Management Company Name is here to turn your vision into reality. Our services include event planning, design and décor, logistics management, vendor coordination and more.</p>
    </section>

    <section>
        <h3>Join Us in Creating Memorable Moments</h3>
        <p>We believe that every event should tell a story, and we're committed to helping you write your own narrative. Let's work together to create unforgettable memories that will be cherished for a lifetime.</p>
        <p>Contact us today to discuss your event, and let's embark on this incredible journey together. The stage is set, and the spotlight is on you!</p>
    </section>
</body>
</html>