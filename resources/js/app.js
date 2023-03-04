require('./bootstrap');

export default {
    assignNasabahId() {
      console.log('idNasabah: ', document.getElementById('id_nasabah').value);
      document.getElementById('id_nasabah').value = document.getElementById('nasabah').value;
    }
}