$(document).ready(function() {
    //init DateTimePickers
    materialKit.initFormExtendedDatetimepickers();

    // Sliders Init
    materialKit.initSliders();
  });


  function scrollToDownload() {
    if ($('.section-download').length != 0) {
      $("html, body").animate({
        scrollTop: $('.section-download').offset().top
      }, 1000);
    }
  }


  $(document).ready(function() {

    

    $('#facebook').sharrre({
      share: {
        facebook: true
      },
      enableHover: false,
      enableTracking: false,
      enableCounter: false,
      click: function(api, options) {
        api.simulateClick();
        api.openPopup('facebook');
      },
      template: '<i class="fab fa-facebook-f"></i> Facebook',
      url: 'https://demos.creative-tim.com/material-kit/index.html'
    });

    $('#googlePlus').sharrre({
      share: {
        googlePlus: true
      },
      enableCounter: false,
      enableHover: false,
      enableTracking: true,
      click: function(api, options) {
        api.simulateClick();
        api.openPopup('googlePlus');
      },
      template: '<i class="fab fa-google-plus"></i> Google',
      url: 'https://demos.creative-tim.com/material-kit/index.html'
    });

    $('#twitter').sharrre({
      share: {
        twitter: true
      },
      enableHover: false,
      enableTracking: false,
      enableCounter: false,
      buttons: {
        twitter: {
          via: 'CreativeTim'
        }
      },
      click: function(api, options) {
        api.simulateClick();
        api.openPopup('twitter');
      },
      template: '<i class="fab fa-twitter"></i> Twitter',
      url: 'https://demos.creative-tim.com/material-kit/index.html'
    });

  });

        $(document).ready(function () {
            //country code 

            var countryTelData = require('country-telephone-data');

            let countriesJson = countryTelData.allCountries;



            console.log(countriesJson);

            var countryCodeHTML = '';

            for (key in countriesJson) {
              var item = '<div onclick="swapPhoneCode(this,\''+countriesJson[key].dialCode+'\',\''+countriesJson[key].iso2+'\')" class="dropdown-item" value="' + key + '" countryid="' + key + '">'+
              '<img class="select-flag-img" src="https://www.countryflags.io/'+countriesJson[key].iso2+'/flat/64.png">'+
              countriesJson[key].name + ' +' + countriesJson[key].dialCode + '</div>';
              countryCodeHTML = countryCodeHTML + item;
            }

            $('.country-code').find('.dropdown-menu').empty().append(countryCodeHTML);

            //---------------------------------

            var countrydata = { "status": "success", "tp": 1, "msg": "Countries fetched successfully.", "result": { "AF": "Afghanistan", "AL": "Albania", "DZ": "Algeria", "AD": "Andorra", "AO": "Angola", "AI": "Anguilla", "AG": "Antigua and Barbuda", "AR": "Argentina", "AM": "Armenia", "AU": "Australia", "AT": "Austria", "AZ": "Azerbaijan", "BS": "Bahamas", "BH": "Bahrain", "BD": "Bangladesh", "BB": "Barbados", "BY": "Belarus", "BE": "Belgium", "BZ": "Belize", "BJ": "Benin", "BM": "Bermuda", "BT": "Bhutan", "BO": "Bolivia", "BA": "Bosnia and Herzegovina", "BW": "Botswana", "BR": "Brazil", "BN": "Brunei Darussalam", "BG": "Bulgaria", "BF": "Burkina Faso", "BI": "Burundi", "KH": "Cambodia", "CM": "Cameroon", "CA": "Canada", "CV": "Cape Verde", "KY": "Cayman Islands", "CF": "Central African Republic", "TD": "Chad", "CL": "Chile", "CN": "China", "CO": "Colombia", "KM": "Comoros", "CG": "Congo", "CR": "Costa Rica", "HR": "Croatia (Hrvatska)", "CU": "Cuba", "CY": "Cyprus", "CZ": "Czech Republic", "DK": "Denmark", "DJ": "Djibouti", "DM": "Dominica", "DO": "Dominican Republic", "EC": "Ecuador", "EG": "Egypt", "SV": "El Salvador", "GQ": "Equatorial Guinea", "ER": "Eritrea", "EE": "Estonia", "ET": "Ethiopia", "FO": "Faroe Islands", "FJ": "Fiji", "FI": "Finland", "FR": "France", "GF": "French Guiana", "PF": "French Polynesia", "TF": "French Southern Territories", "GA": "Gabon", "GM": "Gambia", "GE": "Georgia", "DE": "Germany", "GH": "Ghana", "GR": "Greece", "GL": "Greenland", "GD": "Grenada", "GP": "Guadeloupe", "GU": "Guam", "GT": "Guatemala", "GN": "Guinea", "GW": "Guinea-Bissau", "GY": "Guyana", "HT": "Haiti", "HN": "Honduras", "HK": "Hong Kong", "HU": "Hungary", "IS": "Iceland", "IN": "India", "ID": "Indonesia", "IR": "Iran", "IQ": "Iraq", "IE": "Ireland", "IM": "Isle of Man", "IL": "Israel", "IT": "Italy", "CI": "Ivory Coast", "JM": "Jamaica", "JP": "Japan", "JE": "Jersey", "JO": "Jordan", "KZ": "Kazakhstan", "KE": "Kenya", "KI": "Kiribati", "XK": "Kosovo", "KW": "Kuwait", "KG": "Kyrgyzstan", "LA": "Lao", "LV": "Latvia", "LB": "Lebanon", "LS": "Lesotho", "LR": "Liberia", "LY": "Libyan Arab Jamahiriya", "LI": "Liechtenstein", "LT": "Lithuania", "LU": "Luxembourg", "MK": "Macedonia", "MG": "Madagascar", "MW": "Malawi", "MY": "Malaysia", "MV": "Maldives", "ML": "Mali", "MT": "Malta", "MH": "Marshall Islands", "MQ": "Martinique", "MR": "Mauritania", "MU": "Mauritius", "MX": "Mexico", "FM": "Micronesia, Federated States of", "MD": "Moldova, Republic of", "MC": "Monaco", "MN": "Mongolia", "ME": "Montenegro", "MS": "Montserrat", "MA": "Morocco", "MZ": "Mozambique", "MM": "Myanmar", "NA": "Namibia", "NR": "Nauru", "NP": "Nepal", "NL": "Netherlands", "AN": "Netherlands Antilles", "NC": "New Caledonia", "NZ": "New Zealand", "NI": "Nicaragua", "NE": "Niger", "NG": "Nigeria", "KP": "North Korea", "MP": "Northern Mariana Islands", "NO": "Norway", "OM": "Oman", "PK": "Pakistan", "PW": "Palau", "PS": "Palestine", "PA": "Panama", "PG": "Papua New Guinea", "PY": "Paraguay", "PE": "Peru", "PH": "Philippines", "PL": "Poland", "PT": "Portugal", "PR": "Puerto Rico", "QA": "Qatar", "RE": "Reunion", "RO": "Romania", "RU": "Russian Federation", "RW": "Rwanda", "KN": "Saint Kitts and Nevis", "LC": "Saint Lucia", "VC": "Saint Vincent and the Grenadines", "WS": "Samoa", "SM": "San Marino", "ST": "Sao Tome and Principe", "SA": "Saudi Arabia", "SN": "Senegal", "RS": "Serbia", "SC": "Seychelles", "SL": "Sierra Leone", "SG": "Singapore", "SK": "Slovakia", "SI": "Slovenia", "SB": "Solomon Islands", "SO": "Somalia", "ZA": "South Africa", "KR": "South Korea", "ES": "Spain", "LK": "Sri Lanka", "SH": "St. Helena", "PM": "St. Pierre and Miquelon", "SD": "Sudan", "SR": "Suriname", "SJ": "Svalbard and Jan Mayen Islands", "SZ": "Swaziland", "SE": "Sweden", "CH": "Switzerland", "SY": "Syrian Arab Republic", "TW": "Taiwan", "TJ": "Tajikistan", "TZ": "Tanzania", "TH": "Thailand", "TG": "Togo", "TK": "Tokelau", "TO": "Tonga", "TT": "Trinidad and Tobago", "TN": "Tunisia", "TR": "Turkey", "TM": "Turkmenistan", "TV": "Tuvalu", "UG": "Uganda", "UA": "Ukraine", "AE": "United Arab Emirates", "GB": "United Kingdom", "US": "United States", "UM": "United States minor outlying islands", "UY": "Uruguay", "UZ": "Uzbekistan", "VU": "Vanuatu", "VE": "Venezuela", "VN": "Vietnam", "VI": "Virgin Islands (U.S.)", "WF": "Wallis and Futuna Islands", "YE": "Yemen", "ZM": "Zambia", "ZW": "Zimbabwe" }, "presel": false, "hits": "406" };

            var options = '<div class="dropdown-item">Select country</div>';

            for (key in countrydata.result) {
                var option = '<div onclick="swapCountry(this,\''+key.trim()+'\',\''+countrydata.result[key]+'\')" class="dropdown-item" value="' + key + '" countryid="' + key + '">' + countrydata.result[key] + '</div>';
                options = options + option;
            }

            $('.country-of-birth').find('.dropdown-menu').append(options);

            $('.city-of-birth').find('.dropdown-menu').empty().append('<div class="dropdown-item">First select country</div>');

            let swapCountry = function(that,key,name){
              console.log('swap');

                $.get('https://geodata.solutions/api/api.php?type=getStates&countryId=' + key + '&addClasses=order-alpha', function (data) {

                    var citydata = data.result;

                    var options = '';

                    for (key in citydata) {
                      //<div onclick="swapCountry(this,\''+key.trim()+'\')" class="dropdown-item" value="' + key + '" countryid="' + key + '">' + countrydata.result[key] + '</div>
                        var option = '<div  class="dropdown-item" onclick="swapCity(this,\''+citydata[key].trim()+'\',\''+citydata[key]+'\')" >' + citydata[key] + '</div>';
                        options = options + option;
                    }

                    var selectid = $(that).parent().parent().attr('data');
                    $(that).parent().parent().find('.btn').empty().append(name);

                    $('.city-of-birth-'+selectid).find('.dropdown-menu').empty().append(options);

                  


                });

            };

            let swapPhoneCode = function(that,key,name){
              $('.country-code').find('.btn').empty().append('<img class="select-flag-img" src="https://www.countryflags.io/'+name+'/flat/64.png">+'+key);
            }

            let swapDropDown = function(that,name){
              $(that).parent().parent().find('.btn').empty().append(name);
              issuingAuthority();
            }

            let swapCity = function(that,key,name){


              $(that).parent().parent().find('.btn').empty().append(name);

            }

            let swapHasPassport = function(){
              let value = $('input[name=checkpassportinput]:checked').val();
              if(value=='Yes'){
                $('.passport-description').removeClass('passport-description_none');
              } else {
                $('.passport-description').addClass('passport-description_none');
              }
            };

            $(document).ready(function () {
              $('input:radio[name=checkpassportinput]').change(function () {
                console.log('ddd');
                  if ($("input[name='checkpassportinput']:checked").val() == 'Yes') {
                    swapHasPassport();
                  }
                  if ($("input[name='checkpassportinput']:checked").val() == 'No') {
                    swapHasPassport();
                  }
              });

              $('input:radio[name=lang]').change(function () {
                console.log('ddd');
                  if ($("input[name='lang']:checked").val() == 'en') {
                    putLang('en');
                  }
                  if ($("input[name='lang']:checked").val() == 't') {
                    putLang('t');
                  }
              });
          });

          function issuingAuthority(){
            let fileNumberPrefix;

            if($('.issuing-authority').text().trim()=='Dar Es Salam'){
              fileNumberPrefix = 'DN';
            }

            if($('.issuing-authority').text().trim()=='Zanzibar'){
              fileNumberPrefix = 'IF';
            }


            let fileNumberPrev = $('.file-number').val().replace(/[^0-9.]/g, "");
            $('.file-number').val(fileNumberPrefix+fileNumberPrev);
          }

          $(document).on('keyup','.file-number', function(){
            issuingAuthority();
          });

          let lang = require('./formLang.json');
          window.lang = lang;
          
          function putLang(lang){
            

            let langN;
            if(lang=='en') {
              langN = 0;
            } else {
              langN = 1;
            }

            
            Object.keys(window.lang).forEach(key => {
            
              let text = window.lang[key][langN];
              
              $('.lang-block-'+key).empty().append(text);
              
            });
            


          }

          

          function getPDF(){
            let form = $('.apply-form');


            let nat = $('.nationality-data').text().trim();

            if($('.nationality-hidden').length!=0){
              $('.nationality-hidden').val(nat);
            } else {
              form.append('<input class="nationality-hidden" name="nationality" type="hidden" value="'+nat+'" >');
              
            }
            

            formS = form.serialize();

            $.ajax({
              type: 'POST',
              url: '/test',
              data: formS,
              headers: {
                'X-CSRF-TOKEN': token,
              },
            }).done(function(data) {
              window.open('/uploads/'+data);
            })
          }

            window.swapCountry = swapCountry;
            window.swapCity = swapCity;
            window.swapPhoneCode = swapPhoneCode;
            window.swapDropDown = swapDropDown;
            window.swapHasPassport = swapHasPassport;
            window.issuingAuthority = issuingAuthority;
            window.putLang = putLang;
            window.getPDF = getPDF;
            

            $('.country-select').change(function () {
                var key = $(this).val();

                var that = this;

                $.get('https://geodata.solutions/api/api.php?type=getStates&countryId=' + key + '&addClasses=order-alpha', function (data) {

                    var citydata = data.result;

                    var options = '<option value="">Select City</option>';

                    for (key in citydata) {
                        var option = '<option value="' + citydata[key] + '" cityid="' + key + '">' + citydata[key] + '</option>';
                        options = options + option;
                    }

                    if ($(that).hasClass('country-select-one')) {

                        $('.city-select-one').empty().append(options);
                    }

                    if ($(that).hasClass('country-select-two')) {

                    $('.city-select-two').empty().append(options);
                    }

                    if ($(that).hasClass('country-select-three')) {

                    $('.city-select-three').empty().append(options);
                    }


                });


            });

            var applicationData = {};


            $('.applicationinput').keyup(function(){
                var value = $(this).val();
                var key = $(this).attr('name');

                applicationData[key] = value;
                
                console.log(applicationData);
            });

            $('.applicationselect').change(function(){
                var value = $(this).val();
                var key = $(this).attr('name');

                applicationData[key] = value;
                
                console.log(applicationData);
            });

            

            




        });
