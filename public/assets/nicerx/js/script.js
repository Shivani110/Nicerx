$(document).ready(function() { 
    // next step active js
    $(".nxt-steps").click(function() {
        // $(this)("active").parent('.active').removeClass('active');
        $(this).addClass("").parent('.active').removeClass('active');
        var that = this;
        $(function(){
            $( that ).parent().hide().next(".quiz-welcome-step").show().addClass("active");
        });
      });
    // next step active js
    $("ul.btn-box li span").on('click', function() {
      // Remove the 'active' class from the current step
      $('ul.btn-box li span').removeClass('active');
      $(this).addClass('active');
      // $(this).addClass('active').parent().siblings().removeClass('active');
    });
    $(".nxt-steps, ul.btn-box li span").click(function() {
        // Remove the 'active' class from the current step
        $(".quiz-welcome-step.active").removeClass('active');
        
        // Find the next step and add the 'active' class to it
        var nextStep = $(this).closest('.quiz-welcome-step').hide().next(".quiz-welcome-step").show().addClass("active");
    });

// prev step js 
      $(".prev-btn").click(function() {
        // $(this)("active").parent('.active').removeClass('active');
        $(this).addClass("").parent().parent('.active').removeClass('active');
        var that = this;
        $(function(){
            $( that ).parent().parent().removeClass('active').hide().prev(".quiz-welcome-step").addClass("active").show();
        });
      });

      $('#combobox').select2();


  // Function to generate options for days
  function generateDays() {
    var select = document.getElementById("day");
    for (var i = 1; i <= 31; i++) {
      var option = document.createElement("option");
      option.value = i;
      option.text = i;
      select.appendChild(option);
    }
  }

  // Function to generate options for months
  function generateMonths() {
    var select = document.getElementById("month");
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    for (var i = 0; i < months.length; i++) {
      var option = document.createElement("option");
      option.value = i + 1;
      option.text = months[i];
      select.appendChild(option);
    }
  }

  // Function to generate options for years
  function generateYears() {
    var select = document.getElementById("year");
    for (var i = 1900; i <= 2024; i++) {
      var option = document.createElement("option");
      option.value = i;
      option.text = i;
      select.appendChild(option);
    }
  }

  // Call functions to generate options
  generateDays();
  generateMonths();
  generateYears();
      
});