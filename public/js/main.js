(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    

    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Calender
    $('#calender').datetimepicker({
        inline: true,
        format: 'L'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : false
    });


    // Datatables
    $('#datatables').DataTable({
        responsive: true
    })

    // Select2
    $('#select2').select2()

    // Daterangepicker
    $('#daterangepicker').daterangepicker({
        opens: 'left',
        showDropdowns: true,
        autoApply: true,
        autoUpdateInput: false,
        singleDatePicker: false,
        locale: {
            format: 'YYYY-MM-DD'
          }
      
      })
      $('#daterangepicker').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
      });

      
    // Datepicker
    $('#datepicker').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        yearRange: "c-300:c+20"
    })

    // File input js
    $("#fileinput").fileinput();

    // dropzone
    $("#dropzone").dropzone({ url: "/file/post" });
})(jQuery);

function isNumber(event) {
    var keyCode = event.which ? event.which : event.keyCode;
    if (keyCode < 48 || keyCode > 57) {
        return false; // Mencegah karakter selain angka ditampilkan
    }
}