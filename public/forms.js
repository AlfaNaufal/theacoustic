const id_tiket = document.querySelector('#id_tiket');

const jenis_tiket = document.querySelectorAll('#jenis_tiket > option')
const option_nama = document.querySelectorAll('#nama_konser > option')
const option_jadwal = document.querySelectorAll('#jadwal > option')

let  prevIndex = 0

id_tiket.addEventListener('change', () => {
    const index = parseInt(id_tiket.value) - 1 

    jenis_tiket[prevIndex].removeAttribute('selected')
    option_nama[prevIndex].removeAttribute('selected')
    option_jadwal[prevIndex].removeAttribute('selected')

    
    jenis_tiket[index].setAttribute('selected','')
    option_nama[index].setAttribute('selected','')
    option_jadwal[index].setAttribute('selected','')

    prevIndex = index
})

