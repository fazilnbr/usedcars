-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 07:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usedcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `carlist`
--

CREATE TABLE `carlist` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pin` varchar(30) NOT NULL,
  `mfg` varchar(30) NOT NULL,
  `make` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `km` varchar(30) NOT NULL,
  `owners` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `img` mediumtext NOT NULL,
  `fuel` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `inshurance` varchar(30) NOT NULL,
  `descrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carlist`
--

INSERT INTO `carlist` (`cid`, `uid`, `city`, `pin`, `mfg`, `make`, `model`, `km`, `owners`, `price`, `name`, `mobile`, `email`, `img`, `fuel`, `color`, `regno`, `inshurance`, `descrp`) VALUES
(1, 1, 'kochi', '679332', '2017', 'ford', 'echo sport', '', '1', '525000', 'anu', '9985657432', 'anu@gmail.com', 'RIFFH(\0\0WEBPVP8 <(\0\0Pò\0*v¤>‘DžL%£)ª¢³YéP	inøL[ýÂ%a—ô*Qµªºë_íÇWmÌò¸ÿ}ëûŒðoîÇõ=ï×ä§û¾¡”ÿQóÀ70~ËÐ§Þºz<Îî/Õûþ¹ñSú°ô/ó^ŠúmzØZ”–&·Â~<Mo„üx2.šß	øðd \\!5¾ñàÈ@¸Bk|\'ãÁp„ÖøOÇƒ!á	­ðŸBÂ[á?„„&·Â~<Mo„üx2.šß	øðd \\!5¾ñàv9Q:žžxpÄ[Ð• œ”™\\zŠ•í„Oz6{dIøOÇƒ!á	­ðŸjeÿóœðG}{¬\"öŸÍ!Wð7TßLª Dð`ã \rÔ\\L<n\\¥r;òóˆ7‘\\‹ÿÛ¬gòJñº“G5|dw	iÙp£¯\\Mo„üwX”¸¼+LÞ›åæÿÃÉýF‚ni\"YZÓLK>O/ØÑiŽþDz(¥	üÔŠl¢¹|ëÂ’Q´­TÅ´ç1—ŒÚ‚°È¥*Ö‹m	£’’ÄÖøN®ö€{ü«„þ¡Ü¯2ç4HÖZJVsi¹+Ñ6Þ§:`Ø’ÛëÍýž˜<ð$úŽJs£ÊÈŒª¯=Ú„ O¤,’;×ðŒ„PÝä_Çñó’õÚ²RXšß	øðbI£ÿêðý¿1å=\ZöNC/ŠFEsIÁ¶Ûå\ZËR7”\rÑÁ–3a§éæx¼†þ¥j_]þ´Xò¹p!‰9úOÉø”÷ˆ71 6?ä¾`×ªr3U	ÝRþ5­XþÍQ_ß»¯Š%»z™+BA(ä¤±21zü5`’:?ëžëÎëh/mœª4íÍ\'ÅÌ\ZÝBd¼þU@A@\"‹?ß´ÔõjíýúÀìZZ÷Û\"v“&Òykæ Ói×ßáSb¢Òaó =^èw¯Šv<o´ ­¯Z,OÇƒ!àï\"—ÇŠS‘¢íÊ$9NÂq½iXUÐ~Í{Ç¨ÉX”Ó¼emÈëíŽÃ0O]…0èœÝÃ¤»,¿úQ¹ìrŒVý³³+ƒàÏhyÖŠÄ)ÒÞaÍV²š64º0jÂàáK[á?×˜TaB©ýíb‘U<bõ%„d‰å jÚZG{X!}:µu ¦/Âï†2ã[æg¨.Ô^ð.«þå ÄƒTûok$nƒk§Q.±\nTÂ²\ntÛ¹ðepd \\!5”²Õpåã…ð~Þ÷gPLnN¢ß|€ÛYyMÓš­9#-3+WÉŠ46SœøLáÑ‚û¢\r”\'íf¨ÓŸ\rw¸CmécSœÖn‹j=Ž˜ÙXÿ·dÄóÚdf\'7å\0_)mŒÒ«! ”rRWß–ŒLÙß$ü1à,›W‰œ­’óæûÎÿÚér_¢r/kâ&ð€¬DÑù­ºãÆäÌÏÎ¶;Œ×œ¸x,kà¶½Hœ¶n¶ìØûiÎ€¹<\'/ûŒÌ¥~]Ä¹÷)6A4Ê§‡ŸýÝÉG‡–Ý»ZlU³þ\'\ZU­3²®*]o„üx2(\04Põ\0îÕG¼€1ÖFkòôû(¦öMøñù’K¤pXnµòs‹	 ˜?¡0™ïß]ñ™Vô–C€qe„Æ³BgthàRÁÕÀ‘`÷0”mÉÚ°SÙJ®³$WÞýÀbëÁA:Æÿ¡]ÉGc½˜b:.§ Æ0MYÒÖz•+f0p„ÖøOyNñ„8Î»ž9/ésý°ŽkÃóË„\"`ÙÝ€f·7úòœž_é®þù·²e$«\\±«ãü®„y¦–§êæsæ‡ôèe¡Õj1O»;ßŽ$>_pwL€¨¯–^mêj£>Å53¥ñ2ó™ƒÕ[™„´ú•xðd \\!1Ç¿Ø®ª‹åÇÁÒÅo×¸œ*M¦nn¡ò€œ†¶­v¤C%«6/à_ªsN•-ÀÍ)3!Ô–%òµ=Å·Ýêûß•˜§7ÉY\"@Ä²®—â¥ó0S)éäÅ^«)sNðˆåÿá?ƒ×N¾cæk°bÂ«¥šÈ¿Fîq	¶ìòÀ$Î|e–²^}êd5½kÄN>Ñžk	Ìf)Q²¦¾¨ÕØømÏ­\r¨kÆÒ~¬!Nª_±ññ–Cƒè#íÏ@ñ0  ³NÀ€]óÕk|ô˜Õ\"øÈMoyèaþ51[/0Š“ÄrW#1p0¯å»•ÓGÁW>ÕÆ\n·OAÚh_*uIU,U²“hBrT)oçyþ\núËÂ§ƒ’<à×-ó;%”–&·Â{´È—ÿŸí`ÙšÕüØU	Ð˜à£~þŽ¡f|Ù«Ôe˜8ãîžO_kã¿ÆñmÏ~=~ÿ\'!×{myLAœ•ÀŠó“ñàÈ@¸Bk›PVö”5¸ôò‡Þû›³ˆ²òmõü”-eq?„„&·Â~<Mo„üx2.šß	øðd \\!5¾ñàÈ@¸Bk|\'ãÁp„ÖøOÇƒ!á	­ðŸBÂ[á?„„&·Â~<Mo„üx2.šß	øðd \\!5½È\0\0þÿyh\0\0\0\0\0\0\0\0\0\0\0ÙK	ouä½á£ŠÂâ¸¦ã¹æŸ{­ ?\'y`lL {¬¬‰Ìpq?×Is§ž}§1÷bÕ8LÔ0\'„8´WKZ\\X¦+-ìé Â­2 tÞÇÊ•µVoIn\ZLr—·fßÓDîS›ôRÄ] Þ\"ÒP\\–%rJ(w;>A‰½J9&	N»Ï|9:˜\rÒ…5(\r… ôøÏ¶xïY[—FÑ‘{ÌŽOäyà	è[ø†fãNû‡²ÏÙ)6QéÁN²ådž$ÔQuh!\\¼è‡+\"‚öÑÁÿw³–ô{’[+U3¿vÍbØÏHÜƒQ,¯s?b¯™£ñÍ¢+ÏXgâßƒ¼ƒÓzº>ïqô,„j?-izg|µ\ZMâ\Z¤[¼ˆ(\nàoûÚy ¯…Þ7~£ú)Y=ff¯á›á;Üx‰Osw·Ó,òm-ÞL¹ÅÛáÕøH¸7õ¢‹®4ÄØÜöS ŽÞ?Â†“Ã¢é6ÔµªÒñõê«Ë@E,¬Ð¾•¹ë¨Ód(•2ãÛLGêæÒÏ™q•\n+-P‰[‰×®\"©Ìd#¡L1Fáú\rkÇDÐ“Èä(-,·‡ÈE³ñ…ÄÕ´ñaŒÛ¢Q‰IÜt«¢ÿÎuºÉ3pmN”ÏO\r]®>	µœ›¯ÖòN\"„FÖ‡ŽB†ngZíÑ+^jsý…haéž3D)ššjnœ‚!ÿ n@å½$ÁË<Ü<Kã»«JCÛÑÌª°•ÙÁñ#]7?e}Æ!¼Àú}\"˜ˆUÄl{• HÎÓícºšÄÍ=º€ñ>ZÄ*„@³†´ò=ÿªðÒrÉûvƒÍ;t.vVd´’éVuN<QPŒ{J±øW +™À_û~Ò¾¯Ym´®*ˆÙ2³ÁÕRç¸k›|—!úQßÞ< S{UÅ	#¹§³Uñ±ÖïÿÌ{!9ƒ©õMYd33Õ«s-†H§o¹pvOaà<\Z+¥í© bXí\"ÊYñÚoèl¬4·ä¼ûkY9B8¬l-GÕU\rogQÂÿïL;ê}ûƒeá–HˆûpFÙ®QˆC_ŒIÑBG\\ázÜ°‹ˆ-m?nfCßÃ·Œ@Ø\Z´î¿u<ÜõØù|¹)x;«9¦ÔT›kHÁ&õ´Ú]òH~ªPºÍGŠ(B÷ÀÈ´«ÕÈÛ¿KKžj	Á¬¯\0?%D6¹ÆEØ>öRY‹(DæR,’¹;à íMéâ^©(¹Ÿèâôü²™4ö¾Ç„ÍÇ+ž0?\0Á>ì—b¶ÙdùÆôì7O=ŽÜ Ö/6ƒâÖé#V>kÿ.ïùói•~ÇäÝ)Q)\\á×\'Ô¶ôfÙn.$ç™Ókˆë¯5wÎ3žš\Zmƒ3	,þ[Á‡¤\0Ú€\0âÂbøó0òr„û þ¹—\r8ûÔ°á>CÁ«•Ü¨’Bó~”ø}H/ÈÍúté%¶¤¬…Ofçó‚¢”ð{®/«./%)Áhìús‰Àîõ`í#ˆ\'£–Q¹‹ÇÐGÔéâ—ïóQK÷§<Þ¨Ú–öƒ}M¨`*Aˆq¤StDXT(Íòû¢`GJEÙWU[Çê\\V|QHà;EQ\Z^ïET+6™j%W:TÒÁÙåÿœÀö@€\ZÂŽ‘VÎÖ1þCl°±îjçcj*’iSí0Ð}µÂ–>ÏÅ9pTnœÉF5»%ýž…Û×•Õ\rµÝŸ?ªEÊ5Î‹ì—ß*£Ðõ\\7—Dì¥F{ÆV¶ÛÅÐyç~þ°ï+{ù<S£ÒTÀÓÅƒíþyÛ_nÚË·/W×cüð¦¨w.oþ>dtO“Q]¸Ú¬ÈD¼”¸6FÙC‰žú´Ê$É%¯öÍ_³ãl”­l°ñÕÊ•“¾Ž½`ßª·´SÛîÅÏúJ}IÃƒ_Aq)¦KÞBH¨ÕÇž¤µïp©õ¬ó_QW©,ä«ø1/Ç;\0,5‹\Z4¦{·^A±æÒâ™æIõUŽËšò÷ Aþ%Y„lQaù‰qÑë\'K|bôßÚØ$XâIÚú1¦ƒPÿÈ!@S7$–(ÎÕö°Ð|5ˆ\rÌèN¢JO6KÚ ñèïÐÄþŒÆOˆ–Á¤§ýpyºq8çfû¿*èã +|b §¾ÿ\Zì}à {$–ë]ÉÛ\Z˜¸e\n9Žûä€EâH\rž&Âòr¹q•¦.fs”ÝSãdS¢g¨ŒP¯‘Mè0ç”¬KüAýV’ù†}wQR\ZÝe ÜkÚ¯Sóâ»Ñ¶lÆvÆø°agx¨ÓBÌ˜^íhb“:z_Eßk*ºƒ¡&§5€÷¹/ò«™ÏÁŠ\ZC\'_c`•ÚåÞ8¯é=’q¶²2|œ¾ }Ñÿ×\"tzV¡×Œ’ÒûT&A2LùZVÑnÆ¹\"0þ·«! Ád[\nÜ¨èÖÙÔßowt4¦ß§pÝ6Ñ[5\rÑ>‡ŸSá¯ÂF`æ©%\Z‰€ë³Ej—žë w‹tòîRr™nV%a®…*béœ6v®H•/vBëŸçîÃ´—æá &?p>fWî6\"é]¬„Ã¯ß¯Ðê­†¦ö!‰«8©¤d[	Eisç!È_ng÷Ç–<¶vMë*í¼uI:í	‹ìê^i7¹jxdŒßèmäƒ¹Ú%mÄ?Dg#­&áGIo\r®ZÆµ+:,OZ}I.5\n¦-´{³C»<ÀÂ¡ô‡J3b]CY•[8~ùiŸ&SK¯ÍR¡¼«éÓ8õ¯6ˆzRâ”ð1µ5Åq\Z‡GÍ5Ó|+£ÕX8&5—6H½Ü,Kþì5ìz^Î«r5sWKûè>fb-8èB€ÞùsJÕÔøš®;ŒBÔ“\r¼|ùžWng³$ye§Q˜õa\r þyÅ¬ë^ÅNÿ¡ŒË¿ÐË•°G½±Ð*Çé\"åü)‘bŠÇ²+ýÔ†ñŽËªÃmw(C1%¢ìÞw\rølíÜRviÒoädÉq‡\'ì±ŸáëÖÄd_aÎQ‰‚@}Zÿ0åÀ]Þ}\rWY?;¾gŠbU\n4y÷«N!…w}!Í=â³Y9›è1Ç4Ð²ï$‘]ç­Zí<ž¶§íwì¿ƒ.N@vIÍåpP	7{äg;YñðÀw‹“Æ\04ÆÅÔ¹óÉ¨±Çç‡â¼k\\¨YäQ;útÞ´†.Æ-DúÍ¤uF5˜Îec\Z€0ÔÿÉ¥3F¨žÂrÉæÁxØk¬$AgŠ\n×x	^+°Uî\r,”–o¶$€dÆ+?’™uSä·0¤\r¤)D‹³°Ø:-Q¦³b\rT›œÏSó|€\n_Œ¨i0†FpÄ-\"‰Tñ7ÊSn†ï»%ˆøºy±ä€ü¾ªqŒ‹Ž½ü¦+F;4Ä³+½[î¤]ðA_6}|ÂÃr€©¿¨òÁ‡·œ5·ï<û·Î”:¬Ô¯{ÖuUU7Þc7\"ÞÎDÙ÷ö/½W#=¶œeî›Ç¯ã6•zìIûie…#.êâ“·a†ì™7ÀÝîœïÅé!wÙ¹èEAIZ\'ðð1åc´“jI±ˆš+L€:ñ¥Ûãšiy¯}B¥yí_ÿ¿\0´ÄYÍ¤s/÷³„êlÄVõŸ0**cÖ´ƒ’\rT…`¾ã§d¨d™òdÙílŽnÏárž#QdK-ÝÝ9îvõoÉlL‚­íÈ}d´Ü|ð•ÇdÕ¡‡8]ô#î^ìÁ´ç§|ó\0yÊÙ×<“‘39ÁMÂ°ˆ\Z)Ÿ â¥L^1ÔöcåP6æFºKÒÞW1œÈW¤Ew»ã\rÆ—ŠMðF]®ÕY_™úVRÍ1XÞ\"fØ”íaÊÝH¯ñe¼F^Kw\'\r³eO½)¤Öñ€ØÔ@ßÛy³Óõ••~nBüÚÀ9êy¨Õ9:&×¤òE)j§mwnù—XS’hÑ­ »kótŽ²Í(BçoiT=ïöÓtG~¯¤*ÓÊ¨½åN2-¦H™!Ðq‹~þþË\'pUWíõß-~ÒO{¼Ê:»nÏUujeéoËgm`ÿNrŸ0G¿+ÃÈ\r¤Î`àü›Åx¼âØkB|‘`ÝÝ\nGYYK˜È‡ ú¼cxIi¥LÇp¯w®„»ŸúTÁ[¥ìÅ¤qöYb\'^‘@’aé?m}pÚ–“™Öu%&Û3§]RJo…oõQÓ|¶a{>ˆcÝo‡MùÄÒPo>ýäo[›¯]¾½²×¼\ZpgtÀ˜·7ùŠà’ÉP>ÆÐ»ÆDÚŸ(ÞÁu}‚e·¦fW‹ç-ÿÀÊžKtX/Aq¹”>#7%Cg\ZUÅ=¾Ô*½V(µtÃë‡%ŒXF:\"ïfÒlySï8–\rÙ£Ð\nñdÈÌ)k(¦	¥\\»;]wÝ3ÂÃQÖïêª_ÒÎî9SìÅÑù´:¡¾M\n‰ þÂ`[hz6r-é ©ªÀ¤V|ï²E+ºôí¯EÌp\")ÈàJ›ÁA¦æ\n:`=¼(õS2dFw»NÊQæüíþCÞo×øÅ¬\n\rbô AI|“Áñ3!’HXd÷¤£ýZt.ßªá˜\\ì\\ÃÚÌ´˜Kp‰]cxImÜ×À ƒe{/&Ôf]½/7W”vÿ\n•ßª¹ì+Ôû(#>çv	BµŠY2€ÅäÂ=j5…I.L$sÂ8Ì¿Ã”fèó{ö>i”@{à¤9ï8I\Z§à$¬öÔª&r5²”5Bè\nþ‘Ù\"^›(û÷\nÈXm#—éÃ7ŸSÔŒ,y´tê’ÓÀLé}6âu-›Ô¿!©Íí…²âk6ºP­]çå|µ€x	‰š–Wd*Ìð—e\ZäŸ¹\\Ø®%¬²©Uw œ5:öN‹Ûåž<–Ýœ{|qjK£G7?ô3µ­êDý*0u©«K éRCFÖÒìà¨È¨ÄIz_è;[9Pá°¿‹P%:;Hn»´åe|ª3>ñ[ÖÛá~@æÎÇêêPñ\"ã3›¾z¼õcG-§ÜpÔK~DÇg¸©™:›eyû/á¡tî¸‹ó3qeŽïð[h°ÛÇ×Il;¤BC¡kVáÖš›Iù¶îæë‘˜0ž—¢ì±¾kßý¯¾:ºbIÖxl¿çœLÅ!¹<ÊpÉ2ÖMùs\\EŠußú“bçÚ¬j²#F?lŠI#À1!b€–©ûsFþ4ŽSIz¼*TKx»9º²òkIìÃŒœžü?Ú¿²à­½é\Z\"YÅ¨–sè!õãY®“³…ñë…ãW¼áì|F%M¡ó;IMÅÕ	›Œw÷\\L†q<ñGË$6.k®¤€Lµ£;e4 \rPÉ½ïëz9‰,C$KPÛ£¤›.…pl’ÐÃÛÆØâTŽ Ù×5¼…ê²öÒ!dÄ1Ûºáã…ý¶ï Ÿ³Õxå’£Ì%¼%Éª2UÑbõÊòƒo2Øl:d›,\rêGÛœ¯b–¾Å8-5ƒÃh;¥Íre¬T´”é…Z[v¶‚Œ²9¹lXôjÇ`ŸuôÏ’A°aê,«z©ÚDÊ¨Œ3²‹ ²wö8šv)¸í+5YND*ª=)½vlÀÑó<ñG¯Ÿ”šQmÃsíXCí]=‹ˆUbRã~GõÀ:™ÑÿÓo5½k\n\"8ã‹\n üÒøM²¬eË\\ôb¶xÚŒE&ÝŒJ/E¡©9i¢±Ñ»!t/ÓïÍC½l˜J~:¥,æ¯±¿dA+rö†ö[Õ\0Ó¸A”jÁÙ3~ð$œ)äÄ_S°D¦Áª\\Þ–E‹¶_9’l®Ûabê¼ºÓæX¾6í”Ï‡NÔª#=dMªV*úoAõ¹Ã£ uz~áúØ¹[£ë°eàpf·‰©ý.àÆí­™k¹1ÅÔË[¬!S›}S|äaƒtv8º‘_ì‡VIá+HÏÎÇÓïä³ž«Õ_ôó”ë\'B{…–49²ƒÔC\nÂÍ&ÕÑÁ²c\'¾ûhºw4µ¨Y†òe?DŒNÿXýïìñø8¯QtÜù­,=Û†gX¼Œ^¾vz²?¦ä\'Ïë±˜	êñ<ðïd›ÚéSé!uþÈÈ¶£ÔÒŽ\"=~kÙ¯Vëàãå®Jí‘Z9¯I¥\'¶ãˆåììÛ9´Yo+>iÞyÔ¾“³H\rza…GOÂåÏ¼³X/o`n“Ù(ã¯W¹&Ë•;ŽSÏÄræÓwk\nåŽ–$[R·_àà}òK8fHq9Æ\"\rjHŠ1ñ:ÇV ¯Zý´ËÌù­æ¾´“`…Îâ&5èŽµÖŠù¡~\\Œ¦ª.Ã—\0À¦üØpŽ-}$wOË°peú:VwÁË¶`R§tÃÚ)bbÄ½}¥`¹J×gv¸š²\'Ö[’\n‡N¿\Z¨É)àÉcìA¬«7žëŽÚ›1—ìç¿O®sù¹N‹b¶›Ck¼V¸DŒ³Øš~VÊV2%%äãtb±ôW=µàÍâ+ÒR¦‚1º}uÈ´ã-y¾ÓÝõï¸J•åj=¢P(Ã‘ \nçs_‹e4avÑÿû\\pÃ±Lw6ÙÐ6}6c…mƒ@\"mCq™N«ìxµ;o>l\n•ìéYD×ƒz¡jžn)*ÆÚ¢Šß«â …awâ©¯p°ÞáJÓÿ2#5†1-x²	D2¬dÐ}£%|M‹»:»ý¶¹\\Ôô]Ú…\")Q\nžOeØÍ“‘:vÓg2K•öÔXÁä\0( Ijd\0ƒ\n©kžÈ¹,w\ZÉ:m[¥y½QfZ:<ìÛ¨¿ýW\"hS0ØþÇNÕ´t¦oe€·Ù•9ÙÿÜN¡	÷@üœñ»ÙL¸Ïõ5eXdt¢t$µ·{@Í8ÞÁ Û¿™3«ESvv»ª¨‰F.8$\'»ÛÎÕ%ßrà­Ë ¹í=HùïûáFâ\'ý¡#+‰\"·1õlmw¿3x²\\ê€¡‚%¹t±™žÿ‘&È¦eœ|›+Ý>¼QLõ´ŸK«m`¦ÍF)\0m \\î\n\\s´¨ƒ\\¼¾³„ÃEæ¹Ãá•6×{`þûó‰¦òqŽ˜5RCŠKCIC\0p˜íNÎÏbûJÆ¿Ÿ\"D¿!h\rCñÏ~¢]wW³ågÐM¤zi©“ç ßHÍ^ê?Ø½sþ\r–eiœÕñ~sØWöÇ·k˜¬öŽzffZEðzöJf–ÕøùÆz¸{ùÌž¦ýÚLèœ³è{¾<–PÚüˆ}Kÿ=|Í¼…‹ºoò«<XàÅ«Hò§wÑ¥µ{A{\'·±:È!oØŠ‘œ½&¯4åžJ:b1Ã4¶³s;_¤ò·*ô;¡¦wù\\hsÁ5˜¡=|ìÉJÃ(‰ˆZÁTu5ÚG¡9Ä°ë¾§{è¢üf\r0”ã—‚ÑoY†Žô-º¸ž2TÆ9$˜}èÇDÛ[¡È6ÀúY,è9¦\Z\'‚íÁÂ\'Ñ N„\'6k\"Ä0¿œ\\Ô^&C¯3¦à&|Ó¨E8xåN–9§_6åíðÛë”âË—Øç`HµºK‚UdìYé–Åó\'æ¹ÁðÄ 	H©gOÍÎÎ ƒælû§€½*å­#\"¦˜,¦ã=R~Ÿ¾åòoäaØÉü»ÔÍÌÑu­\0ñBµk€®PZÔ:ÄZl°phÖã\r/|9\Z<€øòÏ³¨:VW	78›“C“ã‘Þ˜-„`™·7ÑY+ò\rÇî´ÖBŸ²\'9E…2+å»bK·>âÂÕ/w¸a`UKÈŽöˆÔT®Áé\\øˆß	{o¦—xï¬\nßvžÆóv±ôú÷ÅÄ—ºí€HAþÝ¾Ÿö¢­]ÞaiUPŽÝÌGíLß°óÂaMòt†º’ðŽS…½1fÅú‹¥Z¯ª@íÝF¤ûG\r›$ØC”SNªZÁ´ÛrfˆÁo5!teAíÙgHc?½F@ó¼\'-‡}«ÍMCD°\"Z¾‡Ør PRÄ”…¬bƒœ1¢wÖ‡Y<{åDÛ$ÐãÃ—Ðí3ž¯Àov‘°á0.ç>ké™›\0Þ°?ÎI¢M†H#gß„_6\\:\r)ÀX…k¶žnW_øNË<6û‡‚Sn4/ãÓ-‹¼ª¹õÏ|ãÝÞö†xR\"MB,æä‰^rœ¸_eì<´;€BòŸ>«Ì¿µ£½¦µDSöÃôÕsÀgkgàw@pþû1Ÿ„wÂwUò¬…PTw¨TºgØQÄEFÇ© E¯Õs·¤9ÉA~¸Hôz=:z@Kþ»ûÃsêÍÉÏäÅv³Xïy#ÃÚ†Öfæ?Þ^s—c³›ÛyWíÇµ\nÐ3v#-uÞa^ð¸‡¢jkvXã5Öd‹ƒaÑ†…ÍªÆž‚Œ¹¥ä*”ê„æ&®Àƒ®©râ\\·£$ƒÆÔè\0ùkÞ$ô\nÎè$:¢C`¹óRnjªZ3¾¤×Š\'ubâ„n¾¥÷åð]C¼ÎRÍÓ<GÄ]Ùµ-‚)\n±%ÌF+ˆ¹\n|´“%¹Š@“Ó6òÚê‡ÐÃ(´JÙb±X´V˜-Ïu÷9\nÌªvÿ\nÀP\0:î42%4Û«ÆŠX½L?kîV‰¸n?½¼Í©³—Õ_¥ø*^À—¡œ[ÊžäÆ+!#A•ˆ˜V6…{®‚ßl†|&uðšgn±ëýÁåt¬¬}¿xØS&ÑëñÂÉã<O4È,&¶gî—¡äY£·N.\n¶“OÖDÓÐ±ÄŽÂœ…{ûIüAjŸ€É¸ãñób£Ê$\0ŠW¾¸ëôîœ•R¡{mþ¾¹­²=@T?Ž‘ÿâ0…Ð\0ÃÓ¿\0™ó­°áƒLgƒ+pïô½»ÄåJÎ»@šb„‡+¨îîÑ£;Ü§É¥³)É¯d%¯)HK×ÞBÃŸm)ã½™=‚[ÈÀÑ0ù …òÆ´º#ÔCŸ6A•à\'A›€)ênO?­bxÌ	;Xä§Îs¥Ãp`‡HD%\ZOˆMû°	€”lVAz;	¸oæ-óó®ó°{Pžãœw²‡VØ[``xž;:Øõ}sYvUeðÅ’Ådóf/ì#ÆÏªõ°É\rLzÍÁÿã -x3FR¶Î¢3vMŠËm§Þ×aAYöˆ\rT€Ë~ÿôe™œ°x*Òš*Z‹ä(ÞÀ}tçá£Æú…-wøm=pîkØ´…_q´Ó/·èB‡ˆÍæ³¦~œ1DPñÑó%¿ÂŽžÐÝ¦n>$Õ+Äi4­ñ2HëwÒM=#p0-ñtžn€:b7RÓQ4U>áß«nÏR`o.Û&zâé$gXy38K Ï*#-LyÉf¨Ä…fŒä#tªûµ/\n‘Ócg±Z]æësðÓ(9%Rã”:ü|°ÏÖ×rÉÐ$=ø¸m_ìÇs.ú7¬‰Úé¤ñÒ9ÁBÂY ÀÚØg¿´\Z¥û¦&äqú¦ñÅæHNˆmJ°»Ë(pzSb`zðõ­ièÇ—ÊÚ¡m`9ùîEÎDíA\rP·ŠæàT ðß!ô9ÎÍ¦+®ÿløúg„vlŸ[bÎšg8Ýq‰Ú\0q°#XÙÉK¹)-Œ#W2µü<¶Ï¿&Â#ïrÖµdÝ<>0qtˆ¶‘\ZÎØt¡3¤ƒÏàMÃoeÇLÃ¿uÚM°–\' 9â@J)¹mfäTë{ÝEBï‚Ð7z’ŠšUunzòê°¨˜YT_\nØ¹=%ú‡Îc^4Ú5n3+VŸaOyÝ1Ò€×ÊâÎŒ@-:8÷´!ïÝs#…eäˆŒ\0I›ö‘Ÿe<óXÏ¬üoc?w±ËÂ@!Tr{I“‚ðvÌgKˆ²µ‰Êk¹µó—kŒï Ð¡bD’Æ­·Zì,%k\rx¼¹:`×¸,ý·ch&àtðûô®îçdúÈñ#ñ•Î_F•j1ñõZz•u¥°ðÛó\0\nô/¹ÓG>¬gêV“âxq>A½‡@NqQö+S¯¢á ­B±U¸ˆTsÓÌWî¿¾€®ÀN­s”Ô¦@â%sp‘±Ë./³Î”<jÜ¡\nrP\rP‹ø ×\\EÈ(³1ÏÎ¨4ïä¢e0zhIÓ?k”çT*hFÓBgË:£½9T¦ÉYp)^ôÀÄ&pª<µ‚zèPQQYÓ“ï -™,øþžÛlÎ´‚Ê¿ú€EùÞ¢<Ã…‡÷ÔÂ¶#U†_xšì¡ûÈOþ«Noæ‚:jmÏ	f‹êôŸ©;\nòùîH7_åØà2µÁ)<ËÍg¬ö‹âXGÀ)ª’\0ÝÚêÈšÅFú¸C?ïTÛ\\YÈäÚy=%¿/ÞYÜV³U¿Vßµ¯ß9ø³WË%‚ú8Z«ú¹\nºÍ\\œ60ÅIl÷^ÍG1Ô˜<pÈÔg:æº<WÕ±#JŠÿ<bžØ­ÍYJŸ~ÇqECüÁ!¸ÎjgT,Ð®c m²»hž\0É)–æ¡¨ñ9˜\0m¾® kâî7e8Ðþkc\"ØS}æl„Éø’õ]ÏvéÍHG}Ø>;Ãw¯qýf<’;ÆÖ×ThË†¹7ÎºXŽêàiöF\ZÅ¥Ý‡zô\'÷ø±ðè°ñn^¦çtŽª¾(ÚHò¯dý42r.|˜õOÍ=¦Í\rêU[JO‡‰ˆ1µ!-²ºŽÅÅèBKpÑBÖËÒó<yÉÌ	1}•9=`¡™¢5\rÈ=C­ÌœòÈ:M½}pÒÐšJ**Çß}C9ÝU/ÌŠrj&½€\\# »ù·bä_«—ç³èh—«Sm®¤¦ëè>ù9BCvš‡þíbj0CSç¥ôcÔäïYF%FÀcÅäÔžA7á>Ã$–Ê`CðÛ„æð‰¡EÑìB[ã5<~ƒþ`x\0t‰Gü„µž£õòòa<±¼)\rmž‰d,÷ˆ‹/eIûxD\"\\r\r:P´ð`\0Kü¶dÁ\0ëª3ÉhÔ‹šLÂY8Îª@\0÷\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Petrol', 'White', '125664', '2024', 'good condition');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lid` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uname`, `pwd`) VALUES
(1, 'anu@gmail.com', 'anu123'),
(2, 'binu@gmail.com', 'binu123');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `mid` int(11) NOT NULL,
  `fromid` varchar(30) NOT NULL,
  `toid` varchar(30) NOT NULL,
  `msg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`mid`, `fromid`, `toid`, `msg`) VALUES
(1, '2', '1', 'i am intrested');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `lid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `lid`, `name`, `email`, `mobile`, `phone`, `state`, `city`, `address`, `post`) VALUES
(1, '1', 'Anu', 'anu@gmail.com', '9985657432', '9985657432', 'Kerala', 'Ernakulam', 'kakkanadu', '675332'),
(2, '2', 'Binu', 'binu@gmail.com', '9963214789', '9963214789', 'Tamil Nadu', '17', 'chennai', '785663');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carlist`
--
ALTER TABLE `carlist`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carlist`
--
ALTER TABLE `carlist`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
