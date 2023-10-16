<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <a href="" class="headerText">home</a>
        <a href="" class="headerText">who we are</a>
        <a href="" class="headerText">services</a>
        <a href="" class="headerText">our work</a>
        <a href="" class="headerText">faq</a>
        <a href="" class="headerText">testimonials</a>
        <a href="" class="headerText">contact us</a>
    </div>
    <div class="gridContainer">

        <div class="column-left bb-bluegray-fill waw-rowspan"></div>
        <div class="bb-bluegray-fill" id="waw-c2-c6"></div>
        <div class="bb-bluegray-fill" id="waw-c2-r7"></div>
        <h1 class="waw-section-header bb-lightbluegray bb-bluegray-fill">who we are</h1>

        <h2 class="waw-header" id="waw-c1-r2">down to earth</h2>
        <p class="waw-text" id="waw-c1-r3">
            We love to keep things simple.<br>
            No big gestures, no theatre or promising utopias.
        </P>

        <h2 class="waw-header" id="waw-c1-r4">quality driven</h2>
        <p class="waw-text" id="waw-c1-r5">
            Our professionalism doesn't follow hypes: it follows quality.
            We believe in ever growing and striving for the best.
        </p>



        <h2 class="waw-header" id="waw-c1-r6">user friendly</h2>
        <p class="waw-text" id="waw-c1-r7">
            With our solution we build bridges between user and systems.
        </p>

        <h2 class="waw-header" id="waw-c2-r2">our vision</h2>
        <p class="waw-text" id="waw-c2-r3">
            We envision a world where using softwareS
            is as easy and naturally as breathing.
        </p>

        <h2 class="waw-header" id="waw-c2-r4">our mission</h2>
        <p class="waw-text" id="waw-c2-r5">
            Our purpose is to develop software that fit the individual qualities of individual needs.
            To empowering people & businesses with software solutions.
        </p>
        <div class="column-right bb-bluegray-fill waw-rowspan"></div>

        <div class="column-left bb-lightbluegray-fill"></div>
        <section id="section-faq" class="bb-lightbluegray-fill">
            <h1 class="bb-bluegray">faq</h1>

            <details class="faq">
                <summary class="question-container">
                    <img src="img/question.svg" class="question-icon" alt="Question mark">
                    <p class="q-a-text bb-bluegray">question text here</p>
                    <img src="img/caret.svg" class="question-caret" alt="Dropdown caret">
                </summary>
                <div class="answer-container">
                    <p class="q-a-text bb-bluegray">
                        answer text here
                    </p>
                </div>
            </details>
        </section>

        <div class="testimonials">
            <h1 class="bb-bluegray">testimonials</h1>

            <div class="tscroll">
                <div class="titem">
                    <p>Jan dornbvoos</p>
                    <p>lorem ipsum dolor sit amet, consectetur adip</p>
                </div>
                <div class="titem">
                    <p>Jan dornbvoos</p>
                    <p>lorem ipsum dolor sit amet, consectetur adip</p>
                </div>
                <div class="titem">
                    <p>Jan dornbvoos</p>
                    <p>lorem ipsum dolor sit amet, consectetur adip</p>
                </div>
            </div>
        </div>
        
        <div class="Contact_form">
            <div class="Contact_name">
                <h1>Contact form</h1>
            </div>
            <div class="Form">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $name = $_POST['name'];
                    $company = $_POST['company'];
                    echo "
                            <div class='confirmation'>
                                <p>Dear, $name  from $company,</p> 
                                <p>We received your information about service that you want to purchase.</p>
                                <p>We will contact you soon.</p>
                            </div>
                        ";
    
                } 
                else {
                    echo "
                            <form action='' method='post'>
                                Hello I'm <input required class='bb-lightbluegray-fill bb-bluegray' placeholder='name' type='text' name='name' id='name'>
                                from <input required class='bb-lightbluegray-fill bb-bluegray' placeholder='company' type='text' name='company' id='company'>
                                and I'm looking for <input required class='bb-lightbluegray-fill bb-bluegray' placeholder='service' type='text' name='service' id='service'>
                                could you plase get back to me at <input required class='bb-lightbluegray-fill bb-bluegray' placeholder='email' type='email' name='email' id='email'>
                                <input type='submit' class='bb-lightbluegray-fill bb-bluegray contactsubmit'>
                            </form>
                        ";
                    }
                ?>
            </div>
        </div>

        <div class="column-right bb-lightbluegray-fill"></div>
        <footer class="bb-bluegray-fill">
            <p class="company">circle solutions</p>
            <p>chess road 123</p>
            <p>1234 ab emmen</p><br>
            <p><span>sarah kleinn</span> cao</p>
            <p>hi@circlesolutions.com</p>
            <p>+31 6 123456789</p>
        </footer>
    </div>
</body>

</html>