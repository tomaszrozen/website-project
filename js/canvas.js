var canvas = document.getElementById("canva");
var ctx = canvas.getContext("2d");
var radius = 10;
var x = canvas.width/2;
var y = canvas.height/2;
var dx = 2;
var dy = -2;

function drawBall() {
    ctx.beginPath();
    ctx.arc(x, y, radius, 0, Math.PI*2);
    ctx.fillStyle = "black";
    ctx.fill();
    ctx.closePath();
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBall();
    
    if(x + dx > canvas.width-radius || x + dx < radius) {
        dx = -dx;
    }
    if(y + dy > canvas.height-radius || y + dy < radius) {
        dy = -dy;
    }
    
    x += dx;
    y += dy;
}

setInterval(draw, 10);