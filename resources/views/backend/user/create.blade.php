<h1>Create User</h1>

<style>
    input { margin: 10px; display: block; }
</style>
<form action="{{ route('backend.user.update') }}" method="post">
    @method('put')
    @csrf
    <input type="text" name="name" placeholder="Your name">
    <input type="email" name="email" placeholder="Your email">
    <input type="password" name="password" placeholder="Your password">
    <button type="submit">Register</button>
</form>