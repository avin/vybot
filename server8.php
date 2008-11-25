#!/usr/bin/php
<?php

$dblocation = "127.0.0.1"; //адресс СУБД
$dbname = "vychat"; //имя БД
$dbuser = "root"; //логин СУБД
$dbpassword = ""; //пасс СУБД
$adminip="192.168.0.2"; //IP админа

#-------------------------
$wow_mangos_dbname = "mangos"; //имя БД time
$wow_realmd_dbname = "realmd"; //имя БД
$wow_characters_dbname = "characters"; //имя БД
#-------------------------
$nick = "(!)"; //ник в випреса
$channel = "#Main"; //канал в випресе
$port = 8167; //порт випреса
$address = "192.168.0.255"; //бродкаст випреса
$sex = '0'; # 0-man 1-women
$ES = 0; // Enter Status
$ex="";
#---------викторина-------
$qbase="/quests.txt";
$qsize=122696;
$q_answer="";
$main_time= time();
$help_time= time();
#-------------------------
$ircnick = "vypress"; //ник в ирке
$ircchannel = "#vypress"; //канал в ирке
$ircport = 6667; //порт в ирке
$ircaddress = "192.168.0.200"; //адресс ирики
#-------------------------
$maps_a = Array(
	0 => 'Azeroth', 
	1 => 'Kalimdor', 
	2 => 'UnderMine',
	13 => 'Test zone',
	17 => 'Kalidar',
	30 => 'Alterac Valley', 
	33 => 'Shadowfang Keep Instance', 
	34 => 'The Stockade Instance', 
	35 => 'Stormwind Prizon', 
	36 => 'Deadmines Instance', 
	37 => 'Plains of Snow', 
	43 => 'Wailing Caverns Instance', 
	44 => 'Monastery Interior', 
	47 => 'Razorfen Kraul Instance', 
	48 => 'Blackfathom Deeps Instance', 
	70 => 'Uldaman Instance', 
	90 => 'Gnomeregan Instance', 
	109 => 'Sunken Temple Instance', 
	129 => 'Razorfen Downs Instance', 
	150 => 'Outland', 
	169 => 'Emerald Forest', 
	189 => 'Scarlet Monastery Instance', 
	209 => 'Zul\`Farrak Instance', 
	229 => 'Blackrock Spire Instance', 
	230 => 'Blackrock Depths Instance', 
	249 => 'Onyxia\`s Lair Instance', 
	269 => 'Caverns of Time Instance', 
	289 => 'Scholomance Instance', 
	309 => 'Zul\`Gurub Instance', 
	329 => 'Stratholme Instance', 
	349 => 'Maraudon Instance', 
	369 => 'Deeprun Tram', 
	389 => 'Ragefire Chasm Instance', 
	409 => 'The Molten Core Instance', 
	429 => 'Dire Maul Instance', 
	449 => 'Alliance PVP Barracks', 
	450 => 'Horde PVP Barracks', 
	451 => 'Development Land', 
	469 => 'Blackwing Lair Instance', 
	489 => 'Warsong Gulch', 
	509 => 'Ruins of Ahn\`Qiraj Instance', 
	529 => 'Arathi Basin',
	530 => 'Outland',
	531 => 'Temple of Ahn\`Qiraj Instance',
	532 => 'Karazahn\`s Tower Instance',
	533 => 'Naxxramas Instance',
	540 => 'The Shattered Halls Instance',
	542 => 'The Blood Furnace Instance',
	543 => 'Ramparts Instance',
	544 => 'Magtheridon\`s Lair Instance',
	545 => 'The Steamvault Instance',
	550 => 'Tempest Keep Instance',
	552 => 'The Arcatraz Instance',
	553 => 'The Botanica Instance',
	554 => 'The Mechanar Instance',
	555 => 'Shadow Labyrinth Instance',
	556 => 'Sethekk Halls Instance',
	557 => 'Mana-Tombs Instance',
	558 => 'Auchenai Crypts Instance',
	562 => 'Blade\`s Edge Arena',
	564 => 'Black Temple Instance',
	565 => 'Gruul\`s Lair Instance',
);

$zone = Array(
	0 => Array(
		Array(700,10,1244,1873,'Undercity',1497),
		Array(-840,-1330,-5050,-4560,'Ironforge',1537),
		Array(1190,200,-9074,-8280,'Stormwind City',1519),
		Array(-2170,-4400,-7348,-6006,'Badlands',3),
		Array(-500,-4400,-4485,-2367,'Wetlands',11),
		Array(2220,-2250,-15422,-11299,'Stranglethorn Vale',33),
		Array(-1724,-3540,-9918,-8667,'Redridge Mountains',44),
		Array(-2480,-4400,-6006,-4485,'Loch Modan',38),
		Array(662,-1638,-11299,-9990,'Duskwood',10),
		Array(-1638,-2344,-11299,-9918,'Deadwind Pass',41),
		Array(834,-1724,-9990,-8526,'Elwynn Forest',12),
		Array(-500,-3100,-8667,-7348,'Burning Steppes',46),
		Array(-608,-2170,-7348,-6285,'Searing Gorge',51),
		Array(2000,-2480,-6612,-4485,'Dun Morogh',1),
		Array(-1575,-5425,-432,805,'The Hinterlands',47),
		Array(3016,662,-11299,-9400,'Westfall',40),
		Array(600,-1575,-1874,220,'Hillsbrad Foothills',267),
		Array(-2725,-6056,805,3800,'Eastern Plaguelands',139),
		Array(-850,-2725,805,3400,'Western Plaguelands',28),
		Array(2200,600,-900,1525,'Silverpine Forest',130),
		Array(2200,-850,1525,3400,'Tirisfal Glades',85),
		Array(-2250,-3520,-12800,-10666,'Blasted Lands',4),
		Array(-2344,-4516,-11070,-9600,'Swamp of Sorrows',8),
		Array(-1575,-3900,-2367,-432,'Arathi Highlands',45),
		Array(600,-1575,220,1525,'Alterac Mountains',36),
	),
	1 => Array(
		Array(2698,2030,9575,10267,'Darnassus',1657),
		Array(326,-360,-1490,-910,'Thunder Bluff',1638),
		Array(-3849,-4809,1387,2222,'Orgrimmar',1637),
		Array(-1300,-3250,7142,8500,'Moonglade',493),
		Array(2021,-400,-9000,-6016,'Silithus',1377),
		Array(-2259,-7000,4150,8500,'Winterspring',618),
		Array(-400,-2094,-8221,-6016,'Un\`Goro Crater',490),
		Array(-590,-2259,3580,7142,'Felwood',361),
		Array(-3787,-8000,1370,6000,'Azshara',16),
		Array(-1900,-5500,-10475,-6825,'Tanaris',440),
		Array(-2478,-5500,-5135,-2330,'Dustwallow Marsh',15),
		Array(360,-1536,-3474,-412,'Mulgore',215),
		Array(4000,-804,-6828,-2477,'Feralas',357),
		Array(3500,360,-2477,372,'Desolace',405),
		Array(-804,-5500,-6828,-4566,'Thousand Needles',400),
		Array(-3758,-5500,-1300,1370,'Durotar',14),
		Array(1000,-3787,1370,4150,'Ashenvale',331),
		Array(2500,-1300,4150,8500,'Darkshore',148),
		Array(3814,-1100,8600,11831,'Teldrassil',141),
		Array(3500,-804,-412,3580,'Stonetalon Mountains',406),
		Array(-804,-4200,-4566,1370,'The Barrens',17),
	),
	530 => Array(
		Array(-7000,-7650,9400,10050,'Silvermoon city',3487),
		Array(-11500,-12000,-4120,-3800,'The Exodar',3557),
		Array(-5500,-8200,8050,10450,'Eversong Woods',3430),
		Array(-5500,-8400,5820,8050,'Ghostlands',3433),
		Array(-10500,-14400,-5600,-2850,'Azuremyst Isle',3524),
		Array(-10500,-13300,-2850,-500,'Bloodmyst Isle',3525),
		Array(2950,0,-2850,-5500,'Shadowmoon',3520),
		Array(6020,2950,-2850,-1400,'Terokkar Forest',3519),
		Array(10000,6020,-2450,-700,'Nagrand',3518),
		Array(10000,5100,-700,1200,'Zangarmarsh',3521),
		Array(6000,5100,-1200,-700,'Zangarmarsh',3521),
		Array(5100,0,-1300,1200,'Hellfire Peninsula',3483),
		Array(8000,4400,1200,4500,'Blade\`s Edge Mountains',3522),
		Array(4400,0,1700,5400,'Netherstorm',3523),
	),
);
#-------------------------
set_time_limit(0);
#--------- строки запроса интернет ресурсов -------------------------------------------------------
$weather_result=='';
$news_result=='';
$web_time=time();
#------------------------------------Соединние с базой данных--------------------------------------
$dbcnx = @mysql_connect($dblocation, $dbuser, $dbpassword);
//mysql_query("SET NAMES cp1251");
if (!$dbcnx)
{
	echo ("Error: Could not connect to DB Server!");
	exit();
}
echo "Connected to DB Server.\n";
if (!@mysql_select_db($dbname,$dbcnx))
{
	echo "DB ne dostupna. Creating DB now...";
	mysql_query("CREATE database $dbname;");
	echo "Done.\n";
	echo "DB ne dostupna. Creating TABLES now...";
	@mysql_select_db($dbname,$dbcnx);
	mysql_query("CREATE TABLE messages ( id_message int (10) NOT NULL auto_increment, time datetime default NULL, author text,channel text, message text, PRIMARY KEY (id_message))TYPE=MyISAM;");
	echo "Done.\n";
}
mysql_query("REPAIR TABLE messages;"); //ЧИНИМ БАЗУ НА СЛУЧАЙ КАПУТА!
mysql_query("OPTIMIZE TABLE `messages`;");
#---------------------------------------------------------------------------------------------------preg_replace

$nol = chr(0);
$here=array();
$oldmessage='';

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
socket_set_option($socket, SOL_SOCKET, SO_BROADCAST, 1);
socket_set_nonblock ($socket);
socket_bind($socket, 0, $port);
	$msg = 'X'.rcode().'4'.$nick.$nol.$channel.$nol.'1'.$sex;
    socket_sendto($socket, $msg, strlen($msg), 0, $address, $port) !== false; $ES = 1;
    //$msg = 'X'.rcode().'4'.$nick.$nol."#cs".$nol.'1'.$sex;
    //socket_sendto($socket, $msg, strlen($msg), 0, $address, $port) !== false; $ES = 1;
    $msg = 'X'.rcode().'4'.$nick.$nol."#vic".$nol.'1'.$sex;
    socket_sendto($socket, $msg, strlen($msg), 0, $address, $port) !== false; $ES = 1;
    
    
$socket2 = fsockopen($ircaddress, $ircport);
stream_set_blocking($socket2,false);
fputs($socket2,"USER CMbot combined-minds.net CM :CM bot\n");
fputs($socket2,"NICK $ircnick\n");
fputs($socket2,"JOIN $ircchannel\n");

while(1)
{	
	if($src = @socket_recvfrom($socket, $data, 1024, 0,$hostt, $portt)) 
	{ 
		analize_packet ($data);
	}
	if ((time()-$main_time)>45) 
		{send_answer("Правильный ответ: ".$q_answer,1,"#vic"); quest();
					
	//--------------forumLastPost-------------------------------------
					$forum_base="forum"; 
					//$forum_user="root"; 
					//$forum_pass=""; 
					//$forum_host="localhost"; 
					$forum_rusult = "(E) ";
					//$forum_link = mysql_connect($host,$user,$pass)or die("Не могу соединиться"); 
					if (@mysql_select_db($forum_base, $dbcnx))
					{ 
						$query = "select a.postid, a.username, b.title from post a, thread b where a.threadid = b.threadid ORDER BY postid DESC LIMIT 0,1"; 
						$forum_db_rusult = mysql_query($query, $dbcnx);
						while ($row = mysql_fetch_array($forum_db_rusult)) 
						{ 
							$forum_rusult.= " ".$row['username']." отписался в теме \"".$row['title']."\"";;
							$last=$row['postid'];
						}
						
						//send_answer( $forum_rusult."отписался на форуме",0); //- DO NOT CHANGE
						echo "TESTING_FORUM";
						if ($superlast<>$last) { $superlast=$last; send_answer( $forum_rusult,1,"#Main"); }
					}
	//--------------------------------------------------------------------			
			
		}
	if ((time()-$help_time)>10) {$help_time=time(); $podskazka=substr_replace($podskazka,substr($q_answer,$bukf,1),$bukf,1); send_answer("Подсказка: ".$podskazka,1,"#vic"); $bukf=$bukf+1;}
	if ((time()-$web_time)>300) {$web_time=time(); $weather_result='';}	
	usleep(1000);
	if ($data = fgets($socket2, 128))
	{ 
        $ex = explode(' ', $data);
        if($ex[0] == "PING"){
            fputs($socket2, "PONG ".$ex[1]."\n");
        }
        
        
        if (($ex[1]=="PRIVMSG")&&($ex[2]==$ircchannel))  
        	{
        	$ident=$ex[0];
            $ircnick = "";
        	for ($i = 1; $i <= 64; $i++) 
        		{if ($ident[$i]!='!') $ircnick=$ircnick.$ident[$i]; else break;}
        		$ircnick.= " >>";
    			//$s = $ex[0]; $ircnick= substr($s,strpos(":",$s) ,strpos("!",$s)-strpos(":",$s) );

        	//echo $ex[1]; echo $ex[2];	
            $command='';
            for ($i = 3; $i <= sizeof($ex)-1; $i++) {
 			   $command .=$ex[$i].' ';     
			}
			$command[0] =' '; 
			$command = str_replace(array(chr(10), chr(13)), '',$command);
			
			$command= $ircnick.$command;
	        send_answer($command,1,"#Main");
				
        	}
	}
	
}

function get_zone_name($mapid, $x, $y)
{
	global $maps_a, $zone;
	
	if (!empty($maps_a[$mapid]))
		{
		$zmap=$maps_a[$mapid];
		if (($mapid==0) or ($mapid==1) or ($mapid==530))
			{
			$i=0; $c=count($zone[$mapid]);
			while ($i<$c)
				{
		if ($zone[$mapid][$i][2] < $x  AND $zone[$mapid][$i][3] > $x AND $zone[$mapid][$i][1] < $y  AND $zone[$mapid][$i][0] > $y) {$zmap=$zone[$mapid][$i][4]; break;}
				$i++;
				}
			}
		} else $zmap="Unknown zone";
	return $zmap;
} 

function pfopen($url) {
	
	
	$proxy_server = "192.168.0.102";
	$proxy_port = 48080;


	if (substr($url, 0,7) <> 'http://') {
		return false;
	}


	if (!$proxycon = fsockopen($proxy_server, $proxy_port, $errno, $errstr)) {return false;}  //stream_set_blocking ob_flush();
	else
	{
        stream_set_blocking($proxycon, false);
        //stream_set_timeout($proxycon, 4);
      
		fputs($proxycon,"GET ".$url." HTTP/1.0 \r\n\r\n");

		$reading_headers = true;
		$timeout=20;	
	    stream_set_blocking($proxycon, FALSE );
	    stream_set_timeout($proxycon, $timeout);
	    $info = stream_get_meta_data($proxycon);
	    $b=1;
		while (!feof ($proxycon) && $b<50000) {  // настройка скорости ответа
			$b++;
			echo $b.'\n';
			$curline = fgets($proxycon, 4096);
			$info = stream_get_meta_data($proxycon);
			if ($curline=="\r\n") {
				$reading_headers = false;
			}
			if (!$reading_headers) {
				$filecontent .= $curline;
			}
		}
		//if ($filecontent=='') $GLOBALS['weather_result']='Сервис не доступен бля';
		fclose($proxycon);

		return $filecontent;
	}

}

function rssread()
{
	send_answer("(O) [Поиск новостей...] (O)" ,0);
	
	$rss_url='http://news.softodrom.ru/scr/rss.php';
	$rss_filename='/srv/www/htdocs/avin/rss/feed.xml';
	//$rss_upfile=pfopen($rss_url); 
	//$rss_file=fopen($rss_filename, 'w+');
	//fwrite($rss_file, $rss_upfile);
	//fclose($rss_file);
	
	$modif=time()-@filemtime ("$rss_filename");
	if(!file_exists($rss_filename) || $modif>"3600")
	  {
	   $rss=pfopen($rss_url);  
	   $handle = fopen ("$rss_filename", "w");  
	   fwrite($handle, $rss);  
	   fclose($handle);
	  }
  
	  $url = $rss_filename;
	  // Загружаем файл
	  $content = file_get_contents($url);
	  // Регулярное выражение
	  $pattern = "|<item>[\s]*<title>(.*?)</title>[\s]*".
	             "<link>(.*?)</link>[\s]*".
	             "<description>(.*?)</description>[\s]*".
	             "<pubDate>(.*?)</pubDate>[\s]*".
	             "<category>(.*?)</category>|is";
	  preg_match_all($pattern, $content, $out);
	  // Выводим последние 10 позиций
	  for($i = 0; $i < 5; $i++)
	  {
	    //echo "<a href={$out[2][$i]}>{$out[1][$i]}</a><br>{$out[3][$i]}<br><br>"; 
	    send_answer('({) '.$out[1][$i].' (})' ,0); //- DO NOT CHANGE
	    send_answer($out[3][$i] ,0); //- DO NOT CHANGE
	  }
  
}

function rcode ()
{
	srand ((float)microtime()*1000000);
	$result="";
	for ($i = 1; $i <= 9; $i++)
	{
		$result .= chr (rand(48,57));
	}
	return $result;
}

  // функция превода текста с кириллицы в траскрипт
  function encodestring($st)
  {
    // Сначала заменяем "односимвольные" фонемы.
    $st=strtr($st,"абвгдеёзийклмнопрстуфхъыэ_",
    "abvgdeeziyklmnoprstufh'iei");
    $st=strtr($st,"АБВГДЕЁЗИЙКЛМНОПРСТУФХЪЫЭ_",
    "ABVGDEEZIYKLMNOPRSTUFH'IEI");
    // Затем - "многосимвольные".
    $st=strtr($st, 
                    array(
                        "ж"=>"zh", "ц"=>"ts", "ч"=>"ch", "ш"=>"sh", 
                        "щ"=>"shch","ь"=>"", "ю"=>"yu", "я"=>"ya",
                        "Ж"=>"ZH", "Ц"=>"TS", "Ч"=>"CH", "Ш"=>"SH", 
                        "Щ"=>"SHCH","Ь"=>"", "Ю"=>"YU", "Я"=>"YA",
                        "ї"=>"i", "Ї"=>"Yi", "є"=>"ie", "Є"=>"Ye"
                        )
             );
    // Возвращаем результат.
    return $st;
  }



function send_answer ($answer, $x=1, $channel="xxx")
{
	$nol=$GLOBALS['nol'];
	$socket=$GLOBALS['socket'];
	if ($x==1)  $address=$GLOBALS['address'];
	else if ($x==0) $address=$GLOBALS['hostt'];
	//echo "$x\n";
	$port=$GLOBALS['port'];
	if ($channel=="xxx") $channel=$GLOBALS['channel'];
	$nick=$GLOBALS['nick'];
	$ES=$GLOBALS['ES'];
	
	$msg = 'X'.rcode().'2'.$channel.$nol.$nick.$nol.$answer.$nol;
    if ($ES==1) socket_sendto($socket, $msg, strlen($msg), 0, $address, $port);
}

function quest ()
{
	$quiz=array();
	$qsize=$GLOBALS['qsize'];
	$str_num = rand (1, $qsize); $line = system('cat /quests.txt | head -n '.$str_num.' | tail -n 1'); 
	$pos_ex=strpos ($line,"|");
		for ($i = 0; $i < $pos_ex; $i++)
			$quiz[0]=$quiz[0].$line[$i];
		for ($i=$pos_ex+1; $i < strlen($line); $i++)
			$quiz[1]=$quiz[1].$line[$i];						
	send_answer("(I)(I)(I) ".$quiz[0],1,"#vic");
	//send_answer($quiz[1]);
	$GLOBALS['q_quest']=$quiz[0];
	$GLOBALS['q_answer']=$quiz[1];
	
	$GLOBALS['bukf']=0;
	$GLOBALS['podskazka']="";
	for ($i = 0; $i < strlen($GLOBALS['q_answer']); $i++)
		$GLOBALS['podskazka']=$GLOBALS['podskazka']."*";
		
		$GLOBALS['main_time']=time(); 
		$GLOBALS['help_time']=time();
}

function RadioStat()
{
	$DataPrint=array();
	$rusult='';
	$GrabURL = "http://192.168.0.200:8000/status2.xsl"; //- Complete URL Of The Page Your Grabbing From!
	$OpenFile = fopen("$GrabURL", "r"); //- DO NOT CHANGE
	$RetrieveFile = fread($OpenFile, 200000); //- Reduce This To Save Memory
		$GrabStart = "/difm";
		$GrabEnd = "/mayak";
		eregi("$GrabStart(.*)$GrabEnd", $RetrieveFile, $DataPrint);
		$rusult.="http://192.168.0.200:8000/difm.m3u\n ".$DataPrint[1];
	fclose($OpenFile); //- DO NOT CHANGE
	return $rusult; //- DO NOT CHANGE
}

function l2Stat()
{
	$DataPrint=array();
	$rusult='';
	$GrabURL = "http://192.168.0.192/avinprv/index.php"; //- Complete URL Of The Page Your Grabbing From!
	$OpenFile = fopen("$GrabURL", "r"); //- DO NOT CHANGE
	$RetrieveFile = fread($OpenFile, 200000); //- Reduce This To Save Memory
		$GrabStart = "<start>";
		$GrabEnd = "<end>";
		eregi("$GrabStart(.*)$GrabEnd", $RetrieveFile, $DataPrint);
		$rusult.="Сейчас в L2 Online \n ".$DataPrint[1];
	fclose($OpenFile); //- DO NOT CHANGE
	$rusult=str_replace("#",chr(13),$rusult);
	return $rusult; //- DO NOT CHANGE
}



function file_search($search_word)
			{
				if (@mysql_select_db("prosearch",$GLOBALS[dbcnx]))
				{
					$msg = mysql_query ("SELECT * FROM `filebase` WHERE `name` LIKE '%$search_word%' LIMIT 0 , 10");
					if ($msg)
					{
						while ($message = mysql_fetch_array($msg))
						{
							$search_res.=$message['prot']."://".$message['host'].$message['path']."/".$message['name'].".".$message['ext']."\n";
						}
						//$search_res = @iconv("windows-1251","UTF-8", $search_res);
						send_answer("Результат поиска: \n$search_res",0);
					}
				}
				@mysql_select_db($GLOBALS[dbname],$GLOBALS[dbcnx]);
			}

function analize_packet ($packet)
{
	$nol=$GLOBALS['nol'];
	$socket=$GLOBALS['socket'];
	$socket2=$GLOBALS['socket2'];
	$address=$GLOBALS['address'];
	$port=$GLOBALS['port'];
	//$channel=$GLOBALS['channel'];
	$nick=$GLOBALS['nick'];
	$oldmessage=$GLOBALS['oldmessage'];
	$hostt=$GLOBALS['hostt'];
	$adminip=$GLOBALS['adminip'];
	$sex=$GLOBALS['sex'];
	$ES=$GLOBALS['ES'];
	$here=$GLOBALS['here'];
	$dbname=$GLOBALS['dbname'];
	$wow_characters_dbname=$GLOBALS['wow_characters_dbname'];
	$dbcnx=$GLOBALS['dbcnx'];
	
	$n=0;
	$word="";
	
    $packet = @iconv("UTF-8", "windows-1251", $packet);
	for ($i = 11; $i <= strlen($packet)-1; $i++)
	{
		if ($packet[$i]<>$nol) $word.=$packet[$i];
		else {$parts[]=$word; $word=""; $n++;}
	}
	
	$channel=$parts[0];
	$GLOBALS['channel']=$channel;
	if ($word<>"") $parts[$n]=$word;
	$flag=$packet[10];
	$here[$hostt]['time']=date('l dS \of F H:i:s'); $GLOBALS['here'] = $here; //записи для !seen
	switch ($flag)
	{
		case '0':	//кто тут?	
			$msg = 'X'.rcode().'1'.$parts[0].$nol.$nick.$nol.'11';
    		if ($ES==1) socket_sendto($socket, $msg, strlen($msg), 0, $hostt, $port);
			break;
		case 'L': //кто тут?
			$msg = 'X'.rcode().'K'.$parts[0].$nol.$channel.$nol.$nick.$nol.'11';
    		if ($ES==1) socket_sendto($socket, $msg, strlen($msg), 0, $address, $port);	
    		break;		
		case '2': //строка в чате
			$words = Explode(" ",$parts[2]);
			$words [0]=strtolower($words [0]);
			if (($oldmessage<>$parts[2])&&($parts[1]<>$nick))
			if (@mysql_select_db($dbname,$dbcnx)) {mysql_query("INSERT INTO messages VALUES(0, now(), '$parts[1]', '$parts[0]', '$parts[2]');");}
			if ($parts[1]<>$nick)
			if ($parts[0]=="#Main") fputs($socket2, "PRIVMSG "."#vypress"." :".chr(2).$parts[1].chr(2).": ".str_replace(array(chr(10), chr(13)), ' - ', $parts[2])."\n");
			$oldmessage=$parts[2];		
			//админские команды
			if (($words[0]=='!fixdb')&&($hostt==$adminip))	{mysql_query("REPAIR TABLE messages;"); send_answer("FiXed");}
			if (($words[0]=='!clean')&&($hostt==$adminip))	{mysql_query("TRUNCATE TABLE `messages`;"); send_answer("Cleaned");}
			if (($words[0]=='!enter')&&($hostt==$adminip))	{$msg = 'X'.rcode().'4'.$nick.$nol.$channel.$nol.'0'.$sex; socket_sendto($socket, $msg, strlen($msg), 0, $address, $port); $GLOBALS['ES']=1;}
			if (($words[0]=='!exit')&&($hostt==$adminip))	{$msg = 'X'.rcode().'5'.$nick.$nol.$channel.$nol.'0'.$sex; socket_sendto($socket, $msg, strlen($msg), 0, $address, $port); $GLOBALS['ES']=0;}
			if (($words[0]=='!?')&&($hostt==$adminip))
				{
					$res=`nmap -p 42323 -n -P0 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep 42323/open | cut -f1 | awk '{ print $2 }'` ;send_answer("Доступные хайд-сервера: \n".$res,0);
					$res=`nmap -p 45206 -n -P0 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep 45206/open | cut -f1 | awk '{ print $2 }'` ;send_answer("Доступные avin hide [45206] сервера: \n".$res,0);
				}
			if (($words[0]=='!dos')&&($hostt==$adminip)&&(!empty($words[1]))&&(!empty($words[2])))
				{
					$arp_robin=$words[1];
					$arp_batman=$words[2];
					send_answer("In action! Wait 10 sec",0);
					$res=`arp-sk -c 5 -i eth1 -r -d $arp_robin -S $arp_batman --rand-arp-hwa-src -D $arp_robin` ;
					send_answer("Finished!",0);
				}
			//-----------------
			if (($words[0]=='!date')||($words[0]=='!time'))	{send_answer(date("D M j H:i:s Y"));}
			if (($words[0]=='!radio')||($words[0]=='!радио'))	{send_answer(RadioStat(),0);}
			if (($words[0]=='!l2')||($words[0]=='!линейка')||($words[0]=='!л2')||($words[0]=='!lineage'))	{send_answer(l2Stat(),0);}
			
			
			
			if (($words[0]=='!s')||($words[0]=='!поиск'))	{file_search($words[1]);}
			if ($words[0]=='!free')	{send_answer('1: '.system('df -h|grep -w /dev/hda1|awk \'{print $4}\'').'     2: '.system('df -h|grep -w /dev/md0|awk \'{print $4}\''));}
			if (($words[0]=='!who')||($words[0]=='!кто'))	{$res=`netstat -tun | grep "192.168.0." |awk '{ print $4 "	-	" $5}'` ;$res=str_replace(":21",":FTP",$res); $res=str_replace(":22",":xxx",$res); $res=str_replace(":80",":WEB",$res);$res=str_replace(":139",":SMB",$res);$res=str_replace(":445",":SMB",$res);$res=str_replace(":6667",":IRC",$res);$res=str_replace(":10000",":xxx",$res);     send_answer("Сетевая нагрузка на сервер: \n".$res,0);}
			
			#---сканироваие портов
			if (($words[0]=='!dota')||($words[0]=='!дота'))	{send_answer("(O) [Поиск...] (O)",0); $res=`nmap -p 6112 -n -P0 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep 6112/open | cut -f1 | awk '{ print $2 }'` ;send_answer("Сейчас в доту играют: \n".$res,0);}
			if (($words[0]=='!bf')||($words[0]=='!бф'))	{send_answer("(O) [Поиск...] (O)",0); $res=`nmap -sU -p 22000 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep '22000/open/udp' | cut -f1 | awk '{ print $2 }'` ;send_answer("Сейчас в бф играют: \n".$res,0);}
			if (($words[0]=='!cs')||($words[0]=='!кс'))	{send_answer("(O) [Поиск...] (O)",0); $res=`nmap -sU -p 27015 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep '27015/open/udp' | cut -f1 | awk '{ print $2 }'` ;send_answer("Сейчас в кс играют: \n".$res,0);}
			//if ($words[0]=='!wow')	{send_answer("(O) [Поиск...] (O)",0); $res=`nmap -p 3724 -n -P0 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep 3724/open | cut -f1 | awk '{ print $2 }'` ;send_answer("Онлайн сервера WoW: \n".$res,0);}
			
			if ($words[0]=='!http')	{send_answer("(O) [Поиск...] (O)",0); $res=`nmap -p 80 -n -P0 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep 80/open | cut -f1 | awk '{ print $2 }'` ;send_answer("Доступные веб-сервера: \n".$res,0);}
			if ($words[0]=='!ftp')	{send_answer("(O) [Поиск...] (O)",0); $res=`nmap -p 21 -n -P0 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep 21/open | cut -f1 | awk '{ print $2 }'` ;send_answer("Доступные фтп-сервера: \n".$res,0);}
			if ($words[0]=='!smb')	{send_answer("(O) [Поиск...] (O)",0); $res=`nmap -p 445 -n -P0 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep 445/open | cut -f1 | awk '{ print $2 }'` ;send_answer("Доступные шары: \n".$res,0);}	
			//if ($words[0]=='!vnc')	{send_answer("(O) [Поиск...] (O)",0); $res=`nmap -p 5900 -n -P0 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep 5900/open | cut -f1 | awk '{ print $2 }'` ;send_answer("Доступные VNC-сервера у: \n".$res,0);}
			if ($words[0]=='!inet')	{send_answer("(O) [Поиск...] (O)",0); $res=`nmap -p 1723 -n -P0 --open --min_parallelism 100 --max_scan_delay 0 -oG - 192.168.0.1-254 | grep 1723/open | cut -f1 | awk '{ print $2 }'` ;send_answer("В инете лазят: \n".$res,0);}	
			if ($words[0]=='!scanme')	{send_answer("[Сканирование...]",0); $res=`nmap $hostt` ;send_answer("Результат сканирования: \n".$res,0);}	
			#------поиск инфы--
			if ($words[0]=='!seen') {if (!empty($here[$words[1]])) send_answer("Я видел его в ".$here[$words[1]]['time'].". Ник: ".$here[$words[1]]['name']." Напиздаболил ".$here[$words[1]]['numwords']." слов. Последняя фраза: ".$here[$words[1]]['say'],0); else send_answer("Я таких не видел",0);}
			//if ($words[0]=='!info') {if (!empty($words [1])) {$id=$words [1]; $msg = mysql_query ("SELECT * FROM ip WHERE id LIKE '$id';"); if (mysql_num_rows ($msg)>0) {$message = mysql_fetch_array($msg); send_answer("IP: ".$message['id'].", Поганяло: ".$message['name'].", По паспорту: ".$message['fio'].", Адресс: ".$message['adress'].", Тел. мобильный: ".$message['mob'].", Тел. дом.: ".$message['dom'],0); }else send_answer("Я таких не знаю.",0);}else send_answer("Укажи IP.",0); }
			#-------quests-----
			//if (($words[0]=='!q')&&($parts[0]=="#vic")) {send_answer("Вопрос викторины: ".$GLOBALS['q_quest']);}
			if (($parts[2]==$GLOBALS['q_answer'])&&($parts[0]=="#vic")) {$here[$hostt]['qpoints']++; send_answer("(*) Верный ответ, $parts[1]! Вы зарабатываете ".$here[$hostt]['qpoints']." очков"); $GLOBALS['answer_nums']=0; quest ();}
			//if ($parts[0]=="#vic") {$GLOBALS['answer_nums']++; if ($GLOBALS['answer_nums']>15) {send_answer("Никто не дал правильного ответа"); quest (); $GLOBALS['answer_nums']=0;}}
			if (($parts[0]=="#vic")&&($words[0]=='!stat')) {send_answer("У вас ".$here[$hostt]['qpoints']." очков.",0);}
			#------ForumStat---
			if (($words[0]=='!forum')||($words[0]=='!форум'))	
			{
	
					$forum_base="forum"; 
					$forum_rusult = "Обсуждаемые темы: ";
					if (@mysql_select_db($forum_base, $dbcnx))
					{ 
						$query = "SELECT threadid,lastposter,title,dateline,userid FROM thread LEFT JOIN user ON (thread.lastposter=user.username) ORDER BY dateline DESC LIMIT 5"; 
						$forum_db_rusult = mysql_query($query, $dbcnx);
						while ($row = mysql_fetch_array($forum_db_rusult)) 
						{ 
							$forum_rusult.= "\n".$row['title']." "; 
							$forum_rusultult.= "[".$row['lastposter']."] "; 
							$forum_rusult.= date("d.m-H:i",$row['dateline']); 
						}
						send_answer( $forum_rusult,0); //- DO NOT CHANGE
					}
				
			}
			if (($words[0]=='!n')||($words[0]=='!н')||($words[0]=='!news')||($words[0]=='!новости'))
			{
				rssread();
			}
			if (($words[0]=='!w')||($words[0]=='!п')||($words[0]=='!погода')||($words[0]=='!weather'))	
			{	
			$weather_result=$GLOBALS['weather_result'];	
			
				if ($weather_result=='') //если статус погоды уже обнулился то смотрим в инет
				{
					//adv88=0&adv120=0&town=Владимир&townen=Vladimir&townua=Володимир&date=27&month=9&day=7&wparam1=34036&wparam2=1940756.92&s1=43&s2=43&wt=6&ecv=1&
					if (!$in = (pfopen("http://img.gismeteo.ru/flashinf/FLA27532.TXT"))) {$web_result="Служба временно недоступна!";}
					else 
						{ 
							$paars = split('&', $in); 
							foreach( $paars as $paar) 
							{ 
								list($parametr, $value) = split('=', $paar); 
								$var[$parametr] = $value; 
							} 
							 
							$t2 = ($var['wparam1'] - 17000 * intval($var['wparam1'] / 17000)) / 9; 
							$t1 = intval($var['wparam1'] / 17000); 
							$town= $var['town'];
							$hum = intval(($var['wparam2'] - intval($var['wparam2'])) * 100 + 1.8); //влажность 
							$wparam2 = intval($var['wparam2']); 
							$pres = intval($wparam2 / 10000) + 550; //давление 
							$wparam2 = $wparam2 - intval($wparam2 / 10000) * 10000; 
							$ws = intval($wparam2 / 100) - 5; // скорость ветра 
							 
							$wparam2 = $wparam2 - intval($wparam2 / 100) * 100; 
							$wdindx = $wparam2 / 7 - 3; 
							
							$weather_result=$weather_result. "Погода города ".$town; 
							$weather_result=$weather_result. ". Температура ".$t1." - ".$t2."°C"; 
							$weather_result=$weather_result. ". Влажность ".$hum."%"; 
							$weather_result=$weather_result. ". Давление ".$pres."мм рт/ст"; 
							$weather_result=$weather_result. ". Ветер ".$ws."м/c";
							
							
						}	
				}
				if ($weather_result=='') $weather_result='Чё?';
				send_answer($weather_result ,0); //- DO NOT CHANGE
				$GLOBALS['weather_result']=$weather_result;
				
			}

			
			if (($words[0]=='!last')||($words[0]=='!ласт')||($words[0]=='ласт'))	
			{
	
					$forum_base="forum"; 
					$forum_rusult = "5 Свежих сообщений на фоурме:\n";
					//$forum_link = mysql_connect($host,$user,$pass)or die("Не могу соединиться"); 
					if (@mysql_select_db($forum_base, $dbcnx))
					{ 
						$query = "select a.postid, a.username, a.pagetext, b.title from post a, thread b where a.threadid = b.threadid ORDER BY postid DESC LIMIT 0,5"; 
						$forum_db_rusult = mysql_query($query, $dbcnx);
						while ($row = mysql_fetch_array($forum_db_rusult)) 
						{ 
							  $row['pagetext'] = str_replace("\r\n","",$row['pagetext']); 
  							  $row['pagetext'] = str_replace("\n","",$row['pagetext']);
							$forum_rusult.= "(E) [".$row['username']."] <".$row['title']."> \n	".$row['pagetext']."\n";
						}
						send_answer( $forum_rusult,0);
					}
				
			}
			
			#------- WoW-------
			if (($words[0]=='!wow')||($words[0]=='!вов')) 
			{
				$ho_string="";
				$al_string="";
				
				if (@mysql_select_db($wow_characters_dbname,$dbcnx))
				{
					$msg = mysql_query ("select * FROM `characters` WHERE `online` = 1;");
					if ($msg)
					{
						while ($message = mysql_fetch_array($msg))
						{
							$name = $message['name'];
							$race = $message['race'];
							$class = $message['class'];
							$mapid = $message['map'];
							$pos_x = $message['position_x']; 
							$pos_y = $message['position_y']; 
							
							$dbdata = explode(" ", $message['data']);
							$lvl = $dbdata [34];
							$al=0;
							$ho=0;
								//Идентификация рассы и прочей лабуды
								if ($race==1) {$al++; $flag=1; $race="Человек";}
								if ($race==2) {$ho++; $flag=2; $race="Орк";}
								if ($race==3) {$al++; $flag=1; $race="Карлик";}
								if ($race==4) {$al++; $flag=1; $race="Ночной эльф";}
								if ($race==5) {$ho++; $flag=2; $race="Нежить";}
								if ($race==6) {$ho++; $flag=2; $race="Таурен";}
								if ($race==7) {$al++; $flag=1; $race="Гном";}
								if ($race==8) {$ho++; $flag=2; $race="Тролль";}
                                                                if ($race==10) {$ho++; $flag=2; $race="Кровавый эльф";}
								if ($race==11) {$al++; $flag=2; $race="Дрэней";}
		
								if ($class==1) {$class="Воин";}
								if ($class==2) {$class="Паладин";}
								if ($class==3) {$class="Охотник";}
								if ($class==4) {$class="Разбойник";}
								if ($class==5) {$class="Священник";}
								if ($class==7) {$class="Шаман";}
								if ($class==8) {$class="Маг";}
								if ($class==9) {$class="Колдун";}
								if ($class==11) {$class="Друид";}
                                                                
								$loc = get_zone_name($mapid, $pos_x, $pos_y);
								if ($flag==2) {$ho_string = $ho_string."      $name [$race/$class] lvl: $lvl Локация: $loc\n";}
								if ($flag==1) {$al_string = $al_string."      $name [$race/$class] lvl: $lvl Локация: $loc\n";}
								
						}
						if ($al_string=="") $al_string="      Никто не играет";
						if ($ho_string=="") $ho_string="      Никто не играет";
						send_answer("On-line игроки: \n\n Альянс:\n$al_string\n Орда:\n$ho_string",0);
					}
				}
				//@mysql_select_db($dbname,$dbcnx);
			}
			
			if (($words[0]=='!top') ||($words[0]=='!топ'))
			{
				$top="";
				$x=1;
				
				if (@mysql_select_db($wow_characters_dbname,$dbcnx))
				{
					$msg = mysql_query ("select `name`, `totaltime`, `data`, `online`, `map`, `position_x`, `position_y` FROM `characters` ORDER BY `totaltime` DESC;");
					if ($msg)
					{
						while ($message = mysql_fetch_array($msg))
						{
							$mapid = $message['map'];
							$pos_x = $message['position_x']; 
							$pos_y = $message['position_y']; 
							$dbdata = explode(" ", $message['data']);
							$lvl = $dbdata [34];
							if (round($message['totaltime']/(60*60))>50)
							{
							if ($message['online']==1)
							{
							$loc = get_zone_name($mapid, $pos_x, $pos_y);
							$top=$top.$x.") (I) ".$message['name']."   ".round($message['totaltime']/(60*60))." ч. lvl: $lvl Локация: $loc\n";
							}
							else 
							$top=$top.$x.") ".$message['name']."   ".round($message['totaltime']/(60*60))." ч. lvl: $lvl \n";
							}
							$x++;
						}
						send_answer("Топ игроков WoW: \n$top",0);
					}
				}
				//@mysql_select_db($dbname,$dbcnx);
			}

			#------цитатник----
			if (($words[0]=='!cit') ||($words[0]=='!цитата')||($words[0]=='!c')||($words[0]=='!ц'))	{if (empty($words[1])) {$res=`fortune ru`;} else {$frase=$words[1]; $topic="fortune ru/".$frase; $res=`$topic`;} send_answer("\n".iconv("UTF-8", "windows-1251", $res),0);}
			if (($words[0]=='!theme')||($words[0]=='!themes'))	{send_answer("M$ adv adv_v amur armenian art b0 b11 b12 b13 b2 book citates computer conscience d1 d21 d41 disa do_you_know drink e0 e12 e13 education ego_and_alt eshe feano fidelity flirt fomenko foolish freewill friendship future genious haiku happy human_being if ill innocence just4fun knowledge life life_k love love_s lovers man_and_woman murphy other polit polyakov programming relations religion russia_today sex success sympathy time treason truth truth_and_lie war wealth work",0);}
			#----справка-------
			if (($words[0]=='!help')||($words[0]=='!помощь'))	{send_answer("
			
	#vic - канал викторины (!stat для показа очков)
	
	Команды которые понимает бот:
		Полный список команд тут 
		http://192.168.0.200/forum/showthread.php?goto=newpost&t=535
		
	Логи чата хранятся тут http://192.168.0.200/avin/
			",0);} 
			
			$here[$hostt]['name']=$parts[1]; //записи для !seen
			$here[$hostt]['say']=$parts[2]; //записи для !seen
			$here[$hostt]['numwords']+=count(explode(' ', $parts[2]));  //записи для !seen array_multisort
			$GLOBALS['here'] = $here;
			break;
			
		case '4': //мы тут и здароваемся
			$msg = 'X'.rcode().'1'.$parts[0].$nol.$nick.$nol.'11';
    		if ($ES==1) socket_sendto($socket, $msg, strlen($msg), 0, $hostt, $port);
			sleep (1);
			//send_answer("Привет, $parts[0]! Теперь я понимаю IRC протокол! Можешь найти меня на канале $ircchannel на нашем IRC сервере ($ircaddress:$ircport)",0);
			//send_answer("Здарова, $parts[0]! Не забывай посещать наш форум http://192.168.0.200/forum",0);
			//$topic="fortune ru/fomenko"; $res=`$topic`; send_answer(iconv("UTF-8", "windows-1251", $res),0);
			//send_answer("         ;):-O(A) http://192.168.0.200/forum :-PB-):-)",0,"#Main"); http://192.168.0.200:8000/difm
			send_answer("Важные изменения в ВОВ! Читайте! \n http://192.168.0.200/forum/showthread.php?p=8588#post8588",0,"#Main");
			$here[$hostt]['name']=$parts[0]; $GLOBALS['here'] = $here; $here[$hostt]['numwords']=0; //записи для !seen
			break;
		
	}

}

?>