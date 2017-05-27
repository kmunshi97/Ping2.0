$(document).ready(function() {
    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#modalDisplayImage').attr('src', e.target.result);

                $('#displayImage').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $("#imageLocationInput").on('change', function(){
        readURL(this);
    });
});