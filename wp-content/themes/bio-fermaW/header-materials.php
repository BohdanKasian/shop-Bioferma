<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bio-ferma
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <script type="text/javascript">if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|Opera Mini|IEMobile|Mobile|Tablet/i.test(navigator.userAgent) ) {$('html').addClass('mobile');}
        $(function(){$('a[href^=#]').bind("click", function(e){
            var href = $(this).attr('href');
            if (href != '#') {popupScroll(href);e.preventDefault();}
        });
            if ($("html").hasClass("mobile")) {
                $('.virtuals').removeClass('fixbar').addClass('relbar');
                $('.ascroll').css({"top":"0"});
            }
        });
        function popupScroll(id) {
            var scrollObj = $(id);
            if (scrollObj.attr('id') != undefined) {
                if (id.substr(0, 4) == '#ac_') {
                    var idContent = id.substr(2);
                    if ($('#pg'+idContent).hasClass('hidden')) {
                        $('#pg'+idContent).addClass('mustHide').removeClass('hidden');
                    }
                }
                $('html,body').stop().animate({scrollTop: scrollObj.offset().top}, 1000);
            }
        }
        function setGood(contentId, goodId) {
            $('#'+contentId).find('input.goodsId').val(goodId);
        }
        function popupOpen(id) {
            if ($('#pg'+id).hasClass('hidden')) {
                $('#pg'+id).addClass('popupContent').addClass('mustHide').removeClass('hidden');
            } else {
                $('#pg'+id).addClass('popupContent');
            }
            $('#virtual'+id).css({"top":"50%","margin-top":-parseInt(parseInt($('#virtual'+id).css('height'))/2)+"px"});
            $('#pg'+id).bind("click", function(e){
                if(!$(e.target).closest('#'+id).length) {
                    if ($('#pg'+id).hasClass('mustHide')) $('#pg'+id).addClass('hidden').removeClass('mustHide');
                    $('#pg'+id).removeClass('popupContent');
                    $('#pg'+id).unbind("click");
                    e.preventDefault();
                }
            });
        }
        function popupClose(id) {
            if ($('#pg'+id).hasClass('mustHide')) $('#pg'+id).addClass('hidden').removeClass('mustHide');
            $('#virtual'+id).css({"top":"0","margin-top":"0"});
            $('#pg'+id).removeClass('popupContent');
            $('#pg'+id).unbind("click");
        }</script><style type="text/css">html,body{height:100%;margin:0;}#i489, #i489 .irz {width:574px;height:22px;}#i495, #i495 .irz {width:160px;height:24px;}div#i504{line-height:0;font-size:0;}div#i506{line-height:0;font-size:0;}#i508, #i508 .irz {width:421px;height:49px;}#i511, #i511 .irz {width:566px;height:49px;}#i780, #i780 .irz {width:274px;height:90px;}#i783, #i783 .irz {width:274px;height:90px;}#i785, #i785 .irz {width:274px;height:90px;}#i787, #i787 .irz {width:274px;height:90px;}#i789, #i789 .irz {width:274px;height:85px;}#i791, #i791 .irz {width:258px;height:85px;}#i793, #i793 .irz {width:266px;height:88px;}#i795, #i795 .irz {width:266px;height:86px;}div#i488{line-height:0;font-size:0;}#i497, #i497 .irz {width:132px;height:24px;}#i503, #i503 .irz {width:192px;height:59px;}#i505, #i505 .irz {width:431px;height:236px;}div#i509{line-height:0;font-size:0;}div#i512{line-height:0;font-size:0;}#i546, #i546 .irz {width:998px;height:607px;}div#i580{line-height:0;font-size:0;}#i1980, #i1980 .irz {width:911px;height:412px;}div#i514{line-height:0;font-size:0;}div#i515{line-height:0;font-size:0;}div#i516{line-height:0;font-size:0;}#i517, #i517 .irz {width:30px;height:43px;}#i518, #i518 .irz {width:30px;height:43px;}#i519, #i519 .irz {width:30px;height:43px;}#i520, #i520 .irz {width:333px;height:34px;}#i521, #i521 .irz {width:328px;height:34px;}#i522, #i522 .irz {width:336px;height:34px;}#i524, #i524 .irz {width:343px;height:49px;}div#i525{line-height:0;font-size:0;}div#i526{line-height:0;font-size:0;}#i527, #i527 .irz {width:488px;height:32px;}div#i528{line-height:0;font-size:0;}#i529, #i529 .irz {width:180px;height:21px;}div#i530{line-height:0;font-size:0;}div#i531{line-height:0;font-size:0;}div#i532{line-height:0;font-size:0;}div#i533{line-height:0;font-size:0;}#i534, #i534 .irz {width:215px;height:21px;}#i535, #i535 .irz {width:472px;height:21px;}#i536, #i536 .irz {width:425px;height:21px;}#i537, #i537 .irz {width:365px;height:21px;}#i544, #i544 .irz {width:693px;height:45px;}div#i545{line-height:0;font-size:0;}#i548, #i548 .irz {width:674px;height:49px;}#i605, #i605 .irz {width:161px;height:30px;}#i611, #i611 .irz {width:178px;height:30px;}div#i804{line-height:0;font-size:0;}#i809, #i809 .irz {width:216px;height:28px;}#i830, #i830 .irz {width:451px;height:269px;}#i841, #i841 .irz {width:451px;height:141px;}#i851, #i851 .irz {width:451px;height:95px;}div#i852{line-height:0;font-size:0;}div#i853{line-height:0;font-size:0;}#i855, #i855 .irz {width:476px;height:43px;}#i857, #i857 .irz {width:860px;height:63px;}div#i860{line-height:0;font-size:0;}#i867, #i867 .irz {width:341px;height:32px;}div#i1136{line-height:0;font-size:0;}div#i874{line-height:0;font-size:0;}#i938, #i938 .irz {width:710px;height:173px;}#i952, #i952 .irz {width:710px;height:433px;}div#i549{line-height:0;font-size:0;}#i550, #i550 .irz {width:931px;height:477px;}#i553, #i553 .irz {width:537px;height:49px;}div#i554{line-height:0;font-size:0;}#i555, #i555 .irz {width:923px;height:419px;}#i555 .arrow {height:419px;line-height:419px;}#i992, #i992 .crz {width:923px;height:350px;}#i991, #i991 .crz {width:923px;height:390px;}#i990, #i990 .crz {width:923px;height:375px;}#i989, #i989 .crz {width:923px;height:350px;}#i988, #i988 .crz {width:923px;height:350px;}#i987, #i987 .crz {width:923px;height:350px;}#i558, #i558 .irz {width:997px;height:26px;}#i571, #i571 .irz {width:266px;height:49px;}div#i572{line-height:0;font-size:0;}#i573, #i573 .irz {width:999px;height:10px;}div#i574{line-height:0;font-size:0;}#i575, #i575 .irz {width:354px;height:27px;}#i576, #i576 .irz {width:307px;height:46px;}#i577, #i577 .irz {width:185px;height:78px;}#i578, #i578 .irz {width:183px;height:60px;}#i579, #i579 .irz {width:183px;height:60px;}div#i581{line-height:0;font-size:0;}div#i1104{line-height:0;font-size:0;}#i583, #i583 .irz {width:107px;height:110px;}#i584, #i584 .irz {width:107px;height:110px;}#i585, #i585 .irz {width:107px;height:109px;}#i586, #i586 .irz {width:107px;height:107px;}#i587, #i587 .irz {width:107px;height:108px;}#i588, #i588 .irz {width:107px;height:108px;}#i589, #i589 .irz {width:107px;height:106px;}div#i599{line-height:0;font-size:0;}div#i625{line-height:0;font-size:0;}div#i638{line-height:0;font-size:0;}div#i651{line-height:0;font-size:0;}div#i664{line-height:0;font-size:0;}div#i677{line-height:0;font-size:0;}div#i690{line-height:0;font-size:0;}div#i703{line-height:0;font-size:0;}div#i816{line-height:0;font-size:0;}div#i836{line-height:0;font-size:0;}div#i847{line-height:0;font-size:0;}#i600, #i600 .irz {width:283px;height:141px;}#i624, #i624 .irz {width:283px;height:141px;}#i637, #i637 .irz {width:283px;height:141px;}#i650, #i650 .irz {width:283px;height:141px;}#i663, #i663 .irz {width:283px;height:141px;}#i676, #i676 .irz {width:283px;height:141px;}#i689, #i689 .irz {width:283px;height:141px;}#i702, #i702 .irz {width:283px;height:141px;}#i814, #i814 .irz {width:283px;height:141px;}#i834, #i834 .irz {width:283px;height:141px;}#i845, #i845 .irz {width:283px;height:141px;}#i601, #i601 .irz {width:283px;height:31px;}#i628, #i628 .irz {width:283px;height:31px;}#i641, #i641 .irz {width:283px;height:31px;}#i654, #i654 .irz {width:283px;height:31px;}#i667, #i667 .irz {width:283px;height:31px;}#i680, #i680 .irz {width:283px;height:31px;}#i693, #i693 .irz {width:283px;height:31px;}#i706, #i706 .irz {width:283px;height:31px;}#i819, #i819 .irz {width:283px;height:31px;}#i838, #i838 .irz {width:283px;height:31px;}#i848, #i848 .irz {width:283px;height:31px;}#i602, #i602 .irz {width:281px;height:22px;}#i629, #i629 .irz {width:281px;height:22px;}#i642, #i642 .irz {width:281px;height:22px;}#i655, #i655 .irz {width:281px;height:22px;}#i668, #i668 .irz {width:281px;height:22px;}#i681, #i681 .irz {width:281px;height:22px;}#i694, #i694 .irz {width:281px;height:22px;}#i707, #i707 .irz {width:281px;height:22px;}#i820, #i820 .irz {width:281px;height:22px;}#i839, #i839 .irz {width:281px;height:22px;}#i849, #i849 .irz {width:281px;height:22px;}#i582, #i582 .irz {width:107px;height:110px;}#i995, #i995 .irz {width:421px;height:35px;}#i1082, #i1082 .irz {width:280px;height:196px;}div#i1084{line-height:0;font-size:0;}div#i1085{line-height:0;font-size:0;}#i1086, #i1086 .irz {width:349px;height:167px;}#i1088, #i1088 .irz {width:281px;height:22px;}#i1089, #i1089 .irz {width:873px;height:52px;}#i1090, #i1090 .irz {width:12px;height:58px;}#i1091, #i1091 .irz {width:837px;height:32px;}#i998, #i998 .irz {width:491px;height:37px;}div#i753{line-height:0;font-size:0;}#i1135, #i1135 .irz {width:10px;height:62px;}#i894, #i894 .irz {width:916px;height:46px;}div#i923{line-height:0;font-size:0;}#i970, #i970 .irz {width:998px;height:41px;}div#i996{line-height:0;font-size:0;}#i1035, #i1035 .irz {width:415px;height:172px;}#i1001, #i1001 .irz {width:539px;height:75px;}#i1036, #i1036 .irz {width:415px;height:172px;}#i1005, #i1005 .irz {width:291px;height:37px;}#i1009, #i1009 .irz {width:775px;height:2px;}#i1008, #i1008 .irz {width:540px;height:74px;}#i1037, #i1037 .irz {width:312px;height:180px;}#i1011, #i1011 .irz {width:465px;height:36px;}#i1012, #i1012 .irz {width:542px;height:99px;}#i1013, #i1013 .irz {width:542px;height:71px;}#i1014, #i1014 .irz {width:766px;height:2px;}#i1015, #i1015 .irz {width:766px;height:2px;}#i1038, #i1038 .irz {width:415px;height:172px;}#i1043, #i1043 .irz {width:476px;height:49px;}#i1017, #i1017 .irz {width:410px;height:39px;}#i1018, #i1018 .irz {width:531px;height:99px;}#i1019, #i1019 .irz {width:536px;height:71px;}#i1020, #i1020 .irz {width:766px;height:2px;}#i1039, #i1039 .irz {width:415px;height:164px;}#i1022, #i1022 .irz {width:283px;height:36px;}#i1023, #i1023 .irz {width:540px;height:73px;}#i1024, #i1024 .irz {width:541px;height:73px;}#i1025, #i1025 .irz {width:766px;height:2px;}#i1027, #i1027 .irz {width:501px;height:37px;}#i1028, #i1028 .irz {width:523px;height:73px;}#i1029, #i1029 .irz {width:525px;height:100px;}#i1030, #i1030 .irz {width:766px;height:2px;}#i1041, #i1041 .irz {width:415px;height:172px;}#i1032, #i1032 .irz {width:521px;height:39px;}#i1033, #i1033 .irz {width:513px;height:98px;}#i1034, #i1034 .irz {width:580px;height:83px;}#i1044, #i1044 .irz {width:476px;height:74px;}#i1045, #i1045 .irz {width:289px;height:147px;}#i1046, #i1046 .irz {width:281px;height:22px;}#i1047, #i1047 .irz {width:10px;height:149px;}#i1048, #i1048 .irz {width:291px;height:25px;}div#i1049{line-height:0;font-size:0;}#i1123, #i1123 .irz {width:436px;height:43px;}#i1083, #i1083 .irz {width:436px;height:43px;}#i1074, #i1074 .irz {width:281px;height:22px;}#i1075, #i1075 .irz {width:280px;height:147px;}#i1076, #i1076 .irz {width:279px;height:29px;}#i1077, #i1077 .irz {width:10px;height:149px;}div#i1078{line-height:0;font-size:0;}#i1079, #i1079 .irz {width:296px;height:106px;}#i1080, #i1080 .irz {width:305px;height:46px;}#i1094, #i1094 .irz {width:34px;height:25px;}#i1095, #i1095 .irz {width:34px;height:25px;}#i1096, #i1096 .irz {width:34px;height:25px;}#i1097, #i1097 .irz {width:34px;height:25px;}#i1098, #i1098 .irz {width:34px;height:25px;}#i1099, #i1099 .irz {width:34px;height:25px;}div#i1102{line-height:0;font-size:0;}div#i1103{line-height:0;font-size:0;}div#i1105{line-height:0;font-size:0;}#i1110, #i1110 .irz {width:970px;height:43px;}#i1111, #i1111 .irz {width:404px;height:207px;}div#i1120{line-height:0;font-size:0;}div#i1121{line-height:0;font-size:0;}div#i1125{line-height:0;font-size:0;}div#i1126{line-height:0;font-size:0;}div#i1127{line-height:0;font-size:0;}#i1128, #i1128 .irz {width:328px;height:117px;}div#i1129{line-height:0;font-size:0;}#i1132, #i1132 .irz {width:241px;height:23px;}#i1133, #i1133 .irz {width:241px;height:23px;}#i1134, #i1134 .irz {width:241px;height:23px;}#i1981, #i1981 .irz {width:464px;height:35px;}#i606, #i606 .irz {width:30px;height:50px;}#i607, #i607 .irz {width:178px;height:35px;}#i608, #i608 .irz {width:178px;height:36px;}#i609, #i609 .irz {width:178px;height:35px;}#i610, #i610 .irz {width:178px;height:36px;}#i612, #i612 .irz {width:178px;height:34px;}#i613, #i613 .irz {width:178px;height:35px;}div#i614{line-height:0;font-size:0;}div#i626{line-height:0;font-size:0;}div#i639{line-height:0;font-size:0;}div#i652{line-height:0;font-size:0;}div#i665{line-height:0;font-size:0;}div#i678{line-height:0;font-size:0;}div#i691{line-height:0;font-size:0;}div#i704{line-height:0;font-size:0;}div#i817{line-height:0;font-size:0;}div#i837{line-height:0;font-size:0;}div#i846{line-height:0;font-size:0;}#i615, #i615 .irz {width:279px;height:30px;}#i630, #i630 .irz {width:406px;height:30px;}#i643, #i643 .irz {width:406px;height:30px;}#i656, #i656 .irz {width:406px;height:30px;}#i669, #i669 .irz {width:406px;height:30px;}#i682, #i682 .irz {width:406px;height:30px;}#i695, #i695 .irz {width:406px;height:30px;}#i708, #i708 .irz {width:458px;height:30px;}#i821, #i821 .irz {width:458px;height:30px;}#i840, #i840 .irz {width:458px;height:30px;}#i850, #i850 .irz {width:458px;height:30px;}#i616, #i616 .irz {width:11px;height:55px;}#i627, #i627 .irz {width:11px;height:55px;}#i640, #i640 .irz {width:11px;height:55px;}#i653, #i653 .irz {width:11px;height:55px;}#i666, #i666 .irz {width:11px;height:55px;}#i679, #i679 .irz {width:11px;height:55px;}#i692, #i692 .irz {width:11px;height:55px;}#i705, #i705 .irz {width:11px;height:55px;}#i971, #i971 .irz {width:388px;height:26px;}#i972, #i972 .irz {width:388px;height:26px;}#i974, #i974 .irz {width:300px;height:26px;}#i975, #i975 .irz {width:300px;height:26px;}#i976, #i976 .irz {width:300px;height:26px;}#i977, #i977 .irz {width:237px;height:35px;}#i617, #i617 .irz {width:431px;height:56px;}#i631, #i631 .irz {width:431px;height:56px;}#i644, #i644 .irz {width:431px;height:56px;}#i657, #i657 .irz {width:431px;height:56px;}#i670, #i670 .irz {width:431px;height:56px;}#i683, #i683 .irz {width:431px;height:56px;}#i696, #i696 .irz {width:431px;height:56px;}#i709, #i709 .irz {width:431px;height:56px;}#i618, #i618 .irz {width:439px;height:43px;}#i632, #i632 .irz {width:439px;height:43px;}#i645, #i645 .irz {width:439px;height:43px;}#i658, #i658 .irz {width:439px;height:43px;}#i671, #i671 .irz {width:439px;height:43px;}#i684, #i684 .irz {width:439px;height:43px;}#i697, #i697 .irz {width:439px;height:43px;}#i710, #i710 .irz {width:439px;height:43px;}#i619, #i619 .irz {width:439px;height:157px;}#i633, #i633 .irz {width:439px;height:157px;}#i646, #i646 .irz {width:439px;height:140px;}#i659, #i659 .irz {width:439px;height:140px;}#i672, #i672 .irz {width:439px;height:140px;}#i685, #i685 .irz {width:439px;height:140px;}#i698, #i698 .irz {width:439px;height:140px;}#i711, #i711 .irz {width:439px;height:140px;}#i620, #i620 .irz {width:439px;height:62px;}#i634, #i634 .irz {width:439px;height:62px;}#i647, #i647 .irz {width:439px;height:81px;}#i660, #i660 .irz {width:439px;height:81px;}#i673, #i673 .irz {width:439px;height:81px;}#i686, #i686 .irz {width:439px;height:81px;}#i699, #i699 .irz {width:439px;height:81px;}#i712, #i712 .irz {width:439px;height:81px;}#i718, #i718 .irz {width:601px;height:69px;}#i908, #i908 .irz {width:603px;height:69px;}#i919, #i919 .irz {width:601px;height:69px;}#i932, #i932 .irz {width:601px;height:69px;}#i946, #i946 .irz {width:601px;height:69px;}#i1087, #i1087 .irz {width:10px;height:149px;}#i719, #i719 .irz {width:603px;height:42px;}#i781, #i781 .irz {width:194px;height:50px;}#i909, #i909 .irz {width:602px;height:44px;}#i922, #i922 .irz {width:602px;height:48px;}#i935, #i935 .irz {width:532px;height:49px;}div#i936{line-height:0;font-size:0;}#i949, #i949 .irz {width:600px;height:41px;}#i953, #i953 .irz {width:642px;height:350px;}#i973, #i973 .irz {width:300px;height:26px;}#i1108, #i1108 .irz {width:315px;height:233px;}#i720, #i720 .irz {width:600px;height:54px;}#i910, #i910 .irz {width:600px;height:54px;}#i920, #i920 .irz {width:484px;height:54px;}#i933, #i933 .irz {width:484px;height:54px;}#i947, #i947 .irz {width:484px;height:54px;}#i903, #i903 .irz {width:52px;height:45px;}#i721, #i721 .irz {width:52px;height:45px;}#i914, #i914 .irz {width:52px;height:45px;}#i927, #i927 .irz {width:52px;height:45px;}#i941, #i941 .irz {width:52px;height:45px;}#i904, #i904 .irz {width:52px;height:54px;}#i722, #i722 .irz {width:52px;height:54px;}#i915, #i915 .irz {width:52px;height:54px;}#i928, #i928 .irz {width:52px;height:54px;}#i942, #i942 .irz {width:52px;height:54px;}#i905, #i905 .irz {width:358px;height:185px;}#i723, #i723 .irz {width:358px;height:185px;}#i916, #i916 .irz {width:358px;height:185px;}#i929, #i929 .irz {width:358px;height:185px;}#i943, #i943 .irz {width:358px;height:185px;}#i724, #i724 .irz {width:599px;height:29px;}#i911, #i911 .irz {width:599px;height:29px;}#i921, #i921 .irz {width:599px;height:29px;}#i934, #i934 .irz {width:599px;height:29px;}#i948, #i948 .irz {width:599px;height:29px;}div#i907{line-height:0;font-size:0;}div#i725{line-height:0;font-size:0;}div#i918{line-height:0;font-size:0;}div#i931{line-height:0;font-size:0;}div#i945{line-height:0;font-size:0;}#i906, #i906 .irz {width:76px;height:128px;}#i726, #i726 .irz {width:76px;height:128px;}#i917, #i917 .irz {width:76px;height:128px;}#i930, #i930 .irz {width:76px;height:128px;}#i944, #i944 .irz {width:76px;height:128px;}#i728, #i728 .irz {width:539px;height:49px;}div#i729{line-height:0;font-size:0;}div#i730{line-height:0;font-size:0;}div#i731{line-height:0;font-size:0;}div#i732{line-height:0;font-size:0;}div#i733{line-height:0;font-size:0;}#i734, #i734 .irz {width:139px;height:32px;}#i735, #i735 .irz {width:185px;height:32px;}#i736, #i736 .irz {width:164px;height:32px;}#i737, #i737 .irz {width:129px;height:32px;}#i738, #i738 .irz {width:304px;height:192px;}#i739, #i739 .irz {width:304px;height:192px;}#i740, #i740 .irz {width:304px;height:192px;}#i786, #i786 .irz {width:221px;height:49px;}#i741, #i741 .irz {width:304px;height:192px;}#i742, #i742 .irz {width:10px;height:149px;}#i743, #i743 .irz {width:10px;height:149px;}#i744, #i744 .irz {width:10px;height:149px;}#i745, #i745 .irz {width:10px;height:149px;}#i746, #i746 .irz {width:10px;height:149px;}#i747, #i747 .irz {width:10px;height:149px;}#i748, #i748 .irz {width:10px;height:149px;}#i749, #i749 .irz {width:10px;height:149px;}#i815, #i815 .irz {width:10px;height:149px;}#i835, #i835 .irz {width:10px;height:149px;}#i844, #i844 .irz {width:10px;height:149px;}#i965, #i965 .irz {width:190px;height:33px;}#i967, #i967 .irz {width:195px;height:61px;}#i966, #i966 .irz {width:300px;height:405px;}#i751, #i751 .irz {width:467px;height:49px;}#i859, #i859 .irz {width:302px;height:76px;}#i1141, #i1141 .irz {width:207px;height:32px;}#i1140, #i1140 .irz {width:243px;height:34px;}#i1139, #i1139 .irz {width:238px;height:34px;}#i1137, #i1137 .irz {width:200px;height:34px;}#i1138, #i1138 .irz {width:257px;height:50px;}#i1100, #i1100 .irz {width:280px;height:140px;}#i1101, #i1101 .irz {width:10px;height:149px;}div#i1106{line-height:0;font-size:0;}#i1112, #i1112 .irz {width:296px;height:28px;}#i1113, #i1113 .irz {width:281px;height:22px;}#i1142, #i1142 .irz {width:301px;height:51px;}#i1143, #i1143 .irz {width:275px;height:50px;}#i1144, #i1144 .irz {width:257px;height:50px;}#i1145, #i1145 .irz {width:345px;height:101px;}div#i1146{line-height:0;font-size:0;}#i1976, #i1976 .irz {width:654px;height:37px;}#i1978, #i1978 .irz {width:849px;height:312px;}div#i1977{line-height:0;font-size:0;}div#i752{line-height:0;font-size:0;}div#i754{line-height:0;font-size:0;}div#i755{line-height:0;font-size:0;}div#i756{line-height:0;font-size:0;}div#i759{line-height:0;font-size:0;}div#i764{line-height:0;font-size:0;}div#i768{line-height:0;font-size:0;}div#i772{line-height:0;font-size:0;}#i760, #i760 .irz {width:636px;height:195px;}#i763, #i763 .irz {width:630px;height:200px;}#i767, #i767 .irz {width:630px;height:200px;}#i771, #i771 .irz {width:630px;height:200px;}div#i777{line-height:0;font-size:0;}div#i778{line-height:0;font-size:0;}#i784, #i784 .irz {width:221px;height:49px;}#i788, #i788 .irz {width:221px;height:49px;}#i790, #i790 .irz {width:221px;height:49px;}#i792, #i792 .irz {width:221px;height:49px;}#i794, #i794 .irz {width:221px;height:49px;}#i796, #i796 .irz {width:221px;height:49px;}#i800, #i800 .irz {width:997px;height:95px;}#i803, #i803 .irz {width:360px;height:179px;}div#i1107{line-height:0;font-size:0;}#i805, #i805 .irz {width:283px;height:141px;}#i807, #i807 .irz {width:277px;height:15px;}#i808, #i808 .irz {width:10px;height:149px;}#i810, #i810 .irz {width:216px;height:28px;}#i811, #i811 .irz {width:216px;height:28px;}div#i856{line-height:0;font-size:0;}#i858, #i858 .irz {width:341px;height:33px;}div#i861{line-height:0;font-size:0;}div#i862{line-height:0;font-size:0;}div#i875{line-height:0;font-size:0;}div#i1979{line-height:0;font-size:0;}#i872, #i872 .irz {width:694px;height:48px;}div#i873{line-height:0;font-size:0;}#i876, #i876 .irz {width:37px;height:170px;}#i877, #i877 .irz {width:29px;height:170px;}#i878, #i878 .irz {width:434px;height:54px;}div#i880{line-height:0;font-size:0;}#i879, #i879 .irz {width:434px;height:54px;}div#i881{line-height:0;font-size:0;}#i882, #i882 .irz {width:434px;height:54px;}#i883, #i883 .irz {width:434px;height:54px;}div#i884{line-height:0;font-size:0;}#i888, #i888 .irz {width:40px;height:170px;}#i889, #i889 .irz {width:40px;height:170px;}div#i885{line-height:0;font-size:0;}#i886, #i886 .irz {width:434px;height:54px;}#i887, #i887 .irz {width:434px;height:54px;}#i895, #i895 .irz {width:17px;height:46px;}div#i896{line-height:0;font-size:0;}#i1117, #i1117 .irz {width:115px;height:40px;}#i1116, #i1116 .irz {width:28px;height:50px;}#i1118, #i1118 .irz {width:88px;height:31px;}#i1119, #i1119 .irz {width:725px;height:76px;}#i890, #i890 .irz {width:40px;height:170px;}#i891, #i891 .irz {width:40px;height:170px;}#i893, #i893 .irz {width:685px;height:49px;}div#i897{line-height:0;font-size:0;}#i898, #i898 .irz {width:487px;height:56px;}#i899, #i899 .irz {width:35px;height:79px;}#i924, #i924 .irz {width:498px;height:27px;}#i937, #i937 .irz {width:531px;height:27px;}#i950, #i950 .irz {width:531px;height:27px;}div#i951{line-height:0;font-size:0;}#i954, #i954 .irz {width:710px;height:32px;}#i969, #i969 .irz {width:998px;height:69px;}#i1002, #i1002 .irz {width:539px;height:99px;}#i1007, #i1007 .irz {width:522px;height:75px;}div#i1124{line-height:0;font-size:0;}#i1040, #i1040 .irz {width:415px;height:172px;}div#i1130{line-height:0;font-size:0;}div#i1131{line-height:0;font-size:0;}</style>
    <style type="text/css">html,body{height:100%;margin:0;}#i489, #i489 .irz {width:574px;height:22px;}#i495, #i495 .irz {width:160px;height:24px;}div#i504{line-height:0;font-size:0;}div#i506{line-height:0;font-size:0;}#i508, #i508 .irz {width:421px;height:49px;}#i511, #i511 .irz {width:566px;height:49px;}#i780, #i780 .irz {width:274px;height:90px;}#i783, #i783 .irz {width:274px;height:90px;}#i785, #i785 .irz {width:274px;height:90px;}#i787, #i787 .irz {width:274px;height:90px;}#i789, #i789 .irz {width:274px;height:85px;}#i791, #i791 .irz {width:258px;height:85px;}#i793, #i793 .irz {width:266px;height:88px;}#i795, #i795 .irz {width:266px;height:86px;}div#i488{line-height:0;font-size:0;}#i497, #i497 .irz {width:132px;height:24px;}#i503, #i503 .irz {width:192px;height:59px;}#i505, #i505 .irz {width:431px;height:236px;}div#i509{line-height:0;font-size:0;}div#i512{line-height:0;font-size:0;}#i546, #i546 .irz {width:998px;height:607px;}div#i580{line-height:0;font-size:0;}#i1980, #i1980 .irz {width:911px;height:412px;}div#i514{line-height:0;font-size:0;}div#i515{line-height:0;font-size:0;}div#i516{line-height:0;font-size:0;}#i517, #i517 .irz {width:30px;height:43px;}#i518, #i518 .irz {width:30px;height:43px;}#i519, #i519 .irz {width:30px;height:43px;}#i520, #i520 .irz {width:333px;height:34px;}#i521, #i521 .irz {width:328px;height:34px;}#i522, #i522 .irz {width:336px;height:34px;}#i524, #i524 .irz {width:343px;height:49px;}div#i525{line-height:0;font-size:0;}div#i526{line-height:0;font-size:0;}#i527, #i527 .irz {width:488px;height:32px;}div#i528{line-height:0;font-size:0;}#i529, #i529 .irz {width:180px;height:21px;}div#i530{line-height:0;font-size:0;}div#i531{line-height:0;font-size:0;}div#i532{line-height:0;font-size:0;}div#i533{line-height:0;font-size:0;}#i534, #i534 .irz {width:215px;height:21px;}#i535, #i535 .irz {width:472px;height:21px;}#i536, #i536 .irz {width:425px;height:21px;}#i537, #i537 .irz {width:365px;height:21px;}#i544, #i544 .irz {width:693px;height:45px;}div#i545{line-height:0;font-size:0;}#i548, #i548 .irz {width:674px;height:49px;}#i605, #i605 .irz {width:161px;height:30px;}#i611, #i611 .irz {width:178px;height:30px;}div#i804{line-height:0;font-size:0;}#i809, #i809 .irz {width:216px;height:28px;}#i830, #i830 .irz {width:451px;height:269px;}#i841, #i841 .irz {width:451px;height:141px;}#i851, #i851 .irz {width:451px;height:95px;}div#i852{line-height:0;font-size:0;}div#i853{line-height:0;font-size:0;}#i855, #i855 .irz {width:476px;height:43px;}#i857, #i857 .irz {width:860px;height:63px;}div#i860{line-height:0;font-size:0;}#i867, #i867 .irz {width:341px;height:32px;}div#i1136{line-height:0;font-size:0;}div#i874{line-height:0;font-size:0;}#i938, #i938 .irz {width:710px;height:173px;}#i952, #i952 .irz {width:710px;height:433px;}div#i549{line-height:0;font-size:0;}#i550, #i550 .irz {width:931px;height:477px;}#i553, #i553 .irz {width:537px;height:49px;}div#i554{line-height:0;font-size:0;}#i555, #i555 .irz {width:923px;height:419px;}#i555 .arrow {height:419px;line-height:419px;}#i992, #i992 .crz {width:923px;height:350px;}#i991, #i991 .crz {width:923px;height:390px;}#i990, #i990 .crz {width:923px;height:375px;}#i989, #i989 .crz {width:923px;height:350px;}#i988, #i988 .crz {width:923px;height:350px;}#i987, #i987 .crz {width:923px;height:350px;}#i558, #i558 .irz {width:997px;height:26px;}#i571, #i571 .irz {width:266px;height:49px;}div#i572{line-height:0;font-size:0;}#i573, #i573 .irz {width:999px;height:10px;}div#i574{line-height:0;font-size:0;}#i575, #i575 .irz {width:354px;height:27px;}#i576, #i576 .irz {width:307px;height:46px;}#i577, #i577 .irz {width:185px;height:78px;}#i578, #i578 .irz {width:183px;height:60px;}#i579, #i579 .irz {width:183px;height:60px;}div#i581{line-height:0;font-size:0;}div#i1104{line-height:0;font-size:0;}#i583, #i583 .irz {width:107px;height:110px;}#i584, #i584 .irz {width:107px;height:110px;}#i585, #i585 .irz {width:107px;height:109px;}#i586, #i586 .irz {width:107px;height:107px;}#i587, #i587 .irz {width:107px;height:108px;}#i588, #i588 .irz {width:107px;height:108px;}#i589, #i589 .irz {width:107px;height:106px;}div#i599{line-height:0;font-size:0;}div#i625{line-height:0;font-size:0;}div#i638{line-height:0;font-size:0;}div#i651{line-height:0;font-size:0;}div#i664{line-height:0;font-size:0;}div#i677{line-height:0;font-size:0;}div#i690{line-height:0;font-size:0;}div#i703{line-height:0;font-size:0;}div#i816{line-height:0;font-size:0;}div#i836{line-height:0;font-size:0;}div#i847{line-height:0;font-size:0;}#i600, #i600 .irz {width:283px;height:141px;}#i624, #i624 .irz {width:283px;height:141px;}#i637, #i637 .irz {width:283px;height:141px;}#i650, #i650 .irz {width:283px;height:141px;}#i663, #i663 .irz {width:283px;height:141px;}#i676, #i676 .irz {width:283px;height:141px;}#i689, #i689 .irz {width:283px;height:141px;}#i702, #i702 .irz {width:283px;height:141px;}#i814, #i814 .irz {width:283px;height:141px;}#i834, #i834 .irz {width:283px;height:141px;}#i845, #i845 .irz {width:283px;height:141px;}#i601, #i601 .irz {width:283px;height:31px;}#i628, #i628 .irz {width:283px;height:31px;}#i641, #i641 .irz {width:283px;height:31px;}#i654, #i654 .irz {width:283px;height:31px;}#i667, #i667 .irz {width:283px;height:31px;}#i680, #i680 .irz {width:283px;height:31px;}#i693, #i693 .irz {width:283px;height:31px;}#i706, #i706 .irz {width:283px;height:31px;}#i819, #i819 .irz {width:283px;height:31px;}#i838, #i838 .irz {width:283px;height:31px;}#i848, #i848 .irz {width:283px;height:31px;}#i602, #i602 .irz {width:281px;height:22px;}#i629, #i629 .irz {width:281px;height:22px;}#i642, #i642 .irz {width:281px;height:22px;}#i655, #i655 .irz {width:281px;height:22px;}#i668, #i668 .irz {width:281px;height:22px;}#i681, #i681 .irz {width:281px;height:22px;}#i694, #i694 .irz {width:281px;height:22px;}#i707, #i707 .irz {width:281px;height:22px;}#i820, #i820 .irz {width:281px;height:22px;}#i839, #i839 .irz {width:281px;height:22px;}#i849, #i849 .irz {width:281px;height:22px;}#i582, #i582 .irz {width:107px;height:110px;}#i995, #i995 .irz {width:421px;height:35px;}#i1082, #i1082 .irz {width:280px;height:196px;}div#i1084{line-height:0;font-size:0;}div#i1085{line-height:0;font-size:0;}#i1086, #i1086 .irz {width:349px;height:167px;}#i1088, #i1088 .irz {width:281px;height:22px;}#i1089, #i1089 .irz {width:873px;height:52px;}#i1090, #i1090 .irz {width:12px;height:58px;}#i1091, #i1091 .irz {width:837px;height:32px;}#i998, #i998 .irz {width:491px;height:37px;}div#i753{line-height:0;font-size:0;}#i1135, #i1135 .irz {width:10px;height:62px;}#i894, #i894 .irz {width:916px;height:46px;}div#i923{line-height:0;font-size:0;}#i970, #i970 .irz {width:998px;height:41px;}div#i996{line-height:0;font-size:0;}#i1035, #i1035 .irz {width:415px;height:172px;}#i1001, #i1001 .irz {width:539px;height:75px;}#i1036, #i1036 .irz {width:415px;height:172px;}#i1005, #i1005 .irz {width:291px;height:37px;}#i1009, #i1009 .irz {width:775px;height:2px;}#i1008, #i1008 .irz {width:540px;height:74px;}#i1037, #i1037 .irz {width:312px;height:180px;}#i1011, #i1011 .irz {width:465px;height:36px;}#i1012, #i1012 .irz {width:542px;height:99px;}#i1013, #i1013 .irz {width:542px;height:71px;}#i1014, #i1014 .irz {width:766px;height:2px;}#i1015, #i1015 .irz {width:766px;height:2px;}#i1038, #i1038 .irz {width:415px;height:172px;}#i1043, #i1043 .irz {width:476px;height:49px;}#i1017, #i1017 .irz {width:410px;height:39px;}#i1018, #i1018 .irz {width:531px;height:99px;}#i1019, #i1019 .irz {width:536px;height:71px;}#i1020, #i1020 .irz {width:766px;height:2px;}#i1039, #i1039 .irz {width:415px;height:164px;}#i1022, #i1022 .irz {width:283px;height:36px;}#i1023, #i1023 .irz {width:540px;height:73px;}#i1024, #i1024 .irz {width:541px;height:73px;}#i1025, #i1025 .irz {width:766px;height:2px;}#i1027, #i1027 .irz {width:501px;height:37px;}#i1028, #i1028 .irz {width:523px;height:73px;}#i1029, #i1029 .irz {width:525px;height:100px;}#i1030, #i1030 .irz {width:766px;height:2px;}#i1041, #i1041 .irz {width:415px;height:172px;}#i1032, #i1032 .irz {width:521px;height:39px;}#i1033, #i1033 .irz {width:513px;height:98px;}#i1034, #i1034 .irz {width:580px;height:83px;}#i1044, #i1044 .irz {width:476px;height:74px;}#i1045, #i1045 .irz {width:289px;height:147px;}#i1046, #i1046 .irz {width:281px;height:22px;}#i1047, #i1047 .irz {width:10px;height:149px;}#i1048, #i1048 .irz {width:291px;height:25px;}div#i1049{line-height:0;font-size:0;}#i1123, #i1123 .irz {width:436px;height:43px;}#i1083, #i1083 .irz {width:436px;height:43px;}#i1074, #i1074 .irz {width:281px;height:22px;}#i1075, #i1075 .irz {width:280px;height:147px;}#i1076, #i1076 .irz {width:279px;height:29px;}#i1077, #i1077 .irz {width:10px;height:149px;}div#i1078{line-height:0;font-size:0;}#i1079, #i1079 .irz {width:296px;height:106px;}#i1080, #i1080 .irz {width:305px;height:46px;}#i1094, #i1094 .irz {width:34px;height:25px;}#i1095, #i1095 .irz {width:34px;height:25px;}#i1096, #i1096 .irz {width:34px;height:25px;}#i1097, #i1097 .irz {width:34px;height:25px;}#i1098, #i1098 .irz {width:34px;height:25px;}#i1099, #i1099 .irz {width:34px;height:25px;}div#i1102{line-height:0;font-size:0;}div#i1103{line-height:0;font-size:0;}div#i1105{line-height:0;font-size:0;}#i1110, #i1110 .irz {width:970px;height:43px;}#i1111, #i1111 .irz {width:404px;height:207px;}div#i1120{line-height:0;font-size:0;}div#i1121{line-height:0;font-size:0;}div#i1125{line-height:0;font-size:0;}div#i1126{line-height:0;font-size:0;}div#i1127{line-height:0;font-size:0;}#i1128, #i1128 .irz {width:328px;height:117px;}div#i1129{line-height:0;font-size:0;}#i1132, #i1132 .irz {width:241px;height:23px;}#i1133, #i1133 .irz {width:241px;height:23px;}#i1134, #i1134 .irz {width:241px;height:23px;}#i1981, #i1981 .irz {width:464px;height:35px;}#i606, #i606 .irz {width:30px;height:50px;}#i607, #i607 .irz {width:178px;height:35px;}#i608, #i608 .irz {width:178px;height:36px;}#i609, #i609 .irz {width:178px;height:35px;}#i610, #i610 .irz {width:178px;height:36px;}#i612, #i612 .irz {width:178px;height:34px;}#i613, #i613 .irz {width:178px;height:35px;}div#i614{line-height:0;font-size:0;}div#i626{line-height:0;font-size:0;}div#i639{line-height:0;font-size:0;}div#i652{line-height:0;font-size:0;}div#i665{line-height:0;font-size:0;}div#i678{line-height:0;font-size:0;}div#i691{line-height:0;font-size:0;}div#i704{line-height:0;font-size:0;}div#i817{line-height:0;font-size:0;}div#i837{line-height:0;font-size:0;}div#i846{line-height:0;font-size:0;}#i615, #i615 .irz {width:279px;height:30px;}#i630, #i630 .irz {width:406px;height:30px;}#i643, #i643 .irz {width:406px;height:30px;}#i656, #i656 .irz {width:406px;height:30px;}#i669, #i669 .irz {width:406px;height:30px;}#i682, #i682 .irz {width:406px;height:30px;}#i695, #i695 .irz {width:406px;height:30px;}#i708, #i708 .irz {width:458px;height:30px;}#i821, #i821 .irz {width:458px;height:30px;}#i840, #i840 .irz {width:458px;height:30px;}#i850, #i850 .irz {width:458px;height:30px;}#i616, #i616 .irz {width:11px;height:55px;}#i627, #i627 .irz {width:11px;height:55px;}#i640, #i640 .irz {width:11px;height:55px;}#i653, #i653 .irz {width:11px;height:55px;}#i666, #i666 .irz {width:11px;height:55px;}#i679, #i679 .irz {width:11px;height:55px;}#i692, #i692 .irz {width:11px;height:55px;}#i705, #i705 .irz {width:11px;height:55px;}#i971, #i971 .irz {width:388px;height:26px;}#i972, #i972 .irz {width:388px;height:26px;}#i974, #i974 .irz {width:300px;height:26px;}#i975, #i975 .irz {width:300px;height:26px;}#i976, #i976 .irz {width:300px;height:26px;}#i977, #i977 .irz {width:237px;height:35px;}#i617, #i617 .irz {width:431px;height:56px;}#i631, #i631 .irz {width:431px;height:56px;}#i644, #i644 .irz {width:431px;height:56px;}#i657, #i657 .irz {width:431px;height:56px;}#i670, #i670 .irz {width:431px;height:56px;}#i683, #i683 .irz {width:431px;height:56px;}#i696, #i696 .irz {width:431px;height:56px;}#i709, #i709 .irz {width:431px;height:56px;}#i618, #i618 .irz {width:439px;height:43px;}#i632, #i632 .irz {width:439px;height:43px;}#i645, #i645 .irz {width:439px;height:43px;}#i658, #i658 .irz {width:439px;height:43px;}#i671, #i671 .irz {width:439px;height:43px;}#i684, #i684 .irz {width:439px;height:43px;}#i697, #i697 .irz {width:439px;height:43px;}#i710, #i710 .irz {width:439px;height:43px;}#i619, #i619 .irz {width:439px;height:157px;}#i633, #i633 .irz {width:439px;height:157px;}#i646, #i646 .irz {width:439px;height:140px;}#i659, #i659 .irz {width:439px;height:140px;}#i672, #i672 .irz {width:439px;height:140px;}#i685, #i685 .irz {width:439px;height:140px;}#i698, #i698 .irz {width:439px;height:140px;}#i711, #i711 .irz {width:439px;height:140px;}#i620, #i620 .irz {width:439px;height:62px;}#i634, #i634 .irz {width:439px;height:62px;}#i647, #i647 .irz {width:439px;height:81px;}#i660, #i660 .irz {width:439px;height:81px;}#i673, #i673 .irz {width:439px;height:81px;}#i686, #i686 .irz {width:439px;height:81px;}#i699, #i699 .irz {width:439px;height:81px;}#i712, #i712 .irz {width:439px;height:81px;}#i718, #i718 .irz {width:601px;height:69px;}#i908, #i908 .irz {width:603px;height:69px;}#i919, #i919 .irz {width:601px;height:69px;}#i932, #i932 .irz {width:601px;height:69px;}#i946, #i946 .irz {width:601px;height:69px;}#i1087, #i1087 .irz {width:10px;height:149px;}#i719, #i719 .irz {width:603px;height:42px;}#i781, #i781 .irz {width:194px;height:50px;}#i909, #i909 .irz {width:602px;height:44px;}#i922, #i922 .irz {width:602px;height:48px;}#i935, #i935 .irz {width:532px;height:49px;}div#i936{line-height:0;font-size:0;}#i949, #i949 .irz {width:600px;height:41px;}#i953, #i953 .irz {width:642px;height:350px;}#i973, #i973 .irz {width:300px;height:26px;}#i1108, #i1108 .irz {width:315px;height:233px;}#i720, #i720 .irz {width:600px;height:54px;}#i910, #i910 .irz {width:600px;height:54px;}#i920, #i920 .irz {width:484px;height:54px;}#i933, #i933 .irz {width:484px;height:54px;}#i947, #i947 .irz {width:484px;height:54px;}#i903, #i903 .irz {width:52px;height:45px;}#i721, #i721 .irz {width:52px;height:45px;}#i914, #i914 .irz {width:52px;height:45px;}#i927, #i927 .irz {width:52px;height:45px;}#i941, #i941 .irz {width:52px;height:45px;}#i904, #i904 .irz {width:52px;height:54px;}#i722, #i722 .irz {width:52px;height:54px;}#i915, #i915 .irz {width:52px;height:54px;}#i928, #i928 .irz {width:52px;height:54px;}#i942, #i942 .irz {width:52px;height:54px;}#i905, #i905 .irz {width:358px;height:185px;}#i723, #i723 .irz {width:358px;height:185px;}#i916, #i916 .irz {width:358px;height:185px;}#i929, #i929 .irz {width:358px;height:185px;}#i943, #i943 .irz {width:358px;height:185px;}#i724, #i724 .irz {width:599px;height:29px;}#i911, #i911 .irz {width:599px;height:29px;}#i921, #i921 .irz {width:599px;height:29px;}#i934, #i934 .irz {width:599px;height:29px;}#i948, #i948 .irz {width:599px;height:29px;}div#i907{line-height:0;font-size:0;}div#i725{line-height:0;font-size:0;}div#i918{line-height:0;font-size:0;}div#i931{line-height:0;font-size:0;}div#i945{line-height:0;font-size:0;}#i906, #i906 .irz {width:76px;height:128px;}#i726, #i726 .irz {width:76px;height:128px;}#i917, #i917 .irz {width:76px;height:128px;}#i930, #i930 .irz {width:76px;height:128px;}#i944, #i944 .irz {width:76px;height:128px;}#i728, #i728 .irz {width:539px;height:49px;}div#i729{line-height:0;font-size:0;}div#i730{line-height:0;font-size:0;}div#i731{line-height:0;font-size:0;}div#i732{line-height:0;font-size:0;}div#i733{line-height:0;font-size:0;}#i734, #i734 .irz {width:139px;height:32px;}#i735, #i735 .irz {width:185px;height:32px;}#i736, #i736 .irz {width:164px;height:32px;}#i737, #i737 .irz {width:129px;height:32px;}#i738, #i738 .irz {width:304px;height:192px;}#i739, #i739 .irz {width:304px;height:192px;}#i740, #i740 .irz {width:304px;height:192px;}#i786, #i786 .irz {width:221px;height:49px;}#i741, #i741 .irz {width:304px;height:192px;}#i742, #i742 .irz {width:10px;height:149px;}#i743, #i743 .irz {width:10px;height:149px;}#i744, #i744 .irz {width:10px;height:149px;}#i745, #i745 .irz {width:10px;height:149px;}#i746, #i746 .irz {width:10px;height:149px;}#i747, #i747 .irz {width:10px;height:149px;}#i748, #i748 .irz {width:10px;height:149px;}#i749, #i749 .irz {width:10px;height:149px;}#i815, #i815 .irz {width:10px;height:149px;}#i835, #i835 .irz {width:10px;height:149px;}#i844, #i844 .irz {width:10px;height:149px;}#i965, #i965 .irz {width:190px;height:33px;}#i967, #i967 .irz {width:195px;height:61px;}#i966, #i966 .irz {width:300px;height:405px;}#i751, #i751 .irz {width:467px;height:49px;}#i859, #i859 .irz {width:302px;height:76px;}#i1141, #i1141 .irz {width:207px;height:32px;}#i1140, #i1140 .irz {width:243px;height:34px;}#i1139, #i1139 .irz {width:238px;height:34px;}#i1137, #i1137 .irz {width:200px;height:34px;}#i1138, #i1138 .irz {width:257px;height:50px;}#i1100, #i1100 .irz {width:280px;height:140px;}#i1101, #i1101 .irz {width:10px;height:149px;}div#i1106{line-height:0;font-size:0;}#i1112, #i1112 .irz {width:296px;height:28px;}#i1113, #i1113 .irz {width:281px;height:22px;}#i1142, #i1142 .irz {width:301px;height:51px;}#i1143, #i1143 .irz {width:275px;height:50px;}#i1144, #i1144 .irz {width:257px;height:50px;}#i1145, #i1145 .irz {width:345px;height:101px;}div#i1146{line-height:0;font-size:0;}#i1976, #i1976 .irz {width:654px;height:37px;}#i1978, #i1978 .irz {width:849px;height:312px;}div#i1977{line-height:0;font-size:0;}div#i752{line-height:0;font-size:0;}div#i754{line-height:0;font-size:0;}div#i755{line-height:0;font-size:0;}div#i756{line-height:0;font-size:0;}div#i759{line-height:0;font-size:0;}div#i764{line-height:0;font-size:0;}div#i768{line-height:0;font-size:0;}div#i772{line-height:0;font-size:0;}#i760, #i760 .irz {width:636px;height:195px;}#i763, #i763 .irz {width:630px;height:200px;}#i767, #i767 .irz {width:630px;height:200px;}#i771, #i771 .irz {width:630px;height:200px;}div#i777{line-height:0;font-size:0;}div#i778{line-height:0;font-size:0;}#i784, #i784 .irz {width:221px;height:49px;}#i788, #i788 .irz {width:221px;height:49px;}#i790, #i790 .irz {width:221px;height:49px;}#i792, #i792 .irz {width:221px;height:49px;}#i794, #i794 .irz {width:221px;height:49px;}#i796, #i796 .irz {width:221px;height:49px;}#i800, #i800 .irz {width:997px;height:95px;}#i803, #i803 .irz {width:360px;height:179px;}div#i1107{line-height:0;font-size:0;}#i805, #i805 .irz {width:283px;height:141px;}#i807, #i807 .irz {width:277px;height:15px;}#i808, #i808 .irz {width:10px;height:149px;}#i810, #i810 .irz {width:216px;height:28px;}#i811, #i811 .irz {width:216px;height:28px;}div#i856{line-height:0;font-size:0;}#i858, #i858 .irz {width:341px;height:33px;}div#i861{line-height:0;font-size:0;}div#i862{line-height:0;font-size:0;}div#i875{line-height:0;font-size:0;}div#i1979{line-height:0;font-size:0;}#i872, #i872 .irz {width:694px;height:48px;}div#i873{line-height:0;font-size:0;}#i876, #i876 .irz {width:37px;height:170px;}#i877, #i877 .irz {width:29px;height:170px;}#i878, #i878 .irz {width:434px;height:54px;}div#i880{line-height:0;font-size:0;}#i879, #i879 .irz {width:434px;height:54px;}div#i881{line-height:0;font-size:0;}#i882, #i882 .irz {width:434px;height:54px;}#i883, #i883 .irz {width:434px;height:54px;}div#i884{line-height:0;font-size:0;}#i888, #i888 .irz {width:40px;height:170px;}#i889, #i889 .irz {width:40px;height:170px;}div#i885{line-height:0;font-size:0;}#i886, #i886 .irz {width:434px;height:54px;}#i887, #i887 .irz {width:434px;height:54px;}#i895, #i895 .irz {width:17px;height:46px;}div#i896{line-height:0;font-size:0;}#i1117, #i1117 .irz {width:115px;height:40px;}#i1116, #i1116 .irz {width:28px;height:50px;}#i1118, #i1118 .irz {width:88px;height:31px;}#i1119, #i1119 .irz {width:725px;height:76px;}#i890, #i890 .irz {width:40px;height:170px;}#i891, #i891 .irz {width:40px;height:170px;}#i893, #i893 .irz {width:685px;height:49px;}div#i897{line-height:0;font-size:0;}#i898, #i898 .irz {width:487px;height:56px;}#i899, #i899 .irz {width:35px;height:79px;}#i924, #i924 .irz {width:498px;height:27px;}#i937, #i937 .irz {width:531px;height:27px;}#i950, #i950 .irz {width:531px;height:27px;}div#i951{line-height:0;font-size:0;}#i954, #i954 .irz {width:710px;height:32px;}#i969, #i969 .irz {width:998px;height:69px;}#i1002, #i1002 .irz {width:539px;height:99px;}#i1007, #i1007 .irz {width:522px;height:75px;}div#i1124{line-height:0;font-size:0;}#i1040, #i1040 .irz {width:415px;height:172px;}div#i1130{line-height:0;font-size:0;}div#i1131{line-height:0;font-size:0;}</style>
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div id="pgc_482" style="height:86px;">
            <div id="virtualc_482" style="height:86px;" class="virtuals fixbar">
                <div class="allContent" style="width:1001px;height:86px;">
                    <div id="c_482" class="droppable" style="width:1001px;height:86px;">
                        <a id="ac_482" class="ascroll" style="top:-86px;"></a>

                        <div class="bi irz" id="i495" style="z-index:10;top:12px;left:815px;">
                            <div class="irz scroll0">
                                <p style="margin: 0px; text-align: center;"><span class="phone" style="font-family: Roboto; font-weight: lighter; color: #515151; font-size: 17px;"><span class="litl-number-pref" style="font-size: 14px;">+38</span><span class="hdr-ph-num-ks" style="color: #669f12; font-weight: bold;">(068)</span>737-55-47</span>
                                </p>
                            </div>
                        </div>
                        <a href="/#ac_854" class="nodec">
                            <div class="bi irz" id="i497" style="z-index:15;top:6px;left:136px;">
                                <div class="irz scroll0">
                                    <p><span style="font-size: 13px;"><span style="font-family: Roboto, sans-serif; border-bottom: 1px dashed #59A600;">Оплата и доставка</span></span>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="bi irz" id="i489" style="top:37px;left:185px;z-index:10;width:auto;">
                            <?php
                            $args = array(
                                'theme_location' => 'materials_menu',
                                'menu_class'     => 'nav navbar-nav h100',
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            );
                            wp_nav_menu($args);?>
                        </div>
                        <a href="/#ac_485" class="nodec">
                            <div class="bi" id="i488" style="top:0px;left:0px;z-index:13;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/files/block/s-logo-biofm-min-min.png@times=1517569718" width="131" height="80" alt="" title="" class="bl center">
                            </div>
                        </a>
                        <div class="bi irz" id="i965" style="top:41px;left:810px;z-index:150;">
                            <div class="irz scroll0">
                                <script>
                                    jQuery( function () {
                                        jQuery('#imgAnimate1').shiningImage();
                                    });
                                </script>
                                <a href="#" onclick="javascript:popupOpen('c_717');return false;" >
                                    <img id="imgAnimate1" src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-call-big-animate2.png" alt="Заказать звонок">
                                </a>
                            </div>
                        </div>
                        <div class="bi irz" style="top:35px;right:-67px;z-index:150;">
                            <?php bio_ferma_woocommerce_cart_link(); ?>
                        </div>
                    </div>
                </div></div>
        </div>
    </header><!-- #masthead -->

    <div id="pgc_1093" style="height:599px;"><div id="virtualc_1093" style="height:599px;z-index:61;" class="virtuals"><div class="allContent" style="width:999px;height:599px;"><div id="c_1093" class="droppable" style="width:999px;height:599px;"><a id="ac_1093" class="ascroll" style="top:-86px;"></a><div class="bi irz" id="i1110" style="z-index:100;top:20px;left:0px;"><div class="irz scroll0"><h2 style="font-family: Roboto; color: #115807; font-size: 36px; text-align: center;"><span style="font-weight: 900; background-color: #ececec; padding-left: 10px; padding-right: 61px;">ПОДСТИЛКА ДЛЯ ЖИВОТНЫХ <span style="color: #379b2a;">БИО</span>ФЕРМ</span></h2></div></div><div class="bi irz" id="i1111" style="z-index:100;top:214px;left:57px;"><div class="irz scroll0"><ul style="list-style: none; font-family: Roboto; font-weight: bold; color: #ef7f1a; font-size: 24px; margin-left: 0; margin: 0; padding: 0;">
                                <li style="margin-bottom: 5px;">Вырабатывает тепло</li>
                                <li style="margin-bottom: 5px;">Перерабатывает экскременты</li>
                                <li style="margin-bottom: 5px;">Устраняет неприятный запах</li>
                                <li style="margin-bottom: 5px;">Не заводятся грызуны</li>
                                <li style="margin-bottom: 5px;">Животные не болеют</li>
                                <li>После животных не<br />нужно убирать</li>
                            </ul></div></div><div class="bi irz" id="i1112" style="z-index:150;top:411px;left:689px;"><div class="irz scroll0"><p style="text-align: center; margin: 0px; padding: 0px; line-height: 12px;"><span style="font-size: 12px; line-height: 12px;"> <span style="font-family: Roboto, sans-serif; font-weight: lighter; line-height: 12px;"> Ваши контактые данные в безопасности и не будут переданы третьим лицам </span> </span></p></div></div><div class="bi irz" id="i1113" style="z-index:150;top:229px;left:695px;"><div class="irz scroll0"><p style="text-align: center;"><strong><span style="font-size: 18px;"><span id="popUpFormZagolovokBIO-1-header-1" style="font-family: Roboto, sans-serif;">ЗАКАЖИТЕ ОБРАТНЫЙ ЗВОНОК</span></span></strong></p></div></div><div class="bi irz" id="i1117" style="z-index:200;top:480px;left:164px;"><div class="irz scroll0"><p><span style="font-family: Roboto, sans-serif; font-size: 24px; font-weight: 900; line-height: 10px;">срок<br />службы<br /></span></p></div></div><div class="bi irz" id="i1116" style="z-index:200;top:470px;left:25px;"><div class="irz scroll0"><p><span style="font-family: Roboto, sans-serif; font-size: 45px; font-weight: 900;">3</span></p></div></div><div class="bi irz" id="i1118" style="z-index:200;top:481px;left:63px;"><div class="irz scroll0"><p><span style="font-family: Roboto, sans-serif; font-size: 30px; font-weight: 900;">ГОДА</span></p></div></div><div class="bi irz" id="i1119" style="z-index:200;top:92px;left:111px;"><div class="irz scroll0"><p style="text-align: center;"><span style="font-family: Roboto, sans-serif; font-size: 30px; font-weight: 900; line-height: 28px;">На 48% удешевляет содержание животных<br />уже через 5 дней с помощью<br />новых ЭКО-технологий </span></p></div></div><div class="bi" id="i1104" style="top:349px;left:321px;z-index:80;"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/block/1104-s-fone-4.png@times=1517402034" width="220" height="232" alt="" title="" class="bl center"></div><div class="bi" id="i1102" style="top:77px;left:0px;z-index:100;"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/block/1102-s-fone-5-line.png@times=1517402034" width="993" height="4" alt="" title="" class="bl center"></div><div class="bi" id="i1103" style="top:205px;left:473px;z-index:100;"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/block/1103-s-fone-2.png@times=1517402034" width="519" height="377" alt="" title="" class="bl center"></div><div class="bi" id="i1105" style="top:463px;left:10px;z-index:100;"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/block/s-fone-1-v2.png@times=1517405075" width="280" height="73" alt="" title="" class="bl center"></div><div class="bi irz" id="i1108" style="top:214px;left:678px;z-index:120;"></div><div class="bi" id="i1106" style="top:25px;left:820px;z-index:150;"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/block/1106-1092-s-list.png@times=1517402175" width="40" height="30" alt="" title="" class="bl center"></div><div class="bi" id="i1107" style="top:157px;left:888px;z-index:170;"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/block/1107-s-fone-3.png@times=1517402034" width="100" height="64" alt="" title="" class="bl center"></div><div class="bi irz" id="i1094" style="top:252px;left:11px;z-index:100;"><div class="irz scroll0"><div style="height: 23px;width: 23px;display: inline-block;background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon.png);background-repeat: no-repeat;background-position: 0px -23px;" ></div></div></div><div class="bi irz" id="i1095" style="top:215px;left:11px;z-index:100;"><div class="irz scroll0"><div style="height: 23px;width: 23px;display: inline-block;background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon.png);background-repeat: no-repeat;background-position: 0px 0px;" ></div></div></div><div class="bi irz" id="i1096" style="top:287px;left:11px;z-index:100;"><div class="irz scroll0"><div style="height: 23px;width: 23px;display: inline-block;background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon.png);background-repeat: no-repeat;background-position: 0px -46px;" ></div></div></div><div class="bi irz" id="i1097" style="top:323px;left:11px;z-index:100;"><div class="irz scroll0"><div style="height: 23px;width: 23px;display: inline-block;background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon.png);background-repeat: no-repeat;background-position: 0px -68px;" ></div></div></div><div class="bi irz" id="i1098" style="top:357px;left:11px;z-index:100;"><div class="irz scroll0"><div style="height: 23px;width: 23px;display: inline-block;background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon.png);background-repeat: no-repeat;background-position: 0px -91px;" ></div></div></div><div class="bi irz" id="i1099" style="top:392px;left:11px;z-index:100;"><div class="irz scroll0"><div style="height: 23px;width: 23px;display: inline-block;background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon.png);background-repeat: no-repeat;background-position: 0px -114px;" ></div></div></div><div class="bi irz" id="i1100" style="top:265px;left:700px;z-index:150;"><div class="irz scroll0"><style>
                                .popUpFormBIO-header-1 {
                                    width: 300px;
                                    height: 170px;
                                    /*      border: 1px solid #333;   */
                                    position: absolute;
                                }

                                .popUpForm-NameNumberBIO-header-1,
                                .popUpForm-TelefonNumberBIO-header-1{
                                    position: relative;
                                    width: 280px;
                                    height: 35px;
                                    display: block;
                                    font-size: 16px;
                                    font-family: Roboto, sans-serif;
                                    color: rgb(0, 0, 0);
                                    border-radius: 4px 4px 4px 4px;
                                    border: 1px solid rgb(212,212,212);
                                    padding: 0 5px 0 5px;
                                    box-sizing: border-box;
                                    margin-bottom: 12px;
                                }

                                .popUpForm-NameNumberBIO-header-1 {
                                    background: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon-1.png) 10px center / 22px no-repeat scroll rgb(255, 255, 255); padding: 10px 10px 10px 40px !important;
                                }

                                .popUpForm-TelefonNumberBIO-header-1 {
                                    background: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon-2.png) 10px center / 22px no-repeat scroll rgb(255, 255, 255); padding: 10px 10px 10px 40px !important;
                                }
                                .popUpForm-ButtonNumberBIO-header-1 {
                                    position: relative;
                                    width: 280px;
                                    height: 44px;
                                    display: block;
                                    font-size: 22px;
                                    font-family: Roboto, sans-serif;
                                    color: rgb(51,51,51);
                                    border-radius: 10px 10px 10px 10px;
                                    border: 1px solid rgb(138,138,138);
                                    background-repeat: repeat;
                                    background-attachment: scroll;
                                    background-size: auto;
                                    cursor: pointer;
                                }


                            </style>

                            <div class="popUpFormBIO-header-1" id="formInCallBIO-1-header-1">
                                <form action="javascript:void(null);" method="POST" id="form-BIO-header-1" onsubmit="popUpFormBIO1_header_1()">
                                    <input class="popUpForm-NameNumberBIO-header-1" type="text" placeholder="        Введите Ваше имя" name= "name1">
                                    <input  id="rightfoneform4"  class="popUpForm-TelefonNumberBIO-header-1" type="text" placeholder="      Введите Ваш телефон" name= "message1">
                                    <input class="popUpForm-ButtonNumberBIO-header-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/ButtonAnimate2.gif');"  type="submit" value="Заказать звонок" onclick="setTimeout(goAfterFlyBIO1_header_1, 200);">
                                </form>
                            </div>


                            <script type="text/javascript">
                                // Снипет 1 - Название функции которую будем запускать
                                function popUpFormBIO1_header_1() {
                                    fbq('track', 'Lead');
                                    var msg   = jQuery('#form-BIO-header-1').serialize(); //Идентификатор формы с которой работаем
                                    jQuery.ajax({
                                        type: 'POST',
                                        url: 'mail/post-1.php',  //Адрес к обработчику
                                        data: msg,
                                        success: function(data) {
                                            jQuery('.results').html(data);
                                            //Всплывающее окно
                                        },
                                        error:  function(xhr, str){
                                            alert('Возникла ошибка: ' + xhr.responseCode);
                                        }
                                    });

                                    console.log('ok');

                                };

                                // Снипет 2 - Cброс данных формы, запуск через onclick в submit

                                function goAfterFlyBIO1_header_1() {
                                    document.getElementById('form-BIO-header-1').reset();
                                    console.log('ok2');

                                    document.getElementById('popUpFormZagolovokBIO-1-header-1').innerHTML = ('Заявка успешно принята!');
                                    document.getElementById('formInCallBIO-1-header-1').style.display='none';


                                    document.getElementById('formInCallTextIconImageBIO-header-1').style.display='inline-block';
                                    //document.getElementById('formInCallTextButtom').style.fontSize='21px';

                                }
                            </script>
                        </div></div><div class="bi irz" id="i1101" style="top:265px;left:681px;z-index:150;"><div class="irz scroll0"><img id="formInCallTextIconImageBIO-header-1" style="display: none; position: relative; top: 20px; left: 110px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/form-ok.png" alt=""></div></div></div></div></div></div><div id="pgc_797" class="hidden" style="height:438px;"><div id="virtualc_797" style="height:438px;" class="virtuals"><div class="allContent" style="width:999px;height:438px;"><div id="c_797" class="droppable" style="width:999px;height:438px;"><a id="ac_797" class="ascroll" style="top:-86px;"></a><div class="bi irz" id="i800" style="z-index:167;top:20px;left:0px;"><div class="irz scroll0"><p style="text-align: center; line-height: 30px;"><span style="font-weight: 900; font-size: 45px;"><span style="font-family: Roboto, sans-serif; line-height: 40px;"><span style="color: red;">Акция!</span> При заказе от 3-х кг - электронный термометр в подарок</span></span></p></div></div><div class="bi irz" id="i803" style="z-index:170;top:185px;left:6px;"><div class="irz scroll0"><p style="text-align: center;"><span style="font-family: Roboto, sans-serif; font-size: 19px;"><span style="font-family: Roboto, sans-serif;"><strong><span style="font-size: 21px;">СОВЕРШИТЕ ЗАКАЗ ОТ 3 КГ.</span></strong><br />И компания "Биоферм" подарит Вам универсальный брендовый термометр. Что бы Вы могли убедиться в том что "Биоферм" понастоящему эффективный и высокотехнологичный продукт для вашего хозяйства!</span></span></p></div></div><div class="bi irz" id="i807" style="z-index:172;top:167px;left:710px;"><div class="irz scroll0"><p style="text-align: center;"><strong><span style="font-size: 18px;"><span id="popUpFormZagolovokBIO-9" style="font-family: Roboto, sans-serif;">ПОЛУЧИТЬ ПОДАРОК</span></span></strong></p></div></div><div class="bi" id="i804" style="top:179px;left:385px;z-index:50;"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/block/s-gift-block-v3.png@times=1507903642" width="280" height="204" alt="" title="" class="bl center"></div><div class="bi irz" id="i805" style="top:228px;left:708px;z-index:171;"><div class="irz scroll0"> <style>
                                .popUpFormBIO-9 {
                                    width: 300px;
                                    height: 170px;
                                    /*        border: 1px solid #333;*/
                                    position: absolute;
                                }

                                .popUpForm-NameNumberBIO-9,
                                .popUpForm-TelefonNumberBIO-9{
                                    position: relative;
                                    width: 280px;
                                    height: 35px;
                                    display: block;
                                    font-size: 16px;
                                    font-family: Roboto, sans-serif;
                                    color: rgb(0, 0, 0);
                                    border-radius: 4px 4px 4px 4px;
                                    border: 1px solid rgb(212,212,212);
                                    padding: 0 5px 0 5px;
                                    box-sizing: border-box;
                                    margin-bottom: 12px;
                                }

                                .popUpForm-NameNumberBIO-9 {
                                    background: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon-1.png) 10px center / 22px no-repeat scroll rgb(255, 255, 255); padding: 10px 10px 10px 40px !important;
                                }

                                .popUpForm-TelefonNumberBIO-9 {
                                    background: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon-2.png) 10px center / 22px no-repeat scroll rgb(255, 255, 255); padding: 10px 10px 10px 40px !important;
                                }
                                .popUpForm-ButtonNumberBIO-9 {
                                    position: relative;
                                    width: 280px;
                                    height: 44px;
                                    display: block;
                                    font-size: 22px;
                                    font-family: Roboto, sans-serif;
                                    color: rgb(51,51,51);
                                    border-radius: 10px 10px 10px 10px;
                                    border: 1px solid rgb(138,138,138);
                                    background-image: url("<?php echo get_template_directory_uri(); ?>/assets/img/ButtonAnimate2.gif");
                                    background-repeat: repeat;
                                    background-attachment: scroll;
                                    background-size: auto;
                                    cursor: pointer;
                                }


                            </style>

                            <div class="popUpFormBIO-9" id="formInCallBIO-9">
                                <form action="javascript:void(null);" method="POST" id="form-BIO-9" onsubmit="popUpFormBIO9()">
                                    <input class="popUpForm-NameNumberBIO-9" type="text" placeholder="        Введите Ваше имя" name= "name1">
                                    <input class="popUpForm-TelefonNumberBIO-9" type="text" placeholder="      Введите Ваш телефон" name= "message1">
                                    <input class="popUpForm-ButtonNumberBIO-9" type="submit" value="Получить подарок" onclick="setTimeout(goAfterFlyBIO9, 200);">
                                </form>
                            </div>



                            <script type="text/javascript">

                                // Снипет 1 - Название функции которую будем запускать
                                function popUpFormBIO9() {
                                    fbq('track', 'Lead');
                                    var msg   = jQuery('#form-BIO-9').serialize(); //Идентификатор формы с которой работаем
                                    jQuery.ajax({
                                        type: 'POST',
                                        url: 'mail/post-2.php',  //Адрес к обработчику
                                        data: msg,
                                        success: function(data) {
                                            jQuery('.results').html(data);
                                            //Всплывающее окно

                                        },
                                        error:  function(xhr, str){
                                            alert('Возникла ошибка: ' + xhr.responseCode);
                                        }
                                    });

                                    //console.log('GodTest');






                                };

                                // Снипет 2 - Cброс данных формы, динамика после отправки

                                function goAfterFlyBIO9() {
                                    document.getElementById('form-BIO-9').reset();
                                    document.getElementById('popUpFormZagolovokBIO-9').innerHTML = ('Заявка успешно принята!');
                                    document.getElementById('formInCallBIO-9').style.display='none';
                                    document.getElementById('formInCallTextIconImageBIO-9').style.display='inline-block';
                                }
                            </script>

                        </div></div><div class="bi irz" id="i808" style="top:223px;left:686px;z-index:173;"><div class="irz scroll0"><img id="formInCallTextIconImageBIO-9" style="display: none; position: relative; top: 20px; left: 110px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/form-ok.png" alt=""></div></div></div></div></div></div>



    <div id="pgc_717" class="hidden" style="height:373px;">
        <div id="virtualc_717" style="height:373px;" class="virtuals">
            <div class="allContent" style="width:601px;height:373px;">
                <div id="c_717" class="droppable" style="width:601px;height:373px;">
                    <a id="ac_717" class="ascroll" style="top:-86px;"></a>
                    <div class="bi irz" id="i719" style="z-index:120;top:6px;left:-1px;">
                        <div class="irz scroll0">
                            <p style="text-align: center;"><span id="formInCallTextUp" style="font-family: Roboto, sans-serif; font-size: 40px; font-weight: bold;">Заказать звонок</span>
                            </p>
                        </div>
                    </div>
                    <div class="bi irz" id="i720" style="z-index:121;top:93px;left:0px;">
                        <div class="irz scroll0">
                            <p style="text-align: center;"><span id="formInCallTextButtom" style="font-family: 'PT Sans Caption', sans-serif; font-size: 17px; font-weight: 600;">Введите имя, номер телефона, нажмите "Отправить",  и наш менеджер свяжется с вами в ближайшее время.</span>
                            </p>
                        </div>
                    </div>
                    <div class="bi irz" id="i724" style="z-index:125;top:342px;left:0px;">
                        <div class="irz scroll0">
                            <h2 style="text-align: center;"><span style="font-family: Roboto, sans-serif; font-size: 12px; font-weight: lighter;">Ваши контактные данные в безопасности и не будут переданы третьим лицам</span>
                            </h2>
                        </div>
                    </div>
                    <div class="bi irz" id="i718" style="top:0px;left:0px;z-index:118;">

                    </div><a href="#" class="nodec" onclick="javascript:popupClose('c_717');return false;">
                        <div class="bi" id="i725" style="top:-17px;left:561px;z-index:126;"><img src="<?php echo get_template_directory_uri(); ?>/assets/files/block/725-703-690-677-664-651-638-625-s-button-close-v2.png" width="50" height="50" alt="" title="" class="bl center"></div></a><div class="bi irz" id="i721" style="top:157px;left:84px;z-index:122;"><div class="irz scroll0"><i id="formInCallTextIconOne" class="fa fa-user" style="font-size:50px;"></i></div></div><div class="bi irz" id="i722" style="top:218px;left:85px;z-index:123;"><div class="irz scroll0"><i id="formInCallTextIconTwo" class="fa fa-phone-square" style="font-size:50px;"></i></div></div><div class="bi irz" id="i723" style="top:156px;left:143px;z-index:124;"><div class="irz scroll0"><style>
                                .form-block1-number-1 {
                                    width: 300px !im;
                                    height: 170px;
                                    /*        border: 1px solid #333;*/
                                    position: absolute;
                                }

                                .form1-name-number-1,
                                .form1-telefon-number-1{
                                    position: relative;
                                    width: 345px;
                                    height: 50px;
                                    display: block;
                                    font-size: 16px;
                                    font-family: Roboto, sans-serif;
                                    color: rgb(0, 0, 0);
                                    border-radius: 4px 4px 4px 4px;
                                    border: 1px solid rgb(212,212,212);
                                    padding: 0 5px 0 5px;
                                    box-sizing: border-box;
                                    margin-bottom: 12px;
                                }

                                .form1-button-number-1 {
                                    position: relative;
                                    width: 345px;
                                    height: 50px;
                                    display: block;
                                    font-size: 22px;
                                    font-family: Roboto, sans-serif;
                                    color: rgb(51,51,51);
                                    border-radius: 10px 10px 10px 10px;
                                    border: 1px solid rgb(138,138,138);
                                    background-image: url("assets/img/button-fone.png");
                                    background-repeat: repeat;
                                    background-attachment: scroll;
                                    background-size: auto;
                                    cursor: pointer;
                                }


                            </style>

                            <div class="form-block1-number-1" id="formInCall">
                                <form action="javascript:void(null);" method="POST" id="form1" onsubmit="metcher()">

                                    <input class="form1-name-number-1" type="text" placeholder="                      Введите Ваше имя" name= "name1">

                                    <input  id="rightfoneform1" class="form1-telefon-number-1" type="text" placeholder="             Введите Ваш номер телефона" name= "message1">


                                    <input class="form1-button-number-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/button-fone.png');" type="submit" value="Отправить" onclick="setTimeout(formmetcher, 200);">
                                </form>

                            </div>


                            <script type="text/javascript">

                                // Снипет 1 - Название функции которую будем запускать
                                function metcher() {
                                    fbq('track', 'Lead');
                                    var msg   = jQuery('#form1').serialize(); //Идентификатор формы с которой работаем
                                    jQuery.ajax({
                                        type: 'POST',
                                        url: 'mail/post-1.php',  //Адрес к обработчику
                                        data: msg,
                                        success: function(data) {
                                            jQuery('.results').html(data);
                                            //Всплывающее окно

                                        },
                                        error:  function(xhr, str){
                                            alert('Возникла ошибка: ' + xhr.responseCode);
                                        }
                                    });

                                    console.log('hello');

                                };

                                // Снипет 2 - Cброс данных формы, запуск через onclick в submit

                                function formmetcher() {
                                    document.getElementById('form1').reset();
//alert("Ваша заявка успешно отправлена \n Мы свяжемся с Вами как можно быстрее.");
                                    document.getElementById('formInCallTextUp').innerHTML = ('Заявка успешно принята!');
                                    document.getElementById('formInCallTextButtom').innerHTML = ('Ваша заявка успешно принята.<br />Менеджер свяжется с Вами как можно быстрее.');
                                    document.getElementById('formInCallTextIconOne').style.display='none';
                                    document.getElementById('formInCallTextIconTwo').style.display='none';
                                    document.getElementById('formInCall').style.display='none';
                                    document.getElementById('formInCallTextIconImage').style.display='inline-block';
                                    document.getElementById('formInCallTextButtom').style.fontSize='21px';

                                }
                            </script></div></div><div class="bi irz" id="i726" style="top:191px;left:520px;z-index:127;"><div class="irz scroll0"><img id="formInCallTextIconImage" style="display: none; position: relative; top: 0px; left: -265px;" id="formInCallTextIconImage" src="<?php echo get_template_directory_uri(); ?>/assets/img/form-ok.png" alt=""></div></div></div></div></div></div>


