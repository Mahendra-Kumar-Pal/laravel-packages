<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
    <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>  
</head>
<body>
    <input type="text" name="city" id="city" list="cityname" class="f-right">
    <datalist id="cityname">
        <option>select country</option>
        <option data-value="AF" onclick="get_data()">Afghanistan</option>
        <option data-value="AX">Aland Islands</option>
        <option data-value="AL">Albania</option>
        <option data-value="DZ">Algeria</option>
        <option data-value="AS">American Samoa</option>
        <option data-value="AD">Andorra</option>
        <option data-value="AO">Angola</option>
        <option data-value="AI">Anguilla</option>
        <option data-value="AQ">Antarctica</option>
        <option data-value="AG">Antigua and Barbuda</option>
        <option data-value="AR">Argentina</option>
        <option data-value="AM">Armenia</option>
        <option data-value="AW">Aruba</option>
        <option data-value="AU">Australia</option>
        <option data-value="AT">Austria</option>
        <option data-value="AZ">Azerbaijan</option>
        <option data-value="BS">Bahamas</option>
        <option data-value="BH">Bahrain</option>
        <option data-value="BD">Bangladesh</option>
        <option data-value="BB">Barbados</option>
        <option data-value="BY">Belarus</option>
        <option data-value="BE">Belgium</option>
        <option data-value="BZ">Belize</option>
        <option data-value="BJ">Benin</option>
        <option data-value="BM">Bermuda</option>
        <option data-value="BT">Bhutan</option>
        <option data-value="BO">Bolivia</option>
        <option data-value="BQ">Bonaire, Sint Eustatius and Saba</option>
        <option data-value="BA">Bosnia and Herzegovina</option>
        <option data-value="BW">Botswana</option>
        <option data-value="BV">Bouvet Island</option>
        <option data-value="BR">Brazil</option>
        <option data-value="IO">British Indian Ocean Territory</option>
        <option data-value="BN">Brunei Darussalam</option>
        <option data-value="BG">Bulgaria</option>
        <option data-value="BF">Burkina Faso</option>
        <option data-value="BI">Burundi</option>
        <option data-value="KH">Cambodia</option>
        <option data-value="CM">Cameroon</option>
        <option data-value="CA">Canada</option>
        <option data-value="CV">Cape Verde</option>
        <option data-value="KY">Cayman Islands</option>
        <option data-value="CF">Central African Republic</option>
        <option data-value="TD">Chad</option>
        <option data-value="CL">Chile</option>
        <option data-value="CN">China</option>
        <option data-value="CX">Christmas Island</option>
        <option data-value="CC">Cocos (Keeling) Islands</option>
        <option data-value="CO">Colombia</option>
        <option data-value="KM">Comoros</option>
        <option data-value="CG">Congo</option>
        <option data-value="CD">Congo, Democratic Republic of the Congo</option>
        <option data-value="CK">Cook Islands</option>
        <option data-value="CR">Costa Rica</option>
        <option data-value="CI">Cote D'Ivoire</option>
        <option data-value="HR">Croatia</option>
        <option data-value="CU">Cuba</option>
        <option data-value="CW">Curacao</option>
        <option data-value="CY">Cyprus</option>
        <option data-value="CZ">Czech Republic</option>
        <option data-value="DK">Denmark</option>
        <option data-value="DJ">Djibouti</option>
        <option data-value="DM">Dominica</option>
        <option data-value="DO">Dominican Republic</option>
        <option data-value="EC">Ecuador</option>
        <option data-value="EG">Egypt</option>
        <option data-value="SV">El Salvador</option>
        <option data-value="GQ">Equatorial Guinea</option>
        <option data-value="ER">Eritrea</option>
        <option data-value="EE">Estonia</option>
        <option data-value="ET">Ethiopia</option>
        <option data-value="FK">Falkland Islands (Malvinas)</option>
        <option data-value="FO">Faroe Islands</option>
        <option data-value="FJ">Fiji</option>
        <option data-value="FI">Finland</option>
        <option data-value="FR">France</option>
        <option data-value="GF">French Guiana</option>
        <option data-value="PF">French Polynesia</option>
        <option data-value="TF">French Southern Territories</option>
        <option data-value="GA">Gabon</option>
        <option data-value="GM">Gambia</option>
        <option data-value="GE">Georgia</option>
        <option data-value="DE">Germany</option>
        <option data-value="GH">Ghana</option>
        <option data-value="GI">Gibraltar</option>
        <option data-value="GR">Greece</option>
        <option data-value="GL">Greenland</option>
        <option data-value="GD">Grenada</option>
        <option data-value="GP">Guadeloupe</option>
        <option data-value="GU">Guam</option>
        <option data-value="GT">Guatemala</option>
        <option data-value="GG">Guernsey</option>
        <option data-value="GN">Guinea</option>
        <option data-value="GW">Guinea-Bissau</option>
        <option data-value="GY">Guyana</option>
        <option data-value="HT">Haiti</option>
        <option data-value="HM">Heard Island and Mcdonald Islands</option>
        <option data-value="VA">Holy See (Vatican City State)</option>
        <option data-value="HN">Honduras</option>
        <option data-value="HK">Hong Kong</option>
        <option data-value="HU">Hungary</option>
        <option data-value="IS">Iceland</option>
        <option data-value="IN">India</option>
        <option data-value="ID">Indonesia</option>
        <option data-value="IR">Iran, Islamic Republic of</option>
        <option data-value="IQ">Iraq</option>
        <option data-value="IE">Ireland</option>
        <option data-value="IM">Isle of Man</option>
        <option data-value="IL">Israel</option>
        <option data-value="IT">Italy</option>
        <option data-value="JM">Jamaica</option>
        <option data-value="JP">Japan</option>
        <option data-value="JE">Jersey</option>
        <option data-value="JO">Jordan</option>
        <option data-value="KZ">Kazakhstan</option>
        <option data-value="KE">Kenya</option>
        <option data-value="KI">Kiribati</option>
        <option data-value="KP">Korea, Democratic People's Republic of</option>
        <option data-value="KR">Korea, Republic of</option>
        <option data-value="XK">Kosovo</option>
        <option data-value="KW">Kuwait</option>
        <option data-value="KG">Kyrgyzstan</option>
        <option data-value="LA">Lao People's Democratic Republic</option>
        <option data-value="LV">Latvia</option>
        <option data-value="LB">Lebanon</option>
        <option data-value="LS">Lesotho</option>
        <option data-value="LR">Liberia</option>
        <option data-value="LY">Libyan Arab Jamahiriya</option>
        <option data-value="LI">Liechtenstein</option>
        <option data-value="LT">Lithuania</option>
        <option data-value="LU">Luxembourg</option>
        <option data-value="MO">Macao</option>
        <option data-value="MK">Macedonia, the Former Yugoslav Republic of</option>
        <option data-value="MG">Madagascar</option>
        <option data-value="MW">Malawi</option>
        <option data-value="MY">Malaysia</option>
        <option data-value="MV">Maldives</option>
        <option data-value="ML">Mali</option>
        <option data-value="MT">Malta</option>
        <option data-value="MH">Marshall Islands</option>
        <option data-value="MQ">Martinique</option>
        <option data-value="MR">Mauritania</option>
        <option data-value="MU">Mauritius</option>
        <option data-value="YT">Mayotte</option>
        <option data-value="MX">Mexico</option>
        <option data-value="FM">Micronesia, Federated States of</option>
        <option data-value="MD">Moldova, Republic of</option>
        <option data-value="MC">Monaco</option>
        <option data-value="MN">Mongolia</option>
        <option data-value="ME">Montenegro</option>
        <option data-value="MS">Montserrat</option>
        <option data-value="MA">Morocco</option>
        <option data-value="MZ">Mozambique</option>
        <option data-value="MM">Myanmar</option>
        <option data-value="NA">Namibia</option>
        <option data-value="NR">Nauru</option>
        <option data-value="NP">Nepal</option>
        <option data-value="NL">Netherlands</option>
        <option data-value="AN">Netherlands Antilles</option>
        <option data-value="NC">New Caledonia</option>
        <option data-value="NZ">New Zealand</option>
        <option data-value="NI">Nicaragua</option>
        <option data-value="NE">Niger</option>
        <option data-value="NG">Nigeria</option>
        <option data-value="NU">Niue</option>
        <option data-value="NF">Norfolk Island</option>
        <option data-value="MP">Northern Mariana Islands</option>
        <option data-value="NO">Norway</option>
        <option data-value="OM">Oman</option>
        <option data-value="PK">Pakistan</option>
        <option data-value="PW">Palau</option>
        <option data-value="PS">Palestinian Territory, Occupied</option>
        <option data-value="PA">Panama</option>
        <option data-value="PG">Papua New Guinea</option>
        <option data-value="PY">Paraguay</option>
        <option data-value="PE">Peru</option>
        <option data-value="PH">Philippines</option>
        <option data-value="PN">Pitcairn</option>
        <option data-value="PL">Poland</option>
        <option data-value="PT">Portugal</option>
        <option data-value="PR">Puerto Rico</option>
        <option data-value="QA">Qatar</option>
        <option data-value="RE">Reunion</option>
        <option data-value="RO">Romania</option>
        <option data-value="RU">Russian Federation</option>
        <option data-value="RW">Rwanda</option>
        <option data-value="BL">Saint Barthelemy</option>
        <option data-value="SH">Saint Helena</option>
        <option data-value="KN">Saint Kitts and Nevis</option>
        <option data-value="LC">Saint Lucia</option>
        <option data-value="MF">Saint Martin</option>
        <option data-value="PM">Saint Pierre and Miquelon</option>
        <option data-value="VC">Saint Vincent and the Grenadines</option>
        <option data-value="WS">Samoa</option>
        <option data-value="SM">San Marino</option>
        <option data-value="ST">Sao Tome and Principe</option>
        <option data-value="SA">Saudi Arabia</option>
        <option data-value="SN">Senegal</option>
        <option data-value="RS">Serbia</option>
        <option data-value="CS">Serbia and Montenegro</option>
        <option data-value="SC">Seychelles</option>
        <option data-value="SL">Sierra Leone</option>
        <option data-value="SG">Singapore</option>
        <option data-value="SX">Sint Maarten</option>
        <option data-value="SK">Slovakia</option>
        <option data-value="SI">Slovenia</option>
        <option data-value="SB">Solomon Islands</option>
        <option data-value="SO">Somalia</option>
        <option data-value="ZA">South Africa</option>
        <option data-value="GS">South Georgia and the South Sandwich Islands</option>
        <option data-value="SS">South Sudan</option>
        <option data-value="ES">Spain</option>
        <option data-value="LK">Sri Lanka</option>
        <option data-value="SD">Sudan</option>
        <option data-value="SR">Suriname</option>
        <option data-value="SJ">Svalbard and Jan Mayen</option>
        <option data-value="SZ">Swaziland</option>
        <option data-value="SE">Sweden</option>
        <option data-value="CH">Switzerland</option>
        <option data-value="SY">Syrian Arab Republic</option>
        <option data-value="TW">Taiwan, Province of China</option>
        <option data-value="TJ">Tajikistan</option>
        <option data-value="TZ">Tanzania, United Republic of</option>
        <option data-value="TH">Thailand</option>
        <option data-value="TL">Timor-Leste</option>
        <option data-value="TG">Togo</option>
        <option data-value="TK">Tokelau</option>
        <option data-value="TO">Tonga</option>
        <option data-value="TT">Trinidad and Tobago</option>
        <option data-value="TN">Tunisia</option>
        <option data-value="TR">Turkey</option>
        <option data-value="TM">Turkmenistan</option>
        <option data-value="TC">Turks and Caicos Islands</option>
        <option data-value="TV">Tuvalu</option>
        <option data-value="UG">Uganda</option>
        <option data-value="UA">Ukraine</option>
        <option data-value="AE">United Arab Emirates</option>
        <option data-value="GB">United Kingdom</option>
        <option data-value="US">United States</option>
        <option data-value="UM">United States Minor Outlying Islands</option>
        <option data-value="UY">Uruguay</option>
        <option data-value="UZ">Uzbekistan</option>
        <option data-value="VU">Vanuatu</option>
        <option data-value="VE">Venezuela</option>
        <option data-value="VN">Viet Nam</option>
        <option data-value="VG">Virgin Islands, British</option>
        <option data-value="VI">Virgin Islands, U.s.</option>
        <option data-value="WF">Wallis and Futuna</option>
        <option data-value="EH">Western Sahara</option>
        <option data-value="YE">Yemen</option>
        <option data-value="ZM">Zambia</option>
        <option data-value="ZW">Zimbabwe</option>
    </datalist>
    <br>
    @php
        $segments = Request::segments();
        use Illuminate\Database\Eloquent\Casts\Attribute;
        $tr = new GoogleTranslate($segments[0]);
    @endphp
    
    @foreach ($addresses as $add)
        {{$tr->translate($add->city)}}&emsp;{{$tr->translate($add->address)}}<br>
    @endforeach
</body>
<script>
// $(function(){
//     $('option').click(function(){
//         $val=$(this).attr('data-value');
//         alert($val);
//     });
// });
</script>
    <script>
    function get_data(){
        alert("ok");
        // $val=$(this).attr('data-value');
        // alert($val);
    }
    </script> 
<script>
    // $(function() {
    //     $("option").click(function(){
    //         alert("ok");
    //         var element = $(this);
    //         var myTag = element.attr("data-value");
    //         alert(myTag);
    //     });
    // });
</script>
</html>