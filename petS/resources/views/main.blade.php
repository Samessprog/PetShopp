<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta name="viewport" content="width=device-width" />

  <link rel="icon" href="path/to/fav.png" />
  <title>pet Shop</title>
  <div id="login"></div>
  <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />

  <link href="Fontello/fontello-ac7ddc52/css/fontello.css" rel="stylesheet" />
  <link href="CSS/style.css" rel="stylesheet" />
</head>

<body data-dm-shortcut-enabled="true" data-sidebar-shortcut-enabled="true" data-set-preferred-mode-onload="true">
  <div class="page-wrapper with-navbar with-sidebar">
    <div id="logShow"></div>

    <nav id="navbarek" class="stick border-bottom-1">

      <div class="bg-color-soft-blu">
        <div class="w-full h-full d-flex justify-content-between">
          <!-- Logo holder-->
          <div class="d-flex ml-20 align-items-center">
            <div class="ml-10 logo-pet w-30 h-30">
              <a href="#">
                <img class="img-fluid w-full h-full" src="PetStoreLogo.png" />
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
            <a href="userMenu">
              <div class="color-yelow-semi font-size-14 pr-15 pt-10 text-uppercase color-yelow-sem font-weight-semi-bold">
                FREE shipping
              </div>
            </a>
            <div>from 100zl</div>
            <div id="navhamb" class="display-none"></div>
          </div>
        </div>
      </div>
    </nav>

    <main>
      <div class="bg-color-vsoft-blu pt-20 mb-40">
        <!-- poplar brandss---------------------------------------------------------------->
        <div class="font-size-25 color-blur-vwhite d-flex font-weight-semi-bold justify-content-center">
          Popular brands
        </div>
        <div class="d-flex justify-content-center mt-20 align-items-center">
          <div class="d-flex align-items-center">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000" class="pointer">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M11.67 3.87L9.9 2.1 0 12l9.9 9.9 1.77-1.77L3.54 12z" />
              </svg>
            </div>
            <div class="p-20">
              <a href="#"><img src="data:image/webp;base64,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" />
              </a>
            </div>
            <div class="p-20">
              <a href="#"><img src="data:image/webp;base64,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" />
              </a>
            </div>
            <div class="p-20">
              <a href="#"><img src="data:image/webp;base64,UklGRpYFAABXRUJQVlA4IIoFAADQGQCdASqMADwAPm0ykUWkI6GYDOQ4QAbEtABrEhhoBaRPRt2QJf2FaEvRx+RN4b5gP0V/2X+A9pz1V+gB/Tv7h1sfoAeVV+zfwa/uZ+3Ps3f/+nNZbtWK+p8u/6f4U7V+6wwI0suPn0Bv9fy3fS3ALPJjcbjcYRVnRnUfajJKb31tRrRPavyxN/0AnsMk0C2OrL8Prrto6+1V75+d6Y8GEb56ZXLBC23+U8WqqANkV7J23wp8tbeJK7nPx5Qf2V03yX/ECtxR64/VkgE/xdBhmFcv+YuTgAD+/TnQBcXTMBmFf/R8Xm3R1yitJeDUP8Bofue1xVXIBn8MS9NoHbdyJu1HdxdYruo/TssU81ydZ39/Sh5v/gn+FYzoZYi64eGqgv/6V6cPd0rmhCntrs2UBZt+QXijaskisaFwax5XidDXFnVzvXLFJ4w/8Q4oWtihoFEC9VhKH1BtpcG0H+aCaYA28/+Cgi2rWcbV3UBbcbReWYVDQ4tOw9HWafBP8zEr7/33sBqmBK0/eEirVuNp7eBiHxOV//mF/cJeYndXf13fd/Vh0GkT6U3FJWIDcOHa94UR+fkBvp8iwj50Krk7WxHYlNI4b6+l/40UxZNCgvi/RqMBYGVxyd2P9+uQc+6i9fSE9R1W0ZY33380GPdM1/NHQClGe2QyODsZXAleoqWQSYt1S+ekr7gVQQByAGF8H/qTqqPa9jxYmceJf0R/9u6YVMh+nKxMZBNAGGSlt7Anee0uUElbk+Yusm19K7h9fcaU8UJhohZCpQZtzuKpoxSAebqImUjqr/ufMBb32g6M29dzsuy2AbyovrWzlD3STWoOTJfaQ99szjabYgItD47udH9kZrbuxc8mnsSGbA7KVhiqK1IHyc60/1TwFb0u5l0f/cN/7oWDO1op9+dbxX7BJu2BT1cyGyemxBX9LflJ5DvuCPAdQV3kDCYw751fbkP5ibiaPLmjEaN+i2PsbfiGB9TJ8qABBBAcsBAIsg5uuE/qZzTBezYqo5pZsMPwk+HKN3VrH7zBktmuIrSpZ9iCNpM6GI7OfQFJ0RLQYMATF2i55HSDJQCf5KdwNdDqLwEfjDPI2nelLvvCjha4/Il5Kohk6R5261qrAMCVVTudyV/As3PJmLJ6JBQlxLl5XgV6UEMDPUPJyj59LhFjadZQfUYVcFzwUVGc2cNrFoF1ubSTAwNuh9ULoNY5YEAbAoIIMVRxvAH/SdGQ8aCFLrw/8a9B8vU6laZ7bg8WXHIG/hQCPeAjb1DMmIgU/PwGHGxpbb4oQJOwZlvz3NJOEa58xDtjv4LwiHPS9hyWa7yR395xDVDWb5V6Gtq1jEFw+4313yo+BC8RGCuFxKQb3IdYFFMZ8bUaCJWt3Jrq7tj4d6q8/5ddMPHD1/jR/flW4wHCVIam72QtDBsfjBprwbfkscRKp3dOAyHsKuKF0D/h06tokFybJlDwcFdOucG+Ih0T0u/FK12SJrJdx6e2Sq95EkIZ/mwx/rpP5AFQhcmoKtDsh8ZIKqjgXT4X+R1MIuOd86/54WrjYJ0OLr+TE6rDks00M6kszEctE+RVGqWd1VI8t3xCiHHd67V5gYMjJayGbFW4T+m+AVl6adveH/kpoWyRcFy/+ej09ZVWvKo5lBDgLEGUsklg2VMeVpVyaWo5VcRQKjTT+QuUjORZsOj5NoremiQahU2MoR5Cr4TkAq5uUB/eC1i74y9YJYa0luzs1xgHUU4B7e0BhxxOii4hySnRqoMVNl8RSIs9aAJRC0XORHKX11rayrMPWglSG2yWb75kIm+Ly1O6VIC7PbCqZR9oBchuPn0t8tVkKE4b6dRyltDPUCL9F4LfP6R+HSfwOk5kbHe+uiG+gkNYmEmA8xfQAAAAAA==" />
              </a>
            </div>
            <div class="p-20">
              <a href="#"><img src="data:image/webp;base64,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" />
              </a>
            </div>
            <div class="p-20">
              <a href="#"><img src="data:image/webp;base64,UklGRhIDAABXRUJQVlA4IAYDAAAQEQCdASqMADwAPm00l0ikIqIhJHZpSIANiWIAlQP6roQPMEsTCP+ZKcBtj/MB+unUQ9AD+xf2PrAPQA8qz9n/gp/cr0gIorT5vtyp2AGkCmaeN98N6IC1P5QyBMX4UrK/AjTCxP5zbDM3EJsWJ9L6QqwQopX8YVWfthSg1MMjNFyIKecCyxuMkvlFrN1s2TgAAP79OdEL9JNSeGzLyhmwme/UdLG/ibKKrVH4QE1y42IqkZRUc78JzV3bVYNkD7v3ogHD7UTeZW4zX91SwZjTM3+bbANF7gRW2blLVyQ7+LSQLwBdQYVgLjHDe+1qGcfCycNkQtf5hfopjtDmsr60AnEdkJMp3EP70oAh+IUSVdxp7/uOJn8q/8W6Bo070SueOe9mw5v4Ci30RKfzYp5llEtfPFiq58tJN2cWpNdJXsRb5gjvUT8bMPEuJSxz6IKXH6gN9V8pkYswLJnTnIPQDlrvZdUA0F5LoJcz1jePpDW8hqUFmr28trUCiPw+WU1FQZQ9/uX0X4kL2Pp/uf6HuMmBabbw+x6jK0WERH8f+XSWdA0qJc7Bl0Ui029qyRXekCxBZcHZac1Ziu2SequsGYVRtnBPfhhNCpHQuhBNlBwTYLHAAqK3MYqh8QgXlr9cpzKbNl6XveamNVNAFX8pF7MqjUuDlH8qMGZXgWlqstt39+L4yqIPsKooOli1kJhfK6Bnv/8G/KXCo9yu+ngTLJDPf/fko0pb+nE2wgAfGrjjS8GGiuG3tj263MKGc/+6kR5PT+mWuaE6SS96qkMeYQ4pQpg3PaEV/929jS9uGvFFhQkWck1JW75QPoPrmlo2qbwA6ILxPJNyvPX1bUbrikB2ER0yT0wTWJTNtnGU5XW5DprIaoPF/vltG3wnLRZ2PZqXmYy3fvgNh3WN9Q9OxnacBSTsLNJziujH68KGLVHXkqU7aEacc/+NNu9BkZmCoXWMGZuoPRj3wrzqrThSiZ/jsnu4NyL/9/E7FGnhCn6T8NR/J3MH23S8hD2eLUUN60dAAAA=" />
              </a>
            </div>

            <div>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" class="pointer" fill="#000000">
                <g>
                  <path d="M0,0h24v24H0V0z" fill="none" />
                </g>
                <g>
                  <polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12" />
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div class="p-20 color-blue-white">
          <div class="mb-15 font-weight-bold font-size-24 border-bottom-2 color-blur-vwhite">
            Often chosen
          </div>
          <!--PRODUCTS------------------------------------------------------------------------->
          <div class="d-flex d-flex justify-content-center tests">

            <div class="w-250 d-flex flex-column pl justify-content-center border align-items-center " id="dog">
              @foreach($price as $priceData)
              <div class="w-full h-full">
                <img src="{{$priceData -> image_path}}" class=" product-IMG-main img-fluid rounded w-full h-full" />
              </div>
              <div class="p-10 bg-color-produc-desc w-full ">
                <div class="">
                  {{$priceData -> Nazwa_produktu}}
                </div>
                <div class="pt-10">
                  <img src="data:image/webp;base64,UklGRnoAAABXRUJQVlA4TG0AAAAvDUADEH9AkG1Tf4L5/hDzHwTZtqEZvAhPKjzHGJxW27Ys958MjS57kMmMwgx/I9IZQhOREZjE3W50h4j+TwDQ4btl8DUw+tragHT+dDUMT373Fj9qxbs6CliqWVirediqTdiv+s8uzEqkbf4CAA== " />
                  <img src="data:image/webp;base64,UklGRnoAAABXRUJQVlA4TG0AAAAvDUADEH9AkG1Tf4L5/hDzHwTZtqEZvAhPKjzHGJxW27Ys958MjS57kMmMwgx/I9IZQhOREZjE3W50h4j+TwDQ4btl8DUw+tragHT+dDUMT373Fj9qxbs6CliqWVirediqTdiv+s8uzEqkbf4CAA== " />
                  <img src="data:image/webp;base64,UklGRnoAAABXRUJQVlA4TG0AAAAvDUADEH9AkG1Tf4L5/hDzHwTZtqEZvAhPKjzHGJxW27Ys958MjS57kMmMwgx/I9IZQhOREZjE3W50h4j+TwDQ4btl8DUw+tragHT+dDUMT373Fj9qxbs6CliqWVirediqTdiv+s8uzEqkbf4CAA== " />
                  <img src="data:image/webp;base64,UklGRnoAAABXRUJQVlA4TG0AAAAvDUADEH9AkG1Tf4L5/hDzHwTZtqEZvAhPKjzHGJxW27Ys958MjS57kMmMwgx/I9IZQhOREZjE3W50h4j+TwDQ4btl8DUw+tragHT+dDUMT373Fj9qxbs6CliqWVirediqTdiv+s8uzEqkbf4CAA== " />
                  <img src="data:image/webp;base64,UklGRoQAAABXRUJQVlA4THgAAAAvDUADEHcgEEjyJxh4iPkPgmzb0A1ehCUrnAAQh5tq25bl+V15zzfizkQGS0AUOjiM7NCCzSECs7vzlvj+EBH9nwAABcjpgyINFrZ0qSWAxoRpO7SezCTa9TUzYR0VPyYxAjZMVR84BV15oRNwO/TnJWAcRqOIYAA=" />
                </div>
                <div class="font-weight-semi-bold let-spec">
                  <span>{{$priceData -> Cena}}</span> <span>zł</span>
                </div>
                <form>
                  <button class="w-full">
                    <div class="w-full d-flex justify-content-center pt-5 bg-color-soft-blu cutsor-pointer">
                      <div class="pr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#f7da39">
                          <path d="M0 0h24v24H0zm18.31 6l-2.76 5z" fill="none" />
                          <path d="M11 9h2V6h3V4h-3V1h-2v3H8v2h3v3zm-4 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-9.83-3.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4h-.01l-1.1 2-2.76 5H8.53l-.13-.27L6.16 6l-.95-2-.94-2H1v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.13 0-.25-.11-.25-.25z" />
                        </svg>
                      </div>
                      <div class="let-spec t-al-c font-weight-semi-bold font-size-18 ">
                        To cart
                      </div>
                  </button>
                </form>
                @endforeach
              </div>
            </div>
          </div>

          <hr />
        </div>

        <div class="mb-15 font-weight-bold border-bottom-2 font-size-24 color-blur-vwhite">
          dog zone
        </div>
        <div class="d-flex d-flex justify-content-center tests"></div>

        <div class="mb-15 font-weight-bold font-size-24 border-bottom-2 color-blur-vwhite">
          Kitty zone
        </div>
        <div class="d-flex d-flex justify-content-center tests"></div>

        <div class="mb-15 font-weight-bold font-size-24 border-bottom-2 color-blur-vwhite">
          news
        </div>
        <div class="d-flex d-flex justify-content-center tests"></div>
      </div>
  </div>
  </main>
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

  <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
  <script src="JSs/navbar.js"></script>
</body>

</html>