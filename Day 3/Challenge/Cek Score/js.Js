function cekScore(){
    var scoreInput = document.getElementById('InputScore').value

    if (scoreInput>=80 && scoreInput<=100){
        alert("Your Grade is A");}   
    else if (scoreInput>=60 && scoreInput<80){
        alert("Your Grade is B");}
    else if (scoreInput>=40 && scoreInput<60){
        alert("Your Grade is C");}
    else if (scoreInput < 40){
        alert("Your Grade is D")}
    else{
        alert("cannot calculate your grade");
        }
}