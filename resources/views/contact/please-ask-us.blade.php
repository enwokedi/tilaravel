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

                                       <table width="100%" cellpadding="0" cellspacing="0" border="0" class="contentpane">
                                            <tbody>
                                                <tr>
                                                    <td width="100%">
                                                        <table width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                        </table>
                                                                        <br>
                                                                    </td>
                                                                    <td align="right" valign="top">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <br>
                                                        <br><br>
                                                        <form action="http://www.toleranceinternational.org.uk/index.php?option=com_contact&amp;Itemid=3"
                                                            method="post" name="emailForm" target="_top" id="emailForm">
                                                            <h1>Please Ask Us</h1>
                                                            <div class="contact_email">
                                                                <label for="contact_name">
                                                                    Enter your name: </label>
                                                                <br>
                                                                <input type="text" name="name" id="contact_name" size="30" class="inputbox" value="">
                                                                <br>
                                                                <label for="contact_email">
                                                                    E-mail address: </label>
                                                                <br>
                                                                <input type="text" name="email" id="contact_email" size="30" class="inputbox" value="">
                                                                <br>
                                                                <label for="contact_subject">
                                                                    Message subject: </label>
                                                                <br>
                                                                <input type="text" name="subject" id="contact_subject" size="30" class="inputbox" value="">
                                                                <br><br>
                                                                <label for="contact_text">
                                                                    Enter your message: </label>
                                                                <br>
                                                                <textarea cols="50" rows="10" name="text" id="contact_text" class="inputbox"></textarea>
                                                                <br>
                                                                <br>
                                                                <input type="button" name="send" value="Send" class="button" onclick="validate()">
                                                            </div>
                                                            <input type="hidden" name="option" value="com_contact">
                                                            <input type="hidden" name="con_id" value="1">
                                                            <input type="hidden" name="sitename" value="Tolerance International /UK">
                                                            <input type="hidden" name="op" value="sendmail">
                                                            <input type="hidden" name="je96d2c751866b698fc3c472d16b42e2d" value="1">
                                                        </form>
                                                        <br>
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