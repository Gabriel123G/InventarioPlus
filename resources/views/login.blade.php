<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a class="nav-a" href="">Login</a></li>
                <li class="nav-a">|</li>
                <li><a class="nav-a" href="">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <section class="login-container">
                <form action="" method="post">
                    <div class="title">
                        <h3>Login</h3>
                    </div>
                    <div class="data-container">
                        <div class="data">
                            <label for="user">User</label> <br>
                            <input type="text" id="user" name="user" required>
                        </div>

                        <div class="data">
                            <label for="password">Password</label><br>
                            <input type="password" id="password" name="password" required>
                        </div>

                        <div class="button-send">
                            <button type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </section>

            <section class="signup-container">
                <form action="" method="post">
                    <div>
                        <h3>Sign Up</h3>
                    </div>

                    <div>
                        <div>
                            <label for="user">User</label>
                            <input type="text" id="user" name="user" required>
                        </div>

                        <div>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div>
                            <label for="password">Confirm Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>

                        <div>
                            <button type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>

</body>

</html>