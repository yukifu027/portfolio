<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");
 
      $to = "yukifu027@gmail.com";
      $from = "From: ".$_POST['mail'];
			$title = $_POST['title'];
      $content = $_POST['inquiry'];

			print($title);
			
 
			if(mb_send_mail($to, $title, $content, $from)){
				echo "メールを送信しました";
			} else {
				echo "メールの送信に失敗しました";
			}
    ?>
    
    <h2>メール送信完了</h2>    
 
    <p class="message">
    お問い合わせありがとうございます。1営業日以内にご返信させていただきます。<br>
    自動返信メールをお送りしておりますのでご確認ください。<br>
    1時間たっても届かない場合はお手数ですがこちらからご連絡ください。
    </p>
	</body>
</html>