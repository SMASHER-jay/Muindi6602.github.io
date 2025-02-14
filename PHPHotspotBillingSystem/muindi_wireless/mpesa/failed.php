<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Transaction failed. Please try again.">
    <title>Transaction Failed</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .frem {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: url('./gifs.gif');
        background-position: center;
        background-repeat: no-repeat;
    }
    .frem p {
        position: absolute;
        top: 3rem;
        font-size: 7rem;
        color: #00000063;
    }
    .frem h2 {
        position: absolute;
        bottom: 8rem;
        font-size: 34px;
    }
    .frem h5 {
        position: absolute;
        bottom: 6rem;
        color: #9c9c9c;
    }
    .frem a {
        position: absolute;
        bottom: 1rem;
        background: linear-gradient(45deg, #ff0034, #ffbc00);
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 23px;
        border-radius: 13px;
    }
</style>

<body>
    <div class="frem">
        <p>404</p>
        <h2>Transaction Failed</h2>
        <h5>Click on retry to attempt again.</h5>
        <a href="index.php">Retry</a>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>
</body>

</html>
