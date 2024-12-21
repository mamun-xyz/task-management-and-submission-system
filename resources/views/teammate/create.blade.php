<form method="POST" action="/teammates">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="employee_id">Employee ID</label>
    <input type="text" id="employee_id" name="employee_id" required>

    <label for="position">Position</label>
    <input type="text" id="position" name="position" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Create Teammate</button>
</form>
