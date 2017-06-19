/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    $("#organizing_committee").lightSlider();

//    jQuery(function ($) {
//        $("#add_user").on('click', function (event) {
//            event.preventDefault();
//            var $user = $(this);
//            $.post("users/add", null,
//                    function (data) {
//                        if (data.response == true) {
//                            $user.before("<div class=\"user\"><textarea id=\"user-" + data.new_user_id + "\"></textarea><a href=\"#\" id=\"remove-" + data.new_user_id + "\"class=\"delete-user\">X</a></div>");
//                            // print success message
//                        } else {
//                            // print error message
//                            console.log('could not add');
//                        }
//                    }, 'json');
//        });
//
//        $('#delete_user').on('click', 'a.delete-user', function (event) {
//            event.preventDefault();
//            var $user = $(this);
//            var remove_id = $(this).attr('id');
//            remove_id = remove_id.replace("remove-", "");
//
//            $.post("users/remove", {
//                id: remove_id
//            },
//                    function (data) {
//                        if (data.response == true)
//                            $user.parent().remove();
//                        else {
//                            // print error message
//                            console.log('could not remove ');
//                        }
//                    }, 'json');
//        });
//
//        $('#update_user').on('keyup', 'textarea', function (event) {
//            var $user = $(this);
//            var update_id = $user.attr('id'),
//                    update_content = $user.val();
//            update_id = update_id.replace("user-", "");
//
//            $.post("users/update", {
//                id: update_id,
//                content: update_content
//            }, function (data) {
//                if (data.response == false) {
//                    // print error message
//                    console.log('could not update');
//                }
//            }, 'json');
//
//        });
//    });

});


function hide_and_unhide()
{
    var target_div_id = $(event.target).attr('hiding_div_id');
    if ($('#' + target_div_id).css('visibility') === 'visible') {
        $('#' + target_div_id).css('visibility', 'hidden');
        document.getElementById(target_div_id).style.display = "none";
        $(event.target).html('Show more');

    } else if ($('#' + target_div_id).css('visibility') === 'hidden') {
        $('#' + target_div_id).css('visibility', 'visible');
        document.getElementById(target_div_id).style.display = "block";
        $(event.target).html('Show less');
    }
}
;

function animate_to_place() {
    var target_div_id = $(event.target).attr('target_id');
    $('html, body').animate({
        scrollTop: $("#" + target_div_id).offset().top - 200
    }, 2000);
}

function show_users() {
    console.log("Here are list of current system users:");

    $.ajax({
        url: '/services/requests.php',
        data: {
            //pk : '3441df0babc2a2dda551d7cd39fb235bc4e09cd1e4556bf261bb49188f548348',
            url: 'fillComboBox_syslanguage',
        },
        method: "GET",
        //async: false,
        dataType: "json",
        success: function (data) {
            var data = data;

            $.fn.multiLanguageBarSetter.defaults.requestUriTranslated = $("#requestUriRegulated").val();
            $.fn.multiLanguageBarSetter.defaults.langCode = $("#langCode").val();
            $.fn.multiLanguageBarSetter.defaults.basePath = 'ostim/sanalfabrika';
            $.fn.multiLanguageBarSetter.defaults.baseLanguage = 'tr';
            $(".languages").multiLanguageBarSetter(data);

        }
    });
}