
<div id="content" class="span-24">

    <div id="steps" class="span-24 last">
        <form accept-charset="UTF-8" action="<?php echo URL; ?>postjob/nextstep" class="new_job" id="new_job" method="post"><div style="margin:0;padding:0;display:inline">

                <div id="step-1" class="span-24 last ">
                    <div class="tier-options span-24 last">

                        <br/>


                        <div class="span-24 last">


                            <h2>Step 1: Pick a Posting Package</h2>


                            <div class="span-24">&nbsp;</div>

                            <div id="standard" class="span-8 append-1">
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


                            <div id="premium" class="span-8 append-1">
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


                            <div id="expert" class="span-8 last">
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
                    
                        <div class="intro span-24 last">
                            <h2>Step 2: Get Started:</h2>
                            <hr/>
                            <h2>Common data </h2>
                        </div>
                        <!-- errors -->

                        <!-- left column -->
                        <div class="span-12" name="step-1-fields-section">

                            <div class="span-12 last">
                                <strong>Boat name</strong><span class="hint"></span>
                              <!--id="job_headline"-->
                                <input class="css_input required" id="boat_name" name="headline" size="50" title="Please enter a Boat Name" type="text" />
                            </div>
                            <div id="job-where" class="span-12 last">
                                <div class="span-6">
                                    <!--for="job_country"-->
                                    <label for="boat_type">Boat Type</label>
                                    <br/>
                                    <select class="css_input" name="boat_type">      
                                        <option value="Catamaran">Catamaran</option>
                                        <option value="Motorboat">Motorboat</option>
                                        <option value="Sailboat">Sailboat</option>
                                    </select>
                                </div>
                                <div class="span-6 last" style="margin-top:25px;">
                                 <!--for="job_country"-->
                                    <label for="boat_year">Construction year</label><span class="hint"></span>
                               
                                    <!--id="job_city" name="city"-->  
                                   <!--  <input class="css_input required" id="boat_year" name="year" size="4" title="Please enter a construction year" pattern="\d{4}" type="text"/>--> 
                                    <input  class="css_input required" id="boat_year" name="year" min="1901" max="2155" title="Please enter a construction year" type="number" step="1"/>
                                </div>
                                <div class="span-6">
                                     <!--id="job_country"--> 
                                    <label for="boat_category">CE category</label>
                                    <br/>
                                    <select class="css_input" name="boat_category">      
                                        <option value="A. Ocean">A. Ocean</option>
                                        <option value="B. Offshore">B. Offshore</option>
                                        <option value="C. Inshore">C. Inshore</option>
                                        <option value="D. Sheltered Waters">D. Sheltered Waters</option> 
                                    </select>
                                </div>
                                <div class="span-6">
                                    <label for="boat_model">Model</label><span class="hint"></span>
                                    <br/>
                                    <input class="css_input required" id="boat_model" name="boat_model" size="4" title="Please enter a model" type="text" />
                                </div>
                                <div class="span-6 last">
                                    <label for="boat_yard">Yard</label>
                                    <br/>
                                    <select class="css_input" name="boat_yard">      
                                        <option value="Other / Unknown">Other / Unknown</option>
                                        <option value="3000 Marine">3000 Marine</option>
                                        <option value="A.Mostes-IT">A.Mostes-IT</option>
                                        <option value="Abbate, Bruno (IT)">Abbate, Bruno (IT)</option>
                                        <option value="Abbate, Tullio (IT)">Abbate, Tullio (IT)</option>
                                        <option value="Abeking & Rasmussen">Abeking & Rasmussen</option>
                                        <option value="ABIM-NL">ABIM-NL</option>
                                        <option value="Absolute">Absolute</option>
                                        <option value="ACM Dufour (FR)">ACM Dufour (FR)</option>
                                        <option value="Adagio (CN)">Adagio (CN)</option>
                                        <option value="Adec (SE)">Adec (SE)</option>
                                        <option value="Adler Storebro (SE)">Adler Storebro (SE)</option>
                                        <option value="Admiral (GB)">Admiral (GB)</option>
                                        <option value="Admirality Shipyards (RU)">Admirality Shipyards (RU)</option>
                                        <option value="Adria Event (SLO)">Adria Event (SLO)</option>
                                        <option value="Agder (NO)">Agder (NO)</option>
                                        <option value="Agronaut (FI)">Agronaut (FI)</option>
                                        <option value="AICON Yachts - IT">AICON Yachts - IT</option>
                                        <option value="Airfoil (DE)">Airfoil (DE)</option>
                                        <option value="Airon Marine (IT)">Airon Marine (IT)</option>
                                        <option value="Akerboom">Akerboom</option>
                                        <option value="Albemarle (USA)">Albemarle (USA)</option>
                                        <option value="Albica (FI)">Albica (FI)</option>
                                        <option value="Albin (SE)">Albin (SE)</option>
                                        <option value="Albin Marine (USA)">Albin Marine (USA)</option>
                                        <option value="alcan">alcan</option>
                                        <option value="Alden (USA)">Alden (USA)</option>
                                        <option value="Alfamarine (IT)">Alfamarine (IT)</option>
                                        <option value="Ali Craft (NO)">Ali Craft (NO)</option>
                                        <option value="Allermohe Bootswerft (DE)">Allermohe Bootswerft (DE)</option>
                                        <option value="Allround (DE)">Allround (DE)</option>
                                        <option value="Almarine (BE)">Almarine (BE)</option>
                                        <option value="Alpha Marine (GR)">Alpha Marine (GR)</option>
                                        <option value="Alphacraft (GB)">Alphacraft (GB)</option>
                                        <option value="Alstom (FR)">Alstom (FR)</option>
                                        <option value="Altena (NL)">Altena (NL)</option>
                                        <option value="Aluminium Schiffswerft (DE)">Aluminium Schiffswerft (DE)</option>
                                        <option value="Amerglass (NL)">Amerglass (NL)</option>
                                        <option value="American Marine (SG)">American Marine (SG)</option>
                                        <option value="AMT (FI)">AMT (FI)</option>
                                        <option value="Ancora (DE)">Ancora (DE)</option>
                                        <option value="Angel Marine (TW)">Angel Marine (TW)</option>
                                        <option value="Antago (IT)">Antago (IT)</option>
                                        <option value="Antaris (NL)">Antaris (NL)</option>
                                        <option value="Aprea Mare (IT)">Aprea Mare (IT)</option>
                                        <option value="Aprem (DE)">Aprem (DE)</option>
                                        <option value="Aqua Star (GB)">Aqua Star (GB)</option>
                                        <option value="Aquador (FI)">Aquador (FI)</option>
                                        <option value="Aqualine">Aqualine</option>
                                        <option value="Aquamar (IT)">Aquamar (IT)</option>
                                        <option value="Aquamarine Yachts (CH)">Aquamarine Yachts (CH)</option>
                                        <option value="Aquanaut (NL)">Aquanaut (NL)</option>
                                        <option value="Aquatron (USA)">Aquatron (USA)</option>
                                        <option value="Aquaviva (IT)">Aquaviva (IT)</option>
                                        <option value="Aquawatt - AT">Aquawatt - AT</option>
                                        <option value="Aquileia (IT)">Aquileia (IT)</option>
                                        <option value="Arcoa (FR)">Arcoa (FR)</option>
                                        <option value="Armada Yacht - TR">Armada Yacht - TR</option>
                                        <option value="Aronow (USA)">Aronow (USA)</option>
                                        <option value="Arredomar (IT)">Arredomar (IT)</option>
                                        <option value="Arriva (USA)">Arriva (USA)</option>
                                        <option value="Arvor (BE)">Arvor (BE)</option>
                                        <option value="Askeladden (NO)">Askeladden (NO)</option>
                                        <option value="Assos (TR)">Assos (TR)</option>
                                        <option value="Astilleros Med. (ES)">Astilleros Med. (ES)</option>
                                        <option value="Astilleros Menorca (ES)">Astilleros Menorca (ES)</option>
                                        <option value="Astinor (ES)">Astinor (ES)</option>
                                        <option value="Astondoa (ES)">Astondoa (ES)</option>
                                        <option value="Astor (TW)">Astor (TW)</option>
                                        <option value="Astromar (ES)">Astromar (ES)</option>
                                        <option value="Atlantic (GR)">Atlantic (GR)</option>
                                        <option value="Atlantic (NL)">Atlantic (NL)</option>
                                        <option value="Atlantis (IT)">Atlantis (IT)</option>
                                        <option value="ATP (PL)">ATP (PL)</option>
                                        <option value="Azimut (IT)">Azimut (IT)</option>
                                        <option value="Azimut 36 Fly">Azimut 36 Fly</option>
                                        <option value="Azure (USA)">Azure (USA)</option>
                                        <option value="B2 marine">B2 marine</option>
                                        <option value="Baensch (DE)">Baensch (DE)</option>
                                        <option value="Baess (DK)">Baess (DK)</option>
                                        <option value="Baha cruiser">Baha cruiser</option>
                                        <option value="Baja (USA)">Baja (USA)</option>
                                        <option value="Bakker (NL)">Bakker (NL)</option>
                                        <option value="Baltic Products (DE)">Baltic Products (DE)</option>
                                        <option value="Baltic Trawler">Baltic Trawler</option>
                                        <option value="BANDIDO">BANDIDO</option>
                                        <option value="Barakuda (DE)">Barakuda (DE)</option>
                                        <option value="Barkas">Barkas</option>
                                        <option value="Barro (DE)">Barro (DE)</option>
                                        <option value="Bartex (PL)">Bartex (PL)</option>
                                        <option value="Bateaux Ocqueteau (F)">Bateaux Ocqueteau (F)</option>
                                        <option value="Bavaria (DE)">Bavaria (DE)</option>
                                        <option value="Bayerische Schiffbau GmbH">Bayerische Schiffbau GmbH</option>
                                        <option value="Bayerische Schiffbau GmbH Erlenbach a. Main">Bayerische Schiffbau GmbH Erlenbach a. Main</option>
                                        <option value="Bayliner (USA)">Bayliner (USA)</option>
                                        <option value="Bayside (USA)">Bayside (USA)</option>
                                        <option value="Beachcraft">Beachcraft</option>
                                        <option value="Beekmann (NL)">Beekmann (NL)</option>
                                        <option value="Beelitz (DE)">Beelitz (DE)</option>
                                        <option value="Bekro (BE)">Bekro (BE)</option>
                                        <option value="Bella (FI)">Bella (FI)</option>
                                        <option value="Beluga (DE)">Beluga (DE)</option>
                                        <option value="Benecci (IT)">Benecci (IT)</option>
                                        <option value="Beneteau (FR)">Beneteau (FR)</option>
                                        <option value="Benetti (IT)">Benetti (IT)</option>
                                        <option value="Bertram (USA)">Bertram (USA)</option>
                                        <option value="Besmer (DE)">Besmer (DE)</option>
                                        <option value="Best (GR)">Best (GR)</option>
                                        <option value="BESTEVAER (NL)">BESTEVAER (NL)</option>
                                        <option value="Biam (NO)">Biam (NO)</option>
                                        <option value="BijkoJachtbouw - NL">BijkoJachtbouw - NL</option>
                                        <option value="Birchwood (GB)">Birchwood (GB)</option>
                                        <option value="Birenheide (DE)">Birenheide (DE)</option>
                                        <option value="Blauwe Hand (NL)">Blauwe Hand (NL)</option>
                                        <option value="Blohm + Voss (DE)">Blohm + Voss (DE)</option>
                                        <option value="BLUEGAME - IT">BLUEGAME - IT</option>
                                        <option value="Blum (DE)">Blum (DE)</option>
                                        <option value="Boarncruiser">Boarncruiser</option>
                                        <option value="Boesch (CH)">Boesch (CH)</option>
                                        <option value="Bond Yachts - PL">Bond Yachts - PL</option>
                                        <option value="Bonum (SE)">Bonum (SE)</option>
                                        <option value="Boote-Korpal (DE)">Boote-Korpal (DE)</option>
                                        <option value="Bootsbau & Rugen&quot; GmbH (DE)">Bootsbau & Rugen&quot; GmbH (DE)</option>
                                        <option value="Bootswerft Bad Zwischenahn (DE)">Bootswerft Bad Zwischenahn (DE)</option>
                                        <option value="Bootswerft Bucher (CH)">Bootswerft Bucher (CH)</option>
                                        <option value="Bossems (GB)">Bossems (GB)</option>
                                        <option value="Boston Whaler (USA)">Boston Whaler (USA)</option>
                                        <option value="Botec (DE)">Botec (DE)</option>
                                        <option value="Botnia Marin (FI)">Botnia Marin (FI)</option>
                                        <option value="Brandaris">Brandaris</option>
                                        <option value="Brandsma (NL)">Brandsma (NL)</option>
                                        <option value="Brekken Kruiser (NL)">Brekken Kruiser (NL)</option>
                                        <option value="Broekmeulen (NL)">Broekmeulen (NL)</option>
                                        <option value="Brooke (NZ)">Brooke (NZ)</option>
                                        <option value="Broom (GB)">Broom (GB)</option>
                                        <option value="Broward (USA)">Broward (USA)</option>
                                        <option value="Bruijs Jachtbouw (NL)">Bruijs Jachtbouw (NL)</option>
                                        <option value="Bryant Boats (USA)">Bryant Boats (USA)</option>
                                        <option value="Bucher (CH)">Bucher (CH)</option>
                                        <option value="Buetzfleth (DE)">Buetzfleth (DE)</option>
                                        <option value="Bugari (IT)">Bugari (IT)</option>
                                        <option value="Burger (USA)">Burger (USA)</option>
                                        <option value="Buster (FI)">Buster (FI)</option>
                                        <option value="BUTZFLETH (DE)">BUTZFLETH (DE)</option>
                                        <option value="C.N.A. (IT)">C.N.A. (IT)</option>
                                        <option value="C.R.N. (IT)">C.R.N. (IT)</option>
                                        <option value="Cabo (USA)">Cabo (USA)</option>
                                        <option value="Cadorette/Thundercraft (CA)">Cadorette/Thundercraft (CA)</option>
                                        <option value="Campion (CA)">Campion (CA)</option>
                                        <option value="Camuffo">Camuffo</option>
                                        <option value="Can. del Canale (IT)">Can. del Canale (IT)</option>
                                        <option value="Canados (IT)">Canados (IT)</option>
                                        <option value="Canaventura (CA)">Canaventura (CA)</option>
                                        <option value="Cant. Capelli (IT)">Cant. Capelli (IT)</option>
                                        <option value="Cant. di Baia (IT)">Cant. di Baia (IT)</option>
                                        <option value="Cant. di Sarnico (IT)">Cant. di Sarnico (IT)</option>
                                        <option value="Cant. Diano - IT">Cant. Diano - IT</option>
                                        <option value="Cant. Nautico VZ - IT">Cant. Nautico VZ - IT</option>
                                        <option value="Cant. Solare - IT">Cant. Solare - IT</option>
                                        <option value="Cantiere di tirreno">Cantiere di tirreno</option>
                                        <option value="Cantiere Landsneer">Cantiere Landsneer</option>
                                        <option value="Cantieri Navali (IT)">Cantieri Navali (IT)</option>
                                        <option value="Capelli (IT)">Capelli (IT)</option>
                                        <option value="Carat (DE)">Carat (DE)</option>
                                        <option value="Caravelle (USA)">Caravelle (USA)</option>
                                        <option value="Carnevali (IT)">Carnevali (IT)</option>
                                        <option value="Carolina Skiff (USA)">Carolina Skiff (USA)</option>
                                        <option value="Carver (USA)">Carver (USA)</option>
                                        <option value="Cascaruda (NL)">Cascaruda (NL)</option>
                                        <option value="Catana (FR)">Catana (FR)</option>
                                        <option value="Celebrity (CA)">Celebrity (CA)</option>
                                        <option value="CenturyBoats - USA">CenturyBoats - USA</option>
                                        <option value="Challenger (DE)">Challenger (DE)</option>
                                        <option value="Chaparral (USA)">Chaparral (USA)</option>
                                        <option value="Chauson (TW)">Chauson (TW)</option>
                                        <option value="Chavanne (CH)">Chavanne (CH)</option>
                                        <option value="Check Marine (GB)">Check Marine (GB)</option>
                                        <option value="Checkmate (USA)">Checkmate (USA)</option>
                                        <option value="Cheer Men Marine (TW)">Cheer Men Marine (TW)</option>
                                        <option value="Cheoy Lee (HK)">Cheoy Lee (HK)</option>
                                        <option value="Chin Hwa 35 Trawler">Chin Hwa 35 Trawler</option>
                                        <option value="Chris Craft (USA)">Chris Craft (USA)</option>
                                        <option value="Cigala &amp; Bertini (IT)">Cigala &amp; Bertini (IT)</option>
                                        <option value="Cigarette (USA)">Cigarette (USA)</option>
                                        <option value="Citation (USA)">Citation (USA)</option>
                                        <option value="Clark (GB)">Clark (GB)</option>
                                        <option value="Coastal Commander">Coastal Commander</option>
                                        <option value="Cobalt (USA)">Cobalt (USA)</option>
                                        <option value="Cobalt Marine Electric Boats - USA">Cobalt Marine Electric Boats - USA</option>
                                        <option value="Cobia (USA)">Cobia (USA)</option>
                                        <option value="Cobrey Boats (PL)">Cobrey Boats (PL)</option>
                                        <option value="Codecasa (IT)">Codecasa (IT)</option>
                                        <option value="Colombo (IT)">Colombo (IT)</option>
                                        <option value="Colvic (GB)">Colvic (GB)</option>
                                        <option value="Comar (IT)">Comar (IT)</option>
                                        <option value="Comarine Int. (NL)">Comarine Int. (NL)</option>
                                        <option value="Comet-Plast (NO)">Comet-Plast (NO)</option>
                                        <option value="Comitti - IT">Comitti - IT</option>
                                        <option value="Comtec (EE)">Comtec (EE)</option>
                                        <option value="Conam (IT)">Conam (IT)</option>
                                        <option value="Conavroegh (NL)">Conavroegh (NL)</option>
                                        <option value="concord">concord</option>
                                        <option value="Condor Yachting (NL)">Condor Yachting (NL)</option>
                                        <option value="Conquest (USA)">Conquest (USA)</option>
                                        <option value="Consonant (NL)">Consonant (NL)</option>
                                        <option value="Cornish Crabbers (GB)">Cornish Crabbers (GB)</option>
                                        <option value="Coronet (DK)">Coronet (DK)</option>
                                        <option value="Correct Craft (USA)">Correct Craft (USA)</option>
                                        <option value="Costa Blanca (ES)">Costa Blanca (ES)</option>
                                        <option value="Cougar (GB)">Cougar (GB)</option>
                                        <option value="Cover (IT)">Cover (IT)</option>
                                        <option value="Coverline (IT)">Coverline (IT)</option>
                                        <option value="CraigCat (USA)">CraigCat (USA)</option>
                                        <option value="Cranchi (IT)">Cranchi (IT)</option>
                                        <option value="Cremo (SE)">Cremo (SE)</option>
                                        <option value="Crestar (GB)">Crestar (GB)</option>
                                        <option value="Crestliner (USA)">Crestliner (USA)</option>
                                        <option value="Crisline (DE)">Crisline (DE)</option>
                                        <option value="Crown">Crown</option>
                                        <option value="Crownline (USA)">Crownline (USA)</option>
                                        <option value="Crowther (AU)">Crowther (AU)</option>
                                        <option value="Cruisers Yachts (USA)">Cruisers Yachts (USA)</option>
                                        <option value="Cutter (CA)">Cutter (CA)</option>
                                        <option value="Cytra (DE)">Cytra (DE)</option>
                                        <option value="Dacapo (NO)">Dacapo (NO)</option>
                                        <option value="Dalla Pieta (IT)">Dalla Pieta (IT)</option>
                                        <option value="DANA Performance Boats (USA)">DANA Performance Boats (USA)</option>
                                        <option value="DarekCo (PL)">DarekCo (PL)</option>
                                        <option value="Darragh Boast (IE)">Darragh Boast (IE)</option>
                                        <option value="de Alm (NL)">de Alm (NL)</option>
                                        <option value="De Boarnstream (NL)">De Boarnstream (NL)</option>
                                        <option value="De Breedendam (NL)">De Breedendam (NL)</option>
                                        <option value="De Drait (NL)">De Drait (NL)</option>
                                        <option value="De Gier (NL)">De Gier (NL)</option>
                                        <option value="De Groot (NL)">De Groot (NL)</option>
                                        <option value="de Jong">de Jong</option>
                                        <option value="De Ruiter (NL)">De Ruiter (NL)</option>
                                        <option value="De Vries (NL)">De Vries (NL)</option>
                                        <option value="De Wiel te Heukelum">De Wiel te Heukelum</option>
                                        <option value="DeFever">DeFever</option>
                                        <option value="Dell Adriatico (IT)">Dell Adriatico (IT)</option>
                                        <option value="Dell Quay (GB)">Dell Quay (GB)</option>
                                        <option value="Dellapasqua (IT)">Dellapasqua (IT)</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Diana (NO)">Diana (NO)</option>
                                        <option value="Doering (DE)">Doering (DE)</option>
                                        <option value="Dominator (IT)">Dominator (IT)</option>
                                        <option value="Donzi (USA)">Donzi (USA)</option>
                                        <option value="Doppel">Doppel</option>
                                        <option value="Doral (CA)">Doral (CA)</option>
                                        <option value="Doriff (DE)">Doriff (DE)</option>
                                        <option value="Dory (USA)">Dory (USA)</option>
                                        <option value="Dory Wahoo (GB)">Dory Wahoo (GB)</option>
                                        <option value="Draco (NO)">Draco (NO)</option>
                                        <option value="Drago Boats (GR)">Drago Boats (GR)</option>
                                        <option value="Duarry (E)">Duarry (E)</option>
                                        <option value="Duffy Electric Boat Company - USA">Duffy Electric Boat Company - USA</option>
                                        <option value="Dutch Bay - TR">Dutch Bay - TR</option>
                                        <option value="Duus Trading (NO)">Duus Trading (NO)</option>
                                        <option value="Dyna (TW)">Dyna (TW)</option>
                                        <option value="Dynasty (USA)">Dynasty (USA)</option>
                                        <option value="Dyno Plast (NO)">Dyno Plast (NO)</option>
                                        <option value="Ebbtide (USA)">Ebbtide (USA)</option>
                                        <option value="Ecofiber (BE)">Ecofiber (BE)</option>
                                        <option value="Edership (TW)">Edership (TW)</option>
                                        <option value="Egg Harbor">Egg Harbor</option>
                                        <option value="Eider (FR)">Eider (FR)</option>
                                        <option value="Eista (NL)">Eista (NL)</option>
                                        <option value="Elan (SI)">Elan (SI)</option>
                                        <option value="ElectraCraft - USA">ElectraCraft - USA</option>
                                        <option value="Elegance (DE)">Elegance (DE)</option>
                                        <option value="Eliminator (USA)">Eliminator (USA)</option>
                                        <option value="Elite Craft (USA)">Elite Craft (USA)</option>
                                        <option value="EMP (DE)">EMP (DE)</option>
                                        <option value="Enterprise Marine (IT)">Enterprise Marine (IT)</option>
                                        <option value="Essex  (GB)">Essex  (GB)</option>
                                        <option value="Etap (BE)">Etap (BE)</option>
                                        <option value="Euro Star (DE)">Euro Star (DE)</option>
                                        <option value="Eurocrown">Eurocrown</option>
                                        <option value="Eurolaunch (NL)">Eurolaunch (NL)</option>
                                        <option value="Euroyacht (HR)">Euroyacht (HR)</option>
                                        <option value="EverSail (NL)">EverSail (NL)</option>
                                        <option value="Evon (NL)">Evon (NL)</option>
                                        <option value="Excel (USA)">Excel (USA)</option>
                                        <option value="Excellent (NL)">Excellent (NL)</option>
                                        <option value="Explorer (UK)">Explorer (UK)</option>
                                        <option value="Faeton (ES)">Faeton (ES)</option>
                                        <option value="Fairline (GB)">Fairline (GB)</option>
                                        <option value="Falcon (GB)">Falcon (GB)</option>
                                        <option value="FBB (NL)">FBB (NL)</option>
                                        <option value="Feltz (DE)">Feltz (DE)</option>
                                        <option value="Fenix (SE)">Fenix (SE)</option>
                                        <option value="Ferretti (IT)">Ferretti (IT)</option>
                                        <option value="Fevik (NO)">Fevik (NO)</option>
                                        <option value="Fiart Mare (IT)">Fiart Mare (IT)</option>
                                        <option value="Fiberform">Fiberform</option>
                                        <option value="Fiberline (DE)">Fiberline (DE)</option>
                                        <option value="Fibrafort (BR">Fibrafort (BR)</option>
                                        <option value="Fidego (NL)">Fidego (NL)</option>
                                        <option value="Fiesta Marine (USA)">Fiesta Marine (USA)</option>
                                        <option value="Finmar (FI)">Finmar (FI)</option>
                                        <option value="Finn-Marin (FI)">Finn-Marin (FI)</option>
                                        <option value="Finnmaster">Finnmaster</option>
                                        <option value="Fipa Italiana (IT)">Fipa Italiana (IT)</option>
                                        <option value="Fiskars (FI)">Fiskars (FI)</option>
                                        <option value="Fisker Zeevaer">Fisker Zeevaer</option>
                                        <option value="Fjord (NO)">Fjord (NO)</option>
                                        <option value="Fleming (USA)">Fleming (USA)</option>
                                        <option value="Fletcher (GB)">Fletcher (GB)</option>
                                        <option value="Flipper (FI)">Flipper (FI)</option>
                                        <option value="FM (NO)">FM (NO)</option>
                                        <option value="Forbinabatar (SE)">Forbinabatar (SE)</option>
                                        <option value="Forester (USA)">Forester (USA)</option>
                                        <option value="Formula (USA)">Formula (USA)</option>
                                        <option value="Formula Boats (NZ)">Formula Boats (NZ)</option>
                                        <option value="Fountain (USA)">Fountain (USA)</option>
                                        <option value="Fountaine Pajot (FR)">Fountaine Pajot (FR)</option>
                                        <option value="Four Winns (USA)">Four Winns (USA)</option>
                                        <option value="Fr. Schweers (DE)">Fr. Schweers (DE)</option>
                                        <option value="Frauscher (AT)">Frauscher (AT)</option>
                                        <option value="Freedom (GB)">Freedom (GB)</option>
                                        <option value="Freeman (GB)">Freeman (GB)</option>
                                        <option value="Friesland Boat (NL)">Friesland Boat (NL)</option>
                                        <option value="Fuerstenberg (DE)">Fuerstenberg (DE)</option>
                                        <option value="Gagliotta - IT">Gagliotta - IT</option>
                                        <option value="Galaxy (USA)">Galaxy (USA)</option>
                                        <option value="Galeon (GB)">Galeon (GB)</option>
                                        <option value="Galeon Boats (PL)">Galeon Boats (PL)</option>
                                        <option value="Gallart (ES)">Gallart (ES)</option>
                                        <option value="Garin (ES)">Garin (ES)</option>
                                        <option value="Gekko Sports (USA)">Gekko Sports (USA)</option>
                                        <option value="Gelderbloom Poseidon">Gelderbloom Poseidon</option>
                                        <option value="Genesis (USA)">Genesis (USA)</option>
                                        <option value="Gianetti (IT)">Gianetti (IT)</option>
                                        <option value="Gibert Marine (FR)">Gibert Marine (FR)</option>
                                        <option value="Gillissen">Gillissen</option>
                                        <option value="Gio Mare (IT)">Gio Mare (IT)</option>
                                        <option value="Giorgetti &amp; Magrini (IT)">Giorgetti &amp; Magrini (IT)</option>
                                        <option value="Giugliano (IT)">Giugliano (IT)</option>
                                        <option value="Glacer (DE)">Glacer (DE)</option>
                                        <option value="Glassmaster (USA)">Glassmaster (USA)</option>
                                        <option value="Glassport (USA)">Glassport (USA)</option>
                                        <option value="Glasstream (USA)">Glasstream (USA)</option>
                                        <option value="Glastron (USA)">Glastron (USA)</option>
                                        <option value="Glastron Laraya (ES)">Glastron Laraya (ES)</option>
                                        <option value="Glen-L (USA)">Glen-L (USA)</option>
                                        <option value="Global (GB)">Global (GB)</option>
                                        <option value="Gobbi (IT)">Gobbi (IT)</option>
                                        <option value="Goeree">Goeree</option>
                                        <option value="Gorbon Yachts (TR)">Gorbon Yachts (TR)</option>
                                        <option value="Grainger (AUS)">Grainger (AUS)</option>
                                        <option value="Grand Azur">Grand Azur</option>
                                        <option value="Grand Banks (SG)">Grand Banks (SG)</option>
                                        <option value="Greatline - SE">Greatline - SE</option>
                                        <option value="Grew (CA)">Grew (CA)</option>
                                        <option value="Grimsoey /NO">Grimsoey /NO</option>
                                        <option value="Gruno (NL)">Gruno (NL)</option>
                                        <option value="Gulf Craft (VAE)">Gulf Craft (VAE)</option>
                                        <option value="Guy Couach (FR)">Guy Couach (FR)</option>
                                        <option value="Hagenah">Hagenah</option>
                                        <option value="Haines Marine (GB)">Haines Marine (GB)</option>
                                        <option value="Halvorsen Marine (HK)">Halvorsen Marine (HK)</option>
                                        <option value="Hammermeister (DE)">Hammermeister (DE)</option>
                                        <option value="Hampton (RN)">Hampton (RN)</option>
                                        <option value="Hansa-Nautik (DE)">Hansa-Nautik (DE)</option>
                                        <option value="Hardy Marine (GB)">Hardy Marine (GB)</option>
                                        <option value="Harris Flote Bote (USA)">Harris Flote Bote (USA)</option>
                                        <option value="Hatteras (USA)">Hatteras (USA)</option>
                                        <option value="Hausboot Wohnboot">Hausboot Wohnboot</option>
                                        <option value="Heesen Shipyards (NL)">Heesen Shipyards (NL)</option>
                                        <option value="Heistracher (DE)">Heistracher (DE)</option>
                                        <option value="Hellas (GR)">Hellas (GR)</option>
                                        <option value="Hellwig (DE)">Hellwig (DE)</option>
                                        <option value="HERSHINE">HERSHINE</option>
                                        <option value="Heyland (GB)">Heyland (GB)</option>
                                        <option value="HI-Star (TW)">HI-Star (TW)</option>
                                        <option value="High Tech (USA)">High Tech (USA)</option>
                                        <option value="Hille (DE)">Hille (DE)</option>
                                        <option value="Hiltergerke (DE)">Hiltergerke (DE)</option>
                                        <option value="Hochmuth (CH)">Hochmuth (CH)</option>
                                        <option value="Hock (DE)">Hock (DE)</option>
                                        <option value="Holiday Boating (NL)">Holiday Boating (NL)</option>
                                        <option value="Holiday Mansion (USA)">Holiday Mansion (USA)</option>
                                        <option value="Holland Boat (NL)">Holland Boat (NL)</option>
                                        <option value="Hollandia (NL)">Hollandia (NL)</option>
                                        <option value="Holterman (NL)">Holterman (NL)</option>
                                        <option value="Hoogezand (NL)">Hoogezand (NL)</option>
                                        <option value="Horizon">Horizon</option>
                                        <option value="Horizon Group">Horizon Group</option>
                                        <option value="Horizon Yachts">Horizon Yachts</option>
                                        <option value="Huber (CH)">Huber (CH)</option>
                                        <option value="Huisman (NL)">Huisman (NL)</option>
                                        <option value="Hunton (GB)">Hunton (GB)</option>
                                        <option value="HuntYachts - USA">HuntYachts - USA</option>
                                        <option value="Huseklepp (NO)">Huseklepp (NO)</option>
                                        <option value="Hustler (USA)">Hustler (USA)</option>
                                        <option value="Hydrolift (NO)">Hydrolift (NO)</option>
                                        <option value="Ijlstervlet">Ijlstervlet</option>
                                        <option value="Ilver (IT)">Ilver (IT)</option>
                                        <option value="IMP Boats (USA)">IMP Boats (USA)</option>
                                        <option value="Innovazione&amp;Progetti (IT)">Innovazione&amp;Progetti (IT)</option>
                                        <option value="Inrizzardi - IT">Inrizzardi - IT</option>
                                        <option value="Inter (NO)">Inter (NO)</option>
                                        <option value="Intermare (IT)">Intermare (IT)</option>
                                        <option value="Invader (USA)">Invader (USA)</option>
                                        <option value="Island Gypsy (HK)">Island Gypsy (HK)</option>
                                        <option value="Italcraft (IT)">Italcraft (IT)</option>
                                        <option value="Italmar (IT)">Italmar (IT)</option>
                                        <option value="Italmotomare (IT)">Italmotomare (IT)</option>
                                        <option value="Itama - IT">Itama - IT</option>
                                        <option value="Jacabo">Jacabo</option>
                                        <option value="Jacobssons (SE)">Jacobssons (SE)</option>
                                        <option value="Jade Banks (NL)">Jade Banks (NL)</option>
                                        <option value="Jans (NO)">Jans (NO)</option>
                                        <option value="JCL Marine (GB)">JCL Marine (GB)</option>
                                        <option value="Jeanneau (FR)">Jeanneau (FR)</option>
                                        <option value="Jensch (DE)">Jensch (DE)</option>
                                        <option value="Jet Craft (CH)">Jet Craft (CH)</option>
                                        <option value="Jeteexx (DE)">Jeteexx (DE)</option>
                                        <option value="Jets Marivent (ES)">Jets Marivent (ES)</option>
                                        <option value="Joda (NO)">Joda (NO)</option>
                                        <option value="Jofa / Triss (SE)">Jofa / Triss (SE)</option>
                                        <option value="Jollenkreuzer Eigenumbau">Jollenkreuzer Eigenumbau</option>
                                        <option value="Juncker (DE)">Juncker (DE)</option>
                                        <option value="Junglas (DE)">Junglas (DE)</option>
                                        <option value="Jupiter (FI)">Jupiter (FI)</option>
                                        <option value="Kammin (DE)">Kammin (DE)</option>
                                        <option value="Karnic (CY)">Karnic (CY)</option>
                                        <option value="Katana (CA)">Katana (CA)</option>
                                        <option value="Kelt (FR)">Kelt (FR)</option>
                                        <option value="Keser Westbay (DE)">Keser Westbay (DE)</option>
                                        <option value="Keser-Hollandia (DE)">Keser-Hollandia (DE)</option>
                                        <option value="Kinetik (FI)">Kinetik (FI)</option>
                                        <option value="KKG (AT)">KKG (AT)</option>
                                        <option value="Klaassen">Klaassen</option>
                                        <option value="KLassieker">KLassieker</option>
                                        <option value="KMV (NO)">KMV (NO)</option>
                                        <option value="Knief (DE)">Knief (DE)</option>
                                        <option value="KnobbeJachtbouw - NL">KnobbeJachtbouw - NL</option>
                                        <option value="Kompier">Kompier</option>
                                        <option value="Kong &amp; Halversson (RC)">Kong &amp; Halversson (RC)</option>
                                        <option value="Koopmans">Koopmans</option>
                                        <option value="Korhonen (FI)">Korhonen (FI)</option>
                                        <option value="Korso Marin">Korso Marin</option>
                                        <option value="Kral (TR)">Kral (TR)</option>
                                        <option value="Kraller (DE)">Kraller (DE)</option>
                                        <option value="Kraps (DE)">Kraps (DE)</option>
                                        <option value="Kroen (NL)">Kroen (NL)</option>
                                        <option value="Krogerwerft">Krogerwerft</option>
                                        <option value="Kroon (NL)">Kroon (NL)</option>
                                        <option value="Kuhnle Werft (DE)">Kuhnle Werft (DE)</option>
                                        <option value="Kulkuri-Veneet (FI)">Kulkuri-Veneet (FI)</option>
                                        <option value="Kunya-Werft (DE)">Kunya-Werft (DE)</option>
                                        <option value="Lagoon (FR)">Lagoon (FR)</option>
                                        <option value="Lamberti (IT)">Lamberti (IT)</option>
                                        <option value="Lami (FI)">Lami (FI)</option>
                                        <option value="Laroc (DE)">Laroc (DE)</option>
                                        <option value="Larson (USA)">Larson (USA)</option>
                                        <option value="Lauwersmeer (NL)">Lauwersmeer (NL)</option>
                                        <option value="Leda Yachtbau (DE)">Leda Yachtbau (DE)</option>
                                        <option value="Leeraner Yachtwerft (DE)">Leeraner Yachtwerft (DE)</option>
                                        <option value="Legend Boats (CA)">Legend Boats (CA)</option>
                                        <option value="Lehmann + Yachten (DE)">Lehmann + Yachten (DE)</option>
                                        <option value="LeisureCat - AU">LeisureCat - AU</option>
                                        <option value="Lema (ES)">Lema (ES)</option>
                                        <option value="Leopard">Leopard</option>
                                        <option value="Lexmar (SI)">Lexmar (SI)</option>
                                        <option value="Lin Hwa - Kaohsiung Taiwan">Lin Hwa - Kaohsiung Taiwan</option>
                                        <option value="Linden (NL)">Linden (NL)</option>
                                        <option value="Linder (SE)">Linder (SE)</option>
                                        <option value="Lindinger (DE)">Lindinger (DE)</option>
                                        <option value="Lindstroems (FI)">Lindstroems (FI)</option>
                                        <option value="Linetti (IT)">Linetti (IT)</option>
                                        <option value="Linex (FI)">Linex (FI)</option>
                                        <option value="Linssen (NL)">Linssen (NL)</option>
                                        <option value="LLOYDS SHIP">LLOYDS SHIP</option>
                                        <option value="Luerssen (DE)">Luerssen (DE)</option>
                                        <option value="LYC (GB)">LYC (GB)</option>
                                        <option value="M&amp;M (NL)">M&amp;M (NL)</option>
                                        <option value="MacGregor (USA)">MacGregor (USA)</option>
                                        <option value="Magnum Marine - USA">Magnum Marine - USA</option>
                                        <option value="Mainship (USA)">Mainship (USA)</option>
                                        <option value="Majorca Nautica (ES)">Majorca Nautica (ES)</option>
                                        <option value="Makma (NL)">Makma (NL)</option>
                                        <option value="Malard (ZA)">Malard (ZA)</option>
                                        <option value="Malibu (USA)">Malibu (USA)</option>
                                        <option value="Mano Marine (IT)">Mano Marine (IT)</option>
                                        <option value="Marada (USA)">Marada (USA)</option>
                                        <option value="Marco-Plast (NL)">Marco-Plast (NL)</option>
                                        <option value="Marco-Succes">Marco-Succes</option>
                                        <option value="Mares (USA)">Mares (USA)</option>
                                        <option value="Marex (NO)">Marex (NO)</option>
                                        <option value="Mariah Boats (USA)">Mariah Boats (USA)</option>
                                        <option value="Maril (NL)">Maril (NL)</option>
                                        <option value="Marina Lanke (DE)">Marina Lanke (DE)</option>
                                        <option value="Marina85 - NL">Marina85 - NL</option>
                                        <option value="Marinco (GR)">Marinco (GR)</option>
                                        <option value="Marine">Marine</option>
                                        <option value="Marine Projects (GB)">Marine Projects (GB)</option>
                                        <option value="Marine Sloep">Marine Sloep</option>
                                        <option value="Marine System (PL)">Marine System (PL)</option>
                                        <option value="Marinello (IT)">Marinello (IT)</option>
                                        <option value="Mariner (IT)">Mariner (IT)</option>
                                        <option value="Marino Oy (FI)">Marino Oy (FI)</option>
                                        <option value="Maritimo - AU">Maritimo - AU</option>
                                        <option value="Mark Twain (USA)">Mark Twain (USA)</option>
                                        <option value="Marmat (PL)">Marmat (PL)</option>
                                        <option value="Marquis Yachts - USA">Marquis Yachts - USA</option>
                                        <option value="Marrow">Marrow</option>
                                        <option value="Marubeni (TW)">Marubeni (TW)</option>
                                        <option value="Mas (IT)">Mas (IT)</option>
                                        <option value="Master (FI)">Master (FI)</option>
                                        <option value="Master Craft (USA)">Master Craft (USA)</option>
                                        <option value="Maverick (USA)">Maverick (USA)</option>
                                        <option value="Mawelo (DK)">Mawelo (DK)</option>
                                        <option value="Maxum (USA)">Maxum (USA)</option>
                                        <option value="Mayland (GB)">Mayland (GB)</option>
                                        <option value="MCP Kelt (FR)">MCP Kelt (FR)</option>
                                        <option value="MEGAN BOATS (PL)">MEGAN BOATS (PL)</option>
                                        <option value="Mekon (NL)">Mekon (NL)</option>
                                        <option value="Menorquin Yachts (ES)">Menorquin Yachts (ES)</option>
                                        <option value="Merenpoort (NL)">Merenpoort (NL)</option>
                                        <option value="Meridian Yachts (USA)">Meridian Yachts (USA)</option>
                                        <option value="Merwede Kruiser">Merwede Kruiser</option>
                                        <option value="Meta (FR)">Meta (FR)</option>
                                        <option value="MG boats (PL)">MG boats (PL)</option>
                                        <option value="Miami">Miami</option>
                                        <option value="Mignola (IT)">Mignola (IT)</option>
                                        <option value="Mingolla (IT)">Mingolla (IT)</option>
                                        <option value="Minor">Minor</option>
                                        <option value="Mirage (USA)">Mirage (USA)</option>
                                        <option value="Mittelmanns (DE)">Mittelmanns (DE)</option>
                                        <option value="MM Boote (PL)">MM Boote (PL)</option>
                                        <option value="Mochi Craft (IT)">Mochi Craft (IT)</option>
                                        <option value="Moewe Yachtbau (DE)">Moewe Yachtbau (DE)</option>
                                        <option value="Mogano Laungh">Mogano Laungh</option>
                                        <option value="Moland (NO)">Moland (NO)</option>
                                        <option value="Molenkreuzer">Molenkreuzer</option>
                                        <option value="Molinari (IT)">Molinari (IT)</option>
                                        <option value="Monte Fino (TW)">Monte Fino (TW)</option>
                                        <option value="Monterey (USA)">Monterey (USA)</option>
                                        <option value="Monty Bank">Monty Bank</option>
                                        <option value="Monty Bank Erstwasserung 2005">Monty Bank Erstwasserung 2005</option>
                                        <option value="Moomba (USA)">Moomba (USA)</option>
                                        <option value="Moonen Shipyards (NL)">Moonen Shipyards (NL)</option>
                                        <option value="Mossig (DE)">Mossig (DE)</option>
                                        <option value="Motiva (IT)">Motiva (IT)</option>
                                        <option value="Mountain Yachts (CH)">Mountain Yachts (CH)</option>
                                        <option value="MTI Marine Technology">MTI Marine Technology</option>
                                        <option value="Mulder (NL)">Mulder (NL)</option>
                                        <option value="Muller-Werft Schweiz">Muller-Werft Schweiz</option>
                                        <option value="Mundimar">Mundimar</option>
                                        <option value="MW-Line - CH">MW-Line - CH</option>
                                        <option value="Myra (NO)">Myra (NO)</option>
                                        <option value="Mon (DK)">Mon (DK)</option>
                                        <option value="Nautica">Nautica</option>
                                        <option value="Nauticat (FI)">Nauticat (FI)</option>
                                        <option value="Nautirama (IT)">Nautirama (IT)</option>
                                        <option value="Navcon (DE)">Navcon (DE)</option>
                                        <option value="Naviga (FI)">Naviga (FI)</option>
                                        <option value="NB Marine (NO)">NB Marine (NO)</option>
                                        <option value="Neptunus (NL)">Neptunus (NL)</option>
                                        <option value="Nexus (DE)">Nexus (DE)</option>
                                        <option value="Nichols (USA)">Nichols (USA)</option>
                                        <option value="Nicke Petter (IT)">Nicke Petter (IT)</option>
                                        <option value="Nicolini (IT)">Nicolini (IT)</option>
                                        <option value="Nidelv (NO)">Nidelv (NO)</option>
                                        <option value="Nimbus (SE)">Nimbus (SE)</option>
                                        <option value="Noblesse Yachts (NL)">Noblesse Yachts (NL)</option>
                                        <option value="Nor Star (NO)">Nor Star (NO)</option>
                                        <option value="Nor-Dan (NO)">Nor-Dan (NO)</option>
                                        <option value="Nord Star">Nord Star</option>
                                        <option value="Nord West (SE)">Nord West (SE)</option>
                                        <option value="Nordia Yachts (NL)">Nordia Yachts (NL)</option>
                                        <option value="Nordic (CA)">Nordic (CA)</option>
                                        <option value="Nordic (CAN)">Nordic (CAN)</option>
                                        <option value="Nordisk (DK)">Nordisk (DK)</option>
                                        <option value="Norman (GB)">Norman (GB)</option>
                                        <option value="Norman (UA)">Norman (UA)</option>
                                        <option value="NorTech (USA)">NorTech (USA)</option>
                                        <option value="Northman Yachts (PL)">Northman Yachts (PL)</option>
                                        <option value="Novoplast (SI)">Novoplast (SI)</option>
                                        <option value="Nowee Heeg (NL)">Nowee Heeg (NL)</option>
                                        <option value="Numarine (TR)">Numarine (TR)</option>
                                        <option value="Nuova Inter Are (IT)">Nuova Inter Are (IT)</option>
                                        <option value="Nya Oskarshamm Shipyard">Nya Oskarshamm Shipyard</option>
                                        <option value="O.M.J. (BE)">O.M.J. (BE)</option>
                                        <option value="Ocean Alexander (TW)">Ocean Alexander (TW)</option>
                                        <option value="Ocean Cruise (CH)">Ocean Cruise (CH)</option>
                                        <option value="Ocean Master (PL)">Ocean Master (PL)</option>
                                        <option value="Ocean Yachts (USA)">Ocean Yachts (USA)</option>
                                        <option value="Oceano Sportivo (UA)">Oceano Sportivo (UA)</option>
                                        <option value="Ockelbo (SE)">Ockelbo (SE)</option>
                                        <option value="Ocqueteau (FR)">Ocqueteau (FR)</option>
                                        <option value="Octagon (GB)">Octagon (GB)</option>
                                        <option value="Oehlmann (DE)">Oehlmann (DE)</option>
                                        <option value="Oernvik (SE)">Oernvik (SE)</option>
                                        <option value="Off-Course (IT)">Off-Course (IT)</option>
                                        <option value="Olympic (GR)">Olympic (GR)</option>
                                        <option value="ONJ (NL)">ONJ (NL)</option>
                                        <option value="Oost Jachtwerf (NL)">Oost Jachtwerf (NL)</option>
                                        <option value="Orkney (GB)">Orkney (GB)</option>
                                        <option value="Ormieres (CH)">Ormieres (CH)</option>
                                        <option value="OSM Boat (IE)">OSM Boat (IE)</option>
                                        <option value="Ostroda (PL)">Ostroda (PL)</option>
                                        <option value="OTAM - IT">OTAM - IT</option>
                                        <option value="Otto Boats (NO)">Otto Boats (NO)</option>
                                        <option value="Outhill (GB)">Outhill (GB)</option>
                                        <option value="P Valk Franeker">P Valk Franeker</option>
                                        <option value="Pacific Allure">Pacific Allure</option>
                                        <option value="Paijan (FI)">Paijan (FI)</option>
                                        <option value="Palmer Johnson (USA)">Palmer Johnson (USA)</option>
                                        <option value="Passengervessel">Passengervessel</option>
                                        <option value="Passion Yacht">Passion Yacht</option>
                                        <option value="Pavel Shaposhnikov Design">Pavel Shaposhnikov Design</option>
                                        <option value="Pearl (GB)">Pearl (GB)</option>
                                        <option value="Pedrazzini (CH)">Pedrazzini (CH)</option>
                                        <option value="Pedro (NL)">Pedro (NL)</option>
                                        <option value="Peiso (AT)">Peiso (AT)</option>
                                        <option value="Pelican (CA)">Pelican (CA)</option>
                                        <option value="Pelle Peterson (SE)">Pelle Peterson (SE)</option>
                                        <option value="Pendennis Shipyard (GB)">Pendennis Shipyard (GB)</option>
                                        <option value="Perfekt Yacht (PL)">Perfekt Yacht (PL)</option>
                                        <option value="Performance (IT)">Performance (IT)</option>
                                        <option value="Pershing (IT)">Pershing (IT)</option>
                                        <option value="Pfeil (DE)">Pfeil (DE)</option>
                                        <option value="Phoenix (KR)">Phoenix (KR)</option>
                                        <option value="Phuket Yachts (TH)">Phuket Yachts (TH)</option>
                                        <option value="Piantoni (IT)">Piantoni (IT)</option>
                                        <option value="Picchiotti (IT)">Picchiotti (IT)</option>
                                        <option value="Picton (GB)">Picton (GB)</option>
                                        <option value="Piet Hein (NL)">Piet Hein (NL)</option>
                                        <option value="Pikmeerkruiser (NL)">Pikmeerkruiser (NL)</option>
                                        <option value="Pilot">Pilot</option>
                                        <option value="Pioner (NO)">Pioner (NO)</option>
                                        <option value="PL Qucksilver (PL)">PL Qucksilver (PL)</option>
                                        <option value="Pocta Intern (CN)">Pocta Intern (CN)</option>
                                        <option value="poland">poland</option>
                                        <option value="Polar Boats (NO)">Polar Boats (NO)</option>
                                        <option value="Polaris (NL)">Polaris (NL)</option>
                                        <option value="Polyboats (NL)">Polyboats (NL)</option>
                                        <option value="Porsche Marine (USA)">Porsche Marine (USA)</option>
                                        <option value="Portofino Marine (IT)">Portofino Marine (IT)</option>
                                        <option value="Poseidon (DE)">Poseidon (DE)</option>
                                        <option value="Posillipo (IT)">Posillipo (IT)</option>
                                        <option value="Post Yachts - USA">Post Yachts - USA</option>
                                        <option value="Power Play (USA)">Power Play (USA)</option>
                                        <option value="President (TW)">President (TW)</option>
                                        <option value="Prima Yachts (TW)">Prima Yachts (TW)</option>
                                        <option value="Primaboot (DE)">Primaboot (DE)</option>
                                        <option value="Princess (GB)">Princess (GB)</option>
                                        <option value="Privateer (NL)">Privateer (NL)</option>
                                        <option value="Pro-Line">Pro-Line</option>
                                        <option value="Proficiat (NL)">Proficiat (NL)</option>
                                        <option value="Prout (GB)">Prout (GB)</option>
                                        <option value="Pursuit - USA">Pursuit - USA</option>
                                        <option value="Qualine (USA)">Qualine (USA)</option>
                                        <option value="Quicksilver (USA)">Quicksilver (USA)</option>
                                        <option value="Raffaeli (IT)">Raffaeli (IT)</option>
                                        <option value="Ramco Boats (NZ)">Ramco Boats (NZ)</option>
                                        <option value="Ramin Boats (NO)">Ramin Boats (NO)</option>
                                        <option value="Rana">Rana</option>
                                        <option value="Ranieri (IT)">Ranieri (IT)</option>
                                        <option value="Rapsody (NL)">Rapsody (NL)</option>
                                        <option value="Rascala (IT)">Rascala (IT)</option>
                                        <option value="Recla (DE)">Recla (DE)</option>
                                        <option value="Red Hawk (USA)">Red Hawk (USA)</option>
                                        <option value="Regal (USA)">Regal (USA)</option>
                                        <option value="Reinell (USA)">Reinell (USA)</option>
                                        <option value="Reinke (DE)">Reinke (DE)</option>
                                        <option value="Relcraft (GB)">Relcraft (GB)</option>
                                        <option value="ReLine (NL)">ReLine (NL)</option>
                                        <option value="Renken (USA)">Renken (USA)</option>
                                        <option value="Revenger (GB)">Revenger (GB)</option>
                                        <option value="Riamar (PT)">Riamar (PT)</option>
                                        <option value="Rias (FI)">Rias (FI)</option>
                                        <option value="Ridas (EE)">Ridas (EE)</option>
                                        <option value="Rinker (USA)">Rinker (USA)</option>
                                        <option value="Rio (IT)">Rio (IT)</option>
                                        <option value="Riva (IT)">Riva (IT)</option>
                                        <option value="Riviera- AU">Riviera- AU</option>
                                        <option value="Rizzardi (IT)">Rizzardi (IT)</option>
                                        <option value="Roberts (AUS)">Roberts (AUS)</option>
                                        <option value="Rocca (FR)">Rocca (FR)</option>
                                        <option value="Rocco Boats (SE)">Rocco Boats (SE)</option>
                                        <option value="Rodman (ES)">Rodman (ES)</option>
                                        <option value="Rogger">Rogger</option>
                                        <option value="Roland (NO)">Roland (NO)</option>
                                        <option value="Romar (IT)">Romar (IT)</option>
                                        <option value="Rona Yachts">Rona Yachts</option>
                                        <option value="Rose Island - IT">Rose Island - IT</option>
                                        <option value="Roskam">Roskam</option>
                                        <option value="Royal Denship (DK)">Royal Denship (DK)</option>
                                        <option value="Rudkobing (DK)">Rudkobing (DK)</option>
                                        <option value="Ryds (SE)">Ryds (SE)</option>
                                        <option value="Saare-Paat (EE)">Saare-Paat (EE)</option>
                                        <option value="Sabre (USA)">Sabre (USA)</option>
                                        <option value="Sabre (USA)">Safir (DK)</option>
                                        <option value="Saga (NO)">Saga (NO)</option>
                                        <option value="Sailart (DE)">Sailart (DE)</option>
                                        <option value="Salpa (IT)">Salpa (IT)</option>
                                        <option value="San Lorenzo (IT)">San Lorenzo (IT)</option>
                                        <option value="Sandviks (NO)">Sandviks (NO)</option>
                                        <option value="Sanlorenzo Baleari">Sanlorenzo Baleari</option>
                                        <option value="Sarins (FI)">Sarins (FI)</option>
                                        <option value="SAS VEKTOR">SAS VEKTOR</option>
                                        <option value="Sasanka (PL)">Sasanka (PL)</option>
                                        <option value="Sasanka Yacht (PL)">Sasanka Yacht (PL)</option>
                                        <option value="Saver">Saver</option>
                                        <option value="SBM (DE)">SBM (DE)</option>
                                        <option value="SBPEM (FR)">SBPEM (FR)</option>
                                        <option value="Scand Boats (NO)">Scand Boats (NO)</option>
                                        <option value="Scarani - ES">Scarani - ES</option>
                                        <option value="Schachner (AT)">Schachner (AT)</option>
                                        <option value="Scharping (DE)">Scharping (DE)</option>
                                        <option value="Schleswiger Werkstatten (DE)">Schleswiger Werkstatten (DE)</option>
                                        <option value="Schlichting (DE)">Schlichting (DE)</option>
                                        <option value="Schochl (Sunbeam)">Schochl (Sunbeam)</option>
                                        <option value="schubert">schubert</option>
                                        <option value="Schulz (AT)">Schulz (AT)</option>
                                        <option value="Schweers Bardenfleth Weser">Schweers Bardenfleth Weser</option>
                                        <option value="Schweizer Bateaux (CH)">Schweizer Bateaux (CH)</option>
                                        <option value="Sciallino (IT)">Sciallino (IT)</option>
                                        <option value="SCOUT BOAT">SCOUT BOAT</option>
                                        <option value="Sea Fox (USA)">Sea Fox (USA)</option>
                                        <option value="Sea Nymph (USA)">Sea Nymph (USA)</option>
                                        <option value="Sea Ray (USA)">Sea Ray (USA)</option>
                                        <option value="SEA SPIRIT MARINE (CN)">SEA SPIRIT MARINE (CN)</option>
                                        <option value="Sea Sprite (USA)">Sea Sprite (USA)</option>
                                        <option value="Sea Star (FI)">Sea Star (FI)</option>
                                        <option value="Seabird (SE)">Seabird (SE)</option>
                                        <option value="Seaco (NO)">Seaco (NO)</option>
                                        <option value="Seaforce (TW)">Seaforce (TW)</option>
                                        <option value="Sealine (GB)">Sealine (GB)</option>
                                        <option value="SeaMar (TR)">SeaMar (TR)</option>
                                        <option value="Seanest - IT">Seanest - IT</option>
                                        <option value="Seaswirl (USA)">Seaswirl (USA)</option>
                                        <option value="Seawing (GB)">Seawing (GB)</option>
                                        <option value="Segger-Boote (DE)">Segger-Boote (DE)</option>
                                        <option value="Selva (IT)">Selva (IT)</option>
                                        <option value="sep. WC / 1 Jahr Garantie">sep. WC / 1 Jahr Garantie</option>
                                        <option value="sep. WC/ 1 Jahr Garantie / neuer Motor">sep. WC/ 1 Jahr Garantie / neuer Motor</option>
                                        <option value="SeriousYachts - NL">SeriousYachts - NL</option>
                                        <option value="Sessa (IT)">Sessa (IT)</option>
                                        <option value="Shadow">Shadow</option>
                                        <option value="Shakespeare (GB)">Shakespeare (GB)</option>
                                        <option value="Shamrock (USA)">Shamrock (USA)</option>
                                        <option value="Shetland (GB)">Shetland (GB)</option>
                                        <option value="Siemer (NL)">Siemer (NL)</option>
                                        <option value="Silver (FI)">Silver (FI)</option>
                                        <option value="Silverline (USA)">Silverline (USA)</option>
                                        <option value="Silverton (USA)">Silverton (USA)</option>
                                        <option value="Skagen">Skagen</option>
                                        <option value="Skagerrak (NO)">Skagerrak (NO)</option>
                                        <option value="Skarpnes (NO)">Skarpnes (NO)</option>
                                        <option value="Skibsplast (NO)">Skibsplast (NO)</option>
                                        <option value="Skilso (NO)">Skilso (NO)</option>
                                        <option value="Skorgenes (NO)">Skorgenes (NO)</option>
                                        <option value="Slickcraft (USA)">Slickcraft (USA)</option>
                                        <option value="SM Yacht Werft (PL)">SM Yacht Werft (PL)</option>
                                        <option value="Smelne (NL)">Smelne (NL)</option>
                                        <option value="SMG Werft - DE">SMG Werft - DE</option>
                                        <option value="SNP (FR)">SNP (FR)</option>
                                        <option value="SoleMar (DE)">SoleMar (DE)</option>
                                        <option value="Sollux (NO)">Sollux (NO)</option>
                                        <option value="SONSTIGE/OTHERS">SONSTIGE/OTHERS</option>
                                        <option value="Southern Wind (GB)">Southern Wind (GB)</option>
                                        <option value="Spectrum">Spectrum</option>
                                        <option value="Speedy (PL)">Speedy (PL)</option>
                                        <option value="SpinCraft Electric Boats - CA">SpinCraft Electric Boats - CA</option>
                                        <option value="Spirit (GB)">Spirit (GB)</option>
                                        <option value="Sport Craft">Sport Craft</option>
                                        <option value="Sportboot">Sportboot</option>
                                        <option value="Sportboot 340">Sportboot 340</option>
                                        <option value="Star Yachts (TH)">Star Yachts (TH)</option>
                                        <option value="Starcraft (USA)">Starcraft (USA)</option>
                                        <option value="Stardust (USA)">Stardust (USA)</option>
                                        <option value="Starfisher">Starfisher</option>
                                        <option value="Ste Mar Nautica (IT)">Ste Mar Nautica (IT)</option>
                                        <option value="Stefyniur (PL)">Stefyniur (PL)</option>
                                        <option value="Stelco (GB)">Stelco (GB)</option>
                                        <option value="Stentor (NL)">Stentor (NL)</option>
                                        <option value="Steven (NL)">Steven (NL)</option>
                                        <option value="Stevens Nautical">Stevens Nautical</option>
                                        <option value="Stichnoth (DE)">Stichnoth (DE)</option>
                                        <option value="Stingray (USA)">Stingray (USA)</option>
                                        <option value="Storebro (SE)">Storebro (SE)</option>
                                        <option value="Strike">Strike</option>
                                        <option value="Struerewerft (DK)">Struerewerft (DK)</option>
                                        <option value="Sturier Trawler">Sturier Trawler</option>
                                        <option value="Succes (NL)">Succes (NL)</option>
                                        <option value="Sun Cruiser (GB)">Sun Cruiser (GB)</option>
                                        <option value="Sunbird (USA)">Sunbird (USA)</option>
                                        <option value="Sunliner">Sunliner</option>
                                        <option value="Sunmar (FI)">Sunmar (FI)</option>
                                        <option value="Sunray">Sunray</option>
                                        <option value="Sunreef Yachts (PL)">Sunreef Yachts (PL)</option>
                                        <option value="SunRunner (USA)">SunRunner (USA)</option>
                                        <option value="Sunseeker (GB)">Sunseeker (GB)</option>
                                        <option value="Super van Craft">Super van Craft</option>
                                        <option value="Supra Sports (USA)">Supra Sports (USA)</option>
                                        <option value="Swift Craft (ES)">Swift Craft (ES)</option>
                                        <option value="Symbol (TW)">Symbol (TW)</option>
                                        <option value="Syntechnics (DE)">Syntechnics (DE)</option>
                                        <option value="T.A. Mare (IT)">T.A. Mare (IT)</option>
                                        <option value="t.a.mare (IT)">t.a.mare (IT)</option>
                                        <option value="Ta Chiao (TW)">Ta Chiao (TW)</option>
                                        <option value="Tacar (TR)">Tacar (TR)</option>
                                        <option value="Tacoma (USA)">Tacoma (USA)</option>
                                        <option value="Tahoe">Tahoe</option>
                                        <option value="Talon (USA)">Talon (USA)</option>
                                        <option value="Tango Yachts (AR)">Tango Yachts (AR)</option>
                                        <option value="Tania (TH)">Tania (TH)</option>
                                        <option value="Target">Target</option>
                                        <option value="Tarquin (GB)">Tarquin (GB)</option>
                                        <option value="Tashing (TW)">Tashing (TW)</option>
                                        <option value="Taurus (RC)">Taurus (RC)</option>
                                        <option value="Tayana (TW)">Tayana (TW)</option>
                                        <option value="Taylan Yacht (TR)">Taylan Yacht (TR)</option>
                                        <option value="Techno Consult (DE)">Techno Consult (DE)</option>
                                        <option value="Tecnofiber (IT)">Tecnofiber (IT)</option>
                                        <option value="Tecnomarine (IT)">Tecnomarine (IT)</option>
                                        <option value="TEKA (USA)">TEKA (USA)</option>
                                        <option value="Tempest">Tempest</option>
                                        <option value="Tenten-Boats (DE)">Tenten-Boats (DE)</option>
                                        <option value="Terhi (FI)">Terhi (FI)</option>
                                        <option value="Terminalboat - IT">Terminalboat - IT</option>
                                        <option value="TES YACHT">TES YACHT</option>
                                        <option value="Texas">Texas</option>
                                        <option value="TG Boat (FI)">TG Boat (FI)</option>
                                        <option value="Thermo (NL)">Thermo (NL)</option>
                                        <option value="Thoma (CH)">Thoma (CH)</option>
                                        <option value="Thomasz Yachts">Thomasz Yachts</option>
                                        <option value="Thompson (USA)">Thompson (USA)</option>
                                        <option value="Thunderbird (USA)">Thunderbird (USA)</option>
                                        <option value="Thundercraft (CA)">Thundercraft (CA)</option>
                                        <option value="Tiara Yachts - USA">Tiara Yachts - USA</option>
                                        <option value="Time-Out (NL)">Time-Out (NL)</option>
                                        <option value="Tjeukemer (NL)">Tjeukemer (NL)</option>
                                        <option value="Toensberg">Toensberg</option>
                                        <option value="Tollycraft (USA)">Tollycraft (USA)</option>
                                        <option value="Tony Giugliano (IT)">Tony Giugliano (IT)</option>
                                        <option value="Tornado">Tornado</option>
                                        <option value="Toy Marine - IT">Toy Marine - IT</option>
                                        <option value="Trailer (SE)">Trailer (SE)</option>
                                        <option value="Transpacific (TW)">Transpacific (TW)</option>
                                        <option value="Trawler">Trawler</option>
                                        <option value="Tresfjord (NO)">Tresfjord (NO)</option>
                                        <option value="Trier Hans Boost">Trier Hans Boost</option>
                                        <option value="Tristan Boats (FI)">Tristan Boats (FI)</option>
                                        <option value="TriStar (TR)">TriStar (TR)</option>
                                        <option value="Troian">Troian</option>
                                        <option value="Trojan (USA)">Trojan (USA)</option>
                                        <option value="Trophy (USA)">Trophy (USA)</option>
                                        <option value="Tuccoli">Tuccoli</option>
                                        <option value="Tullio Abbate (IT)">Tullio Abbate (IT)</option>
                                        <option value="Tuna-Yachts - NL">Tuna-Yachts - NL</option>
                                        <option value="Tung Hwa (TW)">Tung Hwa (TW)</option>
                                        <option value="unbekannt">unbekannt</option>
                                        <option value="Uniesse Marine (IT)">Uniesse Marine (IT)</option>
                                        <option value="Unique (NO)">Unique (NO)</option>
                                        <option value="Uttern (SE)">Uttern (SE)</option>
                                        <option value="v-type (UK)">v-type (UK)</option>
                                        <option value="Vacance (NL)">Vacance (NL)</option>
                                        <option value="Valk">Valk</option>
                                        <option value="van der Heijden (NL)">van der Heijden (NL)</option>
                                        <option value="van der Valk (NL)">van der Valk (NL)</option>
                                        <option value="van der Vlis (NL)">van der Vlis (NL)</option>
                                        <option value="van der Werff (NL)">van der Werff (NL)</option>
                                        <option value="van Heck">van Heck</option>
                                        <option value="van Lent (NL)">van Lent (NL)</option>
                                        <option value="van Vlieth (NL)">van Vlieth (NL)</option>
                                        <option value="van Waarde (NL)">van Waarde (NL)</option>
                                        <option value="van Wijk (NL)">van Wijk (NL)</option>
                                        <option value="Vansjo-Bat (NO)">Vansjo-Bat (NO)</option>
                                        <option value="Variant 606 / BJ 2009 / 25 PS EFI NEU / Schubert">Variant 606 / BJ 2009 / 25 PS EFI NEU / Schubert</option>
                                        <option value="Variant 606 HT / BJ 2004 / 20 PS NEU / Schubert">Variant 606 HT / BJ 2004 / 20 PS NEU / Schubert</option>
                                        <option value="Variant 606 HT / BJ 2008 / 70 PS / Schubert">Variant 606 HT / BJ 2008 / 70 PS / Schubert</option>
                                        <option value="VDL Shipyards (NL)">VDL Shipyards (NL)</option>
                                        <option value="VEB Muggelspree">VEB Muggelspree</option>
                                        <option value="Veha (NL)">Veha (NL)</option>
                                        <option value="Venatus Boats">Venatus Boats</option>
                                        <option value="Veneveistamo (FI)">Veneveistamo (FI)</option>
                                        <option value="Verhoefkruiser">Verhoefkruiser</option>
                                        <option value="Versil Craft (IT)">Versil Craft (IT)</option>
                                        <option value="Viber (FI)">Viber (FI)</option>
                                        <option value="VICEM (TR)">VICEM (TR)</option>
                                        <option value="Vieser (DE)">Vieser (DE)</option>
                                        <option value="Viking (GB)">Viking (GB)</option>
                                        <option value="Viking (USA)">Viking (USA)</option>
                                        <option value="Viknes (NO)">Viknes (NO)</option>
                                        <option value="Viksund (NO)">Viksund (NO)</option>
                                        <option value="Vinkeveen Fleet">Vinkeveen Fleet</option>
                                        <option value="Vip Boats (USA)">Vip Boats (USA)</option>
                                        <option value="Viper (DE)">Viper (DE)</option>
                                        <option value="Virgin del Mar (ES)">Virgin del Mar (ES)</option>
                                        <option value="Vissers (NL)">Vissers (NL)</option>
                                        <option value="viudes">viudes</option>
                                        <option value="Volharding (NL)">Volharding (NL)</option>
                                        <option value="Voss (DE)">Voss (DE)</option>
                                        <option value="Vri-Jon (NL)">Vri-Jon (NL)</option>
                                        <option value="Vribuiter (NL)">Vribuiter (NL)</option>
                                        <option value="Vripack Yachting (NL)">Vripack Yachting (NL)</option>
                                        <option value="Vroegh &amp; Alblas (NL)">Vroegh &amp; Alblas (NL)</option>
                                        <option value="Vulture Ventura (GB)">Vulture Ventura (GB)</option>
                                        <option value="Warlock (USA)">Warlock (USA)</option>
                                        <option value="Warren Yachts - AU">Warren Yachts - AU</option>
                                        <option value="Waswa (DE)">Waswa (DE)</option>
                                        <option value="Water RooCraft - UK">Water RooCraft - UK</option>
                                        <option value="Waterland (NL)">Waterland (NL)</option>
                                        <option value="WeCo (NL)">WeCo (NL)</option>
                                        <option value="Wellcraft (USA)">Wellcraft (USA)</option>
                                        <option value="Werft unbekannt">Werft unbekannt</option>
                                        <option value="Wester engh">Wester engh</option>
                                        <option value="Westerly (GB)">Westerly (GB)</option>
                                        <option value="Weston (GB)">Weston (GB)</option>
                                        <option value="White Shark">White Shark</option>
                                        <option value="Wicabo (NL)">Wicabo (NL)</option>
                                        <option value="Wieker (DE)">Wieker (DE)</option>
                                        <option value="Wiking Boats (NL)">Wiking Boats (NL)</option>
                                        <option value="Willigen (NL)">Willigen (NL)</option>
                                        <option value="Wim van der Valk (NL)">Wim van der Valk (NL)</option>
                                        <option value="Windy (NO)">Windy (NO)</option>
                                        <option value="Winga (SE)">Winga (SE)</option>
                                        <option value="Winrace (NO)">Winrace (NO)</option>
                                        <option value="Winsor Brothers (GB)">Winsor Brothers (GB)</option>
                                        <option value="Wittley - AU">Wittley - AU</option>
                                        <option value="Wyboats (NL)">Wyboats (NL)</option>
                                        <option value="Xylon (DE)">Xylon (DE)</option>
                                        <option value="Y.B.M. (PL)">Y.B.M. (PL)</option>
                                        <option value="Y.E.P. (DE)">Y.E.P. (DE)</option>
                                        <option value="Yachts Industries (FR)">Yachts Industries (FR)</option>
                                        <option value="Yachtwerft Wilhelmshaven (DE)">Yachtwerft Wilhelmshaven (DE)</option>
                                        <option value="Yamaha (JP)">Yamaha (JP)</option>
                                        <option value="Yamarin (FI)">Yamarin (FI)</option>
                                        <option value="Yaretti (AT)">Yaretti (AT)</option>
                                        <option value="Z-Products">Z-Products</option>
                                        <option value="Zaniboni (IT)">Zaniboni (IT)</option>
                                        <option value="ZET YACHTS - TR">ZET YACHTS - TR</option>
                                        <option value="Zeta Group (IT)">Zeta Group (IT)</option>
                                        <option value="Zijlmans (NL)">Zijlmans (NL)</option>
                                    </select>
                                </div>
                                <div class="span-6">
                                    </br>
                                   <a class="fancybox fancybox.iframe button15" href="<?php echo URL; ?>BoatSeller_map.html">Please set the current location of the boat >></a>
                                </div>
                                   <div class="span-6 last" align="right" style="margin-top:20px;">
                                    <label for="latitude">Latitude</label><span class="hint"></span><input class="css_input2" id="lat" name="latitude" type="text" value="0" />
                                    <label for="longitude">Longitude</label><span class="hint"></span><input class="css_input2" id="lng" name="longitude" type="text" value="0" />
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

                            <div id="loginForm" style="display:  block;">
                                <label for="user_login">Email:</label><br />
                                <input id="user_login" class="required email" title="Please enter email" name="login" size="45" type="text" value="" /><br />

                                <label for="user_password">Password:</label><br />
                                <input id="user_password" class="required"  name="password" size="45" type="password" value="" /><br />
                                <a href="<?php echo URL; ?>signup/reset">Forgot your password?</a><br />
                                If you don't have an account, then go to the <a href="<?php echo URL; ?>signup">create account</a> page.<br/>
                            </div>


                        <?php endif; ?>  
                         
                       <hr> 
                                    
                       <div class="span-6" align="right">
                            <h2 align="left">Ship dimensions</h2>
                               </br>
                                <label>Length</label>
                                <div contenteditable="true" id="div_length" class="css_input3" dimension="length" data-ph="0.00"></div>
                                <label class="css_input_m">m</label>
                                <input id="length" name="length" type="hidden" value="0.00"/>
                                <br/>
                                 <label>Width</label>
                                 <div contenteditable="true" id="div_width" class="css_input3" dimension="width" data-ph="0.00"></div> 
                                 <label class="css_input_m">m</label>
                                <input id="width" name="width" type="hidden" value="0.00"/>
                                <br/>
                                <label>Bridge Clearance</label>
                                 <div contenteditable="true" id="div_clearance" class="css_input3" dimension="clearance" data-ph="0.00"></div>
                                 <label class="css_input_m">m</label>
                                <input id="clearance" name="clearance" type="hidden" value="0.00"/>
                                <br/>
                                <label>Draft</label>
                                 <div contenteditable="true" id="div_draft" class="css_input3" dimension="draft" data-ph="0.00"></div> 
                                 <label class="css_input_m">m</label>
                                <input id="draft" name="draft" type="hidden" value="0.00"/>
                                <br/>
                                <label>Weight</label>
                                <div contenteditable="true" id="div_weight" class="css_input3" dimension="weight" data-ph="0.00"></div> 
                                <label class="css_input_m">kg</label>
                                <input id="weight" name="weight" type="hidden" value="0.00"/>
                                <br/>
                          </div>
                        
                         <div  class="span-9" align="right">
                               <h2 align="left">Places and accommodation</h2>
                               <br/>
                                <label>Max. Persons/Passengers</label>
                                <div contenteditable="true" id="div_length" class="css_input4" dimension="passengers" data-ph="Enter passengers"></div>
                                <input id="passengers" name="passengers" type="hidden" value="0"/>
                                <br/>
                                 <label>Cabins</label>
                                 <div contenteditable="true" id="div_width" class="css_input4" dimension="cabins" data-ph="Enter cabins"></div> 
                                <input id="cabins" name="cabins" type="hidden" value="0"/>
                                <br/>
                                <label>Berth</label>
                                 <div contenteditable="true" id="div_clearance" class="css_input4" dimension="berth" data-ph="Enter count of berths"></div>
                                 <input id="berth" name="berth" type="hidden" value="0"/>
                                <br/>
                        </div>
                  <div class="span-7" align="right">
                             <h2 align="left">Appearance and texture</h2>
                               <br/>
<label style="margin-right: 30px;">Color of the deck</label>
<div contenteditable="false" id="color" class="fox_body3" dimension="color" data-ph="color"></div>
<div class="dropdown"> 
<ul id="col" class="dropdown-menu">
  <li><a class="color-btn" href="#col" data-color="#ffffff" data-value="1" title="White" style="background-color: rgb(255, 255, 255);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#f8f8ff" data-value="2" title="Ghost White" style="background-color: rgb(248, 248, 255);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#dcdcdc" data-value="3" title="Gainsboro" style="background-color: rgb(220, 220, 220);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#d3d3d3" data-value="4" title="Light Grey" style="background-color: rgb(211, 211, 211);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#a7a7a7" data-value="5" title="Dark Grey" style="background-color: rgb(167, 167, 167);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#bebebe" data-value="6" title="Gray" style="background-color: rgb(190, 190, 190);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#000000" data-value="7" title="Black" style="background-color: rgb(0, 0, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#b0e0e6" data-value="8" title="Powder Blue" style="background-color: rgb(176, 224, 230);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#add8e6" data-value="9" title="Light Blue" style="background-color: rgb(173, 216, 230);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#87ceeb" data-value="10" title="Sky Blue" style="background-color: rgb(135, 206, 235);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#00bfff" data-value="11" title="Deep Sky Blue" style="background-color: rgb(0, 191, 255);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#1e90ff" data-value="12" title="Dodger Blue" style="background-color: rgb(30, 144, 255);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#4169e1" data-value="13" title="Royal Blue" style="background-color: rgb(65, 105, 225);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#0000ff" data-value="14" title="Blue" style="background-color: rgb(0, 0, 255);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#191970" data-value="15" title="Midnight Blue" style="background-color: rgb(25, 25, 112);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#00fa9a" data-value="16" title="Medium Spring Green" style="background-color: rgb(0, 250, 154);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#00ff7f" data-value="17" title="Spring Green" style="background-color: rgb(0, 255, 127);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#3cb371" data-value="18" title="Medium Sea Green" style="background-color: rgb(60, 179, 113);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#2e8b57" data-value="19" title="Sea Green" style="background-color: rgb(46, 139, 87);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#228b22" data-value="20" title="Forest Green" style="background-color: rgb(34, 139, 34);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#008000" data-value="21" title="Green" style="background-color: rgb(0, 128, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#6b8e23" data-value="22" title="Olive Drab" style="background-color: rgb(107, 142, 35);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#006400" data-value="23" title="Dark Green" style="background-color: rgb(0, 100, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#f5f5dc" data-value="24" title="Beige" style="background-color: rgb(245, 245, 220);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#fafad2" data-value="25" title="Light Golden Rod Yellow" style="background-color: rgb(250, 250, 210);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#eee8aa" data-value="26" title="Pale Golden Rod" style="background-color: rgb(238, 232, 170);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ffff00" data-value="27" title="Yellow" style="background-color: rgb(255, 255, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ffd700" data-value="28" title="Gold" style="background-color: rgb(255, 215, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ffa500" data-value="29" title="Orange" style="background-color: rgb(255, 165, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ff8c00" data-value="30" title="Dark Orange" style="background-color: rgb(255, 140, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#b8860b" data-value="31" title="Dark Golden Rod" style="background-color: rgb(184, 134, 11);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ffe4c4" data-value="32" title="Bisque" style="background-color: rgb(255, 228, 196);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ffe4b5" data-value="33" title="Moccasin" style="background-color: rgb(255, 228, 181);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ffa07a" data-value="34" title="Light Salmon" style="background-color: rgb(255, 160, 122);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#fa8072" data-value="35" title="Salmon" style="background-color: rgb(250, 128, 114);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#f08080" data-value="36" title="Light Coral" style="background-color: rgb(240, 128, 128);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#cd5c5c" data-value="37" title="Indian Red" style="background-color: rgb(205, 92, 92);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#a52a2a" data-value="38" title="Brown" style="background-color: rgb(165, 42, 42);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#b22222" data-value="39" title="Fire Brick" style="background-color: rgb(178, 34, 34);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ffdab9" data-value="40" title="Peach Puff" style="background-color: rgb(255, 218, 185);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#f5deb3" data-value="41" title="Wheat" style="background-color: rgb(245, 222, 179);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#f4a460" data-value="42" title="Sandy Brown" style="background-color: rgb(244, 164, 96);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ff6347" data-value="43" title="Tomato" style="background-color: rgb(255, 99, 71);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ff4500" data-value="44" title="Orange Red" style="background-color: rgb(255, 69, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ff0000" data-value="45" title="Red" style="background-color: rgb(255, 0, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#d2691e" data-value="46" title="Chocolate" style="background-color: rgb(210, 105, 30);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#800000" data-value="47" title="Maroon" style="background-color: rgb(128, 0, 0);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ffc0cb" data-value="48" title="Pink" style="background-color: rgb(255, 192, 203);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ffb6c1" data-value="49" title="Light Pink" style="background-color: rgb(255, 182, 193);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#db7093" data-value="50" title="Pale Violet Red" style="background-color: rgb(219, 112, 147);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ff00ff" data-value="51" title="Magenta" style="background-color: rgb(255, 0, 255);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ff69b4" data-value="52" title="Hot Pink" style="background-color: rgb(255, 105, 180);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ff1493" data-value="53" title="Deep Pink" style="background-color: rgb(255, 20, 147);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#d02090" data-value="54" title="Violet Red" style="background-color: rgb(208, 32, 144);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#8b008b" data-value="55" title="Dark Magenta" style="background-color: rgb(139, 0, 139);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#e6e6fa" data-value="56" title="Lavender" style="background-color: rgb(230, 230, 250);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#d8bfd8" data-value="57" title="Thistle" style="background-color: rgb(216, 191, 216);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#dda0dd" data-value="58" title="Plum" style="background-color: rgb(221, 160, 221);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#da70d6" data-value="59" title="Orchid" style="background-color: rgb(218, 112, 214);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#ba55d3" data-value="60" title="Medium Orchid" style="background-color: rgb(186, 85, 211);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#8a2be2" data-value="61" title="Blue Violet" style="background-color: rgb(138, 43, 226);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#9932cc" data-value="62" title="Dark Orchid" style="background-color: rgb(153, 50, 204);"></a></li>
  <li><a class="color-btn" href="#col" data-color="#800080" data-value="63" title="Purple" style="background-color: rgb(128, 0, 128);"></a></li>
</ul>
</div>  
      
                            <select id="select1"  name="deck_color" style="display:none">
                                   <option value="#ffffff" data-color="#ffffff">White</option>
                                   <option value="#f8f8ff" data-color="#f8f8ff">Ghost White</option>
                                   <option value="#dcdcdc" data-color="#dcdcdc">Gainsboro</option>
                                   <option value="#d3d3d3" data-color="#d3d3d3">Light Grey</option>
                                   <option value="#a7a7a7" data-color="#a7a7a7">Dark Grey</option>
                                   <option value="#bebebe" data-color="#bebebe">Gray</option>
                                   <option value="#000000" data-color="#000000">Black</option>
                                   <option value="#b0e0e6" data-color="#b0e0e6">Powder Blue</option>
                                   <option value="#add8e6" data-color="#add8e6">Light Blue</option>
                                   <option value="#87ceeb" data-color="#87ceeb">Sky Blue</option>
                                   <option value="#00bfff" data-color="#00bfff">Deep Sky Blue</option>
                                   <option value="#1e90ff" data-color="#1e90ff">Dodger Blue</option>
                                   <option value="#4169e1" data-color="#4169e1">Royal Blue</option>
                                   <option value="#0000ff" data-color="#0000ff">Blue</option>
                                   <option value="#191970" data-color="#191970">Midnight Blue</option>
                                   <option value="#00fa9a" data-color="#00fa9a">Medium Spring Green</option>
                                   <option value="#00ff7f" data-color="#00ff7f">Spring Green</option>
                                   <option value="#3cb371" data-color="#3cb371">Medium Sea Green</option>
                                   <option value="#2e8b57" data-color="#2e8b57">Sea Green</option>
                                   <option value="#228b22" data-color="#228b22">Forest Green</option>
                                   <option value="#008000" data-color="#008000">Green</option>
                                   <option value="#6b8e23" data-color="#6b8e23">Olive Drab</option>
                                   <option value="#006400" data-color="#006400">Dark Green</option>
                                   <option value="#f5f5dc" data-color="#f5f5dc">Beige</option>
                                   <option value="#fafad2" data-color="#fafad2">Light Golden Rod Yellow</option>
                                   <option value="#eee8aa" data-color="#eee8aa">Pale Golden Rod</option>
                                   <option value="#ffff00" data-color="#ffff00">Yellow</option>
                                   <option value="#ffd700" data-color="#ffd700">Gold</option>
                                   <option value="#ffa500" data-color="#ffa500">Orange</option>
                                   <option value="#ff8c00" data-color="#ff8c00">Dark Orange</option>
                                   <option value="#b8860b" data-color="#b8860b">Dark Golden Rod</option>
                                   <option value="#ffe4c4" data-color="#ffe4c4">Bisque</option>
                                   <option value="#ffe4b5" data-color="#ffe4b5">Moccasin</option>
                                   <option value="#ffa07a" data-color="#ffa07a">Light Salmon</option>
                                   <option value="#fa8072" data-color="#fa8072">Salmon</option>
                                   <option value="#f08080" data-color="#f08080">Light Coral</option>
                                   <option value="#cd5c5c" data-color="#cd5c5c">Indian Red</option>
                                   <option value="#a52a2a" data-color="#a52a2a">Brown</option>
                                   <option value="#b22222" data-color="#b22222">Fire Brick</option>
                                   <option value="#ffdab9" data-color="#ffdab9">Peach Puff</option>
                                   <option value="#f5deb3" data-color="#f5deb3">Wheat</option>
                                   <option value="#f4a460" data-color="#f4a460">Sandy Brown</option>
                                   <option value="#ff6347" data-color="#ff6347">Tomato</option>
                                   <option value="#ff4500" data-color="#ff4500">Orange Red</option>
                                   <option value="#ff0000" data-color="#ff0000">Red</option>
                                   <option value="#d2691e" data-color="#d2691e">Chocolate</option>
                                   <option value="#800000" data-color="#800000">Maroon</option>
                                   <option value="#ffc0cb" data-color="#ffc0cb">Pink</option>
                                   <option value="#ffb6c1" data-color="#ffb6c1">Light Pink</option>
                                   <option value="#db7093" data-color="#db7093">Pale Violet Red</option>
                                   <option value="#ff00ff" data-color="#ff00ff">Magenta</option>
                                   <option value="#ff69b4" data-color="#ff69b4">Hot Pink</option>
                                   <option value="#ff1493" data-color="#ff1493">Deep Pink</option>
                                   <option value="#d02090" data-color="#d02090">Violet Red</option>
                                   <option value="#8b008b" data-color="#8b008b">Dark Magenta</option>
                                   <option value="#e6e6fa" data-color="#e6e6fa">Lavender</option>
                                   <option value="#d8bfd8" data-color="#d8bfd8">Thistle</option>
                                   <option value="#dda0dd" data-color="#dda0dd">Plum</option>
                                   <option value="#da70d6" data-color="#da70d6">Orchid</option>
                                   <option value="#ba55d3" data-color="#ba55d3">Medium Orchid</option>
                                   <option value="#8a2be2" data-color="#8a2be2">Blue Violet</option>
                                   <option value="#9932cc" data-color="#9932cc">Dark Orchid</option>
                                   <option value="#800080" data-color="#800080">Purple</option>
                              </select>
                                <br/>   
                           
                                 <label>Deck Material</label>
                                    <select class="css_input" name="deck_mat">      
                                        <option value="Aluminium">Aluminium</option>
                                        <option value="Cement">Cement</option>
                                        <option value="CRP-glass-fibre reinforced plastic">CRP-glass-fibre reinforced plastic</option>
                                        <option value="Steel">Steel</option> 
                                        <option value="Unknown">Unknown</option> 
                                        <option value="Wood">Wood</option> 
                                    </select>
                                <br/>
                                   <br/>
                                      <br/>
<label style="margin-right: 30px;">Color of the hull</label>                                                             
<div contenteditable="false" id="color2" class="fox_body4" dimension="color" data-ph="color"></div>
            <div class="dropdown"> 
            <ul id="col2" class="dropdown-menu">
  <li><a class="color-btn1" href="#col2" data-color="#ffffff" data-value="1" title="White" style="background-color: rgb(255, 255, 255);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#f8f8ff" data-value="2" title="Ghost White" style="background-color: rgb(248, 248, 255);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#dcdcdc" data-value="3" title="Gainsboro" style="background-color: rgb(220, 220, 220);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#d3d3d3" data-value="4" title="Light Grey" style="background-color: rgb(211, 211, 211);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#a7a7a7" data-value="5" title="Dark Grey" style="background-color: rgb(167, 167, 167);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#000000" data-value="7" title="Black" style="background-color: rgb(0, 0, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#b0e0e6" data-value="8" title="Powder Blue" style="background-color: rgb(176, 224, 230);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#add8e6" data-value="9" title="Light Blue" style="background-color: rgb(173, 216, 230);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#87ceeb" data-value="10" title="Sky Blue" style="background-color: rgb(135, 206, 235);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#00bfff" data-value="11" title="Deep Sky Blue" style="background-color: rgb(0, 191, 255);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#1e90ff" data-value="12" title="Dodger Blue" style="background-color: rgb(30, 144, 255);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#4169e1" data-value="13" title="Royal Blue" style="background-color: rgb(65, 105, 225);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#0000ff" data-value="14" title="Blue" style="background-color: rgb(0, 0, 255);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#191970" data-value="15" title="Midnight Blue" style="background-color: rgb(25, 25, 112);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#00fa9a" data-value="16" title="Medium Spring Green" style="background-color: rgb(0, 250, 154);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#00ff7f" data-value="17" title="Spring Green" style="background-color: rgb(0, 255, 127);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#3cb371" data-value="18" title="Medium Sea Green" style="background-color: rgb(60, 179, 113);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#2e8b57" data-value="19" title="Sea Green" style="background-color: rgb(46, 139, 87);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#228b22" data-value="20" title="Forest Green" style="background-color: rgb(34, 139, 34);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#008000" data-value="21" title="Green" style="background-color: rgb(0, 128, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#6b8e23" data-value="22" title="Olive Drab" style="background-color: rgb(107, 142, 35);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#006400" data-value="23" title="Dark Green" style="background-color: rgb(0, 100, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#f5f5dc" data-value="24" title="Beige" style="background-color: rgb(245, 245, 220);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#fafad2" data-value="25" title="Light Golden Rod Yellow" style="background-color: rgb(250, 250, 210);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#eee8aa" data-value="26" title="Pale Golden Rod" style="background-color: rgb(238, 232, 170);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ffff00" data-value="27" title="Yellow" style="background-color: rgb(255, 255, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ffd700" data-value="28" title="Gold" style="background-color: rgb(255, 215, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ffa500" data-value="29" title="Orange" style="background-color: rgb(255, 165, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ff8c00" data-value="30" title="Dark Orange" style="background-color: rgb(255, 140, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#b8860b" data-value="31" title="Dark Golden Rod" style="background-color: rgb(184, 134, 11);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ffe4c4" data-value="32" title="Bisque" style="background-color: rgb(255, 228, 196);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ffe4b5" data-value="33" title="Moccasin" style="background-color: rgb(255, 228, 181);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ffa07a" data-value="34" title="Light Salmon" style="background-color: rgb(255, 160, 122);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#fa8072" data-value="35" title="Salmon" style="background-color: rgb(250, 128, 114);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#f08080" data-value="36" title="Light Coral" style="background-color: rgb(240, 128, 128);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#cd5c5c" data-value="37" title="Indian Red" style="background-color: rgb(205, 92, 92);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#a52a2a" data-value="38" title="Brown" style="background-color: rgb(165, 42, 42);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#b22222" data-value="39" title="Fire Brick" style="background-color: rgb(178, 34, 34);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ffdab9" data-value="40" title="Peach Puff" style="background-color: rgb(255, 218, 185);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#f5deb3" data-value="41" title="Wheat" style="background-color: rgb(245, 222, 179);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#f4a460" data-value="42" title="Sandy Brown" style="background-color: rgb(244, 164, 96);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ff6347" data-value="43" title="Tomato" style="background-color: rgb(255, 99, 71);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ff4500" data-value="44" title="Orange Red" style="background-color: rgb(255, 69, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ff0000" data-value="45" title="Red" style="background-color: rgb(255, 0, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#d2691e" data-value="46" title="Chocolate" style="background-color: rgb(210, 105, 30);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#800000" data-value="47" title="Maroon" style="background-color: rgb(128, 0, 0);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ffc0cb" data-value="48" title="Pink" style="background-color: rgb(255, 192, 203);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ffb6c1" data-value="49" title="Light Pink" style="background-color: rgb(255, 182, 193);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#db7093" data-value="50" title="Pale Violet Red" style="background-color: rgb(219, 112, 147);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ff00ff" data-value="51" title="Magenta" style="background-color: rgb(255, 0, 255);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ff69b4" data-value="52" title="Hot Pink" style="background-color: rgb(255, 105, 180);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ff1493" data-value="53" title="Deep Pink" style="background-color: rgb(255, 20, 147);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#d02090" data-value="54" title="Violet Red" style="background-color: rgb(208, 32, 144);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#8b008b" data-value="55" title="Dark Magenta" style="background-color: rgb(139, 0, 139);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#e6e6fa" data-value="56" title="Lavender" style="background-color: rgb(230, 230, 250);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#d8bfd8" data-value="57" title="Thistle" style="background-color: rgb(216, 191, 216);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#dda0dd" data-value="58" title="Plum" style="background-color: rgb(221, 160, 221);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#da70d6" data-value="59" title="Orchid" style="background-color: rgb(218, 112, 214);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#ba55d3" data-value="60" title="Medium Orchid" style="background-color: rgb(186, 85, 211);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#8a2be2" data-value="61" title="Blue Violet" style="background-color: rgb(138, 43, 226);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#9932cc" data-value="62" title="Dark Orchid" style="background-color: rgb(153, 50, 204);"></a></li>
  <li><a class="color-btn1" href="#col2" data-color="#800080" data-value="63" title="Purple" style="background-color: rgb(128, 0, 128);"></a></li>
</ul>
            </div>
                       <select id="select2" name="hull_color" style="display:none">
                                   <option value="#ffffff" data-color="#ffffff">White</option>
                                   <option value="#f8f8ff" data-color="#f8f8ff">Ghost White</option>
                                   <option value="#dcdcdc" data-color="#dcdcdc">Gainsboro</option>
                                   <option value="#d3d3d3" data-color="#d3d3d3">Light Grey</option>
                                   <option value="#a7a7a7" data-color="#a7a7a7">Dark Grey</option>
                                   <option value="#bebebe" data-color="#bebebe">Gray</option>
                                   <option value="#000000" data-color="#000000">Black</option>
                                   <option value="#b0e0e6" data-color="#b0e0e6">Powder Blue</option>
                                   <option value="#add8e6" data-color="#add8e6">Light Blue</option>
                                   <option value="#87ceeb" data-color="#87ceeb">Sky Blue</option>
                                   <option value="#00bfff" data-color="#00bfff">Deep Sky Blue</option>
                                   <option value="#1e90ff" data-color="#1e90ff">Dodger Blue</option>
                                   <option value="#4169e1" data-color="#4169e1">Royal Blue</option>
                                   <option value="#0000ff" data-color="#0000ff">Blue</option>
                                   <option value="#191970" data-color="#191970">Midnight Blue</option>
                                   <option value="#00fa9a" data-color="#00fa9a">Medium Spring Green</option>
                                   <option value="#00ff7f" data-color="#00ff7f">Spring Green</option>
                                   <option value="#3cb371" data-color="#3cb371">Medium Sea Green</option>
                                   <option value="#2e8b57" data-color="#2e8b57">Sea Green</option>
                                   <option value="#228b22" data-color="#228b22">Forest Green</option>
                                   <option value="#008000" data-color="#008000">Green</option>
                                   <option value="#6b8e23" data-color="#6b8e23">Olive Drab</option>
                                   <option value="#006400" data-color="#006400">Dark Green</option>
                                   <option value="#f5f5dc" data-color="#f5f5dc">Beige</option>
                                   <option value="#fafad2" data-color="#fafad2">Light Golden Rod Yellow</option>
                                   <option value="#eee8aa" data-color="#eee8aa">Pale Golden Rod</option>
                                   <option value="#ffff00" data-color="#ffff00">Yellow</option>
                                   <option value="#ffd700" data-color="#ffd700">Gold</option>
                                   <option value="#ffa500" data-color="#ffa500">Orange</option>
                                   <option value="#ff8c00" data-color="#ff8c00">Dark Orange</option>
                                   <option value="#b8860b" data-color="#b8860b">Dark Golden Rod</option>
                                   <option value="#ffe4c4" data-color="#ffe4c4">Bisque</option>
                                   <option value="#ffe4b5" data-color="#ffe4b5">Moccasin</option>
                                   <option value="#ffa07a" data-color="#ffa07a">Light Salmon</option>
                                   <option value="#fa8072" data-color="#fa8072">Salmon</option>
                                   <option value="#f08080" data-color="#f08080">Light Coral</option>
                                   <option value="#cd5c5c" data-color="#cd5c5c">Indian Red</option>
                                   <option value="#a52a2a" data-color="#a52a2a">Brown</option>
                                   <option value="#b22222" data-color="#b22222">Fire Brick</option>
                                   <option value="#ffdab9" data-color="#ffdab9">Peach Puff</option>
                                   <option value="#f5deb3" data-color="#f5deb3">Wheat</option>
                                   <option value="#f4a460" data-color="#f4a460">Sandy Brown</option>
                                   <option value="#ff6347" data-color="#ff6347">Tomato</option>
                                   <option value="#ff4500" data-color="#ff4500">Orange Red</option>
                                   <option value="#ff0000" data-color="#ff0000">Red</option>
                                   <option value="#d2691e" data-color="#d2691e">Chocolate</option>
                                   <option value="#800000" data-color="#800000">Maroon</option>
                                   <option value="#ffc0cb" data-color="#ffc0cb">Pink</option>
                                   <option value="#ffb6c1" data-color="#ffb6c1">Light Pink</option>
                                   <option value="#db7093" data-color="#db7093">Pale Violet Red</option>
                                   <option value="#ff00ff" data-color="#ff00ff">Magenta</option>
                                   <option value="#ff69b4" data-color="#ff69b4">Hot Pink</option>
                                   <option value="#ff1493" data-color="#ff1493">Deep Pink</option>
                                   <option value="#d02090" data-color="#d02090">Violet Red</option>
                                   <option value="#8b008b" data-color="#8b008b">Dark Magenta</option>
                                   <option value="#e6e6fa" data-color="#e6e6fa">Lavender</option>
                                   <option value="#d8bfd8" data-color="#d8bfd8">Thistle</option>
                                   <option value="#dda0dd" data-color="#dda0dd">Plum</option>
                                   <option value="#da70d6" data-color="#da70d6">Orchid</option>
                                   <option value="#ba55d3" data-color="#ba55d3">Medium Orchid</option>
                                   <option value="#8a2be2" data-color="#8a2be2">Blue Violet</option>
                                   <option value="#9932cc" data-color="#9932cc">Dark Orchid</option>
                                   <option value="#800080" data-color="#800080">Purple</option>
                                  </select>

                                <br/>
                                <label>Hull Material</label>
                                    <select class="css_input" name="hull_mat">      
                                        <option value="Aluminium">Aluminium</option>
                                        <option value="Cement">Cement</option>
                                        <option value="CRP-glass-fibre reinforced plastic">CRP-glass-fibre reinforced plastic</option>
                                        <option value="Steel">Steel</option> 
                                        <option value="Unknown">Unknown</option> 
                                        <option value="Wood">Wood</option>   
                                    </select>
                                                      
                               
                        </div>
                 <hr> 
              <div>
               <div class="span-8">
            <h2 align="left">Details about the engine</h2>
                     <br/>
                     <label><input id=engine_no name="engine" value="no" type="radio" checked=""/>I don't have an engine</label>
                     <label><input id=engine_yes name="engine" value="yes" type="radio"/>I have engine(s)</label>
                      <br/>
                </div>      
           <div class="span-8">
                         <h2 align="left">Engine description</h2>
                <label for="descript">Optional description of engine and power train</label>
                <textarea class="form-control" COLS="60" ROWS="5" name="descript" class="descript" id="descript"></textarea>
                
            <br/>  
        </div>           
                      
                      
        <div class="engine span-24" style="display: none">
           <div class="span-9" align="right">
               <label for="boat_engine">Engine Name</label>
                <br>
                <input class="css_input" id="boat_engine" name="boat_engine" size="25" title="Please enter a Engine Name" type="text" placeholder="Please insert a name"/>
               <br>
                <label for="horsepower">Horsepower (sum of all engines)</label><span class="hint"></span>
                     <div contenteditable="true" id="div_horsepower" class="css_input3" dimension="horsepower" data-ph="0"></div> 
                     <label  class="css_input_m">PS</label>
                     <input id="horsepower" name="horsepower" type="hidden" value="0"/>
                  <br>
                 <label for="cylinders">Cylinders (number of one engine)</label><span class="hint"></span>
                     <div contenteditable="true" id="div_cylinders" class="css_input3" dimension="cylinders" data-ph="0"></div> 
                     
                     <input id="cylinders" name="cylinders" type="hidden" value="0"/>
                  <br>  
                     <label for="hours_use">Hours in use</label><span class="hint"></span>
                     <div contenteditable="true" id="div_hoursuse" class="css_input3" dimension="hours_use" data-ph="0"></div> 
                    
                     <input id="hours_use" name="hours_use" type="hidden" value="0"/>
                 <br>
                <label for="consumption">Consumption l/h</label><span class="hint"></span>
                     <div contenteditable="true" id="div_consumption" class="css_input3" dimension="consumption" data-ph="0"></div>
                     <label class="css_input_m">L</label>
                     <input id="consumption" name="consumption" type="hidden" value="0"/>
                 <br>
                <label for="fuel_tank">Fuel tank capacity</label><span class="hint"></span>
                       <div contenteditable="true" id="div_fueltank" class="css_input3" dimension="fuel_tank" data-ph="0"></div>
                       <label class="css_input_m">L</label>
                       <input id="fuel_tank" name="fuel_tank" type="hidden" value="0"/>
                 <br/>
                   <br/>
            </div>
           <div class="span-7" align="left">
               <label for="manufacturer">Manufacturer</label><span class="hint"></span>
          
                <select class="css_input" name="manufacturer">      
                        <option value="10KW Elektromotor">10KW Elektromotor</option>
                        <option value="2x Suzuki DF 80A">2x Suzuki DF 80A</option>
                        <option value="5,0 MPI">5,0 MPI</option>
                        <option value="7 Marine">7 Marine</option>
                        <option value="Aifo">Aifo</option>
                        <option value="aifo iveco">aifo iveco</option>
                        <option value="ALBIN">ALBIN</option>
                        <option value="Albin Marine">Albin Marine</option>
                        <option value="Atomic 4">Atomic 4</option>
                        <option value="Beta Marine">Beta Marine</option>
                        <option value="BETA-Marine">BETA-Marine</option>
                        <option value="bladt">bladt</option>
                        <option value="BMC Leyland">BMC Leyland</option>
                        <option value="BMC Tempest">BMC Tempest</option>
                        <option value="BMW">BMW</option>
                        <option value="Bond Jachts">Bond Jachts</option>
                        <option value="Buch">Buch</option>
                        <option value="Buckh">Buckh</option>
                        <option value="Bugh DK">Bugh DK</option>
                        <option value="Bukh">Bukh</option>
                        <option value="Cammings">Cammings</option>
                        <option value="Catarpillar">Catarpillar</option>
                        <option value="Caterpillar">Caterpillar</option>
                        <option value="CHREISLER">CHREISLER</option>
                        <option value="chriscraft">chriscraft</option>
                        <option value="Craftsman">Craftsman</option>
                        <option value="Cummins">Cummins</option>
                        <option value="Cummins Mercruiser">Cummins Mercruiser</option>
                        <option value="Cummins Qsd 4,2">Cummins Qsd 4,2</option>
                        <option value="Cummins-Diesel">Cummins-Diesel</option>
                        <option value="DAF">DAF</option>
                        <option value="Daimler-Benz">Daimler-Benz</option>
                        <option value="delta lloyd">delta lloyd</option>
                        <option value="Detroit Diesel">Detroit Diesel</option>
                        <option value="Deutz">Deutz</option>
                        <option value="Doosan">Doosan</option>
                        <option value="Ducati">Ducati</option>
                        <option value="Eigenbau">Eigenbau</option>
                        <option value="Evinrude">Evinrude</option>
                        <option value="Excursion">Excursion</option>
                        <option value="Farymann">Farymann</option>
                        <option value="Fiat">Fiat</option>
                        <option value="Flamme ARona D 182">Flamme ARona D 182</option>
                        <option value="For 2722e">For 2722e</option>
                        <option value="Force">Force</option>
                        <option value="Ford">Ford</option>
                        <option value="Ford Lehmann">Ford Lehmann</option>
                        <option value="Ford Sabre">Ford Sabre</option>
                        <option value="Ford-Lehmann">Ford-Lehmann</option>
                        <option value="Golf">Golf</option>
                        <option value="Hanomag">Hanomag</option>
                        <option value="HINO">HINO</option>
                        <option value="Homelite">Homelite</option>
                        <option value="Honda">Honda</option>
                        <option value="Honda u. Evinrude">Honda u. Evinrude</option>
                        <option value="Hundested Motorfabrik">Hundested Motorfabrik</option>
                        <option value="IFA">IFA</option>
                        <option value="Indenoor-Peugeot">Indenoor-Peugeot</option>
                        <option value="Intermotor 2,6 KW">Intermotor 2,6 KW</option>
                        <option value="Isuzu">Isuzu</option>
                        <option value="Iveco">Iveco</option>
                        <option value="Iveco Aifo">Iveco Aifo</option>
                        <option value="John Deere">John Deere</option>
                        <option value="Johnson">Johnson</option>
                        <option value="Junkers MHK103">Junkers MHK103</option>
                        <option value="Kräutler">Kräutler</option>
                        <option value="Kubota">Kubota</option>
                        <option value="Leyland">Leyland</option>
                        <option value="Lindner - Elektro">Lindner-Elektro</option>
                        <option value="Lister-Petter">Lister-Petter</option>
                        <option value="Lombardini">Lombardini</option>
                        <option value="MAN">MAN</option>
                        <option value="Mariner">Mariner</option>
                        <option value="Marstal">Marstal</option>
                        <option value="Mercedes">Mercedes</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="Mercruiser">Mercruiser</option>
                        <option value="Mercury">Mercury</option>
                        <option value="Mert">Mert</option>
                        <option value="Mini SF-7">Mini SF-7</option>
                        <option value="Minn Kota">Minn Kota</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Multicar">Multicar</option>
                        <option value="MWM">MWM</option>
                        <option value="Nanni">Nanni</option>
                        <option value="OMC">OMC</option>
                        <option value="Pegueot">Pegueot</option>
                        <option value="Penta">Penta</option>
                        <option value="Pentax">Pentax</option>
                        <option value="Perkins">Perkins</option>
                        <option value="Peugeot">Peugeot</option>
                        <option value="Peugot">Peugot</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Renault">Renault</option>
                        <option value="Renault Marine">Renault Marine</option>
                        <option value="Renault Quach">Renault Quach</option>
                        <option value="Rhino">Rhino</option>
                        <option value="Rotax 4 takt">Rotax 4 takt</option>
                        <option value="Ruggerini">Ruggerini</option>
                        <option value="Sabb">Sabb</option>
                        <option value="Samofa">Samofa</option>
                        <option value="Sannst">Sannst</option>
                        <option value="SD330">SD330</option>
                        <option value="Seenergie Citroen">Seenergie Citroen</option>
                        <option value="Seenergie/Peugeot">Seenergie/Peugeot</option>
                        <option value="Selva">Selva</option>
                        <option value="Solé">Solé</option>
                        <option value="Steyr">Steyr</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Suzuki DF 2">Suzuki DF 2</option>
                        <option value="Taidong">Taidong</option>
                        <option value="Thornycroft">Thornycroft</option>
                        <option value="Tohatsu">Tohatsu</option>
                        <option value="Torqeedo">Torqeedo</option>
                        <option value="V-P">V-P</option>
                        <option value="Valmet 420 DSM Finnland">Valmet 420 DSM Finnland</option>
                        <option value="Vetus">Vetus</option>
                        <option value="Vetus - Peugeot">Vetus - Peugeot</option>
                        <option value="Vetus Deutz">Vetus Deutz</option>
                        <option value="Vire">Vire</option>
                        <option value="Volkswagen Marine">Volkswagen Marine</option>
                        <option value="Volvo">Volvo</option>
                        <option value="Volvo Penta">Volvo Penta</option>
                        <option value="Volvo-Perkins">Volvo-Perkins</option>
                        <option value="VP">VP</option>
                        <option value="VW">VW</option>
                        <option value="Wartburg">Wartburg</option>
                        <option value="Watermota">Watermota</option>
                        <option value="westebeke">westebeke</option>
                        <option value="Wickman 4L">Wickman 4L</option>
                        <option value="Yamaha">Yamaha</option>
                        <option value="Yanmar">Yanmar</option>
                   </select>
                <label for="powertrain">Powertrain</label><span class="hint"></span>
              
                    <select class="css_input" name="powertrain"> 
                        <option value="IPS/POD-Drive">IPS/POD-Drive</option>
                        <option value="Jet-Drive">Jet-Drive</option>
                        <option value="S-Drive">S-Drive</option>
                        <option value="Shaft driven">Shaft driven</option>
                        <option value="Z-Drive">Z-Drive</option>
                    </select> 
               <br/>
                   <label for="consumption_type">Consumption-Type</label><span class="hint"></span>
                   
                   <select class="css_input" name="consumption_type"> 
                       <option value="Diesel">Diesel</option>
                       <option value="Electric">Electric</option>
                       <option value="Hybrid">Hybrid</option>
                       <option value="Natural gas">Natural gas</option>
                       <option value="Petrol">Petrol</option>
                    </select>
                   <br/>
                    <label for="propeller_type">Propeller-Type</label><span class="hint"></span>
                   
                    <select class="css_input" name="propeller_type">
                       <option value="1">2-Leaf</option>
                       <option value="2">3-Leaf</option>
                       <option value="3">4-Leaf</option>
                       <option value="4">5-Leaf</option>
                       <option value="7">Adjustable propeller</option>
                       <option value="6">Foldpropeller</option>
                       <option value="8">Others</option>
                       <option value="5">Swing</option>
                    </select>   
          
           </div>
            <br/><br/><br/>
           <div class="span-6" align="center">
               
                          <label>Type</label><span class="hint"></span>
          <br/>
                 <div class="btn-group btn-toggle" data-toggle="buttons">
                     <label class="btn1 btn btn-default"><input id="CockPitInside" class="button1" name="pos_cokpit" value="inside" type="radio"/>Inboard</label>
                     <label class="btn2 btn btn-default"><input id="CockPitOutside" class="button2" name="pos_cokpit" value="outside" type="radio"/>Outboard</label>
                 </div>
          <br/>
           <label>Position</label><span class="hint"></span>
           <br/>
                 <div class="btn-group btn-toggle" data-toggle="buttons">
                     <label class="btn1 btn btn-default"><input id="CockPitInside" class="button1" name="pos_cokpit" value="inside" type="radio"/>Front</label>
                     <label class="btn2 btn btn-default"><input id="CockPitOutside" class="button2" name="pos_cokpit" value="outside" type="radio"/>Rear</label>
                 </div>
           <br/> 
          <label>Cooling system</label><span class="hint"></span>
          <br/>
                 <div class="btn-group btn-toggle" data-toggle="buttons">
                     <label class="btn1 btn btn-default"><input id="CockPitInside" class="button1" name="pos_cokpit" value="inside" type="radio"/>One circuit</label>
                     <label class="btn2 btn btn-default"><input id="CockPitOutside" class="button2" name="pos_cokpit" value="outside" type="radio"/>Two circuits</label>
                 </div>
               
              </div>
            </div>
         
           <br/>
        </div>
               
          <hr>    
        <div class="span-8" align="left">
                           <h2 align="left">Details about the cockpit</h2>
                               <br/>
                                <label>Steering</label><span class="hint"></span>
                                <select class="css_input" name="steering">      
                                        <option value=""></option>
                                        <option value=""</option>
                                </select>
                                <br/>
         <label>Position of the cockpit</label><span class="hint"></span>
 <div class="btn-group btn-toggle" data-toggle="buttons">
    <label class="btn1 btn btn-default"><input id="CockPitInside" class="button1" name="pos_cokpit" value="inside" type="radio"/>Inside</label>
    <label class="btn2 btn btn-default"><input id="CockPitOutside" class="button2" name="pos_cokpit" value="outside" type="radio"/>Outside</label>
 </div>
         </div> 
          
           <h2 align="left">Capacity</h2>
                   </br>
                       <div class="span-6">
                                <label for="fresh_water">Fresh Water</label><span class="hint"></span>
                 <br/>
                     <div contenteditable="true" id="div_freshwater" class="css_input3" dimension="fresh_water" data-ph="0"></div>
                     <div class="css_input_m">L</div>
                     <input id="fresh_water" name="fresh_water" type="hidden" value="0"/>
            </div>
             <div class="span-6">
                     <label for="grey_water">Grey water tank</label><span class="hint"></span>
                 <br/>
                     <div contenteditable="true" id="div_greywater" class="css_input3" dimension="grey_water" data-ph="0"></div>
                     <div class="css_input_m">L</div>
                     <input id="grey_water" name="grey_water" type="hidden" value="0"/>
            </div>
              <div class="span-23 errorForsteps">

                    </div>

                    <!-- end - right column -->
                    <div class="step-nav span-24 last">
                         <br/>  <br/> 
                        <div class="next-step last">
                            <input class="button" id="next-step-job-detail" name="commit" type="submit" value="Next Step: Boat Details &gt;&gt;" />
                        </div>
                    </div>
                </div>
            </div>

        </form></div>


</div>