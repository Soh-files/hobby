<?php
session_start();

if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $content = $_SESSION['content'];    
}

$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(48));
$token = htmlspecialchars($_SESSION['token'], ENT_QUOTES);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>そーブログ | お問い合わせ</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link rel=”icon” type=”image/vnd.microsoft.icon” href=“favicon.ico”>
    <link rel="icon" type="image/png" href="android-touch-icon.png" sizes="192x192">
    <link rel="apple-touch-icon" href="apple-touch-icon.png" sizes="180x180">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">

    <script src="JS/script.js" defer></script>
</head>
<body>

    <header class="nohero">
        <div class="container">
            <div class="headA"><a></a></div>
            <a href="" class="headB" id="menuButton">
                <div></div>
                <div></div>
                <div></div>
            </a>
            <ul class="headC" id="nav">
                <li><a href="index.html">トップ</a></li>
                <li><a href="study1.html">電験3種</a></li>
                <li><a href="3DCG1.html">3DCG</a></li>
                <li><a href="books1.html">読書レビュー</a></li>
            </ul>
        </div>
    </header>

    <section class="top noposts contactpage">
        <div class="container">
            <h1>お問い合わせ</h1>
            <p>
                コメント、ご質問、ご相談などお気軽にお問い合わせください。
            </p>
            
            <form class="contactform" action="thanks.php" method="post">
            <input type="hidden" name="token" value="<?php echo $token; ?>"> 
                <div class="name">
                    <label for="name">お名前(ニックネーム可)</label>
                    <div class="conf-name"><?php echo $name; ?></div>
                </div>
                <div class="email">
                    <label for="email">メールアドレス</label>
                    <div class="conf-name"><?php echo $email; ?></div>
                </div>
                <div class="contactcontent">
                    <label for="content">お問い合わせ内容</label>
                    <div class="conf-name"><?php echo nl2br($content); ?></div>
                </div>
                <div class="submit">
                    <button type="submit" name="submit">送信</button>
                    <p><a href="contact.php?action=edit">入力画面に戻る</a></p>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <h2>メニュー</h2>
            <ul>
                <li><a href="index.html">トップ</a></li>
                <li><a href="study1.html">電験3種</a></li>
                <li><a href="3DCG1.html">3DCG</a></li>
                <li><a href="books1.html">読書レビュー</a></li>
                <li><a href="privacypolicy.html">プライバシーポリシー</a></li>
                <li><a href="contact.php">お問い合わせ</a></li>
            </ul>
            <p>@そーたろう All rights reserved.</p>
        </div>
    </footer>

    <div class="mask" id="mask"></div>

</body>
</html>