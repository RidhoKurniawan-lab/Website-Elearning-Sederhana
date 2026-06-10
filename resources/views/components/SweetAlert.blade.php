<script type="module">
    document.addEventListener('DOMContentLoaded', function() {
        // Notifikasi Sukses
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "{{ session('success') }}",
                confirmButtonColor: '#3b82f6'
            });
        @endif

        // Notifikasi Error (Misal: Gagal Login)
        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Waduh!',
                text: "{{ session('error') }}",
                confirmButtonColor: '#ef4444'
            });
        @endif

        // Notifikasi Validasi (Jika ada error input)
        @if($errors->any())
            Swal.fire({
                icon: 'warning',
                title: 'Periksa Kembali',
                text: "{{ $errors->first() }}",
                confirmButtonColor: '#f59e0b'
            });
        @endif
    });

    window.confirmAction = function(options) {
        Swal.fire({
            title: options.title || 'Apakah Anda yakin?',
            text: options.text || "Tindakan ini tidak dapat dibatalkan!",
            icon: options.icon || 'warning',
            showCancelButton: true,
            confirmButtonColor: options.confirmColor || '#ef4444',
            cancelButtonColor: '#6b7280',
            confirmButtonText: options.confirmText || 'Ya, Lanjutkan!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed && options.formId) {
                document.getElementById(options.formId).submit();
            }
        });
    }
</script>
