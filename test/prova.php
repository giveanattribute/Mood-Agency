<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mood Agency</title>


    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- INIZIO STILE -->
    <style>
         :root {
            cursor: none !important
        }
        
        body {
            background: black;
            font-family: 'Montserrat', sans-serif;
        }
        
        .container {
            width: 100vw;
            height: 100vh;
        }
        
        .navigator {
            width: 100%;
            height: 100%;
            position: absolute;
        }
        
        .menu {
            -webkit-transition: all 0.1s -webkit-transform linear;
            transition: all 0.1s -webkit-transform linear;
            transition: all 0.1s transform linear;
            transition: all 0.1s transform linear, 0.1s -webkit-transform linear;
            position: relative;
            background: 0;
            background-color: rgb(202, 131, 0);
            color: rgb(126, 82, 0);
            border-radius: 2.2rem;
            float: right;
            margin: 2rem;
            height: 2.2rem;
            width: 2.2rem;
            margin-right: 30px;
            outline: 0;
            padding: 0;
            border: 0;
            z-index: 1000000000;
            cursor: pointer;
            box-shadow: 0 0 0 0 rgba(255, 136, 0, 0.5);
            font-size: 1.3em;
            font-weight: 900;
            font-family: 'Trebuchet MS', sans-serif;
            text-transform: uppercase;
            text-align: center;
            line-height: 100px;
            letter-spacing: -1px;
        }
        
        .menuText {
            position: absolute;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            margin-top: -20px;
        }
        
        nav {
            cursor: default;
            color: white;
            z-index: 999999999;
            width: 100%;
            height: 100%;
            position: absolute;
            -webkit-transform: translateX(100%);
            transform: translateX(-100%);
            -webkit-transition: -webkit-transform 0.6s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            transition: -webkit-transform 0.6s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            transition: transform 0.6s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            transition: transform 0.6s cubic-bezier(0.56, 0.1, 0.34, 0.91), -webkit-transform 0.6s cubic-bezier(0.56, 0.1, 0.34, 0.91);
            padding-top: 6.2rem;
            background: rgba(0, 0, 0, 0.9)
        }
        
        .menu-open nav {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            width: 100vw;
        }
        
        nav ul {
            position: absolute;
            width: 50%;
            list-style: none;
            left: 25%;
            top: 50%;
            transform: translatey(-50%);
        }
        
        nav ul li {
            padding: 5% 5%;
            font-size: 200%;
            text-align: center;
            text-shadow: 0px 0px 20px black;
        }
        
        nav ul li:hover {
            text-decoration: none;
            transition: all 0.3s ease-in-out;
            color: #F29200;
            cursor: pointer;
        }
        
        nav ul li:active {
            text-decoration: none;
        }
        
        .box {
            position: relative;
            width: 100%;
            height: 100%;
            background: black;
        }
        
        .homeScreen {
            cursor: none !important;
            color: white;
            visibility: visible;
        }
        
        #particles-js {
            width: 100%;
            height: 100%;
        }
        
        .logo {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        
        .logo h1 {
            font-size: 10em;
        }
        
        img {
            width: 100%;
        }
        /* DIV CURSORE */
        
        .mouse {
            overflow: hidden;
            width: 40px;
            height: 40px;
            border-radius: 40px;
        }
        
        .dot {
            z-index: 3;
            position: absolute;
            width: 40px;
            height: 40px;
            top: 50%;
            left: 50%;
            background: #F29200;
            border-radius: 40px;
        }
        
        .workScreen {
            background: white;
            width: 100vw;
            height: 100vh;
            bottom: 100%;
            visibility: hidden;
            opacity: 0;
            cursor: default;
        }
        
        .aboutScreen {
            position: absolute;
            width: 100vw;
            height: 100vh;
            top: 0;
            color: black;
            visibility: hidden;
            opacity: 0;
            cursor: default;
            background-color: whitesmoke;
            overflow: hidden;
        }
        
        .layout {
            display: block;
            position: relative;
            background: whitesmoke;
            height: 100vh;
            color: black;
            overflow: scroll;
            background: url('LogoMin.png') center ;
        }
        
        #aboutText {
            margin-top: 70px;
            margin-right: 70px;
            margin-left: 55%;
            font-size: 14px;
            line-height: 26px;
            text-align: justify;
            padding: 5px;
            font-weight: bold;
        }
        /* header */
        
        .footerAbout {
            background-color: black;
            border: #000 solid 2px;
            margin-top: 50px;
            height: 300px;
        }
        
        #headerAbout {
            height: 100vh;
            position: relative;
            overflow: hidden;
            background-size: cover;
            background: rgba(0, 0, 0, 0.7);
        }
        
        header .content {
            position: relative;
            display: block;
            color: #FFFFFF;
            top: 50%;
            left: 50%;
            text-align: center;
            transform: translate(-50%, -50%);
            text-shadow: 0px 0px 5px #000000;
        }
        
        header .content h1 {
            font-size: 3em;
            font-weight: normal;
        }
        
        header .content h3 {
            font-size: 1.5em;
            font-weight: lighter;
        }
        
        .bg {
            display: block;
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            background: url('LogoMin.png') center ;
            -moz-transition: 0.1s;
            -o-transition: 0.1s;
            -webkit-transition: 0.1s;
            transition: 0.1s;
            z-index: -1;
        }
        /* Start About Us Css */
        
        .separator-type,
        .title-type,
        .intro-type,
        .content-type .intro-type p {
            position: relative;
        }
        
        .cont {
            padding-top: 70px;
            width: 100%;
            text-align: center;
            justify-content: center;
        }
        
        .parallax {
            position: absolute;
            width: 100%;
            height: 120px;
            overflow: hidden;
        }
        
        .parallax img {
            height: 120px;
            width: auto;
            margin-bottom: 60px;
            margin-left: 50%;
            transform: translateX(-50%);
        }
        
        .red-border {
            width: 50%;
            border-bottom: 1px solid #c87910;
            margin: 0 auto;
            height: 16px;
        }
        
        .languageMenu li {
            list-style-type: none;
            display: inline-block;
            margin: 2%;
        }
        
        .company-sections p {
            margin-top: 20px;
        }
        
        .ct-u-size22 {
            text-align: justify;
            font-size: 22px;
            background-color: #724000;
            opacity: 0.9;
            margin-right: 15%;
            margin-left: 15%;
            line-height: 30px;
            text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
            border: solid rgb(184, 123, 10) 5px;
        }
        
        .marginTop40 {
            margin-top: 70px !important;
            margin-bottom: 70px;
            padding: 20px;
            border: solid rgb(133, 89, 7) 5px;
            border-radius: 10px;
        }
        
        .ct-u-paddingBoth100 {
            padding-top: 100px;
            padding-bottom: 100px;
        }
        
        .company-sections h2,
        .careers-sections h2,
        .perks-section h2 {
            font-weight: 800;
            font-size: 70px;
        }
        /* End About Us Css */
        
        .contenitore {
            position: relative;
            display: flex;
            justify-content: center;
            justify-items: center;
            height: 100vh;
            background-color: white;
        }
        
        .peopleScreen {
            position: absolute;
            width: 100vw;
            height: 100vh;
            top: 0;
            color: black;
            visibility: hidden;
            opacity: 0;
            cursor: default;
            background-color: white;
            text-align: center;
            cursor: default;
            overflow: hidden;
        }
        
        #imgRoll {
            height: 100%;
            margin-right: auto;
        }
        
        #imgRoll img {
            height: 100%;
            width: auto;
        }
        
        #peopleImg {
            height: 100%;
            margin-right: auto;
        }
        
        #peopleImg img {
            height: 100%;
            width: auto;
        }
        
        .text-container {
            position: absolute;
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
        }
        
        .bttn {
            color: black;
            align-self: center;
            font-size: 18px;
            letter-spacing: 2px;
            text-transform: uppercase;
            display: inline-block;
            text-align: center;
            font-weight: bold;
            padding: 14px;
            border: 3px solid black;
            border-radius: 2px;
            position: relative;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.1);
            z-index: 0;
        }
        
        .bttn:before {
            -webkit-transition: 0.5s all ease;
            transition: 0.5s all ease;
            position: absolute;
            top: 0;
            left: 50%;
            right: 50%;
            bottom: 0;
            opacity: 0;
            content: '';
            background-color: black;
            color: white;
            z-index: -1;
        }
        
        .bttn:hover:before {
            -webkit-transition: 0.5s all ease;
            transition: 0.5s all ease;
            left: 0;
            right: 0;
            opacity: 1;
            color: white;
        }
        
        [class^="swiper-button-"] {
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
        }
        
        .swiper-slide {
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
        }
        
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }
        
        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
        
        .contenitorePeople h2 {
            text-transform: uppercase;
            font-weight: 100;
            letter-spacing: 50px;
            float: left;
            text-align: center;
            width: 100%;
        }
        
        #projectsApp {
            width: 100%;
            float: left;
        }
        
        .projects {
            width: 48%;
            min-height: 100%;
            position: relative;
            background-size: cover;
            cursor: pointer;
            margin: 0;
            overflow: hidden;
            transition: all 0.5s ease, opacity 0.1s;
            -webkit-transition: all 0.5s ease, opacity 0.1s;
            border-left: 0.1px solid rgb(182, 182, 182);
        }
        
        .projects .backArrow {
            display: none;
        }
        
        .projects:nth-child(1),
        .projects:nth-child(2) {
            width: 48%;
        }
        
        .projects .beforeTitle {
            float: left;
            opacity: 1;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 10px 5px 10px 5px;
            font-weight: 100;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            position: absolute;
            width: 90%;
            text-align: center;
            top: 45%;
            margin: 0px 5% 0px 5%;
        }
        
        .projects:hover .beforeTitle,
        .projects.midTransition .beforeTitle {
            opacity: 0;
            transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
        }
        
        .projects:hover .info,
        .projects.midTransition .info {
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            margin-top: 0;
            margin-left: 0px;
            border-radius: 000px;
            opacity: 1;
            background: rgba(255, 157, 0, 0.8);
        }
        
        .projects:hover .info h1,
        .projects.midTransition .info h1 {
            opacity: 1;
            transform: translate(0%, 0);
            -webkit-transform: translate(0%, 0);
        }
        
        .projects:hover .info hr,
        .projects.midTransition .info hr {
            width: 70%;
            margin: 0px 15% 0px 15%;
            left: 0px;
            opacity: 1;
        }
        
        .projects .info {
            width: 50px;
            height: 50px;
            left: 50%;
            top: 50%;
            margin-left: -25px;
            margin-top: -25px;
            float: left;
            opacity: 0;
            position: absolute;
            background: rgba(1, 154, 109, 0);
            overflow: hidden;
            transition: all 0.2s ease, opacity 0.1s;
            -webkit-transition: all 0.2s ease, opacity 0.1s;
            transition-delay: 0.1s;
            -webkit-transition-delay: 0.1s;
        }
        
        .projects .info .fadeTitle {
            float: left;
            width: 100%;
            color: #fff;
            font-weight: 100;
            text-transform: uppercase;
            font-size: 12pt;
            text-align: center;
            letter-spacing: 5px;
            position: absolute;
            margin: 0px;
            opacity: 0;
            transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            padding: 0px 10px 5px 10px;
            top: 45%;
            transform: translate(0%, -25px);
            -webkit-transform: translate(0%, -25px);
            transition-delay: 0.4s;
            -webkit-transition-delay: 0.4s;
        }
        
        .projects .info hr {
            outline: none;
            height: 3px;
            border: 0px;
            float: left;
            background-color: #fff;
            width: 2px;
            left: 50%;
            margin-left: -1px;
            opacity: 0;
            position: absolute;
            top: 53%;
            transition: all 0.4s ease;
            -webkit-transition: all 0.4s ease;
            transition-delay: 0.5s;
            -webkit-transition-delay: 0.5s;
        }
        
        .selectedArea {
            width: 100%;
            min-height: 00%;
            max-height: 0px;
            float: left;
            background: #fff;
            position: absolute;
            z-index: 10;
            padding: 0px 0px 0px 40px;
            opacity: 0;
            pointer-events: none;
            overflow: hidden;
            top: 0;
            left: 0;
            transition: all 0.0s ease;
            -webkit-transition: all 0.0s ease;
        }
        
        .selectedArea.opened {
            opacity: 1;
            pointer-events: all;
            min-height: 100%;
            max-height: 100000%;
        }
        
        .selectedArea.opened .copyArea.fadeIn,
        .selectedArea.opened h1 span,
        .selectedArea.opened h1 {
            opacity: 1;
            -webkit-transform: translate(0px, 0%);
            transform: translate(0px, 0%);
        }
        
        .selectedArea:after {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            background: rgba(0, 0, 0, 0.5);
            background: red;
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0.6) 10%, white 90%);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(right, rgba(255, 255, 255, 0.6) 10%, white 90%);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(right, rrgba(255, 255, 255, 0.6) 10%, white 90%);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to right, rgba(255, 255, 255, 0.6) 10%, white 90%);
            /* Standard syntax */
            top: 0;
            left: 0;
            z-index: -1;
        }
        
        .selectedArea h1 {
            float: left;
            width: 100%;
            margin: 0px;
            padding: 80px 5px 80px 5px;
            background-size: cover;
            background-position: center;
            text-align: center;
            font-size: 28pt;
            text-transform: uppercase;
            font-weight: 100;
            letter-spacing: 5px;
            color: #1a1a1a;
            opacity: 0;
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease;
        }
        
        .selectedArea h1 span {
            background: #fff;
            padding: 10px 80px 10px 80px;
            text-align: center;
            opacity: 0;
            -webkit-transform: translate(0%, -100%);
            transform: translate(0%, -100%);
            transition: all 0.8s ease;
            -webkit-transition: all 0.8s ease;
        }
        
        .selectedArea .copyArea.fadeIn {
            width: 880px;
            float: left;
            position: relative;
            left: 50%;
            margin-left: -450px;
            padding: 10px 25px 10px 25px;
            margin-top: 15px;
            margin-bottom: 85px;
            opacity: 0;
            -webkit-transform: translate(0%, 100%);
            transform: translate(0%, 100%);
            transition: all 0.8s ease;
            -webkit-transition: all 0.8s ease;
            transition-delay: 0.2s;
            -webkit-transition-delay: 0.2s;
        }
        
        .selectedArea .copyArea.fadeIn p {
            float: left;
            width: 100%;
            font-size: 12pt;
            line-height: 24pt;
            letter-spacing: 1px;
            font-weight: 100;
            color: #2a2a2a;
        }
        
        .noTransition {
            transition: all 0.0s ease !important;
            -webkit-transition: all 0.0s ease !important;
            transition-delay: 0.0s !important;
            -webkit-transition-delay: 0.0s !important;
        }
        
        @media screen and (max-width: 920px) {
            .projects {
                width: 48%;
            }
            .projects hr {
                top: 60% !important;
            }
            .projects:nth-child(1),
            .projects:nth-child(2) {
                width: 48%;
            }
            .projects:nth-child(1) hr,
            .projects:nth-child(2) hr {
                top: 53% !important;
            }
            .selectedArea .copyArea.fadeIn {
                width: 100%;
                margin-left: 0%;
                left: 0%;
            }
            .selectedArea h1 {
                font-size: 20pt;
            }
            .selectedArea h1 span {
                padding: 10px 25px 10px 25px;
            }
        }
        
        @media screen and (max-width: 620px) {
            #aboutText {
                margin-right: 3%;
                margin-left: 3%;
            }
            .projects {
                width: 98% !important;
            }
            .projects hr {
                top: 55% !important;
            }
            .projects:nth-child(1),
            .projects:nth-child(2) {
                width: 48%;
            }
            .projects:nth-child(1) hr,
            .projects:nth-child(2) hr {
                top: 55% !important;
            }
            #imgRoll {
                visibility: hidden;
            }
        }
        
        @media screen and (max-width: 730px) {
            #imgRoll {
                visibility: hidden;
            }
        }
        
        .swiper-container {
            width: 100vw;
            height: 100vh;
            float: left;
            -webkit-transition: opacity .6s ease, -webkit-transform .3s ease;
            transition: opacity .6s ease, -webkit-transform .3s ease;
            transition: opacity .6s ease, transform .3s ease;
            transition: opacity .6s ease, transform .3s ease, -webkit-transform .3s ease;
        }
        
        .swiper-container.nav-slider {
            width: 20%;
            padding-left: 5px;
            overflow: hidden;
        }
        
        .swiper-container.nav-slider .swiper-slide {
            cursor: pointer;
            opacity: .4;
            -webkit-transition: opacity .3s ease;
            transition: opacity .3s ease;
        }
        
        .swiper-container.nav-slider .swiper-slide.swiper-slide-active {
            opacity: 1;
        }
        
        .swiper-container.nav-slider .swiper-slide .content {
            width: 100%;
        }
        
        .swiper-container.nav-slider .swiper-slide .content .title {
            font-size: 20px;
        }
        
        .swiper-container:hover .swiper-button-prev,
        .swiper-container:hover .swiper-button-next {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
            visibility: visible;
        }
        
        .swiper-container.loading {
            opacity: 0;
            visibility: hidden;
        }
        
        .swiper-slide {
            overflow: hidden;
            background-color: black;
        }
        
        .swiper-slide .slide-bgimg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat no-repeat;
            background-size: contain;
        }
        
        .swiper-slide .entity-img {
            display: none;
        }
        
        .swiper-slide .content {
            position: absolute;
            top: 40%;
            left: 0;
            width: 50%;
            padding-left: 5%;
            color: #fff;
        }
        
        .swiper-slide .content .title {
            font-size: 2.6em;
            font-weight: bold;
            margin-bottom: 30px;
        }
        
        .swiper-slide .content .captions {
            display: block;
            font-size: 13px;
            line-height: 1.4;
            -webkit-transform: translateX(50px);
            transform: translateX(50px);
            opacity: 0;
            -webkit-transition: opacity .3s ease, -webkit-transform .7s ease;
            transition: opacity .3s ease, -webkit-transform .7s ease;
            transition: opacity .3s ease, transform .7s ease;
            transition: opacity .3s ease, transform .7s ease, -webkit-transform .7s ease;
        }
        
        .swiper-slide .content .caption.show {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
        }
        
        [class^="swiper-button-"] {
            width: 44px;
            opacity: 0;
            visibility: hidden;
        }
        
        .swiper-button-prev {
            -webkit-transform: translateX(50px);
            transform: translateX(50px);
        }
        
        .swiper-button-next {
            -webkit-transform: translateX(-50px);
            transform: translateX(-50px);
        }
        
        .dragdealer {
            position: relative;
            height: 30px;
        }
        
        .dragdealer .handle {
            position: absolute;
            top: 0;
            left: 0;
        }
        
        .dragdealer .red-bar {
            width: 100px;
            height: 30px;
            background: #CC0000;
            color: #FFF;
            font-size: 14px;
            line-height: 30px;
            text-align: center;
        }
        
        .dragdealer .disabled {
            background: #898989;
        }
        
        * {
            margin: 0;
            padding: 0;
        }
        
        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }
        
        .clearfix:before,
        .clearfix:after {
            content: '';
            display: table;
        }
        
        .clearfix:after {
            clear: both;
        }
        
        a {
            color: #fff;
            text-decoration: none;
            outline: none;
        }
        
        a:hover,
        a:focus {
            color: #c5d3d6;
        }
        
        .js .codrops-header,
        .js .codrops-top {
            position: fixed;
            z-index: 1000;
        }
        /* Header */
        
        .codrops-header {
            margin: 0 auto;
            width: 70%;
            left: 15%;
            top: 3.5em;
            pointer-events: none;
            -webkit-transition: opacity 0.3s;
            transition: opacity 0.3s;
        }
        
        .message {
            display: none;
            clear: both;
            color: #f39c12;
        }
        
        .codrops-header h1 {
            margin: 0;
            font-weight: 700;
            font-size: 1em;
            line-height: 1.3;
            padding: 1.5em 0 0.25em;
            text-transform: uppercase;
            letter-spacing: 1px;
            float: left;
        }
        
        .overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.93);
            z-index: 10000;
        }
        
        .no-js .overlay,
        .overlay.hide {
            -webkit-transition: opacity 0.3s, visibility 0.3s;
            transition: opacity 0.3s, visibility 0.3s;
            visibility: hidden;
        }
        
        .info {
            text-align: justify;
            position: absolute;
            top: 20%;
            left: 0;
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 1rem;
            width: 100%;
        }
        
        .info p {
            margin-left: 2%;
            margin-right: 2%;
            letter-spacing: 20%;
            line-height: 200%;
        }
        
        .info span {
            display: inline-block;
            width: 180px;
            height: 180px;
            padding: 10px;
            margin: 4px;
            text-align: center;
            vertical-align: top;
            background-size: 75%;
            background-color: rgba(20, 20, 20, .5);
            background-repeat: no-repeat;
            background-position: 50% 85%;
        }
        
        .info button {
            border: 2px solid #fff;
            background: transparent;
            color: #fff;
            font-weight: bold;
            padding: 1em 2em;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: block;
            margin: 1em auto;
            opacity: 0.7;
            outline: none;
        }
        
        .info button:hover {
            opacity: 1;
        }
        
        @media screen and (max-width: 650px) {
            .message {
                display: block;
            }
            .info span.info-keys {
                display: none;
            }
            .info span.info-switch {
                display: none;
            }
            .swiper-slide .slide-bgimg {
                background-size: contain;
            }
            .mouse {
                display: none;
            }
        }
        
        @media screen and (max-width: 30em) {
            .info span {
                width: 100px;
                height: 100px;
                font-size: 0.5em;
            }
        }
        
        @media screen and (max-width: 25em) {
            .codrops-icon span {
                display: none;
            }
        }
        
        html,
        body,
        .js .aboutWrapper,
        .js .dragslider,
        .js .img-dragger .handle {
            height: 100%;
        }
        
        html.js,
        .js body {
            overflow: hidden;
            position: relative;
        }
        
        .js .dragslider {
            position: absolute;
            background: black;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: -webkit-transform 0.6s cubic-bezier(.7, 0, .3, 1);
            transition: transform 0.6s cubic-bezier(.7, 0, .3, 1);
        }
        
        .dragslider.show-content {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        
        .dragslider h2 {
            font-size: 8em;
            font-weight: 700;
            margin: 0 auto;
            line-height: 1;
            position: relative;
        }
        
        .no-js .dragslider h2 {
            padding: 15px;
        }
        
        .dragslider h2 span {
            display: block;
            font-size: 27%;
            font-weight: 300;
            padding-top: 0.2em;
        }
        /* Switch button */
        
        button.slider-switch {
            font-size: 0;
            width: 80px;
            height: 80px;
            padding: 0;
            color: transparent;
            position: relative;
            border: none;
            background: url('https://goo.gl/AkxE9Z') no-repeat center center;
            background-size: 90%;
            float: right;
            outline: none;
            overflow: hidden;
            opacity: 0.7;
            -webkit-transition: opacity 0.3s;
            transition: opacity 0.3s;
            pointer-events: auto;
        }
        
        .no-js button.slider-switch {
            display: none;
        }
        
        button.slider-switch.view-maxi {
            background-image: url('https://goo.gl/gx2Q0a');
        }
        
        button.slider-switch:hover {
            opacity: 1;
        }
        /* Dragger */
        
        .img-dragger {
            position: relative;
            z-index: 100;
        }
        
        .js .img-dragger {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
        }
        
        .js .img-dragger-large {
            width: 100%;
            height: 100%;
        }
        
        .js .img-dragger .handle {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            white-space: nowrap;
            font-size: 0;
        }
        
        .no-js .img-dragger,
        .no-js .img-dragger .handle {
            height: auto;
            position: relative;
            text-align: center;
            font-size: 0;
            clear: both;
            white-space: nowrap;
            overflow: auto;
        }
        
        .no-js .img-dragger .handle {
            padding: 40px 0 0;
        }
        
        .img-dragger .slide {
            display: inline-block;
            position: relative;
            height: 100%;
            background: black;
            font-size: 16px;
            white-space: normal;
            cursor: -webkit-grab;
            cursor: -moz-grab;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: top;
        }
        
        .no-js .img-dragger .slide {
            width: 300px;
            font-size: 7px;
            min-height: 200px;
        }
        
        .img-dragger .slide:active {
            cursor: -webkit-grabbing;
            cursor: -moz-grabbing;
        }
        
        .img-wrap {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .img-wrap #fotoAlb {
            position: absolute;
            display: block;
            height: 100%;
            width: auto;
            margin-left: 50%;
            transform: translateX(-50%);
            opacity: 0.35;
        }
        
        @media screen and (min-aspect-ratio: 1280/850) {
            .img-dragger .img-wrap img {
                width: calc(100% + 0.2px);
                height: 100%;
            }
        }
        /*Media Query smartphone albums e immagini*/
        
        @media only screen and (orientation: portrait) {
            .aboutScreen {
                overflow: scroll;
            }
            .img-wrap #fotoAlb {
                
                width: 100%;
                height: auto;
                top: 50%;
                transform: translateY(-50%);
                margin-left: 0;
            }
            .swiper-slide .slide-bgimg {
                position: relative;
                width: 100%;
                top: 50%;
                transform: translateY(-50%);
            }
            .swiper-slide {
                background-color: black;
            }
        }
        
        .js .slide h2 {
            color: #FFF;
            position: absolute;
            -webkit-transition: opacity 0.3s;
            transition: opacity 0.3s;
        }
        
        .js .img-dragger-large .slide h2 {
            width: 70%;
            left: 15%;
            top: 50%;
            -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0);
        }
        
        .img-dragger-small .slide h2 {
            font-size: 2.5em;
            padding-top: 1em;
            top: 100%;
            width: 100%;
            text-align: center;
            color: white;
            animation: slideUpFade 0.4s 0.1s;
            -webkit-animation: slideUpFade 0.4s 0.1s;
        }
        
        @-webkit-keyframes slideUpFade {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 20px, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
            }
        }
        
        @keyframes slideUpFade {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 20px, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
            }
        }
        
        .img-dragger-small .slide h2 span {
            font-size: 0.35em;
        }
        
        .img-dragger-small .slide.current h2 {
            color: white;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-transition: color 0.3s, opacity 0.3s;
            transition: color 0.3s, opacity 0.3s;
        }
        
        .slide h2 i {
            font-style: normal;
            font-weight: 400;
        }
        
        button.content-switch {
            border: 2px solid #fff;
            width: 160px;
            text-indent: 200%;
            overflow: hidden;
            white-space: nowrap;
            background: transparent;
            color: #fff;
            position: absolute;
            cursor: pointer;
            top: 100%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -200%, 0);
            transform: translate3d(-50%, -200%, 0);
            padding: 1em 2em;
            font-size: 0.85em;
            line-height: 1;
            letter-spacing: 1px;
            font-weight: 400;
            outline: none;
            z-index: 1000;
            -webkit-transition: -webkit-transform 0.6s cubic-bezier(.7, 0, .3, 1), opacity 0.3s, color 0.3s, border-color 0.3s;
            transition: transform 0.6s cubic-bezier(.7, 0, .3, 1), opacity 0.3s, color 0.3s, border-color 0.3s;
        }
        
        .no-js button.content-switch {
            display: none;
        }
        
        button.content-switch:hover {
            opacity: 1;
        }
        
        button.content-switch::before {
            content: "Scopri di più";
            font-family: 'FontAwesome';
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            text-indent: 0;
            font-size: 1.5em;
            line-height: 0.75;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        .show-content .current button.content-switch {
            border-color: #c5d3d6;
            color: #c5d3d6;
            -webkit-transform: translate3d(-50%, 100%, 0);
            transform: translate3d(-50%, 100%, 0);
        }
        
        .show-content .current button.content-switch::before {
            content: "\f102";
        }
        /* Content */
        
        .js .pages {
            position: absolute;
            top: 100%;
            height: 0;
            width: 100%;
            overflow-y: hidden;
            -webkit-overflow-scrolling: hidden;
            -webkit-transition: height 0s 0.6s;
            transition: height 0s 0.6s;
        }
        
        .js .show-content .pages {
            -webkit-transition: none;
            transition: none;
            height: 100%;
        }
        
        .pages .content {
            background: #FFF;
            text-align: center;
            color: #888;
            font-size: 1.5em;
            overflow: hidden;
        }
        
        .js .pages .content {
            position: absolute;
            top: 0;
            left: 0;
            height: 0;
            width: 100%;
            overflow: hidden;
            -webkit-transition: height 0s 0.6s;
            transition: height 0s 0.6s;
        }
        
        .pages .content.show {
            height: auto;
            -webkit-transition: none;
            transition: none;
        }
        
        .pages .content h2 {
            font-size: 5em;
            max-width: 70%;
            color: #34495e;
            padding: 2.25em 10px 1em;
        }
        
        .no-js .pages .content h2 {
            padding-top: 1em;
        }
        
        .pages .content h2 span {
            color: #95a5a6;
        }
        
        .pages .content p {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0.5em 2em;
            line-height: 1.5;
            text-align: left;
        }
        
        .pages .content p:last-child {
            padding: 5em 1em 8em;
            text-align: center;
            font-weight: bold;
        }
        
        .wrapper {
            position: relative;
            display: flex;
            background: black;
            height: 50%;
            width: 100%;
        }
        
        .wrapper .header {
            position: absolute;
            font-size: 2em;
            text-transform: uppercase;
        }
        
        .languageMenu {
            position: relative;
            top: 10px;
        }
        
        .languageMenu ul {
            list-style: none;
            font-size: 1.5em;
            font-weight: bold;
        }
        
        .languageMenu li:hover {
            color: orange;
            cursor: pointer;
        }
        
        .js .pages .content h2,
        .js .pages .content p {
            -webkit-transform: translate3d(0, 200px, 0);
            transform: translate3d(0, 200px, 0);
            -webkit-transition-property: opacity;
            transition-property: opacity;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: cubic-bezier(.7, 0, .3, 1);
            transition-timing-function: cubic-bezier(.7, 0, .3, 1);
        }
        
        .pages .content.show h2,
        .pages .content.show p {
            -webkit-transition-duration: 1s;
            transition-duration: 1s;
            -webkit-transition-property: -webkit-transform, opacity;
            transition-property: transform, opacity;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        
        .pages .content.show p {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }
        
        .pages .content a {
            color: #3c89d5;
            display: block;
        }
        
        .pages .content a:hover {
            color: #545b61;
        }
        /* Switch */
        
        .switch-min .img-dragger-large .slide>*:not(.img-wrap),
        .switch-max .img-dragger-small .slide>*:not(.img-wrap) {
            /* fade out everything except image */
            opacity: 0;
            -webkit-transition: none;
            transition: none;
        }
        
        .switch-min .img-dragger-large,
        .switch-max .img-dragger-small {
            -webkit-transition: -webkit-transform 0.6s cubic-bezier(.7, 0, .3, 1);
            transition: transform 0.6s cubic-bezier(.7, 0, .3, 1);
        }
        
        .img-dragger-small button.content-switch {
            opacity: 0;
            pointer-events: none;
        }
        /* Helper classes */
        
        .no-transition {
            -webkit-transition: none !important;
            transition: none !important;
        }
        
        .hide {
            opacity: 0 !important;
            pointer-events: none !important;
        }
        
        @media screen and (max-width: 63.125em) {
            .dragslider h2 {
                font-size: 2.8em;
            }
            .pages .content {
                font-size: 100%;
            }
            .pages .content h2 {
                font-size: 3em;
            }
        }
        
        @media screen and (max-width: 650px) {
            button.slider-switch {
                display: none;
            }
            button.content-switch {
                top: 93%;
            }
            .show-content .current button.content-switch {
                -webkit-transform: translate3d(-50%, 200%, 0);
                transform: translate3d(-50%, 200%, 0);
            }
        }
        
        @media screen and (max-width: 800px) and (orientation: landscape) {
            .aboutScreen {
                overflow: scroll;
            }
            .mouse {
                display: none;
            }
        }
        /* ANIMAZIONI */
        
        .fadeIn {
            -webkit-animation: fadeIn 3s ease-in-out forwards;
            animation: fadeIn 3s ease-in-out forwards;
        }
        
        .fadeOut {
            -webkit-animation: fadeOut 3s ease-in-out forwards;
            animation: fadeOut 3s ease-in-out forwards;
        }
        
        .Transition {
            -webkit-animation: Transition 3s ease-in-out;
            animation: Transition 3s ease-in-out;
        }
        
        .circleRadius {
            -webkit-animation: circleRadius 0.4s ease-in-out forwards;
            animation: circleRadius 0.4s ease-in-out forwards;
        }
        
        .squareRadius {
            -webkit-animation: squareRadius 0.4s ease-in-out forwards;
            animation: squareRadius 0.4s ease-in-out forwards;
        }
        
        .pulse {
            animation: pulse 1.5s infinite;
            -webkit-animation: pulse 1.5s infinite;
        }
        
        @-webkit-keyframes fadeIn {
            100% {
                opacity: 1;
            }
        }
        
        @keyframes fadeIn {
            100% {
                opacity: 1;
            }
        }
        
        @-webkit-keyframes fadeOut {
            100% {
                opacity: 0;
            }
        }
        
        @keyframes fadeOut {
            100% {
                opacity: 0;
            }
        }
        /* circle */
        
        @-webkit-keyframes circleRadius {
            100% {
                border-radius: 2.2rem;
            }
        }
        
        @keyframes circleRadius {
            100% {
                border-radius: 2.2rem;
            }
        }
        
        @-webkit-keyframes squareRadius {
            100% {
                border-radius: 10px;
            }
        }
        
        @keyframes squareRadius {
            100% {
                border-radius: 10px;
            }
        }
        
        @keyframes Transition {
            100% {
                transform: translateX(-100%);
            }
        }
        
        @-webkit-keyframes peopleIn {
            100% {
                -webkit-transform: translateY(-100%);
            }
        }
        
        @keyframes peopleIn {
            100% {
                transform: translateY(-100%);
            }
        }
        
        @-webkit-keyframes pulse {
            0% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }
            70% {
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -webkit-transform: scale(1);
                transform: scale(1);
                box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
            }
            100% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
                box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
            }
        }
        
        @keyframes pulse {
            0% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }
            70% {
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -webkit-transform: scale(1);
                transform: scale(1);
                box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
            }
            100% {
                -moz-transform: scale(0.9);
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
                box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
            }
        }
        /* FINE ANIMAZIONI */
        
        .peopleIn {
            animation: peopleIn 1s ease-in-out;
            -webkit-animation: peopleIn 1s ease-in-out;
        }
        
        .contenitore h1,
        .contenitore h2,
        .contenitore h3,
        .contenitore h4,
        .contenitore h5,
        .contenitore h6 {
            font-family: "Open Sans";
            font-weight: 300;
        }
        
        .contenitore h1 {
            font-size: 46px;
        }
        
        .contenitore h2 {
            font-size: 44px;
        }
        
        .contenitore h3 {
            font-size: 32px;
        }
        
        .contenitore h4 {
            font-size: 24px;
        }
        
        .contenitore h5 {
            font-size: 22px;
            line-height: 30px;
        }
        
        .contenitore h6 {
            font-size: 20px;
        }
        
        .contenitore .section {
            color: #5c6166;
        }
        
        .contenitore .hr.invisible_hr {
            height: 0;
            padding: 0;
        }
        
        .contenitore .hr.big_size_hr {
            margin: 30px 0;
        }
        
        .contenitore .hr {
            clear: both;
            display: block;
            font-size: 0;
            height: 24px;
            margin: 20px 0;
            overflow: hidden;
            padding: 2px 0;
            position: relative;
            text-align: center;
            width: 100%;
        }
        
        .contenitore .highlight_secondary {
            color: #F24046;
        }
        
        .contenitore .team-role {
            color: #A4A7AA;
        }
        /* FORM */
        
        .contactScreen {
            position: absolute;
            width: 100vw;
            height: 100vh;
            top: 0;
            background: #efefef;
            visibility: hidden;
            opacity: 0;
            cursor: default;
            font-size: 62.5%;
            color: #B6B6B6;
            font-weight: 300;
            overflow: scroll;
        }
        
        .contactScreen section {
            background: white;
            margin: 60px auto 120px;
            border-top: 15px solid #313A3D;
            text-align: center;
            padding: 50px 0 110px;
            width: 80%;
            max-width: 1100px;
        }
        
        .contactScreen section h1 {
            margin-bottom: 40px;
            font-size: 4em;
            text-transform: uppercase;
            font-weight: 100;
        }
        
        form {
            width: 58.3333333333%;
            margin: 0 auto;
        }
        
        form .field {
            width: 100%;
            position: relative;
            margin-bottom: 15px;
        }
        
        form .field label {
            text-transform: uppercase;
            position: absolute;
            top: 0;
            left: 0;
            background: #313A3D;
            width: 100%;
            padding: 18px 0;
            font-size: 1.45em;
            letter-spacing: 0.075em;
            -webkit-transition: all 333ms ease-in-out;
            -moz-transition: all 333ms ease-in-out;
            -o-transition: all 333ms ease-in-out;
            -ms-transition: all 333ms ease-in-out;
            transition: all 333ms ease-in-out;
        }
        
        form .field label+span {
            opacity: 0;
            color: white;
            display: block;
            position: absolute;
            top: 12px;
            left: 7%;
            font-size: 2.5em;
            text-shadow: 1px 2px 0 #cd6302;
            -webkit-transition: all 333ms ease-in-out;
            -moz-transition: all 333ms ease-in-out;
            -o-transition: all 333ms ease-in-out;
            -ms-transition: all 333ms ease-in-out;
            transition: all 333ms ease-in-out;
        }
        
        form .field input[type="text"],
        form .field textarea {
            border: none;
            background: #E8E9EA;
            width: 80.5%;
            margin: 0;
            padding: 18px 0;
            padding-left: 19.5%;
            color: #313A3D;
            font-size: 1.4em;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
        
        form .field input[type="text"]#message,
        form .field textarea#message {
            height: 18px;
            resize: none;
            -webkit-transition: all 333ms ease-in-out;
            -moz-transition: all 333ms ease-in-out;
            -o-transition: all 333ms ease-in-out;
            -ms-transition: all 333ms ease-in-out;
            transition: all 333ms ease-in-out;
        }
        
        form .field input[type="text"]:focus,
        form .field input[type="text"].focused,
        form .field textarea:focus,
        form .field textarea.focused {
            outline: none;
        }
        
        form .field input[type="text"]:focus#message,
        form .field input[type="text"].focused#message,
        form .field textarea:focus#message,
        form .field textarea.focused#message {
            padding-bottom: 150px;
        }
        
        form .field input[type="text"]:focus+label,
        form .field input[type="text"].focused+label,
        form .field textarea:focus+label,
        form .field textarea.focused+label {
            width: 18%;
            background: #FD9638;
            color: #313A3D;
        }
        
        form .field input[type="text"].focused+label,
        form .field textarea.focused+label {
            color: #FD9638;
        }
        
        form .field:hover label {
            width: 18%;
            background: #313A3D;
            color: white;
        }
        
        form input[type="submit"] {
            background: #FD9638;
            color: white;
            -webkit-appearance: none;
            border: none;
            text-transform: uppercase;
            position: relative;
            padding: 13px 50px;
            font-size: 1.4em;
            letter-spacing: 0.1em;
            font-weight: 300;
            -webkit-transition: all 333ms ease-in-out;
            -moz-transition: all 333ms ease-in-out;
            -o-transition: all 333ms ease-in-out;
            -ms-transition: all 333ms ease-in-out;
            transition: all 333ms ease-in-out;
        }
        
        form input[type="submit"]:hover {
            background: #313A3D;
            color: #FD9638;
        }
        
        form input[type="submit"]:focus {
            outline: none;
            background: #cd6302;
        }
        
        form .msg-box {
            z-index: 2;
        }
        /* SOCIAL */
        
        .social-nav {
            padding: 0;
            list-style: none;
            display: inline-block;
            margin: 0px auto;
            z-index: 1;
        }
        
        .social-nav li {
            display: inline-block;
        }
        
        .social-nav a {
            display: inline-block;
            height: 100%;
            width: 48px;
            font-size: 20px;
            color: #FFF;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
            line-height: 48px;
            background: #000;
            position: relative;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }
        
        .model-2 a {
            overflow: hidden;
            font-size: 26px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            margin: 0 5px;
        }
        
        .model-2 a:hover {
            background: orange;
            text-shadow: 0px 0px #d5d5d5, 1px 1px #d5d5d5, 2px 2px #d5d5d5, 3px 3px #d5d5d5, 4px 4px #d5d5d5, 5px 5px #d5d5d5, 6px 6px #d5d5d5, 7px 7px #d5d5d5, 8px 8px #d5d5d5, 9px 9px #d5d5d5, 10px 10px #d5d5d5, 11px 11px #d5d5d5, 12px 12px #d5d5d5, 13px 13px #d5d5d5, 14px 14px #d5d5d5, 15px 15px #d5d5d5, 16px 16px #d5d5d5, 17px 17px #d5d5d5, 18px 18px #d5d5d5, 19px 19px #d5d5d5, 20px 20px #d5d5d5, 21px 21px #d5d5d5, 22px 22px #d5d5d5, 23px 23px #d5d5d5, 24px 24px #d5d5d5, 25px 25px #d5d5d5, 26px 26px #d5d5d5, 27px 27px #d5d5d5, 28px 28px #d5d5d5, 29px 29px #d5d5d5, 30px 30px #d5d5d5;
        }
        
        .model-2 .twitter {
            background: #00ACED;
            text-shadow: 0px 0px #0087ba, 1px 1px #0087ba, 2px 2px #0087ba, 3px 3px #0087ba, 4px 4px #0087ba, 5px 5px #0087ba, 6px 6px #0087ba, 7px 7px #0087ba, 8px 8px #0087ba, 9px 9px #0087ba, 10px 10px #0087ba, 11px 11px #0087ba, 12px 12px #0087ba, 13px 13px #0087ba, 14px 14px #0087ba, 15px 15px #0087ba, 16px 16px #0087ba, 17px 17px #0087ba, 18px 18px #0087ba, 19px 19px #0087ba, 20px 20px #0087ba, 21px 21px #0087ba, 22px 22px #0087ba, 23px 23px #0087ba, 24px 24px #0087ba, 25px 25px #0087ba, 26px 26px #0087ba, 27px 27px #0087ba, 28px 28px #0087ba, 29px 29px #0087ba, 30px 30px #0087ba;
        }
        
        .model-2 .twitter:hover {
            color: #00ACED;
        }
        
        .model-2 .facebook {
            background: #3B579D;
            text-shadow: 0px 0px #2d4278, 1px 1px #2d4278, 2px 2px #2d4278, 3px 3px #2d4278, 4px 4px #2d4278, 5px 5px #2d4278, 6px 6px #2d4278, 7px 7px #2d4278, 8px 8px #2d4278, 9px 9px #2d4278, 10px 10px #2d4278, 11px 11px #2d4278, 12px 12px #2d4278, 13px 13px #2d4278, 14px 14px #2d4278, 15px 15px #2d4278, 16px 16px #2d4278, 17px 17px #2d4278, 18px 18px #2d4278, 19px 19px #2d4278, 20px 20px #2d4278, 21px 21px #2d4278, 22px 22px #2d4278, 23px 23px #2d4278, 24px 24px #2d4278, 25px 25px #2d4278, 26px 26px #2d4278, 27px 27px #2d4278, 28px 28px #2d4278, 29px 29px #2d4278, 30px 30px #2d4278;
        }
        
        .model-2 .facebook:hover {
            color: #3B579D;
        }
        
        .model-2 .google-plus {
            background: #DD4A3A;
            text-shadow: 0px 0px #c23122, 1px 1px #c23122, 2px 2px #c23122, 3px 3px #c23122, 4px 4px #c23122, 5px 5px #c23122, 6px 6px #c23122, 7px 7px #c23122, 8px 8px #c23122, 9px 9px #c23122, 10px 10px #c23122, 11px 11px #c23122, 12px 12px #c23122, 13px 13px #c23122, 14px 14px #c23122, 15px 15px #c23122, 16px 16px #c23122, 17px 17px #c23122, 18px 18px #c23122, 19px 19px #c23122, 20px 20px #c23122, 21px 21px #c23122, 22px 22px #c23122, 23px 23px #c23122, 24px 24px #c23122, 25px 25px #c23122, 26px 26px #c23122, 27px 27px #c23122, 28px 28px #c23122, 29px 29px #c23122, 30px 30px #c23122;
        }
        
        .model-2 .google-plus:hover {
            color: #DD4A3A;
        }
        
        .model-2 .linkedin {
            background: #007BB6;
            text-shadow: 0px 0px #005983, 1px 1px #005983, 2px 2px #005983, 3px 3px #005983, 4px 4px #005983, 5px 5px #005983, 6px 6px #005983, 7px 7px #005983, 8px 8px #005983, 9px 9px #005983, 10px 10px #005983, 11px 11px #005983, 12px 12px #005983, 13px 13px #005983, 14px 14px #005983, 15px 15px #005983, 16px 16px #005983, 17px 17px #005983, 18px 18px #005983, 19px 19px #005983, 20px 20px #005983, 21px 21px #005983, 22px 22px #005983, 23px 23px #005983, 24px 24px #005983, 25px 25px #005983, 26px 26px #005983, 27px 27px #005983, 28px 28px #005983, 29px 29px #005983, 30px 30px #005983;
        }
        
        .model-2 .linkedin:hover {
            color: #007BB6;
        }
        
        .model-2 .pinterest {
            background: #CB2026;
            text-shadow: 0px 0px #9f191e, 1px 1px #9f191e, 2px 2px #9f191e, 3px 3px #9f191e, 4px 4px #9f191e, 5px 5px #9f191e, 6px 6px #9f191e, 7px 7px #9f191e, 8px 8px #9f191e, 9px 9px #9f191e, 10px 10px #9f191e, 11px 11px #9f191e, 12px 12px #9f191e, 13px 13px #9f191e, 14px 14px #9f191e, 15px 15px #9f191e, 16px 16px #9f191e, 17px 17px #9f191e, 18px 18px #9f191e, 19px 19px #9f191e, 20px 20px #9f191e, 21px 21px #9f191e, 22px 22px #9f191e, 23px 23px #9f191e, 24px 24px #9f191e, 25px 25px #9f191e, 26px 26px #9f191e, 27px 27px #9f191e, 28px 28px #9f191e, 29px 29px #9f191e, 30px 30px #9f191e;
        }
        
        .model-2 .pinterest:hover {
            color: #CB2026;
        }
        
        .social_icons {
            margin-bottom: 200px;
        }
        
        .square {
            height: 60px;
            width: 60px;
            border: 1px dashed white;
            padding: 1px;
            background-color: rgba(255, 255, 255, 0.2);
            margin-left: 2px;
            margin-right: 2px;
            margin-top: 55px;
            display: inline-block;
            transform: rotateZ(44deg);
        }
        
        .square:hover {
            transition: ease 0.2s;
            cursor: pointer;
        }
        
        .square .icons {
            position: absolute;
            transform: rotateZ(-44deg);
            margin: 20px 0 0px 21px;
        }
        
        .fa-facebook,
        .fa-twitter,
        .fa-linkedin,
        .fa-instagram,
        .fa-dribbbler,
        .fa-youtube,
        .fa-dribbble {
            width: 11px;
            height: 22px;
            color: white;
            font-family: FontAwesome;
            font-size: 23px;
            font-weight: 400;
            text-transform: uppercase;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
        }
        
        .square:hover .fa-facebook {
            color: rgba(59, 89, 152, 1);
        }
        
        .square:hover .fa-twitter {
            color: rgba(27, 182, 239, 1);
        }
        
        .square:hover .fa-dribbble {
            color: rgba(199, 59, 111, 1);
        }
        
        .square:hover .fa-youtube {
            color: rgba(229, 45, 39, 1);
        }
    </style>
    <!-- FINE STILE -->

</head>


<!-- INIZIO BODY -->

<body>

    <div class="container">
        <!-- Inizio Navigator Menu -->
        <div class="navigator">
            <button class="js-menu menu pulse" type="button" onclick="menuOpen(this)">
                <span class="menuText" >Menù</span>
            </button>

            <nav>
                <ul>
                    <li id="homeScreen">HOME</li>
                    <li id="workScreen">WORKS</li>
                    <li id="aboutScreen">ABOUT US</li>
                    <li id="peopleScreen">PEOPLE</li>
                    <li id="contactScreen">CONTACTS</li>
                </ul>
            </nav>
        </div>
        <!-- Fine Navigator Menu -->

        <div class="box homeScreen">

            <!-- Inizio Cursore -->


            <div class="mouse">
                <div class="dot"></div>
            </div>
            <!-- Fine Cursore -->

            <!-- Inizio Particelle -->
            <div id="particles-js"></div>
            <!-- Fine Particelle -->
            <div class="logo"> <img src="prova%20logo.png"> </div>

        </div>

        <div class="box workScreen">

            <div class="aboutWrapper">
                <header id="header" class="codrops-header">
                    <button class="slider-switch">Switch view</button>
                </header>
                <div id="overlay" class="overlay">
                    <div class="info">

                    </div>
                </div>
                <div id="slideshow" class="dragslider">
                    <section class="img-dragger img-dragger-large dragdealer">
                        <div id="albumShow" class="handle" style="width: 800%; transform: translate3d(0px, 0px, 0px);">

                            <!-- Contenuto implementato da javascript -->

                        </div>
                    </section>

                    <section class="pages" id="pagesId">


                    </section>
                </div>
            </div>
        </div>
        <div class="box aboutScreen">
            <div class="bg"></div>
            <header id="headerAbout">
                <div class="content">
                    <h1>Conosci la nostra storia</h1>
                    <div class="languageMenu">
                        <ul>
                            <li>Italiano</li>
                            <li>English</li>
                        </ul>
                    </div>
                </div>
            </header>

            <div class="layout">
                <img id="logoAbout" src="logo.png">
                <p id="aboutText">

                </p>
                <div class="footerAbout">

                </div>
            </div>

        </div>
        <div class="box peopleScreen">
            <div class="contenitore">
                <div id="imgRoll">

                </div>
                <div class="text-container ">
                    <a href="#" class="bttn ">SCOPRI IL NOSTRO TEAM</a>
                </div>
            </div>

            <div class="contenitorePeople" id="team">

                <div id="projectsApp">

                    <div class="projects" :id="project.ID" v-for="project in projects" :style="{ backgroundImage: 'url(' + project.bImage + ')' }" v-on:click="selectProjects(project.ID)">
                        <h3 class="beforeTitle"> {{ project.category }}</h3>
                        <div class="info">
                            <h1 class="fadeTitle"> {{ project.category }}</h1>
                            <hr>
                        </div>
                        <p class="backArrow"><i class="fa fa-angle-double-left" aria-hidden="true"></i></p>
                    </div>

                    <div class="selectedArea">
                        <h1 :style="{ backgroundImage: 'url(' + highlightedContent.bImage + ')' }"><span>{{ highlightedContent.category }}</span></h1>
                        <div v-html="highlightedContent.copy" class="copyArea fadeIn"></div>
                    </div>

                </div>

            </div>
        </div>

        <div class="box contactScreen">
            <section id="hire">
                <h1>Come Trovarci</h1>
                <form id="ajax-contact" name="form" method=POST action="/test/mailer.php">
                    <div class="field name-box">
                        <input type="text" value="Via Alfredo Nobel n°250" readonly="readonly">
                        <label for="name">Indirizzo</label>
                    </div>

                    <div class="field email-box">
                        <input type="text" value="349 435 0544" readonly="readonly">
                        <label for="email">Telefono</label>
                    </div>

                    <div class="field msg-box">
                        <ul class="social-nav model-2">
                            <li> <a href="https://www.facebook.com/moodstudioaversa/" class="linkedin"> <i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/_mood_studio_/" class="google-plus"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <label for="msg">Social</label>

                    </div>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.017004177315!2d14.209862815671945!3d40.95920633039158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b014b0aa35335%3A0x37b74d573589ee67!2sVia+Alfredo+Nobel%2C+250%2C+81031+Aversa+CE!5e0!3m2!1sit!2sit!4v1535470886787"
                            frameborder="0" style="border:0;"></iframe>
                    </div>
            </section>
            

        </div>
        <!-- SCRIPTS LINKATI -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js "></script>
        <script src="particles.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js " type="text/javascript "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dragdealer/0.9.9/dragdealer.min.js "></script>
        <script src="dragslideshow.min.js "></script>
        <script src="classie.min.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
        <!-- FINE SCRIPTS LINKATI -->


        <!-- FACEBOOK & SLIDERSHOW -->
    

        <?php
        $tok = 'EAAcIC0r3rtQBAIlZBxtyUMitkCnHScOt002etlZB6fIMrW4pm8DPEg2NQFyQuDQlG0LECXEpZAz5yNgjzxSfQQfYwlK90WjyHyYkHIIAq54ZCRAIZBC3QWfTZAB3OlggXQA6POYF9kBGRQv7AycKqL2fD1Bb8KuBtHH5mUBziqKRclBvLmqBqYnD5eb4FLEz403TNFvFdoTNiz0LEM2wczMBDqKhZA7TmDh0AEV9CBJ8gZDZD';
        ?>
        <script>
            
            var sizeImages = 0;
            var token = <?php Print($tok); ?>;
            $(document).ready(function() {
                $.ajaxSetup({
                    cache: true
                });
                $.getScript('https://connect.facebook.net/en_US/sdk.js', function() {
                    FB.init({
                        appId: '145634995501895',
                        cookie: true,
                        version: 'v2.12',
                    });

                    FB.api(
                        '/momopageof',
                        'GET', {
                            "fields": "albums{name,photos{images}}",
                            access_token: token
                        },
                        function(response) {
                            var indexPhoto;
                            if (window.innerWidth <= 600) {
                                indexPhoto = 4;
                            } else
                                indexPhoto = 0;
                            for (i in response.albums.data) {
                                var imgAlbumLink = response.albums.data[i].photos.data[0].images[indexPhoto].source;
                                var albumName = response.albums.data[i].name;
                                var divForSliderAlbums = "<div class=\"slide\" data-content=\"content-" + (i + 1) + "\" style=\"width: 12.5%;\"><div class=\"img-wrap\"><img id=\"fotoAlb\"src=\"" + imgAlbumLink + "\" alt=\"img1\"></div><h2>" + albumName + "</h2><button class=\"content-switch\">Leggi di più</button></div>";

                                document.getElementById("albumShow").innerHTML += divForSliderAlbums;

                                document.getElementById("pagesId").innerHTML += "<div class=\"content\" data-content=\"content-" + (i + 1) + "\" id=\"pg" + (i + 1) + "\"><div class=\"swiper-container main-slider loading\"><div class=\"swiper-wrapper\" id=\"mainSwiper" + (i + 1) + "\"></div><div class=\"swiper-button-prev swiper-button-white\"></div><div class=\"swiper-button-next swiper-button-white\"></div></div><div class=\"swiper-container nav-slider loading\"><div class=\"swiper-wrapper\" id=\"verticalSwiper" + (i + 1) + "\"></div></div></div>";


                                for (j in response.albums.data[i].photos.data) {
                                    var link = response.albums.data[i].photos.data[j].images[indexPhoto].source;
                                    var description = "Descrizione"

                                    var divForHtmlmain = "<div class=\"swiper-slide\"><figure class=\"slide-bgimg\" style=\"background-image:url(" + link + ")\"><img src=\"" + link + "\" class=\"entity-img\" /></figure><div class=\"content\"><p class=\"title\">Titolo</p><span class=\"caption\">" + description + "</span></div></div>";


                                    var mainId = "mainSwiper" + (i + 1);

                                    document.getElementById(mainId).innerHTML += divForHtmlmain;
                                }
                            }
                            sliderMove();
                        }

                    );
                });

            });

            function sliderMove() {

                var overlay = document.getElementById('overlay'),
                    overlayClose = overlay.querySelector('button'),
                    header = document.getElementById('header')
                switchBtnn = header.querySelector('button.slider-switch'),
                    toggleBtnn = function() {
                        if (slideshow.isFullscreen) {
                            classie.add(switchBtnn, 'view-maxi');
                        } else {
                            classie.remove(switchBtnn, 'view-maxi');
                        }
                    },
                    toggleCtrls = function() {
                        if (!slideshow.isContent) {
                            classie.add(header, 'hide');
                        }
                    },
                    toggleCompleteCtrls = function() {
                        if (!slideshow.isContent) {
                            classie.remove(header, 'hide');
                        }
                    },
                    slideshow = new DragSlideshow(document.getElementById('slideshow'), {
                        // toggle between fullscreen and minimized slideshow
                        onToggle: toggleBtnn,
                        // toggle the main image and the content view
                        onToggleContent: toggleCtrls,
                        // toggle the main image and the content view (triggered after the animation ends)
                        onToggleContentComplete: toggleCompleteCtrls
                    }),
                    toggleSlideshow = function() {
                        slideshow.toggle();
                        toggleBtnn();
                    },
                    closeOverlay = function() {
                        classie.add(overlay, 'hide');
                    };

                // toggle between fullscreen and small slideshow
                switchBtnn.addEventListener('click', toggleSlideshow);
                // close overlay
                closeOverlay();



                // Slider imgs


                // Params
                var mainSliderSelector = '.main-slider',
                    navSliderSelector = '.nav-slider',
                    interleaveOffset = 0.5;

                // Main Slider
                var mainSliderOptions = {
                    loop: true,
                    speed: 1000,

                    loopAdditionalSlides: sizeImages,
                    grabCursor: true,
                    watchSlidesProgress: false,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    on: {
                        init: function() {
                            this.autoplay.stop();
                        },
                        imagesReady: function() {
                            this.el.classList.remove('loading');
                            //this.autoplay.start();
                        },
                        slideChangeTransitionEnd: function() {
                            var swiper = this,
                                captions = swiper.el.querySelectorAll('.caption');
                            for (var i = 0; i < captions.length; ++i) {
                                captions[i].classList.remove('show');
                            }
                            swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
                        },
                        progress: function() {
                            var swiper = this;
                            for (var i = 0; i < swiper.slides.length; i++) {
                                var slideProgress = swiper.slides[i].progress,
                                    innerOffset = swiper.width * interleaveOffset,
                                    innerTranslate = slideProgress * innerOffset;
                                swiper.slides[i].querySelector(".slide-bgimg").style.transform =
                                    "translate3d(" + innerTranslate + "px, 0, 0)";
                            }
                        },
                        touchStart: function() {
                            var swiper = this;
                            for (var i = 0; i < swiper.slides.length; i++) {
                                swiper.slides[i].style.transition = "";
                            }
                        },
                        setTransition: function(speed) {
                            var swiper = this;
                            for (var i = 0; i < swiper.slides.length; i++) {
                                swiper.slides[i].style.transition = speed + "ms";
                                swiper.slides[i].querySelector(".slide-bgimg").style.transition =
                                    speed + "ms";
                            }
                        }
                    }
                };
                var mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

            };
        </script>


        <!-- PARTICELLE -->

        <script>
            particlesJS.load('particles-js', 'particlesjs-config.json', function() {});
            //   particlesJS.load('partic-js', 'particlesjs-config.json', function() {});
        </script>

        <!-- MOUSE FOLLOW -->
        <script>
            $(document).mousemove(function(e) {
                //Get 'container' offset:
                o = $('.mouse').offset();
                //Track mouse position:
                $(".dot").css({
                    "top": e.pageY - o.top,
                    "left": e.pageX - o.left
                });
            });
        </script>




        <!-- MENU OPEN&CLOSE -->

        <script>
            var isActive = false;

            function menuOpen() {

                if (isActive) {
                    $('.js-menu').removeClass('active');
                    $('.menu').addClass('pulse');
                    $('.menu').addClass('circleRadius');
                    $('.menu').removeClass('squareRadius');
                    $('body').removeClass('menu-open');
                } else {
                    $('.menu').removeClass('pulse');
                    $('.menu').removeClass('circleRadius');
                    $('.menu').addClass('squareRadius');
                    $('.js-menu').addClass('active');
                    $('body').addClass('menu-open');
                }

                isActive = !isActive;
            };
        </script>

        <!-- GESTIONE ANIMAZIONE CAMBIO SCHERMATA -->
        <script>
            function whichAnimationEvent() {
                var t,
                    el = document.createElement("fakeelement");

                var animations = {
                    "animation": "animationend",
                    "OAnimation": "oAnimationEnd",
                    "MozAnimation": "animationend",
                    "WebkitAnimation": "webkitAnimationEnd"
                }

                for (t in animations) {
                    if (el.style[t] !== undefined) {
                        return animations[t];
                    }
                }
            }

            var animationEvent = whichAnimationEvent();

            $(".homeScreen").addClass(".visitato");
            $("nav li").click(function(event) {
                var selectedScreen = '.' + event.target.id;
                var allScreens = document.getElementsByClassName("box");
                var visitato = $(selectedScreen).hasClass(".visitato");

                if (visitato) {
                    menuOpen();
                    return;
                }
                if (event.target.id === "homeScreen") {
                    $('#particles-js').css("display", "inline");
                    $('.dot').css("display", "inline");
                } else {
                    $('#particles-js').css("display", "none");
                    $('.dot').css("display", "none");
                }
                if (event.target.id === "aboutScreen") {
                    $('#partic-js').css("visibility", "visible");
                } else {
                    $('#partic-js').css("visibility", "hidden");
                }
                if (event.target.id != "peopleScreen") {
                    $('.contenitorePeople').css("visibility", "hidden");
                } else {
                    $('.contenitorePeople').css("visibility", "visible");
                }
                for (var i = 0; i < allScreens.length; i++) {
                    var actualScreen = allScreens[i];
                    if (window.getComputedStyle(actualScreen).opacity == 1) {
                        var offScreen = actualScreen;
                        menuOpen();
                        $(selectedScreen).css("visibility", "visible");
                        $(selectedScreen).addClass("fadeIn");
                        $(selectedScreen).removeClass("fadeOut");
                        $(selectedScreen).addClass(".visitato");

                        $(offScreen).addClass("fadeOut");
                        $(offScreen).css("opacity", "0.1");
                        $(offScreen).removeClass("fadeIn");
                        $(offScreen).removeClass(".visitato");
                        $(offScreen).one(animationEvent,
                            function(event) {

                                $(offScreen).css("visibility", "hidden");

                            });

                    }
                }


            });
        </script>

        <!-- TRANSLATE TEXT -->
        <script>
            $('.languageMenu li').click(function() {
                var lang = $(this);
                var text = $("#aboutText");
                var itaString = `MOOD STUDIO nasce nel 2017 con sede ad Aversa, dalla volontà di giovani architetti di dare vita ad un laboratorio  dinamico e multidisciplinare, in cui condividere teorie e sperimentare soluzioni per lo spazio dell’abitare.
Lo studio si avvale di un team solido, con competenze nella progettazione architettonica e nel design di interni, che attraverso la costante ricerca e l’ utilizzo di tecnologie innovative offre un servizio  a misura d’uomo rispecchiando i principi di funzionalità, vivibilità e sostenibilità ambientale. \n
La dedizione verso la “buona architettura” ha portato alla definizione di linee guida fondate su tematiche antropologiche e socio-culturali, che danno un’impronta importante per lo sviluppo di idee da tramutare  in progetti. \n
Ciò fa si che lo studio abbia acquisito una forte identità sul territorio grazie anche alla collaborazione sinergica con diverse figure professionali: da esperti artigiani per le lavorazioni di complementi d’arredo di design fino a pianificatori impegnati nella riqualificazione dei tessuti urbani con particolare attenzione alla progressiva  visione delle città del futuro, ricordando piacevolmente l’architetto Ernesto Nathan Rogers che citava:  “Dal cucchiaio alla città” . \n
`;
                var engString = `MOOD STUDIO is born in 2017 with seat in Aversa, as result of young architects desire to give life to a dynamic and multidisciplinary laboratory for sharing and experiencing solutions for the living space.\n
Our studio relies on a highly qualified team, with architectural design and interior design skills, which provides a customised service reflecting the principles of functionality, livability and environment sustainability, through the continuous technological research and the use of innovative technologies.\n
Our attention for the good architecture has led to the development of guidelines, defined on the basis of anthropological and socio cultural issues, that give an important imprint for the development of ideas, that will be projects.\n
This ensures us a strong identity on the territory thank to the synergic collaboration with different professional figures : from expert artisans for the machining of design complementary furnishings to planners committed in urban redevelopment focusing on the progressive vision  of future cities, pleasantly reminding the architect Ernesto Nathan Roger who quoted: from spoon to city.\n
`;


                if (lang.text() == "English") {
                    text.text(engString);
                } else if (lang.text() == "Italiano") {
                    text.text(itaString);
                }

                var header = $(".aboutScreen header");
                var content = $(".aboutScreen layout");
                var bg = $('.bg');
                $(header).addClass("peopleIn");
                $(bg).addClass("peopleIn");

                $(content).css("opacity", "0");

                var animationEvent = whichAnimationEvent();

                $(header).on(animationEvent, function(event) {

                    $(header).css("transform", "translateY(-100%)");
                    $(bg).css("transform", "translateY(-100%)");
                    $(header).css("-webkit-transform", "translateY(-100%)");
                    $(bg).css("-webkit-transform", "translateY(-100%)");
                    $(content).css("visibility", "visible");
                    $(content).addClass("fadeIn");

                    $(header).css("display", "none");
                    $(bg).css("display", "none");


                });
            })
        </script>
        <!-- SEI CHROME SU ANDROID? -->
        <script>
            $(document).ready(function() {
                var isAndroid = navigator.userAgent.toLowerCase().indexOf("android");
                var isChrome = navigator.userAgent.indexOf("Chrome") !== -1;
                if (isAndroid > -1) {
                    if (isChrome) {
                        var isLookBehindSupported = false;
                        try {
                            isLookBehindSupported = !!new RegExp("(?<=)");
                        } catch (e) {}
                        if (isLookBehindSupported) {
                            $('.workScreen').css("height", "96%");
                            $('.homeScreen').css("height", "96%");
                        }

                    }
                }
            });
        </script>

        <!-- CAMBIO IMMAGINE -->

        <script>
            var img = document.getElementById("imgRoll");

            var i = 1;


            function imgRoll() {

                if (i == 6) {
                    i = 7;
                }
                img.innerHTML = "<img src =/test/imgs/" + i + ".jpg>";
                if (i == 9) {

                    i = 0;
                }
                i++;
                setTimeout(imgRoll, 300);
            }

            imgRoll();
        </script>

        <!-- FORM -->
        <script>
            // Input Lock
            $('textarea').blur(function() {
                $('#hire textarea').each(function() {
                    $this = $(this);
                    if (this.value != '') {
                        $this.addClass('focused');
                        $('textarea + label + span').css({
                            'opacity': 1
                        });
                    } else {
                        $this.removeClass('focused');
                        $('textarea + label + span').css({
                            'opacity': 0
                        });
                    }
                });
            });

            $('#hire .field:first-child input').blur(function() {
                $('#hire .field:first-child input').each(function() {
                    $this = $(this);
                    if (this.value != '') {
                        $this.addClass('focused');
                        $('.field:first-child input + label + span').css({
                            'opacity': 1
                        });
                    } else {
                        $this.removeClass('focused');
                        $('.field:first-child input + label + span').css({
                            'opacity': 0
                        });
                    }
                });
            });

            $('#hire .field:nth-child(2) input').blur(function() {
                $('#hire .field:nth-child(2) input').each(function() {
                    $this = $(this);
                    if (this.value != '') {
                        $this.addClass('focused');
                        $('.field:nth-child(2) input + label + span').css({
                            'opacity': 1
                        });
                    } else {
                        $this.removeClass('focused');
                        $('.field:nth-child(2) input + label + span').css({
                            'opacity': 0
                        });
                    }
                });
            });
        </script>


        <script>
            var isSelected = false;
            const myProjects = [{
                ID: "-webDesign",
                category: "Web Design",
                bImage: "/test/imgs/1.jpg",
                copy: `<p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p><p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac su
    scipit ante purus, auctor nec iaculis libero leo i</p><p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p><p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p>`
            }, {
                ID: "-graphicDesign",
                category: "Graphic Design",
                bImage: "/test/imgs/2.jpg",
                copy: "<p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p>"
            }, {
                ID: "-photography",
                category: "Photography",
                bImage: "/test/imgs/3.jpg",
                copy: "<p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p>"
            }, {
                ID: "-brandDevelopment",
                category: "Branding",
                bImage: "/test/imgs/4.jpg",
                copy: "<p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p>"
            }, {
                ID: "-htmlEmails",
                category: "HTML Emails",
                bImage: "/test/imgs/5.jpg",
                copy: "<p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p>"
            }, {
                ID: "-another1",
                category: "HTML Emails",
                bImage: "/test/imgs/7.jpg",
                copy: "<p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p>"
            }, {
                ID: "-another2",
                category: "HTML Emails",
                bImage: "/test/imgs/8.jpg",
                copy: "<p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p>"
            }, {
                ID: "-another3",
                category: "HTML Emails",
                bImage: "/test/imgs/9.jpg",
                copy: "<p>Lorem ipsum dolor sit amet, vehicula ullamco vel nullam, non vulputate purus sit vel est, egestas nec a.</p> <p>Curabitur rutrum, pellentesque ipsum hendrerit. Nulla eu. In ipsum ac ultrices eget pretium, dictum velit a. Arcu aliquam nunc consectetuer. Mauris quisque interdum integer mauris fusce. Quam tellus molestie lobortis at diam, ut ac suscipit ante purus, auctor nec iaculis libero leo i</p>"
            }];

            var theHighlightedContent = {
                ID: "",
                category: "",
                bImage: "",
                copy: ""
            };
            var selectedProject;
            var scrollBackTo;

            var app = new Vue({
                el: "#projectsApp",
                data() {
                    return {
                        projects: myProjects,
                        highlightedContent: theHighlightedContent
                    };
                },
                methods: {
                    selectProjects: function(thisId) {
                        var self = "#" + thisId;
                        if ($(self).hasClass("openedProject")) {
                            isSelected = false;

                            if ($(self).hasClass('noTransition')) {
                                var timeoutA = 0;
                                var timeoutB = 0;
                                var timeoutC = 0;
                            } else {
                                var timeoutA = 800;
                                var timeoutB = 1200;
                                var timeoutC = 1600;
                            }




                            $(self).removeClass("openedProject");




                            setTimeout(function() {

                                $(self).removeClass("midTransition");
                                $(".selectedArea").removeClass("opened");

                            }, timeoutA);

                            setTimeout(function() {
                                $("#projectsApp .projects").removeClass("hidden");
                                $("#projectsApp .projects").removeClass("shrunk");
                            }, timeoutB);
                            setTimeout(function() {
                                // window.scrollTo(0, scrollBackTo);
                                $("html, body").animate({
                                    scrollTop: scrollBackTo
                                }, 500);
                                $(self).addClass('noTransition');
                            }, timeoutC);

                        } else {
                            isSelected = true;
                            scrollBackTo = $(self).offset().top;

                            if ($(self).hasClass('noTransition')) {
                                $(".selectedArea").addClass("noTransition");
                                $(".copyArea.fadeIn").addClass("noTransition");
                                var timeoutD = 0;
                            } else {
                                $(".selectedArea").removeClass("noTransition");
                                $(".copyArea.fadeIn").removeClass("noTransition");
                                var timeoutD = 800;
                            }
                        }

                        for (var i = 0; i < this.projects.length; i++) {
                            if (thisId == this.projects[i].ID) {
                                this.highlightedContent = this.projects[i];
                            }
                        }
                    }
                }
            });

            $(document).ready(function() {
                resizeProjectDivs();
            });
            var resizeTimer;
            $(window).on("resize", function(e) {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    if (isSelected == false) {
                        resizeProjectDivs();
                    }
                }, 250);
            });

            function resizeProjectDivs() {
                var midRange = false;
                var smallRange = false;
                var winWidth = $(window).width();
                if (winWidth < 920 && 620 < winWidth) {
                    midRange = true;
                }
                if (winWidth < 720) {
                    smallRange = true;

                }
                var i = 0;

                $("#projectsApp .projects").each(function() {
                    var pWidth = $(this).width();
                    var pHeight;
                    if (i < 8) {
                        pHeight = pWidth;
                    } else {
                        if (midRange == true) {
                            pHeight = pWidth * 0.5;
                        } else if (smallRange == true) {
                            pHeight = pWidth;
                        } else {
                            pHeight = pWidth * 1.5;
                        }
                    }
                    $(this).css("height", pHeight + "px");


                    i++;
                });
            }
        </script>
        <!-- FORM SEND -->
        <script>
            $(function() {
                // Get the form.
                var form = $('#ajax-contact');
                // Get the messages div.
                var formMessages = $('#message');

                // Set up an event listener for the contact form.
                $(form).submit(function(event) {

                    // Stop the browser from submitting the form.
                    event.preventDefault();
                    // Serialize the form data.
                    var formData = $(form).serialize();

                    $.ajax({
                            type: 'POST',
                            url: $(form).attr('action'),
                            data: formData
                        })
                        .done(function(response) {
                            if (response.success) {
                                formMessages.removeClass("error").addClass("success").text("Success!");
                                $("#name,#email").val("");
                            } else {
                                formMessages.removeClass("success").addClass("error").text("Oops, failure!");
                            }
                        })
                        .fail(function(data) {
                            // Make sure that the formMessages div has the 'error' class.
                            $(formMessages).removeClass('success');
                            $(formMessages).addClass('error');

                            // Set the message text.
                            if (data.responseText !== '') {
                                $(formMessages).text(data.responseText);
                            } else {
                                $(formMessages).text('Oops! An error occured and your message could not be sent.');
                            }
                        });
                });
            });
            // Submit the form using AJAX.
        </script>

        <script>
            var button = $('.bttn');

            function whichAnimationEvent() {
                var t,
                    el = document.createElement("fakeelement");

                var animations = {
                    "animation": "animationend",
                    "OAnimation": "oAnimationEnd",
                    "MozAnimation": "animationend",
                    "WebkitAnimation": "webkitAnimationEnd"
                }

                for (t in animations) {
                    if (el.style[t] !== undefined) {
                        return animations[t];
                    }


                }
            }
            $(button).click(function() {
                var team = $(".contenitore");
                $(team).addClass("peopleIn");
                $('.contenitorePeople').css("visibility", "hidden");
                $('.contenitorePeople').css("opacity", "0");

                var animationEvent = whichAnimationEvent();

                $(team).on(animationEvent, function(event) {

                    $(team).css("transform", "translateY(-100%)");
                    $(team).css("-webkit-transform", "translateY(-100%)");
                    $('.contenitorePeople').css("visibility", "visible");
                    $('.peopleScreen').css("overflow", "scroll");
                    $('.peopleScreen').css("overflow-x", "hidden");
                    $('.contenitorePeople').addClass("fadeIn");

                    $(team).css("display", "none");


                });
            })
        </script>


</body>
<!-- FINE BODY -->

</html>