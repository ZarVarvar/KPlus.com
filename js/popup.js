const popup_links = document.querySelectorAll('.popup_link');
const body = document.querySelector('bidy');
const lockPadding = document.querySelectorAll('.lock_padding');
let unlock = true;

if(popup_links.length > 0){
for (let index = 0; index < popup_links.length; index++){
    const popup_link = popup_links[index];
    popup_link.addEventListener("click", function(e){
        const popup_name = popup_link.getAttribute('href').replace('#','');
        const curent_popup = document.getElementById(popup_name);
        popupOpen(curent_popup);
        e.preventDefault();
    });
}
}
const popup_close_bt = document.querySelectorAll('.popup_close');
if(popup_close_bt.length > 0){
    for(let index = 0; index < popup_close_bt.length; index++){
        const el = popup_close_bt[index];
        el.addEventListener('click', function(e){
            popupClose(el.closest('.popup'))
            e.preventDefault();
        }
        );
    }
}

function popupOpen(curent_popup){
    if(curent_popup && unlock){
        const popup_active = document.querySelector('.popup.open');
        if(popup_active){
            popupClose(popup_active, false);
        }
        curent_popup.classList.add('open');
        curent_popup.addEventListener("cick", function(e){
            if(!e.target.closest('.popup')){
                popupClose(e.target.closest('.popuo_content'));
            }else{

            }
        });
    }
}

function popupClose(popup_active, doUnlock = true){
    if(unlock){
        popup_active.classList.remove('open');
    }
}