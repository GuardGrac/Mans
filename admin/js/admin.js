function init(){
    $.post(
        "core.php",
        {
            "action" : "init"
        },
        showGoods
    );
}

function showGoods(data){
    data = JSON.parse(data);
    var out = '<select>';
    out+='<option data-id="0">Новый товар</option>';
    for(var id in data){
        out += `<option data-id="${id}">${data[id].name}</option>`;
    }
    out += `</select>`;
    $('.goods-out').html(out);
    $('.goods-out select').on('change', selectGoods);
}

function selectGoods(){
    var id = $('.goods-out select option:selected').attr('data-id');
    $.post(
        "core.php",
        {
            "action" : "selectOneGoods",
            "gid" : id
        },
        function(data){
            data = JSON.parse(data);
            $('#gname').val(data.name);
            $('#gcost').val(data.cost);
            $('#gdescr').val(data.description);
            $('#gorder').val(data.ord);
            $('#gimg').val(data.img);
            $('#gcolor').val(data.color);
            $('#gsize').val(data.size);
            $('#gstruct').val(data.structure);
            $('#gavail_quan').val(data.available_quantity);
            $('#gcateg').val(data.category);
            $('#gid').val(data.id);
        }
    );
}

function saveToDb(){
    var id = $('#gid').val();
    if(id!="") {
        $.post(
            "core.php",
            {
                "action" : "updateGoods",
                "id" : id,
                "gname" : $('#gname').val(),
                "gcost" : $('#gcost').val(),
                "gdescr" : $('#gdescr').val(),
                "gorder" : $('#gorder').val(),
                "gimg" : $('#gimg').val(),
                "gcolor" : $('#gcolor').val(),
                "gsize" : $('#gsize').val(),
                "gstruct" : $('#gstruct').val(),
                "gavail_quan" : $('#gavail_quan').val(),
                "gcateg" : $('#gcateg').val()

            },
            function(data) {
                if(data == 1){
                    alert('запись добавлена');
                    init(); 
                }
                else{
                    console.log(data);
                }
            }
        );
    }
    else{
        $.post(
            "core.php",
            {
                "action" : "newGoods",
                "id" : 0,
                "gname" : $('#gname').val(),
                "gcost" : $('#gcost').val(),
                "gdescr" : $('#gdescr').val(),
                "gorder" : $('#gorder').val(),
                "gimg" : $('#gimg').val(),
                "gcolor" : $('#gcolor').val(),
                "gsize" : $('#gsize').val(),
                "gstruct" : $('#gstruct').val(),
                "gavail_quan" : $('#gavail_quan').val(),
                "gcateg" : $('#gcateg').val()
            },
            function(data) {
                if(data == 1){
                    alert('запись добавлена');
                    init(); 
                }
                else{
                    console.log(data);
                }
            }
        );
    }
}

$(document).ready(function (){
      init();
      $('.add-to-db').on('click', saveToDb);
});

  