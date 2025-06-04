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
                                            <tbody>
                                                <tr>
                                                    <td valign="top" colspan="2">


                                                        <span style="font-size: 10pt; font-family: 'Trebuchet MS'">
                                                            <font style="font-size: 20px" color="#000000"><img
                                                                    src="frontend/images/stories/tiuk/green/Arrow1.jpg" alt=" "
                                                                    width="21" height="21">&nbsp;Annual report</font>
                                                        </span><span style="font-size: 10pt; font-family: 'Trebuchet MS'">
                                                            <font color="#000000">&nbsp;</font>
                                                        </span><span style="font-size: 10pt; font-family: 'Trebuchet MS'">
                                                            <font color="#000000">&nbsp;</font>
                                                        </span>
                                                        <p style="margin: 0cm 0cm 0pt; line-height: 14pt" class="MsoNormal">
                                                            &nbsp;</p>
                                                        <p style="margin: 0cm 0cm 0pt; line-height: 14pt" class="MsoNormal">
                                                            <span style="font-size: 10pt; font-family: 'Trebuchet MS'">
                                                                <font color="#000000">This page is under construction</font>
                                                            </span></p>
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