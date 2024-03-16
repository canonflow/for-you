<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>For You</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:800);
        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }
        .world {
            position: absolute;
            overflow: hidden;
            width: 100%;
            height: 100%;
            background-color: #CCDCDA;
        }
        .world-night {
            background-color: #1E0F4C;
        }
        .toggle {
            position: absolute;
            top: 1rem;
            left: 1rem;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            box-shadow: 0 4px 16px #C40062;
            background: #F8007E url('https://res.cloudinary.com/elliepooh/image/upload/v1491841750/sun_nyr4z3.svg') center center / 60% no-repeat;
            cursor: pointer;
        }
        .toggle-night {
            box-shadow: 0 4px 16px #626EC9;
            background: #9A96E8 url('https://res.cloudinary.com/elliepooh/image/upload/v1491841746/star_u865qq.svg') center 46% / 60% no-repeat;
        }
        .toggle-music {
            position: absolute;
            top: 5rem;
            left: 1rem;
            width: 3rem;
            height: 3rem;
            background: url('https://res.cloudinary.com/elliepooh/image/upload/v1491889929/music_s7aiet.svg') center center / 60% no-repeat;
            cursor: pointer;
        }
        .music-off {
            background: url('https://res.cloudinary.com/elliepooh/image/upload/v1491890054/music-off_nrnsni.svg') center center / 60% no-repeat;
        }

        #title, #wa {
            user-select: none;
        }

        .action:hover {
            color: oklch(var(--nc)) !important;
        }
    </style>
</head>
<body class="world" data-theme="nord">
<div class="select-none">
    <div class="absolute w-full h-full flex flex-col items-center">
        <h1 id="title" class="text-3xl font-bold pb-5 mt-3 text-accent">FOR YOU</h1>
        {{--        <a--}}
{{--            href="https://wa.me/6281332600497/?text=Hai,%20Aku%20udah%20liat%20websitenya%20:)%0A%0AAku%20mau%20kok%20jalan%20sama%20kamuuuu"--}}
{{--            id="wa"--}}
{{--            class="btn btn-secondary action px-10"--}}
{{--            target="_blank"--}}
{{--        >--}}
{{--            Klik--}}
{{--        </a>--}}
        <div class="mb-4">
            <p>Aku mau bilang nih</p>
            <p>Gimana kalo kita jalan bareng?</p>
        </div>
        <textarea
            id="pesan"
            class="textarea textarea-bordered textarea-accenttextarea-md w-3/4 px-5 lg:h-[14%] resize-none max-w-2xl lg:w-full mb-4 z-50"
            placeholder="Pesan..."
            autofocus
        ></textarea>
{{--        <label for="" class="form-control mb-4">--}}
{{--            <div class="label">--}}
{{--                <span class="label-text">Pesanmu</span>--}}
{{--            </div>--}}
{{--        </label>--}}

        <button onclick="kirimPesan()" class="btn btn-primary max-w-2xl px-6 hover:text-slate-200 z-[51]">Kirim</button>
    </div>
    <div class="absolute bottom-3 left-1/2 translate-x-[-50%]">
        <p class="font-bold uppercase text-amber-950">Klik layar-nya biar dombanya loncat - loncat 😆😆</p>
    </div>
</div>
{{--<a class="toggle toggle-night"></a>--}}
{{--<a class="toggle-music"></a>--}}

{{--<audio class="world-music" src="https://res.cloudinary.com/liza/video/upload/v1492853426/sheep_qr3tus.m4a"></audio>--}}
    @vite('resources/js/three.js')
<script type="text/javascript">
    const pesan = document.getElementById('pesan');

    const kirimPesan = () => {
        let oriPesan = pesan.value;
        let encodedPesan = encodeURIComponent(oriPesan);
        let link = document.createElement('a');
        link.href = `https://wa.me/6281332600497/?text=${encodedPesan}`;
        link.target = '_blank';
        link.style.display = 'none';
        link.click();
        console.log(pesan.value);
        console.log(encodeURIComponent(pesan.value));
    };
</script>
</body>
</html>
