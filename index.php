<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Yuki's Portfolio</title>
  </head>
  <body>
    <header>
      <div class="header">
        <div class="contents">
          <a href="#">WORKS</a>
          <a href="#">FEATURE</a>
          <a href="#">ABOUT</a>
          <a href="#">SKILL</a>
          <a href="#">CONTACT</a>
        </div>
      </div>
    </header>

    <div class="main">
      <div class="title">
        <div class="title__myname">YUKI FUKUI</div>
        <div class="title__subtitle">PORTFOLIO</div>
      </div>
      <div class="works">
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
      <div class="feature">
        <div class="feature__subtitle">FEATURE</div>
        <div class="feature__intro">１サイトの解説</div>
      </div>
      <div class="about">
        <div class="about__subtitle">ABOUT</div>
      </div>
      <div class="skill">
        <div class="skill__subtitle">SKILL</div>
        <div class="skill__intro">まだまだ努力は必要ですが、これからもスキルアップに励みます！</div>
      </div>
      <div class="contact">
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
      <div class="returnToTop">
        <a href="#" class="returnToTop-button">トップへもどる</a>
      </div>
    </div>

    <footer>
      <div class="footer">
        Copyright©YUKI FUKUI. All Rights Reserved.
      </div>
    </footer>
  </body>
</html>