<?php
require_once('../phpmailer/PHPMailerAutoload.php');


$mail = new PHPMailer;


$mail->CharSet = 'utf-8';


$user_id = $_POST['user_id'];


$answers = $_POST['answers'];


function answer_test($answers_nums)
{
	
	
	
	$answers_text = "";
	
	
	$answer_nums_arr = explode( ',', $answers_nums );
	
	
	switch ($answer_nums_arr[0]) {
		
		
		// 		ответ на 1 вопрос
		case 0:
		$answers_text = "<p>Флиртуете Вы умело. Мужчины к Вам тянутся сами, потому что в Вашем обществе весело и легко. Но когда приходит время для серьёзных отношений, они оказываются женатыми, слишком занятыми или не теми, которыми Вы себе их представляли. Как-то несправедливо, правда? Придётся научиться распознавать уже по первым фразам, какой мужчина перед Вами, на что он готов ради Вас и стоит ли на него тратить время. Иначе можно остаться, как в сказке, «у разбитого корыта».
    </p>";
		
		
		break;
		
		
		case 1:
		$answers_text = "<p>Вы – душевный человек, с Вами интересно проводить время. Мужчине рядом с Вами спокойно, надёжно и уютно. Но Вы пропускаете важную часть флирта – кокетство и, порой, после длительных встреч узнаёте, что у Вашего мужчины появилась другая. Или видите, как Ваш мужчина флиртует с недостойными, на Ваш взгляд, барышнями. Как же так, ведь всё было хорошо?
    Вам придётся научиться флиртовать неповторимым, свойственным только Вам, способом, без жеманства и вызывающего кокетства. Желательно освоить навык достойного  флирта, который будет привлекать внимание мужчины именно к Вам.</p>";
		
		
		break;
		
		
		case 2:
		$answers_text = "<p>Активность и настойчивость хорошо помогают Вам в жизни, работе, быту. Но когда Вы флиртуете с мужчиной, стоит научиться давать ему понять, что он – сильный, он – первый, он – мужчина. Иначе мужчина может воспринять Вас как равного партнёра и никогда не возьмёт инициативу в свои руки. Недоверие к мужскому потенциал, которое избранник чувствует, порождает неуверенность в будущем с этим человеком. Проще говоря: мы в них сомневаемся и не верим, что может  они на что-то в этой жизни способны.</p>";
		
		
		break;
		
		
		case 3:
		$answers_text = "<p>Вы с первых минут производите впечатление интересного человека и настолько приковываете внимание, что мужчине не хочется Вас перебивать. Вы прекрасно вовлекаете в разговор и ведёте беседу. В итоге, получается, что Вы мужчину развлекаете, приучаете его к этому, а потом он просто ждёт, когда Вы снова начнёте это делать, не предпринимая ничего со своей стороны. А Вам-то тоже хочется видеть проявление его инициативы. Верно? Вам стоит научиться провоцировать мужчин на ответные действия.</p>";
		
		
		break;
		
		
		case 4:
		$answers_text = "<p>На фазе знакомства и флирта Вам нет равных. Но… когда дело доходит до продолжения, Вы можете столкнуться с чёрствостью, отчуждённостью и тем, что мужчины Вас просто не понимают. Вам могут не перезвонить или попросту пропасть без объяснения. Почему это происходит и как этого избежать? Изучив мужские типажи и особенности, Вы станете для своего избранника значимой частью жизни.</p>";
		
		
		break;
		
		
		case 5:
		$answers_text = "<p>Вы не нашли себя ни в одной из распространённых моделей флирта. А Вы точно знаете, что такое флирт? Флирт – это значимая часть любых, даже самых серьёзных отношений. На этом этапе у мужчины формируется понимание, как к Вам необходимо относиться, что Вам нравится, и как в дальнейшем строить с Вами отношения. Если мужчина не увидит флирта, то не поймёт, как с Вами лучше вести себя, и может начать относиться к Вам как попало. Изучите искусство флирта, ведь это не только кокетство, но еще и разговоры, интересы, узнавание друг друга.</p>";
		
		
		break;
		
		
	}
	
	
	switch ($answer_nums_arr[1]) {
		
		
		// 		ответ на 2 вопрос
		case 0:
		$answers_text.= "<p>Вы – продвинутая, умная женщина. У Вас множество прогрессивных идей и разумных решений. Это правда! Но Вам бывает сложно общаться с мужчинами, потому что они не дослушивают, перебивают Вас, а потом не перезванивают… И так будет до тех пор, пока Вы не научитесь подавать свои идеи так, чтобы увлечь ими мужчин. И тогда они начнут придавать Вашим мыслям такое же значение, как и своим.</p>";
		
		
		break;
		
		
		case 1:
		$answers_text.= "<p>Мужчины – народ странный! Всё ведь было прекрасно,  и вдруг он исчезает, не предупредив, забыв свои обещание или прикрывшись делами. Почему так происходит? Дело в том, что Вы – эмоционально щедрый человек. Делитесь всем, не скупясь, а для мужчины, порой, такое внимание чрезмерно. Вам стоит освоить особое женское умение: оставлять его слегка «голодным», чтобы мужчине хотелось самому к Вам возвращаться, а лучше – вообще от Вас не уходить.</p>";
		
		
		break;
		
		
		case 2:
		$answers_text.= "<p>В общении Вы не боитесь проявлять инициативу, а вот мужчина с этим как-то не спешит. Почему? На самом деле, мужчины стараются избегать умных женщин. Они не любят, когда рядом с женщиной чувствуют себя не на высоте. Это не значит, что Вам нужно притворяться дурочкой. Достаточно лишь научиться провоцировать его на инициативу на фазе общения и флирта. Вы будете довольны, когда поймёте насколько это просто и какие действенные результаты это приносит.</p>";
		
		
		break;
		
		
		case 3:
		$answers_text.= "<p>Вы стараетесь дать любимому мужчине максимум: всю свою заботу, внимание и любовь. Но когда мужчине удобно рядом с Вами, он просто забывает подумать о Вас. И если Вы будете и дальше излишне проявлять свою душевность, понимание, не научившись честно говорить о своих собственных интересах и желаниях, то он так и не будет считаться с Вами. Часто мужчины, чтобы чувствовать себя на высоте и не тратиться на женщину, принижают её достоинство.</p>";
		
		
		break;
		
		
		case 4:
		$answers_text.= "<p>Случается так, что мужчина не уделяет Вам должного внимания. К сожалению, надо признать: мужчины часто бывают такими! НО! Вы же не станете тратить своё время на пустые сожаления. Вам стоит освоить умение договариваться с мужчинами, вызывая у них желание думать и заботиться о Вас. С первых слов и действий Вам придётся научиться распознавать его намерения по отношению к Вам. Ведь если Вы не получаете от него желаемого, может, просто он не знает, как с Вами нужно обращаться?</p>";
		
		
		break;
		
		
		case 5:
		$answers_text.= "<p>Отношения с мужчинами невозможны без общения. Вы, конечно, можете быть ими услышанной, но для этого нужно научиться понимать,о чём говорят мужчины. Часто мужчины не слышат  Вас лишь из-за того, что Вы не знаете, о чём с ними говорить и как рассказать о своих интересах. Поэтому они обещают одно, а на деле Вы получаете другое. Научившись распознавать, кто находится перед Вами, Вы сможете легко слышать скрытые посылы мужчин. Обязательно научитесь этому.</p>";
		
		
		break;
		
		
	}
	
	
	switch ($answer_nums_arr[2]) {
		
		
		// 		ответ на 3 вопрос
		case 0:
		$answers_text.= "<p>Что касается секса, немногие женщины умеют испытывать такую страсть, как Вы. Но этой страсти хватает ненадолго. Когда проходит сексуальный запал, то кажется, что прошла и любовь. А это не так. Чтобы перестать терять мужчин и разочаровываться, неплохо было бы освоить навыки развития отношений не только через секс. Ведь отношения – это, прежде всего, близость, которая выражается во всех аспектах взаимоотношений.</p>";
		
		
		break;
		
		
		case 1:
		$answers_text.= "<p>Вы способны, как немногие, получать удовольствие от секса в постоянных отношениях. Вы можете хотеть мужчину даже спустя годы совместной жизни. Но Вы не позволяете мужчине Вас соблазнять, отдаваясь ему только тогда, когда Вы это решили. Если у мужчины нет возможности добиваться женщину, он становится безынициативным, послушным, домашним. А такой уже Вам будет неинтересен.</p>";
		
		
		break;
		
		
		case 2:
		$answers_text.= "<p>Вам кажется, что только сексом можно удержать мужчину надолго. Но в Вашем случае удерживаете Вы не этим, а совсем другими своими качествами. Секс же стоит научиться воспринимать как занятие, приятное для вас обоих. Добавьте в него лёгкости и чуть больше эмоций.</p>";
		
		
		break;
		
		
		case 3:
		$answers_text.= "<p>Вы – страстная натура, и секс с Вами – это настоящее приключение. Но вот доказывать через секс, что Вы – лучшая, неосмотрительно. Докажете, что лучшая, а дальше что? А дальше – мужчина потеряет интерес к сексу, станет проявлять недовольство и раздражение, потому что самец – это он, и он не позволит женщине над собой доминировать. Хорошо бы, помимо страсти, использовать романтику и душевность.</p>";
		
		
		break;
		
		
		case 4:
		$answers_text.= "<p>В сексе Вы любите нежность, красоту, романтику. В период влюблённости всё кажется таким радостным и красивым, а через некоторое время эта радость исчезает. В Вашем случае рутина  поглощает радость от секса и лёгкость отношений. А Вы – та женщина, которая не может обойтись без романтики и ухаживаний. Поэтому стоит научиться получать необходимое удовольствие за счёт других аспектов отношений, чтобы в Вашей жизни всегда царили любовь и романтика.</p>";
		
		
		break;
		
		
		case 5:
		$answers_text.= "<p>Часто секс – это не просто радость для себя, но и способ отблагодарить мужчину. Во многом это так и есть. Но когда секс становится единственным способом отплатить мужчине за его поступки, заботу, помощь и подарки, то вскоре мы перестаём просить мужчину сделать для нас что-то., а секс ставим «под запрет». А ведь можно научиться благодарить не только сексом, да и самому мужчине нужен от Вас не только секс. А чем можно ещё расплачиваться, об этом скоро и поговорим.</p>";
		
		
		break;
		
		
	}
	
	
	switch ($answer_nums_arr[3]) {
		
		
		// 		ответ на 4 вопрос
		case 0:
		$answers_text.= "<p>В отношениях Вы цените надёжность и комфорт. Вы ждёте этого от мужчины и сами делаете всё, от Вас зависящее. Это и правда очень важно, чтобы Вы чувствовали себя уверенно и защищённо, но если это становится основным фоном отношений, а эмоции отходят на второй план, тогда мужчина может захотеть пойти за радостью к другой женщине. А ведь Вам совсем не этого хочется, правда?</p>";
		
		
		break;
		
		
		case 1:
		$answers_text.= "<p>В отношениях с мужчинами Вы цените радость и эмоции. Вы хотите, чтобы всё было так же ярко, как во время влюблённости. И это прекрасно! Но часто мужчины не переходят к более серьёзным предложениям, а остаются на стадии периодических встреч. Поэтому на Вас часто обращают внимание женатые мужчины, так как в Вас есть то, что им не хватает у себя в семье. И обидно, когда развлекаются с вами, а женятся потом на других.</p>";
		
		
		break;
		
		
		case 2:
		$answers_text.= "<p>На этапе длительных отношений Вы начинаете строить семейное гнездо: достаток, дом, дети… Но часто бывает так, что в стремлении получить семейный статус женщина забывает о себе. И после становится неинтересной ни себе, ни своему мужчине. Парадокс! Как же выйти замуж так, чтобы и семью создать и для него всегда остаться интересной и желанной?</p>";
		
		
		break;
		
		
		case 3:
		$answers_text.= "<p>Вы цените высокие отношения и не согласны на меньшее. Для Вас важно родство душ, взаимопонимание, совместное духовное развитие… Но при этом часто Вы теряете способность радоваться земным вещам – сексу, деньгам, веселью. И вскоре отношения мужчина-женщина могут перерасти в отношения брат-сестра или деловые партнёры. И после непонятно откуда на горизонте появляются другие женщины. Странно, ведь, казалось, в семье было полное взаимопонимание.
    </p>";
		
		
		break;
		
		
		case 4:
		$answers_text.= "<p>Для Вас очень важно в отношениях поддерживать и заботиться друг о друге. Но наступает момент, когда забота и хлопоты подавляют влюбленность и интерес друг к другу, превращая в быт и рутину. И в один день Вы понимаете: забота без любви Вам уже не нужна…</p>";
		
		
		break;
		
		
		case 5:
		$answers_text.= "<p>Многие женщины плохо представляют себе, что они хотят получить от своих отношений с мужчиной. Хочется, чтобы просто рядом кто-то был. А что тогда делать мужчине? Если женщина не знает, чего она хочет, то ей невозможно угодить, чтобы мужчина ни предпринимал. Вот и получается, что он НИЧЕГО не предпринимает. Но Вас, уверена, это не устраивает. Вам стоит научиться слышать свои собственные желания и желания своего мужчины, чтобы они стали радостью для вас обоих.</p>";
		
		
		break;
		
		
	}
	
	
	return $answers_text;
	
	
}


$message_head = file_get_contents("mail_head.txt");


$message_txt = answer_test($answers);


$message_footer = file_get_contents("mail_footer.txt");


$message = $message_head.$message_txt.$message_footer;


$mail->isSMTP();


// Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';


// Specify main and backup SMTP servers
$mail->SMTPAuth = true;


// Enable SMTP authentication
$mail->Username = 'info@mastervision.su';


// Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'DBG7yq1l16HgCHNDJC';


// Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';


// Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;


// TCP port to connect to / этот порт может отличаться у других провайдеров
$mail->setFrom('info@mastervision.su');


// от кого будет уходить письмо?
$mail->addAddress($user_id);


// Кому будет уходить письмо 
$mail->isHTML(true);


// Set email format to HTML
$mail->Subject = 'Результат теста "Мы глазами мужчин"';


$mail->Body    = $message_head.$message_txt.$message_footer;


$mail->AltBody = '';


if(!$mail->send()) {
	
	
	echo 'Что-то пошло не так, попробуйте ещё раз';
	
	
}


else {
	
	
	// 	header('location: thank-you.html');
	
	
}


?>