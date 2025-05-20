class Mold {
    constructor(){
        this.x = random(width);
        this.y = random(height);
        this.r = 4;

        this.heading = random(360);
        this.vx =cos(this.heading);
        this.vy =sin(this.heading);
        this.rotAngle = 45;

        this.rsensorPos = createVector(0, 0);
        this.lsensorPos = createVector(0, 0);
        this.fsensorPos = createVector(0, 0);
        this.sensorAngle = 45;
        this.sensorDist = 10;
    }

    update(){
        this.vx = cos(this.heading);
        this.vy = sin(this.heading);

        this.x = (this.x + this.vx + width)%width;
        this.y = (this.y + this.vy + height)%height;

        this.getSensorPos(this.rsensorPos,this.heading + this.sensorAngle);
        this.getSensorPos(this.lsensorPos,this.heading - this.sensorAngle);
        this.getSensorPos(this.fsensorPos,this.heading);

        let index, l, r, f;
        index = 4*(d*floor(this.rsensorPos.y))*(d*width)+ 4*(d*floor(this.rsensorPos.x));
        r = pixels[index];

        index = 4*(d*floor(this.lsensorPos.y))*(d*width)+ 4*(d*floor(this.lsensorPos.x));
        l = pixels[index];

        index = 4*(d*floor(this.fsensorPos.y))*(d*width)+ 4*(d*floor(this.fsensorPos.x));
        f = pixels[index];

        if (f > l && f > r) {
            this.heading += 0;
        }
        else if (f < l && f < r) {
            if (random(1) < 0.5) {
                this.heading += this.rotAngle;
            } else {
                this.heading -= this.rotAngle;
            }
        } else if (l > r) {
            this.heading += -this.rotAngle;
        } else if (r > l) {
            this.heading += this.rotAngle;
        }
    }

    display(){
        noStroke();
        fill(255);
        ellipse(this.x,this.y,this.r*2,this.r*2);

        // line(this.x, this.y, this.x+this.r*3*this.vx, this.y+this.r*3*this.vy);
        // fill(255, 0, 0);
        // ellipse(this.rsensorPos.x, this.rsensorPos.y, this.r*2, this.r*2);
        // ellipse(this.lsensorPos.x, this.lsensorPos.y, this.r*2, this.r*2);
        // ellipse(this.fsensorPos.x, this.fsensorPos.y, this.r*2, this.r*2);

    }

    getSensorPos(sensor,angle){
        sensor.x = (this.x + this.sensorDist*cos(angle)+width)%width;
        sensor.y = (this.y + this.sensorDist*sin(angle)+height)%height;
    }
}
