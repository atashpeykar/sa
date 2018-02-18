<?php

define('API_KEY','521065739:AAHHn7_eSgxMksuJA35iVRGQzgcPRI6VzQk');
//----######------
function makereq($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//##############=--API_REQ
function apiRequest($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }
  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }
  foreach ($parameters as $key => &$val) {
    // encoding to JSON array parameters, for example reply_markup
    if (!is_numeric($val) && !is_string($val)) {
      $val = json_encode($val);
    }
  }
  $url = "https://api.telegram.org/bot".API_KEY."/".$method.'?'.http_build_query($parameters);
  $handle = curl_init($url);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($handle, CURLOPT_TIMEOUT, 60);
  return exec_curl_request($handle);
}
//----######------
//---------
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
//=========
mkdir("data/$chat_id2/settings");
mkdir("data/$chat_id2");
$chat_id = $update->message->chat->id;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$name = $update->message->from->first_name;
 $type2 = $update->message->chat->type;
$username = $update->message->from->username;
$gpname = $update->message->chat->title;
$textmessage = isset($update->message->text)?$update->message->text:'';
$txtmsg = $update->message->text;
$replytext = $update->message->reply_to_message->text;
$reply = $update->message->reply_to_message->from->id;
$reply2 = $update->message->reply_to_message->chat->id;
$replyname = $update->message->reply_to_message->from->first_name;
$replyusername = $update->message->reply_to_message->from->username;
$stickerid = $update->message->reply_to_message->sticker->file_id;
$admin = 273964849;//ایدی سودو
$idbot = 521065739;//ایدی ربات
$botname = "ZUS";
$botusername = "@Testzedlink2bot";
$botusername2 = "Testzedlink2bot";
$channel = "ZUSG00D";
$versionbot = "4.7.2";
$forward = $update->message->forward_from;
$photo = $update->message->photo;
$video = $update->message->video;
$location = $update->message->location;
$joinusername = $update->message->new_chat_member->from->username;
$joinmember = $update->message->new_chat_member;
$leftmember = $update->message->left_chat_member;
$sticker = $update->message->sticker;
$document = $update->message->document;
$contact = $update->message->contact;
$game = $update->message->game;
$music = $update->message->audio;
$gif = $update->message->gif;
$voice = $update->message->voice;
$edit = $update->edited_message;
$chatsuper=str_replace("-","",$chat_id);
$step = file_get_contents("step.txt");
 $type = $update->callback_query->message->chat->type;
$from_id2 = $update->callback_query->from->id;
$cblock = $update->callback_query->message->getmember->user;
$token = "".API_KEY."";
$gpname2 = $update->callback_query->message->chat->title;
     $chat_id2 = $update->callback_query->message->chat->id;
    $message_id2 = $update->callback_query->message->message_id;
    $name2 = $update->callback_query->from->first_name;
    $data = $update->callback_query->data;
	$cmember = getChatMembersCount($chat_id2,$token);
$owner = file_get_contents("data/$chat_id/owner.txt");
$modlist = file_get_contents("data/$chat_id/modlist.txt");
$whitelist = file_get_contents("data/$chat_id/whitelist/list.txt");
$whitelist2 = file_get_contents("data/$chat_id2/whitelist/list.txt");
$banlist = file_get_contents("data/$chat_id/banlist/list.txt");
$banlist2 = file_get_contents("data/$chat_id2/banlist/list.txt");
$owner2 = file_get_contents("data/$chat_id2/owner.txt");
$modlist2 = file_get_contents("data/$chat_id2/modlist.txt");

$userlist = file_get_contents("users.txt");
$grouplist = file_get_contents("groups.txt");
$supergrouplist = file_get_contents("supergroups.txt");

$owner3 = file_get_contents("data/$reply2/owner.txt");
$modlist3 = file_get_contents("data/$reply2/modlist.txt");

	$_kick3 = file_get_contents("data/$reply2/settings/kick.txt");
	$_ban3 = file_get_contents("data/$reply2/settings/ban.txt");
	$_unban3 = file_get_contents("data/$reply2/settings/unban.txt");
	$_settings3 = file_get_contents("data/$reply2/settings/settings.txt");
  $_media3 = file_get_contents("data/$reply2/settings/media.txt");
	$_warn3 = file_get_contents("data/$reply2/settings/warn.txt");
	$_muteuser3 = file_get_contents("data/$reply2/settings/muteuser.txt");


$ekhtar = file_get_contents("data/$chat_id/member/$from_id.txt");
$gplist = file_get_contents("data/$chat_id");
$filterlist = file_get_contents("data/$chat_id/settings/filterword.txt");
$filterlist2 = file_get_contents("data/$chat_id2/settings/filterword.txt");
//-------settings
	$muteuserlist = file_get_contents("data/$chat_id/muteuserlist.txt");
	$muteuserlist2 = file_get_contents("data/$chat_id2/muteuserlist.txt");

	$wlctext = file_get_contents("data/$chat_id/gpwlc.txt");
	$wlctext2 = file_get_contents("data/$chat_id2/gpwlc.txt");
	$byetext = file_get_contents("data/$chat_id/gpbye.txt");
	$byetext2 = file_get_contents("data/$chat_id2/gpbye.txt");
	$_bot = file_get_contents("data/$chat_id2/settings/bot.txt");
	$_link = file_get_contents("data/$chat_id2/settings/link.txt");
	$_flood = file_get_contents("data/$chat_id2/settings/flood.txt");
	$_edit = file_get_contents("data/$chat_id2/settings/edit.txt");
	$_web = file_get_contents("data/$chat_id2/settings/web.txt");
	$_num = file_get_contents("data/$chat_id2/settings/num.txt");
	$_chat = file_get_contents("data/$chat_id2/settings/chat.txt");
	$_tag = file_get_contents("data/$chat_id2/settings/tag.txt");
	$_username = file_get_contents("data/$chat_id2/settings/username.txt");
	$_reply = file_get_contents("data/$chat_id2/settings/reply.txt");
	$_lockcmd = file_get_contents("data/$chat_id2/settings/cmd.txt");
	$_fwd = file_get_contents("data/$chat_id2/settings/fwd.txt");
	$_eng = file_get_contents("data/$chat_id2/settings/eng.txt");
	$_arab = file_get_contents("data/$chat_id2/settings/arab.txt");
	$_kickme = file_get_contents("data/$chat_id2/settings/kickme.txt");
	$warnlist2 = file_get_contents("data/$chat_id2/settings/warnlist2.txt");
	$_join= file_get_contents("data/$chat_id2/settings/join.txt");
	$_floods = file_get_contents("data/$chat_id2/settings/floods.txt");

	$warnlists = file_get_contents("data/$chat_id/settings/warnlists.txt");
	$warnlists2 = file_get_contents("data/$chat_id2/settings/warnlists.txt");

	$_contact = file_get_contents("data/$chat_id2/settings/contact.txt");
	$_game = file_get_contents("data/$chat_id2/settings/game.txt");
	$_location = file_get_contents("data/$chat_id2/settings/location.txt");
	$_sticker = file_get_contents("data/$chat_id2/settings/sticker.txt");
	$_photo = file_get_contents("data/$chat_id2/settings/photo.txt");
	$_video = file_get_contents("data/$chat_id2/settings/video.txt");
	$_voice = file_get_contents("data/$chat_id2/settings/voice.txt");
	$_music = file_get_contents("data/$chat_id2/settings/music.txt");
	$_gif = file_get_contents("data/$chat_id2/settings/gif.txt");
	$_document = file_get_contents("data/$chat_id2/settings/document.txt");

	$_kick = file_get_contents("data/$chat_id2/settings/kick.txt");
	$_ban = file_get_contents("data/$chat_id2/settings/ban.txt");
	$_unban = file_get_contents("data/$chat_id2/settings/unban.txt");
	$_settings = file_get_contents("data/$chat_id2/settings/settings.txt");
  $_media = file_get_contents("data/$chat_id2/settings/media.txt");
	$_warn = file_get_contents("data/$chat_id2/settings/warn.txt");
	$_warnsettings = file_get_contents("data/$chat_id2/settings/warnsettings.txt");
  $_warnmedia = file_get_contents("data/$chat_id2/settings/warnmedia.txt");
	$_muteuser = file_get_contents("data/$chat_id2/settings/muteuser.txt");
//-------
	$_lockcmd2 = file_get_contents("data/$chat_id/settings/cmd.txt");
	$_link2 = file_get_contents("data/$chat_id/settings/link.txt");
	$_bot2 = file_get_contents("data/$chat_id/settings/bot.txt");
	$_flood2 = file_get_contents("data/$chat_id/settings/flood.txt");
	$_edit2 = file_get_contents("data/$chat_id/settings/edit.txt");
	$_chat2 = file_get_contents("data/$chat_id/settings/chat.txt");
	$_tag2 = file_get_contents("data/$chat_id/settings/tag.txt");
	$_username2 = file_get_contents("data/$chat_id/settings/username.txt");
	$_fwd2 = file_get_contents("data/$chat_id/settings/fwd.txt");
	$_reply2 = file_get_contents("data/$chat_id/settings/reply.txt");
	$_eng2 = file_get_contents("data/$chat_id/settings/eng.txt");
	$_arab2 = file_get_contents("data/$chat_id/settings/arab.txt");
	$_web2 = file_get_contents("data/$chat_id/settings/web.txt");
	$_num2 = file_get_contents("data/$chat_id/settings/num.txt");
	$_kickme2 = file_get_contents("data/$chat_id/settings/kickme.txt");
	$_join2 = file_get_contents("data/$chat_id/settings/join.txt");
	$_floods2 = file_get_contents("data/$chat_id/settings/floods.txt");

	$_contact2 = file_get_contents("data/$chat_id/settings/contact.txt");
	$_game2 = file_get_contents("data/$chat_id/settings/game.txt");
	$_location2 = file_get_contents("data/$chat_id/settings/location.txt");
	$_sticker2 = file_get_contents("data/$chat_id/settings/sticker.txt");
	$_photo2 = file_get_contents("data/$chat_id/settings/photo.txt");
	$_video2 = file_get_contents("data/$chat_id/settings/video.txt");
	$_voice2 = file_get_contents("data/$chat_id/settings/voice.txt");
	$_music2 = file_get_contents("data/$chat_id/settings/music.txt");
	$_gif2 = file_get_contents("data/$chat_id/settings/gif.txt");
	$_document2 = file_get_contents("data/$chat_id/settings/document.txt");

	$_kick2 = file_get_contents("data/$chat_id/settings/kick.txt");
	$_ban2 = file_get_contents("data/$chat_id/settings/ban.txt");
	$_unban2 = file_get_contents("data/$chat_id/settings/unban.txt");
	$_settings2 = file_get_contents("data/$chat_id/settings/settings.txt");
  $_media2 = file_get_contents("data/$chat_id/settings/media.txt");
	$_muteuser2 = file_get_contents("data/$chat_id/settings/muteuser.txt");
	$_warn2 = file_get_contents("data/$chat_id/settings/warn.txt");
	$_warnsettings2 = file_get_contents("data/$chat_id/settings/warnsettings.txt");
  $_warnmedia2 = file_get_contents("data/$chat_id/settings/warnmedia.txt");
//-------
#$gpsettings = {"$chat_id":{"owner":"".$creator['id']."","modlist":"","filterword":"","whitelist":"","muteuserlist":"","banlist":"","gpwlc":"","gpbye":"","gplink":"","rules":"","botandwarn":{"floods":"5","warnlists":"4","cmd":"❌"},"adminlock":{"warnmedia":"❌","warnsettings":"❌","warn":"❌","unban":"❌","ban":"❌","kick":"❌"},"settings":"❌","media":"❌","gpsettings":{"flood":"✅","link":"✅","join":"❌","username":"❌","tag":"❌","chat":"❌","eng":"❌","fwd":"❌","arab":"❌","web":"❌","num":"❌","reply":"❌","edit":"❌","kickme":"❌","bot":"❌"},"gpmedia":{"gif":"❌","video":"❌","music":"❌","voice":"❌","photo":"❌","sticker":"❌","game":"❌","contact":"❌","document":"❌","location":"❌"}}};
 $gpis = json_decode(file_get_contents("gplist.js"));
 $linkjsa = $gpis->test->gplink;
//-------
function getcreator($chat_id,$token){
  $up = json_decode(file_get_contents('https://api.telegram.org/bot'.$token.'/getChatAdministrators?chat_id='.$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = array_search("creator",$result[$key]);
    if($found !== false){
      return $result[$key]['user'];
    }
  }
}
$creator = getcreator($chat_id,$token);


	$getChatMember = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=$idbot")); 
    $resultChat = $getChatMember->result;
	$mstatus = $getChatMember->result->status;
function  getUserProfilePhotos($token,$from_id) {
  $url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->result;
  return $result;
}
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;

function getChatMembersCount($chat_id,$token) {
  $url = 'https://api.telegram.org/bot'.$token.'/getChatMembersCount?chat_id='.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->result;
  return $result;
}
function SendMessage($ChatId, $TextMsg)
{
 makereq('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"MarkDown"
]);
}
function SendMessage2($ChatId, $TextMsg)
{
 makereq('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
]);
}
function SendSticker($ChatId, $sticker_ID)
{
 makereq('sendSticker',[
'chat_id'=>$ChatId,
'sticker'=>$sticker_ID
]);
}
function Forward($KojaShe,$AzKoja,$KodomMSG)
{
makereq('ForwardMessage',[
'chat_id'=>$KojaShe,
'from_chat_id'=>$AzKoja,
'message_id'=>$KodomMSG
]);
}
function save($filename,$TXTdata)
	{
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
if($textmessage == "test" && $admin == $from_id){
makereq('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"test: $linkjsa",
]);
}

if($textmessage == "Yes i am sure" && $admin == $from_id || $textmessage == "Yes i am sure" && $owner == $from_id){
mkdir("data/$chat_id");
mkdir("data/$chat_id/settings");
mkdir("data/$chat_id/member");
mkdir("data/$chat_id/banlist");
mkdir("data/$chat_id/whitelist");
save("data/$chat_id/muteuserlist.txt","");
save("data/$chat_id/gpwlc.txt","");
save("data/$chat_id/gpbye.txt","");
save("data/$chat_id/modlist.txt","");
save("data/$chat_id/banlist/list.txt","");
save("data/$chat_id/whitelist/list.txt","");
save("data/$chat_id/gplink.txt","none");
save("data/$chat_id/settings/floods.txt","3");
save("data/$chat_id/settings/warnlists.txt","4");
save("data/$chat_id/rules.txt","none");
save("data/$chat_id/settings/filterword.txt","");
save("data/$chat_id/settings/bot.txt","❌");
save("data/$chat_id/settings/link.txt","✅");
save("data/$chat_id/settings/flood.txt","✅");
save("data/$chat_id/settings/join.txt","❌");
save("data/$chat_id/settings/location.txt","❌");
save("data/$chat_id/settings/username.txt","❌");
save("data/$chat_id/settings/game.txt","❌");
save("data/$chat_id/settings/contact.txt","❌");
save("data/$chat_id/settings/edit.txt","❌");
save("data/$chat_id/settings/tag.txt","❌");
save("data/$chat_id/settings/chat.txt","❌");
save("data/$chat_id/settings/eng.txt","❌");
save("data/$chat_id/settings/fwd.txt","❌");
save("data/$chat_id/settings/kickme.txt","❌");
save("data/$chat_id/settings/reply.txt","❌");
save("data/$chat_id/settings/arab.txt","❌");
save("data/$chat_id/settings/num.txt","❌");
save("data/$chat_id/settings/web.txt","❌");
save("data/$chat_id/settings/sticker.txt","❌");
save("data/$chat_id/settings/photo.txt","❌");
save("data/$chat_id/settings/video.txt","❌");
save("data/$chat_id/settings/voice.txt","❌");
save("data/$chat_id/settings/music.txt","❌");
save("data/$chat_id/settings/gif.txt","❌");
save("data/$chat_id/settings/document.txt","❌");
save("data/$chat_id/settings/settings.txt","❌");
save("data/$chat_id/settings/media.txt","❌");
save("data/$chat_id/settings/ban.txt","❌");
save("data/$chat_id/settings/kick.txt","❌");
save("data/$chat_id/settings/unban.txt","❌");
save("data/$chat_id/settings/warn.txt","❌");
save("data/$chat_id/settings/warnsettings.txt","❌");
save("data/$chat_id/settings/warnmedia.txt","❌");
save("data/$chat_id/settings/muteuser.txt","❌");
save("data/$chat_id/settings/cmd.txt","❌");
makereq('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تنظیمات گروه با موفقیت ریست شد",
]);
}

if($type2 == "group" || $type2 == "supergroup"){
			if (!file_exists("data/$chat_id")) {
mkdir("data/$chat_id");
mkdir("data/$chat_id/settings");
mkdir("data/$chat_id/member");
mkdir("data/$chat_id/banlist");
mkdir("data/$chat_id/whitelist");
save("data/$chat_id/settings/bot.txt","❌");
save("data/$chat_id/gpwlc.txt","");
save("data/$chat_id/gpbye.txt","");
save("data/$chat_id/modlist.txt","");
save("data/$chat_id/settings/floods.txt","3");
save("data/$chat_id/banlist/list.txt","");
save("data/$chat_id/whitelist/list.txt","");
save("data/$chat_id/gplink.txt","none");
save("data/$chat_id/settings/warnlists.txt","4");
save("data/$chat_id/settings/modlist.txt","");
save("data/$chat_id/rules.txt","none");
save("data/$chat_id/settings/filterword.txt","");
save("data/$chat_id/settings/link.txt","✅");
save("data/$chat_id/settings/flood.txt","✅");
save("data/$chat_id/settings/join.txt","❌");
save("data/$chat_id/settings/location.txt","❌");
save("data/$chat_id/settings/username.txt","❌");
save("data/$chat_id/settings/game.txt","❌");
save("data/$chat_id/settings/contact.txt","❌");
save("data/$chat_id/settings/edit.txt","❌");
save("data/$chat_id/settings/tag.txt","❌");
save("data/$chat_id/settings/chat.txt","❌");
save("data/$chat_id/settings/eng.txt","❌");
save("data/$chat_id/settings/fwd.txt","❌");
save("data/$chat_id/settings/kickme.txt","❌");
save("data/$chat_id/settings/reply.txt","❌");
save("data/$chat_id/settings/arab.txt","❌");
save("data/$chat_id/settings/num.txt","❌");
save("data/$chat_id/settings/web.txt","❌");
save("data/$chat_id/settings/sticker.txt","❌");
save("data/$chat_id/settings/photo.txt","❌");
save("data/$chat_id/settings/video.txt","❌");
save("data/$chat_id/settings/voice.txt","❌");
save("data/$chat_id/settings/music.txt","❌");
save("data/$chat_id/settings/gif.txt","❌");
save("data/$chat_id/settings/document.txt","❌");
save("data/$chat_id/settings/settings.txt","❌");
save("data/$chat_id/settings/media.txt","❌");
save("data/$chat_id/settings/ban.txt","❌");
save("data/$chat_id/settings/kick.txt","❌");
save("data/$chat_id/settings/unban.txt","❌");
save("data/$chat_id/settings/warn.txt","❌");
save("data/$chat_id/settings/warnsettings.txt","❌");
save("data/$chat_id/settings/warnmedia.txt","❌");
save("data/$chat_id/settings/bot.txt","❌");
}
				if (!file_exists("data/$chat_id/muteuserlist.txt")) {
					save("data/$chat_id/muteuserlist.txt","");
		}
					if (!file_exists("data/$chat_id/settings/muteuser.txt")) {
	save("data/$chat_id/settings/muteuser.txt","❌");
		}
					if (!file_exists("data/$chat_id/settings/cmd.txt")) {
save("data/$chat_id/settings/cmd.txt","❌");
		}
}

		if ($type2 == "group") {
	 if (strpos($grouplist , "$chat_id") == false){
 $txxt = file_get_contents('groups.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('groups.txt');
      $aaddd .= $chat_id."\n";
  file_put_contents('groups.txt',$aaddd);
    }
	}
}
		if ($type2 == "supergroup") {
	 if (strpos($supergrouplist , "$chat_id") == false){
 $txxt = file_get_contents('supergroups.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('supergroups.txt');
      $aaddd .= $chat_id."\n";
  file_put_contents('supergroups.txt',$aaddd);
    }
	}
}

		if ($type2 == "supergroup" || $type2 == "group") {
			if (!file_exists("data/$chat_id/owner.txt")) {
	save("data/$chat_id/owner.txt","".$creator['id']."");
			}
    }

		if ( strpos($textmessage , "/") !== false  && $mstatus != "administrator" || strpos($textmessage , "!") !== false  && $mstatus != "administrator" || strpos($textmessage , "#") !== false && $mstatus != "administrator" ) {
	     if ($owner == $from_id || $admin == $from_id || strpos($modlist , "$from_id") !== false) {
if ($type2 == "supergroup" || $type2 == "group") {
	var_dump(makereq('sendMessage',[
            'chat_id'=>$chat_id,
  "text" => '',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'','callback_data'=>'nasbiosgp'],['text'=>'','callback_data'=>'nasbandroidgp'],
]
]
			])
		]));
    }
			 }
		}
   if($data == "nasbandroidgp" ){
if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'وارد گروه شوید
	به قسمت تنظیمات گروه بروید
	بعد روی سه نقطه بالا سمت چپ کلیک کنید
	بعد Edit رو بزنید
	بعد روی Administratirs
	بعد روی Add Administratirs
	کلیک کنید و ایدی ربات یعنی '.$botusername.' 
	را سرچ کنید و ادمین کنید
	
	فیلم آموزشی
	https://telegram.me/MaxFlyTM',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'IOS📱','callback_data'=>'nasbiosgp'],
],
[
  ['text'=>'Close⚫️','callback_data'=>'closetab'],
]
]
			])
		]));
			}
	 }
   if($data == "nasbiosgp" ){
		if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'وارد گروه شوید
	به قسمت Group Info بروید
	بعد Edit رو بزنید
	بعد روی Admins
	بعد روی Add Admin
	کلیک کنید و ایدی ربات یعنی '.$botusername.' 
	را سرچ کنید و ادمین کنید
	فیلم آموزشی
	https://telegram.me/MaxFlyTM',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'Android📱','callback_data'=>'nasbandroidgp'],
],
[
  ['text'=>'Close⚫️','callback_data'=>'closetab'],
]
]
			])
		]));
			}
	 }

   if($data == "closetab" ){
		if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => '⚫️بسته شد',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'Closed','callback_data'=>'ش'],
]
]
			])
		]));
			}
	 }

		if ($type2 == "channel") {
makereq('leaveChat',[
	'chat_id'=>$chat_id
	]);
	}

    if($data == "group_media" ){
			if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

  if($data == "reStArT" ){
			if($admin == $from_id2 || $owner2 == $from_id2){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
'text'=>"برای ریست کردن کل تنظیمات گروه متن زیر را بفرستید
Yes i am sure",
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
	}
}

if ($textmessage == 'panel' || $textmessage == '!settings' || $textmessage == 'تنظیمات' ) {
if( $admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false ){
	var_dump(makereq('sendMessage',[
  'chat_id' => $update->message->chat->id,
  "text" => 'یکی از دکمه های زیر را انتخاب کنید.',
  'parse_mode'=>"Markdown",
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'تنظیمات','callback_data'=>'group_settings'],
],
[
  ['text'=>'رسانه','callback_data'=>'group_media'],
],
[
  ['text'=>'ااخطار','callback_data'=>'floodandwarn'],
],
[
  ['text'=>'دستورات مدیریتی','callback_data'=>'adminlock'],
],
[
  ['text'=>'لیست بن','callback_data'=>'banlist'],
],
[
  ['text'=>'لیست سفید','callback_data'=>'whitelist'],
],
[
  ['text'=>'لیست سکوت','callback_data'=>'muteuserlist'],
],
[
  ['text'=>'لیست فیلتر','callback_data'=>'filterlist'],
],
[
  ['text'=>'تنظیمات گروه','callback_data'=>'gpinfo'],
],
[
  ['text'=>'ریست','callback_data'=>'reStArT'],
],
[
  ['text'=>'بستن','callback_data'=>'closetab'],
],
		[
  ['text'=>'کانال','url'=>'https://telegram.me/'.$channel.''],
]
]
			])
		]));
	
	}
}
   if($data == "settings" ){
			if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group And Bot Info',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'تنطیمات','callback_data'=>'group_settings'],
],
[
  ['text'=>'رسانه','callback_data'=>'group_media'],
],
[
  ['text'=>'اخطار','callback_data'=>'floodandwarn'],
],
[
  ['text'=>'دسرسی ادمین ها','callback_data'=>'adminlock'],
],
[
  ['text'=>'لیست بن','callback_data'=>'banlist'],
],
[
  ['text'=>'لیست اخطار','callback_data'=>'whitelist'],
],
[
  ['text'=>'لیست سکوت','callback_data'=>'muteuserlist'],
],
[
  ['text'=>'لیست فیلتر','callback_data'=>'filterlist'],
],
[
  ['text'=>'گروه','callback_data'=>'gpinfo'],
],
[
  ['text'=>'ریست','callback_data'=>'reStArT'],
],
[
  ['text'=>'بستن','callback_data'=>'closetab'],
],
		[
  ['text'=>'کانال','url'=>'https://telegram.me/'.$channel.''],
]
]
			])
		]));
				}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}
    if($data == "adminlock" ){
				if($admin == $from_id2 || $owner2 == $from_id2){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Admin Settings  (Modlist Settings)  :
❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'برگشت','callback_data'=>'settings'],
]
]
			])
		]));
				}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"فقط اونر گروه میتواند به این بخش دست رسی داشته باشد! 🏷",
]);
		}
	}

    if($data == "floodandwarn" ){
			if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "✅"){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Bot && Warn Settings⚙️',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
	[
  ['text'=>'Lock Commands💬','callback_data'=>'nolock'],['text'=>$_lockcmd,'callback_data'=>'lock_cmd']
],
[
  ['text'=>'Flood Sensitivity🖌','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minflood'],['text'=>$_floods,'callback_data'=>'flood'],['text'=>'⬆️','callback_data'=>'maxflood'],
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minwarn'],['text'=>$warnlists2,'callback_data'=>'warn'],['text'=>'⬆️','callback_data'=>'maxwarn'],
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

    if($data == "filterlist" ){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Filter List:
'.$filterlist2.'',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
				}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

    if($data == "whitelist" ){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'White List:
'.$whitelist2.'',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
				}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


    if($data == "muteuserlist" ){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'MuteUser List:
'.$muteuserlist2.'',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
				}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

    if($data == "banlist" ){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Ban List:
'.$banlist2.'',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
				}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

    if($data == "gpinfo"){
			if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
			var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group And Bot Info

	مالک: '.$owner2.' 
	➖➖➖➖➖➖➖
	Modlist:
	'.$modlist2.'
	➖➖➖➖➖➖➖
	خوشامدگویی:
	'.$wlctext2.' 
	➖➖➖➖➖➖➖	
		متن خروج:
	'.$byetext2.'
	➖➖➖➖➖➖➖',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'💠Group Info','callback_data'=>'a'],
],
	[
  ['text'=>'ایدی گروه','callback_data'=>'a'],['text'=>"$chat_id2",'callback_data'=>'a'],
],
	[
  ['text'=>'گروه','callback_data'=>'a'],['text'=>"$gpname2",'callback_data'=>'a'],
],
	[
  ['text'=>'💠Group Type','callback_data'=>'a'],['text'=>"$type",'callback_data'=>'a'],
],
	[
  ['text'=>'عضاء','callback_data'=>'a'],['text'=> "$cmember",'callback_data'=>'a'],
],
	[
  ['text'=>'پیام ها','callback_data'=>'a'],['text'=> "$message_id2",'callback_data'=>'a'],
],
	[
  ['text'=>'اطلاعات ربات','callback_data'=>'a'],
],
	[
  ['text'=>'نام','callback_data'=>'a'],['text'=>"$botusername",'callback_data'=>'a'],
],
		[
  ['text'=>'ورژن','callback_data'=>'a'],['text'=>"$versionbot",'callback_data'=>'ao'],
],
		[
  ['text'=>'ریست','callback_data'=>'gpinfo2'],
],
[
  ['text'=>'برگشت','callback_data'=>'settings'],
]
]
			])
		]));
					}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

    if($data == "gpinfo2"){
			if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
			var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group And Bot Info

	Owner: '.$owner2.' 
	➖➖➖➖➖➖➖
	Modlist:
	'.$modlist2.'
	➖➖➖➖➖➖➖
	Welcome Text:
	'.$wlctext2.' 
	➖➖➖➖➖➖➖	
		Bye Text:
	'.$byetext2.'
	➖➖➖➖➖➖➖',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'💠Group Info','callback_data'=>'a'],
],
	[
  ['text'=>'💠Group ID','callback_data'=>'a'],['text'=>"$chat_id2",'callback_data'=>'a'],
],
	[
  ['text'=>'💠Group Name','callback_data'=>'a'],['text'=>"$gpname2",'callback_data'=>'a'],
],
	[
  ['text'=>'💠Group Type','callback_data'=>'a'],['text'=>"$type",'callback_data'=>'a'],
],
	[
  ['text'=>'💠Member Count','callback_data'=>'a'],['text'=> "$cmember",'callback_data'=>'a'],
],
	[
  ['text'=>'💠Message Count','callback_data'=>'a'],['text'=> "$message_id2",'callback_data'=>'a'],
],
	[
  ['text'=>'⚜️Bot Info','callback_data'=>'a'],
],
	[
  ['text'=>'⚜️UserName','callback_data'=>'a'],['text'=>"$botusername",'callback_data'=>'a'],
],
		[
  ['text'=>'⚜️Version','callback_data'=>'a'],['text'=>"$versionbot",'callback_data'=>'ao'],
],
		[
  ['text'=>'♻️Refresh','callback_data'=>'gpinfo'],
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
					}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


    if($data == "group_settings"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ادیت','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج من','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'برگشت','callback_data'=>'settings'],
]
]
			])
		]));
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}
//----------Flood and Warn settings----------\\
    if($data == "minflood"){	
   if($admin == $from_id2 || $owner2 == $from_id2 ){
if($_floods == 3){
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"تعداد سیل باید بین 3 تا 15 باشد ! 🏷",
]);
		}
if($_floods > 3){
$setflood = $_floods - 1;
save("data/$chat_id2/settings/floods.txt","$setflood");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Bot && Warn Settings⚙️',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
	[
  ['text'=>'Lock Commands💬','callback_data'=>'nolock'],['text'=>$_lockcmd,'callback_data'=>'lock_cmd']
],
[
  ['text'=>'Flood Sensitivity🖌','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minflood'],['text'=>"$setflood",'callback_data'=>'flood'],['text'=>'⬆️','callback_data'=>'maxflood'],
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minwarn'],['text'=>$warnlists2,'callback_data'=>'warn'],['text'=>'⬆️','callback_data'=>'maxwarn'],
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}
}

    if($data == "maxflood"){	
   if($admin == $from_id2 || $owner2 == $from_id2 ){
if($_floods == 15){
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"تعداد سیل باید بین 3 تا 15 باشد ! 🏷",
]);
		}
if($_floods < 15){
$setflood = $_floods + 1;
save("data/$chat_id2/settings/floods.txt","$setflood");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Bot && Warn Settings⚙️',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
	[
  ['text'=>'Lock Commands💬','callback_data'=>'nolock'],['text'=>$_lockcmd,'callback_data'=>'lock_cmd']
],
[
  ['text'=>'Flood Sensitivity🖌','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minflood'],['text'=>"$setflood",'callback_data'=>'flood'],['text'=>'⬆️','callback_data'=>'maxflood'],
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minwarn'],['text'=>$warnlists2,'callback_data'=>'warn'],['text'=>'⬆️','callback_data'=>'maxwarn'],
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}
}


    if($data == "minwarn"){	
   if($admin == $from_id2 || $owner2 == $from_id2 ){
if($warnlists2 == 1){
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"تعداد اخطار باید بین 1 تا 9 باشد ! 🏷",
]);
		}
if($warnlists2 > 1){
$setwarn = $warnlists2 - 1;
save("data/$chat_id2/settings/warnlists.txt","$setwarn");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Bot && Warn Settings⚙️',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
	[
  ['text'=>'Lock Commands💬','callback_data'=>'nolock'],['text'=>$_lockcmd,'callback_data'=>'lock_cmd']
],
[
  ['text'=>'Flood Sensitivity🖌','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minflood'],['text'=>$_floods,'callback_data'=>'flood'],['text'=>'⬆️','callback_data'=>'maxflood'],
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minwarn'],['text'=>"$setwarn",'callback_data'=>'warn'],['text'=>'⬆️','callback_data'=>'maxwarn'],
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}
}

    if($data == "maxwarn"){	
   if($admin == $from_id2 || $owner2 == $from_id2 ){
if($warnlists2 == 9){
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"تعداد اخطار باید بین 1 تا 9 باشد ! 🏷",
]);
		}
if($warnlists2 < 9){
$setwarn = $warnlists2 + 1;
save("data/$chat_id2/settings/warnlists.txt","$setwarn");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Bot && Warn Settings⚙️',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
	[
  ['text'=>'Lock Commands💬','callback_data'=>'nolock'],['text'=>$_lockcmd,'callback_data'=>'lock_cmd']
],
[
  ['text'=>'Flood Sensitivity🖌','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minflood'],['text'=>$_floods,'callback_data'=>'flood'],['text'=>'⬆️','callback_data'=>'maxflood'],
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minwarn'],['text'=>"$setwarn",'callback_data'=>'warn'],['text'=>'⬆️','callback_data'=>'maxwarn'],
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}
}

  if($data == "lock_cmd" && $_lockcmd == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/cmd.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Bot && Warn Settings⚙️',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
	[
  ['text'=>'Lock Commands💬','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_cmd']
],
[
  ['text'=>'Flood Sensitivity🖌','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minflood'],['text'=>$_floods,'callback_data'=>'flood'],['text'=>'⬆️','callback_data'=>'maxflood'],
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minwarn'],['text'=>"$warnlists2",'callback_data'=>'warn'],['text'=>'⬆️','callback_data'=>'maxwarn'],
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"دستورات برای کاربران غیر فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

  if($data == "lock_cmd" && $_lockcmd == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 ){
save("data/$chat_id2/settings/cmd.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'Bot && Warn Settings⚙️',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
	[
  ['text'=>'Lock Commands💬','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_cmd']
],
[
  ['text'=>'Flood Sensitivity🖌','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minflood'],['text'=>$_floods,'callback_data'=>'flood'],['text'=>'⬆️','callback_data'=>'maxflood'],
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],
],
[
  ['text'=>'⬇️','callback_data'=>'minwarn'],['text'=>"$warnlists2",'callback_data'=>'warn'],['text'=>'⬆️','callback_data'=>'maxwarn'],
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"دستورات برای کاربران فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

//----------lock and unlock admin settings----------\\
  if($data == "lock_kick" && $_kick == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/kick.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"اخراج برای ادمین قفل شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

  if($data == "lock_kick" && $_kick == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 ){
save("data/$chat_id2/settings/kick.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"اخراج برای ادمین فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}


  if($data == "lock_ban" && $_ban == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 ){
save("data/$chat_id2/settings/ban.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"بن برای ادمین قفل شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

  if($data == "lock_ban" && $_ban == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 ){
save("data/$chat_id2/settings/ban.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"بن برای ادمین فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

 if($data == "lock_unban" && $_unban == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/unban.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"ان بن برای ادمین قفل شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

  if($data == "lock_unban" && $_unban == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/unban.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"ان بن برای ادمین فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

 if($data == "lock_muteuser" && $_muteuser == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/muteuser.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_settings']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"میوت کردن برای ادمین قفل شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

  if($data == "lock_muteuser" && $_muteuser == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/muteuser.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"میوت کردن برای ادمین فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

 if($data == "lock_settings" && $_settings == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 ){
save("data/$chat_id2/settings/settings.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"تنظیمات برای ادمین قفل شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

  if($data == "lock_settings" && $_settings == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/settings.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"ستینگ برای ادمین فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

 if($data == "lock_media" && $_media == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/media.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"مدیا برای ادمین قفل شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

  if($data == "lock_media" && $_media == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/media.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>$_warn,'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"مدیا برای ادمین فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

 if($data == "lock_warn" && $_warn == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/warn.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"اخطار برای ادمین قفل شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}

  if($data == "lock_warn" && $_warn == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2){
save("data/$chat_id2/settings/warn.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_kick,'callback_data'=>'lock_kick']
],
[
  ['text'=>'مسدود','callback_data'=>'nolock'],['text'=>$_ban,'callback_data'=>'lock_ban']
],
[
  ['text'=>'بازکردن مسدود','callback_data'=>'nolock'],['text'=>$_unban,'callback_data'=>'lock_unban']
],
[
  ['text'=>'سکوت','callback_data'=>'nolock'],['text'=>$_muteuser,'callback_data'=>'lock_muteuser']
],
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],['text'=>$_settings,'callback_data'=>'lock_settings']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],['text'=>$_media,'callback_data'=>'lock_media']
],
[
  ['text'=>'اخطار','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_warn']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"اخطار برای ادمین فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما اونر نیستید! 🏷",
]);
		}
	}
//----------lock and unlock by button----------\\
   if($data == "lock_flood" && $_flood == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌" ){
save("data/$chat_id2/settings/flood.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل سیل فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_flood" && $_flood == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/flood.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل سیل غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_links" && $_link == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌" ){
save("data/$chat_id2/settings/link.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل لینک فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_links" && $_link == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/link.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل لینک غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_tag" && $_tag == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/tag.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل هشتگ فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_tag" && $_tag == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/tag.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل هشتگ غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


   if($data == "lock_username" && $_username == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/username.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل یوزرنیم فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_username" && $_username == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/username.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل یوزرنیم غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_number" && $_num == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/num.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عدد فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_number" && $_num == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/num.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عدد غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_web" && $_web == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/web.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل وبسایت فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_web" && $_web == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/web.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل وبسایت غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_chat" && $_chat == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/chat.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'🏷English','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل چت فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_chat" && $_chat == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/chat.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل چت غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_fwd" && $_fwd == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/fwd.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'🏷Username','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل فوروارد فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_fwd" && $_fwd == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/fwd.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل فوروارد غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_reply" && $_reply == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/reply.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل ریپلی فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_reply" && $_reply == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/reply.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل ریپلی غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


   if($data == "lock_edit" && $_edit == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/edit.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل ادیت فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_edit" && $_edit == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/edit.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'🏷Forward','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل ادیت غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


   if($data == "lock_eng" && $_eng == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/eng.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل انگلیسی فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_eng" && $_eng == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/eng.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل انگلیسی غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_arab" && $_arab == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/arab.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عربی/فارسی فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_arab" && $_arab == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/arab.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عربی/فارسی غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


   if($data == "lock_join" && $_join == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/join.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_join']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عضویت فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_join" && $_join == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/join.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_join']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عضویت غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


   if($data == "lock_kickme" && $_kickme == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/kickme.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل اخراج فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_kickme" && $_kickme == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/kickme.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot,'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل اخراج غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_bots" && $_bot == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/bot.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل وروود ربات فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_bots" && $_bot == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_settings == "❌"){
save("data/$chat_id2/settings/bot.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Settings Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood,'callback_data'=>'lock_flood']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link,'callback_data'=>'lock_links']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag,'callback_data'=>'lock_tag']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username,'callback_data'=>'lock_username']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num,'callback_data'=>'lock_number']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web,'callback_data'=>'lock_web']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat,'callback_data'=>'lock_chat']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd,'callback_data'=>'lock_fwd']
],
[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply,'callback_data'=>'lock_reply']
],
[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit,'callback_data'=>'lock_edit']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng,'callback_data'=>'lock_eng']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab,'callback_data'=>'lock_arab']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join,'callback_data'=>'lock_join']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_bots']
],
	[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme,'callback_data'=>'lock_kickme']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل وروود ربات غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}
//----------lock and unlock by text----------\\
if ($textmessage == 'lock link' || $textmessage == 'قفل لینک' ) {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/link.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل لینک فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			 );
}
}

	if ($textmessage == 'unlock link' || $textmessage =='بازکردن لینک') {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/link.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل لینک غیر فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == 'lock join' || $textmessage == "قفل عضویت") {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/join.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل عضویت فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			 );
}
}

	if ($textmessage == 'unlock join' || $textmessage == "بازکردن عضویت") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/join.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل عضویت غیر فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == 'lock chat' || $textmessage == "قفل") {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/chat.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل چت فعال شد>>*',
'parse_mode'=>"MarkDown"
]);
}
}
	if ($textmessage == 'unlock chat' || $textmessage == "بازکردن") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/chat.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل چت غیرفعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
	}
if ($textmessage == 'lock web' || $textmessage == "قفل وب") {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/web.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل وب فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			 );
		
	}
}

	if ($textmessage == 'unlock web' || $textmessage == "بازکردن وب") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/web.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل وب  غیر فعال شد>>',
'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == 'lock number' || $textmessage == "قفل شماره") {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/num.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل شماره فعال شد>>*',
'parse_mode'=>"MarkDown"
]);
}
}
	if ($textmessage == 'unlock number' || $textmessage == "بازکردن شماره" ) {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/num.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل شماره غیر فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == 'lock tag' || $textmessage == "قفل تگ") {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/tag.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل تگ فعال شد>>*',
'parse_mode'=>"MarkDown"
]);
}
}
	if ($textmessage == 'unlock tag' || $textmessage == "بازکردن تگ") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/tag.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل تگ غیر  فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == 'lock username' || $textmessage == "قفل یوزرنیم") {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/username.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل یوزرنیم فعال شد>>*',
'parse_mode'=>"MarkDown"
]);
}
}
	if ($textmessage == 'unlock username' || $textmessage == "بازکردن یوزنیم") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/username.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل یوزرنیم غیرفعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
	}

	if ($textmessage == 'lock flood' || $textmessage == "قفل اسپم") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/flood.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '#Done
*<<قفل اسپم فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == 'unlock flood' || $textmessage == "بازکردن اسپم") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/flood.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل اسپم  غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == 'lock forward' || $textmessage == "قفل فروارد") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/fwd.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل فروارد فعال شد>>*',
'parse_mode'=>"MarkDown"
]);
}
}
	if ($textmessage == 'unlock forward' || $textmessage == "بازکردن فروارد") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/fwd.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '#Done
*<<قفل فروارد غیر  فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == 'lock reply' || $textmessage == "قفل ریپلی") {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/reply.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل ریپلی فعال شد>>*',
'parse_mode'=>"MarkDown"
]);
}
}
	if ($textmessage == 'unlock reply' || $textmessage == "بازکردن ریپلی") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/reply.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '#Done
*<<قفل ریپلی غیر فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
	}
if ($textmessage == 'lock edit' || $textmessage == "قفل ویرایش") {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/edit.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل ادیت فعال شد>>*',
'parse_mode'=>"MarkDown"
]);
}
}
	if ($textmessage == 'unlock edit' || $textmessage == "بازکردن ویرایش") {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/edit.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل ادیت غیر فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
	}
if ($textmessage == 'lock english' || $textmessage == "قفل انگلیسی" ) {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/eng.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '
*<<قفل انگلیسی فعال شد>>*',
'parse_mode'=>"MarkDown"
]);
}
}
	if ($textmessage == 'unlock english' || $textmessage == "بازکردن انگلیسی" ) {
			if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/eng.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل انگلیسی غیر فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == 'lock kikme' || $textmessage == "قفل اخراج") {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
save("data/$chat_id/settings/kickme.txt","✅");
makereq('sendMessage',[
'chat_id'=> $update->message->chat->id,
'text' => '#Done
*<<قفل اخراج فعال شد>>*',
'parse_mode'=>"MarkDown"
]);
}
}
	if ($textmessage == 'unlock kikme' || $textmessage == "بازکردن اخراج" ) {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/kickme.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل اخراج غیر فعال شد>>*',
'parse_mode'=>"MarkDown"
]
			);
	}
	}
	if ($textmessage == 'lock arabic' || $textmessage == "قفل عربی" ) {
			if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/arab.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل عربی فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == 'unlock arabic' || $textmessage == "باز کردن عربی" ) {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_settings2 == "❌"){
		save("data/$chat_id/settings/arab.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل عربی غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
//-------End Lock and Unlock-------\\
//-------Start Mute and Unmute bu button-------\\
   if($data == "lock_sticker" && $_sticker == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/sticker.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'📍Contact ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل استیکر فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_sticker" && $_sticker == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/sticker.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل استیکر غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


   if($data == "lock_photo" && $_photo == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/photo.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عکس فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_photo" && $_photo == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/photo.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عکس غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_video" && $_video == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/video.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل فیلم فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_video" && $_video == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/video.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل فیلم غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_voice" && $_voice == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/voice.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل وییس فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_voice" && $_voice == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/voice.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل وییس غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_music" && $_music == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/music.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل اهنگ فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_music" && $_music == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/music.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل اهنگ غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


   if($data == "lock_gif" && $_gif == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/gif.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عکس متحرک فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_gif" && $_gif == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/gif.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل عکس متحرک غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


   if($data == "lock_document" && $_document == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/document.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل فایل فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_document" && $_document == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/document.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل فایل غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}


   if($data == "lock_location" && $_location == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/location.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل لوکیشن فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_location" && $_location == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/location.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل لوکیشن غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_contact" && $_contact == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/contact.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل شماره فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_contact" && $_contact == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/contact.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game,'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل شماره غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_game" && $_game == "❌"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/game.txt","✅");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>"✅",'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل بازی فعال شد ✅",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}

   if($data == "lock_game" && $_game == "✅"){
				if($admin == $from_id2 || $owner2 == $from_id2 || strpos($modlist2 , "$from_id2") !== false && $_media == "❌"){
save("data/$chat_id2/settings/game.txt","❌");
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'SuperGroup/Group Media Manager⚙️

❌ = unlock
 ✅ = lock',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker,'callback_data'=>'lock_sticker']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo,'callback_data'=>'lock_photo']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video,'callback_data'=>'lock_video']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice,'callback_data'=>'lock_voice']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music,'callback_data'=>'lock_music']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif,'callback_data'=>'lock_gif']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document,'callback_data'=>'lock_document']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_location']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact,'callback_data'=>'lock_contact']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>"❌",'callback_data'=>'lock_game']
],
[
  ['text'=>'بازگشت','callback_data'=>'settings'],
]
]
			])
		]));
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قفل بازی غیر فعال شد ❌",
]);
						}else{
			makereq('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"شما ادمین نیستید! 🏷",
]);
		}
	}
//-------Start Mute and Unmute by text-------\\
if ($textmessage == '/mute contact' || $textmessage == 'mute contact' || $textmessage == 'قفل مخاطب') {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/contact.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*C<<قفل مخاطب فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == '/unmute contact' || $textmessage == 'unmute contact' || $textmessage == 'باز کردن مخاطب' ) {
			if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/contact.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل مخاطب غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == '/lock game' || $textmessage == 'lock game' || $textmessage == 'قفل بازی') {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/game.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل بازی فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == '/unlock game' || $textmessage == 'unlock game' || $textmessage == 'بازکردن بازی ') {
			if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/game.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل بازی  غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}

if ($textmessage == '/lock sticker' || $textmessage == 'lock sticker' || $textmessage == 'قفل استیکر') {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/sticker.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل استیکر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}

if ($textmessage == '/unlock sticker' || $textmessage == 'unlock sticker' || $textmessage == 'بازکردن استیکر') {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/sticker.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل استیکر غیر  فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == '/lock location' || $textmessage == 'lock location' || $textmessage == 'قفل مکان') {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/location.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل مکان فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == '/unlock location' || $textmessage == 'unlock location' || $textmessage == 'بازکردن مکان' ) {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/location.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل مکان غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == '/lock photo' || $textmessage == 'lock photo' || $textmessage == 'قفل عکس') {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/photo.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل عکس فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == '/unlock photo' || $textmessage == 'unlock photo' || $textmessage == 'بازکردن عکس') {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/photo.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل عکس  غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == '/lock video' || $textmessage == 'lock video' || $textmessage == 'قفل فیلم' ) {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
	save("data/$chat_id/settings/video.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل فیلم فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == '/unlock video' || $textmessage == 'unlock video' || $textmessage == 'بازکردن فیلم') {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/video.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل فیلم غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == '/lock voice' || $textmessage == 'lock voice' || $textmessage == 'قفل صدا') {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/voice.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل صدا  فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == '/unlock voice' || $textmessage == 'unlock voice' || $textmessage == ' بازکردن ویس') {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/voice.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل صدا  غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == '/lock music' || $textmessage == 'lock music' || $textmessage == 'قفل اهنگ') {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/music.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل اهنگ فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == '/unlock music' || $textmessage == 'unlock music' || $textmessage == 'بازکردن اهنگ') {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/music.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل اهنگ غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == '/lock gif' || $textmessage == 'lock gif' || $textmessage == 'قفل گیف') {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/video.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل گیف فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == '/unlock gif' || $textmessage == 'unlock gif' || $textmessage == 'بازکردن گیف') {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
		save("data/$chat_id/settings/gif.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '
*<<قفل گیف غیر فعال شد>>*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
if ($textmessage == '/mute document' || $textmessage == '!mute document' || $textmessage == '#mute document') {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){
	save("data/$chat_id/settings/document.txt","✅");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '#Done
*Document has been Muted*',
	'parse_mode'=>"MarkDown"
]
			);
	}
}
	if ($textmessage == '/unmute document' || $textmessage == '!unmute document' || $textmessage == '#unmute document') {
	if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false && $_media2 == "❌"){ 
		save("data/$chat_id/settings/document.txt","❌");
makereq('sendMessage',[
  'chat_id' => $chat_id,
  'text' => '#Done
*document has been UnMuted*',
	'parse_mode'=>"MarkDown"
]
			);
	}
	}
//-------End Mute and UnMute
        if ( stripos($username, "bot" ) !== false || stripos($username, "bot") !== false ) {
		if ($_bot2 == "✅" ) {
			        	makereq('sendMessage',[
            				'chat_id'=>$update->message->chat->id,
            				'text'=>'#ربات_اخراج_شد
										اوردن ربات در گروه ممنوع است. ',
            				'parse_mode'=>'HTML',
            				'reply_to_message_id'=>$update->message->message_id,
            				'disable_web_page_preview'=>true
        				]);
        				makereq('kickChatMember',[
            				'chat_id'=>$update->message->chat->id,
            				'user_id'=>$update->message->from->id
        				]);
			}
		}

	if ($joinmember != null && $wlctext != "" ) {
			        	makereq('sendMessage',[
            				'chat_id'=>$update->message->chat->id,
            				'text'=>"$wlctext",
            				'parse_mode'=>'HTML',
            				'reply_to_message_id'=>$update->message->message_id,
            				'disable_web_page_preview'=>true
        				]);
		}

	if ($leftmember != null && $byetext != "" ) {
			        	makereq('sendMessage',[
            				'chat_id'=>$update->message->chat->id,
            				'text'=>"$byetext",
            				'parse_mode'=>'HTML',
            				'reply_to_message_id'=>$update->message->message_id,
            				'disable_web_page_preview'=>true
        				]);
		}

	$efrom_id = $update->edited_message->from->id;
		$echat_id = $update->edited_message->chat->id;
$eowner = file_get_contents("data/$echat_id/owner.txt");
$emodlist = file_get_contents("data/$echat_id/modlist.txt");
$ewhitelist = file_get_contents("data/$echat_id/whitelist/list.txt");
if($efrom_id !== $admin && $efrom_id != $eowner && $efrom_id != $emodlist && $ewhitelist != $efrom_id){


if ($edit != null) {
		$from_id = $update->edited_message->from->id;
		$chat_id = $update->edited_message->chat->id;
		
	$textmessage = isset($update->edited_message->text)?$update->edited_message->text:'';
	$_link2 = file_get_contents("data/$chat_id/settings/link.txt");
	$_flood2 = file_get_contents("data/$chat_id/settings/flood.txt");
	$_chat2 = file_get_contents("data/$chat_id/settings/chat.txt");
	$_tag2 = file_get_contents("data/$chat_id/settings/tag.txt");
	$_username2 = file_get_contents("data/$chat_id/settings/username.txt");
	$_fwd2 = file_get_contents("data/$chat_id/settings/fwd.txt");
	$_reply2 = file_get_contents("data/$chat_id/settings/reply.txt");
	$_eng2 = file_get_contents("data/$chat_id/settings/eng.txt");
	$_arab2 = file_get_contents("data/$chat_id/settings/arab.txt");
	$_web2 = file_get_contents("data/$chat_id/settings/web.txt");
	$_num2 = file_get_contents("data/$chat_id/settings/num.txt");
		
 if ( stripos($textmessage, "t.me") !== false || stripos($textmessage, "telegram.me") !== false ) {
		if ($_link2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->edited_message->chat->id,
            				'message_id'=>$update->edited_message->message_id
        				]);
			}
}

if ( stripos($textmessage, "a" ) !== false || stripos($textmessage, "s") !== false || stripos($textmessage, "d") !== false || stripos($textmessage, "f") !== false || stripos($textmessage, "g") !== false || stripos($textmessage, "h") !== false || stripos($textmessage, "j") !== false || stripos($textmessage, "k") !== false || stripos($textmessage, "l") !== false || stripos($textmessage, "z") !== false || stripos($textmessage, "x") !== false || stripos($textmessage, "c") !== false || stripos($textmessage, "v") !== false || stripos($textmessage, "b") !== false || stripos($textmessage, "n") !== false || stripos($textmessage, "m") !== false || stripos($textmessage, "q") !== false || stripos($textmessage, "w") !== false || stripos($textmessage, "e") !== false || stripos($textmessage, "r") !== false || stripos($textmessage, "t") !== false || stripos($textmessage, "y") !== false || stripos($textmessage, "u") !== false || stripos($textmessage, "i") !== false
|| stripos($textmessage, "o") !== false || stripos($textmessage, "p") !== false) {
		if ($_eng2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->edited_message->chat->id,
            				'message_id'=>$update->edited_message->message_id
        				]);
			}
}

if ( stripos($textmessage, "ش" ) !== false || stripos($textmessage, "س") !== false || stripos($textmessage, "ی") !== false || stripos($textmessage, "ب") !== false || stripos($textmessage, "ل") !== false || stripos($textmessage, "ا") !== false || stripos($textmessage, "ت") !== false || stripos($textmessage, "ن") !== false || stripos($textmessage, "م") !== false || stripos($textmessage, "پ") !== false || stripos($textmessage, "ط") !== false || stripos($textmessage, "ظ") !== false || stripos($textmessage, "ز") !== false || stripos($textmessage, "ژ") !== false || stripos($textmessage, "د") !== false || stripos($textmessage, "ر") !== false || stripos($textmessage, "ک") !== false || stripos($textmessage, "و") !== false || stripos($textmessage, "ج") !== false || stripos($textmessage, "گ") !== false || stripos($textmessage, "چ") !== false || stripos($textmessage, "ح") !== false || stripos($textmessage, "ه") !== false || stripos($textmessage, "خ") !== false
|| stripos($textmessage, "ف") !== false || stripos($textmessage, "ع") !== false) {
		if ($_arab2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->edited_message->chat->id,
            				'message_id'=>$update->edited_message->message_id
        				]);
			}
}

if (stripos($textmessage, "#") !== false) {
		if ($_tag2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->edited_message->chat->id,
            				'message_id'=>$update->edited_message->message_id
        				]);
			}
}

	if (stripos($textmessage, "@") !== false) {
		if ($_username2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->edited_message->chat->id,
            				'message_id'=>$update->edited_message->message_id
        				]);
			}
}

if (stripos($textmessage, "1") !== false || stripos($textmessage, "2") !== false || stripos($textmessage, "3") !== false || stripos($textmessage, "4") !== false || stripos($textmessage, "5") !== false || stripos($textmessage, "6") !== false || stripos($textmessage, "7") !== false || stripos($textmessage, "8") !== false || stripos($textmessage, "9") !== false || stripos($textmessage, "0") !== false) {
		if ($_num2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->edited_message->chat->id,
            				'message_id'=>$update->edited_message->message_id
        				]);
			}
}

if (stripos($textmessage, "https") !== false || stripos($textmessage, "www") !== false ) {
		if ($_web2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->edited_message->chat->id,
            				'message_id'=>$update->edited_message->message_id
        				]);
			}
}
}

if ($edit != null){
				$chat_id = $update->edited_message->chat->id;
			$_edit2 = file_get_contents("data/$chat_id/settings/edit.txt");
	if ($_edit2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->edited_message->chat->id,
            				'message_id'=>$update->edited_message->message_id
        				]);
			}
}

}

if($from_id !== $admin && $from_id != $owner && $from_id != $modlist && $whitelist != $from_id){
	
if ( $_flood2 == "✅"){
$timing = date("Y-m-d-h-i-sa");
$timing = str_replace("am","",$timing);

$metti_khan = file_get_contents("flood/$timing-$from_id.txt");
$timing_spam = $metti_khan+1;
file_put_contents("flood/$timing-$from_id.txt","$timing_spam");

$metti_khan2 = file_get_contents("flood/$timing-$from_id.txt");
if($metti_khan2 >= $_floods2  ){
makereq('kickChatMember',[
                    'chat_id'=>$update->message->chat->id,
                    'user_id'=>$update->message->from->id
                ]);
unlink("flood/$timing-$from_id.txt");
return false;
}
}
	
if ( stripos($muteuserlist, "$from_id") !== false ) {
        				makereq('deletemessage',[
            				'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}

if ( stripos($textmessage, "t.me") !== false || stripos($textmessage, "telegram.me") !== false ) {
		if ($_link2 == "✅" ) {
        				makereq('deletemessage',[
            				'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}	

	if ( stripos($textmessage, "a" ) !== false || stripos($textmessage, "s") !== false || stripos($textmessage, "d") !== false || stripos($textmessage, "f") !== false || stripos($textmessage, "g") !== false || stripos($textmessage, "h") !== false || stripos($textmessage, "j") !== false || stripos($textmessage, "k") !== false || stripos($textmessage, "l") !== false || stripos($textmessage, "z") !== false || stripos($textmessage, "x") !== false || stripos($textmessage, "c") !== false || stripos($textmessage, "v") !== false || stripos($textmessage, "b") !== false || stripos($textmessage, "n") !== false || stripos($textmessage, "m") !== false || stripos($textmessage, "q") !== false || stripos($textmessage, "w") !== false || stripos($textmessage, "e") !== false || stripos($textmessage, "r") !== false || stripos($textmessage, "t") !== false || stripos($textmessage, "y") !== false || stripos($textmessage, "u") !== false || stripos($textmessage, "i") !== false
|| stripos($textmessage, "o") !== false || stripos($textmessage, "p") !== false) {
		if ($_eng2 == "✅" ) {
        				makereq('deletemessage',[
            				'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

if ( stripos($textmessage, "ش" ) !== false || stripos($textmessage, "س") !== false || stripos($textmessage, "ی") !== false || stripos($textmessage, "ب") !== false || stripos($textmessage, "ل") !== false || stripos($textmessage, "ا") !== false || stripos($textmessage, "ت") !== false || stripos($textmessage, "ن") !== false || stripos($textmessage, "م") !== false || stripos($textmessage, "پ") !== false || stripos($textmessage, "ط") !== false || stripos($textmessage, "ظ") !== false || stripos($textmessage, "ز") !== false || stripos($textmessage, "ژ") !== false || stripos($textmessage, "د") !== false || stripos($textmessage, "ر") !== false || stripos($textmessage, "ک") !== false || stripos($textmessage, "و") !== false || stripos($textmessage, "ج") !== false || stripos($textmessage, "گ") !== false || stripos($textmessage, "چ") !== false || stripos($textmessage, "ح") !== false || stripos($textmessage, "ه") !== false || stripos($textmessage, "خ") !== false
|| stripos($textmessage, "ف") !== false || stripos($textmessage, "ع") !== false) {
		if ($_arab2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

if (stripos($textmessage, "#") !== false) {
		if ($_tag2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if (stripos($textmessage, "@") !== false) {
		if ($_username2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

if ($textmessage != null) {
		if ($_chat2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

if (stripos($textmessage, "1") !== false || stripos($textmessage, "2") !== false || stripos($textmessage, "3") !== false || stripos($textmessage, "4") !== false || stripos($textmessage, "5") !== false || stripos($textmessage, "6") !== false || stripos($textmessage, "7") !== false || stripos($textmessage, "8") !== false || stripos($textmessage, "9") !== false || stripos($textmessage, "0") !== false) {
		if ($_num2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

if (stripos($textmessage, "https") !== false || stripos($textmessage, "www") !== false ) {
		if ($_web2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

		if (strpos($filterlist , $textmessage) !== false) {
		if ($from_id !== $admin && $from_id !== $owner && $from_id != $modlist && $whitelist != $from_id) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}
	

	if ($forward != null) {
		if ($_fwd2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if ($game != null) {
		if ($_game2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if ($contact != null) {
		if ($_contact2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if ($photo != null) {
		if ($_photo2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

if ($location != null) {
		if ($_location2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if ($sticker != null) {
		if ($_sticker2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if ($video != null) {
		if ($_video2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if ($voice != null) {
		if ($_voice2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

if ($music != null) {
		if ($_music2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if ($gif != null) {
		if ($_gif2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if ($document != null) {
		if ($_document2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}

	if ($reply != null) {
		if ($_reply2 == "✅" ) {
        				makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
        				]);
			}
}
	
}

if ($textmessage == "/kickme" || $textmessage == "!kickme" || $textmessage == "#kickme") {
makereq('kickChatMember',[
            				'chat_id'=>$update->message->chat->id,
            				'user_id'=>$update->message->from->id
        				]);
}

if ($textmessage == "خارج شو" && $from_id == $admin ) {
makereq('leaveChat',[
	'chat_id'=>$chat_id
	]);
	}

if ( $_lockcmd2 == "❌" || $admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false || $type2 == "private") {

if ($textmessage == "/id" || $textmessage == "id" || $textmessage == "ایدی") {
			if (!file_exists("data/$chat_id/member/".$from_id."3.txt")) {
			save("data/$chat_id/member/".$from_id."3.txt","0");
}
			$ekhtart3 = -1;
				$fp = fopen( "data/$chat_id/member/".$from_id."3.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$ekhtart3 ++;
	}
makereq('sendMessage',[
  'chat_id' => $update->message->chat->id,
  "text" => '<b>-----Your Info-----</b>

👤<b>Name</b> : '.$name.'

🆔<b>UserName</b> : <a href="t.me/'.$username.'">@'.$username.'</a>

🆔<b>ID</b> : '.$from_id.'

<b>-----Group Info-----</b>

👥<b>Group Name</b> : '.$gpname.'

🆔<b>Group ID</b> : '.$chat_id.'

👥<b>Group Type</b> : '.$type2.' 

<b>-----Warn Info-----</b>

👮Warn From Admin 
'.$ekhtart3.'|'.$warnlists.' ',
            	'parse_mode'=>'HTML',
              'reply_to_message_id'=>$update->message->message_id,
            	'disable_web_page_preview'=>true
            	]);
}

if ($textmessage == '/dashboard' || $textmessage == '/dashboard'.$botusername.'') {
if($type2 == "supergroup" || $type2 == "group" ){
 makereq('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تنظیمات گروه در پیوی شما ارسال شد
					اگر تنظیماتو دریافت نکردید اول در ربات استارت کنید",
            	'parse_mode'=>'HTML',
              'reply_to_message_id'=>$update->message->message_id,
            	'disable_web_page_preview'=>true
                
            	]);
			if (!file_exists("data/$chat_id/member/".$from_id."3.txt")) {
			save("data/$chat_id/member/".$from_id."3.txt","0");
}
			$ekhtart3 =-1;
				$fp = fopen( "data/$chat_id/member/".$from_id."3.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$ekhtart3 ++;
	}
var_dump(makereq('sendMessage',[
  'chat_id' => $update->message->from->id,
  "text" => 'SuperGroup/Group Settings and Media

❌ = unlock
 ✅ = lock

Filter List:
'.$filterlist.' 
your warn 
'.$ekhtart3.'|'.$warnlists.' ',
  'parse_mode'=>"Markdown",
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'تنظیمات','callback_data'=>'nolock'],
],
[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_flood2,'callback_data'=>'lock']
],
		[
  ['text'=>'اسپم','callback_data'=>'nolock'],['text'=>$_floods2,'callback_data'=>'lock_floods']
],
[
  ['text'=>'لینک','callback_data'=>'nolock'],['text'=>$_link2,'callback_data'=>'lock']
],
[
  ['text'=>'تگ','callback_data'=>'nolock'],['text'=>$_tag2,'callback_data'=>'lock']
],
[
  ['text'=>'ایدی','callback_data'=>'nolock'],['text'=>$_username2,'callback_data'=>'lock']
],
[
  ['text'=>'شماره','callback_data'=>'nolock'],['text'=>$_num2,'callback_data'=>'lock']
],
[
  ['text'=>'وب','callback_data'=>'nolock'],['text'=>$_web2,'callback_data'=>'lock']
],
[
  ['text'=>'چت','callback_data'=>'nolock'],['text'=>$_chat2,'callback_data'=>'lock']
],
[
  ['text'=>'فروارد','callback_data'=>'nolock'],['text'=>$_fwd2,'callback_data'=>'lock']
],
	[
  ['text'=>'ریپلی','callback_data'=>'nolock'],['text'=>$_reply2,'callback_data'=>'lock']
],
	[
  ['text'=>'ویرایش','callback_data'=>'nolock'],['text'=>$_edit2,'callback_data'=>'lock']
],
[
  ['text'=>'انگلیسی','callback_data'=>'nolock'],['text'=>$_eng2,'callback_data'=>'lock']
],
[
  ['text'=>'عربی','callback_data'=>'nolock'],['text'=>$_arab2,'callback_data'=>'lock']
],
[
  ['text'=>'جوین','callback_data'=>'nolock'],['text'=>$_join2,'callback_data'=>'lock']
],
[
  ['text'=>'ربات','callback_data'=>'nolock'],['text'=>$_bot2,'callback_data'=>'lock']
],
		[
  ['text'=>'اخراج','callback_data'=>'nolock'],['text'=>$_kickme2,'callback_data'=>'lock']
],
[
  ['text'=>'رسانه','callback_data'=>'nolock'],
],
[
  ['text'=>'استیکر','callback_data'=>'nolock'],['text'=>$_sticker2,'callback_data'=>'lock']
],
[
  ['text'=>'عکس','callback_data'=>'nolock'],['text'=>$_photo2,'callback_data'=>'lock']
],
[
  ['text'=>'فیلم','callback_data'=>'nolock'],['text'=>$_video2,'callback_data'=>'lock']
],
	[
  ['text'=>'صدا','callback_data'=>'nolock'],['text'=>$_voice2,'callback_data'=>'lock']
],
	[
  ['text'=>'آهنگ','callback_data'=>'nolock'],['text'=>$_music2,'callback_data'=>'lock']
],
[
  ['text'=>'گیف','callback_data'=>'nolock'],['text'=>$_gif2,'callback_data'=>'lock']
],
[
  ['text'=>'فایل ','callback_data'=>'nolock'],['text'=>$_document2,'callback_data'=>'lock']
],
[
  ['text'=>'موقعیت ','callback_data'=>'nolock'],['text'=>$_location2,'callback_data'=>'lock']
],
[
  ['text'=>'شماره ','callback_data'=>'nolock'],['text'=>$_contact2,'callback_data'=>'lock']
],
[
  ['text'=>'بازی ','callback_data'=>'nolock'],['text'=>$_game2,'callback_data'=>'lock']
],
		[
  ['text'=>'Channel📡','url'=>'https://telegram.me/'.$channel.''],
]
]
			])
		]));
	
	}
}
	

if ($textmessage == "/me" || $textmessage == "!me" || $textmessage == "#me") {
makereq('sendPhoto',[
 'chat_id' => $update->message->chat->id,
 'photo' => $getuserphoto,
 'caption' => '
👤Name : '.$name.'

🆔UserNam : @'.$username.'

🆔ID : '.$from_id.'

🆔Count Your Photo : '.$cuphoto.' ',
              'reply_to_message_id'=>$update->message->message_id,
            	]);
}	
	

if ($textmessage == "/mywarn" || $textmessage == "!mywarn" || $textmessage == "#mywarn") {
			if (!file_exists("data/$chat_id/member/".$from_id."3.txt")) {
			save("data/$chat_id/member/".$from_id."3.txt","0");
}
			$ekhtart3 = -1;
				$fp = fopen( "data/$chat_id/member/".$from_id."3.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$ekhtart3 ++;
	}
makereq('sendMessage',[
  'chat_id' => $update->message->chat->id,
  "text" => '<b>-----Your Warn-----</b>
'.$ekhtart3.'|'.$warnlists.' ',
            	'parse_mode'=>'HTML',
              'reply_to_message_id'=>$update->message->message_id,
            	'disable_web_page_preview'=>true
            	]);
}
	
	if(preg_match('/^\/([Ll]ocation) (.*)/s',$textmessage)){
	preg_match('/^\/([Ll]ocation) (.*)/s',$textmessage,$match);
	$location = json_decode(file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=".$match[2]));
	makereq('sendLocation',[
    'chat_id'=>$chat_id,
    'latitude'=>$location->results[0]->geometry->location->lat,
	'longitude'=>$location->results[0]->geometry->location->lng
  ]);
  }
	
  if(preg_match('/^\/(calc) (.*)/s',$textmessage)){
    preg_match('/^\/(calc) (.*)/s',$textmessage,$mtch);
    $txt = urlencode($mtch[2]);
    $rs = file_get_contents('http://api.mathjs.org/v1/?expr='.$txt);
    makereq('sendMessage',array(
      'chat_id'=>$chat_id,
      'text'=>"<code>".$rs."</code>",
      'parse_mode'=>'HTML'
    ));
  }
	

	 if(preg_match('/^\/([t]ranslate) (.*)/s',$textmessage)){
    preg_match('/^\/([t]ranslate) (.*)/s',$textmessage,$mtch);
    $txt = urlencode($mtch[2]);
    $rs = json_decode(file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fa&text='.$txt));
    makereq('sendMessage',array(
      'chat_id'=>$chat_id,
      'text'=>"".$rs->text[0],
      'reply_to_message_id'=>$message_id
    ));
  }

	if ( strpos($textmessage , '/echo ') !== false  ) {
$text = str_replace("/echo ","",$textmessage);
makereq('sendMessage',[
  'chat_id' => $update->message->chat->id,
  "text" => "$text",
              'reply_to_message_id'=>$update->message->message_id,
            	'disable_web_page_preview'=>true
            	]);
}

	if ( strpos($textmessage , '/getpro ') !== false  ) {
$text = str_replace("/getpro ","",$textmessage);
makereq('sendPhoto',[
 'chat_id' => $update->message->chat->id,
 'photo' =>$getuserprofile->photos[$text-1][0]->file_id,
 'caption' => '
👤Your Number Photo: '.$text.'

🆔Count Your Photo : '.$cuphoto.' ',
              'reply_to_message_id'=>$update->message->message_id,
            	]);
}	
	
}

if ($textmessage == '/start' && $type2 == "private" ) {
		$userlist = file_get_contents("users.txt");
	 if (strpos($userlist , "$from_id") == false){
 $txxt = file_get_contents('users.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($from_id,$pmembersid)){
      $aaddd = file_get_contents('users.txt');
      $aaddd .= $from_id."\n";
  file_put_contents('users.txt',$aaddd);
    }
	}
var_dump(makereq('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"سلام $name ✋️

به ربات ضد اسپم رایگان $botname خوش امدی😄
امکاناتی بی نظیر در رباتی بدون افی! رایگان و با سرعت بی نظیر!🌐
شما هم می توانید با استفاده از دکمه اضافه کردن ربات در گروه ، گروه خود را با ضد اسپم api ما امن کنید!♻️
✅با امکانات بی نظیری به پیشرو شما امدیم!

از دکمه های زیر استفاده کن تا با هم بیشتر اشناشیم❤️",
              'reply_markup' =>json_encode([
              'inline_keyboard'=>[
[
  ['text'=>'عضویت در کانال و اخبار ها📡','url'=>'https://telegram.me/'.$channel.''],['text'=>'بردن ربات در گروه👤','url'=>'https://telegram.me/'.$botusername2.'?startgroup=new'],
],
[
  ['text'=>'دستورات ربات📕','callback_data'=>'helpcm'],
],
[
  ['text'=>'📓آموزش نصب ربات','callback_data'=>'nasb'],
]
	]
	])
    		]));
}

    if($data == "startpv" ){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
        	'text'=>"سلام $name2 ✋️

به ربات ضد اسپم رایگان $botname خوش امدی😄
امکاناتی بی نظیر در رباتی بدون افی! رایگان و با سرعت بی نظیر!🌐
شما هم می توانید با استفاده از دکمه اضافه کردن ربات در گروه ، گروه خود را با ضد اسپم api ما امن کنید!♻️
✅با امکانات بی نظیری به پیشرو شما امدیم!

از دکمه های زیر استفاده کن تا با هم بیشتر اشناشیم❤️",
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'عضویت در کانال و اخبار ها📡','url'=>'https://telegram.me/'.$channel.''],['text'=>'بردن ربات در گروه👤','url'=>'https://telegram.me/'.$botusername2.'?startgroup=new'],
],
[
  ['text'=>'دستورات ربات📕','callback_data'=>'helpcm'],
],
[
  ['text'=>'📓آموزش نصب ربات','callback_data'=>'nasb'],
]
	]
			])
		]));
			}
	
    if($data == "helpcm" ){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => "	I دستورات ربات $botname👾
⚡️ راهنمای مدیریتی ربات کاملا رایگان ربات تیم ناجی :
ا-----------
╣ پیکربندی ╠
😎 ارتقا تمامی ادمین ها به مدیر گروه 
-----------ا
╣ مدیر ╠
😎 ارتقا مقام کاربر به مدیر گروه
ا-----------
╣ حذف مدیر ╠
😎 تنزیل مقام مدیر به کاربر
-----------ا
╣ حداکثر پیام مکرر 8 ╠
😎 تنظیم حداکثر تعداد پیام مکرر
ا-----------
╣ حداکثر زمان مکرر 4 ╠
😎 تنظیم زمان ارسال پیام مکرر برحسب ثانیه
-----------ا
╣ تنظیم پیام مکرر سکوت ╠
😎 درصورتی قفل ارسال پیام مکرر با این دستور قفل شود شخص ارسال کننده در حالت سکوت قرار میگیرد
╣ تنظیم پیام مکرر بن ╠
در این صورت شخص به کلی از گروه مسدود میشود
╣ تنظیم پیام مکرر اخراج ╠
و در این صورت شخص فقط از گروه اخراج میشود
ا-----------
╣ سکوت ╠
😎 بیصدا کردن کاربر در گروه
-----------ا
╣ حذف سکوت ╠
😎 در آوردن کاربر از حالت بیصدا در گروه
ا-----------
╣ اخراج ╠
😎 حذف کاربر از گروه
-----------ا
╣ بن ╠
😎 مسدود کردن کاربر از گروه
ا-----------
╣ حذف بن ╠
😎 در آوردن از حالت مسدودیت کاربر از گروه
-----------ا
╣ شناسه ╠
😎 نمایش اطلاعات کاربر
ا-----------
╣ بیصدا 
  لینک | فروارد | یوزرنیم | تگ | کیبورد شیشه ای | خدمات تلگرام | فارسی | انگلیسی | سنجاق | ربات | ایموجی | دستورات | فیلم سلفی | ورود | فحش | عکس | فیلم | ویس | گیف | موزیک | فایل | ریپلی | متن | مخاطب | استیکر | بازی   ╠
😎 در صورت بیصدا بودن فعالیت ها, ربات آنها را حذف خواهد کرد
-----------ا
╣ باصدا 
 لینک | فروارد | یوزرنیم | تگ | کیبورد شیشه ای | خدمات تلگرام | فارسی | انگلیسی | سنجاق | ربات | ایموجی | دستورات | فیلم سلفی | ورود | فحش | عکس | فیلم | ویس | گیف | موزیک | فایل | ریپلی | متن | مخاطب | استیکر | بازی   ╠
😎 در صورت باصدا نبودن فعالیت ها, ربات آنهارا حذف نخواهد کرد
ا-----------
╣ حداکثر اخطار 3 ╠
😎 تنظیم تعداد اخطار 
╣ تنظیم اخطار اخراج ╠
╣ تنظیم اخطار بن ╠
╣ تنظیم اخطار سکوت ╠
😎 تنظیم حالت اخطار 
╣ اخطار ╠
😎 اخطار دادن به کاربر
╣ حذف اخطار ╠
😎 حذف اخطار 
-----------ا
╣ بیصدا گروه ╠
😎 گروه ساکت خواهد شد 
ا-----------
╣ باصدا گروه ╠
😎 سکوت گروه برداشته خواهد شد
-----------ا
╣ تنظیم قوانین ╠
|قوانین گروه را ثبت میکند مثال :
تنظیم قوانین بی ادبی ریمو خواهد شد
ا-----------
╣ تنظیم لینک ╠
| لینک گروه ثبت خواهد شد
مثال : تنظیم لینک https://...
------------ا
╣ تنظیم خوشامد ╠
| متن خوشامد را ثبت میکند
مثال : تنظیم خوشامد {name} کاربر عزیز به گروه خوشامدید
-----------ا
╣ پاک کردن   لیست بن |  لیست سکوت |  لیست مدیران |  لیست سیاه |  لیست فیلتر | لینک |  قوانین |  خوشامد    ╠
😎 ربات آنهارا پاک خواهد کرد
ا-----------
╣ حذف کاربران پاک شده  ╠
😎پاک کردن تمامی دلیت اکانتی های گروه.
-----------ا
╣ فیلتر ╠
😎 فیلتر ‌کلمه مورد نظر
ا-----------
╣ حذف فیلتر ╠
😎 حذف فیلتر ‌کلمه مورد نظر
-----------ا
╣ سنجاق ╠
😎 ربات پیام شمارا در گروه سنجاق خواهد کرد
ا-----------
╣ خوشامد فعال/غیرفعال ╠
😎 فعال یا غیرفعال کردن خوشامد گویی
-----------ا
╣ تنظیمات ╠
😎 نمایش تنظیمات گروه
ا-----------
╣ لیست سکوت ╠
😎 نمایش فهرست بیصدا های گروه
-----------ا
╣ لیست فیلتر ╠
😎 نمایش لیست کلمات فیلتر شده
ا-----------
╣ لیست بن ╠
😎 نمایش افراد مسدود شده از گروه
-----------ا
╣ لیست مالکین ╠
😎 نمایش فهرست مالکان گروه
ا-----------
╣ لیست مدیران ╠
😎 نمایش فهرست مدیران گروه
-----------ا
╣ قوانین ╠
😎 نمایش قوانین گروه
ا-----------
╣ ایدی ╠
😎 نمایش شناسه شما و گروه
-----------ا
╣ لینک ╠
😎 نمایش لینک گروه
ا-----------
╣ انلاین ╠
😎 دستوری برای مطلع شدن از وضعیت آنلاین بودن ربات
ا-----------
╣ اطلاعات من ╠
😎 دستوری برای دریافت اطلاعات خود 
-----------ا deleted to FilterList",
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'برگشت📕','callback_data'=>'startpv'],
]
]
			])
		]));
			}


   if($data == "nasb" ){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'روی دکمه زیر بزنید و گروه خود را انتخاب کنید',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'بردن ربات در گروه👤','url'=>'https://telegram.me/'.$botusername2.'?startgroup=new'],
],
[
  ['text'=>'📓بعدی','callback_data'=>'nasb1'],
]
]
			])
		]));
			}

   if($data == "nasb1" ){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'نوع گوشی خود را انتخاب کنید',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'IOS📱','callback_data'=>'nasbios'],['text'=>'Android📱','callback_data'=>'nasbandroid'],
],
[
  ['text'=>'📓بازگشت','callback_data'=>'nasb'],
]
]
			])
		]));
			}

   if($data == "nasbandroid" ){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'وارد گروه شوید
	به قسمت تنظیمات گروه بروید
	بعد روی سه نقطه بالا سمت چپ کلیک کنید
	بعد Edit رو بزنید
	بعد روی Administratirs
	بعد روی Add Administratirs
	کلیک کنید و ایدی ربات یعنی '.$botusername.' 
	را سرچ کنید و ادمین کنید
	فیلم آموزشی
	https://telegram.me',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'IOS📱','callback_data'=>'nasbios'],
],
[
  ['text'=>'📓بعدی','callback_data'=>'nasb3'],
]
]
			])
		]));
			}

   if($data == "nasbios" ){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'وارد گروه شوید
	به قسمت Group Info بروید
	بعد Edit رو بزنید
	بعد روی Admins
	بعد روی Add Admin
	کلیک کنید و ایدی ربات یعنی '.$botusername.' 
	را سرچ کنید و ادمین کنید
		فیلم آموزشی
	https://telegram.me',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'Android📱','callback_data'=>'nasbandroid'],
],
[
  ['text'=>'📓بعدی','callback_data'=>'nasb3'],
]
]
			])
		]));
			}

   if($data == "nasb3" ){
var_dump(makereq('editMessageText',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2,
  "text" => 'حال در گروه /settings را بفرستید و تنظیمات گروه را تغییر دهید',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
[
  ['text'=>'📓پایان','callback_data'=>'startpv'],
]
]
			])
		]));
			}


if ($textmessage == 'ping' || $textmessage == 'انلاین') {
		if ($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false){
makereq('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"*Online*  😎",
            	'parse_mode'=>'MarkDown',
              'reply_to_message_id'=>$update->message->message_id,
              'reply_markup' =>json_encode([
              'inline_keyboard'=>[
[
  ['text'=>'Join to Channel','url'=>'https://telegram.me/'.$channel.''],
]
	]
	])
	]);
}
}

if ($textmessage == '/help' || $textmessage == 'راهنما' || $textmessage == 'کمک' || $textmessage == 'help'.$botusername.'') {
if($type2 == "supergroup" || $type2 == "group"){
if($admin == $from_id || $owner == $from_id || strpos($modlist , "$from_id") !== false){
makereq('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>'	دستورات ربات ZUS
ا-----------
⚡️ راهنمای مدیریتی ربات کاملا رایگان 
ا-----------
╣ ادمین ╠
😎 ارتقا تمامی ادمین ها به مدیر گروه 
-----------ا
╣ مدیر ╠
😎 ارتقا مقام کاربر به مدیر گروه
ا-----------
╣ حذف مدیر ╠
😎 تنزیل مقام مدیر به کاربر
-----------ا
╣ حداکثر پیام مکرر 8 ╠
😎 تنظیم حداکثر تعداد پیام مکرر
ا-----------
╣ حداکثر زمان مکرر 4 ╠
😎 تنظیم زمان ارسال پیام مکرر برحسب ثانیه
-----------ا
╣ تنظیم پیام مکرر سکوت ╠
😎 درصورتی قفل ارسال پیام مکرر با این دستور قفل شود شخص ارسال کننده در حالت سکوت قرار میگیرد
╣ تنظیم پیام مکرر بن ╠
در این صورت شخص به کلی از گروه مسدود میشود
╣ تنظیم پیام مکرر اخراج ╠
و در این صورت شخص فقط از گروه اخراج میشود
ا-----------
╣ سکوت ╠
😎 بیصدا کردن کاربر در گروه
-----------ا
╣ حذف سکوت ╠
😎 در آوردن کاربر از حالت بیصدا در گروه
ا-----------
╣ مسدود ╠
😎 حذف کاربر از گروه
-----------ا
╣ بن ╠
😎 مسدود کردن کاربر از گروه
ا-----------
╣ حذف بن ╠
😎 در آوردن از حالت مسدودیت کاربر از گروه
-----------ا
╣ شناسه ╠
😎 نمایش اطلاعات کاربر
ا-----------
╣ قفل 
  لینک | فروارد | یوزرنیم | تگ | کیبورد شیشه ای | خدمات تلگرام | فارسی | انگلیسی | سنجاق | ربات | ایموجی | دستورات | فیلم سلفی | ورود | فحش | عکس | فیلم | ویس | گیف | موزیک | فایل | ریپلی | متن | مخاطب | استیکر | بازی   ╠
😎 در صورت قفل بودن فعالیت ها, ربات آنها را حذف خواهد کرد
-----------ا
╣ بازکردن 
 لینک | فروارد | یوزرنیم | تگ | کیبورد شیشه ای | خدمات تلگرام | فارسی | انگلیسی | سنجاق | ربات | ایموجی | دستورات | فیلم سلفی | ورود | فحش | عکس | فیلم | ویس | گیف | موزیک | فایل | ریپلی | متن | مخاطب | استیکر | بازی   ╠
😎 در صورت قفل نبودن فعالیت ها, ربات آنهارا حذف نخواهد کرد
ا-----------
╣ حداکثر اخطار 3 ╠
😎 تنظیم تعداد اخطار 
╣ تنظیم اخطار اخراج ╠
╣ تنظیم اخطار بن ╠
╣ تنظیم اخطار سکوت ╠
😎 تنظیم حالت اخطار 
╣ اخطار ╠
😎 اخطار دادن به کاربر
╣ حذف اخطار ╠
😎 حذف اخطار 
-----------ا
╣ قفل╠
😎 گروه ساکت خواهد شد 
ا-----------
╣ بازکردن╠
😎 سکوت گروه برداشته خواهد شد
-----------ا
╣ تنظیم قوانین ╠
|قوانین گروه را ثبت میکند مثال :
تنظیم قوانین بی ادبی ریمو خواهد شد
ا-----------
╣ تنظیم لینک،setlink ╠
| لینک گروه ثبت خواهد شد
مثال : تنظیم لینک https://...
------------ا
╣ تنظیم خوشامد ╠
| متن خوشامد را ثبت میکند
مثال : تنظیم خوشامد {name} کاربر عزیز به گروه خوشامدید
-----------ا
╣ پاک کردن
   لیست بن |  لیست سکوت |  لیست مدیران |  لیست سیاه |  لیست فیلتر | لینک |  قوانین |  خوشامد    ╠
😎 ربات آنهارا پاک خواهد کرد
-----------ا
╣ فیلتر ╠
😎 فیلتر ‌کلمه مورد نظر
ا-----------
╣ حذف فیلتر ╠
😎 حذف فیلتر ‌کلمه مورد نظر
-----------ا
╣ سنجاق ╠
😎 ربات پیام شمارا در گروه سنجاق خواهد کرد
ا-----------
╣ خوشامد فعال/غیرفعال ╠
😎 فعال یا غیرفعال کردن خوشامد گویی
-----------ا
╣ تنظیمات ╠
😎 نمایش تنظیمات گروه
ا-----------
╣ لیست سکوت ╠
😎 نمایش فهرست بیصدا های گروه
-----------ا
╣ لیست فیلتر ╠
😎 نمایش لیست کلمات فیلتر شده
ا-----------
╣ لیست بن ╠
😎 نمایش افراد مسدود شده از گروه
-----------ا
╣ لیست مالکین ╠
😎 نمایش فهرست مالکان گروه
ا-----------
╣ لیست مدیران ╠
😎 نمایش فهرست مدیران گروه
-----------ا
╣ قوانین ╠
😎 نمایش قوانین گروه
ا-----------
╣ ایدی ╠
😎 نمایش شناسه شما و گروه
-----------ا
╣ لینک ╠
😎 نمایش لینک گروه
ا-----------
╣ انلاین ╠
😎 دستوری برای مطلع شدن از وضعیت آنلاین بودن ربات
ا-----------
╣  من ╠
😎 دستوری برای دریافت اطلاعات خود
					',
		'parse_mode'=>'MarkDown',
    		]);
}
}
}

if ($textmessage == '/gpcreator' || $textmessage == '!gpcreator' || $textmessage == '#gpcreator') {
if($type2 == "supergroup" || $type2 == "group"){
makereq('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>'Group Creator: 
Name: '.$creator['first_name'].' 
ID: '.$creator['id'].'
',
		'parse_mode'=>'MarkDown',
    		]);
}
}


if (strpos($textmessage , "/setrules " ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
$text = str_replace("/setrules ","",$textmessage);
save("data/$chat_id/rules.txt","$text");
SendMessage($chat_id,"قوانین گروه ست شد");
}
}

if ( strpos($textmessage , "setrules " ) !== false )  {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
$text = str_replace("!setrules ","",$textmessage);
save("data/$chat_id/rules.txt","$text");
SendMessage($chat_id,"قوانین گروه ست شد");
}
}

if ( strpos($textmessage , "تنظیم قوانین " ) !== false )  {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
$text = str_replace("#setrules ","",$textmessage);
save("data/$chat_id/rules.txt","$text");
SendMessage($chat_id,"قوانین گروه ست شد");
}
}

if ($textmessage == "/rules" || $textmessage == "!rules" || $textmessage == "#rules") {
	$gprules = file_get_contents("data/$chat_id/rules.txt");
SendMessage($chat_id,"Group Rules:
$gprules");
}

if ($textmessage == "modlist" || $textmessage == "لیست سفید" || $textmessage == "#modlist") {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
SendMessage($chat_id,"Modlist:\n$modlist");
}
}
if ($textmessage == "/owner" || $textmessage == "owner" || $textmessage == "مالک") {
SendMessage($chat_id,"Owner:\n$owner");
}

if (strpos($textmessage , "/setwarn " ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false && $_warn == "❌") {
$text = str_replace("/setwarn ","",$textmessage);
	if ($text >= 1 && $text <= 9) {
save("data/$chat_id/settings/warnlists.txt","$text");
SendMessage($chat_id,"تعدار خطاهای کاربر اپدیت شد");
}
	if ($text <= 0 && $text <= 10) {
SendMessage($chat_id,"تعدار خطاها باید بین ۱ تا ۹ باشد");
}
}
 }

if (strpos($textmessage , "setwarn " ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false && $_warn == "❌") {
$text = str_replace("!setwarn ","",$textmessage);
	if ($text >= 1 && $text <= 9) {
save("data/$chat_id/settings/warnlists.txt","$text");
SendMessage($chat_id,"تعدار خطاهای کاربر اپدیت شد");
}
	if ($text <= 0 && $text <= 10) {
SendMessage($chat_id,"تعدار خطاها باید بین ۱ تا ۹ باشد");
}
}
 }

if (strpos($textmessage , "تنظیم اخطار " ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false && $_warn == "❌") {
$text = str_replace("#setwarn ","",$textmessage);
	if ($text >= 1 && $text <= 9) {
save("data/$chat_id/settings/warnlists.txt","$text");
SendMessage($chat_id,"تعدار خطاهای کاربر اپدیت شد");
}
	if ($text <= 0 && $text <= 10) {
SendMessage($chat_id,"تعدار خطاها باید بین ۱ تا ۹ باشد");
}
}
 }

if (strpos($textmessage , "/setflood " ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false && $_settings == "❌") {
$text = str_replace("/setflood ","",$textmessage);
	if ($text >= 3 && $text <= 15) {
save("data/$chat_id/settings/floods.txt","$text");
SendMessage($chat_id,"تعدار سیل اپدیت شد");
}
	if ($text <= 2 && $text <= 16) {
SendMessage($chat_id,"تعدار سیل باید بین 3 تا 15 باشد");
}
}
 }

if (strpos($textmessage , "setflood " ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false && $_settings == "❌") {
$text = str_replace("!setflood ","",$textmessage);
	if ($text >= 3 && $text <= 15) {
save("data/$chat_id/settings/floods.txt","$text");
SendMessage($chat_id,"تعدار سیل اپدیت شد");
}
	if ($text <= 2 && $text <= 16) {
SendMessage($chat_id,"تعدار سیل باید بین 3 تا 15 باشد");
}
}
 }

if (strpos($textmessage , "تنظیم اسپم " ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false && $_settings == "❌") {
$text = str_replace("#setflood ","",$textmessage);
	if ($text >= 3 && $text <= 15) {
save("data/$chat_id/settings/floods.txt","$text");
SendMessage($chat_id,"تعدار سیل اپدیت شد");
}
	if ($text <= 2 && $text <= 16) {
SendMessage($chat_id,"تعدار سیل باید بین 3 تا 15 باشد");
}
}
 }


if (strpos($textmessage , " تنظیم لینک " ) !== false ) {
if ($from_id == $admin || $from_id == $owner ) {
$text = str_replace(" setlink ","",$textmessage);
save("data/$chat_id/gplink.txt","$text");
SendMessage($chat_id,"لینک گروه ست شد");
}
}

if (strpos($textmessage , "/setlink " ) !== false ) {
if ($from_id == $admin || $from_id == $owner ) {
$text = str_replace("!setlink ","",$textmessage);
save("data/$chat_id/gplink.txt","$text");
SendMessage($chat_id,"لینک گروه ست شد");
}
}

if (strpos($textmessage , "setlink " ) !== false ) {
if ($from_id == $admin || $from_id == $owner ) {
$text = str_replace("#setlink ","",$textmessage);
save("data/$chat_id/gplink.txt","$text");
SendMessage($chat_id,"لینک گروه ست شد");
}
}

if (strpos($textmessage , "/setwlc " ) !== false ) {
if ($from_id == $admin || $from_id == $owner ) {
$text = str_replace("/setwlc ","",$textmessage);
save("data/$chat_id/gpwlc.txt","$text");
SendMessage($chat_id,"متن خوش آمد گویی تغییر پیدا کرد به
$text
برای حذف کردن دستور /delwlc را بفرستید");
}
}

if (strpos($textmessage , "setwlc " ) !== false ) {
if ($from_id == $admin || $from_id == $owner ) {
$text = str_replace("!setwlc ","",$textmessage);
save("data/$chat_id/gpwlc.txt","$text");
SendMessage($chat_id,"متن خوش آمد گویی تغییر پیدا کرد به
$text
برای حذف کردن دستور /delwlc را بفرستید");
}
}

if (strpos($textmessage , "تنظیم خوشامد " ) !== false ) {
if ($from_id == $admin || $from_id == $owner ) {
$text = str_replace("#setwlc ","",$textmessage);
save("data/$chat_id/gpwlc.txt","$text");
SendMessage($chat_id,"متن خوش آمد گویی تغییر پیدا کرد به
$text
برای حذف کردن دستور /delwlc را بفرستید");
}
}

if($textmessage=="/delwlc" || $textmessage=="!delwlc" || $textmessage=="#delwlc"  ){
if ($from_id == $admin || $from_id == $owner ) {
save("data/$chat_id/gpwlc.txt","");
makereq('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"با موفقیت پیغام خوش آمد گویی حذف شد",
'reply_to_message_id'=>$update->message->message_id,
]);
}
}

if (strpos($textmessage , "setbye " ) !== false ) {
if ($from_id == $admin || $from_id == $owner ) {
$text = str_replace("/setbye ","",$textmessage);
save("data/$chat_id/gpbye.txt","$text");
SendMessage($chat_id,"متن خداحافظی تغییر پیدا کرد به
$text
برای حذف کردن دستور /delbye را بفرستید");
}
}

if (strpos($textmessage , "حذف خوشامد " ) !== false ) {
if ($from_id == $admin || $from_id == $owner ) {
$text = str_replace("!setbye ","",$textmessage);
save("data/$chat_id/gpbye.txt","$text");
SendMessage($chat_id,"متن خداحافظی تغییر پیدا کرد به
$text
برای حذف کردن دستور /delbye را بفرستید");
}
}

if (strpos($textmessage , "setbye " ) !== false ) {
if ($from_id == $admin || $from_id == $owner ) {
$text = str_replace("#setbye ","",$textmessage);
save("data/$chat_id/gpbye.txt","$text");
SendMessage($chat_id,"متن خداحافظی تغییر پیدا کرد به
$text
برای حذف کردن دستور /delbye را بفرستید");
}
}

if($textmessage=="/delbye" || $textmessage=="!delbye" || $textmessage=="#delbye"  ){
if ($from_id == $admin || $from_id == $owner ) {
save("data/$chat_id/gpbye.txt","");
makereq('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"با موفقیت پیغام خداحافظی حذف شد",
'reply_to_message_id'=>$update->message->message_id,
]);
}
}

if($textmessage=="/link" || $textmessage=="link" || $textmessage=="لینک"  ){
	$gplink = file_get_contents("data/$chat_id/gplink.txt");
makereq('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Group Link
$gplink",
       	'parse_mode'=>'HTML',
       	'reply_to_message_id'=>$update->message->message_id,
       	'disable_web_page_preview'=>true
]);
}
if (strpos($textmessage , "نظر ") !== false) {
$text = str_replace("/feedback ","",$textmessage);
SendMessage($chat_id,"نظر شما ارسال شد");
makereq('sendmessage',[
'chat_id'=>$admin,
'text'=>"FeedBack: $text",
       	'parse_mode'=>'HTML',
]);
makereq('sendmessage',[
'chat_id'=>$admin,
'text'=>"name: $name
username: @$username
from id: $from_id",
       	'parse_mode'=>'HTML',
]);
}


		if ( strpos($textmessage , 'بن') !==false ) {
						if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false  && $_ban2 == "❌"){
			$text = str_replace("/ban ","",$textmessage);
									if ($text != $admin && $text != $owner && $text != $modlist ){
			makereq('kickChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text
        		]);
			$myfile2 = fopen("data/$chat_id/banlist/list.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$text\n");
			fclose($myfile2);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'
								کاربر با موفقیت از گروه بن شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
		}
		}

		if ( strpos($textmessage , 'مسدود') !== false ) {
    		if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false  && $_kick2 == "❌" ){
			$text = str_replace("/kick ","",$textmessage);
									if ($text != $admin && $text != "@" && $text != $owner && $text != $modlist ){
					makereq('kickChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text
        		]);
			makereq('unbanChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text
        		]);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'
								کاربر با موفقیت از گروه اخراج شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
									if ($text != $admin && strpos($text , "@") !== false && $text != $owner && $text != $modlist ){
					makereq('kickChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text->id
        		]);
			makereq('unbanChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text->id
        		]);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'
								کاربر با موفقیت از گروه اخراج شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
}
	}
				if ( strpos($textmessage , 'unban') !== false  ) {
		if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false  && $_unban2 == "❌"){
					$text = str_replace("/unban ","",$textmessage);
							if ($text != $admin && $text != $owner && $text != $modlist ){
								makereq('unbanChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$text
        		]);
					$newlist = str_replace("$text\n","",$banlist);
			save("data/$chat_id/banlist/list.txt",$newlist);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'
								کاربر با موفقیت ان بن شد',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        	]);
		}
	}
}

if (strpos($textmessage , "/addfilter" ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
$text = str_replace("/addfilter ","",$textmessage);
$myfile2 = fopen("data/$chat_id/settings/filterword.txt", 'a') or die("Unable to open file!");	
fwrite($myfile2, "$text \n");
fclose($myfile2);
SendMessage($chat_id,"$text added to FilterList");
}
}

if (strpos($textmessage , "addfilter" ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
$text = str_replace("!addfilter ","",$textmessage);
$myfile2 = fopen("data/$chat_id/settings/filterword.txt", 'a') or die("Unable to open file!");	
fwrite($myfile2, "$text \n");
fclose($myfile2);
SendMessage($chat_id,"$text added to FilterList");
}
}

if (strpos($textmessage , "فیلتر" ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
$text = str_replace("#addfilter ","",$textmessage);
$myfile2 = fopen("data/$chat_id/settings/filterword.txt", 'a') or die("Unable to open file!");	
fwrite($myfile2, "$text \n");
fclose($myfile2);
SendMessage($chat_id,"$text added to FilterList");
}
}

if (strpos($textmessage , "/delfilter" ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
$text = str_replace("/delfilter ","",$textmessage);
			$newlist = str_replace("$text\n","",$filterlist);
			save("data/$chat_id/settings/filterword.txt",$newlist);
SendMessage($chat_id,"$text deleted to FilterList");
}
}

if (strpos($textmessage , "delfilter" ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
$text = str_replace("!delfilter ","",$textmessage);
			$newlist = str_replace("$text\n","",$filterlist);
			save("data/$chat_id/settings/filterword.txt",$newlist);
SendMessage($chat_id,"$text deleted to FilterList");
}
}

if (strpos($textmessage , "حذف فیلتر" ) !== false ) {
if ($from_id == $admin || $from_id == $owner || strpos($modlist , "$from_id") !== false) {
$text = str_replace("#delfilter ","",$textmessage);
			$newlist = str_replace("$text\n","",$filterlist);
			save("data/$chat_id/settings/filterword.txt",$newlist);
SendMessage($chat_id,"$text deleted to FilterList");
}
}

if($textmessage=="لیست فیلتر" ){
makereq('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"FilterList:
$filterlist",
       	'parse_mode'=>'HTML',
       	'reply_to_message_id'=>$update->message->message_id,
       	'disable_web_page_preview'=>true
]);
}
	
	if ($reply != null && $from_id == $admin || $reply != null && $from_id == $owner) {
		if ($textmessage == '/del' || $textmessage == 'del' || $textmessage == 'پاک' ) {
			makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->reply_to_message->message_id
				        		]);
			makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
				        		]);
				}
		if ($textmessage == '/ban' || $textmessage == 'ban' || $textmessage == 'بن' ) {
									if ($reply != $admin && $reply != $owner && $reply != $modlist ){
			makereq('kickChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$reply
        		]);
			$myfile2 = fopen("data/$chat_id/banlist/list.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$reply\n");
			fclose($myfile2);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								کاربر با موفقیت از گروه بن شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
		}
				if ($textmessage == '/kick' || $textmessage == 'kick' || $textmessage == 'اخراج') {
						if ($reply != $admin && $reply != $owner && $reply != $modlist ){
					makereq('kickChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$reply
        		]);
			makereq('unbanChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$reply
        		]);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								کاربر با موفقیت از گروه اخراج شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
				}
				if ($textmessage == '/unban' || $textmessage == 'unban' || $textmessage == 'حذف بن') {
											if ($reply != $admin && $reply != $owner && $reply != $modlist ){
								makereq('unbanChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$reply
        		]);
					$newlist = str_replace("$reply\n","",$banlist);
			save("data/$chat_id/banlist/list.txt",$newlist);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								کاربر با موفقیت ان بن شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        	]);
		}
	}
			if ($textmessage == '/promote' || $textmessage == 'promote' || $textmessage == 'ادمین') {
			$myfile2 = fopen("data/$chat_id/modlist.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$reply\n");
			fclose($myfile2);
									if( $replyusername != "" ){
			SendMessage2($chat_id,"@$replyusername has been	Promoted!");
			}else{
			SendMessage($chat_id,"*$reply has been	Promoted!*");
		}
	}
				if ($textmessage == '/setowner' || $textmessage == 'setowner' || $textmessage == 'مدیر') {
			save("data/$chat_id/owner.txt", "$reply");
			SendMessage($chat_id,"*$reply has been Ownerd!*");
		}
		if ($textmessage == '/demote' || $textmessage == '!demote' || $textmessage == '#demote') {
			$newlist = str_replace("$reply\n","",$modlist);
			save("data/$chat_id/modlist.txt",$newlist);
								if( $replyusername != "" ){
			SendMessage2($chat_id,"@$replyusername has been demoted!");
			}else{
			SendMessage($chat_id,"*$reply has been demoted!*");
		}
		}
						if ($textmessage == '/mut' || $textmessage == 'mut' || $textmessage == 'سکوت') {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
			$myfile2 = fopen("data/$chat_id/muteuserlist.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$reply\n");
			fclose($myfile2);
					if( $replyusername != "" ){
					makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' با موفقیت به حالت سکوت رفت ',
            		'disable_web_page_preview'=>true
        		]);
		}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								'.$reply.' با موفقیت به حالت سکوت رفت ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
		}
				}
						if ($textmessage == '/unmut' || $textmessage == 'unmut' || $textmessage == 'حذف سکوت') {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
	$muteuserlist == str_replace("data/$chat_id/muteuserlist.txt");
$newlist = str_replace("$reply\n","",$muteuserlist);
save("data/$chat_id/muteuserlist.txt",$newlist);
								if( $replyusername != "" ){
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' با موفقیت از حالت سکوت خارج شد',
            		'disable_web_page_preview'=>true
        		]);
			}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								'.$reply.' با موفقیت از حالت سکوت خارج شد',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
}
		}
					if ($textmessage == '/warn' || $textmessage == 'warn' || $textmessage == 'اخطار') {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
												if (!file_exists("data/$chat_id/member/".$reply."3.txt")) {
			save("data/$chat_id/member/".$reply."3.txt","");
}
			$ekhtart =0;
				$fp = fopen( "data/$chat_id/member/".$reply."3.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$ekhtart ++;
	}
	fclose( $fp);
			$myfile2 = fopen("data/$chat_id/member/".$reply."3.txt",'a') or die("Unable to open file!");	
fwrite($myfile2, "$ekhtart\n");
fclose($myfile2);
					if( $replyusername != "" ){
					makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' با موفقیت اخطار گرفت ',
            		'disable_web_page_preview'=>true
        		]);
		}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								'.$reply.' با موفقیت اخطار گرفت ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
		}
				}
						if ($textmessage == '/unwarn' || $textmessage == 'unwarn' || $textmessage == 'حذف اخطار') {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
												if (!file_exists("data/$chat_id/member/".$reply."3.txt")) {
			save("data/$chat_id/member/".$reply."3.txt","0");
}
			$ekhtart =-1;
				$fp = fopen( "data/$chat_id/member/".$reply."3.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$ekhtart ++;
	}
	fclose( $fp);
if ($ekhtart >= 1) {
	$ekhtarlist == str_replace("data/$chat_id/member/".$reply."3.txt");
$newlist = str_replace("$ekhtart\n","",$ekhtarlist);
save("data/$chat_id/member/".$reply."3.txt",$newlist);
								if( $replyusername != "" ){
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' با موفقیت اخطار حذف شد ',
            		'disable_web_page_preview'=>true
        		]);
			}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								'.$reply.' با موفقیت اخطار حذف شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
}
	if ($ekhtart == 0) {
	if( $replyusername != "" ){
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' هیچ اخطاری ندارد ',
            		'disable_web_page_preview'=>true
        		]);
			}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#خطا
								'.$reply.' هیچ اخطاری ندارد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
								}
				}
			}
						if ($textmessage == '/setwhitelist' || $textmessage == 'setwhitelist' || $textmessage == 'لیست سفید') {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
													if (!file_exists("data/$chat_id/whitelist")) {
			mkdir("data/$chat_id/whitelist");
}
												if (!file_exists("data/$chat_id/whitelist/list.txt")) {
			save("data/$chat_id/whitelist/list.txt");
}
			$myfile2 = fopen("data/$chat_id/whitelist/list.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$reply\n");
			fclose($myfile2);
								if( $replyusername != "" ){
					makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#Done
								@'.$replyusername.' has been add to whitelist ',
            		'disable_web_page_preview'=>true
        		]);
		}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#Done
								'.$reply.' has been add to whitelist',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
				}
						}
						if ($textmessage == '/delwhitelist' || $textmessage == 'delwhitelist' || $textmessage == 'حذف لیست سفید') {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
													if (!file_exists("data/$chat_id/whitelist")) {
			mkdir("data/$chat_id/whitelist");
}
												if (!file_exists("data/$chat_id/whitelist/list.txt")) {
			save("data/$chat_id/whitelist/list.txt");
}
	$newlist = str_replace("$reply\n","",$whitelist);
			save("data/$chat_id/whitelist/list.txt",$newlist);
											if( $replyusername != "" ){
					makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#Done
								@'.$replyusername.' has been deleted to whitelist ',
            		'disable_web_page_preview'=>true
        		]);
		}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#Done
								'.$reply.' has been deleted to whitelist',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
				}
						}
		if ($textmessage == '/info' || $textmessage == 'info' || $textmessage == 'اطلاعات') {
			if (!file_exists("data/$chat_id/member/".$reply."3.txt")) {
			save("data/$chat_id/member/".$reply."3.txt","");
}
			$ekhtart3 =-1;
				$fp = fopen( "data/$chat_id/member/".$reply."3.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$ekhtart3 ++;
	}
makereq('sendMessage',[
  'chat_id' => $update->message->chat->id,
  "text" => 'Member Info

Name: '.$replyname.'

UserName: <a href="t.me/'.$replyusername.'">@'.$replyusername.'</a>

ID: '.$reply.'

your warn 
'.$ekhtart3.'|'.$warnlists.' ',
            	'parse_mode'=>'HTML',
            	'disable_web_page_preview'=>true
			]);
	
	}
	}
		
		
		
	if ($reply != null && strpos($modlist , "$from_id") !== false) {
				if ($textmessage == '/del' || $textmessage == 'del' || $textmessage == 'حذف' ) {
			makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->reply_to_message->message_id
				        		]);
			makereq('deletemessage',[
                    'chat_id'=>$update->message->chat->id,
            				'message_id'=>$update->message->message_id
				        		]);
				}
		if ($textmessage == '/ban' && $_ban3 == "❌"|| $textmessage == 'ban' && $_ban3 == "❌" || $textmessage == 'بن' && $_ban3 == "❌") {
			makereq('kickChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$reply
        		]);
			$myfile2 = fopen("data/$chat_id/banlist/list.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$reply\n");
			fclose($myfile2);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								کاربر با موفقیت از گروه بن شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
				if ($textmessage == '/kick' && $_kick3 == "❌"|| $textmessage == 'kick' && $_kick3 == "❌" || $textmessage == 'اخراج' && $_kick3 == "❌") {
						if ($reply != $admin && $reply3 != $owner3 && $reply != $modlist3 ){
					makereq('kickChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$reply
        		]);
			makereq('unbanChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$reply
        		]);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								کاربر با موفقیت از گروه اخراج شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
				}
			if ($textmessage == '/unban' && $_unban3 == "❌" || $textmessage == 'unban' && $_unban3 == "❌" || $textmessage == 'حذف بن' && $_unban3 == "❌") {
											if ($reply != $admin && $reply != $owner3 && $reply != $modlist3 ){
								makereq('unbanChatMember',[
            		'chat_id'=>$update->message->chat->id,
            		'user_id'=>$reply
        		]);
					$newlist = str_replace("$reply\n","",$banlist);
			save("data/$chat_id/banlist/list.txt",$newlist);
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								کاربر با موفقیت ان بن شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        	]);
		}
	}
		
								if ($textmessage == '/mut' || $textmessage == 'mut' || $textmessage == 'سکوت') {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
			$myfile2 = fopen("data/$chat_id/muteuserlist.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$reply\n");
			fclose($myfile2);
					if( $replyusername != "" ){
					makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' با موفقیت به حالت سکوت رفت ',
            		'disable_web_page_preview'=>true
        		]);
		}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								'.$reply.' با موفقیت به حالت سکوت رفت ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
		}
				}
						if ($textmessage == '/unmut' && $_muteuser3 == "❌" || $textmessage == 'unmut' && $_muteuser3 == "❌" || $textmessage == 'حذف سکوت' && $_muteuser3 == "❌") {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
	$muteuserlist == str_replace("data/$chat_id/muteuserlist.txt");
$newlist = str_replace("$reply\n","",$muteuserlist);
save("data/$chat_id/muteuserlist.txt",$newlist);
								if( $replyusername != "" ){
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' با موفقیت از حالت سکوت خارج شد',
            		'disable_web_page_preview'=>true
        		]);
			}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								'.$reply.' با موفقیت از حالت سکوت خارج شد',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
}
		}
		
						if ($textmessage == '/warn' && $_warn3 == "❌" || $textmessage == 'warn' && $_warn3 == "❌" || $textmessage == 'اخطار' && $_warn3 == "❌") {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
												if (!file_exists("data/$chat_id/member/".$reply."3.txt")) {
			save("data/$chat_id/member/".$reply."3.txt","");
}
			$ekhtart =0;
				$fp = fopen( "data/$chat_id/member/".$reply."3.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$ekhtart ++;
	}
	fclose( $fp);
			$myfile2 = fopen("data/$chat_id/member/".$reply."3.txt",'a') or die("Unable to open file!");	
fwrite($myfile2, "$ekhtart\n");
fclose($myfile2);
					if( $replyusername != "" ){
					makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' با موفقیت اخطار گرفت ',
            		'disable_web_page_preview'=>true
        		]);
		}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								'.$reply.' با موفقیت اخطار گرفت ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
		}
				}
						if ($textmessage == '/unwarn' && $_warn3 == "❌" || $textmessage == 'unwarn' && $_warn3 == "❌" || $textmessage == 'حذف اخطار' && $_warn3 == "❌") {
								if ($reply != $admin && $reply != $owner && $reply != $modlist ){
												if (!file_exists("data/$chat_id/member/".$reply."3.txt")) {
			save("data/$chat_id/member/".$reply."3.txt","0");
}
			$ekhtart =-1;
				$fp = fopen( "data/$chat_id/member/".$reply."3.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$ekhtart ++;
	}
	fclose( $fp);
if ($ekhtart >= 1) {
	$ekhtarlist == str_replace("data/$chat_id/member/".$reply."3.txt");
$newlist = str_replace("$ekhtart\n","",$ekhtarlist);
save("data/$chat_id/member/".$reply."3.txt",$newlist);
								if( $replyusername != "" ){
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' با موفقیت اخطار حذف شد ',
            		'disable_web_page_preview'=>true
        		]);
			}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								'.$reply.' با موفقیت اخطار حذف شد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
}
	if ($ekhtart == 0) {
	if( $replyusername != "" ){
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#انجام_شد
								@'.$replyusername.' هیچ اخطاری ندارد ',
            		'disable_web_page_preview'=>true
        		]);
			}else{
			makereq('sendMessage',[
            		'chat_id'=>$update->message->chat->id,
            		'text'=>'#خطا
								'.$reply.' هیچ اخطاری ندارد ',
            		'parse_mode'=>'HTML',
            		'disable_web_page_preview'=>true
        		]);
		}
								}
				}
			}
		
		if ($textmessage == '/info' || $textmessage == 'info' || $textmessage == 'اطلاعات') {
			if (!file_exists("data/$chat_id/member/".$reply."3.txt")) {
			save("data/$chat_id/member/".$reply."3.txt","");
}
			$ekhtart3 =-1;
				$fp = fopen( "data/$chat_id/member/".$reply."3.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$ekhtart3 ++;
	}
makereq('sendMessage',[
  'chat_id' => $update->message->chat->id,
  "text" => 'Member Info

Name: '.$replyname.'

UserName: <a href="t.me/'.$replyusername.'">@'.$replyusername.'</a>

ID: '.$reply.'

your warn 
'.$ekhtart3.'|'.$warnlists.' ',
            	'parse_mode'=>'HTML',
            	'disable_web_page_preview'=>true
			]);
	
	}
		
	}


		if ($step == 'ارسال' && $from_id == $admin) {
		SendMessage($chat_id,"پیام در حال `ارسال` میباشد");
		save("step.txt","none");
		$fp = fopen( "users.txt", 'r');
		while( !feof( $fp)) {
 			$users = fgets( $fp);
			SendMessage($users,$textmessage);
		}
			$fp2 = fopen( "groups.txt", 'r');
		while( !feof( $fp2)) {
 			$groups = fgets( $fp2);
			SendMessage($groups,$textmessage);
		}
		$fp3 = fopen( "supergroups.txt", 'r');
		while( !feof( $fp3)) {
 			$supergroups = fgets( $fp3);
			SendMessage($supergroups,$textmessage);
		}
		SendMessage($chat_id,"✅ پیام شما به تمامی `کاربران رباتتان`ارسال شد.");
		
	}

	if ($textmessage == "send" && $from_id == $admin ) {
			save("step.txt","Send To All");
		SendMessage($chat_id,"پیام خود را ارسال کنید.
		جهت کنسل کردن بفرستید /cancel");
	}

		if ($step == 'fwd' && $from_id == $admin) {
		SendMessage($chat_id,"پیام در حال `فوروارد` میباشد");
		save("step.txt","none");
		$fp = fopen( "users.txt", 'r');
		while( !feof( $fp)) {
 			$users = fgets( $fp);
			forward($users,$chat_id,$message_id);
		}
		$fp2 = fopen( "groups.txt", 'r');
		while( !feof( $fp2)) {
 			$groups = fgets( $fp2);
			forward($groups,$chat_id,$message_id);
		}
		$fp3 = fopen( "supergroups.txt", 'r');
		while( !feof( $fp3)) {
 			$supergroups = fgets( $fp3);
			forward($supergroups,$chat_id,$message_id);
		}
		SendMessage($chat_id,"✅ پیام شما به تمامی `کاربران رباتتان`ارسال شد.");
	}

	if ($textmessage == "fwd" && $from_id == $admin) {
			save("step.txt","fwd To All");
		SendMessage($chat_id,"پیام خود را فوروارد کنید.
		جهت کنسل کردن بفرستید /cancel");
		}


		if ($textmessage == "/cancel" && $from_id == $admin ) {
			save("step.txt","none");
		SendMessage($chat_id,"کنسل شد");
		}
	
if ($textmessage == "stats" && $from_id == $admin || $textmessage == "!stats all" && $from_id == $admin || $textmessage == "#stats all" && $from_id == $admin) {
		$all = 0;
	$fp = fopen( "users.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$all ++;
	}
	fclose( $fp);
		$all2 = 0;
	$fp = fopen( "groups.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$all2 ++;
	}
	fclose( $fp);
		$all3 = 0;
	$fp = fopen( "supergroups.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$all3 ++;
	}
	fclose( $fp);
	
	$all4 = $all + $all2 + $all3;
var_dump(makereq('sendmessage',[
            'chat_id'=>$chat_id,
  "text" => 'آمار ربات 👤 \ Statistics robot👤',
'reply_markup' =>json_encode([
'inline_keyboard'=>[
	                [
                    ['text' => "آمار اعضا👤", 'callback_data'=>'nolock'],['text' => "$all", 'callback_data'=>'nolock']
                ],
		                [
                    ['text' => "آمار گروه ها👥", 'callback_data'=>'nolock'],['text' => "$all2", 'callback_data'=>'nolock']
                ],
			                [
                    ['text' => "آمار سوپر گروه ها👥", 'callback_data'=>'nolock'],['text' => "$all3", 'callback_data'=>'nolock']
                ],
				                [
                    ['text' => "جمع کل👥", 'callback_data'=>'nolock'],['text' => "$all4", 'callback_data'=>'nolock']
                ],
                [
                    ['text' => "کانال 📢", 'url' => 'https://telegram.me/'.$channel.'']
                ]
]
			])
		]));
}


if(isset($update->inline_query)){
	$time = file_get_contents("http://irapi.ir/time");
	$fatime = $time->result->FAtime;
	$fadate = $time->FAdate;
	$fadate = $time->ENdate;
	$from_id = $update->inline_query->from->id;
  $lname = $update->inline_query->from->last_name;
	$fname = $update->inline_query->from->first_name;
  $username = $update->inline_query->from->username;
  $inline_id = $update->inline_query->id;
  $inline_m = $update->inline_query->query;
	$callback_data = $update->callback_query->data;
  $callback_id = $update->callback_query->id;	
  makereq('answerInlineQuery',[
    'inline_query_id'=>$inline_id,
    'results'=>json_encode([
     [
        'type'=>'article',
        'id'=>base64_encode(4),
        'title'=>'Meℹ️',
        'input_message_content'=>[
          'message_text'=>'<b>-----Your Info-----</b>

👤<b>Name</b> : '.$fname.' '.$lname.'

🆔<b>UserName</b> : <a href="t.me/'.$username.'">@'.$username.'</a>

🆔<b>ID</b> : '.$from_id.'
'
		,
          'parse_mode'=>'HTML'
        ]
      ],[
        'type'=>'article',
        'id'=>base64_encode(1),
        'title'=>'Bold '.($inline_m),
        'input_message_content'=>[
          'message_text'=>'<b>'.($inline_m).'</b>',
          'parse_mode'=>'HTML'
        ]
      ],
      [
        'type'=>'article',
        'id'=>base64_encode(2),
        'title'=>'Italic '.($inline_m),
        'input_message_content'=>[
          'message_text'=>'<i>'.($inline_m).'</i>',
          'parse_mode'=>'HTML'
        ]
      ],
      [
        'type'=>'article',
        'id'=>base64_encode(3),
        'title'=>'Code '.($inline_m),
        'input_message_content'=>[
          'message_text'=>'<code>'.($inline_m).'</code>',
          'parse_mode'=>'HTML'
        ]
      ]])
  ]);

}

?>