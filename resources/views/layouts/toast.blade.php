@if(session('toast'))
    <script>

        let sessionInfo = @json(session('toast'));

        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: sessionInfo.icon,
            title: sessionInfo.title
        })

    </script>
@endif
