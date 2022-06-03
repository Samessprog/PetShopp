
let accountShower = document.getElementById('accountUser');
let logReg = document.getElementById('loginsAndRegisters');
let logShower = document.getElementById('logShow')
let isShowed = false;
accountShower.addEventListener('click', (() => {
    if (isShowed === false) {
        isShowed = true;
        const logRegister = new ShowLoginMenu(logShower, logReg)

    }
}))


let navbar = document.getElementById('navbarek')
let popupmenu = document.getElementById('menu')
let navbarHamburger = document.getElementById('navhamb')

window.addEventListener('scroll', (() => {
    const currentScroll = window.pageYOffset
    navbar.classList.add('sticky')

    if (currentScroll <= 0) {

        navbar.classList.remove('sticky')
        popupmenu.classList.remove('hidde')
        navbarHamburger.classList.add('display-none')
    }
    if (currentScroll !== 0) {
        popupmenu.classList.add('hidde')
        createHamburger()
    }

    function createHamburger() {
        let navbarHamburger = document.getElementById('navhamb')
        navbarHamburger.classList.remove('display-none')
        root = document.createElement('div')

        root.classList.add('stc', 'bg-color-soft-blu', 'pt-10', 'pb-10', 'pl-20', 'd-flex')

        hambHolder = document.createElement('div')
        hambHolder.classList.add('cutsor-pointer')
        hambSpanF = document.createElement('span')
        hambSpanF.classList.add('bar')

        hambSpanS = document.createElement('span')
        hambSpanS.classList.add('bar')

        hambSpanT = document.createElement('span')
        hambSpanT.classList.add('bar')

        hambHolder.addEventListener('click', (() => {


        }))

        navbar.append(navbarHamburger)
        navbarHamburger.append(root)
        root.append(hambHolder)
        hambHolder.append(hambSpanF, hambSpanS, hambSpanT)
    }

}))


let logFlag = false;
class ShowLoginMenu {
   
    constructor(logShower, logReg) {
         
        let users = document.getElementById('user').textContent
        
     
        if (!(users.trim() === "My account")) {

            this.logShower = logShower
            this.logReg = logReg
            //create Login adn logOut element

            this.root = document.createElement('div')
            this.root.classList.add('te', 'd-flex', 'justify-content-center', 'align-items-center', 'br-7', 'position-abs', 'bg-whites')

            this.login = document.createElement('div')
            this.login.textContent = 'Account'
            this.login.classList.add('MyaccLogOut', 'p-5', 'pl-10', 'pr-10', 'm-15', 'font-size-18', 'cutsor-pointer')

            this.text = document.createElement('div')
            this.text.textContent = 'X'
            this.text.classList.add('color-blur-vwhite', 'p-5', 'm-15', 'cutsor-pointer')

            this.logOut = document.createElement('div')
            this.logOut.textContent = 'log Out'
            this.logOut.classList.add('MyaccLogOut', 'p-5', 'pl-10', 'pr-10', 'm-15', 'font-size-14')

            this.LoginLink = document.createElement('a')
            this.logOutLink = document.createElement('a')
            this.logOutLink.href = 'logOut'

            this.root.append(this.LoginLink, this.text, this.logOutLink)
            this.logOutLink.append(this.logOut)
            this.LoginLink.append(this.login)
            this.logReg.append(this.root)

            this.text.addEventListener('click', this.hideLoginMenu.bind(this), true)


            //appends

            this.logShower.append(this.rootShow)


        }
        if ((users.trim() === "My account")) {

            this.logShower = logShower
            this.logReg = logReg
            //create Login adn Register element

            this.root = document.createElement('div')
            this.root.classList.add('te', 'd-flex', 'justify-content-center', 'align-items-center', 'br-7', 'position-abs', 'bg-whites')

            this.login = document.createElement('div')
            this.login.textContent = 'Login'
            this.login.classList.add('LoginRegisterdiv', 'p-5', 'pl-10', 'pr-10', 'm-15', 'font-size-18')

            //Show Login menu!

            this.login.addEventListener('click', (() => {
                this.rootShow = document.createElement('div')
                this.rootShow.classList.add('bg-white', 'xkurd', 'position-abs', 'b-50-l-50', 'color-black')

                this.loginPopUp = document.createElement('div')
                this.lgs = document.createElement('div')
                this.lgs.classList.add('bg-color-soft-blu', 'p-10', 'color-white', 'font-size-20')
                this.lgs.textContent = "Sign In"


                this.HOLDER = document.createElement('div')
                this.HOLDER.classList.add('d-flex', 'flex-column', 'justify-content-center', 'align-items-center')

                this.formLogin = document.createElement('form')
                this.formLogin.action = "login"
                this.formLogin.method = "GET"
                this.formLogin.classList.add('d-flex', 'flex-column', 'justify-content-center', 'align-items-center')

                //login input 
                this.loginHolder = document.createElement('div')
                this.loginHolder.classList.add('mt-k0', 'p-15')
                this.loginInput = document.createElement('input')
                this.loginInput.name = "login"
                this.loginInput.classList.add('bg-black', 'log-reg-pop', 'color-black')

                //password input
                this.passwordHolder = document.createElement('div')
                this.PassInput = document.createElement('input')
                this.PassInput.classList.add('bg-black', 'log-reg-pop', 'color-black')
                this.PassInput.name = "password"
                this.PassInput.placeholder = 'log-reg-pop'


                //button of login
                this.loginButtonHolder = document.createElement('div')
                this.loginButtonHolder.classList.add('mt-20')
                this.loginButton = document.createElement('button')
                this.loginButton.classList.add('color-black', 'btn', 'btn-success', 'br-20')
                this.loginButton.textContent = 'Login'

                //register
                this.registerDv = document.createElement('div')
                this.registerDv.classList.add('position-abs', 'l0-b0')
                this.registerlink = document.createElement('a')
                this.registerlink.textContent = 'GO regisetros'


                this.closeLoginPop = document.createElement('div')
                this.closeLoginPop.classList.add('position-abs', 'r0-t-0', 'color-red', 'cutsor-pointer', 'p-5', 'font-size-18')
                this.closeLoginPop.textContent = 'X'
                this.closeLoginPop.addEventListener('click', (() => {
                    this.rootShow.remove()

                }))

                //is Log ?

                this.registerDv.append(this.registerlink)
                this.loginButtonHolder.append(this.loginButton)
                this.HOLDER.append(this.formLogin)
                this.passwordHolder.append(this.PassInput)
                this.loginHolder.append(this.loginInput)
                this.loginPopUp.append(this.lgs, this.HOLDER, this.registerDv, this.closeLoginPop)
                this.formLogin.append(this.loginHolder, this.passwordHolder, this.loginButtonHolder)
                this.rootShow.append(this.loginPopUp)
                this.logShower.append(this.rootShow)
            }))

            this.text = document.createElement('div')
            this.text.textContent = 'X'
            this.text.classList.add('color-blur-vwhite', 'p-5', 'm-15', 'cutsor-pointer')

            this.register = document.createElement('div')
            this.register.textContent = 'register'
            this.register.classList.add('LoginRegisterdiv', 'p-5', 'pl-10', 'pr-10', 'm-15', 'font-size-18')

            this.LoginLink = document.createElement('a')
            this.registerLink = document.createElement('a')

            this.registerLink.href = 'register'

            this.root.append(this.LoginLink, this.text, this.registerLink)
            this.registerLink.append(this.register)
            this.LoginLink.append(this.login)
            this.logReg.append(this.root)


            this.text.addEventListener('click', this.hideLoginMenu.bind(this), true)

        }


    }

    hideLoginMenu() {
        this.root.remove()
        isShowed = false;
    }

}
let sh = false

//DZIAŁA XD
let DogElements = document.getElementById('dogElementNavbar')
let KittyElements = document.getElementById('KittyElementNavbar')
let MammalsElemens = document.getElementById('MammalsElementNavbar')
let birdElements = document.getElementById('BirdElementNavbar')
let AmphibansElement = document.getElementById('AmphibansElementNavbar')
let reptilesElement = document.getElementById('ReptilesElementNavbar')
let fishElement = document.getElementById('FishElementNavbar')


fishElement.addEventListener('click', (() => {
    if (sh === false) {
        sh = true;
        const gogElemHolder = new PopNavbarElements(DogPopupHolder, event);
    }

}))


reptilesElement.addEventListener('click', (() => {
    if (sh === false) {
        sh = true;
        const gogElemHolder = new PopNavbarElements(DogPopupHolder, event);
    }

}))

AmphibansElement.addEventListener('click', (() => {
    if (sh === false) {
        sh = true;
        const gogElemHolder = new PopNavbarElements(DogPopupHolder, event);
    }
}))

birdElements.addEventListener('click', (() => {
    if (sh === false) {
        sh = true;
        const gogElemHolder = new PopNavbarElements(DogPopupHolder, event);
    }
}))

MammalsElemens.addEventListener('click', (() => {

    if (sh === false) {
        sh = true;
        const gogElemHolder = new PopNavbarElements(DogPopupHolder, event);
    }
}))

KittyElements.addEventListener('click', (() => {
    if (sh === false) {
        sh = true;
        const gogElemHolder = new PopNavbarElements(DogPopupHolder, event);
    }
}))

DogElements.addEventListener('click', ((event) => {
    if (sh === false) {
        sh = true;
        const gogElemHolder = new PopNavbarElements(DogPopupHolder, event);
    }
}))



class PopNavbarElements {

    constructor(DogPopupHolder, event) {
        if (event.target.id === 'dogElementNavbar') {
            this.createDogPopupElement();
        } else if (event.target.id === 'KittyElementNavbar') {
            this.createKittyPopupElement();
        } else if (event.target.id === 'MammalsElementNavbar') {
            this.createMammalsEPopupElement();
        } else if (event.target.id === 'BirdElementNavbar') {
            this.createBirdsPopupElement();
        } else if (event.target.id === 'AmphibansElementNavbar') {
            this.createAmphibanPopupElement();
        } else if (event.target.id === 'ReptilesElementNavbar') {
            this.createReptilesPopupElement();
        } else if (event.target.id === 'FishElementNavbar') {
            this.createFishPopupElement();
        }

    }

    createFishPopupElement() {

        let fishPopupHolder = document.getElementById('fishPopupHolder')
        this.fishPopupHolder = fishPopupHolder

        this.root = document.createElement('div')
        this.root.classList.add('bg-color-vsoftwhite', 'position-abs', 'shadow', 'mt-30')

        //=============//


        this.fishFoodHolder = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-25', 'color-black')
        this.nameofGoods.textContent = 'fish food and treats'

        this.fishFoodElementHolder = document.createElement('div')
        this.fishFoodUL = document.createElement('ul')

        this.fishFoodUL.classList.add('list-style-none', 'font-size-13')

        this.fishFLink = document.createElement('a')
        //this.fishFLink.href =
        this.fishLiF = document.createElement('li')
        this.fishLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.fishLiF.textContent = 'fish treats'

        this.fishSLink = document.createElement('a')
        //this.fishSLink.href =
        this.fishLiS = document.createElement('li')
        this.fishLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.fishLiS.textContent = 'fish food'

        this.fishTLink = document.createElement('a')
        //this.fishTLink.href =
        this.fishLiT = document.createElement('li')
        this.fishLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.fishLiT.textContent = 'leash'

        this.fishFoodHolder.append(this.nameofGoods, this.fishFoodElementHolder)
        this.fishFoodElementHolder.append(this.fishFoodUL)
        this.fishFoodUL.append(this.fishFLink, this.fishSLink, this.fishTLink)
        this.fishFLink.append(this.fishLiF)
        this.fishSLink.append(this.fishLiS)
        this.fishTLink.append(this.fishLiT)

        //----------------//

        //===============//
        this.fishsbed = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'toys for the fish'

        this.fishFoodElementHolder = document.createElement('div')
        this.fishFoodUL = document.createElement('ul')

        this.fishFoodUL.classList.add('list-style-none', 'font-size-13')

        this.fishFLink = document.createElement('a')
        //this.fishFLink.href =
        this.fishLiF = document.createElement('li')
        this.fishLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.fishLiF.textContent = 'fish games'

        this.fishSLink = document.createElement('a')
        //this.fishSLink.href =
        this.fishLiS = document.createElement('li')
        this.fishLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.fishLiS.textContent = 'fish chews'

        this.fishTLink = document.createElement('a')
        //this.fishTLink.href =
        this.fishLiT = document.createElement('li')
        this.fishLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.fishLiT.textContent = 'fish toys'

        this.fishFoodHolder.append(this.nameofGoods, this.fishFoodElementHolder)
        this.fishFoodElementHolder.append(this.fishFoodUL)
        this.fishFoodUL.append(this.fishFLink, this.fishSLink, this.fishTLink)
        this.fishFLink.append(this.fishLiF)
        this.fishSLink.append(this.fishLiS)
        this.fishTLink.append(this.fishLiT)

        //---------------//

        //==============//
        this.toyForfish = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'fish health'

        this.fishFoodElementHolder = document.createElement('div')
        this.fishFoodUL = document.createElement('ul')


        this.fishFoodUL.classList.add('list-style-none', 'font-size-13')

        this.fishFLink = document.createElement('a')
        //this.fishFLink.href =
        this.fishLiF = document.createElement('li')
        this.fishLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.fishLiF.textContent = 'vitamins for the fish'

        this.fishSLink = document.createElement('a')
        //this.fishSLink.href =
        this.fishLiS = document.createElement('li')
        this.fishLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.fishLiS.textContent = 'combs'


        this.fishFoodHolder.append(this.nameofGoods, this.fishFoodElementHolder)
        this.fishFoodElementHolder.append(this.fishFoodUL)
        this.fishFoodUL.append(this.fishFLink, this.fishSLink)
        this.fishFLink.append(this.fishLiF)
        this.fishSLink.append(this.fishLiS)


        //---------------//

        //================//

        //zrobic Ikonke zamykania
        //<svg height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>

        this.root.append(this.fishFoodHolder)
        this.fishPopupHolder.append(this.root)

        this.closefishElementNavbar = document.createElement('div')
        this.closefishElementNavbar.textContent = "X"
        this.closefishElementNavbar.classList.add('position-abs', 't-0-r-0', 'p-5', 'color-red', 'cutsor-pointer')

        this.closefishElementNavbar.addEventListener('click', (() => {
            this.root.remove();
            sh = false;
        }))

        this.fishFoodHolder.append(this.closefishElementNavbar)

        //---------------//




    }



    createReptilesPopupElement() {

        let reptilesPopupHolder = document.getElementById('ReptilesPopupHolder')
        this.reptilesPopupHolder = reptilesPopupHolder

        this.root = document.createElement('div')
        this.root.classList.add('bg-color-vsoftwhite', 'position-abs', 'shadow', 'mt-30')

        //=============//


        this.reptilesFoodHolder = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-25', 'color-black')
        this.nameofGoods.textContent = 'reptiles food and treats'

        this.reptilesFoodElementHolder = document.createElement('div')
        this.reptilesFoodUL = document.createElement('ul')

        this.reptilesFoodUL.classList.add('list-style-none', 'font-size-13')

        this.reptilesFLink = document.createElement('a')
        //this.reptilesFLink.href =
        this.reptilesLiF = document.createElement('li')
        this.reptilesLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.reptilesLiF.textContent = 'reptiles treats'

        this.reptilesSLink = document.createElement('a')
        //this.reptilesSLink.href =
        this.reptilesLiS = document.createElement('li')
        this.reptilesLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.reptilesLiS.textContent = 'reptiles food'

        this.reptilesTLink = document.createElement('a')
        //this.reptilesTLink.href =
        this.reptilesLiT = document.createElement('li')
        this.reptilesLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.reptilesLiT.textContent = 'leash'

        this.reptilesFoodHolder.append(this.nameofGoods, this.reptilesFoodElementHolder)
        this.reptilesFoodElementHolder.append(this.reptilesFoodUL)
        this.reptilesFoodUL.append(this.reptilesFLink, this.reptilesSLink, this.reptilesTLink)
        this.reptilesFLink.append(this.reptilesLiF)
        this.reptilesSLink.append(this.reptilesLiS)
        this.reptilesTLink.append(this.reptilesLiT)

        //----------------//

        //===============//
        this.reptilessbed = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'toys for the reptiles'

        this.reptilesFoodElementHolder = document.createElement('div')
        this.reptilesFoodUL = document.createElement('ul')

        this.reptilesFoodUL.classList.add('list-style-none', 'font-size-13')

        this.reptilesFLink = document.createElement('a')
        //this.reptilesFLink.href =
        this.reptilesLiF = document.createElement('li')
        this.reptilesLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.reptilesLiF.textContent = 'reptiles games'

        this.reptilesSLink = document.createElement('a')
        //this.reptilesSLink.href =
        this.reptilesLiS = document.createElement('li')
        this.reptilesLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.reptilesLiS.textContent = 'reptiles chews'

        this.reptilesTLink = document.createElement('a')
        //this.reptilesTLink.href =
        this.reptilesLiT = document.createElement('li')
        this.reptilesLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.reptilesLiT.textContent = 'reptiles toys'

        this.reptilesFoodHolder.append(this.nameofGoods, this.reptilesFoodElementHolder)
        this.reptilesFoodElementHolder.append(this.reptilesFoodUL)
        this.reptilesFoodUL.append(this.reptilesFLink, this.reptilesSLink, this.reptilesTLink)
        this.reptilesFLink.append(this.reptilesLiF)
        this.reptilesSLink.append(this.reptilesLiS)
        this.reptilesTLink.append(this.reptilesLiT)

        //---------------//

        //==============//
        this.toyForreptiles = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'reptiles health'

        this.reptilesFoodElementHolder = document.createElement('div')
        this.reptilesFoodUL = document.createElement('ul')


        this.reptilesFoodUL.classList.add('list-style-none', 'font-size-13')

        this.reptilesFLink = document.createElement('a')
        //this.reptilesFLink.href =
        this.reptilesLiF = document.createElement('li')
        this.reptilesLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.reptilesLiF.textContent = 'vitamins for the reptiles'

        this.reptilesSLink = document.createElement('a')
        //this.reptilesSLink.href =
        this.reptilesLiS = document.createElement('li')
        this.reptilesLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.reptilesLiS.textContent = 'combs'


        this.reptilesFoodHolder.append(this.nameofGoods, this.reptilesFoodElementHolder)
        this.reptilesFoodElementHolder.append(this.reptilesFoodUL)
        this.reptilesFoodUL.append(this.reptilesFLink, this.reptilesSLink)
        this.reptilesFLink.append(this.reptilesLiF)
        this.reptilesSLink.append(this.reptilesLiS)


        //---------------//

        //================//

        //zrobic Ikonke zamykania
        //<svg height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>

        this.root.append(this.reptilesFoodHolder)
        this.reptilesPopupHolder.append(this.root)

        this.closereptilesElementNavbar = document.createElement('div')
        this.closereptilesElementNavbar.textContent = "X"
        this.closereptilesElementNavbar.classList.add('position-abs', 't-0-r-0', 'p-5', 'color-red', 'cutsor-pointer')

        this.closereptilesElementNavbar.addEventListener('click', (() => {
            this.root.remove();
            sh = false;
        }))

        this.reptilesFoodHolder.append(this.closereptilesElementNavbar)

        //---------------//


    }


    createDogPopupElement() {

        let DogPopupHolder = document.getElementById('DogPopupHolder')
        this.DogPopupHolder = DogPopupHolder

        this.root = document.createElement('div')
        this.root.classList.add('bg-color-vsoftwhite', 'position-abs', 'shadow', 'mt-30')

        //=============//


        this.dogFoodHolder = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-25', 'color-black')
        this.nameofGoods.textContent = 'dog food and treats'

        this.dogFoodElementHolder = document.createElement('div')
        this.dogFoodUL = document.createElement('ul')

        this.dogFoodUL.classList.add('list-style-none', 'font-size-13')

        this.dogFLink = document.createElement('a')
        //this.dogFLink.href =
        this.dogLiF = document.createElement('li')
        this.dogLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.dogLiF.textContent = 'dog treats'

        this.dogSLink = document.createElement('a')
        //this.dogSLink.href =
        this.dogLiS = document.createElement('li')
        this.dogLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.dogLiS.textContent = 'Dog food'

        this.dogTLink = document.createElement('a')
        //this.dogTLink.href =
        this.dogLiT = document.createElement('li')
        this.dogLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.dogLiT.textContent = 'leash'

        this.dogFoodHolder.append(this.nameofGoods, this.dogFoodElementHolder)
        this.dogFoodElementHolder.append(this.dogFoodUL)
        this.dogFoodUL.append(this.dogFLink, this.dogSLink, this.dogTLink)
        this.dogFLink.append(this.dogLiF)
        this.dogSLink.append(this.dogLiS)
        this.dogTLink.append(this.dogLiT)

        //----------------//

        //===============//
        this.dogsbed = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'toys for the dog'

        this.dogFoodElementHolder = document.createElement('div')
        this.dogFoodUL = document.createElement('ul')

        this.dogFoodUL.classList.add('list-style-none', 'font-size-13')

        this.dogFLink = document.createElement('a')
        //this.dogFLink.href =
        this.dogLiF = document.createElement('li')
        this.dogLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.dogLiF.textContent = 'dog games'

        this.dogSLink = document.createElement('a')
        //this.dogSLink.href =
        this.dogLiS = document.createElement('li')
        this.dogLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.dogLiS.textContent = 'dog chews'

        this.dogTLink = document.createElement('a')
        //this.dogTLink.href =
        this.dogLiT = document.createElement('li')
        this.dogLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.dogLiT.textContent = 'dog toys'

        this.dogFoodHolder.append(this.nameofGoods, this.dogFoodElementHolder)
        this.dogFoodElementHolder.append(this.dogFoodUL)
        this.dogFoodUL.append(this.dogFLink, this.dogSLink, this.dogTLink)
        this.dogFLink.append(this.dogLiF)
        this.dogSLink.append(this.dogLiS)
        this.dogTLink.append(this.dogLiT)

        //---------------//

        //==============//
        this.toyForDog = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'dog health'

        this.dogFoodElementHolder = document.createElement('div')
        this.dogFoodUL = document.createElement('ul')

        this.dogFoodUL.classList.add('list-style-none', 'font-size-13')

        this.dogFLink = document.createElement('a')
        //this.dogFLink.href =
        this.dogLiF = document.createElement('li')
        this.dogLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.dogLiF.textContent = 'vitamins for the dog'

        this.dogSLink = document.createElement('a')
        //this.dogSLink.href =
        this.dogLiS = document.createElement('li')
        this.dogLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.dogLiS.textContent = 'combs'


        this.dogFoodHolder.append(this.nameofGoods, this.dogFoodElementHolder)
        this.dogFoodElementHolder.append(this.dogFoodUL)
        this.dogFoodUL.append(this.dogFLink, this.dogSLink)
        this.dogFLink.append(this.dogLiF)
        this.dogSLink.append(this.dogLiS)


        //---------------//

        //================//

        //zrobic Ikonke zamykania
        //<svg height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>

        this.root.append(this.dogFoodHolder)
        this.DogPopupHolder.append(this.root)

        this.closeDogElementNavbar = document.createElement('div')
        this.closeDogElementNavbar.textContent = "X"
        this.closeDogElementNavbar.classList.add('position-abs', 't-0-r-0', 'p-5', 'color-red', 'cutsor-pointer')

        this.closeDogElementNavbar.addEventListener('click', (() => {
            this.root.remove();
            sh = false;
        }))

        this.dogFoodHolder.append(this.closeDogElementNavbar)

        //---------------//

    }

    //----------========================================//
    //kitty elementts
    createKittyPopupElement() {
        let kittyPopupHolder = document.getElementById('KittyPopupHolder')
        this.kittyPopupHolder = kittyPopupHolder

        this.root = document.createElement('div')
        this.root.classList.add('bg-color-vsoftwhite', 'position-abs', 'shadow', 'mt-30')

        //=============//

        this.kittyFoodHolder = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-25', 'color-black')
        this.nameofGoods.textContent = 'kitty food and treats'

        this.kittyFoodElementHolder = document.createElement('div')
        this.kittyFoodUL = document.createElement('ul')

        this.kittyFoodUL.classList.add('list-style-none', 'font-size-13')

        this.kittyFLink = document.createElement('a')
        //this.kittyFLink.href =
        this.kittyLiF = document.createElement('li')
        this.kittyLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.kittyLiF.textContent = 'kitty treats'

        this.kittySLink = document.createElement('a')
        //this.kittySLink.href =
        this.kittyLiS = document.createElement('li')
        this.kittyLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.kittyLiS.textContent = 'kitty food'

        this.kittyTLink = document.createElement('a')
        //this.kittyTLink.href =
        this.kittyLiT = document.createElement('li')
        this.kittyLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.kittyLiT.textContent = 'leash'

        this.kittyFoodHolder.append(this.nameofGoods, this.kittyFoodElementHolder)
        this.kittyFoodElementHolder.append(this.kittyFoodUL)
        this.kittyFoodUL.append(this.kittyFLink, this.kittySLink, this.kittyTLink)
        this.kittyFLink.append(this.kittyLiF)
        this.kittySLink.append(this.kittyLiS)
        this.kittyTLink.append(this.kittyLiT)

        //----------------//

        //===============//
        this.kittysbed = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'toys for the kitty'

        this.kittyFoodElementHolder = document.createElement('div')
        this.kittyFoodUL = document.createElement('ul')

        this.kittyFoodUL.classList.add('list-style-none', 'font-size-13')

        this.kittyFLink = document.createElement('a')
        //this.kittyFLink.href =
        this.kittyLiF = document.createElement('li')
        this.kittyLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.kittyLiF.textContent = 'kitty games'

        this.kittySLink = document.createElement('a')
        //this.kittySLink.href =
        this.kittyLiS = document.createElement('li')
        this.kittyLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.kittyLiS.textContent = 'kitty chews'

        this.kittyTLink = document.createElement('a')
        //this.kittyTLink.href =
        this.kittyLiT = document.createElement('li')
        this.kittyLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.kittyLiT.textContent = 'kitty toys'

        this.kittyFoodHolder.append(this.nameofGoods, this.kittyFoodElementHolder)
        this.kittyFoodElementHolder.append(this.kittyFoodUL)
        this.kittyFoodUL.append(this.kittyFLink, this.kittySLink, this.kittyTLink)
        this.kittyFLink.append(this.kittyLiF)
        this.kittySLink.append(this.kittyLiS)
        this.kittyTLink.append(this.kittyLiT)

        //---------------//

        //==============//
        this.toyForkitty = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'kitty health'

        this.kittyFoodElementHolder = document.createElement('div')
        this.kittyFoodUL = document.createElement('ul')


        this.kittyFoodUL.classList.add('list-style-none', 'font-size-13')

        this.kittyFLink = document.createElement('a')
        //this.kittyFLink.href =
        this.kittyLiF = document.createElement('li')
        this.kittyLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.kittyLiF.textContent = 'vitamins for the kitty'

        this.kittySLink = document.createElement('a')
        //this.kittySLink.href =
        this.kittyLiS = document.createElement('li')
        this.kittyLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.kittyLiS.textContent = 'combs'


        this.kittyFoodHolder.append(this.nameofGoods, this.kittyFoodElementHolder)
        this.kittyFoodElementHolder.append(this.kittyFoodUL)
        this.kittyFoodUL.append(this.kittyFLink, this.kittySLink)
        this.kittyFLink.append(this.kittyLiF)
        this.kittySLink.append(this.kittyLiS)


        //---------------//

        //================//

        //zrobic Ikonke zamykania
        //<svg height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>

        this.root.append(this.kittyFoodHolder)
        this.kittyPopupHolder.append(this.root)

        this.closekittyElementNavbar = document.createElement('div')
        this.closekittyElementNavbar.textContent = "X"
        this.closekittyElementNavbar.classList.add('position-abs', 't-0-r-0', 'p-5', 'color-red', 'cutsor-pointer')

        this.closekittyElementNavbar.addEventListener('click', (() => {
            this.root.remove();
            sh = false;
        }))

        this.kittyFoodHolder.append(this.closekittyElementNavbar)

        //---------------//


    }


    createMammalsEPopupElement() {

        let MammalsPopupHolder = document.getElementById('MammlsPopupHolder')
        this.MammalsPopupHolder = MammalsPopupHolder

        this.root = document.createElement('div')
        this.root.classList.add('bg-color-vsoftwhite', 'position-abs', 'shadow', 'mt-30')

        //=============//

        this.MammalsFoodHolder = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-25', 'color-black')
        this.nameofGoods.textContent = 'Mammals food and treats'

        this.MammalsFoodElementHolder = document.createElement('div')
        this.MammalsFoodUL = document.createElement('ul')

        this.MammalsFoodUL.classList.add('list-style-none', 'font-size-13')

        this.MammalsFLink = document.createElement('a')
        //this.MammalsFLink.href =
        this.MammalsLiF = document.createElement('li')
        this.MammalsLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.MammalsLiF.textContent = 'Mammals treats'

        this.MammalsSLink = document.createElement('a')
        //this.MammalsSLink.href =
        this.MammalsLiS = document.createElement('li')
        this.MammalsLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.MammalsLiS.textContent = 'Mammals food'

        this.MammalsTLink = document.createElement('a')
        //this.MammalsTLink.href =
        this.MammalsLiT = document.createElement('li')
        this.MammalsLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.MammalsLiT.textContent = 'leash'

        this.MammalsFoodHolder.append(this.nameofGoods, this.MammalsFoodElementHolder)
        this.MammalsFoodElementHolder.append(this.MammalsFoodUL)
        this.MammalsFoodUL.append(this.MammalsFLink, this.MammalsSLink, this.MammalsTLink)
        this.MammalsFLink.append(this.MammalsLiF)
        this.MammalsSLink.append(this.MammalsLiS)
        this.MammalsTLink.append(this.MammalsLiT)

        //----------------//

        //===============//
        this.Mammalssbed = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'toys for the Mammals'

        this.MammalsFoodElementHolder = document.createElement('div')
        this.MammalsFoodUL = document.createElement('ul')

        this.MammalsFoodUL.classList.add('list-style-none', 'font-size-13')

        this.MammalsFLink = document.createElement('a')
        //this.MammalsFLink.href =
        this.MammalsLiF = document.createElement('li')
        this.MammalsLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.MammalsLiF.textContent = 'Mammals games'

        this.MammalsSLink = document.createElement('a')
        //this.MammalsSLink.href =
        this.MammalsLiS = document.createElement('li')
        this.MammalsLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.MammalsLiS.textContent = 'Mammals chews'

        this.MammalsTLink = document.createElement('a')
        //this.MammalsTLink.href =
        this.MammalsLiT = document.createElement('li')
        this.MammalsLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.MammalsLiT.textContent = 'Mammals toys'

        this.MammalsFoodHolder.append(this.nameofGoods, this.MammalsFoodElementHolder)
        this.MammalsFoodElementHolder.append(this.MammalsFoodUL)
        this.MammalsFoodUL.append(this.MammalsFLink, this.MammalsSLink, this.MammalsTLink)
        this.MammalsFLink.append(this.MammalsLiF)
        this.MammalsSLink.append(this.MammalsLiS)
        this.MammalsTLink.append(this.MammalsLiT)

        //---------------//

        //==============//
        this.toyForMammals = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'Mammals health'

        this.MammalsFoodElementHolder = document.createElement('div')
        this.MammalsFoodUL = document.createElement('ul')


        this.MammalsFoodUL.classList.add('list-style-none', 'font-size-13')

        this.MammalsFLink = document.createElement('a')
        //this.MammalsFLink.href =
        this.MammalsLiF = document.createElement('li')
        this.MammalsLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.MammalsLiF.textContent = 'vitamins for the Mammals'

        this.MammalsSLink = document.createElement('a')
        //this.MammalsSLink.href =
        this.MammalsLiS = document.createElement('li')
        this.MammalsLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.MammalsLiS.textContent = 'combs'

        this.MammalsFoodHolder.append(this.nameofGoods, this.MammalsFoodElementHolder)
        this.MammalsFoodElementHolder.append(this.MammalsFoodUL)
        this.MammalsFoodUL.append(this.MammalsFLink, this.MammalsSLink)
        this.MammalsFLink.append(this.MammalsLiF)
        this.MammalsSLink.append(this.MammalsLiS)


        //---------------//

        //================//

        //zrobic Ikonke zamykania
        //<svg height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>

        this.root.append(this.MammalsFoodHolder)
        this.MammalsPopupHolder.append(this.root)

        this.closeMammalsElementNavbar = document.createElement('div')
        this.closeMammalsElementNavbar.textContent = "X"
        this.closeMammalsElementNavbar.classList.add('position-abs', 't-0-r-0', 'p-5', 'color-red', 'cutsor-pointer')

        this.closeMammalsElementNavbar.addEventListener('click', (() => {
            this.root.remove();
            sh = false;
        }))

        this.MammalsFoodHolder.append(this.closeMammalsElementNavbar)

        //---------------//

    }

    createBirdsPopupElement() {

        let birdPopupHolder = document.getElementById('BirdPopupHolder')
        this.birdPopupHolder = birdPopupHolder

        this.root = document.createElement('div')
        this.root.classList.add('bg-color-vsoftwhite', 'position-abs', 'shadow', 'mt-30')

        //=============//

        this.birdFoodHolder = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-25', 'color-black')
        this.nameofGoods.textContent = 'bird food and treats'

        this.birdFoodElementHolder = document.createElement('div')
        this.birdFoodUL = document.createElement('ul')

        this.birdFoodUL.classList.add('list-style-none', 'font-size-13')

        this.birdFLink = document.createElement('a')
        //this.birdFLink.href =
        this.birdLiF = document.createElement('li')
        this.birdLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.birdLiF.textContent = 'bird treats'

        this.birdSLink = document.createElement('a')
        //this.birdSLink.href =
        this.birdLiS = document.createElement('li')
        this.birdLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.birdLiS.textContent = 'bird food'

        this.birdTLink = document.createElement('a')
        //this.birdTLink.href =
        this.birdLiT = document.createElement('li')
        this.birdLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.birdLiT.textContent = 'leash'

        this.birdFoodHolder.append(this.nameofGoods, this.birdFoodElementHolder)
        this.birdFoodElementHolder.append(this.birdFoodUL)
        this.birdFoodUL.append(this.birdFLink, this.birdSLink, this.birdTLink)
        this.birdFLink.append(this.birdLiF)
        this.birdSLink.append(this.birdLiS)
        this.birdTLink.append(this.birdLiT)

        //----------------//

        //===============//
        this.birdsbed = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'toys for the bird'

        this.birdFoodElementHolder = document.createElement('div')
        this.birdFoodUL = document.createElement('ul')

        this.birdFoodUL.classList.add('list-style-none', 'font-size-13')

        this.birdFLink = document.createElement('a')
        //this.birdFLink.href =
        this.birdLiF = document.createElement('li')
        this.birdLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.birdLiF.textContent = 'bird games'

        this.birdSLink = document.createElement('a')
        //this.birdSLink.href =
        this.birdLiS = document.createElement('li')
        this.birdLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.birdLiS.textContent = 'bird chews'

        this.birdTLink = document.createElement('a')
        //this.birdTLink.href =
        this.birdLiT = document.createElement('li')
        this.birdLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.birdLiT.textContent = 'bird toys'

        this.birdFoodHolder.append(this.nameofGoods, this.birdFoodElementHolder)
        this.birdFoodElementHolder.append(this.birdFoodUL)
        this.birdFoodUL.append(this.birdFLink, this.birdSLink, this.birdTLink)
        this.birdFLink.append(this.birdLiF)
        this.birdSLink.append(this.birdLiS)
        this.birdTLink.append(this.birdLiT)

        //---------------//

        //==============//
        this.toyForbird = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'bird health'

        this.birdFoodElementHolder = document.createElement('div')
        this.birdFoodUL = document.createElement('ul')


        this.birdFoodUL.classList.add('list-style-none', 'font-size-13')

        this.birdFLink = document.createElement('a')
        //this.birdFLink.href =
        this.birdLiF = document.createElement('li')
        this.birdLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.birdLiF.textContent = 'vitamins for the bird'

        this.birdSLink = document.createElement('a')
        //this.birdSLink.href =
        this.birdLiS = document.createElement('li')
        this.birdLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.birdLiS.textContent = 'combs'


        this.birdFoodHolder.append(this.nameofGoods, this.birdFoodElementHolder)
        this.birdFoodElementHolder.append(this.birdFoodUL)
        this.birdFoodUL.append(this.birdFLink, this.birdSLink)
        this.birdFLink.append(this.birdLiF)
        this.birdSLink.append(this.birdLiS)


        //---------------//

        //================//

        //zrobic Ikonke zamykania
        //<svg height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>

        this.root.append(this.birdFoodHolder)
        this.birdPopupHolder.append(this.root)

        this.closebirdElementNavbar = document.createElement('div')
        this.closebirdElementNavbar.textContent = "X"
        this.closebirdElementNavbar.classList.add('position-abs', 't-0-r-0', 'p-5', 'color-red', 'cutsor-pointer')

        this.closebirdElementNavbar.addEventListener('click', (() => {
            this.root.remove();
            sh = false;
        }))

        this.birdFoodHolder.append(this.closebirdElementNavbar)
    }

    createAmphibanPopupElement() {

        let amphPopupHolder = document.getElementById('AmphibiansPopupHolder')
        this.amphPopupHolder = amphPopupHolder

        this.root = document.createElement('div')
        this.root.classList.add('bg-color-vsoftwhite', 'position-abs', 'shadow', 'mt-30')

        //=============//


        this.amphFoodHolder = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-25', 'color-black')
        this.nameofGoods.textContent = 'amph food and treats'

        this.amphFoodElementHolder = document.createElement('div')
        this.amphFoodUL = document.createElement('ul')

        this.amphFoodUL.classList.add('list-style-none', 'font-size-13')

        this.amphFLink = document.createElement('a')
        //this.amphFLink.href =
        this.amphLiF = document.createElement('li')
        this.amphLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.amphLiF.textContent = 'amph treats'

        this.amphSLink = document.createElement('a')
        //this.amphSLink.href =
        this.amphLiS = document.createElement('li')
        this.amphLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.amphLiS.textContent = 'amph food'

        this.amphTLink = document.createElement('a')
        //this.amphTLink.href =
        this.amphLiT = document.createElement('li')
        this.amphLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.amphLiT.textContent = 'leash'

        this.amphFoodHolder.append(this.nameofGoods, this.amphFoodElementHolder)
        this.amphFoodElementHolder.append(this.amphFoodUL)
        this.amphFoodUL.append(this.amphFLink, this.amphSLink, this.amphTLink)
        this.amphFLink.append(this.amphLiF)
        this.amphSLink.append(this.amphLiS)
        this.amphTLink.append(this.amphLiT)

        //----------------//

        //===============//
        this.amphsbed = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'toys for the amph'

        this.amphFoodElementHolder = document.createElement('div')
        this.amphFoodUL = document.createElement('ul')

        this.amphFoodUL.classList.add('list-style-none', 'font-size-13')

        this.amphFLink = document.createElement('a')
        //this.amphFLink.href =
        this.amphLiF = document.createElement('li')
        this.amphLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.amphLiF.textContent = 'amph games'

        this.amphSLink = document.createElement('a')
        //this.amphSLink.href =
        this.amphLiS = document.createElement('li')
        this.amphLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.amphLiS.textContent = 'amph chews'

        this.amphTLink = document.createElement('a')
        //this.amphTLink.href =
        this.amphLiT = document.createElement('li')
        this.amphLiT.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.amphLiT.textContent = 'amph toys'

        this.amphFoodHolder.append(this.nameofGoods, this.amphFoodElementHolder)
        this.amphFoodElementHolder.append(this.amphFoodUL)
        this.amphFoodUL.append(this.amphFLink, this.amphSLink, this.amphTLink)
        this.amphFLink.append(this.amphLiF)
        this.amphSLink.append(this.amphLiS)
        this.amphTLink.append(this.amphLiT)

        //---------------//

        //==============//
        this.toyForamph = document.createElement('div')

        this.nameofGoods = document.createElement('div')
        this.nameofGoods.classList.add('pr-20', 'pl-20', 'pt-20', 'color-black')
        this.nameofGoods.textContent = 'amph health'

        this.amphFoodElementHolder = document.createElement('div')
        this.amphFoodUL = document.createElement('ul')


        this.amphFoodUL.classList.add('list-style-none', 'font-size-13')

        this.amphFLink = document.createElement('a')
        //this.amphFLink.href =
        this.amphLiF = document.createElement('li')
        this.amphLiF.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.amphLiF.textContent = 'vitamins for the amph'

        this.amphSLink = document.createElement('a')
        //this.amphSLink.href =
        this.amphLiS = document.createElement('li')
        this.amphLiS.classList.add('text-dec-none', 'color-black', 'cutsor-pointer')
        this.amphLiS.textContent = 'combs'


        this.amphFoodHolder.append(this.nameofGoods, this.amphFoodElementHolder)
        this.amphFoodElementHolder.append(this.amphFoodUL)
        this.amphFoodUL.append(this.amphFLink, this.amphSLink)
        this.amphFLink.append(this.amphLiF)
        this.amphSLink.append(this.amphLiS)


        //---------------//

        //================//

        //zrobic Ikonke zamykania
        //<svg height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>

        this.root.append(this.amphFoodHolder)
        this.amphPopupHolder.append(this.root)

        this.closeamphElementNavbar = document.createElement('div')
        this.closeamphElementNavbar.textContent = "X"
        this.closeamphElementNavbar.classList.add('position-abs', 't-0-r-0', 'p-5', 'color-red', 'cutsor-pointer')

        this.closeamphElementNavbar.addEventListener('click', (() => {
            this.root.remove();
            sh = false;
        }))

        this.amphFoodHolder.append(this.closeamphElementNavbar)

    }

}






