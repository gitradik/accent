/*$('.telegram').submit(function (e) {
    e.preventDefault();
    const orderLoader = document.getElementById('pageLoaderId');
   // orderLoader.classList.remove('d-none');
    $.ajax({
        type: 'POST',
        url: '/ovitta/wp-content/themes/accent/api-telegram.php',
        data: $(this).serialize()
    }).done(() => {
        //window.location = '/';
       // setTimeout(() => orderLoader.classList.add('d-none'), 0);
    });
});*/

$('.telegram').submit(function (e) {
    e.preventDefault();
    $.ajax({
        type : 'POST',
        url : '/ovitta/wp-content/themes/accent/leelooai.php',
        data : $(this).serialize(),
        dataType : 'json',
        success : function (result) {
            $.ajax({
                type : 'POST',
                url : 'https://api.leeloo.ai/api/v1/accounts',
                data: {
                    name: result['name'],
                    email: result['email'],
                    phone: result['phone'],
                },
                headers: {
                    "X-Leeloo-AuthToken":"bpskyolj9z1te934vm0an2cko6j9x6z7vwbplfihixwmw3putgccxxts5lbds01blw3lpbn8v7pkutf08szobsm578uy3er9tmme",
                },
                dataType : 'json',
                success : function (res) {

                    var put_url = 'https://api.leeloo.ai/api/v1/accounts/' + res.data.id + '/add-tag';
                    console.log(put_url);
                    $.ajax({
                        type : 'PUT',
                        url : put_url,
                        data: {
                            tag_id: result['tag_id'],
                        },
                        headers: {
                            "X-Leeloo-AuthToken":"bpskyolj9z1te934vm0an2cko6j9x6z7vwbplfihixwmw3putgccxxts5lbds01blw3lpbn8v7pkutf08szobsm578uy3er9tmme",
                        },
                        dataType : 'json',
                        success : function (res) {

                            console.log(res);

                        },
                        error : function (err) {
                            console.log(err);
                        }
                    });
                },
                error : function () {
                    alert("error inner");
                }
            });
        },
        error : function () {
            alert("error outer");
        }
    })
});

function onClickFormModal(title, idTitle, location, locationId) {
    document.getElementById(idTitle).innerText = title;
    document.getElementById(locationId).value = location;
}

$(".smooth-anchor").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    } // End if
});

const handleClick = (e) => {
    const hamList = document.getElementById('hamListId');
    const ham = document.getElementById('mainNavBarToggleId');
    const childrensHamMenu = [...hamList.childNodes];
    if (childrensHamMenu.includes(e.target) || childrensHamMenu.includes(e.target)) {
        return;
    }
    if (hamList.classList.contains('show')) {
        ham.click();
    }
};

document.addEventListener('mousedown', handleClick, false);

$(".slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 2,
    adaptiveHeight: true,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ],
});

$(".company-slider").slick({
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 1000,
    slidesToShow: 7,
    slidesToScroll: 7,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ],
});