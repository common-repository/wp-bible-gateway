<?php
/*
Plugin Name: wp-bible-gateway
Plugin URI: http://jameslow.com/2009/03/23/wordpress-bible-gateway/
Description: Automatically creates links to bible gateway from reference in wordpress posts
Version: 1.0.5
Author: James Low
Author URI: http://jameslow.com/
*/

$bible_versions[] = Array("value" => -1, "type" => 1, "text" => "Last selected in bible gateway");
$bible_versions[] = Array("value" => 94, "type" => 1, "text" => "Amuzgo de Guerrero (amu)");
$bible_versions[] = Array("value" => 94, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amuzgo de Guerrero");
$bible_versions[] = Array("value" => 28, "type" => 1, "text" => "العربية (ar)");
$bible_versions[] = Array("value" => 28, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arabic Life Application Bible");
$bible_versions[] = Array("value" => 21, "type" => 1, "text" => "Български (bg)");
$bible_versions[] = Array("value" => 21, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bulgarian Bible");
$bible_versions[] = Array("value" => 82, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1940 Bulgarian Bible");
$bible_versions[] = Array("value" => 90, "type" => 1, "text" => "Chinanteco de Comaltepec (cco)");
$bible_versions[] = Array("value" => 90, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chinanteco de Comaltepec");
$bible_versions[] = Array("value" => 98, "type" => 1, "text" => "Cakchiquel Occidental (ckw)");
$bible_versions[] = Array("value" => 98, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cakchiquel Occidental");
$bible_versions[] = Array("value" => 23, "type" => 1, "text" => "Kreyol (cpf)");
$bible_versions[] = Array("value" => 23, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Haitian Creole Version");
$bible_versions[] = Array("value" => 29, "type" => 1, "text" => "Čeština (cs)");
$bible_versions[] = Array("value" => 29, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Slovo na cestu");
$bible_versions[] = Array("value" => 11, "type" => 1, "text" => "Dansk (da)");
$bible_versions[] = Array("value" => 11, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dette er Biblen pÃ¥ dansk");
$bible_versions[] = Array("value" => 33, "type" => 1, "text" => "Deutsch (de)");
$bible_versions[] = Array("value" => 33, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hoffnung für Alle");
$bible_versions[] = Array("value" => 10, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Luther Bibel 1545");
$bible_versions[] = Array("value" => 31, "type" => 1, "text" => "English (en)");
$bible_versions[] = Array("value" => 31, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New International Version");
$bible_versions[] = Array("value" => 49, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New American Standard Bible");
$bible_versions[] = Array("value" => 65, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Message");
$bible_versions[] = Array("value" => 45, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amplified Bible");
$bible_versions[] = Array("value" => 51, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Living Translation");
$bible_versions[] = Array("value" => 9, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;King James Version");
$bible_versions[] = Array("value" => 47, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English Standard Version");
$bible_versions[] = Array("value" => 46, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contemporary English Version");
$bible_versions[] = Array("value" => 50, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New King James Version");
$bible_versions[] = Array("value" => 78, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Century Version");
$bible_versions[] = Array("value" => 48, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21st Century King James Version");
$bible_versions[] = Array("value" => 8, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;American Standard Version");
$bible_versions[] = Array("value" => 15, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Young's Literal Translation");
$bible_versions[] = Array("value" => 16, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Darby Translation");
$bible_versions[] = Array("value" => 77, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Holman Christian Standard Bible");
$bible_versions[] = Array("value" => 76, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New International Reader's Version");
$bible_versions[] = Array("value" => 53, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wycliffe New Testament");
$bible_versions[] = Array("value" => 73, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Worldwide English (New Testament)");
$bible_versions[] = Array("value" => 64, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New International Version - UK");
$bible_versions[] = Array("value" => 72, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Today's New International Version");
$bible_versions[] = Array("value" => 60, "type" => 1, "text" => "Español (es)");
$bible_versions[] = Array("value" => 60, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reina-Valera 1960");
$bible_versions[] = Array("value" => 42, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nueva Versión Internacional");
$bible_versions[] = Array("value" => 61, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reina-Valera 1995");
$bible_versions[] = Array("value" => 41, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Castilian");
$bible_versions[] = Array("value" => 6, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reina-Valera Antigua");
$bible_versions[] = Array("value" => 57, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Biblia en Lenguaje Sencillo");
$bible_versions[] = Array("value" => 59, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La Biblia de las Américas");
$bible_versions[] = Array("value" => 2, "type" => 1, "text" => "Français (fr)");
$bible_versions[] = Array("value" => 2, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Louis Segond");
$bible_versions[] = Array("value" => 32, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La Bible du Semeur");
$bible_versions[] = Array("value" => 68, "type" => 1, "text" => "Κοινη (grc)");
$bible_versions[] = Array("value" => 68, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1881 Westcott-Hort New Testament");
$bible_versions[] = Array("value" => 69, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1550 Stephanus New Testament");
$bible_versions[] = Array("value" => 70, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1894 Scrivener New Testament");
$bible_versions[] = Array("value" => 81, "type" => 1, "text" => "תירביע (he)");
$bible_versions[] = Array("value" => 81, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Westminster Leningrad Codex");
$bible_versions[] = Array("value" => 71, "type" => 1, "text" => "Ilonggo (hil)");
$bible_versions[] = Array("value" => 71, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hiligaynon Bible");
$bible_versions[] = Array("value" => 62, "type" => 1, "text" => "Hrvatski (hr)");
$bible_versions[] = Array("value" => 62, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Croatian Bible");
$bible_versions[] = Array("value" => 17, "type" => 1, "text" => "Magyar (hu)");
$bible_versions[] = Array("value" => 17, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hungarian KÃ¡roli");
$bible_versions[] = Array("value" => 18, "type" => 1, "text" => "Íslenska (is)");
$bible_versions[] = Array("value" => 18, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Icelandic Bible");
$bible_versions[] = Array("value" => 55, "type" => 1, "text" => "Italiano (it)");
$bible_versions[] = Array("value" => 55, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La Nuova Diodati");
$bible_versions[] = Array("value" => 34, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La Parola è Vita");
$bible_versions[] = Array("value" => 103, "type" => 1, "text" => "Jacalteco, Oriental (jac)");
$bible_versions[] = Array("value" => 103, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jacalteco, Oriental");
$bible_versions[] = Array("value" => 104, "type" => 1, "text" => "Kekchi (kek)");
$bible_versions[] = Array("value" => 104, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kekchi");
$bible_versions[] = Array("value" => 20, "type" => 1, "text" => "한국어 (ko)");
$bible_versions[] = Array("value" => 20, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Korean Bible");
$bible_versions[] = Array("value" => 24, "type" => 1, "text" => "Māori (mi)");
$bible_versions[] = Array("value" => 24, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maori Bible");
$bible_versions[] = Array("value" => 122, "type" => 1, "text" => "Macedonian (mk)");
$bible_versions[] = Array("value" => 122, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macedonian New Testament");
$bible_versions[] = Array("value" => 88, "type" => 1, "text" => "Mam, Central (mvc)");
$bible_versions[] = Array("value" => 88, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mam, Central");
$bible_versions[] = Array("value" => 107, "type" => 1, "text" => "Mam, Todos Santos (mvj)");
$bible_versions[] = Array("value" => 107, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mam de Todos Santos Chuchumatán");
$bible_versions[] = Array("value" => 56, "type" => 1, "text" => "Plautdietsch (nds)");
$bible_versions[] = Array("value" => 56, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reimer 2001");
$bible_versions[] = Array("value" => 109, "type" => 1, "text" => "Náhuatl de Guerrero (ngu)");
$bible_versions[] = Array("value" => 109, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Náhuatl de Guerrero");
$bible_versions[] = Array("value" => 30, "type" => 1, "text" => "Nederlands (nl)");
$bible_versions[] = Array("value" => 30, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Het Boek");
$bible_versions[] = Array("value" => 5, "type" => 1, "text" => "Norsk (no)");
$bible_versions[] = Array("value" => 5, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Det Norsk Bibelselskap 1930");
$bible_versions[] = Array("value" => 35, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Levande Bibeln");
$bible_versions[] = Array("value" => 37, "type" => 1, "text" => "Português (pt)");
$bible_versions[] = Array("value" => 37, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O Livro");
$bible_versions[] = Array("value" => 25, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;João Ferreira de Almeida Atualizada");
$bible_versions[] = Array("value" => 111, "type" => 1, "text" => "Quiché, Centro Occidenta (qut)");
$bible_versions[] = Array("value" => 111, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quiché, Centro Occidental");
$bible_versions[] = Array("value" => 14, "type" => 1, "text" => "Română (ro)");
$bible_versions[] = Array("value" => 14, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Romanian");
$bible_versions[] = Array("value" => 38, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Romanian");
$bible_versions[] = Array("value" => 13, "type" => 1, "text" => "Русский (ru)");
$bible_versions[] = Array("value" => 13, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Russian Synodal Version");
$bible_versions[] = Array("value" => 39, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Slovo Zhizny");
$bible_versions[] = Array("value" => 40, "type" => 1, "text" => "Slovenčina (sk)");
$bible_versions[] = Array("value" => 40, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nádej pre kazdého");
$bible_versions[] = Array("value" => 1, "type" => 1, "text" => "Shqip (sq)");
$bible_versions[] = Array("value" => 1, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Albanian Bible");
$bible_versions[] = Array("value" => 44, "type" => 1, "text" => "Svenska (sv)");
$bible_versions[] = Array("value" => 44, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Levande Bibeln");
$bible_versions[] = Array("value" => 7, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Svenska 1917");
$bible_versions[] = Array("value" => 75, "type" => 1, "text" => "Kiswahili (sw)");
$bible_versions[] = Array("value" => 75, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Swahili New Testament");
$bible_versions[] = Array("value" => 43, "type" => 1, "text" => "Tagalog (tl)");
$bible_versions[] = Array("value" => 43, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ang Salita ng Diyos");
$bible_versions[] = Array("value" => 27, "type" => 1, "text" => "Українська (uk)");
$bible_versions[] = Array("value" => 27, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ukrainian Bible");
$bible_versions[] = Array("value" => 113, "type" => 1, "text" => "Uspanteco (usp)");
$bible_versions[] = Array("value" => 113, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uspanteco");
$bible_versions[] = Array("value" => 19, "type" => 1, "text" => "Tiêng Viêt (vi)");
$bible_versions[] = Array("value" => 19, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1934 Vietnamese Bible");
$bible_versions[] = Array("value" => 80, "type" => 1, "text" => "汉语 (zh)");
$bible_versions[] = Array("value" => 80, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chinese Union Version (Simplified)");
$bible_versions[] = Array("value" => 22, "type" => 0, "text" => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chinese Union Version (Traditional)");


$biblija_knjige[] = array ("1 Mz", "1 Mojz", "Gen", "Gn", "Ge", "Post", "Has", "Geneza", "1 Mojzes", "Genesis", "1 Mose", "Génesis", "Beresjiet");
$biblija_knjige[] = array ("2 Mz", "2 Mojz", "Exo", "Ex", "Exod", "Izl", "Ir", "Eksodus", "2 Mojzes", "Exodus", "2 Mose", "Éxodo", "Sjemot");
$biblija_knjige[] = array ("3 Mz", "3 Mojz", "Lev", "Lév", "Lv", "Lb", "Leu", "Levitik", "3 Mojzes", "Leviticus", "3 Mose", "Levítico", "Wajikra");
$biblija_knjige[] = array ("4 Mz", "4 Mojz", "Num", "Nm", "Nu", "Nb", "Nomb", "Br", "Zen", "Numeri", "4 Mojzes", "Numbers", "4 Mose", "Números", "Bemidbar");
$biblija_knjige[] = array ("5 Mz", "5 Mojz", "Deu", "Dt", "Deut", "Pnz", "Devteronomij", "5 Mojzes", "Deuteronomium", "Deuteronomy", "5 Mose", "Deuteronomio", "Devariem");
$biblija_knjige[] = array ("Joz", "Jos", "Josh", "Ios", "Jš", "Jozue", "Joshua", "Jozua", "Josua", "Josué", "Jehoesjoea");
$biblija_knjige[] = array ("Sod", "Sodn", "Jdg", "Judg", "Jg", "Jug", "Jdc", "Jue", "Jt", "Idc", "Re", "Ri", "Richt", "Epa", "Sodniki", "Judges", "Rechters", "Richteren", "Richter", "Jueces", "Juges", "Sjoftiem");
$biblija_knjige[] = array ("Rut", "Ru", "Rth", "Rt", "Ruth", "Ruta", "Roet");
$biblija_knjige[] = array ("1 Sam", "1 Sa", "1 S", "1 Sm", "1 Rg", "1 Regn", "1 Samuel", "1 Samuël", "1 Sjmoeëel");
$biblija_knjige[] = array ("2 Sam", "2 Sa", "2 S", "2 Sm", "2 Rg", "2 Regn", "2 Samuel", "2 Samuël", "2 Sjmoeëel");
$biblija_knjige[] = array ("1 Kr", "1 Kra", "1 Kralj", "1 Ki", "1 Kgs", "1 R", "1 Re", "3 Rg", "3 Regn", "1 Kon", "1 Kön", "1 Erg", "1 Rois", "1 Kings", "1 Kralji", "1 Koningen", "1 Königen", "1 Reyes", "1 Melachiem");
$biblija_knjige[] = array ("2 Kr", "2 Kra", "2 Kralj", "2 Ki", "2 Kgs", "2 R", "2 Re", "4 Rg", "4 Regn", "2 Kon", "2 Kön", "2 Erg", "2 Rois", "2 Kings", "2 Kralji", "2 Koningen", "2 Königen", "2 Reyes", "2 Melachiem");
$biblija_knjige[] = array ("1 Krn", "1 Kron", "1 Let", "1 Ljet", "1 Ch", "1 Cr", "1 Cro", "1 Kro", "1 Chron", "1 Chr", "1 kroniška", "1 Letopisi", "1 Chronicles", "1 Kronieken", "1 Chronik", "1 Crónicas", "1 Devariem");
$biblija_knjige[] = array ("2 Krn", "2 Kron", "2 Let", "2 Ljet", "2 Ch", "2 Cr", "2 Cro", "2 Kro", "2 Chron", "2 Chr", "2 kroniška", "2 Letopisi", "2 Chronicles", "2 Kronieken", "2 Chronik", "2 Crónicas", "2 Devariem");
$biblija_knjige[] = array ("Ezr", "Ezdr", "Ezra", "Esra", "Esr", "Esd", "1 Ezr", "1 Esr", "Ezdra", "Esdras");
$biblija_knjige[] = array ("Neh", "Néh", "Ne", "Né", "2 Ezr", "2 Esr", "Nehemija", "Nehemiah", "Nehemia", "Nehemías", "Nechemja");
$biblija_knjige[] = array ("Est", "Ester", "Esth", "Esther", "Estera");
$biblija_knjige[] = array ("Job", "Hi", "Jb", "Iob", "Hiob", "Ijob", "Iov");
$biblija_knjige[] = array ("Ps", "Psa", "PsG", "Sal", "Sl", "Psalm", "Psalmi", "Psalms", "Psalmen", "Salmos", "Tehiliem");
$biblija_knjige[] = array ("Prg", "Preg", "Pro", "Prov", "Pr", "Prv", "Prou", "Spr", "Izr", "EsZ", "Pregovori", "Proverbs", "Spreuken", "Sprüche", "Sprichwörter", "Proverbios", "Misjlee");
$biblija_knjige[] = array ("Prd", "Prid", "Prop", "Ec", "Ecc", "Eccl", "Ecl", "Qo", "Qoh", "Coh", "Koh", "Pred", "Pridigar", "Ecclesiastes", "Prediker", "Prediger", "Qoheleth", "Qohéleth", "Eclesiastés", "Kohelet");
$biblija_knjige[] = array ("Vp", "Sng", "Song", "Sgs", "SS", "Cant", "Cnt", "Ct", "Kt", "Hoogl", "Hl", "Hld", "Pj", "VisokaPesem", "VisokaP", "Canticles", "Hooglied", "Hoheslied", "Cantares", "Sjier Hasjiriem");
$biblija_knjige[] = array ("Iz", "Izai", "Izaija", "Isa", "Is", "Jes", "Js", "Es", "És", "Isaiah", "Jesaja", "Isaías", "Jesjaja");
$biblija_knjige[] = array ("Jer", "Jér", "Jr", "Ier", "Jeremija", "Jeremiah", "Jeremia", "Jeremías", "Jirmeja");
$biblija_knjige[] = array ("Žal", "Lam", "La", "Lm", "Thr", "Klaagl", "Kl", "Klgl", "Klgld", "Tuž", "Nk", "Žalostinke", "Lamentations", "Klaagliederen", "Klagelieder", "Lamentaciones", "Echa");
$biblija_knjige[] = array ("Ezk", "Ez", "Eze", "Ezec", "Ezek", "Ézék", "Hes", "Ezekiel", "Ezekijel", "Ezechiël", "Ezechiel", "Hesekiel", "Ézékiel", "Ezequiel", "Jechezkeel");
$biblija_knjige[] = array ("Dan", "Da", "Dn", "Daniel", "Danijel", "Daniël", "Danieel");
$biblija_knjige[] = array ("Oz", "Ozea", "Hos", "Ho", "Os", "Hoš", "Ozej", "Hosea", "Osee", "Osée", "Oseas", "Hosjea");
$biblija_knjige[] = array ("Jl", "Jol", "Joel", "Ioel", "Joël", "Joëel");
$biblija_knjige[] = array ("Am", "Amo", "Amos", "Amós");
$biblija_knjige[] = array ("Abd", "Ab", "Oba", "Obd", "Obad", "Ob", "Abdija", "Obadija", "Obadiah", "Obadja", "Abdías", "Ovadja");
$biblija_knjige[] = array ("Jon", "Jnh", "Ion", "Jona", "Jonah", "Jonás");
$biblija_knjige[] = array ("Mih", "Mic", "Mi", "Mch", "Mich", "Miq", "Mihej", "Miha", "Micah", "Micha", "Miqueas");
$biblija_knjige[] = array ("Nah", "Nam", "Na", "Nahum", "Nahúm", "Nachoem");
$biblija_knjige[] = array ("Hab", "Ha", "Habakuk", "Habakkuk", "Habacuc", "Chavakoek");
$biblija_knjige[] = array ("Sof", "Zep", "Zeph", "Zef", "Sef", "So", "Soph", "Sofonija", "Zefanija", "Zephaniah", "Sefanja", "Zephanja", "Zefanja", "Sofonías", "Tsefanja");
$biblija_knjige[] = array ("Ag", "Hag", "Hagg", "Hgg", "Hg", "Agg", "Agej", "Hagaj", "Haggai", "Hageo", "Chagai");
$biblija_knjige[] = array ("Zah", "Zec", "Zech", "Zch", "Za", "Zac", "Zach", "Sach", "Zaharija", "Zechariah", "Zacharia", "Sacharja", "Zacarías", "Zecharja");
$biblija_knjige[] = array ("Mal", "Ml", "Malahija", "Malachi", "Maleachi", "Malaquías");
$biblija_knjige[] = array ("Mt", "Mat", "Matt", "Matej", "Matevž", "Matthew", "Matteüs", "Matteus", "Matthäus", "Mateo");
$biblija_knjige[] = array ("Mr", "Mar", "Mrk", "Mk", "Mc", "Marko", "Mark", "Marcus", "Markus", "Marc", "Marcos");
//$biblija_knjige[] = array ("Lk", "Luk", "Lc", "Luc", "Lu", "L", "Luka", "Lukež", "Luke", "Lucas", "Lukas", "Lucas");
$biblija_knjige[] = array ("Lk", "Luk", "Lc", "Luc", "Lu", "Luka", "Lukež", "Luke", "Lucas", "Lukas", "Lucas");
//$biblija_knjige[] = array ("Jn", "Jan", "Jhn", "Joh", "Jo", "J", "Io", "Iv", "Janez", "John", "Johannes", "Jean", "Juan");
$biblija_knjige[] = array ("Jn", "Jan", "Jhn", "Joh", "Jo", "Io", "Iv", "Janez", "John", "Johannes", "Jean", "Juan");
$biblija_knjige[] = array ("Apd", "Dej", "DejAp", "Act", "Ac", "Hand", "Hnd", "Apg", "Dj", "Hch", "Eg", "Acts", "Dela", "Dejanja", "Handelingen", "Apostelgeschichte", "Hechos");
//$biblija_knjige[] = array ("Rim", "Rimlj", "Rom", "Röm", "Ro", "Rm", "R", "Erm", "Rimljanom", "Romans", "Romeinen", "Römer", "Romanos");
$biblija_knjige[] = array ("Rim", "Rimlj", "Rom", "Röm", "Ro", "Rm", "Erm", "Rimljanom", "Romans", "Romeinen", "Römer", "Romanos");
$biblija_knjige[] = array ("1 Kor", "1 Cor", "1 Co", "1 Ko", "1 K", "1 Korinčanom", "1 Corinthians", "1 Korintiërs", "1 Korintiers", "1 Korinthe", "1 Korinther", "1 Corintios");
$biblija_knjige[] = array ("2 Kor", "2 Cor", "2 Co", "2 Ko", "2 K", "2 Korinčanom", "2 Corinthians", "2 Korintiërs", "2 Korintiers", "2 Korinthe", "2 Korinther", "2 Corintios");
//$biblija_knjige[] = array ("Gal", "Ga", "Gl", "Galat", "G", "Galačanom", "Galatians", "Galaten", "Galater", "Gálatas");
$biblija_knjige[] = array ("Gal", "Ga", "Gl", "Galat", "Galačanom", "Galatians", "Galaten", "Galater", "Gálatas");
//$biblija_knjige[] = array ("Ef", "Efež", "Éfez", "Efez", "Eph", "Éph", "Ep", "E", "Efežanom", "Ephesians", "Efeziërs", "Efeziers", "Efeze", "Epheser", "Efesios");
$biblija_knjige[] = array ("Ef", "Efež", "Éfez", "Efez", "Eph", "Éph", "Ep", "Efežanom", "Ephesians", "Efeziërs", "Efeziers", "Efeze", "Epheser", "Efesios");
$biblija_knjige[] = array ("Flp", "Filip", "Filipp", "Fil", "Fl", "Php", "Ph", "Phil", "Phili", "Filipljanom", "Philippians", "Filippenzen", "Philipper", "Filipenses");
$biblija_knjige[] = array ("Kol", "Col", "Kološanom", "Colossians", "Kolossenzen", "Kolosser", "Colosenses");
$biblija_knjige[] = array ("1 Tes", "1 Sol", "1 Th", "1 Ts", "1 Te", "1 Tess", "1 Thes", "1 Thess", "1 Tesaloničanom", "1 Thessalonians", "1 Tessalonicenzen", "1 Thessalonicher", "1 Tesalonicenses");
$biblija_knjige[] = array ("2 Tes", "2 Sol", "2 Th", "2 Ts", "2 Te", "2 Tess", "2 Thes", "2 Thess", "2 Tesaloničanom", "2 Thessalonians", "2 Tessalonicenzen", "2 Thessalonicher", "2 Tesalonicenses");
$biblija_knjige[] = array ("1 Tim", "1 Ti", "1 Tm", "1 T", "1 Timoteju", "1 Timothy", "1 Timoteüs", "1 Timoteus", "1 Timotheus", "1 Timoteo");
$biblija_knjige[] = array ("2 Tim", "2 Ti", "2 Tm", "2 T", "2 Timoteju", "2 Timothy", "2 Timoteüs", "2 Timoteus", "2 Timotheus", "2 Timoteo");
$biblija_knjige[] = array ("Tit", "Tt", "Titus", "Titu", "Tite", "Tito");
$biblija_knjige[] = array ("Flm", "Filem", "Film", "Phm", "Phlm", "Phile", "Philem", "Filemonu", "Philemon", "Filemon", "Filemón");
//$biblija_knjige[] = array ("Heb", "Hebr", "Hébr", "Hbr", "Hb", "He", "Hé", "H", "Hebrejcem", "Hebrews", "Hebreeërs", "Hebreeers", "Hebreeën", "Hebreeen", "Hebräer", "Hebreos");
$biblija_knjige[] = array ("Heb", "Hebr", "Hébr", "Hbr", "Hb", "He", "Hé", "Hebrejcem", "Hebrews", "Hebreeërs", "Hebreeers", "Hebreeën", "Hebreeen", "Hebräer", "Hebreos");
$biblija_knjige[] = array ("Jak", "Jas", "Jam", "Jm", "Ja", "Jc", "Jac", "Jacq", "Iac", "Stg", "St", "Jakob", "James", "Jakobus", "Santiago");
$biblija_knjige[] = array ("1 Pt", "1 Pet", "1 Petr", "1 Pe", "1 Pi", "1 P", "1 Peter", "1 Petrus", "1 Pedro");
$biblija_knjige[] = array ("2 Pt", "2 Pet", "2 Petr", "2 Pe", "2 Pi", "2 P", "2 Peter", "2 Petrus", "2 Pedro");
$biblija_knjige[] = array ("1 Jn", "1 Jan", "1 Joh", "1 Jo", "1 J", "1 Io", "1 Iv", "1 John", "1 Janez", "1 Johannes", "1 Jean", "1 Juan");
$biblija_knjige[] = array ("2 Jn", "2 Jan", "2 Joh", "2 Jo", "2 J", "2 Io", "2 Iv", "2 John", "2 Janez", "2 Johannes", "2 Jean", "2 Juan");
$biblija_knjige[] = array ("3 Jn", "3 Jan", "3 Joh", "3 Jo", "3 J", "3 Io", "3 Iv", "3 John", "3 Janez", "3 Johannes", "3 Jean", "3 Juan");
$biblija_knjige[] = array ("Jud", "Juda", "Jude", "Jd", "Ju", "Iud", "Judas");
$biblija_knjige[] = array ("Raz", "Rev", "Ap", "Apc", "Apoc", "Apok", "Apk", "Op", "Openb", "Offb", "Otk", "Razodetje", "Apokalipsa", "Revelation", "Openbaring", "Apokalyps", "Offenbarung", "Apocalipsis");
$biblija_knjige[] = array ("EstG", "EsG", "EstGr", "EsthGr", "EstGrec", "EstD", "EstDC", "GkEst", "AddEsth", "StEst", "Estera(gr)", "Estera(grška)", "Esther(gr)", "Esther(Greek)", "Ester(griechisch)", "Ester(Griego)");
$biblija_knjige[] = array ("Jdt", "Jdth", "Idt", "Judita", "Judith", "Judit");
$biblija_knjige[] = array ("Tob", "Tb", "Tobit", "Tobija");
$biblija_knjige[] = array ("1 Mkb", "1 Mak", "1 Makk", "1 Mc", "1 Mac", "1 Macc", "1 Mcc", "1 Ma", "1 M", "1 Makabejci", "1 Maccabees", "1 Makkabeeën", "1 Makkabeeen", "1 Makkabeeërs", "1 Makkabeeers", "1 Makkabäer", "1 Macabeos");
$biblija_knjige[] = array ("2 Mkb", "2 Mak", "2 Makk", "2 Mc", "2 Mac", "2 Macc", "2 Mcc", "2 Ma", "2 M", "2 Makabejci", "2 Maccabees", "2 Makkabeeën", "2 Makkabeeen", "2 Makkabeeërs", "2 Makkabeeers", "2 Makkabäer", "2 Macabeos");
$biblija_knjige[] = array ("3 Mkb", "3 Mak", "3 Makk", "3 Mc", "3 Mac", "3 Macc", "3 Mcc", "3 Ma", "3 M", "3 Makabejci", "3 Maccabees", "3 Makkabeeën", "3 Makkabeeen", "3 Makkabeeërs", "3 Makkabeeers", "3 Makkabäer", "3 Macabeos");
$biblija_knjige[] = array ("4 Mkb", "4 Mak", "4 Makk", "4 Mc", "4 Mac", "4 Macc", "4 Mcc", "4 Ma", "4 M", "4 Makabejci", "4 Maccabees", "4 Makkabeeën", "4 Makkabeeen", "4 Makkabeeërs", "4 Makkabeeers", "4 Makkabäer", "4 Macabeos");
$biblija_knjige[] = array ("Mdr", "Modr", "Wis", "Wisd", "Weish", "Wijsh", "Sg", "Sag", "Sap", "Sb", "Sab", "Sv", "Mudr", "Jkd", "Modrost", "Wisdom", "Wijsheid", "Weisheit", "Sabiduría");
//$biblija_knjige[] = array ("Mdr", "Modr", "Wis", "Wisd", "Weish", "Wijsh", "W", "Sg", "Sag", "Sap", "Sb", "Sab", "Sv", "Mudr", "Jkd", "Modrost", "Wisdom", "Wijsheid", "Weisheit", "Sabiduría");
$biblija_knjige[] = array ("Sir", "Si", "Sirah", "Sirach", "Eclo", "Ecclesiasticus", "Ecclesiastique", "Ecclésiastique", "Eclesiástico");
$biblija_knjige[] = array ("Bar", "Ba", "Baruh", "Baruch", "Baruc");
$biblija_knjige[] = array ("JerP", "LJe", "LJer", "LtJr", "LetJer", "LettreJer", "EpJer", "EpJr", "EpistJer", "BrJer", "CtJ", "JrGt", "JeremijevoP", "JeremijevoPismo", "BriefJeremias", "BrfJer");
$biblija_knjige[] = array ("DanD", "AddDan", "DanAdd", "StDan", "DanZ", "DnGrec", "DanGrec", "DnDC", "DnGr", "PrAzar", "Az", "S3Y", "SofThr", "SongThr", "Daniel(dodatki)", "Daniel(Additions)", "Daniël(Grieks)", "ZusätzezuDaniel", "ToevDan", "DanGr");
$biblija_knjige[] = array ("Suz", "Sus", "Suzana", "Susanna", "Susana");
$biblija_knjige[] = array ("Bel", "BelDr", "Zmaj", "Dragon");
$biblija_knjige[] = array ("Man", "PrMan", "OrMan", "GebMan", "Manase", "Manasse", "Manasses", "PrManasses");
$biblija_knjige[] = array ("1 Esd", "3 Esr", "3 Ezr", "3 Ezra", "1 Esdras", "1 Ezdra", "3 Esdras");
$biblija_knjige[] = array ("2 Esd", "4 Esr", "4 Ezr", "4 Ezra", "2 Esdras", "2 Ezdra", "4 Esdras");
$biblija_knjige[] = array ("Ps151", "Sal151", "Sl151", "Psalm151", "Salmo151", "PsCLI");
$biblija_knjige[] = array ("Lao", "Laod", "Laodikejcem", "Laodiceans");
$biblija_knjige[] = array ("PsH", "PsHeb", "SIH", "PsalmH", "PsalmiH");

//$bible_ver[1] = "Bible Gateway";
$i = 0;
foreach ($biblija_knjige as $knjige) {
	foreach ($knjige as $knjiga) {
		$moje_knjige[$i++] = $knjiga;
	}
}
function biblegateway_my_cmp($a, $b) {
	if (strlen($a) == strlen($b)) {
		return 0;
	}
	return (strlen($a) > strlen($b)) ? -1 : 1;
}
function biblegateway_version_cmp($a, $b) {
	return strcmp($a, $b);
}
usort($moje_knjige, "biblegateway_my_cmp");
//uasort($bible_ver, "biblegateway_version_cmp");
$biblegateway_url = 'http://www.biblegateway.com/passage/?search=';
add_filter('the_content', 'biblegateway_the_content');
add_action('admin_menu', 'biblegateway_add_options');
if (isset($_GET['activate']) and $_GET['activate'] == 'true') {
	add_action('init', 'biblegateway_init_options');
}

function biblegateway_to_ord ($str) {
	$out = "";
	$j = strlen($str);
	for ($i=0; $i<$j;$i++) {
		$out .= "&#".ord(substr($str,$i)).";";
	}
	return $out;
}

function biblegateway_init_options() {
	if (current_user_can('manage_options')) {
		add_option('wp_bible_gateway_version', -1, 'Wordpress Bible Gateway Version');
		add_option('wp_bible_gateway_window',false, 'Wordpress Bible Gateway New Window');
	}
}

function biblegateway_add_options() {
	if (function_exists('add_options_page')) {
		add_options_page('WP Bible Gateway', 'WP Bible Gateway', 9, __FILE__, 'biblegateway_show_options');
	}
}

function biblegateway_show_options() {
	global $bible_versions;
	$version = get_option('wp_bible_gateway_version');
	$window = (bool) get_option('wp_bible_gateway_window');
?>
<div class="wrap">
  <h2>Wordpress Bible Gateway Options</h2>
  <form action="options.php" method="post">
    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="page_options" value="wp_bible_gateway_version,wp_bible_gateway_window" />
    <?php if (function_exists('wp_nonce_field')): wp_nonce_field('update-options'); endif; ?>
    <table class="form-table">
      <tr valign="top">
        <th scope="row"><label for="wp_bible_gateway_version">Bible Gateway Version</label></th>
        <td>
			<select name="wp_bible_gateway_version" id="wp_bible_gateway_version">
<?php
	foreach ($bible_versions as $bible_version) {
			$value = $bible_version['value'];
			echo '<option value="'.$value.'"'.($value == $version && $bible_version['type'] == 0 ? ' selected="selected"' : '').'>'.$bible_version['text'].'</option>
';
	}
?>
			</select>
			<br />
        </td>
      </tr>
      <tr valign="top">
        <th scope="row"><label for="wp_bible_gateway_window">New Window</label></th>
        <td>
			<input type="checkbox" id="wp_bible_gateway_window" name="wp_bible_gateway_window"<?php echo ($window ? ' checked="checked"' : ''); ?> value="1" /> Open links in new window
			<br />
        </td>
      </tr>
    </table>
    <p class="submit">
      <input type="submit" name="Submit" value="Save Changes" />
    </p>
  </form>
</div>
<?php
		}

function biblegateway_debugger( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

function biblegateway_the_content($content) {
	global $moje_knjige, $biblegateway_url;
	$version = get_option('wp_bible_gateway_version');
	$suffix = ($version != -1 ? '&version='.$version : '');
	$window = (bool) get_option('wp_bible_gateway_window');
	$linkcode = ($window ? ' target="_new"' : '');
	foreach ($moje_knjige as $knjiga){
		$reg = "@$knjiga [0-9]+(([:,-][ ]{0,1}){0,1}[0-9]*[ \-0-9,\.:]*[0-9])*@mi";
		if (preg_match_all($reg, $content, $matches)) {
			foreach ($matches[0] as $curr_match) {
				//biblegateway_debugger($curr_match);
				$match_encoded = biblegateway_to_ord($curr_match);
				$url = $biblegateway_url.urlencode($curr_match).$suffix;
				$content = preg_replace ("/".$curr_match."/", "<a class=\"biblegateway_link\" href=\"$url\"$linkcode>$match_encoded</a>", $content, 1);
			}
		}
		$reg = "@$knjiga [0-9]+ verses [0-9]* to [0-9]*@mi";
		if (preg_match_all($reg, $content, $matches, PREG_PATTERN_ORDER)) {
			foreach ($matches[0] as $curr_match) {
				$match_encoded = str_replace(" to ","-",str_replace(" verses ",":",$curr_match));
				$url = $biblegateway_url.urlencode($match_encoded).$suffix;
				$content = str_replace ($curr_match, "<a class=\"biblegateway_link\" href=\"$url\"$linkcode>$curr_match</a>", $content);
			}
		}
	}
	$content = str_replace (array ("[biblija]", "[/biblija]"), array("", ""), $content);
	return $content;
}