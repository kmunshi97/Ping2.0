<?php 
    // The php file with the header template!
    include 'header.php' ;
/*
    session_start();
    if(isset($_SESSION["userRoll"])
       $r = $_SESSION["userRoll"];
    else  
       $r = '2015103'//echo $r;
    */
?>


<html>
    <head>
        <title>
            Ping!
        </title>
        <style>
            body{
                height: 100vh;
                overflow-y: hidden;
            }
        </style>
    </head>
    
    <body>

        <!--The TNC Modal starts here!-->
        <div class="ui modal"
             id="tncModal">
            
            <div class="header">
                Terms & Conditions
            </div>
            
            <div class="image content">
                <img id="modalDisplayImage"
                     class="ui circular image"
                     style="width: 24%;
                            height: 24%"
                     src="img/tnc.png">

                <div class="description" 
                     style="margin-left: 2.5vw;
                            margin-right: 2.5vw;
                            width: 68%;
                            height: 27.5vh;
                            overflow-y: auto;">
                    
                    <span class="ui dividing header">
                        Terms & Conditions:
                    </span> 
                    <ul>
                        <li>
                            The data sharing is NOT anonymous.
                        </li>

                        <li>
                            The developers or the institute are not responsible or liable for the data shared by the user.
                        </li>
                        
                        <li>
                            The data shared by the user and any consequences of it is the sole responsibility of the user.
                        </li>
                        
                        <li>
                            Due to limited storage capacity of the servers, users are advised to avoid redundant data. 
                        </li>

                        <li>
                            The college reserves the right to change any terms and conditions without any prior notice.
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--The TNC modal ends here!-->

        
        <!--The main container of the body!-->
        <div class="ui container">
            
            <div class="ui segment" 
                 style="width: 42.5vw;
                        margin-top: 1.5vw;
                        margin-bottom: 0.5vw;
                        margin-left: auto;
                        margin-right: auto;">
            
                <!--Left rail starts here!-->
                <div class="ui left very close mini rail"
                     style="width: 22.5vw;
                            height: 84vh;
                            overflow-y: auto;">
                
                    <div class="ui segment">
                        <div class="ui fixed header">
                            Friends:
                        </div>
                        
                        <?php 
                            include 'friendlist.php';
                        ?>
                    </div>
                
                </div>
                <!--Left rails ends here!-->
        
                
                <!--The right rail starts here!-->
                <div class="ui right close rail" 
                     style="width: 23vw;">
                    
                    <!--The quick chat card starts here!-->
                    <div class="ui fluid card"
                         style="height: 27vw;
                                overflow-y: hidden;">
                        
                        <!--The card content begins here!-->
                        <div class="ui content">
                        
                            <!--The header starts here!-->
                            <div class="ui dividing header">
                                <span class="ui header">
                                    Share Files
                                </span>
                                <i class="red upload icon right floated"></i>
                            </div>
                            <!--The header ends here!-->
                            
                            <!--The description starts here!-->
                            <div class="description">
                            
                                <!--The move up reveal-->
                                <div class="ui move up reveal">
                                
                                    <!--The visible content begins here!-->
                                    <div class="visible content">
                                        <!--TODO: Add PHP-->
                                        <img class="ui large image"
                                            style="width: 32vw;
                                                   height: 20vw;"
                                             src="img/profilepictures/2015121.jpg">
                                    </div>
                                    <!--The visible content ends here!-->
                                    <div class="hidden">
                                        <div class="description"
                                             style="position: absolute;
                                                    left: 1.5vw;
                                                    right: 1.5vw;
                                                    top: 1.5vw;
                                                    bottom: 0.5vh;">
                                            
                                            <form class="ui form"
                                                  method="post"
                                                  enctype="multipart/form-data"
                                                  action="uploadprivatefile.php">
                                               
                                                <div class="two fields">
                                                    <div class="field">
                                                        <label>From</label>
                                                        <input id="fromRollNum"
                                                               name="fromRollNum"
                                                               type="number" 
                                                               value="2015121"
                                                               readonly>
                                                    </div>

                                                    <div class="field">
                                                        <label>To</label>
                                                         <input id="toRollNum"
                                                                name="toRollNum"
                                                                type="number"
                                                                maxlength="7"
                                                                placeholder="Roll Number">
                                                    </div>
                                                </div>
                                                
                                                <div class="field">
                                                    <label>Choose File</label>
                                                     <input id="fileLocationInput"
                                                            name="fileLocationInput"
                                                            type="file"> 
                                                </div>
                                                
                                                <br>
                                                
                                                <div class="ui indicating progress"
                                                     id="progressBar">
                                                    <div class="bar">
                                                    </div>
                                                    <div class="label" id="percentLabel"></div>
                                                </div>
                                                
                                                <div class="ui divider"></div>    
                                                
                                                <div class="two fields">
                                                    <div class="field">
                                                        <label>
                                                            <a onclick="tncModal()">
                                                                Terms and Conditions
                                                            </a>
                                                        </label>
                                                        
                                                        <div class="ui toggle checkbox">
                                                            <input type="checkbox" 
                                                                   name="tnc"
                                                                   checked="true">
                                                            <label>I accept</label>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="field">
                                                        <input id="uploadButton"
                                                               class="ui large primary button right floated"
                                                               type="button"
                                                               onclick="uploadFile()"
                                                               value="Upload"> 
                                                    </div>
                                                </div>
                                            </form>

                                        </div> 
                                    </div>
                                    
                                </div>
                                <!--The move up reveal ends here!-->
                            </div>
                            <!--The description ends here!-->
                        </div>
                        
                        <div class="extra content">
                            For Public Uploads:
                            <span class="right floated">
                                <i class="red upload icon"></i>
                                <a href="publicupload.php">Click here!</a>
                            </span>
                        </div>
                    </div>
                    <!--The card ends here!-->
                        
                        
                      
    
<!--
                        <div class="extra content">
                        
                            <div class="ui huge transparent left icon input">
                            
                                <i class="talk icon"></i>                        
                                <input type="text" placeholder="Enter message here...">
                                <i class=" icon"></i>

                            </div>
                        </div>
-->
                    <!--</div>--><!--The card ends here!-->
                    
               
                    <!--The events inclusion goes here!-->
                    <div> 
                        <?php
                            include 'notification.php';
                        ?>
                    </div>
                    
                </div><!--Right Rail ends here!-->
              
                <!--The center rail!-->
                <div class="center rail">
                    <?php
                        include 'chatbox.php';
                    ?>
                </div>
                
            </div><!--The entire rail ends here!-->
            
        </div><!--Container ends here!-->
        
    </body>
    
        <!--The javascripts!-->
        <script src="js/jquery-3.2.0.min.js"></script>
        <script src="js/tab.js"></script>
        <script src="js/checkbox.js"></script>
        <script src="js/uploadprivatefile.js"></script>
        <script src="js/semantic.min.js"></script>
        
</html>
