<div class="row justify-content-center align-items-center" style="min-height: 72vh;">
    <div class="col-lg-6 col-xl-4">
        <div class="card shadow-sm mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Login</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=login">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </button>
                    <a href="?page=dashboard" class="btn btn-secondary ml-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
