<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scroll.js"></script>
    <title>Yuki's Portfolio</title>
  </head>
  <body>
    <div id="page_top"><a href="#"></a></div>
    <header>
      <div class="header">
        <div class="contents">
          <a href="#1">WORKS</a>
          <a href="#2">FEATURE</a>
          <a href="#3">ABOUT</a>
          <a href="#4">SKILL</a>
          <a href="#5">CONTACT</a>
        </div>
      </div>
    </header>

    <div class="main">
      <div class="title">
        <div class="title__myname">YUKI FUKUI</div>
        <div class="title__subtitle">PORTFOLIO</div>
      </div>
      <div class="works" id='1'>
        <div class="works__subtitle">WORKS</div>
        <div class="works__intro">これまでに作成したWebアプリ・IOSアプリです。<br>TECHCAMP（プログラミングスクール）での課題制作も含んでおります。</div>
        <div class="works__contents">
          <div class="works__content">
            <img src="img/IMG_8557.jpg" alt="作品の写真" class="works__content-image">
            <div class="works__content-name">FURIMA</div>
            <div class="works__content-skill">Ruby/AWS/jQuery</div>
            <div class="works__content-link"><a class="works__content-link" href="#" target="_blank">Link</a></div>
          </div>
        </div>
      </div>
      <div class="feature" id='2'>
        <div class="feature__subtitle">FEATURE</div>
        <div class="feature__intro">１サイトの解説</div>
      </div>
      <div class="about" id='3'>
        <div class="about__subtitle">ABOUT</div>
        <div class="about__content">
          <img src="img/about/c25e21bacc6a649cc525f5a000ae454fb_33688528_200625_0164.jpg" alt="作品の写真" class="about__image">
          <div class="about__sentence">
            福井祐希（22）＊2020年7月現在</br>
            趣味は、旅行とギターです。</br>
            国際系の大学にいたことから、特技は英会話です。（TOEIC880点）</br>
            <b>2020-4 ~ </b></br>
            ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー</br>
            【TECHCAMP受講生（プログラミングスクール）】</br>
            1　Ruby on Railsのフレームワークを用いたチャットアプリ制作</br>
            2　既存のフリマサービスのクローンサイトを作成し、スクラムを用いたアジャイル開発を経験</br>
            <b>2020-6 ~ </b></br>
            ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー</br>
            Rails・Swift・React・PHPを使って、オリジナルアプリを制作中
          </div>
        </div>
      </div>
      <div class="skill" id='4'>
        <div class="skill__subtitle">SKILL</div>
        <div class="skill__intro">まだまだ努力は必要ですが、これからもスキルアップに励みます！</div>
      </div>
      <div class="contact" id='5'>
        <div class="contact__subtitle">CONTACT</div>
        <div class="contact__intro">お問い合わせは、SNSかメールでお願いいたします。</div>
        <div class="contact__contents">
          <form class="contact__contents-form" action="confirmation.php" method="post">
              名前：<br />
              <input type="text" name="name" size="50" value="" /><br />
  
              メールアドレス：<br />
              <input type="text" name="mail" size="50" value="" /><br />

              件名：<br />
              <input type="text" name="title" size="50" value="" /><br />
  
              問合せ内容：<br />
              <textarea name="inquiry" cols="50" rows="5"></textarea><br />
  
              <br />
  
              <input type="submit" value="送信" />
          </form>
          <div class="contact__contents-sns">
            <a href="https://twitter.com/X8makSD43KURayD" target="_blank"><img src="img/sns/Twitter_Social_Icon_Circle_Color.png" alt="作品の写真" class="contact__contents-twitter"></a>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="footer">
        Copyright©YUKI FUKUI. All Rights Reserved.
      </div>
    </footer>
  </body>
</html>