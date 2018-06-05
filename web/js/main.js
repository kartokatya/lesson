/**
 * Created by user on 02.06.2018.
 */
/*$('.btn-ord').on('click',function()){
    alert($(this).data('id'));
    $.ajax({
        url:"/cart/add",
        method:"POST",
        data:{id:$(this).data('id')}
    })
}*/

(function ($) {
    $(".item_add").on('click', function (ev) {
        ev.preventDefault();

        var $this = $(this),
            url = $this.data('url'),
            prodId = $this.data('prod-id'),
            quantity = $this.parent().find('.item_quantity').val();

        $.ajax(url, {
            type: 'POST',
            data: {
                prodId: prodId,
                quantity: quantity
            },
            success: function (data) {
                console.log(data);
            }
        });
        console.log(prodId);
        console.log(quantity);
    });
})(jQuery);