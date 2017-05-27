/*
function newMessage(username, branch, rollnum){
    var friendName = document.createTextNode(username);
    var friendBranch = document.createTextNode(rollnum);
    var friendRollNumber = document.createTextNode(branch);
*/

function newMessage(){
    var friendName = document.createTextNode("Kanishka Munshi");
    var friendBranch = document.createTextNode("CSE");
    var friendRollNumber = document.createTextNode("2015121");
    var space = document.createTextNode(" ");

    var parent = document.getElementById("new-message-list");
    
    var itemDiv = document.createElement("div");
    itemDiv.className = "ui item";
    
    var contentDiv = document.createElement("div");
    contentDiv.className = "content";
    
    var descriptionDiv = document.createElement("div");
    descriptionDiv.className = "description";
    
    var headerAnchor = document.createElement("a");
    headerAnchor.className = "ui header";

    var userAvatar = document.createElement("img");
    userAvatar.src = "img/characters/iron-man.jpg";
    userAvatar.className = "ui circular image right floated";

    var dividerDiv = document.createElement("div");
    dividerDiv.className = "ui divider";
    
    parent.appendChild(itemDiv);
    itemDiv.appendChild(contentDiv);
    headerAnchor.appendChild(userAvatar);
    contentDiv.appendChild(headerAnchor);
    contentDiv.appendChild(descriptionDiv);
    parent.appendChild(dividerDiv);

    headerAnchor.appendChild(friendName);
    descriptionDiv.appendChild(friendBranch);
    descriptionDiv.appendChild(space);
    descriptionDiv.appendChild(friendRollNumber);
}

$('#new-message')
    .popup({
        inline     : true,
        hoverable  : true,
        position   : 'bottom left',
        delay: {
            show: 250,
            hide: 500
        }
    });
;

$(document).ready(function(){
    newMessage();
    newMessage();
    newMessage();
});


