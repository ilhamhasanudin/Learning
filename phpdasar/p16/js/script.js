// Ambil elemen yang di butuh kan 
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// Tambahkan event ketika keyword di tulis 
keyword.addEventListener('keyup', function() {
    
    // buat object ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

        // Eksekusi ajax
        xhr.open('GET', 'ajax/tablemahasiswa.php?keyword=' + keyword.value, true);
        xhr.send();







});