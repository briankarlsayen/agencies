<div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">

                                    <form role="form">
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control p_input" placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                                                   wire:model="email">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control p_input" placeholder="Password"
                                                   wire:model="password">
                                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-check form-switch">
{{--                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked="">--}}
{{--                                            <label class="form-check-label" for="rememberMe">Remember me</label>--}}
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0"
                                                    wire:click="authenticate">Sign in</button>
                                        </div>
                                    </form>
                                </div>
{{--                                <div class="card-footer text-center pt-0 px-lg-2 px-1">--}}
{{--                                    <p class="mb-4 text-sm mx-auto">--}}
{{--                                        Don't have an account?--}}
{{--                                        <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                @if($photo_link)
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                     style="background-image:url('{{ Storage::url($photo_link) }}')"></div>
                                @else
                                    <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                         style="background-image:url('https://drive.google.com/uc?export=view&id=142Hnc7wzQPrOHZdyg5yWNhKagutizTeK')"></div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
</div>


