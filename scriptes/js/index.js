window.addEventListener('load', () => {
    const title = document.getElementById('openingFotoTitle');
    const navButs = document.getElementById('navButtons');
    const reg = document.querySelector('#registerButton');
    const reg1 = document.querySelector('#registerButtonMenu');
    const vision = document.querySelector('#ourVision');
    const how = document.querySelector('#howItWorks');
    const contact = document.querySelector('#contact');

    vision.onclick = ()=>{
        window.location.href ="pages/menu1/";
    }

    how.onclick = ()=>{
        window.location.href ="pages/menu2/";
    }

    reg1.onclick = ()=>{
        window.location.href ="pages/registeration/";
    }

    reg.onclick = ()=>{
        window.location.href ="pages/registeration/";
    }

    contact.onclick = ()=>{
        window.location.href ="pages/contact/";
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
        navButs.style.opacity = q;

        if(q > 1){
            clearInterval(navButsAni);
        }
    }
    var navButsAni; 



    // nav button 'inschrijven' animation    
    // let num = 0;
    // setInterval(()=>{
    //     if(num == 0){
    //         $("#registerButtonMenu").animate({
    //             width: '170px'
    //         },"slow")
    //         num = 1;
    //     } else {
    //         $("#registerButtonMenu").animate({
    //             width: '150px'
    //         },"slow")
    //         num = 0;

    //     }
    // })


    //animation variables
    let a1 = $("#ourVision");
    let a2 = $("#ourVision");

    let a3 = $("#registerButtonMenu");
    let a4 = $("#registerButtonMenu");

    let a5 = $("#howItWorks");
    let a6 = $("#howItWorks");

    let a7 = $("#contact");
    let a8 = $("#contact");

    let a9 = $("#registerButton");
    let a10 = $("#registerButton");


    // other nav button animations
    $("#ourVision").mouseenter(()=>{
        $("#ourVision").animate({
            width: '180px'
        }, "fast");
        a1.clearQueue();

    })

    $("#ourVision").mouseleave(()=>{
        $("#ourVision").animate({
            width: '150px'
        }, "fast");
        a2.clearQueue();

    })



    $("#registerButtonMenu").mouseenter(()=>{
        $("#registerButtonMenu").animate({
            width: '200px'
        }, "fast");
        a3.clearQueue();

    })
    $("#registerButtonMenu").mouseleave(()=>{
        $("#registerButtonMenu").animate({
            width: '150px'
        }, "fast");
        a4.clearQueue();
  
    })


    $("#howItWorks").mouseenter(()=>{
        $("#howItWorks").animate({
            width: '240px'
        }, "fast");
        a5.clearQueue();

    })
    $("#howItWorks").mouseleave(()=>{
        $("#howItWorks").animate({
            width: '200px'
        }, "fast")
        a6.clearQueue();

    })



    $("#contact").mouseenter(()=>{
        $("#contact").animate({
            width: '170px'
        }, "fast")
        a7.clearQueue();

    })
    $("#contact").mouseleave(()=>{
        $("#contact").animate({
            width: '120px'
        }, "fast")
        a8.clearQueue();

    })

    //bottom registeration button
    $("#registerButton").mouseenter(()=>{
        $("#registerButton").animate({
            width: '700px'
        }, "fast")
        a9.clearQueue();

    })
    $("#registerButton").mouseleave(()=>{
        $("#registerButton").animate({
            width: '510px'
        }, "fast")
        a10.clearQueue();

    })








});