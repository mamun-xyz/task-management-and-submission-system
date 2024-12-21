<form method="POST" action="/register">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="employee_id">Employee ID</label>
    <input type="text" id="employee_id" name="employee_id" required><br><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Register</button>
</form>
