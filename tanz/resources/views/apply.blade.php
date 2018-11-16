@extends('layouts.app')

@section('content')

<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('{{ asset('./img/flag.jpg') }}')">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1>Tanzanians abroad</h1>
          <h3 class="lang-block-heading">Applying for self</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised">

    <div class="section section-basic">
      <form class="apply-form">
      <div class="container">
          <div class="form-group">
              <h3 class="label-control">Select form language</h3>
              <div class="form-check">
                  <label  class="form-check-label">
                    <input class="form-check-input check-passport-input" type="radio" name="lang" id="exampleRadios2" value="en" checked="checked">  
                    English

                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="lang" id="exampleRadios2" value="t" >  
                        Swahili 

                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
      </div>
            <div class="title">
                <h2 class="lang-block-subheading">Applicant Details</h2>
            </div>
            <!--
            <div class="col-md-4">

                <div class="form-group">
                    <label class="label-control lang-block-relation" >Relation</label>
                    <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown Menu
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-item" onclick="swapDropDown(this,'Father/Baba')">Father/Baba</div>
                                <div class="dropdown-item" onclick="swapDropDown(this,'Mother/Mama')">Mother/Mama</div>
                                <div class="dropdown-item" onclick="swapDropDown(this,'Sister/Dada')">Sister/Dada</div>
                                <div class="dropdown-item" onclick="swapDropDown(this,'Brother/Kaka')">Brother/Kaka</div>
                                <div class="dropdown-item" onclick="swapDropDown(this,'Son/Mwana')">Son/Mwana</div>
                                <div class="dropdown-item" onclick="swapDropDown(this,'Doughter/Binti')">Doughter/Binti</div>
                            </div>
                          </div>
            </div>
              
          </div>
        -->

            
            <!--                 inputs -->
            <div id="inputs">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <label for="exampleInput1" class="bmd-label-floating lang-block-fullname">Full name (as per passport)</label>
                    <input type="text" name="fullname" class="form-control required-input" id="exampleInput1">
                  </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                            <label class="label-control lang-block-dateofbirth">Date of Birth</label>
                            <input name="dateofbirth" type="text" class="form-control datetimepicker required-input" value="01/01/1990">
                    </div>
                </div>

                <div class="col-md-2">
                        <div class="form-group">
                                <label class="label-control lang-block-gender">Gender</label>
                                <div class="form-check">
                                    <label  class="form-check-label">
                                      <input class="form-check-input check-passport-input" type="radio" name="gender" id="exampleRadios2" value="Male" checked="">  
                                      Male

                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="option2" >  
                                          Female

                                          <span class="circle">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                        </div>
                    </div>

                    
                    <div class="col-md-5">
                        <div class="form-group">
                                <label class="label-control lang-block-doyouhavepassport">Do you have Tanzanian Passport?</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input check-passport-input" type="radio" name="checkpassportinput" id="exampleRadios1" value="Yes"> Yes
                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <label  class="form-check-label">
                                      <input class="form-check-input check-passport-input" type="radio" name="checkpassportinput" id="exampleRadios2" value="No" checked="">  
                                      No

                                      <span class="circle">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                        </div>
                    </div>

                    <div class="col-md-5 ">
                        <div class="form-group bmd-form-group passport-description passport-description_none">
                            <label for="exampleInput1" class="bmd-label-floating lang-block-passportnumber">Passport number</label>
                            <input name="passportnumber" type="email" class="form-control passport-number-input" id="exampleInput1">
                          </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group  passport-description passport-description_none">
                              <label class="label-control lang-block-dateofbirth ">Date of Issue</label>
                              <input name="dateofissuepassport" type="text" class="form-control datetimepicker " value="01/01/1990">
                      </div>
                    </div>

                    <div class="col-md-6">
                                                  
                      <div class="form-group bmd-form-group  passport-description passport-description_none">
                          <label for="exampleInput1" class="bmd-label-floating lang-block-phonenumber">Place of issue</label>
                          <input name="placeofissuepassport" type="text" class="form-control required-input" id="exampleInput1">
                        </div>
                    </div>
                
                    <div class="col-md-4">
                            <div class="form-group">
                                    <label class="label-control lang-block-countryofbirth ">Country of Birth</label>
                                    <div class="dropdown country-of-birth" data="1">
                                            <button class="btn btn-secondary dropdown-toggle countryofbirth-data" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Dropdown button
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              
                                            </div>
                                          </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                                <div class="form-group">
                                        <label class="label-control lang-block-placeofbirth">City of Birth</label>
                                        <div class="dropdown city-of-birth city-of-birth-1">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Dropdown button
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <div class="dropdown-item">First select country</div>
                                                </div>
                                              </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="label-control lang-block-nationality">Nationality</label>
                                            <div class="dropdown country-of-birth" data="2">
                                                    <button class="btn btn-secondary dropdown-toggle nationality-data" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Unknown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div onclick="swapCountry(this,'0','Unknown')" class="dropdown-item" value="unknown" countryid="0">

                                                            Unknown (born in any other country other than Tanzania and do not hold any nationality.)
                                                        </div>
                                                        
                                                    </div>
                                                  </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                        
                                        <div class="form-group bmd-form-group">
                                          <label for="exampleInput1" class="bmd-label-floating lang-block-fatherfullname">Father full name (as per passport)</label>
                                          <input name="fathername" type="text" class="form-control required-input" id="exampleInput1">
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="form-group bmd-form-group">
                                              <label for="exampleInput1" class="bmd-label-floating lang-block-motherfullname">Mother full name (as per passport)</label>
                                              <input name="mothername" type="text" class="form-control required-input" id="exampleInput1">
                                            </div>
                                          </div>

                                          <div class="col-md-2">
                                              <div class="form-group bmd-form-group">
                                                  <label for="exampleInput1" class="bmd-label-floating">P.O. Box</label>
                                                  <input name="pobox" type="text" class="form-control required-input" id="exampleInput1">
                                                </div>

                                          </div>

                                          <div class="col-md-5">
                                            <div class="form-group">
                                                    <label class="label-control lang-block-country">Country</label>
                                                    <div class="dropdown country-of-birth" data="3">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              Dropdown button
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                            </div>
                                                          </div>
                                            </div>
                                        </div>
            
                                        <div class="col-md-5">
                                                <div class="form-group">
                                                        <label class="label-control lang-block-city">City</label>
                                                        <div class="dropdown city-of-birth city-of-birth-3">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  Dropdown button
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                                </div>
                                                              </div>
                                                </div>
                                            </div>

                                          

                                                <div class="col-md-3">

                                                       

                                                          <div class="form-group">
                                                              <label class="label-control lang-block-countrycode">Country code</label>
                                                              <div class="dropdown country-code" data="1">
                                                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Dropdown button
                                                                      </button>
                                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                          
                                                                          
                                                                      </div>
                                                                    </div>
                                                      </div>
          
                                                </div>

                                                <div class="col-md-5">
                                                  
                                                            <div class="form-group bmd-form-group">
                                                                <label for="exampleInput1" class="bmd-label-floating lang-block-phonenumber">Mobile number</label>
                                                                <input name="phone" type="text" class="form-control required-input" id="exampleInput1">
                                                              </div>
                                                </div>

                                                          <div class="col-md-4">
                                                              <div class="form-group bmd-form-group">
                                                                  <label for="exampleInput1" class="bmd-label-floating lang-block-email">E-Mail</label>
                                                                  <input name="email" type="email" class="form-control required-input" id="exampleInput1">
                                                                </div>
                                                              </div>

                                                            

                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="label-control lang-block-reason">I am requesting for citizenship of Tanzania by</label>

                                                                    <div class="form-check">
                                                                      <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio" name="reason" id="exampleRadios1" value="1" checked="checked"> Birth -  born in Tanzania 
                                                                        <span class="circle">
                                                                          <span class="check"></span>
                                                                        </span>
                                                                      </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                      <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio" name="reason" id="exampleRadios2" value="2">  
                                                                        Descent -  my parent was born in Tanzania 

                                                                        <span class="circle">
                                                                          <span class="check"></span>
                                                                        </span>
                                                                      </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                      <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio" name="reason" id="exampleRadios2" value="3">
                                                                        Registration - parent not born in Tanzania and holding Tanzanian passport
                                                                        <span class="circle">
                                                                          <span class="check"></span>
                                                                        </span>
                                                                      </label>
                                                                    </div>
                                                                </div>
                                                                  </div>
                                                                </div>
              <div class="title">
                <h2 class="lang-block-parentdetails">Parent Details</h2>
                <h4 class="lang-block-parentdetails2">Please provide parent's details who is Tanzanian</h4>
              </div>

            
            

            <div class="row">


              <div class="col-md-6">
                  <div class="form-group">
                      <label class="label-control lang-block-fathermother">Father/Mother</label>
                      <div class="form-check">
                          <label  class="form-check-label">
                            <input class="form-check-input check-passport-input " type="radio" name="fathermother" id="exampleRadios2" value="Male" checked="">  
                            Father

                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="fathermother" id="exampleRadios2" value="option2" >  
                                Mother

                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
              </div>
                  
                </div> 
                
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label for="exampleInput1" class="bmd-label-floating lang-block-fullname ">Full name (as per passport)</label>
                        <input type="text" name="parentname" class="form-control required-input" id="exampleInput1">
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                              <label class="label-control lang-block-countryofbirth">Country of Birth</label>
                              <div class="dropdown country-of-birth" data="4">
                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown button
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                      </div>
                                    </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                          <div class="form-group">
                                  <label class="label-control lang-block-placeofbirth">City of Birth</label>
                                  <div class="dropdown city-of-birth city-of-birth-4">
                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown button
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          </div>
                                        </div>
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="form-group">
                                  <label class="label-control lang-block-dateofbirth">Date of Birth</label>
                                  <input type="text" name="parentdateofbirth" class="form-control datetimepicker required-input" value="01/01/1980">
                          </div>
                      </div>

                      <div class="col-md-4">
                          
                          <div class="form-group bmd-form-group">
                              <label for="exampleInput1" class="bmd-label-floating lang-block-passportnumber">Passport number</label>
                              <input type="text" name="parentpassportnumber" class="form-control required-input" id="exampleInput1">
                            </div>
                        </div>

                        <div class="col-md-4">

                              <div class="form-group">
                                  <label class="label-control lang-block-issuingauthority">Issuing Authority</label>
                                  <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle issuing-authority" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Dar Es Salam
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <div class="dropdown-item" onclick="swapDropDown(this,'Dar Es Salam')">Dar Es Salam</div>
                                              <div class="dropdown-item" onclick="swapDropDown(this,'Zanzibar')">Zanzibar</div>
                                          </div>
                                        </div>
                          </div>
                            
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group is-filled">
                                
                               
                                <label for="exampleInput1" class="bmd-label-floating lang-block-filenumber">File number</label>
                                <input name="filenumber" class="file-number form-control required-input" type="text" id="exampleInput1">
                              
                                <p> The file number can be found on the last or 2nd last page of the parent's Tanzanian passport. The number is hand written.</p>
                              </div>
                            
                          </div>

                        

                        

                        

                        </div>
                        <div class="space-50"></div>
                        <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <div onclick="getPDF()" class="btn btn-primary lang-block-next">Apply<div class="ripple-container"></div></div>
                            </div>
                        </div>

                        

                
                
                


                
                
              </div>
            </div>

        
        
      </div>
    </form>
    </div>

    </div>

    @endsection