$(document).ready(function () {

    var default_profile_photo = "http://127.0.0.1/messenger.profileplex.com/assets/profile_photo/p200x200/default-profile-photo.jpg";

    var is_valid_profile_photo = true;
    var is_valid_dob = true;

    var error_icon_svg = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"alert-icon\"><path d=\"M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z M12,19.66 c-0.938,0-1.58-0.723-1.58-1.66c0-0.964,0.669-1.66,1.58-1.66c0.963,0,1.58,0.696,1.58,1.66C13.58,18.938,12.963,19.66,12,19.66z M12.622,13.321c-0.239,0.815-0.992,0.829-1.243,0c-0.289-0.956-1.316-4.585-1.316-6.942c0-3.11,3.891-3.125,3.891,0C13.953,8.75,12.871,12.473,12.622,13.321z\"></path></svg>";

    var crop_profile_photo_modal = '<div class="modal-overlay crop-profile-photo-overlay" tabindex="0">' +
        '<div class="modal-content crop-profile-photo-content">' +
        '<div class="modal-box">' +
        '<div class="modal-header">' +
        '<div class="modal-title">Crop Profile photo</div>' +
        '<div class="modal-close">' +
        '<button class="btn-icon btn-icon-default btn-icon-small" id="crop_photo_modal_close_btn" title="Close">' +
        '<div class="icon-wrapper">' +
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971" class="center icon-btn icon-gray">' +
        '<g>' +
        '<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88 c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242 C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879 s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>' +
        '</g>' +
        '</svg>' +
        '</div>	' +
        '</button>' +
        '</div>' +
        '</div>' +
        '<div class="modal-body">' +
        '<div id="profile-photo-crop-viewer">' +
        '</div>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<div class="modal-footer-content">' +
        '<div class="modal-footer-right-content">' +
        '<div class="modal-footer-action">' +
        '<button class="btn btn-primary"' +
        'id="crop-done-btn">Done</button>' +
        '</div>' +
        '<div class="modal-footer-action">' +
        '<button class="btn btn-default"' +
        'id="crop_photo_modal_close_btn2">Close</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<script type="text/javascript">' +
        '$image_crop = $("#profile-photo-crop-viewer").croppie({' +
        'enableExif: true,' +
        'viewport: {' +
        'width: 200,' +
        'height: 200,' +
        'type: "square"' +
        '},' +
        'boundary: {' +
        'width: 300,' +
        'height: 300' +
        '}' +
        '});' +
        '<\/script>';

    $("#edit_profile_about").on("keydown keyup", function () {
        var about = $(this).val();
        var aboutLength = about.length;

        $("#about-letter-count").html(aboutLength);
    });

    $("#profile-photo").on("change", function () {

        validate_profile_photo();

        if (is_valid_profile_photo == true) {
            var reader = new FileReader();
            reader.onload = function (event) {
                $image_crop.croppie("bind", {
                    url: event.target.result
                })
            }
            reader.readAsDataURL(this.files[0]);

            $("body").css("overflow", "hidden");
            $("body").append(crop_profile_photo_modal);
            $(".crop-profile-photo-overlay").fadeIn(100).css("display", "flex").focus();
        }

    });

    $("#remove_profile_photo_btn").on("click", function () {
        $(this).blur();
        $("#edit_profile_profile_photo").attr("src", default_profile_photo);
        $("#edit_profile_profile_photo").attr("data-ischanged", "1");
    })

    $("body").on("click", "#crop-done-btn", function () {

        $image_crop.croppie("result", {
            type: "canvas",
            size: "viewport"
        }).then(function (response) {

            $("#edit_profile_profile_photo").attr("src", response);
            $("#edit_profile_profile_photo").attr("data-ischanged", "1");
            close_modal();

        })
    });

    $("#edit_profile_modal_save_btn").on("click", function () {

        var profile_photo = $("#edit_profile_profile_photo").attr("src");
        var is_photo_changed = $("#edit_profile_profile_photo").attr("data-ischanged");
        var previous_profile_photo = $("#previous_profile_photo").val();

        var gender = $("#edit_profile_gender").val();

        var dob_day = $("#edit_profile_dob_day").val();
        var dob_month = $("#edit_profile_dob_month").val();
        var dob_year = $("#edit_profile_dob_year").val();

        var final_dob = validate_dob(dob_day, dob_month, dob_year);
        var about = $("#edit_profile_about").val().trim();


        if (profile_photo == default_profile_photo) {
            profile_photo = "";
        }

        if (is_valid_profile_photo == true && is_valid_dob == true) {
            $.ajax({
                type: "post",
                url: "update_user_profile",
                data: { profile_photo: profile_photo, is_photo_changed: is_photo_changed, previous_profile_photo: previous_profile_photo, gender: gender, final_dob: final_dob, about: about },
                success: function () {
                    $("#edit_profile_modal_overlay").removeClass("d-f");
                    $("#edit_profile_modal_overlay").addClass("d-n");
                    $("#snackbar_text").html("Profile edited successfully.");
                    $("#snackbar").slideDown(100).queue(function () {
                        $(this).delay(4000).slideUp(100);
                        $(this).dequeue();
                    });
                }
            });
        }

    });

    $("#edit_profile_modal_close_btn, #edit_profile_modal_close_btn2").on("click", function () {
        $("#edit_profile_modal_overlay").removeClass("d-f");
        $("#edit_profile_modal_overlay").addClass("d-n");
    });

    $("body").on("click", "#crop_photo_modal_close_btn, #crop_photo_modal_close_btn2", function () {
        close_modal();
    });

    /* Functions */

    function validate_profile_photo() {

        var filePath = $("#profile-photo").val();
        var fileExtension = filePath.split('.')[1];

        if (fileExtension == "jpg" || fileExtension == "jpeg" || fileExtension == "png") {
            $("#profile-photo-alert-wrapper").html("");
            is_valid_profile_photo = true;
        }
        else {
            $("#profile-photo-alert-wrapper").html("<div class=\"d-f\">\
                                            <div class=\"alert-icon-wrapper\">\
                                                "+ error_icon_svg + "\
                                                </div>\
                                                <div class=\"alert-text-wrapper\">\
                                                    <span class=\"alert-text\">Please choose jpg, jpeg or png image format.</span>\
                                                </div>\
                                            </div>");
            is_valid_profile_photo = false;
        }

    }

    function validate_dob(dob_day, dob_month, dob_year) {

        if (dob_day == "" && dob_month == "" && dob_year == "") {
            $("#dob-alert-wrapper").html("");
            is_valid_dob = true;
            return "";
        }
        else if (dob_day != "" && dob_month != "" && dob_year != "") {
            $("#dob-alert-wrapper").html("");
            is_valid_dob = true;
            return dob_day + " " + dob_month + " " + dob_year;
        }
        else {
            $("#dob-alert-wrapper").html("<div class=\"d-f\">\
                                            <div class=\"alert-icon-wrapper\">\
                                                "+ error_icon_svg + "\
                                            </div>\
                                            <div class=\"alert-text-wrapper\">\
                                                <span class=\"alert-text\">Please enter a valid Date of birth</span>\
                                            </div>\
                                        </div>");
            is_valid_dob = false;
        }

    }

    function close_modal() {

        $("#profile-photo").val("");
        $(".crop-profile-photo-overlay").css("display", "none");
        $(".crop-profile-photo-overlay").remove();
        $("body").css("overflow", "auto");

    }

    $(document).keydown(function (e) {
        if (e.key === "Escape") {
            if ($(".crop-profile-photo-overlay").css("display") == "flex") {
                close_modal();
            }
            if ($("#edit_profile_modal_overlay").css("display") == "flex") {
                $("#edit_profile_modal_overlay").removeClass("d-f");
                $("#edit_profile_modal_overlay").addClass("d-n");
            }
        }
    });

});