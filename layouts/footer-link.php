<?php include 'wait-loader.php' ?>




<script src="assets/js/main.libae52.js?v=5"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="js/imask5fa8.js?id=84547b5ee220bf2a82fd"></script>
    <script src="js/common820b.js?id=c3981478afe40676d58c"></script>
    <script>
        function animateSolutions() {
            let isAnimatedSolutions = false
            if (!isAnimatedSolutions) {
                function isInViewport(element) {
                    const rect = element.getBoundingClientRect();
                    const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
                    return rect.top * 1.15 <= viewportHeight;
                    // return (
                    // rect.top >= 0 &&
                    // rect.left >= 0 &&
                    // rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    // rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    // );
                }
                let items = document.querySelectorAll('.solutionsItem');
                window.addEventListener('scroll', function () {
                    items.forEach(function (item) {
                        let elements = item.querySelectorAll('.js-animated');
                        if (isInViewport(item)) {
                            setTimeout(() => {
                                item.classList.add('isAnimated');
                            }, 1000);
                            elements.forEach(function (element) {
                                element.classList.add('animate');
                                isAnimatedSolutions = true;
                            })
                        }
                    })
                })
            }
        }
        animateSolutions()
    </script>
    <script async>
        $(document).ready(function () {
            $('head').append('<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">');
            $('head').append('<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap">');
        })
    </script>
    <script>
        if ($(window).width() > 1024) {
            let videoMedia = document.getElementById('video');
            let videoLoop = document.getElementById('video-loop');
            let isVideoLoopStarted = false;
            var promise = videoMedia.play();
            if (promise !== undefined) {
                promise.then(_ => {
                    videoMedia.style.visibility = 'visible';
                    console.log('autoplay started');
                }).catch(error => {
                    console.log('autoplay not allowed');
                    videoMedia.style.display = 'none';
                    videoLoop.style.display = 'block';
                });
            }
            videoMedia.addEventListener('ended', function () {
                videoMedia.style.display = 'none';
                videoLoop.style.display = 'inline';
                if (!isVideoLoopStarted) {
                    videoLoop.currentTime = 0;
                    videoLoop.play();
                    isVideoLoopStarted = true;
                }
            })
        }
    </script>
    <script>
        // Set height for langSwitcher block in mobile
        const currentLangElem = document.querySelector('.mobLang .currentLang');
        if (currentLangElem) {
            document.addEventListener('click', function () {
                let langElems = $(".mobLang .langSwitcher li");
                let h = 31; // Height padding without margin last element
                langElems.each(function () {
                    h = h + $(this).outerHeight(true);
                })
                $('.mobLang .langSwitcher').css('height', h);
            })
        }
    </script>

    <script>
        $('.select2').on('change', function (e) {
            selectChange(e.target)
        });
    </script>

</html>