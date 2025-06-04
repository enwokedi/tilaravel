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

                                        <body>
                                            <p style="color: #ffffff; background-color: #ff3300">&nbsp;&nbsp;<strong>E-bulletin</strong></p>

                                            <p style="color:#FF0000; font-weight:bold">Email Newsletter Subscription</p><br>

                                            <form name="subForm" action="ebulletin_register.php" method="post">

                                                <table align="center" border="0" cellpadding="0" cellspacing="0" class="cell">
                                                    <!--
                                        <tr>
                                            <td width="200">Title:</td>
                                            <td width="200">
                                            <input name="title" type="text" size="30" /></td>
                                        </tr>
                                        <tr>
                                            <td>First name: </td>
                                            <td>
                                            <input name="firstname" type="text" size="30" /></td>
                                        </tr>
                                        <tr>
                                            <td>Surname:</td>
                                            <td><input name="surname" type="text" size="30" /></td>
                                        </tr>
                                        -->
                                                    <tbody>
                                                        <tr>
                                                            <td width="100">Email Address: </td>
                                                            <td width="200"><input name="email" type="text" size="30"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100">Confirm Email: </td>
                                                            <td width="200"><input name="confemail" type="text" size="30"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><br>
                                                                How you would like to receive your email:</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <input name="format" type="radio" value="html" checked="checked">HTML (with pictures)<br>
                                                                <input name="format" type="radio" value="text">
                                                                Text (without pictures)
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>

                                                            <td><br>
                                                                <input name="Submit" type="submit"
                                                                    onclick="MM_validateForm('email','','RisEmail','confemail','','RisEmail');return document.MM_returnValue" "="" value="
                                                                    Subscribe">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                            <br>
                                            <hr>
                                            <br>
                                            <br>
                                            <form action="ebulletin_register.php" method="get">
                                                <table align="center" border="0" cellpadding="0" cellspacing="0" class="cell">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">To <strong>unsubscibe</strong> from the EBulletin, please enter your email here:
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100">Email Address: </td>
                                                            <td width="200"><input name="unsub" type="text" size="30"></td>
                                                        </tr>

                                                        <tr>
                                                            <td></td>

                                                            <td><br>
                                                                <input name="Submit" type="submit"
                                                                    onclick="MM_validateForm('unsub','','RisEmail');return document.MM_returnValue"
                                                                    value="Unsubscribe">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                            <style type="text/css">
                                                <!--
                                                .cell tr td {
                                                    padding-top: 10px;
                                                }
                                                -->
                                            </style>
                                            <script type="text/JavaScript">
                                        <!--

                                        //-->
                                        </script>

                                            <qlr-qypibwvctoda></qlr-qypibwvctoda>
                                        </body>

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