<!doctype html>
<html lang="en">

    <!-- Latest News Start -->

    <div>
        <?php include 'frontend/includes/head.html';?>
    </div>

    <!-- Latest News End -->


    <body onload="init();">

        <div align="center">
            <table width="950">
                <tr>
                    <td class="outline">
                        <!-- Banner Start -->	
                        <?php include 'frontend/includes/banner.html';?>
                        <!-- Banner End -->

                        <table width="950" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="179" valign="top">
                                    <img src="frontend/images/spacer.gif" width="179" height="0" />
                                    <div id="left_inner">
                                        <!-- Latest News Start -->
                                        <div>
                                            <?php include 'frontend/includes/latest-news.html';?>
                                        </div>
                                        <!-- Latest News End -->

                                        <!-- Support Our Work -->
                                        <div>
                                            <?php include 'frontend/includes/support-our-work.html';?>
                                        </div>
                                        <!-- Support Our Work End -->
                                    </div>

                                    <!-- Left Column Menu -->
                                    <?php include 'frontend/includes/menu-left.html';?>
                                    <!-- Left Column Menu End -->

                                <td width="1" class="divider">&nbsp;</td>

                                <td width="590" height="700" valign="top">
                                    <div id="content_wrap" align="center">

                                        <!-- --------------------- Content Start --------------------- -->

                                        <table class="contentpaneopen">
                                        <tr>
                                            <td valign="top" colspan="2">
                                                <style type="text/css">
                                                    <!--
                                                    /*.petnTxt, .petnTxt td p {font-family: "Trebuchet MS"; font-size:10px; line-height:1.5;}*/
                                                    .petnTxt {
                                                        font-size: 10px;
                                                        line-height: 1.5;
                                                    }

                                                    .petn input,
                                                    .petn select {
                                                        margin: 3px 1px 3px 1px;
                                                    }

                                                    .petn {
                                                        margin-top: 12px
                                                    }

                                                    .req {
                                                        color: red;
                                                    }

                                                    .petn_intro {
                                                        border: 1px solid #999;
                                                        padding: 10px;
                                                    }

                                                    .title {
                                                        font-size: 14px
                                                    }
                                                    -->
                                                </style>
                                                <table width="400" border="0" align="center" cellpadding="0"
                                                    cellspacing="0">
                                                    <tr>
                                                        <td>
                                                            <p><img style="margin-top:30px"
                                                                    src="frontend/images/stories/tiuk/petition_banner.jpg"
                                                                    alt="National Tolerance Day" width="400"
                                                                    height="100" /></p>
                                                            <p class="petnTxt title"><strong>Remember, Reflect and Learn
                                                                    - London Bombings 2005</strong></p>
                                                            <p class="petnTxt">On 7th July 2005 a series of bomb blasts
                                                                rocked London and killed 52 commuters and injured 700
                                                                people. In order to heal the open wounds of the attacks,
                                                                we propose that 7th July be established as
                                                                <strong>National Day of Tolerance</strong> &ndash; a day
                                                                of reflection on the dangers of extremism and to promote
                                                                tolerance towards the diversity of cultures and faiths
                                                                that make up modern Britain..</p>
                                                            <p class="petnTxt">We need to collect <strong>2 million
                                                                    signatures</strong> to make this day a
                                                                reality.<br />
                                                                Please <strong>sign</strong> the petition below and send
                                                                to a friend.</p>
                                                            <p class="petnTxt">If you would like to link to this
                                                                petition from MySpace, Facebook, or your website, click
                                                                <a href="petition/link.html" target="_blank">here</a>
                                                                for the code.</p>
                                                            <!--email friend -->
                                                            <div align="center"><input name="email" type="button"
                                                                    id="email" value="Send this page to a friend"
                                                                    onclick="window.open('http://www.toleranceinternational.org.uk/index2.php?option=com_content&amp;task=emailform&amp;id=77&amp;itemid=99999999','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=250,directories=no,location=no'); return false;" />
                                                            </div>
                                                            <!-- email friend -->
                                                            <br />
                                                        </td>
                                                    <tr>
                                                    <tr>
                                                        <td>
                                                            <div class="petn_intro petnTxt">
                                                                <div align="center"><strong>A PETITION TO COMMEMORATE
                                                                        THE 7TH JULY AS<br />
                                                                        NATIONAL TOLERANCE DAY</strong></div>

                                                                <p>To the Prime Minister, the Rt Hon Gordon Brown MP</p>
                                                                <p>Dear Prime Minister</p>
                                                                <p>The events of the 7th July will remain in the memory
                                                                    not only of those affected but of the nation as a
                                                                    whole.</p>
                                                                <p>Tolerance International, UK, a registered charity
                                                                    whose aims include engaging with and alerting those
                                                                    vulnerable to extremism in the United Kingdom, is
                                                                    holding an event entitled &quot;Silent Voices of
                                                                    Islam, a message of peace and tolerance&quot; on the
                                                                    7th July next year.</p>
                                                                <p> We the undersigned, would like to propose the
                                                                    establishment in future years of the 7th July as a
                                                                    National Day of Tolerance, a day on which the nation
                                                                    as a whole reflects on the dangers of extremism
                                                                    disguised as religion and seeks to promote tolerance
                                                                    towards the diversity of cultures and faiths that
                                                                    characterise modern Britain.</p>
                                                                <p>We hope the government will adopt this proposal as a
                                                                    message of hope for the future, a fitting memorial
                                                                    to all victims of extremism and as a step to turn
                                                                    the worst into the best. </p>
                                                                <p>&nbsp;</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>


                                                <script type="text/JavaScript">
                                                    <!--
                                                    function MM_findObj(n, d) { //v4.01
                                                    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
                                                        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
                                                    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
                                                    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
                                                    if(!x && d.getElementById) x=d.getElementById(n); return x;
                                                    }

                                                    function MM_validateForm() { //v4.0
                                                    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
                                                    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
                                                        if (val) { nm=val.name; if ((val=val.value)!="") {
                                                        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
                                                            if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
                                                        } else if (test!='R') { num = parseFloat(val);
                                                            if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
                                                            if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
                                                            min=test.substring(8,p); max=test.substring(p+1);
                                                            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
                                                        } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
                                                    } 
                                                        if(document.petition.email.value != document.petition.email2.value && errors=="") errors="The two email fields do not match.  Ensure email and confirmation are the same.";
                                                    else if(document.petition.find_out.options[0].selected == true && errors=="") errors="How did you find out about the petition?";
                                                    if (errors) alert('Please complete the following:\n'+errors);
                                                    document.MM_returnValue = (errors == '');
                                                    }
                                                    //-->
                                                </script>



                                                <!-- start form -->
                                                <table class="petn" border="0" align="center" cellpadding="0"
                                                    cellspacing="0">
                                                    <form action="_tiuk/petition.php" method="post" name="petition"
                                                        id="petition">
                                                        <tr>
                                                            <td colspan="2" class="petnTxt">Fields marked <span
                                                                    class="req">*</span> are required.<br />
                                                                <br />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Title</td>
                                                            <td class="petnTxt"><input name="title" type="text"
                                                                    size="10" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">First Name<span class="req">*</span>
                                                            </td>
                                                            <td class="petnTxt"><input name="firstname" type="text" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Last Name<span class="req">*</span></td>
                                                            <td class="petnTxt"><input type="text" name="lastname" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Email<span class="req">*</span></td>
                                                            <td class="petnTxt"><input name="email" type="text"
                                                                    size="30" /></td>
                                                        </tr>
                                                        <tr>
                                                        <tr>
                                                            <td class="petnTxt">Confirm Email<span class="req">*</span>
                                                            </td>
                                                            <td class="petnTxt"><input name="email2" type="text"
                                                                    size="30" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Telephone</td>
                                                            <td class="petnTxt"><input name="telephone" type="text"
                                                                    size="30" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Age</td>
                                                            <td class="petnTxt"><input name="age" type="text"
                                                                    size="6" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Faith</td>
                                                            <td class="petnTxt"><select name="faith">
                                                                    <option value="Christian">Christian</option>
                                                                    <option value="Muslim">Muslim</option>
                                                                    <option value="Jewish">Jewish</option>
                                                                    <option value="Hindu">Hindu</option>
                                                                    <option value="Sikh">Sikh</option>
                                                                    <option value="Buddhist">Buddhist</option>
                                                                    <option value="Other">Other</option>
                                                                    <option value="None" selected="selected">None
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Occupation</td>
                                                            <td class="petnTxt"><input name="occupation" type="text"
                                                                    size="30" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Address1<span class="req">*</span></td>
                                                            <td class="petnTxt"><input name="address1" type="text"
                                                                    size="30" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Address2</td>
                                                            <td class="petnTxt"><input name="address2" type="text"
                                                                    size="30" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">City<span class="req">*</span></td>
                                                            <td class="petnTxt"><input name="city" type="text"
                                                                    size="30" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Postcode/ZIP<span class="req">*</span>
                                                            </td>
                                                            <td class="petnTxt"><input name="postcode" type="text"
                                                                    size="10" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="petnTxt">Country</td>
                                                            <td class="petnTxt"><select name="country" size="1">
                                                                    <option value="--" selected="selected">(please
                                                                        select a country) </option>
                                                                    <option value="--">none </option>
                                                                    <option value="AF">Afghanistan </option>
                                                                    <option value="AL">Albania </option>
                                                                    <option value="DZ">Algeria </option>
                                                                    <option value="AS">American Samoa </option>
                                                                    <option value="AD">Andorra </option>
                                                                    <option value="AO">Angola </option>
                                                                    <option value="AI">Anguilla </option>
                                                                    <option value="AQ">Antarctica </option>
                                                                    <option value="AG">Antigua and Barbuda </option>
                                                                    <option value="AR">Argentina </option>
                                                                    <option value="AM">Armenia </option>
                                                                    <option value="AW">Aruba </option>
                                                                    <option value="AU">Australia </option>
                                                                    <option value="AT">Austria </option>
                                                                    <option value="AZ">Azerbaijan </option>
                                                                    <option value="BS">Bahamas </option>
                                                                    <option value="BH">Bahrain </option>
                                                                    <option value="BD">Bangladesh </option>
                                                                    <option value="BB">Barbados </option>
                                                                    <option value="BY">Belarus </option>
                                                                    <option value="BE">Belgium </option>
                                                                    <option value="BZ">Belize </option>
                                                                    <option value="BJ">Benin </option>
                                                                    <option value="BM">Bermuda </option>
                                                                    <option value="BT">Bhutan </option>
                                                                    <option value="BO">Bolivia </option>
                                                                    <option value="BA">Bosnia and Herzegowina </option>
                                                                    <option value="BW">Botswana </option>
                                                                    <option value="BV">Bouvet Island </option>
                                                                    <option value="BR">Brazil </option>
                                                                    <option value="IO">British Indian Ocean Territory
                                                                    </option>
                                                                    <option value="BN">Brunei Darussalam </option>
                                                                    <option value="BG">Bulgaria </option>
                                                                    <option value="BF">Burkina Faso </option>
                                                                    <option value="BI">Burundi </option>
                                                                    <option value="KH">Cambodia </option>
                                                                    <option value="CM">Cameroon </option>
                                                                    <option value="CA">Canada </option>
                                                                    <option value="CV">Cape Verde </option>
                                                                    <option value="KY">Cayman Islands </option>
                                                                    <option value="CF">Central African Republic
                                                                    </option>
                                                                    <option value="TD">Chad </option>
                                                                    <option value="CL">Chile </option>
                                                                    <option value="CN">China </option>
                                                                    <option value="CX">Christmas Island </option>
                                                                    <option value="CC">Cocos (Keeling) Islands </option>
                                                                    <option value="CO">Colombia </option>
                                                                    <option value="KM">Comoros </option>
                                                                    <option value="CG">Congo </option>
                                                                    <option value="CD">Congo, the Democratic Republic of
                                                                        the </option>
                                                                    <option value="CK">Cook Islands </option>
                                                                    <option value="CR">Costa Rica </option>
                                                                    <option value="CI">Cote d'Ivoire </option>
                                                                    <option value="HR">Croatia (Hrvatska) </option>
                                                                    <option value="CU">Cuba </option>
                                                                    <option value="CY">Cyprus </option>
                                                                    <option value="CZ">Czech Republic </option>
                                                                    <option value="DK">Denmark </option>
                                                                    <option value="DJ">Djibouti </option>
                                                                    <option value="DM">Dominica </option>
                                                                    <option value="DO">Dominican Republic </option>
                                                                    <option value="TP">East Timor </option>
                                                                    <option value="EC">Ecuador </option>
                                                                    <option value="EG">Egypt </option>
                                                                    <option value="SV">El Salvador </option>
                                                                    <option value="GQ">Equatorial Guinea </option>
                                                                    <option value="ER">Eritrea </option>
                                                                    <option value="EE">Estonia </option>
                                                                    <option value="ET">Ethiopia </option>
                                                                    <option value="FK">Falkland Islands (Malvinas)
                                                                    </option>
                                                                    <option value="FO">Faroe Islands </option>
                                                                    <option value="FJ">Fiji </option>
                                                                    <option value="FI">Finland </option>
                                                                    <option value="FR">France </option>
                                                                    <option value="FX">France, Metropolitan </option>
                                                                    <option value="GF">French Guiana </option>
                                                                    <option value="PF">French Polynesia </option>
                                                                    <option value="TF">French Southern Territories
                                                                    </option>
                                                                    <option value="GA">Gabon </option>
                                                                    <option value="GM">Gambia </option>
                                                                    <option value="GE">Georgia </option>
                                                                    <option value="DE">Germany </option>
                                                                    <option value="GH">Ghana </option>
                                                                    <option value="GI">Gibraltar </option>
                                                                    <option value="GR">Greece </option>
                                                                    <option value="GL">Greenland </option>
                                                                    <option value="GD">Grenada </option>
                                                                    <option value="GP">Guadeloupe </option>
                                                                    <option value="GU">Guam </option>
                                                                    <option value="GT">Guatemala </option>
                                                                    <option value="GN">Guinea </option>
                                                                    <option value="GW">Guinea-Bissau </option>
                                                                    <option value="GY">Guyana </option>
                                                                    <option value="HT">Haiti </option>
                                                                    <option value="HM">Heard and Mc Donald Islands
                                                                    </option>
                                                                    <option value="VA">Holy See (Vatican City State)
                                                                    </option>
                                                                    <option value="HN">Honduras </option>
                                                                    <option value="HK">Hong Kong </option>
                                                                    <option value="HU">Hungary </option>
                                                                    <option value="IS">Iceland </option>
                                                                    <option value="IN">India </option>
                                                                    <option value="ID">Indonesia </option>
                                                                    <option value="IR">Iran (Islamic Republic of)
                                                                    </option>
                                                                    <option value="IQ">Iraq </option>
                                                                    <option value="IE">Ireland </option>
                                                                    <option value="IL">Israel </option>
                                                                    <option value="IT">Italy </option>
                                                                    <option value="JM">Jamaica </option>
                                                                    <option value="JP">Japan </option>
                                                                    <option value="JO">Jordan </option>
                                                                    <option value="KZ">Kazakhstan </option>
                                                                    <option value="KE">Kenya </option>
                                                                    <option value="KI">Kiribati </option>
                                                                    <option value="KP">Korea, Democratic People's
                                                                        Republic of </option>
                                                                    <option value="KR">Korea, Republic of </option>
                                                                    <option value="KW">Kuwait </option>
                                                                    <option value="KG">Kyrgyzstan </option>
                                                                    <option value="LA">Lao People's Democratic Republic
                                                                    </option>
                                                                    <option value="LV">Latvia </option>
                                                                    <option value="LB">Lebanon </option>
                                                                    <option value="LS">Lesotho </option>
                                                                    <option value="LR">Liberia </option>
                                                                    <option value="LY">Libyan Arab Jamahiriya </option>
                                                                    <option value="LI">Liechtenstein </option>
                                                                    <option value="LT">Lithuania </option>
                                                                    <option value="LU">Luxembourg </option>
                                                                    <option value="MO">Macau </option>
                                                                    <option value="MK">Macedonia, The Former Yugoslav
                                                                        Republic of </option>
                                                                    <option value="MG">Madagascar </option>
                                                                    <option value="MW">Malawi </option>
                                                                    <option value="MY">Malaysia </option>
                                                                    <option value="MV">Maldives </option>
                                                                    <option value="ML">Mali </option>
                                                                    <option value="MT">Malta </option>
                                                                    <option value="MH">Marshall Islands </option>
                                                                    <option value="MQ">Martinique </option>
                                                                    <option value="MR">Mauritania </option>
                                                                    <option value="MU">Mauritius </option>
                                                                    <option value="YT">Mayotte </option>
                                                                    <option value="MX">Mexico </option>
                                                                    <option value="FM">Micronesia, Federated States of
                                                                    </option>
                                                                    <option value="MD">Moldova, Republic of </option>
                                                                    <option value="MC">Monaco </option>
                                                                    <option value="MN">Mongolia </option>
                                                                    <option value="MS">Montserrat </option>
                                                                    <option value="MA">Morocco </option>
                                                                    <option value="MZ">Mozambique </option>
                                                                    <option value="MM">Myanmar </option>
                                                                    <option value="NA">Namibia </option>
                                                                    <option value="NR">Nauru </option>
                                                                    <option value="NP">Nepal </option>
                                                                    <option value="NL">Netherlands </option>
                                                                    <option value="AN">Netherlands Antilles </option>
                                                                    <option value="NC">New Caledonia </option>
                                                                    <option value="NZ">New Zealand </option>
                                                                    <option value="NI">Nicaragua </option>
                                                                    <option value="NE">Niger </option>
                                                                    <option value="NG">Nigeria </option>
                                                                    <option value="NU">Niue </option>
                                                                    <option value="NF">Norfolk Island </option>
                                                                    <option value="MP">Northern Mariana Islands
                                                                    </option>
                                                                    <option value="NO">Norway </option>
                                                                    <option value="OM">Oman </option>
                                                                    <option value="PK">Pakistan </option>
                                                                    <option value="PW">Palau </option>
                                                                    <option value="PA">Panama </option>
                                                                    <option value="PG">Papua New Guinea </option>
                                                                    <option value="PY">Paraguay </option>
                                                                    <option value="PE">Peru </option>
                                                                    <option value="PH">Philippines </option>
                                                                    <option value="PN">Pitcairn </option>
                                                                    <option value="PL">Poland </option>
                                                                    <option value="PT">Portugal </option>
                                                                    <option value="PR">Puerto Rico </option>
                                                                    <option value="QA">Qatar </option>
                                                                    <option value="RE">Reunion </option>
                                                                    <option value="RO">Romania </option>
                                                                    <option value="RU">Russian Federation </option>
                                                                    <option value="RW">Rwanda </option>
                                                                    <option value="KN">Saint Kitts and Nevis </option>
                                                                    <option value="LC">Saint LUCIA </option>
                                                                    <option value="VC">Saint Vincent and the Grenadines
                                                                    </option>
                                                                    <option value="WS">Samoa </option>
                                                                    <option value="SM">San Marino </option>
                                                                    <option value="ST">Sao Tome and Principe </option>
                                                                    <option value="SA">Saudi Arabia </option>
                                                                    <option value="SN">Senegal </option>
                                                                    <option value="SC">Seychelles </option>
                                                                    <option value="SL">Sierra Leone </option>
                                                                    <option value="SG">Singapore </option>
                                                                    <option value="SK">Slovakia (Slovak Republic)
                                                                    </option>
                                                                    <option value="SI">Slovenia </option>
                                                                    <option value="SB">Solomon Islands </option>
                                                                    <option value="SO">Somalia </option>
                                                                    <option value="ZA">South Africa </option>
                                                                    <option value="GS">South Georgia and the South
                                                                        Sandwich Islands </option>
                                                                    <option value="ES">Spain </option>
                                                                    <option value="LK">Sri Lanka </option>
                                                                    <option value="SH">St. Helena </option>
                                                                    <option value="PM">St. Pierre and Miquelon </option>
                                                                    <option value="SD">Sudan </option>
                                                                    <option value="SR">Suriname </option>
                                                                    <option value="SJ">Svalbard and Jan Mayen Islands
                                                                    </option>
                                                                    <option value="SZ">Swaziland </option>
                                                                    <option value="SE">Sweden </option>
                                                                    <option value="CH">Switzerland </option>
                                                                    <option value="SY">Syrian Arab Republic </option>
                                                                    <option value="TW">Taiwan, Province of China
                                                                    </option>
                                                                    <option value="TJ">Tajikistan </option>
                                                                    <option value="TZ">Tanzania, United Republic of
                                                                    </option>
                                                                    <option value="TH">Thailand </option>
                                                                    <option value="TG">Togo </option>
                                                                    <option value="TK">Tokelau </option>
                                                                    <option value="TO">Tonga </option>
                                                                    <option value="TT">Trinidad and Tobago </option>
                                                                    <option value="TN">Tunisia </option>
                                                                    <option value="TR">Turkey </option>
                                                                    <option value="TM">Turkmenistan </option>
                                                                    <option value="TC">Turks and Caicos Islands
                                                                    </option>
                                                                    <option value="TV">Tuvalu </option>
                                                                    <option value="UG">Uganda </option>
                                                                    <option value="UA">Ukraine </option>
                                                                    <option value="AE">United Arab Emirates </option>
                                                                    <option value="GB">United Kingdom </option>
                                                                    <option value="US">United States </option>
                                                                    <option value="UM">United States Minor Outlying
                                                                        Islands </option>
                                                                    <option value="UY">Uruguay </option>
                                                                    <option value="UZ">Uzbekistan </option>
                                                                    <option value="VU">Vanuatu </option>
                                                                    <option value="VE">Venezuela </option>
                                                                    <option value="VN">Viet Nam </option>
                                                                    <option value="VG">Virgin Islands (British)
                                                                    </option>
                                                                    <option value="VI">Virgin Islands (U.S.) </option>
                                                                    <option value="WF">Wallis and Futuna Islands
                                                                    </option>
                                                                    <option value="EH">Western Sahara </option>
                                                                    <option value="YE">Yemen </option>
                                                                    <option value="YU">Yugoslavia </option>
                                                                    <option value="ZM">Zambia </option>
                                                                    <option value="ZW">Zimbabwe </option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" class="petnTxt">How did you find out about
                                                                the petition?<span class="req">*</span>&nbsp;&nbsp;
                                                                <select name="find_out" id="find_out">
                                                                    <option value="" selected="selected">Please select
                                                                    </option>
                                                                    <option value="Friend/Family">Friend/Family</option>
                                                                    <option value="TI-UK website">TI-UK website</option>
                                                                    <option value="Other website">Other website</option>
                                                                    <option value="University ">University </option>
                                                                    <option value="Chat room/ Forums">Chat room/ Forums
                                                                    </option>
                                                                    <option value="Charity employees in the street">
                                                                        Charity employees in the street</option>
                                                                    <option value="Charity employee by telephone">
                                                                        Charity employee by telephone</option>
                                                                    <option value="Magazine/Newspaper">
                                                                        Magazine/Newspaper</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" class="petnTxt"><br />
                                                                <input name="Submit" type="submit"
                                                                    onclick="MM_validateForm('firstname','','R','lastname','','R','email','','RisEmail','email2','','RisEmail','age','','NisNum','address1','','R','city','','R','postcode','','R'); return document.MM_returnValue;return document.MM_returnValue"
                                                                    value="Submit" />
                                                                <br />
                                                                <br />
                                                                <br />
                                                            </td>
                                                        </tr>
                                                    </form>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                        <!-- --------------------- Content Finish ------------------- -->

                                        <span class="article_seperator">&nbsp;</span>

                                    </div>
                                </td>



                                <td width="1" class="divider">&nbsp;</td>

                                <td width="179" valign="top">
                                    <!-- Right Column Menu -->
                                    <?php include 'frontend/includes/menu-right.html';?>
                                    <!-- End Right Column Menu -->
                                </td>

                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <!-- footer -->
            <div id="footer">
                <?php include 'frontend/includes/footer.html';?>
            </div>
            <!-- end footer -->

            </div>

        <!-- JavaScript -->
        <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>

        <script type="text/javascript">
            _uacct = "UA-1723597-2";
            urchinTracker();
        </script>

    </body>

</html>