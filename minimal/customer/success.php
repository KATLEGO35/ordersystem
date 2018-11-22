<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="../image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Order management system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    html, body {
  padding: 0;
  margin: 0;
  background-color: #ecf0f1;
}
html .circle, html .puzzle_wrapper:hover .puzzle_1, body .puzzle_wrapper:hover html .puzzle_1, html .puzzle_wrapper:hover .puzzle_2, body .puzzle_wrapper:hover html .puzzle_2, html .puzzle_wrapper:hover .puzzle_3, body .puzzle_wrapper:hover html .puzzle_3, html .puzzle_wrapper:hover .puzzle_4, body .puzzle_wrapper:hover html .puzzle_4, body .circle, html .puzzle_wrapper:hover body .puzzle_1, body .puzzle_wrapper:hover .puzzle_1, html .puzzle_wrapper:hover body .puzzle_2, body .puzzle_wrapper:hover .puzzle_2, html .puzzle_wrapper:hover body .puzzle_3, body .puzzle_wrapper:hover .puzzle_3, html .puzzle_wrapper:hover body .puzzle_4, body .puzzle_wrapper:hover .puzzle_4 {
  background-color: #34495e;
  border-radius: 100% 0 0 0;
  border-top: 5px solid #34495e;
  border-left: 5px solid #34495e;
  box-shadow: none;
}
html .circle:before, html .puzzle_wrapper:hover .puzzle_1:before, body .puzzle_wrapper:hover html .puzzle_1:before, html .puzzle_wrapper:hover .puzzle_2:before, body .puzzle_wrapper:hover html .puzzle_2:before, html .puzzle_wrapper:hover .puzzle_3:before, body .puzzle_wrapper:hover html .puzzle_3:before, html .puzzle_wrapper:hover .puzzle_4:before, body .puzzle_wrapper:hover html .puzzle_4:before, html .circle:after, html .puzzle_wrapper:hover .puzzle_1:after, body .puzzle_wrapper:hover html .puzzle_1:after, html .puzzle_wrapper:hover .puzzle_2:after, body .puzzle_wrapper:hover html .puzzle_2:after, html .puzzle_wrapper:hover .puzzle_3:after, body .puzzle_wrapper:hover html .puzzle_3:after, html .puzzle_wrapper:hover .puzzle_4:after, body .puzzle_wrapper:hover html .puzzle_4:after, body .circle:before, html .puzzle_wrapper:hover body .puzzle_1:before, body .puzzle_wrapper:hover .puzzle_1:before, html .puzzle_wrapper:hover body .puzzle_2:before, body .puzzle_wrapper:hover .puzzle_2:before, html .puzzle_wrapper:hover body .puzzle_3:before, body .puzzle_wrapper:hover .puzzle_3:before, html .puzzle_wrapper:hover body .puzzle_4:before, body .puzzle_wrapper:hover .puzzle_4:before, body .circle:after, html .puzzle_wrapper:hover body .puzzle_1:after, body .puzzle_wrapper:hover .puzzle_1:after, html .puzzle_wrapper:hover body .puzzle_2:after, body .puzzle_wrapper:hover .puzzle_2:after, html .puzzle_wrapper:hover body .puzzle_3:after, body .puzzle_wrapper:hover .puzzle_3:after, html .puzzle_wrapper:hover body .puzzle_4:after, body .puzzle_wrapper:hover .puzzle_4:after {
  background-color: #34495e;
}
html .puzzle, html .puzzle_wrapper .puzzle_1, body .puzzle_wrapper html .puzzle_1, html .puzzle_wrapper .puzzle_2, body .puzzle_wrapper html .puzzle_2, html .puzzle_wrapper .puzzle_3, body .puzzle_wrapper html .puzzle_3, html .puzzle_wrapper .puzzle_4, body .puzzle_wrapper html .puzzle_4, body .puzzle, html .puzzle_wrapper body .puzzle_1, body .puzzle_wrapper .puzzle_1, html .puzzle_wrapper body .puzzle_2, body .puzzle_wrapper .puzzle_2, html .puzzle_wrapper body .puzzle_3, body .puzzle_wrapper .puzzle_3, html .puzzle_wrapper body .puzzle_4, body .puzzle_wrapper .puzzle_4 {
  height: 200px;
  width: 200px;
  position: absolute;
  border-radius: 50% 0 0 0;
  box-shadow: 0px 0px 20px -5px black;
  transition: all .3s ease;
}
html .puzzle:after, html .puzzle_wrapper .puzzle_1:after, body .puzzle_wrapper html .puzzle_1:after, html .puzzle_wrapper .puzzle_2:after, body .puzzle_wrapper html .puzzle_2:after, html .puzzle_wrapper .puzzle_3:after, body .puzzle_wrapper html .puzzle_3:after, html .puzzle_wrapper .puzzle_4:after, body .puzzle_wrapper html .puzzle_4:after, html .puzzle:before, html .puzzle_wrapper .puzzle_1:before, body .puzzle_wrapper html .puzzle_1:before, html .puzzle_wrapper .puzzle_2:before, body .puzzle_wrapper html .puzzle_2:before, html .puzzle_wrapper .puzzle_3:before, body .puzzle_wrapper html .puzzle_3:before, html .puzzle_wrapper .puzzle_4:before, body .puzzle_wrapper html .puzzle_4:before, body .puzzle:after, html .puzzle_wrapper body .puzzle_1:after, body .puzzle_wrapper .puzzle_1:after, html .puzzle_wrapper body .puzzle_2:after, body .puzzle_wrapper .puzzle_2:after, html .puzzle_wrapper body .puzzle_3:after, body .puzzle_wrapper .puzzle_3:after, html .puzzle_wrapper body .puzzle_4:after, body .puzzle_wrapper .puzzle_4:after, body .puzzle:before, html .puzzle_wrapper body .puzzle_1:before, body .puzzle_wrapper .puzzle_1:before, html .puzzle_wrapper body .puzzle_2:before, body .puzzle_wrapper .puzzle_2:before, html .puzzle_wrapper body .puzzle_3:before, body .puzzle_wrapper .puzzle_3:before, html .puzzle_wrapper body .puzzle_4:before, body .puzzle_wrapper .puzzle_4:before {
  content: '';
  position: absolute;
  height: 50px;
  width: 50px;
  border-radius: 0 0 50% 50%;
  transition: all .3s ease;
}
html .puzzle_wrapper, body .puzzle_wrapper {
  height: 450px;
  width: 450px;
  position: relative;
  margin: 100px auto;
}
html .puzzle_wrapper:before, html .puzzle_wrapper:after, body .puzzle_wrapper:before, body .puzzle_wrapper:after {
  content: '';
  position: absolute;
  height: 40px;
  width: 120px;
  background-color: #03C9A9;
  top: 251px;
  left: 115px;
  opacity: 0;
  transition: opacity .3s ease;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  border-radius: 20px 0px 20px 20px;
  box-shadow: 5px 5px 20px -5px #333;
}
html .puzzle_wrapper:after, body .puzzle_wrapper:after {
  content: '';
  position: absolute;
  width: 190px;
  height: 40px;
  top: 198px;
  left: 189px;
  -webkit-transform: rotate(135deg);
          transform: rotate(135deg);
  border-radius: 20px 0px 0px 20px;
  box-shadow: -10px -5px 20px -5px #333;
}
html .puzzle_wrapper:hover, body .puzzle_wrapper:hover {
  cursor: pointer;
  -webkit-animation: circle .3s ease-in .3s 1;
          animation: circle .3s ease-in .3s 1;
}
html .puzzle_wrapper:hover:before, html .puzzle_wrapper:hover:after, body .puzzle_wrapper:hover:before, body .puzzle_wrapper:hover:after {
  z-index: 4;
  opacity: 1;
}
html .puzzle_wrapper:hover .puzzle_1, body .puzzle_wrapper:hover .puzzle_1 {
  -webkit-transform: translatex(25px) translatey(25px);
          transform: translatex(25px) translatey(25px);
}
html .puzzle_wrapper:hover .puzzle_2, body .puzzle_wrapper:hover .puzzle_2 {
  -webkit-transform: rotate(90deg) translatex(25px) translatey(25px);
          transform: rotate(90deg) translatex(25px) translatey(25px);
}
html .puzzle_wrapper:hover .puzzle_3, body .puzzle_wrapper:hover .puzzle_3 {
  -webkit-transform: rotate(-90deg) translatex(25px) translatey(25px);
          transform: rotate(-90deg) translatex(25px) translatey(25px);
}
html .puzzle_wrapper:hover .puzzle_4, body .puzzle_wrapper:hover .puzzle_4 {
  -webkit-transform: rotate(180deg) translatex(25px) translatey(25px);
          transform: rotate(180deg) translatex(25px) translatey(25px);
}
html .puzzle_wrapper .puzzle_1, body .puzzle_wrapper .puzzle_1 {
  background-color: #1E8BC3;
  top: 0px;
  left: 0px;
  z-index: 3;
}
html .puzzle_wrapper .puzzle_1:after, html .puzzle_wrapper .puzzle_1:before, body .puzzle_wrapper .puzzle_1:after, body .puzzle_wrapper .puzzle_1:before {
  background-color: #1E8BC3;
  top: 190px;
  left: 75px;
}
html .puzzle_wrapper .puzzle_1:before, body .puzzle_wrapper .puzzle_1:before {
  top: calc(50% - 20px);
  left: 190px;
  background-color: #1E8BC3;
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
}
html .puzzle_wrapper .puzzle_2, body .puzzle_wrapper .puzzle_2 {
  background-color: #03C9A9;
  top: 0px;
  left: 250px;
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
html .puzzle_wrapper .puzzle_2:after, html .puzzle_wrapper .puzzle_2:before, body .puzzle_wrapper .puzzle_2:after, body .puzzle_wrapper .puzzle_2:before {
  background-color: #ecf0f1;
  top: 200px;
  left: 40px;
}
html .puzzle_wrapper .puzzle_2:before, body .puzzle_wrapper .puzzle_2:before {
  top: calc(50% - 20px);
  left: 160px;
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
html .puzzle_wrapper .puzzle_2:after, body .puzzle_wrapper .puzzle_2:after {
  top: 160px;
  left: calc(50% - 20px);
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
html .puzzle_wrapper .puzzle_3, body .puzzle_wrapper .puzzle_3 {
  background-color: #EC644B;
  top: 250px;
  left: 0;
  z-index: 2;
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
}
html .puzzle_wrapper .puzzle_3:after, html .puzzle_wrapper .puzzle_3:before, body .puzzle_wrapper .puzzle_3:after, body .puzzle_wrapper .puzzle_3:before {
  background-color: #EC644B;
  top: 190px;
  left: 75px;
}
html .puzzle_wrapper .puzzle_3:before, body .puzzle_wrapper .puzzle_3:before {
  top: calc(50% - 25px);
  left: 160px;
  background-color: #ecf0f1;
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
html .puzzle_wrapper .puzzle_4, body .puzzle_wrapper .puzzle_4 {
  background-color: #F9BF3B;
  top: 250px;
  left: 250px;
  z-index: 1;
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
html .puzzle_wrapper .puzzle_4:after, html .puzzle_wrapper .puzzle_4:before, body .puzzle_wrapper .puzzle_4:after, body .puzzle_wrapper .puzzle_4:before {
  background-color: #F9BF3B;
  top: 190px;
  left: 80px;
}
html .puzzle_wrapper .puzzle_4:before, body .puzzle_wrapper .puzzle_4:before {
  top: calc(50% - 25px);
  left: 160px;
  background-color: #ecf0f1;
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

@-webkit-keyframes circle {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1;
  }
  25% {
    -webkit-transform: scale(0.9);
            transform: scale(0.9);
    opacity: .9;
  }
  70% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
    opacity: .95;
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1;
  }
}

@keyframes circle {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1;
  }
  25% {
    -webkit-transform: scale(0.9);
            transform: scale(0.9);
    opacity: .9;
  }
  70% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
    opacity: .95;
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1;
  }
}

    </style>
</head>
<body>

<a href="index.php">
<div class="puzzle_wrapper">

<div class="puzzle_1"></div>

<div class="puzzle_2"></div>

<div class="puzzle_3"></div>

<div class="puzzle_4"></div>

</div>
</a>
</body>
</html>