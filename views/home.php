<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container2{
    width: 100%;
    min-height: 100vh;
    padding-left: 8%;
    padding-left: 8%;
    box-sizing: border-box;
    overflow: hidden;
}
.row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 100px 0;
}
.col-1{
    flex-basis: 40%;
    position: relative;
    margin-left: 50px;
}
.col-1 h2{
    font-size: 54px;
}
.col-1 h3{
    font-size: 30px;
    color: #707070;
    font-weight: 100;
    margin: 20px 0 10px;
}
.col-1 p{
    font-size: 16px;
    color: #b7b7b7;
    font-weight: 100;
}
.col-1 p{
    margin: 30px 0;
    font-size: 20px;
}
.button2{
    width: 140px;
    border: 0;
    padding: 12px 10px;
    outline: none;
    color: #fff;
    background:linear-gradient(to right,#A9A9A9,#696969);
    border-radius: 6px;
    cursor: pointer;
    transition: width 0.5s;
}
.button2:hover{
    width: 160px;
    align-items: center;
    justify-content: space-between;
}
.col-1::after{
    content: '';
    width: 10px;
    height: 57%;
    background: linear-gradient(#A9A9A9,#696969);
    position: absolute;
    left: -40px;
    top: 8px;
}
.col-2{
    position:relative;
    flex-basis: 60%;
    display: flex;
    align-items: center;
}
.col-2 .controller{
    width: 60%;
}
.color-box{
    position: absolute;
    right: 0;
    top:0;
    background: linear-gradient(#A9A9A9,#696969);
    border-radius: 20px 0 0 20px;
    height: 95%;
    width: 90%;
    z-index: -1;
    transform: translateX(150px);
}
@media only screen and (max-width:700px){
    .row{
        flex-direction: column-reverse;
        margin: 50px 0;
    }
    .col-2{
        flex-basis: 100%;
        margin-bottom: 50px;
    }
    .col-2 .controller{
        width: 77%;
    }
    .color-box{
        transform: translateX(75px);
    }
    .col-1{
        flex-basis: 100%;
    }
    .col-1 h2{
        font-size: 35px;
    }
    .col-1 h3{
        font-size: 15px;
    }
}
    </style>
</head>
<body>
<div class="container2">
    <div class="row">
        <div class="col-1">
            <h2>Pooriwat<br>Poolab</h2>
            <h3>Item and Video Call</h3>
            <p>เจ้าหน้าที่home isolation โทรสอบถามข้อมูลความต้องการ 
                โดยบันทึกข้อมูลสิ่งของที่จำเป็น สำหรับส่งไปยังที่อยู่ที่ผู้ป่วยทำ 
                home isolation และ มีการ Video Call เพื่อสอบถามอาการจาก 
                เจ้าหน้าที่และประเมินระดับสี และบันทึกข้อมูลทุกวัน</p>
                <a href="http://158.108.207.4/db21/db21_086/?controller=item&action=index">
                    <button class="button2">Start</button>
                </a>
            
        </div>
        <div class="col-2">
            <img src="https://images.pngnice.com/download/2007/My-Neighbor-Totoro-PNG-Background-Image.png" class="controller">
            <div class="color-box"></div>
        </div>
    </div>
</div>
</body>
</html>