<style>
    input { display: block; margin: 10px; }
</style>

{{ $errors }}

<form action="postForm" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter name">
    <input type="password" name="password" placeholder="Enter password">
    <button type="submit">Login</button>    
</form>