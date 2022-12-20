<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wedding</title>
    <base href="{{asset('')}}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">


    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .owl-dots{
            display: none;
        }
        .owl-nav{
            display: none;
        }
    </style>
    <link rel="stylesheet" href="https://wedding-tanthanhh0910.koyeb.app/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://wedding-tanthanhh0910.koyeb.app/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://wedding-tanthanhh0910.koyeb.app/css/style.css">
    <script type="text/javascript">
        window.onload=function(){
            document.getElementById("my_audio").play();
        }
    </script>
</head>
<body class="antialiased">
<video id="my_audio" controls autoplay loop muted hidden>
    <source src="images/Ngay-Cuoi-Khac-Viet.mp3" type="audio/ogg">
    <source src="images/Ngay-Cuoi-Khac-Viet.mp3" type="audio/mpeg">
</video>
<section class="ftco-section" style="padding: 4em 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
                        <div class="work">
                            <div class="text w-100">
                                    <span>
                                        <a href="#" class="text-dark"
                                           style="font-family: 'Brush Script MT', cursive; font-size: 30px;margin-left: 100px">Welcome</a>
                                    </span>
                                <h3 class=""
                                    style="font-family: 'Brush Script MT', cursive; font-size: 50px;margin-left: 20px">
                                    Save the Date</h3>
                            </div>
                            <div class="img d-flex align-items-end justify-content-center"
                                 style="background-image: url(images/image5.png); ">
                                <div class="text w-100">
                                    <h2 style="text-align: center;color: yellow; font-family: 'Arial Black'">15 | 03 |
                                        2023</h2>
                                    <h3 style="text-align: center; font-family: 'Apple Chancery';"><a href="#">Thành &
                                            Trang</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item1">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center"
                                 style="background-image: url(images/image1.jpg);">
                                <div class="text w-100">
                                    <span class="cat">Thành + Trang</span>
                                    <h3 style="font-size: 30px !important;"><a href="#">WE GOT MARRIED</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item1">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center"
                                 style="background-image: url(images/anh1.png);">
                                <div class="text w-100">
                                    <div class="cat"
                                         style="color: black;margin-left: 60px; font-family: 'Comic Sans MS'"><b>Tấn
                                            Thành + Thị Trang</b></div>
                                    <h5 style="color: white">Có một câu chuyện tình yêu đẹp của chúng tôi về cuộc hành
                                        trình yêu nhau mọi người cùng nghe mình kể nhé !</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item1">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center"
                                 style="background-image: url(images/anh3.jpeg);">
                                <div class="text w-100">
                                    <h5 style="color: white ;font-size: 19px">2019😘2020😘2021😘2022😘2023</h5>
                                    <h5 style="color: white">Chúng tôi cùng học chung một ngôi trường đại học tình cờ
                                        gặp nhau và cũng từ giây phút đó chúng tôi cũng giành một tình cảm cho đối
                                        phương.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item1">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center"
                                 style="background-image: url(images/image-3.jpg);">
                                <div class="text w-100">
                                    <h5 style="color: white; font-size: 19px">2019😘2020😘2021😘2022😘2023</h5>
                                    <h5 style="color: white">Và sau đó một thời gian chúng tôi có nói chuyện qua lại với
                                        nhau và tìm hiểu về nhau. Và đến với giao đoạn được gọi là bồ bịch 😆</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item1">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center"
                                 style="background-image: url(images/image-4.jpg);">
                                <div class="text w-100">
                                    <h5 style="color: white; font-size: 19px">2019😘2020😘2021😘2022😘2023</h5>
                                    <h5 style="color: white">Rồi cũng tới buổi hẹn hò đầu tiên mới đầu cả hai còn
                                        e ngại nên chưa nói nhiều về nhau nhưng sau những lần sau đã có nhiều câu chuyện
                                        để nói về nhau</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item1">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center"
                                 style="background-image: url(images/image-2.jpg);">
                                <div class="text w-100">
                                    <h5 style="color: white; font-size: 19px">2019😘2020😘2021😘2022😘2023</h5>
                                    <h5 style="color: white">Từng ngày từng tháng trôi qua chuyện tình của chúng mình
                                        cũng dập dìu,
                                        vui có buồn có những cùng vì nhau mà đã thông cảm bỏ qua để tiến đến xa hơn với
                                        nhau</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item1">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center"
                                 style="background-image: url(images/anh2.png);">
                                <div class="text w-100">
                                    <h5 style="color: white; font-size: 19px">2019😘2020😘2021😘2022😘2023</h5>
                                    <h5 style="color: white">Và chuyến xe thanh xuân đã đưa mình đến với nhau rồi chuyển
                                        qua giai đoạn từ bồ bịch đến giao đoạn vợ chồng</h5>
                                    <h5 style="color: white">Và luôn chúc phúc cho chúng mình hạnh phúc mãi mãi về
                                        sau</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="text w-100">
                                <h3>Lời nhắn</h3>
                                <h5 style="color: black;font-size: 16px;font-family: 'Apple Chancery'">- Mỗi người đều sẽ gặp được một người tình yêu chân thành đến với mình. Dù đến sớm hay muộn đều không
                                quan trọng mà điều quan trong là mình thấy hạnh phúc người được chọn và cùng nhau nắm tay đi đến hết đoạn đường còn lại.</h5>
                                <h5 style="color: black;font-size: 16px;font-family: 'Apple Chancery'">- Khi đang yêu nhau ta có thể trao cho nhau tình yêu mãnh liệt và rất lạng mãn. Nhưng khi đã là vợ chồng
                                    thì chỉ cần đơn giản và thực tế. Câu nói "YÊU" ngày nào mình đổi qua thành chữ "THƯƠNG" nhiều hơn. Chỉ cần bình yêu và hạnh phúc
                                    luôn mang theo bên người.</h5>
                                <h5 style="font-size: 13px; margin-left: 15px; font-family: 'Times New Roman'"> Hãy cùng người hiện tại đi tìm hạnh phúc mới</h5>
                                <h5 style="font-size: 13px;font-family: 'Times New Roman'">Chứ đừng tìm người mới để tìm lại hạnh phúc cũ</h5>
                                <h5 style="font-size: 20px;font-family: 'Times New Roman'">Hẹn mọi người vào một ngày đẹp trời vào ngày 15 tháng 03 năm 2023 nhé!</h5>
                                <div style="font-size: 20px; float: right;">Thành 👩‍❤️‍💋‍👩 Trang</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://wedding-tanthanhh0910.koyeb.app/js/jquery.min.js"></script>
<script src="https://wedding-tanthanhh0910.koyeb.app/js/popper.js"></script>
<script src="https://wedding-tanthanhh0910.koyeb.app/js/bootstrap.min.js"></script>
<script src="https://wedding-tanthanhh0910.koyeb.app/js/owl.carousel.min.js"></script>
<script src="https://wedding-tanthanhh0910.koyeb.app/js/main.js"></script>
</body>
</html>
