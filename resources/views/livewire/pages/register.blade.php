<div>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Get started</h1>
                            <p class="lead">
                                Start creating the best possible user experience for you customers.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form wire:submit='register'>
                                        <div class="mb-3">
                                            <label class="form-label">Full name</label>
                                            <input class="form-control form-control-lg" type="text" wire:model="name"
                                                placeholder="Enter your name" />

                                            @error('name')
                                                <p class="text-sm error-message mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="text"
                                                wire:model="email" placeholder="Enter your email" />

                                            @error('email')
                                                <p class="text-sm error-message mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password"
                                                wire:model="password" placeholder="Enter password" />

                                            @error('password')
                                                <p class="text-sm error-message mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        @error('registration_failed')
                                            <p class="text-sm error-message mt-1">{{ $message }}</p>
                                        @enderror

                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            Already have account? <a href="{{ route('login') }}" wire:navigate>Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
