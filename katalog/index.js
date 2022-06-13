$(document).ready(function () {
    $('#footer').load('../base/footer.php');
    $("#header").load("../base/header.php");
    $('#main').load('./kategori/semua.php');
});
$('#kopi').click(function () {
    $("#main").load("./kategori/kopi.php");
    $('#kopi').addClass('active-');
    $('#semua').removeClass('active-');
    $('#peralatan').removeClass('active-');
});
$('#semua').click(function () {
    $("#main").load("./kategori/semua.php");
    $('#semua').addClass('active-');
    $('#kopi').removeClass('active-');
    $('#peralatan').removeClass('active-');
});
$('#peralatan').click(function () {
    $("#main").load("./kategori/peralatan.php");
    $('#peralatan').addClass('active-');
    $('#kopi').removeClass('active-');
    $('#semua').removeClass('active-');
});

const modal = (src, name) => {
    num = 0;
    $('#counter').val(num);
    $('#name').html(name);
    $('.modal-custom').addClass('show');
    $('body').addClass('lockscroll');
    $('#img-modal').attr('src', src);
};

const onClose = () => {
    num = 0;
    $('.modal-custom').removeClass('show');
    $('body').removeClass('lockscroll');
};

// counter function
$('#increse').click(function () {
    num += 1;
    $('#counter').val(num);
});
$('#decres').click(function () {
    num -= 1;
    $('#counter').val(num);
});

var num;
