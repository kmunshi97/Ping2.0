<html>

    <head>

        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/reset.css">
        
        <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/components/icon.css">
        
        <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    
        <!--The javascripts!-->
        <script src="js/jquery-3.2.0.min.js"></script>
        <script src="js/tab.js"></script>
        <script src="js/semantic.min.js"></script>

    </head>

    <body class="ui container">
        <div class="ui menu">
            <a class="browse item" id="new-message">
                Messages
                <i class="dropdown icon"></i>
            </a>
            
            <div class="ui popup"
                 style="width: 20vw;">
                
                <!--The new message list starts here-->
                <div class="ui animated list" 
                     id="new-message-list">
                </div>
                <!--The new message list ends here-->
            </div>
        </div>
        <!--The menu ends here!-->
        
    </body>

    <script type="text/javascript" src="js/newmessage.js"></script>
    
    <script>
        $('#new-message')
            .popup({
                inline     : true,
                hoverable  : true,
                position   : 'bottom left',
                delay: {
                    show: 250,
                    hide: 500
                }
            })
        ;
    </script>

    <script>
        $(document).ready(function(){
            newMessage();
        });
    </script>
</html>