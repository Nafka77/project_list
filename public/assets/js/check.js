$(document).ready(function(){
    $("#check").on("change", "input:checkbox", function(){
        document.getElementsByTagName("h3").disabled = true;
        $("#check").submit();
    });
});