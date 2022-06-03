<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta name="viewport" content="width=device-width" />

  <link rel="icon" href="path/to/fav.png" />
  <title>SameSUS registration</title>

  <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />

  <link href="CSS/styleee.css" rel="stylesheet" />
</head>

<body class="with-custom-css-scrollbars" data-dm-shortcut-enabled="true" data-set-preferred-mode-onload="true">
  <div class=" with-navbar">
    <nav id="navbarek" class="stick border-bottom-1">

      <div class="bg-color-soft-blu">
        <div class="w-full h-full d-flex justify-content-between">
          <!-- Logo holder-->

          <div class="d-flex ml-20 align-items-center">
            <div class="ml-10 logo-pet w-30 h-30">

              <a href='/'>
                <svg class="cutsor-pointer" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 24 24" width="50px" fill="#ffff">
                  <path d="M0 0h24v24H0z" fill="none" />
                  <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                </svg>
              </a>

              <!-- <div>pet Shop</div>-->
            </div>
          </div>

          <!-- Seatching-->

          <div class="ml-20 d-flex align-items-center mt-20 position-relative">
            <form action="" method="post ">
              <input type="text" class="bg-color-vsoftwhite h-27 br-15 w-350 p-17" placeholder="search product" />
            </form>
            <button class="position-absolute right-0 bottom-60 pr-10 pointer">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
              </svg>
            </button>
          </div>
          <!--USER menu-------------------------------->
          <div class="d-flex font-size-14 align-items-center">
            <div class="mr-20 change-yellow cutsor-pointer font-weight-semi-bold color-blue-white d-flex mt-10">
              <a class="" href="#contact">CONTACT</a>
            </div>
            <div>
              <div class="mr-20 font-weight-semi-bold cutsor-pointer d-flex color-blue-white font-size-14 mt-10 change-darg-blue" id="accountUser">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39" class="mr-5 color-half-yellow">
                  <path d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                </svg>
                <div id="user">
                  @isset($login)<div id="user">{{$login}}</div>@else My account @endif

                </div>
              </div>
              <div id="loginsAndRegisters"></div>
            </div>

            <div class="mr-30 cutsor-pointer color-blue-white font-size-14 font-weight-semi-bold d-flex mt-10 change-darg-blue">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39" class="mr-5 color-half-yellow">

                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />


              </svg>
              SHOPPING CART
            </div>
          </div>
        </div>
        <!--MAIN LIST TO ANIMALS---------------------------->
        <div class="d-flex justify-content-between" id="menu">
          <div class="mt-15">
            <ul class="list-style-none d-flex">
              <li class="ml-30 mt-5 cutsor-pointer change-yellow font-weight-semi-bold font-size-16" id="dogElementNavbar">
                Dog
              </li>
              <div id="DogPopupHolder"></div>
              <li id="KittyElementNavbar" class="ml-30 mt-5 cutsor-pointer change-yellow font-weight-semi-bold font-size-16">
                Cat
              </li>
              <div id="KittyPopupHolder"></div>
              <li id="MammalsElementNavbar" class="ml-30 mt-5 cutsor-pointer change-yellow font-weight-semi-bold font-size-16">
                Mammals
              </li>
              <div id="MammlsPopupHolder"></div>
              <li id="BirdElementNavbar" class="ml-30 mt-5 cutsor-pointer change-yellow font-weight-semi-bold font-size-16">
                Birds
              </li>
              <div id="BirdPopupHolder"></div>
              <li id="AmphibansElementNavbar" class="ml-30 mt-5 cutsor-pointer change-yellow font-weight-semi-bold font-size-16">
                Amphibians
              </li>
              <div id="AmphibiansPopupHolder"></div>
              <li id="ReptilesElementNavbar" class="ml-30 mt-5 cutsor-pointer change-yellow font-weight-semi-bold font-size-16">
                Reptiles
              </li>
              <div id="ReptilesPopupHolder"></div>
              <li id="FishElementNavbar" class="ml-30 mt-5 cutsor-pointer change-yellow font-weight-semi-bold font-size-16">
                Fish
              </li>
              <div id="fishPopupHolder"></div>
              <li class="ml-30 mt-5 cutsor-pointer change-yellow font-weight-semi-bold font-size-16">
                Sale
              </li>
            </ul>
          </div>
          <div>
            <div class="color-yelow-semi font-size-14 pr-15 pt-10 text-uppercase color-yelow-sem font-weight-semi-bold">
              FREE shipping
            </div>
            <div>from 100zl</div>
            <div id="navhamb" class="display-none"></div>
          </div>
        </div>
      </div>
    </nav>








    <div class="bg-color-vsoft-blu color-black d-flex justify-content-center pt-25">
      <!--Photo of product-->
      <div class="mt-100">
        <div class="d-flex">
          <div class="d-flex">
            <div>
              <div class="pr-15 mt-5">
                <div >
                  @foreach($price as $priceData)
                  <div class="w-full h-full">
                    <img id="2" src="{{$priceData ->image_path_extra}}" class="product-IMG-extra  cutsor-pointer img-fluid rounded w-full h-full " />
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="border">
                <div class="w-full h-full">
                  <a >
                    <img id="1" src="{{$priceData -> image_path}}" class="product-IMG  img-fluid rounded w-full h-full" />
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--NAME STARS AND PRICE :<-->

          <div class="ml-15">
            <div class="font-size-16 text-wrap w-300">
              {{$priceData -> Nazwa_produktu}}
            </div>
            <div class="pt-5">Producent: <a>{{$priceData -> Producent}}</a></div>
            <!--Stars and opinie price-->

            <div class="d-flex align-items-center pt-5">
              <div>
                <img src="data:image/webp;base64,UklGRnoAAABXRUJQVlA4TG0AAAAvDUADEH9AkG1Tf4L5/hDzHwTZtqEZvAhPKjzHGJxW27Ys958MjS57kMmMwgx/I9IZQhOREZjE3W50h4j+TwDQ4btl8DUw+tragHT+dDUMT373Fj9qxbs6CliqWVirediqTdiv+s8uzEqkbf4CAA== " />
                <img src="data:image/webp;base64,UklGRnoAAABXRUJQVlA4TG0AAAAvDUADEH9AkG1Tf4L5/hDzHwTZtqEZvAhPKjzHGJxW27Ys958MjS57kMmMwgx/I9IZQhOREZjE3W50h4j+TwDQ4btl8DUw+tragHT+dDUMT373Fj9qxbs6CliqWVirediqTdiv+s8uzEqkbf4CAA== " />
                <img src="data:image/webp;base64,UklGRnoAAABXRUJQVlA4TG0AAAAvDUADEH9AkG1Tf4L5/hDzHwTZtqEZvAhPKjzHGJxW27Ys958MjS57kMmMwgx/I9IZQhOREZjE3W50h4j+TwDQ4btl8DUw+tragHT+dDUMT373Fj9qxbs6CliqWVirediqTdiv+s8uzEqkbf4CAA== " />
                <img src="data:image/webp;base64,UklGRnoAAABXRUJQVlA4TG0AAAAvDUADEH9AkG1Tf4L5/hDzHwTZtqEZvAhPKjzHGJxW27Ys958MjS57kMmMwgx/I9IZQhOREZjE3W50h4j+TwDQ4btl8DUw+tragHT+dDUMT373Fj9qxbs6CliqWVirediqTdiv+s8uzEqkbf4CAA== " />
                <img src="data:image/webp;base64,UklGRoQAAABXRUJQVlA4THgAAAAvDUADEHcgEEjyJxh4iPkPgmzb0A1ehCUrnAAQh5tq25bl+V15zzfizkQGS0AUOjiM7NCCzSECs7vzlvj+EBH9nwAABcjpgyINFrZ0qSWAxoRpO7SezCTa9TUzYR0VPyYxAjZMVR84BV15oRNwO/TnJWAcRqOIYAA=" />
              </div>
              <div class="d-flex pl-20 pb-5">

                <div class="pr-10">
                  {{$priceData -> Ilosc_opinii}}
                </div>
                <i>opinions </i>
              </div>
            </div>

            <!--PRICE-------->

            <div class="font-size-26 font-weight-bold color-red-price">
              Cena: {{$priceData -> Cena}} zł
            </div>
            <div class="font-weight-semi-bold color-semi-green">
              we will ship in 72 hours
            </div>
            <form>
              <div class="d-flex align-items-center pt-20 bg-color-greyy mt-15">
                <div class="position-relative pl-15 pb-20">
                  <input type="number" class="form-control alt-dm menyHolder mr-25" placeholder="1" />
                  <label class="font-size-10 ">
                    <div class="font-size-14">Quantity: <i class="color-red">{{$priceData -> Ilosc}}</i></div>
                  </label>
                </div>
                <form>
                  <div class="pl-20">
                    <input class="btn btn-primary font-size-16" type="submit" value="ADD PRODUCT" />
                  </div>
                </form>
              </div>
            </form>
          </div>
        </div>

        <!--desc and opinions -->
        <div class="mb-20">
          <div class="mt-100 d-flex text-uppercase font-weight-semi-bold">
            <div id="descProd" class="b-outb p-10 cutsor-pointer bg-color-greyy font-size-14">Description</div>
            <div id="featuresProd" class="b-outb p-10 ml-5 cutsor-pointer bg-color-greyy font-size-14">Product
              features</div>
            <div id="opinionsProd" class="b-outb p-10 ml-5 cutsor-pointer bg-color-greyy font-size-14">Opinions
            </div>
          </div>
          <!--DESC OPSIONS AND ES-->
          <div id="" class=" text-wrap w-600 ">
            <div id="OpcHolder" class="font-size-16 p-10 bg-white display-none">
              {{$priceData -> Opis}}
            </div>
            <div id="featureHolder" class="font-size-16 p-10 bg-white display-none">
              {{$priceData -> Cechy}}
            </div>

            <div id="opinionsHolder" class="font-size-16 p-10 bg-white display-none">
              @isset($priceData -> Ilosc_opinii) {{$priceData -> Opinia}} @else brak opini @endif
            </div>

          </div>

        </div>
        @endforeach
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

  </div>

  <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
  <script src="JSs/navbar.js"></script>
  <script src="JSs/products.js"></script>
</body>

</html>