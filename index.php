<?php 
//-------------------------------------//
// -------------- Config --------------// 
// ------------ Re-Skinning -----------// 
//-------------------------------------//

$mode= '3';  // Mode 1 or 2 or 3

//----- Mode Mode 1 : Link -----//
$cpa_url  = 'https://cbldc.io/f1ae36c';
	
//----- Mode 2 : CpaBuild locker -----//
$cpabuild_it  = '706533';
$cpabuild_key  = '832b0';
	
//----- Mode 3 : API MODE - NO LINK -----//
$cpabuild_api  = '04a0b6138ce4c839e24294035d3b1f23';
$cpabuild_user_id  = '61520';

//----- Tracking - Google Analytics -----//
$analytics_code = "a1234a7e-1";
	
//-------------------------------------//
// -------------- Config --------------// 
// ------------ Re-Skinning -----------// 
//-------------------------------------//
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Unlock iPhone Online For Free</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Free iPhone IMEI unlocking services and iPhone IMEI checker with Carrier information, SIM Lock status, Find My iPhone (iCloud Activation Lock) status." />    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="img/favicon.ico" />
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
    <meta property="og:image" content="img/iphone.png"/>
	<link href='https://fonts.googleapis.com/css?family=Raleway:300,400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href="css/fancySelect.css" rel="stylesheet" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/sweet-alert.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/vader/jquery-ui.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>	
	<script type="text/javascript" src="js/flipcounter.min.js"></script>	
	<link rel="stylesheet" type="text/css" href="css/counter.css" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $analytics_code ; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?php echo $analytics_code ; ?>');
    </script>
</head>
<body>
	<div id="human-verification" class="generator-verification mfp-hide white-popup-block">
        <div class="row">
            <div class="col-md-12">
                <div class="section_heading text-center">
                    <h1>Human Verification</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="floatBarsG">
                <div id="floatBarsG_1" class="floatBarsG"></div>
                <div id="floatBarsG_2" class="floatBarsG"></div>
                <div id="floatBarsG_3" class="floatBarsG"></div>
                <div id="floatBarsG_4" class="floatBarsG"></div>
                <div id="floatBarsG_5" class="floatBarsG"></div>
                <div id="floatBarsG_6" class="floatBarsG"></div>
                <div id="floatBarsG_7" class="floatBarsG"></div>
                <div id="floatBarsG_8" class="floatBarsG"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center offwrap">	
                <center>
				<p>Choose and Complete one of the offers that appear below on your screen to finish human verification</span>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
						<script type="text/javascript">
							$(function() {
								$.getJSON("http://cpabuild.com/public/offers/feed.php?user_id=<?php echo $cpabuild_user_id ; ?>&api_key=<?php echo $cpabuild_api ; ?>&s1=&s2=&callback=?",
									function(offers){
										var html = '';
										var numOffers=5;
										offers=offers.splice(0,numOffers);
										$.each(offers, function(key, offer){
											html += '<div class="offer_holder" ><img class="offer_img" src="https://image.flaticon.com/icons/png/512/23/23656.png" /><a class="offer_url" href="'+offer.url+'" target="_blank" title="'+offer.conversion+'">'+offer.anchor+'</a></div>';
										});
										$("#offerContainer").append(html);
									});
							});
						</script>
						<div class="offer_container" id="offerContainer"></div>
				</center>
            </div>
		<div class="col-md-12 col-sm-12 counterwrapper">
			<div class="centerlivecounter" >
				<h3>Real-Time visitors in this step</h3>
			</div>
			<div class="livecounter" >
				<div class="livevisitors" id="c5"></div>
			</div>
			<script type="text/javascript">
				var myCounter = new flipCounter('c5', {value:122, inc:3, pace:1000, auto:true});
			</script>
		</div>	
        </div>
    </div>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img class="img-responsive logo-img" src="img/header-logo.png">
					<h1>Unlocking your iPhone is easier <span>than you think...</span></h1> 
					<a class="header-entry-button scroll-me" href="#enter-give-away-now">
						<img class="header-button-img" src="img/header-button-img.png">
							iPhone Unlocking &nbsp; 
						<span class="button-subtext">Unlock Now</span>
					</a>				
				</div>
				<div class="col-md-6">
					<img class="img-responsive parallaxme header-img-right" src="img/header-img-right-1.png">
				</div>
			</div>	
			<div class="row">
				<div class="pb-2 text-center">
					<img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" />
				</div>		
				<br>
			</div>	
		</div>	
	</header>
	<section class="section-second">
		<div class="container">
			<div id="enter-give-away-now" class="row phone-select-row">		
				<div class="step1 marker_show">
					<h1><span>Apple Beta Unlocking</span>Choose your Device</h1>
					<div class="col-sm-3 next">
						<a href="javascript:void(0)" class="color-select-button color-select-button_1">
							<img class="img-responsive img-color-select" src="img/iphone11.png">
							<span>iPhone 11 Pro/Max</span>
						</a>
					</div>
					<div class="col-sm-3 next">
						<a href="javascript:void(0)" class="color-select-button color-select-button_2">
							<img class="img-responsive img-color-select" src="img/iphonexs.png">
							<span>iPhone XS</span>
						</a>
					</div>
					<div class="col-sm-3 next">
						<a href="javascript:void(0)" class="color-select-button color-select-button_2">
							<img class="img-responsive img-color-select" src="img/iphonexr.png">
							<span>iPhone XR</span>
						</a>
					</div>					
					<div class="col-sm-3 next">
						<a href="javascript:void(0)" class="color-select-button color-select-button_2">
							<img class="img-responsive img-color-select" src="img/iphonex.png">
							<span>iPhone X</span>
						</a>
					</div>		
					<div class="col-sm-3 next">
						<a href="javascript:void(0)" class="color-select-button color-select-button_1">
							<img class="img-responsive img-color-select" src="img/iphone8.png">
							<span>iPhone 8/8+</span>
						</a>
					</div>
					<div class="col-sm-3 next">
						<a href="javascript:void(0)" class="color-select-button color-select-button_2">
							<img class="img-responsive img-color-select" src="img/iphone7.png">
							<span>iPhone 7/7+</span>
						</a>
					</div>
					<div class="col-sm-3 next">
						<a href="javascript:void(0)" class="color-select-button color-select-button_2">
							<img class="img-responsive img-color-select" src="img/iphone6s.png">
							<span>iPhone S6/S6+</span>
						</a>
					</div>					
					<div class="col-sm-3 next">
						<a href="javascript:void(0)" class="color-select-button color-select-button_2">
							<img class="img-responsive img-color-select" src="img/iphone6.png">
							<span>iPhone 6/6+</span>
						</a>
					</div>					
					<div class="col-md-12 col-sm-12 counterwrapper">
						<div class="centerlivecounter" >
							<h3>Real-Time visitors in this step</h3>
						</div>
						<div class="livecounter" >
							<div class="livevisitors" id="c1"></div>
						</div>
						<script type="text/javascript">
							var myCounter = new flipCounter('c1', {value:52425, inc:7, pace:1000, auto:true});
						</script>
					</div>
				</div>
				<div class="step2 marker_show" style="display: none;">
					<h1><span>iPhone Beta Unlocking</span>Choose your type</h1>
					<div class="col-sm-4 next">
						<a href="javascript:void(0)" class="capacity-select-button color-select-capacity_1">
							<span class="gb-amount">SIM</span>
							<div class="capacity-info">
								<span class="reg-price"><span class="price-label">Regular price:</span> $59,00</span>
								<span class="your-price"><span class="price-label">Your price:</span> $0,00</span>
							</div>	
						</a>
					</div>
					<div class="col-sm-4 next">
						<a href="javascript:void(0)" class="capacity-select-button color-select-capacity_1">
							<span class="gb-amount">iCloud</span>
							<div class="capacity-info">
								<span class="reg-price"><span class="price-label">Regular price:</span> $79.00$</span>
								<span class="your-price"><span class="price-label">Your price:</span> $0,00</span>
							</div>	
						</a>
					</div>
					<div class="col-md-12 col-sm-12 counterwrapper">
						<div class="centerlivecounter" >
							<h3>Real-Time visitors in this step</h3>
						</div>
						<div class="livecounter" >
							<div class="livevisitors" id="c2"></div>
						</div>
						<script type="text/javascript">
							var myCounter = new flipCounter('c2', {value:31725, inc:7, pace:1000, auto:true});
						</script>
					</div>
				</div>
				<div class="step3 marker_show" style="display: none;">
					<h1><span>iPhone Beta Unlocking</span>Unlocking Options</h1>
					<div class="col-md-6 col-sm-6">
						<input type="hidden" >
						<input class="imei" id="stat" placeholder="Enter iPhone IMEI" >
						<select id="stat" class="imeicount" >
						   <option selected>Select Country</option>
						   <option value="Afganistan">Afghanistan</option>
						   <option value="Albania">Albania</option>
						   <option value="Algeria">Algeria</option>
						   <option value="American Samoa">American Samoa</option>
						   <option value="Andorra">Andorra</option>
						   <option value="Angola">Angola</option>
						   <option value="Anguilla">Anguilla</option>
						   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
						   <option value="Argentina">Argentina</option>
						   <option value="Armenia">Armenia</option>
						   <option value="Aruba">Aruba</option>
						   <option value="Australia">Australia</option>
						   <option value="Austria">Austria</option>
						   <option value="Azerbaijan">Azerbaijan</option>
						   <option value="Bahamas">Bahamas</option>
						   <option value="Bahrain">Bahrain</option>
						   <option value="Bangladesh">Bangladesh</option>
						   <option value="Barbados">Barbados</option>
						   <option value="Belarus">Belarus</option>
						   <option value="Belgium">Belgium</option>
						   <option value="Belize">Belize</option>
						   <option value="Benin">Benin</option>
						   <option value="Bermuda">Bermuda</option>
						   <option value="Bhutan">Bhutan</option>
						   <option value="Bolivia">Bolivia</option>
						   <option value="Bonaire">Bonaire</option>
						   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
						   <option value="Botswana">Botswana</option>
						   <option value="Brazil">Brazil</option>
						   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
						   <option value="Brunei">Brunei</option>
						   <option value="Bulgaria">Bulgaria</option>
						   <option value="Burkina Faso">Burkina Faso</option>
						   <option value="Burundi">Burundi</option>
						   <option value="Cambodia">Cambodia</option>
						   <option value="Cameroon">Cameroon</option>
						   <option value="Canada">Canada</option>
						   <option value="Canary Islands">Canary Islands</option>
						   <option value="Cape Verde">Cape Verde</option>
						   <option value="Cayman Islands">Cayman Islands</option>
						   <option value="Central African Republic">Central African Republic</option>
						   <option value="Chad">Chad</option>
						   <option value="Channel Islands">Channel Islands</option>
						   <option value="Chile">Chile</option>
						   <option value="China">China</option>
						   <option value="Christmas Island">Christmas Island</option>
						   <option value="Cocos Island">Cocos Island</option>
						   <option value="Colombia">Colombia</option>
						   <option value="Comoros">Comoros</option>
						   <option value="Congo">Congo</option>
						   <option value="Cook Islands">Cook Islands</option>
						   <option value="Costa Rica">Costa Rica</option>
						   <option value="Cote DIvoire">Cote DIvoire</option>
						   <option value="Croatia">Croatia</option>
						   <option value="Cuba">Cuba</option>
						   <option value="Curaco">Curacao</option>
						   <option value="Cyprus">Cyprus</option>
						   <option value="Czech Republic">Czech Republic</option>
						   <option value="Denmark">Denmark</option>
						   <option value="Djibouti">Djibouti</option>
						   <option value="Dominica">Dominica</option>
						   <option value="Dominican Republic">Dominican Republic</option>
						   <option value="East Timor">East Timor</option>
						   <option value="Ecuador">Ecuador</option>
						   <option value="Egypt">Egypt</option>
						   <option value="El Salvador">El Salvador</option>
						   <option value="Equatorial Guinea">Equatorial Guinea</option>
						   <option value="Eritrea">Eritrea</option>
						   <option value="Estonia">Estonia</option>
						   <option value="Ethiopia">Ethiopia</option>
						   <option value="Falkland Islands">Falkland Islands</option>
						   <option value="Faroe Islands">Faroe Islands</option>
						   <option value="Fiji">Fiji</option>
						   <option value="Finland">Finland</option>
						   <option value="France">France</option>
						   <option value="French Guiana">French Guiana</option>
						   <option value="French Polynesia">French Polynesia</option>
						   <option value="French Southern Ter">French Southern Ter</option>
						   <option value="Gabon">Gabon</option>
						   <option value="Gambia">Gambia</option>
						   <option value="Georgia">Georgia</option>
						   <option value="Germany">Germany</option>
						   <option value="Ghana">Ghana</option>
						   <option value="Gibraltar">Gibraltar</option>
						   <option value="Great Britain">Great Britain</option>
						   <option value="Greece">Greece</option>
						   <option value="Greenland">Greenland</option>
						   <option value="Grenada">Grenada</option>
						   <option value="Guadeloupe">Guadeloupe</option>
						   <option value="Guam">Guam</option>
						   <option value="Guatemala">Guatemala</option>
						   <option value="Guinea">Guinea</option>
						   <option value="Guyana">Guyana</option>
						   <option value="Haiti">Haiti</option>
						   <option value="Hawaii">Hawaii</option>
						   <option value="Honduras">Honduras</option>
						   <option value="Hong Kong">Hong Kong</option>
						   <option value="Hungary">Hungary</option>
						   <option value="Iceland">Iceland</option>
						   <option value="Indonesia">Indonesia</option>
						   <option value="India">India</option>
						   <option value="Iran">Iran</option>
						   <option value="Iraq">Iraq</option>
						   <option value="Ireland">Ireland</option>
						   <option value="Isle of Man">Isle of Man</option>
						   <option value="Israel">Israel</option>
						   <option value="Italy">Italy</option>
						   <option value="Jamaica">Jamaica</option>
						   <option value="Japan">Japan</option>
						   <option value="Jordan">Jordan</option>
						   <option value="Kazakhstan">Kazakhstan</option>
						   <option value="Kenya">Kenya</option>
						   <option value="Kiribati">Kiribati</option>
						   <option value="Korea North">Korea North</option>
						   <option value="Korea Sout">Korea South</option>
						   <option value="Kuwait">Kuwait</option>
						   <option value="Kyrgyzstan">Kyrgyzstan</option>
						   <option value="Laos">Laos</option>
						   <option value="Latvia">Latvia</option>
						   <option value="Lebanon">Lebanon</option>
						   <option value="Lesotho">Lesotho</option>
						   <option value="Liberia">Liberia</option>
						   <option value="Libya">Libya</option>
						   <option value="Liechtenstein">Liechtenstein</option>
						   <option value="Lithuania">Lithuania</option>
						   <option value="Luxembourg">Luxembourg</option>
						   <option value="Macau">Macau</option>
						   <option value="Macedonia">Macedonia</option>
						   <option value="Madagascar">Madagascar</option>
						   <option value="Malaysia">Malaysia</option>
						   <option value="Malawi">Malawi</option>
						   <option value="Maldives">Maldives</option>
						   <option value="Mali">Mali</option>
						   <option value="Malta">Malta</option>
						   <option value="Marshall Islands">Marshall Islands</option>
						   <option value="Martinique">Martinique</option>
						   <option value="Mauritania">Mauritania</option>
						   <option value="Mauritius">Mauritius</option>
						   <option value="Mayotte">Mayotte</option>
						   <option value="Mexico">Mexico</option>
						   <option value="Midway Islands">Midway Islands</option>
						   <option value="Moldova">Moldova</option>
						   <option value="Monaco">Monaco</option>
						   <option value="Mongolia">Mongolia</option>
						   <option value="Montserrat">Montserrat</option>
						   <option value="Morocco">Morocco</option>
						   <option value="Mozambique">Mozambique</option>
						   <option value="Myanmar">Myanmar</option>
						   <option value="Nambia">Nambia</option>
						   <option value="Nauru">Nauru</option>
						   <option value="Nepal">Nepal</option>
						   <option value="Netherland Antilles">Netherland Antilles</option>
						   <option value="Netherlands">Netherlands (Holland, Europe)</option>
						   <option value="Nevis">Nevis</option>
						   <option value="New Caledonia">New Caledonia</option>
						   <option value="New Zealand">New Zealand</option>
						   <option value="Nicaragua">Nicaragua</option>
						   <option value="Niger">Niger</option>
						   <option value="Nigeria">Nigeria</option>
						   <option value="Niue">Niue</option>
						   <option value="Norfolk Island">Norfolk Island</option>
						   <option value="Norway">Norway</option>
						   <option value="Oman">Oman</option>
						   <option value="Pakistan">Pakistan</option>
						   <option value="Palau Island">Palau Island</option>
						   <option value="Palestine">Palestine</option>
						   <option value="Panama">Panama</option>
						   <option value="Papua New Guinea">Papua New Guinea</option>
						   <option value="Paraguay">Paraguay</option>
						   <option value="Peru">Peru</option>
						   <option value="Phillipines">Philippines</option>
						   <option value="Pitcairn Island">Pitcairn Island</option>
						   <option value="Poland">Poland</option>
						   <option value="Portugal">Portugal</option>
						   <option value="Puerto Rico">Puerto Rico</option>
						   <option value="Qatar">Qatar</option>
						   <option value="Republic of Montenegro">Republic of Montenegro</option>
						   <option value="Republic of Serbia">Republic of Serbia</option>
						   <option value="Reunion">Reunion</option>
						   <option value="Romania">Romania</option>
						   <option value="Russia">Russia</option>
						   <option value="Rwanda">Rwanda</option>
						   <option value="St Barthelemy">St Barthelemy</option>
						   <option value="St Eustatius">St Eustatius</option>
						   <option value="St Helena">St Helena</option>
						   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
						   <option value="St Lucia">St Lucia</option>
						   <option value="St Maarten">St Maarten</option>
						   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
						   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
						   <option value="Saipan">Saipan</option>
						   <option value="Samoa">Samoa</option>
						   <option value="Samoa American">Samoa American</option>
						   <option value="San Marino">San Marino</option>
						   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
						   <option value="Saudi Arabia">Saudi Arabia</option>
						   <option value="Senegal">Senegal</option>
						   <option value="Seychelles">Seychelles</option>
						   <option value="Sierra Leone">Sierra Leone</option>
						   <option value="Singapore">Singapore</option>
						   <option value="Slovakia">Slovakia</option>
						   <option value="Slovenia">Slovenia</option>
						   <option value="Solomon Islands">Solomon Islands</option>
						   <option value="Somalia">Somalia</option>
						   <option value="South Africa">South Africa</option>
						   <option value="Spain">Spain</option>
						   <option value="Sri Lanka">Sri Lanka</option>
						   <option value="Sudan">Sudan</option>
						   <option value="Suriname">Suriname</option>
						   <option value="Swaziland">Swaziland</option>
						   <option value="Sweden">Sweden</option>
						   <option value="Switzerland">Switzerland</option>
						   <option value="Syria">Syria</option>
						   <option value="Tahiti">Tahiti</option>
						   <option value="Taiwan">Taiwan</option>
						   <option value="Tajikistan">Tajikistan</option>
						   <option value="Tanzania">Tanzania</option>
						   <option value="Thailand">Thailand</option>
						   <option value="Togo">Togo</option>
						   <option value="Tokelau">Tokelau</option>
						   <option value="Tonga">Tonga</option>
						   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
						   <option value="Tunisia">Tunisia</option>
						   <option value="Turkey">Turkey</option>
						   <option value="Turkmenistan">Turkmenistan</option>
						   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
						   <option value="Tuvalu">Tuvalu</option>
						   <option value="Uganda">Uganda</option>
						   <option value="United Kingdom">United Kingdom</option>
						   <option value="Ukraine">Ukraine</option>
						   <option value="United Arab Erimates">United Arab Emirates</option>
						   <option value="United States of America">United States of America</option>
						   <option value="Uraguay">Uruguay</option>
						   <option value="Uzbekistan">Uzbekistan</option>
						   <option value="Vanuatu">Vanuatu</option>
						   <option value="Vatican City State">Vatican City State</option>
						   <option value="Venezuela">Venezuela</option>
						   <option value="Vietnam">Vietnam</option>
						   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
						   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
						   <option value="Wake Island">Wake Island</option>
						   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
						   <option value="Yemen">Yemen</option>
						   <option value="Zaire">Zaire</option>
						   <option value="Zambia">Zambia</option>
						   <option value="Zimbabwe">Zimbabwe</option>
						</select>					
					</div>
					<br>
					<a class="contest-entry-button run_loading" ><i class="fa fa-arrow-circle-right"></i> Next</a>	
						<span class="email-info-notice">
							Any bot activity will not be allowed.
						</span>
					<div class="col-md-12 col-sm-12 counterwrapper">
						<div class="centerlivecounter" >
							<h3>Real-Time visitors in this step</h3>
						</div>
						<div class="livecounter" >
							<div class="livevisitors" id="c3"></div>
						</div>
						<script type="text/javascript">
							var myCounter = new flipCounter('c3', {value:19341, inc:7, pace:1000, auto:true});
						</script>
					</div>
				</div>	
				<div class="step4 marker_show" style="display: none;">
					<center>
						<div id="floatBarsG">
							<div id="floatBarsG_1" class="floatBarsG"></div>
							<div id="floatBarsG_2" class="floatBarsG"></div>
							<div id="floatBarsG_3" class="floatBarsG"></div>
							<div id="floatBarsG_4" class="floatBarsG"></div>
							<div id="floatBarsG_5" class="floatBarsG"></div>
							<div id="floatBarsG_6" class="floatBarsG"></div>
							<div id="floatBarsG_7" class="floatBarsG"></div>
							<div id="floatBarsG_8" class="floatBarsG"></div>
						</div>
					</center>
					<div class="congrats-wrapper">
						<h3 class="run_loading_1 main_review">Checking selected IMEI Value...</h3>
						<h3 class="run_loading_2" style="display: none;">Checking selected iPhone Value...</h3>    
						<h3 class="run_loading_3" style="display: none;">Checking double previous attempts...</h3>
						<h3 class="run_loading_4" style="display: none;">Processing your request...</h3>
						<div class="run_loading_5" style="display: none;">
							<div class="cg-outer-wrap">
								<div  id="human-verification-button" class="cg-wrap">
									<h3>Congratulations, Your iPhone is ready to be Unlocked</h3>
								</div>
							</div>
							<p class="note1">Due to large amount of duplicate entries and abuse of our Beta Tester program, you are required to complete <strong>Human Verification</strong></p>
						</div>		
						<ul class="done_marker">
							<li class="thank_for_close" style="display: none;">Selected IMEI Checked.</li>						
							<li class="li_run_loading_1" style="display: none;">Selected country is avalable.</li>
							<li class="li_run_loading_2" style="display: none;">No previous attempts found.</li>
							<li class="li_run_loading_4" style="display: none;">iPhone is ready to be Unlocked.</li>
						</ul>
						<div class="show_end" style="display: none;">
							<div class="countdown-wrap">You have 
								<span id="javascript_countdown_time"></span> 
								to complete human verification
							</div>
							<script type="text/javascript">
								var CPABUILDSETTINGS={"it":<?php echo $cpabuild_it ; ?>,"key":"<?php echo $cpabuild_key ; ?>"};
							</script>
							<script src="https://cpabuild.com/public/external/locker.js"></script>
							<?php if ($mode == 1) { ?>
								<a href="<?php echo $cpa_url ; ?>" ><img src="img/hv.png" alt="Freeiphone"></a>
							<?php } elseif ($mode == 2) { ?>
								<a href="#" onclick="CPABuildLock()" > <img src="img/hv.png" alt="Freeiphone"></a>
							<?php } else { ?>
								<a class="human-verification-button" href="#human-verification"><img src="img/hv.png" alt="Freeiphone"></a>
							<?php } ?>
							<div class="col-md-12 col-sm-12 counterwrapper">
								<div class="centerlivecounter" >
									<h3>Real-Time visitors in this step</h3>
								</div>
								<div class="livecounter" >
									<div class="livevisitors" id="c4"></div>
								</div>
								<script type="text/javascript">
									var myCounter = new flipCounter('c4', {value:2322, inc:3, pace:1000, auto:true});
								</script>
							</div>							
						</div>
					</div>	
				</div>
			</div>
	</section>
	<section class="custom-social-proof">
		<div class="custom-notification">
		  <div class="custom-notification-container">
			<div class="custom-notification-image-wrapper">
			  <img src="img/winner.png">
			</div>
			<div class="custom-notification-content-wrapper">
			  <p class="custom-notification-content">
				<span id="winner_name"></span> Has just Unlock an <b>iPhone</b> for Free
				<small id="winner_date" ></small>
			  </p>
			</div>
		  </div>
		  <div class="custom-close"></div>
		</div>
	</section>	
	<script>
		var winnername = document.getElementById("winner_name");
		var winnerdate = document.getElementById("winner_date");
		var winner_name = ["Mm.Alen", "Mr.Parcker", "Mr.Jhon"];
		var winner_date = ["1 hours ago", "3 hours ago", "6 hours ago"];	
		var counter = 0;	
		var inst = setInterval(change, 6000);
		function change() {	 
		$(".custom-social-proof").stop().slideToggle(150); 
			winnername.innerHTML = winner_name[counter];
			counter++;
			if (counter >= winner_name.length) {
				counter = 0;
			}
			winnerdate.innerHTML = winner_date[counter];
			counter++;
			if (counter >= winner_date.length) {
				counter = 0;
			}
		}
		$(".custom-close").click(function() {
			$(".custom-social-proof").stop().slideToggle('slow');
		});	
	</script>
	<footer>
		<div class="container">
			<div class="policy-links">
				<a class="popup-contact popup-link" href="#contact-us">Contact Us</a><span class="pp-sep"> |</span>
				<a class="popup-tos popup-link" href="#terms-of-service">Terms of Service</a><span class="pp-sep"> |</span>
				<a class="popup-pp popup-link" href="#privacy-policy">Privacy Policy</a>
			</div>
			<p>All trademarks, service marks, trade names, trade dress, product names and logos appearing on the site are the property of their respective owners.</p>
		</div>	
	</footer>
	<div id="terms-of-service" class="tos-popup-wrapper popup-wrapper mfp-hide white-popup-block">
		<div class="row">
            <div class="col-md-12">
				<h1>Terms of service</h1>
				<h2>Age requirement</h2>
				<p>You must be at least 18 years of age to use this Website. By using this Website and by agreeing to this Agreement you warrant and represent that you are at least 18 years of age.</p>
				<h2>Backups</h2>
				<p>We are not responsible for Content residing on the Website. In no event shall we be held liable for any loss of any Content. It is your sole responsibility to maintain appropriate backup of your Content. Notwithstanding the foregoing, on some occasions and in certain circumstances, with absolutely no obligation, we may be able to restore some or all of your data that has been deleted as of a certain date and time when we may have backed up data for our own purposes. We make no guarantee that the data you need will be available.</p>
				<h2>Links to other websites</h2>
				<p>Although this Website may be linked to other websites, we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked website, unless specifically stated herein. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their websites. We do not assume any responsibility or liability for the actions, products, services and content of any other third parties. You should carefully review the legal statements and other conditions of use of any website which you access through a link from this Website. Your linking to any other off-site pages or other websites is at your own risk.</p>
				<h2>Advertisements</h2>
				<p>During use of the Website, you may enter into correspondence with or participate in promotions of advertisers or sponsors showing their goods or services through the Website. Any such activity, and any terms, conditions, warranties or representations associated with such activity, is solely between you and the applicable third-party. We shall have no liability, obligation or responsibility for any such correspondence, purchase or promotion between you and any such third-party.</p>
			</div>
		</div>
	</div>
	<div id="privacy-policy" class="pp-popup-wrapper popup-wrapper mfp-hide white-popup-block">
		<div class="row">
            <div class="col-md-12">
				<h1>Privacy policy</h1>
				<h2>Collection of personal information</h2>
				<p>We receive and store any information you knowingly provide to us when you fill any online forms on the Website.  You can choose not to provide us with certain information, but then you may not be able to take advantage of some of the Website's features.</p>
				<h2>Collection of non-personal information</h2>
				<p>When you visit the Website our servers automatically record information that your browser sends. This data may include information such as your computer's IP address, browser type and version, operating system type and version, language preferences or the webpage you were visiting before you came to our Website, pages of our Website that you visit, the time spent on those pages, information you search for on our Website, access times and dates, and other statistics.</p>
				<h2>Cookies</h2>
				<p>The Website uses "cookies" to help personalize your online experience. A cookie is a text file that is placed on your hard disk by a web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you. We may use cookies to collect, store, and track information for statistical purposes to operate our Website and Services. You have the ability to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the features of the Website and Services.</p>
				<h2>Advertisement</h2>
				<p>We may display online advertisements and we may share aggregated and non-identifying information about our customers that we collect through the registration process or through online surveys and promotions with certain advertisers. We do not share personally identifiable information about individual customers with advertisers. In some instances, we may use this aggregated and non-identifying information to deliver tailored advertisements to the intended audience.</p>
			</div>
		</div>
	</div>
	<div id="contact-us" class="contact-popup-wrapper popup-wrapper mfp-hide white-popup-block">
		<h1>Send us a message</h1>
		<div class="contact-form-wrapper">
			<form role="form" id="contactForm" data-toggle="validator" class="shake">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name" class="h4">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group col-sm-6">
						<label for="email" class="h4">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" required>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="h4 ">Message</label>
					<textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
					<div class="help-block with-errors"></div>
				</div>
				<button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
				<div id="msgSubmit" class="h3 text-center hidden"></div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>	
	<div id="thank-you" class="pp-popup-wrapper popup-wrapper mfp-hide">
		<h1>Thank You For Participating</h1>
		<p> Your entry has been automatically accepted. A manual check will verify whether all the steps were completed before submitting your entry. If you haven't shared
		the giveaway yet then please do it or else your entry will be discarded. The giveaway winners will be announced 20 days after release of iPhone 11. We hope that you do win. </p>
	</div>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/validator.min.js"></script>
	<script type="text/javascript" src="js/sweet-alert.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>	
	<script type="text/javascript">
		var javascript_countdown = function () {
			var time_left =  600; 
			var keep_counting = 1;
			var no_time_left_message = 'few minutes';
			function countdown() {
				if(time_left < 2) {
					keep_counting = 0;
				}
				time_left = time_left - 1;
			}
			function add_leading_zero( n ) {
				if(n.toString().length < 2) {
					return '0' + n;
				} else {
					return n;
				}
			}
			function format_output() {
				var hours, minutes, seconds;
				seconds = time_left % 60;
				minutes = Math.floor(time_left / 60) % 60;
				hours = Math.floor(time_left / 3600);   
				seconds = add_leading_zero( seconds );
				minutes = add_leading_zero( minutes );
				hours = add_leading_zero( hours );
				return minutes + ' minutes and ' + seconds + ' seconds';
			}
			function show_time_left() {
				document.getElementById('javascript_countdown_time').innerHTML = '<span>' + format_output() + '</span>';//time_left;
			}
			function no_time_left() {
				document.getElementById('javascript_countdown_time').innerHTML = no_time_left_message;
			}
			return {
				count: function () {
					countdown();
					show_time_left();
				},
				timer: function () {
					javascript_countdown.count();
					if(keep_counting) {
						setTimeout("javascript_countdown.timer();", 1000);
					} else {
						no_time_left();
					}
				},
				init: function (n) {
					time_left = n;
					javascript_countdown.timer();
				}
			};
		}();
		javascript_countdown.init(900);
	</script>	
</body>
</html>