$(document).ready(function() {
    $(".dropdown-toggle").dropdownHover();
    $(".dropdown-toggle").dropdown();
    $('#tab-container').easytabs();
    $('#tab-container-2').hovertabs();
    $('#tab-container-3').easytabs();
});

$(document).ready(function() {
    var html = document.documentElement;
    /*alert("Размер вьюпорта: "+ html.clientWidth +"х"+ html.clientHeight);*/

    $('.bg-video-img').css({
        'height': html.clientHeight
    });
});
$(document).ready(function() {

    $('.lik-to-bot').bind("click", function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({scrollTop: $('#itsolutons').offset().top}, 1000);
        e.preventDefault();
    });
    return false;

});

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function get_name_browser() {

    var ua = navigator.userAgent;

    if (ua.search(/Chrome/) > 0)
        return 'Google Chrome';
    if (ua.search(/Firefox/) > 0)
        return 'Firefox';
    if (ua.search(/Opera/) > 0)
        return 'Opera';
    if (ua.search(/Safari/) > 0)
        return 'Safari';
    if (ua.search(/MSIE/) > 0)
        return 'Internet Explorer';
    return 'Не определен';
}

function get_name_os() {
    var os = 0;
    if (navigator.userAgent.indexOf('Windows') != -1)
        os = 1;
    if (navigator.userAgent.indexOf('Linux') != -1)
        os = 2;
    if (navigator.userAgent.indexOf('Mac') != -1)
        os = 3;
    if (navigator.userAgent.indexOf('FreeBSD') != -1)
        os = 4;
// alert(navigator.userAgent);
    switch (os) {
        case 1:
            return('Windows');
            break;
        case 2:
            return('Linux');
            break;
        case 3:
            return('Mac OS');
            break;
        case 4:
            return('FreeBSD');
            break;
        default:
            return('Не удалось определить ОС!');
            break;
    }
}

$('document').ready(function() {

    var myOs = get_name_os();
    var browser = get_name_browser();

    /*if (browser === 'Safari') {
     $('.video-container').css({
     'background-image': 'url("images/video.jpg")',
     'background-size': 'cover'
     });
     }*/

    if (browser === 'Google Chrome') {
        $('.top-header-navbar').css({
            'background-image': 'url("wp-content/themes/wptest3/images/video.jpg")',
            'background-size': 'cover'
        });
    }

});


$('.top-contact-btn').click(function() {

    if ($(this).attr("data-disable-modal") != "true")
    {
        $('#modalForm').modal('show');
        setTimeout(function() {
            initializeMap();
        }, 1000);
    }
});

if (document.getElementById("videoPlaylist") != null)
{
    var wistiaPlaylist = document.getElementById("videoPlaylist").wistiaApi;

    $('.watch-video').click(function() {
        $('#modalForm').modal('show');
        wistiaPlaylist.play(0, 0);
    });

    $('.top-contact-btn').click(function() {
        // $('#modalForm').modal('show');
        if ($(this).attr("data-disable-modal") != "true")
        {
            wistiaPlaylist.play(0, 0);
        }
    });

    /*$('#talkoneus').click(function() {
     $('#modalForm').modal('show');
     wistiaPlaylist.play(0, 0);
     });*/


    wistiaPlaylist.bind('end', function(section, index) {
        $('#modalForm ol').find('li').removeClass('active');
        switch (index + 1) {
            case 0:
                $('#itemVideoLink1').addClass('active');
                break
            case 1:
                $('#itemVideoLink2').addClass('active');
                break
            case 2:
                $('#itemVideoLink3').addClass('active');
                break
            case 3:
                $('#itemVideoLink4').addClass('active');
                break
        }
    });
}
/*wistiaPlaylist.*/

$('#modalForm ol li').click(function() {
    var videoActive = $(this).attr('id');

    $('#modalForm ol').find('li').removeClass('active');

    switch (videoActive) {
        case 'itemVideoLink1':
            $('#itemVideoLink1').addClass('active');
            wistiaPlaylist.play(0, 0);
            break
        case 'itemVideoLink2':
            $('#itemVideoLink2').addClass('active');
            wistiaPlaylist.play(0, 1);
            break
        case 'itemVideoLink3':
            $('#itemVideoLink3').addClass('active');
            wistiaPlaylist.play(0, 2);
            break
        case 'itemVideoLink4':
            $('#itemVideoLink4').addClass('active');
            wistiaPlaylist.play(0, 3);
            break
    }
});


$('#modalForm').on('hidden.bs.modal', function(e) {

    if (wistiaPlaylist)
        wistiaPlaylist.pause();


    $('#modalForm ol').find('li').removeClass('active');
});

// fix menu
$(document).ready(function() {



    if ($('#itsolutons').length)
    {
        var topDist = $('#itsolutons').position().top;

        $(window).scroll(function() {

            if ($(this).scrollTop() + 50 > topDist) {
                $('.fix-two-menu').show();
            } else {
                $('.fix-two-menu').hide();
            }

        });

        $('a#srolltotop').click(function() {
            $('html, body').animate({scrollTop: 0}, 100);
            return false;
        });
    }
    $.validate();


    $('.submit-contact-form').click(function() {
        $(".modal-contact-form").submit();
    });



    $('.modal-contact-form').submit(function() {

        $.post("/engine/contact.php", $('.modal-contact-form').serializeArray(), function(data) {

        });
        $('.modal-contact-form').find(".form-group").fadeOut();
        $('#modal-contact-form-thank-you').fadeIn();
        // $('#modalForm').modal('hide');

        $('#modalThankYou').modal('show');

        setTimeout(function() {
            $('#modalThankYou').modal('hide');
        }, 1700);


        return false;
    });
    
    
    
    $('.side-contact-form').submit(function() {

        $.post("/engine/contact.php", $('.side-contact-form').serializeArray(), function(data) {

        });
        $('.side-contact-form').find(".form-group").fadeOut();
        $('.side-contact-form').parent().hide().html('<h3 id="modal-contact-form-thank-you">Thank you for contacting us!</h3>').show();
        
        $('#modalThankYou').modal('show');

        setTimeout(function() {
            $('#modalThankYou').modal('hide');
        }, 1700);


        return false;
    });



   /* $(".subscribe-url").click(function() {

        id = $(this).attr("data-subscribe-id");
        getPersonalDataForDownloading(id);

        return false;

    });*/


    /*
     var offsetSize = 80;
     $("html, body").animate({scrollTop:$(window.location.hash).offset().top-offsetSize }, 500);
     */

    if (window.location.hash != "")
        $("html, body").animate({scrollTop: $(window.location.hash).offset().top - 100}, 700);



    $(".anchorLink").click(function(e) {
        e.preventDefault();

        if ($(this).attr("data-tab-id") != undefined)
        {
            $('#tab-container').easytabs('select', "#" + $(this).attr("data-tab-id"));
            /*id = "#" + $(this).attr("href").replace("#", "").replace("index.html", "");
            console.log( id );*/
            var id = "#" + $(this).attr("data-tab-id");

            setTimeout(function() {
                $("html, body").animate({scrollTop: $(id).offset().top - 150}, 600);
            }, 700);

        }

    });




    $("#contactFormSubmit").click(function() {
        $.post("/engine/contact.php", $(".bottom-contact-form").serializeArray(), function() {

            $(".bottom-contact-form").hide();
            $('#modalThankYou').modal('show');

            setTimeout(function() {
                $('#modalThankYou').modal('hide');
            }, 3000);

        });
        return false;
    });
    
    
    $(".subscribe-url").click(function() {
        var name = $(this).parent().parent().find("#mailChimpName").val();
        var email = $(this).parent().parent().find("#mailChimpEmail").val();
        
        
        if (name == "") {
        	$(this).parent().parent().find("#mailChimpName").css("border","1px solid red");
        	
        	return false;
        }
        if (email == "" || !validateEmail(email) ) {
        	$(this).parent().parent().find("#mailChimpEmail").css("border","1px solid red");
        	
        	return false;
        }
        
        
        var subscriptionID = $('.subscribe-url').attr('data-subscribe-id');
        $(this).parent().parent().css("visibility", "hidden ");
        $(this).parent().parent().parent().html("<h4 class=\"book-report-request\">Your report on \"" + $(this).attr("data-report-title") + "\" is on the way. Look for it in your email.</h4>");
        $.post("/engine/subscribe.php", {"id": subscriptionID, "name": name, "email": email}, function() {
        });
        return false;
    });

    $(".subscribe-url-resources").click(function() {

        var name = $(this).parent().parent().find("#mailChimpName").val();
        var email = $(this).parent().parent().find("#mailChimpEmail").val();
        
        if (name == "") {
        	$(this).parent().parent().find("#mailChimpName").css("border","1px solid red");
        	
        	return false;
        }
        
        if (email == "" || !validateEmail(email) ) {
        	$(this).parent().parent().find("#mailChimpEmail").css("border","1px solid red");
        	
        	return false;
        }
        
        var subscriptionID = $('.subscribe-url-resources').attr('data-subscribe-id');
        $(this).parent().parent().css("visibility", "hidden ");
        $(this).parent().parent().parent().html("<h4 class=\"book-report-request\">Your report on \"" + $(this).attr("data-report-title") + "\" is on the way. Look for it in your email.</h4>");
        $.post("/engine/subscribe.php", {"id": subscriptionID, "name": name, "email": email}, function() {
        });
        return false;
    });
});


//function getPersonalDataForDownloading(subscriptionID)
//{
//    window.subscriptionID = subscriptionID;
//
//    bootbox.dialog({
//        title: "To get the free PDF book provide your email and name.",
//        message: '<div class="row">  ' +
//                '<div class="col-md-12"> ' +
//                '<form class="form-horizontal"> ' +
//                '<div class="form-group"> ' +
//                '<label class="col-md-4 control-label" for="name">Name</label> ' +
//                '<div class="col-md-4"> ' +
//                '<input id="mailChimpName" name="mailChimpName" type="text" placeholder="Your name" class="form-control input-md"> ' +
//                '</div> ' +
//                '</div> ' +
//                '<div class="form-group"> ' +
//                '<label class="col-md-4 control-label" for="name">Email</label> ' +
//                '<div class="col-md-4"> ' +
//                '<input id="mailChimpEmail" name="mailChimpEmail" type="text" placeholder="Your email" class="form-control input-md"> ' +
//                '</div> ' +
//                '</div> ' +
//                '</form> </div>  </div>',
//        buttons: {
//            cancel: {
//                label: "Cancel",
//                className: "btn",
//                callback: function() {
//                    //Example.show("uh oh, look out!");
//                }
//            },
//            success: {
//                label: "Submit",
//                className: "btn-success",
//                callback: function() {
//                    var name = $('#mailChimpName').val();
//                    var email = $('#mailChimpEmail').val();
//
//
//                    $.post("engine/subscribe.php", {"id": window.subscriptionID, "name": name, "email": email}, function() {
//
//
//                    });
//
//                }
//            },
//        }
//    }
//    );
//}


function initializeMap()
{
    if (document.getElementById('map-canvas') != null)
    {
        var myLatlng = new google.maps.LatLng(35.9592523, -86.8258711);
        var mapOptions = {
            zoom: 14,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: '616 Bradley Ct. Franklin, TN 37067'
        });

        google.maps.event.trigger(map, 'resize');
    }
}

$(document).ready(function() {
    //set the starting bigestHeight variable  
    var biggestHeight = 0;
    //check each of them  
    $('.book-content').each(function() {
        //if the height of the current element is  
        //bigger then the current biggestHeight value  
        if ($(this).height() > biggestHeight) {
            //update the biggestHeight with the  
            //height of the current elements  
            biggestHeight = $(this).height();
        }
    });
    //when checking for biggestHeight is done set that  
    //height to all the elements  
    $('.book-content').height(biggestHeight);
//    $('#book-form').each(function() {
//        //if the height of the current element is  
//        //bigger then the current biggestHeight value  
//        if ($(this).height() > biggestHeight) {
//            //update the biggestHeight with the  
//            //height of the current elements  
//            biggestHeight = $(this).height();
//        }
//    });
//    //when checking for biggestHeight is done set that  
//    //height to all the elements  
//    $('#book-form').height(biggestHeight);

});

/*$(document).ready(function(){
 $('a[href*=#]').bind("click", function(e){
 var anchor = $(this);
 $('html, body').stop().animate({
 scrollTop: $(anchor.attr('href')).offset().top
 }, 1000);
 e.preventDefault();
 });
 return false;
 });*/

