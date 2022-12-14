<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">

    <title>Document</title>
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', ['mainTitle' => 'Read the review for', 'subTitle' => $review->title])
        </div>
        <div class="flex-grow"><br>
            <div class="flex justify-center">
                <div class=" w-1/2 h-64 shadow bg-cover  rounded-t-xl rounded-b-xl "
                    style='background-image: url("{{ asset($review->imagePath != null ? $review->imagePath : 'images/01.jpeg') }}");'>
                </div>
            </div>

            <div class="mb-4 text-3xl max-w-2xl mx-auto text-justify text-black-500">
                Written by: {{ $review->author }}
            </div>

            <div class="indent-7 max-w-2xl mx-auto my-6 text-justify text-black-500">
                {{ $review->summary }}
            </div>

            <hr class="space s" />
        </div>
        <div class="h-10"> @include('includes.footer', [
            'orange' => '<p>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                    alt="Valid CSS!" />
            </a>
        </p>',
            'blue' => '<p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
                src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                alt="Valid CSS!" />
            </a>
        </p>
                ',
        ])
        </div>
    </div>

</body>

</html>
