document.addEventListener('DOMContentLoaded', function() {
    // Mapping for Abra province to its cities/municipalities
    var citiesInAbra = ["Bangued", "Boliney", "Bucay", "Bucloc", "Daguioman", "Danglas", "Dolores", "La Paz", "Lacub", "Lagangilang", "Lagayan", "Langiden", "Licuan-Baay", "Luba", "Malibcong", "Manabo", "Peñarrubia", "Pidigan", "Pilar", "Sallapadan", "San Isidro", "San Juan", "San Quintin", "Tayum", "Tineg", "Tubo", "Villaviciosa"];
    var citiesInAgusanDelNorte = ["Buenavista", "Butuan City", "Cabadbaran", "Carmen", "Jabonga", "Kitcharao", "Las Nieves", "Magallanes", "Nasipit", "Remedios T. Romualdez", "Santiago", "Tubay"];
    var citiesInAgusanDelSur = ["Bayugan", "Bunawan", "Esperanza", "La Paz", "Loreto", "Prosperidad", "Rosario", "San Francisco", "San Luis", "Santa Josefa", "Sibagat", "Talacogon", "Trento", "Veruela"];
    var citiesInAklan = ["Altavas", "Balete", "Banga", "Batan", "Buruanga", "Ibajay", "Kalibo", "Lezo", "Libacao", "Madalag", "Makato", "Malay", "Malinao", "Nabas", "New Washington", "Numancia", "Tangalan"];
    var citiesInAlbay = ["Bacacay", "Camalig", "Daraga", "Guinobatan", "Jovellar", "Legazpi City", "Libon", "Ligao", "Malilipot", "Malinao", "Manito", "Oas", "Pio Duran", "Polangui", "Rapu-Rapu", "Santo Domingo", "Tabaco City", "Tiwi"];
    var citiesInAntique = ["Anini-y", "Barbaza", "Belison", "Bugasong", "Caluya", "Culasi", "Hamtic", "Laua-an", "Libertad", "Pandan", "Patnongon", "San Jose", "San Remigio", "Sebaste", "Sibalom", "Tibiao", "Tobias Fornier", "Valderrama"];
    var citiesInApayao = ["Calanasan (Bayag)", "Conner", "Flora", "Kabugao", "Luna", "Pudtol", "Santa Marcela"];
    var citiesInAurora = ["Baler", "Casiguran", "Dilasag", "Dinalungan", "Dingalan", "Dipaculao", "Maria Aurora", "San Luis"];
    var citiesInBasilan = ["Akbar", "Al-Barka", "Hadji Mohammad Ajul", "Hadji Muhtamad", "Isabela City", "Lamitan City", "Lantawan", "Maluso", "Sumisip", "Tabuan-Lasa", "Tipo-Tipo", "Tuburan", "Ungkaya Pukan"];
    var citiesInBataan = ["Abucay", "Bagac", "Balanga City", "Dinalupihan", "Hermosa", "Limay", "Mariveles", "Morong", "Orani", "Orion", "Pilar", "Samal"];
    var citiesInBatanes = ["Basco", "Itbayat", "Ivana", "Mahatao", "Sabtang", "Uyugan"];
    var citiesInBatangas = ["Agoncillo", "Alitagtag", "Balayan", "Balete", "Batangas City", "Bauan", "Calaca", "Calatagan", "Cuenca", "Ibaan", "Laurel", "Lemery", "Lian", "Lipa City", "Lobo", "Mabini", "Malvar", "Mataasnakahoy", "Nasugbu", "Padre Garcia", "Rosario", "San Jose", "San Juan", "San Luis", "San Nicolas", "San Pascual", "Santa Teresita", "Santo Tomas", "Taal", "Talisay", "Tanauan City", "Taysan", "Tingloy", "Tuy"];
    var citiesInBenguet = ["Atok", "Baguio City", "Bakun", "Bokod", "Buguias", "Itogon", "Kabayan", "Kapangan", "Kibungan", "La Trinidad", "Mankayan", "Sablan", "Tuba", "Tublay"];
    var citiesInBiliran = ["Almeria", "Biliran", "Cabucgayan", "Caibiran", "Culaba", "Kawayan", "Maripipi", "Naval"];
    var citiesInBohol = ["Alburquerque", "Alicia", "Anda", "Antequera", "Baclayon", "Balilihan", "Batuan", "Bien Unido", "Bilar", "Calape", "Candijay", "Carmen", "Catigbian", "Clarin", "Corella", "Cortes", "Dagohoy", "Danao", "Dauis", "Dimiao", "Duero", "Garcia Hernandez", "Guindulman", "Inabanga", "Jagna", "Jetafe", "Lila", "Loay", "Loboc", "Loon", "Mabini", "Maribojoc", "Panglao", "Pilar", "Pres. Carlos P. Garcia (Pitogo)", "Sagbayan (Borja)", "San Isidro", "San Miguel", "Sevilla", "Sierra Bullones", "Sikatuna", "Tagbilaran City", "Talibon", "Trinidad", "Tubigon", "Ubay", "Valencia"];
    var citiesInBukidnon = ["Baungon", "Cabanglasan", "Damulog", "Dangcagan", "Don Carlos", "Impasugong", "Kadingilan", "Kalilangan", "Kibawe", "Kitaotao", "Lantapan", "Libona", "Malaybalay City", "Malitbog", "Manolo Fortich", "Maramag", "Pangantucan", "Quezon", "San Fernando", "Sumilao", "Talakag", "Valencia City"];
    var citiesInBulacan = ["Angat", "Balagtas (Bigaa)", "Baliuag", "Bocaue", "Bulakan", "Bustos", "Calumpit", "Doña Remedios Trinidad", "Guiguinto", "Hagonoy", "Malolos City", "Marilao", "Meycauayan City", "Norzagaray", "Obando", "Pandi", "Paombong", "Plaridel", "Pulilan", "San Ildefonso", "San Jose del Monte City", "San Miguel", "San Rafael", "Santa Maria"];
    var citiesInCagayan = ["Abulug", "Alcala", "Allacapan", "Amulung", "Aparri", "Baggao", "Ballesteros", "Buguey", "Calayan", "Camalaniugan", "Claveria", "Enrile", "Gattaran", "Gonzaga", "Iguig", "Lal-lo", "Lasam", "Pamplona", "Peñablanca", "Piat", "Rizal", "Sanchez-Mira", "Santa Ana", "Santa Praxedes", "Santa Teresita", "Santo Niño (Faire)", "Solana", "Tuao", "Tuguegarao City"];
    var citiesInCamarinesNorte = ["Basud", "Capalonga", "Daet", "Jose Panganiban", "Labo", "Mercedes", "Paracale", "San Lorenzo Ruiz", "San Vicente", "Santa Elena", "Talisay", "Vinzons"];
    var citiesInCamarinesSur = ["Baao", "Balatan", "Bato", "Bombon", "Buhi", "Bula", "Cabusao", "Calabanga", "Camaligan", "Canaman", "Caramoan", "Del Gallego", "Gainza", "Garchitorena", "Goa", "Iriga City", "Lagonoy", "Libmanan", "Lupi", "Magarao", "Milaor", "Minalabac", "Nabua", "Naga City", "Ocampo", "Pamplona", "Pasacao", "Pili", "Presentacion", "Ragay", "Sagñay", "San Fernando", "San Jose", "Sipocot", "Siruma", "Tigaon", "Tinambac"];
    var municipalitiesInCamiguin = ["Catarman", "Guinsiliban", "Mahinog", "Mambajao", "Sagay"];
    var citiesInCapiz = ["Cuartero", "Dao", "Dumalag", "Dumarao", "Ivisan", "Jamindan", "Ma-ayon", "Mambusao", "Panay", "Panitan", "Pilar", "Pontevedra", "President Roxas", "Roxas City", "Sapi-an", "Sigma", "Tapaz"];
    var municipalitiesInCatanduanes = ["Bagamanoc", "Baras", "Bato", "Caramoran", "Gigmoto", "Pandan", "Panganiban (Payo)", "San Andres (Calolbon)", "San Miguel", "Viga", "Virac"];
    var citiesInCavite = ["Alfonso", "Amadeo", "Bacoor City", "Carmona", "Cavite City", "Dasmariñas City", "General Emilio Aguinaldo", "General Mariano Alvarez", "General Trias City", "Imus City", "Indang", "Kawit", "Magallanes", "Maragondon", "Mendez", "Naic", "Noveleta", "Rosario", "Silang", "Tagaytay City", "Tanza", "Ternate", "Trece Martires City"];
    var citiesInCebu = ["Alcantara", "Alcoy", "Alegria", "Aloguinsan", "Argao", "Asturias", "Badian", "Balamban", "Bantayan", "Barili", "Bogo City", "Boljoon", "Borbon", "Carcar City", "Carmen", "Catmon", "Cebu City", "Compostela", "Consolacion", "Cordova", "Daanbantayan", "Dalaguete", "Danao City", "Dumanjug", "Ginatilan", "Lapu-Lapu City", "Liloan", "Madridejos", "Malabuyoc", "Mandaue City", "Medellin", "Minglanilla", "Moalboal", "Naga City", "Oslob", "Pilar", "Pinamungajan", "Poro", "Ronda", "Samboan", "San Fernando", "San Francisco", "San Remigio", "Santa Fe", "Santander", "Sibonga", "Sogod", "Tabogon", "Tabuelan", "Talisay City", "Toledo City", "Tuburan", "Tudela"];
    var citiesInCotabato = ["Alamada", "Aleosan", "Antipas", "Arakan", "Banisilan", "Carmen", "Kabacan", "Kidapawan City", "Libungan", "M'lang", "Magpet", "Makilala", "Matalam", "Midsayap", "Pigkawayan", "Pikit", "President Roxas", "Tulunan"];
    var citiesInDavaoDeOro = ["Compostela", "Laak (San Vicente)", "Mabini (Doña Alicia)", "Maco", "Maragusan (San Mariano)", "Mawab", "Monkayo", "Montevista", "Nabunturan", "New Bataan", "Pantukan"];
    var citiesInDavaoDelNorte = ["Asuncion (Saug)", "Braulio E. Dujali", "Carmen", "Kapalong", "New Corella", "Panabo City", "Samal City", "San Isidro", "Santo Tomas", "Tagum City", "Talaingod"];
    var citiesInDavaoDelSur = ["Bansalan", "Davao City", "Digos City", "Hagonoy", "Kiblawan", "Magsaysay", "Malalag", "Matanao", "Padada", "Santa Cruz", "Sulop"];
    var citiesInDavaoOriental = ["Baganga", "Banaybanay", "Boston", "Caraga", "Cateel", "Governor Generoso", "Lupon", "Manay", "Mati City", "San Isidro", "Tarragona"];
    var citiesInDinagatIslands = ["Basilisa (Rizal)", "Cagdianao", "Dinagat", "Libjo (Albor)", "Loreto", "San Jose", "Tubajon"];
    var citiesInEasternSamar = ["Arteche", "Balangiga", "Balangkayan", "Borongan City", "Can-avid", "Dolores", "General MacArthur", "Giporlos", "Guiuan", "Hernani", "Jipapad", "Lawaan", "Llorente", "Maslog", "Maydolong", "Mercedes", "Oras", "Quinapondan", "Salcedo", "San Julian", "San Policarpo", "Sulat", "Taft"];
    var citiesInGuimaras = ["Buenavista", "Jordan", "Nueva Valencia", "San Lorenzo", "Sibunag"];
    var citiesInIfugao = ["Aguinaldo", "Alfonso Lista", "Asipulo", "Banaue", "Hingyon", "Hungduan", "Kiangan", "Lagawe", "Lamut", "Mayoyao", "Tinoc"];
    var citiesInIlocosNorte = ["Adams", "Bacarra", "Badoc", "Bangui", "Banna", "Batac City", "Burgos", "Carasi", "Currimao", "Dingras", "Dumalneg", "Laoag City", "Marcos", "Nueva Era", "Pagudpud", "Paoay", "Pasuquin", "Piddig", "Pinili", "San Nicolas", "Sarrat", "Solsona", "Vintar"];
    var citiesInIlocosSur = ["Alilem", "Banayoyo", "Bantay", "Burgos", "Cabugao", "Candon City", "Caoayan", "Cervantes", "Galimuyod", "Gregorio del Pilar", "Lidlidda", "Magsingal", "Nagbukel", "Narvacan", "Quirino", "Salcedo", "San Emilio", "San Esteban", "San Ildefonso", "San Juan", "San Vicente", "Santa", "Santa Catalina", "Santa Cruz", "Santa Lucia", "Santa Maria", "Santiago", "Santo Domingo", "Sigay", "Sinait", "Sugpon", "Suyo", "Tagudin", "Vigan City"];
    var citiesInIloilo = ["Ajuy", "Alimodian", "Anilao", "Badiangan", "Balasan", "Banate", "Barotac Nuevo", "Barotac Viejo", "Batad", "Bingawan", "Cabatuan", "Calinog", "Carles", "Concepcion", "Dingle", "Dueñas", "Dumangas", "Estancia", "Guimbal", "Igbaras", "Iloilo City", "Janiuay", "Lambunao", "Leganes", "Lemery", "Leon", "Maasin", "Miagao", "Mina", "New Lucena", "Oton", "Passi City", "Pavia", "Pototan", "San Dionisio", "San Enrique", "San Joaquin", "San Miguel", "San Rafael", "Santa Barbara", "Sara", "Tigbauan", "Tubungan", "Zarraga"];
    var citiesInIsabela = ["Alicia", "Angadanan", "Aurora", "Benito Soliven", "Burgos", "Caba", "Cabagan", "Cauayan City", "Cordon", "Delfin Albano", "Dinapigue", "Divilacan", "Echague", "Gamu", "Ilagan City", "Jones", "Luna", "Maconacon", "Mallig", "Naguilian", "Palanan", "Quezon", "Quirino", "Ramon", "Reina Mercedes", "Roxas", "San Agustin", "San Guillermo", "San Isidro", "San Manuel", "San Mariano", "San Mateo", "San Pablo", "Santa Maria", "Santiago City", "Santo Tomas", "Tumauini"];
    var citiesInKalinga = ["Balbalan", "Lubuagan", "Pasil", "Pinukpuk", "Rizal", "Tabuk City", "Tanudan", "Tinglayan"];
    var citiesInLaUnion = ["Agoo", "Aringay", "Bacnotan", "Bagulin", "Balaoan", "Bangar", "Bauang", "Burgos", "Caba", "Luna", "Naguilian", "Pugo", "Rosario", "San Fernando City", "San Gabriel", "San Juan", "Santo Tomas", "Santol", "Sudipen", "Tubao"];
    var citiesInLaguna = ["Alaminos", "Bay", "Biñan City", "Cabuyao City", "Calamba City", "Calauan", "Cavinti", "Famy", "Kalayaan", "Liliw", "Los Baños", "Luisiana", "Lumban", "Mabitac", "Magdalena", "Majayjay", "Nagcarlan", "Paete", "Pagsanjan", "Pakil", "Pangil", "Pila", "Rizal", "San Pablo City", "San Pedro", "Santa Cruz", "Santa Maria", "Santa Rosa City", "Siniloan", "Victoria"];
    var citiesInLanaoDelNorte = ["Bacolod", "Baloi", "Baroy", "Iligan City", "Kapatagan", "Kauswagan", "Kolambugan", "Lala", "Linamon", "Magsaysay", "Maigo", "Matungao", "Munai", "Nunungan", "Pantao Ragat", "Pantar", "Poona Piagapo", "Salvador", "Sapad", "Sultan Naga Dimaporo", "Tagoloan", "Tangcal", "Tubod"];
    var citiesInLanaoDelSur = ["Bacolod-Kalawi (Bacolod-Grande)", "Balabagan", "Balindong (Watu)", "Bayang", "Binidayan", "Buadiposo-Buntong", "Bubong", "Butig", "Calanogas", "Ditsaan-Ramain", "Ganassi", "Kapai", "Kapatagan", "Lumba-Bayabao (Maguing)", "Lumbatan", "Lumbayanague", "Madalum", "Madamba", "Maguing", "Malabang", "Marantao", "Marawi City", "Marogong", "Masiu", "Mulondo", "Pagayawan (Tatarikan)", "Piagapo", "Poona Bayabao (Gata)", "Pualas", "Saguiaran", "Sultan Dumalondong", "Picong (Sultan Gumander)", "Tagoloan II", "Tamparan", "Taraka", "Tubaran", "Tugaya", "Wao"];
    var citiesInLeyte = ["Abuyog", "Alangalang", "Albuera", "Babatngon", "Barugo", "Bato", "Baybay", "Burauen", "Calubian", "Capoocan", "Carigara", "Dagami", "Dulag", "Hilongos", "Hindang", "Inopacan", "Isabel", "Jaro", "Javier", "Julita", "Kananga", "La Paz", "Leyte", "MacArthur", "Mahaplag", "Matag-ob", "Matalom", "Mayorga", "Merida", "Ormoc City", "Palo", "Palompon", "Pastrana", "San Isidro", "San Miguel", "Santa Fe", "Tabango", "Tabontabon", "Tacloban City", "Tanauan", "Tolosa", "Tunga", "Villaba"];
    var citiesInMaguindanao = ["Ampatuan", "Barira", "Buldon", "Buluan", "Cotabato City", "Datu Abdullah Sangki", "Datu Anggal Midtimbang", "Datu Blah T. Sinsuat", "Datu Hoffer Ampatuan", "Datu Montawal", "Datu Odin Sinsuat", "Datu Paglas", "Datu Piang", "Datu Saudi-Ampatuan", "Datu Unsay", "General Salipada K. Pendatun", "Guindulungan", "Kabuntalan", "Mamasapano", "Mangudadatu", "Matanog", "Northern Kabuntalan", "Pagalungan", "Paglat", "Pandag", "Parang", "Rajah Buayan", "Shariff Aguak", "Shariff Saydona Mustapha", "South Upi", "Sultan Kudarat", "Sultan Mastura", "Sultan sa Barongis", "Talayan", "Talitay", "Upi"];
    var citiesInMarinduque = ["Boac", "Buenavista", "Gasan", "Mogpog", "Santa Cruz", "Torrijos"];
    var citiesInMasbate = ["Aroroy", "Baleno", "Balud", "Batuan", "Cataingan", "Cawayan", "Claveria", "Dimasalang", "Esperanza", "Mandaon", "Masbate City", "Milagros", "Mobo", "Monreal", "Palanas", "Pio V. Corpuz", "Placer", "San Fernando", "San Jacinto", "San Pascual", "Uson"];
    var citiesInMisamisOccidental = ["Aloran", "Baliangao", "Bonifacio", "Calamba", "Clarin", "Concepcion", "Don Victoriano Chiongbian", "Jimenez", "Lopez Jaena", "Oroquieta City", "Ozamiz City", "Panaon", "Plaridel", "Sapang Dalaga", "Sinacaban", "Tangub City", "Tudela"];
    var citiesInMisamisOriental = ["Alubijid", "Balingasag", "Balingoan", "Binuangan", "Cagayan de Oro City", "Claveria", "El Salvador City", "Gingoog City", "Gitagum", "Initao", "Jasaan", "Kinoguitan", "Lagonglong", "Laguindingan", "Libertad", "Lugait", "Magsaysay (Linugos)", "Manticao", "Medina", "Naawan", "Opol", "Salay", "Sugbongcogon", "Tagoloan", "Talisayan", "Villanueva"];
    var citiesInMountainProvince = ["Barlig", "Bauko", "Besao", "Bontoc", "Natonin", "Paracelis", "Sabangan", "Sadanga", "Sagada", "Tadian"];
    var citiesInNegrosOccidental = ["Bacolod City", "Bago City", "Binalbagan", "Cadiz City", "Calatrava", "Candoni", "Cauayan", "Enrique B. Magalona", "Escalante City", "Himamaylan City", "Hinigaran", "Hinoba-an", "Ilog", "Isabela", "Kabankalan City", "La Carlota City", "La Castellana", "Manapla", "Moises Padilla", "Murcia", "Pontevedra", "Pulupandan", "Sagay City", "Salvador Benedicto", "San Carlos City", "San Enrique", "Silay City", "Sipalay City", "Talisay City", "Toboso", "Valladolid", "Victorias City"];
    var citiesInNegrosOriental = ["Amlan", "Ayungon", "Bacong", "Bais City", "Basay", "Bayawan City", "Bindoy", "Canlaon City", "Dauin", "Dumaguete City", "Guihulngan City", "Jimalalud", "La Libertad", "Mabinay", "Manjuyod", "Pamplona", "San Jose", "Santa Catalina", "Siaton", "Sibulan", "Tanjay City", "Tayasan", "Valencia", "Vallehermoso", "Zamboanguita"];
    var citiesInNorthernSamar = ["Allen", "Biri", "Bobon", "Capul", "Catarman", "Catubig", "Gamay", "Laoang", "Lapinig", "Las Navas", "Lavezares", "Lope de Vega", "Mapanas", "Mondragon", "Palapag", "Pambujan", "Rosario", "San Antonio", "San Isidro", "San Jose", "San Roque", "San Vicente", "Silvino Lobos", "Victoria"];
    var citiesInNuevaEcija = ["Aliaga", "Bongabon", "Cabanatuan City", "Cabiao", "Carranglan", "Cuyapo", "Gabaldon", "Gapan City", "General Mamerto Natividad", "General Tinio", "Guimba", "Jaen", "Laur", "Licab", "Llanera", "Lupao", "Nampicuan", "Palayan City", "Pantabangan", "Peñaranda", "Quezon", "Rizal", "San Antonio", "San Isidro", "San Jose City", "San Leonardo", "Santa Rosa", "Santo Domingo", "Talavera", "Talugtug", "Zaragoza"];
    var citiesInNuevaVizcaya = ["Alfonso Castaneda", "Ambaguio", "Aritao", "Bagabag", "Bambang", "Bayombong", "Diadi", "Dupax del Norte", "Dupax del Sur", "Kasibu", "Kayapa", "Quezon", "Santa Fe", "Solano", "Villaverde"];
    var citiesInOccidentalMindoro = ["Abra de Ilog", "Calintaan", "Looc", "Lubang", "Magsaysay", "Mamburao", "Paluan", "Rizal", "Sablayan", "San Jose", "Santa Cruz"];
    var citiesInOrientalMindoro = ["Baco", "Bansud", "Bongabong", "Bulalacao", "Calapan City", "Gloria", "Mansalay", "Naujan", "Pinamalayan", "Pola", "Puerto Galera", "Roxas", "San Teodoro", "Socorro", "Victoria"];
    var citiesInPalawan = ["Aborlan", "Agutaya", "Araceli", "Balabac", "Bataraza", "Brooke's Point", "Busuanga", "Cagayancillo", "Coron", "Culion", "Cuyo", "Dumaran", "El Nido", "Kalayaan", "Linapacan", "Magsaysay", "Narra", "Puerto Princesa City", "Quezon", "Rizal", "Roxas", "San Vicente", "Sofronio Española", "Taytay"];
    var citiesInPampanga = ["Angeles City", "Apalit", "Arayat", "Bacolor", "Candaba", "Floridablanca", "Guagua", "Lubao", "Mabalacat City", "Macabebe", "Magalang", "Masantol", "Mexico", "Minalin", "Porac", "San Fernando", "San Luis", "San Simon", "Santa Ana", "Santa Rita", "Santo Tomas", "Sasmuan"];
    var citiesInPangasinan = ["Agno", "Aguilar", "Alaminos City", "Alcala", "Anda", "Asingan", "Balungao", "Bani", "Basista", "Bautista", "Bayambang", "Binalonan", "Binmaley", "Bolinao", "Bugallon", "Burgos", "Calasiao", "Dagupan City", "Dasol", "Infanta", "Labrador", "Lingayen", "Mabini", "Malasiqui", "Manaoag", "Mangaldan", "Mangatarem", "Mapandan", "Natividad", "Pozorrubio", "Rosales", "San Carlos City", "San Fabian", "San Jacinto", "San Manuel", "San Nicolas", "San Quintin", "Santa Barbara", "Santa Maria", "Santo Tomas", "Sison", "Sual", "Tayug", "Umingan", "Urbiztondo", "Villasis"];
    var citiesInQuezon = ["Agdangan", "Alabat", "Atimonan", "Buenavista", "Burdeos", "Calauag", "Candelaria", "Catanauan", "Dolores", "General Luna", "General Nakar", "Guinayangan", "Gumaca", "Infanta", "Jomalig", "Lopez", "Lucban", "Lucena City", "Macalelon", "Mauban", "Mulanay", "Padre Burgos", "Pagbilao", "Panukulan", "Patnanungan", "Perez", "Pitogo", "Plaridel", "Polillo", "Quezon", "Real", "Sampaloc", "San Andres", "San Antonio", "San Francisco", "San Narciso", "Sariaya", "Tagkawayan", "Tayabas City", "Tiaong", "Unisan"];
    var citiesInQuirino = ["Aglipay", "Cabarroguis", "Diffun", "Maddela", "Nagtipunan", "Saguday"];
    var citiesInRizal = ["Angono", "Antipolo", "Baras", "Binangonan", "Cainta", "Cardona", "Jalajala", "Morong", "Pililla", "Rodriguez (Montalban)", "San Mateo", "Tanay", "Taytay", "Teresa"];
    var citiesInRomblon = ["Alcantara", "Banton", "Cajidiocan", "Calatrava", "Concepcion", "Corcuera", "Ferrol", "Looc", "Magdiwang", "Odiongan", "Romblon", "San Agustin", "San Andres", "San Fernando", "San Jose", "Santa Fe", "Santa Maria (Imelda)"];
    var citiesInSamar = ["Almagro", "Basey", "Calbayog City", "Calbiga", "Catbalogan City", "Daram", "Gandara", "Hinabangan", "Jiabong", "Marabut", "Matuguinao", "Motiong", "Pagsanghan", "Paranas (Wright)", "Pinabacdao", "San Jorge", "San Jose de Buan", "San Sebastian", "Santa Margarita", "Santa Rita", "Santo Niño", "Tagapul-an", "Talalora", "Tarangnan", "Villareal", "Zumarraga"];
    var citiesInSarangani = ["Alabel", "Glan", "Kiamba", "Maasim", "Maitum", "Malapatan", "Malungon"];
    var citiesInSiquijor = ["Enrique Villanueva", "Larena", "Lazi", "Maria", "San Juan", "Siquijor"];
    var citiesInSorsogon = ["Barcelona", "Bulan", "Bulusan", "Casiguran", "Castilla", "Donsol", "Gubat", "Irosin", "Juban", "Magallanes", "Matnog", "Pilar", "Prieto Diaz", "Santa Magdalena", "Sorsogon City"];
    var citiesInSouthCotabato = ["Banga", "General Santos City (Dadiangas)", "Koronadal City", "Lake Sebu", "Norala", "Polomolok", "Santo Niño", "Surallah", "T'boli", "Tampakan", "Tantangan", "Tupi"];
    var citiesInSouthernLeyte = ["Anahawan", "Bontoc", "Hinunangan", "Hinundayan", "Libagon", "Liloan", "Limasawa", "Maasin City", "Macrohon", "Malitbog", "Padre Burgos", "Pintuyan", "Saint Bernard", "San Francisco", "San Juan", "San Ricardo", "Silago", "Sogod", "Tomas Oppus"];
    var citiesInSultanKudarat = ["Bagumbayan", "Columbio", "Esperanza", "Isulan", "Kalamansig", "Lambayong", "Lebak", "Lutayan", "Palimbang", "President Quirino", "Senator Ninoy Aquino", "Tacurong City"];
    var citiesInSulu = ["Hadji Panglima Tahil (Marunggas)", "Indanan", "Jolo", "Kalingalan Caluang", "Lugus", "Luuk", "Maimbung", "Old Panamao", "Omar", "Pandami", "Panglima Estino", "Pangutaran", "Parang", "Pata", "Patikul", "Siasi", "Talipao", "Tapul"];
    var citiesInSurigaoDelNorte = ["Alegria", "Bacuag", "Burgos", "Claver", "Dapa", "Del Carmen", "General Luna", "Gigaquit", "Mainit", "Malimono", "Pilar", "Placer", "San Benito", "San Francisco (Anao-Aon)", "San Isidro", "Santa Monica (Sapao)", "Sison", "Socorro", "Surigao City", "Tagana-an", "Tubod"];
    var citiesInSurigaoDelSur = ["Barobo", "Bayabas", "Bislig City", "Cagwait", "Cantilan", "Carmen", "Carrascal", "Cortes", "Hinatuan", "Lanuza", "Lianga", "Lingig", "Madrid", "Marihatag", "San Agustin", "San Miguel", "Tagbina", "Tago", "Tandag City"];
    var citiesInTarlac = ["Anao", "Bamban", "Camiling", "Capas", "Concepcion", "Gerona", "La Paz", "Mayantoc", "Moncada", "Paniqui", "Pura", "Ramos", "San Clemente", "San Jose", "San Manuel", "Santa Ignacia", "Tarlac City", "Victoria"];
    var citiesInTawiTawi = ["Bongao", "Languyan", "Mapun", "Panglima Sugala", "Sapa-Sapa", "Sibutu", "Simunul", "Sitangkai", "South Ubian", "Tandubas", "Turtle Islands"];
    var citiesInZambales = ["Botolan", "Cabangan", "Candelaria", "Castillejos", "Iba", "Masinloc", "Olongapo City", "Palauig", "San Antonio", "San Felipe", "San Marcelino", "San Narciso", "Santa Cruz", "Subic"];
    var citiesInZamboangaDelNorte = ["Baliguian", "Dapitan City", "Dipolog City", "Godod", "Gutalac", "Jose Dalman", "Kalawit", "Katipunan", "La Libertad", "Labason", "Liloy", "Manukan", "Mutia", "Piñan", "Polanco", "Pres. Manuel A. Roxas", "Rizal", "Salug", "Sergio Osmeña Sr.", "Siayan", "Sibuco", "Sibutad", "Sindangan", "Siocon", "Sirawai", "Tampilisan"];
    var citiesInZamboangaDelSur = ["Aurora", "Bayog", "Dimataling", "Dinas", "Dumalinao", "Dumingag", "Guipos", "Josefina", "Kumalarang", "Labangan", "Lakewood", "Lapuyan", "Mahayag", "Margosatubig", "Midsalip", "Molave", "Pagadian City", "Pitogo", "Ramon Magsaysay", "San Miguel", "San Pablo", "Sominot", "Tabina", "Tambulig", "Tigbao", "Tukuran", "Vincenzo A. Sagun", "Zamboanga City"];
    var citiesInZamboangaSibugay = ["Alicia", "Buug", "Diplahan", "Imelda", "Ipil", "Kabasalan", "Mabuhay", "Malangas", "Naga", "Olutanga", "Payao", "Roseller Lim", "Siay", "Talusan", "Titay", "Tungawan"];


    var provinceSelect = document.getElementById('province');
    var cityMunicipalitySelect = document.getElementById('cityMunicipality');

    provinceSelect.addEventListener('change', function() {
        // Reset city/municipality select
        cityMunicipalitySelect.innerHTML = '<option value="">Select City/Municipality</option>';

        if (this.value === 'Abra') {
            // Populate city/municipality select if Abra is selected
            citiesInAbra.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Agusan del Norte') {
            citiesInAgusanDelNorte.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Agusan del Sur') {
            citiesInAgusanDelSur.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Aklan') {
            citiesInAklan.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Albay') {
            citiesInAlbay.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Antique') {
            citiesInAntique.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Apayao') {
            citiesInApayao.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Aurora') {
            citiesInAurora.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Basilan') {
            citiesInBasilan.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Bataan') {
            citiesInBataan.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Batanes') {
            citiesInBatanes.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Batangas') {
            citiesInBatangas.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Benguet') {
            citiesInBenguet.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Biliran') {
            citiesInBiliran.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Bohol') {
            citiesInBohol.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Bukidnon') {
            citiesInBukidnon.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Bulacan') {
            citiesInBulacan.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Cagayan') {
            citiesInCagayan.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Camarines Norte') {
            citiesInCamarinesNorte.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Camarines Sur') {
            citiesInCamarinesSur.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Camiguin') {
            municipalitiesInCamiguin.forEach(function(municipality) {
                var option = document.createElement('option');
                option.value = option.text = municipality;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Capiz') {
            citiesInCapiz.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Catanduanes') {
            municipalitiesInCatanduanes.forEach(function(municipality) {
                var option = document.createElement('option');
                option.value = option.text = municipality;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Cavite') {
            citiesInCavite.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Cebu') {
            citiesInCebu.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Cotabato') {
            citiesInCotabato.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Davao de Oro') {
            citiesInDavaoDeOro.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Davao del Norte') {
            citiesInDavaoDelNorte.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Davao del Sur') {
            citiesInDavaoDelSur.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Davao Oriental') {
            citiesInDavaoOriental.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Dinagat Islands') {
            citiesInDinagatIslands.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Eastern Samar') {
            citiesInEasternSamar.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Guimaras') {
            citiesInGuimaras.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Ifugao') {
            citiesInIfugao.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Ilocos Norte') {
            citiesInIlocosNorte.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Ilocos Sur') {
            citiesInIlocosSur.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Iloilo') {
            citiesInIloilo.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Isabela') {
            citiesInIsabela.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Kalinga') {
            citiesInKalinga.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'La Union') {
            citiesInLaUnion.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Laguna') {
            citiesInLaguna.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Lanao del Norte') {
            citiesInLanaoDelNorte.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Lanao del Sur') {
            citiesInLanaoDelSur.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Leyte') {
            citiesInLeyte.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Maguindanao') {
            citiesInMaguindanao.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Marinduque') {
            citiesInMarinduque.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Masbate') {
            citiesInMasbate.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Misamis Occidental') {
            citiesInMisamisOccidental.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Misamis Oriental') {
            citiesInMisamisOriental.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Mountain Province') {
            citiesInMountainProvince.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Negros Occidental') {
            citiesInNegrosOccidental.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Negros Oriental') {
            citiesInNegrosOriental.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Northern Samar') {
            citiesInNorthernSamar.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Nueva Ecija') {
            citiesInNuevaEcija.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Nueva Vizcaya') {
            citiesInNuevaVizcaya.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Occidental Mindoro') {
            citiesInOccidentalMindoro.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Oriental Mindoro') {
            citiesInOrientalMindoro.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Palawan') {
            citiesInPalawan.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Pampanga') {
            citiesInPampanga.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Pangasinan') {
            citiesInPangasinan.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Quezon') {
            citiesInQuezon.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Quirino') {
            citiesInQuirino.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Rizal') {
            citiesInRizal.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Romblon') {
            citiesInRomblon.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Samar') {
            citiesInSamar.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Sarangani') {
            citiesInSarangani.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Siquijor') {
            citiesInSiquijor.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Sorsogon') {
            citiesInSorsogon.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'South Cotabato') {
            citiesInSouthCotabato.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Southern Leyte') {
            citiesInSouthernLeyte.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Sultan Kudarat') {
            citiesInSultanKudarat.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Sulu') {
            citiesInSulu.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Siargao del Norte') {
            citiesInSurigaoDelNorte.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Siargao del Sur') {
            citiesInSurigaoDelSur.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Tarlac') {
            citiesInTarlac.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Tawi-Tawi') {
            citiesInTawiTawi.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Zambales') {
            citiesInZambales.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Zamboanga del Norte') {
            citiesInZamboangaDelNorte.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Zamboanga del Sur') {
            citiesInZamboangaDelSur.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        } else if (this.value === 'Zamboanga Sibugay') {
            citiesInZamboangaSibugay.forEach(function(city) {
                var option = document.createElement('option');
                option.value = option.text = city;
                cityMunicipalitySelect.appendChild(option);
            });
        }
    });
});