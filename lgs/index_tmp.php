<?php if (!isset($RUN)) {
    exit();
} ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Let's get Smart</title>
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <script src="Javascript/Flot/excanvas.js"></script>
        <![endif]-->
        <link href="CSS/fonts.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="CSS/style.css" />
        <script src="Javascript/jQuery/jquery-1.7.2.min.js"></script>
        <script src="Javascript/Flot/jquery.flot.js"></script>
        <script src="Javascript/Flot/jquery.flot.resize.js"></script>
        <script src="Javascript/Flot/jquery.flot.pie.js"></script>
        <script src="Javascript/DataTables/jquery.dataTables.min.js"></script>
        <script src="Javascript/ColResizable/colResizable-1.3.js"></script>
        <script src="Javascript/jQueryUI/jquery-ui-1.8.21.min.js"></script>
        <script src="Javascript/Uniform/jquery.uniform.js"></script>
        <script src="Javascript/Tipsy/jquery.tipsy.js"></script>
        <script src="Javascript/Elastic/jquery.elastic.js"></script>
        <script src="Javascript/ColorPicker/colorpicker.js"></script>
        <script src="Javascript/SuperTextarea/jquery.supertextarea.min.js"></script>
        <script src="Javascript/UISpinner/ui.spinner.js"></script>
        <script src="Javascript/MaskedInput/jquery.maskedinput-1.3.js"></script>
        <script src="Javascript/ClEditor/jquery.cleditor.js"></script>
        <script src="Javascript/FullCalendar/fullcalendar.js"></script>
        <script src="Javascript/ColorBox/jquery.colorbox.js"></script>
        <script src="Javascript/kanrisha.js"></script>
		<!-- richtext -->
		<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
        <!--origin-->
        <script language ="javascript" src="grid.js"></script>
        <script src="cms.js" type="text/javascript"></script>
        <script language="javascript">

            window.onscroll = function()
            {
                MoveLoadingMessage("loadingDiv");
            }

            jQuery.ajaxSetup({
                beforeSend: function() {            
                    $('#loadingDiv').show()
                },
                complete: function(){
                    $('#loadingDiv').hide()
                },
                success: function() {}
            });
         
        </script>
        <script type="text/javascript">
            var htmlobjek;
            $(document).ready(function(){
                //apabila terjadi event onchange terhadap object <select id=propinsi>
                $(".one").change(function(){
                    var propinsi = $(".one").val();
                    $.ajax({
                        url: "index.php?module=chain",
                        data: "sch="+propinsi,
                        cache: false,
                        success: function(msg){
                            //jika data sukses diambil dari server kita tampilkan
                            //di <select id=kota>
                            $(".two").html(msg);
                        }
                    });
                });
                
            });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
        <table style="display:none" id="loadingDiv" style="position: absolute; left: 10px; top: 10px">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td bgcolor="red">
                                <font color="white" size="3"><b>&nbsp;Please wait ...&nbsp;</b></font>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <script language="javascript">
            MoveLoadingMessage("loadingDiv");
        </script>
        <!-- Top Panel -->
        <div class="top_panel">
            <div class="wrapper">
                <div class="user">
                    <img src="Images/user_avatar.png" alt="user_avatar" class="user_avatar" />
                    <span class="label"><?php echo $_SESSION['txtLogin'] ?></span>
                    <!-- Top Tooltip -->
                    <div class="top_tooltip">
                        <div>
                            <ul class="user_options">
                                <li class="i_16_profile"><a href="#" title="Profile"></a></li>
                                <li class="i_16_tasks"><a href="#" title="Tasks"></a></li>
                                <li class="i_16_notes"><a href="#" title="Notes"></a></li>
                                <li class="i_16_options"><a href="#" title="Options"></a></li>
                                <li class="i_16_logout"><a href="#" title="Log-Out"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="top_links">
                    <ul>
                        <li class="i_22_logout">
                            <a href="logout.php" title="Logout">
                                <span class="label">Logout</span>
                            </a>
                        </li>
                        <li class="i_22_settings">
                            <a href="#" title="Settings">
                                <span class="label">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <header class="main_header">
            <div class="wrapper">
                <div class="logo">
                    <a href="#" title="Ujian Home">
                        <img src="Images/ujian_logo.png" alt="ujian" />
                    </a>
                </div>
            </div>
        </header>
        <div class="wrapper contents_wrapper">

            <aside class="sidebar">
                <ul class="tab_nav">
                    <?php
                    while ($a3 = xyz39zyx::xyz57zyx($modules)) {
                        if (!preg_match('/New/', $a3['module_name'])) {
                            $active = "";
                            $icon = "i_32_forms";
                            switch ($_GET['module']) {
                                case "cats":
                                    $active = ($a3['module_name'] == "Categories") ? "active_tab" : "";
                                    break;
                                case "quizzes":
                                case "questions":
                                case "add_question":
                                case "add_edit_quiz":
                                    $active = ($a3['module_name'] == "Quizzes") ? "active_tab" : "";
                                    break;
                                case "local_users":
                                case "add_edit_user":
                                    $active = ($a3['module_name'] == "Local users") ? "active_tab" : "";
                                    break;
                                case "active_assignments":
                                case "start_quiz":
                                    $active = ($a3['module_name'] == "Active Assignments") ? "active_tab" : "";
                                    break;
                                case "old_assignments":
                                case "view_details":
                                    $active = ($a3['module_name'] == "My old assigments") ? "active_tab" : "";
                                    break;
                                case "assignments":
                                case "add_assignment":
                                case "view_assignment":
                                case "view_details":
                                    $active = ($a3['module_name'] == "Assignments") ? "active_tab" : "";
                                    break;
                                case "schools":
                                case "classes":
                                    $active = ($a3['module_name'] == "Schools") ? "active_tab" : "";
                                    break;
                            }
                            switch ($a3['module_name']) {
                                case "Local users":
                                    $icon = "i_32_ui";
                                    break;
                                case "Categories":
                                    $icon = "i_32_dashboard";
                                    break;
                                case "Assignments":
                                case "Active Assignments":
                                    $icon = "i_32_inbox";
                                    break;
                                case "My old assigments":
                                    $icon = "i_32_charts";
                                    break;
                                case "Schools":
                                    $icon = "i_32_grad";
                                    break;
                            }
                            ?>
                            <li class="<?php echo $active ?> <?php echo $icon ?>">
                                <?php
                                echo "<a href='index.php?module=" . $a3['file_name'] . "' title='" . $a3['module_name'] . "'><span class='tab_label'>" . $a3['module_name'] . "</span>";
                                echo "</a>";
                                ?>
                            </li>
                            <?php
                        }
                    }
                    switch ($_GET['module']) {
                        case "cats":
                            $icon16 = "i_16_dashboard";
                            break;
                        case "quizzes":
                        case "questions":
                        case "add_question":
                        case "add_edit_quiz":
                        case "start_quiz":
                            $icon16 = "i_16_forms";
                            break;
                        case "local_users":
                        case "add_edit_user":
                            $icon16 = "i_16_ui";
                            break;
                        case "assignments":
                        case "add_assignment":
                        case "view_assignment":
                        case "view_details":
                        case "active_assignments":
                            $icon16 = "i_16_message";
                            break;
                        case "old_assignments":
                            $icon16 = "i_16_charts";
                            break;
                        case "schools":
                        case "classes":
                            $icon16 = "i_16_grad";
                            break;
                    }
                    ?>
                </ul>
            </aside>

            <div class="contents">
                <div class="grid_wrapper">

                    <div class="g_6 contents_header">
                        <h3 class="<?php echo $icon16 ?> tab_label"><?php echo desc_func(); ?></h3>
                    </div>
                    <div class="g_6 contents_options">
                        <div class="simple_buttons">
							<?php if($module_name=="view_assignment" && isset($_GET['asg_id'])){ ?>
                            <div class="bwIcon i_16_print" ><a href="print.php" target="_blank">Print</a></div>
							<?php } ?>
							<?php if($module_name=="questions" && isset($_GET['quiz_id'])){ ?>
                            <div class="bwIcon i_16_pdf" ><a href="pdf_quiz.php?quiz_id=<?php echo $_GET['quiz_id'] ?>" target="_blank">PDF</a></div>
                            <div class="bwIcon i_16_print" ><a href="print_quiz.php?quiz_id=<?php echo $_GET['quiz_id'] ?>&print=yes" target="_blank">Print</a></div>
							<?php } ?>
                            <div class="bwIcon i_16_help" onclick="alert('About LGS\nVersion 121007.1900\n')">Help</div>
                        </div>
                    </div>

                    <div class="g_12 separator"><span></span></div>
                    <div class="g_12">
                        <?php
                        include "modules/" . $module_name . "_tmp.php";
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <table style="width:100%" cellpadding="0" cellspacing="0" style="display:s;">
            <?php
            /* 
              for($i=0;$i<count($queries);$i++)
              {
              ?>
              <tr>
              <td bgcolor="moccasing" class="query_head">
              <b>Query <?php echo $i+1 ?></b>
              </td>
              </tr>
              <tr>
              <td class="query">
              <?php echo xyz96zyx::xyz102zyx($queries[$i]) ?>
              </td>
              </tr>
              <tr>
              <td>
              <br>
              </td>
              </tr>
              <?php
              }  */
            ?>
        </table>
        <footer>
            <div class="wrapper">
                <span class="copyright">
                    COPYRIGHT &copy; 2012 Let's get smart
                </span>
            </div>
        </footer>
    </body>
</html>