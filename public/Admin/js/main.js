
/** 城市英文名称 */
function getCityEnglish(cityName){
    var url = "/admin.php/mir-product/city-english";
    $.post(url,{"cityName":cityName},function(response){
        var res = $.parseJSON(response);
        $('#product_e').val(res.city_en);
    })
}
