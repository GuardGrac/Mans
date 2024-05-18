var catalog = {};

function init(){
    // $.getJSON("goods.json",goodsOut);
    $.post(
        "admin/core.php",
        {
            "action" : "loadProfile"
        },
        profileOut
    );
}

// Вывод профиля из базы
function profileOut(data){
    data = JSON.parse(data);
    catalog = data

    var out='';
    for(var key in data) {
        out +='<div class="prof-box">';
        out +=`<img class="prof-image rounded-[100px]" src="/images/${data[key].img}" alt="">`;
        out +=`<p class="usname">${data[key].username}</p>`;
        out +=`<div class="us-login">${data[key].login}</div>`;
        out +=`<div class="us-email">${data[key].email}</div>`;
        out +='</div>';  
    }
    $('.prof-out').html(out)
};

$(document).ready(() => {
    init();
})