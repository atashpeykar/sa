<?php 

ob_start();

/*
به نام خدا 
کاری از تیم برنامه نویسی اجتماعی
@social_programming
*/

$API_KEY = '524559233:AAHVMIVb-3Dx-hhrOS9HQ_gY7ZFSLMzaoKM';
$token = '524559233:AAHVMIVb-3Dx-hhrOS9HQ_gY7ZFSLMzaoKM';//توکن رو ست کنید
$ADMIN = 104823825;
##------------------------------##
Date_default_timezone_set('Asia/Tehran');
##-----------Mrplus_ir------------##
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function Forward($KojaShe,$AzKoja,$KodomMSG){
    bot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
	}
    function save($filename,$TXTdata){
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
	function remdir($dir){
    exec("rm -rf ".$dir);
    }	
    function LeaveChat($chatid){
	bot('LeaveChat',[
	'chat_id'=>$chat_id
	]);
	}
//====================social======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$username = $update->message->from->username;
$bcpv = file_get_contents("bcpv.txt");
$bcgap = file_get_contents("bcgap.txt");
$name = $update->message->from->first_name;
$gpname = $update->message->chat->title;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$replayname = $update->message->reply_to_message->from->first_name;
$replayname2 = $update->message->reply_to_message->from->last_name;
$replayun = $update->message->reply_to_message->from->username;
@$locklink = file_get_contents("data/$chat_id/locklink.txt");
@$locktag = file_get_contents("data/$chat_id/locktag.txt");
@$lockphoto = file_get_contents("data/$chat_id/lockphoto.txt");
@$lockforward = file_get_contents("data/$chat_id/lockforward.txt");
@$lockvideo = file_get_contents("data/$chat_id/lockvideo.txt");
@$locklocation = file_get_contents("data/$chat_id/locklocation.txt");
@$locksticker = file_get_contents("data/$chat_id/locksticker.txt");
@$lockdocument = file_get_contents("data/$chat_id/lockdocument.txt");
@$lockcontact = file_get_contents("data/$chat_id/lockcontact.txt");
@$lockgame = file_get_contents("data/$chat_id/lockgame.txt");
@$lockmusic = file_get_contents("data/$chat_id/lockmusic.txt");
@$lockgif = file_get_contents("data/$chat_id/lockgif.txt");
@$lockvoice = file_get_contents("data/$chat_id/lockvoice.txt");
@$lockbot = file_get_contents("data/$chat_id/lockbot.txt");
@$locktext = file_get_contents("data/$chat_id/locktext.txt");
@$lockall = file_get_contents("data/$chat_id/lockall.txt");
@$wel = file_get_contents("data/$chat_id/wel.txt");
@$add = file_get_contents("data/$chat_id/add.txt");

@$locklinkf = file_get_contents("data/$chatid/locklink.txt");
@$locktagf = file_get_contents("data/$chatid/locktag.txt");
@$lockphotof = file_get_contents("data/$chatid/lockphoto.txt");
@$lockforwardf = file_get_contents("data/$chatid/lockforward.txt");
@$lockvideof = file_get_contents("data/$chatid/lockvideo.txt");
@$locklocationf = file_get_contents("data/$chatid/locklocation.txt");
@$lockstickerf = file_get_contents("data/$chatid/locksticker.txt");
@$lockdocumentf = file_get_contents("data/$chatid/lockdocument.txt");
@$lockcontactf = file_get_contents("data/$chatid/lockcontact.txt");
@$lockgamef = file_get_contents("data/$chatid/lockgame.txt");
@$lockmusicf = file_get_contents("data/$chatid/lockmusic.txt");
@$lockgiff = file_get_contents("data/$chatid/lockgif.txt");
@$lockvoicef = file_get_contents("data/$chatid/lockvoice.txt");
@$lockbotf = file_get_contents("data/$chatid/lockbot.txt");
@$locktextf = file_get_contents("data/$chatid/locktext.txt");
$floods2 = file_get_contents("data/$chatid/lockflood.txt");
$flood2 = file_get_contents("data/$chatid/numflood.txt");
@$lockfarsif = file_get_contents("data/$chatid/lockfarsi.txt");
@$lockenglishf = file_get_contents("data/$chatid/lockenglish.txt");
@$lockeditf = file_get_contents("data/$chatid/lockedit.txt");
@$locktelegf = file_get_contents("data/$chatid/lockteleg.txt");

@$setlink = file_get_contents("data/$chat_id/setlink.txt");
@$settag = file_get_contents("data/$chat_id/settag.txt");
@$setedite = file_get_contents("data/$chat_id/setedite.txt");
@$setphoto = file_get_contents("data/$chat_id/setphoto.txt");
@$setforward = file_get_contents("data/$chat_id/setforward.txt");
@$setvideo = file_get_contents("data/$chat_id/setvideo.txt");
@$setlocation = file_get_contents("data/$chat_id/setlocation.txt");
@$setsticker = file_get_contents("data/$chat_id/setsticker.txt");
@$setdocument = file_get_contents("data/$chat_id/setdocument.txt");
@$setcontact = file_get_contents("data/$chat_id/setcontact.txt");
@$setgame = file_get_contents("data/$chat_id/setgame.txt");
@$setmusic = file_get_contents("data/$chat_id/setmusic.txt");
@$setgif = file_get_contents("data/$chat_id/setgif.txt");
@$setvoice = file_get_contents("data/$chat_id/setvoice.txt");
@$settext = file_get_contents("data/$chat_id/settext.txt");
@$sakht = file_get_contents("data/$chat_id/setsakht.txt");
@$lockenglish = file_get_contents("data/$chat_id/lockenglish.txt");
@$setenglish = file_get_contents("data/$chat_id/setenglish.txt");
@$lockfarsi = file_get_contents("data/$chat_id/lockfarsi.txt");
@$setfarsi = file_get_contents("data/$chat_id/setfarsi.txt");
@$lockedit = file_get_contents("data/$chat_id/lockedit.txt");
@$lockteleg = file_get_contents("data/$chat_id/lockteleg.txt");
$rmsg = $message->message_id;
$techat = $update->message->message_id;
$data = $update->callback_query->data;
$photo = $update->message->photo;
$forward = $update->message->forward_from;
$video = $update->message->video;
$location = $update->message->location;
$sticker = $update->message->sticker;
$document = $update->message->document;
$contact = $update->message->contact;
$game = $update->message->game;
$music = $update->message->audio;
$gif = $update->message->gif;
$voice = $update->message->voice;
$edit = $update->edited_message;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$joinusername = $update->message->new_chat_member->from->username;
$joinmember = $update->message->new_chat_member;
$leftmember = $update->message->left_chat_member;
$newchatmemberu = $update->message->new_chat_member->username;
$messageid = $update->callback_query->message->message_id;
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=@Ebook_free&user_id=".$from_id)); // ایدی کانالتون رو ست کنید
$tch = $forchaneel->result->status;
$type = $update->message->chat->type;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$rank = $info['result']['status'];
$get_ = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chatid&user_id=".$fromid);
$info_ = json_decode($get_, true);
$rank_ = $info_['result']['status'];
$reply = $update->message->reply_to_message->message_id;
$date = date("Y / m / d");
$time = date("h:i:s");
@$addtimechat = file_get_contents("data/$chat_id/addtimechat.txt");
@$addtimechat2 = file_get_contents("data/$chat_id/addtimechat2.txt");
@$addtimechat12 = file_get_contents("data/$chat_id/addtimechat12.txt");
@$eds = file_get_contents("data/$chat_id/time/$from_id 8.txt");
@$kekee = file_get_contents("data/$chat_id/time/$from_id.txt");
@$nfile =  file_get_contents("data/$from_id/namefile.txt");
@$step = file_get_contents("data/$from_id/step.txt");
@$step2 = file_get_contents("data/$chat_id/step2.txt");
@$muteuser = file_get_contents("data/$chat_id/muteuser/$from_id.txt");
@$muteuser2 = file_get_contents("data/$chat_id/muteuser/$rtid.txt");
@$spam = file_get_contents("data/$chat_id/spam.txt");
@$spamg = file_get_contents("data/$chat_id/spamg.txt");
@$setspam = file_get_contents("data/$chat_id/setspam.txt");
@$warnuser = file_get_contents("data/$chat_id/warn/$from_id.txt");
@$warnuser2 = file_get_contents("data/$chat_id/warn/$rtid.txt");
@$warntime = file_get_contents("data/$chat_id/warntime.txt");
$floods= file_get_contents("data/$chat_id/lockflood.txt");
$flood= file_get_contents("data/$chat_id/numflood.txt");
$token = '524559233:AAHVMIVb-3Dx-hhrOS9HQ_gY7ZFSLMzaoKM';//توکن رو ست کنید
//charge
$time_zone = '12600';
$today = date("Y-m-d", time()+$time_zone);
$expire = file_get_contents("data/$chat_id/expire.txt");
//endcharge
@$plug = file_get_contents("plug.php");
$ADMIN = 104823825;//ایدی  عددی سودو رو ست کنید
include "plug.php";
//====================special=================//
if($type == 'private')
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔸 به ربات گروه مناظره و پاسخ به شبهات خوش آمدید 🌺",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفیه ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
	
  }
elseif(($text == '/start' || $text == "/شروع")&& $type == "private"){
$user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('Member.txt',$add_user);
    }	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔸 به ربات گروه مناظره و پاسخ به شبهات خوش آمدید 🌺",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
    
}  	
if($data == 'more'){ 
	bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"🔸 به ربات گروه مناظره و پاسخ به شبهات خوش آمدید 🌺",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔴 مناظره و پاسخ به شبهات 🔴",'url'=>"https://telegram.me/joinchat/BIZ05zvG-hejGQH3pAeonQ"]],
			  [['text'=>"🔸 کانال پرسش و پاسخ 🔸",'url'=>"http://telegram.me/Porsseman"]],
			  [['text'=>"📚 کانال کتابخانه 📚",'url'=>"http://telegram.me/Ebook_free"]],
			  [['text'=>"🔹 تالار گفتگو  🔹",'url'=>"https://telegram.me/joinchat/BIZ05zw5RRZEUDLF8S2dNg"]],
			  [['text'=>"✍️ سازنده ربات ✍️",'url'=>"http://telegram.me/Mrplus_ir"]],
              ],'resize_keyboard'=>true
        ])
            ]);
}
//=====special========//
if($text == '/add'&& $type == "group" || $text == "/اضافه" && $type == "group"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"لطفا گروه را به سوپر گروه تبدیل کنید",
  ]);
}  
//=====special========//
if($text == '/add'&& $type == "group" || $text == "/اضافه" && $type == "group"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"لطفا گروه را به سوپر گروه تبدیل کنید",
  ]);
}  
//============
if(($text == '/add'|| $text == "/اضافه")&& $type == "supergroup"){ 
if($add != "✔️"){
if($from_id == $ADMIN ){   
  $userr = file_get_contents('gaps.txt');
  $memberrs = explode("\n",$userr);
  if (!in_array($chat_id,$memberrs)){
  $add_userr = file_get_contents('gaps.txt');
  $add_userr .= $chat_id."\n";
  file_put_contents('gaps.txt',$add_userr);
}    
  mkdir("data/$chat_id");
  mkdir("data/$ADMIN"); 
  save("data/$chat_id/locklink.txt","✖️");    
  save("data/$chat_id/locktag.txt","✖️"); 
  save("data/$chat_id/lockphoto.txt","✖️");
  save("data/$chat_id/lockforward.txt","✖️");
  save("data/$chat_id/lockvideo.txt","✖️");
  save("data/$chat_id/locklocation.txt","✖️");
  save("data/$chat_id/locksticker.txt","✖️");
  save("data/$chat_id/lockdocument.txt","✖️");
  save("data/$chat_id/lockcontact.txt","✖️");
  save("data/$chat_id/lockgame.txt","✖️");
  save("data/$chat_id/lockmusic.txt","✖️");
  save("data/$chat_id/lockgif.txt","✖️");
  save("data/$chat_id/lockvoice.txt","✖️");
  save("data/$chat_id/lockbot.txt","✖️");
  save("data/$chat_id/lockedite.txt","✖️");
  save("data/$chat_id/locktext.txt","✖️"); 
  save("data/$chat_id/lockall.txt","✖️");
  save("data/$chat_id/wel.txt","✖️");   
  save("data/$chat_id/setlink.txt","del");
  save("data/$chat_id/settag.txt","del");
  save("data/$chat_id/setforward.txt","del");  
  save("data/$chat_id/setvideo.txt","del");
  save("data/$chat_id/setphoto.txt","del");
  save("data/$chat_id/setlocation.txt","del");
  save("data/$chat_id/setsticker.txt","del");
  save("data/$chat_id/setdocument.txt","del");
  save("data/$chat_id/setcontact.txt","del");
  save("data/$chat_id/setgame.txt","del"); 
  save("data/$chat_id/setmusic.txt","del");
  save("data/$chat_id/setgif.txt","del");
  save("data/$chat_id/setvoice.txt","del");
  save("data/$chat_id/settext.txt","del");
  save("data/$chat_id/setsakht.txt","off");   
  save("data/$chat_id/add.txt","✔️");		
  sendaction($chat_id,'typing');
  $sss = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/sendmessage?chat_id=$chat_id&text=0&parse_mode=html"));
$shetmsg = $sss->result->message_id;
$hh = $shetmsg;
 bot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'🔹 ساخته شده توسط :'
 ]);
 sleep('3');
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'🔹 ساخته شده توسط : @Mrplus_ir 🔹'
 ]);
 sleep('5');
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>"🔸 ربات به گروه اضافه شد ✅

🔹 جهت گرفتن راهنمایی /help رو تایپ کنید 😊

@Mrplus_ir"
 ]); 
   
  bot('sendMessage',[
      'chat_id'=>$ADMIN,
      'text'=>"گروه$gpname 
                
با ایدی $chat_id                
در زمان و تاریخ 
$time
$date
به لیست گروه های ربات پیوست.",
      'parse_mode'=>'html',
    ]);
}else{
sendmessage($chat_id,'شما مدیر نمیباشید
جهت خرید ربات به ایدی  زیر مراجعه 
@Mrplus_ir');
	bot('LeaveChat',[
	'chat_id'=>$chat_id
	]);
}
}else{
sendmessage($chat_id,"
🔹 ساخته شده توسط : @Mrplus_ir 🔹");
}
}
if($text == '/rem' || $text == "/برداشتن" ){
if($from_id == $ADMIN && $type == "supergroup"  ){
  save("data/$chat_id/add.txt","NO"); 	
  remdir("data/$chat_id");  
  sendaction($chat_id,'typing');
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
🔺 ربات از گروه خارج شد 😊

🔸 سازنده : @Mrplus_ir",
      'parse_mode'=>'MarkDown',
    ]);
  bot('sendMessage',[
      'chat_id'=>$ADMIN,
      'text'=>"گروه$gpname 
                
با ایدی $chat_id                
در زمان و تاریخ 
$time
$date
از لیست گروه های ربات خارج شد.",
      'parse_mode'=>'html',
    ]);
}  
}
//##########################################################
if($text == '/help' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
`⚡️To See The CoMmAnDs of YoUr DesiRed iteM SubMiT`

💠*EngliSh CoMmAnDs :*

💥*>>  /sudohelp*
*دستورات سودوی ربات 👆🏻*

`»»»»»»»»»»»»»»»`
💥*>>  /lockhelp*
*دستورات قفلی 👆🏻*
`»»»»»»»»»»»»»»»`
💥*>>  /modhelp*
*دستورات مدیریتی 👆🏻*
`»»»»»»»»»»»»»»»`
💥*>>  /funhelp*
*دستورات فان 👆🏻*
`»»»»»»»»»»»»»»»`
*___________________________*
",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
//==============================================//
if($text == '/راهنما' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
`⚡️To See The CoMmAnDs of YoUr DesiRed iteM SubMiT`

💠*EngliSh CoMmAnDs :*

💥*>>  /راهنمای سودو*
*دستورات سودوی ربات 👆🏻*

`»»»»»»»»»»»»»»»`
💥*>>  /راهنمای قفلی*
*دستورات قفلی 👆🏻*
`»»»»»»»»»»»»»»»`
💥*>>  /راهنمای مدیریتی*
*دستورات مدیریتی 👆🏻*
`»»»»»»»»»»»»»»»`
💥*>>  /راهنمای فان*
*دستورات فان 👆🏻*
`»»»»»»»»»»»»»»»`
*___________________________*
",
    'parse_mode'=>'MarkDown',
    ]);
}  
}

//###########################################
if($text == '/lockhelp' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
💠EngliSh CoMmAnDs :

#Lock commands 

*🔒/Lock* 
`or`
*🔓/Unlock*

`[link , tag , bot , strict ]`
 
 #Mute commands

*🔇/Mute*
`or`
*🔊/unmute*

`[gif , photo , document , sticker , video , text , forward , location , musick , voice , contact ,tgservice , all ]`
========================
helper for settings : /option

*___________________________*
",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
//=========================//
if($text == '/راهنمای قفلی' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
💠EngliSh CoMmAnDs :

#دستورات قفلی 

*🔒/قفل* 
`یا`
*🔓/بازکردن*

`[لینک , تگ , بات , سخت ]`
 
 #دستورات بیصدا

*🔇/بیصدا*
`یا`
*🔊/باصدا*

`[گیف , تصویر , سند , استیکر , ویدیو , متن, فوروارد , مکان , اهنگ, صدا , مخاطب ,سرویس تلگرام , همه ]`
========================
برای نمایش تنظیمات به صورت شیشه ای:
/option

*___________________________*
",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
//##################################################

if($text == '/sudohelp' || $text == "/راهنمای سودو" ){
if($add == "✔️" && $type == "supergroup"){     
if($from_id == $ADMIN){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
با دستور 

*مدیریت*
در پیوی ربات ارد پنل مدیریت ربات خواهید شد.

جهت اضافه کردن ربلات به گروه انرا در گروه مورد نظر اضافه کرده و دستور
/add
را بزنید
جهت خارج نمودن گروه از لیست مدیریت گروه از دستور
/rem
استفاده کنید.
جهت افزودن پلاگین دستور 
/save plug
 رابزنید
جهت حذف پلاگین دستور
/del plug
را بزنید
جهت ست کردن و مرتب کردن لیست پلاگین ها دستور
/set plug
را ارسال نمایید
جهت نمایش لیست پلاگین ها دستور
/plug list
را ارسال نمایید.
برای خارج نمودن ربات از گروهی دستور
/leave
را بزنید
==
اضافه کردن حساسیت مقدار پیام
/addtimechat
حذف قابلیت
/remtimechat
*___________________________*
",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
}

if($text == '/funhelp' || $text == "/راهنمای فان" ){
if($add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
دریافت ذکر روز
**/zekr**
**/ذکر**
================
دریافت دانستنی
**/danestani**
**/دانستنی**
===============
دریافت حدیث
**/hadis**
**/حدیث**
==============
دریافت ساعت و تاریخ
**/time**
**/زمان**
==============
سرچ در گوگل
/google
==============
سرچ در بینگ
/bing

*___________________________*
",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
}

if($text == '/modhelp' || $text == "/راهنمای مدیریتی" ){
if($add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
`این قسمت قسمتی مهم میباشد
strict
اگر این قفل باشد یعنی حالت سخت گیرانه فعال است و با فرستادن هر پست خلاف قوانین 
فرد ارسال کننده ریمو خواهد شد.`
==================
قسمت های قفلی نیز داری دو قسمت میباشند یعنی هر قفل میتواند دو نوع کار کنید
به این شکل که اگر شما لینک را قفل کردید 
/lock link (/قفل لینک)
میتوانید  با دستور زیر تنظیم کنید که فرد ادرسال کنندهی لینک پستش پاک شود 
/link del (/لینک حذف)
و با دستور زیر نیز میتوانید تنظیم کنید که هم پست حاوی لینک پاک شود و هم اینکه کاربر ارسال کننده لینک از گروه ریمو شود
/link kick (/لینک ریمو)
دستورات کلی به صورت زیر است

`[link , tag , bot , strict , gif , photo , document , sticker , video , text , forward , location , audio , voice , contact ,tgservice , all ]`
*del*
or
*kick*
و به صورت فارسی به شکل زیر میباشد
`[گیف , تصویر , سند , استیکر , ویدیو , متن, فوروارد , مکان , اهنگ, صدا , مخاطب ,سرویس تلگرام , همه ,لینک , تگ , بات , سخت ]`
*حذف*
یا
*ریمو*
توجه داشته باشید که میبایسد قفل هر دستور بالا فعال باشد.
=======================
چند دستور دیگر
برای سنجاق 
ریپلی +/pin
حذف سنجاق
/unpin
==
برای کیک کردن کسی
ریپلی +/kick
==
برای ولکام
/welcome on
/welcome off
==
جهت تغیر نام گروه دستور
/setname نام مورد نظر
را بزنید
==
جهت دریافت لینک گروه دستور
/link
را بزنید
==
برای بیصدا (میوت) کردن شخص
ریپلای + /mute
و غیر فعال کردن با 
ریپلای + /unmute
و برای میوت ساعتی 
ریپلای + /mute number

مثال
/mute 12

==
برای ادمین کردن
/promote , /ارتقا
برای عزل کردن
/demote , /عزل
برای ادمین موقت کردن
/promotem , /ارتقا موقت

برای دیدن لیست ادمین ها
/admin list , /لیست ادمین
==============

 دادن فرصت کلی
 /forsat
 تنظیم تعداد مسیج قابل فرستادن در گپ
 /setchat عدد مورد نظر
 برای غیر فعال کردن این قابلیت دستور
 /offtimechat 
 و برای فعال سازی دستور
 /ontimechat 
======================

*___________________________*
",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
}
//================================

//###############################################
if($text == '/settings' && $add == "✔️" && $type == "supergroup"){   
if($rank == "creator" or $rank == "administrator"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
----------------------------------------
⚙️gяσυρ ѕєттιηgѕ:\|/
🔐gяσυρ ℓσcк ℓιѕт
》ℓσcк ѕтяιcт= ($sakht)
》ℓσcк ℓιηкѕ = $locklink($setlink) 
》ℓσcк тαgѕ = $locktag($settag)
》ℓσcк вσт = $lockbot
|*====================*|
🔇gяσυρ мυтє ℓιѕт 
》мυтє ρнσтσ = $lockphoto($setphoto) 
》мυтє ƒσяωαя∂ = $lockforward($setforward) 
》мυтє νι∂єσ = $lockvideo($setvideo) 
》мυтє ℓσcαтιση = $locklocation($setlocation) 
》мυтє ѕтιcкєя = $locksticker($setsticker) 
》мυтє ∂σcυмєηт = $lockdocument($setdocument) 
》мυтє cσηтαcт = $lockcontact($setcontact) 
》мυтє gαмє = $lockgame($setgame) 
》мυтє ๓บรïς = $lockmusic($setmusic) 
》мυтє gιƒ = $lockgif($setgif) 
》мυтє νσιcє = $lockvoice($setvoice)
》мυтє тєχт = $locktext($settext)
》мυтє αℓℓ = $lockall
》ωєℓcσмє = $wel
|*====================*|
** chat allergy = $addtimechat **
** number for chat = $addtimechat2 **
** Condition allergy = $addtimechat12 **
	",
   'parse_mode'=>'MarkDown',
    ]);
  }
}
//=============================//
if($text == '/تنظیمات' && $add == "✔️" && $type == "supergroup"){   
if($rank == "creator" or $rank == "administrator"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
----------------------------------------
⚙ تنظیمات گروه:\|/
🔐لیست قفل های گروه
》قفل سختگیرانه= ($sakht)
》قفل لینک = $locklink($setlink) 
》قفل تگ = $locktag($settag)
》قفل بات = $lockbot
ا*====================*ا
🔇لیست بیصدا های گروه 

》بیصدا تصویر = $lockphoto($setphoto)  
》بیصدا فوروارد = $lockforward($setforward)  
》بیصدا ویدیو = $lockvideo($setvideo)  
》بیصدا مکان = $locklocation($setlocation)  
》بیصدا استیکر = $locksticker($setsticker)  
》بیصدا سند = $lockdocument($setdocument)  
》بیصدا مخاطب = $lockcontact($setcontact)  
》بیصدا بازی = $lockgame($setgame)  
》بیصدا اهنگ = $lockmusic($setmusic)  
》بیصدا گیف = $lockgif($setgif)  
》بیصدا صدا = $lockvoice($setvoice)
》بیصدا متن = $locktext($settext) 
》بیصدا همه = $lockall 
》خوش امد گویی = $wel 
ا*====================*ا
** حساسیت چت ** = $addtimechat
**حساسیت فرستادن پیام  = $addtimechat2**
**وضعیت حساسیت فعلی** = $addtimechat12 **

	",
   'parse_mode'=>'MarkDown',
    ]);
  }
}
//#########################################################

if(($text == "/id" || $text == "/ایدی" )&& $add == "✔️"  && $type == "supergroup" ){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🔗ایدی گپ = $chat_id
🖋نام گپ = $gpname 
〰〰〰〰〰〰〰〰〰
⚜️نام شما = $name 
🔰ایدی شما =  $from_id
⚙ تعداد پیام های شما  = $techat
🆔یوزر نیم شما = 
https://t.me/$username

",
    'parse_mode'=>'html'
    ]); 
}

////////////////////link////////////////
if(($text == '/lock link' || $text == "/قفل لینک" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/locklink.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل لینک فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock link' || $text == "/بازکردن لینک"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklink == "✔️" ){    
save("data/$chat_id/locklink.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل لینک غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
}
//setlink
if($rank == "creator" or $rank == "administrator" ){   
if(($text == "/link del" || $text == "/لینک حذف" ) && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setlink.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 حذف لینک فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//=========endlink===============//

/////===========start tag=============//////
if(($text == '/lock tag' || $text == "/قفل تگ" )  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
 
save("data/$chat_id/locktag.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل تگ فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock tag' || $text == "بازکردن تگ"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/locktag.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل تگ غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//settag
if(($text == "/tag del" || $text == "/تگ حذف" ) && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
save("data/$chat_id/settag.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 حذف تگ فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

if(($text == "/tag kick" || $text == "/تگ ریمو" ) && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
save("data/$chat_id/settag.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 ریمو تگ فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//-----------------------end tag---------------//

/////===========start tag=============//////
if(($text == '/lock bot' || $text == "/قفل بات" )  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockbot.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل ربات فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock bot' || $text == "بازکردن بات"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockbot.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل ربات غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//--------------------end bot---------------//

////////////////////photo////////////////
if(($text == '/mute photo' || $text == "/بیصدا تصویر"  ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockphoto.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل تصویر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute photo' || $text == "/باصدا تصویر"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockphoto.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل تصویر غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setphoto
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/photo del" || $text == "/تصویر حذف" ) && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setphoto.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 تصویر حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/photo kick" || $text == "/تصویر ریمو"  )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setphoto.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 تصویر ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endphoto===============//
if($text && $time2 == "ok"){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$date2",
    'parse_mode'=>'html',
		]);
}
////////////////////forward////////////////
if(($text == '/mute forward' || $text == "/بیصدا فوروارد"  ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockforward.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل فروارد فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute forward' || $text == "/باصدا فوروارد"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockforward.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل فروارد غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setforward
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/forward del" || $text == "/فوروارد حذف"  )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setforward.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐  فروارد حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/forward kick" || $text == "/فوروارد ریمو"  )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setforward.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 فروارد ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endforward===============//

////////////////////video////////////////
if(($text == '/mute video' || $text == "/بیصدا ویدیو"  ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockvideo.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل فیلم فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute video' || $text == "/باصدا ویدیو" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockvideo.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل فیلم غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setvideo
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/video del" || $text == "/ویدیو حذف" ) && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setvideo.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 فیلم حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/video kick" || $text == "/ویدیو ریمو" ) && $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setvideo.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 فیلم ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endvideo===============//

////////////////////location////////////////
if(($text == '/mute location' || $text == "/بیصدا مکان" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/locklocation.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل مکان فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute location' || $text == "/باصدا مکان" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/locklocation.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل مکان غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setlocation
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/location del" || $text == "/مکان حذف" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setlocation.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 مکان حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/location kick" || $text == "/مکان ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setlocation.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 مکان ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endlocation===============//

////////////////////sticker////////////////
if(($text == '/mute sticker' || $text == "/بیصدا استیکر"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/locksticker.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل استیکر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute sticker' || $text == "/باصدا استیکر" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/locksticker.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل استیکر غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setsticker
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/sticker del" || $text == "/استیکر حذف" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setsticker.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐  استیکر حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/sticker kick" || $text == "/استیکر ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setsticker.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 استیکر ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endsticker===============//

////////////////////document////////////////
if(($text == '/mute document' || $text == "/بیصدا سند" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
 
save("data/$chat_id/lockdocument.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل سند فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute document' || $text == "/باصدا سند" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockdocument.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل سند غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setdocument
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/document del" || $text == "/سند حذف" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setdocument.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 سند حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/document kick" || $text == "/سند ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setdocument.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 سند ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========enddocument===============//

////////////////////contact////////////////
if(($text == '/mute contact' || $text == "/بیصدا مخاطب" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockcontact.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل مخاطب فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute contact' || $text == "/باصدا مخاطب" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockcontact.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل مخاطب غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setcontact
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/contact del" || $text == "/مخاطب حذف" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setcontact.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 مخاطب حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/contact kick" || $text == "/مخاطب ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setcontact.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 مخاطب ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endcontact===============//

////////////////////game////////////////
if(($text == '/mute game' || $text == "/بیصدا بازی"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockgame.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل بازی فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute game' || $text == "/باصدا بازی" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockgame.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل بازی غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setgame
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/game del" || $text == "/بازی حذف" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setgame.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 بازی حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/game kick" || $text == "/بازی ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setgame.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 بازی ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endgame===============//

////////////////////music////////////////
if(($text == '/mute music' || $text == "/بیصدا اهنگ"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockmusic.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل آهنگ فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute music' || $text == "/باصدا اهنگ" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockmusic.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل آهنگ غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setmusic
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/music del" || $text == "/موزیک حذف" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setmusic.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 موزیک حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/music kick" || $text == "/موزیک ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setmusic.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 موزیک ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endmusic===============//

////////////////////gif////////////////
if(($text == '/mute gif' || $text == "/بیصدا گیف" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
 
save("data/$chat_id/lockgif.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل گیف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute gif' || $text == "/باصدا گیف" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  

save("data/$chat_id/lockgif.txt","✖️");  
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل گیف غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//setgif
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/gif del" || $text == "/گیف حذف" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setgif.txt","del");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 گیف حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/gif kick" || $text == "/گیف ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setgif.txt","kick");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 گیف ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endgif===============//

////////////////////voice////////////////
if(($text == '/mute voice' || $text == "/بیصدا صدا" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
 
save("data/$chat_id/lockvoice.txt","✔️");    
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 ویس بی صدا فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute voice' || $text == "/باصدا صدا" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
  
save("data/$chat_id/lockvoice.txt","✖️");  
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 ویس بی صدا غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}

}
//setvoice
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/voice del" || $text == "/صدا حذف" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setvoice.txt","del");    
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 ویس حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/voice kick" || $text == "/صدا ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setvoice.txt","kick");    
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 ویس ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endvoice===============//

////////////////////text////////////////
if(($text == '/mute text' || $text == "/بیصدا متن" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
  
save("data/$chat_id/locktext.txt","✔️");    
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 متن بی صدا فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute text' || $text == "/باصدا متن" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
    
save("data/$chat_id/locktext.txt","✖️");  
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 متن بی صدا غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//settext
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/text del" || $text == "/متن حذف" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/settext.txt","del");    
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 متن حذف فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/text kick"  || $text == "/متن ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/settext.txt","kick");    
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 متن ریمو فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//=========endtext===============//

////////////////////all////////////////
if(($text == '/mute all' or $text == "/بیصدا همه" || $text == "سکوت" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
 
save("data/$chat_id/lockall.txt","✔️");    
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل همگانی فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
	

}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute all' || $text == "/باصدا همه" || $text == "لغو سکوت")&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
   
save("data/$chat_id/lockall.txt","✖️");  
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل همگانی غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}

//=========endall===============//

//sakht//
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/unlock strict" || $text == "/بازکردن سخت" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setsakht.txt","off");    
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل سخت غیر فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
if(($text == "/lock strict" || $text == "/قفل سخت" )&& $add == "✔️"  && $type == "supergroup" ){
save("data/$chat_id/setsakht.txt","on");    
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐 قفل سخت فعال شد 🔐",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفی ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}
}
//##############################################################################


if($photo){
if($rank != "creator" && $rank != "administrator"){
if($lockphoto == "✔️" ){      
if($setphoto == "del"  ){    
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
    'until_date'=>time()+(60),
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
	
	]);
}
}
}
}
	
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){    
preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locklink == "✔️" ){     
if($setlink == "del" ){    
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
    'until_date'=>time()+(60),
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
	
	]);
	
}
}
}
}	
	
	
if(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$update->message->caption)){
preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$text,$match,$update->message->caption);
if($rank != "creator" && $rank != "administrator"){
if($locklink == "✔️" ){     
if($setlink == "del" ){    
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
    'until_date'=>time()+(60),
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
	
	]);
	
}
}
}
}
	
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$text)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" ){     
if($settag == "del" ){    
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
    'until_date'=>time()+(60),
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
	
	]);

}
}
}
}

if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$update->message->caption)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$text,$match,$update->message->caption);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" ){     
if($settag == "del" ){    
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
    'until_date'=>time()+(60),
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
	
	]);

}
}
}
}


if($forward){
if($rank != "creator" && $rank != "administrator"){
if($lockforward == "✔️" ){     
if($setforward == "del" ){    
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
    'until_date'=>time()+(60),
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
	
	]);
	
	
			
}
}
}
}
	
if($video){
if($rank != "creator" && $rank != "administrator"){
if($lockvideo == "✔️" ){     
if($setvideo == "del" ){    
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
    'until_date'=>time()+(60),
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
	
	]);
	
			
}
}
}
}
	

if($location){
if($rank != "creator" && $rank != "administrator"){
if($locklocation == "✔️" ){    
if($setlocation == "del" ){    
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
    'until_date'=>time()+(60),
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
	
	]);
	
			
}
}
}
}
	
if($sticker){
if($rank != "creator" && $rank != "administrator"){
if($locksticker == "✔️" ){   
if($setsticker == "del"  ){    
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
    'until_date'=>time()+(60),
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
	
	]);
		
}
}
}
}
#################################################//
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){    
preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locklink == "✔️" ){     
if($setlink == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}

if($setlink == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
}
}
}
}



if(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$update->message->caption)){
preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$text,$match,$update->message->caption);
if($rank != "creator" && $rank != "administrator"){
if($locklink == "✔️" ){     
if($setlink == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setlink == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
}
}
}
}

if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$text)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" ){     
if($settag == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settag == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);

}
}
}
}
//
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$update->message->caption)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$text,$match,$update->message->caption);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" ){     
if($settag == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settag == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
}
}
}
}
//////@social_programming



if($photo){
if($rank != "creator" && $rank != "administrator"){
if($lockphoto == "✔️" ){      
if($setphoto == "del"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setphoto == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
}
}
}
}
if($forward){
if($rank != "creator" && $rank != "administrator"){
if($lockforward == "✔️" ){     
if($setforward == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setforward == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
  
}
}
}
}
if($video){
if($rank != "creator" && $rank != "administrator"){
if($lockvideo == "✔️" ){     
if($setvideo == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setvideo == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);

}
}
}
}
if($location){
if($rank != "creator" && $rank != "administrator"){
if($locklocation == "✔️" ){    
if($setlocation == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setlocation == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming location");
}
}
}
}
if($sticker){
if($rank != "creator" && $rank != "administrator"){
if($locksticker == "✔️" ){   
if($setsticker == "del"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setsticker == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming sticker");
}
}
}
}
if($document){
if($rank != "creator" && $rank != "administrator"){
if($lockdocument == "✔️" ){      
if($setdocument == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setdocument == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming document");
}
}
}
}
if($contact){
if($rank != "creator" && $rank != "administrator"){
if($lockcontact == "✔️" ){    
if($setcontact == "del"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setcontact == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming contact");
}
}
}
}
if($game){
if($rank != "creator" && $rank != "administrator"){
if($lockgame == "✔️" ){    
if($setgame == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setgame == "kick" || $sakht == "on" ){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming game");
}
}
}
}
if($music){
if($rank != "creator" && $rank != "administrator"){
if($lockmusic == "✔️" ){    
if($setmusic == "del"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setmusic == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming music");
}
}
}
}
if($gif){
if($rank != "creator" && $rank != "administrator"){
if($lockgif == "✔️" ){    
if($setgif == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setgif == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming gif");
}
}
}
}
if($voice){
if($rank != "creator" && $rank != "administrator"){
if($lockvoice == "✔️" ){      
if($setvoice == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setvoice == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming voice");
}
}
}
}



#############
if($text){
if($rank != "creator" && $rank != "administrator"){
if($locktext == "✔️" ){  
if($settext == "del"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settext == "kick" || $sakht == "on"){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming text");
}
}
}
}
//////##########################################################

if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){
if($rank != "creator" && $rank != "administrator"){   
if($lockall == "✔️"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
}
}

///########*******************#################
if($text == "/addtimechat" && $from_id == $ADMIN){
mkdir("data/$chat_id/time"); 
save("data/$chat_id/addtimechat.txt","add");  
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"انجام شد 😊",
    'parse_mode'=>'html',
    ]);
}
if($text == "/remtimechat" && $from_id == $ADMIN){
remdir("data/$chat_id/time");     
save("data/$chat_id/addtimechat.txt","rem");  
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"انجام شد 😊",
    'parse_mode'=>'html',
    ]);
}

if($text == "/forsat"){
if($rank == "creator" or $rank == "administrator" ){       
remdir("data/$chat_id/time"); 
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"فرصت کلی صورت گرفت",
    'parse_mode'=>'html',
    ]);
mkdir("data/$chat_id/time"); 
}
}
if($text == "/offtimechat" && $addtimechat == "add"){
if($rank == "creator" or $rank == "administrator" ){      
save("data/$chat_id/addtimechat12.txt","off");  
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"انجام شد 😊",
    'parse_mode'=>'html',
    ]);
}
}
if($text == "/ontimechat" && $addtimechat == "add"){
if($rank == "creator" or $rank == "administrator" ){      
save("data/$chat_id/addtimechat12.txt","on");  
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"انجام شد 😊",
    'parse_mode'=>'html',
    ]);
}
}
if ( strpos($text ,'/setchat') !== false ){
$setnumchat= str_replace("/setchat","",$text);
if($rank == "creator" or $rank == "administrator" ){
save("data/$chat_id/addtimechat2.txt","$setnumchat"); 
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"تعداد به  $setnumchat تغیر یافت",
    'parse_mode'=>'html',
    ]);
}
}

if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){
if($addtimechat == "add" && $addtimechat12 == "on"){
if($rank != "creator" && $rank != "administrator"){     
if($eds != "ad"){ 
save("data/$chat_id/time/$from_id.txt","0"); 
save("data/$chat_id/time/$from_id 8.txt","ad"); 

} 
}
}
}


if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){    
if($addtimechat == "add" && $addtimechat12 == "on"){
if($rank != "creator" && $rank != "administrator"){ 
$keke = file_get_contents("data/$chat_id/time/$from_id.txt");  
$delfor = $keke + 1;    
save("data/$chat_id/time/$from_id.txt","$delfor");
if($kekee >= $addtimechat2){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
}
}
}
//########################################################

if($lockbot == "✔️" ){ 
if (preg_match('/^(.*)([Bb][Oo][Tt])/s',$newchatmemberu) && $lockbot == "✔️"  && $newchatmemberu != "@Mrplus_irbot") {
bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
}


if($joinmember){
if($wel == "✔️"){    
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"$name  welcome",
        ]);
  }   
}

if($text == "/welcome on" || $text == "/ان خوش امد" && $add == "✔️"){
if($add == "✔️"){   
if($rank == "creator" or $rank == "administrator"){
save("data/$chat_id/wel.txt","✔️");    
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"welcome on",
        ]);
  }   
}
}
if($text == "/welcome off" || $text == "/اف خوش امد" && $add == "✔️"){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){     
save("data/$chat_id/wel.txt","✖️");   
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"wlcome off",
        ]);
  }    
}
}

if($rt && $text=="/kick" || $rt &&  $text == "/کیک" ){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){   
sendAction($chat_id, 'typing');
	bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"kick the user.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}


if($text == '/time' || $text == "/زمان" && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"
ساعت:$time
تاریخ:$date",
        'parse_mode'=>"MarkDown",
            ]);
}

if($text == '/zekr' || $text == "/ذکر" && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$zekr,
        'parse_mode'=>"MarkDown",        
            ]);
}

if($text == '/hadis' || $text == "/حدیث" && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$hadis,
        'parse_mode'=>"MarkDown",
            ]);
}

if($text == '/danestani' || $text == "/دانستنی" && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$danestani,
        'parse_mode'=>"MarkDown",
            ]);
}



if($reply && $text =="/pin" || $text == "/پین" && $add == "✔️"){
if($add == "✔️"){     
if($rank == "creator" or $rank == "administrator"){
 bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=> $update->message->reply_to_message->message_id
      ]);
   }
}
}

if( $text =="/unpin" || $text == "/ان پین" && $add == "✔️"){
if($add == "✔️"){ 
if($rank == "creator" or $rank == "administrator"){
 bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
      ]);
   }
}
}

if($text == "/Mrplus" || $text == "/سازنده" && $from_id == 104823825){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"
🔸 ربات گروه مناظره و پاسخ به شبهات  🌺

🔹 سازنده : @Mrplus_ir ",
        ]);
  } 
//////
if($text == "/save plug" && $from_id == $ADMIN){
mkdir("data/$ADMIN");    
file_put_contents("data/$from_id/step.txt","namefile");
            bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"برای پوشه خود یک نام انتخاب کنید
بدون فرمت 
",
            ]);
        }
if($step == "namefile"  && $from_id == $ADMIN){
    file_put_contents("data/$from_id/step.txt","upload");
$text2 = $message->text;
 file_put_contents("data/$from_id/namefile.txt","$text2");

    $mem = explode("\n",$plug);
    $add_plug = file_get_contents("plug.php");
    $add_plug .= "include '$text2.php';"."\n";
    file_put_contents("plug.php","$add_plug");    

bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"نام فایل شما با موفقیت ذخیره شد:
$text2.php",
            ]);
            bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"پلاگین خود را با پسوند php ارسال  کنید",
            ]);
        }
if($step == "upload"  && $from_id == $ADMIN){
    file_put_contents("data/$from_id/step.txt","none");
      $document = $message->document;
      $file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      $source = file_put_contents("$nfile.php",file_get_contents('https://api.telegram.org/file/bot'.$token.'/'.$patch));
      $source = file_get_contents("$nfile.php");
      $source = str_replace("fwrite","nottrue",$source);
      $source = str_replace("fclose","nottrue",$source);
      $source = str_replace("rmdir","nottrue",$source);
      $source = str_replace("file_id","nottrue",$source);
      $source = str_replace("fopen","nottrue",$source);
      save("plugin/$nfile.php",$source);
bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"فایل با موفقیت ذخیره شد!",
            ]);
        }
////##################################################
if($text == "/plug list"  && $from_id == $ADMIN){
sendmessage($chat_id,"پلاگین ها به صورت زیر میباشند");
sendmessage($chat_id,"$plug");
}

if($text == "/set plug"  && $from_id == $ADMIN){
sendmessage($chat_id,"لطفا لیست زیر را مرتب کرده وبه ربات ارسال نمایید
توجه کنید عبارت
<?php
را در نظر نگیرید و انرا در متن تغیرات ارسالی قرار ندهید");
sendmessage($chat_id,"$plug"); 
file_put_contents("data/$from_id/step.txt","setplug");
}
if($step == "setplug"  && $from_id == $ADMIN){
file_put_contents("plug.php","<?php \n $text \n"); 
sendmessage($chat_id,"
تغیرات اعمال شد
جهت دیدن لیست پلاگین ها بر دستور
/plug list
را ارسال کنید
");
file_put_contents("data/$from_id/step.txt","no");
}
//##########################################
if($text == "/del plug"  && $from_id == $ADMIN){
sendmessage($chat_id,"
اسم پلاگین مورد نظر را برای پاک کردن از لیست زیر همراه با پسوند .php پیدا کنید و بفرستید
توجه کنید که بعد از پاک کردن پلاگین در قسمت 
/set plug
لیست پلاگین های خود را مرتب کنید");
sendmessage($chat_id,"$plug"); 
file_put_contents("data/$from_id/step.txt","delplug");
}
if($step == "delplug"  && $from_id == $ADMIN){
unlink("$text"); 
sendmessage($chat_id,"
تغیرات اعمال شد
لطفا با دستور
/set plug
لیست پلاگین های خود را مرتب کنید .
");
file_put_contents("data/$from_id/step.txt","nonnn");
}
///////////##########################################
if(($text == "/option" || $text == "/گزینه") && $type == "supergroup")
{
	if($rank == "creator" or $rank == "administrator")
	{
		sendaction($chat_id,'typing');
		bot('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir",
			'parse_mode'=>'html',
			'reply_markup'=>json_encode([
			'inline_keyboard'=>[
//              [['text'=>"👇دریافت تنظیمات👇",'callback_data'=>"null"]], 
			  [['text'=>"⚙️تنظیمات⚙️",'callback_data'=>"settings"]],
  //            [['text'=>"👇دریافت راهنما👇",'callback_data'=>"null"]],
			  [['text'=>"🤔راهنما🤔",'callback_data'=>"help"],['text'=>"🏵درباره ما🏵",'callback_data'=>"infodev"]], 
	//		  [['text'=>"	👇دریافت تنظیمات فلود👇	",'callback_data'=>"null"]],
              [['text'=>"☣️فلود☣️",'callback_data'=>"lockflood"]],        
              [['text'=>"🎗 کانال کتابخانه",'url'=>"https://telegram.me/Ebook_free"],['text'=>"✖️خروج✖️",'callback_data'=>"endd"]]       		  
			  ],'resize_keyboard'=>true
			])
		]);
	}  
}
if($data == 'back'){
if($rank_ == "creator" or $rank_ == "administrator"){
  bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
//              [['text'=>"👇دریافت تنظیمات👇",'callback_data'=>"null"]], 
			  [['text'=>"⚙️تنظیمات⚙️",'callback_data'=>"settings"]],
  //            [['text'=>"👇دریافت راهنما👇",'callback_data'=>"null"]],
			  [['text'=>"🤔راهنما🤔",'callback_data'=>"help"],['text'=>"🏵درباره ما🏵",'callback_data'=>"infodev"]], 
	//		  [['text'=>"	👇دریافت تنظیمات فلود👇	",'callback_data'=>"null"]],
              [['text'=>"☣️فلود☣️",'callback_data'=>"lockflood"]],        
              [['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Ebook_free"],['text'=>"✖️خروج✖️",'callback_data'=>"endd"]]          
              ]
        ])
            ]);
}else{
 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"متاسفم! شما دسترسی ندارید 🔗",
        'show_alert' => false
       ]);
}
}
if($data == 'settings'){
if($rank_ == "creator" or $rank_ == "administrator"){
  bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
			  [['text'=>"⚜️تنظیمات رسانه⚜️",'callback_data'=>"helpmedd"],['text'=>"🔐تنظیمات قفل🔐",'callback_data'=>"helpother"]], 
              [['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Ebook_free"],['text'=>"✖️خروج✖️",'callback_data'=>"endd"]],
              [['text'=>"🔙برگشت🔙",'callback_data'=>"back"]],			  
              ]
        ])
            ]);
}else{
 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"متاسفم! شما دسترسی ندارید 🔗",
        'show_alert' => false
       ]);
}
}
if($data == "infodev")
{
	if($rank_ == "creator" or $rank_ == "administrator"){
		bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"
🔹 ساخته شده توسط 
🔸 @Mrplus_ir 
",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔙برگشت🔙",'callback_data'=>"back"]],         
              ]
        ])
            ]);	
}
}

if($data == "help")
{
	if($rank_ == "creator" or $rank_ == "administrator"){
		bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"
🔱Welcome to Help🔱

⚜️English Help List⚜️ :

🔲#》 /sudohelp
Special command for sudo robot

+=+=+=+=+=+=+=+

🔳#》 /lockhelp
social command to lock the robot

+=+=+=+=+=+=+=+

🔲#》 /modhelp
Special command for group manage

+=+=+=+=+=+=+=+

🔳#》 /funhelp
social command to fun
+=+=+=+=+=+=+=+

",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔙برگشت🔙",'callback_data'=>"back"]],         
              ]
        ])
            ]);	
}
}
  elseif($data=="f-"){
	  if($rank_ == "creator" or $rank_ == "administrator"){
    $floodnew = $flood2 - 1;
    $floodnew1 = $flood2 - 1;
    save("data/$chatid/numflood.txt","$floodnew");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
کاهش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'null'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodnew1",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Ebook_free"],['text'=>"🔙برگشت🔙",'callback_data'=>"back"]
				   ],
                    ]
             ])
         ]);
  }
  }
  elseif($data=="f+"){
	  	  if($rank_ == "creator" or $rank_ == "administrator"){
    $floodne = $flood2 + 1;
    $floodne2 = $flood2 + 1;
    save("data/$chatid/numflood.txt","$floodne");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
افزایش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'null'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodne2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Ebook_free"],['text'=>"🔙برگشت🔙",'callback_data'=>"back"]
				   ],
                    ]
             ])
         ]);
  }
  }

  elseif(($data=="lockflood" && $floods2=="✖️") && ($rank_ == "creator" or $rank_ == "administrator")){
    save("data/$chatid/lockflood.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Ebook_free"],['text'=>"🔙برگشت🔙",'callback_data'=>"back"]
				   ],
                    ]
             ])
         ]);
  }
  elseif(($data=="lockflood" && $floods2=="✔️" ) && ($rank_ == "creator" or $rank_ == "administrator")){
    save("data/$chatid/lockflood.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Ebook_free"],['text'=>"🔙برگشت🔙",'callback_data'=>"back"]
				   ],
                    ]
             ])
         ]);
  }
  elseif ($data == 'null')
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"اونوریارو بزن",
]);
}


/////////##################################################################################
	if($rank_ == "creator" or $rank_ == "administrator"){
if($data=="helpmedd"  ){
         bot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"
 به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
  [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
	]
	])
	]);
	}
	 if($data=="helpother"  ){
         bot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
  
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
	]
	])
	]);
	}

  if($data=="lockphoto" && $lockphotof=="✔️"  ){
    save("data/$chatid/lockphoto.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل عکس غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockphoto" && $lockphotof=="✖️"  ){
    save("data/$chatid/lockphoto.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل عکس فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockvideo" && $lockvideof=="✔️"  ){
    save("data/$chatid/lockvideo.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ویدیو غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                    
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
				   ]
             ])
         ]);
  }
  if($data=="lockvideo" && $lockvideof=="✖️"  ){
    save("data/$chatid/lockvideo.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ویدیو فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
               
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockgame" && $lockgamef=="✔️"  ){
    save("data/$chatid/lockgame.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل اینلاین غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
          
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockgame" && $lockgamef=="✖️"  ){
    save("data/$chatid/lockgame.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل اینلاین فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
          
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
         ]
             ])
         ]);
  }
  if($data=="locksticker" && $lockstickerf=="✔️"  ){
    save("data/$chatid/locksticker.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل استیکر غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
             
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="locksticker" && $lockstickerf=="✖️"  ){
    save("data/$chatid/locksticker.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل استیکر فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockvoice" && $lockvoicef=="✔️"  ){
    save("data/$chatid/lockvoice.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ویس غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
               
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockvoice" && $lockvoicef=="✖️"  ){
    save("data/$chatid/lockvoice.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ویس فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                  
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockaudio" && $lockmusicf=="✔️"  ){
    save("data/$chatid/lockmusic.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل اهنگ غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
              
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockaudio" && $lockmusicf=="✖️"  ){
    save("data/$chatid/lockmusic.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل اهنگ فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                 
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockforward" && $lockforwardf=="✔️"  ){
    save("data/$chatid/lockforward.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل فوروارد غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
          
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockforward" && $lockforwardf=="✖️"  ){
    save("data/$chatid/lockforward.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل فوروارد فعال شد✅
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
               
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockcontact" && $lockcontactf=="✔️"  ){
    save("data/$chatid/lockcontact.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال مخاطب غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockcontact" && $lockcontactf=="✖️"  ){
    save("data/$chatid/lockcontact.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال مخاطب فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                  
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockluction" && $locklocationf=="✔️"  ){
    save("data/$chatid/locklocation.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال مکان غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockluction" && $locklocationf=="✖️"  ){
    save("data/$chatid/locklocation.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال مکان فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
 
 
  if($data=="lockedit" && $lockeditf=="✔️"  ){
    save("data/$chatid/lockedit.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ویرایش متن غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockedit" && $lockeditf=="✖️"  ){
    save("data/$chatid/lockedit.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ویرایش متن فعال شد✅
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockusername" && $locktagf=="✔️"  ){
    save("data/$chatid/locktag.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال هشتگ و یوزرنیم غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockusername" && $locktagf=="✖️"  ){
    save("data/$chatid/locktag.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال یوزرنیم و تگ فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="locklink" && $locklinkf=="✔️"  ){
    save("data/$chatid/locklink.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل لینک  غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                  	]
             ])
         ]);
  }
  if($data=="locklink" && $locklinkf=="✖️"  ){
    save("data/$chatid/locklink.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل لینک فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                  	]
             ])
         ]);
  }
  if($data=="lockbotf" && $lockbotf=="✔️"  ){
    save("data/$chatid/lockbot.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل باتی دیگر غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
 [  
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockbotf" && $lockbotf=="✖️"  ){
    save("data/$chatid/lockbot.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل باتی دیگر فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
    if($data=="locktelegram" && $lockfarsif=="✔️"  ){
    save("data/$chatid/lockfarsi.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل فارسی غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="locktelegram" && $lockfarsif=="✖️"  ){
    save("data/$chatid/lockfarsi.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل فارسی فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
      if($data=="lockdocument" && $lockdocumentf=="✔️"  ){
    save("data/$chatid/lockdocument.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال فایل غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockdocument" && $lockdocumentf=="✖️"  ){
    save("data/$chatid/lockdocument.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال فایل فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
        if($data=="lockgif" && $lockgiff=="✔️"  ){
    save("data/$chatid/lockgif.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال 🎇 گیف غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockgif" && $lockgiff=="✖️"  ){
    save("data/$chatid/lockgif.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال 🎇 گیف فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
          if($data=="locktg" && $locktelegf=="✔️"  ){
    save("data/$chatid/lockteleg.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل پیام ورود و خروج غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="locktg" && $locktelegf=="✖️"  ){
    save("data/$chatid/lockteleg.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل پیام ورود خروج فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
            if($data=="lockenglish" && $lockenglishf=="✔️"  ){
    save("data/$chatid/lockenglish.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال کلمات انگلیسی غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
  if($data=="lockenglish" && $lockenglishf=="✖️"  ){
    save("data/$chatid/lockenglish.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Mrplus_ir
قفل ارسال کلمات انگلیسی فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/Ebook_free']
],
                    ]
             ])
         ]);
  }
}else{
 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"متاسفم! شما دسترسی ندارید 🔗",
        'show_alert' => false
       ]);
}
  
//////////////////////######################################
if(($data=="endd")&& ($rank_ == "creator" or $rank_ == "administrator"))
{
    bot('deletemessage',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
    ]);
}	

unlink ("error_log");
//====================special======================//
  if($text == "مدیریت" && $chat_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"ادمین عزیز به پنل مدیریتی ربات خودش امدید",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [['text'=>"check pv"]],
              [['text'=>"check gap"]],              
              [['text'=>"bc pv"]],
              [['text'=>"bc gap"]]              
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "check pv" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
	sendmessage($chat_id , " تعداد اعضا ربات pv : $member_count" , "html");
}
elseif($text == "check gap" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $userr = file_get_contents("gaps.txt");
    $memberr_id = explode("\n",$userr);
    $memberr_count = count($memberr_id) -1;
	sendmessage($chat_id , " تعداد اعضا ربات gap : $memberr_count" , "html");
}
elseif($text == "bc pv" && $chat_id == $ADMIN){
    file_put_contents("bcpv.txt","bc");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"پیام مورد نظر را در قالب متن بنویسید",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'مدیریت']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($bcpv == "bc" && $chat_id == $ADMIN){
    file_put_contents("bcpv.txt","none");
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" .پیام شما ارسال شد",
  ]);
	$all_member = fopen( "Member.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}
elseif($text == "bc gap" && $chat_id == $ADMIN){
    file_put_contents("bcgap.txt","bc");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"پیام مورد نظر را در قالب متن بنویسید",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'مدیریت']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($bcgap == "bc" && $chat_id == $ADMIN){
    file_put_contents("bcgap.txt","none");
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" .پیام شما ارسال شد",
  ]);
	$all_member = fopen( "gaps.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}
unlink ("error_log");




#######################

$rt = $update->message->reply_to_message;
$rtid = $update->message->reply_to_message->from->id;
@$muteuser = file_get_contents("data/$chat_id/muteuser/$from_id.txt");
@$muteuser2 = file_get_contents("data/$chat_id/muteuser/$rtid.txt");
//####for warn######//
$rt = $update->message->reply_to_message;
$rtid = $update->message->reply_to_message->from->id;
@$warnuser = file_get_contents("data/$chat_id/warn/$from_id.txt");
@$warnuser2 = file_get_contents("data/$chat_id/warn/$rtid.txt");
@$warntime = file_get_contents("data/$chat_id/warntime.txt");
//
//####################################################mute####################################################//
if($rt && ($text=="/mute" || $rt &&  $text == "/بیصدا" )){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){   
    		if ($rtid == $ADMIN) {
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"من نمیتوانم صاحبان خود ،گروه و ادمین ها را بی صدا کنم",
        'parse_mode'=>'MarkDown',
        ]);
        //to stop the sequence 
        break;
        
        }

sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_send_messages'=>false,
	'can_send_media_messages'=>false,
	'can_send_other_messages'=>false,
	'can_add_web_page_previews'=>false,
    
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔇 کاربر با موفقیت بیصدا شد 🔇",
  'parse_mode'=>'MarkDown',
	]);
	}

		   }
            
	}

	
	
	

	#####################
	
	#######################
	

	
		if($rt && ($text=="/unmute" || $rt &&  $text == "/باصدا" )){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){   
sendAction($chat_id, 'typing');
	bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_send_messages'=>true,
	'can_send_media_messages'=>true,
	'can_send_other_messages'=>true,
	'can_add_web_page_previews'=>true,
    
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=> "🔊 کاربر با موفقیت از حالت سکوت خارج شد 🔊",
  'parse_mode'=>'MarkDown',
	]);
	}

		    }
            
	}
	
	
	
//###### unmute #######//

//#########id#####//
if($rt && $text == "/info")
    {
	    if($type == "supergroup")
		{
			if($rank == "creator" or $rank == "administrator")
	        {
                sendmessage($chat_id," \n
🔗ایدی گپ = $chat_id
🖋نام گپ = $gpname 
〰〰〰〰〰〰〰〰〰
⚜️نام کاربر = $replayname $replayname2 
🔰ایدی کاربر =  $rtid
❌اخطار های کاربر = $warnuser2/ $warntime
🆔یوزر نیم کاربر = 
https://t.me/$replayun ");
            }
		}
            
	}
//########## del msg #############//
if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice)
    {
		if($rank != "creator" && $rank != "administrator")
		{   
			if($muteuser == "mute")
			{    
				bot('deleteMessage',[
				'chat_id'=>$chat_id,
				'message_id'=>$message->message_id
				]);
            }
	    }
    }
//##########################################################warn#########################################//
if ( strpos($text ,'/setwarn') !== false )
{
$setwarnt= str_replace("/setwarn","",$text);
	if($rank == "creator" or $rank == "administrator" )
	{
		save("data/$chat_id/warntime.txt","$setwarnt"); 
		sendmessage($chat_id,"تعداد به  $setwarnt تغیر یافت");
	}
}
//###################//
if(($rt && $text == "/warn") && $warnuser2 == '' )
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
					mkdir("data/$chat_id/warn");
					save("data/$chat_id/warn/$rtid.txt","0");
					$welwarn = file_get_contents("data/$chat_id/warn/$rtid.txt");
					$wranlast = $welwarn +1 ;
	                save("data/$chat_id/warn/$rtid.txt","$wranlast");				
					}
			}
	}			

//######################

if(($rt && $text == "/warn") && $warnuser2 >= 0 )
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
					   $welwarn = file_get_contents("data/$chat_id/warn/$rtid.txt");
					   $wranlast = $welwarn +1 ;
	                   save("data/$chat_id/warn/$rtid.txt","$wranlast");
                       sendmessage($chat_id,"*🔺 کاربر مورد نظر یک اخطار گرفت  🔺*
                       
🔸 خطار های کاربر $wranlast / $warntime");
                    }
		    }
            
	}
	
//###### warn #######//
if(($rt && $text == "/unwarn") && $warnuser2 > 0 )
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
					   $welwarn = file_get_contents("data/$chat_id/warn/$rtid.txt");
					   $wranlast = $welwarn -1 ;
	                   save("data/$chat_id/warn/$rtid.txt","$wranlast");
                       sendmessage($chat_id,"یکی از اخطار های کاربر مورد نظر کاهش یافت");
                    }
		    }
            
	}

//#############################//
if($rt && $text == "/del warn")
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
	                   save("data/$chat_id/warn/$rtid.txt","0");
                       sendmessage($chat_id,"اخطار  های کاربر به صفر رسید");
                    }
		    }
            
	}
//#########id#####//
if($rt && $text == "/info warn")
    {
	    if($type == "supergroup")
		{
			if($rank == "creator" or $rank == "administrator")
	        {
                sendmessage($chat_id,"$rtid \n $warnuser2/ $warntime ");
            }
		}
            
	}
//########## del msg #############//
if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice)
    {
		if($rank != "creator" && $rank != "administrator")
		{   
			if($warnuser >= $warntime)
			{    
			bot('kickChatMember',[
				'chat_id'=>$chat_id,
				'user_id'=>$update->message->from->id
			]);
			save("data/$chat_id/warn/$from_id.txt","0");
			sendmessage($chat_id,"کاربر $from_id  به دلیل داشتن حداکثر اخطار از گروه ریمو شد.");
            }
	    }
    }
//###############set name###############//
if ( strpos($text ,'/setname') !== false  ) 
	{
		$newname= str_replace("/setname","",$text);
		if ($type == 'supergroup')
		{
			sendAction($chat_id, 'typing');
			bot('setChatTitle',[
				'chat_id'=>$chat_id,
				'title'=>$newname
			]);
			bot('sendmessage',[
				'chat_id'=>$chat_id,
				'text'=>"#انجام شد.",
				'parse_mode'=>'MarkDown',
			]);
		}
	}
//##################### search #######################//
if($text == "/google")
	{
		if($rank == "creator" or $rank == "administrator")
		{	
			sendmessage($chat_id,"متنی که میخوای تو گوگل برات سرچ کنمو بده بیاد");
			save("data/$chat_id/step2.txt","google");
		}
	}
if($step2 == "google")
	{
		if($rank == "creator" or $rank == "administrator")
		{	    
			bot('sendmessage',[
				'chat_id'=>$chat_id,
				'text'=>"
				کانال ما:
				🆔: @Ebook_free
				[$text](http://lmgtfy.com/?q=$text).
				",
				'parse_mode'=>"MarkDown",
            ]);
				save("data/$chat_id/step2.txt","noonno");			
		}
	}
//###################################################//
if($text == "/bing")
	{
		if($rank == "creator" or $rank == "administrator")
		{	
			sendmessage($chat_id,"متنی که میخوای برات سرچ کنمو بفرست");
			save("data/$chat_id/step2.txt","bing");
		}
	}
if($step2 == "bing")
	{
		if($rank == "creator" or $rank == "administrator")
		{	    
			bot('sendmessage',[
			'chat_id'=>$chat_id,
				'text'=>"
				کانال ما:
				🆔: @Ebook_free
				[$text](http://lmgtfy.com/?s=b&q=$text).
				",
				'parse_mode'=>"MarkDown",
            ]);
				save("data/$chat_id/step2.txt","noonno");			
		}
	}
//########################################################//
//###########ping#############//
if($text == '/ping' )
  {
    if ($type == 'supergroup')
    {
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"هستم نگران نباش 😊🖐 ",
      'parse_mode'=>'MarkDown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"🎗کانال ما🎗",'url'=>"http://telegram.me/Ebook_free"]],
            ]
            ])
        ]);
    }  
  } 
 //ping2
if($text == '/ping2')
	{
		sendaction($chat_id,'typing');
		bot('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>"
			هستم نگران نباش 😊🖐",
			'parse_mode'=>'MarkDown',
		]);
	}
//#######leave###########//
if($text == "/leave"  && $from_id == $ADMIN)
	{
		sendmessage($chat_id,"خدا نگه دار همگی");	
		bot('LeaveChat',[
		'chat_id'=>$chat_id
		]);
	} 
	
	
	
 //#############link################//
 if($text=="/link" && $from_id == $ADMIN)
	{
		if ($type == 'supergroup')
		{
			$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
			$jsonlink = json_decode($getlink, true);
			$getlinkde = $jsonlink['result'];
			sendAction($chat_id, 'typing');
			bot('sendmessage',[
				'chat_id'=>$chat_id,
				'text'=>"لینک گروه :\n$getlinkde",
				'parse_mode'=>'html',
			]);
		}
	}
//Rules Plugin by Mrjavi
if(strpos($text,'/setrules') !==false && $type == "supergroup"){
$rules = str_replace("/setrules ","",$text);
file_put_contents("data/$chat_id/rules.txt",$rules);
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>'#قوانین جدید ثبت شد
$rules',
]);
}
elseif(preg_match('([!/#]rules)',$text) && $type == "supergroup"){
$rules = file_get_contents("data/$chat_id/rules.txt");
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>$rules,
]);
}


//#############//

			if($rt && ($text=="/promote" || $rt &&  $text == "/ارتقا" )){
	if($add == "✔️"){    
	if(($rank == "creator")||($from_id == $ADMIN )){   
	sendAction($chat_id, 'typing');
		bot('promoteChatMember',[
		'chat_id'=>$chat_id,
		'user_id'=>$rtid,
		'can_change_info'=>true,
		'can_delete_messages'=>true,
		'can_invite_users'=>true,
		'can_restrict_members'=>true,
		'can_pin_messages'=>true,
		'can_promote_members'=>false,

		  ]);
	bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=> "🔰 کاربر با موفقیت مدیر شد  🔰",
	  'parse_mode'=>'MarkDown',
		]);
		}
	
				}
				
		}
		
		   //############


				if($rt && ($text=="/demote" || $rt &&  $text == "/عزل" )){
			if($add == "✔️"){    
			if(($rank == "creator")||($from_id == $ADMIN )){  
			sendAction($chat_id, 'typing');
				bot('promoteChatMember',[
				'chat_id'=>$chat_id,
				'user_id'=>$rtid,
				'can_change_info'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,
		
				  ]);
			bot('sendmessage',[
				'chat_id'=>$chat_id,
				'text'=> "🔰 کاربر با موفقیت عزل شد  🔰",
			  'parse_mode'=>'MarkDown',
				]);
				}
			
						}
						
				}

		 //###################

				if($rt && ($text=="/ptomotem" || $rt &&  $text == "/ارتقا موقت" )){
			if($add == "✔️"){    
			if(($rank == "creator")||($from_id == $ADMIN )){  
			sendAction($chat_id, 'typing');
				bot('promoteChatMember',[
				'chat_id'=>$chat_id,
				'user_id'=>$rtid,
				'can_change_info'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>true,
				'can_promote_members'=>false,
		
				  ]);
			bot('sendmessage',[
				'chat_id'=>$chat_id,
				'text'=> "🔰 کاربر با موفقیت به طور موقت مدیر شد  🔰",
			  'parse_mode'=>'MarkDown',
				]);
				}
			
						}
						
				}



//########################

				if ($rt &&( strpos($text ,'/mute ') !== false  )) 
				{
				    
					$zamman= str_replace("/mute","",$text);
					
					if (preg_match("/^[0-9 ]*$/",$zamman))
                    {
					
					if($add == "✔️"){    
					if($rank == "creator" or $rank == "administrator"){   
					{
						sendAction($chat_id, 'typing');
						bot('restrictChatMember',[
							'chat_id'=>$chat_id,
							'user_id'=>$rtid,
							'until_date'=>time()+($zamman*3600),
							'can_send_messages'=>false,
							'can_send_media_messages'=>false,
							'can_send_other_messages'=>false,
							'can_add_web_page_previews'=>false,
							
							  ]);
						bot('sendmessage',[
							'chat_id'=>$chat_id,
							'text'=>"🔇 کاربر برای $zamman ساعت با موفقیت بیصدا شد 🔇",
						  'parse_mode'=>'MarkDown',
							]);
							}
							}
							}
							}
			             	}
			             	
			             	
	
			             	
		//#################//
		
		if ($rt &&( strpos($text ,'/mute') !== false  )) 
				{
				    
					$zamman= str_replace("/mute","",$text);
					
					if (!preg_match("/^[0-9 ]*$/",$zamman))
                    {
					
					if($add == "✔️"){    
					if($rank == "creator" or $rank == "administrator"){   
					{
						sendAction($chat_id, 'typing');
		                bot('sendmessage',[
							'chat_id'=>$chat_id,
							'text'=>"🔅 خوب این دستوری که شما زدید اشتباهه 😊

🔆 بعد از mute حتما باید عدد خالی بگذارید 🙃",
						  'parse_mode'=>'MarkDown',
							]);
							
			}
			}
			}
			}
			}
						
			             
			            

	//########################

function adminlist($chat_id){
  $up = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getChatAdministrators?chat_id='.$chat_id),true);
  $result = $up['result'];
$admins = "";
  foreach($result as $key=>$value){
    $found = array_search("administrator",$result[$key]);
    $found2 = array_search("creator",$result[$key]);
    if($found !== false or $found2 !== false){
      $admins = $admins."\n *Name >* `".$result[$key]['user']['first_name'].$result[$key]['user']['last_name']."`\n *UserName >* [".$result[$key]['user']['username']."](t.me/".$result[$key]['user']['username'].")\n *User ID >*` ".$result[$key]['user']['id']."`\n — — — — —";
    }
  }
return $admins;
}
if($text == "/admin list" || $text == "/لیست ادمین"){
    if($rank == "creator" or $rank == "administrator" ){ 
    $adminlist = adminlist($chat_id);
    sendAction($chat_id, 'typing');
    bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*List For Admins* \n — — — — — $adminlist",
   'parse_mode'=>'MARKDOWN',
   'disable_web_page_preview'=>'true'
  ]);
}

}





?>