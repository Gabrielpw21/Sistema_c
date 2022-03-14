
setInterval(function(){
    $.post("classes/UserOnline.php", {contar: '', }, function(data){
    $('#online').text(data);

    });

}, 40000);