<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/furniture/search" method="post">
    @csrf
    <label for="name">Enter name book for search</label><br>
    <input type="text"  name="name" value=""><br>
    <button>Search</button>
</form>
</body>
</html>

