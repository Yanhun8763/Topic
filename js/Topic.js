// 菜單切換
$(function () {
    var $li = $('ul.tab-title li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();

    $li.click(function () {
        $($(this).find('a').attr('href')).fadeIn(1000).show().siblings('.tab-inner').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });
});

$(function () {
    var $li = $('ul.tab-titlev2 li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-innerv2').hide();

    $li.click(function () {
        $($(this).find('a').attr('href')).fadeIn(1000).show().siblings('.tab-innerv2').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });

});

$(function () {
    var $li = $('ul.tab-titlev3 li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-innerv3').hide();

    $li.click(function () {
        $($(this).find('a').attr('href')).fadeIn(1000).show().siblings('.tab-innerv3').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });
});

$(function () {
    var $li = $('ul.tab-titlev4 li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-innerv4').hide();

    $li.click(function () {
        $($(this).find('a').attr('href')).fadeIn(1000).show().siblings('.tab-innerv4').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });
});
// 以上菜單切換

// 訂位人名字監控
function mod() {
    var booking = document.getElementById("booking").value;
    document.getElementById("booker").textContent = booking;
}
// 以上訂位人名字監控