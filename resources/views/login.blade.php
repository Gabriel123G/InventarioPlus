<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    <title>login</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><button class="nav-button">Login</button></li>
                <li class="nav-button">|</li>
                <li><button class="nav-button">Sign Up</button></li>
            </ul>
        </nav>
    </header>
    <main class="main-login">
        <div class="container-login">
            <section id="login-container" class="login-container">
                <form class="form-login" action="{{ route('login.login') }}" method="POST" id="form-login">
                    <div class="title">
                        <h3>Login</h3>
                    </div>
                    <div class="data-container">
                        <div class="data">
                            <label for="user">User</label> <br>
                            <input type="text" id="user" name="user" required placeholder="user name">
                        </div>

                        <div class="data">
                            <label for="password">Password</label><br>
                            <input type="password" id="password" name="password" required placeholder="********">
                        </div>

                        <div class="button-send">
                            <button type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </section>

            <section id="signup-container" class="signup-container">
                <form id="form-signup" action="{{ route('login.signup') }}" method="post" class="form-signup">
                    <div class="title">
                        <h3>Sign Up</h3>
                    </div>
                    <div class="data-container">
                        <div class="data">
                            <label for="user">User</label> <br>
                            <input type="text" id="user-signup" name="user" required placeholder="user name">
                        </div>

                        <div class="data">
                            <label for="password">Password</label><br>
                            <input type="password" id="password" name="password" required placeholder="********">
                        </div>

                        <div class="data">
                            <label for="confirm-password">Confirm Password</label><br>
                            <input type="password" id="confirm-password" name="confirm-password" required
                                placeholder="********">
                        </div>

                        <div class="button-send">
                            <button type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>

</body>

</html>