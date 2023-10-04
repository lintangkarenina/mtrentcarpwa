{{-- Sweet Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Add an event listener to the logout link
    document.getElementById('logout-link').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent the default link behavior

    // Display the SweetAlert confirmation dialog
    Swal.fire({
        title: 'Yakin?',
        text: 'Anda akan keluar dari akun Anda!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, keluar',

    }).then((result) => {
        // If the user clicks the "Yes, keluar" button, redirect to the logout URL
        if (result.isConfirmed) {
        window.location.href = "/logout";
        }
    });
    });
</script>