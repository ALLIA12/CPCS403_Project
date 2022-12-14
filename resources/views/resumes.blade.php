<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESUMES</title>
    <link rel="icon" href="{{ asset('icon.png') }}">

</head>

<body>
    @include('includes.header', ['mainTitle' => 'Our ', 'subTitle' => 'team'])

    <div class="grid place-items-center">
        <object height="1100" width="900" data="{{ asset('resumes/Ali CV.pdf') }}" type="application/pdf">
            <p>Your web browser doesn't have a PDF plugin.
                Instead you can <a href="{{ asset('resumes/Ali CV.pdf') }}">CLICK TO DOWNLOAD Ali CV.</a></p>
        </object>
        <br>
        <object height="1100" width="900" data="{{ asset('resumes/Black CV.pdf') }}" type="application/pdf">
            <p>Your web browser doesn't have a PDF plugin.
                Instead you can <a href="{{ asset('resumes/Black CV.pdf') }}">CLICK TO DOWNLOAD Abdularamhn CV.</a></p>
        </object>
        <br>
        <object height="1100" width="900" data="{{ asset('resumes/Marwan_CV.pdf') }}" type="application/pdf">
            <p>Your web browser doesn't have a PDF plugin.
                Instead you can <a href="{{ asset('resumes/Marwan_CV.pdf') }}">CLICK TO DOWNLOAD Marwan CV.</a></p>
        </object>
        <br>
        <object height="1100" width="900" data="{{ asset('resumes/Yousuf CV.pdf') }}" type="application/pdf">
            <p>Your web browser doesn't have a PDF plugin.
                Instead you can <a href="{{ asset('resumes/Yousuf CV.pdf') }}">CLICK TO DOWNLOAD Yousuf CV.</a></p>
        </object>
        <br>
        <object height="1100" width="900" data="{{ asset('resumes/Ahmed CV.pdf') }}" type="application/pdf">
            <p>Your web browser doesn't have a PDF plugin.
                Instead you can <a href="{{ asset('resumes/Ahmed CV.pdf') }}">CLICK TO DOWNLOAD Ahmed CV.</a></p>
        </object>
        <br>
        <object height="1100" width="900" data="{{ asset('resumes/Aziz CV.pdf') }}" type="application/pdf">
            <p>Your web browser doesn't have a PDF plugin.
                Instead you can <a href="{{ asset('resumes/Aziz CV.pdf') }}">CLICK TO DOWNLOAD Aziz CV.</a></p>
        </object>
    </div>
    @include('includes.footer', [
        'orange' => '<p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
                src="http://jigsaw.w3.org/css-validator/images/vcss"
                alt="Valid CSS!" />
        </a>
    </p>
          ',
        'blue' => '<p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
            alt="Valid CSS!" />
        </a>
    </p>
         ',
    ])
</body>

</html>
