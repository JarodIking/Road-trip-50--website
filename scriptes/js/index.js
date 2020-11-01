window.addEventListener('load', () => {
    const title = document.getElementById('openingFotoTitle');
    const navButs = document.getElementById('navButtons');
    const reg = document.querySelector('#registerButton');
    const vision = document.querySelector('#ourVision');
    const how = document.querySelector('#howItWorks');

    vision.onclick = ()=>{
        window.location.href ="menu1/";
    }

    how.onclick = ()=>{
        window.location.href ="menu2/";
    }












    reg.onclick = ()=>{
        window.location.href ="registeration/";
    }


    // title animation
    let i = 0;
    let a = 0
    let top = 0;
    animation = ()=>{
        i++;
        a = a + 0.02;
        title.style.top = i + '%';
        title.style.opacity = a;

        if(i > 45){
            clearInterval(titleAnimation)
        }
    }
    var titleAnimation = setInterval(animation,15)
 
    // nav buttons animation
    setTimeout(()=>{
        navButsAni = setInterval(navButAniCal,10);
    },600)

    let q = 0;
    navButAniCal = () =>{
        q = q + 0.01
        console.log(q);
        navButs.style.opacity = q;

        if(q > 1){
            clearInterval(navButsAni);
        }
    }
    var navButsAni; 





});