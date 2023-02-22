<!DOCTYPE html>
<html lang="en">

<head>
    <title>PD Stefanus</title>
    <meta property="og:title" content="PD Stefanus Grogol" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
        html {
            line-height: 1.15;
        }

        body {
            margin: 0;
        }

        * {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
        }

        p,
        li,
        ul,
        pre,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        figure,
        blockquote,
        figcaption {
            margin: 0;
            padding: 0;
        }

        button {
            background-color: transparent;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        button:-moz-focus,
        [type="button"]:-moz-focus,
        [type="reset"]:-moz-focus,
        [type="submit"]:-moz-focus {
            outline: 1px dotted ButtonText;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        input {
            padding: 2px 4px;
        }

        img {
            display: block;
        }

        html {
            scroll-behavior: smooth
        }
    </style>
    <style data-tag="default-style-sheet">
        html {
            font-family: Poppins;
            font-size: 16px;
        }

        body {
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            letter-spacing: normal;
            line-height: 1.55;
            color: var(--dl-color-gray-black);
            background-color: var(--dl-color-gray-white);

        }
    </style>
    <link rel="shortcut icon" href={{ asset('images/logo.png') }} type="icon/png" sizes="32x32" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div>
        <link rel="stylesheet" href="{{ asset('css/users/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/users/edit.css') }}">
        <div class="home-container">
            <div class="home-top-container">
                <nav data-role="Header" class="home-navbar">
                    <a href="/users" class="home-navlink">
                        <img alt="image" src={{ asset('images/logo1-600h.png') }} loading="lazy"
                            class="home-image" />
                    </a>
                    <h1 class="home-logo">
                        <p>PD OMPKK St. Stefanus</p>
                        <p>Umat PD - Edit</p>
                    </h1>
                    <div class="home-right-side">
                        <div class="home-links-container">
                            <a href="/" class="home-navlink">Home</a>
                            <span class="home-text">Info Paroki</span>
                            <a href="/users" class="solid-button-container">
                                <button class="solid-button-button button Button">
                                    <span>Login</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="main-section" class="home-main">
                <div class="container">
                    <form method="POST" action="/users/update/{{ $users->id }}">
                        @csrf
                        <!-- {{ csrf_field() }} -->
                        <div class="row">
                            <div class="col-25">
                                <label for="fullname">Nama Lengkap</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fullname" name="fullname" value="{{ $users->full_name }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="birthdate">Tanggal Lahir</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="birthdate" name="birthdate" value="{{ $users->birthdate }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="address">Alamat</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="address" name="address" value="{{ $users->address }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="paroki">Paroki</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="paroki" name="paroki" value="{{ $users->paroki }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="social_instagram">Instagram</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="social_instagram" name="social_instagram"
                                    value="{{ $users->social_instagram }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="social_tiktok">Tik Tok</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="social_tiktok" name="social_tiktok"
                                    value="{{ $users->social_tiktok }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="phone_number">Nomor HP</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="phone_number" name="phone_number"
                                    value="{{ $users->phone_number }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="email" name="email" value="{{ $users->email }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="gender" name="gender" value="{{ $users->gender }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="first_attendance">Pertama Datang</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="first_attendance" name="first_attendance"
                                    value="{{ $users->first_attendance }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="last_attendance">Terakhir Datang</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="last_attendance" name="last_attendance"
                                    value="{{ $users->last_attendance }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="total_attendance">Total Kedatangan</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="total_attendance" name="total_attendance"
                                    value="{{ $users->total_attendance }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="attendance_percentage">Persentase Kedatangan</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="attendance_percentage" name="attendance_percentage"
                                    value="{{ $users->attendance_percentage }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="description">Deskripsi</label>
                            </div>
                            <div class="col-75">
                                <textarea id="description" name="description" style="height:200px" value="{{ $users->description }}"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="home-footer">
                <div class="home-menu">
                    <img alt="image" src={{ asset('images/logo1-600h.png') }} loading="lazy"
                        class="home-image1" />
                    <h1 class="home-logo2">PD OMPKK St. Stefanus</h1>
                    <div class="home-follow-container1">
                        <span class="home-text18">Follow us on</span>
                        <div class="home-icons-container1">
                            <a href="https://www.instagram.com/pdstefanus" target="_blank" rel="noreferrer noopener"
                                class="home-link4">
                                <svg viewBox="0 0 877.7142857142857 1024" class="home-icon08">
                                    <path
                                        d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://facebook.com" target="_blank" rel="noreferrer noopener"
                                class="home-link5">
                                <svg viewBox="0 0 602.2582857142856 1024" class="home-icon10">
                                    <path
                                        d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://twitter.com" target="_blank" rel="noreferrer noopener"
                                class="home-link6">
                                <svg viewBox="0 0 950.8571428571428 1024" class="home-icon12">
                                    <path
                                        d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
