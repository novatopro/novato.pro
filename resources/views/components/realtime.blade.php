<div>
    @auth
        <li class="nav-item dropdown">
            <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center" type="button"
                aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Active users">
                <i class="bi bi-moon-stars-fill me-2"></i>
                <span class="d-lg-none ms-2">{{ __('Active users') }}</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" id="active-users">

            </ul>
        </li>

        <script type="module">
            
            window.addEventListener('load', () => {
                $('#active-users')
                Echo.join(`system`)
                .here((users) => {
                    users.forEach(user => {
                        console.log(user);
                        $('#active-users').append( `<li id="user-id-${user.id}"><button type="button" class="dropdown-item d-flex align-items-center"><i class="bi bi-circle-fill me-2 text-success"></i>${user.name}</button></li>` );
                    });
                })
                .joining((user) => {
                    console.log(user.name);
                })
                .leaving((user) => {
                    console.log(user.name);
                })
                .error((error) => {
                    console.error(error);
                });
            });
        </script>
    @endauth

</div>
