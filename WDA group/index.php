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
        <div class="column-left bb-lightbluegray-fill"></div>
        <div class="left bb-lightbluegray-fill">
            <img class="logo" src="img/logo.png">
            <p class="bb-bluegray slogan">specialized business software solutions</p>
        </div>
        <div class="right bb-lightbluegray-fill">
            <img class="drawing" src="img/drawing.svg">
        </div>
        <div class="column-right bb-lightbluegray-fill"></div>


        <div class="column-left bb-bluegray-fill waw-rowspan"></div>
        <div class="bb-bluegray-fill" id="waw-c2-r6"></div>
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
        <div id="Our_services">
        <h1 class="bb-bluegray">our services</h1>
        <div class="hscroll">
            <div class="servicecontainer">
                <div id="service1">
                    <div id="text01">
                        <h2><b>circle workspace</b></h2>
                        <p> Display information from applications directly in Circle Workspace. 
                        At a glance, see all your unread emails, appointments, news, recently edited documents and more.</p>
                    </div>
                    <div id="text02">
                        <h2><b>document management</b></h2>
                        <p>Bring all documents together in one online workplace. So you can work online and offline from any device. 
                        The documents app bundles and brings structure to Office 365, the fileserver, OneDrive and SharePoint
                        </p>
                    </div>
                    <div id="text03">
                        <h2><b>app management</b></h2>
                        <p>Create a workplace in minutes. We also want to make work easy for workplace administrators. 
                            We make it possible to create a role- and conditions-based workplace that combines all your current and future technologies within one workplace.                            
                        </p>
                    </div>
            
            </div>
            </div>
            <div class="servicecontainer">
                <div id="service1">
                    <div id="text01">
                        <h2><b>circle workspace</b></h2>
                        <p> Display information from applications directly in Circle Workspace. 
                        At a glance, see all your unread emails, appointments, news, recently 
                        edited documents and more.</p>
                    </div>
                    <div id="text02">
                        <h2><b>document management</b></h2>
                        <p>Bring all documents together in one online workplace. So you can work online and 
                            offline from any device. The documents app bundles and brings structure to Office
                             365, the fileserver, OneDrive and SharePoint
                        </p>
                    </div>
                    <div id="text03">
                        <h2><b>app management</b></h2>
                        <p>Create a workplace in minutes. We also want to make work easy for workplace administrators. 
                            We make it possible to create a role- and conditions-based workplace that combines all your 
                            current and future technologies within one workplace.                            
                        </p>
                    </div>
            
            </div>
            </div>
        </div>
        </div>
    
        <div class="column-left bb-lightbluegray-fill"></div>
        <section id="section-faq" class="bb-lightbluegray-fill">
            <h1 class="bb-bluegray">faq</h1>
            <?
            function faqQuestion($question, $answer)
            {
                return "
                    <details class='faq'>
                        <summary class='question-container'>
                            <img src='img/question.svg' class='question-icon' alt='Question mark'>
                            <p class='q-a-text bb-bluegray'>$question</p>
                            <img src='img/caret.svg' class='question-caret' alt='Dropdown caret'>
                        </summary>
                        <div class='answer-container'>
                            <p class='q-a-text bb-bluegray'>$answer</p>
                        </div>
                    </details>
                ";
            }

            $questions = array(
                'What is an intranet?</>Intranet means a closed network that resides on a local network. An intranet acts like a website that only authorized users can access and is generally used by organizations who wish to share knowledge, internal communications, and information with their colleagues.',
                'What is the difference between the internet and an intranet?</>The main difference between an intranet and the internet is that the former is a closed network, and the latter is a public network. In short, the internet is for all; a company intranet is for a select group of people.',
                'What is an intranet and an extranet?</>An intranet is a closed network designed to allow an organization to share information and corporate communication among its employees. An extranet is similar to an intranet, but allows third-party entry, so vendors or partners can experience full or selected access.',
                'What are intranet sites?</>Intranet sites are closed internal networks for authorized members of an organization to share information. They act as a company news channel, an internal communications tool, and a collaboration tool.',
                'What are intranet applications?</>Intranet applications are software within an intranet like document publishing, communication tools, broadcasts, etc. These applications allow the user to do a range of activities, for example: publish a blog, connect with a colleague, or run employee surveys.',
                'What is an intranet portal?</>An intranet portal is the access point to the user’s company intranet. It is on the intranet portal where the user can access intranet applications as well as external apps, and information and knowledge that is stored within the intranet itself.',
                'Can an intranet work without the internet?</>Former on-premise company intranets could operate without internet. But for a wide range of reasons, the majority of company intranet applications are now cloud-based, so an internet connection is necessary.',
                'Can an intranet be accessed remotely?</>Yes, an intranet can be accessed on a range of devices, regardless of location – all that is required is an internet connection. This is ideal for any organization with dispersed or front-line employees who need communication tools and access to organizational information wherever they are.',
                'What does an intranet do?</>Offering all types of organizational solutions, intranet software can improve employee engagement, aid communication, and increase collaboration. Modern intranets are now mostly cloud-based which allows global organizations to connect, share knowledge, and broadcast news quickly and easily.'
            );

            foreach ($questions as $questionLine) {
                $questionLineExploded = explode('</>', $questionLine);
                $question = strtolower($questionLineExploded[0]);
                $answer = $questionLineExploded[1];
                echo faqQuestion($question, $answer);
            }
                ?>
        
        
        </section>
        <div class="column-right bb-lightbluegray-fill"></div>

        <div class="tEmptyContainer"></div>
        <div class="testimonials">
            <h1 class="waw-section-header bb-lightbluegray bb-bluegray-fill">testimonials</h1>
            <div class="tScroll">
                <div class="tItem">
                    <div class="tGrid">
                        <p class="tAuthor">Jan dornbvoos</p>
                        <p class="tReview">lorem ipsum dolor sit amet, consectetur adip ip Lorem ipsum dolor sit amet consectetur, adipisicing eliLorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="tItem">
                    <div class="tGrid">
                        <p class="tAuthor">Jan dornbvoos</p>
                        <p class="tReview">lorem ipsum dolor sit amet, consectetur adip ip Lorem ipsum dolor sit amet consectetur, adipisicing eliLorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="tItem">
                    <div class="tGrid">
                        <p class="tAuthor">Jan dornbvoos</p>
                        <p class="tReview">lorem ipsum dolor sit amet, consectetur adip ip Lorem ipsum dolor sit amet consectetur, adipisicing eliLorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
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