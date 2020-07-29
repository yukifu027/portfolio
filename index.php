<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
    <link rel="stylesheet" href="responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scroll.js"></script>
    <title>Yuki's Portfolio</title>
  </head>
  <body>
    <div id="page_top"><a href="#"></a></div>
    <header>
      <div class="header">
        <div class="contents">
          <a href="#1" class="table">WORKS</a>
          <a href="#2" class="table">FEATURE</a>
          <a href="#3" class="table">ABOUT</a>
          <a href="#4" class="table">SKILL</a>
          <a href="#5" class="table">CONTACT</a>
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
          <?php foreach($works as $work): ?>
            <div class="works__content">
              <a href="<?php echo $work->getLink() ?>" target="_blank"><img src="<?php echo $work->getImage() ?>" alt="作品の写真" id="works__content-image" class="hover-action"></a>
              <div class="works__content-name"><?php echo $work->getName() ?></div>
              <div class="works__content-skill"><?php echo $work->getSkill() ?></div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="feature" id='2'>
        <div class="feature__subtitle">FEATURE</div>
        <div class="feature__intro">１サイトの解説</div>
        <div class="feature__contents">
          <a href= "http://54.168.141.53/" class="hover-action"><img src="img/works/furima.png" alt="スキルのロゴ" class="feature__image"></a>
          <div class="feature__sentence">
            サイト名：FURIMA</br>
            <a href="https://docs.google.com/document/d/1ZLodv2ol7FlkoPj9fp0sunFAR1XV0hEFnlB0cBZ5feI/edit">詳細</a></br>
            </br>
            担当：　DB設計・商品購入確認ページマークアップ・商品購入機能（単体テスト済み）・リファクタリング・デプロイetc</br></br>
            コメント：TECHCAMPにて、スクラムを用いたアジャイル開発を行いました。その中で、個人での開発とは違い、チーム内での連携の必要性を強く感じ、今後の実務に生かしていきたいと考えております。

          </div>
        </div>
      </div>
      <div class="about" id='3'>
        <div class="about__subtitle">ABOUT</div>
        <div class="about__content">
          <img src="img/about/c25e21bacc6a649cc525f5a000ae454fb_33688528_200625_0164.jpg" alt="作品の写真" class="about__image">
          <div class="about__sentence">
            福井祐希（22）＊2020年7月現在</br>
            国際系の大学にいたことから、特技は英会話です。（TOEIC880点）</br>
            <b>2020-6 ~ </b></br>
            ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー</br>
            （Rails・Swift・）Vue・PHPを使って、オリジナルアプリを制作中</br>
            学生時代におけるデザインへの興味から、見た目によって人の役に立つ仕事をしたいと思い</br>
            現在は、フロントエンドエンジニアとしての就職を目指しています。</br>
            今後は、Webデザインのスキルをあげ、Webデザイナーも兼務できるフロントエンド</br>
            エンジニアになりたいです。</br>
            現在、独学で書籍や動画を使いながら、Photoshop/Webデザインを学習しております。（作品は「WORKS」に記載）</br>
            </br>
            <b>自己PR</b></br>
            スキルアップへの主体的な「行動力」とユーザー目線での「当事者意識」が私の強みです。</br>
            与えられるのを待つのではなく、少しでも会社や社会に貢献できるよう継続してプログラミングやWebデザインを学習していきます。</br>
            そして、それらを生かし、ユーザビリティやデザイン性など、あらゆる視点からユーザーのためのサービス作りに取り組みたいです。</br>
          </div>
        </div>
      </div>
      <div class="skill" id='4'>
        <div class="skill__subtitle">SKILL</div>
        <div class="skill__intro">まだまだ努力は必要ですが、これからもスキルアップに励みます！</div>
        <div class="skill__contents">
          <div class="skill__content">
            <img src="img/skill/ruby.png" alt="スキルのロゴ" class="skill__image">
            <div class="skill__name">Ruby</div>
          </div>
          <div class="skill__content">
            <img src="img/skill/htmlcssjs-sum.png" alt="スキルのロゴ" class="skill__image">
            <div class="skill__name">HTML/CSS/Javascript</div>
          </div>
          <div class="skill__content">
            <img src="img/skill/Swift_logo_color_rgb.png" alt="スキルのロゴ" class="skill__image">
            <div class="skill__name">Swift</div>
          </div>
          <div class="skill__content">
            <img src="img/skill/new-php-logo.png" alt="スキルのロゴ" >
            <div class="skill__name">PHP</div>
          </div>
          <div class="skill__content">
            <img src="https://d0.awsstatic.com/logos/powered-by-aws.png" alt="Powered by AWS Cloud Computing">
            <div class="skill__name">AWS</div>
          </div>
          <div class="skill__content">
            <img src="img/skill/GitHub-Mark-64px.png" alt="スキルのロゴ" class="skill__image">
            <div class="skill__name">Github</div>
          </div>
          <div class="skill__content">
            <img src="img/skill/logo.png" alt="スキルのロゴ" class="skill__image">
            <div class="skill__name">Vue.js</div>
          </div>
          <div class="skill__content">
            <img src="img/skill/icons8-adobe-photoshop-96.png" alt="スキルのロゴ" class="skill__image">
            <div class="skill__name">Photoshop</div>
          </div>
        </div>
      </div>
      <div class="contact" id='5'>
        <div class="contact__subtitle">CONTACT</div>
        <div class="contact__intro">お問い合わせは、SNSかメールでお願いいたします。</div>
        <div class="contact__contents">
          <form class="contact__contents-form" action="mailto.php" method="post">
              名前：<br />
              <input type="text" name="name" size="50" value="" /><br />
  
              メールアドレス：<br />
              <input type="text" name="mail" size="50" value="" /><br />
  
              問合せ内容：<br />
              <textarea name="inquiry" cols="50" rows="5"></textarea><br />
  
              <br />
  
              <input type="submit" value="送信" />
          </form>
          <div class="contact__contents-sns">
            <a href="https://www.facebook.com/profile.php?id=100011484172817" target="_blank"><img src="img/sns/f_logo_RGB-Blue_1024.png" alt="作品の写真" class="contact__contents-twitter"></a>
            <a href="https://twitter.com/X8makSD43KURayD" target="_blank"><img src="img/sns/Twitter_Social_Icon_Circle_Color.png" alt="作品の写真" class="contact__contents-twitter"></a>
            <a href="https://github.com/yukifu027" target="_blank"><img src="img/sns/GitHub-Mark-64px.png" alt="作品の写真" class="contact__contents-twitter"></a>
            <a href="https://www.wantedly.com/users/138225663" target="_blank"><img src="img/sns/wantedly_logo.png" alt="作品の写真" class="contact__contents-wantedly"></a>
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