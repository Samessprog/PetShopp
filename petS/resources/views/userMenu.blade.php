<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta name="viewport" content="width=device-width" />

  <link rel="icon" href="path/to/fav.png" />
  <title>user page</title>

  <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
  <link href="CSS/sstyle.css" rel="stylesheet" />
</head>

<body class="with-custom-css-scrollbars" data-dm-shortcut-enabled="true" data-set-preferred-mode-onload="true">
  <div class="with-navbar">
    <nav class="navba bg-color-soft-blu w-full">
      <div class="d-flex align-items-center justify-content-between">
        <div class="pl-20 pt-10 pb-10">
          <a href="/">
            <svg class="cutsor-pointer" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 24 24" width="50px" fill="#ffff">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
            </svg>
          </a>
        </div>
        <div class="pr-20 d-flex flex-column pr-20 mr-15">
          <i class="font-size-24 color-white pr-20">user:</i>
          <i class="font-size-24 color-white pr-20">role:</i>
        </div>
      </div>
    </nav>



    <div class="bg-color-vsoft-blu color-black pt-25 d-flex justify-content-center align-items-center">

      <div class="d-flex mt-50 mb-100">

        @foreach($user as $userData)
        <!---USER PHOTS AND DATA-->

        <div class="d-flex flex-column">
          <img class="w-200 h-200 img-fluid" alt="loading photo failed" src="https://1.bp.blogspot.com/-4iBxAsoWs0o/YPw5xLKlJPI/AAAAAAACL9Y/fSebL33BPosXFjBtnpgSHZ4_boGHiZplwCLcBGAsYHQ/w400-h400/%25D8%25B5%25D9%2588%25D8%25B1%2B%25D8%25A8%25D8%25B1%25D9%2588%25D9%2581%25D8%25A7%25D9%258A%25D9%2584%2B%25D9%2581%25D9%258A%25D8%25B3.png" />
          <div>
            <button class=" bg-color-aquasoft-BUTTON font-weight-semi-bold btn mt-10 bg-color-aquasoft font-size-16" type="button">
              Change password
            </button>
          </div>
        </div>
        <div>
          <div class="ml-20 d-flex flex-column border-full-grey">
            <div>
              <form action="checkUserMenu" method="GET">
                <div class="d-flex">

                  <div class="d-flex flex-column">
                    <label class="font-weight-semi-bold d-flex justify-content-center font-size-18"> Name </label>
                    <input class="user-input font-weight-semi-bold" type="text" name="name" placeholder=" {{ $userData -> Imie }} " />
                  </div>

                  <div class="font-weight-semi-bold d-flex flex-column ml-20">
                    <label class="d-flex justify-content-center font-size-18"> surname </label>
                    <input class="user-input font-weight-semi-bold" type="text" name="surName" placeholder=" {{ $userData -> Nazwisko }} " />

                  </div>
                </div>
                <div>
                  <div class="mt-20">
                    <label class="font-weight-semi-bold d-flex justify-content-center font-size-18">E-mail</label>
                    <input class="user-input w-full font-weight-semi-bold" type="mail" name="mail" placeholder=" {{ $userData -> Mail }} " />
                  </div>
                </div>

                <div class="d-flex mt-15">
                  <div class="font-weight-semi-bold d-flex flex-column">
                    <label class="d-flex justify-content-center font-size-18">Streat</label>
                    <input class="user-input font-weight-semi-bold" type="text" name="streat" placeholder=" {{ $userData -> Ulica }} " />
                  </div>

                  <div class="d-flex flex-column ml-20">
                    <label class="font-weight-semi-bold d-flex justify-content-center font-size-18">Nr of house</label>
                    <input class="user-input font-weight-semi-bold" type="text" name="nrHouse" placeholder=" {{ $userData -> Nr_Domu }} " />
                  </div>
                </div>
            </div>

            <div class="d-flex mt-15">
              <div class="d-flex flex-column">
                <label class="font-weight-semi-bold d-flex justify-content-center font-size-18">Town</label>
                <input class="user-input font-weight-semi-bold" type="text" name="town" placeholder="  {{ $userData -> Miasto }} " />
              </div>

              <div class="d-flex flex-column ml-20">
                <label class="font-weight-semi-bold d-flex justify-content-center font-size-18">ZIP code</label>
                <input class="user-input font-weight-semi-bold" type="text" name="ZIPcode" placeholder=" {{ $userData -> Kod_pocztowy }} " />
              </div>
              <div class="d-flex flex-column ml-20 ">
                <label class="font-weight-semi-bold d-flex justify-content-center font-size-18">Phone number</label>
                <input class="user-input font-weight-semi-bold" type="text" name="phoneNumber" placeholder=" {{ $userData -> Nr_telefonu }} " />
              </div>
            </div>
            <div class="mt-15 d-flex justify-content-end">
              <button class="btn bg-color-aquasoft-BUTTON">EDIT</button>

            </div>

            </form>
            @endforeach

            <div class="">
              <label>Errors</label>
              <div class="errors-Users h-100">
                @if($errors->any())  <div class="color-red font-size-16 list-style-none"><b>@foreach($errors->all() as $err) <li id="errors">{{$err}}</li> @endforeach</b></div>@endif
              </div>

            </div>

          </div>
          <div class="ml-20 mt-40">
            <div class="font-size-18 font-weight-semi-bold mb-5">
              Your spellings
            </div>
            <!--POBIERANIE ZAMOWIEN JAK MA OCZYWISCIE -->
            <div class="user-spellings h-200">


            </div>
          </div>
        </div>
        <!--zamowienia od usera-->
      </div>






    </div>

  </div>











  <!--FOOTER----------------------------------------->
  <div class="footer w-full bg-color-soft-blu d-flex justify-content-center color-blue-white">
    <div class="mt-60 d-flex">
      <div class="mr-21">
        <div class="pb-15 font-size-16 font-weight-semi-bold">
          ZAPISZ SIE DO NEWSLETTERA
        </div>
        <form action="" method="post ">
          <div>
            <input type="email" class="bg-color-vsoftwhite h-27 br-7 w-200 p-17" placeholder="Adres e-mail" />
          </div>
          <div class="d-flex align-items-center mt-20">
            <input type="checkbox" class="cutsor-pointer" />
            <div class="d-flex allign pl-10">
              accepts the
              <a class="pr-5 pl-5" style="color: #ffda06" href="#">regulations </a>and the
              <a class="pr-5 pl-5" style="color: #f7da39" href="#">privacy policy</a>
            </div>
          </div>
        </form>
        <div class="pt-20 d-flex justify-content-center">
          <button class="btn" type="button">Sent</button>
        </div>
      </div>
      <!--ACCOUNT FOOTER   -------->
      <div class="mr-50">
        <div class="font-size-16 font-weight-semi-bold pb-20 pl-5">
          MY account
        </div>

        <ul class="list-style-none">
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>Loyalty program
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>
            Register
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>Sign In
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>cart
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>Exchange products
          </li>
        </ul>
      </div>
      <!--iNFORMATION FOOTER-->
      <div class="mr-21">
        <div class="font-size-16 font-weight-semi-bold pb-20 pl-5">
          Informations
        </div>
        <ul class="list-style-none">
          <li class="mt-5 change-yellow font-size-14 cutsor-pointer d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>About us
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>Our Stores
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>Application
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>Own Brand
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>Regulations
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>Privacy policy
          </li>
          <li class="mt-5 cutsor-pointer change-yellow font-size-14 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
              <path d="M0 0h24v24H0z" fill="none" />
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
            </svg>Work
          </li>
        </ul>
        <div class="d-flex">
          <div class="pt-5">
            <a style="color: #f7da39" href="#"><i class="demo-icon icon-instagram-filled font-size-40"></i></a>
          </div>
          <div class="pt-5 pl-10">
            <a style="color: #f7da39" href="#"><i class="demo-icon icon-facebook-squared font-size-40"></i></a>
          </div>
        </div>
      </div>
      <!--Contact and media----------->
      <div class="">
        <div class="mb-35">
          <div class="pb-20 font-size-16 font-weight-semi-bold" id="contact">
            Contact
          </div>
          <div class="d-flex" D>
            <div class="pr-10">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
              </svg>
            </div>
            <div>Sames123@interia.pl</div>
          </div>
        </div>
        <div>
          <div class="pb-20 font-size-16 font-weight-semi-bold">
            follow us
          </div>
          <div class="d-flex">
            <div class="pt-5">
              <a style="color: #f7da39" href="#"><i class="demo-icon icon-instagram-filled font-size-40"></i></a>
            </div>
            <div class="pt-5 pl-10">
              <a style="color: #f7da39" href="#"><i class="demo-icon icon-facebook-squared font-size-40"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-black">
    <div class="p-5">&copy; Wszelkie prawa zastrzerzone</div>
  </div>
  </div>
</body>

</html>