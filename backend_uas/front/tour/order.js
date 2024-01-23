document.addEventListener('DOMContentLoaded', function () {
    const saveButton = document.querySelector('.btn-primary');
    const modalFirstName = document.getElementById('modalFirstName');
    const modalLastName = document.getElementById('modalLastName');
    const modalPhoneNumber = document.getElementById('modalPhoneNumber');
    const modalEmail = document.getElementById('modalEmail');
  
    saveButton.addEventListener('click', function () {
        const firstName = document.querySelector('.form-control[placeholder="Masukan Nama depan"]').value;
        const lastName = document.querySelector('.form-control[placeholder="Masukan Nama Belakang"]').value;
        const phoneNumber = document.querySelector('.form-control[placeholder="Masukan No Hp"]').value;
        const email = document.querySelector('.form-control[placeholder="Masukan Email"]').value;
  
        modalFirstName.textContent = firstName;
        modalLastName.textContent = lastName;
        modalPhoneNumber.textContent = phoneNumber;
        modalEmail.textContent = email;
    });
  });
  
  