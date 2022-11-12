<!doctype html>
<html lang="en">
    <head>
        <title>lupa Password Sistem Sekolah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet" crossorigin="anonymous">

        <script scr="https://code.jquery.com/jquery-3.6.1.min.js"
             crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>

            <script scr="https://cdn.jsdelivr.net/gh/agoenxz2186/submitajax@develop/submit_ajax.js"
            ></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
    <body>
        <div class="container">
            <form method="post" action="<?=base_url('/login')?>">
            <input type="hidden" name="_method" value="patch" />
                <h3>Lupa Password Sisten Sekolah </h3>

                <div class="row">
                    <div class="form-froup col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="name@exampel.com">
                        </div>
                        <button type="submit" class="btn-primary mb-3">Login</button>
                    </div>
                </div>

            </form>
         </div>
    </body>
</html>

