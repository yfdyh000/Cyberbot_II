<?php
/*
	Copyright (c) 2015-2017, Maximilian Doerr
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

$locales = [
	'af'      => [ 'af_ZA.UTF-8', 'Afrikaans_South Africa.1252' ],
	'als'     => [ 'de_DE.UTF-8', 'German_Germany.1252' ],
	'bar'     => [ 'de_DE.UTF-8', 'German_Germany.1252' ],
	'ar'      => [ 'ar_SA.UTF-8', 'Arabic_Saudi Arabia.1256' ],
	'be'      => [ 'be_BY.UTF-8', 'Belarusian_Belarus.1251' ],
	'bg'      => [ 'bg_BG.UTF-8', 'Bulgarian_Bulgaria.1251' ],
	'bs'      => [ 'bs_BA.UTF-8', 'Bosnian (Latin)' ],
	'ca'      => [ 'ca_ES.UTF-8', 'Catalan_Spain.1252' ],
	'cs'      => [ 'cs_CZ.UTF-8', 'Czech_Czech Republic.1250' ],
	'da'      => [ 'da_DK.UTF-8', 'Danish_Denmark.1252' ],
	'de'      => [ 'de_DE.UTF-8', 'German_Germany.1252' ],
	'el'      => [ 'el_GR.UTF-8', 'Greek_Greece.1253' ],
	'en'      => [ 'en_US.UTF-8', 'en.UTF-8', 'English_Australia.1252' ],
	'es'      => [ 'es_ES.UTF-8', 'Spanish_Spain.1252' ],
	'et'      => [ 'et_EE.UTF-8', 'Estonian_Estonia.1257' ],
	'eu'      => [ 'eu_ES.UTF-8', 'Basque_Spain.1252' ],
	'fa'      => [ 'fa_IR.UTF-8', 'Farsi_Iran.1256' ],
	'fi'      => [ 'fi_FI.UTF-8', 'Finnish_Finland.1252' ],
	'fil'     => [ 'ph_PH.UTF-8', 'Filipino_Philippines.1252' ],
	'fr'      => [ 'fr_FR.UTF-8', 'fr_CH.UTF-8', 'fr_BE.UTF-8', 'French_France.1252' ],
	'fr_can'  => [ 'fr_CA.UTF-8', 'French_Canada.1252' ],
	'ga'      => [ 'ga.UTF-8', 'ga_IE.UTF-8', 'Gaelic', 'Scottish Gaelic', 'Gaelic; Scottish Gaelic' ],
	'gl'      => [ 'gl_ES.UTF-8', 'Galician_Spain.1252' ],
	'gu'      => [ 'gu.UTF-8', 'gu_IN.UTF-8', 'Gujarati_India.0' ],
	'he'      => [ 'he_IL.utf8', 'Hebrew_Israel.1255' ],
	'hi'      => [ 'hi_IN.UTF-8', 'Hindi.65001' ],
	'hr'      => [ 'hr_HR.UTF-8', 'Croatian_Croatia.1250' ],
	'hu'      => [ 'hu.UTF-8', 'hu_HU.UTF-8', 'Hungarian_Hungary.1250' ],
	'id'      => [ 'id_ID.UTF-8', 'Indonesian_indonesia.1252' ],
	'is'      => [ 'is_IS.UTF-8', 'Icelandic_Iceland.1252' ],
	'it'      => [ 'it_IT.UTF-8', 'Italian_Italy.1252' ],
	'ja'      => [ 'ja_JP.UTF-8', 'Japanese_Japan.932' ],
	'ka'      => [ 'ka_GE.UTF-8', 'Georgian_Georgia.65001' ],
	'km'      => [ 'km_KH.UTF-8', 'Khmer.65001' ],
	'kn'      => [ 'kn_IN.UTF-8', 'Kannada.65001' ],
	'ko'      => [ 'ko_KR.UTF-8', 'Korean_Korea.949' ],
	'lo'      => [ 'lo_LA.UTF-8', 'Lao_Laos.UTF-8' ],
	'lt'      => [ 'lt_LT.UTF-8', 'Lithuanian_Lithuania.1257' ],
	'lv'      => [ 'lat.UTF-8', 'Latvian_Latvia.1257' ],
	'mi'      => [ 'mi_NZ.UTF-8', 'Maori.1252' ],
	'ml'      => [ 'ml_IN.UTF-8', 'Malayalam_India.x-iscii-ma' ],
	'mn'      => [ 'mn.UTF-8', 'mn_MN.UTF-8', 'Cyrillic_Mongolian.1251' ],
	'ms'      => [ 'ms_MY.UTF-8', 'Malay_malaysia.1252' ],
	'nb'      => [
		'no_NO.UTF-8', 'no_NO', 'no_NO.ISO8859-1', 'no_NO.ISO8859-15', 'nb_NO', 'nb_NO.iso88591',
		'Norwegian_Norway.1252'
	],
	'nl'      => [ 'nl_NL.UTF-8', 'nl_AW', 'nl_AW.utf8', 'nl_BE.utf8', 'Dutch_Netherlands.1252' ],
	'nn'      => [ 'nn_NO', 'nn_NO.iso88591', 'nn_NO.UTF-8', 'Norwegian-Nynorsk_Norway.1252' ],
	'pa'      => [ 'pa_IN.UTF-8', 'pa_PK.UTF-8' ],
	'pl'      => [ 'pl.UTF-8', 'pl_PL.UTF-8', 'Polish_Poland.1250' ],
	'pt'      => [ 'pt_PT.UTF-8', 'Portuguese_Portugal.1252' ],
	'pt_br'   => [ 'pt_BR.UTF-8', 'Portuguese_Brazil.1252' ],
	'ro'      => [ 'ro_RO.UTF-8', 'Romanian_Romania.1250' ],
	'ru'      => [ 'ru_RU.UTF-8', 'Russian_Russia.1251' ],
	'sk'      => [ 'sk_SK.UTF-8', 'Slovak_Slovakia.1250' ],
	'sl'      => [ 'sl_SI.UTF-8', 'Slovenian_Slovenia.1250' ],
	'sm'      => [ 'mi_NZ.UTF-8', 'Maori.1252' ],
	'so'      => [ 'so_SO.UTF-8' ],
	'sr'      => [ 'sr_CS.UTF-8', 'sr_ME.UTF-8', 'sr_RS.UTF-8@latin', 'sr_RS.UTF-8', 'Bosnian(Cyrillic)', 'Serbian (Cyrillic)' ],
	'sq'      => [ 'sq_AL.UTF-8', 'Albanian_Albania.1250', ],
	'sv'      => [ 'sv_SE.UTF-8', 'Swedish_Sweden.1252' ],
	'ta'      => [ 'ta_IN.UTF-8', 'ta_IN.UTF-8', 'ta_LK.UTF-8', 'English_Australia.1252' ],
	'th'      => [ 'th_TH.UTF-8', 'Thai_Thailand.874' ],
	'tl'      => [ 'tl.UTF-8', 'tl_PH.UTF-8' ],
	'to'      => [ 'mi_NZ.UTF-8', 'Maori.1252' ],
	'tr'      => [ 'tr_TR.UTF-8', 'Turkish_Turkey.1254' ],
	'uk'      => [ 'uk_UA.UTF-8', 'Ukrainian_Ukraine.1251' ],
	'vi'      => [ 'vi_VN.UTF-8', 'Vietnamese_Viet Nam.1258' ],
	'zh-hans' => [ 'zh_CN.UTF-8', 'zh_CN.gb2312', 'Chinese_China.936' ],
	'zh-hant' => [ 'zh_TW.UTF-8', 'zh_TW.big5', 'Chinese_Taiwan.950' ]
];

$accessibleWikis = [
	'specieswiki' => [
		'name'     => '{{{specieswikiname}}}',
		'language' => 'en',
		'rooturl'  => 'https://species.wikimedia.org/'
	],
	'alswiki'     => [
		'name'     => '{{{alswikiname}}}',
		'language' => 'als',
		'rooturl'  => 'https://als.wikipedia.org/'
	],
	'barwiki'     => [
		'name'     => '{{{barwikiname}}}',
		'language' => 'bar',
		'rooturl'  => 'https://bar.wikipedia.org/'
	],
	'ckbwiki'     => [
		'name'     => '{{{ckbwikiname}}}',
		'language' => 'ckb',
		'rooturl'  => 'https://ckb.wikipedia.org/'
	],
	'dewiki'     => [
		'name'     => '{{{dewikiname}}}',
		'language' => 'de',
		'rooturl'  => 'https://de.wikipedia.org/'
	],
	'enwiki'      => [
		'name'     => '{{{enwikiname}}}',
		'language' => 'en',
		'rooturl'  => 'https://en.wikipedia.org/'
	],
	'eswiki'      => [
		'name'     => '{{{eswikiname}}}',
		'language' => 'es',
		'rooturl'  => 'https://es.wikipedia.org/'
	],
	'frwiki'      => [
		'name'     => '{{{frwikiname}}}',
		'language' => 'fr',
		'rooturl'  => 'https://fr.wikipedia.org/'
	],
	'itwiki'      => [
		'name'     => '{{{itwikiname}}}',
		'language' => 'it',
		'rooturl'  => 'https://it.wikipedia.org/'
	],
	'jawiki'      => [
		'name'     => '{{{jawikiname}}}',
		'language' => 'ja',
		'rooturl'  => 'https://ja.wikipedia.org/'
	],
	'nlwiki'      => [
		'name'     => '{{{nlwikiname}}}',
		'language' => 'nl',
		'rooturl'  => 'https://nl.wikipedia.org/'
	],
	'nowiki'      => [
		'name'     => '{{{nowikiname}}}',
		'language' => 'nb',
		'rooturl'  => 'https://no.wikipedia.org/'
	],
	'ruwiki'      => [
		'name'     => '{{{ruwikiname}}}',
		'language' => 'ru',
		'rooturl'  => 'https://ru.wikipedia.org/'
	],
	'svwiki'      => [
		'name'     => '{{{svwikiname}}}',
		'language' => 'sv',
		'rooturl'  => 'https://sv.wikipedia.org/'
	],
	'zhwiki'      => [
		'name'     => '{{{zhwikiname}}}',
		'language' => 'zh-hans',
		'rooturl'  => 'https://zh.wikipedia.org/'
	]
];