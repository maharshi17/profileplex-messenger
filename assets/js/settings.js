$(document).ready(function () {

    var is_valid_full_name = true;
    var is_valid_username = true;
    var is_valid_email = true;

    var is_valid_current_password = false;
    var is_valid_new_password = false;
    var is_valid_confirm_password = false;

    var is_valid_delete_account_current_password = false;

    var error_icon_svg = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"alert-icon\"><path d=\"M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z M12,19.66 c-0.938,0-1.58-0.723-1.58-1.66c0-0.964,0.669-1.66,1.58-1.66c0.963,0,1.58,0.696,1.58,1.66C13.58,18.938,12.963,19.66,12,19.66z M12.622,13.321c-0.239,0.815-0.992,0.829-1.243,0c-0.289-0.956-1.316-4.585-1.316-6.942c0-3.11,3.891-3.125,3.891,0C13.953,8.75,12.871,12.473,12.622,13.321z\"></path></svg>";

    $(".settings-sidebar-tab").on("click", function () {

        var tab_content = $(this).attr("data-tabname");

        $(".settings-sidebar-tab").removeClass("active-sidebar-tab");
        $(this).addClass("active-sidebar-tab");

        $(".settings-content").removeClass("active-settings-content");
        $("#" + tab_content + "_content").addClass("active-settings-content");
    });

    /* Tab save btns events */

    $("#general_settings_save_btn").on("click", function () {

        var fullname = $("#settings_full_name").val().trim();
        var username = $("#settings_username").val().trim();
        var email = $("#settings_email").val().trim();

        validate_fullname(fullname);
        validate_username(username);
        validate_email(email);

        if (is_valid_full_name == true && is_valid_username == true && is_valid_email == true) {
            $.ajax({
                type: "post",
                url: "update_settings/general_settings",
                data: { fullname: fullname, username: username, email: email },
                success: function (data) {
                    $("#settings_modal_overlay").removeClass("d-f");
                    $("#settings_modal_overlay").addClass("d-n");
                    reset_settings_tabs();
                    $("#snackbar_text").html("General settings changed successfully.");
                    $("#snackbar").slideDown(100).queue(function () {
                        $(this).delay(4000).slideUp(100);
                        $(this).dequeue();
                    });
                }
            });
        }

    });

    $("#current_password").on("blur", function () {

        var current_password = $("#current_password").val();

        $.ajax({
            type: "post",
            url: "check_user_current_password",
            data: { current_password: current_password },
            success: function (data) {
                if (data == 1) {
                    $("#current_password").removeClass("input-error");
                    $("#current-password-alert-wrapper").html("");
                    is_valid_current_password = true;
                }
                else {
                    $("#current_password").addClass("input-error");
                    $("#current-password-alert-wrapper").html("<div class=\"d-f\">\
                                                        <div class=\"alert-icon-wrapper\">\
                                                            "+ error_icon_svg + "\
                                                            </div>\
                                                            <div class=\"alert-text-wrapper\">\
                                                                <span class=\"alert-text\">Incorrect password, Please try again !</span>\
                                                            </div>\
                                                        </div>");
                    is_valid_current_password = false;
                }
            }
        });
    });

    $("#change_password_save_btn").on("click", function () {

        var current_password = $("#current_password").val();
        var new_password = $("#new_password").val();
        var confirm_password = $("#confirm_password").val();

        validate_current_password(current_password);
        validate_new_password(new_password);
        validate_confirm_password(new_password, confirm_password);

        if (is_valid_current_password == true && is_valid_new_password == true && is_valid_confirm_password == true) {
            $.ajax({
                type: "post",
                url: "update_settings/change_password",
                data: { new_password: new_password, confirm_password: confirm_password },
                success: function (data) {
                    $("#settings_modal_overlay").removeClass("d-f");
                    $("#settings_modal_overlay").addClass("d-n");
                    reset_settings_tabs();
                    $("#snackbar_text").html("Password changed successfully.");
                    $("#snackbar").slideDown(100).queue(function () {
                        $(this).delay(4000).slideUp(100);
                        $(this).dequeue();
                    });
                }
            });
        }
    });

    $("#private_profile_switch").on("click", function () {

        var is_profile_private;

        if ($(this).is(":checked")) {
            is_profile_private = 1;
        }
        else {
            is_profile_private = 0;
        }
        $.ajax({
            type: "post",
            url: "update_settings/change_profile_privacy",
            data: { is_profile_private: is_profile_private }
        });

    });

    $("#delete_account_form").on("submit", function () {

        var current_password = $("#delete_account_current_password").val();

        if (current_password == "") {
            $("#delete_account_current_password").addClass("input-error");
            $("#delete-account-confirm-password-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Please enter your current password.</span>\
                                                    </div>\
                                                </div>");
            is_valid_delete_account_current_password = false;
        }
        if (is_valid_delete_account_current_password == true) {
            return true;
        }

        return false;
    });

    $("#delete_account_current_password").on("blur", function () {

        var current_password = $("#delete_account_current_password").val();

        $.ajax({
            type: "post",
            url: "check_user_current_password",
            data: { current_password: current_password },
            success: function (data) {
                if (data == 1) {
                    $("#delete_account_current_password").removeClass("input-error");
                    $("#delete-account-confirm-password-alert-wrapper").html("");
                    is_valid_delete_account_current_password = true;
                }
                else {
                    $("#delete_account_current_password").addClass("input-error");
                    $("#delete-account-confirm-password-alert-wrapper").html("<div class=\"d-f\">\
                                                        <div class=\"alert-icon-wrapper\">\
                                                            "+ error_icon_svg + "\
                                                            </div>\
                                                            <div class=\"alert-text-wrapper\">\
                                                                <span class=\"alert-text\">Incorrect password, Please try again !</span>\
                                                            </div>\
                                                        </div>");
                    is_valid_delete_account_current_password = false;
                }
            }
        });
    });

    $("#settings_modal_close_btn").on("click", function () {
        $("#settings_modal_overlay").removeClass("d-f");
        $("#settings_modal_overlay").addClass("d-n");
        reset_settings_tabs();
    });

    /* Functions */

    /* General settings functions */
    function validate_fullname(fullname) {

        var fullnameRegex = /^[a-zA-Z ]{1,30}$/;

        if (fullname == "") {
            $("#settings_full_name").addClass("input-error");
            $("#settings-full-name-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Please enter your full name.</span >\
                                                    </div >\
                                                </div > ");
            is_valid_full_name = false;
        }
        else if (!fullnameRegex.test(fullname)) {
            $("#settings_full_name").addClass("input-error");
            $("#settings-full-name-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Full name only contains letters.</span>\
                                                    </div>\
                                                </div>");
            is_valid_full_name = false;
        }

        else {
            $("#settings_full_name").removeClass("input-error");
            $("#settings-full-name-alert-wrapper").html("");
            is_valid_full_name = true;
        }
    }

    function validate_username(username) {

        var usernameRegex = /^[a-z0-9._-]{1,30}$/;

        if (username == "") {
            $("#settings_username").addClass("input-error");
            $("#settings-username-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Please enter your username.</span>\
                                                    </div>\
                                                </div>");
            is_valid_username = false;
        }
        else if (username.indexOf(" ") >= 0) {
            $("#settings_username").addClass("input-error");
            $("#settings-username-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Username should not contain space.</span>\
                                                    </div>\
                                                </div>");
            is_valid_username = false;
        }
        else if (!usernameRegex.test(username)) {
            $("#settings_username").addClass("input-error");
            $("#settings-username-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Username only contains letters, numbers, hyphens, underscores and periods.</span>\
                                                    </div>\
                                                </div>");
            is_valid_username = false;
        }
        else {
            $("#settings_username").removeClass("input-error");
            $("#settings-username-alert-wrapper").html("");
            is_valid_username = true;
        }

    }

    function validate_email(email) {
        var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (email == "") {
            $("#settings_email").addClass("input-error");
            $("#settings-email-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Please enter your email.</span>\
                                                    </div>\
                                                </div>");
            is_valid_email = false;
        }
        else if (!emailRegex.test(email)) {
            $("#settings_email").addClass("input-error");
            $("#settings-email-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Please enter a valid email.</span>\
                                                    </div>\
                                                </div>");
            is_valid_email = false;
        }
        else {
            $("#settings_email").removeClass("input-error");
            $("#settings-email-alert-wrapper").html("");
            is_valid_email = true;
        }
    }

    /* Change password functions */
    function validate_current_password(current_password) {

        if (current_password == "") {
            $("#current_password").addClass("input-error");
            $("#current-password-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Please enter your current password.</span>\
                                                    </div>\
                                                </div>");
            is_valid_current_password = false;
        }

    }

    function validate_new_password(new_password) {
        if (new_password == "") {
            $("#new_password").addClass("input-error");
            $("#new-password-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Please enter your new password.</span>\
                                                    </div>\
                                                </div>");
            is_valid_new_password = false;
        }
        else if ($("#new_password").val().length < 6) {
            $("#new_password").addClass("input-error");
            $("#new-password-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Password must be 6 characters or more.</span>\
                                                    </div>\
                                                </div>");
            is_valid_new_password = false;
        }
        else {
            $("#new_password").removeClass("input-error");
            $("#new-password-alert-wrapper").html("");
            is_valid_new_password = true;
        }
    }

    function validate_confirm_password(new_password, confirm_password) {
        if (confirm_password == "" || new_password != confirm_password) {
            $("#confirm_password").addClass("input-error");
            $("#confirm-password-alert-wrapper").html("<div class=\"d-f\">\
                                                <div class=\"alert-icon-wrapper\">\
                                                    "+ error_icon_svg + "\
                                                    </div>\
                                                    <div class=\"alert-text-wrapper\">\
                                                        <span class=\"alert-text\">Both passwords do not match.</span>\
                                                    </div>\
                                                </div>");
            is_valid_confirm_password = false;
        }
        else {
            $("#confirm_password").removeClass("input-error");
            $("#confirm-password-alert-wrapper").html("");
            is_valid_confirm_password = true;
        }
    }

    $(document).keydown(function (e) {
        if (e.key === "Escape") {
            if ($("#settings_modal_overlay").css("display") == "flex") {
                $("#settings_modal_overlay").removeClass("d-f");
                $("#settings_modal_overlay").addClass("d-n");
                reset_settings_tabs();
            }
        }
    });

    function reset_settings_tabs() {
        $(".settings-sidebar-tab").removeClass("active-sidebar-tab");
        $("#general_settings_tab").addClass("active-sidebar-tab");

        $(".settings-content").removeClass("active-settings-content");
        $("#general_settings_content").addClass("active-settings-content");
    }
});