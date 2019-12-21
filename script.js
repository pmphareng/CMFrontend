const URL = "http://capemedics.co.za/zaio/main.php?";
//const URL = "http://localhost:3000/main.php?";
/*
    Controller for login button on navbar
*/
$("#loginBtn").click(function() {
  $("#modal-header span:first-child").text("Login");
  $(".modal-message").html("");
  $("#crewReg-modal").hide();
  $("#customerReg-modal").hide();
  $("#carousel-control-container").hide();
  $("#login-modal").show();
  $(".modal").show();
});

/*
    Controller for customer register button on navbar
*/
$("#customerRegBtn").click(function() {
  $("#modal-header span:first-child").text("Register");
  $(".modal-message").html("");
  $("#login-modal").hide();
  $("#crewReg-modal").hide();
  $("#carousel-control-container").hide();
  $("#customerReg-modal").show();
  $(".modal").show();
});

/*
    Controller for crew register button on navbar
*/
$("#crewRegBtn").click(function() {
  $("#modal-header span:first-child").text("Register");
  $(".modal-message").html("");
  $("#login-modal").hide();
  $("#customerReg-modal").hide();
  $("#carousel-control-container").show();
  $("#crewReg-modal").show();
  $(".modal").show();
});

/*
    function that updates message inside modal and shows it
*/
function updateModalMessage(header, body) {
  $("#modal-header span:first-child").html(header);
  $("#modal-message").hide();
  $(".modal-message").html(body);
  $(".modal").show();
}

/*
    Controller for exit buttons
*/
$("*[class*='exit']").click(function() {
  var classes = $(this)
    .attr("class")
    .split("-");
  $(this)
    .parents("." + classes[1])
    .css("display", "none");
});

/*
    navbar button controller
*/
$("#nav-button").click(function() {
  if ($(window).outerWidth() < 900) {
    $("#link-div").toggleClass("reveal-nav-element");
    $("#action-div").toggleClass("show");
  }
});

/*
    controller for modal login button
*/

$(".form-button").click(function(event) {
  event.preventDefault();
  var formId = $(this)
    .parents("form")
    .attr("id");
  var target = $(this)
    .parents("form")
    .attr("target");
  var formData = collectFormData(formId);
  var bool = true;

  if (bool) {
    $.ajax({
      type: "POST",
      url: URL,
      data: {
        request_type: "script",
        target,
        ...formData
      },

      success: async data => {
        const resData = JSON.parse(data);
        console.log("Login data: " +data);
        if (resData.result === "success" && target === "Login") {
          if (resData.type === "Admin") {
            $.ajax({
              type: "POST",
              url: URL,
              data: {
                request_type: "get",
                target: "TestGet"
              },

              success: data => {
                console.log(JSON.parse(data));
              }
            });
            //window.location.replace("?page=Admin-dashboard");
          } else if (resData.type === "Customer") {
            window.location.replace("?page=Customer-dashboard");
          } else if (resData.type === "Crew") {
            window.location.replace("?page=Crew-dashboard");
          }
        } else if (target === "Login") {
          $("#modal-error").html("Your email or password is incorrect");
        } else if (resData.result === "success" && target === "Register") {
          updateModalMessage(
            "Success",
            "<p>Registration request has been made</p><p>You will receive an email with your log in credentials.</p>"
          );
        } else {
          if (resData.result === "success") {
            updateModalMessage(
              "Success",
              "<p>Your booking has been made, Cape medics will contact you within the next 24hrs</p><p>Please note if your booking has not been made 24hrs prior to the requirement of the service you will have to contact Cape Medics via phone call to ensure your booking has been received</p>"
            );
          }
        }
      }
    });
  } else {
    updateModalMessage(
      "Error",
      "<p>Some inputs field(s) were left blank or some boxes were left unchecked</p><p>Please ensure you fill in all inputs correctly</p>"
    );
  }
});

// $("#bookingMoreBtn").click(() => {
//   var accountType = $(location)
//     .attr("search")
//     .split("-")[0]
//     .split("=")[1];

//   if (
//     $(location)
//       .attr("search")
//       .includes("dashboard")
//   ) {

//     });
//   }
// });

/*
    function that collects data and stores it into a JSOn object string
*/
function collectFormData(formId) {
  var formData = {};
  //   if (formId.includes("-")) {
  //     formData.type = formId.substr(0, formId.indexOf("-"));
  //   }
  $("#" + formId + " input").each(function() {
    if (
      $(this).attr("type") != "checkbox" &&
      $(this).attr("type") != "radio" &&
      $(this).is(":visible")
    ) {
      if ($(this).attr("type") === "date") {
        formData[$(this).attr("name")] = $(this)
          .val()
          .split("-")
          .reverse()
          .join("/");
      } else {
        formData[$(this).attr("name")] = $(this).val();
      }
    } else if ($(this).is(":checked")) {
      formData[$(this).attr("name")] = $(this).val();
    } else {
      if ($(this).attr("type") == "checkbox") {
        formData[$(this).attr("name")] = "false";
      }
    }
  });
  if (formId.includes("Event")) {
    $("#" + formId + " select").each(function() {
      formData[$(this).attr("name")] = $(this).val();
    });
  }

  formData[$("textarea").attr("name")] = $("textarea").val();

  return formData;
}

/*
    controller to handle the clicking of a checkbox that needs to display a subform
*/
$("input[type='checkbox']").click(function() {
  if ($(this).attr("data-display") != undefined) {
    if ($(this).is(":checked")) {
      displaySubForms($(this));
    } else {
      hideSubForms($(this).attr("data-for"));
    }
  }
});

/* 
    controller for radios that need to display sub forms 
*/
$("input[type='radio']").click(function() {
  if ($(this).attr("data-display") != undefined) {
    if ($(this).val() === "No") {
      hideSubForms($(this).attr("data-for"));
    } else {
      displaySubForms($(this));
    }
  }
});

/*
    function that determines which subforms to display
*/
function displaySubForms(element) {
  if (
    element.attr("data-display") != undefined &&
    element.attr("data-display") === "both"
  ) {
    hideSubForms(element.attr("data-for"));
    displaySubForm(element.attr("data-for"), "0");
    displaySubForm(element.attr("data-for"), "1");
  } else if (
    element.attr("data-display") != undefined &&
    element.attr("data-display") != "both"
  ) {
    hideSubForms(element.attr("data-for"));
    displaySubForm(element.attr("data-for"), element.attr("data-display"));
  }
}

/*
    function that display subform with id of name+index
*/
function displaySubForm(name, index) {
  if ($("input[data-for='" + name + "']").is(":checked")) {
    $("#" + name + "" + index).css("display", "inherit");
  }
}

/*
    function that hides form with given name
*/
function hideSubForms(name) {
  $("input[data-for*='" + name + "']").each(function() {
    if (!$(this).is(":checked")) {
      $("div[id='" + name + "" + $(this).attr("data-display") + "']").css(
        "display",
        "none"
      );
    }
  });
}

/*
    Controller for more button pressed on template
*/
$(".template-button").click(function() {
  window.location.replace("?page=booking&id=" + $(this).attr("id"));
});

/*
    function that calculates the difference between two inputted dates and 
    displays inputs for each day
*/
$("input[data-function='recursive']").on("input", function() {
  var sibling = $(this)
    .parent()
    .siblings()
    .find("input[data-function='recursive']");
  if (sibling.val() != "") {
    var input = $(this)
      .val()
      .split("-");
    var input2 = sibling.val().split("-");
    var enteredDate = new Date(input[0], input[1] - 1, input[2]);
    var secondDate = new Date(input2[0], input2[1] - 1, input2[2]);
    var difference = Math.ceil(
      Math.abs(
        (enteredDate.getTime() - secondDate.getTime()) / (1000 * 3600 * 24)
      )
    );
    difference++;
    var element = $(this)
      .parents(".subform")
      .find(".times");
    var name = $(this).attr("name");
    name = name.substr(0, name.indexOf("["));
    element.html("");
    if (enteredDate <= secondDate) {
      element.append(createInputs(difference, name, enteredDate));
    } else {
      element.append(createInputs(difference, name, secondDate));
    }
  }
});

var bools = [false, false];

/*
    function that outputs inputs 
*/
function createInputs(difference, name, date) {
  var html = "<div class='form-segment'>";
  for (var i = 1; i <= difference; i++) {
    var dateString = date.toLocaleDateString();
    html +=
      "<div class='form-row'><label> " +
      dateString +
      " start time</label><input type='time' name='" +
      name +
      "[" +
      dateString +
      " start time]' ></div>";
    html +=
      "<div class='form-row'><label>" +
      dateString +
      " end time</label><input type='time' name='" +
      name +
      "[" +
      dateString +
      " end time]'></div>";
    date.setDate(date.getDate() + 1);
  }
  html += "</div>";
  return html;
}

$("#contact").click(function() {
  $("#contact-us").slideToggle();
});

/*
    controller for howItWorks button
*/
$("#howItWorks").click(function() {
  scrollDown();
});

/*
    function that scrolls view down one window height
*/
function scrollDown() {
  var vheight = $(window).height() + 100;
  $("html, body").animate(
    {
      scrollTop: (Math.floor($(window).scrollTop() / vheight) + 1) * vheight
    },
    500
  );
}

/*
    controller for send message button
*/
$("#send").click(function(event) {
  event.preventDefault();
  var formId = $(this)
    .parents("form")
    .attr("id");
  var formData = collectFormData(formId);

  $.ajax({
    type: "POST",
    url: URL,
    data: {
      request_type: "script",
      target,
      ...formData
    },
    success: function(data) {
      if (data.result === "success") {
        updateModalMessage(
          "Sucess",
          "<p>Your email has sent, Cape Medics will be in contact with you as soon as possible</p>"
        );
      } else {
        updateModalMessage(
          "Error",
          "<p>Your email failed to send, please try again later</p>"
        );
      }
      $("#contact-us").hide();
    }
  });
});

/*
    function that validates user input
    returns a boolean
*/
function validateTextInput(input) {
  return input.val().length > 0;
}

/*
    function that validates at least one radio is selected per radio div segment
*/

function validateRadioInputs() {
  var bool = true;
  var count = 0;
  $(".radio-div").each(function() {
    if ($(this).is(":visible")) {
      $(this)
        .children('input[type="radio"]')
        .each(function() {
          if ($(this).is(":checked")) {
            count++;
          }
        });
      if (count === 0) {
        bool = false;
        return false;
      } else {
        count = 0;
      }
    }
  });

  return bool;
}

function validateFormInputs(formId) {
  var bool = true;
  $("#" + formId + " input").each(function() {
    if (
      $(this).attr("type") != "radio" &&
      $(this).attr("type") != "checkbox" &&
      $(this).is(":visible")
    ) {
      if (!validateTextInput($(this))) {
        bool = false;
        reportError($(this));
      }
    }
  });
  bools[0] = bool;

  if (bools[0]) {
    return true;
  } else {
    return false;
  }
}

function reportError(input) {
  input.addClass("error");
}
