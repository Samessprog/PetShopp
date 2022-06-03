<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta name="viewport" content="width=device-width" />

  <link rel="icon" href="path/to/fav.png" />
  <title>SameSUS registration</title>
  <style> </style>

  <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
  <link href="CSS/stylee.css" rel="stylesheet" />
</head>

<body class="with-custom-css-scrollbars  bg-color-vsoft-blu " data-dm-shortcut-enabled="true" data-set-preferred-mode-onload="true">
  <div class="page-wrapper with-navbar">
    <nav class="navba bg-color-soft-blu w-full ">
      <div class="d-flex align-items-center justify-content-between">
        <div class="pl-20 pt-10 pb-10">
          <a href='/'>
            <svg class="cutsor-pointer" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 24 24" width="50px" fill="#ffff">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
            </svg>
          </a>
        </div>
        <div class="pr-20">
          <i class="font-size-24 color-white">Samesu Register</i>
        </div>
      </div>
    </nav>

    <div class="content-wrapper d-flex justify-content-center align-items-centermt-20">
      <div class="XD d-flex flex-column mt-20">
        <div class="ml-10 font-size-24 mb-15 color-black">Register</div>

        <form action="toRegister" method="GET">

          <div class="d-flex flex-column">
            <div class="d-flex">
              <input type="text" class="zd " placeholder="Login" id="login" name="login" />
              <div class="font-size-20 color-red">*</div>
            </div>
            <div id="loginError"></div>
            <div class="d-flex">
              <input type="password" class="zd" placeholder="Password" id="password" name="password" />
              <div class="font-size-20 color-red">*</div>
            </div>
            <div id="passwordError"></div>
            <div class="d-flex">
              <input type="password" class="zd" placeholder="Password" id="rePassword" name="rePassword" />
              <div class="font-size-20 color-red">*</div>
            </div>
            <div id="rePasswordError"></div>

            <div class="d-flex ">
              <input type="text" class="strnrHTown " placeholder="Streat" id="login" name="streat" />
              <div class="font-size-20 color-red">*</div>

              <input type="text" class="strnrHTown " placeholder="Nr of House" id="login" name="nrHouse" />
              <div class="font-size-20 color-red">*</div>

              <input type="text" class="strnrHTown " placeholder="Town" id="login" name="town" />
              <div class="font-size-20 color-red">*</div>
            </div>

            <div class="d-flex ">
              <input type="text" class="strnrHTown " placeholder="ZIP code" id="login" name="ZIPcode" />
              <div class="font-size-20 color-red">*</div>

              <input type="mail" class="strnrHTown " placeholder="mail" id="login" name="mail" />
              <div class="font-size-20 color-red">*</div>

              <input type="number" class="strnrHTown " placeholder="phone Number" id="login" name="phoneNumber" />
              <div class="font-size-20 color-red">*</div>
            </div>

          </div>

          @if($errors->any())<div class="color-red font-size-16 list-style-none"><b>@foreach($errors->all() as $err) <li id="errors">{{$err}}</li> @endforeach</b></div>@endif


          <div class="mt-50 font-size-18  color-black">additional consents</div>
          <div class="mt-20  color-black">
            <div class="d-flex flex-column">
              <div class="d-flex">
                <label>
                  <input type="checkbox" class="" id="dataCheckBox" />
                  I consent to the processing of my personal data
                  <div id="chckBoxError"></div>
                </label>

                <div class="font-size-20 color-red pl-5">*</div>
              </div>
              <div>
                <label>
                  <input type="checkbox" class="mt-15" />
                  I declare that I have read the content and accept the
                  Regulations and the Privacy Policy of the store
                </label>
              </div>
              <div>
                <label>
                  <input type="checkbox" class="mt-15" />

                  I want to receive marketing messages (offers, discount
                  vouchers, current promotions) to the e-mail address and
                  telephone number provided
                </label>

              </div>
            </div>
            <button class="btn mt-40 rad-10 font-size-16 xx" id="valRegister">
              submit
            </button>

        </form>


      </div>
    </div>
  </div>
  </div>


  <script src="JSs/val.js"></script>
</body>

</html>