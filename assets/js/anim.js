var mid = document.querySelector('.mid');
var right = document.querySelector('.right');

mid.addEventListener('click', function(){
    var url = "templates/intervenant.php";
    window.location.href = url;
});

right.addEventListener('click', function(){
    var url = "templates/apprenant.php";
    window.location.href = url;
});