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

                                        <table id="dybfm" align="center" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td align="left" valign="top">
                                                        <!-- <div style="padding-top:12px; padding-bottom: 6px; font-size: 26px; font-family: 'Monotype Corsiva';">Do your bit!</div> -->
                                                        <div
                                                            style="padding-top:12px; padding-bottom: 6px; font-size: 26px;">
                                                            Support our work!</div>
                                                        <p><strong>The two greatest challenges facing humanity today are
                                                                violence born of political or ideological extremism and
                                                                global warming.</strong></p>
                                                        <p>Tolerance International UK will not share your details with
                                                            anyone &amp; you can unsubscribe at any time.</p>
                                                        <p><strong>Required fields<span class="style1">*</span></strong></p>
                                                        <form id="dyb_long_form" name="form1" method="post"
                                                            action="dyb_long_form.php">
                                                            <table width="440" border="0" align="center" cellpadding="0"
                                                                cellspacing="0" class="p">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="36%">Title</td>
                                                                        <td width="64%"><select name="title">
                                                                                <option selected="selected">Mr</option>
                                                                                <option>Mrs</option>
                                                                                <option>Ms</option>
                                                                                <option>Miss</option>
                                                                                <option>Dr</option>
                                                                                <option>Prof</option>
                                                                            </select> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Firstname <span class="style1">*</span> </td>
                                                                        <td><input name="firstname" type="text"
                                                                                id="firstname"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Surname <span class="style1">* </span></td>
                                                                        <td><input name="surname" type="text" id="surname">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Address <span class="style1">*</span> </td>
                                                                        <td><input name="address1" type="text"
                                                                                id="address1"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&nbsp;</td>
                                                                        <td><input name="address2" type="text"
                                                                                id="address2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Town</td>
                                                                        <td><input name="town" type="text" id="town"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Postcode <span class="style1">* </span></td>
                                                                        <td><input name="postcode" type="text"
                                                                                id="postcode"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Company/Organisation</td>
                                                                        <td><input name="company" type="text" id="company">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Mobile Phone </td>
                                                                        <td><input name="mphone" type="text" id="mphone">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Telephone</td>
                                                                        <td><input name="telephone" type="text"
                                                                                id="telephone"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>E-mail <span class="style1">* </span></td>
                                                                        <td><input name="email" type="text" id="email"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <p><br><br>Please tick the campaign(s) that have
                                                                                your interest and we will send you more
                                                                                information on how you can support our work:
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" align="left" valign="middle"><br>
                                                                            <input name="extremism" type="checkbox"
                                                                                id="extremism"
                                                                                value="Emergency aid &amp; relief for Camp Ashraf">
                                                                            Emergency aid &amp; relief for Camp Ashraf
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" align="left" valign="middle"><br>
                                                                            <input name="africa" type="checkbox" id="africa"
                                                                                value="The African Hope project.">
                                                                            The African Hope project
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" align="left" valign="middle"><br>
                                                                            <input name="myCarbon" type="checkbox"
                                                                                id="myCarbon"
                                                                                value="Offsetting my carbon emission.">
                                                                            Offsetting my carbon emission
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" align="left" valign="middle"><br>
                                                                            <input name="familyCarbon" type="checkbox"
                                                                                id="familyCarbon"
                                                                                value="Offsetting my family’s carbon emission.">
                                                                            Offsetting my family’s carbon emission
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" align="left" valign="middle"><br>
                                                                            <input name="businessCarbon" type="checkbox"
                                                                                id="businessCarbon"
                                                                                value="Offsetting my business’ carbon emission.">
                                                                            Offsetting my business’ carbon emission
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" align="left" valign="middle"><br>
                                                                            <input name="eduAndResearch" type="checkbox"
                                                                                id="eduAndResearch"
                                                                                value="Education and research to defeat extremism.">
                                                                            Education and research to defeat extremism
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" align="left" valign="middle"><br>
                                                                            <input name="wholeOrg" type="checkbox"
                                                                                id="wholeOrg"
                                                                                value="The organisation as a whole.">
                                                                            The organisation as a whole
                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td align="left" valign="middle"><br>
                                                                            Comments</td>
                                                                        <td><br><textarea name="comments" cols="30"
                                                                                rows="3"></textarea></td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>&nbsp;</td>
                                                                        <td><br>
                                                                            <input type="reset" name="Reset" value="Reset">
                                                                            <input name="Submit" type="submit"
                                                                                onclick="MM_validateForm('firstname','','R','surname','','R','address1','','R','postcode','','R','email','','RisEmail');return document.MM_returnValue"
                                                                                value="Submit">
                                                                            <br><br>
                                                                            <br>


                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2"><a
                                                                                href="mailto:info@toleranceinternational.org.uk">
                                                                                <div id="endLnk">Share your ideas and tell
                                                                                    us what possibilities you have to help
                                                                                </div>
                                                                                <br><br><br>

                                                                            </a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
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