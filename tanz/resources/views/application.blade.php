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
  
     <div class="tab1" style="display: block !important;">
	 
		   <h2 style="text-align:left; margin-bottom:30px;"><span style="color:#28b24c;"> Applicant Details<br>Maelezo Binafsi</span></h2>   
             <div class="form-width"> 
      <div class="row">
          
        <div class="form-group col-md-12">
             <label>Full name (as per passport)<br>Jina Kamili</label>
            <input name="fullname" type="text" id="ContentPlaceHolder1_txtfullname" oninput="this.className = ''">
            
        </div> 
      </div>
      <div class="row"> 
        <div class="form-group col-md-12">
            <label>Date of Birth: DD/MM/YYYY<br>Tarehe ya kuzaliwa</label>
          <input class="datepicker" name="dateofbirth" type="text" id="ContentPlaceHolder1_txtdob" class="tcal tcalInput" oninput="this.className = ''">
              
        </div>
          <div class="col-md-12 form-group">
              <label>Gender<br>Jinsia</label>
             <select name="gender" id="ContentPlaceHolder1_ddlgender" oninput="this.className = ''">
	<option value=""></option>
	<option value="Male">Male/Mme</option>
	<option value="Female">Female/Mke</option>

</select>
              
</div>
          <div class="col-md-12 form-group"> 
              <label>Country of Birth<br>Nchi ya kuzaliwa</label>
             <select class="country-select country-select-one" name="countryofbirth" id="ContentPlaceHolder1_ddlcountry" oninput="this.className = ''">

			</select>
                </div>
          <div class="col-md-12 form-group">
                 <label>Place of Birth<br>Mahali pa kuzaliwa</label>
             <select class="city-select city-select-one" name="placeofbirth" id="ContentPlaceHolder1_ddlcity" oninput="this.className = ''">
	<option value=""></option>

</select>
              
</div>
             
          
           <div class="col-md-12 form-group">
                 <label>Nationality <img src="{{asset('i.png')}}" title="(i) Unknown; born in any other country other than Tanzania and do not hold any nationality.">
                   <br>Utaifa <img src="{{asset('i.png')}}" title="(i) Haijulikani; umezaliwa katika nchi nyingine yoyote isipokuwa Tanzania na huna uraia wowote."></label>
          
             <select name="nationality" class="country-select" id="ContentPlaceHolder1_ddlnationality" oninput="this.className = ''">

</select>
              
</div>
         <div id="ContentPlaceHolder1_UpdatePanel3" style="width:100%;">
	
              <div class="col-md-12 form-group">
                  <label>Do you have Tanzanian Passport?<br>Unayo pasipoti ya Tanzania?</label>
             <select name="tanzpassport" id="ContentPlaceHolder1_ddldoyouhavepassport" oninput="this.className = ''">
		<option selected="selected" value=""></option>
		<option value="Yes">Yes/Ndio</option>
		<option value="No">No/Hapana</option>

	</select>
           </div>
          
                  
</div>
            <div class="col-md-12 form-group">
                <label>Father full name (as per passport)<br>Jina kamili la baba mzazi</label>
            <input name="fathername" type="text" id="ContentPlaceHolder1_txtfathername" oninput="this.className = ''">
            </div>
            <div class="col-md-12 form-group">
                <label>Mother full name (as per passport)<br>Jina kamili la mama mzazi</label>
            <input name="mathername" type="text" id="ContentPlaceHolder1_txtmothername" oninput="this.className = ''">
              
</div><div class="col-md-4 form-group">
    <label>P.O. Box<br>Sanduku la Posta</label>
            <input name="pobox" type="text" id="ContentPlaceHolder1_txtpobox" oninput="this.className = ''">
              
</div>
            <div class="col-md-4 form-group">
               <label>Country<br>Nchi</label>
             <select name="countrynchi" class="country-select" id="ContentPlaceHolder1_ddlpocountry" oninput="this.className = ''">

</select>
              
</div>
          <div class="col-md-4 form-group">
                 <label>City<br>Mahali</label>
             <select name="citymahali"  id="ContentPlaceHolder1_ddlpocity" oninput="this.className = ''">
	<option value=""></option>

</select>
              
</div>
          <div class="col-md-2 form-group">
              <label>Country Code<br>Code ya nchi</label>
              <select name="countrycode" id="ContentPlaceHolder1_ddlcountrycode" oninput="this.className = ''">
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
            <input name="mobile" type="text" id="ContentPlaceHolder1_txtcontactno" placeholder="e.g: 501234567" onkeypress="return isNumberKey(event)" oninput="this.className = ''">
              
           </div>
          <div class="col-md-12 form-group">
               <label>Email Address<br>Anuani ya barua Pepe</label>
            <input name="email" type="text" id="ContentPlaceHolder1_txtemail" oninput="this.className = ''">
          </div>
           <div class="col-md-12 form-group">
               <label>I am requesting for citizenship of Tanzania by 
                   <img src="{{asset('i.png')}}" title="(i)Birth -  born in Tanzania 
(i)Descent -  my parent was born in Tanzania 
(i)Registration - parent not born in Tanzania and holding Tanzanian passport" alt="(i) born in Tanzania\n(i) my parent was born in Tanzania\n(i) parent not born in Tanzania and holding Tanzanian passport">
                   <br>Mimi naomba Uraia wa Tanzania kwa <img src="{{asset('i.png')}}" title="(i)Kuzaliwa -  nimezaliwa Tanzania 
(i)Kurithi - mzazi wangu kazaliwa Tanzania 
(i)Tajinisi - mzazi ambaye hajazaliwa Tanzania na kuwa na pasipoti ya Tanzania" alt="(i) born in Tanzania\n(i) my parent was born in Tanzania\n(i) parent not born in Tanzania and holding Tanzanian passport"></label>
             <select name="miminaombauraia" id="ContentPlaceHolder1_ddlcitizen" oninput="this.className = ''">
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
             <select name="fatherbaba" id="ContentPlaceHolder1_ddlrelation" oninput="this.className = ''">
		<option selected="selected" value=""></option>
		<option value="Father">Father/Baba</option>
		<option value="Mother">Father/Mama</option>

	</select>
        </div> 
          <div class="form-group col-md-12">
              <label>Full name (as per passport)<br>Jina Kamili</label>
            <input name="fullnamepassport" type="text" id="ContentPlaceHolder1_txtgardianfullname" oninput="this.className = ''">             
        </div>

                     <div class="col-md-12 form-group">
                         <label>Country of Birth<br>Nchi ya kuzaliwa</label>
             <select class="country-select" name="countryofbirth2"  id="ContentPlaceHolder1_ddlcountryofbirth_g" oninput="this.className = ''">
	

	</select>
              
</div>
           <div class="col-md-12 form-group">
               <label>City of Birth<br>Mahali pa kuzaliwa</label>
             <select name="cityofbirth2" id="ContentPlaceHolder1_ddlcityofbirth_g" oninput="this.className = ''">
		<option value=""></option>

	</select>
              
</div>
          
</div>
          <div class="form-group col-md-12">
              <label>Date of Birth: DD/MM/YYYY<br>Tarehe ya kuzaliwa</label>
            <input class="datepicker2" name="dateofbirth2" type="text" id="ContentPlaceHolder1_txtgardiandob" class="tcal tcalInput" oninput="this.className = ''">             
        </div>
           <div class="form-group col-md-12">
               <label>Passport Number<br>namba ya pasipoti</label>
            <input name="passportnumber" type="text" id="ContentPlaceHolder1_txtgardianpassportno" oninput="this.className = ''">             
        </div> <div class="form-group col-md-12">
                 <label>Date of Issue: DD/MM/YYYY<br>Tarehe ya kutolewa</label>
            <input class="datepicker3" name="dateofissue" type="text" id="ContentPlaceHolder1_txtgardiandateofissue" class="tcal tcalInput" oninput="this.className = ''">             
        </div>
           
            <div id="ContentPlaceHolder1_UpdatePanel2" style="width:100%">
	
        <div class="form-group col-md-12">
            <label>Issuing Authority<br>Mamlaka iliyotoa</label>
             <select name="issuingauthority" id="ContentPlaceHolder1_ddlissuingauthority" oninput="this.className = ''">
		<option selected="selected" value=""></option>
		<option value="Dar Es Salam">Dar Es Salam</option>
		<option value="Zanzibar">Zanzibar</option>

	</select>
            </div>
           <div class="form-group col-md-12">
               <label>File number <img src="{{asset('i.png')}}" alt="the file number can be found on the last or 2nd last page of the parent's Tanzanian passport. The number is hand written." title="the file number can be found on the last or 2nd last page of the parent's Tanzanian passport. The number is hand written.">
                   <br>namba ya faili <img src="{{asset('i.png')}}" alt="namba ya faili inaweza kupatikana kwenye ukurasa wa mwisho au kabla wa mwisho wa pasipoti ya mzazi. Namba imeandikwa kwa mkono." title="namba ya faili inaweza kupatikana kwenye ukurasa wa mwisho au kabla wa mwisho wa pasipoti ya mzazi. Namba imeandikwa kwa mkono."></label>
          <input name="nambayafaili" type="text" id="ContentPlaceHolder1_txtfileno" oninput="this.className = ''">
            </div>
          
</div>
            
      </div>
            </div>
      </div>
      
      
     
    </div>                         
	 
</div>
               
             <div class="tab1"style="display: block !important">
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
            <input id="ContentPlaceHolder1_CheckBox1" type="checkbox" name="agree"> I accept and agree on the <a href="term_and_conditions.aspx">Terms and Conditions</a>
            </div>
                         <div class="form-group col-md-12">
            <input id="ContentPlaceHolder1_CheckBox2" type="checkbox" name="agree2"><label for="ContentPlaceHolder1_CheckBox2">I confirm that the information provided is correct; and will be held responsible and liable if incorrect.</label>
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