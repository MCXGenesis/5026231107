let molds=[]; let num=144;
let d;

function setup(){
    createCanvas(windowWidth, 2*windowHeight);
    angleMode(DEGREES);
    d = pixelDensity();

    for(let i=0;i<num;i++){
        molds[i] = new Mold();
    }
}

function draw(){
    background(0, 5);
    loadPixels();

    for(let i=0; i<num; i++){
        if (key == "s") { // If "s" key is pressed, molds stop moving
        molds[i].stop = true;
        updatePixels();
        noLoop();
    } else {
        molds[i].stop = false;
    }
        molds[i].update();
        molds[i].display();
    }
}
