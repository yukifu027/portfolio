<?php
require_once('work.php');

$furima = new Work('FURIMA', 'Ruby/AWS/jQuery', 'img/works/furima.png', 'https://github.com/yukifu027/fleamarket_sample_75b');
$chatspace = new Work('Chat Space', 'Ruby/AWS/jQuery', 'img/works/chatspace.png', 'https://github.com/yukifu027/chat-space');
$geoapp = new Work('Geo App', 'Ruby/heroku/jQuery', 'img/works/geo-app.png', 'https://github.com/yukifu027/geo-app');
$mirai = new Work('Mirai', 'Ruby/heroku/jQuery', 'img/works/mirai.png"', 'https://github.com/yukifu027/mirai-app');
$newsapp = new Work('News App', 'Swift/XCode', 'img/works/newsapp.png', 'https://github.com/yukifu027/news-app');
$bokete = new Work('Bokete', 'Swift/XCode', 'img/works/bokete.png', 'https://github.com/yukifu027/Bokete-app');
$chatapp = new Work('Chat App', 'Swift/XCode', 'img/works/chatapp.png', 'https://github.com/yukifu027/Chat-app');
$googleadmob = new Work('Google AdMob', 'Swift/XCode', 'img/works/googleadmob.png', 'https://github.com/yukifu027/GoogleAdmob-app');
$quizapp = new Work('Quiz App', 'Swift/XCode', 'img/works/quizapp.png', 'https://github.com/yukifu027/quiz-app');

$works = array($furima, $chatspace, $geoapp, $mirai, $newsapp, $bokete, $chatapp, $googleadmob, $quizapp);


?>