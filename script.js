var num = document.getElementById("articlenum");
var button = document.getElementById("thebutton");
button.addEventListener("click", function(){
    console.log("function runs");
    window.location.href = 'https://www.poinikoskodikas.gr/#pk'+num.value;
})

num.addEventListener("change", function(){
    console.log("function runs");
    window.location.href = 'https://www.poinikoskodikas.gr/#pk'+num.value;
})