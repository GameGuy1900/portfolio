let px = "px";
let move1 = 10;
let move2 = 10;
let move3 = 10;
let move4 = 10;
document.getElementById("playBtn").addEventListener("click", ()=>{
    document.getElementById("playBtn").disabled = true;
    setInterval(()=>{
        if (move1 < 780) {
            document.getElementById('contender-1').style.left = move1.toString().concat(px);
            move1 += Math.floor(Math.random() * 55);
        }
        if (move2 < 780) {
            document.getElementById('contender-2').style.left = move2.toString().concat(px);
            move2 += Math.floor(Math.random() * 55);
        }
        if (move3 < 780) {
            document.getElementById('contender-3').style.left = move3.toString().concat(px);
            move3 += Math.floor(Math.random() * 55);
        }
        if (move4 < 780) {
            document.getElementById('contender-4').style.left = move4.toString().concat(px);
            move4 += Math.floor(Math.random() * 55);
        }
    }, 500);
    if (move1 > 745){
        alert("player 1 won!!");
        document.getElementById("playBtn").disabled = false;
    }
    else if (move2 > 745){
        alert("player 2 won!!");
        document.getElementById("playBtn").disabled = false;
    }
    else if (move3 > 745){
        alert("player 3 won!!");
        document.getElementById("playBtn").disabled = false;
    }
    else if (move4 > 745){
        alert("player 4 won!!");
        document.getElementById("playBtn").disabled = false;
    }
});
