<template>
    <div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign up</h2>
        <label for="inputAccountID" class="sr-only">アカウントID</label>
        <input type="email" id="inputAccountID" class="form-control" placeholder="account ID" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
</template>
