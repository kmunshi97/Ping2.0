<?php
    $userName = "Kanishka Munshi";
    $userBranch = "CSE";
    $userRollNum = 2015121;
?>
<html>
    <html>
    <head>
        <title>
            Ping!
        </title>
        
                
        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/reset.css">
        
        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/icon.css">
        
        <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
        
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        
        <style>
            
            body{
                padding: 0 auto;
                margin: 0 auto;
                background-size: cover;
                background-repeat: no-repeat;
                
                font-family: sans-serif;
                font-size: 16px;
            }
            
            .icon a, .custom{
                color: white;
            }            
        </style>     
    </head>
        
    <body>
    
<!--

    The mail me modal developed i Semantic-UI.
    This modal is triggered by 
        the mail me icon circular button, and
        the overlay image button.

    The semantic-UI jQuery in present in the "js/tab.js"

-->
        
        
        <!--The mail me modal starts here!-->
        <div id="mailModal"
             class="ui modal">
            <div class="header">
                Mail me
            </div>
            
            <div class="image content">
                <img class="ui circular image"
                     style="width: 28%;
                            height: 28%"
                     src="img/profilepictures/<?php echo $userRollNum;?>.jpg">

                <div class="description" style="width: 64%;">
                    <!--TODO-->
                    <div class="ui form">
                        <div class="two fields">
                            <div class="field">
                                <label>To</label>
                                <input type="email" placeholder="abc@iiitdmj.ac.in"
                                       value="kanishkamunshi@iiitdmj.ac.in"
                                       disabled>
                            </div>
                    
                            <div class="field">
                                 <label>From</label>
                                 <input type="email" placeholder="xyz@iiitdmj.ac.in">
                            </div>
                        </div>

                        <div class="field">
                             <label>Subject</label>
                             <input type="text" placeholder="Subject">
                        </div>
                            
                        <div class="field">
                             <label>Body</label>
                            <textarea type="text" rows="3" placeholder="Enter message here!"></textarea>
                        </div>

                        <div class="ui red large submit button right floated">Send</div>
                        
                    </div>
                </div>
            </div>
        </div><!--The mail me modal ends here!-->

        
        <!--The Change Image Modal starts here!-->
        <div class="ui modal"
             id="changeImageModal">
            
            <div class="header">
                Update Image
            </div>
            
            <div class="image content">
                <img id="modalDisplayImage"
                     class="ui circular image"
                     style="width: 28%;
                            height: 28%"
                     src="img/profilepictures/<?php echo $userRollNum;?>.jpg">

                <div class="description" style="width: 68%;">
                    <!--TODO-->
                    <form class="ui form" 
                          method="post" 
                          action="upload.php"
                          enctype="multipart/form-data">
                        
                        <div class="field">
                             <label>Image Location</label>
                             <input type="file"
                                    name="imageLocationInput"
                                    id="imageLocationInput"
                                    accept="image/*">
                                
                        </div>                        

                        <div class="field">
                             <button id="uploadButton"
                                     class="ui red button right floated"
                                     type="submit">
                                 Upload Image
                            </button>
                        </div>                        
                    </form>
                </div>
            </div>
        </div><!--The change image modal ends here!-->

<!--

    The main content of the webpage begins here!
        The following code includes 
        "Semantic-UI: RAIL."

        The Rail divides the page into three sections:
            Left,
            Right, and 
            Central.

-->
    <div class="ui container">   
        
        <div class="ui segment" 
             style="margin-top: 2.5vw;
                    margin-left: 16vw;">
            
            
<!--

    The left segment of the rail starts here!
    It consists of 
        the User image card, and
        the vertical dividing pointing menu of Semantic-UI.
    
-->
            <div class="ui left dividing rail"
                 style="width: 24vw;">
                
                <div class="ui segment">
                 
            <!--

                The user image card starts here!
                    This card conains an Overlay effect;
                    whose CSS lies in a separate file: "css/animate.css"

            -->            

                    <div class="ui fluid raised card">
                        <div class="content">
                            <div class="ui header"> 
                                <span class="ui large header">
                                    <?php echo $userName; ?>
                                </span>
                                
                                <div class="right floated">
                                    <img 
                                    class="ui tiny circular image"
                                    src="img/characters/iron-man.jpg">    
                                </div>
                                
                                <div class="ui meta">
                                    <?php echo $userBranch; ?>
                                    <?php echo " "; ?>
                                    <?php echo $userRollNum; ?>
                                </div>
                            </div>
                        </div>
                            <!--The header ends here!-->
                            
                            <div class="image" 
                                 style="overflow: hidden;">
                                
                                <div class="contain">
                                    <img class="ui image" 
                                         id="displayImage"
                                         src="img/profilepictures/<?php echo $userRollNum;?>.jpg"
                                         style="width: 32vw;
                                                height: 20vw;">

                                    <div class="overlay">
                                        <div class="button">
                                            <button class="ui teal button" onclick="changeImageModal()">
                                            <i class="edit icon"></i>
                                            Change Image
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

            <!--

                The vertical menu which is a part of the left segment of the Semantic-Ui: Rail starts here!

                The vertical menu has Sematic-UI: Tabs.
                These tabs trigger content i the central rail segment

            -->

                    <!--The vertical menu starts here!-->
                    <div class="ui huge fluid vertical pointing menu">
                        <a class="active item" data-tab="first">
                            About
                            <i class="right floated right arrow icon"></i>
                        </a>

                        <a class="item" data-tab="second">
                            Skills
                            <i class="right floated right arrow icon"></i>
                        </a>
                        
                        <a class="item" data-tab="third">
                            Educational Qualifications
                            <i class="right floated right arrow icon"></i>
                        </a>
                        
                        <a class="item" data-tab="fourth">
                            Projects&ensp;&&ensp;Work - Experiance
                            <i class="right floated right arrow icon"></i>
                        </a>
                        
                        <a class="item" data-tab="fifth">
                            Other Achievements
                            <i class="right floated right arrow icon"></i>
                        </a>
                        
                    </div><!--The vertical tabbed menu ends here!-->
                </div>
            </div><!--The left rail ends here!-->
            
 <!--
        The right rails segment of the Semantic-UI: Rail 
        starts here!

        The right rails segment contains:
            the vertical (stackable) icon buttons
            
            These buttons create a link of the user with their resective
            social media accounts and other such importan websites!
        
            The mail icon button triggers the Mail me MODAL
            
 -->

            <div class="ui right very close rail"
                 style="width: 2.5vw;">
                    
                <div class="ui doubling stackable">
                    <br>

                    <button id="fbButton"
                            class="ui massive circular facebook icon button">
                        <a id="fbSpan"
                           href="https://www.facebook.com/kmunshi.97"
                           target="_blank">
                            <i class="facebook icon"></i>
                        </a>
                    </button>

                    <div class="ui action input">
                        
                        <button id="fbIcon"
                                class="ui facebook icon button">
                            <i class="facebook icon"></i>
                        </button>
                        
                        <input type="text"
                               id="fbInput"
                               hidden>
                    </div>
                    
                    <br>
                    
                    <button id="twitterButton"
                            class="ui massive circular twitter icon button">
                        <a id="twitterSpan"
                           href="https://twitter.com/kaka_munshi" 
                           target="_blank">
                            <i class="twitter icon"></i>                        
                        </a>
                    </button>
                    
                    <div class="ui action input">
                        
                        <button id="twitterIcon"
                                class="ui twitter icon button">
                            <i class="twitter icon"></i>
                        </button>
                        
                        <input type="text"
                               id="twitterInput"
                               hidden>
                    </div>
                    
                    <br>

                    <button id="linkedinButton"
                            class="ui massive circular linkedin icon button">
                        <a id="linkedinSpan"
                           href="https://www.linkedin.com/in/kanishka-munshi-a2652913a/"          target="_blank">
                            <i class="linkedin icon"></i>
                        </a>
                    </button>

                    <div class="ui action input">
                        
                        <button id="linkedinIcon"
                                class="ui linkedin icon button">
                            <i class="linkedin icon"></i>
                        </button>
                        
                        <input type="text"
                               id="linkedinInput"
                               hidden>
                    </div>

                    <br>
                    
                    <button id="githubButton"
                            class="ui massive teal circular github icon button">
                        <a id="githubSpan"
                           href="https://www.github.com/kmunshi97"
                           target="_blank">
                            <i class="github icon"></i>
                        </a>
                    </button>

                    <div class="ui action input">
                        
                        <button id="githubIcon"
                                class="ui teal github icon button">
                            <i class="github icon"></i>
                        </button>
                        
                        <input type="text"
                               id="githubInput"
                               hidden>
                    </div>
                    
                    <br>

                    <button id="mailButton"
                            onclick="mailModal()"
                            class="ui massive red circular mail icon button">
                        <i class="mail icon"></i>
                    </button>                    
                </div>
                
            </div><!--The right rails ends here!-->
            
<!--
    
        The central rail segment of the Semantic-UI contains the Semantic-UI: Tabs'content.

        These tabs are triggered by the vertical menu in the left rail segment.

-->            

            <div class="center rail">
                <!--The tabcontent about starts here!-->
                <div class="ui active tab segment" data-tab="first">
                    <!--Objective card starts here!-->
                    <div class="ui fluid card">    
                        <div class="content">
                            <input type="button"
                                   id="editButton"
                                   class="ui red mini button right floated" onclick="editFirst()"
                                   value = "Edit">
                            </input>
                            <span>
                                <div class="ui header">
                                    Objective:
                                </div>
                                <div class="ui divider"></div>
                                
                                <span id="objectiveSpan">
                                    I want to be the best Full-Stack developer.
                                </span>
                                
                                <div class="ui fluid input">
                                    <input type="text" id="objectiveInput" hidden>
                                </div>
                            </span>
                        </div>
                    </div><!--Objective card ends here!-->
                    
                    <!--About Me card starts here!-->
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="ui header">
                                About Me
                            </div>
                            <div class="ui divider"></div>
                                <span id="aboutSpan">
                                    Hi, I am a passionate, highly enthusiastic Android developer. I believe I'm a fast-learner and try to learn and implement the new technologies and skills that I try to absorb. I rate myself as an out of the box thinker and a good problem solver. I can work independently using my own initiative or as a part of the team.
                              </span>
                            
                            <div class="textarea">
                                <textarea rows=5
                                          type="text"
                                          style="width: 100%;"
                                          id="aboutTextarea" hidden></textarea>
                            </div>

                            
                        </div>
                    </div><!--About Me card ends here!-->

                    <!--The start of details card!-->
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="ui header">Details</div>
                            <div class="ui divider"></div>
                                
                            <span>
                                <table class="ui definition table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Date Of Birth    
                                            </td>
                                            <td>
                                                <span id="dobSpan">
                                                    January 10, 1997
                                                </span>
                                                
                                                <div class="ui fluid input">
                                                    <input type="date" 
                                                           id="dobInput" 
                                                           hidden>
                                                </div>
                                            </td>
                                        </tr>
                                            <tr>
                                            <td>
                                                Address    
                                            </td>
                                                <td>
                                                67, Amaltas 
                                                Phase-2
                                                <br>
                                                Chuna Bhatti
                                                <br>
                                                Bhopal - 462016
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </span>
                        </div>
                    </div><!--End of details card!-->

                    <!--The contact details card starts here!-->
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="ui header">Contact Details</div>
                            <div class="ui divider"></div>
                                
                            <span>
                                <table class="ui definition table">
                                    <tbody>
                                        
                                        <tr>
                                            <td>
                                                Contact    
                                            </td>
                                            
                                            <td>
                                                <a>
                                                    <i class="phone icon" id="contactIcon"></i>
                                                    <span id="contactSpan">
                                                        +91 - 8989661293
                                                    </span>
                                                </a>
                                              
                                                <div class="ui fluid input">
                                                    <input type="text" id="contactInput" hidden>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                Mail    
                                            </td>
                                             
                                            <td>
<!--
                                                <a href="" target="_blank">
                                                   <i class="mail icon"></i>
                                                    kmunshi.97@gmail.com
                                                </a>
                                                
                                                <br>
-->
                                                
                                                <a href="" target="_blank">
                                                    <i class="mail icon" id="mailIcon"></i>
                                                    
                                                    <span id="mailSpan">
                                                        kanishkamunshi@iiitdmj.ac.in
                                                    </span>
                                                
                                                    <div class="ui fluid input">
                                                        <input type="text" id="mailInput" hidden>
                                                    </div>
                                                </a>
                                                
                                            </td>
                                        </tr>  
                                    
                                        <tr>
                                            <td>
                                                LinkedIn    
                                            </td>

                                            <td>
                                            <a href="https://www.linkedin.com/in/kanishka-munshi-a2652913a/" target="_blank">
                                                    <i class="linkedin icon"></i>
                                                    Kanishka Munshi
                                                </a>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                Github    
                                            </td>
                                        
                                            <td>
                                                <a href="https://www.github.com/kmunshi97" target="_blank">
                                                   <i class="github icon"></i>
                                                    kmunshi97
                                                </a>
                                            </td>
                                        </tr>  
                                            
                                    </tbody>
                                </table>
                            </span>
                        </div>
                    </div><!--The contact details card ends here!-->

                </div><!--The tabcontent About ends here!-->
                    
                    
                    
                <!--The tabcontent Skills starts here!-->
                <div class="ui tab segment" data-tab="second">
                        <div class="content">
                            <div class="ui header">
                                Professional Skills
                            </div>
                            <div class="ui divider"></div>
                            I'm an artisan, who creates Android and web apps!
                            
                        </div>
                </div><!--The tabcontent Skills ends here!-->
                    
                
                    
                <!--The tabcontent Educational Qualifications starts here!-->
                <div class="ui tab segment" data-tab="third">
                        <div class="content">
                            <div class="ui header">
                                Educational Qualifications
                            </div>
                            <div class="ui divider"></div>
                            Hi!                            
                        </div>
                </div><!--The tabcontent Educational Qualifications ends here!-->
         
                  
                    
                    <!--The tabcontent Projects & Work Experiance starts here!-->
                    <div class="ui tab segment" data-tab="fourth">
                            <div class="content">
                                <div class="ui header">
                                    Projects&ensp;&&ensp;Work - Experiance
                                </div>
                                <div class="ui divider"></div>
                                Hi!
                            </div>
                    </div><!--The tabcontent Projects & Work Experiance ends here!-->
        
                    
                    
                    <!--The tabcontent Other Achievements starts here!-->
                    <div class="ui tab segment" data-tab="fifth">
                            <div class="content">
                                <div class="ui header">
                                    Other Achievements
                                </div>
                                <div class="ui divider"></div>
                                Hi!
                            </div>
                    </div><!--The tabcontent Other Achievements ends here!-->
                                
            </div><!--The central rail ends here!-->
        </div>
        
            <a href="chat.php"
               class="ui yellow circular button"
               style="position: absolute;
                      bottom: 10%;
                      right: 0%;">
                        
                <i class="left arrow icon"></i>
                Home
            </a>    

        
        </div>
    </body>
        <!--The javascripts!-->
        <script src="js/jquery-3.2.0.min.js"></script>
        <script src="js/tab.js"></script>
        <script src="js/editProfile.js"></script>
        <script src="js/uploadImage.js"></script>
        <script src="js/semantic.min.js"></script>
        
        <script type="text/javascript">
            $("#fbIcon").hide();
            $("#twitterIcon").hide();
            $("#linkedinIcon").hide();
            $("#githubIcon").hide();
        </script>
    
        
        
</html>