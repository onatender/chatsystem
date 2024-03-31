<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

        .message-input {
            border: none;
            padding-top: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            padding-right: 0px;
            margin-left: 10px;
            outline: none;
            font-size: 24px;
            width: 80%;
            height: 100%;
            font-family: "Quicksand", sans-serif;
            font-weight: 300;
        }

        .message-box {
            box-shadow: 2px 10px 9px rgba(81, 6, 151, .5);
            background-color: white;
            border-radius: 24px;
            border: none;
            height: 48px;
            outline: none;
            margin-left: 5%;
            margin-right: 5%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .message-box-container {
            position: absolute;
            bottom: 5%;
            width: 36.5%;
        }

        .send-btn {
            padding: 3px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            transition: .3s;
            background: linear-gradient(white, skyblue);
        }

        .send-btn:hover {
            cursor: pointer;
            background: linear-gradient(white, rgb(0, 150, 255));
            animation: scale 1.3s ease-in-out infinite;
        }


        @keyframes scale {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .chat-screen {
            margin: auto;
            height: 100%;
            width: 40%;
            background-color: rgb(50, 177, 255);
            border-top: none;
            border-bottom: none;
        }

        body,
        html {
            background-color: skyblue;
            height: 100%;
            padding: 0;
            margin: 0;
        }

        body {}

        .message-screen {
            width: 100%;
            padding-top: 5%;
        }

        .message {
            margin-left: 5%;
            margin-right: 5%;
            padding-bottom: 5px;
            padding-top: 5px;
            max-width: 80%;
            width: fit-content;
            text-wrap: wrap;
            word-wrap: break-word;
        }

        .message-blob-in {
            background-color: rgb(100, 100, 200);
            padding: 10px;
            border-radius: 10px;
        }

        .message-blob-out {
            background-color: rgb(0, 100, 255);
            align-items: end;
            padding: 10px;
            border-radius: 10px;
        }


        .message-content {
            font-family: "Quicksand", sans-serif;
            font-weight: 600;
            text-wrap: break-word;
        }

        .message-container-in {
            display: flex;
            justify-content: flex-end;
        }

        .message-container-out {
            display: flex;
        }

        @media only screen and (max-width: 1000px) {
            .chat-screen {
                width: 100%;
                height: 100%;
            }

            .message-box {
                margin: auto;
            }
        }
    </style>
</head>

<body>
    <div class="chat-screen">
        <div class="message-screen">
            <?php
            $messages = array(
                array(
                    "content" => "hello world",
                    "sender" => "in",
                    "date" => ""
                ),
                array(
                    "content" => "hello world 2",
                    "sender" => "out",
                    "date" => ""
                )
            );

            foreach ($messages as $message) {
                include('message.php');
            }

            ?>

        </div>


        <div class="message-box-container">
            <div class="message-box">
                <input class="message-input" type="text" placeholder="Mesaj yazınız...">
                <div class="send-btn">
                    <img height="32px" src="plane.svg">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.send-btn').click(() => {
        $('.message-input').val("");
    });
</script>

</html>