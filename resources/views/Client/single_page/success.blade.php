<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="author" content="https://dfwblackcarlimollc.com"/>
    <title>Success Message</title>

    <style>
        .box{
            margin-top:60px;
            display:flex;
            justify-content:space-around;
            flex-wrap:wrap;
        }

        .alert{
            margin-top:25px;
            background-color:#fff;
            font-size:25px;
            font-family:sans-serif;
            text-align:center;
            width:500px;
            min-height: 150px;
            padding-top: 150px;
            position:relative;
            border: 1px solid #efefda;
            border-radius: 2%;
            box-shadow:0px 0px 3px 1px #ccc;
        }

        .alert::before{
            width:100px;
            height:100px;
            position:absolute;
            margin-left:85px;
            border-radius: 100%;
            inset: 20px 0px 0px 100px;
            font-size: 60px;
            line-height: 100px;
            border : 5px solid gray;
            animation-name: reveal;
            animation-duration: 1.5s;
            animation-timing-function: ease-in-out;
        }

        .alert>.alert-body{
            opacity:0;
            animation-name: reveal-message;
            animation-duration:1s;
            animation-timing-function: ease-out;
            animation-delay:1.5s;
            animation-fill-mode:forwards;
        }

        @keyframes reveal-message{
            from{
                opacity:0;
            }
            to{
                opacity:1;
            }
        }

        .success{
            color:green;
        }

        .success::before{
            content: '✓';
            background-color: #eff;
            box-shadow: 0px 0px 12px 7px rgba(200,255,150,0.8) inset;
            border : 5px solid green;
        }

        .error{
            color: red;
        }

        .error::before{
            content: '✗';
            background-color: #fef;
            box-shadow: 0px 0px 12px 7px rgba(255,200,150,0.8) inset;
            border : 5px solid red;
        }

        @keyframes reveal {
            0%{
                border: 5px solid transparent;
                color: transparent;
                box-shadow: 0px 0px 12px 7px rgba(255,250,250,0.8) inset;
                transform: rotate(1000deg);
            }
            25% {
                border-top:5px solid gray;
                color: transparent;
                box-shadow: 0px 0px 17px 10px rgba(255,250,250,0.8) inset;
            }
            50%{
                border-right: 5px solid gray;
                border-left : 5px solid gray;
                color:transparent;
                box-shadow: 0px 0px 17px 10px rgba(200,200,200,0.8) inset;
            }
            75% {
                border-bottom: 5px solid gray;
                color:gray;
                box-shadow: 0px 0px 12px 7px rgba(200,200,200,0.8) inset;
            }
            100%{
                border: 5px solid gray;
                box-shadow: 0px 0px 12px 7px rgba(200,200,200,0.8) inset;
            }
        }

    </style>
</head>
<body>

<div class="box">
    <div class="success alert">
        <div class="alert-body">
            Success !
        </div>
       <p style="font-size: 15px;">{!! @$mess->message !!}</p>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    setTimeout(function() {
        window.location.href = "https://dfwtaxiriders.com/";
    }, 8000);

</script>
</body>
</html>