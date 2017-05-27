function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
    
    var toRollNum = _("toRollNum").value;
    var fromRollNum = _("fromRollNum").value;
    
    console.log(fromRollNum, toRollNum);
    
    
    var file = _("fileLocationInput").files[0];
        //alert(file.name+" | "+file.size+" | "+file.type);
  
    var formdata = new FormData();
        formdata.append("fromRollNum", fromRollNum);
        formdata.append("toRollNum", toRollNum);
        formdata.append("fileLocationInput", file);
    
        console.log(formdata);
    
    var ajax = new XMLHttpRequest();
        ajax.upload.addEventListener("progress", progressHandler, false);
        ajax.addEventListener("load", completeHandler, false);
        ajax.addEventListener("error", errorHandler, false);
        ajax.addEventListener("abort", abortHandler, false);
        ajax.open("POST", "uploadprivatefile.php");
        ajax.send(formdata);
}

function progressHandler(event) {
  
    var percent = (event.loaded / event.total) * 100;
    
        percentPB(percent);
    
        _("progressBar").value = Math.round(percent);
        _("percentLabel").innerHTML = "Uploaded: "+Math.round(percent) + "%";
}

function completeHandler(event) {
  _("percentLabel").innerHTML = event.target.responseText;
  _("progressBar").value = 0;
}

function errorHandler(event) {
  _("percentLabel").innerHTML = "Upload Failed";
}

function abortHandler(event) {
  _("percentLabel").innerHTML = "Upload Aborted";
}

function percentPB(percentBar){
    $('#progressBar').progress({
      percent: percentBar
    });
}