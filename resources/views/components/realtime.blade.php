<div>
    @auth
        <button class="btn btn-link nav-link py-2 px-0 px-lg-2 d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActiveUsers"
            aria-controls="offcanvasActiveUsers">
            <i class="bi bi-circle-fill me-2 text-success"></i>
            <i class="bi bi-people-fill"></i>
        </button>
        @push('modals')
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasActiveUsers"
                aria-labelledby="offcanvasActiveUsersLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasActiveUsersLabel">{{__('Active users')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" id="active-users">

                </div>
            </div>
        @endpush
        
        {{-- <script type="module">
            
            window.addEventListener('load', () => {
                Echo.join(`system`)
                .here((users) => {
                    users.forEach(user => {
                        console.log(user);
                        $('#active-users').append( `<div id="user-id-${user.id}"><button type="button" class="dropdown-item d-flex align-items-center"><img src="${user.photo }" alt="User photo" class="h-7 me-2">${user.name}</button></div>` );
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
        </script> --}}
    @endauth

</div>
