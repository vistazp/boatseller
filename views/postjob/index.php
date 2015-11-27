
<div id="content" class="span-24">

    <div id="steps" class="span-24 last">
        <form accept-charset="UTF-8" action="<?php echo URL; ?>postjob/nextstep" class="new_job" id="new_job" method="post"><div style="margin:0;padding:0;display:inline">

                <div id="step-1" class="span-24 last ">
                    <div class="tier-options span-24 last">

                        <br/>


                        <div class="span-24 last">


                            <h2>Step 1: Pick a Posting Package</h2>


                            <div class="span-24">&nbsp;</div>

                            <div id="standard" class="span-7 append-1">
                                <div class="tier-box">
                                    <div class="header">
                                        <h3>Standard</h3>
                                        <span>Get the Word Out</span>
                                    </div>
                                    <p class="middle">
                                        Directly email your post to each developer on our opt-in list<br /><span>
                                            (opt-in list has been built up over 5 years)</span>
                                    </p>
                                    <p class="end">
                                        Post a job for <b>45</b> days
                                    </p>
                                    <p class="footer">
                                        <label class='label-radio ' for='job_featured_status_1'>
                                            <input class="featured_status" id="job_featured_status_1" name="featured_status" type="radio" value="standart" /><strike>$99</strike>
                                            <span>$</span><span id="job_premium_b_amount">49</span> (till 09/01)
                                        </label>

                                    </p>

                                </div> <!-- end - box -->
                            </div><!-- end standard-->


                            <div id="premium" class="span-7 append-1">
                                <div class="tier-box">
                                    <div class="header">

                                        <h3 class="title">Premium</h3>
                                        Standard + Top of the Board
                                    </div>
                                    <p class="middle">
                                        Pin your post to the top of the board for 7
                                        days
                                    </p>
                                    <p class="middle">
                                        Highlight your post in bright yellow
                                    </p>
                                    <p class="middle">
                                        Directly email your post to each developer on our opt-in list<br /><span>
                                            (opt-in list has been built up over 5 years)</span>
                                    </p>
                                    <p class="end">
                                        Post a job for <b>45</b> days
                                    </p>
                                    <p class="footer">
                                        <label class='label-radio label-radio-check' for='job_featured_status_2'>
                                            <input checked="checked" class="featured_status" id="job_featured_status_2" name="featured_status" type="radio" value="premium" /><strike>$149</strike> 
                                            <span>$</span><span id="job_premium_a_amount">99</span> (till 09/01)
                                        </label>
                                    </p>
                                </div> <!-- end - box -->
                            </div> <!-- end - premium -->


                            <div id="expert" class="span-7 last">
                                <div class="tier-box">
                                    <div class="header">

                                        <h3 class="title">Ultra</h3>
                                        Premium + Ad Banner
                                    </div>
                                    <p class="middle">
                                        All the benefits of Premium plus Ad banner 150x200 px for 30 days.
                                    </p>
                                    <p class="middle">
                                        Pin your post to the top of the board for 7
                                        days
                                    </p>
                                    <p class="middle">
                                        Highlight your post in bright yellow
                                    </p>
                                    <p class="middle">
                                        Directly email your post to each developer on our opt-in list<br /><span>
                                            (opt-in list has been built up over 5 years)</span>
                                    </p>
                                    <p class="end">
                                        Post a job for <b>45</b> days
                                    </p>
                                    <p class="footer">
                                        <label class='label-radio ' for='job_featured_status_3'>
                                            <input class="featured_status" id="job_featured_status_3" name="featured_status" type="radio" value="ultra" /><strike>$199</strike> 
                                            <span>$</span><span id="job_premium_c_amount">149</span> (till 09/01)
                                        </label>
                                    </p>
                                </div> <!-- end - box -->

                            </div> <!-- end - expert -->


                        </div>

                    </div>
                    <hr class="space"/>
                    <div id="get-started" class="span-24 last">
                        <div class="intro span-24 last">
                            <h2>Step 2: Get Started:</h2>
                            <hr/>
                        </div>
                        <!-- errors -->

                        <!-- left column -->
                        <div class="span-12" name="step-1-fields-section">

                            <div class="span-12 last">
                                <strong>Boat name</strong><span class="hint"></span>
                                <input class="required" id="job_headline" name="headline" size="50" title="Please enter a Boat Name" type="text" />
                            </div>
                            <div id="job-where" class="span-12 last">
                                <div class="span-6">
                                    <label for="job_country">Boat Type</label>
                                    <br/>
                                    <select>      
                                        <option value="1">Catamaran</option>
                                        <option value="2">Motorboat</option>
                                        <option value="3">Sailboat</option>
                                    </select>
                                </div>
                                <div class="span-6 last">
                                    <label for="job_country">Construction year</label><span class="hint"></span>
                                    <br/>
                                    <input class="required" id="job_city" name="city" size="4" title="Please enter a construction year" type="text" />
                                </div>
                                <div class="span-6">
                                    <label for="job_country">CE category</label>
                                    <br/>
                                    <select>      
                                        <option value="A">A. Ocean</option>
                                        <option value="B">B. Offshore</option>
                                        <option value="C">C. Inshore</option>
                                        <option value="D">D. Sheltered Waters</option> 
                                    </select>
                                </div>
                                <div class="span-6">
                                    <label for="job_country">Model</label><span class="hint"></span>
                                    <br/>
                                    <input class="required" id="job_city" name="city" size="4" title="Please enter a model" type="text" />
                                </div>
                                <div class="span-6 last">
                                    <label for="job_country">Yard</label>
                                    <br/>
                                    <select>      
                                        <option value="9999">Other / Unknown</option>
                                        <option value="939">3000 Marine</option>
                                        <option value="940">A.Mostes-IT</option>
                                        <option value="941">Abbate, Bruno (IT)</option>
                                        <option value="942">Abbate, Tullio (IT)</option>
                                        <option value="943">Abeking &amp; Rasmussen</option>
                                        <option value="944">ABIM-NL</option>
                                        <option value="945">Absolute</option>
                                        <option value="946">ACM Dufour (FR)</option>
                                        <option value="947">Adagio (CN)</option>
                                        <option value="948">Adec (SE)</option>
                                        <option value="949">Adler Storebro (SE)</option>
                                        <option value="950">Admiral (GB)</option>
                                        <option value="951">Admirality Shipyards (RU)</option>
                                        <option value="952">Adria Event (SLO)</option>
                                        <option value="953">Agder (NO)</option>
                                        <option value="954">Agronaut (FI)</option>
                                        <option value="955">AICON Yachts - IT</option>
                                        <option value="956">Airfoil (DE)</option>
                                        <option value="957">Airon Marine (IT)</option>
                                        <option value="958">Akerboom</option>
                                        <option value="959">Albemarle (USA)</option>
                                        <option value="960">Albica (FI)</option>
                                        <option value="961">Albin (SE)</option>
                                        <option value="962">Albin Marine (USA)</option>
                                        <option value="963">alcan</option>
                                        <option value="964">Alden (USA)</option>
                                        <option value="965">Alfamarine (IT)</option>
                                        <option value="966">Ali Craft (NO)</option>
                                        <option value="967">Allermohe Bootswerft (DE)</option>
                                        <option value="968">Allround (DE)</option>
                                        <option value="969">Almarine (BE)</option>
                                        <option value="970">Alpha Marine (GR)</option>
                                        <option value="971">Alphacraft (GB)</option>
                                        <option value="972">Alstom (FR)</option>
                                        <option value="973">Altena (NL)</option>
                                        <option value="974">Aluminium Schiffswerft (DE)</option>
                                        <option value="975">Amerglass (NL)</option>
                                        <option value="976">American Marine (SG)</option>
                                        <option value="977">AMT(FI)</option>
                                        <option value="978">Ancora (DE)</option>
                                        <option value="979">Angel Marine (TW)</option>
                                        <option value="980">Antago (IT)</option>
                                        <option value="981">Antaris (NL)</option>
                                        <option value="982">Aprea Mare (IT)</option>
                                        <option value="983">Aprem (DE)</option>
                                        <option value="984">Aqua Star (GB)</option>
                                        <option value="985">Aquador (FI)</option>
                                        <option value="986">Aqualine</option>
                                        <option value="987">Aquamar (IT)</option>
                                        <option value="988">Aquamarine Yachts (CH)</option>
                                        <option value="989">Aquanaut (NL)</option>
                                        <option value="990">Aquatron (USA)</option>
                                        <option value="991">Aquaviva (IT)</option>
                                        <option value="992">Aquawatt - AT</option>
                                        <option value="993">Aquileia (IT)</option>
                                        <option value="994">Arcoa (FR)</option>
                                        <option value="995">Armada Yacht - TR</option>
                                        <option value="996">Aronow (USA)</option>
                                        <option value="997">Arredomar (IT)</option>
                                        <option value="998">Arriva (USA)</option>
                                        <option value="999">Arvor (BE)</option>
                                        <option value="1000">Askeladden (NO)</option>
                                        <option value="1001">Assos (TR)</option>
                                        <option value="1002">Astilleros Med. (ES)</option>
                                        <option value="1003">Astilleros Menorca (ES)</option>
                                        <option value="1004">Astinor (ES)</option>
                                        <option value="1005">Astondoa (ES)</option>
                                        <option value="1006">Astor (TW)</option>
                                        <option value="1007">Astromar (ES)</option>
                                        <option value="1008">Atlantic (GR)</option>
                                        <option value="1009">Atlantic (NL)</option>
                                        <option value="1010">Atlantis (IT)</option>
                                        <option value="1011">ATP (PL)</option>
                                        <option value="1012">Azimut (IT)</option>
                                        <option value="1013">Azimut 36 Fly</option>
                                        <option value="1014">Azure (USA)</option>
                                        <option value="1015">B2 marine</option>
                                        <option value="1016">Baensch (DE)</option>
                                        <option value="1017">Baess (DK)</option>
                                        <option value="1018">Baha cruiser</option>
                                        <option value="1019">Baja (USA)</option>
                                        <option value="1020">Bakker (NL)</option>
                                        <option value="1021">Baltic Products (DE)</option>
                                        <option value="1022">Baltic Trawler</option>
                                        <option value="1023">BANDIDO</option>
                                        <option value="1024">Barakuda (DE)</option>
                                        <option value="1025">Barkas</option>
                                        <option value="1026">Barro (DE)</option>
                                        <option value="1027">Bartex (PL)</option>
                                        <option value="1028">Bateaux Ocqueteau (F)</option>
                                        <option value="1029">Bavaria (DE)</option>
                                        <option value="1030">Bayerische Schiffbau GmbH</option>
                                        <option value="1031">Bayerische Schiffbau GmbH Erlenbach a. Main</option>
                                        <option value="1032">Bayliner (USA)</option>
                                        <option value="1033">Bayside (USA)</option>
                                        <option value="1034">Beachcraft</option>
                                        <option value="1035">Beekmann (NL)</option>
                                        <option value="1036">Beelitz (DE)</option>
                                        <option value="1037">Bekro (BE)</option>
                                        <option value="1038">Bella (FI)</option>
                                        <option value="1039">Beluga (DE)</option>
                                        <option value="1040">Benecci (IT)</option>
                                        <option value="1041">Beneteau (FR)</option>
                                        <option value="1042">Benetti (IT)</option>
                                        <option value="1043">Bertram (USA)</option>
                                        <option value="1044">Besmer (DE)</option>
                                        <option value="1045">Best (GR)</option>
                                        <option value="1046">BESTEVAER (NL)</option>
                                        <option value="1047">Biam (NO)</option>
                                        <option value="1048">BijkoJachtbouw - NL</option>
                                        <option value="1049">Birchwood (GB)</option>
                                        <option value="1050">Birenheide (DE)</option>
                                        <option value="1051">Blauwe Hand (NL)</option>
                                        <option value="1052">Blohm + Voss (DE)</option>
                                        <option value="1053">BLUEGAME - IT</option>
                                        <option value="1054">Blum (DE)</option>
                                        <option value="1055">Boarncruiser</option>
                                        <option value="1056">Boesch (CH)</option>
                                        <option value="1057">Bond Yachts - PL</option>
                                        <option value="1058">Bonum (SE)</option>
                                        <option value="1059">Boote-Korpal (DE)</option>
                                        <option value="10005">Bootsbau &quot;Rugen&quot; GmbH (DE)</option>
                                        <option value="1060">Bootswerft Bad Zwischenahn (DE)</option>
                                        <option value="1061">Bootswerft Bucher (CH)</option>
                                        <option value="1062">Bossems (GB)</option>
                                        <option value="1063">Boston Whaler (USA)</option>
                                        <option value="1064">Botec (DE)</option>
                                        <option value="1065">Botnia Marin (FI)</option>
                                        <option value="1066">Brandaris</option>
                                        <option value="1067">Brandsma (NL)</option>
                                        <option value="1068">Brekken Kruiser (NL)</option>
                                        <option value="1069">Broekmeulen (NL)</option>
                                        <option value="1070">Brooke (NZ)</option>
                                        <option value="1071">Broom (GB)</option>
                                        <option value="1072">Broward (USA)</option>
                                        <option value="1073">Bruijs Jachtbouw (NL)</option>
                                        <option value="1074">Bryant Boats (USA)</option>
                                        <option value="1075">Bucher (CH)</option>
                                        <option value="1076">Buetzfleth (DE)</option>
                                        <option value="1077">Bugari (IT)</option>
                                        <option value="1078">Burger (USA)</option>
                                        <option value="1079">Buster (FI)</option>
                                        <option value="1080">BUTZFLETH (DE)</option>
                                        <option value="1081">C.N.A. (IT)</option>
                                        <option value="1082">C.R.N. (IT)</option>
                                        <option value="1083">Cabo (USA)</option>
                                        <option value="1084">Cadorette/Thundercraft (CA)</option>
                                        <option value="1085">Campion (CA)</option>
                                        <option value="1086">Camuffo</option>
                                        <option value="1087">Can. del Canale (IT)</option>
                                        <option value="1088">Canados (IT)</option>
                                        <option value="1089">Canaventura (CA)</option>
                                        <option value="1090">Cant. Capelli (IT)</option>
                                        <option value="1091">Cant. di Baia (IT)</option>
                                        <option value="1092">Cant. di Sarnico (IT)</option>
                                        <option value="1093">Cant. Diano - IT</option>
                                        <option value="1094">Cant. Nautico VZ - IT</option>
                                        <option value="1095">Cant. Solare - IT</option>
                                        <option value="1096">Cantiere di tirreno</option>
                                        <option value="1097">Cantiere Landsneer</option>
                                        <option value="1098">Cantieri Navali (IT)</option>
                                        <option value="1099">Capelli (IT)</option>
                                        <option value="1100">Carat (DE)</option>
                                        <option value="1101">Caravelle (USA)</option>
                                        <option value="1102">Carnevali (IT)</option>
                                        <option value="1103">Carolina Skiff (USA)</option>
                                        <option value="1104">Carver (USA)</option>
                                        <option value="1105">Cascaruda (NL)</option>
                                        <option value="1106">Catana (FR)</option>
                                        <option value="1107">Celebrity (CA)</option>
                                        <option value="1108">CenturyBoats - USA</option>
                                        <option value="1109">Challenger (DE)</option>
                                        <option value="1110">Chaparral (USA)</option>
                                        <option value="1111">Chauson (TW)</option>
                                        <option value="1112">Chavanne (CH)</option>
                                        <option value="1113">Check Marine (GB)</option>
                                        <option value="1114">Checkmate (USA)</option>
                                        <option value="1115">Cheer Men Marine (TW)</option>
                                        <option value="1116">Cheoy Lee (HK)</option>
                                        <option value="1117">Chin Hwa 35 Trawler</option>
                                        <option value="1118">Chris Craft (USA)</option>
                                        <option value="1119">Cigala &amp; Bertini (IT)</option>
                                        <option value="1120">Cigarette (USA)</option>
                                        <option value="1121">Citation (USA)</option>
                                        <option value="1122">Clark (GB)</option>
                                        <option value="1123">Coastal Commander</option>
                                        <option value="1124">Cobalt (USA)</option>
                                        <option value="1125">Cobalt Marine Electric Boats - USA</option>
                                        <option value="1126">Cobia (USA)</option>
                                        <option value="1127">Cobrey Boats (PL)</option>
                                        <option value="1128">Codecasa (IT)</option>
                                        <option value="1129">Colombo (IT)</option>
                                        <option value="1130">Colvic (GB)</option>
                                        <option value="1131">Comar (IT)</option>
                                        <option value="1132">Comarine Int. (NL)</option>
                                        <option value="1133">Comet-Plast (NO)</option>
                                        <option value="1134">Comitti - IT</option>
                                        <option value="1135">Comtec (EE)</option>
                                        <option value="1136">Conam (IT)</option>
                                        <option value="1137">Conavroegh (NL)</option>
                                        <option value="1138">concord</option>
                                        <option value="1139">Condor Yachting (NL)</option>
                                        <option value="1140">Conquest (USA)</option>
                                        <option value="1141">Consonant (NL)</option>
                                        <option value="1142">Cornish Crabbers (GB)</option>
                                        <option value="1143">Coronet (DK)</option>
                                        <option value="1144">Correct Craft (USA)</option>
                                        <option value="1145">Costa Blanca (ES)</option>
                                        <option value="1146">Cougar (GB)</option>
                                        <option value="1147">Cover (IT)</option>
                                        <option value="1148">Coverline (IT)</option>
                                        <option value="1149">CraigCat (USA)</option>
                                        <option value="1150">Cranchi (IT)</option>
                                        <option value="1151">Cremo (SE)</option>
                                        <option value="1152">Crestar (GB)</option>
                                        <option value="1153">Crestliner (USA)</option>
                                        <option value="1154">Crisline (DE)</option>
                                        <option value="1155">Crown</option>
                                        <option value="1156">Crownline (USA)</option>
                                        <option value="1157">Crowther (AU)</option>
                                        <option value="1158">Cruisers Yachts (USA)</option>
                                        <option value="1159">Cutter (CA)</option>
                                        <option value="1160">Cytra (DE)</option>
                                        <option value="1161">Dacapo (NO)</option>
                                        <option value="1162">Dalla Pieta (IT)</option>
                                        <option value="1163">DANA Performance Boats (USA)</option>
                                        <option value="1164">DarekCo (PL)</option>
                                        <option value="1165">Darragh Boast (IE)</option>
                                        <option value="1166">de Alm (NL)</option>
                                        <option value="1167">De Boarnstream (NL)</option>
                                        <option value="1168">De Breedendam (NL)</option>
                                        <option value="1169">De Drait (NL)</option>
                                        <option value="1170">De Gier (NL)</option>
                                        <option value="1171">De Groot (NL)</option>
                                        <option value="1172">de Jong</option>
                                        <option value="1173">De Ruiter (NL)</option>
                                        <option value="1174">De Vries (NL)</option>
                                        <option value="1175">De Wiel te Heukelum</option>
                                        <option value="1176">DeFever</option>
                                        <option value="1177">Dell Adriatico (IT)</option>
                                        <option value="1178">Dell Quay (GB)</option>
                                        <option value="1179">Dellapasqua (IT)</option>
                                        <option value="1180">Delta</option>
                                        <option value="1181">Diana (NO)</option>
                                        <option value="1182">Doering (DE)</option>
                                        <option value="1183">Dominator (IT)</option>
                                        <option value="1184">Donzi (USA)</option>
                                        <option value="1185">Doppel</option>
                                        <option value="1186">Doral (CA)</option>
                                        <option value="1187">Doriff (DE)</option>
                                        <option value="1188">Dory (USA)</option>
                                        <option value="1189">Dory Wahoo (GB)</option>
                                        <option value="1190">Draco (NO)</option>
                                        <option value="1191">Drago Boats (GR)</option>
                                        <option value="1192">Duarry (E)</option>
                                        <option value="1193">Duffy Electric Boat Company - USA</option>
                                        <option value="1194">Dutch Bay - TR</option>
                                        <option value="1195">Duus Trading (NO)</option>
                                        <option value="1196">Dyna (TW)</option>
                                        <option value="1197">Dynasty (USA)</option>
                                        <option value="1198">Dyno Plast (NO)</option>
                                        <option value="1199">Ebbtide (USA)</option>
                                        <option value="1200">Ecofiber (BE)</option>
                                        <option value="1201">Edership (TW)</option>
                                        <option value="1202">Egg Harbor</option>
                                        <option value="1203">Eider (FR)</option>
                                        <option value="1204">Eista (NL)</option>
                                        <option value="1205">Elan (SI)</option>
                                        <option value="1206">ElectraCraft - USA</option>
                                        <option value="1207">Elegance (DE)</option>
                                        <option value="1208">Eliminator (USA)</option>
                                        <option value="1209">Elite Craft (USA)</option>
                                        <option value="1210">EMP (DE)</option>
                                        <option value="1211">Enterprise Marine (IT)</option>
                                        <option value="1212">Essex  (GB)</option>
                                        <option value="1213">Etap (BE)</option>
                                        <option value="1214">Euro Star (DE)</option>
                                        <option value="1215">Eurocrown</option>
                                        <option value="1216">Eurolaunch (NL)</option>
                                        <option value="1217">Euroyacht (HR)</option>
                                        <option value="1218">EverSail (NL)</option>
                                        <option value="1219">Evon (NL)</option>
                                        <option value="1220">Excel (USA)</option>
                                        <option value="1221">Excellent (NL)</option>
                                        <option value="1222">Explorer (UK)</option>
                                        <option value="1223">Faeton (ES)</option>
                                        <option value="1224">Fairline (GB)</option>
                                        <option value="1225">Falcon (GB)</option>
                                        <option value="1226">FBB (NL)</option>
                                        <option value="1227">Feltz (DE)</option>
                                        <option value="1228">Fenix (SE)</option>
                                        <option value="1229">Ferretti (IT)</option>
                                        <option value="1230">Fevik (NO)</option>
                                        <option value="1231">Fiart Mare (IT)</option>
                                        <option value="1232">Fiberform</option>
                                        <option value="1233">Fiberline (DE)</option>
                                        <option value="1234">Fibrafort (BR)</option>
                                        <option value="1235">Fidego (NL)</option>
                                        <option value="1236">Fiesta Marine (USA)</option>
                                        <option value="1237">Finmar (FI)</option>
                                        <option value="1238">Finn-Marin (FI)</option>
                                        <option value="1239">Finnmaster</option>
                                        <option value="1240">Fipa Italiana (IT)</option>
                                        <option value="1241">Fiskars (FI)</option>
                                        <option value="1242">Fisker Zeevaer</option>
                                        <option value="1243">Fjord (NO)</option>
                                        <option value="1244">Fleming (USA)</option>
                                        <option value="1245">Fletcher (GB)</option>
                                        <option value="1246">Flipper (FI)</option>
                                        <option value="1247">FM (NO)</option>
                                        <option value="1248">Forbinabatar (SE)</option>
                                        <option value="1249">Forester (USA)</option>
                                        <option value="1250">Formula (USA)</option>
                                        <option value="1251">Formula Boats (NZ)</option>
                                        <option value="1252">Fountain (USA)</option>
                                        <option value="1253">Fountaine Pajot (FR)</option>
                                        <option value="1254">Four Winns (USA)</option>
                                        <option value="1255">Fr. Schweers (DE)</option>
                                        <option value="1256">Frauscher (AT)</option>
                                        <option value="1257">Freedom (GB)</option>
                                        <option value="1258">Freeman (GB)</option>
                                        <option value="1259">Friesland Boat (NL)</option>
                                        <option value="1260">Fuerstenberg (DE)</option>
                                        <option value="1261">Gagliotta - IT</option>
                                        <option value="1262">Galaxy (USA)</option>
                                        <option value="1263">Galeon (GB)</option>
                                        <option value="1264">Galeon Boats (PL)</option>
                                        <option value="1265">Gallart (ES)</option>
                                        <option value="1266">Garin (ES)</option>
                                        <option value="1267">Gekko Sports (USA)</option>
                                        <option value="1268">Gelderbloom Poseidon</option>
                                        <option value="1269">Genesis (USA)</option>
                                        <option value="1270">Gianetti (IT)</option>
                                        <option value="1271">Gibert Marine (FR)</option>
                                        <option value="1272">Gillissen</option>
                                        <option value="1273">Gio Mare (IT)</option>
                                        <option value="1274">Giorgetti &amp; Magrini (IT)</option>
                                        <option value="1275">Giugliano (IT)</option>
                                        <option value="1276">Glacer (DE)</option>
                                        <option value="1277">Glassmaster (USA)</option>
                                        <option value="1278">Glassport (USA)</option>
                                        <option value="1279">Glasstream (USA)</option>
                                        <option value="1280">Glastron (USA)</option>
                                        <option value="1281">Glastron Laraya (ES)</option>
                                        <option value="1282">Glen-L (USA)</option>
                                        <option value="1283">Global (GB)</option>
                                        <option value="1284">Gobbi (IT)</option>
                                        <option value="1285">Goeree</option>
                                        <option value="1286">Gorbon Yachts (TR)</option>
                                        <option value="1287">Grainger (AUS)</option>
                                        <option value="1288">Grand Azur</option>
                                        <option value="1289">Grand Banks (SG)</option>
                                        <option value="1290">Greatline - SE</option>
                                        <option value="1291">Grew (CA)</option>
                                        <option value="1292">Grimsoey /NO</option>
                                        <option value="1293">Gruno (NL)</option>
                                        <option value="1294">Gulf Craft (VAE)</option>
                                        <option value="1295">Guy Couach (FR)</option>
                                        <option value="1296">Hagenah</option>
                                        <option value="1297">Haines Marine (GB)</option>
                                        <option value="1298">Halvorsen Marine (HK)</option>
                                        <option value="1299">Hammermeister (DE)</option>
                                        <option value="1300">Hampton (RN)</option>
                                        <option value="1301">Hansa-Nautik (DE)</option>
                                        <option value="1302">Hardy Marine (GB)</option>
                                        <option value="1303">Harris Flote Bote (USA)</option>
                                        <option value="1304">Hatteras (USA)</option>
                                        <option value="1305">Hausboot Wohnboot</option>
                                        <option value="1306">Heesen Shipyards (NL)</option>
                                        <option value="1307">Heistracher (DE)</option>
                                        <option value="1308">Hellas (GR)</option>
                                        <option value="1309">Hellwig (DE)</option>
                                        <option value="1310">HERSHINE</option>
                                        <option value="1311">Heyland (GB)</option>
                                        <option value="1312">HI-Star (TW)</option>
                                        <option value="1313">High Tech (USA)</option>
                                        <option value="1314">Hille (DE)</option>
                                        <option value="1315">Hiltergerke (DE)</option>
                                        <option value="1316">Hochmuth (CH)</option>
                                        <option value="1317">Hock (DE)</option>
                                        <option value="1318">Holiday Boating (NL)</option>
                                        <option value="1319">Holiday Mansion (USA)</option>
                                        <option value="1320">Holland Boat (NL)</option>
                                        <option value="1321">Hollandia (NL)</option>
                                        <option value="1322">Holterman (NL)</option>
                                        <option value="1323">Hoogezand (NL)</option>
                                        <option value="1324">Horizon</option>
                                        <option value="1325">Horizon Group</option>
                                        <option value="1326">Horizon Yachts</option>
                                        <option value="1327">Huber (CH)</option>
                                        <option value="1328">Huisman (NL)</option>
                                        <option value="1329">Hunton (GB)</option>
                                        <option value="1330">HuntYachts - USA</option>
                                        <option value="1331">Huseklepp (NO)</option>
                                        <option value="1332">Hustler (USA)</option>
                                        <option value="1333">Hydrolift (NO)</option>
                                        <option value="1334">Ijlstervlet</option>
                                        <option value="1335">Ilver (IT)</option>
                                        <option value="1336">IMP Boats (USA)</option>
                                        <option value="1337">Innovazione&amp;Progetti (IT)</option>
                                        <option value="1338">Inrizzardi - IT</option>
                                        <option value="1339">Inter (NO)</option>
                                        <option value="1340">Intermare (IT)</option>
                                        <option value="1341">Invader (USA)</option>
                                        <option value="1342">Island Gypsy (HK)</option>
                                        <option value="1343">Italcraft (IT)</option>
                                        <option value="1344">Italmar (IT)</option>
                                        <option value="1345">Italmotomare (IT)</option>
                                        <option value="1346">Itama - IT</option>
                                        <option value="1347">Jacabo</option>
                                        <option value="1348">Jacobssons (SE)</option>
                                        <option value="1349">Jade Banks (NL)</option>
                                        <option value="1350">Jans (NO)</option>
                                        <option value="1351">JCL Marine (GB)</option>
                                        <option value="1352">Jeanneau (FR)</option>
                                        <option value="1353">Jensch (DE)</option>
                                        <option value="1354">Jet Craft (CH)</option>
                                        <option value="1355">Jeteexx (DE)</option>
                                        <option value="1356">Jets Marivent (ES)</option>
                                        <option value="1357">Joda (NO)</option>
                                        <option value="1358">Jofa / Triss (SE)</option>
                                        <option value="1359">Jollenkreuzer Eigenumbau</option>
                                        <option value="1360">Juncker (DE)</option>
                                        <option value="1361">Junglas (DE)</option>
                                        <option value="1362">Jupiter (FI)</option>
                                        <option value="1363">Kammin (DE)</option>
                                        <option value="1364">Karnic (CY)</option>
                                        <option value="1365">Katana (CA)</option>
                                        <option value="1366">Kelt (FR)</option>
                                        <option value="1367">Keser Westbay (DE)</option>
                                        <option value="1368">Keser-Hollandia (DE)</option>
                                        <option value="1369">Kinetik (FI)</option>
                                        <option value="1370">KKG (AT)</option>
                                        <option value="1371">Klaassen</option>
                                        <option value="1372">KLassieker</option>
                                        <option value="1373">KMV (NO)</option>
                                        <option value="1374">Knief (DE)</option>
                                        <option value="1375">KnobbeJachtbouw - NL</option>
                                        <option value="1376">Kompier</option>
                                        <option value="1377">Kong &amp; Halversson (RC)</option>
                                        <option value="1378">Koopmans</option>
                                        <option value="1379">Korhonen (FI)</option>
                                        <option value="1380">Korso Marin</option>
                                        <option value="1381">Kral (TR)</option>
                                        <option value="1382">Kraller (DE)</option>
                                        <option value="1383">Kraps (DE)</option>
                                        <option value="1384">Kroen (NL)</option>
                                        <option value="1386">Krogerwerft</option>
                                        <option value="1385">Kroon (NL)</option>
                                        <option value="1387">Kuhnle Werft (DE)</option>
                                        <option value="1388">Kulkuri-Veneet (FI)</option>
                                        <option value="1389">Kunya-Werft (DE)</option>
                                        <option value="1390">Lagoon (FR)</option>
                                        <option value="1391">Lamberti (IT)</option>
                                        <option value="1392">Lami (FI)</option>
                                        <option value="1393">Laroc (DE)</option>
                                        <option value="1394">Larson (USA)</option>
                                        <option value="1395">Lauwersmeer (NL)</option>
                                        <option value="1396">Leda Yachtbau (DE)</option>
                                        <option value="1397">Leeraner Yachtwerft (DE)</option>
                                        <option value="1398">Legend Boats (CA)</option>
                                        <option value="1399">Lehmann + Yachten (DE)</option>
                                        <option value="1400">LeisureCat - AU</option>
                                        <option value="1401">Lema (ES)</option>
                                        <option value="1402">Leopard</option>
                                        <option value="1403">Lexmar (SI)</option>
                                        <option value="1404">Lin Hwa - Kaohsiung Taiwan</option>
                                        <option value="1405">Linden (NL)</option>
                                        <option value="1406">Linder (SE)</option>
                                        <option value="1407">Lindinger (DE)</option>
                                        <option value="1408">Lindstroems (FI)</option>
                                        <option value="1409">Linetti (IT)</option>
                                        <option value="1410">Linex (FI)</option>
                                        <option value="1411">Linssen (NL)</option>
                                        <option value="1412">LLOYDS SHIP</option>
                                        <option value="1413">Luerssen (DE)</option>
                                        <option value="1414">LYC (GB)</option>
                                        <option value="1415">M&amp;M (NL)</option>
                                        <option value="1416">MacGregor (USA)</option>
                                        <option value="1417">Magnum Marine - USA</option>
                                        <option value="1418">Mainship (USA)</option>
                                        <option value="1419">Majorca Nautica (ES)</option>
                                        <option value="1420">Makma (NL)</option>
                                        <option value="1421">Malard (ZA)</option>
                                        <option value="1422">Malibu (USA)</option>
                                        <option value="1423">Mano Marine (IT)</option>
                                        <option value="1424">Marada (USA)</option>
                                        <option value="1425">Marco-Plast (NL)</option>
                                        <option value="1426">Marco-Succes</option>
                                        <option value="1427">Mares (USA)</option>
                                        <option value="1428">Marex (NO)</option>
                                        <option value="1429">Mariah Boats (USA)</option>
                                        <option value="1430">Maril (NL)</option>
                                        <option value="1431">Marina Lanke (DE)</option>
                                        <option value="1432">Marina85 - NL</option>
                                        <option value="1433">Marinco (GR)</option>
                                        <option value="1434">Marine</option>
                                        <option value="1435">Marine Projects (GB)</option>
                                        <option value="1436">Marine Sloep</option>
                                        <option value="1437">Marine System (PL)</option>
                                        <option value="1438">Marinello (IT)</option>
                                        <option value="1439">Mariner (IT)</option>
                                        <option value="1440">Marino Oy (FI)</option>
                                        <option value="1441">Maritimo - AU</option>
                                        <option value="1442">Mark Twain (USA)</option>
                                        <option value="1443">Marmat (PL)</option>
                                        <option value="1444">Marquis Yachts - USA</option>
                                        <option value="1445">Marrow</option>
                                        <option value="1446">Marubeni (TW)</option>
                                        <option value="1447">Mas (IT)</option>
                                        <option value="1448">Master (FI)</option>
                                        <option value="1449">Master Craft (USA)</option>
                                        <option value="1450">Maverick (USA)</option>
                                        <option value="1451">Mawelo (DK)</option>
                                        <option value="1452">Maxum (USA)</option>
                                        <option value="1453">Mayland (GB)</option>
                                        <option value="1454">MCP Kelt (FR)</option>
                                        <option value="1455">MEGAN BOATS (PL)</option>
                                        <option value="1456">Mekon (NL)</option>
                                        <option value="1457">Menorquin Yachts (ES)</option>
                                        <option value="1458">Merenpoort (NL)</option>
                                        <option value="1459">Meridian Yachts (USA)</option>
                                        <option value="1460">Merwede Kruiser</option>
                                        <option value="1461">Meta (FR)</option>
                                        <option value="1462">MG boats (PL)</option>
                                        <option value="1463">Miami</option>
                                        <option value="1464">Mignola (IT)</option>
                                        <option value="1465">Mingolla (IT)</option>
                                        <option value="1466">Minor</option>
                                        <option value="1467">Mirage (USA)</option>
                                        <option value="1468">Mittelmanns (DE)</option>
                                        <option value="1469">MM Boote (PL)</option>
                                        <option value="1470">Mochi Craft (IT)</option>
                                        <option value="1471">Moewe Yachtbau (DE)</option>
                                        <option value="1472">Mogano Laungh</option>
                                        <option value="1473">Moland (NO)</option>
                                        <option value="1474">Molenkreuzer</option>
                                        <option value="1475">Molinari (IT)</option>
                                        <option value="1476">Monte Fino (TW)</option>
                                        <option value="1477">Monterey (USA)</option>
                                        <option value="1478">Monty Bank</option>
                                        <option value="1479">Monty Bank Erstwasserung 2005</option>
                                        <option value="1480">Moomba (USA)</option>
                                        <option value="1481">Moonen Shipyards (NL)</option>
                                        <option value="1482">Mossig (DE)</option>
                                        <option value="1483">Motiva (IT)</option>
                                        <option value="1484">Mountain Yachts (CH)</option>
                                        <option value="1485">MTI Marine Technology</option>
                                        <option value="1486">Mulder (NL)</option>
                                        <option value="1489">Muller-Werft Schweiz</option>
                                        <option value="1487">Mundimar</option>
                                        <option value="1488">MW-Line - CH</option>
                                        <option value="1490">Myra (NO)</option>
                                        <option value="1491">Mon (DK)</option>
                                        <option value="1492">Nautica</option>
                                        <option value="1493">Nauticat (FI)</option>
                                        <option value="1494">Nautirama (IT)</option>
                                        <option value="1495">Navcon (DE)</option>
                                        <option value="1496">Naviga (FI)</option>
                                        <option value="1497">NB Marine (NO)</option>
                                        <option value="1498">Neptunus (NL)</option>
                                        <option value="1499">Nexus (DE)</option>
                                        <option value="1500">Nichols (USA)</option>
                                        <option value="1501">Nicke Petter (IT)</option>
                                        <option value="1502">Nicolini (IT)</option>
                                        <option value="1503">Nidelv (NO)</option>
                                        <option value="1504">Nimbus (SE)</option>
                                        <option value="1505">Noblesse Yachts (NL)</option>
                                        <option value="1506">Nor Star (NO)</option>
                                        <option value="1507">Nor-Dan (NO)</option>
                                        <option value="1508">Nord Star</option>
                                        <option value="1509">Nord West (SE)</option>
                                        <option value="1510">Nordia Yachts (NL)</option>
                                        <option value="1511">Nordic (CA)</option>
                                        <option value="1512">Nordic (CAN)</option>
                                        <option value="1513">Nordisk (DK)</option>
                                        <option value="1514">Norman (GB)</option>
                                        <option value="1515">Norman (UA)</option>
                                        <option value="1516">NorTech (USA)</option>
                                        <option value="1517">Northman Yachts (PL)</option>
                                        <option value="1518">Novoplast (SI)</option>
                                        <option value="1519">Nowee Heeg (NL)</option>
                                        <option value="1520">Numarine (TR)</option>
                                        <option value="1521">Nuova Inter Are (IT)</option>
                                        <option value="1522">Nya Oskarshamm Shipyard</option>
                                        <option value="1523">O.M.J. (BE)</option>
                                        <option value="1524">Ocean Alexander (TW)</option>
                                        <option value="1525">Ocean Cruise (CH)</option>
                                        <option value="1526">Ocean Master (PL)</option>
                                        <option value="1527">Ocean Yachts (USA)</option>
                                        <option value="1528">Oceano Sportivo (UA)</option>
                                        <option value="1529">Ockelbo (SE)</option>
                                        <option value="1530">Ocqueteau (FR)</option>
                                        <option value="1531">Octagon (GB)</option>
                                        <option value="1532">Oehlmann (DE)</option>
                                        <option value="1533">Oernvik (SE)</option>
                                        <option value="1534">Off-Course (IT)</option>
                                        <option value="1535">Olympic (GR)</option>
                                        <option value="1536">ONJ (NL)</option>
                                        <option value="1537">Oost Jachtwerf (NL)</option>
                                        <option value="1538">Orkney (GB)</option>
                                        <option value="1539">Ormieres (CH)</option>
                                        <option value="1540">OSM Boat (IE)</option>
                                        <option value="1541">Ostroda (PL)</option>
                                        <option value="1542">OTAM - IT</option>
                                        <option value="1543">Otto Boats (NO)</option>
                                        <option value="1544">Outhill (GB)</option>
                                        <option value="1545">P Valk Franeker</option>
                                        <option value="1546">Pacific Allure</option>
                                        <option value="1592">Paijan (FI)</option>
                                        <option value="1547">Palmer Johnson (USA)</option>
                                        <option value="1548">Passengervessel</option>
                                        <option value="1549">Passion Yacht </option>
                                        <option value="1550">Pavel Shaposhnikov Design</option>
                                        <option value="1551">Pearl (GB)</option>
                                        <option value="1552">Pedrazzini (CH)</option>
                                        <option value="1553">Pedro (NL)</option>
                                        <option value="1554">Peiso (AT)</option>
                                        <option value="1555">Pelican (CA)</option>
                                        <option value="1556">Pelle Peterson (SE)</option>
                                        <option value="1557">Pendennis Shipyard (GB)</option>
                                        <option value="1558">Perfekt Yacht (PL)</option>
                                        <option value="1559">Performance (IT)</option>
                                        <option value="1560">Pershing (IT)</option>
                                        <option value="1561">Pfeil (DE)</option>
                                        <option value="1562">Phoenix (KR)</option>
                                        <option value="1563">Phuket Yachts (TH)</option>
                                        <option value="1564">Piantoni (IT)</option>
                                        <option value="1565">Picchiotti (IT)</option>
                                        <option value="1566">Picton (GB)</option>
                                        <option value="1567">Piet Hein (NL)</option>
                                        <option value="1568">Pikmeerkruiser (NL)</option>
                                        <option value="1569">Pilot</option>
                                        <option value="1570">Pioner (NO)</option>
                                        <option value="1571">PL Qucksilver (PL)</option>
                                        <option value="1572">Pocta Intern (CN)</option>
                                        <option value="1573">poland</option>
                                        <option value="1574">Polar Boats (NO)</option>
                                        <option value="1575">Polaris (NL)</option>
                                        <option value="1576">Polyboats (NL)</option>
                                        <option value="1577">Porsche Marine (USA)</option>
                                        <option value="1578">Portofino Marine (IT)</option>
                                        <option value="1579">Poseidon (DE)</option>
                                        <option value="1580">Posillipo (IT)</option>
                                        <option value="1581">Post Yachts - USA</option>
                                        <option value="1582">Power Play (USA)</option>
                                        <option value="1583">President (TW)</option>
                                        <option value="1584">Prima Yachts (TW)</option>
                                        <option value="1585">Primaboot (DE)</option>
                                        <option value="1586">Princess (GB)</option>
                                        <option value="1587">Privateer (NL)</option>
                                        <option value="1588">Pro-Line</option>
                                        <option value="1589">Proficiat (NL)</option>
                                        <option value="1590">Prout (GB)</option>
                                        <option value="1591">Pursuit - USA</option>
                                        <option value="1593">Qualine (USA)</option>
                                        <option value="1594">Quicksilver (USA)</option>
                                        <option value="1595">Raffaeli (IT)</option>
                                        <option value="1596">Ramco Boats (NZ)</option>
                                        <option value="1597">Ramin Boats (NO)</option>
                                        <option value="1598">Rana</option>
                                        <option value="1599">Ranieri (IT)</option>
                                        <option value="1600">Rapsody (NL)</option>
                                        <option value="1601">Rascala (IT)</option>
                                        <option value="1602">Recla (DE)</option>
                                        <option value="1603">Red Hawk (USA)</option>
                                        <option value="1604">Regal (USA)</option>
                                        <option value="1605">Reinell (USA)</option>
                                        <option value="1606">Reinke (DE)</option>
                                        <option value="1607">Relcraft (GB)</option>
                                        <option value="1608">ReLine (NL)</option>
                                        <option value="1609">Renken (USA)</option>
                                        <option value="1610">Revenger (GB)</option>
                                        <option value="1611">Riamar (PT)</option>
                                        <option value="1612">Rias (FI)</option>
                                        <option value="1613">Ridas (EE)</option>
                                        <option value="1614">Rinker (USA)</option>
                                        <option value="1615">Rio (IT)</option>
                                        <option value="1616">Riva (IT)</option>
                                        <option value="1617">Riviera- AU</option>
                                        <option value="1618">Rizzardi (IT)</option>
                                        <option value="1619">Roberts (AUS)</option>
                                        <option value="1620">Rocca (FR)</option>
                                        <option value="1621">Rocco Boats (SE)</option>
                                        <option value="1622">Rodman (ES)</option>
                                        <option value="1623">Rogger</option>
                                        <option value="1624">Roland (NO)</option>
                                        <option value="1625">Romar (IT)</option>
                                        <option value="1626">Rona Yachts</option>
                                        <option value="1627">Rose Island - IT</option>
                                        <option value="1628">Roskam</option>
                                        <option value="1629">Royal Denship (DK)</option>
                                        <option value="1630">Rudkobing (DK)</option>
                                        <option value="1631">Ryds (SE)</option>
                                        <option value="1632">Saare-Paat (EE)</option>
                                        <option value="1633">Sabre (US)A</option>
                                        <option value="1634">Safir (DK)</option>
                                        <option value="1635">Saga (NO)</option>
                                        <option value="1636">Sailart (DE)</option>
                                        <option value="1637">Salpa (IT)</option>
                                        <option value="1638">San Lorenzo (IT)</option>
                                        <option value="1639">Sandviks (NO)</option>
                                        <option value="1640">Sanlorenzo Baleari</option>
                                        <option value="1641">Sarins (FI)</option>
                                        <option value="1642">SAS VEKTOR</option>
                                        <option value="1643">Sasanka (PL)</option>
                                        <option value="1644">Sasanka Yacht (PL)</option>
                                        <option value="1645">Saver</option>
                                        <option value="1646">SBM (DE)</option>
                                        <option value="1647">SBPEM (FR)</option>
                                        <option value="1648">Scand Boats (NO)</option>
                                        <option value="1649">Scarani - ES</option>
                                        <option value="1650">Schachner (AT)</option>
                                        <option value="1651">Scharping (DE)</option>
                                        <option value="1652">Schleswiger Werkstatten (DE)</option>
                                        <option value="1653">Schlichting (DE)</option>
                                        <option value="10004">Schochl (Sunbeam)</option>
                                        <option value="1654">schubert</option>
                                        <option value="1655">Schulz (AT)</option>
                                        <option value="1656">Schweers Bardenfleth Weser</option>
                                        <option value="1657">Schweizer Bateaux (CH)</option>
                                        <option value="1658">Sciallino (IT)</option>
                                        <option value="1659">SCOUT BOAT</option>
                                        <option value="1660">Sea Fox (USA)</option>
                                        <option value="1661">Sea Nymph (USA)</option>
                                        <option value="1662">Sea Ray (USA)</option>
                                        <option value="1663">SEA SPIRIT MARINE (CN)</option>
                                        <option value="1664">Sea Sprite (USA)</option>
                                        <option value="1665">Sea Star (FI)</option>
                                        <option value="1666">Seabird (SE)</option>
                                        <option value="1667">Seaco (NO)</option>
                                        <option value="1668">Seaforce (TW)</option>
                                        <option value="1669">Sealine (GB)</option>
                                        <option value="1670">SeaMar (TR)</option>
                                        <option value="1671">Seanest - IT</option>
                                        <option value="1672">Seaswirl (USA)</option>
                                        <option value="1673">Seawing (GB)</option>
                                        <option value="1674">Segger-Boote (DE)</option>
                                        <option value="1675">Selva (IT)</option>
                                        <option value="1676">sep. WC / 1 Jahr Garantie</option>
                                        <option value="1677">sep. WC/ 1 Jahr Garantie / neuer Motor</option>
                                        <option value="1678">SeriousYachts - NL</option>
                                        <option value="1679">Sessa (IT)</option>
                                        <option value="1680">Shadow</option>
                                        <option value="1681">Shakespeare (GB)</option>
                                        <option value="1682">Shamrock (USA)</option>
                                        <option value="1683">Shetland (GB)</option>
                                        <option value="1684">Siemer (NL)</option>
                                        <option value="1685">Silver (FI)</option>
                                        <option value="1686">Silverline (USA)</option>
                                        <option value="1687">Silverton (USA)</option>
                                        <option value="1688">Skagen</option>
                                        <option value="1689">Skagerrak (NO)</option>
                                        <option value="1690">Skarpnes (NO)</option>
                                        <option value="1691">Skibsplast (NO)</option>
                                        <option value="1692">Skilso (NO)</option>
                                        <option value="1693">Skorgenes (NO)</option>
                                        <option value="1694">Slickcraft (USA)</option>
                                        <option value="1695">SM Yacht Werft (PL)</option>
                                        <option value="1696">Smelne (NL)</option>
                                        <option value="1697">SMG Werft - DE</option>
                                        <option value="1698">SNP (FR)</option>
                                        <option value="1699">SoleMar (DE)</option>
                                        <option value="1700">Sollux (NO)</option>
                                        <option value="1701">SONSTIGE/OTHERS</option>
                                        <option value="1702">Southern Wind (GB)</option>
                                        <option value="1703">Spectrum</option>
                                        <option value="1704">Speedy (PL)</option>
                                        <option value="1705">SpinCraft Electric Boats - CA</option>
                                        <option value="1706">Spirit (GB)</option>
                                        <option value="1707">Sport Craft</option>
                                        <option value="1708">Sportboot</option>
                                        <option value="1709">Sportboot 340</option>
                                        <option value="1710">Star Yachts (TH)</option>
                                        <option value="1711">Starcraft (USA)</option>
                                        <option value="1712">Stardust (USA)</option>
                                        <option value="1713">Starfisher</option>
                                        <option value="1714">Ste Mar Nautica (IT)</option>
                                        <option value="1715">Stefyniur (PL)</option>
                                        <option value="1716">Stelco (GB)</option>
                                        <option value="1717">Stentor (NL)</option>
                                        <option value="1718">Steven (NL)</option>
                                        <option value="1719">Stevens Nautical</option>
                                        <option value="1720">Stichnoth (DE)</option>
                                        <option value="1721">Stingray (USA)</option>
                                        <option value="1722">Storebro (SE)</option>
                                        <option value="1723">Strike</option>
                                        <option value="1724">Struerewerft (DK)</option>
                                        <option value="1725">Sturier Trawler</option>
                                        <option value="1726">Succes (NL)</option>
                                        <option value="1727">Sun Cruiser (GB)</option>
                                        <option value="1728">Sunbird (USA)</option>
                                        <option value="1729">Sunliner</option>
                                        <option value="1730">Sunmar (FI)</option>
                                        <option value="1731">Sunray</option>
                                        <option value="1732">Sunreef Yachts (PL)</option>
                                        <option value="1733">SunRunner (USA)</option>
                                        <option value="1734">Sunseeker (GB)</option>
                                        <option value="1735">Super van Craft</option>
                                        <option value="1736">Supra Sports (USA)</option>
                                        <option value="1737">Swift Craft (ES)</option>
                                        <option value="1738">Symbol (TW)</option>
                                        <option value="1739">Syntechnics (DE)</option>
                                        <option value="1740">T.A. Mare (IT)</option>
                                        <option value="1741">t.a.mare (IT)</option>
                                        <option value="1742">Ta Chiao (TW)</option>
                                        <option value="1743">Tacar (TR)</option>
                                        <option value="1744">Tacoma (USA)</option>
                                        <option value="1745">Tahoe</option>
                                        <option value="1746">Talon (USA)</option>
                                        <option value="1747">Tango Yachts (AR)</option>
                                        <option value="1748">Tania (TH)</option>
                                        <option value="1749">Target</option>
                                        <option value="1750">Tarquin (GB)</option>
                                        <option value="1751">Tashing (TW)</option>
                                        <option value="1752">Taurus (RC)</option>
                                        <option value="1753">Tayana (TW)</option>
                                        <option value="1754">Taylan Yacht (TR)</option>
                                        <option value="1755">Techno Consult (DE)</option>
                                        <option value="1756">Tecnofiber (IT)</option>
                                        <option value="1757">Tecnomarine (IT)</option>
                                        <option value="1758">TEKA (USA)</option>
                                        <option value="1759">Tempest</option>
                                        <option value="1760">Tenten-Boats (DE)</option>
                                        <option value="1761">Terhi (FI)</option>
                                        <option value="1762">Terminalboat - IT</option>
                                        <option value="1763">TES YACHT</option>
                                        <option value="1764">Texas</option>
                                        <option value="1765">TG Boat (FI)</option>
                                        <option value="1766">Thermo (NL)</option>
                                        <option value="1767">Thoma (CH)</option>
                                        <option value="1768">Thomasz Yachts</option>
                                        <option value="1769">Thompson (USA)</option>
                                        <option value="1770">Thunderbird (USA)</option>
                                        <option value="1771">Thundercraft (CA)</option>
                                        <option value="1772">Tiara Yachts - USA</option>
                                        <option value="1773">Time-Out (NL)</option>
                                        <option value="1774">Tjeukemer (NL)</option>
                                        <option value="1775">Toensberg</option>
                                        <option value="1776">Tollycraft (USA)</option>
                                        <option value="1777">Tony Giugliano (IT)</option>
                                        <option value="1778">Tornado</option>
                                        <option value="1779">Toy Marine - IT</option>
                                        <option value="1780">Trailer (SE)</option>
                                        <option value="1781">Transpacific (TW)</option>
                                        <option value="1782">Trawler</option>
                                        <option value="1783">Tresfjord (NO)</option>
                                        <option value="1784">Trier Hans Boost</option>
                                        <option value="1785">Tristan Boats (FI)</option>
                                        <option value="1786">TriStar (TR)</option>
                                        <option value="1787">Troian</option>
                                        <option value="1788">Trojan (USA)</option>
                                        <option value="1789">Trophy (USA)</option>
                                        <option value="1790">Tuccoli</option>
                                        <option value="1791">Tullio Abbate (IT)</option>
                                        <option value="1792">Tuna-Yachts - NL</option>
                                        <option value="1793">Tung Hwa (TW)</option>
                                        <option value="1794">unbekannt</option>
                                        <option value="1795">Uniesse Marine (IT)</option>
                                        <option value="1796">Unique (NO)</option>
                                        <option value="1797">Uttern (SE)</option>
                                        <option value="1798">v-type (UK)</option>
                                        <option value="1799">Vacance (NL)</option>
                                        <option value="1800">Valk</option>
                                        <option value="1801">van der Heijden (NL)</option>
                                        <option value="1802">van der Valk (NL)</option>
                                        <option value="1803">van der Vlis (NL)</option>
                                        <option value="1804">van der Werff (NL)</option>
                                        <option value="1805">van Heck</option>
                                        <option value="1806">van Lent (NL)</option>
                                        <option value="1807">van Vlieth (NL)</option>
                                        <option value="1808">van Waarde (NL)</option>
                                        <option value="1809">van Wijk (NL)</option>
                                        <option value="1810">Vansjo-Bat (NO)</option>
                                        <option value="1811">Variant 606 / BJ 2009 / 25 PS EFI NEU / Schubert</option>
                                        <option value="1812">Variant 606 HT / BJ 2004 / 20 PS NEU / Schubert</option>
                                        <option value="1813">Variant 606 HT / BJ 2008 / 70 PS / Schubert</option>
                                        <option value="1814">VDL Shipyards (NL)</option>
                                        <option value="1815">VEB Muggelspree</option>
                                        <option value="1816">Veha (NL)</option>
                                        <option value="1817">Venatus Boats</option>
                                        <option value="1818">Veneveistamo (FI)</option>
                                        <option value="1819">Verhoefkruiser</option>
                                        <option value="1820">Versil Craft (IT)</option>
                                        <option value="1821">Viber (FI)</option>
                                        <option value="1822">VICEM (TR)</option>
                                        <option value="1823">Vieser (DE)</option>
                                        <option value="1824">Viking (GB)</option>
                                        <option value="1825">Viking (USA)</option>
                                        <option value="1826">Viknes (NO)</option>
                                        <option value="1827">Viksund (NO)</option>
                                        <option value="1828">Vinkeveen Fleet</option>
                                        <option value="1829">Vip Boats (USA)</option>
                                        <option value="1830">Viper (DE)</option>
                                        <option value="1831">Virgin del Mar (ES)</option>
                                        <option value="1832">Vissers (NL)</option>
                                        <option value="1833">viudes</option>
                                        <option value="1834">Volharding (NL)</option>
                                        <option value="1835">Voss (DE)</option>
                                        <option value="1836">Vri-Jon (NL)</option>
                                        <option value="1837">Vribuiter (NL)</option>
                                        <option value="1838">Vripack Yachting (NL)</option>
                                        <option value="1839">Vroegh &amp; Alblas (NL)</option>
                                        <option value="1840">Vulture Ventura (GB)</option>
                                        <option value="1841">Warlock (USA)</option>
                                        <option value="1842">Warren Yachts - AU</option>
                                        <option value="1843">Waswa (DE)</option>
                                        <option value="1844">Water RooCraft - UK</option>
                                        <option value="1845">Waterland (NL)</option>
                                        <option value="1846">WeCo (NL)</option>
                                        <option value="1847">Wellcraft (USA)</option>
                                        <option value="1848">Werft unbekannt</option>
                                        <option value="1849">Wester engh</option>
                                        <option value="1850">Westerly (GB)</option>
                                        <option value="1851">Weston (GB)</option>
                                        <option value="1852">White Shark</option>
                                        <option value="1853">Wicabo (NL)</option>
                                        <option value="1854">Wieker (DE)</option>
                                        <option value="1855">Wiking Boats (NL)</option>
                                        <option value="1856">Willigen (NL)</option>
                                        <option value="1857">Wim van der Valk (NL)</option>
                                        <option value="1858">Windy (NO)</option>
                                        <option value="1859">Winga (SE)</option>
                                        <option value="1860">Winrace (NO)</option>
                                        <option value="1861">Winsor Brothers (GB)</option>
                                        <option value="1862">Wittley - AU</option>
                                        <option value="1863">Wyboats (NL)</option>
                                        <option value="1864">Xylon (DE)</option>
                                        <option value="1865">Y.B.M. (PL)</option>
                                        <option value="1866">Y.E.P. (DE)</option>
                                        <option value="1867">Yachts Industries (FR)</option>
                                        <option value="1868">Yachtwerft Wilhelmshaven (DE)</option>
                                        <option value="1869">Yamaha (JP)</option>
                                        <option value="1870">Yamarin (FI)</option>
                                        <option value="1871">Yaretti (AT)</option>
                                        <option value="1872">Z-Products</option>
                                        <option value="1873">Zaniboni (IT)</option>
                                        <option value="1874">ZET YACHTS - TR</option>
                                        <option value="1875">Zeta Group (IT)</option>
                                        <option value="1876">Zijlmans (NL)</option>
                                    </select>
                                </div>
                                <div class="span-6">
                                    
                                    <a class="fancybox fancybox.iframe button15" href="<?php echo URL; ?>postjob/BoatSeller_map.html">Please set the current location of the boat >></a>
                                        <input id="lat" type="text" size="17" value="0" disabled>
                                        <input id="lng" type="text" size="17" value="0" disabled>
                                    
                                    
                                    <br/>
                                    
                                    
                                    
                                    
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

                            </div>
                            <div class="span-12 last">
                                <input name="telecomute" type="hidden" value="no" /><input hint="Check here if this is a telecommute job" id="job_telecomute" label="Telecommute:" name="telecomute" type="checkbox" value="yes" />
                                <label for="job_telecomute">This is a full telecommute job</label>
                                <hr class="space"/>

                            </div>

                        </div>


                        <?php if (session::get('loggedIn') == TRUE): ?>

                            <p class="current-user">Logged in as: <span><?php echo $_SESSION['userEmail'] ?></span></p>

                        <?php else: ?>   

                            <div id="loginForm" style="display:  block ">
                                <label for="user_login">Email:</label><br />
                                <input id="user_login" class="required email" title="Please enter email" name="login" size="45" type="text" value="" /><br />

                                <label for="user_password">Password:</label><br />
                                <input id="user_password" class="required"  name="password" size="45" type="password" value="" /><br />
                                <a href="<?php echo URL; ?>signup/reset">Forgot your password?</a><br />
                                If you don't have an account, then go to the <a href="<?php echo URL; ?>signup">create account</a> page.<br/>
                            </div>


                        <?php endif; ?>   

                    </div>

                    <div class="span-23 errorForsteps">

                    </div>

                    <!-- end - right column -->
                    <div class="step-nav span-24 last">
                        <div class="next-step last">
                            <input class="button" id="next-step-job-detail" name="commit" type="submit" value="Next Step: Job Details &gt;&gt;" />
                        </div>
                    </div>
                </div>
            </div>

        </form></div>


</div>