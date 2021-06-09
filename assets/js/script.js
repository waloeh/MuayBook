$(document).ready(function () {
    let kategory = "tes";
    let url = $('#url').val();
    if (url == '') { url = 0 }
    tampilkanSemuaData();
    function tampilkanSemuaData() {
        jQuery.ajax({
            type: 'post',
            url: 'http://localhost/BUKU/Home/getDataBuku/' + url,
            dataType: 'json',
            success: function (response) {
                // console.log(response);
                let data = response;
                $.each(data, function (i, buku) {
                    $('#daftar-buku').append('<div class="col-md-4 mb-3 mt-4"><div class="card"><img src="http://localhost/BUKU/assets/uploads/buku/'
                        + buku.gambar + '" class="card-img-top bg-light"><div class="card-body"><h5 class= "card-title" >'
                        + buku.judul + '</h5 ><p class="card-text">'
                        + buku.deskripsi + '</p><h5>' + buku.kategori + '</h5><a href="http://localhost/BUKU/Home/detailBuku/'
                        + buku.id + '" class="btn btn-primary">Lihat Detail</a></div ></div ></div>');
                });
            },
            error: function (xhr, ajaxOPtions, throwError) {
                alert(throwError);
            }
        })
    }

    $('.nav-link').on('click', function () {
        document.getElementById('text-cari').value = "";
        $('#daftar-buku').html('');
        $('.nav-link').removeClass('active');
        $('.navbar-collapse').removeClass('show');
        $(this).addClass('active');

        kategory = $(this).html();
        $('h1').html(kategory);

        if (kategory == 'Semua&nbsp;Kategory') {
            tampilkanSemuaData();
            return;
        }
        jQuery.ajax({
            type: 'post',
            url: 'http://localhost/BUKU/Home/getDataBukuByKategory/' + kategory.toLowerCase() + '/' + url,
            dataType: 'json',
            success: function (response) {
                // console.log(response);
                $.each(response, function (i, buku) {
                    $('#daftar-buku').append('<div class="col-md-4 mb-3 mt-4"><div class="card"><img src="http://localhost/BUKU/assets/uploads/buku/'
                        + buku.gambar + '" class="card-img-top bg-light"><div class="card-body"><h5 class= "card-title" >'
                        + buku.judul + '</h5 ><p class="card-text">'
                        + buku.deskripsi + '</p><h5>' + buku.kategori + '</h5><a href="http://localhost/BUKU/Home/detailBuku/' + buku.id + '" class="btn btn-primary">Lihat Detail</a></div ></div ></div>')
                })
            },
            error: function (xhr, ajaxOptions, throwError) {
                alert(throwError);
            }
        })
    })
    //ketika tombol enter di tekan jalankan tombol pencarian
    $('#text-cari').keyup(function (event) {
        if (event.keyCode == 13) {
            $('#tombol-cari').click();
        }
    })

    $('#tombol-cari').on('click', function () {
        $('#daftar-buku').html('');
        let textCari = document.getElementById('text-cari').value;
        if (kategory == 'Semua&nbsp;Kategory') { kategory = 'tes' }
        if (textCari == "") {
            location.href = 'http://localhost/BUKU';
        } else {
            jQuery.ajax({
                type: 'post',
                url: 'http://localhost/BUKU/Home/searchDataBuku/' + textCari + '/' + kategory,
                dataType: 'json',
                success: function (response) {
                    // console.log(response);
                    if (response.length == 0) {
                        $('#daftar-buku').append('<h1>Jonkkkk</h1>')
                    } else {
                        $.each(response, function (i, buku) {
                            $('#daftar-buku').append('<div class="col-md-4 mb-3 mt-4"><div class="card"><img src="http://localhost/BUKU/assets/uploads/buku/'
                                + buku.gambar + '" class="card-img-top bg-light"><div class="card-body"><h5 class= "card-title" >'
                                + buku.judul + '</h5 ><p class="card-text">'
                                + buku.deskripsi + '</p><h5>' + buku.kategori + '</h5><a href="http://localhost/BUKU/Home/detailBuku/' + buku.id + '" class="btn btn-primary">Lihat Detail</a></div ></div ></div>')
                        })
                    }
                },
                error: function (xhr, ajaxOptions, throwError) {
                    alert(throwError);
                }
            })
        }
    })
    // exampe
    // $('.nav-link').on('click', function () {
    //     $('.nav-link').removeClass('active');
    //     $(this).addClass('active');
    // })
})

