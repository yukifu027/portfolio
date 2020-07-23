<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");

			$titles = $_POST['name'];
 
      $to = "yukifu027@gmail.com";
      $from = "From:{$_POST['mail']}";
			$title = "{$titles}様からお問い合わせがありました。";
      $content = $_POST['inquiry'];

			// print($to);
			// print($from);
			// print($title);
			// print($content);
			
 
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

		<h2>問合せ内容</h2>    
 		
		<table border="1" style="border-collapse: collapse">
		<tr>
		<td>名前</td>
		<td><?php echo $_POST["name"]; ?></td>
		</tr>
		<tr>
		<td>メールアドレス</td>
		<td><?php echo $_POST["mail"]; ?></td>
		</tr>
		<tr>
		<td>問い合わせ内容</td>
		<td><?php echo $_POST["inquiry"]; ?></td>
		</tr>
		</table>
	</body>
</html>