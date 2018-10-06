@extends('layouts.tanz')

@section('content')

<div class="container">
<div class="row">
                            <div class="col-lg-12"> 
                                         <div style=" margin:0 auto; background-color:#FFF; padding:20px;">  
                                             <img src="text.png">
                                             <h2>Applying for self<br>Muombaji binafsi</h2>
                                           <div class="tab">
	<div class="tab-menu">
		<ul>
		   <li><a href="my_dashboard.aspx" class="active">Back to Dashboard</a></li>
           
			
		</ul>
		<div class="clear"></div>
	</div>
                                                  <div id="regForm">
<div class="tabcon">
              <div style="text-align:center;margin-top:0px;">
                <span class="step active">Step 1<br>
<small>Applicant Details</small></span>
                <span class="step">Step 2<br>
<small>Review &amp; Confirm</small></span>
                <span class="step">Step 3<br>
<small>Payment</small></span>
                <span class="step">Step 4<br>
<small>Confirmation</small></span>
            </div>
    
            </div>
  
     <div class="tab1" style="display: block;">
	 
		   <h2 style="text-align:left; margin-bottom:30px;"><span style="color:#28b24c;"> Applicant Details<br>Maelezo Binafsi</span></h2>   
             <div class="form-width"> 
      <div class="row">
          
        <div class="form-group col-md-12">
             <label>Full name (as per passport)<br>Jina Kamili</label>
            <input name="ctl00$ContentPlaceHolder1$txtfullname" type="text" id="ContentPlaceHolder1_txtfullname" oninput="this.className = ''">
            
        </div> 
      </div>
      <div class="row"> 
        <div class="form-group col-md-12">
            <label>Date of Birth: DD/MM/YYYY<br>Tarehe ya kuzaliwa</label>
          <input name="ctl00$ContentPlaceHolder1$txtdob" type="text" id="ContentPlaceHolder1_txtdob" class="tcal tcalInput" oninput="this.className = ''">
              
        </div>
          <div class="col-md-12 form-group">
              <label>Gender<br>Jinsia</label>
             <select name="ctl00$ContentPlaceHolder1$ddlgender" id="ContentPlaceHolder1_ddlgender" oninput="this.className = ''">
	<option value=""></option>
	<option value="Male">Male/Mme</option>
	<option value="Female">Female/Mke</option>

</select>
              
</div>
          <div class="col-md-12 form-group"> 
              <label>Country of Birth<br>Nchi ya kuzaliwa</label>
             <select name="ctl00$ContentPlaceHolder1$ddlcountry" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlcountry\',\'\')', 0)" id="ContentPlaceHolder1_ddlcountry" oninput="this.className = ''">
	<option selected="selected" value=""></option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="Am. Samoa">Am. Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Antarctica">Antarctica</option>
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
	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana">Botswana</option>
	<option value="Brazil">Brazil</option>
	<option value="British Virgin Islands">British Virgin Islands</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso">Burkina Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic">Central African Republic</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Cote D'Ivoire">Cote D'Ivoire</option>
	<option value="Croatia">Croatia</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands">Falkland Islands</option>
	<option value="Fiji">Fiji</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea">Guinea</option>
	<option value="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Kitts and Nevis">Kitts and Nevis</option>
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
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia</option>
	<option value="Moldova">Moldova</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="Netherlands Antilles">Netherlands Antilles</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="North Korea">North Korea</option>
	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau">Palau</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philiphines">Philiphines</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn Island">Pitcairn Island</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Reunion">Reunion</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="S. Georgia and the S. Sandwich Is.">S. Georgia and the S. Sandwich Is.</option>
	<option value="Saint Lucia">Saint Lucia</option>
	<option value="Saint Pierre and Miquelon ">Saint Pierre and Miquelon </option>
	<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
	<option value="Samoa-American">Samoa-American</option>
	<option value="Samoa-Western">Samoa-Western</option>
	<option value="San Marino">San Marino</option>
	<option value="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="South Korea">South Korea</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States">United States</option>
	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Vatican City">Vatican City</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Vietnam">Vietnam</option>
	<option value="Virgin Islands">Virgin Islands</option>
	<option value="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Western Sahara">Western Sahara</option>
	<option value="Yemen">Yemen</option>
	<option value="Yugoslavia">Yugoslavia</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>

</select>
                </div>
          <div class="col-md-12 form-group">
                 <label>Place of Birth<br>Mahali pa kuzaliwa</label>
             <select name="ctl00$ContentPlaceHolder1$ddlcity" id="ContentPlaceHolder1_ddlcity" oninput="this.className = ''">
	<option value=""></option>

</select>
              
</div>
             
          
           <div class="col-md-12 form-group">
                 <label>Nationality <img src="i.png" title="(i) Unknown; born in any other country other than Tanzania and do not hold any nationality.">
                   <br>Utaifa <img src="i.png" title="(i) Haijulikani; umezaliwa katika nchi nyingine yoyote isipokuwa Tanzania na huna uraia wowote."></label>
          
             <select name="ctl00$ContentPlaceHolder1$ddlnationality" id="ContentPlaceHolder1_ddlnationality" oninput="this.className = ''">
	<option value="Unknown">Unknown (born in any other country other than Tanzania and do not hold any nationality.)</option>
	<option value="Unknown">Haijulikani (umezaliwa katika nchi nyingine yoyote isipokuwa Tanzania na huna uraia wowote.)</option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="Am. Samoa">Am. Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Antarctica">Antarctica</option>
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
	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana">Botswana</option>
	<option value="Brazil">Brazil</option>
	<option value="British Virgin Islands">British Virgin Islands</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso">Burkina Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic">Central African Republic</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Cote D'Ivoire">Cote D'Ivoire</option>
	<option value="Croatia">Croatia</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands">Falkland Islands</option>
	<option value="Fiji">Fiji</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea">Guinea</option>
	<option value="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Kitts and Nevis">Kitts and Nevis</option>
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
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia</option>
	<option value="Moldova">Moldova</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="Netherlands Antilles">Netherlands Antilles</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="North Korea">North Korea</option>
	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau">Palau</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philiphines">Philiphines</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn Island">Pitcairn Island</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Reunion">Reunion</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="S. Georgia and the S. Sandwich Is.">S. Georgia and the S. Sandwich Is.</option>
	<option value="Saint Lucia">Saint Lucia</option>
	<option value="Saint Pierre and Miquelon ">Saint Pierre and Miquelon </option>
	<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
	<option value="Samoa-American">Samoa-American</option>
	<option value="Samoa-Western">Samoa-Western</option>
	<option value="San Marino">San Marino</option>
	<option value="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="South Korea">South Korea</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States">United States</option>
	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Vatican City">Vatican City</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Vietnam">Vietnam</option>
	<option value="Virgin Islands">Virgin Islands</option>
	<option value="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Western Sahara">Western Sahara</option>
	<option value="Yemen">Yemen</option>
	<option value="Yugoslavia">Yugoslavia</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>

</select>
              
</div>
         <div id="ContentPlaceHolder1_UpdatePanel3" style="width:100%;">
	
              <div class="col-md-12 form-group">
                  <label>Do you have Tanzanian Passport?<br>Unayo pasipoti ya Tanzania?</label>
             <select name="ctl00$ContentPlaceHolder1$ddldoyouhavepassport" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddldoyouhavepassport\',\'\')', 0)" id="ContentPlaceHolder1_ddldoyouhavepassport" oninput="this.className = ''">
		<option selected="selected" value=""></option>
		<option value="Yes">Yes/Ndio</option>
		<option value="No">No/Hapana</option>

	</select>
           </div>
          
                  
</div>
            <div class="col-md-12 form-group">
                <label>Father full name (as per passport)<br>Jina kamili la baba mzazi</label>
            <input name="ctl00$ContentPlaceHolder1$txtfathername" type="text" id="ContentPlaceHolder1_txtfathername" oninput="this.className = ''">
            </div>
            <div class="col-md-12 form-group">
                <label>Mother full name (as per passport)<br>Jina kamili la mama mzazi</label>
            <input name="ctl00$ContentPlaceHolder1$txtmothername" type="text" id="ContentPlaceHolder1_txtmothername" oninput="this.className = ''">
              
</div><div class="col-md-4 form-group">
    <label>P.O. Box<br>Sanduku la Posta</label>
            <input name="ctl00$ContentPlaceHolder1$txtpobox" type="text" id="ContentPlaceHolder1_txtpobox" oninput="this.className = ''">
              
</div>
            <div class="col-md-4 form-group">
               <label>Country<br>Nchi</label>
             <select name="ctl00$ContentPlaceHolder1$ddlpocountry" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlpocountry\',\'\')', 0)" id="ContentPlaceHolder1_ddlpocountry" oninput="this.className = ''">
	<option selected="selected" value=""></option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="Am. Samoa">Am. Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Antarctica">Antarctica</option>
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
	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana">Botswana</option>
	<option value="Brazil">Brazil</option>
	<option value="British Virgin Islands">British Virgin Islands</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso">Burkina Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic">Central African Republic</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Cote D'Ivoire">Cote D'Ivoire</option>
	<option value="Croatia">Croatia</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands">Falkland Islands</option>
	<option value="Fiji">Fiji</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea">Guinea</option>
	<option value="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Kitts and Nevis">Kitts and Nevis</option>
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
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia">Micronesia</option>
	<option value="Moldova">Moldova</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="Netherlands Antilles">Netherlands Antilles</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="North Korea">North Korea</option>
	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau">Palau</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philiphines">Philiphines</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn Island">Pitcairn Island</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Reunion">Reunion</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="S. Georgia and the S. Sandwich Is.">S. Georgia and the S. Sandwich Is.</option>
	<option value="Saint Lucia">Saint Lucia</option>
	<option value="Saint Pierre and Miquelon ">Saint Pierre and Miquelon </option>
	<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
	<option value="Samoa-American">Samoa-American</option>
	<option value="Samoa-Western">Samoa-Western</option>
	<option value="San Marino">San Marino</option>
	<option value="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="South Korea">South Korea</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States">United States</option>
	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Vatican City">Vatican City</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Vietnam">Vietnam</option>
	<option value="Virgin Islands">Virgin Islands</option>
	<option value="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Western Sahara">Western Sahara</option>
	<option value="Yemen">Yemen</option>
	<option value="Yugoslavia">Yugoslavia</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>

</select>
              
</div>
          <div class="col-md-4 form-group">
                 <label>City<br>Mahali</label>
             <select name="ctl00$ContentPlaceHolder1$ddlpocity" id="ContentPlaceHolder1_ddlpocity" oninput="this.className = ''">
	<option value=""></option>

</select>
              
</div>
          <div class="col-md-2 form-group">
              <label>Country Code<br>Code ya nchi</label>
              <select name="ctl00$ContentPlaceHolder1$ddlcountrycode" id="ContentPlaceHolder1_ddlcountrycode" oninput="this.className = ''">
	<option value=""></option>
	<option value="+1">+1</option>
	<option value="+1-242">+1-242</option>
	<option value="+1-246">+1-246</option>
	<option value="+1-264">+1-264</option>
	<option value="+1-268">+1-268</option>
	<option value="+1-284">+1-284</option>
	<option value="+1-340">+1-340</option>
	<option value="+1-345">+1-345</option>
	<option value="+1-441">+1-441</option>
	<option value="+1-473">+1-473</option>
	<option value="+1-649">+1-649</option>
	<option value="+1-664">+1-664</option>
	<option value="+1-670">+1-670</option>
	<option value="+1-671">+1-671</option>
	<option value="+1-684">+1-684</option>
	<option value="+1-758">+1-758</option>
	<option value="+1-767">+1-767</option>
	<option value="+1-784">+1-784</option>
	<option value="+1-787">+1-787</option>
	<option value="+1-809">+1-809</option>
	<option value="+1-829">+1-829</option>
	<option value="+1-868">+1-868</option>
	<option value="+1-869">+1-869</option>
	<option value="+1-876">+1-876</option>
	<option value="+1-939">+1-939</option>
	<option value="+20">+20</option>
	<option value="+212">+212</option>
	<option value="+213">+213</option>
	<option value="+216">+216</option>
	<option value="+218">+218</option>
	<option value="+220">+220</option>
	<option value="+221">+221</option>
	<option value="+222">+222</option>
	<option value="+223">+223</option>
	<option value="+224">+224</option>
	<option value="+225">+225</option>
	<option value="+226">+226</option>
	<option value="+227">+227</option>
	<option value="+229">+229</option>
	<option value="+230">+230</option>
	<option value="+231">+231</option>
	<option value="+232">+232</option>
	<option value="+233">+233</option>
	<option value="+234">+234</option>
	<option value="+235">+235</option>
	<option value="+236">+236</option>
	<option value="+237">+237</option>
	<option value="+238">+238</option>
	<option value="+239">+239</option>
	<option value="+240">+240</option>
	<option value="+241">+241</option>
	<option value="+242">+242</option>
	<option value="+243">+243</option>
	<option value="+244">+244</option>
	<option value="+245">+245</option>
	<option value="+248">+248</option>
	<option value="+249">+249</option>
	<option value="+250">+250</option>
	<option value="+251">+251</option>
	<option value="+252">+252</option>
	<option value="+253">+253</option>
	<option value="+254">+254</option>
	<option value="+255">+255</option>
	<option value="+256">+256</option>
	<option value="+257">+257</option>
	<option value="+258">+258</option>
	<option value="+260">+260</option>
	<option value="+261">+261</option>
	<option value="+262">+262</option>
	<option value="+263">+263</option>
	<option value="+264">+264</option>
	<option value="+265">+265</option>
	<option value="+266">+266</option>
	<option value="+267">+267</option>
	<option value="+268">+268</option>
	<option value="+269">+269</option>
	<option value="+27">+27</option>
	<option value="+290">+290</option>
	<option value="+291">+291</option>
	<option value="+297">+297</option>
	<option value="+298">+298</option>
	<option value="+299">+299</option>
	<option value="+30">+30</option>
	<option value="+31">+31</option>
	<option value="+32">+32</option>
	<option value="+33">+33</option>
	<option value="+34">+34</option>
	<option value="+350">+350</option>
	<option value="+351">+351</option>
	<option value="+352">+352</option>
	<option value="+353">+353</option>
	<option value="+354">+354</option>
	<option value="+355">+355</option>
	<option value="+356">+356</option>
	<option value="+357">+357</option>
	<option value="+358">+358</option>
	<option value="+359">+359</option>
	<option value="+36">+36</option>
	<option value="+370">+370</option>
	<option value="+371">+371</option>
	<option value="+372">+372</option>
	<option value="+373">+373</option>
	<option value="+374">+374</option>
	<option value="+375">+375</option>
	<option value="+376">+376</option>
	<option value="+377">+377</option>
	<option value="+378">+378</option>
	<option value="+380">+380</option>
	<option value="+385">+385</option>
	<option value="+386">+386</option>
	<option value="+387">+387</option>
	<option value="+389">+389</option>
	<option value="+39">+39</option>
	<option value="+40">+40</option>
	<option value="+41">+41</option>
	<option value="+418">+418</option>
	<option value="+420">+420</option>
	<option value="+421">+421</option>
	<option value="+423">+423</option>
	<option value="+43">+43</option>
	<option value="+44">+44</option>
	<option value="+45">+45</option>
	<option value="+46">+46</option>
	<option value="+47">+47</option>
	<option value="+48">+48</option>
	<option value="+49">+49</option>
	<option value="+500">+500</option>
	<option value="+501">+501</option>
	<option value="+502">+502</option>
	<option value="+503">+503</option>
	<option value="+504">+504</option>
	<option value="+505">+505</option>
	<option value="+506">+506</option>
	<option value="+507">+507</option>
	<option value="+508">+508</option>
	<option value="+509">+509</option>
	<option value="+51">+51</option>
	<option value="+52">+52</option>
	<option value="+53">+53</option>
	<option value="+54">+54</option>
	<option value="+55">+55</option>
	<option value="+56">+56</option>
	<option value="+57">+57</option>
	<option value="+58">+58</option>
	<option value="+590">+590</option>
	<option value="+591">+591</option>
	<option value="+592">+592</option>
	<option value="+593 ">+593 </option>
	<option value="+594">+594</option>
	<option value="+595">+595</option>
	<option value="+596">+596</option>
	<option value="+597">+597</option>
	<option value="+598">+598</option>
	<option value="+599">+599</option>
	<option value="+60">+60</option>
	<option value="+61">+61</option>
	<option value="+62">+62</option>
	<option value="+63">+63</option>
	<option value="+64">+64</option>
	<option value="+65">+65</option>
	<option value="+66">+66</option>
	<option value="+670">+670</option>
	<option value="+672">+672</option>
	<option value="+673">+673</option>
	<option value="+674">+674</option>
	<option value="+675">+675</option>
	<option value="+676">+676</option>
	<option value="+677">+677</option>
	<option value="+678">+678</option>
	<option value="+679">+679</option>
	<option value="+680">+680</option>
	<option value="+681">+681</option>
	<option value="+682">+682</option>
	<option value="+683">+683</option>
	<option value="+685">+685</option>
	<option value="+686">+686</option>
	<option value="+687">+687</option>
	<option value="+688">+688</option>
	<option value="+689">+689</option>
	<option value="+690">+690</option>
	<option value="+691">+691</option>
	<option value="+692">+692</option>
	<option value="+7">+7</option>
	<option value="+81">+81</option>
	<option value="+82">+82</option>
	<option value="+84">+84</option>
	<option value="+850">+850</option>
	<option value="+852">+852</option>
	<option value="+853">+853</option>
	<option value="+855">+855</option>
	<option value="+856">+856</option>
	<option value="+86">+86</option>
	<option value="+880">+880</option>
	<option value="+886">+886</option>
	<option value="+90">+90</option>
	<option value="+91">+91</option>
	<option value="+92">+92</option>
	<option value="+93">+93</option>
	<option value="+94">+94</option>
	<option value="+95">+95</option>
	<option value="+960">+960</option>
	<option value="+961">+961</option>
	<option value="+962">+962</option>
	<option value="+963">+963</option>
	<option value="+964">+964</option>
	<option value="+965">+965</option>
	<option value="+966">+966</option>
	<option value="+967">+967</option>
	<option value="+968">+968</option>
	<option value="+970">+970</option>
	<option value="+971">+971</option>
	<option value="+972">+972</option>
	<option value="+973">+973</option>
	<option value="+974 ">+974 </option>
	<option value="+975">+975</option>
	<option value="+976">+976</option>
	<option value="+977">+977</option>
	<option value="+98">+98</option>
	<option value="+992">+992</option>
	<option value="+993">+993</option>
	<option value="+994">+994</option>
	<option value="+995">+995</option>
	<option value="+996">+996</option>
	<option value="+998">+998</option>

</select>
              
          </div>
           <div class="col-md-10 form-group">
               <label>Mobile Number<br>Simu ya mkononi</label>
            <input name="ctl00$ContentPlaceHolder1$txtcontactno" type="text" id="ContentPlaceHolder1_txtcontactno" placeholder="e.g: 501234567" onkeypress="return isNumberKey(event)" oninput="this.className = ''">
              
           </div>
          <div class="col-md-12 form-group">
               <label>Email Address<br>Anuani ya barua Pepe</label>
            <input name="ctl00$ContentPlaceHolder1$txtemail" type="text" id="ContentPlaceHolder1_txtemail" oninput="this.className = ''">
          </div>
           <div class="col-md-12 form-group">
               <label>I am requesting for citizenship of Tanzania by 
                   <img src="i.png" title="(i)Birth -  born in Tanzania 
(i)Descent -  my parent was born in Tanzania 
(i)Registration - parent not born in Tanzania and holding Tanzanian passport" alt="(i) born in Tanzania\n(i) my parent was born in Tanzania\n(i) parent not born in Tanzania and holding Tanzanian passport">
                   <br>Mimi naomba Uraia wa Tanzania kwa <img src="i.png" title="(i)Kuzaliwa -  nimezaliwa Tanzania 
(i)Kurithi - mzazi wangu kazaliwa Tanzania 
(i)Tajinisi - mzazi ambaye hajazaliwa Tanzania na kuwa na pasipoti ya Tanzania" alt="(i) born in Tanzania\n(i) my parent was born in Tanzania\n(i) parent not born in Tanzania and holding Tanzanian passport"></label>
             <select name="ctl00$ContentPlaceHolder1$ddlcitizen" id="ContentPlaceHolder1_ddlcitizen" oninput="this.className = ''">
	<option value=""></option>
	<option value="Birth">Birth/Kuzaliwa</option>
	<option value="Descent">Descent/Kurithi</option>
	<option value="Registration">Registration/Tajinisi</option>

</select> 
</div> <div class="col-md-12 form-group">
          <h2 style="text-align:left; margin-bottom:30px;"><span style="color:#28b24c;"> Parent Details<br>Maelezo ya Mzazi</span></h2> 
                    <h4 style="font-size:16px;">Please provide parent's details who is Tanzanian<br>Maelezo ya mzazi mtanzania</h4>
    </div>
                <div class="col-md-12 form-width"> 
      <div class="row">
          <div id="ContentPlaceHolder1_UpdatePanel1" style="width:100%">
	
        <div class="form-group col-md-12">
            <label>Father/Mother<br>Baba/Mama</label>
             <select name="ctl00$ContentPlaceHolder1$ddlrelation" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlrelation\',\'\')', 0)" id="ContentPlaceHolder1_ddlrelation" oninput="this.className = ''">
		<option selected="selected" value=""></option>
		<option value="Father">Father/Baba</option>
		<option value="Mother">Father/Mama</option>

	</select>
        </div> 
          <div class="form-group col-md-12">
              <label>Full name (as per passport)<br>Jina Kamili</label>
            <input name="ctl00$ContentPlaceHolder1$txtgardianfullname" type="text" id="ContentPlaceHolder1_txtgardianfullname" oninput="this.className = ''">             
        </div>

                     <div class="col-md-12 form-group">
                         <label>Country of Birth<br>Nchi ya kuzaliwa</label>
             <select name="ctl00$ContentPlaceHolder1$ddlcountryofbirth_g" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlcountryofbirth_g\',\'\')', 0)" id="ContentPlaceHolder1_ddlcountryofbirth_g" oninput="this.className = ''">
		<option selected="selected" value=""></option>
		<option value="Afghanistan">Afghanistan</option>
		<option value="Albania">Albania</option>
		<option value="Algeria">Algeria</option>
		<option value="Am. Samoa">Am. Samoa</option>
		<option value="Andorra">Andorra</option>
		<option value="Angola">Angola</option>
		<option value="Antarctica">Antarctica</option>
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
		<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
		<option value="Botswana">Botswana</option>
		<option value="Brazil">Brazil</option>
		<option value="British Virgin Islands">British Virgin Islands</option>
		<option value="Brunei">Brunei</option>
		<option value="Bulgaria">Bulgaria</option>
		<option value="Burkina Faso">Burkina Faso</option>
		<option value="Burundi">Burundi</option>
		<option value="Cambodia">Cambodia</option>
		<option value="Cameroon">Cameroon</option>
		<option value="Canada">Canada</option>
		<option value="Cape Verde">Cape Verde</option>
		<option value="Cayman Islands">Cayman Islands</option>
		<option value="Central African Republic">Central African Republic</option>
		<option value="Chile">Chile</option>
		<option value="China">China</option>
		<option value="Christmas Island">Christmas Island</option>
		<option value="Colombia">Colombia</option>
		<option value="Comoros">Comoros</option>
		<option value="Congo">Congo</option>
		<option value="Cook Islands">Cook Islands</option>
		<option value="Costa Rica">Costa Rica</option>
		<option value="Cote D'Ivoire">Cote D'Ivoire</option>
		<option value="Croatia">Croatia</option>
		<option value="Cuba">Cuba</option>
		<option value="Cyprus">Cyprus</option>
		<option value="Czech Republic">Czech Republic</option>
		<option value="Denmark">Denmark</option>
		<option value="Djibouti">Djibouti</option>
		<option value="Dominica">Dominica</option>
		<option value="Dominican Republic">Dominican Republic</option>
		<option value="Ecuador">Ecuador</option>
		<option value="Egypt">Egypt</option>
		<option value="El Salvador">El Salvador</option>
		<option value="Equatorial Guinea">Equatorial Guinea</option>
		<option value="Eritrea">Eritrea</option>
		<option value="Estonia">Estonia</option>
		<option value="Ethiopia">Ethiopia</option>
		<option value="Falkland Islands">Falkland Islands</option>
		<option value="Fiji">Fiji</option>
		<option value="Finland">Finland</option>
		<option value="France">France</option>
		<option value="French Guiana">French Guiana</option>
		<option value="French Polynesia">French Polynesia</option>
		<option value="Gabon">Gabon</option>
		<option value="Gambia">Gambia</option>
		<option value="Georgia">Georgia</option>
		<option value="Germany">Germany</option>
		<option value="Ghana">Ghana</option>
		<option value="Greece">Greece</option>
		<option value="Greenland">Greenland</option>
		<option value="Grenada">Grenada</option>
		<option value="Guadeloupe">Guadeloupe</option>
		<option value="Guam">Guam</option>
		<option value="Guatemala">Guatemala</option>
		<option value="Guinea">Guinea</option>
		<option value="Guinea-Bissau">Guinea-Bissau</option>
		<option value="Guyana">Guyana</option>
		<option value="Haiti">Haiti</option>
		<option value="Honduras">Honduras</option>
		<option value="Hong Kong">Hong Kong</option>
		<option value="Hungary">Hungary</option>
		<option value="Iceland">Iceland</option>
		<option value="India">India</option>
		<option value="Indonesia">Indonesia</option>
		<option value="Iran">Iran</option>
		<option value="Iraq">Iraq</option>
		<option value="Ireland">Ireland</option>
		<option value="Israel">Israel</option>
		<option value="Italy">Italy</option>
		<option value="Jamaica">Jamaica</option>
		<option value="Japan">Japan</option>
		<option value="Jordan">Jordan</option>
		<option value="Kazakhstan">Kazakhstan</option>
		<option value="Kenya">Kenya</option>
		<option value="Kiribati">Kiribati</option>
		<option value="Kitts and Nevis">Kitts and Nevis</option>
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
		<option value="Malawi">Malawi</option>
		<option value="Malaysia">Malaysia</option>
		<option value="Maldives">Maldives</option>
		<option value="Mali">Mali</option>
		<option value="Malta">Malta</option>
		<option value="Marshall Islands">Marshall Islands</option>
		<option value="Martinique">Martinique</option>
		<option value="Mauritania">Mauritania</option>
		<option value="Mauritius">Mauritius</option>
		<option value="Mayotte">Mayotte</option>
		<option value="Mexico">Mexico</option>
		<option value="Micronesia">Micronesia</option>
		<option value="Moldova">Moldova</option>
		<option value="Mongolia">Mongolia</option>
		<option value="Montserrat">Montserrat</option>
		<option value="Morocco">Morocco</option>
		<option value="Mozambique">Mozambique</option>
		<option value="Myanmar">Myanmar</option>
		<option value="Namibia">Namibia</option>
		<option value="Nauru">Nauru</option>
		<option value="Nepal">Nepal</option>
		<option value="Netherlands">Netherlands</option>
		<option value="Netherlands Antilles">Netherlands Antilles</option>
		<option value="New Caledonia">New Caledonia</option>
		<option value="New Zealand">New Zealand</option>
		<option value="Nicaragua">Nicaragua</option>
		<option value="Niger">Niger</option>
		<option value="Nigeria">Nigeria</option>
		<option value="Niue">Niue</option>
		<option value="North Korea">North Korea</option>
		<option value="Northern Mariana Islands">Northern Mariana Islands</option>
		<option value="Norway">Norway</option>
		<option value="Oman">Oman</option>
		<option value="Pakistan">Pakistan</option>
		<option value="Palau">Palau</option>
		<option value="Panama">Panama</option>
		<option value="Papua New Guinea">Papua New Guinea</option>
		<option value="Paraguay">Paraguay</option>
		<option value="Peru">Peru</option>
		<option value="Philiphines">Philiphines</option>
		<option value="Philippines">Philippines</option>
		<option value="Pitcairn Island">Pitcairn Island</option>
		<option value="Poland">Poland</option>
		<option value="Portugal">Portugal</option>
		<option value="Puerto Rico">Puerto Rico</option>
		<option value="Qatar">Qatar</option>
		<option value="Reunion">Reunion</option>
		<option value="Romania">Romania</option>
		<option value="Russia">Russia</option>
		<option value="Rwanda">Rwanda</option>
		<option value="S. Georgia and the S. Sandwich Is.">S. Georgia and the S. Sandwich Is.</option>
		<option value="Saint Lucia">Saint Lucia</option>
		<option value="Saint Pierre and Miquelon ">Saint Pierre and Miquelon </option>
		<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
		<option value="Samoa-American">Samoa-American</option>
		<option value="Samoa-Western">Samoa-Western</option>
		<option value="San Marino">San Marino</option>
		<option value="Sao Tome and Principe">Sao Tome and Principe</option>
		<option value="Saudi Arabia">Saudi Arabia</option>
		<option value="Seychelles">Seychelles</option>
		<option value="Singapore">Singapore</option>
		<option value="Slovakia">Slovakia</option>
		<option value="Slovenia">Slovenia</option>
		<option value="Solomon Islands">Solomon Islands</option>
		<option value="Somalia">Somalia</option>
		<option value="South Africa">South Africa</option>
		<option value="South Korea">South Korea</option>
		<option value="Spain">Spain</option>
		<option value="Sri Lanka">Sri Lanka</option>
		<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
		<option value="Sweden">Sweden</option>
		<option value="Switzerland">Switzerland</option>
		<option value="Syria">Syria</option>
		<option value="Syrian Arab Republic">Syrian Arab Republic</option>
		<option value="Taiwan">Taiwan</option>
		<option value="Tajikistan">Tajikistan</option>
		<option value="Tanzania">Tanzania</option>
		<option value="Thailand">Thailand</option>
		<option value="Togo">Togo</option>
		<option value="Tokelau">Tokelau</option>
		<option value="Tonga">Tonga</option>
		<option value="Trinidad and Tobago">Trinidad and Tobago</option>
		<option value="Tunisia">Tunisia</option>
		<option value="Turkey">Turkey</option>
		<option value="Turkmenistan">Turkmenistan</option>
		<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
		<option value="Tuvalu">Tuvalu</option>
		<option value="Uganda">Uganda</option>
		<option value="United Arab Emirates">United Arab Emirates</option>
		<option value="United Kingdom">United Kingdom</option>
		<option value="United States">United States</option>
		<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
		<option value="Uruguay">Uruguay</option>
		<option value="Uzbekistan">Uzbekistan</option>
		<option value="Vanuatu">Vanuatu</option>
		<option value="Vatican City">Vatican City</option>
		<option value="Venezuela">Venezuela</option>
		<option value="Vietnam">Vietnam</option>
		<option value="Virgin Islands">Virgin Islands</option>
		<option value="Wallis and Futuna">Wallis and Futuna</option>
		<option value="Western Sahara">Western Sahara</option>
		<option value="Yemen">Yemen</option>
		<option value="Yugoslavia">Yugoslavia</option>
		<option value="Zambia">Zambia</option>
		<option value="Zimbabwe">Zimbabwe</option>

	</select>
              
</div>
           <div class="col-md-12 form-group">
               <label>City of Birth<br>Mahali pa kuzaliwa</label>
             <select name="ctl00$ContentPlaceHolder1$ddlcityofbirth_g" id="ContentPlaceHolder1_ddlcityofbirth_g" oninput="this.className = ''">
		<option value=""></option>

	</select>
              
</div>
          
</div>
          <div class="form-group col-md-12">
              <label>Date of Birth: DD/MM/YYYY<br>Tarehe ya kuzaliwa</label>
            <input name="ctl00$ContentPlaceHolder1$txtgardiandob" type="text" id="ContentPlaceHolder1_txtgardiandob" class="tcal tcalInput" oninput="this.className = ''">             
        </div>
           <div class="form-group col-md-12">
               <label>Passport Number<br>namba ya pasipoti</label>
            <input name="ctl00$ContentPlaceHolder1$txtgardianpassportno" type="text" id="ContentPlaceHolder1_txtgardianpassportno" oninput="this.className = ''">             
        </div> <div class="form-group col-md-12">
                 <label>Date of Issue: DD/MM/YYYY<br>Tarehe ya kutolewa</label>
            <input name="ctl00$ContentPlaceHolder1$txtgardiandateofissue" type="text" id="ContentPlaceHolder1_txtgardiandateofissue" class="tcal tcalInput" oninput="this.className = ''">             
        </div>
           
            <div id="ContentPlaceHolder1_UpdatePanel2" style="width:100%">
	
        <div class="form-group col-md-12">
            <label>Issuing Authority<br>Mamlaka iliyotoa</label>
             <select name="ctl00$ContentPlaceHolder1$ddlissuingauthority" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlissuingauthority\',\'\')', 0)" id="ContentPlaceHolder1_ddlissuingauthority" oninput="this.className = ''">
		<option selected="selected" value=""></option>
		<option value="Dar Es Salam">Dar Es Salam</option>
		<option value="Zanzibar">Zanzibar</option>

	</select>
            </div>
           <div class="form-group col-md-12">
               <label>File number <img src="i.png" alt="the file number can be found on the last or 2nd last page of the parent's Tanzanian passport. The number is hand written." title="the file number can be found on the last or 2nd last page of the parent's Tanzanian passport. The number is hand written.">
                   <br>namba ya faili <img src="i.png" alt="namba ya faili inaweza kupatikana kwenye ukurasa wa mwisho au kabla wa mwisho wa pasipoti ya mzazi. Namba imeandikwa kwa mkono." title="namba ya faili inaweza kupatikana kwenye ukurasa wa mwisho au kabla wa mwisho wa pasipoti ya mzazi. Namba imeandikwa kwa mkono."></label>
          <input name="ctl00$ContentPlaceHolder1$txtfileno" type="text" id="ContentPlaceHolder1_txtfileno" oninput="this.className = ''">
            </div>
          
</div>
            
      </div>
            </div>
      </div>
      
      
     
    </div>                         
	 
</div>
               
             <div class="tab1">
               <h2 style="text-align:left; margin-bottom:30px;"><span style="color:#28b24c;"> Review &amp; Check Disclaimer</span></h2> 
                    <h4>Applicant Details<br>Maelezo Binafsi</h4>
                 
                <div class="form-width"> 
      <div class="row"> 
        <div class="form-group col-md-6">
            <b>Applicant full name (as per passport)/Jina Kamili:</b>
            <br>
            <span id="ContentPlaceHolder1_lblfullname">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>Date of Birth/Tarehe ya kuzaliwa: DD/MM/YYYY:</b>
            <br>
            <span id="ContentPlaceHolder1_lbldob">Label</span>
            </div>
            <div class="form-group col-md-6">
            <b>Gender/Jinsia:</b>
            <br>
            <span id="ContentPlaceHolder1_lblgender">Label</span>
            </div>
           <div class="form-group col-md-6">
            <b>Country of Birth/Nchi ya kuzaliwa:</b>
            <br>
            <span id="ContentPlaceHolder1_lblcountryofbirth">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>Place of Birth/Mahali pa kuzaliwa:</b>
            <br>
            <span id="ContentPlaceHolder1_lblcityofbirth">Label</span>
            </div>
         
           <div class="form-group col-md-6">
            <b>Nationality/Utaifa:</b>
            <br>
            <span id="ContentPlaceHolder1_lblnationality">Label</span>
            </div>
           <div class="form-group col-md-6">
            <b>Passport Number/namba ya pasipoti:</b>
            <br>
            <span id="ContentPlaceHolder1_lblpassportnumber">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>Country of Issue/Nchi iliyotolewa:</b>
            <br>
            <span id="ContentPlaceHolder1_lblcountryofissue_a">Label</span>
            </div>
            <div class="form-group col-md-6">
            <b>Place of Issue/Mamlaka iliyotoa:</b>
            <br>
            <span id="ContentPlaceHolder1_lblplaceofissue_a">Label</span>
            </div>
           <div class="form-group col-md-6">
            <b>Date of Issue/Tarehe ya kutolewa:</b>
            <br>
            <span id="ContentPlaceHolder1_lbldateofissue_a">Label</span>
            </div>
           <div class="form-group col-md-6">
            <b>Date of Expiry/Mwisho wa matumizi:</b>
            <br>
            <span id="ContentPlaceHolder1_lbldateofexpiry_a">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>Father full name (as per passport)/Jina kamili la baba mzazi:</b>
            <br>
            <span id="ContentPlaceHolder1_lblfathername">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>Mother full name (as per passport)/Jina kamili la mama mzazi:</b>
            <br>
            <span id="ContentPlaceHolder1_lblmothername">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>P.O. Box/Sanduku la Posta:</b>
            <br>
            <span id="ContentPlaceHolder1_lblbobox">Label</span>
            </div>
         <div class="form-group col-md-6">
            <b>Country/Nchi:</b>
            <br>
            <span id="ContentPlaceHolder1_lblpocountry">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>City/Mahali:</b>
            <br>
            <span id="ContentPlaceHolder1_lblpocity">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>Mobile Number/Simu ya mkononi:</b>
            <br>
            <span id="ContentPlaceHolder1_lblcontactno">Label</span>
            </div>
           <div class="form-group col-md-6">
            <b>Email Address/Anuani ya barua Pepe:</b>
            <br>
            <span id="ContentPlaceHolder1_lblemail">Label</span>
            </div>
            
           <div class="form-group col-md-6">
            <b>I am requesting for citizenship of Tanzania by/Mimi naomba Uraia wa Tanzania kwa:</b>
            <br>
            <span id="ContentPlaceHolder1_lblcitizenby">Label</span>
            </div>
          </div>
        </div> 
                
                   <h4>Parent Details<br>Maelezo ya Mzazi</h4>
                <div class="form-width"> 
      <div class="row"> 
        <div class="form-group col-md-6">
            <b>Parent, Tanzanian National/mzazi mtanzania:</b>
            <br>
            <span id="ContentPlaceHolder1_lblgardian">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>Full name (as per passport)/Jina Kamili:</b>
            <br>
            <span id="ContentPlaceHolder1_lblgardianname">Label</span>
            </div>
            <div class="form-group col-md-6">
            <b>Country of Birth/Nchi ya kuzaliwa:</b>
            <br>
            <span id="ContentPlaceHolder1_lblbcountryofbirth_g">Label</span>
            </div>
           <div class="form-group col-md-6">
            <b>City of Birth<br>Mahali pa kuzaliwa:</b>
            <br>
            <span id="ContentPlaceHolder1_lblcityofbirth_g">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>Date of Birth/Tarehe ya kuzaliwa: DD/MM/YYYY/:</b>
            <br>
            <span id="ContentPlaceHolder1_lblgardiandob">Label</span>
            </div>
          <div class="form-group col-md-6">
            <b>Passport Number/namba ya pasipoti:</b>
            <br>
            <span id="ContentPlaceHolder1_lblpassportno">Label</span>
            </div>
          
          <div class="form-group col-md-6">
            <b>Date of Issue/Tarehe ya kutolewa: DD/MM/YYYY:</b>
            <br>
            <span id="ContentPlaceHolder1_lbldateofissue">Label</span>
            </div>
         
              <div class="form-group col-md-6">
            <b>Issuing Authority:<br>Mamlaka iliyotoa</b>
            <br>
            <span id="ContentPlaceHolder1_lblauthority">Label</span>
            </div>
              <div class="form-group col-md-6">
            <b>File Number/namba ya faili:</b>
            <br>
            <span id="ContentPlaceHolder1_lblfileno">Label</span>
            </div>
           
          </div>
        </div> 
                    <div class="form-width"> 
      
                     <h4>Disclaimer</h4>
                <div class="form-width"> 
      <div class="row"> 
        <div class="form-group col-md-12">
           <b>Kindly read the below Terms and Conditions before you proceed</b>
            <ul><li>It must be noted that the grant or refusal of the Citizenship is at the sole discretion of the Minister of Home Affairs – Tanzania.</li>
                <li>It is the sole responsibility of the applicant of whoever is concerned to follow up with the Ministry of Home Affairs once the application/s  are processed successfully by Immigration (Uhamiaji).</li>
                <li>Charges once received by Tanzanians Abroad are not refundable under any circumstances, irrespective of whether or not the application is accepted.</li>
                <li>The applicant or applying on behalf of, will be sole liable for any false, incorrect information or document provided to Immigration (Uhamiaji).</li>
                <li>You are required to sign on all (5) pages where applicable.</li>
                <li>You are required to print all the pages and attach with the below list of documents:</li>
                <li>Applicant passport (if available) or Birth certificate (if new born)</li>
                <li>Applicant Parents passport</li>
                <li>Applicant Parents birth certificate</li>
                <li>Applicant Parent/s Tanzania Citizenship (if parent born outside Tanzania).</li>
            </ul>
            <br>
Note: all documents need to be in English or Kiswahili and colored copies

            </div>
            
           
          </div>
        </div> 
                     <div class="row"> 
        <div class="form-group col-md-12">
            <input id="ContentPlaceHolder1_CheckBox1" type="checkbox" name="ctl00$ContentPlaceHolder1$CheckBox1"> I accept and agree on the <a href="term_and_conditions.aspx">Terms and Conditions</a>
            </div>
                         <div class="form-group col-md-12">
            <input id="ContentPlaceHolder1_CheckBox2" type="checkbox" name="ctl00$ContentPlaceHolder1$CheckBox2"><label for="ContentPlaceHolder1_CheckBox2">I confirm that the information provided is correct; and will be held responsible and liable if incorrect.</label>
            </div>
                         </div>
            </div>
                 </div>
                <div style="overflow:auto;">
                <div style="float:right;padding-right:28px;padding-bottom:20px;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-default prevBtn" style="display: none;">Previous/Rudi</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-default" style="float: right; display: block;">Next/Endelea</button>
                    <button onclick="__doPostBack('ctl00$ContentPlaceHolder1$btnsubscribe','')" id="ContentPlaceHolder1_btnsubscribe" class="btn btn-default" type="submit" style="float: right; display: none;">I accept and agree on all the above Terms.</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            
	         </div>                         
	</div>
</div>                              
       
    </div></div>
</div>

@endsection