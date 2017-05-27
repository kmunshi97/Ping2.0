function editFirst(){
    
    var fbSpan = $("#fbSpan").attr('href').trim();
    var twitterSpan = $("#twitterSpan").attr('href').trim();
    var linkedinSpan = $("#linkedinSpan").attr('href').trim();
    var githubSpan = $("#githubSpan").attr('href').trim();
    
    var dobSpan = $("#dobSpan").text().trim();
    var mailSpan = $("#mailSpan").text().trim();
    var aboutSpan = $("#aboutSpan").text().trim();
    var contactSpan = $("#contactSpan").text().trim();
    var objectiveSpan = $("#objectiveSpan").text().trim();
    
    
    var buttonValue = $("#editButton").val()
        
    if(buttonValue == "Edit"){   
        $("#editButton").val("Save");
        
        $("#mailButton").hide();
        
        $("#fbInput").val(fbSpan);
        $("#fbButton").hide();
        $("#fbIcon").show();
        $("#fbLabel").show();
        $("#fbInput").show();
        
        $("#twitterInput").val(twitterSpan);
        $("#twitterButton").hide();
        $("#twitterIcon").show();
        $("#twitterLabel").show();
        $("#twitterInput").show();
        
        $("#linkedinInput").val(linkedinSpan);
        $("#linkedinButton").hide();
        $("#linkedinIcon").show();
        $("#linkedinLabel").show();
        $("#linkedinInput").show();
        
        $("#githubInput").val(githubSpan);
        $("#githubButton").hide();
        $("#githubIcon").show();
        $("#githubLabel").show();
        $("#githubInput").show();
        
        $("#objectiveInput").val(objectiveSpan);
        $("#objectiveInput").show();
        $("#objectiveSpan").hide();

        $("#mailInput").val(mailSpan);
        $("#mailInput").show();
        $("#mailSpan").hide();
        $("#mailIcon").hide();

        $("#dobInput").val(dobSpan);
        $("#dobInput").show();
        $("#dobSpan").hide();

        $("#contactInput").val(contactSpan);
        $("#contactInput").show();
        $("#contactSpan").hide();
        $("#contactIcon").hide();

        $("#aboutTextarea").val(aboutSpan);
        $("#aboutTextarea").show();
        $("#aboutSpan").hide();

    }
    else if($("#editButton").val("Save")){
        $("#editButton").val("Edit");

        $("#mailButton").show();
        
        var fbValue = $('#fbInput').val().trim();
        $('#fbSpan').attr('href', fbValue);
        $("#fbLabel").hide();
        $("#fbInput").hide();
        $("#fbIcon").hide();
        $("#fbButton").show();
    
        var twitterValue = $('#twitterInput').val().trim();
        $('#twitterSpan').attr('href', twitterValue);
        $("#twitterLabel").hide();
        $("#twitterInput").hide();
        $("#twitterIcon").hide();
        $("#twitterButton").show();
        
        var linkedinValue = $('#linkedinInput').val().trim();
        $('#linkedinSpan').attr('href', linkedinValue);
        $("#linkedinLabel").hide();
        $("#linkedinInput").hide();
        $("#linkedinIcon").hide();
        $("#linkedinButton").show();
        
        var githubValue = $('#githubInput').val().trim();
        $('#githubSpan').attr('href', githubValue);
        $("#githubLabel").hide();
        $("#githubInput").hide();
        $("#githubIcon").hide();
        $("#githubButton").show();
        
        var objectiveValue = $("#objectiveInput").val().trim();
        $("#objectiveSpan").text(objectiveValue);
        $("#objectiveInput").hide();
        $("#objectiveSpan").show();
        
        var mailValue = $("#mailInput").val().trim();
        $("#mailSpan").text(mailValue);
        $("#mailInput").hide();
        $("#mailSpan").show();
        $("#mailIcon").show();
        
        var dobValue = $("#dobInput").val().trim();
        $("#dobSpan").text(dobValue);
        $("#dobInput").hide();
        $("#dobSpan").show();
        
        var contactValue = $("#contactInput").val().trim();
        $("#contactSpan").text(contactValue);
        $("#contactInput").hide();
        $("#contactSpan").show();
        $("#contactIcon").show();
        
        var aboutSpan = $("#aboutTextarea").val().trim();
        $("#aboutSpan").text(aboutSpan);
        $("#aboutTextarea").hide();
        $("#aboutSpan").show();
        
    
    }
    
}