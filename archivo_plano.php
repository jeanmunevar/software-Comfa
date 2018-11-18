<?php
$nombre_fichero = ".\REPORTE CONTACTO.txt";
$gestor = fopen($nombre_fichero, "r");
$contenido = fread($gestor, filesize($nombre_fichero));
$array =explode("\n", $contenido , filesize($nombre_fichero));
$datosEnArray2 = array();
$tsDepartamentos = array( 
    91 => 'AMAZONAS', 
    05 => 'ANTIOQUIA', 
    81 => 'ARAUCA', 
    '08' => 'ATLANTICO',
    11 => 'BOGOTA D.C.',		 
    13 => 'BOLIVAR', 
    15 => 'BOYACA', 
    17 => 'CALDAS', 
    18 => 'CAQUETA', 
    85 => 'CASANARE', 
    19 => 'CAUCA', 
    20 => 'CESAR', 
    12 => 'CHOCO', 
    23 => 'CORDOBA', 
    25 => 'CUNDINAMARCA', 
    94 => 'GUAINIA', 
    44 => 'GUAJIRA', 
    95 => 'GUAVIARE', 
    41 => 'HUILA', 
    47 => 'MAGDALENA', 
    50 => 'META', 
    54 => 'N SANTANDER', 
    52 => 'NARINO', 
    86 => 'PUTUMAYO', 
    63 => 'QUINDIO', 
    66 => 'RISARALDA', 
    88 => 'SAN ANDRES', 
    68 => 'SANTANDER', 
    70 => 'SUCRE', 
    73 => 'TOLIMA', 
    76 => 'VALLE DEL CAUCA', 
    97 => 'VAUPES', 
    99 => 'VICHADA', 
);
$municipios = array(
    '05001' => 'MEDELLIN',
    '05002' => 'ABEJORRAL',
    '05004' => 'ABRIAQUI',
    '05021' => 'ALEJANDRIA',
    '05030' => 'AMAGA',
    '05031' => 'AMALFI',
    '05034' => 'ANDES',
    '05036' => 'ANGELOPOLIS',
    '05038' => 'ANGOSTURA',
    '05040' => 'ANORI',
    '05042' => 'SANTAFE DE ANTIOQUIA',
    '05044' => 'ANZA',
    '05045' => 'APARTADO',
    '05051' => 'ARBOLETES',
    '05055' => 'ARGELIA',
    '05059' => 'ARMENIA',
    '05079' => 'BARBOSA',
    '05086' => 'BELMIRA',
    '05088' => 'BELLO',
    '05091' => 'BETANIA',
    '05093' => 'BETULIA',
    '05101' => 'CIUDAD BOLIVAR',
    '05107' => 'BRICEÑO',
    '05113' => 'BURITICA',
    '05120' => 'CACERES',
    '05125' => 'CAICEDO',
    '05129' => 'CALDAS',
    '05134' => 'CAMPAMENTO',
    '05138' => 'CAÑASGORDAS',
    '05142' => 'CARACOLI',
    '05145' => 'CARAMANTA',
    '05147' => 'CAREPA',
    '05148' => 'EL CARMEN DE VIBORAL',
    '05150' => 'CAROLINA',
    '05154' => 'CAUCASIA',
    '05172' => 'CHIGORODO',
    '05190' => 'CISNEROS',
    '05197' => 'COCORNA',
    '05206' => 'CONCEPCION',
    '05209' => 'CONCORDIA',
    '05212' => 'COPACABANA',
    '05234' => 'DABEIBA',
    '05237' => 'DON MATIAS',
    '05240' => 'EBEJICO',
    '05250' => 'EL BAGRE',
    '05264' => 'ENTRERRIOS',
    '05266' => 'ENVIGADO',
    '05282' => 'FREDONIA',
    '05284' => 'FRONTINO',
    '05306' => 'GIRALDO',
    '05308' => 'GIRARDOTA',
    '05310' => 'GOMEZ PLATA',
    '05313' => 'GRANADA',
    '05315' => 'GUADALUPE',
    '05318' => 'GUARNE',
    '05321' => 'GUATAPE',
    '05347' => 'HELICONIA',
    '05353' => 'HISPANIA',
    '05360' => 'ITAGUI',
    '05361' => 'ITUANGO',
    '05364' => 'JARDIN',
    '05368' => 'JERICO',
    '05376' => 'LA CEJA',
    '05380' => 'LA ESTRELLA',
    '05390' => 'LA PINTADA',
    '05400' => 'LA UNION',
    '05411' => 'LIBORINA',
    '05425' => 'MACEO',
    '05440' => 'MARINILLA',
    '05467' => 'MONTEBELLO',
    '05475' => 'MURINDO',
    '05480' => 'MUTATA',
    '05483' => 'NARIÑO',
    '05490' => 'NECOCLI',
    '05495' => 'NECHI',
    '05501' => 'OLAYA',
    '05541' => 'PEÐOL',
    '05543' => 'PEQUE',
    '05576' => 'PUEBLORRICO',
    '05579' => 'PUERTO BERRIO',
    '05585' => 'PUERTO NARE',
    '05591' => 'PUERTO TRIUNFO',
    '05604' => 'REMEDIOS',
    '05607' => 'RETIRO',
    '05615' => 'RIONEGRO',
    '05628' => 'SABANALARGA',
    '05631' => 'SABANETA',
    '05642' => 'SALGAR',
    '05647' => 'SAN ANDRES DE CUERQUIA',
    '05649' => 'SAN CARLOS',
    '05652' => 'SAN FRANCISCO',
    '05656' => 'SAN JERONIMO',
    '05658' => 'SAN JOSE DE LA MONTAÑA',
    '05659' => 'SAN JUAN DE URABA',
    '05660' => 'SAN LUIS',
    '05664' => 'SAN PEDRO',
    '05665' => 'SAN PEDRO DE URABA',
    '05667' => 'SAN RAFAEL',
    '05670' => 'SAN ROQUE',
    '05674' => 'SAN VICENTE',
    '05679' => 'SANTA BARBARA',
    '05686' => 'SANTA ROSA DE OSOS',
    '05690' => 'SANTO DOMINGO',
    '05697' => 'EL SANTUARIO',
    '05736' => 'SEGOVIA',
    '05756' => 'SONSON',
    '05761' => 'SOPETRAN',
    '05789' => 'TAMESIS',
    '05790' => 'TARAZA',
    '05792' => 'TARSO',
    '05809' => 'TITIRIBI',
    '05819' => 'TOLEDO',
    '05837' => 'TURBO',
    '05842' => 'URAMITA',
    '05847' => 'URRAO',
    '05854' => 'VALDIVIA',
    '05856' => 'VALPARAISO',
    '05858' => 'VEGACHI',
    '05861' => 'VENECIA',
    '05873' => 'VIGIA DEL FUERTE',
    '05885' => 'YALI',
    '05887' => 'YARUMAL',
    '05890' => 'YOLOMBO',
    '05893' => 'YONDO',
    '05895' => 'ZARAGOZA',
    '08001' => 'BARRANQUILLA',
    '08078' => 'BARANOA',
    '08137' => 'CAMPO DE LA CRUZ',
    '08141' => 'CANDELARIA',
    '08296' => 'GALAPA',
    '08372' => 'JUAN DE ACOSTA',
    '08421' => 'LURUACO',
    '08433' => 'MALAMBO',
    '08436' => 'MANATI',
    '08520' => 'PALMAR DE VARELA',
    '08549' => 'PIOJO',
    '08558' => 'POLONUEVO',
    '08560' => 'PONEDERA',
    '08573' => 'PUERTO COLOMBIA',
    '08606' => 'REPELON',
    '08634' => 'SABANAGRANDE',
    '08638' => 'SABANALARGA',
    '08675' => 'SANTA LUCIA',
    '08685' => 'SANTO TOMAS',
    '08758' => 'SOLEDAD',
    '08770' => 'SUAN',
    '08832' => 'TUBARA',
    '08849' => 'USIACURI',
    '11001' => 'BOGOTA, D.C.',
    '13001' => 'CARTAGENA',
    '13006' => 'ACHI',
    '13030' => 'ALTOS DEL ROSARIO',
    '13042' => 'ARENAL',
    '13052' => 'ARJONA',
    '13062' => 'ARROYOHONDO',
    '13074' => 'BARRANCO DE LOBA',
    '13140' => 'CALAMAR',
    '13160' => 'CANTAGALLO',
    '13188' => 'CICUCO',
    '13212' => 'CORDOBA',
    '13222' => 'CLEMENCIA',
    '13244' => 'EL CARMEN DE BOLIVAR',
    '13248' => 'EL GUAMO',
    '13268' => 'EL PEÑON',
    '13300' => 'HATILLO DE LOBA',
    '13430' => 'MAGANGUE',
    '13433' => 'MAHATES',
    '13440' => 'MARGARITA',
    '13442' => 'MARIA LA BAJA',
    '13458' => 'MONTECRISTO',
    '13468' => 'MOMPOS',
    '13490' => 'NOROSI',
    '13473' => 'MORALES',
    '13549' => 'PINILLOS',
    '13580' => 'REGIDOR',
    '13600' => 'RIO VIEJO',
    '13620' => 'SAN CRISTOBAL',
    '13647' => 'SAN ESTANISLAO',
    '13650' => 'SAN FERNANDO',
    '13654' => 'SAN JACINTO',
    '13655' => 'SAN JACINTO DEL CAUCA',
    '13657' => 'SAN JUAN NEPOMUCENO',
    '13667' => 'SAN MARTIN DE LOBA',
    '13670' => 'SAN PABLO',
    '13673' => 'SANTA CATALINA',
    '13683' => 'SANTA ROSA',
    '13688' => 'SANTA ROSA DEL SUR',
    '13744' => 'SIMITI',
    '13760' => 'SOPLAVIENTO',
    '13780' => 'TALAIGUA NUEVO',
    '13810' => 'TIQUISIO',
    '13836' => 'TURBACO',
    '13838' => 'TURBANA',
    '13873' => 'VILLANUEVA',
    '13894' => 'ZAMBRANO',
    '15001' => 'TUNJA',
    '15022' => 'ALMEIDA',
    '15047' => 'AQUITANIA',
    '15051' => 'ARCABUCO',
    '15087' => 'BELEN',
    '15090' => 'BERBEO',
    '15092' => 'BETEITIVA',
    '15097' => 'BOAVITA',
    '15104' => 'BOYACA',
    '15106' => 'BRICEÑO',
    '15109' => 'BUENAVISTA',
    '15114' => 'BUSBANZA',
    '15131' => 'CALDAS',
    '15135' => 'CAMPOHERMOSO',
    '15162' => 'CERINZA',
    '15172' => 'CHINAVITA',
    '15176' => 'CHIQUINQUIRA',
    '15180' => 'CHISCAS',
    '15183' => 'CHITA',
    '15185' => 'CHITARAQUE',
    '15187' => 'CHIVATA',
    '15189' => 'CIENEGA',
    '15204' => 'COMBITA',
    '15212' => 'COPER',
    '15215' => 'CORRALES',
    '15218' => 'COVARACHIA',
    '15223' => 'CUBARA',
    '15224' => 'CUCAITA',
    '15226' => 'CUITIVA',
    '15232' => 'CHIQUIZA',
    '15236' => 'CHIVOR',
    '15238' => 'DUITAMA',
    '15244' => 'EL COCUY',
    '15248' => 'EL ESPINO',
    '15272' => 'FIRAVITOBA',
    '15276' => 'FLORESTA',
    '15293' => 'GACHANTIVA',
    '15296' => 'GAMEZA',
    '15299' => 'GARAGOA',
    '15317' => 'GUACAMAYAS',
    '15322' => 'GUATEQUE',
    '15325' => 'GUAYATA',
    '15332' => 'GÜICAN',
    '15362' => 'IZA',
    '15367' => 'JENESANO',
    '15368' => 'JERICO',
    '15377' => 'LABRANZAGRANDE',
    '15380' => 'LA CAPILLA',
    '15401' => 'LA VICTORIA',
    '15403' => 'LA UVITA',
    '15407' => 'VILLA DE LEYVA',
    '15425' => 'MACANAL',
    '15442' => 'MARIPI',
    '15455' => 'MIRAFLORES',
    '15464' => 'MONGUA',
    '15466' => 'MONGUI',
    '15469' => 'MONIQUIRA',
    '15476' => 'MOTAVITA',
    '15480' => 'MUZO',
    '15491' => 'NOBSA',
    '15494' => 'NUEVO COLON',
    '15500' => 'OICATA',
    '15507' => 'OTANCHE',
    '15511' => 'PACHAVITA',
    '15514' => 'PAEZ',
    '15516' => 'PAIPA',
    '15518' => 'PAJARITO',
    '15522' => 'PANQUEBA',
    '15531' => 'PAUNA',
    '15533' => 'PAYA',
    '15537' => 'PAZ DE RIO',
    '15542' => 'PESCA',
    '15550' => 'PISBA',
    '15572' => 'PUERTO BOYACA',
    '15580' => 'QUIPAMA',
    '15599' => 'RAMIRIQUI',
    '15600' => 'RAQUIRA',
    '15621' => 'RONDON',
    '15632' => 'SABOYA',
    '15638' => 'SACHICA',
    '15646' => 'SAMACA',
    '15660' => 'SAN EDUARDO',
    '15664' => 'SAN JOSE DE PARE',
    '15667' => 'SAN LUIS DE GACENO',
    '15673' => 'SAN MATEO',
    '15676' => 'SAN MIGUEL DE SEMA',
    '15681' => 'SAN PABLO DE BORBUR',
    '15686' => 'SANTANA',
    '15690' => 'SANTA MARIA',
    '15693' => 'SANTA ROSA DE VITERBO',
    '15696' => 'SANTA SOFIA',
    '15720' => 'SATIVANORTE',
    '15723' => 'SATIVASUR',
    '15740' => 'SIACHOQUE',
    '15753' => 'SOATA',
    '15755' => 'SOCOTA',
    '15757' => 'SOCHA',
    '15759' => 'SOGAMOSO',
    '15761' => 'SOMONDOCO',
    '15762' => 'SORA',
    '15763' => 'SOTAQUIRA',
    '15764' => 'SORACA',
    '15774' => 'SUSACON',
    '15776' => 'SUTAMARCHAN',
    '15778' => 'SUTATENZA',
    '15790' => 'TASCO',
    '15798' => 'TENZA',
    '15804' => 'TIBANA',
    '15806' => 'TIBASOSA',
    '15808' => 'TINJACA',
    '15810' => 'TIPACOQUE',
    '15814' => 'TOCA',
    '15816' => 'TOGsI',
    '15820' => 'TOPAGA',
    '15822' => 'TOTA',
    '15832' => 'TUNUNGUA',
    '15835' => 'TURMEQUE',
    '15837' => 'TUTA',
    '15839' => 'TUTAZA',
    '15842' => 'UMBITA',
    '15861' => 'VENTAQUEMADA',
    '15879' => 'VIRACACHA',
    '15897' => 'ZETAQUIRA',
    '17001' => 'MANIZALES',
    '17013' => 'AGUADAS',
    '17042' => 'ANSERMA',
    '17050' => 'ARANZAZU',
    '17088' => 'BELALCAZAR',
    '17174' => 'CHINCHINA',
    '17272' => 'FILADELFIA',
    '17380' => 'LA DORADA',
    '17388' => 'LA MERCED',
    '17433' => 'MANZANARES',
    '17442' => 'MARMATO',
    '17444' => 'MARQUETALIA',
    '17446' => 'MARULANDA',
    '17486' => 'NEIRA',
    '17495' => 'NORCASIA',
    '17513' => 'PACORA',
    '17524' => 'PALESTINA',
    '17541' => 'PENSILVANIA',
    '17614' => 'RIOSUCIO',
    '17616' => 'RISARALDA',
    '17653' => 'SALAMINA',
    '17662' => 'SAMANA',
    '17665' => 'SAN JOSE',
    '17777' => 'SUPIA',
    '17867' => 'VICTORIA',
    '17873' => 'VILLAMARIA',
    '17877' => 'VITERBO',
    '18001' => 'FLORENCIA',
    '18029' => 'ALBANIA',
    '18094' => 'BELEN DE LOS ANDAQUIES',
    '18150' => 'CARTAGENA DEL CHAIRA',
    '18205' => 'CURILLO',
    '18247' => 'EL DONCELLO',
    '18256' => 'EL PAUJIL',
    '18410' => 'LA MONTAÑITA',
    '18460' => 'MILAN',
    '18479' => 'MORELIA',
    '18592' => 'PUERTO RICO',
    '18610' => 'SAN JOSE DEL FRAGUA',
    '18753' => 'SAN VICENTE DEL CAGUAN',
    '18756' => 'SOLANO',
    '18785' => 'SOLITA',
    '18860' => 'VALPARAISO',
    '19001' => 'POPAYAN',
    '19022' => 'ALMAGUER',
    '19050' => 'ARGELIA',
    '19075' => 'BALBOA',
    '19100' => 'BOLIVAR',
    '19110' => 'BUENOS AIRES',
    '19130' => 'CAJIBIO',
    '19137' => 'CALDONO',
    '19142' => 'CALOTO',
    '19212' => 'CORINTO',
    '19256' => 'EL TAMBO',
    '19290' => 'FLORENCIA',
    '19300' => 'GUACHENE',
    '19318' => 'GUAPI',
    '19355' => 'INZA',
    '19364' => 'JAMBALO',
    '19392' => 'LA SIERRA',
    '19397' => 'LA VEGA',
    '19418' => 'LOPEZ',
    '19450' => 'MERCADERES',
    '19455' => 'MIRANDA',
    '19473' => 'MORALES',
    '19513' => 'PADILLA',
    '19517' => 'PAEZ',
    '19532' => 'PATIA',
    '19533' => 'PIAMONTE',
    '19548' => 'PIENDAMO',
    '19573' => 'PUERTO TEJADA',
    '19585' => 'PURACE',
    '19622' => 'ROSAS',
    '19693' => 'SAN SEBASTIAN',
    '19698' => 'SANTANDER DE QUILICHAO',
    '19701' => 'SANTA ROSA',
    '19743' => 'SILVIA',
    '19760' => 'SOTARA',
    '19780' => 'SUAREZ',
    '19785' => 'SUCRE',
    '19807' => 'TIMBIO',
    '19809' => 'TIMBIQUI',
    '19821' => 'TORIBIO',
    '19824' => 'TOTORO',
    '19845' => 'VILLA RICA',
    '20001' => 'VALLEDUPAR',
    '20011' => 'AGUACHICA',
    '20013' => 'AGUSTIN CODAZZI',
    '20032' => 'ASTREA',
    '20045' => 'BECERRIL',
    '20060' => 'BOSCONIA',
    '20175' => 'CHIMICHAGUA',
    '20178' => 'CHIRIGUANA',
    '20228' => 'CURUMANI',
    '20238' => 'EL COPEY',
    '20250' => 'EL PASO',
    '20295' => 'GAMARRA',
    '20310' => 'GONZALEZ',
    '20383' => 'LA GLORIA',
    '20400' => 'LA JAGUA DE IBIRICO',
    '20443' => 'MANAURE',
    '20517' => 'PAILITAS',
    '20550' => 'PELAYA',
    '20570' => 'PUEBLO BELLO',
    '20614' => 'RIO DE ORO',
    '20621' => 'LA PAZ',
    '20710' => 'SAN ALBERTO',
    '20750' => 'SAN DIEGO',
    '20770' => 'SAN MARTIN',
    '20787' => 'TAMALAMEQUE',
    '23001' => 'MONTERIA',
    '23068' => 'AYAPEL',
    '23079' => 'BUENAVISTA',
    '23090' => 'CANALETE',
    '23162' => 'CERETE',
    '23168' => 'CHIMA',
    '23182' => 'CHINU',
    '23189' => 'CIENAGA DE ORO',
    '23300' => 'COTORRA',
    '23350' => 'LA APARTADA',
    '23417' => 'LORICA',
    '23419' => 'LOS CORDOBAS',
    '23464' => 'MOMIL',
    '23466' => 'MONTELIBANO',
    '23500' => 'MOÑITOS',
    '23555' => 'PLANETA RICA',
    '23570' => 'PUEBLO NUEVO',
    '23574' => 'PUERTO ESCONDIDO',
    '23580' => 'PUERTO LIBERTADOR',
    '23586' => 'PURISIMA',
    '23660' => 'SAHAGUN',
    '23670' => 'SAN ANDRES SOTAVENTO',
    '23672' => 'SAN ANTERO',
    '23675' => 'SAN BERNARDO DEL VIENTO',
    '23678' => 'SAN CARLOS',
    '23686' => 'SAN PELAYO',
    '23807' => 'TIERRALTA',
    '23855' => 'VALENCIA',
    '25001' => 'AGUA DE DIOS',
    '25019' => 'ALBAN',
    '25035' => 'ANAPOIMA',
    '25040' => 'ANOLAIMA',
    '25053' => 'ARBELAEZ',
    '25086' => 'BELTRAN',
    '25095' => 'BITUIMA',
    '25099' => 'BOJACA',
    '25120' => 'CABRERA',
    '25123' => 'CACHIPAY',
    '25126' => 'CAJICA',
    '25148' => 'CAPARRAPI',
    '25151' => 'CAQUEZA',
    '25154' => 'CARMEN DE CARUPA',
    '25168' => 'CHAGUANI',
    '25175' => 'CHIA',
    '25178' => 'CHIPAQUE',
    '25181' => 'CHOACHI',
    '25183' => 'CHOCONTA',
    '25200' => 'COGUA',
    '25214' => 'COTA',
    '25224' => 'CUCUNUBA',
    '25245' => 'EL COLEGIO',
    '25258' => 'EL PEÑON',
    '25260' => 'EL ROSAL',
    '25269' => 'FACATATIVA',
    '25279' => 'FOMEQUE',
    '25281' => 'FOSCA',
    '25286' => 'FUNZA',
    '25288' => 'FUQUENE',
    '25290' => 'FUSAGASUGA',
    '25293' => 'GACHALA',
    '25295' => 'GACHANCIPA',
    '25297' => 'GACHETA',
    '25299' => 'GAMA',
    '25307' => 'GIRARDOT',
    '25312' => 'GRANADA',
    '25317' => 'GUACHETA',
    '25320' => 'GUADUAS',
    '25322' => 'GUASCA',
    '25324' => 'GUATAQUI',
    '25326' => 'GUATAVITA',
    '25328' => 'GUAYABAL DE SIQUIMA',
    '25335' => 'GUAYABETAL',
    '25339' => 'GUTIERREZ',
    '25368' => 'JERUSALEN',
    '25372' => 'JUNIN',
    '25377' => 'LA CALERA',
    '25386' => 'LA MESA',
    '25394' => 'LA PALMA',
    '25398' => 'LA PEÑA',
    '25402' => 'LA VEGA',
    '25407' => 'LENGUAZAQUE',
    '25426' => 'MACHETA',
    '25430' => 'MADRID',
    '25436' => 'MANTA',
    '25438' => 'MEDINA',
    '25473' => 'MOSQUERA',
    '25483' => 'NARIÑO',
    '25486' => 'NEMOCON',
    '25488' => 'NILO',
    '25489' => 'NIMAIMA',
    '25491' => 'NOCAIMA',
    '25506' => 'VENECIA',
    '25513' => 'PACHO',
    '25518' => 'PAIME',
    '25524' => 'PANDI',
    '25530' => 'PARATEBUENO',
    '25535' => 'PASCA',
    '25572' => 'PUERTO SALGAR',
    '25580' => 'PULI',
    '25592' => 'QUEBRADANEGRA',
    '25594' => 'QUETAME',
    '25596' => 'QUIPILE',
    '25599' => 'APULO',
    '25612' => 'RICAURTE',
    '25645' => 'SAN ANTONIO DEL TEQUENDAMA',
    '25649' => 'SAN BERNARDO',
    '25653' => 'SAN CAYETANO',
    '25658' => 'SAN FRANCISCO',
    '25662' => 'SAN JUAN DE RIO SECO',
    '25718' => 'SASAIMA',
    '25736' => 'SESQUILE',
    '25740' => 'SIBATE',
    '25743' => 'SILVANIA',
    '25745' => 'SIMIJACA',
    '25754' => 'SOACHA',
    '25758' => 'SOPO',
    '25769' => 'SUBACHOQUE',
    '25772' => 'SUESCA',
    '25777' => 'SUPATA',
    '25779' => 'SUSA',
    '25781' => 'SUTATAUSA',
    '25785' => 'TABIO',
    '25793' => 'TAUSA',
    '25797' => 'TENA',
    '25799' => 'TENJO',
    '25805' => 'TIBACUY',
    '25807' => 'TIBIRITA',
    '25815' => 'TOCAIMA',
    '25817' => 'TOCANCIPA',
    '25823' => 'TOPAIPI',
    '25839' => 'UBALA',
    '25841' => 'UBAQUE',
    '25843' => 'VILLA DE SAN DIEGO DE UBATE',
    '25845' => 'UNE',
    '25851' => 'UTICA',
    '25862' => 'VERGARA',
    '25867' => 'VIANI',
    '25871' => 'VILLAGOMEZ',
    '25873' => 'VILLAPINZON',
    '25875' => 'VILLETA',
    '25878' => 'VIOTA',
    '25885' => 'YACOPI',
    '25898' => 'ZIPACON',
    '25899' => 'ZIPAQUIRA',
    '27001' => 'QUIBDO',
    '27006' => 'ACANDI',
    '27025' => 'ALTO BAUDO',
    '27050' => 'ATRATO',
    '27073' => 'BAGADO',
    '27075' => 'BAHIA SOLANO',
    '27077' => 'BAJO BAUDO',
    '27099' => 'BOJAYA',
    '27135' => 'EL CANTON DEL SAN PABLO',
    '27150' => 'CARMEN DEL DARIEN',
    '27160' => 'CERTEGUI',
    '27205' => 'CONDOTO',
    '27245' => 'EL CARMEN DE ATRATO',
    '27250' => 'EL LITORAL DEL SAN JUAN',
    '27361' => 'ISTMINA',
    '27372' => 'JURADO',
    '27413' => 'LLORO',
    '27425' => 'MEDIO ATRATO',
    '27430' => 'MEDIO BAUDO',
    '27450' => 'MEDIO SAN JUAN',
    '27491' => 'NOVITA',
    '27495' => 'NUQUI',
    '27580' => 'RIO IRO',
    '27600' => 'RIO QUITO',
    '27615' => 'RIOSUCIO',
    '27660' => 'SAN JOSE DEL PALMAR',
    '27745' => 'SIPI',
    '27787' => 'TADO',
    '27800' => 'UNGUIA',
    '27810' => 'UNION PANAMERICANA',
    '41001' => 'NEIVA',
    '41006' => 'ACEVEDO',
    '41013' => 'AGRADO',
    '41016' => 'AIPE',
    '41020' => 'ALGECIRAS',
    '41026' => 'ALTAMIRA',
    '41078' => 'BARAYA',
    '41132' => 'CAMPOALEGRE',
    '41206' => 'COLOMBIA',
    '41244' => 'ELIAS',
    '41298' => 'GARZON',
    '41306' => 'GIGANTE',
    '41319' => 'GUADALUPE',
    '41349' => 'HOBO',
    '41357' => 'IQUIRA',
    '41359' => 'ISNOS',
    '41378' => 'LA ARGENTINA',
    '41396' => 'LA PLATA',
    '41483' => 'NATAGA',
    '41503' => 'OPORAPA',
    '41518' => 'PAICOL',
    '41524' => 'PALERMO',
    '41530' => 'PALESTINA',
    '41548' => 'PITAL',
    '41551' => 'PITALITO',
    '41615' => 'RIVERA',
    '41660' => 'SALADOBLANCO',
    '41668' => 'SAN AGUSTIN',
    '41676' => 'SANTA MARIA',
    '41770' => 'SUAZA',
    '41791' => 'TARQUI',
    '41797' => 'TESALIA',
    '41799' => 'TELLO',
    '41801' => 'TERUEL',
    '41807' => 'TIMANA',
    '41872' => 'VILLAVIEJA',
    '41885' => 'YAGUARA',
    '44001' => 'RIOHACHA',
    '44035' => 'ALBANIA',
    '44078' => 'BARRANCAS',
    '44090' => 'DIBULLA',
    '44098' => 'DISTRACCION',
    '44110' => 'EL MOLINO',
    '44279' => 'FONSECA',
    '44378' => 'HATONUEVO',
    '44420' => 'LA JAGUA DEL PILAR',
    '44430' => 'MAICAO',
    '44560' => 'MANAURE',
    '44650' => 'SAN JUAN DEL CESAR',
    '44847' => 'URIBIA',
    '44855' => 'URUMITA',
    '44874' => 'VILLANUEVA',
    '47001' => 'SANTA MARTA',
    '47030' => 'ALGARROBO',
    '47053' => 'ARACATACA',
    '47058' => 'ARIGUANI',
    '47161' => 'CERRO SAN ANTONIO',
    '47170' => 'CHIBOLO',
    '47189' => 'CIENAGA',
    '47205' => 'CONCORDIA',
    '47245' => 'EL BANCO',
    '47258' => 'EL PIÑON',
    '47268' => 'EL RETEN',
    '47288' => 'FUNDACION',
    '47318' => 'GUAMAL',
    '47460' => 'NUEVA GRANADA',
    '47541' => 'PEDRAZA',
    '47545' => 'PIJIÑO DEL CARMEN',
    '47551' => 'PIVIJAY',
    '47555' => 'PLATO',
    '47570' => 'PUEBLOVIEJO',
    '47605' => 'REMOLINO',
    '47660' => 'SABANAS DE SAN ANGEL',
    '47675' => 'SALAMINA',
    '47692' => 'SAN SEBASTIAN DE BUENAVISTA',
    '47703' => 'SAN ZENON',
    '47707' => 'SANTA ANA',
    '47720' => 'SANTA BARBARA DE PINTO',
    '47745' => 'SITIONUEVO',
    '47798' => 'TENERIFE',
    '47960' => 'ZAPAYAN',
    '47980' => 'ZONA BANANERA',
    '50001' => 'VILLAVICENCIO',
    '50006' => 'ACACIAS',
    '50110' => 'BARRANCA DE UPIA',
    '50124' => 'CABUYARO',
    '50150' => 'CASTILLA LA NUEVA',
    '50223' => 'CUBARRAL',
    '50226' => 'CUMARAL',
    '50245' => 'EL CALVARIO',
    '50251' => 'EL CASTILLO',
    '50270' => 'EL DORADO',
    '50287' => 'FUENTE DE ORO',
    '50313' => 'GRANADA',
    '50318' => 'GUAMAL',
    '50325' => 'MAPIRIPAN',
    '50330' => 'MESETAS',
    '50350' => 'LA MACARENA',
    '50370' => 'URIBE',
    '50400' => 'LEJANIAS',
    '50450' => 'PUERTO CONCORDIA',
    '50568' => 'PUERTO GAITAN',
    '50573' => 'PUERTO LOPEZ',
    '50577' => 'PUERTO LLERAS',
    '50590' => 'PUERTO RICO',
    '50606' => 'RESTREPO',
    '50680' => 'SAN CARLOS DE GUAROA',
    '50683' => 'SAN JUAN DE ARAMA',
    '50686' => 'SAN JUANITO',
    '50689' => 'SAN MARTIN',
    '50711' => 'VISTAHERMOSA',
    '52001' => 'PASTO',
    '52019' => 'ALBAN',
    '52022' => 'ALDANA',
    '52036' => 'ANCUYA',
    '52051' => 'ARBOLEDA',
    '52079' => 'BARBACOAS',
    '52083' => 'BELEN',
    '52110' => 'BUESACO',
    '52203' => 'COLON',
    '52207' => 'CONSACA',
    '52210' => 'CONTADERO',
    '52215' => 'CORDOBA',
    '52224' => 'CUASPUD',
    '52227' => 'CUMBAL',
    '52233' => 'CUMBITARA',
    '52240' => 'CHACHAGsI',
    '52250' => 'EL CHARCO',
    '52254' => 'EL PEÑOL',
    '52256' => 'EL ROSARIO',
    '52258' => 'EL TABLON DE GOMEZ',
    '52260' => 'EL TAMBO',
    '52287' => 'FUNES',
    '52317' => 'GUACHUCAL',
    '52320' => 'GUAITARILLA',
    '52323' => 'GUALMATAN',
    '52352' => 'ILES',
    '52354' => 'IMUES',
    '52356' => 'IPIALES',
    '52378' => 'LA CRUZ',
    '52381' => 'LA FLORIDA',
    '52385' => 'LA LLANADA',
    '52390' => 'LA TOLA',
    '52399' => 'LA UNION',
    '52405' => 'LEIVA',
    '52411' => 'LINARES',
    '52418' => 'LOS ANDES',
    '52427' => 'MAGsI',
    '52435' => 'MALLAMA',
    '52473' => 'MOSQUERA',
    '52480' => 'NARIÑO',
    '52490' => 'OLAYA HERRERA',
    '52506' => 'OSPINA',
    '52520' => 'FRANCISCO PIZARRO',
    '52540' => 'POLICARPA',
    '52560' => 'POTOSI',
    '52565' => 'PROVIDENCIA',
    '52573' => 'PUERRES',
    '52585' => 'PUPIALES',
    '52612' => 'RICAURTE',
    '52621' => 'ROBERTO PAYAN',
    '52678' => 'SAMANIEGO',
    '52683' => 'SANDONA',
    '52685' => 'SAN BERNARDO',
    '52687' => 'SAN LORENZO',
    '52693' => 'SAN PABLO',
    '52694' => 'SAN PEDRO DE CARTAGO',
    '52696' => 'SANTA BARBARA',
    '52699' => 'SANTACRUZ',
    '52720' => 'SAPUYES',
    '52786' => 'TAMINANGO',
    '52788' => 'TANGUA',
    '52835' => 'SAN ANDRES DE TUMACO',
    '52838' => 'TUQUERRES',
    '52885' => 'YACUANQUER',
    '54001' => 'CUCUTA',
    '54003' => 'ABREGO',
    '54051' => 'ARBOLEDAS',
    '54099' => 'BOCHALEMA',
    '54109' => 'BUCARASICA',
    '54125' => 'CACOTA',
    '54128' => 'CACHIRA',
    '54172' => 'CHINACOTA',
    '54174' => 'CHITAGA',
    '54206' => 'CONVENCION',
    '54223' => 'CUCUTILLA',
    '54239' => 'DURANIA',
    '54245' => 'EL CARMEN',
    '54250' => 'EL TARRA',
    '54261' => 'EL ZULIA',
    '54313' => 'GRAMALOTE',
    '54344' => 'HACARI',
    '54347' => 'HERRAN',
    '54377' => 'LABATECA',
    '54385' => 'LA ESPERANZA',
    '54398' => 'LA PLAYA',
    '54405' => 'LOS PATIOS',
    '54418' => 'LOURDES',
    '54480' => 'MUTISCUA',
    '54498' => 'OCAÑA',
    '54518' => 'PAMPLONA',
    '54520' => 'PAMPLONITA',
    '54553' => 'PUERTO SANTANDER',
    '54599' => 'RAGONVALIA',
    '54660' => 'SALAZAR',
    '54670' => 'SAN CALIXTO',
    '54673' => 'SAN CAYETANO',
    '54680' => 'SANTIAGO',
    '54720' => 'SARDINATA',
    '54743' => 'SILOS',
    '54800' => 'TEORAMA',
    '54810' => 'TIBU',
    '54820' => 'TOLEDO',
    '54871' => 'VILLA CARO',
    '54874' => 'VILLA DEL ROSARIO',
    '63001' => 'ARMENIA',
    '63111' => 'BUENAVISTA',
    '63130' => 'CALARCA',
    '63190' => 'CIRCASIA',
    '63212' => 'CORDOBA',
    '63272' => 'FILANDIA',
    '63302' => 'GENOVA',
    '63401' => 'LA TEBAIDA',
    '63470' => 'MONTENEGRO',
    '63548' => 'PIJAO',
    '63594' => 'QUIMBAYA',
    '63690' => 'SALENTO',
    '66001' => 'PEREIRA',
    '66045' => 'APIA',
    '66075' => 'BALBOA',
    '66088' => 'BELEN DE UMBRIA',
    '66170' => 'DOSQUEBRADAS',
    '66318' => 'GUATICA',
    '66383' => 'LA CELIA',
    '66400' => 'LA VIRGINIA',
    '66440' => 'MARSELLA',
    '66456' => 'MISTRATO',
    '66572' => 'PUEBLO RICO',
    '66594' => 'QUINCHIA',
    '66682' => 'SANTA ROSA DE CABAL',
    '66687' => 'SANTUARIO',
    '68001' => 'BUCARAMANGA',
    '68013' => 'AGUADA',
    '68020' => 'ALBANIA',
    '68051' => 'ARATOCA',
    '68077' => 'BARBOSA',
    '68079' => 'BARICHARA',
    '68081' => 'BARRANCABERMEJA',
    '68092' => 'BETULIA',
    '68101' => 'BOLIVAR',
    '68121' => 'CABRERA',
    '68132' => 'CALIFORNIA',
    '68147' => 'CAPITANEJO',
    '68152' => 'CARCASI',
    '68160' => 'CEPITA',
    '68162' => 'CERRITO',
    '68167' => 'CHARALA',
    '68169' => 'CHARTA',
    '68176' => 'CHIMA',
    '68179' => 'CHIPATA',
    '68190' => 'CIMITARRA',
    '68207' => 'CONCEPCION',
    '68209' => 'CONFINES',
    '68211' => 'CONTRATACION',
    '68217' => 'COROMORO',
    '68229' => 'CURITI',
    '68235' => 'EL CARMEN DE CHUCURI',
    '68245' => 'EL GUACAMAYO',
    '68250' => 'EL PEÑON',
    '68255' => 'EL PLAYON',
    '68264' => 'ENCINO',
    '68266' => 'ENCISO',
    '68271' => 'FLORIAN',
    '68276' => 'FLORIDABLANCA',
    '68296' => 'GALAN',
    '68298' => 'GAMBITA',
    '68307' => 'GIRON',
    '68318' => 'GUACA',
    '68320' => 'GUADALUPE',
    '68322' => 'GUAPOTA',
    '68324' => 'GUAVATA',
    '68327' => 'GsEPSA',
    '68344' => 'HATO',
    '68368' => 'JESUS MARIA',
    '68370' => 'JORDAN',
    '68377' => 'LA BELLEZA',
    '68385' => 'LANDAZURI',
    '68397' => 'LA PAZ',
    '68406' => 'LEBRIJA',
    '68418' => 'LOS SANTOS',
    '68425' => 'MACARAVITA',
    '68432' => 'MALAGA',
    '68444' => 'MATANZA',
    '68464' => 'MOGOTES',
    '68468' => 'MOLAGAVITA',
    '68498' => 'OCAMONTE',
    '68500' => 'OIBA',
    '68502' => 'ONZAGA',
    '68522' => 'PALMAR',
    '68524' => 'PALMAS DEL SOCORRO',
    '68533' => 'PARAMO',
    '68547' => 'PIEDECUESTA',
    '68549' => 'PINCHOTE',
    '68572' => 'PUENTE NACIONAL',
    '68573' => 'PUERTO PARRA',
    '68575' => 'PUERTO WILCHES',
    '68615' => 'RIONEGRO',
    '68655' => 'SABANA DE TORRES',
    '68669' => 'SAN ANDRES',
    '68673' => 'SAN BENITO',
    '68679' => 'SAN GIL',
    '68682' => 'SAN JOAQUIN',
    '68684' => 'SAN JOSE DE MIRANDA',
    '68686' => 'SAN MIGUEL',
    '68689' => 'SAN VICENTE DE CHUCURI',
    '68705' => 'SANTA BARBARA',
    '68720' => 'SANTA HELENA DEL OPON',
    '68745' => 'SIMACOTA',
    '68755' => 'SOCORRO',
    '68770' => 'SUAITA',
    '68773' => 'SUCRE',
    '68780' => 'SURATA',
    '68820' => 'TONA',
    '68855' => 'VALLE DE SAN JOSE',
    '68861' => 'VELEZ',
    '68867' => 'VETAS',
    '68872' => 'VILLANUEVA',
    '68895' => 'ZAPATOCA',
    '70001' => 'SINCELEJO',
    '70110' => 'BUENAVISTA',
    '70124' => 'CAIMITO',
    '70204' => 'COLOSO',
    '70215' => 'COROZAL',
    '70221' => 'COVEÑAS',
    '70230' => 'CHALAN',
    '70233' => 'EL ROBLE',
    '70235' => 'GALERAS',
    '70265' => 'GUARANDA',
    '70400' => 'LA UNION',
    '70418' => 'LOS PALMITOS',
    '70429' => 'MAJAGUAL',
    '70473' => 'MORROA',
    '70508' => 'OVEJAS',
    '70523' => 'PALMITO',
    '70670' => 'SAMPUES',
    '70678' => 'SAN BENITO ABAD',
    '70702' => 'SAN JUAN DE BETULIA',
    '70708' => 'SAN MARCOS',
    '70713' => 'SAN ONOFRE',
    '70717' => 'SAN PEDRO',
    '70742' => 'SAN LUIS DE SINCE',
    '70771' => 'SUCRE',
    '70820' => 'SANTIAGO DE TOLU',
    '70823' => 'TOLU VIEJO',
    '73001' => 'IBAGUE',
    '73024' => 'ALPUJARRA',
    '73026' => 'ALVARADO',
    '73030' => 'AMBALEMA',
    '73043' => 'ANZOATEGUI',
    '73055' => 'ARMERO',
    '73067' => 'ATACO',
    '73124' => 'CAJAMARCA',
    '73148' => 'CARMEN DE APICALA',
    '73152' => 'CASABIANCA',
    '73168' => 'CHAPARRAL',
    '73200' => 'COELLO',
    '73217' => 'COYAIMA',
    '73226' => 'CUNDAY',
    '73236' => 'DOLORES',
    '73268' => 'ESPINAL',
    '73270' => 'FALAN',
    '73275' => 'FLANDES',
    '73283' => 'FRESNO',
    '73319' => 'GUAMO',
    '73347' => 'HERVEO',
    '73349' => 'HONDA',
    '73352' => 'ICONONZO',
    '73408' => 'LERIDA',
    '73411' => 'LIBANO',
    '73443' => 'MARIQUITA',
    '73449' => 'MELGAR',
    '73461' => 'MURILLO',
    '73483' => 'NATAGAIMA',
    '73504' => 'ORTEGA',
    '73520' => 'PALOCABILDO',
    '73547' => 'PIEDRAS',
    '73555' => 'PLANADAS',
    '73563' => 'PRADO',
    '73585' => 'PURIFICACION',
    '73616' => 'RIOBLANCO',
    '73622' => 'RONCESVALLES',
    '73624' => 'ROVIRA',
    '73671' => 'SALDAÑA',
    '73675' => 'SAN ANTONIO',
    '73678' => 'SAN LUIS',
    '73686' => 'SANTA ISABEL',
    '73770' => 'SUAREZ',
    '73854' => 'VALLE DE SAN JUAN',
    '73861' => 'VENADILLO',
    '73870' => 'VILLAHERMOSA',
    '73873' => 'VILLARRICA',
    '76001' => 'CALI',
    '76020' => 'ALCALA',
    '76036' => 'ANDALUCIA',
    '76041' => 'ANSERMANUEVO',
    '76054' => 'ARGELIA',
    '76100' => 'BOLIVAR',
    '76109' => 'BUENAVENTURA',
    '76111' => 'GUADALAJARA DE BUGA',
    '76113' => 'BUGALAGRANDE',
    '76122' => 'CAICEDONIA',
    '76126' => 'CALIMA',
    '76130' => 'CANDELARIA',
    '76147' => 'CARTAGO',
    '76233' => 'DAGUA',
    '76243' => 'EL AGUILA',
    '76246' => 'EL CAIRO',
    '76248' => 'EL CERRITO',
    '76250' => 'EL DOVIO',
    '76275' => 'FLORIDA',
    '76306' => 'GINEBRA',
    '76318' => 'GUACARI',
    '76364' => 'JAMUNDI',
    '76377' => 'LA CUMBRE',
    '76400' => 'LA UNION',
    '76403' => 'LA VICTORIA',
    '76497' => 'OBANDO',
    '76520' => 'PALMIRA',
    '76563' => 'PRADERA',
    '76606' => 'RESTREPO',
    '76616' => 'RIOFRIO',
    '76622' => 'ROLDANILLO',
    '76670' => 'SAN PEDRO',
    '76736' => 'SEVILLA',
    '76823' => 'TORO',
    '76828' => 'TRUJILLO',
    '76834' => 'TULUA',
    '76845' => 'ULLOA',
    '76863' => 'VERSALLES',
    '76869' => 'VIJES',
    '76890' => 'YOTOCO',
    '76892' => 'YUMBO',
    '76895' => 'ZARZAL',
    '81001' => 'ARAUCA',
    '81065' => 'ARAUQUITA',
    '81220' => 'CRAVO NORTE',
    '81300' => 'FORTUL',
    '81591' => 'PUERTO RONDON',
    '81736' => 'SARAVENA',
    '81794' => 'TAME',
    '85001' => 'YOPAL',
    '85010' => 'AGUAZUL',
    '85015' => 'CHAMEZA',
    '85125' => 'HATO COROZAL',
    '85136' => 'LA SALINA',
    '85139' => 'MANI',
    '85162' => 'MONTERREY',
    '85225' => 'NUNCHIA',
    '85230' => 'OROCUE',
    '85250' => 'PAZ DE ARIPORO',
    '85263' => 'PORE',
    '85279' => 'RECETOR',
    '85300' => 'SABANALARGA',
    '85315' => 'SACAMA',
    '85325' => 'SAN LUIS DE PALENQUE',
    '85400' => 'TAMARA',
    '85410' => 'TAURAMENA',
    '85430' => 'TRINIDAD',
    '85440' => 'VILLANUEVA',
    '86001' => 'MOCOA',
    '86219' => 'COLON',
    '86320' => 'ORITO',
    '86568' => 'PUERTO ASIS',
    '86569' => 'PUERTO CAICEDO',
    '86571' => 'PUERTO GUZMAN',
    '86573' => 'LEGUIZAMO',
    '86749' => 'SIBUNDOY',
    '86755' => 'SAN FRANCISCO',
    '86757' => 'SAN MIGUEL',
    '86760' => 'SANTIAGO',
    '86865' => 'VALLE DEL GUAMUEZ',
    '86885' => 'VILLAGARZON',
    '88001' => 'SAN ANDRES',
    '88564' => 'PROVIDENCIA',
    '91001' => 'LETICIA',
    '91263' => 'EL ENCANTO',
    '91405' => 'LA CHORRERA',
    '91407' => 'LA PEDRERA',
    '91430' => 'LA VICTORIA',
    '91460' => 'MIRITI - PARANA',
    '91530' => 'PUERTO ALEGRIA',
    '91536' => 'PUERTO ARICA',
    '91540' => 'PUERTO NARIÑO',
    '91669' => 'PUERTO SANTANDER',
    '91798' => 'TARAPACA',
    '94001' => 'INIRIDA',
    '94343' => 'BARRANCO MINAS',
    '94663' => 'MAPIRIPANA',
    '94883' => 'SAN FELIPE',
    '94884' => 'PUERTO COLOMBIA',
    '94885' => 'LA GUADALUPE',
    '94886' => 'CACAHUAL',
    '94887' => 'PANA PANA',
    '94888' => 'MORICHAL',
    '95001' => 'SAN JOSE DEL GUAVIARE',
    '95015' => 'CALAMAR',
    '95025' => 'EL RETORNO',
    '95200' => 'MIRAFLORES',
    '97001' => 'MITU',
    '97161' => 'CARURU',
    '97511' => 'PACOA',
    '97666' => 'TARAIRA',
    '97777' => 'PAPUNAUA',
    '97889' => 'YAVARATE',
    '99001' => 'PUERTO CARREÑO',
    '99524' => 'LA PRIMAVERA',
    '99624' => 'SANTA ROSALIA',
    '99773' => 'CUMARIBO'
);
$indicativos = array('AMAZONAS'=> 8, 'AMAZONAS-PUERTO NARIÑO' => 7, 'ANTIOQUIA' => 4, 'ARAUCA' => 7, 'ATLANTICO' => 5, 'BOLIVAR' => 5,'BOYACA' => 8, 'CALDAS' => 6, 'CAQUETA' => 8, 'CASANARE' => 8, 'CAUCA' => 2, 'CESAR' => 5, 'CHOCO' => 4, 'CORDOBA' => 4, 'CUNDINAMARCA' => 1,
 'GUAINIA' => 8, 'GUAJIRA' => 5,  'GUAVIARE' => 8, 'HUILA' => 8, 'MAGDALENA' => 5, 'META' => 8, ' NARIÑO' => 2, 'NORTE DE SANTANDER' => 7,
 'PUTUMAYO' => 8, 'QUINDIO' => 6, 'RISARALDA' => 6, 'SAN ANDRES Y PROVIDENCIA' => 8, 'SANTANDER' => 7, 'SUCRE' => 5, 'TOLIMA' => 8, 
 'VALLE DEL CAUCA' =>  2, 'VAUPES' => 8, 'VICHADA' => 8 );

$codigoDepartamento = "";
$codigoDepartamento2 = "";
$banderaParaNombre = FALSE;
$banderaTelefonoFijo = FALSE;
$banderaTelefonoFijo2 = FALSE;
$banderaCelular = FALSE;
$banderaEmail = FALSE;


foreach($array as $primerArray){
    //echo $primerArray. "\n";
    $datosEnArray = explode('|', $primerArray);
    array_push($datosEnArray2, $datosEnArray);
}


$errores = [];
foreach ($datosEnArray2 as $index => $fila) {
    //Validar campo Codigo administradora
    if($fila[0] == NULL ){
        print_r($index);
        $msg = ["Error fila ".($index + 1 )." columna 1. Campo vacio"];
        array_push($errores, $msg);
    }
    else{
        if($fila[0] != 'CCF69'){
            $msg = ["Error fila ".($index + 1)." columna 1. Codigo de caja errado, revise espacios en blanco o caracteres especiales"];
            array_push($errores, $msg);
        }
    }
    //Validar nombre de la administradora
    if ($fila[1] == NULL) {
        $msg =["Error fila". ($index + 1). " columna 2. Campo vacío"];
        array_push($errores, $msg);
    }
    else{
        if($fila[1] != 'CAJA DE COMPENSACION FAMILIAR DEL CASANARE COMFACASANARE')
        {
            $msg = ["Error fila ". ($index + 1). " Columna 2. Nombre de administradora errado"];
            array_push($errores, $msg);
        }
    }

    //Validar campo razón social del aportante
    if($fila[2] == NULL)
    {
        $msg =["Error fila ". ($index + 1). " columna 3. Campo vacío"];
        array_push($errores, $msg);
    }
    else {
        if (preg_match('/^\s/', $fila[2]) != " "  || preg_match('/\s$/', $fila[2]) != " " ) { 
            $msg =["Error fila ". ($index + 1). " columna 3. Espacios en blanco al inicio o al final del campo"];
            array_push($errores, $msg);
        }
    }
    //Validar tipo de documento
    if($fila[3] == NULL)
    {
        $msg =["Error fila ". ($index + 1). " columna 3. Campo vacío"];
        array_push($errores, $msg);
    }
    else {
        if (preg_match('/^\s/', $fila[3]) != " "  || preg_match('/\s$/', $fila[3]) != " " ){ 
            $msg =["Error fila ". ($index + 1). " columna 4. Espacios en blanco al inicio o al final del campo"];
            array_push($errores, $msg);
        }
        else
        {
            switch ($fila[3]) {

                case 'NI':
                    # code...
                    $bandera = TRUE;
                    break;
                case 'CC':
                    $bandera = FALSE;
                    break;
                case 'CE':
                    $bandera = FALSE;
                    break;
                
                case 'TI':
                    $bandera = FALSE;
                    break;
                    
                case 'RC':
                    $bandera = FALSE;
                    break;
                case 'PA':
                    $bandera = FALSE;
                    break;
                    
                default:
                    $msg =["Error fila ". ($index + 1). " columna 4. TIPO DE DOCUMENTO ERRADO"];
                    array_push($errores, $msg);
                    break;
            }
        }
    }

    // Validar numero de documento del aportante
    if($fila[4] == NULL)
    {
        $msg =["Error fila ". ($index + 1). " columna 5. Campo vacío"];
        array_push($errores, $msg);
    }
    else
    {
        if (preg_match('/^\s/', $fila[4]) != " "  || preg_match('/\s$/', $fila[4]) != " " ){ 
            $msg =["Error fila ". ($index + 1). " columna 5. Espacios en blanco al inicio o al final del campo"];
            array_push($errores, $msg);
        }
        else{
            if(strlen($fila[4]) <= 5)
            {
                $msg =["Error fila ". ($index + 1). " columna 5. Documento no valido, menor a 5 "];
                array_push($errores, $msg);
            } 
        }
    }
    // Validar numero de digito de verificacion
    if($bandera == TRUE)
    {
        if($fila[5] == NULL)
        {
            $msg =["Error fila ". ($index + 1). " columna 6. El registro contiene NIT, ingrese digito de verificación"];
            array_push($errores, $msg);
        }
        else {
            if(strlen($fila[5]) >1)
            {
                $msg =["Error fila ". ($index + 1). " columna 6. Tamaño del campo es mayor a 1"];
                array_push($errores, $msg);
            }
        }
    }
    else{
        if($fila[5] != NULL){
            $msg =["Error fila ". ($index + 1). " columna 6. El registro debe ir vacío, no es tipo nit"];
            array_push($errores, $msg);
        }
    }
        
    //Validar direccion 1
    if ($fila[6] == NULL ) 
    {
        $banderaDireccion = FALSE;
        $msg =["Error fila ". ($index + 1). " columna 7. El campo de direccion 1 se encuentra vacío"];
        array_push($errores, $msg);
    }
    else
    {
        $banderaDireccion = TRUE;
        if (preg_match('/^\s/', $fila[6]) != " "  || preg_match('/\s$/', $fila[6]) != " " ){ 
            $msg =["Error fila ". ($index + 1). " columna 7. Espacios en blanco al inicio o al final del campo"];
            array_push($errores, $msg);
        }
    }
   
    //validar campo departamento 1
    if($fila[7] == NULL)
    {
        $banderaDepartamento = FALSE;
        $msg =["Error fila ". ($index + 1). " columna 8. Campo vacío"];
        array_push($errores, $msg);
    }
    else {
       if(!!!array_key_exists($fila[7], $tsDepartamentos))
       {
        $msg =["Error fila ". ($index + 1). " columna 8. Codigo de departamento no existe"];
        array_push($errores, $msg);   
       }
       else{
           $banderaDepartamento  = TRUE;
            $codigoDepartamento =$fila[7];
       }
    }

    // Validar campo de municipios 1
    $codigoMunicipioFinal = $codigoDepartamento.$fila[8];

    if ($fila[8] == NULL) {
        $banderMunicipio = FALSE;
        $msg =["Error fila ". ($index + 1). " columna 9. Codigo de municipio vacío"];
        array_push($errores, $msg);
    }
    else {
        if(array_key_exists($codigoMunicipioFinal, $municipios))
        {
            //Municipio existe
            $banderMunicipio = TRUE;
        }
        else {
            $msg =["Error fila ". ($index + 1). " columna 9. Codigo de municipio no existe"];
            array_push($errores, $msg);
        }
    }
    //  Validar nombre departamento 1
    if ($fila[9] == NULL) {
        $msg =["Error fila ". ($index + 1). " columna 10. Nombre de departamento vacio"];
        array_push($errores, $msg);
    }
    else {
        if (in_array($fila[9], $tsDepartamentos)) {
            
        }
        else {
            
            $msg =["Error fila ". ($index + 1). " columna 10. Nombre de departamento errado"];
            array_push($errores, $msg);
        }
    }
    //Validar nombre municipio 1 
    if($fila[10] == NULL)
    {
        $msg =["Error fila ". ($index + 1). " columna 11. Nombre de municipio vacío"];
        array_push($errores, $msg);
    }
    else {
        if (in_array($fila[10], $municipios)) {
            
        }
        else {
            $msg =["Error fila ". ($index + 1). " columna 11. Nombre de municipio no existe"];
            array_push($errores, $msg);
        }
    }
    // Validar direccion 2
    if($banderaDireccion == FALSE)
    {
        if ($fila[11] == NULL) {
            $msg =["Error fila ". ($index + 1). " columna 12. Campo de dirección 1 y 2 vacíos"];
            array_push($errores, $msg);
        }
        else{
            if(preg_match('/^\s/', $fila[11]) != " "  || preg_match('/\s$/', $fila[11]) != " " ){ 
                $msg =["Error fila ". ($index + 1). " columna 12. Espacios en blanco al inicio o al final del campo"];
                array_push($errores, $msg);
            }
        }
    }
    else {
        if(preg_match('/^\s/', $fila[11]) != " "  || preg_match('/\s$/', $fila[11]) != " " ){ 
            $msg =["Error fila ". ($index + 1). " columna 12. Espacios en blanco al inicio o al final del campo"];
            array_push($errores, $msg);
        }
    }
    
    // Validar codigo departamento 2
    if ($banderaDepartamento == FALSE) {
        if ($fila[12] == NULL) {
            $msg =["Error fila ". ($index + 1). " columna 13. Campo codigo departamento se encuentran vacíos"];
            array_push($errores, $msg);
        }
        else {
            if(!!!array_key_exists($fila[12], $tsDepartamentos))
            {
                $msg =["Error fila ". ($index + 1). " columna 13. Codigo de departamento no existe"];
                array_push($errores, $msg);  
                
            }
            else{
            
                $codigoDepartamento2 =$fila[12];
                $banderaParaNombre = TRUE;
                }
        }
    }
    else {
        if ($fila[12] == NULL) {
           #####El campo codigo departamento 2 está vacío pero el campo codigo departamento 1 está lleno
        }
        else{
            if(!!!array_key_exists($fila[12], $tsDepartamentos))
            {
                $msg =["Error fila ". ($index + 1). " columna 13. Codigo de departamento no existe"];
                array_push($errores, $msg);  
                $codigoDepartamento2 =$fila[12]; 
            }
            else{
            $codigoDepartamento2 =$fila[12];
            }
        }
        
    }
    
    //Validar codigo municipio 2
    $codigoMunicipioFinal2 = $codigoDepartamento2.$fila[13];
    if($banderMunicipio == FALSE)
    {
        if ($fila[13] == NULL) {
            $msg =["Error fila ". ($index + 1). " columna 14. Los codigos de municipios están vacíos "];
            array_push($errores, $msg);
        }
        else {
            if(array_key_exists($codigoMunicipioFinal2, $municipios))
            {
                //Municipio existe
            }
            else {
                $msg =["Error fila ". ($index + 1). " columna 14. Codigo de municipio no existe"];
                array_push($errores, $msg);
            }
        }
    }
    else {
        if ($fila[13] == NULL) {
            #####El campo codigo municipio 2 está vacío pero el campo codigo municipio 1 está lleno
        }
        else {
            if(array_key_exists($codigoMunicipioFinal2, $municipios))
            {
                //Municipio existe
            }
            else {
                $msg =["Error fila ". ($index + 1). " columna 14. Codigo de municipio no existe"];
                array_push($errores, $msg);
            }
        }
    }

    // Validar campo nombre departamento 2
    if($banderaParaNombre == TRUE)
    {
        if ($fila[14] == NULL) {
            $msg =["Error fila ". ($index + 1). " columna 15. Nombre de departamento 2  vacio"];
            array_push($errores, $msg);
        }
        else {
            if (in_array($fila[14], $tsDepartamentos)) {
                
            }
            else {
                
                $msg =["Error fila ". ($index + 1). " columna 15. Nombre de departamento 2 errado"];
                array_push($errores, $msg);
            }
        }
    }

    //Validar campo nombre municipio 2
    if($banderaParaNombre == TRUE)
    {
        if ($fila[15] == NULL) {
            $msg =["Error fila ". ($index + 1). " columna 16. Nombre de municipio 2  vacio"];
            array_push($errores, $msg);
        }
        else {
            if (in_array($fila[14], $tsDepartamentos)) {
                
            }
            else {
                
                $msg =["Error fila ". ($index + 1). " columna 16. Nombre de municipio 2 errado"];
                array_push($errores, $msg);
            }
        }
    }

    //Validar campo de telefono fijo 1

    if ($fila[16] == NULL) {
        $banderaTelefonoFijo = FALSE;
    }
    else {
        if(strlen($fila[16]) != 7)
        {
            $msg =["Error fila ". ($index + 1). " columna 17. Campo telefono 1 errado, verifique "];
            array_push($errores, $msg);
            $banderaTelefonoFijo =TRUE;
        }
        else{
            $banderaTelefonoFijo =TRUE;
        }
    }
    //Validar campo indicativo telefono 1
    if ($banderaTelefonoFijo == TRUE) {
        if ($fila[17] == NULL) {
            $msg =["Error fila ". ($index + 1). " columna 18. Campo indicativo 1  vacío pero telefono 1 tiene datos, verifique "];
            array_push($errores, $msg);
        }
        else {
            if (!!!in_array($fila[17], $indicativos)) {
                $msg =["Error fila ". ($index + 1). " columna 18. Campo indicativo 1  es errado, no existe "];
                array_push($errores, $msg);
            }
        }
    }
    //Validar telefono fijo 2
    if($banderaTelefonoFijo == FALSE)
    {
        if ($fila[18] == NULL) {
            $msg =["Error fila ". ($index + 1). " columna 19. Los campos de telefono fijo se encuentran vacíos "];
            array_push($errores, $msg);
        }
        else{
            if(strlen($fila[18]) != 7)
            {
                $msg =["Error fila ". ($index + 1). " columna 19. Campo telefono 1 errado, verifique "];
                array_push($errores, $msg);
            }
            else{
                $banderaTelefonoFijo2 =TRUE;
            }
        }
    }
    else {
        if ($fila[18] == NULL) {
            #El campo de telefono fijo 2 está vacío pero el campo telefono fijo 1 esta lleno
            $banderaTelefonoFijo2 = FALSE;
        }
        else{
            if(strlen($fila[18]) != 7)
        {
            $msg =["Error fila ". ($index + 1). " columna 19. Campo telefono 1 errado, verifique "];
            array_push($errores, $msg);
        }
        else{
            $banderaTelefonoFijo2 =TRUE;
        }
        } 
    }

    //Validar indicativo telefono 2
    if($banderaTelefonoFijo2 == TRUE)
    {
        if($fila[19] == NULL)
        {
            $msg =["Error fila ". ($index + 1). " columna 20. Campo indicativo telefono 2 vacio y campo telefono lleno, verifique "];
            array_push($errores, $msg);
        }
        else {
            if (!!!in_array($fila[19], $indicativos)) {
                $msg =["Error fila ". ($index + 1). " columna 20. Campo indicativo 2  es errado, no existe "];
                array_push($errores, $msg);
            }
        }
    }
    else{
        if(!!!$fila[19] == NULL)
        {
            if (!!!in_array($fila[19], $indicativos)) {
                $msg =["Error fila ". ($index + 1). " columna 20. Campo indicativo 2  es errado, no existe "];
                array_push($errores, $msg);
            }
        }
    }

    //Validar campo celular 1
    if(!!!$fila[20] == NULL)
    {
        if(strlen($fila[20]) != 10)
        {
            $msg =["Error fila ". ($index + 1). " columna 21. Campo celular 2 es errado"];
            array_push($errores, $msg);
            $banderaCelular = TRUE;
        }
        else {
            $banderaCelular = TRUE;
        }
    }
    else{
        $banderaCelular = FALSE;
    }
    //Validar campo celular 2
    if($banderaCelular == TRUE)
    {
        if($fila[21] != NULL)
        {
            if(strlen($fila[21]) != 10)
            {
                $msg =["Error fila ". ($index + 1). " columna 22. Campo celular 2 es errado"];
                array_push($errores, $msg);
            }
        }
    }
    else {
        if($fila[21] != NULL)
        {
            if(strlen($fila[20]) != 10)
            {
                $msg =["Error fila ". ($index + 1). " columna 22. Campo celular 2 es errado"];
                array_push($errores, $msg);
            }
        }
        else {
            $msg =["Error fila ". ($index + 1). " columna 22. Campo celular 2 y 1 están vacíos, verifique"];
            array_push($errores, $msg);
        }
    }

    //Validar campo correo electronico 1
    if($fila[22] != NULL)
    {
        if(!!!filter_var($fila[22], FILTER_VALIDATE_EMAIL))
        {
            $msg =["Error fila ". ($index + 1). " columna 23. email 1 errado, verifique"];
            array_push($errores, $msg);
            $banderaEmail = TRUE;
        }
        else {
            $banderaEmail = TRUE;
        }
    }
    else{
        $banderaEmail = FALSE;
    }

    //Validar campo correo electronico 2
    if($fila[23] == TRUE)
    {
        if($fila[23] !=NULL)
        {
            if(!!!filter_var($fila[23], FILTER_VALIDATE_EMAIL))
            {
                $msg =["Error fila ". ($index + 1). " columna 24. email 2 errado, verifique"];
                array_push($errores, $msg);
                $banderaEmail = TRUE;
            }
        }
    }
    else{
        if($fila[23] !=NULL)
        {
            if(!!!filter_var($fila[23], FILTER_VALIDATE_EMAIL))
            {
                $msg =["Error fila ". ($index + 1). " columna 24. email 2 errado, verifique"];
                array_push($errores, $msg);
                
            }
        }
        else {
            $msg =["Error fila ". ($index + 1). " columna 24. Campos de email 1 y 2 estan vacios"];
            array_push($errores, $msg);
            
        }
    }
    // Validaaaaaaaar ultima fecha de actualización
    
    
    if($fila[24] ==NULL)
    {
        $msg =["Error fila ". ($index + 1). " columna 25. Fecha de actualización no puede ser vacia"];
        array_push($errores, $msg);
    }
    else {
        $format = 'Y-m-d';
        $d = DateTime::createFromFormat($format, $fila[24]);
        if(($d && $d->format($format) == $fila[24]) == FALSE)
        {
            $msg =["Error fila ". ($index + 1). " columna 25. Fecha de actualización tiene un formato errado"];
            array_push($errores, $msg);
        }
    }
    


}
echo json_encode([
    'data' => $errores,
], JSON_UNESCAPED_UNICODE);    
//var_dump($errores);




fclose($gestor);
