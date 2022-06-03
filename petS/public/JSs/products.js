
// DO FAKTORYZACJI BARDZO ZŁY KOD 
let descProd = document.getElementById('descProd')
let featuresProd = document.getElementById('featuresProd')
let opinionsProd = document.getElementById('opinionsProd')
let opsHolder = document.getElementById('OpcHolder')
let featureHolder = document.getElementById('featureHolder')
let opinionsHolder = document.getElementById('opinionsHolder')


let isShowProducDesc = true;
let isShowProducopi = false;
let isShowProducfeat = false;


descProd.addEventListener('click', (() => {
    if (isShowProducopi === true) {
        opinionsProd.classList.remove('border-tlr-1')
        opinionsProd.classList.add('b-outb')
        isShowProducopi = false;
        opinionsHolder.classList.add('display-none')

    }
    if (isShowProducfeat === true) {
        featuresProd.classList.remove('border-tlr-1')
        featuresProd.classList.add('b-outb')
        isShowProduc = false;
        featureHolder.classList.add('display-none')
    }
    opsHolder.classList.remove('display-none')
    descProd.classList.remove('b-outb')
    descProd.classList.add('border-tlr-1')
    isShowProducDesc = true;



    //{{$priceData -> Opis}}
    // let root = document.createElement('div')
    // root.classList.add('b-outb', 'text-wrap', 'w-600')

    // let desc = document.createElement('div')
    // desc.classList.add('font-size-16', 'p-10')

    // desc.append(phps)
    // root.append(desc)
    // opsHolder.append(root)

}))

featuresProd.addEventListener('click', (() => {
    if (isShowProducDesc === true) {
        descProd.classList.remove('border-tlr-1')
        descProd.classList.add('b-outb')
        isShowProducDesc = false;
        opsHolder.classList.add('display-none')
    }
    if (isShowProducopi === true) {
        opinionsProd.classList.remove('border-tlr-1')
        opinionsProd.classList.add('b-outb')
        isShowProducopi = false;
        opinionsHolder.classList.add('display-none')
    }

    featuresProd.classList.remove('b-outb')
    featuresProd.classList.add('border-tlr-1')
    isShowProducfeat = true;
    featureHolder.classList.remove('display-none')

}))

opinionsProd.addEventListener('click', (() => {
    if (isShowProducDesc === true) {
        descProd.classList.remove('border-tlr-1')
        descProd.classList.add('b-outb')
        isShowProducDesc = false;
        opsHolder.classList.add('display-none')
    }
    if (isShowProducfeat === true) {
        featuresProd.classList.remove('border-tlr-1')
        featuresProd.classList.add('b-outb')
        isShowProduc = false;
        featureHolder.classList.add('display-none')
    }
    opinionsProd.classList.remove('b-outb')
    opinionsProd.classList.add('border-tlr-1')
    isShowProducopi = true;
    opinionsHolder.classList.remove('display-none')

}))




//IMAGINER CHANGER :>>> ------------------------------------------------- RIP

let img_1 = document.getElementById('1')
let img_2 = document.getElementById('2')

img_2.addEventListener('click', (() => {
    img_1.src = img_2.src

    
}))


